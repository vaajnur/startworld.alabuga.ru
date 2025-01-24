<div class="popup">
    <div class="popup-overflow"></div>
    <!-- /.popup-overflow -->
    <div class="popup-wrap">
        <div class="popup-wrap_box">
            <div class="popup-top">
                <div class="ttl">
					<i>Заявка</i> Алабуга Старт
                </div>
                <a href="#" class="popup-close"></a>
            </div>
            <!-- /.popup-top -->
            <form action="" class="form-popup" id="join_form">
				<?=bitrix_sessid_post()?>
                <input type="hidden" name="url" value="<?=$APPLICATION->GetCurPageParam();?>">                
                <fieldset class="active">
                    <div class="name">
                        Прикрепите ваше фото<sup>*</sup>
                    </div>
                    <div class="desc">
                        <p>
                            Уважаемый кандидат, прикрепите, пожалуйста, свою фотографию размером 35х45 мм. 
                        </p>
                        <p>
                           Нам нужна фотография хорошего качества с белым пустым фоном, как в паспорте.
                        </p>
                    </div>
                    <div class="form-popup_file js-file">
                        <label for="file">
                            <div class="icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/icon/upload-icon.svg" alt="" class="mw-100 d-block">
                            </div>
                            Загрузить                 
                        </label>
                        <input type="file" name="upload" required="required" id="file">
                        <span>
                            1 файл размером до 20 МБ.
                        </span>
                    </div>
                    <!-- /.form-popup_file -->
                    <div class="form-popup_block">
                        <div class="form-popup_fl">
                            <div class="form-popup_gr w-50">
                                <label>
                                    Имя<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input name="name" required="required" type="text">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    Фамилия<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input name="lname" required="required" type="text">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    Возраст<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input name="age" required="required" type="number">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    Дата рождения<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input name="bdate" required="required" type="text" placeholder="MM/DD/YYYY" onclick="BX.calendar({node: this, field: this, bTime: false});">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    Гражданство<sup>*</sup>
                                </label>
                                <?
                                	$arCountries = array("Algeria", "Bangladesh", "Benin", "Botswana", "Brazil", "Burkina Faso", "Burundi", "Cameroon", "Central African Republic", "Chad", "Colombia", "Cote d'Ivoire", "Democratic Republic of Congo", "Egypt", "Ethiopia", "Gambia", "Ghana", "Guinea", "Guinea-Bissau", "India", "Jordan", "Kenya", "Madagascar", "Malawi", "Mali", "Morocco", "Mozambique", "Namibia", "Nepal", "Nigeria", "Pakistan", "Republic of Congo", "Rwanda", "Senegal", "Sierra Leone", "Somalia", "South Africa", "South Sudan", "Sri Lanka", "Tanzania", "Tunisia", "Uganda", "Zambia", "Madagascar", "Zimbabwe", "Malaysia", "Other", "Chile", "Mauritania", "Mauritius", "Mexico", "Morocco", "Gambia", "Myanmar", "Egypt", "Nepal", "Nicaragua", "Guatemala", "Niger", "Pakistan", "Panama", "Paraguay", "Peru", "Philippines", "Republic of Congo", "Guyana", "Honduras", "India", "Somalia", "Jamaica", "Jordan", "Equador", "Laos", "Thailand", "The Dominican Republic", "Tunisia", "Lesotho", "Uruguay", "Venezuela", "Vietnam", "Libiya", "El Salvador");
                                    sort(array_unique($arCountries));
								?>
                                <div class="form-popup_select">
                                	<input type="hidden" name="citizenship" required="required" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                Выбрать
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        Гражданство
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
                                    Пол<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" name="gender" required="required" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                Выбрать
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        Пол
                                                    </div>
                                                    <a href="#" class="close"></a>
                                                </div>
                                                <!-- /.select-fix_top -->
                                                <ul class="select_ul">
                                                    <li>Женский</li>
                                                    <li>Мужской</li>
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
                                   Ваш номер телефона<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input type="text" name="phone" required="required" placeholder="Пример: +123 (456) 789 01 23">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    Почта<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input type="text" name="email" required="required" placeholder="Пример: email@email.com">
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
                            Далее
                        </a>
                    </div>
                    <!-- /.form-popup_btn -->
                </fieldset>
                <fieldset>
					<?
                        $arExactly = array("Точно, да", "Я подумаю, и возможно, попробую", "Сомневаюсь");
                    ?>
                    <div class="name">
                       Оцените, насколько вас интересуют направления нашей программы.<sup>*</sup>
                    </div>
                    <div class="desc">
                        <p>
                            Пожалуйста, учтите, что предпочтения не гарантируют назначение конкретного направления.
                        </p>
                    </div>
                    <div class="form-popup_block">
                        <div class="form-popup_fl">
                            <div class="form-popup_gr w-50">
                                <label>
                                    АВТРОТРАНСПОРТНЫЙ ЦЕХ (Водитель)<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" required="required" name="logistics" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                Выбрать
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        Логистика
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
                                    Сервис и гостеприимство<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" required="required" name="srv_hosp" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                Выбрать
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        Сервис и гостеприимство
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
                                   Кейтеринг<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" required="required" name="catering" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                Выбрать
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                       Кейтеринг
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
                                    Оператор производства<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" required="required" name="prod_operator" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                Выбрать
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                       Оператор производства
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
                            	$arHow = array("Реклама в газетах/журналах","Реклама на радио","Интернет-реклама","Социальные сети","Ассоциация университетов/школ/студентов","Официальные государственные информационные ресурсы","Совет друга","Визит представителей программы в мою страну","Другое");
							?>
                            <label>
                                Как вы нашли нас?<sup>*</sup>
                            </label>
                            <div class="form-popup_select">
                                <input type="hidden" required="required" name="how_find" value="" />
                                <div class="select_wrap">
                                    <ul class="default_option js-def-opt">
                                        <li>
                                            Выбрать
                                        </li>
                                    </ul>
                                    <div class="select-fix">
                                        <div class="select-fix_overflow"></div>
                                        <!-- /.select-fix_overflow -->
                                        <div class="select-fix_wrap">
                                            <div class="select-fix_top">
                                                <div class="name">
                                                    Выбрать
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
								Если выберете «другое», пожалуйста, укажите источник<sup>*</sup>				
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
                                Расскажите нам о себе
                            </div>
                            <div class="desc">
                                Достижения, интересы, хобби, цели на будущее и все, чем вы считаете нужным поделиться.
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
                                Почему мы должны выбрать именно вас?
                            </div>
                            <div class="desc">
                                Расскажите, какие у вас есть преимущества перед другими кандидатами.
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
                                Ваш telegram<sup>*</sup>
                            </div>
                            <div class="desc">
                                <p>
                                    Вам необходимо скачать telegram с app store google, чтобы быть в курсе последних новостей и объявлений
                                </p>
                                <p>
                                    Присоединяйтесь к нашему каналу @alabugastart в telegram и будьте на связи.
                                </p>
                            </div>
                            <div class="group">
                                Скачать: <a href="https://apps.apple.com/ru/app/telegram-messenger/id686449807" target="_blank">App Store</a><a href="https://play.google.com/store/apps/details?id=org.telegram.messenger" target="_blank">Google Play</a>
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
                            Отправить
                        </button>
                        <a href="#" class="btn btn-black previous">
                            Назад
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