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


// Language: Hungarian, Language Code: hu
// please use HTML safe strings ONLY,neccessary to reduce processing time
// normal line break:    '&#13', JavaScript Linebreak: '\n'


$BL['usr_online']                       = 'online felhaszn�l�k';

// Login Page
$BL["login_text"]                       = 'K�rem, adja meg a bejelentkez�s adatait';
$BL['login_error']                      = 'Hiba a bejelentkez�skor!';
$BL["login_username"]                   = 'felhaszn�l� neve';        
$BL["login_userpass"]                   = 'jelsz�';                  
$BL["login_button"]                     = 'Bejelenkez�s';            
$BL["login_lang"]                       = 'backend (adminisztr�ci�) nyelve';

// phpwcms.php
$BL['be_nav_logout']                    = 'KIJELENTKEZ�S';  
$BL['be_nav_articles']                  = 'CIKKEK';         
$BL['be_nav_files']                     = 'FILE';           
$BL['be_nav_modules']                   = 'MODULOK';        
$BL['be_nav_messages']                  = '�ZENET';         
$BL['be_nav_chat']                      = 'CHAT';           
$BL['be_nav_profile']                   = 'PROFIL';         
$BL['be_nav_admin']                     = 'ADMIN';          
$BL['be_nav_discuss']                   = 'F�RUM';          

$BL['be_page_title']                    = 'phpwcms backend (adminisztr�ci�)';

$BL['be_subnav_article_center']         = 'cikkek'; 							
$BL['be_subnav_article_new']            = '�j cikk';							
$BL['be_subnav_file_center']            = 'file-ok';							
$BL['be_subnav_file_ftptakeover']       = 'ftp felt�lt�t�s';					
$BL['be_subnav_mod_artists']            = 'szerz�, kateg�ria, m�faj';			
$BL['be_subnav_msg_center']             = '�zenetek';							
$BL['be_subnav_msg_new']                = '�j �zenet';							
$BL['be_subnav_msg_newsletter']         = 'h�rlev�l el�fizet�sek';				
$BL['be_subnav_chat_main']              = 'chat kezd�oldal';					
$BL['be_subnav_chat_internal']          = 'bels� chat';							
$BL['be_subnav_profile_login']          = 'bejelentkez�s adatai';				
$BL['be_subnav_profile_personal']       = 'szem�lyes adatok';					
$BL['be_subnav_admin_pagelayout']       = 'lapszerkezet (layout)';				
$BL['be_subnav_admin_templates']        = 'sablonok (templates)';				
$BL['be_subnav_admin_css']              = 'alap�rtelmezett css';				
$BL['be_subnav_admin_sitestructure']    = 'weblap (site) strukt�ra';			
$BL['be_subnav_admin_users']            = 'felhaszn�l� adminisztr�ci�';			
$BL['be_subnav_admin_filecat']          = 'file kateg�ri�k';					


// admin.functions.inc.php
$BL['be_func_struct_articleID']         = 'cikk ID';										
$BL['be_func_struct_preview']           = 'el�n�zet (preview)';								
$BL['be_func_struct_edit']              = 'cikk szerkeszt�se';								
$BL['be_func_struct_sedit']             = 'strukt�ra szint szerkeszt�se';					
$BL['be_func_struct_cut']               = 'cikk kiv�g�sa';									
$BL['be_func_struct_nocut']             = 'cikk kiv�g�s�nak tilt�sa (visszavon�sa)';		
$BL['be_func_struct_svisible']          = 'v�lt�s l�that�/l�thatatlan';						
$BL['be_func_struct_spublic']           = 'v�lt�s publikus / nem publikus';					
$BL['be_func_struct_sort_up']           = '�trendez�s: fel';								
$BL['be_func_struct_sort_down']         = '�trendez�s: le';									
$BL['be_func_struct_del_article']       = 'cikk t�rl�se';									
$BL['be_func_struct_del_jsmsg']         = 'Biztos t�rli a \ncikket?';						
$BL['be_func_struct_new_article']       = '�j cikk l�trehoz�sa a strukt�ra szinten bel�l'; 	
$BL['be_func_struct_paste_article']     = 'cikk beillest�se a strukt�ra szinten bel�lre';	
$BL['be_func_struct_insert_level']      = 'strukt�ra szint beilleszt�se ide:';				
$BL['be_func_struct_paste_level']       = 'beilleszt�s a strukt�ra szintbe:';				
$BL['be_func_struct_cut_level']         = 'kiv�g�s, strukt�ra szint:';						
$BL['be_func_struct_no_cut']            = "Nem lehets�ges a gy�k�r szintet kiv�gni!";		
$BL['be_func_struct_no_paste1']         = "Nem lehets�ges ide beilleszteni!";				
$BL['be_func_struct_no_paste2']         = 'a fa szint gy�k�r�nek gyermeke';					
$BL['be_func_struct_no_paste3']         = 'ide kellene beilleszteni';						
$BL['be_func_struct_paste_cancel']      = 'a strukt�ra szint v�ltoztat�s v�ge';				
$BL['be_func_struct_del_struct']        = 'strukt�ra szint t�rl�se';						
$BL['be_func_struct_del_sjsmsg']        = 'Biztos t�rli a \nstrukt�ra szintet?';			
$BL['be_func_struct_open']              = 'megnyit�s';										
$BL['be_func_struct_close']             = 'lez�r�s';										
$BL['be_func_struct_empty']             = '�res';											

// article.contenttype.inc.php
$BL['be_ctype_plaintext']               = 'egyszer� sz�veg';								
$BL['be_ctype_html']                    = 'html';											
$BL['be_ctype_code']                    = 'k�d';											
$BL['be_ctype_textimage']               = 'sz�veg k�ppel';									
$BL['be_ctype_images']                  = 'k�pek';											
$BL['be_ctype_bulletlist']              = 'lista (felsorol�s)';								
$BL['be_ctype_ullist']     		        = 'lista';											
$BL['be_ctype_link']                    = 'link &amp; email';								
$BL['be_ctype_linklist']                = 'link lista';										
$BL['be_ctype_linkarticle']             = 'cikk link';										
$BL['be_ctype_multimedia']              = 'multimedia';										
$BL['be_ctype_filelist']                = 'file lista';										
$BL['be_ctype_emailform']               = 'email �rlap';									
$BL['be_ctype_newsletter']              = 'h�rlev�l';										

// profile.create.inc.php
$BL['be_profile_create_success']        = 'A profil sikeresen l�trej�tt';					
$BL['be_profile_create_error']          = 'Hiba a l�trehoz�s sor�n';						

// profile.update.inc.php
$BL['be_profile_update_success']        = 'A profil sikeresen m�dos�tva';					
$BL['be_profile_update_error']          = 'Hiba a m�dos�t�s sor�n'; 						

// profile.updateaccount.inc.php
$BL['be_profile_account_err1']          = 'felhasz�l� n�v (VAL) �rv�nytelen';
$BL['be_profile_account_err2']          = 't�l r�vid jelsz� (csak {VAL} karakter: legal�bb 5 sz�ks�ges)'; 
$BL['be_profile_account_err3']          = 'a jelsz� �s a megism�telt jelsz� pontosan meg kell egyezzen';  
$BL['be_profile_account_err4']          = '�rv�nytelen email {VAL}';

