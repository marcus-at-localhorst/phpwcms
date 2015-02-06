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


// Language: English, Language Code: en
// please use HTML safe strings ONLY,neccessary to reduce processing time
// normal line break:    '&#13', JavaScript Linebreak: '\n'
// Translated by : Kiril Jovchev
// Last change: 24 Aug 2004

$BL['usr_online']                       = '����������';

// Login Page
$BL["login_text"]                       = '������������� ���';
$BL['login_error']                      = '������ ����������/������!';
$BL["login_username"]                   = '������������� ���';
$BL["login_userpass"]                   = '������';
$BL["login_button"]                     = '����';
$BL["login_lang"]                       = '����';

// phpwcms.php
$BL['be_nav_logout']                    = '�����';
$BL['be_nav_articles']                  = '������';
$BL['be_nav_files']                     = '�������';
$BL['be_nav_modules']                   = '������';
$BL['be_nav_messages']                  = '���������';
$BL['be_nav_chat']                      = '���';
$BL['be_nav_profile']                   = '������';
$BL['be_nav_admin']                     = '�������������';
$BL['be_nav_discuss']                   = '��������';

$BL['be_page_title']                    = 'phpwcms backend (�������������)';

$BL['be_subnav_article_center']         = '����-������';
$BL['be_subnav_article_new']            = '���� ������';
$BL['be_subnav_file_center']            = '����-������';
$BL['be_subnav_file_ftptakeover']       = 'ftp takeover';
$BL['be_subnav_mod_artists']            = '�����, ���������, ����';
$BL['be_subnav_msg_center']             = '������ �� ���������';
$BL['be_subnav_msg_new']                = '���� ���������';
$BL['be_subnav_msg_newsletter']         = '�������';
$BL['be_subnav_chat_main']              = '������ �������� �� ����';
$BL['be_subnav_chat_internal']          = '�������� ���';
$BL['be_subnav_profile_login']          = '���������� �� �����������';
$BL['be_subnav_profile_personal']       = '����� �����';
$BL['be_subnav_admin_pagelayout']       = '��������� �� ����������';
$BL['be_subnav_admin_templates']        = '�������';
$BL['be_subnav_admin_css']              = 'css �� ������������';
$BL['be_subnav_admin_sitestructure']    = '��������� �� �����';
$BL['be_subnav_admin_users']            = '�������������� �� �����������';
$BL['be_subnav_admin_filecat']          = '��������� �� �������';


// admin.functions.inc.php
$BL['be_func_struct_articleID']         = '������ �����';
$BL['be_func_struct_preview']           = '�������';
$BL['be_func_struct_edit']              = '����������� �� ��������';
$BL['be_func_struct_sedit']             = '����������� �� ������ �� �����������';
$BL['be_func_struct_cut']               = '������ ������';
$BL['be_func_struct_nocut']             = '������ ��������� �� ������';
$BL['be_func_struct_svisible']          = '������/��������';
$BL['be_func_struct_spublic']           = '��������/������';
$BL['be_func_struct_sort_up']           = '������';
$BL['be_func_struct_sort_down']         = '������';
$BL['be_func_struct_del_article']       = '������ ��������';
$BL['be_func_struct_del_jsmsg']         = '�������� �� ������ \n�� �������� ��������?'; // "\n" = JavaScript Linebreak
$BL['be_func_struct_new_article']       = '��������� �� ���� ������ � ������';
$BL['be_func_struct_paste_article']     = '�������� �� �������� � ������';
$BL['be_func_struct_insert_level']      = '��������� �� ���������';
$BL['be_func_struct_paste_level']       = '�������� �� ���������';
$BL['be_func_struct_cut_level']         = '��������� �� ���������';
$BL['be_func_struct_no_cut']            = "�� ���� �� �������� �������� ����!";
$BL['be_func_struct_no_paste1']         = "�� ���� �� �������� ����!";
$BL['be_func_struct_no_paste2']         = 'is child in root line of the tree level';
$BL['be_func_struct_no_paste3']         = 'that should paste in here';
$BL['be_func_struct_paste_cancel']      = '����� �� ��������� �� �����������';
$BL['be_func_struct_del_struct']        = '��������� �� ������';
$BL['be_func_struct_del_sjsmsg']        = '�������� �� ������ \n�� �������� ������?'; // "\n" = JavaScript Linebreak
$BL['be_func_struct_open']              = '������';
$BL['be_func_struct_close']             = '�������';
$BL['be_func_struct_empty']             = '��������';

// article.contenttype.inc.php
$BL['be_ctype_plaintext']               = '���� �����';
$BL['be_ctype_html']                    = 'html';
$BL['be_ctype_code']                    = '���';
$BL['be_ctype_textimage']               = '���� � ��������';
$BL['be_ctype_images']                  = '��������';
$BL['be_ctype_bulletlist']              = '������ (�������)';
$BL['be_ctype_ullist']     		        = '������';
$BL['be_ctype_link']                    = '��������� &amp; email';
$BL['be_ctype_linklist']                = '������ �� ���������';
$BL['be_ctype_linkarticle']             = '������ ��� ������';
$BL['be_ctype_multimedia']              = '����������';
$BL['be_ctype_filelist']                = '������ �� �������';
$BL['be_ctype_emailform']               = 'email �����';
$BL['be_ctype_newsletter']              = '�������';

// profile.create.inc.php
$BL['be_profile_create_success']        = '�������� � �������� �������.';
$BL['be_profile_create_error']          = '������ ��� ���������.';

// profile.update.inc.php
$BL['be_profile_update_success']        = '�������� � ������� �������.';
$BL['be_profile_update_error']          = '������ ��� ����������.';

// profile.updateaccount.inc.php
$BL['be_profile_account_err1']          = '��������������� ��� {VAL} � ���������';
$BL['be_profile_account_err2']          = '�������� � ����� ���� (only {VAL} �������: ���������� �� ���� 5)';
$BL['be_profile_account_err3']          = '�������� ������ �� ���� ������� � ���������� ������';
$BL['be_profile_account_err4']          = 'email {VAL} � ���������';

