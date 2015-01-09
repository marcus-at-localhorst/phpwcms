<?php
/**
 * phpwcms content management system
 *
 * @author Oliver Georgi <oliver@phpwcms.de>
 * @copyright Copyright (c) 2002-2014, Oliver Georgi
 * @license http://opensource.org/licenses/GPL-2.0 GNU GPL-2
 * @link http://www.phpwcms.de
 *
 **/


// Language: Estonian, Language Code: ET
// please use HTML safe strings ONLY,neccessary to reduce processing time
// normal line break:    '&#13', JavaScript Linebreak: '\n'


$BL['usr_online']                       = 'sisse loginud:';

// Login Page
$BL["login_text"]                       = 'Sisenemine';
$BL['login_error']                      = 'Viga sisselogimisel!';
$BL["login_username"]                   = 'kasutajatunnus';
$BL["login_userpass"]                   = 'parool';
$BL["login_button"]                     = 'Sisene';
$BL["login_lang"]                       = 'vali keel';

// phpwcms.php
$BL['be_nav_logout']                    = 'V�LJUN';
$BL['be_nav_articles']                  = 'ARTIKLID';
$BL['be_nav_files']                     = 'FAILID';
$BL['be_nav_modules']                   = 'MOODULID';
$BL['be_nav_messages']                  = 'S�NUMID';
$BL['be_nav_chat']                      = 'VESTLUS';
$BL['be_nav_profile']                   = 'PROFIIL';
$BL['be_nav_admin']                     = 'ADMIN';
$BL['be_nav_discuss']                   = 'ARUTELU';

$BL['be_page_title']                    = 'phpwcms back-end kasutajaliides (administreerimine)';

$BL['be_subnav_article_center']         = 'artiklite haldus';
$BL['be_subnav_article_new']            = 'uus artikkel';
$BL['be_subnav_file_center']            = 'failide haldus';
$BL['be_subnav_file_ftptakeover']       = 'ftp-ga saadetud failid';
$BL['be_subnav_mod_artists']            = 'artist, kategooria, stiil';
$BL['be_subnav_msg_center']             = 's�numihaldus';
$BL['be_subnav_msg_new']                = 'uus s�num';
$BL['be_subnav_msg_newsletter']         = 'uudiskirja tellimine';
$BL['be_subnav_chat_main']              = 'vestluse haldus';
$BL['be_subnav_chat_internal']          = 'vestlusruum';
$BL['be_subnav_profile_login']          = 'sisselogimise andmed';
$BL['be_subnav_profile_personal']       = 'isiklikud andmed';
$BL['be_subnav_admin_pagelayout']       = 'vormingud';
$BL['be_subnav_admin_templates']        = 'mallid';
$BL['be_subnav_admin_css']              = 'css vaikev��rtused';
$BL['be_subnav_admin_sitestructure']    = 'veebilehe struktuur';
$BL['be_subnav_admin_users']            = 'kasutajate haldus';
$BL['be_subnav_admin_filecat']          = 'failikategooriad';


// admin.functions.inc.php
$BL['be_func_struct_articleID']         = 'artikli ID';
$BL['be_func_struct_preview']           = 'eelvaatlus';
$BL['be_func_struct_edit']              = 'redigeeri artiklit';
$BL['be_func_struct_sedit']             = 'redigeeri struktuuritaset';
$BL['be_func_struct_cut']               = 'teisalda l�ikepuhvrisse';
$BL['be_func_struct_nocut']             = 'keela l�ikamine';
$BL['be_func_struct_svisible']          = 'l�lita n�htav/mitten�htav';
$BL['be_func_struct_spublic']           = 'l�lita avalik/mitteavalik';
$BL['be_func_struct_sort_up']           = 'liiguta �les';
$BL['be_func_struct_sort_down']         = 'liiguta alla';
$BL['be_func_struct_del_article']       = 'kustuta artikkel';
$BL['be_func_struct_del_jsmsg']         = 'Kas soovid \nto artikli kustutada?'; // "\n" = JavaScript Linebreak
$BL['be_func_struct_new_article']       = 'loo sellel struktuuritasemel uus artikkel';
$BL['be_func_struct_paste_article']     = 'kleebi sellel struktuuritasemel artikkel';
$BL['be_func_struct_insert_level']      = 'lisa struktuuritase';
$BL['be_func_struct_paste_level']       = 'kleebi struktuuritase';
$BL['be_func_struct_cut_level']         = 'teisalda struktuuritase l�ikepuhvrisse';
$BL['be_func_struct_no_cut']            = "Juurtaset ei saa teisaldada l�ikepuhvrisse!";
$BL['be_func_struct_no_paste1']         = "Siia ei saa kleepida!";
$BL['be_func_struct_no_paste2']         = 'on juurtaseme alamtase';
$BL['be_func_struct_no_paste3']         = 'saab siia kleepida';
$BL['be_func_struct_paste_cancel']      = 't�hista struktuuritaseme muudatus';
$BL['be_func_struct_del_struct']        = 'kustuta struktuuritase';
$BL['be_func_struct_del_sjsmsg']        = 'Kas soovid \nto struktuuritaseme kustutada?'; // "\n" = JavaScript Linebreak
$BL['be_func_struct_open']              = 'ava';
$BL['be_func_struct_close']             = 'sulge';
$BL['be_func_struct_empty']             = 't�hi';

// article.contenttype.inc.php
$BL['be_ctype_plaintext']               = 'lihttekst';
$BL['be_ctype_html']                    = 'html';
$BL['be_ctype_code']                    = 'kood';
$BL['be_ctype_textimage']               = 'tekst ja pilt';
$BL['be_ctype_images']                  = 'pildid';
$BL['be_ctype_bulletlist']              = 'loetelu (tabel)';
$BL['be_ctype_ullist']     		        = 'loetelu';
$BL['be_ctype_link']                    = 'link &amp; e-mail';
$BL['be_ctype_linklist']                = 'linkide loetelu';
$BL['be_ctype_linkarticle']             = 'link artiklile';
$BL['be_ctype_multimedia']              = 'multimeedia';
$BL['be_ctype_filelist']                = 'failide loetelu';
$BL['be_ctype_emailform']               = 'vormkiri e-mailile';
$BL['be_ctype_newsletter']              = 'uudiskiri';

// profile.create.inc.php
$BL['be_profile_create_success']        = 'Uus profiil loodud.';
$BL['be_profile_create_error']          = 'Viga profiili loomisel.';

// profile.update.inc.php
$BL['be_profile_update_success']        = 'Profiili andmed v�rskendatud.';
$BL['be_profile_update_error']          = 'Viga profiili andmete v�rskendamisel.';

// profile.updateaccount.inc.php
$BL['be_profile_account_err1']          = 'kasutajatunnus {VAL} on vale';
$BL['be_profile_account_err2']          = 'parool on liiga l�hike (ainult {VAL} t�hem�rki: v�hemalt 5 on n�utav)';
$BL['be_profile_account_err3']          = 'uuesti sisestamisel peab parool olema identne eelmisega';
$BL['be_profile_account_err4']          = 'e-maili aadress {VAL} on vigane';