// profile.data.tmpl.php
$BL['be_profile_data_title']            = 'az �n szem�lyes adatai';
$BL['be_profile_data_text']             = 'a szem�lyes adatok megd�sa opcion�lis. Seg�theti a t�bbi felhaszn�l�t, vagy a weblap l�t�gat�it, hogy t�bbet tudjanak meg �rdekl�d�si k�r�r�l, k�pzetts�g�r�l. Ha bejel�li a megfelel� checkbox-ot, a felhaszn�l�k l�thatj�k az �n szem�lyes adatait (vagy nem, ha letiltja).';		
$BL['be_profile_label_title']           = 'titulus';										
$BL['be_profile_label_firstname']       = 'keresztn�v';										
$BL['be_profile_label_name']            = 'vezet�kn�v';										
$BL['be_profile_label_company']         = 'c�g';											
$BL['be_profile_label_street']          = 'utca';											
$BL['be_profile_label_city']            = 'v�ros';											
$BL['be_profile_label_state']           = 'megye';											
$BL['be_profile_label_zip']             = 'ir�ny�t�sz�m';									
$BL['be_profile_label_country']         = 'orsz�g';											
$BL['be_profile_label_phone']           = 'telefon';										
$BL['be_profile_label_fax']             = 'fax';											
$BL['be_profile_label_cellphone']       = 'mobil';											
$BL['be_profile_label_signature']       = 'al��r�s';										
$BL['be_profile_label_notes']           = 'megjegyz�s';										
$BL['be_profile_label_profession']      = 'foglalkoz�s';									
$BL['be_profile_label_newsletter']      = 'h�rlev�l';										
$BL['be_profile_text_newsletter']       = 'Feliratokozom a general phpwcms newsletter-re';	
$BL['be_profile_label_public']          = 'publikus';										
$BL['be_profile_text_public']           = 'B�rki l�thatja a szem�lyes adataimat.';			
$BL['be_profile_label_button']          = 'szem�lyes adatok m�dos�t�sa';					

// profile.account.tmpl.php
$BL['be_profile_account_title']         = 'az �n bejelentkez�si adatai';					
$BL['be_profile_account_text']          = 'Norm�lis esetben nem sz�ks�ges, hogy a felhasz�l�i nev�t megv�ltoztassa.<br />Cser�lje rendszeresen a jelszav�t, a biztons�g n�vel�se �rdek�ben!'; 
$BL['be_profile_label_err']             = 'k�rem, ellen�rizze';								
$BL['be_profile_label_username']        = 'felhasz�l� neve';								
$BL['be_profile_label_newpass']         = '�j jelsz�';										
$BL['be_profile_label_repeatpass']      = '�j jelsz� m�gegyszer';							
$BL['be_profile_label_email']           = 'email';											
$BL['be_profile_account_button']        = 'bejelentkez�si adatok m�dos�t�sa';				
$BL['be_profile_label_lang']            = 'nyelv';											


// files.ftptakeover.tmpl.php
$BL['be_ftptakeover_title']             = 'ftp-vel felt�lt�tt file-ok �tv�tele';			
$BL['be_ftptakeover_mark']              = 'jel';											
$BL['be_ftptakeover_available']         = 'rendelkez�sre �ll� file-ok';						
$BL['be_ftptakeover_size']              = 'm�ret';											
$BL['be_ftptakeover_nofile']            = 'm�g nincs egy file sem, felt�lthet ftp seg�ts�g�vel';
$BL['be_ftptakeover_all']               = 'MIND';											
$BL['be_ftptakeover_directory']         = 'k�nyvt�r';										
$BL['be_ftptakeover_rootdir']           = 'gy�k�r k�nyvt�r';								
$BL['be_ftptakeover_needed']            = 'sz�ks�ges!!! (egyet v�lasztani)';				
$BL['be_ftptakeover_optional']          = 'opcion�lis';										
$BL['be_ftptakeover_keywords']          = 'kulcsszavak';									
$BL['be_ftptakeover_additional']        = 'kieg�sz�t�';										
$BL['be_ftptakeover_longinfo']          = 'b�vebb inform�ci�';								
$BL['be_ftptakeover_status']            = 'st�tusz';										
$BL['be_ftptakeover_active']            = 'akt�v';											
$BL['be_ftptakeover_public']            = 'publikus';										
$BL['be_ftptakeover_createthumb']       = 'kis k�p (thumbnail) l�trehoz�sa'; 				
$BL['be_ftptakeover_button']            = 'a kiv�lasztott file-ok �tv�tele';				

// files.reiter.tmpl.php
$BL['be_ftab_title']                    = 'file-ok';										
$BL['be_ftab_createnew']                = '�j file l�trehoz�sa a gy�k�r k�nyvt�rba';		
$BL['be_ftab_paste']                    = 'file beilleszt�se a gy�k�r k�nyvt�rba v�g�lapr�l';
$BL['be_ftab_disablethumb']             = 'kis k�p (thumbnail) letilt�sa';					
$BL['be_ftab_enablethumb']              = 'kis k�p (thumbnail) enged�lyez�se';				
$BL['be_ftab_private']                  = 'priv�t&nbsp;file-ok';							
$BL['be_ftab_public']                   = 'publikus&nbsp;file-ok';							
$BL['be_ftab_search']                   = 'keres�s';										
$BL['be_ftab_trash']                    = 'lomt�r';											
$BL['be_ftab_open']                     = 'minden k�nyt�r megnyit�sa';						
$BL['be_ftab_close']                    = 'minden nyitott k�nyvt�r bez�r�sa';				
$BL['be_ftab_upload']                   = 'file felt�lt�se a gy�k�r k�nyvt�rba';			
$BL['be_ftab_filehelp']                 = 'file s�g� megnyit�sa';							

// files.private.newdir.tmpl.php
$BL['be_fpriv_rootdir']                 = 'gy�k�r k�nyvt�r';								
$BL['be_fpriv_title']                   = '�j k�nyvt�r l�trehoz�sa';						
$BL['be_fpriv_inside']                  = 'ezen bel�lre';									
$BL['be_fpriv_error']                   = 'hiba: k�nyt�r nev�nek kit�lt�se';				
$BL['be_fpriv_name']                    = 'n�v';											
$BL['be_fpriv_status']                  = 'st�tusz';										
$BL['be_fpriv_button']                  = '�j k�nyvt�r l�trehoz�sa';						

// files.private.editdir.tmpl.php
$BL['be_fpriv_edittitle']               = 'k�nyvt�r m�dos�t�s';								
$BL['be_fpriv_newname']                 = '�j n�v';											
$BL['be_fpriv_updatebutton']            = 'k�nyvt�r inform�ci� m�dos�t�s';					

// files.private.upload.tmpl.php
$BL['be_fprivup_err1']                  = 'V�lassza ki a felt�ltend� file-okat';			
$BL['be_fprivup_err2']                  = 'A felt�lt�tt file-ok m�rete nagyobb mint';		
$BL['be_fprivup_err3']                  = 'Hiba �r�s k�zben';								
$BL['be_fprivup_err4']                  = 'Hiba k�nyvt�r l�trehoz�s k�zben';				
$BL['be_fprivup_err5']                  = 'nincs kis k�p (thumbnail)';						
$BL['be_fprivup_err6']                  = 'K�rem ne pr�b�lja �jra - szerver hiba! Vegye fel a kapcsolatot a <a href="mailto:{VAL}">webmesterrel</a> miel�bb';											
$BL['be_fprivup_title']                 = 'file-ok felt�lt�se';								
$BL['be_fprivup_button']                = 'file-ok felt�lt�se';								
$BL['be_fprivup_upload']                = 'felt�lt�se';										

// files.private.editfile.tmpl.php
$BL['be_fprivedit_title']               = 'file inform�ci�k m�dos�t�sa';					
$BL['be_fprivedit_filename']            = 'file-n�v';										
$BL['be_fprivedit_created']             = 'l�trehozva';										
$BL['be_fprivedit_dateformat']          = 'Y-m-d H:i';										
$BL['be_fprivedit_err1']                = 'file n�v fel�lvizsg�lat (erdeti vissza�ll�t�s)';	
$BL['be_fprivedit_clockwise']           = 'forgat�sa �raj�r�s szerint [eredeti file +90&deg;]'; 
$BL['be_fprivedit_cclockwise']          = 'forgat�sa �raj�r�s ellen [eredeti file -90&deg;]'; 	
$BL['be_fprivedit_button']              = 'file inform�ci�k m�dos�t�sa';						
$BL['be_fprivedit_size']                = 'm�ret';												