// profile.data.tmpl.php
$BL['be_profile_data_title']            = '������ ����� �����';
$BL['be_profile_data_text']             = '������� ����� �� �� ������������. �� ������� �� ������������� � ������������ �� ����� �� ������� ������ ���������� �� ���, ������ �������� � ������. ��� �������� ����������� ������� ������������� ����� �� ������ ��� �� ������ ���������� �� ��� � ���������� �������� �� �����.';
$BL['be_profile_label_title']           = '�����';
$BL['be_profile_label_firstname']       = '���';
$BL['be_profile_label_name']            = '�������';
$BL['be_profile_label_company']         = '�����';
$BL['be_profile_label_street']          = '�����';
$BL['be_profile_label_city']            = '����';
$BL['be_profile_label_state']           = '���������, ���';
$BL['be_profile_label_zip']             = '�������� ���';
$BL['be_profile_label_country']         = '�������';
$BL['be_profile_label_phone']           = '�������';
$BL['be_profile_label_fax']             = '����';
$BL['be_profile_label_cellphone']       = '�������';
$BL['be_profile_label_signature']       = '������';
$BL['be_profile_label_notes']           = '���������';
$BL['be_profile_label_profession']      = '��������';
$BL['be_profile_label_newsletter']      = '�������';
$BL['be_profile_text_newsletter']       = '����� �� ��������� ������ ������� �� phpwcms.';
$BL['be_profile_label_public']          = '��������';
$BL['be_profile_text_public']           = '����� ���� �� ���� �������� ��.';
$BL['be_profile_label_button']          = '������ ������� �� �����';

// profile.account.tmpl.php
$BL['be_profile_account_title']         = '������ ����������';
$BL['be_profile_account_text']          = '����������� �� � ���������� �� ������� ��������������� �� ���.<br />�� �������� �� ������� �������� �� �� ����� �� ����� �� �� ����� ��-������ ���� �� ���������.';
$BL['be_profile_label_err']             = '���� ��������� ������������';
$BL['be_profile_label_username']        = '������������� ���';
$BL['be_profile_label_newpass']         = '���� ������';
$BL['be_profile_label_repeatpass']      = '�������� ������';
$BL['be_profile_label_email']           = 'email';
$BL['be_profile_account_button']        = '������ ������������';
$BL['be_profile_label_lang']            = '����';


// files.ftptakeover.tmpl.php
$BL['be_ftptakeover_title']             = '�������� ��������� �������� �� ftp';
$BL['be_ftptakeover_mark']              = '��������';
$BL['be_ftptakeover_available']         = '���������� �������';
$BL['be_ftptakeover_size']              = '������';
$BL['be_ftptakeover_nofile']            = '���� ������� &#8211; ������ ���� ���� �� ftp';
$BL['be_ftptakeover_all']               = '������';
$BL['be_ftptakeover_directory']         = '�����';
$BL['be_ftptakeover_rootdir']           = '������ ����������';
$BL['be_ftptakeover_needed']            = '������������!!! (������ �� �������� ���� ���� ����)';
$BL['be_ftptakeover_optional']          = '�� ������������';
$BL['be_ftptakeover_keywords']          = '������� ����';
$BL['be_ftptakeover_additional']        = '������������';
$BL['be_ftptakeover_longinfo']          = '����������';
$BL['be_ftptakeover_status']            = '������';
$BL['be_ftptakeover_active']            = '�������';
$BL['be_ftptakeover_public']            = '��������';
$BL['be_ftptakeover_createthumb']       = '������ ���������';
$BL['be_ftptakeover_button']            = '�������� ��������� �������';

// files.reiter.tmpl.php
$BL['be_ftab_title']                    = '����-������';
$BL['be_ftab_createnew']                = '������ ���� ����� � ��������';
$BL['be_ftab_paste']                    = '������ ����� � �������� �����';
$BL['be_ftab_disablethumb']             = '�� �������� ��������� � ���������';
$BL['be_ftab_enablethumb']              = '�������� ��������� � ���������';
$BL['be_ftab_private']                  = '�����&nbsp;�������';
$BL['be_ftab_public']                   = '��������&nbsp;�������';
$BL['be_ftab_search']                   = '�������';
$BL['be_ftab_trash']                    = '�����';
$BL['be_ftab_open']                     = '������ ������ �����';
$BL['be_ftab_close']                    = '������� ������ �������� �����';
$BL['be_ftab_upload']                   = '������� �� ���� � �������� �����';
$BL['be_ftab_filehelp']                 = '������ �����';

// files.private.newdir.tmpl.php
$BL['be_fpriv_rootdir']                 = '������ �����';
$BL['be_fpriv_title']                   = '������� ���� �����';
$BL['be_fpriv_inside']                  = '�����';
$BL['be_fpriv_error']                   = '������: �������� ����� �� �������';
$BL['be_fpriv_name']                    = '���';
$BL['be_fpriv_status']                  = '������';
$BL['be_fpriv_button']                  = '������ ���� �����';

// files.private.editdir.tmpl.php
$BL['be_fpriv_edittitle']               = '���������� �������';
$BL['be_fpriv_newname']                 = '���� ���';
$BL['be_fpriv_updatebutton']            = '������ ������������ �� �������';

// files.private.upload.tmpl.php
$BL['be_fprivup_err1']                  = '�������� ���� ����� ������ �� ������';
$BL['be_fprivup_err2']                  = '������� �� �������� ���� � ��-����� �� ';
$BL['be_fprivup_err3']                  = '������ ��� ��������� �� �����';
$BL['be_fprivup_err4']                  = '������ ��� ��������� �� ������������� �����.';
$BL['be_fprivup_err5']                  = '���� ���������';
$BL['be_fprivup_err6']                  = '�� ��������� ��� - ���� � ������ �� �������! �������� �� � <a href="mailto:{VAL}">��������������</a> ������� � �������� ��-�����!';
$BL['be_fprivup_title']                 = '������� �� ����';
$BL['be_fprivup_button']                = '������� �� ����';
$BL['be_fprivup_upload']                = '�������';

