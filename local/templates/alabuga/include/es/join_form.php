<div class="popup">
    <div class="popup-overflow"></div>
    <!-- /.popup-overflow -->
    <div class="popup-wrap">
        <div class="popup-wrap_box">
            <div class="popup-top">
                <div class="ttl">
                     <i>Solicitud</i> Alabuga Start
                </div>
                <a href="#" class="popup-close"></a>
            </div>
            <!-- /.popup-top -->
            <form action="" class="form-popup" id="join_form">
				<?=bitrix_sessid_post()?>
                <input type="hidden" name="url" value="<?=$APPLICATION->GetCurPageParam();?>">                
                <fieldset class="active">
                    <div class="name">
                       ADJUNTE SU FOTO<sup>*</sup>
                    </div>
                    <div class="desc">
                        <p>
                            Estimado candidato, adjunte su foto de 35x45 mm.
                        </p>
                        <p>
                           necesitamos una foto de buena calidad con un fondo blanco en blanco, como en un pasaporte.
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
                            1 archivo de hasta 20 MB
                        </span>
                    </div>
                    <!-- /.form-popup_file -->
                    <div class="form-popup_block">
                        <div class="form-popup_fl">
                            <div class="form-popup_gr w-50">
                                <label>
                                    NOMBRE<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input name="name" required="required" type="text">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    APELLIDO<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input name="lname" required="required" type="text">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    EDAD<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input name="age" required="required" type="number">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    FECHA DE NACIMIENTO<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input name="bdate" required="required" type="text" placeholder="MM/DD/YYYY" onclick="BX.calendar({node: this, field: this, bTime: false});">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    NACIONALIDAD<sup>*</sup>
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
                                                ELEGIR
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        NACIONALIDAD
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
                                    SEXO<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" name="gender" required="required" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                ELEGIR
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        SEXO
                                                    </div>
                                                    <a href="#" class="close"></a>
                                                </div>
                                                <!-- /.select-fix_top -->
                                                <ul class="select_ul">
                                                    <li>femenino</li>
                                                    <li>masculino</li>
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
                                    SU NÚMERO DE TELÉFONO<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input type="text" name="phone" required="required" placeholder="Ejemplo: +123 (456) 789 01 23">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    E-mail<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input type="text" name="email" required="required" placeholder="Ejemplo: email@email.com">
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
                            Adelante
                        </a>
                    </div>
                    <!-- /.form-popup_btn -->
                </fieldset>
                <fieldset>
					<?
                        $arExactly = array("Claro que sí", "Lo pensaré y quizá lo intente", "Lo dudo");
                    ?>
                    <div class="name">
                        Evalúe su interés en las áreas de nuestros programas<sup>*</sup>
                    </div>
                    <div class="desc">
                        <p>
                            Tenga en cuenta que las preferencias no garantizan un destino concreto.
                        </p>
                    </div>
                    <div class="form-popup_block">
                        <div class="form-popup_fl">
                            <div class="form-popup_gr w-50">
                                <label>
                                    TALLER DE VEHÍCULOS (Chófer)<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" required="required" name="logistics" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                ELEGIR
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        LOGÍSTICA
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
                                    SERVICIO & HOSPITALIDAD<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" required="required" name="srv_hosp" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                ELEGIR
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        SERVICIO & HOSPITALIDAD
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
                                    INDUSTRIA DE LA RESTAURACIÓN (INDUSTRIA ALIMENTARIA)<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" required="required" name="catering" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                ELEGIR
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        INDUSTRIA DE LA RESTAURACIÓN (INDUSTRIA ALIMENTARIA)
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
                                    OPERADOR DE PRODUCCIÓN<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" required="required" name="prod_operator" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                ELEGIR
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        OPERADOR DE PRODUCCIÓN
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
                            	$arHow = array("Publicidad en periódicos y revistas","Publicidad en radio","Publicidad en Internet","Redes sociales","Universidad/colegio/asociaciones de estudiantes","Recursos oficiales de información gubernamental","Consejo de amigos","Visita de representantes del programa a mi país","Otros medios de comunicación");
							?>
                            <label>
                               ¿CÓMO NOS ENCONTRASTE?<sup>*</sup>
                            </label>
                            <div class="form-popup_select">
                                <input type="hidden" required="required" name="how_find" value="" />
                                <div class="select_wrap">
                                    <ul class="default_option js-def-opt">
                                        <li>
                                            ELEGIR
                                        </li>
                                    </ul>
                                    <div class="select-fix">
                                        <div class="select-fix_overflow"></div>
                                        <!-- /.select-fix_overflow -->
                                        <div class="select-fix_wrap">
                                            <div class="select-fix_top">
                                                <div class="name">
                                                    ELEGIR
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
								Si selecciona «Otros», especifique la fuente<sup>*</sup>				
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
                                CUÉNTANOS SOBRE TI
                            </div>
                            <div class="desc">
                               Logros, intereses, pasatiempos, metas para el futuro y cualquier cosa que creas que necesitas compartir
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
                               ¿Por qué deberíamos elegirte?
                            </div>
                            <div class="desc">
                                Cuéntanos Cuáles son tus ventajas sobre otros candidatos
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
                                SU TELEGRAM<sup>*</sup>
                            </div>
                            <div class="desc">
                                <p>
                                   Debe descargar Telegram desde Google App Store para mantenerse al día con las últimas noticias y anuncios.
                                </p>
                                <p>
                                   Únete a nuestro canal @AlabugaStart en Telegram y mantente conectado.
                                </p>
                            </div>
                            <div class="group">
                                <a href="https://apps.apple.com/ru/app/telegram-messenger/id686449807" target="_blank">App Store</a><a href="https://play.google.com/store/apps/details?id=org.telegram.messenger" target="_blank">Google Play</a>
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