// files.private-functions.inc.php
$BL['be_fprivfunc_upload']              = 'file felt�lt�se a k�nyvt�rba';					
$BL['be_fprivfunc_makenew']             = '�j k�nyvt�r l�trehoz�sa ezen bel�lre';			
$BL['be_fprivfunc_paste']               = 'a v�g�lapon lev� file beilleszt�se a k�nyvt�rba';
$BL['be_fprivfunc_edit']                = 'k�nyvt�r szerkeszt�se';							
$BL['be_fprivfunc_cactive']             = 'v�lt�s akt�v/inakt�v';							
$BL['be_fprivfunc_cpublic']             = 'v�t�s publikus/nem publikus';					
$BL['be_fprivfunc_deldir']              = 'k�nyvt�r t�rl�se';								
$BL['be_fprivfunc_jsdeldir']            = 'Biztos t�rli \na k�nyvt�rat?';					
$BL['be_fprivfunc_notempty']            = 'a k�nyvt�r {VAL} nem �res';						
$BL['be_fprivfunc_opendir']             = 'k�nyvt�r megnyit�sa';							
$BL['be_fprivfunc_closedir']            = 'k�nyvt�r bez�r�sa';								
$BL['be_fprivfunc_dlfile']              = 'file let�lt�se';									
$BL['be_fprivfunc_clipfile']            = 'v�g�lap file';									
$BL['be_fprivfunc_cutfile']             = 'kiv�g�s';										
$BL['be_fprivfunc_editfile']            = 'file inform�ci�k szerkeszt�se';					
$BL['be_fprivfunc_cactivefile']         = 'v�lt�s akt�v/inakt�v';							
$BL['be_fprivfunc_cpublicfile']         = 'v�t�s publikus/nem publikus';					
$BL['be_fprivfunc_movetrash']           = 'lomt�rba tesz';									
$BL['be_fprivfunc_jsmovetrash1']        = 'Biztos a lomt�r';								
$BL['be_fprivfunc_jsmovetrash2']        = 'k�nyvt�rba teszi?';								

// files.private.additions.inc.php
$BL['be_fprivadd_nofolders']            = 'nincs priv�t file vagy k�nyvt�r';				

// files.public.list.tmpl.php
$BL['be_fpublic_user']                  = 'felhaszn�l�';									
$BL['be_fpublic_nofiles']               = 'nincs publikus file vagy k�nyvt�r';				

// files.private.trash.tmpl.php
$BL['be_ftrash_nofiles']                = 'a lomt�r �res';									
$BL['be_ftrash_show']                   = 'priv�t file-ok megtekint�se';					

// files.private-delfilelist.inc.php
$BL['be_ftrash_restore']                = 'Vissza�ll�tja {VAL} -t\n�s visszateszi a priv�t list�ba?'; 
$BL['be_ftrash_delete']                 = 'Biztos t�rli {VAL} -t?';							
$BL['be_ftrash_undo']                   = 'vissz�ll�t�s (t�rl�s visszavon�s)';				
$BL['be_ftrash_delfinal']               = 'v�gleges t�rl�s';								

// files.search.tmpl.php
$BL['be_fsearch_err1']                  = 'a keres� mez� �res';								
$BL['be_fsearch_title']                 = 'file keres�se';									
$BL['be_fsearch_infotext']              = 'File inform�ci�k egyszer� keres�se. Egyez�st keres a kulcsszavak ,<br /> file-n�v �s a b�vebb file inform�ci�ban. Nem t�mogatja wildcard megad�s�t. A keres� szavakat sz�k�zzel kell elv�laztani. V�lassza ki a keres� szavak k�zti logikai kapcsolatot �S/VAGY �s a file t�pus�t priv�t/publikus';
$BL['be_fsearch_nonfound']              = 'Nincs file, amely megfelelne a felt�telnek. M�dos�tsa a keres�si felt�telt.'; 
$BL['be_fsearch_fillin']                = 'K�rem t�ltse ki a fenti keres� mez�t.';			
$BL['be_fsearch_searchlabel']           = 'keresend�';										
$BL['be_fsearch_startsearch']           = 'keres�s ind�t�sa';								
$BL['be_fsearch_and']                   = '�S';												
$BL['be_fsearch_or']                    = 'VAGY';											
$BL['be_fsearch_all']                   = 'minden';											
$BL['be_fsearch_personal']              = 'priv�t';											
$BL['be_fsearch_public']                = 'publikus';										

// chat.main.tmpl.php & chat.list.tmpl.php
$BL['be_chat_title']                    = 'bels� chat';										
$BL['be_chat_info']                     = 'Itt b�rmir�l chat-elhet m�s phpwcms backend felhaszn�l�kkal. Ez val�s idej� besz�lget�sre alkalmas, de lehet olyan �zenetet �rni, amit mindenki olvashat. Ha eszm�t akar cser�lni m�s felhaszn�l�kkal, haszn�lja a discussion-t (k�s�bbi phpwcms verzi�ban).';
$BL['be_chat_start']                    = 'kattintson ide a chat elkezd�s�hez';				
$BL['be_chat_lines']                    = 'chat sorok';										

// message.center.tmpl.php
$BL['be_msg_title']                     = '�zenetek';										
$BL['be_msg_new']                       = '�j';												
$BL['be_msg_old']                       = 'r�gi';											
$BL['be_msg_senttop']                   = 'k�ld�tt';										
$BL['be_msg_del']                       = 't�r�lt';											
$BL['be_msg_from']                      = 'felad�';											
$BL['be_msg_subject']                   = 't�rgy';											
$BL['be_msg_date']                      = 'd�tum/id�';										
$BL['be_msg_close']                     = '�zenet lez�r�sa';								
$BL['be_msg_create']                    = '�j �zenet l�trehoz�sa';							
$BL['be_msg_reply']                     = 'v�lasz az �zenetre';								
$BL['be_msg_move']                      = 'az �zenetet lomt�rba teszi';						
$BL['be_msg_unread']                    = 'olvasatlan vagy �j �zenetek';					
$BL['be_msg_lastread']                  = 'utols� {VAL} olvasott �zenet';					
$BL['be_msg_lastsent']                  = 'utols� {VAL} elk�ld�tt �zenet';					
$BL['be_msg_marked']                    = 't�rl�sre kijel�lt �zenetek (lomt�r)';			
$BL['be_msg_nomsg']                     = 'nincs �zenet ebben a mapp�ban';					

// message.send.tmpl.php
$BL['be_msg_RE']                        = 'RE';
$BL['be_msg_by']                        = 'k�ldte';											
$BL['be_msg_on']                        = 'd�tum';											
$BL['be_msg_msg']                       = '�zenet';											
$BL['be_msg_err1']                      = 'elfelejtette a c�mzettet be�ll�tani';			
$BL['be_msg_err2']                      = 't�ltse ki a t�rgy mez�t (a c�mzett �gy jobban tudja kezelni az �zenetet)';	
$BL['be_msg_err3']                      = 'nem �rt �zenetet';								
$BL['be_msg_sent']                      = 'az �j �zenet elk�ldve';							
$BL['be_msg_fwd']                       = '�nt �tir�ny�tjuk az �zenetek men�be, vagy';		
$BL['be_msg_newmsgtitle']               = '�j �zenet �r�sa';								
$BL['be_msg_err']                       = 'hiba az �zenet k�ld�sekor';						
$BL['be_msg_sendto']                    = 'c�mzett';										
$BL['be_msg_available']                 = 'az el�rhet� c�mzettek list�ja';					
$BL['be_msg_all']                       = '�zenet k�ld�se az �sszes kiv�lasztott c�mzettnek';	

