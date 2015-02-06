<?php
/**
 * phpwcms content management system
 *
 * @author Oliver Georgi <og@phpwcms.org>
 * @copyright Copyright (c) 2002-2015, Oliver Georgi
 * @license http://opensource.org/licenses/GPL-2.0 GNU GPL-2
 * @link http://www.phpwcms.de
 *
 **/


// Language: Lithuanian, Language Code: lt
// please use HTML safe strings ONLY,neccessary to reduce processing time
// normal line break:    '&#13', JavaScript Linebreak: '\n'


$BL['usr_online']                       = 'prisijung� vartotojai';

// Login Page
$BL["login_text"]                       = '�veskite prisijungimo duomenis';
$BL['login_error']                      = 'Prisijungimo klaidos!';
$BL["login_username"]                   = 'vardas';
$BL["login_userpass"]                   = 'slapta�odis';
$BL["login_button"]                     = 'Prisijungti';
$BL["login_lang"]                       = 'administravimo kalba';

// phpwcms.php
$BL['be_nav_logout']                    = 'ATSIJUNGTI';
$BL['be_nav_articles']                  = 'TURINYS';
$BL['be_nav_files']                     = 'FAILAI';
$BL['be_nav_modules']                   = 'MODULIAI';
$BL['be_nav_messages']                  = '�INUT�S';
$BL['be_nav_chat']                      = 'POKALBIAI';
$BL['be_nav_profile']                   = 'PROFILIS';
$BL['be_nav_admin']                     = 'ADMINISTRAVIMAS';
$BL['be_nav_discuss']                   = 'DISKUSIJOS';

$BL['be_page_title']                    = 'phpwcms administravimas';

$BL['be_subnav_article_center']         = 'straipsni� centras';
$BL['be_subnav_article_new']            = 'naujas straipsnis';
$BL['be_subnav_file_center']            = 'fail� centras';
$BL['be_subnav_file_ftptakeover']       = 'ftp per�mimas';
$BL['be_subnav_mod_artists']            = 'atlik�jas, kategojis, �anras';
$BL['be_subnav_msg_center']             = '�inu�i� centras';
$BL['be_subnav_msg_new']                = 'nauja �inut�';
$BL['be_subnav_msg_newsletter']         = 'naujienlai�ki� prenumerata';
$BL['be_subnav_chat_main']              = 'pagrindinis pokalbi� puslapis';
$BL['be_subnav_chat_internal']          = 'vidiniai pokalbiai';
$BL['be_subnav_profile_login']          = 'prisijungimo informacija';
$BL['be_subnav_profile_personal']       = 'asmeniniai duomenus';
$BL['be_subnav_admin_pagelayout']       = 'puslapio maketas';
$BL['be_subnav_admin_templates']        = '�ablonai';
$BL['be_subnav_admin_css']              = 'css pagal nutyl�jim�';
$BL['be_subnav_admin_sitestructure']    = 'tinklapio strukt�ra';
$BL['be_subnav_admin_users']            = 'vartotoj� valdymas';
$BL['be_subnav_admin_filecat']          = 'fail� kategorijos';


// admin.functions.inc.php
$BL['be_func_struct_articleID']         = 'straipsnio ID';
$BL['be_func_struct_preview']           = 'per�i�ra';
$BL['be_func_struct_edit']              = 'redaguoti straipsn�';
$BL['be_func_struct_sedit']             = 'redaguoti strukt�ros lyg�';
$BL['be_func_struct_cut']               = 'i�kirpti straipsn�';
$BL['be_func_struct_nocut']             = 'deaktyvuoti straipsnio i�kirpim�';
$BL['be_func_struct_svisible']          = 'perjungti matom�/nematom�';
$BL['be_func_struct_spublic']           = 'perjungti vie�as/ne vie�as';
$BL['be_func_struct_sort_up']           = 'auk�tyn';
$BL['be_func_struct_sort_down']         = '�emyn';
$BL['be_func_struct_del_article']       = 'i�trinti straipsn�';
$BL['be_func_struct_del_jsmsg']         = 'Ar tikrai norite \ni�trinti straipsn�?'; // "\n" = JavaScript Linebreak
$BL['be_func_struct_new_article']       = 'sukurti nauj� straipsn� �iame strukt�ros lygyje';
$BL['be_func_struct_paste_article']     = '�klijuoti straipsn� �iame strukt�ros lygyje';
$BL['be_func_struct_insert_level']      = '�terpti strukt�ros lyg�';
$BL['be_func_struct_paste_level']       = '�klijuoti strukt�ros lyg�';
$BL['be_func_struct_cut_level']         = 'i�kirpti strukt�ros lyg�';
$BL['be_func_struct_no_cut']            = "Ne�manoma i�kirpti pradinio lygio!";
$BL['be_func_struct_no_paste1']         = "Ne�manoma �ia �klijuoti!";
$BL['be_func_struct_no_paste2']         = 'is child in root line of the tree level';
$BL['be_func_struct_no_paste3']         = '�klijuoti reik�t� �ia';
$BL['be_func_struct_paste_cancel']      = 'cancel structure level change';
$BL['be_func_struct_del_struct']        = 'i�trinti strukt�ros lyg�';
$BL['be_func_struct_del_sjsmsg']        = 'Ar tikrai norite i�trinti \nstrukt�ros lyg�?'; // "\n" = JavaScript Linebreak
$BL['be_func_struct_open']              = 'atidaryti';
$BL['be_func_struct_close']             = 'u�daryti';
$BL['be_func_struct_empty']             = 'tu��ias';