// files.private.editfile.tmpl.php
$BL['be_fprivedit_title']               = '���������� �� ������������ �� �����';
$BL['be_fprivedit_filename']            = '��� �� �����';
$BL['be_fprivedit_created']             = '��������';
$BL['be_fprivedit_dateformat']          = 'm-d-Y H:i';
$BL['be_fprivedit_err1']                = '����� ������������ ���';
$BL['be_fprivedit_clockwise']           = '������� ����������� �� ������������� ������� [+90&deg;]';
$BL['be_fprivedit_cclockwise']          = '������� ����������� ������� �� ������������� ������� [-90&deg;]';
$BL['be_fprivedit_button']              = '������ ������������ �� �����';
$BL['be_fprivedit_size']                = '������';

// files.private-functions.inc.php
$BL['be_fprivfunc_upload']              = '������� ����� � �����';
$BL['be_fprivfunc_makenew']             = '��������� �� ���� ����� �����';
$BL['be_fprivfunc_paste']               = '�������� ���� �� ������ � �������';
$BL['be_fprivfunc_edit']                = '����������� �� �����';
$BL['be_fprivfunc_cactive']             = '�������/���������';
$BL['be_fprivfunc_cpublic']             = '��������/�����';
$BL['be_fprivfunc_deldir']              = '��������� �� �����';
$BL['be_fprivfunc_jsdeldir']            = '�������� �� ������ \n�� �������� �������';
$BL['be_fprivfunc_notempty']            = '������� {VAL} �� � ������!';
$BL['be_fprivfunc_opendir']             = '�������� �� �����';
$BL['be_fprivfunc_closedir']            = '��������� �� �����';
$BL['be_fprivfunc_dlfile']              = '������� �� ����';
$BL['be_fprivfunc_clipfile']            = '� ������';
$BL['be_fprivfunc_cutfile']             = '�������';
$BL['be_fprivfunc_editfile']            = '��������� ������������ �� �����';
$BL['be_fprivfunc_cactivefile']         = '�������/���������';
$BL['be_fprivfunc_cpublicfile']         = '��������/�����';
$BL['be_fprivfunc_movetrash']           = '� �������';
$BL['be_fprivfunc_jsmovetrash1']        = '�������� �� ������ �� �������';
$BL['be_fprivfunc_jsmovetrash2']        = '� �������?';

// files.private.additions.inc.php
$BL['be_fprivadd_nofolders']            = '���� ����� ������� ��� �����';

// files.public.list.tmpl.php
$BL['be_fpublic_user']                  = '����������';
$BL['be_fpublic_nofiles']               = '���� �������� ������� ��� �����';

// files.private.trash.tmpl.php
$BL['be_ftrash_nofiles']                = '�������� � ������';
$BL['be_ftrash_show']                   = '������ ������� �������';

// files.private-delfilelist.inc.php
$BL['be_ftrash_restore']                = '������ �� ����������� {VAL} \n� �� �� ���������� � ������� ������?';
$BL['be_ftrash_delete']                 = '������ �� �������� {VAL}?';
$BL['be_ftrash_undo']                   = '������������� (undo trash)';
$BL['be_ftrash_delfinal']               = '����������� ���������';

// files.search.tmpl.php
$BL['be_fsearch_err1']                  = '������ �� ������� � ������.';
$BL['be_fsearch_title']                 = '������� �� �������';
$BL['be_fsearch_infotext']              = '���� � ������� �� ���������� �� �����. ��������� ����� � ������� ����, ,<br />����� �� ������� � ���������� �� ���������. No support for wildcards. Separate multiple search<br />words with a blank. Select AND/OR and what files to search for: personal/public.';
$BL['be_fsearch_nonfound']              = '�� �� �������� �������. ����������� ���������� ��!';
$BL['be_fsearch_fillin']                = '���� ��������� ��-��p���� ����.';
$BL['be_fsearch_searchlabel']           = '����� ��';
$BL['be_fsearch_startsearch']           = '�������';
$BL['be_fsearch_and']                   = '�';
$BL['be_fsearch_or']                    = '���';
$BL['be_fsearch_all']                   = '������ �������';
$BL['be_fsearch_personal']              = '�����';
$BL['be_fsearch_public']                = '��������';

// chat.main.tmpl.php & chat.list.tmpl.php
$BL['be_chat_title']                    = '�������� ���';
$BL['be_chat_info']                     = 'Here you can chat with other phpwcms backend users about everything you want. This medium is for realtime speaking but you can also let a message that everybody can read. If you want to exchange ideas with others use the discussion please (later phpwcms version).';
$BL['be_chat_start']                    = '������� ��� �� �� ������� ����';
$BL['be_chat_lines']                    = 'chat lines';

// message.center.tmpl.php
$BL['be_msg_title']                     = '������ �� ���������';
$BL['be_msg_new']                       = '����';
$BL['be_msg_old']                       = '�����';
$BL['be_msg_senttop']                   = '���������';
$BL['be_msg_del']                       = '�������';
$BL['be_msg_from']                      = '��';
$BL['be_msg_subject']                   = '�������';
$BL['be_msg_date']                      = '����/���';
$BL['be_msg_close']                     = '������� �����������';
$BL['be_msg_create']                    = '������ ���� ���������';
$BL['be_msg_reply']                     = '�������� �� ���� ���������';
$BL['be_msg_move']                      = '�������� ���� ��������� � �������';
$BL['be_msg_unread']                    = '����������� ��� ���� ���������';
$BL['be_msg_lastread']                  = '�������� {VAL} ��������� ���������';
$BL['be_msg_lastsent']                  = '�������� {VAL} ��������� ���������';
$BL['be_msg_marked']                    = '��������� ��������� �� ��������� (� �������)';
$BL['be_msg_nomsg']                     = '���� ��������� � ���� �����';