// message.subscription.tmpl.php
$BL['be_newsletter_title']              = 'h�rlev�l el�fizet�sek';							
$BL['be_newsletter_titleedit']          = 'h�rlev�l el�fizet�s szerkeszt�se';				
$BL['be_newsletter_new']                = '�j l�trehoz�s';									
$BL['be_newsletter_add']                = 'h�rlev�l&nbsp;el�fizet�s&nbsp;hozz�ad�sa';		
$BL['be_newsletter_name']               = 'n�v';											
$BL['be_newsletter_info']               = 'info';											
$BL['be_newsletter_button_save']        = 'el�fizet�s ment�se';								
$BL['be_newsletter_button_cancel']      = 'm�gsem';											

// admin.newuser.tmpl.php
$BL['be_admin_usr_err1']                = 'a felhaszn�l�i n�v �rv�nytelen, v�lasszon m�sikat';	
$BL['be_admin_usr_err2']                = 'a felhaszn�l�i n�v �res (ki kell t�lteni)';'username is empty (required)';
$BL['be_admin_usr_err3']                = 'a jelsz� �res (ki kell t�lteni)';				
$BL['be_admin_usr_err4']                = "email �rv�nytelen";								
$BL['be_admin_usr_err']                 = 'hiba';											
$BL['be_admin_usr_mailsubject']         = '�dv�zl�m a phpwcms backend-ben';					
$BL['be_admin_usr_mailbody']            = "�DV�ZL�M A PHPWCMS BACKEND-ben\n\n    felhaszn�l�i neve: {LOGIN}\n    jelsz�: {PASSWORD}\n\n\nIde jelentkezhet be: {LOGIN_PAGE}\n\nphpwcms admin\n ";
$BL['be_admin_usr_title']               = '�j felhaszn�l� hozz�ad�sa';						
$BL['be_admin_usr_realname']            = 'igazi n�v';										
$BL['be_admin_usr_setactive']           = 'felhaszn�l� aktiv�l�sa';							
$BL['be_admin_usr_iflogin']             = 'ha be�ll�tja, a felhaszn�l� bejelentkezhet';		
$BL['be_admin_usr_isadmin']             = 'a felhaszn�l� adminisztr�tor';					
$BL['be_admin_usr_ifadmin']             = 'ha be�ll�tja, a felhaszn�l� adminisztr�tori jogot kap'; 
$BL['be_admin_usr_verify']              = 'meger�s�tes';									
$BL['be_admin_usr_sendemail']           = 'email k�ld�se az �j felhaszn�l�nak a bejelentkez�s adataival'; 
$BL['be_admin_usr_button']              = 'felhaszn�l�i adatok k�ld�se';					

// admin.edituser.tmpl.php
$BL['be_admin_usr_etitle']              = 'felhaszn�l� szerkeszt�se';						
$BL['be_admin_usr_emailsubject']        = 'phpwcms - felhaszn�l�i adatok megv�ltoztak';		
$BL['be_admin_usr_emailbody']           = "PHPWCMS FELHASZN�L�I ADATOK MEGV�LTOZTAK\n\n    felhaszn�l�i neve: {LOGIN}\n    jelsz�: {PASSWORD}\n\n\nIde jelentkezhet be: {LOGIN_PAGE}\n\nphpwcms admin\n ";
$BL['be_admin_usr_passnochange']        = '[NINCS V�LTOZ�S - A R�GI JELSZ�T HASZN�LJA]';    
$BL['be_admin_usr_ebutton']             = 'felhaszn�l�i adatok m�dos�t�sa';					

// admin.listuser.tmpl.php
$BL['be_admin_usr_ltitle']              = 'phpwcms felhaszn�l�k list�ja';					
$BL['be_admin_usr_ldel']                = 'FIGYELEM!&#13Ez t�rli a felhaszn�l�t';			
$BL['be_admin_usr_create']              = '�j felhaszn�l� l�trehoz�sa';						
$BL['be_admin_usr_editusr']             = 'felhaszn�l� szerkeszt�se';						

// admin.structform.tmpl.php
$BL['be_admin_struct_title']            = 'weblap (site) strukt�ra';						
$BL['be_admin_struct_child']            = '(gyermeke a stukt�ra szintnek)';					
$BL['be_admin_struct_index']            = 'index (website start)';							
$BL['be_admin_struct_cat']              = 'kateg�ria c�m';									
$BL['be_admin_struct_hide1']            = 'elrejt';											
$BL['be_admin_struct_hide2']            = 'ez a kateg�ria a men�ben';						
$BL['be_admin_struct_info']             = 'kateg�ria info sz�veg';							
$BL['be_admin_struct_template']         = 'sablon&nbsp;(template )';						
$BL['be_admin_struct_alias']            = 'kateg�ria alias';								
$BL['be_admin_struct_visible']          = 'l�that�';										
$BL['be_admin_struct_button']           = 'kateg�ria adatok elk�ld�se';						
$BL['be_admin_struct_close']            = 'bez�r�s';										

// admin.filecat.tmpl.php
$BL['be_admin_fcat_title']              = 'file kateg�ri�k';								
$BL['be_admin_fcat_err']                = 'a kateg�ria n�v �res';							
$BL['be_admin_fcat_name']               = 'kateg�ria n�v';									
$BL['be_admin_fcat_needed']             = 'sz�ks�ges';										
$BL['be_admin_fcat_button1']            = 'm�dos�t�s';										
$BL['be_admin_fcat_button2']            = 'l�trehoz�s';										
$BL['be_admin_fcat_delmsg']             = 'Biztos t�rli a\nfile kulcsot?';					
$BL['be_admin_fcat_fcat']               = 'file kateg�ria';									
$BL['be_admin_fcat_err1']               = 'file kulcs n�v �res';							
$BL['be_admin_fcat_fkeyname']           = 'file kulcs n�v';									
$BL['be_admin_fcat_exit']               = 'kil�p�s';										
$BL['be_admin_fcat_addkey']             = '�j kulcs hozz�ad�sa';							
$BL['be_admin_fcat_editcat']            = 'kateg�ria n�v szereszt�se';						
$BL['be_admin_fcat_delcatmsg']          = 'Biztos t�rli a\nfile kateg�ri�t';				
$BL['be_admin_fcat_delcat']             = 'file kateg�ria t�rl�se';							
$BL['be_admin_fcat_delkey']             = 'file kulcs n�v t�rl�se';							
$BL['be_admin_fcat_editkey']            = 'kulcs szerkeszt�se';								
$BL['be_admin_fcat_addcat']             = '�j file kateg�ria l�trehoz�sa';					