// article.contenttype.inc.php
$BL['be_ctype_plaintext']               = 'paprastas tekstas';
$BL['be_ctype_html']                    = 'html';
$BL['be_ctype_code']                    = 'programos kodas (source)';
$BL['be_ctype_textimage']               = 'tekstas su paveiksl�liu';
$BL['be_ctype_images']                  = 'paveiksl�liai';
$BL['be_ctype_bulletlist']              = 's�ra�as';
$BL['be_ctype_link']                    = 'nuorodos &amp; el. pa�to adresai';
$BL['be_ctype_linklist']                = 'nuorod� s�ra�as';
$BL['be_ctype_linkarticle']             = 'nuoroda � straipsn�';
$BL['be_ctype_multimedia']              = 'multimedia';
$BL['be_ctype_filelist']                = 'fail� s�ra�as';
$BL['be_ctype_emailform']               = 'el. pa�to forma';
$BL['be_ctype_newsletter']              = 'naujienlai�kis';

// profile.create.inc.php
$BL['be_profile_create_success']        = 'Profilis s�kmingai sukurtas.';
$BL['be_profile_create_error']          = 'Sukuriant �vyko klaida.';

// profile.update.inc.php
$BL['be_profile_update_success']        = 'Profilio duomenys s�kmingai atnaujinti.';
$BL['be_profile_update_error']          = 'Atnaujinant �vyko klaida.';

// profile.updateaccount.inc.php
$BL['be_profile_account_err1']          = 'vartotoja vardas {VAL} netinka';
$BL['be_profile_account_err2']          = 'slapta�odis per trumtas (tik {VAL} simboliai: ma�iausiai reikia 5-ki�)';
$BL['be_profile_account_err3']          = 'pakartoti reikia tok� pat� slapta�od�';
$BL['be_profile_account_err4']          = 'el. pa�to adresas {VAL} neteisingas';

// profile.data.tmpl.php
$BL['be_profile_data_title']            = 'j�s� asmeniniai duomenys';
$BL['be_profile_data_text']             = 'asmeniniai duomenys �vedami pasirinktinai. Jie kitiems vartotojams arba lankytojams leis daugiau su�inoti apie jus, j�s� interesus ir sugeb�jimus. Jei pa�ym�site atitinkamus punktus varnel�mis, kiti vartotojai gal�s matyti j�s� duomenis vie�oje srityje arba straipsni� puslapiuose.';
$BL['be_profile_label_title']           = 'titulas';
$BL['be_profile_label_firstname']       = 'vardas';
$BL['be_profile_label_name']            = 'pavard�';
$BL['be_profile_label_company']         = 'kompanija';
$BL['be_profile_label_street']          = 'gatv�';
$BL['be_profile_label_city']            = 'miestas';
$BL['be_profile_label_state']           = 'provincija, valstija';
$BL['be_profile_label_zip']             = 'pa�to kodas';
$BL['be_profile_label_country']         = '�alis';
$BL['be_profile_label_phone']           = 'telefonas';
$BL['be_profile_label_fax']             = 'faksas';
$BL['be_profile_label_cellphone']       = 'mobilus telefonas';
$BL['be_profile_label_signature']       = 'para�as';
$BL['be_profile_label_notes']           = 'pastabos';
$BL['be_profile_label_profession']      = 'profesija';
$BL['be_profile_label_newsletter']      = 'naujienlai�kis';
$BL['be_profile_text_newsletter']       = 'A� noriu gauti bendr� phpwcms naujienlai�k�.';
$BL['be_profile_label_public']          = 'vie�ai matoma';
$BL['be_profile_text_public']           = 'Bet kas gali pasi�i�r�ti mano duomenis.';
$BL['be_profile_label_button']          = 'atnaujinti asmeninius duomenis';

// profile.account.tmpl.php
$BL['be_profile_account_title']         = 'j�s� prisijungimo informacija';
$BL['be_profile_account_text']          = 'Paprastai nereikia keisti vartotojo vardo. <br />Saugimo sumetimais kartas nuo karto pakeiskite savo slapta�od�.';
$BL['be_profile_label_err']             = 'reikia pa�ym�ti (patikrinti?)';
$BL['be_profile_label_username']        = 'vartotojo vardas';
$BL['be_profile_label_newpass']         = 'naujas slapta�odis';
$BL['be_profile_label_repeatpass']      = 'pakartokite nauj� slapta�od�';
$BL['be_profile_label_email']           = 'el. pa�to adresas';
$BL['be_profile_account_button']        = 'atjaujinti prisijungimo duomenis';
$BL['be_profile_label_lang']            = 'kalba';


// files.ftptakeover.tmpl.php
$BL['be_ftptakeover_title']             = 'perimti failus atsi�stus per ftp';
$BL['be_ftptakeover_mark']              = 'mark';
$BL['be_ftptakeover_available']         = 'esantys failai';
$BL['be_ftptakeover_size']              = 'dydis';
$BL['be_ftptakeover_nofile']            = 'fail� n�ra &#8211; atsi�skite juos per ftp';
$BL['be_ftptakeover_all']               = 'VISUS';
$BL['be_ftptakeover_directory']         = 'direktorija';
$BL['be_ftptakeover_rootdir']           = 'pagrindin� direktorija';
$BL['be_ftptakeover_needed']            = 'reikalinga!!! (turite pa�ym�ti vien�)';
$BL['be_ftptakeover_optional']          = 'pasirinktinai';
$BL['be_ftptakeover_keywords']          = 'raktiniai �od�iai';
$BL['be_ftptakeover_additional']        = 'papildomai';
$BL['be_ftptakeover_longinfo']          = 'ilgas apra�ymas';
$BL['be_ftptakeover_status']            = 'statusas';
$BL['be_ftptakeover_active']            = 'aktyvus';
$BL['be_ftptakeover_public']            = 'vie�as';
$BL['be_ftptakeover_createthumb']       = 'sukurti per�i�ros paveiksliuk�';
$BL['be_ftptakeover_button']            = 'perimti pa�ym�tus failus';