// profile.data.tmpl.php
$BL['be_profile_data_title']            = 'isiklikud andmed';
$BL['be_profile_data_text']             = 'isiklike andmete sisestamine ei ole kohustuslik. Kui m�rgid linnukesega "avalik", annad teistele kasutajatele v�imaluse tutvuda oma profiiliga.';
$BL['be_profile_label_title']           = 'tiitel';
$BL['be_profile_label_firstname']       = 'eesnimi';
$BL['be_profile_label_name']            = 'perekonnanimi';
$BL['be_profile_label_company']         = 'firma';
$BL['be_profile_label_street']          = 't�nav';
$BL['be_profile_label_city']            = 'linn';
$BL['be_profile_label_state']           = 'maakond';
$BL['be_profile_label_zip']             = 'postiindeks';
$BL['be_profile_label_country']         = 'riik';
$BL['be_profile_label_phone']           = 'telefon';
$BL['be_profile_label_fax']             = 'faks';
$BL['be_profile_label_cellphone']       = 'mobiiltelefon';
$BL['be_profile_label_signature']       = 'signatuur';
$BL['be_profile_label_notes']           = 'm�rkus';
$BL['be_profile_label_profession']      = 'tegevusala';
$BL['be_profile_label_newsletter']      = 'uudiskiri';
$BL['be_profile_text_newsletter']       = 'Soovin saada uudiskirja.';
$BL['be_profile_label_public']          = 'avalik';
$BL['be_profile_text_public']           = 'Soovin teha oma andmed teistele kasutajatele avalikuks.';
$BL['be_profile_label_button']          = 'v�rskenda isiklikke andmeid';

// profile.account.tmpl.php
$BL['be_profile_account_title']         = 'Sinu sisselogimise andmed';
$BL['be_profile_account_text']          = 'Oma kasutajatunnuse muutmiseks pole tavaliselt vajadust.<br />Kuid aeg-ajalt v�id sa muuta oma parooli.';
$BL['be_profile_label_err']             = 'palun kontrolli';
$BL['be_profile_label_username']        = 'kasutajatunnus';
$BL['be_profile_label_newpass']         = 'uus parool';
$BL['be_profile_label_repeatpass']      = 'uus parool uuesti';
$BL['be_profile_label_email']           = 'e-mail';
$BL['be_profile_account_button']        = 'v�rskenda sisselogimise andmeid';
$BL['be_profile_label_lang']            = 'keel';


// files.ftptakeover.tmpl.php
$BL['be_ftptakeover_title']             = 'v�ta ftp kaudu laaditud failid �le';
$BL['be_ftptakeover_mark']              = 'm�rgi';
$BL['be_ftptakeover_available']         = 'k�ttesaadavad failid';
$BL['be_ftptakeover_size']              = 'suurus';
$BL['be_ftptakeover_nofile']            = 'pole �htegi k�ttesaadavat faili &#8211; laadi fail k�igepealt ftp kaudu "phpwcms_ftp" kataloogi';
$BL['be_ftptakeover_all']               = 'K�IK';
$BL['be_ftptakeover_directory']         = 'kataloog';
$BL['be_ftptakeover_rootdir']           = 'juurkataloog';
$BL['be_ftptakeover_needed']            = 'vajalik!!! (pead valima v�hemalt �he)';
$BL['be_ftptakeover_optional']          = 'pole kohustuslik';
$BL['be_ftptakeover_keywords']          = 'v�tmes�nad';
$BL['be_ftptakeover_additional']        = 't�iendavalt';
$BL['be_ftptakeover_longinfo']          = 'pikk kirjeldus';
$BL['be_ftptakeover_status']            = 'olek';
$BL['be_ftptakeover_active']            = 'aktiivne';
$BL['be_ftptakeover_public']            = 'avalik';
$BL['be_ftptakeover_createthumb']       = 'loo miniatuurpilt';
$BL['be_ftptakeover_button']            = 'v�ta valitud failid �le';

// files.reiter.tmpl.php
$BL['be_ftab_title']                    = 'failihaldus';
$BL['be_ftab_createnew']                = 'loo juurkataloogis uus kataloog';
$BL['be_ftab_paste']                    = 'kleebi l�ikepuhvrist fail juurkataloogi';
$BL['be_ftab_disablethumb']             = 'blokeeri loetelus miniatuurpildid';
$BL['be_ftab_enablethumb']              = 'v�imalda loetelus miniatuurpildid';
$BL['be_ftab_private']                  = 'isiklikud&nbsp;failid';
$BL['be_ftab_public']                   = 'avalikud&nbsp;failid';
$BL['be_ftab_search']                   = 'otsi';
$BL['be_ftab_trash']                    = 'pr�gikast';
$BL['be_ftab_open']                     = 'ava k�ik kataloogid';
$BL['be_ftab_close']                    = 'sule k�ik avatud kataloogid';
$BL['be_ftab_upload']                   = 'laadi fail juurkatalogi';
$BL['be_ftab_filehelp']                 = 'spikker';

// files.private.newdir.tmpl.php
$BL['be_fpriv_rootdir']                 = 'juurkataloog';
$BL['be_fpriv_title']                   = 'loo uus kataloog';
$BL['be_fpriv_inside']                  = 'sees';
$BL['be_fpriv_error']                   = 'viga: lisa kataloogi nimi';
$BL['be_fpriv_name']                    = 'nimi';
$BL['be_fpriv_status']                  = 'olek';
$BL['be_fpriv_button']                  = 'loo uus kataloog';

// files.private.editdir.tmpl.php
$BL['be_fpriv_edittitle']               = 'muuda kataloogi';
$BL['be_fpriv_newname']                 = 'uus nimi';
$BL['be_fpriv_updatebutton']            = 'v�rskenda kataloogi infot';

// files.private.upload.tmpl.php
$BL['be_fprivup_err1']                  = 'Vali fail, mille soovid �les laadida';
$BL['be_fprivup_err2']                  = '�les laaditud fail on suurem kui';
$BL['be_fprivup_err3']                  = 'Viga faili salvestamisel';
$BL['be_fprivup_err4']                  = 'Viga kasutaja kataloogi loomisel.';
$BL['be_fprivup_err5']                  = 'pisipilte pole';
$BL['be_fprivup_err6']                  = 'Pole vajadust uuesti proovida - serveri viga! V�ta �hendust <a href="mailto:{VAL}">veebilehe haldajaga</a> as soon as possible!';
$BL['be_fprivup_title']                 = 'Laadi failid �les';
$BL['be_fprivup_button']                = 'Laadi �les';
$BL['be_fprivup_upload']                = 'Laadi �les';

// files.private.editfile.tmpl.php
$BL['be_fprivedit_title']               = 'redigeeri faili andmeid';
$BL['be_fprivedit_filename']            = 'faili nimi';
$BL['be_fprivedit_created']             = 'loodud';
$BL['be_fprivedit_dateformat']          = 'd-m-Y H:i';
$BL['be_fprivedit_err1']                = 'faili algne nimi (taasta algne)';
$BL['be_fprivedit_clockwise']           = 'p��ra miniatuurpilti p�rip�eva [original file +90&deg;]';
$BL['be_fprivedit_cclockwise']          = 'p��ra miniatuurpilti vastup�eva [original file -90&deg;]';
$BL['be_fprivedit_button']              = 'v�rskenda faili andmeid';
$BL['be_fprivedit_size']                = 'suurus';