// admin.pagelayout.tmpl.php
$BL['be_admin_page_title']              = 'frontend setup: lapszerkezet (page layout)';				
$BL['be_admin_page_align']              = 'lap igaz�t�s';											
$BL['be_admin_page_align_left']         = 'standard igaz�t�s (balra) a lap teljes tartalm�t';		
$BL['be_admin_page_align_center']       = 'k�z�pre a lap teljes tartalm�t';							
$BL['be_admin_page_align_right']        = 'jobbra a lap teljes tartalm�t';							
$BL['be_admin_page_margin']             = 'marg�';													
$BL['be_admin_page_top']                = 'fels�';													
$BL['be_admin_page_bottom']             = 'als�';													
$BL['be_admin_page_left']               = 'bal';													
$BL['be_admin_page_right']              = 'jobb';													
$BL['be_admin_page_bg']                 = 'h�tt�r';													
$BL['be_admin_page_color']              = 'sz�n';													
$BL['be_admin_page_height']             = 'magass�g';												
$BL['be_admin_page_width']              = 'sz�less�g';												
$BL['be_admin_page_main']               = 'f�r�sz';													
$BL['be_admin_page_leftspace']          = 'bal t�rk�z';												
$BL['be_admin_page_rightspace']         = 'jobb t�rk�z';											
$BL['be_admin_page_class']              = 'class';													
$BL['be_admin_page_image']              = 'k�p';													
$BL['be_admin_page_text']               = 'sz�veg';													
$BL['be_admin_page_link']               = 'link';													
$BL['be_admin_page_js']                 = 'javascript';												
$BL['be_admin_page_visited']            = 'l�togatott';												
$BL['be_admin_page_pagetitle']          = 'lap&nbsp;c�m';											
$BL['be_admin_page_addtotitle']         = 'c�mhez&nbspad';											
$BL['be_admin_page_category']           = 'kateg�ria';												
$BL['be_admin_page_articlename']        = 'cikk&nbsp;neve';											
$BL['be_admin_page_blocks']             = 'blokkok';												
$BL['be_admin_page_allblocks']          = '�sszes blokk';											
$BL['be_admin_page_col1']               = '3 oszlopos elrendez�s';									
$BL['be_admin_page_col2']               = '2 oszlopos elrendez�s (f� oszlop jobbra, navig�ci�s oszlop balra)';
$BL['be_admin_page_col3']               = '2 oszlopos elrendez�s (f� oszlop balra, navig�ci�s oszlop jobbra)';
$BL['be_admin_page_col4']               = '1 oszlopos elrendez�s';									
$BL['be_admin_page_header']             = 'fejl�c';													
$BL['be_admin_page_footer']             = 'l�bl�c';													
$BL['be_admin_page_topspace']           = 'fels� t�rk�z';											
$BL['be_admin_page_bottomspace']        = 'als� t�rk�z';											
$BL['be_admin_page_button']             = 'lapszerkezet ment�se';									

// admin.frontendcss.tmpl.php
$BL['be_admin_css_title']               = 'frontend setup: css data';
$BL['be_admin_css_css']                 = 'css';
$BL['be_admin_css_button']              = 'ment�s css data';										

// admin.templates.tmpl.php
$BL['be_admin_tmpl_title']              = 'fontend setup: sablonok (templates)';					
$BL['be_admin_tmpl_default']            = 'alap�rtelmezett';										
$BL['be_admin_tmpl_add']                = 'sablon&nbsp;hozz�ad�sa';									
$BL['be_admin_tmpl_edit']               = 'sablon (template) szerkeszt�se';							
$BL['be_admin_tmpl_new']                = '�j l�trehoz�sa';											
$BL['be_admin_tmpl_css']                = 'css file';												
$BL['be_admin_tmpl_head']               = 'html head';												
$BL['be_admin_tmpl_js']                 = 'js onload';												
$BL['be_admin_tmpl_error']              = 'hiba';													
$BL['be_admin_tmpl_button']             = 'sablon ment�se';											
$BL['be_admin_tmpl_name']               = 'n�v';													

// article.structlist.tmpl.php
$BL['be_article_title']                 = 'weblap (site) strukt�ra �s cikklista';					

// article.new.tmpl.php
$BL['be_article_err1']                  = 'a cikk c�me �res';										
$BL['be_article_err2']                  = 'kezd�s d�tum megad�sa hib�s - be�ll�tva az aktu�lis';	
$BL['be_article_err3']                  = 'v�ge d�tum hib�s - be�ll�tva az aktu�lis';				
$BL['be_article_title1']                = 'cikk alap inform�ci�';									
$BL['be_article_cat']                   = 'kateg�ria';												
$BL['be_article_atitle']                = 'cikk c�m';												
$BL['be_article_asubtitle']             = 'alc�m';													
$BL['be_article_abegin']                = 'kezd�s';													
$BL['be_article_aend']                  = 'v�ge';													
$BL['be_article_aredirect']             = 'redirect to';											
$BL['be_article_akeywords']             = 'kulcsszavak';											
$BL['be_article_asummary']              = '�sszefoglal�s';											
$BL['be_article_abutton']               = '�j cikk l�trehoz�sa';									

// article.editcontent.inc.php
$BL['be_article_err4']                  = 'a v�g d�tum hib�s - be�ll�tva aktu�lis + 1 h�t-re';		

// article.editsummary.tmpl.php
$BL['be_article_estitle']               = 'cikk alap inform�ci� szerkeszt�se';						
$BL['be_article_eslastedit']            = 'utols� szerkeszt�s';										
$BL['be_article_esnoupdate']            = 'az adatok nem m�dusultak';								
$BL['be_article_esbutton']              = 'cikk adatok m�dos�t�sa';									

// articlecontent.edit.tmpl.php
$BL['be_article_cnt_title']             = 'cikk tartalom';											
$BL['be_article_cnt_type']              = 'tartalom t�pus';											
$BL['be_article_cnt_space']             = 't�rk�z';													
$BL['be_article_cnt_before']            = 'el�tte';													
$BL['be_article_cnt_after']             = 'ut�na';													
$BL['be_article_cnt_top']               = 'fel (top)';												
$BL['be_article_cnt_ctitle']            = 'tartalom c�m';											
$BL['be_article_cnt_back']              = 'teljes cikk info';										
$BL['be_article_cnt_button1']           = 'tartalom m�dos�t�sa';									
$BL['be_article_cnt_button2']           = 'tartalom l�trehoz�sa';									

// articlecontent.list.tmpl.php
$BL['be_article_cnt_ltitle']            = 'cikk inform�ci�';										
$BL['be_article_cnt_ledit']             = 'cikk szerkeszt�se';										
$BL['be_article_cnt_lvisible']          = 'v�lt�s l�that�/l�thatatlan';								
$BL['be_article_cnt_ldel']              = 'a cikk t�rl�se';											
$BL['be_article_cnt_ldeljs']            = 'Biztos t�rli a cikket?';									
$BL['be_article_cnt_redirect']          = '�tir�ny�t�s';											
$BL['be_article_cnt_edited']            = 'szerkesztette';											
$BL['be_article_cnt_start']             = 'kezd� d�tum';											
$BL['be_article_cnt_end']               = 'v�g d�tum';												
$BL['be_article_cnt_add']               = '�j tartalom r�sz hozz�ad�sa';							
$BL['be_article_cnt_up']                = 'tartalom mozgat�sa fel';									
$BL['be_article_cnt_down']              = 'tartalom mozgat�sa le';									
$BL['be_article_cnt_edit']              = 'tartalom r�sz szerkeszt�se';								
$BL['be_article_cnt_delpart']           = 'a tartalom r�sz t�rl�se';								
$BL['be_article_cnt_delpartjs']         = 'Biztos t�rli a tartalom r�szt?';							
$BL['be_article_cnt_center']            = 'cikkek';													