// message.send.tmpl.php
$BL['be_msg_RE']                        = 'RE';
$BL['be_msg_by']                        = '��������';
$BL['be_msg_on']                        = '��';
$BL['be_msg_msg']                       = '���������';
$BL['be_msg_err1']                      = '��������� ��� �� ������� ���������...';
$BL['be_msg_err2']                      = '��������� ������ ������� (����������� ���� ��-����� �� �� ������ � ������ ���������)';
$BL['be_msg_err3']                      = '���� ������ �� �� ������� ��� ������ ��������� ;-)';
$BL['be_msg_sent']                      = '����������� �� ���������!';
$BL['be_msg_fwd']                       = '�� ������ ����������� ��� ������� �� ��������� ���';
$BL['be_msg_newmsgtitle']               = '������ �� ���� ���������';
$BL['be_msg_err']                       = '������ ��� �����������';
$BL['be_msg_sendto']                    = '������� �����������';
$BL['be_msg_available']                 = '������ � ����������';
$BL['be_msg_all']                       = '������� ����������� �� ������ ������� ����������';

// message.subscription.tmpl.php
$BL['be_newsletter_title']              = '��������� �� �������';
$BL['be_newsletter_titleedit']          = '����������� �� ���������� �� ��������';
$BL['be_newsletter_new']                = '������ ����';
$BL['be_newsletter_add']                = '������&nbsp;���������&nbsp;��&nbsp;�������';
$BL['be_newsletter_name']               = '���';
$BL['be_newsletter_info']               = '����������';
$BL['be_newsletter_button_save']        = '������ ��������';
$BL['be_newsletter_button_cancel']      = '�����';

// admin.newuser.tmpl.php
$BL['be_admin_usr_err1']                = '������ ������������� ���, �������� �����';
$BL['be_admin_usr_err2']                = '��������������� ��� � ������ (������������)';
$BL['be_admin_usr_err3']                = '�������� � ������ (�����������)';
$BL['be_admin_usr_err4']                = "email � ���������";
$BL['be_admin_usr_err']                 = '������';
$BL['be_admin_usr_mailsubject']         = '����� ����� � phpwcms backend';
$BL['be_admin_usr_mailbody']            = "����� ����� PHPWCMS BACKEND\n\n    ������������� ���: {LOGIN}\n    ������: {PASSWORD}\n\n\n���� �� ������� ����: {LOGIN_PAGE}\n\nphpwcms admin\n ";
$BL['be_admin_usr_title']               = '�������� �� ��� ����������';
$BL['be_admin_usr_realname']            = '�������� ���';
$BL['be_admin_usr_setactive']           = '��������� ������������';
$BL['be_admin_usr_iflogin']             = '��� � ���������� ����������� ���� �� �����';
$BL['be_admin_usr_isadmin']             = '����������� � �������������';
$BL['be_admin_usr_ifadmin']             = '��� ����������, ����������� �� ������ ����� �� �������������';
$BL['be_admin_usr_verify']              = '��������';
$BL['be_admin_usr_sendemail']           = '������� email �� ������ ���������� � ����������';
$BL['be_admin_usr_button']              = '������� ������� �� �����������';

// admin.edituser.tmpl.php
$BL['be_admin_usr_etitle']              = '���������� �����������';
$BL['be_admin_usr_emailsubject']        = 'phpwcms - ������� �� ����������� �� ���������';
$BL['be_admin_usr_emailbody']           = "PHPWCMS USER ACCOUNT INFORMATION CHANGED\n\n    ������������� ���: {LOGIN}\n    ������: {PASSWORD}\n\n\n���� �� �������� �� ����: {LOGIN_PAGE}\n\nphpwcms admin\n ";
$BL['be_admin_usr_passnochange']        = '[���� ������� - ����������� �������� ��]';
$BL['be_admin_usr_ebutton']             = '������ ������� �� �����������';

// admin.listuser.tmpl.php
$BL['be_admin_usr_ltitle']              = 'phpwcms ������ � �����������';
$BL['be_admin_usr_ldel']                = '��������!&#13������������ �� ���� ������';
$BL['be_admin_usr_create']              = '������ ��� ����������';
$BL['be_admin_usr_editusr']             = '���������� ������������';

// admin.structform.tmpl.php
$BL['be_admin_struct_title']            = '��������� �� �����';
$BL['be_admin_struct_child']            = '(������������ ��)';
$BL['be_admin_struct_index']            = 'index (������ �� �����)';
$BL['be_admin_struct_cat']              = '�������� �� �����������';
$BL['be_admin_struct_hide1']            = '��������';
$BL['be_admin_struct_hide2']            = '����&nbsp;���������&nbsp;�&nbsp;����';
$BL['be_admin_struct_info']             = '���������� �� �����������';
$BL['be_admin_struct_template']         = '������';
$BL['be_admin_struct_alias']            = '��������� �� �����������';
$BL['be_admin_struct_visible']          = '������';
$BL['be_admin_struct_button']           = '������� ������� �� �����������';
$BL['be_admin_struct_close']            = '�������';