// files.private-functions.inc.php
$BL['be_fprivfunc_upload']              = 'laadi fail kataloogi';
$BL['be_fprivfunc_makenew']             = 'loo kataloogi sees uus kataloog';
$BL['be_fprivfunc_paste']               = 'kleebi l�ikepuhvris olev fail kataloogi';
$BL['be_fprivfunc_edit']                = 'muuda kataloogi';
$BL['be_fprivfunc_cactive']             = 'l�lita aktiivne/mitteaktiivne';
$BL['be_fprivfunc_cpublic']             = 'l�lita avalik/mitteavalik';
$BL['be_fprivfunc_deldir']              = 'kustuta kataloog';
$BL['be_fprivfunc_jsdeldir']            = 'Kas soovid \nto kustutada kataloogi?';
$BL['be_fprivfunc_notempty']            = 'kataloog {VAL} sisaldab faile!';
$BL['be_fprivfunc_opendir']             = 'ava kataloog';
$BL['be_fprivfunc_closedir']            = 'sule kataloog';
$BL['be_fprivfunc_dlfile']              = 'faili allalaadimine';
$BL['be_fprivfunc_clipfile']            = 'fail l�ikepuhvrisse';
$BL['be_fprivfunc_cutfile']             = 'l�ika';
$BL['be_fprivfunc_editfile']            = 'muuda faili andmeid';
$BL['be_fprivfunc_cactivefile']         = 'l�lita aktiivne/mitteaktiivne';
$BL['be_fprivfunc_cpublicfile']         = 'l�lita avalik/mitteavalik';
$BL['be_fprivfunc_movetrash']           = 'saada pr�gikasti';
$BL['be_fprivfunc_jsmovetrash1']        = 'Kas soovid saata';
$BL['be_fprivfunc_jsmovetrash2']        = 'pr�gikasti?';

// files.private.additions.inc.php
$BL['be_fprivadd_nofolders']            = 'isiklikud failid v�i kaustad puuduvad';

// files.public.list.tmpl.php
$BL['be_fpublic_user']                  = 'kasutaja';
$BL['be_fpublic_nofiles']               = 'isiklikud failid v�i kaustad puuduvad';

// files.private.trash.tmpl.php
$BL['be_ftrash_nofiles']                = 'pr�gikast on t�hi';
$BL['be_ftrash_show']                   = 'n�ita isiklikke faile';

// files.private-delfilelist.inc.php
$BL['be_ftrash_restore']                = 'Kas soovid seda taastada {VAL} \nisiklike failde kausta?';
$BL['be_ftrash_delete']                 = 'Kas soovid kustutada {VAL}?';
$BL['be_ftrash_undo']                   = 'taasta (v�ta tagasi)';
$BL['be_ftrash_delfinal']               = 'l�plik kustutamine';

// files.search.tmpl.php
$BL['be_fsearch_err1']                  = 'otsingustring on t�hi.';
$BL['be_fsearch_title']                 = 'otsi faile';
$BL['be_fsearch_infotext']              = 'Otsinguliides otsib sisestatud m�rks�nade,<br />failinimede ja t�iendava informatsiooni hulgast. Metam�rke ei saa otsingus kasutada. <br />Mitu otsingus�na eralda omavahel t�hikuga. <br />Vali JA/V�I ning milliste failide hulgast otsida: isiklikud/avalikud.';
$BL['be_fsearch_nonfound']              = '�htegi otsingule vastavat faili ei leitud. korrigeeri otsingu parameetreid!';
$BL['be_fsearch_fillin']                = 'palun t�ida otsingustring.';
$BL['be_fsearch_searchlabel']           = 'otsi';
$BL['be_fsearch_startsearch']           = 'alusta otsingut';
$BL['be_fsearch_and']                   = 'JA';
$BL['be_fsearch_or']                    = 'V�I';
$BL['be_fsearch_all']                   = 'k�ik failid';
$BL['be_fsearch_personal']              = 'isiklikud';
$BL['be_fsearch_public']                = 'avalikud';

// chat.main.tmpl.php & chat.list.tmpl.php
$BL['be_chat_title']                    = 'vestlusruum';
$BL['be_chat_info']                     = 'Ruum teiste sisse loginud kasutajatega back-end vestluse pidamiseks. Lisaks reaalajas vestlusele saab j�tta ka s�numeid, mida k�ik kasutajad lugeda saavad.';
$BL['be_chat_start']                    = 'vestluse alustamiseks kliki siia';
$BL['be_chat_lines']                    = 'n�ita ridasid';

// message.center.tmpl.php
$BL['be_msg_title']                     = 's�numihaldus';
$BL['be_msg_new']                       = 'uus';
$BL['be_msg_old']                       = 'vana';
$BL['be_msg_senttop']                   = 'saadetud';
$BL['be_msg_del']                       = 'kustutatud';
$BL['be_msg_from']                      = 'kellelt';
$BL['be_msg_subject']                   = 'teema';
$BL['be_msg_date']                      = 'kuup�ev/aeg';
$BL['be_msg_close']                     = 'sulge s�num';
$BL['be_msg_create']                    = 'kirjuta uus s�num';
$BL['be_msg_reply']                     = 'vasta s�numile';
$BL['be_msg_move']                      = 'saada s�num pr�gikasti';
$BL['be_msg_unread']                    = 'uued v�i lugemata s�numid';
$BL['be_msg_lastread']                  = 'viimased {VAL} loetud s�numit';
$BL['be_msg_lastsent']                  = 'viimased {VAL} saadetud s�numit';
$BL['be_msg_marked']                    = 'kustutamiseks m�rgitud s�numid (pr�gikast)';
$BL['be_msg_nomsg']                     = 'kaustas pole s�numeid';

// message.send.tmpl.php
$BL['be_msg_RE']                        = 'RE';
$BL['be_msg_by']                        = 'saatja';
$BL['be_msg_on']                        = 'on';
$BL['be_msg_msg']                       = 'teade';
$BL['be_msg_err1']                      = 'puudub saaja...';
$BL['be_msg_err2']                      = 'm�rgi teema (saaja saab paremini hallata oma s�numeid)';
$BL['be_msg_err3']                      = 'puudub m�te saata endale ilma sisuta s�numit ;-)';
$BL['be_msg_sent']                      = 's�num on saadetud!';
$BL['be_msg_fwd']                       = 'hetke p�rast suunatakse sind tagasi s�numikeskusesse v�i';
$BL['be_msg_newmsgtitle']               = 'kirjuta uus s�num';
$BL['be_msg_err']                       = 's�numi saatmisel viga';
$BL['be_msg_sendto']                    = 'saaja(d)';
$BL['be_msg_available']                 = 'vali saaja';
$BL['be_msg_all']                       = 'saada s�num k�igile valitud isikutele';