// content forms
$BL['be_cnt_plaintext']                 = 'egyszer� sz�veg';										
$BL['be_cnt_htmltext']                  = 'html text';												
$BL['be_cnt_image']                     = 'k�p';													
$BL['be_cnt_position']                  = 'poz�ci�';												
$BL['be_cnt_pos0']                      = 'Fel balra';												
$BL['be_cnt_pos1']                      = 'Fel k�z�pre';											
$BL['be_cnt_pos2']                      = 'Fel jobbra';												
$BL['be_cnt_pos3']                      = 'Le balra';												
$BL['be_cnt_pos4']                      = 'Le k�z�pre';												
$BL['be_cnt_pos5']                      = 'Le jobbra';												
$BL['be_cnt_pos6']                      = 'Sz�vegben balra';										
$BL['be_cnt_pos7']                      = 'Sz�vegben jobbra';										
$BL['be_cnt_pos0i']                     = 'a sz�vegblokk fels�, bal oldal�hoz igaz�tja a k�pet';	
$BL['be_cnt_pos1i']                     = 'a sz�vegblokk fels�, k�zep�re igaz�tja a k�pet';			
$BL['be_cnt_pos2i']                     = 'a sz�vegblokk fels�, jobb oldal�hoz igaz�tja a k�pet';	
$BL['be_cnt_pos3i']                     = 'a sz�vegblokk als�, bal oldal�hoz igaz�tja a k�pet';		
$BL['be_cnt_pos4i']                     = 'a sz�vegblokk als�, k�zep�re igaz�tja a k�pet';			
$BL['be_cnt_pos5i']                     = 'a sz�vegblokk als�, jobb oldal�hoz igaz�tja a k�pet';	
$BL['be_cnt_pos6i']                     = 'balra igaz�tja a k�pet a sz�vegblokkban';                
$BL['be_cnt_pos7i']                     = 'jobbra igaz�tja a k�pet a sz�vegblokkban';				
$BL['be_cnt_maxw']                      = 'max.&nbsp;sz�less�g';									
$BL['be_cnt_maxh']                      = 'max.&nbsp;magass�g';										
$BL['be_cnt_enlarge']                   = 'click&nbsp;nagy�t';										
$BL['be_cnt_caption']                   = 'k�pal��r�s';												
$BL['be_cnt_subject']                   = 't�rgy';													
$BL['be_cnt_recipient']                 = 'c�mzett';												
$BL['be_cnt_buttontext']                = 'gomb sz�veg';											
$BL['be_cnt_sendas']                    = 'k�ldje mint';											
$BL['be_cnt_text']                      = 'egyszer� sz�veg';										
$BL['be_cnt_html']                      = 'html';													
$BL['be_cnt_formfields']                = 'form mez�k';												
$BL['be_cnt_code']                      = 'k�d';													
$BL['be_cnt_infotext']                  = 'info&nbsp;sz�veg';										
$BL['be_cnt_subscription']              = 'el�fizet�s';												
$BL['be_cnt_labelemail']                = 'email&nbsp;cimke';										
$BL['be_cnt_tablealign']                = 't�bla&nbsp;igaz�t�s';									
$BL['be_cnt_labelname']                 = 'n�v&nbsp;cimke';											
$BL['be_cnt_labelsubsc']                = 'el�fizet�s cimke';										
$BL['be_cnt_allsubsc']                  = 'minden el�f.';											
$BL['be_cnt_default']                   = 'alap�rtelmezett';										
$BL['be_cnt_left']                      = 'balra';													
$BL['be_cnt_center']                    = 'k�z�pre';												
$BL['be_cnt_right']                     = 'jobbra';													
$BL['be_cnt_buttontext']                = 'gomb&nbsp;sz�veg';										
$BL['be_cnt_successtext']               = 'sikeres&nbsp;sz�veg';									
$BL['be_cnt_regmail']                   = 'regisztr�ci�s email';									
$BL['be_cnt_logoffmail']                = 'kijelentkez� email';										
$BL['be_cnt_changemail']                = 'v�ltoz�s email';											
$BL['be_cnt_openimagebrowser']          = 'k�p b�ng�sz� megnyit�sa';								
$BL['be_cnt_openfilebrowser']           = 'file b�ng�sz� megnyit�sa';								
$BL['be_cnt_sortup']                    = 'mozgat�s fel';											
$BL['be_cnt_sortdown']                  = 'mozgat�s le';											
$BL['be_cnt_delimage']                  = 'a kiv�lasztott k�p elt�vol�t�sa';						
$BL['be_cnt_delfile']                   = 'a kiv�lasztott file elt�vol�t�sa';						
$BL['be_cnt_delmedia']                  = 'a kiv�lasztott m�dia elt�vol�t�sa';						
$BL['be_cnt_column']                    = 'oszlop';													
$BL['be_cnt_imagespace']                = 'k�p&nbsp;t�rk�z';										
$BL['be_cnt_directlink']                = 'direkt link';											
$BL['be_cnt_target']                    = 'c�l';													
$BL['be_cnt_target1']                   = '�j ablakban';											
$BL['be_cnt_target2']                   = 'az ablak sz�l� keret�ben';								
$BL['be_cnt_target3']                   = 'ugyanabban az ablakban, keret n�lk�l';					
$BL['be_cnt_target4']                   = 'ugyanabban az ablakban, vagy keretben';					
$BL['be_cnt_bullet']                    = 'lista (t�bl�zat)';										
$BL['be_cnt_ullist']     		        = 'lista';													
$BL['be_cnt_ullist_desc']     		    = '~ = 1. Szint, &nbsp; ~~ = 2. szint, &nbsp; stb.';		
$BL['be_cnt_linklist']                  = 'link lista';												
$BL['be_cnt_plainhtml']                 = 'egyszer� html';											
$BL['be_cnt_files']                     = 'file-ok';												
$BL['be_cnt_description']               = 'le�r�s';													
$BL['be_cnt_linkarticle']               = 'cikk link';												
$BL['be_cnt_articles']                  = 'cikkek';													
$BL['be_cnt_movearticleto']             = 'a v�lasztott cikk mozgat�sa a cikk link list�ba';		
$BL['be_cnt_removearticleto']           = 'a v�lasztott cikk elt�vol�t�sa a cikk link list�b�l';	
$BL['be_cnt_mediatype']                 = 'm�dia t�pus';											
$BL['be_cnt_control']                   = 'vez�rl�s';												
$BL['be_cnt_showcontrol']               = 'a control bar l�tszik';									
$BL['be_cnt_autoplay']                  = 'automatikus lej�tsz�s';									
$BL['be_cnt_source']                    = 'forr�s';													
$BL['be_cnt_internal']                  = 'bels�';													
$BL['be_cnt_openmediabrowser']          = 'm�dia b�ng�sz� megnyit�sa';								
$BL['be_cnt_external']                  = 'k�ls�';													
$BL['be_cnt_mediapos0']                 = 'balra (alap�rtelmezett)';								
$BL['be_cnt_mediapos1']                 = 'k�z�pre';												
$BL['be_cnt_mediapos2']                 = 'jobbra';													
$BL['be_cnt_mediapos3']                 = 'blokkban jobbra';										
$BL['be_cnt_mediapos4']                 = 'blokkban balra';											
$BL['be_cnt_mediapos0i']                = 'a sz�vegblokk fels�, bal oldal�hoz igaz�tja a m�di�t';	
$BL['be_cnt_mediapos1i']                = 'a sz�vegblokk fels�, k�zep�re igaz�tja a m�di�t';		
$BL['be_cnt_mediapos2i']                = 'a sz�vegblokk fels�, jobb oldal�hoz igaz�tja a m�di�t';	
$BL['be_cnt_mediapos3i']                = 'balra igaz�tja a m�di�t a sz�vegblokkban'; 				
$BL['be_cnt_mediapos4i']                = 'jobbra igaz�tja a m�di�t a sz�vegblokkban';				
$BL['be_cnt_setsize']                   = 'm�ret';													
$BL['be_cnt_set1']                      = 'm�dia m�ret 160x120px';									
$BL['be_cnt_set2']                      = 'm�dia m�ret 240x180px';									
$BL['be_cnt_set3']                      = 'm�dia m�ret 320x240px';									
$BL['be_cnt_set4']                      = 'm�dia m�ret 480x360px';									
$BL['be_cnt_set5']                      = 'm�dia sz�less�g, magass�g t�rl�se';						

// added: 28-12-2003
$BL['be_admin_page_add']                = '�j lapszerkezet (layout) l�trehoz�sa';					
$BL['be_admin_page_name']               = 'layout neve';											
$BL['be_admin_page_edit']               = 'lapszerkezet (layout) m�dos�t�sa';						
$BL['be_admin_page_render']             = 'lapfel�p�t�s';											
$BL['be_admin_page_table']              = 'table';													
$BL['be_admin_page_div']                = 'css div';												
$BL['be_admin_page_custom']             = 'saj�t';													
$BL['be_admin_page_custominfo']         = 'a f� blokk sablonj�b�l (template)';						
$BL['be_admin_tmpl_layout']             = 'szerkezet (layout)';										
$BL['be_admin_tmpl_nolayout']           = 'Nem �ll rendelkez�sre lapszerkezet (layout)';			

