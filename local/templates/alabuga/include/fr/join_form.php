<div class="popup">
    <div class="popup-overflow"></div>
    <!-- /.popup-overflow -->
    <div class="popup-wrap">
        <div class="popup-wrap_box">
            <div class="popup-top">
                <div class="ttl"> 
                    <i>Demande</i>d’Alabuga Start
                </div>
                <a href="#" class="popup-close"></a>
            </div>
            <!-- /.popup-top -->
            <form action="" class="form-popup" id="join_form">
				<?=bitrix_sessid_post()?>
                <input type="hidden" name="url" value="<?=$APPLICATION->GetCurPageParam();?>">                
                <fieldset class="active">
                    <div class="name">
                        JOIGNEZ VOTRE PHOTO<sup>*</sup>
                    </div>
                    <div class="desc">
                        <p>
                            Cher candidat, s’il vous plaît, joignez votre photo en format 35x45 mm. 
                        </p>
                        <p>
                            On a besoin d’une photographie de bonne qualité avec un fond blanc vide, comme dans un passeport.
                        </p>
                    </div>
                    <div class="form-popup_file js-file">
                        <label for="file">
                            <div class="icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/icon/upload-icon.svg" alt="" class="mw-100 d-block">
                            </div>
                            TÉLÉCHARGER 
                        </label>
                        <input type="file" name="upload" required="required" id="file">
                        <span>
                           1 fichier de taille jusqu’à 20 Mo
                        </span>
                    </div>
                    <!-- /.form-popup_file -->
                    <div class="form-popup_block">
                        <div class="form-popup_fl">
                            <div class="form-popup_gr w-50">
                                <label>
                                    PRÉNOM<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input name="name" required="required" type="text">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    NOM<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input name="lname" required="required" type="text">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    ÂGE<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input name="age" required="required" type="number">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    DATE DE NAISSANCE<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input name="bdate" required="required" type="text" placeholder="MM/DD/YYYY" onclick="BX.calendar({node: this, field: this, bTime: false});">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    CITOYENNETÉ<sup>*</sup>
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
                                                CHOISIR
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        CITOYENNETÉ
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
                                    GENRE<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" name="gender" required="required" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                CHOISIR
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        GENRE
                                                    </div>
                                                    <a href="#" class="close"></a>
                                                </div>
                                                <!-- /.select-fix_top -->
                                                <ul class="select_ul">
                                                    <li>féminin</li>
                                                    <li>masculin </li>
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
                                    VOTRE NUMÉRO DE TÉLÉPHONE<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input type="text" name="phone" required="required" placeholder="+123 (456) 789 01 23">
                                </div>
                                <!-- /.form-popup_inp -->
                            </div>
                            <!-- /.form-popup_gr -->
                            <div class="form-popup_gr w-50">
                                <label>
                                    E-mail<sup>*</sup>
                                </label>
                                <div class="form-popup_inp">
                                    <input type="text" name="email" required="required" placeholder="email@email.com">
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
                            Plus loin
                        </a>
                    </div>
                    <!-- /.form-popup_btn -->
                </fieldset>
                <fieldset>
					<?
                        $arExactly = array("Exactement oui", "Je vais y réfléchir et peut-être essayer", "Je doute");
                    ?>
                    <div class="name">
                       Évaluez le degré d'intérêt que vous portez aux domaines de notre programme<sup>*</sup>
                    </div>
                    <div class="desc">
                        <p>
                            Veuillez noter que les préférences ne garantissent pas l'attribution à un domaine particulier
                        </p>
                    </div>
                    <div class="form-popup_block">
                        <div class="form-popup_fl">
                            <div class="form-popup_gr w-50">
                                <label>
                                    ATELIER DE TRANSPORT AUTOMOBILE (Conducteur)<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" required="required" name="logistics" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                CHOISIR
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        LOGISTIQUE
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
                                   SERVICE & HOSPITALITÉ<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" required="required" name="srv_hosp" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                CHOISIR
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        SERVICE & HOSPITALITÉ
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
                                    SERVICE TRAITEUR (INDUSTRIE DE LA RESTAURATION)<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" required="required" name="catering" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                CHOISIR
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        SERVICE TRAITEUR (INDUSTRIE DE LA RESTAURATION)
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
                                    OPÉRATEUR DE PRODUCTION<sup>*</sup>
                                </label>
                                <div class="form-popup_select">
                                	<input type="hidden" required="required" name="prod_operator" value="" />
                                    <div class="select_wrap">
                                        <ul class="default_option js-def-opt">
                                            <li>
                                                CHOISIR
                                            </li>
                                        </ul>
                                        <div class="select-fix">
                                            <div class="select-fix_overflow"></div>
                                            <!-- /.select-fix_overflow -->
                                            <div class="select-fix_wrap">
                                                <div class="select-fix_top">
                                                    <div class="name">
                                                        OPÉRATEUR DE PRODUCTION
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
                            	$arHow = array("Publicité dans les revues/journaux ","Publicité à la radio","ublicité sur Internet","Réseaux sociaux","Association des universités/écoles/étudiants ","Sources d'information officielles du gouvernement ","Conseil d’un(e) ami(e)","Visite des représentants du programme dans mon pays","Autre");
							?>
                            <label>
                               COMMENT VOUS NOUS AVEZ TROUVÉS ?<sup>*</sup>
                            </label>
                            <div class="form-popup_select">
                                <input type="hidden" required="required" name="how_find" value="" />
                                <div class="select_wrap">
                                    <ul class="default_option js-def-opt">
                                        <li>
                                            CHOISIR
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
								Si vous choisissez «Autre», s’il vous plaît, indiquez la source<sup>*</sup>				
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
                               Parlez-nous de vous
                            </div>
                            <div class="desc">
                                Résultats, intérêts, hobbies, objectifs pour l’avenir et tout ce que vous penser nécessaire à partager
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
                                Pourquoi doit- on vous choisir ? 
                            </div>
                            <div class="desc">
                               Parlez de vos avantages par rapport aux autres candidats
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
                                VOTRE TELEGRAM<sup>*</sup>
                            </div>
                            <div class="desc">
                                <p>
                                    Vous êtes prié de télécharger Telegram depuis app store Google pour être au courant des dernières nouvelles et annonces.
                                </p>
                                <p>
                                    Rejoignez notre chaîne @AlabugaStart sur Telegram et restez en contact.
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