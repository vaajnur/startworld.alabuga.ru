<?		
	class CurrencyLoad
	{
		public $hl = array();
		private $entity_data_class;
		function __construct(){	
			Bitrix\Main\Loader::includeModule("highloadblock"); 
			$hlblock = Bitrix\Highloadblock\HighloadBlockTable::getById(1)->fetch();
			$entity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlblock);
			$this->entity_data_class = $entity->getDataClass(); 	
			$rsData = $this->entity_data_class::getList(array(
			   "select" => array("*"),
			   "order" => array("ID" => "ASC")
			));	
			while($arData = $rsData->Fetch()){
				$this->hl[$arData['UF_XML_ID']] = $arData; 
			}	
		}
		private function getXML()
		{
			$url = 'http://www.cbr.ru/scripts/XML_daily.asp?date_req='.date('d/m/Y');
			$xmlstring = file_get_contents($url);
			$xml = simplexml_load_string($xmlstring, "SimpleXMLElement", LIBXML_NOCDATA);
			$json = json_encode($xml);
			$list = json_decode($json,TRUE);
			return $list;
		}
		public function check()
		{			
			$list = $this->getXML();
			if(!is_array($list)) die();			
			Bitrix\Main\Loader::includeModule("highloadblock"); 
			$hlblock = Bitrix\Highloadblock\HighloadBlockTable::getById(1)->fetch();
			$entity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlblock);
			
			foreach($this->hl as $cur => $currency)
			{
				$result = array_filter($list['Valute'], function($k) use($cur) {
					return $k['CharCode'] === $cur;
				});
				if(!is_array($result)) continue;
				$target = current($result);
				$price = str_replace(',','.',$target['Value']);
				if(!$currency['UF_PRICE'] || $currency['UF_PRICE']!=$price)
				{
					$this->entity_data_class = $entity->getDataClass(); 
					$result = $this->entity_data_class::update($currency['ID'], array(
					  'UF_PRICE' => $price
					));
				}
			}
			$rsData = $this->entity_data_class::getList(array(
			   "select" => array("*"),
			   "order" => array("ID" => "ASC")
			));	
			while($arData = $rsData->Fetch()){
				$this->hl[$arData['UF_XML_ID']] = $arData; 
			}			
		}
		public function exchange($price, $cur)
		{			
			$numPrice = number_format((int)str_replace(' ','',$price),0,'','');
			$result = intval($numPrice/$this->hl[$cur]['UF_PRICE']);
			//$result = ceil($result/1000) * 1000;
			return $result;
		}
	}