// files.reiter.tmpl.php
$BL['be_ftab_title']                    = 'fail� centras';
$BL['be_ftab_createnew']                = 'sukurti nauj� direktorij� pagrindin�je direktorijoje';
$BL['be_ftab_paste']                    = 'nukopijuoti atmintyje esant� fail� � pagrindin� direktorij�';
$BL['be_ftab_disablethumb']             = 's�ra�e nerodyti per�i�ros paveiksliuk�';
$BL['be_ftab_enablethumb']              = 's�ra�e rodyti per�i�ros paveiksliukus';
$BL['be_ftab_private']                  = 'privat�s&nbsp;failai';
$BL['be_ftab_public']                   = 'vie�i&nbsp;failai';
$BL['be_ftab_search']                   = 'paie�ka';
$BL['be_ftab_trash']                    = '�iuk�li�&nbsp;d���';
$BL['be_ftab_open']                     = 'atidaryti visas direktorijas';
$BL['be_ftab_close']                    = 'u�daryti visas atidarytas direktorijas';
$BL['be_ftab_upload']                   = 'u�krauti fail� � pagrindin� direktorij�';
$BL['be_ftab_filehelp']                 = 'atidaryti fail� pagalb�';

// files.private.newdir.tmpl.php
$BL['be_fpriv_rootdir']                 = 'pagrindin� direktorija';
$BL['be_fpriv_title']                   = 'sukurti nauj� direktorij�';
$BL['be_fpriv_inside']                  = 'viduje';
$BL['be_fpriv_error']                   = 'klaida: nurodykite direktorijos vard�';
$BL['be_fpriv_name']                    = 'pavadinimas';
$BL['be_fpriv_status']                  = 'statusas';
$BL['be_fpriv_button']                  = 'sukurti nauj� direktorij�';

// files.private.editdir.tmpl.php
$BL['be_fpriv_edittitle']               = 'redaguoti direktorij�';
$BL['be_fpriv_newname']                 = 'naujas pavadinimas';
$BL['be_fpriv_updatebutton']            = 'atnaujinti direktorijos informacij�';

// files.private.upload.tmpl.php
$BL['be_fprivup_err1']                  = 'Pasirinkite fail�, kur� norite u�krauti';
$BL['be_fprivup_err2']                  = 'U�krauto failo dydis yra didesnis negu';
$BL['be_fprivup_err3']                  = 'Klaida ra�ant fail� � saugykl�';
$BL['be_fprivup_err4']                  = 'Klaida kuriant vartotojo direktorij�.';
$BL['be_fprivup_err5']                  = 'per�i�ros paveiksl�lio n�ra';
$BL['be_fprivup_err6']                  = 'Pra�ome daugiau nebandyti - tai serverio klaida! Susisiekite su savo <a href="mailto:{VAL}">webmasteriu</a> kaip galima grei�iau!';
$BL['be_fprivup_title']                 = 'u�krauti failus';
$BL['be_fprivup_button']                = 'u�krauti failus';
$BL['be_fprivup_upload']                = 'u�krauti';

// files.private.editfile.tmpl.php
$BL['be_fprivedit_title']               = 'redaguoti failo apra�ym�';
$BL['be_fprivedit_filename']            = 'failo pavadinimas';
$BL['be_fprivedit_created']             = 'sukurtas';
$BL['be_fprivedit_dateformat']          = 'Y-m-d H:i';
$BL['be_fprivedit_err1']                = 'proof name of file (atstatyti pradin� pavadinim�)';
$BL['be_fprivedit_clockwise']           = 'pasukti per�i�ros paveiksl�l� pagal laikrod�io rodykl� [pradinis failas +90&deg;]';
$BL['be_fprivedit_cclockwise']          = 'pasukti per�i�ros paveiksl�l� prie� laikrod�io rodykl� [pradinis failas -90&deg;]';
$BL['be_fprivedit_button']              = 'atnaujinti failo apra�ym�';
$BL['be_fprivedit_size']                = 'dydis';

// files.private-functions.inc.php
$BL['be_fprivfunc_upload']              = 'u�krauti fail� � direktorij�';
$BL['be_fprivfunc_makenew']             = 'viduje sukurti nauj� direktorij�';
$BL['be_fprivfunc_paste']               = 'nukopijuoti fail� i� atminties � direktorij�';
$BL['be_fprivfunc_edit']                = 'redaguoti direktorij�';
$BL['be_fprivfunc_cactive']             = 'perjungti � aktyvi�/neaktyvi�';
$BL['be_fprivfunc_cpublic']             = 'perjungti � vie��/nevie��';
$BL['be_fprivfunc_deldir']              = 'I�trinti direktorij�';
$BL['be_fprivfunc_jsdeldir']            = 'Ar tikrai norite \ni�trinti direktorij�?';
$BL['be_fprivfunc_notempty']            = 'direktorija {VAL} n�ra tu��ia!';
$BL['be_fprivfunc_opendir']             = 'atidaryti direktorij�';
$BL['be_fprivfunc_closedir']            = 'u�daryti direktorij�';
$BL['be_fprivfunc_dlfile']              = 'atisi�sti fail�';
$BL['be_fprivfunc_clipfile']            = 'atmintyje esantis failas';
$BL['be_fprivfunc_cutfile']             = 'i�kirpti';
$BL['be_fprivfunc_editfile']            = 'redaguoti failo apra�ym�';
$BL['be_fprivfunc_cactivefile']         = 'perjungti � aktyv�/neaktyv�';
$BL['be_fprivfunc_cpublicfile']         = 'perjungti � vie��/nevie��';
$BL['be_fprivfunc_movetrash']           = 'i�mesti � �iuk�li� d���';
$BL['be_fprivfunc_jsmovetrash1']        = 'Ar tikrai norite i�mesti';
$BL['be_fprivfunc_jsmovetrash2']        = '� �iuk�i� d���?';

// files.private.additions.inc.php
$BL['be_fprivadd_nofolders']            = 'n�ra priva�i� fail� ir direktorij�';

// files.public.list.tmpl.php
$BL['be_fpublic_user']                  = 'vartotojas';
$BL['be_fpublic_nofiles']               = 'n�ra vie�� fail� ir direktorij�';

