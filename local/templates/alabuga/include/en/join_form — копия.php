<div class="popup">
    <div class="popup-overflow"></div>
    <!-- /.popup-overflow -->
    <div class="popup-wrap">
        <div class="popup-wrap_box">
            <div class="popup-top">
                <div class="ttl">
                    Start Program <i>application</i>
                </div>
                <a href="#" class="popup-close"></a>
            </div>
            <!-- /.popup-top -->
            <form action="" class="form-popup" id="join_form">
				<?=bitrix_sessid_post()?>
                <input type="hidden" name="url" value="<?=$APPLICATION->GetCurPageParam();?>">                
                <fieldset class="active">
                    <div class="name">
                        Attach your photo<sup>*</sup>
                    </div>
                    <div class="desc">
                        <p>
                            Dear candidate, please attach your photo sized 35x45 mm, please.
                        </p>
                        <p>
                            We need a good quality photo with white empty background like in your passport.
                        </p>
                    </div>
                    <div class="form-popup_file js-file">
                        <label for="file">
                            <div class="icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/icon/upload-icon.svg" alt="" class="mw-100 d-block">
                            </div>
                            Upload
                        </label>
                        <input type="file" name="upload" required="required" id="file">
                        <span>
                            1 file up to 20 MB in size
                        </span>
                    </div>
                    <!-- /.form-popup_file -->
                    <div class="form-popup_block">
                        <div class="form-popup_fl">
                            <div class="form-popup_gr w-50">
                                <label>
                                    Name<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input name="name" required="required" type="text">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    Last name<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input name="lname" required="required" type="text">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    Age<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input name="age" required="required" type="number">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    Date of birth<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input name="bdate" required="required" type="text" placeholder="MM/DD/YYYY" onclick="BX.calendar({node: this, field: this, bTime: false});">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    Citizenship<sup>*</sup>
                                </label>
                                <?
                                	$arCountries = array("Algeria", "Bangladesh", "Benin", "Botswana", "Brazil", "Burkina Faso", "Burundi", "Cameroon", "Central African Republic", "Chad", "Colombia", "Cote d'Ivoire", "Democratic Republic of Congo", "Egypt", "Ethiopia", "Gambia", "Ghana", "Guinea", "Guinea-Bissau", "India", "Jordan", "Kenya", "Madagascar", "Malawi", "Mali", "Morocco", "Mozambique", "Namibia", "Nepal", "Nigeria", "Pakistan", "Republic of Congo", "Rwanda", "Senegal", "Sierra Leone", "Somalia", "South Africa", "South Sudan", "Sri Lanka", "Tanzania", "Tunisia", "Uganda", "Zambia", "Madagascar", "Zimbabwe", "Malaysia", "Other", "Chile", "Mauritania", "Mauritius", "Mexico", "Morocco", "Gambia", "Myanmar", "Nepal", "Nicaragua", "Guatemala", "Niger", "Pakistan", "Panama", "Paraguay", "Peru", "Philippines", "Republic of Congo", "Guyana", "Honduras", "India", "Somalia", "Jamaica", "Jordan", "Equador", "Laos", "Thailand", "The Dominican Republic", "Tunisia", "Lesotho", "Uruguay", "Venezuela", "Vietnam", "Libiya", "El Salvador");
                                    sort(array_unique($arCountries));
								?>
                                <div class="form-popup_select">
                                	<input type="hidden" name="citizenship" required="required" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                Choose
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        Citizenship
                                                    </div>
                                                    <a href="#" class="close"></a>
                                                </div>
                                                <!-- /.select-fix_top -->
                                                <ul class="select_ul">
                                                	<? foreach($arCountries as $country): ?>
                                                    <li><?=$country?></li>
                                                    <? endforeach ?>
                                                </ul>
                                            </div>
                                            <!-- /.select-fix_wrap -->
                                        </div>
                                        <!-- /.select-fix -->
                                    </div>
                                </div>
                                <!-- /.form-popup_select -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    Gender<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" name="gender" required="required" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                Choose
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        Gender
                                                    </div>
                                                    <a href="#" class="close"></a>
                                                </div>
                                                <!-- /.select-fix_top -->
                                                <ul class="select_ul">
                                                    <li>Female</li>
                                                    <li>Male</li>
                                                </ul>
                                            </div>
                                            <!-- /.select-fix_wrap -->
                                        </div>
                                        <!-- /.select-fix -->
                                    </div>
                                </div>
                                <!-- /.form-popup_select -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    Your mobile phone<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input type="text" name="phone" required="required" placeholder="Example: +123 (456) 789 01 23">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    E-mail<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input type="text" name="email" required="required" placeholder="Example: email@email.com">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                        </div>
                        <!-- /.form-popup_fl -->
                    </div>
                    <!-- /.form-popup_block -->
                    <div class="form-popup_btn">
                        <a href="#" class="btn btn-curr next">
                            Next
                        </a>
                    </div>
                    <!-- /.form-popup_btn -->
                </fieldset>
                <fieldset>
					<?
                        $arExactly = array("Exactly, yes", "Think, i could try", "In doubt");
                    ?>
                    <div class="name">
                        Rate how interested you are in our programme fields<sup>*</sup>
                    </div>
                    <div class="desc">
                        <p>
                            Please note, that your preference does not guarantee the field assigned to you
                        </p>
                    </div>
                    <div class="form-popup_block">
                        <div class="form-popup_fl">
                            <div class="form-popup_gr w-50">
                                <label>
                                    Road transport shop (driver)<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" required="required" name="logistics" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                Choose
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        Logistics
                                                    </div>
                                                    <a href="#" class="close"></a>
                                                </div>
                                                <!-- /.select-fix_top -->
                                                <ul class="select_ul">
                                                	<? foreach($arExactly as $item): ?>
                                                    <li><?=$item?></li>
                                                    <? endforeach ?>
                                                </ul>
                                            </div>
                                            <!-- /.select-fix_wrap -->
                                        </div>
                                        <!-- /.select-fix -->
                                    </div>
                                </div>
                                <!-- /.form-popup_select -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    Service & hospitality<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" required="required" name="srv_hosp" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                Choose
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        Service & hospitality
                                                    </div>
                                                    <a href="#" class="close"></a>
                                                </div>
                                                <!-- /.select-fix_top -->
                                                <ul class="select_ul">
                                                	<? foreach($arExactly as $item): ?>
                                                    <li><?=$item?></li>
                                                    <? endforeach ?>
                                                </ul>
                                            </div>
                                            <!-- /.select-fix_wrap -->
                                        </div>
                                        <!-- /.select-fix -->
                                    </div>
                                </div>
                                <!-- /.form-popup_select -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    Catering industry (food service)<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" required="required" name="catering" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                Choose
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        Catering industry (food service)
                                                    </div>
                                                    <a href="#" class="close"></a>
                                                </div>
                                                <!-- /.select-fix_top -->
                                                <ul class="select_ul">
                                                	<? foreach($arExactly as $item): ?>
                                                    <li><?=$item?></li>
                                                    <? endforeach ?>
                                                </ul>
                                            </div>
                                            <!-- /.select-fix_wrap -->
                                        </div>
                                        <!-- /.select-fix -->
                                    </div>
                                </div>
                                <!-- /.form-popup_select -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    Production operator<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" required="required" name="prod_operator" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                Choose
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        Production operator
                                                    </div>
                                                    <a href="#" class="close"></a>
                                                </div>
                                                <!-- /.select-fix_top -->
                                                <ul class="select_ul">
                                                	<? foreach($arExactly as $item): ?>
                                                    <li><?=$item?></li>
                                                    <? endforeach ?>
                                                </ul>
                                            </div>
                                            <!-- /.select-fix_wrap -->
                                        </div>
                                        <!-- /.select-fix -->
                                    </div>
                                </div>
                                <!-- /.form-popup_select -->
                            </div>
                            <!-- /.form-popup_gr -->
                        </div>
                        <!-- /.form-popup_fl -->
                    </div>
                    <!-- /.form-popup_block -->
                    <div class="form-popup_box">
                        <div class="form-popup_gr">
                        	<?
                            	$arHow = array("Newspaper/magazine/journal advertisments","Radio advertisments","TV advertisments in the Internet","Social Networks","University/School/Students Association","Official goverment information resources","Friend's advice","Visit on the programme representatives to my country","Discord","Other");
							?>
                            <label>
                                How did you find us?<sup>*</sup>
                            </label>
                            <div class="form-popup_select">
                                <input type="hidden" required="required" name="how_find" value="" />
                                <div class="select_wrap">
                                    <ul class="default_option js-def-opt">
                                        <li>
                                            Choose
                                        </li>
                                    </ul>
                                    <div class="select-fix">
                                        <div class="select-fix_overflow"></div>
                                        <!-- /.select-fix_overflow -->
                                        <div class="select-fix_wrap">
                                            <div class="select-fix_top">
                                                <div class="name">
                                                    Choose
                                                </div>
                                                <a href="#" class="close"></a>
                                            </div>
                                            <!-- /.select-fix_top -->
                                            <ul class="select_ul">
												<? foreach($arHow as $item): ?>
                                                <li><?=$item?></li>
                                                <? endforeach ?>
                                            </ul>
                                        </div>
                                        <!-- /.select-fix_wrap -->
                                    </div>
                                    <!-- /.select-fix -->
                                </div>
                            </div>
                            <!-- /.form-popup_select -->
                        </div>
                        <!-- /.form-popup_gr -->
                        <div class="box" id="if_other" style="display: none;">
                            <div class="desc">                               	
								If you choose "Other", please, text where from<sup>*</sup>				
                            </div>
                            <div class="form-popup_gr">
                                <div class="form-popup_inp">
                                    <textarea name="how_find_other"></textarea>
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                        </div>
                        
                        <div class="box">
                            <div class="name">
                                Tell us about yourself
                            </div>
                            <div class="desc">
                                Achievements, interests, hobbies, goals, for the future and everything you consider necessary to share
                            </div>
                            <div class="form-popup_gr">
                                <div class="form-popup_inp">
                                    <textarea name="about_yourself"></textarea>
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                        </div>

                        <div class="box">
                            <div class="name">
                                Why should we select you?
                            </div>
                            <div class="desc">
                                Tell us what advantages you have over other candidates
                            </div>
                            <div class="form-popup_gr">
                                <div class="form-popup_inp">
                                    <textarea name="why_should"></textarea>
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                        </div>

                        <div class="box">
                            <div class="name">
                                Your telegram<sup>*</sup>
                            </div>
                            <div class="desc">
                                <p>
                                    telegram is required to stay informed about latest news and anouncements.
                                </p>
                                <p>
                                    Join our channel @AlabugaStart in Telegram and keep intouch.
                                </p>
                            </div>
                            <div class="group">
                                Download: <a href="https://apps.apple.com/ru/app/telegram-messenger/id686449807" target="_blank">App Store</a><a href="https://play.google.com/store/apps/details?id=org.telegram.messenger" target="_blank">Google Play</a>
                            </div>
                            <div class="form-popup_gr">
                                <div class="form-popup_inp">
                                    <input type="text" required="required" name="telegram">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                        </div>
                    </div>
                    <!-- /.form-popup_box -->
                    <div class="form-popup_btn">
                        <button class="btn btn-curr" type="submit">
                            Send
                        </button>
                        <a href="#" class="btn btn-black previous">
                            Back
                        </a>
                    </div>
                    <!-- /.form-popup_btn -->
                </fieldset>
            </form>
            <!-- /.form-popup -->
        </div>
        <!-- /.popup-wrap_box -->
    </div>
    <!-- /.popup-wrap -->
</div>
<!-- /.popup -->