// message.subscription.tmpl.php
$BL['be_newsletter_title']              = 'uudiskirja tellimus';
$BL['be_newsletter_titleedit']          = 'muuda uudiskirja tellimust';
$BL['be_newsletter_new']                = 'loo uus';
$BL['be_newsletter_add']                = 'lisa&nbsp;uudiskirja&nbsp;tellimus';
$BL['be_newsletter_name']               = 'nimi';
$BL['be_newsletter_info']               = 'info';
$BL['be_newsletter_button_save']        = 'salvesta';
$BL['be_newsletter_button_cancel']      = 'katkesta';

// admin.newuser.tmpl.php
$BL['be_admin_usr_err1']                = 'kasutajatunnus ei sobi, vali teine';
$BL['be_admin_usr_err2']                = 'kasutajatunnus on t�hi (n�utav)';
$BL['be_admin_usr_err3']                = 'parool on t�hi (n�utav)';
$BL['be_admin_usr_err4']                = "e-maili aadress pole korrektselt";
$BL['be_admin_usr_err']                 = 'viga';
$BL['be_admin_usr_mailsubject']         = 'tere tulemast phpwcms back-end kasutajaliidesesse';
$BL['be_admin_usr_mailbody']            = "TERE TULEMAST PHPWCMS BACK-END KASUTAJALIIDESESSE\n\n    kasutajatunnus: {LOGIN}\n    parool: {PASSWORD}\n\n\nLogi sisse: {LOGIN_PAGE}\n\nphpwcms admin\n ";
$BL['be_admin_usr_title']               = 'lisa kasutajakonto';
$BL['be_admin_usr_realname']            = 'tegelik nimi';
$BL['be_admin_usr_setactive']           = 'aktiveeri kasutajakonto';
$BL['be_admin_usr_iflogin']             = 'aktiveerides saab kasutaja sisse logida';
$BL['be_admin_usr_isadmin']             = 'kasutaja on admin';
$BL['be_admin_usr_ifadmin']             = 'kasutaja saab administraatori �igused';
$BL['be_admin_usr_verify']              = 'tuvastus';
$BL['be_admin_usr_sendemail']           = 'saada uuele kasutajale e-mail kasutaja andmetega';
$BL['be_admin_usr_button']              = 'saada kasutaja andmed';

// admin.edituser.tmpl.php
$BL['be_admin_usr_etitle']              = 'muuda kasutajakontot';
$BL['be_admin_usr_emailsubject']        = 'phpwcms - kontoandmed on muudetud';
$BL['be_admin_usr_emailbody']           = "PHPWCMS KASUTAJAKONTO ANDMED ON MUUDETUD\n\n    kasutajatunnus: {LOGIN}\n    parool: {PASSWORD}\n\n\nLogi sisse: {LOGIN_PAGE}\n\nphpwcms admin\n ";
$BL['be_admin_usr_passnochange']        = '[MUUDATUSI POLE - KASUTA VANA PAROOLI]';
$BL['be_admin_usr_ebutton']             = 'v�rskenda kasutaja andmeid';

// admin.listuser.tmpl.php
$BL['be_admin_usr_ltitle']              = 'phpwcms back-end kasutajate haldus';
$BL['be_admin_usr_ldel']                = 'T�HELEPANU!&#13See v�ib kasutaja kustutada';
$BL['be_admin_usr_create']              = 'loo uus kasutaja';
$BL['be_admin_usr_editusr']             = 'muuda kasutajat';

// admin.structform.tmpl.php
$BL['be_admin_struct_title']            = 'Veebilehe struktuur  (ehk sisukord).';
$BL['be_admin_struct_child']            = '| k�esolev on alamtasemeks sisukorrapunktile';
$BL['be_admin_struct_index']            = 'index (veebilehe algus)';
$BL['be_admin_struct_cat']              = 'struktuuritaseme nimetus';
$BL['be_admin_struct_hide1']            = 'peida';
$BL['be_admin_struct_hide2']            = 'this&nbsp;category&nbsp;in&nbsp;menu';
$BL['be_admin_struct_info']             = 'kategooria infotekst';
$BL['be_admin_struct_template']         = 'mall';
$BL['be_admin_struct_alias']            = 'kategooria alias';
$BL['be_admin_struct_visible']          = 'n�htav';
$BL['be_admin_struct_button']           = 'salvesta';
$BL['be_admin_struct_close']            = 'katkesta';

// admin.filecat.tmpl.php
$BL['be_admin_fcat_title']              = 'failikategooriad';
$BL['be_admin_fcat_err']                = 'kategooria nimetus puudub!';
$BL['be_admin_fcat_name']               = 'kategooria nimetus';
$BL['be_admin_fcat_needed']             = 'n�utav';
$BL['be_admin_fcat_button1']            = 'v�rskenda';
$BL['be_admin_fcat_button2']            = 'salvesta';
$BL['be_admin_fcat_delmsg']             = 'Kas soovid\nkustutada faili v�tme?';
$BL['be_admin_fcat_fcat']               = 'faili kategooria';
$BL['be_admin_fcat_err1']               = 'faili v�tme nimetus puudub!';
$BL['be_admin_fcat_fkeyname']           = 'faili v�tme nimetus';
$BL['be_admin_fcat_exit']               = 'katkesta';
$BL['be_admin_fcat_addkey']             = 'lisa uus v�ti';
$BL['be_admin_fcat_editcat']            = 'muuda kategooria nime';
$BL['be_admin_fcat_delcatmsg']          = 'Kas soovid\nkustutada failikategooria?';
$BL['be_admin_fcat_delcat']             = 'kustuta failikategooria';
$BL['be_admin_fcat_delkey']             = 'kustuta faili v�tme nimetus';
$BL['be_admin_fcat_editkey']            = 'muuda v�tit';
$BL['be_admin_fcat_addcat']             = 'loo uus failikategooria';