// admin.filecat.tmpl.php
$BL['be_admin_fcat_title']              = '��������� �� �������';
$BL['be_admin_fcat_err']                = '����� �� ����������� � ������!';
$BL['be_admin_fcat_name']               = '��� �� �����������';
$BL['be_admin_fcat_needed']             = '�����';
$BL['be_admin_fcat_button1']            = '������';
$BL['be_admin_fcat_button2']            = '������';
$BL['be_admin_fcat_delmsg']             = '�������� �� ������ \n�� �������� ��������� ����?';
$BL['be_admin_fcat_fcat']               = '��������� �� �����';
$BL['be_admin_fcat_err1']               = '����� �� ��������� ���� � ������!';
$BL['be_admin_fcat_fkeyname']           = '��� �� ������ ����';
$BL['be_admin_fcat_exit']               = 'exit editing';
$BL['be_admin_fcat_addkey']             = 'add new key';
$BL['be_admin_fcat_editcat']            = 'edit category name';
$BL['be_admin_fcat_delcatmsg']          = 'Do you really want\nto delete file category?';
$BL['be_admin_fcat_delcat']             = 'delete file category';
$BL['be_admin_fcat_delkey']             = 'delete file key name';
$BL['be_admin_fcat_editkey']            = 'edit key';
$BL['be_admin_fcat_addcat']             = 'create new file category';

// admin.pagelayout.tmpl.php
$BL['be_admin_page_title']              = 'frontend setup: ������������ �� ����������';
$BL['be_admin_page_align']              = '������������';
$BL['be_admin_page_align_left']         = '���������� ������������ (����) �� ������ ���������� �� ����������';
$BL['be_admin_page_align_center']       = '���������� �� ������ ��������';
$BL['be_admin_page_align_right']        = '������������ �� ����� �� ������ ��������';
$BL['be_admin_page_margin']             = '�������';
$BL['be_admin_page_top']                = '����';
$BL['be_admin_page_bottom']             = '����';
$BL['be_admin_page_left']               = '����';
$BL['be_admin_page_right']              = '�����';
$BL['be_admin_page_bg']                 = '���';
$BL['be_admin_page_color']              = '����';
$BL['be_admin_page_height']             = '��������';
$BL['be_admin_page_width']              = '��������';
$BL['be_admin_page_main']               = '�������';
$BL['be_admin_page_leftspace']          = '���� ���������';
$BL['be_admin_page_rightspace']         = '����� ���������';
$BL['be_admin_page_class']              = 'class';
$BL['be_admin_page_image']              = '��������';
$BL['be_admin_page_text']               = '�����';
$BL['be_admin_page_link']               = '������';
$BL['be_admin_page_js']                 = 'javascript';
$BL['be_admin_page_visited']            = '��������';
$BL['be_admin_page_pagetitle']          = '��������&nbsp;��&nbsp;����������';
$BL['be_admin_page_addtotitle']         = '������&nbsp;���&nbsp;����������';
$BL['be_admin_page_category']           = '�����������';
$BL['be_admin_page_articlename']        = '�����&nbsp;��&nbsp;��������';
$BL['be_admin_page_blocks']             = '�������';
$BL['be_admin_page_allblocks']          = '������ �������';
$BL['be_admin_page_col1']               = '3 ������� ������������';
$BL['be_admin_page_col2']               = '2 ������� ������������ (������ ������ � �����, ��������� � ����)';
$BL['be_admin_page_col3']               = '2 ������� ������������ (������ ������ � ����, ��������� � �����)';
$BL['be_admin_page_col4']               = '1 ������� ������������';
$BL['be_admin_page_header']             = '��������';
$BL['be_admin_page_footer']             = 'footer';
$BL['be_admin_page_topspace']           = '�����&nbsp;������';
$BL['be_admin_page_bottomspace']        = '�����&nbsp;������';
$BL['be_admin_page_button']             = '������ �������������� �� ����������';

// admin.frontendcss.tmpl.php
$BL['be_admin_css_title']               = 'frontend setup: css data';
$BL['be_admin_css_css']                 = 'css';
$BL['be_admin_css_button']              = 'save css data';

// admin.templates.tmpl.php
$BL['be_admin_tmpl_title']              = 'frontend setup: �������';
$BL['be_admin_tmpl_default']            = '�� ������������';
$BL['be_admin_tmpl_add']                = '������&nbsp;������';
$BL['be_admin_tmpl_edit']               = '����������� �� ������';
$BL['be_admin_tmpl_new']                = '��������� �� ��� ������';
$BL['be_admin_tmpl_css']                = 'css ����';
$BL['be_admin_tmpl_head']               = 'html �����';
$BL['be_admin_tmpl_js']                 = 'js onload';
$BL['be_admin_tmpl_error']              = '������';
$BL['be_admin_tmpl_button']             = '������ �������';
$BL['be_admin_tmpl_name']               = '���';

// article.structlist.tmpl.php
$BL['be_article_title']                 = '��������� �� ����� � ������ ��� ������';

// article.new.tmpl.php
$BL['be_article_err1']                  = '���������� �� �������� � ������';
$BL['be_article_err2']                  = '��������� ���� � ������ - ������� "����"';
$BL['be_article_err3']                  = '�������� ���� � ������ - ������� "����"';
$BL['be_article_title1']                = '���������� �� ��������';
$BL['be_article_cat']                   = '���������';
$BL['be_article_atitle']                = '��������';
$BL['be_article_asubtitle']             = '�����������';
$BL['be_article_abegin']                = '�������';
$BL['be_article_aend']                  = '�������';
$BL['be_article_aredirect']             = '�������� ���';
$BL['be_article_akeywords']             = '������� ����';
$BL['be_article_asummary']              = '��������';
$BL['be_article_abutton']               = '��������� �� ��������';

// article.editcontent.inc.php
$BL['be_article_err4']                  = '�������� ���� � ������ - ������� "����" + 1 �������';

// article.editsummary.tmpl.php
$BL['be_article_estitle']               = '����������� �� ������� �� ��������';
$BL['be_article_eslastedit']            = '�������� ��������';
$BL['be_article_esnoupdate']            = '������� �� � ���������';
$BL['be_article_esbutton']              = '������ ��������';