// files.private.trash.tmpl.php
$BL['be_ftrash_nofiles']                = '�iuk�i� d��� yra tu��ia';
$BL['be_ftrash_show']                   = 'rodyti priva�ius failus';

// files.private-delfilelist.inc.php
$BL['be_ftrash_restore']                = 'Ar norite atkurti {VAL} \nir gr��inti � privat� s�ra��?';
$BL['be_ftrash_delete']                 = 'Ar norite i�trinti {VAL}?';
$BL['be_ftrash_undo']                   = 'atstatyti (gr��inti i� �iuk�liad���s)';
$BL['be_ftrash_delfinal']               = 'galutinis i�trynimas';

// files.search.tmpl.php
$BL['be_fsearch_err1']                  = 'tu��ia paie�kos u�klausa.';
$BL['be_fsearch_title']                 = 'ie�koti fail�';
$BL['be_fsearch_infotext']              = '�ia galima atlikti paprast� fail� paie�k�. Ie�koma atitinkam� raktini� �od�i�,<br />fail� pavadinim� ir i�samiuose faul� apra�ymuose. Simbolio '*' naudoti negalima. �od�ius atskirkite tarpais. <br /> Pasirinkite IR/ARBA ir koki� fail� ie�koti: asmenini�/vie�ai prieinam�.';
$BL['be_fsearch_nonfound']              = 'pagal j�s� u�klausta fail� nerasta. patikslinkite u�klaus�!';
$BL['be_fsearch_fillin']                = 'malon�kite �ra�yti u�klaus� � vir�uje esant� langel�.';
$BL['be_fsearch_searchlabel']           = 'ie�koti';
$BL['be_fsearch_startsearch']           = 'prad�ti paie�k�';
$BL['be_fsearch_and']                   = 'IR';
$BL['be_fsearch_or']                    = 'ARBA';
$BL['be_fsearch_all']                   = 'visi failai';
$BL['be_fsearch_personal']              = 'privat�s';
$BL['be_fsearch_public']                = 'vie�ai prieinami';

// chat.main.tmpl.php & chat.list.tmpl.php
$BL['be_chat_title']                    = 'vidiniai pokalbiai';
$BL['be_chat_info']                     = '�ia galite kalb�tis su kitais phpwcms sistemos vartotojais. �i terp� yra skirta �nek�tis real-time, bet taip pat galite palikti �inut�, kuri� gal�s perskaityti kiti.';
$BL['be_chat_start']                    = 'nor�dami prad�ti kalb�tis, paspauskite �ia';
$BL['be_chat_lines']                    = 'pokalbio eilut�s';

// message.center.tmpl.php
$BL['be_msg_title']                     = '�inu�i� centras';
$BL['be_msg_new']                       = 'nauja';
$BL['be_msg_old']                       = 'sena';
$BL['be_msg_senttop']                   = 'i�si�stos';
$BL['be_msg_del']                       = 'i�trintos';
$BL['be_msg_from']                      = 'nuo';
$BL['be_msg_subject']                   = 'tema';
$BL['be_msg_date']                      = 'data/laikas';
$BL['be_msg_close']                     = 'u�daryti �inut�';
$BL['be_msg_create']                    = 'sukurti nauj� �inut�';
$BL['be_msg_reply']                     = 'atsakyti � �i� �inut�';
$BL['be_msg_move']                      = 'i�mesti �i� �inut� � �iuk�li� d���';
$BL['be_msg_unread']                    = 'neperskaitytos arba naujos �inut�s';
$BL['be_msg_lastread']                  = 'paskutin�s {VAL} perskaitytos �inut�s';
$BL['be_msg_lastsent']                  = 'paskutin�s {VAL} i�si�stos �inut�s';
$BL['be_msg_marked']                    = '�inut�s pa�ym�tos i�metimui � �iuk�li� d���';
$BL['be_msg_nomsg']                     = '�iame aplanke �inu�i� n�ra';

// message.send.tmpl.php
$BL['be_msg_RE']                        = 'ATS';
$BL['be_msg_by']                        = 'atsi�sta nuo';
$BL['be_msg_on']                        = 'on';
$BL['be_msg_msg']                       = '�inut�';
$BL['be_msg_err1']                      = 'pamir�ote nurodyti gav�j�...';
$BL['be_msg_err2']                      = 'u�pildykite temos laukel� (gav�jui bus ai�kiau)';
$BL['be_msg_err3']                      = 'n�ra prasm�s si�sti �inut�s be teksto ;-)';
$BL['be_msg_sent']                      = '�inut� i�si�sta.';
$BL['be_msg_fwd']                       = 'j�s b�site perkelti � �inu�i� centr� arba';
$BL['be_msg_newmsgtitle']               = 'ra�ykite nauj� �inut�';
$BL['be_msg_err']                       = 'klaida siun�iant �inut�';
$BL['be_msg_sendto']                    = 'kam si�sti �inut�';
$BL['be_msg_available']                 = 'galim� adresat� s�ra�as';
$BL['be_msg_all']                       = 'si�sti �inut� visiems pa�ym�tiems adresatams';

// message.subscription.tmpl.php
$BL['be_newsletter_title']              = 'naujienlai�kio u�sakymai';
$BL['be_newsletter_titleedit']          = 'redaguoti naujienlai�kio u�sakym�';
$BL['be_newsletter_new']                = 'sukurti nauj�';
$BL['be_newsletter_add']                = 'prid�ti&nbsp;naujienlai�kio&nbsp;u�sakym�';
$BL['be_newsletter_name']               = 'vardas';
$BL['be_newsletter_info']               = 'informacija';
$BL['be_newsletter_button_save']        = '�ra�yti u�sakym�';
$BL['be_newsletter_button_cancel']      = 'at�aukti';