// added: 31-12-2003
$BL['be_ctype_search']                  = 'keres�s';												
$BL['be_cnt_results']                   = 'eredm�nyek';												
$BL['be_cnt_results_per_page']          = 'per&nbsp;lap (ha �res, mindet mutatja)';					
$BL['be_cnt_opennewwin']                = '�j ablak nyit�sa';										
$BL['be_cnt_searchlabeltext']           = 'Ezek el�re defini�lt sz�vegek �s �rt�kek a keres�s �rlapon, az eredm�ny lapon, �s a t�bb lapnyi eredm�ny navig�ci�s sz�vegei.'; 
$BL['be_cnt_input']                     = 'input';												
$BL['be_cnt_style']                     = 'st�lus(style)';										
$BL['be_cnt_result']                    = 'eredm�ny';											
$BL['be_cnt_next']                      = 'k�vetkez�';											
$BL['be_cnt_previous']                  = 'el�z�';												
$BL['be_cnt_align']                     = 'igaz�t�s';											
$BL['be_cnt_searchformtext']            = 'A k�vetkez� sz�vegek jelennek meg, mikor a keres� �rlap megny�lik, vagy a keres�s eredm�nye megjelenik, illetve nincs eredm�nye a keres�snek.';
$BL['be_cnt_intro']                     = 'bevezet�s';												
$BL['be_cnt_noresult']                  = 'nincs&nbsp;eredm�ny';									

// added: 02-01-2004
$BL['be_admin_page_disable']            = 'letiltva';												

// added: 09-01-2004
$BL['be_article_articleowner']          = 'cikk tulajdonos';										
$BL['be_article_adminuser']             = 'admin felhaszn�l�';										
$BL['be_article_username']              = 'szerz�';													

// added: 10-01-2004
$BL['be_ctype_wysywig']                 = 'WYSIWYG HTML';											

// added, changed: 11-01-2004
$BL['be_admin_struct_regonly']          = 'csak a bejelentkezett felhaszn�l�k l�thatj�k';			
$BL['be_admin_struct_status']           = 'frontend men� st�tus';									

// added: 15-02-2004
$BL['be_ctype_articlemenu']				= 'cikk men�';												
$BL['be_cnt_sitelevel']					= 'weblap&nbsp;(site)&nbsp;szint';							
$BL['be_cnt_sitecurrent']				= 'aktu�lis weblap (site) szint';							

// added: 24-03-2004
$BL['be_subnav_admin_starttext']		= 'backend alap�rtelmezett sz�veg';							
$BL['be_ctype_ecard']					= 'e-card';													
$BL['be_ctype_blog']					= 'blog';													
$BL['be_cnt_ecardtext']                 = 'c�m/e-card';												
$BL['be_cnt_ecardtmpl']                 = 'mail tmpl';												
$BL['be_cnt_ecard_image']               = 'e-card k�p';												
$BL['be_cnt_ecard_title']               = 'e-card c�m';												
$BL['be_cnt_alignment']                 = 'igaz�t�s';												
$BL['be_cnt_ecardform']                 = 'form tmpl';												
$BL['be_cnt_ecardform_err']             = 'Minden *-al jelzett mez� k�telez�';						
$BL['be_cnt_ecardform_sender']          = 'Felad�';													
$BL['be_cnt_ecardform_recipient']       = 'C�mzett';												
$BL['be_cnt_ecardform_name']            = 'N�v';													
$BL['be_cnt_ecardform_msgtext']         = '�zenet a c�mzettnek';									
$BL['be_cnt_ecardform_button']          = 'e-card k�ld�se';											
$BL['be_cnt_ecardsend']                 = 'elk�ldve&nbsp;tmpl';										

// added: 28-03-2004
$BL['be_admin_startup_title']           = 'Backend alap�rtelmezett bejelentkez� sz�veg';			
$BL['be_admin_startup_text']            = 'bejelentkez� sz�veg';									
$BL['be_admin_startup_button']          = 'bejelentkez� sz�veg ment�se';							

// added: 17-04-2004
$BL['be_ctype_guestbook']				= 'vend�gk�nyv/comm.';										
$BL['be_cnt_guestbook_listing']			= 'list�z�s';												
$BL['be_cnt_guestbook_listing_all']		= 'minden&nbsp;bejegyz�s&nbsp;ki�rva';						
$BL['be_cnt_guestbook_list']			= 'ki�rva';													
$BL['be_cnt_guestbook_perpage']			= 'per&nbsp;lap';											
$BL['be_cnt_guestbook_form']			= 'form';													
$BL['be_cnt_guestbook_signed']			= 'bejegyz�st&nbsp;tett';									
$BL['be_cnt_guestbook_nav']				= 'nav';													
$BL['be_cnt_guestbook_before']			= 'el�tte';													
$BL['be_cnt_guestbook_after']			= 'ut�na';													
$BL['be_cnt_guestbook_entry']			= 'bel�p�s';												
$BL['be_cnt_guestbook_edit']			= 'szerkeszt�s';											
$BL['be_cnt_ecardform_selector']        = 'v�laszt�s';												
$BL['be_cnt_ecardform_radiobutton']     = 'radio button';											
$BL['be_cnt_ecardform_javascript']      = 'JavaScript functionality';								
$BL['be_cnt_ecardform_over']        	= 'onMouseOver';											
$BL['be_cnt_ecardform_click']       	= 'onClick';												
$BL['be_cnt_ecardform_out']       		= 'onMouseOut';												
$BL['be_admin_struct_topcount']         = '"top" cikkek sz�ma';										

// added: 19-04-2004
$BL['be_subnav_msg_newslettersend']     = 'h�rlev�l';												
$BL['be_newsletter_addnl']              = 'h�rlev�l hozz�ad�sa';									
$BL['be_newsletter_titleeditnl']        = 'h�rlev�l szerkeszt�se';									
$BL['be_newsletter_newnl']              = '�j l�trehoz�sa';											
$BL['be_newsletter_button_savenl']      = 'h�rlev�l ment�se';										
$BL['be_newsletter_fromname']           = 'felad�&nbsp;n�v';										
$BL['be_newsletter_fromemail']          = 'felad�&nbsp;email';										
$BL['be_newsletter_replyto']            = 'reply email';											
$BL['be_newsletter_changed']            = 'utols�&nbsp;m�dos�t�s';									
$BL['be_newsletter_placeholder']        = 'placeholder';											
$BL['be_newsletter_htmlpart']           = 'HTML h�rlev�l tartalom';									
$BL['be_newsletter_textpart']           = 'TEXT h�rlev�l tartalom';									
$BL['be_newsletter_allsubscriptions']   = 'minden el�fizet�s';										
$BL['be_newsletter_verifypage']         = 'link ellen�rz�s';										
$BL['be_newsletter_open']               = 'HTML �s TEXT input';										
$BL['be_newsletter_open1']              = '(click a k�pre a megnyit�shoz)';							
$BL['be_newsletter_sendnow']            = 'H�rlev�l k�ld�se';										
$BL['be_newsletter_attention']          = '<strong style="color:#CC3300;">Figyelem!</strong> H�rlev�l k�ld�se t�bb c�mzettnek nagyon kock�zatos. Ha a c�mzettek nem er�s�tett�k meg a feliratkoz�st, �n k�nnyen potenci�lis spam k�ld�v� v�lhat. Gondolja meg k�tszer, elk�ldi-e a h�rlevelet. Ellen�rizze h�rlevel�t teszt k�ld�ssel.';  
$BL['be_newsletter_attention1']         = 'Ha a h�rlevelet m�dos�totta, k�rem el�bb mentse, k�l�nben a jav�t�s nem �rv�nyes�l';
$BL['be_newsletter_testemail']          = 'teszt email';											
$BL['be_newsletter_sendnlbutton']       = 'h�rlev�l k�ld�se';										
$BL['be_newsletter_sendprocess']        = 'k�ld�si folyamat';										
$BL['be_newsletter_attention2']         = '<strong style="color:#CC3300;">Figyelem!</strong> K�rem, ne szak�tsa meg a k�ld�s folyamat�t! Ellenkez� esetben el�fordulhat hogy t�bbsz�r elk�ldi a h�rlevelet a c�mzettnek. Ha a k�ld�s meghi�sul, az el�rhetetlen c�mzettek t�rol�dnak, a lista felhaszn�lhat� az azonnali ism�telt k�ld�shez.';
$BL['be_newsletter_testerror']          = '<span style="color:#CC3300;font-size:11px;">a teszt email c�m <strong>###TEST###</strong> �rv�nytelen!<br />&nbsp;<br />K�rem pr�b�lja �jra!';
$BL['be_newsletter_to']                 = 'C�mzettek';												
$BL['be_newsletter_ready']              = 'h�rlev�l k�ld�se: RENDBEN';								
$BL['be_newsletter_readyfailed']        = 'Meghi�sult a h�rlev�l k�ld�se';							
$BL['be_subnav_msg_subscribers']        = 'h�rlev�l el�fizet�k';									