// articlecontent.edit.tmpl.php
$BL['be_article_cnt_title']             = '������';
$BL['be_article_cnt_type']              = 'content type';
$BL['be_article_cnt_space']             = '�����';
$BL['be_article_cnt_before']            = '�����';
$BL['be_article_cnt_after']             = '����';
$BL['be_article_cnt_top']               = '������';
$BL['be_article_cnt_ctitle']            = '�������� �� �������';
$BL['be_article_cnt_back']              = '����� ���������� �� ��������';
$BL['be_article_cnt_button1']           = '������ �������';
$BL['be_article_cnt_button2']           = '������ ������';

// articlecontent.list.tmpl.php
$BL['be_article_cnt_ltitle']            = '���������� �� ��������';
$BL['be_article_cnt_ledit']             = '���������� ��������';
$BL['be_article_cnt_lvisible']          = '������/��������';
$BL['be_article_cnt_ldel']              = '��������� �� ��������';
$BL['be_article_cnt_ldeljs']            = '������ �� �������� ��������?';
$BL['be_article_cnt_redirect']          = '���������';
$BL['be_article_cnt_edited']            = '����������� ��';
$BL['be_article_cnt_start']             = '������� ����';
$BL['be_article_cnt_end']               = '������ ����';
$BL['be_article_cnt_add']               = '�������� �� ��� ������';
$BL['be_article_cnt_up']                = '������� �� ������� ������';
$BL['be_article_cnt_down']              = '������� �� ������� ������';
$BL['be_article_cnt_edit']              = '����������� �� �������';
$BL['be_article_cnt_delpart']           = '��������� �� �������';
$BL['be_article_cnt_delpartjs']         = '�������� �� ������ �� �������� �������?';
$BL['be_article_cnt_center']            = '���� ������';

// content forms
$BL['be_cnt_plaintext']                 = '���� �����';
$BL['be_cnt_htmltext']                  = 'html �����';
$BL['be_cnt_image']                     = '��������';
$BL['be_cnt_position']                  = '�������';
$BL['be_cnt_pos0']                      = '����, ����';
$BL['be_cnt_pos1']                      = '����, ������';
$BL['be_cnt_pos2']                      = '����, �����';
$BL['be_cnt_pos3']                      = '����, ����';
$BL['be_cnt_pos4']                      = '����, ������';
$BL['be_cnt_pos5']                      = '����, �����';
$BL['be_cnt_pos6']                      = '� ������, ����';
$BL['be_cnt_pos7']                      = '� ������, �����';
$BL['be_cnt_pos0i']                     = '���������� ���������� �� ���� � ��� ������';
$BL['be_cnt_pos1i']                     = '�������� ���������� ��� ������';
$BL['be_cnt_pos2i']                     = '���������� ���������� �� ����� � ��� ������';
$BL['be_cnt_pos3i']                     = '���������� ���������� �� ���� � ��� ������';
$BL['be_cnt_pos4i']                     = '�������� ���������� ��� ������';
$BL['be_cnt_pos5i']                     = '���������� ���������� �� ����� � ��� ������';
$BL['be_cnt_pos6i']                     = '���������� ���������� �� ���� � � ������';
$BL['be_cnt_pos7i']                     = '���������� ���������� �� ����� � � ������';
$BL['be_cnt_maxw']                      = 'max.&nbsp;��������';
$BL['be_cnt_maxh']                      = 'max.&nbsp;��������';
$BL['be_cnt_enlarge']                   = '�������&nbsp;���������';
$BL['be_cnt_caption']                   = '��������';
$BL['be_cnt_subject']                   = '�������';
$BL['be_cnt_recipient']                 = '���������';
$BL['be_cnt_buttontext']                = '����� �� ������';
$BL['be_cnt_sendas']                    = '������� ����';
$BL['be_cnt_text']                      = '�����';
$BL['be_cnt_html']                      = 'html';
$BL['be_cnt_formfields']                = 'form fields';
$BL['be_cnt_code']                      = '���';
$BL['be_cnt_infotext']                  = 'info&nbsp;text';
$BL['be_cnt_subscription']              = '���������';
$BL['be_cnt_labelemail']                = 'label&nbsp;email';
$BL['be_cnt_tablealign']                = 'table&nbsp;align';
$BL['be_cnt_labelname']                 = 'label&nbsp;name';
$BL['be_cnt_labelsubsc']                = 'label&nbsp;subscr.';
$BL['be_cnt_allsubsc']                  = 'all&nbsp;subscr.';
$BL['be_cnt_default']                   = 'default';
$BL['be_cnt_left']                      = '����';
$BL['be_cnt_center']                    = '������';
$BL['be_cnt_right']                     = '�����';
$BL['be_cnt_buttontext']                = 'button&nbsp;text';
$BL['be_cnt_successtext']               = 'success&nbsp;text';
$BL['be_cnt_regmail']                   = 'regist.email';
$BL['be_cnt_logoffmail']                = 'logoff.email';
$BL['be_cnt_changemail']                = 'change.email';
$BL['be_cnt_openimagebrowser']          = '������ ��������� �� ��������';
$BL['be_cnt_openfilebrowser']           = '������ ��������� �� �������';
$BL['be_cnt_sortup']                    = '�������� ������';
$BL['be_cnt_sortdown']                  = '�������� ������';
$BL['be_cnt_delimage']                  = '����� ��������� ��������';
$BL['be_cnt_delfile']                   = '����� ��������� ����';
$BL['be_cnt_delmedia']                  = '����� ��������� �����';
$BL['be_cnt_column']                    = '������';
$BL['be_cnt_imagespace']                = 'image&nbsp;space';
$BL['be_cnt_directlink']                = '�������� ������';
$BL['be_cnt_target']                    = '���';
$BL['be_cnt_target1']                   = '� ��� ��������';
$BL['be_cnt_target2']                   = 'in parent frame of the window';
$BL['be_cnt_target3']                   = 'in same window without frames';
$BL['be_cnt_target4']                   = 'in the same frame or window';
$BL['be_cnt_bullet']                    = '������ (�������)';
$BL['be_cnt_ullist']     		        = '������';
$BL['be_cnt_ullist_desc']     		    = '~ = 1�� ����, &nbsp; ~~ = 2�� ����, &nbsp; �.�.';
$BL['be_cnt_linklist']                  = '������ �������';
$BL['be_cnt_plainhtml']                 = '���� html';
$BL['be_cnt_files']                     = '�������';
$BL['be_cnt_description']               = '��������';
$BL['be_cnt_linkarticle']               = 'link article';
$BL['be_cnt_articles']                  = '������';
$BL['be_cnt_movearticleto']             = '�������� ��������� ������ � ������� ��� ������';
$BL['be_cnt_removearticleto']           = '����� ��������� ������ �� ������� ��� ������';
$BL['be_cnt_mediatype']                 = '��� �����';
$BL['be_cnt_control']                   = '�������';
$BL['be_cnt_showcontrol']               = '�������� ������ � ��������';
$BL['be_cnt_autoplay']                  = '���������';
$BL['be_cnt_source']                    = '��������';
$BL['be_cnt_internal']                  = '��������';
$BL['be_cnt_openmediabrowser']          = '������ �������� �� �����';
$BL['be_cnt_external']                  = '������';
$BL['be_cnt_mediapos0']                 = '���� (�� ������������)';
$BL['be_cnt_mediapos1']                 = '���������';
$BL['be_cnt_mediapos2']                 = '�����';
$BL['be_cnt_mediapos3']                 = 'block, left';
$BL['be_cnt_mediapos4']                 = 'block, right';
$BL['be_cnt_mediapos0i']                = '�������� ������� ������ � ��� ������';
$BL['be_cnt_mediapos1i']                = '��������� ������� ��� ������';
$BL['be_cnt_mediapos2i']                = '�������� ������� ������� � ��� ������';
$BL['be_cnt_mediapos3i']                = '�������� ������� ������ � � ������';
$BL['be_cnt_mediapos4i']                = '�������� ������� ������� � � ������';
$BL['be_cnt_setsize']                   = '������';
$BL['be_cnt_set1']                      = '160x120px';
$BL['be_cnt_set2']                      = '240x180px';
$BL['be_cnt_set3']                      = '320x240px';
$BL['be_cnt_set4']                      = '480x360px';
$BL['be_cnt_set5']                      = '����� �������';