// admin.newuser.tmpl.php
$BL['be_admin_usr_err1']                = 'netinkamas vartotojo vardas, �veskite nauj� ';
$BL['be_admin_usr_err2']                = 'ne�vestas vartotojo vardas (b�tinas)';
$BL['be_admin_usr_err3']                = 'ne�vestas slapta�odis (b�tinas)';
$BL['be_admin_usr_err4']                = "negaliojantis el. pa�to adresas";
$BL['be_admin_usr_err']                 = 'klaida';
$BL['be_admin_usr_mailsubject']         = 'sveiki atvyk� � tinklapio administravim�';
$BL['be_admin_usr_mailbody']            = "TINKLAPIO ADMINISTRAVIMO SISTEMA\n\n    vartotojo vardas: {LOGIN}\n    slaprad�odis: {PASSWORD}\n\n\nGalite prisijungti �ia: {LOGIN_PAGE}\n\nsistemos administratorius\n ";
$BL['be_admin_usr_title']               = 'prid�ti nauj� vartotoj�';
$BL['be_admin_usr_realname']            = 'vardas ir pavard�';
$BL['be_admin_usr_setactive']           = 'aktyvuoti vartotoj�';
$BL['be_admin_usr_iflogin']             = 'jei �ia pa�ym�ta, vartotojas gali prisijungti';
$BL['be_admin_usr_isadmin']             = 'vartotojas turi administratoriaus teises';
$BL['be_admin_usr_ifadmin']             = 'jei pa�ym�ta, vartotojas turi visas valdymo teises';
$BL['be_admin_usr_verify']              = 'patikrinimas';
$BL['be_admin_usr_sendemail']           = 'nusi�sti naujam vartotojui el. lai�k� su jo prisijungimo duomenimis';
$BL['be_admin_usr_button']              = '�ra�yti vartotojo duomenis';

// admin.edituser.tmpl.php
$BL['be_admin_usr_etitle']              = 'redaguoti vartotojo duomenis';
$BL['be_admin_usr_emailsubject']        = 'duomenys pakeisti';
$BL['be_admin_usr_emailbody']           = "VARTOTOJO INFORMACIJA PAKEISTA\n\n    vartotojo vardas: {LOGIN}\n    slapta�odis: {PASSWORD}\n\n\nPrisijungti galite �ia: {LOGIN_PAGE}\n\nsistemos administratorius\n ";
$BL['be_admin_usr_passnochange']        = '[NAUDOKITE SAVO SLAPTA�OD�]';
$BL['be_admin_usr_ebutton']             = 'atnaujinti vartotojo duomenis';

// admin.listuser.tmpl.php
$BL['be_admin_usr_ltitle']              = 'sistemos vartotoj� s�ra�as';
$BL['be_admin_usr_ldel']                = 'D�MESIO!&#13�itas mygtukas i�trina vartotoj�';
$BL['be_admin_usr_create']              = 'sukurti nauj� vartotoj�';
$BL['be_admin_usr_editusr']             = 'redaguoti vartotoj�';

// admin.structform.tmpl.php
$BL['be_admin_struct_title']            = 'tinklapio strukt�ra';
$BL['be_admin_struct_child']            = '(priklauso)';
$BL['be_admin_struct_index']            = 'indeksas (tinklapio prad�ia)';
$BL['be_admin_struct_cat']              = 'kategorijos pavadinimas';
$BL['be_admin_struct_status']           = 'meniu statusas';
$BL['be_admin_struct_hide1']            = 'pasl�pti';
$BL['be_admin_struct_hide2']            = '�i&nbsp;kategorija&nbsp;yra&nbsp;meniu';
$BL['be_admin_struct_info']             = 'categorijos infotekstas';
$BL['be_admin_struct_template']         = '�ablonas';
$BL['be_admin_struct_alias']            = 'trumpas �ios kategorijos pavadinimas';
$BL['be_admin_struct_visible']          = 'matoma';
$BL['be_admin_struct_button']           = '�ra�yti kategorijos duomenis';
$BL['be_admin_struct_close']            = 'u�daryti';

// admin.filecat.tmpl.php
$BL['be_admin_fcat_title']              = 'fail� kategorijos';
$BL['be_admin_fcat_err']                = 'ne�vestas kategorijos pavadinimas!';
$BL['be_admin_fcat_name']               = 'kategorijos pavadinimas';
$BL['be_admin_fcat_needed']             = 'reikalinga';
$BL['be_admin_fcat_button1']            = 'atnaujinti';
$BL['be_admin_fcat_button2']            = 'sukurti';
$BL['be_admin_fcat_delmsg']             = 'Ar tikrai norite\ni�trinti failo rakt�?';
$BL['be_admin_fcat_fcat']               = 'failo kategorija';
$BL['be_admin_fcat_err1']               = 'nenurodytas failo rakto pavadinimas!';
$BL['be_admin_fcat_fkeyname']           = 'failo rakto pavadinimas';
$BL['be_admin_fcat_exit']               = 'i�eiti i� redagavimo';
$BL['be_admin_fcat_addkey']             = 'prid�ti nauj� rakt�';
$BL['be_admin_fcat_editcat']            = 'redaguoti kategorijos pavadinim�';
$BL['be_admin_fcat_delcatmsg']          = 'Ar tikrai norite \ni�trinti failo kategorij�?';
$BL['be_admin_fcat_delcat']             = 'i�trinti failo kategorij�';
$BL['be_admin_fcat_delkey']             = 'i�trinti failo rakto pavadinim�';
$BL['be_admin_fcat_editkey']            = 'redaguoti rakt�';
$BL['be_admin_fcat_addcat']             = 'sukurti nauj� fail� kategorij�';

