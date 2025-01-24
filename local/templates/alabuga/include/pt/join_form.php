<div class="popup">
    <div class="popup-overflow"></div>
    <!-- /.popup-overflow -->
    <div class="popup-wrap">
        <div class="popup-wrap_box">
            <div class="popup-top">
                <div class="ttl">
                    <i>Pedido de participação</i> Alabuga Start
                </div>
                <a href="#" class="popup-close"></a>
            </div>
            <!-- /.popup-top -->
            <form action="" class="form-popup" id="join_form">
				<?=bitrix_sessid_post()?>
                <input type="hidden" name="url" value="<?=$APPLICATION->GetCurPageParam();?>">                
                <fieldset class="active">
                    <div class="name">
                       ANEXE SUA FOTO<sup>*</sup>
                    </div>
                    <div class="desc">
                        <p>
                            Caro candidato, por favor, anexe sua foto de 35x45 mm.
                        </p>
                        <p>
                           precisamos de uma foto de boa qualidade com um fundo branco em branco, como no passaporte.
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
                            1 arquivo de até 20 MB
                        </span>
                    </div>
                    <!-- /.form-popup_file -->
                    <div class="form-popup_block">
                        <div class="form-popup_fl">
                            <div class="form-popup_gr w-50">
                                <label>
                                    NOME<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input name="name" required="required" type="text">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    SOBRENOME<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input name="lname" required="required" type="text">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    IDADE<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input name="age" required="required" type="number">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    DATA DE NASCIMENTO<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input name="bdate" required="required" type="text" placeholder="MM/DD/YYYY" onclick="BX.calendar({node: this, field: this, bTime: false});">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    CIDADANIA<sup>*</sup>
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
                                                SELECIONAR
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        CIDADANIA
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
                                                SELECIONAR
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
                                                    <li>feminino</li>
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
                                    O você NÚMERO DE TELEFONE<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input type="text" name="phone" required="required" placeholder="Exemplo: +123 (456) 789 01 23">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    E-mail<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input type="text" name="email" required="required" placeholder="Exemplo: email@email.com">
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
                            Adiante
                        </a>
                    </div>
                    <!-- /.form-popup_btn -->
                </fieldset>
                <fieldset>
					<?
                        $arExactly = array("Exactamente, sim", "Vou pensar e talvez tentar", "Duvido");
                    ?>
                    <div class="name">
                        Avalie o você interesse nas áreas do nosso programa<sup>*</sup>
                    </div>
                    <div class="desc">
                        <p>
                            Observe que as preferências não garantem um destino específico
                        </p>
                    </div>
                    <div class="form-popup_block">
                        <div class="form-popup_fl">
                            <div class="form-popup_gr w-50">
                                <label>
                                    OFICINA DE TRANSPORTE MOTORIZADO (Condutor)<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" required="required" name="logistics" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                SELECIONAR
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        LOGISTICA
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
                                    SERVIÇO E HOSPITALIDADE<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" required="required" name="srv_hosp" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                SELECIONAR
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        SERVIÇO E HOSPITALIDADE
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
                                    INDÚSTRIA DA RESTAURAÇÃO (SERVIÇO DE ALIMENTAÇÃO)<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" required="required" name="catering" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                SELECIONAR
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        INDÚSTRIA DA RESTAURAÇÃO (SERVIÇO DE ALIMENTAÇÃO)
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
                                    OPERADOR DE PRODUÇÃO<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" required="required" name="prod_operator" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                SELECIONAR
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        OPERADOR DE PRODUÇÃO
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
                            	$arHow = array("Publicidade em jornais/revistas","Publicidade na rádio","Publicidade na Internet","Redes sociais","Associação de universidades/escolas/estudantes","Recursos oficiais de informação governamental","Recursos oficiais de informação governamental","Visita de representantes do programa ao meu país","Outros");
							?>
                            <label>
                                COMO É QUE NOS ENCONTRARAM?<sup>*</sup>
                            </label>
                            <div class="form-popup_select">
                                <input type="hidden" required="required" name="how_find" value="" />
                                <div class="select_wrap">
                                    <ul class="default_option js-def-opt">
                                        <li>
                                            SELECIONAR
                                        </li>
                                    </ul>
                                    <div class="select-fix">
                                        <div class="select-fix_overflow"></div>
                                        <!-- /.select-fix_overflow -->
                                        <div class="select-fix_wrap">
                                            <div class="select-fix_top">
                                                <div class="name">
                                                    SELECIONAR
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
								Se selecionar "Outro", especifique a fonte<sup>*</sup>				
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
                                FALE-NOS SOBRE SI
                            </div>
                            <div class="desc">
                                Realizações, interesses, passatempos, objectivos futuros e tudo o mais que considere necessário partilhar
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
                               Por que devemos escolher você?
                            </div>
                            <div class="desc">
                               Diga-nos quais vantagens você tem em relação aos outros candidatos
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
                                você TELEGRAM<sup>*</sup>
                            </div>
                            <div class="desc">
                                <p>
                                    É necessário descarregar o Telegram a partir da loja de aplicações da Google para se manter a par das últimas notícias e anúncios
                                </p>
                                <p>
                                   Entre no nosso canal @AlabugaStart no Telegram e mantenha-se em contacto.
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