// added: 28-12-2003
$BL['be_admin_page_add']                = '������ ���� ������������ �� ��������';
$BL['be_admin_page_name']               = '���';
$BL['be_admin_page_edit']               = '���������� ��������������';
$BL['be_admin_page_render']             = 'rendering';
$BL['be_admin_page_table']              = '�������';
$BL['be_admin_page_div']                = 'css div';
$BL['be_admin_page_custom']             = '�����';
$BL['be_admin_page_custominfo']         = '�� main ����� �� �������';
$BL['be_admin_tmpl_layout']             = '������������';
$BL['be_admin_tmpl_nolayout']           = '���� ������������!';

// added: 31-12-2003
$BL['be_ctype_search']                  = '�������';
$BL['be_cnt_results']                   = '���������';
$BL['be_cnt_results_per_page']          = '��&nbsp;�������� (��� � ������ ������� ������)';
$BL['be_cnt_opennewwin']                = '������ � ��� ��������';
$BL['be_cnt_searchlabeltext']           = '���� �� ������������� �������� � ��������� �� ������� �� ������� � ��������� �� ��������� �� ����� ��������� ������ ��� ������ �� ���������� "��������� �� ��������".';
$BL['be_cnt_input']                     = 'input';
$BL['be_cnt_style']                     = 'style';
$BL['be_cnt_result']                    = '��������';
$BL['be_cnt_next']                      = '�������';
$BL['be_cnt_previous']                  = '��������';
$BL['be_cnt_align']                     = '������������';
$BL['be_cnt_searchformtext']            = '�������� �������� �� �� ��������� ���� �� ������ ������� �� ������� ��� ���� ��������� �� ���������.';
$BL['be_cnt_intro']                     = '���������';
$BL['be_cnt_noresult']                  = '���� ���������';

// added: 02-01-2004
$BL['be_admin_page_disable']            = '������ �� �����';

// added: 09-01-2004
$BL['be_article_articleowner']          = '���������� �� ��������';
$BL['be_article_adminuser']             = '��������������� ����������';
$BL['be_article_username']              = '�����';

// added: 10-01-2004
$BL['be_ctype_wysywig']                 = 'WYSIWYG HTML';

// added, changed: 11-01-2004
$BL['be_admin_struct_regonly']          = '����� ���� �� ���������� �����������';
$BL['be_admin_struct_status']           = 'frontend menu status';

// added: 15-02-2004
$BL['be_ctype_articlemenu']				= '���� �� ������';
$BL['be_cnt_sitelevel']					= '���� �� �����';
$BL['be_cnt_sitecurrent']				= 'current site level';

// added: 24-03-2004
$BL['be_subnav_admin_starttext']		= 'backend default text';
$BL['be_ctype_ecard']					= 'e-card';
$BL['be_ctype_blog']					= 'blog';
$BL['be_cnt_ecardtext']                 = 'title/e-card';
$BL['be_cnt_ecardtmpl']                 = 'mail tmpl';
$BL['be_cnt_ecard_image']               = 'e-card image';
$BL['be_cnt_ecard_title']               = 'e-card title';
$BL['be_cnt_alignment']                 = 'alignment';
$BL['be_cnt_ecardform']                 = 'form tmpl';
$BL['be_cnt_ecardform_err']             = 'All fields marked * are obligatory';
$BL['be_cnt_ecardform_sender']          = 'Sender';
$BL['be_cnt_ecardform_recipient']       = 'Recipient';
$BL['be_cnt_ecardform_name']            = 'Name';
$BL['be_cnt_ecardform_msgtext']         = 'Your message to recipient';
$BL['be_cnt_ecardform_button']          = 'send e-card';
$BL['be_cnt_ecardsend']                 = 'sent tmpl';