// admin.pagelayout.tmpl.php
$BL['be_admin_page_title']              = 'tinklapio nustatymai: puslapio maketas';
$BL['be_admin_page_align']              = 'puslapio lygiavimas';
$BL['be_admin_page_align_left']         = 'standartinis viso puslapio turinio lygiavimas (kair�je)';
$BL['be_admin_page_align_center']       = 'centruoti vis� puslapio turin�';
$BL['be_admin_page_align_right']        = 'viso puslapio turinys de�in�je';
$BL['be_admin_page_margin']             = 'pakra��iai';
$BL['be_admin_page_top']                = 'vir�us';
$BL['be_admin_page_bottom']             = 'apa�ia';
$BL['be_admin_page_left']               = 'kair�';
$BL['be_admin_page_right']              = 'de�in�';
$BL['be_admin_page_bg']                 = 'fonas';
$BL['be_admin_page_color']              = 'spalva';
$BL['be_admin_page_height']             = 'auk�tis';
$BL['be_admin_page_width']              = 'plotis';
$BL['be_admin_page_main']               = 'pagrindin� dalis';
$BL['be_admin_page_leftspace']          = 'kair�s atskyrimas';
$BL['be_admin_page_rightspace']         = 'de�in�s atskyrimas';
$BL['be_admin_page_class']              = 'klas�';
$BL['be_admin_page_image']              = 'paveiksl�lis';
$BL['be_admin_page_text']               = 'tekstas';
$BL['be_admin_page_link']               = 'nuoroda';
$BL['be_admin_page_js']                 = 'javascriptas';
$BL['be_admin_page_visited']            = 'aplankyta nuoroda';
$BL['be_admin_page_pagetitle']          = 'puslapio&nbsp;antra�t�';
$BL['be_admin_page_addtotitle']         = 'prid�ti&nbsp;prie&nbsp;antra�t�s';
$BL['be_admin_page_category']           = 'kategorija';
$BL['be_admin_page_articlename']        = 'straipsnio&nbsp;pavadinimas';
$BL['be_admin_page_blocks']             = 'blokai';
$BL['be_admin_page_allblocks']          = 'visi blokai';
$BL['be_admin_page_col1']               = '3 stulpeli� maketas';
$BL['be_admin_page_col2']               = '2 stulpeli� maketas (turinys de�in�je, navigacija kair�je)';
$BL['be_admin_page_col3']               = '2 stulpeli� maketas (turinys kair�je, navigacija de�in�je)';
$BL['be_admin_page_col4']               = '1 stulpelio maketas';
$BL['be_admin_page_header']             = 'vir�us';
$BL['be_admin_page_footer']             = 'apa�ia';
$BL['be_admin_page_topspace']           = 'vir�aus&nbsp;atskyrimas';
$BL['be_admin_page_bottomspace']        = 'apa�ios&nbsp;atskyrimas';
$BL['be_admin_page_button']             = 'i�saugoti puslapio maket�';

// admin.frontendcss.tmpl.php
$BL['be_admin_css_title']               = 'tinklapio nustatymai: css duomenys';
$BL['be_admin_css_css']                 = 'css';
$BL['be_admin_css_button']              = 'i�saugoti css duomenis';

// admin.templates.tmpl.php
$BL['be_admin_tmpl_title']              = 'tinklapio nustatymai: �ablonai';
$BL['be_admin_tmpl_default']            = 'pagal nutyl�jim�';
$BL['be_admin_tmpl_add']                = 'prid�ti&nbsp;�ablon�';
$BL['be_admin_tmpl_edit']               = 'redaguoti �ablon�';
$BL['be_admin_tmpl_new']                = 'sukurti nauj�';
$BL['be_admin_tmpl_css']                = 'css failas';
$BL['be_admin_tmpl_head']               = 'html head';
$BL['be_admin_tmpl_js']                 = 'js onload';
$BL['be_admin_tmpl_error']              = 'kai&nbsp;puslapis&nbsp;tu��ias';
$BL['be_admin_tmpl_button']             = 'i�saugoti �ablon�';
$BL['be_admin_tmpl_name']               = 'pavadinimas';

// article.structlist.tmpl.php
$BL['be_article_title']                 = 'tinklapio strukt�ra ir straipsni� s�ra�as';

// article.new.tmpl.php
$BL['be_article_err1']                  = 'ne�vestas straipsnio pavadinimas';
$BL['be_article_err2']                  = 'buvo nurodyta klaidinga prad�ios data - nustatyta dabartin� data';
$BL['be_article_err3']                  = 'buvo nurodyta klaidinga pabaigos data - nustatyta dabartin� data';
$BL['be_article_title1']                = 'pagrindin� straipsnio informacija';
$BL['be_article_cat']                   = 'kategorija';
$BL['be_article_atitle']                = 'straipsnio pavadinimas';
$BL['be_article_asubtitle']             = 'paantra�t�';
$BL['be_article_abegin']                = 'rodymo prad�ia';
$BL['be_article_aend']                  = 'rodymo pabaiga';
$BL['be_article_aredirect']             = 'nukreipti �';
$BL['be_article_akeywords']             = 'raktiniai �od�iai';
$BL['be_article_asummary']              = 'santrauka';
$BL['be_article_abutton']               = 'sukurti nauj� straipsn�';

// article.editcontent.inc.php
$BL['be_article_err4']                  = 'pabaigos data buvo kladinga - nustatyta dabartin� data + 1 savait�';

// article.editsummary.tmpl.php
$BL['be_article_estitle']               = 'redaguoti pagrindin� straipsnio informacij�';
$BL['be_article_eslastedit']            = 'paskutinis redagavimas';
$BL['be_article_esnoupdate']            = 'forma neatnaujinta';
$BL['be_article_esbutton']              = 'atnaujinti straipsnio duomenis';

// articlecontent.edit.tmpl.php
$BL['be_article_cnt_title']             = 'straipsnio turinys';
$BL['be_article_cnt_type']              = 'turinio tipas';
$BL['be_article_cnt_space']             = 'tarpas';
$BL['be_article_cnt_before']            = 'prie�';
$BL['be_article_cnt_after']             = 'po';
$BL['be_article_cnt_top']               = 'top';
$BL['be_article_cnt_ctitle']            = 'pavadinimas';
$BL['be_article_cnt_back']              = 'visa straipsnio informacija';
$BL['be_article_cnt_button1']           = 'atnaujinti turin�';
$BL['be_article_cnt_button2']           = 'sukurti turin�';

