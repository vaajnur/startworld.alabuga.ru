<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
				
			</main>
			<!-- /.main -->
			
			<footer class="footer">
				<div class="page__wrap">
					<div class="footer-top">
						<div class="d-flex flex-wrap justify-content-between">
							<div class="bx">
								<div class="coopyright">
	                                © ألابوغا ستارت. <?=date('Y')?>
								</div>
							</div>
							<div class="bx">
								<div class="create">
									<a href="https://ws512.ru/" target="_blank">
										تم إنشاء الموقع في <span>Studio 512</span>
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
            SITE_TEMPLATE_PATH."/include/ar/join_form.php",
            Array(),
            Array("MODE"=>"html", "NAME" => "Форма", "TEMPLATE" => "head_bnr.php")
        );?>
</body>
</html>