// admin.pagelayout.tmpl.php
$BL['be_admin_page_title']              = 'Front-end vorming, veebilehe k�ljendus.<br /> Iga mall on seotud �he vorminguga ning igale struktuuritasemele v�id rakendada erineva malli. Loo uus vorming, seej�rel lisa mall, siis pane paika lehe struktuur ehk sisukord. K�ige l�puks lisa artiklid.<br />Siin m��rad �ra p�hiandmed: lehek�lje suuruse, asetuse, k�ljenduse, v�rvid, plokid jne.';
$BL['be_admin_page_align']              = 'lehek�lje joondamine';
$BL['be_admin_page_align_left']         = 'joonda vasakule';
$BL['be_admin_page_align_center']       = 'joonda keskele';
$BL['be_admin_page_align_right']        = 'joonda paremale';
$BL['be_admin_page_margin']             = 'veeris';
$BL['be_admin_page_top']                = '�lemine';
$BL['be_admin_page_bottom']             = 'alumine';
$BL['be_admin_page_left']               = 'vasak';
$BL['be_admin_page_right']              = 'parem';
$BL['be_admin_page_bg']                 = 'taust';
$BL['be_admin_page_color']              = 'v�rv';
$BL['be_admin_page_height']             = 'k�rgus';
$BL['be_admin_page_width']              = 'laius';
$BL['be_admin_page_main']               = 'p�hiplokk';
$BL['be_admin_page_leftspace']          = 'vasak vahe';
$BL['be_admin_page_rightspace']         = 'parem vahe';
$BL['be_admin_page_class']              = 'klass';
$BL['be_admin_page_image']              = 'pilt';
$BL['be_admin_page_text']               = 'tekst';
$BL['be_admin_page_link']               = 'link';
$BL['be_admin_page_js']                 = 'javascript';
$BL['be_admin_page_visited']            = 'k�lastatud';
$BL['be_admin_page_pagetitle']          = 'lehe&nbsp;tiitel';
$BL['be_admin_page_addtotitle']         = 'lisa&nbsp;tiitlile';
$BL['be_admin_page_category']           = 'kategooria';
$BL['be_admin_page_articlename']        = 'artikli&nbsp;nimi';
$BL['be_admin_page_blocks']             = 'plokid';
$BL['be_admin_page_allblocks']          = 'k�ik plokid';
$BL['be_admin_page_col1']               = '3-tulbaline k�ljend';
$BL['be_admin_page_col2']               = '2-tulbaline k�ljend (p�hitulp paremal, navigeerimistulp vasakul)';
$BL['be_admin_page_col3']               = '2-tulbaline k�ljend (p�hitulp vasakul, navigeerimistulp paremal)';
$BL['be_admin_page_col4']               = '1-tulbaline k�ljend';
$BL['be_admin_page_header']             = '�lemine plokk';
$BL['be_admin_page_footer']             = 'alumine plokk';
$BL['be_admin_page_topspace']           = '�lemine&nbsp;vahe';
$BL['be_admin_page_bottomspace']        = 'alumine&nbsp;vahe';
$BL['be_admin_page_button']             = 'salvesta';

// admin.frontendcss.tmpl.php
$BL['be_admin_css_title']               = 'Front-end vorming, css vaikev��rtused. Siin m��rad kasutatavad kirjastiilid, teksti suurused, -v�rvid, reavahed jne.';
$BL['be_admin_css_css']                 = 'css';
$BL['be_admin_css_button']              = 'salvesta';

// admin.templates.tmpl.php
$BL['be_admin_tmpl_title']              = 'Front-end vorming, mallid.<br />Iga mall on seotud �he vorminguga ning igale struktuuritasemele v�id rakendada erineva malli.<br />Siin m��rad �ra plokkide sisu. N�iteks kas men�� asetseb �lal v�i vasakul jne.';
$BL['be_admin_tmpl_default']            = 'vaikimisi';
$BL['be_admin_tmpl_add']                = 'lisa&nbsp;mall';
$BL['be_admin_tmpl_edit']               = 'muuda malli';
$BL['be_admin_tmpl_new']                = 'loo uus';
$BL['be_admin_tmpl_css']                = 'css fail';
$BL['be_admin_tmpl_head']               = 'html p�is';
$BL['be_admin_tmpl_js']                 = 'laadi javasc.';
$BL['be_admin_tmpl_error']              = 'veateade';
$BL['be_admin_tmpl_button']             = 'salvesta';
$BL['be_admin_tmpl_name']               = 'nimi';

// article.structlist.tmpl.php
$BL['be_article_title']                 = 'veebilehe struktuur (ehk sisukord), artiklite haldus';

// article.new.tmpl.php
$BL['be_article_err1']                  = 'artikli pealkiri puudub';
$BL['be_article_err2']                  = 'alguskuup�ev on vale - m��ra uuesti';
$BL['be_article_err3']                  = 'l�pukuup�ev on vale - m��ra uuesti';
$BL['be_article_title1']                = 'artikli p�hiandmed';
$BL['be_article_cat']                   = 'struktuuritase';
$BL['be_article_atitle']                = 'pealkiri';
$BL['be_article_asubtitle']             = 'alampealkiri';
$BL['be_article_abegin']                = 'algab';
$BL['be_article_aend']                  = 'l�peb';
$BL['be_article_aredirect']             = 'suuna �mber';
$BL['be_article_akeywords']             = 'v�tmes�nad';
$BL['be_article_asummary']              = 'kokkuv�te';
$BL['be_article_abutton']               = 'loo uus artikkel';

// article.editcontent.inc.php
$BL['be_article_err4']                  = 'l�pukuup�ev on vale - m��ra uuesti + 1 n�dal';

// article.editsummary.tmpl.php
$BL['be_article_estitle']               = 'muuda artikli p�hiandmeid';
$BL['be_article_eslastedit']            = 'viimati muudetud';
$BL['be_article_esnoupdate']            = 'vormi ei v�rskendatud';
$BL['be_article_esbutton']              = 'salvesta';

// articlecontent.edit.tmpl.php
$BL['be_article_cnt_title']             = 'artikli sisu';
$BL['be_article_cnt_type']              = 'sisu t��p';
$BL['be_article_cnt_space']             = 't�hi rida';
$BL['be_article_cnt_before']            = 'enne';
$BL['be_article_cnt_after']             = 'p�rast';
$BL['be_article_cnt_top']               = '�les';
$BL['be_article_cnt_ctitle']            = 'sisu pealkiri';
$BL['be_article_cnt_back']              = 'kogu artikli info';
$BL['be_article_cnt_button1']           = 'v�rskenda sisu';
$BL['be_article_cnt_button2']           = 'salvesta';

// articlecontent.list.tmpl.php
$BL['be_article_cnt_ltitle']            = 'artikli info';
$BL['be_article_cnt_ledit']             = 'muuda artiklit';
$BL['be_article_cnt_lvisible']          = 'l�lita n�htav/mitten�htav';
$BL['be_article_cnt_ldel']              = 'kustuta artikkel';
$BL['be_article_cnt_ldeljs']            = 'Kustutad artikli?';
$BL['be_article_cnt_redirect']          = '�mbersuunamine';
$BL['be_article_cnt_edited']            = 'viimati muutis';
$BL['be_article_cnt_start']             = 'alguskuup�ev (aaaa-kk-pp)';
$BL['be_article_cnt_end']               = 'l�pukuup�ev (aaaa-kk-pp)';
$BL['be_article_cnt_add']               = 'lisa uus sisuosa';
$BL['be_article_cnt_up']                = 'liiguta sisu �les';
$BL['be_article_cnt_down']              = 'liiguta sisu alla';
$BL['be_article_cnt_edit']              = 'muuda sisuosa';
$BL['be_article_cnt_delpart']           = 'kustuta artikli sisuosa';
$BL['be_article_cnt_delpartjs']         = 'Kustutad sisuosa?';
$BL['be_article_cnt_center']            = 'artiklite haldus';