// articlecontent.list.tmpl.php
$BL['be_article_cnt_ltitle']            = 'straipsnio informacija';
$BL['be_article_cnt_ledit']             = 'redaguoti straipsn�';
$BL['be_article_cnt_lvisible']          = 'perjungti � rodom�/nerodom�';
$BL['be_article_cnt_ldel']              = 'i�trinti �� straipsn�';
$BL['be_article_cnt_ldeljs']            = 'I�trinti straipsn�?';
$BL['be_article_cnt_redirect']          = 'peradresavimas';
$BL['be_article_cnt_edited']            = 'redagavo';
$BL['be_article_cnt_start']             = 'rodymo prad�ios data';
$BL['be_article_cnt_end']               = 'rodymo pabaigos data';
$BL['be_article_cnt_add']               = 'prid�ti nauj� turinio element�';
$BL['be_article_cnt_up']                = 'perkelti turin� auk�tyn';
$BL['be_article_cnt_down']              = 'perkelti turin� auk�tyn';
$BL['be_article_cnt_edit']              = 'redaguoti turinio element�';
$BL['be_article_cnt_delpart']           = 'i�trinti �� turinio element�';
$BL['be_article_cnt_delpartjs']         = 'I�trinti turinio element�?';
$BL['be_article_cnt_center']            = 'straipsni� centras';

// content forms
$BL['be_cnt_plaintext']                 = 'paprastas tekstas';
$BL['be_cnt_htmltext']                  = 'html tekstas';
$BL['be_cnt_image']                     = 'paveiksl�lis';
$BL['be_cnt_position']                  = 'pozicija';
$BL['be_cnt_pos0']                      = 'Vir�, keir�je';
$BL['be_cnt_pos1']                      = 'Vir�, per vidur�';
$BL['be_cnt_pos2']                      = 'Vir�, de�in�je';
$BL['be_cnt_pos3']                      = 'Apa�ioje, kair�je';
$BL['be_cnt_pos4']                      = 'Apa�ioje, per vidur�';
$BL['be_cnt_pos5']                      = 'Apa�ioje, de�in�je';
$BL['be_cnt_pos6']                      = 'Tekste, kair�je';
$BL['be_cnt_pos7']                      = 'Tekste, de�in�je';
$BL['be_cnt_pos0i']                     = 'Paveiksl�lis vir� teksto kair�je';
$BL['be_cnt_pos1i']                     = 'Paveiksl�lis vir� teksto per vidur�';
$BL['be_cnt_pos2i']                     = 'Paveiksl�lis vir� teksto de�in�je';
$BL['be_cnt_pos3i']                     = 'Paveiksl�lis po tekstu kair�je';
$BL['be_cnt_pos4i']                     = 'Paveiksl�lis po tekstu per vidur�';
$BL['be_cnt_pos5i']                     = 'Paveiksl�lis po tekstu de�in�je';
$BL['be_cnt_pos6i']                     = 'Paveiksl�lis tekste kair�je';
$BL['be_cnt_pos7i']                     = 'Paveiksl�lis tekste de�in�je';
$BL['be_cnt_maxw']                      = 'maks.&nbsp;plotis';
$BL['be_cnt_maxh']                      = 'maks.&nbsp;auk�tis';
$BL['be_cnt_enlarge']                   = 'paspaudus&nbsp;padidinti';
$BL['be_cnt_caption']                   = 'pavadinimas';
$BL['be_cnt_subject']                   = 'tema';
$BL['be_cnt_recipient']                 = 'gav�jas';
$BL['be_cnt_buttontext']                = 'mygtuko tekstas';
$BL['be_cnt_sendas']                    = 'si�sti kaip';
$BL['be_cnt_text']                      = 'tekst�';
$BL['be_cnt_html']                      = 'html';
$BL['be_cnt_formfields']                = 'formos laukai';
$BL['be_cnt_code']                      = 'kodas';
$BL['be_cnt_infotext']                  = 'apra�ymas';
$BL['be_cnt_subscription']              = 'galimos&nbsp;prenumeratos';
$BL['be_cnt_labelemail']                = 'el. pa�to&nbsp;laukas';
$BL['be_cnt_tablealign']                = 'lentel�s&nbsp;lygiavimas';
$BL['be_cnt_labelname']                 = 'vardo&nbsp;laukas';
$BL['be_cnt_labelsubsc']                = 'prenumeratos&nbsp;laukas';
$BL['be_cnt_allsubsc']                  = 'visos&nbsp;prenum.';
$BL['be_cnt_default']                   = 'pagal nutyl�jim�';
$BL['be_cnt_left']                      = 'kair�je';
$BL['be_cnt_center']                    = 'per vidur�';
$BL['be_cnt_right']                     = 'de�ineje';
$BL['be_cnt_buttontext']                = 'mygtuko&nbsp;tekstas';
$BL['be_cnt_successtext']               = 'tektas&nbsp;po&nbsp;registr.';
$BL['be_cnt_regmail']                   = 'registravimo&nbsp;el. pa�to adresas';
$BL['be_cnt_logoffmail']                = 'i�registravimo&nbsp;el. pa�to adresas';
$BL['be_cnt_changemail']                = 'pakeitimo&nbsp;el. pa�to adresas';
$BL['be_cnt_openimagebrowser']          = 'atidaryti paveiksl�li� nar�ykl�';
$BL['be_cnt_openfilebrowser']           = 'atidaryti fail� nar�ykl�';
$BL['be_cnt_sortup']                    = 'auk�tyn';
$BL['be_cnt_sortdown']                  = '�emyn';
$BL['be_cnt_delimage']                  = 'pa�alinti pasirinkt� paveiksl�l�';
$BL['be_cnt_delfile']                   = 'pa�alinti pasirinkt� fail�';
$BL['be_cnt_delmedia']                  = 'pa�alinti pasirinkt� objekt�';
$BL['be_cnt_column']                    = 'stulpelis';
$BL['be_cnt_imagespace']                = 'paveiksl�lio&nbsp;erdv�';
$BL['be_cnt_directlink']                = 'tiesiogin� nuoroda';
$BL['be_cnt_target']                    = 'atidaryti';
$BL['be_cnt_target1']                   = 'naujame lange';
$BL['be_cnt_target2']                   = 'in parent frame of the window';
$BL['be_cnt_target3']                   = 'tame pa�iame lange be r�m�';
$BL['be_cnt_target4']                   = 'tame pa�iame r�me arba lange';
$BL['be_cnt_bullet']                    = 'bullet list';
$BL['be_cnt_linklist']                  = 'nuorod� s�ra�as';
$BL['be_cnt_plainhtml']                 = 'paprastas html';
$BL['be_cnt_files']                     = 'failai';
$BL['be_cnt_description']               = 'apra�ymas';
$BL['be_cnt_linkarticle']               = 'nuoroda � straipsn�';
$BL['be_cnt_articles']                  = 'straipsniai';
$BL['be_cnt_movearticleto']             = 'perkelti pasirinkt� straipsn� � straipsni� s�ra��';
$BL['be_cnt_removearticleto']           = 'i�imti pasirinkt� straipsn� i� straipsni� s�ra�o';
$BL['be_cnt_mediatype']                 = 'media tipas';
$BL['be_cnt_control']                   = 'kontrol�';
$BL['be_cnt_showcontrol']               = 'radyti kontrol�s juost�';
$BL['be_cnt_autoplay']                  = 'paleisti automati�kai';
$BL['be_cnt_source']                    = 'kodas';
$BL['be_cnt_internal']                  = 'vidinis';
$BL['be_cnt_openmediabrowser']          = 'atidaryti media objekt� nar�ykl�';
$BL['be_cnt_external']                  = 'i�orinis';
$BL['be_cnt_mediapos0']                 = 'kair�je (pagal nutyl�jim�)';
$BL['be_cnt_mediapos1']                 = 'per vidur�';
$BL['be_cnt_mediapos2']                 = 'de�ineje';
$BL['be_cnt_mediapos3']                 = 'blokas, kair�je';
$BL['be_cnt_mediapos4']                 = 'blokas, de�in�je';
$BL['be_cnt_mediapos0i']                = 'media vir� teksto kair�je';
$BL['be_cnt_mediapos1i']                = 'media vir� teksto per vidur�';
$BL['be_cnt_mediapos2i']                = 'media vir� teksto de�in�je';
$BL['be_cnt_mediapos3i']                = 'media tekste kair�je';
$BL['be_cnt_mediapos4i']                = 'media tekste de�in�je';
$BL['be_cnt_setsize']                   = 'nustatyti dyd�';
$BL['be_cnt_set1']                      = 'media u�ims 160x120px';
$BL['be_cnt_set2']                      = 'media u�ims 240x180px ';
$BL['be_cnt_set3']                      = 'media u�ims 320x240px';
$BL['be_cnt_set4']                      = 'media u�ims 480x360px';
$BL['be_cnt_set5']                      = 'i�valyti media auk��io ir plo�io parametrus';