// added: 20-04-2004
$BL['be_ctype_sitemap']				    = 'oldalt�rk�p';											
$BL['be_cnt_sitemap_catimage']          = 'szint ikon';												
$BL['be_cnt_sitemap_articleimage']      = 'cikk ikon';												
$BL['be_cnt_sitemap_display']           = 'megjelen�t�s';											
$BL['be_cnt_sitemap_structuronly']      = 'csak strukt�ra szintek';									
$BL['be_cnt_sitemap_structurarticle']   = 'strukt�ra szintek + cikkek';								
$BL['be_cnt_sitemap_catclass']          = 'szint Class';											
$BL['be_cnt_sitemap_articleclass']      = 'cikk Class';												
$BL['be_cnt_sitemap_count']             = 'sz�ml�l�';												
$BL['be_cnt_sitemap_classcount']        = 'a "Class name"-hez ad';									
$BL['be_cnt_sitemap_noclasscount']      = 'nem ad a "Class name"-hez';								

// added: 23-04-2004
$BL['be_ctype_bid']				        = 'licit';													
$BL['be_cnt_bid_bidtext']               = 'licit sz�veg';											
$BL['be_cnt_bid_sendtext']              = 'elk�ldve&nbsp;sz�veg';									
$BL['be_cnt_bid_verifiedtext']          = 'meger�s�tve&nbsp;sz�veg';								
$BL['be_cnt_bid_errortext']             = 'licit t�r�lve';											
$BL['be_cnt_bid_verifyemail']           = 'meger�s�t� email';										
$BL['be_cnt_bid_startbid']              = 'licit kezd� �rt�ke';										

// added: 29-04-2004
$BL['be_cnt_bid_nextbidadd']            = 'n�vel�s&nbsp;ennyivel';									

// added: 10-05-2004
$BL['be_ctype_pages']                   = 'k�ls� tartalom';											
$BL['be_cnt_pages_select']              = 'file kiv�laszt�sa';										
$BL['be_cnt_pages_fromfile']            = 'file a strukt�r�b�l';									
$BL['be_cnt_pages_manually']            = 'saj�t path/file vagy URL';								
$BL['be_cnt_pages_cust']                = 'file/URL';												
$BL['be_cnt_pages_from']                = 'forr�s';													

// added: 24-05-2004
$BL['be_ctype_reference']               = 'rollover k�pek';											
$BL['be_cnt_reference_basis']           = 'igaz�t�s';												
$BL['be_cnt_reference_horizontal']      = 'horizont�lis';											
$BL['be_cnt_reference_vertical']        = 'vertik�lis';												
$BL['be_cnt_reference_aligntext']       = 'kis hivatkoz�si k�pek';									
$BL['be_cnt_reference_largetext']       = 'nagy hivatkoz�si k�pek';									
$BL['be_cnt_reference_zoom']            = 'nagy�t�s';												
$BL['be_cnt_reference_middle']          = 'k�z�p';													
$BL['be_cnt_reference_border']          = 'szeg�ly';												
$BL['be_cnt_reference_block']           = 'blokk sz x m';											

// added: 31-05-2004
$BL['be_article_rendering']             = 'k�zl�s';													
$BL['be_article_nosummary']             = 'nem jelen�ti meg az �sszefoglal�t a teljes cikkben';		
$BL['be_article_forlist']               = 'cikk list�z�s';											
$BL['be_article_forfull']               = 'a teljes cikk ki�r�sa';									

// added: 08-07-2004
$BL["setup_dir_exists"]                 = '<div style="font-size: 14px;">Figyelem!</div>A &quot;SETUP&quot; k�nyvt�r l�tezik!<br>T�r�lje a k�nyvt�rat, a potenci�lis adatv�delmi probl�ma miatt.';

// added: 12-08-2004
$BL['be_cnt_guestbook_banned']          = 'tiltott szavak';
$BL['be_cnt_guestbook_flooding']        = 'flooding';
$BL['be_cnt_guestbook_setcookie']       = 'cookie be�ll�t�s';
$BL['be_cnt_guestbook_allowed']         = 'enged�lyezve ism�t ha eltelt';
$BL['be_cnt_guestbook_seconds']         = 'm�sodperc';
$BL['be_alias_ID']                      = 'alias ID';
$BL['be_ftrash_delall']                 = "Bizos t�r�l \nALL MINDEN file-t a lomt�rb�l?";
$BL['be_ftrash_delallfiles']            = 'minden file t�rl�se a lomt�rb�l';

// added: 16-08-2004
$BL['be_subnav_msg_importsubscribers']  = 'el�fizet�k CSV import�l�sa';
$BL['be_newsletter_importtitle']        = 'H�rlev�l el�fizet�k import�l�sa';
$BL['be_newsletter_entriesfound']       = 'tal�lt&nbsp;t�telek';
$BL['be_newsletter_foundinfile']        = 'a file-ban';
$BL['be_newsletter_addresses']          = 'c�mek';
$BL['be_newsletter_csverror']           = 'Az import�land� CSV file helytelennek t�nik! Ellen�rizze a delimeter-t!';
$BL['be_newsletter_importall']          = 'minden t�tel import�l�sa';
$BL['be_newsletter_addressesadded']     = 'hozz�adott c�mek.';
$BL['be_newsletter_newimport']          = '�j import';
$BL['be_newsletter_importerror']        = 'K�rem ellen�rizze a CSV file-t - nem lehetett c�met hozz�adni!';
$BL['be_newsletter_shouldbe1']          = 'A CSV file �gy kellene kin�zzen';
$BL['be_newsletter_shouldbe2']          = 'de kiv�laszthat saj�t delimeter-t';
$BL['be_newsletter_sample']             = 'p�lda';
$BL['be_newsletter_selectCSV']          = 'CSV file v�laszt�s';
$BL['be_newsletter_delimeter']          = 'delimeter';
$BL['be_newsletter_importCSV']          = 'CSV file import�l�sa';

// added: 24-08-2004
$BL['be_admin_struct_orderarticle']     = 'a hozz� tartoz� cikkek rendez�se';
$BL['be_admin_struct_orderdate']        = 'l�trehoz�s d�tuma';
$BL['be_admin_struct_orderchangedate']  = 'm�dos�t�s d�tuma';
$BL['be_admin_struct_orderstartdate']   = 'kezd� d�tum';
$BL['be_admin_struct_orderdesc']        = 'cs�kken�';
$BL['be_admin_struct_orderasc']         = 'n�vekv�';
$BL['be_admin_struct_ordermanual']      = 'manualis (nyil fel/le)';
$BL['be_cnt_sitemap_startid']           = 'ezzel&nbspkezd�dik';


?>