// content forms
$BL['be_cnt_plaintext']                 = 'lihttekst';
$BL['be_cnt_htmltext']                  = 'html tekst';
$BL['be_cnt_image']                     = 'pilt';
$BL['be_cnt_position']                  = 'asend';
$BL['be_cnt_pos0']                      = '�lal, vasakul';
$BL['be_cnt_pos1']                      = '�lal, keskel';
$BL['be_cnt_pos2']                      = '�lal, paremal';
$BL['be_cnt_pos3']                      = 'All, vasakul';
$BL['be_cnt_pos4']                      = 'All, keskel';
$BL['be_cnt_pos5']                      = 'All, paremal';
$BL['be_cnt_pos6']                      = 'Tekstis, vasakul';
$BL['be_cnt_pos7']                      = 'Tekstis, paremal';
$BL['be_cnt_pos0i']                     = 'joonda pilt tekstiplokis �les vasakule';
$BL['be_cnt_pos1i']                     = 'joonda pilt tekstiplokis �les keskele';
$BL['be_cnt_pos2i']                     = 'joonda pilt tekstiplokis �les paremale';
$BL['be_cnt_pos3i']                     = 'joonda pilt tekstiplokis alla vasakule';
$BL['be_cnt_pos4i']                     = 'joonda pilt tekstiplokis alla keskele';
$BL['be_cnt_pos5i']                     = 'joonda pilt tekstiplokis alla paremale';
$BL['be_cnt_pos6i']                     = 'joonda pilt tekstiploki sees vasakule';
$BL['be_cnt_pos7i']                     = 'joonda pilt tekstiploki sees paremale';
$BL['be_cnt_maxw']                      = 'maks.&nbsp;laius';
$BL['be_cnt_maxh']                      = 'maks.&nbsp;k�rgus';
$BL['be_cnt_enlarge']                   = 'kliki&nbsp;suuremaks';
$BL['be_cnt_caption']                   = 'piltide infotekst';
$BL['be_cnt_subject']                   = 'teema';
$BL['be_cnt_recipient']                 = 'saaja';
$BL['be_cnt_buttontext']                = 'nupu tekst';
$BL['be_cnt_sendas']                    = 'saada kui';
$BL['be_cnt_text']                      = 'tekst';
$BL['be_cnt_html']                      = 'html';
$BL['be_cnt_formfields']                = 'vormi v�ljad';
$BL['be_cnt_code']                      = 'kood';
$BL['be_cnt_infotext']                  = 'info&nbsp;tekst';
$BL['be_cnt_subscription']              = 'tellimus';
$BL['be_cnt_labelemail']                = 'm�rgend&nbsp;e-mail';
$BL['be_cnt_tablealign']                = 'tabel&nbsp;joonda';
$BL['be_cnt_labelname']                 = 'm�rgend&nbsp;nimi';
$BL['be_cnt_labelsubsc']                = 'm�rgend&nbsp;subscr.';
$BL['be_cnt_allsubsc']                  = 'k�ik&nbsp;tellij.';
$BL['be_cnt_default']                   = 'vaikimisi';
$BL['be_cnt_left']                      = 'vasakule';
$BL['be_cnt_center']                    = 'keskele';
$BL['be_cnt_right']                     = 'paremale';
$BL['be_cnt_buttontext']                = 'tekst&nbsp;nupul';
$BL['be_cnt_successtext']               = '"saadetud"&nbsp;tekst';
$BL['be_cnt_regmail']                   = 'regist.e-mail';
$BL['be_cnt_logoffmail']                = 'logoff.e-mail';
$BL['be_cnt_changemail']                = 'muuda.e-mail';
$BL['be_cnt_openimagebrowser']          = 'ava pildibrauser';
$BL['be_cnt_openfilebrowser']           = 'ava failibrauser';
$BL['be_cnt_sortup']                    = 'liiguta �les';
$BL['be_cnt_sortdown']                  = 'liiguta alla';
$BL['be_cnt_delimage']                  = 'eemalda valitud pilt';
$BL['be_cnt_delfile']                   = 'eemalda valitud fail';
$BL['be_cnt_delmedia']                  = 'eemalda valitud meedia';
$BL['be_cnt_column']                    = 'tulp';
$BL['be_cnt_imagespace']                = 'piltide&nbsp;vahe';
$BL['be_cnt_directlink']                = 'otselink';
$BL['be_cnt_target']                    = 'paneel';
$BL['be_cnt_target1']                   = 'uues aknas';
$BL['be_cnt_target2']                   = 'sama akna freimis';
$BL['be_cnt_target3']                   = 'samas aknas ilma freimideta';
$BL['be_cnt_target4']                   = 'samas freimis v�i aknas';
$BL['be_cnt_bullet']                    = 'loetelu tabelina';
$BL['be_cnt_ullist']     		        = 'loetelu';
$BL['be_cnt_ullist_desc']     		    = '~ = 1ne tase, &nbsp; ~~ = 2ne tase, &nbsp; jne.';
$BL['be_cnt_linklist']                  = 'linkide loetelu';
$BL['be_cnt_plainhtml']                 = 'html kood';
$BL['be_cnt_files']                     = 'failid';
$BL['be_cnt_description']               = 'kirjeldus';
$BL['be_cnt_linkarticle']               = 'link artiklitele';
$BL['be_cnt_articles']                  = 'artiklid';
$BL['be_cnt_movearticleto']             = 'vii valitud artikkel "lingid artiklitele" loetelusse';
$BL['be_cnt_removearticleto']           = 'k�rvalda valitud artikkel "lingid artiklitele" loetelust';
$BL['be_cnt_mediatype']                 = 'meedia t��p';
$BL['be_cnt_control']                   = 'juhtimine';
$BL['be_cnt_showcontrol']               = 'n�ita juhtimisriba';
$BL['be_cnt_autoplay']                  = 'k�ivita automaatselt';
$BL['be_cnt_source']                    = 'allikas';
$BL['be_cnt_internal']                  = 'sisemine';
$BL['be_cnt_openmediabrowser']          = 'ava meediabrauser';
$BL['be_cnt_external']                  = 'v�limine';
$BL['be_cnt_mediapos0']                 = 'vasakule (vaikimisi)';
$BL['be_cnt_mediapos1']                 = 'keskele';
$BL['be_cnt_mediapos2']                 = 'paremale';
$BL['be_cnt_mediapos3']                 = 'tekstplokki, vasakule';
$BL['be_cnt_mediapos4']                 = 'tekstplokki, paremale';
$BL['be_cnt_mediapos0i']                = 'joonda meedia tekstplokis �les vasakule';
$BL['be_cnt_mediapos1i']                = 'joonda meedia tekstplokis �les keskele';
$BL['be_cnt_mediapos2i']                = 'joonda meedia tekstplokis �les paremale';
$BL['be_cnt_mediapos3i']                = 'joonda meedia tekstploki sees vasakule';
$BL['be_cnt_mediapos4i']                = 'joonda meedia tekstploki sees paremale';
$BL['be_cnt_setsize']                   = 'm��ra suurus';
$BL['be_cnt_set1']                      = 'm��ra suuruseks 160x120px';
$BL['be_cnt_set2']                      = 'm��ra suuruseks 240x180px';
$BL['be_cnt_set3']                      = 'm��ra suuruseks 320x240px';
$BL['be_cnt_set4']                      = 'm��ra suuruseks 480x360px';
$BL['be_cnt_set5']                      = 'puhasta meedia laius ja k�rgus';

// added: 28-12-2003
$BL['be_admin_page_add']                = 'loo uus vorming';
$BL['be_admin_page_name']               = 'vormingu nimi';
$BL['be_admin_page_edit']               = 'muuda vormingut';
$BL['be_admin_page_render']             = 'viimistlus';
$BL['be_admin_page_table']              = 'tabel';
$BL['be_admin_page_div']                = 'css div';
$BL['be_admin_page_custom']             = 'kohandatud';
$BL['be_admin_page_custominfo']         = 'malli p�hiplokist';
$BL['be_admin_tmpl_layout']             = 'vorming';
$BL['be_admin_tmpl_nolayout']           = 'Pole �htegi vormingut!';