// added: 28-12-2003
$BL['be_admin_page_add']                = 'sukurti nauj� puslapio maket�';
$BL['be_admin_page_name']               = 'maketo pavadinimas';
$BL['be_admin_page_edit']               = 'redaguoti maket�';
$BL['be_admin_page_render']             = 'atvaizdavimas';
$BL['be_admin_page_table']              = 'lentel�';
$BL['be_admin_page_div']                = 'css div';
$BL['be_admin_page_custom']             = 'kitas';
$BL['be_admin_page_custominfo']         = 'i� �ablono pagrindinio bloko';
$BL['be_admin_tmpl_layout']             = 'maketas';
$BL['be_admin_tmpl_nolayout']           = 'N�ra puslapio maketo!';

// added: 31-12-2003
$BL['be_ctype_search']                  = 'paie�ka';
$BL['be_cnt_results']                   = 'rezultatai';
$BL['be_cnt_results_per_page']          = 'per&nbsp;puslap� (jei nepa�ym�ta, rodyti visk�)';
$BL['be_cnt_opennewwin']                = 'atidaryti nauj� lang�';
$BL['be_cnt_searchlabeltext']           = 'tai yra i� anksto nustatyti tekstai ir parametrai paie�kos formai ir rezultat� puslapiui, tekstai yra rodomi kuomet rezultatai netelpa � vien� puslap�.';
$BL['be_cnt_input']                     = '�vedimas';
$BL['be_cnt_style']                     = 'stilius';
$BL['be_cnt_result']                    = 'rezultatai';
$BL['be_cnt_next']                      = 'kitas';
$BL['be_cnt_previous']                  = 'prie� tai buv�s';
$BL['be_cnt_align']                     = 'lygiuoti';
$BL['be_cnt_searchformtext']            = '�emiau esantys tekstai yra rodomi atidarius paie�kos form� arba kai paie�ka neduoda rezultato.';
$BL['be_cnt_intro']                     = 'intro';
$BL['be_cnt_noresult']                  = 'kai n�ra rezultat�';

// added: 02-01-2004
$BL['be_admin_page_disable']            = 'deaktyvuoti';

// added: 09-01-2004
$BL['be_article_articleowner']          = 'straipsnio savininkas';
$BL['be_article_adminuser']             = 'vartotojas administratorius';
$BL['be_article_username']              = 'autorius';

// added: 10-01-2004
$BL['be_ctype_wysywig']                 = 'WYSIWYG HTML';

// added, changed: 11-01-2004
$BL['be_admin_struct_regonly']          = 'visible for users logged on only';
$BL['be_admin_struct_status']           = 'frontend menu status';

// added: 15-02-2004
$BL['be_ctype_articlemenu']				= 'article menu';
$BL['be_cnt_sitelevel']					= 'site level';
$BL['be_cnt_sitecurrent']				= 'current site level';

?>