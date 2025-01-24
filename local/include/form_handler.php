<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Application;
$request = Application::getInstance()->getContext()->getRequest();
$post = $request->getPostList()->toArray(); 
$files = $request->getFileList()->toArray();

	if(!empty($post['sessid']) && check_bitrix_sessid())
	{
		// unset($post['sessid']);
		
		$ch = curl_init('https://webjack.ru/webhooks/http/293bd35d1ad9452c9d4ec002155135e4/');
		// $ch = curl_init('https://webjack.ru/webhooks/http/a837697b3e6b432c99b678920fb4b6e0/');

		$cfile = false;
		if(is_array($files['upload']) && $files['upload']['error'] == 0)
		{
			if($files['upload']['size'] <= pow(10, 7)*2 && in_array($files['upload']['type'], array('image/jpeg','image/png','image/gif')))
			{			
				$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/local/tmp/';
				$uploadfile = $uploaddir . basename($files['upload']['name']);
				if (move_uploaded_file($files['upload']['tmp_name'], $uploadfile)) 
					$cfile = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/local/tmp/' . basename($files['upload']['name']); 
					//$cfile = new CURLFile($uploadfile, $files['upload']['type'], basename($files['upload']['name']));
			}
		}

		if($post['url']){
			$queryParams = explodeUrlQueryParams($post['url']);
			if($queryParams['query_params'])
				$post = array_merge($post, $queryParams['query_params']);
		}

		$data = array();
		foreach($post as $k => $val)
		{
			$data[$k] = strip_tags($val);
		}
		if($data['gender']=='Female') $data['is_female'] = 1;
		if($cfile !== false) $data['photo'] = $cfile;

		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HEADER, false);
		$html = curl_exec($ch);
		if($html === false) $err = curl_error($ch);
		curl_close($ch);	
		//if($cfile !== false) unlink($uploadfile);
		if($html === false)
			echo 'err: '.$err;
		else
			echo 'success';
	}
?>