// added: 28-03-2004
$BL['be_admin_startup_title']           = 'Backend default startup text';
$BL['be_admin_startup_text']            = 'startup text';
$BL['be_admin_startup_button']          = 'save stratup text';

// added: 17-04-2004
$BL['be_ctype_guestbook']				= 'guestbook/comm.';
$BL['be_cnt_guestbook_listing']			= 'listing';
$BL['be_cnt_guestbook_listing_all']		= 'list&nbsp;all&nbsp;entries';
$BL['be_cnt_guestbook_list']			= 'list';
$BL['be_cnt_guestbook_perpage']			= 'per&nbsp;page';
$BL['be_cnt_guestbook_form']			= 'form';
$BL['be_cnt_guestbook_signed']			= 'signed';
$BL['be_cnt_guestbook_nav']				= 'nav';
$BL['be_cnt_guestbook_before']			= 'before';
$BL['be_cnt_guestbook_after']			= 'after';
$BL['be_cnt_guestbook_entry']			= 'entry';
$BL['be_cnt_guestbook_edit']			= 'edit';
$BL['be_cnt_ecardform_selector']        = 'selector';
$BL['be_cnt_ecardform_radiobutton']     = 'radio button';
$BL['be_cnt_ecardform_javascript']      = 'JavaScript functionality';
$BL['be_cnt_ecardform_over']        	= 'onMouseOver';
$BL['be_cnt_ecardform_click']       	= 'onClick';
$BL['be_cnt_ecardform_out']       		= 'onMouseOut';
$BL['be_admin_struct_topcount']         = 'top article count';

// added: 19-04-2004
$BL['be_subnav_msg_newslettersend']     = 'newsletter';
$BL['be_newsletter_addnl']              = 'add newsletter';
$BL['be_newsletter_titleeditnl']        = 'edit newsletter';
$BL['be_newsletter_newnl']              = 'create new';
$BL['be_newsletter_button_savenl']      = 'save newsletter';
$BL['be_newsletter_fromname']           = 'from name';
$BL['be_newsletter_fromemail']          = 'from email';
$BL['be_newsletter_replyto']            = 'reply email';
$BL['be_newsletter_changed']            = 'last change';
$BL['be_newsletter_placeholder']        = 'placeholder';
$BL['be_newsletter_htmlpart']           = 'HTML newletter content';
$BL['be_newsletter_textpart']           = 'TEXT newletter content';
$BL['be_newsletter_allsubscriptions']   = 'all subscriptions';
$BL['be_newsletter_verifypage']         = 'verify link';
$BL['be_newsletter_open']               = 'HTML and TEXT input';
$BL['be_newsletter_open1']              = '(click on image to open)';
$BL['be_newsletter_sendnow']            = 'Send newsletter';
$BL['be_newsletter_attention']          = '<strong style="color:#CC3300;">Attention!</strong> Sending a newsletter to multiple recipients is very hazardous. Recipients should have been verified otherwise you will send potential spam. Think twice before you send the newsletter. Check your newsletter by sending a test.';
$BL['be_newsletter_attention1']         = 'If you have made changes in above newsletter datas please save it first otherwise these changes will not be used.'; 
$BL['be_newsletter_testemail']          = 'test email';
$BL['be_newsletter_sendnlbutton']       = 'send newsletter';
$BL['be_newsletter_sendprocess']        = 'send process';
$BL['be_newsletter_attention2']         = '<strong style="color:#CC3300;">Attention!</strong> Please do not stop the send process. Otherwise it is possible that you will send the newsletter more than twice to a recipient. When sending fails all non achieved recipient are stored in a session array and will be used if you send again immediately.';
$BL['be_newsletter_testerror']          = '<span style="color:#CC3300;font-size:11px;">the test email address <strong>###TEST###</strong> is NOT valid!<br />&nbsp;<br />Try again please!';
$BL['be_newsletter_to']                 = 'Recipients';
$BL['be_newsletter_ready']              = 'sending newsletter: DONE';
$BL['be_newsletter_readyfailed']        = 'Failed newsletter sending to';
$BL['be_subnav_msg_subscribers']        = 'newsletter subscribers';

// added: 20-04-2004
$BL['be_ctype_sitemap']				    = '����� �� ������';
$BL['be_cnt_sitemap_catimage']          = '����� �� ������';
$BL['be_cnt_sitemap_articleimage']      = '����� �� ������';
$BL['be_cnt_sitemap_display']           = '��������';
$BL['be_cnt_sitemap_structuronly']      = '���� ���� �� �����������';
$BL['be_cnt_sitemap_structurarticle']   = '��������� � ������';
$BL['be_cnt_sitemap_catclass']          = 'class �� ����';
$BL['be_cnt_sitemap_articleclass']      = 'class �� ������';
$BL['be_cnt_sitemap_count']             = '�����';
$BL['be_cnt_sitemap_classcount']        = '������� ��� ����� �� class-�';
$BL['be_cnt_sitemap_noclasscount']      = '�� ������� ��� ����� �� class-�';

// added: 23-04-2004
$BL['be_ctype_bid']				        = 'bid';
$BL['be_cnt_bid_bidtext']               = 'bid text';
$BL['be_cnt_bid_sendtext']              = 'sent text';
$BL['be_cnt_bid_verifiedtext']          = 'verified text';
$BL['be_cnt_bid_errortext']             = 'bid deleted';
$BL['be_cnt_bid_verifyemail']           = 'verify email';
$BL['be_cnt_bid_startbid']              = 'start bid';

// added: 29-04-2004
$BL['be_cnt_bid_nextbidadd']            = 'increase&nbsp;by';

?>