// added: 31-12-2003
$BL['be_ctype_search']                  = 'otsing';
$BL['be_cnt_results']                   = 'tulemused';
$BL['be_cnt_results_per_page']          = 'lehek�lje&nbsp;kohta (kui t�hi, n�ita k�iki)';
$BL['be_cnt_opennewwin']                = 'ava uus aken';
$BL['be_cnt_searchlabeltext']           = 'eeldefineeritud tekstid ja v��rtused otsinguvormi ja otsinguresultaadi lehe jaoks.';
$BL['be_cnt_input']                     = 'sisestus';
$BL['be_cnt_style']                     = 'stiil';
$BL['be_cnt_result']                    = 'tulemus';
$BL['be_cnt_next']                      = 'j�rgmine';
$BL['be_cnt_previous']                  = 'eelmine';
$BL['be_cnt_align']                     = 'joonda';
$BL['be_cnt_searchformtext']            = 'j�rgnevad tekstid esinevad otsinguvormis v�i otsingutulemuste lehel.';
$BL['be_cnt_intro']                     = 'sissejuhatus';
$BL['be_cnt_noresult']                  = 'ei leitud';

// added: 02-01-2004
$BL['be_admin_page_disable']            = 'keela';

// added: 09-01-2004
$BL['be_article_articleowner']          = 'artikli saatja';
$BL['be_article_adminuser']             = 'administraator';
$BL['be_article_username']              = 'autor';

// added: 10-01-2004
$BL['be_ctype_wysywig']                 = 'WYSIWYG HTML';

// added, changed: 11-01-2004
$BL['be_admin_struct_regonly']          = 'n�htav ainult sisse loginud kasutajatele';
$BL['be_admin_struct_status']           = 'olek front-end men��s';

// added: 15-02-2004
$BL['be_ctype_articlemenu']				= 'artiklite sisukord';
$BL['be_cnt_sitelevel']					= 'lehe struktuuritase';
$BL['be_cnt_sitecurrent']				= 'k�esolev struktuuritase';

// added: 24-03-2004
$BL['be_subnav_admin_starttext']		= 'back-end avatekst';
$BL['be_ctype_ecard']					= 'e-kaart';
$BL['be_ctype_blog']					= 'veebip�evik (blog)';
$BL['be_cnt_ecardtext']                 = 'e-kaart/pealkiri';
$BL['be_cnt_ecardtmpl']                 = 'e-maili mall';
$BL['be_cnt_ecard_image']               = 'e-kaardi pilt';
$BL['be_cnt_ecard_title']               = 'e-kaardi pealkiri';
$BL['be_cnt_alignment']                 = 'joonda';
$BL['be_cnt_ecardform']                 = 'vormi mall';
$BL['be_cnt_ecardform_err']             = '* v�ljad n�utavad';
$BL['be_cnt_ecardform_sender']          = 'Saatja';
$BL['be_cnt_ecardform_recipient']       = 'Saaja';
$BL['be_cnt_ecardform_name']            = 'Nimi';
$BL['be_cnt_ecardform_msgtext']         = 'Sinu tekst';
$BL['be_cnt_ecardform_button']          = 'saada e-kaart';
$BL['be_cnt_ecardsend']                 = '"saadetud" mall';

// added: 28-03-2004
$BL['be_admin_startup_title']           = 'Back-end vaikimisi avatekst';
$BL['be_admin_startup_text']            = 'avatekst';
$BL['be_admin_startup_button']          = 'salvesta';

// added: 17-04-2004
$BL['be_ctype_guestbook']				= 'k�lalisteraamat';
$BL['be_cnt_guestbook_listing']			= 'kuva';
$BL['be_cnt_guestbook_listing_all']		= 'kuva&nbsp;k�ik&nbsp;sissekanded';
$BL['be_cnt_guestbook_list']			= 'sissekanded';
$BL['be_cnt_guestbook_perpage']			= 'lehek�lje&nbsp;kohta';
$BL['be_cnt_guestbook_form']			= 'vorm';
$BL['be_cnt_guestbook_signed']			= 'signed';
$BL['be_cnt_guestbook_nav']				= 'nav';
$BL['be_cnt_guestbook_before']			= 'enne';
$BL['be_cnt_guestbook_after']			= 'p�rast';
$BL['be_cnt_guestbook_entry']			= 'sissekanne';
$BL['be_cnt_guestbook_edit']			= 'muuda';
$BL['be_cnt_ecardform_selector']        = 'm�rkija';
$BL['be_cnt_ecardform_radiobutton']     = 'radio button';
$BL['be_cnt_ecardform_javascript']      = 'JavaScripti kasutusega';
$BL['be_cnt_ecardform_over']        	= 'onMouseOver';
$BL['be_cnt_ecardform_click']       	= 'onClick';
$BL['be_cnt_ecardform_out']       		= 'onMouseOut';
$BL['be_admin_struct_topcount']         = 'mitu artiklit n�idata uuemate artiklite loetelus (kui 1, siis esimene artikkel t�ismahus)';

// added: 19-04-2004
$BL['be_subnav_msg_newslettersend']     = 'uudiskiri';
$BL['be_newsletter_addnl']              = 'lisa uudiskiri';
$BL['be_newsletter_titleeditnl']        = 'muuda uudiskirja';
$BL['be_newsletter_newnl']              = 'loo uus';
$BL['be_newsletter_button_savenl']      = 'salvesta';
$BL['be_newsletter_fromname']           = 'kellelt e-mail';
$BL['be_newsletter_fromemail']          = 'kellele e-mail';
$BL['be_newsletter_replyto']            = 'reply e-mail';
$BL['be_newsletter_changed']            = 'viimane muudatus';
$BL['be_newsletter_placeholder']        = 'kohat�ide';
$BL['be_newsletter_htmlpart']           = 'HTML uudiskirja sisu';
$BL['be_newsletter_textpart']           = 'Sisukokkuv�te';
$BL['be_newsletter_allsubscriptions']   = 'k�ik tellijad';
$BL['be_newsletter_verifypage']         = 'kontrolli linki';
$BL['be_newsletter_open']               = 'HTML/TEXT sisend';
$BL['be_newsletter_open1']              = '(avamiseks kliki ikoonile)';
$BL['be_newsletter_sendnow']            = 'Saada uudiskiri';
$BL['be_newsletter_attention']          = '<strong style="color:#CC3300;">T�helepanu!</strong> Uudiskirja saatmist paljudele saajatele korraga v�ib k�sitleda sp�mmina, kontrolli saajate nimekirja ning saada uudiskiri igaks juhuks eelnevalt testiks oma aadressil.';
$BL['be_newsletter_attention1']         = 'Kui oled teinud muudatusi, palun salvesta need k�igepealt!';
$BL['be_newsletter_testemail']          = 'test e-mail';
$BL['be_newsletter_sendnlbutton']       = 'saada uudiskiri';
$BL['be_newsletter_sendprocess']        = 'saadan';
$BL['be_newsletter_attention2']         = '<strong style="color:#CC3300;">T�helepanu!</strong> �ra katkesta kuni uudiskirja saatmine pole �nnelikult l�pule j�udnud. Vastasel korral loetakse sessioon eba�nnestunuks ja j�rgmine kord saadetakse sama uudiskiri uuesti!.';
$BL['be_newsletter_testerror']          = '<span style="color:#CC3300;font-size:11px;">test e-maili aaddress <strong>###TEST###</strong> pole �ige!<br />&nbsp;<br />Palun proovi uuesti!';
$BL['be_newsletter_to']                 = 'Saajad';
$BL['be_newsletter_ready']              = 'uudiskirja saatmine: VALMIS';
$BL['be_newsletter_readyfailed']        = 'Saatmine eba�nnestus';
$BL['be_subnav_msg_subscribers']        = 'uudiskirja tellijad';

