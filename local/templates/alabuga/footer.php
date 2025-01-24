<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;
?>
				
			</main>
			<!-- /.main -->
			
			<footer class="footer">
				<div class="page__wrap">
					<div class="footer-top">
						<div class="d-flex flex-wrap justify-content-between">
							<div class="bx">
								<div class="coopyright">
									&copy;ALABUGA START. <?=date('Y')?>
								</div>
							</div>
              <div class="bx">
                <div class="create">
                  <a title="Политика конфиденциальности" href="local/templates/alabuga/policy.html" target="_blank">
                     <?=Loc::GetMessage('PRIVACY');?>
                  </a>
                </div>
              </div>
							<div class="bx">
								<div class="create">
									<a title="Site created in Studio 512" href="https://ws512.ru/" target="_blank">
										Site created in <span>Studio 512</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /.footer-top -->
				</div>
			</footer>
			<!-- /.footer -->
		</div>
		<!-- /.page -->
        <?$APPLICATION->IncludeFile(
            SITE_TEMPLATE_PATH."/include/".LNG_ID."/join_form.php",
            Array(),
            Array("MODE"=>"html", "NAME" => "Форма", "TEMPLATE" => "head_bnr.php")
        );?>
</body>
</html>