// added: 20-04-2004
$BL['be_ctype_sitemap']				    = 'sisukord';
$BL['be_cnt_sitemap_catimage']          = 'taseme ikoon';
$BL['be_cnt_sitemap_articleimage']      = 'artikli ikoon';
$BL['be_cnt_sitemap_display']           = 'kuva';
$BL['be_cnt_sitemap_structuronly']      = 'ainult struktuuritasemed';
$BL['be_cnt_sitemap_structurarticle']   = 'struktuuritasemed + artiklid';
$BL['be_cnt_sitemap_catclass']          = 'taseme klass';
$BL['be_cnt_sitemap_articleclass']      = 'artikli klass';
$BL['be_cnt_sitemap_count']             = 'counter';
$BL['be_cnt_sitemap_classcount']        = 'lisa klassi nimele';
$BL['be_cnt_sitemap_noclasscount']      = 'mitte lisada klassi nimele';

// added: 23-04-2004
$BL['be_ctype_bid']				        = 'pakkumine';
$BL['be_cnt_bid_bidtext']               = 'pakkumise tekst';
$BL['be_cnt_bid_sendtext']              = '"saadetud" tekst';
$BL['be_cnt_bid_verifiedtext']          = 'kinnitatud tekst';
$BL['be_cnt_bid_errortext']             = 'pakkumine kustutatud';
$BL['be_cnt_bid_verifyemail']           = 'kinnita e-mail';
$BL['be_cnt_bid_startbid']              = 'alghind';

// added: 29-04-2004
$BL['be_cnt_bid_nextbidadd']            = 'pakkumise&nbsp;samm';

// added: 10-05-2004
$BL['be_ctype_pages']                   = 'ext. content';
$BL['be_cnt_pages_select']              = 'vali fail';
$BL['be_cnt_pages_fromfile']            = 'fail struktuurist';
$BL['be_cnt_pages_manually']            = 'kohandatud tee/fail v�i URL';
$BL['be_cnt_pages_cust']                = 'fail/URL';
$BL['be_cnt_pages_from']                = 'l�te';

// added: 24-05-2004
$BL['be_ctype_reference']               = 'rollover pildid';
$BL['be_cnt_reference_basis']           = 'joondamine';
$BL['be_cnt_reference_horizontal']      = 'horisontaalne';
$BL['be_cnt_reference_vertical']        = 'vertikaalne';
$BL['be_cnt_reference_aligntext']       = 'miniatuurpildid';
$BL['be_cnt_reference_largetext']       = 'suured pildid';
$BL['be_cnt_reference_zoom']            = 'zoom';
$BL['be_cnt_reference_middle']          = 'keskmine';
$BL['be_cnt_reference_border']          = '��risjoon';
$BL['be_cnt_reference_block']           = 'plokk l x k';

// added: 31-05-2004
$BL['be_article_rendering']             = 'viimistlus';
$BL['be_article_nosummary']             = '�ra n�ita artikli juures kokkuv�tet';
$BL['be_article_forlist']               = 'artiklite loetelu';
$BL['be_article_forfull']               = 'kuva terve artikkel';

// added: 08-07-2004
$BL["setup_dir_exists"]                 = '<div style="font-size: 14px;">T�HELEPANU!</div>SETUP&quot; kataloog on kustutamata!<br>Kui oled phpwcms-i edukalt seadistanud, siis kustuta see kataloog. J�ttes kataloogi kustutamata ning vaikimisi kasutajanime ja parooli, j�tad ka v�imaluse oma server �le v�tta.';

// added: 12-08-2004
$BL['be_cnt_guestbook_banned']          = 'keelatud s�nad';
$BL['be_cnt_guestbook_flooding']        = 'marsruutimine';
$BL['be_cnt_guestbook_setcookie']       = 'saada k�psis';
$BL['be_cnt_guestbook_allowed']         = 'lubatud j�lle peale';
$BL['be_cnt_guestbook_seconds']         = 'j�rgmised';
$BL['be_alias_ID']                      = 'alias ID';
$BL['be_ftrash_delall']                 = "Kas soovid pr�gikasti t�hjendada?";
$BL['be_ftrash_delallfiles']            = 't�hjenda pr�gikast';

// added: 16-08-2004
$BL['be_subnav_msg_importsubscribers']  = 'CSV tellijate import';
$BL['be_newsletter_importtitle']        = 'Impordi uudiskirja tellijad';
$BL['be_newsletter_entriesfound']       = 'sissekannet&nbsp;leitud';
$BL['be_newsletter_foundinfile']        = 'failis';
$BL['be_newsletter_addresses']          = 'aadressid';
$BL['be_newsletter_csverror']           = 'Imporditud CSV fail pole korrektne! Kontrolli eraldajat!';
$BL['be_newsletter_importall']          = 'impordi k�ik kirjed';
$BL['be_newsletter_addressesadded']     = 'aadressid on lisatud.';
$BL['be_newsletter_newimport']          = 'uus import';
$BL['be_newsletter_importerror']        = 'Palun kontrolli CSV faili - aadressi ei saa lisada!';
$BL['be_newsletter_shouldbe1']          = 'Sinu CSV fail v�iks olla sellisel kujul';
$BL['be_newsletter_shouldbe2']          = 'aga sa v�id valida kohandatud eraldaja';
$BL['be_newsletter_sample']             = 'n�idis';
$BL['be_newsletter_selectCSV']          = 'vali CSV fail';
$BL['be_newsletter_delimeter']          = 'eraldaja';
$BL['be_newsletter_importCSV']          = 'impordi CSV fail';

// added: 24-08-2004
$BL['be_admin_struct_orderarticle']     = 'm��ratud artiklite tellimine';
$BL['be_admin_struct_orderdate']        = 'loodud';
$BL['be_admin_struct_orderchangedate']  = 'muudetud';
$BL['be_admin_struct_orderstartdate']   = 'alustatud';
$BL['be_admin_struct_orderdesc']        = 'laskuvas j�rjestuses';
$BL['be_admin_struct_orderasc']         = 't�usvas j�rjestuses';
$BL['be_admin_struct_ordermanual']      = 'k�sitsi (nool �les/alla)';
$BL['be_cnt_sitemap_startid']           = 'alusta';


?>