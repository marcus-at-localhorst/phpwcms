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


// Language: Greek, Language Code: gr
// please use HTML safe strings ONLY,neccessary to reduce processing time
// normal line break:    '&#13;', JavaScript Linebreak: '\n'


$BL['usr_online']                       = '������� online';

// Login Page
$BL["login_text"]                       = '�������� �������� �������';
$BL['login_error']                      = '����� ���� ��� ��������!';
$BL["login_username"]                   = '����� ������';
$BL["login_userpass"]                   = '������� ���������';
$BL["login_button"]                     = '�������';
$BL["login_lang"]                       = '������ ������������';

// phpwcms.php
$BL['be_nav_logout']                    = '����������';
$BL['be_nav_articles']                  = '�����';
$BL['be_nav_files']                     = '������';
$BL['be_nav_modules']                   = 'MODULES';
$BL['be_nav_messages']                  = '��������';
$BL['be_nav_chat']                      = '���������';
$BL['be_nav_profile']                   = '������';
$BL['be_nav_admin']                     = '������������';
$BL['be_nav_discuss']                   = '��������';

$BL['be_page_title']                    = 'phpwcms ����������';

$BL['be_subnav_article_center']         = '������ �����';
$BL['be_subnav_article_new']            = '��� �����';
$BL['be_subnav_file_center']            = '������ �������';
$BL['be_subnav_file_ftptakeover']       = 'ftp takeover';
$BL['be_subnav_mod_artists']            = '���������, ���������, ����';
$BL['be_subnav_msg_center']             = '������ ���������';
$BL['be_subnav_msg_new']                = '��� ������';
$BL['be_subnav_msg_newsletter']         = '��������';
$BL['be_subnav_chat_main']              = '����� ������ ����������';
$BL['be_subnav_chat_internal']          = '��������� ���������';
$BL['be_subnav_profile_login']          = '����������� ��������';
$BL['be_subnav_profile_personal']       = '��������� ��������';
$BL['be_subnav_admin_pagelayout']       = '������������ �������';
$BL['be_subnav_admin_templates']        = '�������';
$BL['be_subnav_admin_css']              = '������������� css';
$BL['be_subnav_admin_sitestructure']    = '���� �����������';
$BL['be_subnav_admin_users']            = '�������';
$BL['be_subnav_admin_filecat']          = '���������� �������';


// admin.functions.inc.php
$BL['be_func_struct_articleID']         = '������� ������';
$BL['be_func_struct_preview']           = '�������������';
$BL['be_func_struct_edit']              = '����������� ������';
$BL['be_func_struct_sedit']             = '����������� ����������';
$BL['be_func_struct_cut']               = '������� ������';
$BL['be_func_struct_nocut']             = '�������������� �������� ������';
$BL['be_func_struct_svisible']          = '�������� �����/������';
$BL['be_func_struct_spublic']           = '�������� �������/���������';
$BL['be_func_struct_sort_up']           = '���������� ���� �� ����';
$BL['be_func_struct_sort_down']         = '���������� ���� �� ����';
$BL['be_func_struct_del_article']       = '�������� ������';
$BL['be_func_struct_del_jsmsg']         = '������ ���������� \n�� ���������� �� �����?'; // "\n" = JavaScript Linebreak
$BL['be_func_struct_new_article']       = '���������� ���� ������ ���� ��������� ���������';
$BL['be_func_struct_paste_article']     = '���������� ������ ���� ��������� ���������';
$BL['be_func_struct_insert_level']      = '���������� ����������';
$BL['be_func_struct_paste_level']       = '���������� ���� ���������';
$BL['be_func_struct_cut_level']         = '������� ����������';
$BL['be_func_struct_no_cut']            = "��� ����� ������ �� ����� �� ������ �������!";
$BL['be_func_struct_no_paste1']         = "��� ����� ������ �� ����� ���������� ���!";
$BL['be_func_struct_no_paste2']         = 'is child in root line of the tree level';
$BL['be_func_struct_no_paste3']         = 'that should paste in here';
$BL['be_func_struct_paste_cancel']      = '������� ������� ����� ��������';
$BL['be_func_struct_del_struct']        = '�������� ����� ��������';
$BL['be_func_struct_del_sjsmsg']        = '������ ���������� �� ���������� \n��� ���� ��������?'; // "\n" = JavaScript Linebreak
$BL['be_func_struct_open']              = '�������';
$BL['be_func_struct_close']             = '��������';
$BL['be_func_struct_empty']             = '��������';

// article.contenttype.inc.php
$BL['be_ctype_plaintext']               = '���� �������';
$BL['be_ctype_html']                    = 'html';
$BL['be_ctype_code']                    = '�������';
$BL['be_ctype_textimage']               = '������� w/�� �������';
$BL['be_ctype_images']                  = '�������';
$BL['be_ctype_bulletlist']              = '����� (table)';
$BL['be_ctype_ullist']     		        = 'list';
$BL['be_ctype_link']                    = '����������� &amp; email';
$BL['be_ctype_linklist']                = '����� �������������';
$BL['be_ctype_linkarticle']             = '������������� ��� �� �����';
$BL['be_ctype_multimedia']              = '��������';
$BL['be_ctype_filelist']                = '����� �������';
$BL['be_ctype_emailform']               = '����� email';
$BL['be_ctype_newsletter']              = '����������� ������';

// profile.create.inc.php
$BL['be_profile_create_success']        = '�� ������ ������������� �� ��������.';
$BL['be_profile_create_error']          = '������������� ������ ���� �� ����������.';

// profile.update.inc.php
$BL['be_profile_update_success']        = '�� �������� ��� ������ ����������� ��������.';
$BL['be_profile_update_error']          = '������������� ������ ���� ��� ��������.';

// profile.updateaccount.inc.php
$BL['be_profile_account_err1']          = '� ��������� ������ {VAL} ��� ����� ������';
$BL['be_profile_account_err2']          = '� ������� ��������� ����� ���� ������ (���� {VAL} ����������: ����������� ����������� 5 ����������)';
$BL['be_profile_account_err3']          = '� ������� ��������� ������ �� ����� ������������� �� ��� ����������������';
$BL['be_profile_account_err4']          = '� ��������� ������������ ������������ {VAL} ��� ����� ������';

// profile.data.tmpl.php
$BL['be_profile_data_title']            = '�� ��������� ��� ��������';
$BL['be_profile_data_text']             = '�� ��������� �������� ����� �����������. ������� �� ��������� ������ ������� � ���������� ��� ��������� �� ��������� ����������� ��� ���, �� ������������ ��� ��� ���������� ���. ��� ��������� �� ��������� ������� �� ������� ������� �� ���� �� �������� ��� ������ ��� ��� ������� ���� � �� ������� ������. (� ����� ��� ���).';
$BL['be_profile_label_title']           = '������';
$BL['be_profile_label_firstname']       = '�����';
$BL['be_profile_label_name']            = '�������';
$BL['be_profile_label_company']         = '��������';
$BL['be_profile_label_street']          = '���������';
$BL['be_profile_label_city']            = '����';
$BL['be_profile_label_state']           = '�������';
$BL['be_profile_label_zip']             = '������������ �������';
$BL['be_profile_label_country']         = '����';
$BL['be_profile_label_phone']           = '��������';
$BL['be_profile_label_fax']             = '���';
$BL['be_profile_label_cellphone']       = '������';
$BL['be_profile_label_signature']       = '��������';
$BL['be_profile_label_notes']           = '����������';
$BL['be_profile_label_profession']      = '���������';
$BL['be_profile_label_newsletter']      = '����������� ������';
$BL['be_profile_text_newsletter']       = '������� �� ������� ������ ����������� ������ ��� phpwcms.';
$BL['be_profile_label_public']          = '�������';
$BL['be_profile_text_public']           = '� ������� ������ �� ��� �� ��������� ��� ������.';
$BL['be_profile_label_button']          = '�������� ���������� ���������';

// profile.account.tmpl.php
$BL['be_profile_account_title']         = '�������� �������';
$BL['be_profile_account_text']          = '�������� ��� ����� ���������� �� �������� �� ����� ������.<br />������ �� �������� ��� ������ ��������� ��� ��� ���������� ��� ���������� ��������.';
$BL['be_profile_label_err']             = '�������� �������';
$BL['be_profile_label_username']        = '����� ������';
$BL['be_profile_label_newpass']         = '���������� ������� ���������';
$BL['be_profile_label_repeatpass']      = '����������� ��������� ������ ���������';
$BL['be_profile_label_email']           = '��������� ������������ ������������';
$BL['be_profile_account_button']        = '��������';
$BL['be_profile_label_lang']            = '������';


// files.ftptakeover.tmpl.php
$BL['be_ftptakeover_title']             = '����������� ������� ��� ����������� ���� FTP';
$BL['be_ftptakeover_mark']              = '��������';
$BL['be_ftptakeover_available']         = '��������� ������';
$BL['be_ftptakeover_size']              = '�������';
$BL['be_ftptakeover_nofile']            = '��� ������� ��������� ������ &#8211; ������ �� ��������� ��� ���� ftp';
$BL['be_ftptakeover_all']               = '���';
$BL['be_ftptakeover_directory']         = '�������';
$BL['be_ftptakeover_rootdir']           = '������� ���������';
$BL['be_ftptakeover_needed']            = '����������!!! (������ �� ��������� ���)';
$BL['be_ftptakeover_optional']          = '�����������';
$BL['be_ftptakeover_keywords']          = '������ �������';
$BL['be_ftptakeover_additional']        = '��������';
$BL['be_ftptakeover_longinfo']          = 'long info';
$BL['be_ftptakeover_status']            = '���������';
$BL['be_ftptakeover_active']            = '�������';
$BL['be_ftptakeover_public']            = '�������';
$BL['be_ftptakeover_createthumb']       = '���������� ������������';
$BL['be_ftptakeover_button']            = '����������� ����������� �������';

// files.reiter.tmpl.php
$BL['be_ftab_title']                    = '������ �������';
$BL['be_ftab_createnew']                = '���������� ���� ������� ���� ����� ��������';
$BL['be_ftab_paste']                    = 'paste clipboard file into root directory';
$BL['be_ftab_disablethumb']             = '�������������� ������ ������������';
$BL['be_ftab_enablethumb']              = '������������ ������ ������������';
$BL['be_ftab_private']                  = '���������&nbsp;������';
$BL['be_ftab_public']                   = '�������&nbsp;������';
$BL['be_ftab_search']                   = '���������';
$BL['be_ftab_trash']                    = '�����&nbsp;�����������';
$BL['be_ftab_open']                     = '������� ���� ��� ���������';
$BL['be_ftab_close']                    = '�������� ���� ��� �������� ���������';
$BL['be_ftab_upload']                   = '������� ��� ������� ���� ����� ��������';
$BL['be_ftab_filehelp']                 = '������� ��������';

// files.private.newdir.tmpl.php
$BL['be_fpriv_rootdir']                 = '������ �������';
$BL['be_fpriv_title']                   = '������������ ��� ��������';
$BL['be_fpriv_inside']                  = '����';
$BL['be_fpriv_error']                   = '�����: ����������� ����� ��� ��� ��������';
$BL['be_fpriv_name']                    = '�����';
$BL['be_fpriv_status']                  = '���������';
$BL['be_fpriv_button']                  = '���������� ���� ���������';

// files.private.editdir.tmpl.php
$BL['be_fpriv_edittitle']               = '����������� ���������';
$BL['be_fpriv_newname']                 = '��� �����';
$BL['be_fpriv_updatebutton']            = '��������� ����������� ���������';

// files.private.upload.tmpl.php
$BL['be_fprivup_err1']                  = '�������� ��� ������ ��� ���������� �� ���������';
$BL['be_fprivup_err2']                  = '�� ������� ��� ���������� ������� ����� ���������� ���';
$BL['be_fprivup_err3']                  = '���������� ����� ���� ��� ������� ��� ������� ���� ������������ ����';
$BL['be_fprivup_err4']                  = '���������� ����� ���� ��� ���������� ��� ������� ������.';
$BL['be_fprivup_err5']                  = '��� �������� ������������';
$BL['be_fprivup_err6']                  = '�������� ��� ������������ ���� - ����� ����������! ������������� �� ��� <a href="mailto:{VAL}">�����������</a> ��� ���������� �� ����������� �������!';
$BL['be_fprivup_title']                 = '������� �������';
$BL['be_fprivup_button']                = '������� �������';
$BL['be_fprivup_upload']                = '�������';

// files.private.editfile.tmpl.php
$BL['be_fprivedit_title']               = '����������� ����������� �������';
$BL['be_fprivedit_filename']            = '����� �������';
$BL['be_fprivedit_created']             = '�������������';
$BL['be_fprivedit_dateformat']          = 'm-d-Y H:i';
$BL['be_fprivedit_err1']                = '��������� ������� �������� ��� �������';
$BL['be_fprivedit_clockwise']           = '���������� ��� ������������ ���� �� ���� ��� �������� [������ ������ +90&deg;]';
$BL['be_fprivedit_cclockwise']          = '���������� ��� ������������ �������� ��� ����� ��� �������� [������ ������ -90&deg;]';
$BL['be_fprivedit_button']              = '��������� ����������� �������';
$BL['be_fprivedit_size']                = '�������';

// files.private-functions.inc.php
$BL['be_fprivfunc_upload']              = '�������� �� ������ ���� ������';
$BL['be_fprivfunc_makenew']             = '���������� ���� ������� ����';
$BL['be_fprivfunc_paste']               = 'paste clipboard file into dir';
$BL['be_fprivfunc_edit']                = '����������� �������';
$BL['be_fprivfunc_cactive']             = '�������� ������/��������';
$BL['be_fprivfunc_cpublic']             = '�������� �������/���������';
$BL['be_fprivfunc_deldir']              = '�������� �������';
$BL['be_fprivfunc_jsdeldir']            = '������ ����� \n�� ���������� ��� ������?';
$BL['be_fprivfunc_notempty']            = '� ������� {VAL} ��� ����� ������!';
$BL['be_fprivfunc_opendir']             = '������� �������';
$BL['be_fprivfunc_closedir']            = '�������� �������';
$BL['be_fprivfunc_dlfile']              = '��������� �� ������';
$BL['be_fprivfunc_clipfile']            = 'clipboard file';
$BL['be_fprivfunc_cutfile']             = '�������';
$BL['be_fprivfunc_editfile']            = '����������� ����������� �������';
$BL['be_fprivfunc_cactivefile']         = '�������� ������/��������';
$BL['be_fprivfunc_cpublicfile']         = '�������� �������/���������';
$BL['be_fprivfunc_movetrash']           = '�������� ���� ���� �����������';
$BL['be_fprivfunc_jsmovetrash1']        = '������ ����� �� ���������� ��';
$BL['be_fprivfunc_jsmovetrash2']        = '���� ������ ����� �����������?';

// files.private.additions.inc.php
$BL['be_fprivadd_nofolders']            = '��� �������� �������� ������ � �������';

// files.public.list.tmpl.php
$BL['be_fpublic_user']                  = '�������';
$BL['be_fpublic_nofiles']               = '��� �������� ������� ������ � �������';

// files.private.trash.tmpl.php
$BL['be_ftrash_nofiles']                = '� ����� ����������� ����� ������';
$BL['be_ftrash_show']                   = '�������� ��������� �������';

// files.private-delfilelist.inc.php
$BL['be_ftrash_restore']                = '������ �� �������������� �� {VAL} \n��� �� �� �������� ���� ���� ��������� ��������?';
$BL['be_ftrash_delete']                 = '������ ����� �� ���������� �� {VAL}?';
$BL['be_ftrash_undo']                   = '���������';
$BL['be_ftrash_delfinal']               = '�������� ��������';

// files.search.tmpl.php
$BL['be_fsearch_err1']                  = 'search string is empty.';
$BL['be_fsearch_title']                 = '��������� �������';
$BL['be_fsearch_infotext']              = '���� ����� ��� ���� ��������� ��� ����������� �������. ������ ��� ��� ������������ ���� ������ �������,<br />������� ������� ��� ���������� �������. ��� ������� ���������� ��� wildcards. ��������� ��������� ������ �������<br />�� ����. �������� ���/� ��� ���� ������ �� �����������: ���������/�������.';
$BL['be_fsearch_nonfound']              = '�� �������� ������ ��� ��� ��������� ���. ��������� ��� ����� ���������� ���!';
$BL['be_fsearch_fillin']                = '�������� ����������� ��� ������������ ���� ��� �������� �����.';
$BL['be_fsearch_searchlabel']           = '��������� ���';
$BL['be_fsearch_startsearch']           = '������ ����������';
$BL['be_fsearch_and']                   = '���';
$BL['be_fsearch_or']                    = '�';
$BL['be_fsearch_all']                   = '��� �� ������';
$BL['be_fsearch_personal']              = '��������';
$BL['be_fsearch_public']                = '�������';

// chat.main.tmpl.php & chat.list.tmpl.php
$BL['be_chat_title']                    = '��������� ���������';
$BL['be_chat_info']                     = '��� �������� �� ���������� �� ������ ������� phpwcms ��� ��������� ������. ���� �� ���� ����� ��� �������� �� ���������� ����� ���� �������� ������ �� ������� ��� ������ ��� ������� �� �� ��������� ����. ��� ������ �� ����������� ����� �� ������ ������������ �� �������������� �� �������� (�� �������� �������� phpwcms).';
$BL['be_chat_start']                    = '������� ��� ��� ������ ��� ���������';
$BL['be_chat_lines']                    = '������� ���������';

// message.center.tmpl.php
$BL['be_msg_title']                     = '������ ���������';
$BL['be_msg_new']                       = '���������';
$BL['be_msg_old']                       = '�����';
$BL['be_msg_senttop']                   = '�����������';
$BL['be_msg_del']                       = '�����������';
$BL['be_msg_from']                      = '���';
$BL['be_msg_subject']                   = '����';
$BL['be_msg_date']                      = '����������/���';
$BL['be_msg_close']                     = '�������� ���������';
$BL['be_msg_create']                    = '���������� ���� ���������';
$BL['be_msg_reply']                     = '��������� �� ���� �� ������';
$BL['be_msg_move']                      = '���������� ����� ��� ��������� ���� ����';
$BL['be_msg_unread']                    = '�� ����������� � ��������� ��������';
$BL['be_msg_lastread']                  = '��������� {VAL} ����������� ��������';
$BL['be_msg_lastsent']                  = '��������� {VAL} ����������� ��������';
$BL['be_msg_marked']                    = '�������� ���������� ��� �������� (�����)';
$BL['be_msg_nomsg']                     = '�� ������� ������ ������ ���� �� ����� ��� ������';

// message.send.tmpl.php
$BL['be_msg_RE']                        = 'RE';
$BL['be_msg_by']                        = '�������� ���';
$BL['be_msg_on']                        = '����';
$BL['be_msg_msg']                       = '������';
$BL['be_msg_err1']                      = '�������� �� ���������� ���������...';
$BL['be_msg_err2']                      = '���������� �� ����� ��� ������� (� ���������� ������ �� ��������� �� ������ ��� ��������)';
$BL['be_msg_err3']                      = '��� ���� ����� �� �������� ��� ���� ������ ;-)';
$BL['be_msg_sent']                      = '��������� ������ ������!';
$BL['be_msg_fwd']                       = '�� ������������ ��� ������ ��������� �';
$BL['be_msg_newmsgtitle']               = '������� ���� ���������';
$BL['be_msg_err']                       = '������ ���� �������� ��� ���������';
$BL['be_msg_sendto']                    = '�������� ��������� ����';
$BL['be_msg_available']                 = '����� ���������� ����������';
$BL['be_msg_all']                       = '������� �� ������ �� ����� ���� ����������';

// message.subscription.tmpl.php
$BL['be_newsletter_title']              = '��������� ������������ �������';
$BL['be_newsletter_titleedit']          = '����������� ��������� ������������ �������';
$BL['be_newsletter_new']                = '���������� ����';
$BL['be_newsletter_add']                = '��������&nbsp;���������&nbsp;������������ �������';
$BL['be_newsletter_name']               = '�����';
$BL['be_newsletter_info']               = '�����������';
$BL['be_newsletter_button_save']        = '���������� ���������';
$BL['be_newsletter_button_cancel']      = '�������';

// admin.newuser.tmpl.php
$BL['be_admin_usr_err1']                = '� ��������� ������ ��� ����� ������, �������� ��� �����������';
$BL['be_admin_usr_err2']                = '� ��������� ������ ����� ���� (����������)';
$BL['be_admin_usr_err3']                = '� ������� ��������� ����� ����� (����������)';
$BL['be_admin_usr_err4']                = "� ��������� ������������ ������������ ��� ����� ������";
$BL['be_admin_usr_err']                 = '������';
$BL['be_admin_usr_mailsubject']         = '����������� ��� phpwcms';
$BL['be_admin_usr_mailbody']            = "����������� ��� PHPWCMS\n\n    ��������� ������: {LOGIN}\n    ������� ���������: {PASSWORD}\n\n\n�������� �� ���������� ���: {LOGIN_PAGE}\n\n������������ phpwcms\n ";
$BL['be_admin_usr_title']               = '�������� ���� ������';
$BL['be_admin_usr_realname']            = '���������� �����';
$BL['be_admin_usr_setactive']           = '������������ ������';
$BL['be_admin_usr_iflogin']             = '��� ������������� � ������� ������ �� ���������';
$BL['be_admin_usr_isadmin']             = '� ������� ����� ������������';
$BL['be_admin_usr_ifadmin']             = '��� ������������� � ������� ���� ���������� �����������';
$BL['be_admin_usr_verify']              = '����������';
$BL['be_admin_usr_sendemail']           = '������� ��� ������ ������������ ������������ ��� ��� ������ �� ��� ����������� �����������';
$BL['be_admin_usr_button']              = '�������� ��������� ������';

// admin.edituser.tmpl.php
$BL['be_admin_usr_etitle']              = '����������� ����������� ������';
$BL['be_admin_usr_emailsubject']        = 'phpwcms - �������� ����������� �������';
$BL['be_admin_usr_emailbody']           = "PHPWCMS ����������� ����������� ������ �������\n\n    ����� ������: {LOGIN}\n    �������: {PASSWORD}\n\n\n�������� �� ���������� ���: {LOGIN_PAGE}\n\nphpwcms admin\n ";
$BL['be_admin_usr_passnochange']        = '[����� ������ - �������������� ��� ������ ������ ���������]';
$BL['be_admin_usr_ebutton']             = '�������� ��������� ������';

// admin.listuser.tmpl.php
$BL['be_admin_usr_ltitle']              = '����� ������� phpwcms';
$BL['be_admin_usr_ldel']                = '�������!&#13;���� �� ��������� ��� ������';
$BL['be_admin_usr_create']              = '���������� ���� ������';
$BL['be_admin_usr_editusr']             = '����������� ������';

// admin.structform.tmpl.php
$BL['be_admin_struct_title']            = '���� ���������';
$BL['be_admin_struct_child']            = '(child of)';
$BL['be_admin_struct_index']            = '������ ������';
$BL['be_admin_struct_cat']              = '������ ����������';
$BL['be_admin_struct_hide1']            = '��������';
$BL['be_admin_struct_hide2']            = 'this&nbsp;category&nbsp;in&nbsp;menu';
$BL['be_admin_struct_info']             = 'category infotext';
$BL['be_admin_struct_template']         = '������';
$BL['be_admin_struct_alias']            = 'alias this category';
$BL['be_admin_struct_visible']          = '�����';
$BL['be_admin_struct_button']           = '�������� ��������� ����������';
$BL['be_admin_struct_close']            = '��������';

// admin.filecat.tmpl.php
$BL['be_admin_fcat_title']              = '���������� �������';
$BL['be_admin_fcat_err']                = '������ ���������� ������!';
$BL['be_admin_fcat_name']               = '������ ����������';
$BL['be_admin_fcat_needed']             = '����������';
$BL['be_admin_fcat_button1']            = '��������';
$BL['be_admin_fcat_button2']            = '����������';
$BL['be_admin_fcat_delmsg']             = 'Do you really want\nto delete file key?';
$BL['be_admin_fcat_fcat']               = '��������� �������';
$BL['be_admin_fcat_err1']               = 'file key name is empty!';
$BL['be_admin_fcat_fkeyname']           = 'file key name';
$BL['be_admin_fcat_exit']               = 'exit editing';
$BL['be_admin_fcat_addkey']             = '�������� ���� ��������';
$BL['be_admin_fcat_editcat']            = '����������� ������ ����������';
$BL['be_admin_fcat_delcatmsg']          = 'Do you really want\nto delete file category?';
$BL['be_admin_fcat_delcat']             = '�������� ���������� �������';
$BL['be_admin_fcat_delkey']             = 'delete file key name';
$BL['be_admin_fcat_editkey']            = '����������� ��������';
$BL['be_admin_fcat_addcat']             = '���������� ���� ���������� �������';

// admin.pagelayout.tmpl.php
$BL['be_admin_page_title']              = 'frontend setup: page layout';
$BL['be_admin_page_align']              = '�������� �������';
$BL['be_admin_page_align_left']         = '�������� �������� (��������) ��� ��� �� ����������� ��� �������';
$BL['be_admin_page_align_center']       = '�������� ���� ��� ������������ ��� ������';
$BL['be_admin_page_align_right']        = 'align right of the whole page content';
$BL['be_admin_page_margin']             = 'margin';
$BL['be_admin_page_top']                = '����';
$BL['be_admin_page_bottom']             = '����';
$BL['be_admin_page_left']               = '��������';
$BL['be_admin_page_right']              = '�����';
$BL['be_admin_page_bg']                 = '�����';
$BL['be_admin_page_color']              = '�����';
$BL['be_admin_page_height']             = '����';
$BL['be_admin_page_width']              = '������';
$BL['be_admin_page_main']               = 'main';
$BL['be_admin_page_leftspace']          = '�������� ����';
$BL['be_admin_page_rightspace']         = '���� ����';
$BL['be_admin_page_class']              = 'class';
$BL['be_admin_page_image']              = '������';
$BL['be_admin_page_text']               = '�������';
$BL['be_admin_page_link']               = '�����������';
$BL['be_admin_page_js']                 = 'javascript';
$BL['be_admin_page_visited']            = 'visited';
$BL['be_admin_page_pagetitle']          = 'page&nbsp;title';
$BL['be_admin_page_addtotitle']         = 'add&nbsp;to&nbsp;title';
$BL['be_admin_page_category']           = '���������';
$BL['be_admin_page_articlename']        = 'article&nbsp;name';
$BL['be_admin_page_blocks']             = 'blocks';
$BL['be_admin_page_allblocks']          = 'all blocks';
$BL['be_admin_page_col1']               = '3 column layout';
$BL['be_admin_page_col2']               = '2 column layout (main column right, nav column left)';
$BL['be_admin_page_col3']               = '2 column layout (main column left, nav column right)';
$BL['be_admin_page_col4']               = '1 column layout';
$BL['be_admin_page_header']             = '�����������';
$BL['be_admin_page_footer']             = 'footer';
$BL['be_admin_page_topspace']           = 'top&nbsp;space';
$BL['be_admin_page_bottomspace']        = 'bottom&nbsp;space';
$BL['be_admin_page_button']             = 'save page layout';

// admin.frontendcss.tmpl.php
$BL['be_admin_css_title']               = 'frontend setup: css data';
$BL['be_admin_css_css']                 = 'css';
$BL['be_admin_css_button']              = '���������� ��������� css';

// admin.templates.tmpl.php
$BL['be_admin_tmpl_title']              = 'frontend setup: templates';
$BL['be_admin_tmpl_default']            = '�� �������';
$BL['be_admin_tmpl_add']                = 'add&nbsp;template';
$BL['be_admin_tmpl_edit']               = 'edit template';
$BL['be_admin_tmpl_new']                = '���������� ����';
$BL['be_admin_tmpl_css']                = 'css file';
$BL['be_admin_tmpl_head']               = 'html head';
$BL['be_admin_tmpl_js']                 = 'js onload';
$BL['be_admin_tmpl_error']              = '������';
$BL['be_admin_tmpl_button']             = 'save template';
$BL['be_admin_tmpl_name']               = '�����';

// article.structlist.tmpl.php
$BL['be_article_title']                 = 'site structure and article list';

// article.new.tmpl.php
$BL['be_article_err1']                  = '� ������ ��\'���� �� ����� ����� �����';
$BL['be_article_err2']                  = '� ������� ���������� ������� ���� ����� - �������� �� ����';
$BL['be_article_err3']                  = '� ������� ���������� ����� ���� ����� - �������� �� ����';
$BL['be_article_title1']                = 'article basis information';
$BL['be_article_cat']                   = '���������';
$BL['be_article_atitle']                = 'article title';
$BL['be_article_asubtitle']             = '���������';
$BL['be_article_abegin']                = '��������';
$BL['be_article_aend']                  = '���������';
$BL['be_article_aredirect']             = 'redirect to';
$BL['be_article_akeywords']             = '������ �������';
$BL['be_article_asummary']              = '������';
$BL['be_article_abutton']               = '���������� ���� ������';

// article.editcontent.inc.php
$BL['be_article_err4']                  = 'end date given was wrong - set to now + 1 week';

// article.editsummary.tmpl.php
$BL['be_article_estitle']               = 'edit article basis information';
$BL['be_article_eslastedit']            = '��������� �����������';
$BL['be_article_esnoupdate']            = '����� ��� ����������';
$BL['be_article_esbutton']              = 'update article data';

// articlecontent.edit.tmpl.php
$BL['be_article_cnt_title']             = '����������� ������';
$BL['be_article_cnt_type']              = 'content type';
$BL['be_article_cnt_space']             = '����';
$BL['be_article_cnt_before']            = '����';
$BL['be_article_cnt_after']             = '����';
$BL['be_article_cnt_top']               = '����';
$BL['be_article_cnt_toplink']           = 'display top link';
$BL['be_article_cnt_ctitle']            = '������ ������������';
$BL['be_article_cnt_back']              = 'complete article info';
$BL['be_article_cnt_button1']           = '��������';
$BL['be_article_cnt_button2']           = '����������';
$BL['be_article_cnt_button3']           = '���������� &amp; ��������';

// articlecontent.list.tmpl.php
$BL['be_article_cnt_ltitle']            = '����������� ������';
$BL['be_article_cnt_ledit']             = '����������� ������';
$BL['be_article_cnt_lvisible']          = '�������� �����/������';
$BL['be_article_cnt_ldel']              = '�� ��������� ���� �� �����';
$BL['be_article_cnt_ldeljs']            = '�������� ������?';
$BL['be_article_cnt_redirect']          = '��������';
$BL['be_article_cnt_edited']            = '������������� ���';
$BL['be_article_cnt_start']             = 'start date';
$BL['be_article_cnt_end']               = 'end date';
$BL['be_article_cnt_add']               = '��������';
$BL['be_article_cnt_addtitle']          = 'add new content part';
$BL['be_article_cnt_up']                = 'move content up';
$BL['be_article_cnt_down']              = 'move content down';
$BL['be_article_cnt_edit']              = 'edit content part';
$BL['be_article_cnt_delpart']           = 'delete this article content part';
$BL['be_article_cnt_delpartjs']         = 'Delete content part?';
$BL['be_article_cnt_center']            = 'article center';

// content forms
$BL['be_cnt_plaintext']                 = '���� �������';
$BL['be_cnt_htmltext']                  = '������� html';
$BL['be_cnt_image']                     = '������';
$BL['be_cnt_position']                  = '���������';
$BL['be_cnt_pos0']                      = 'Above, ��������';
$BL['be_cnt_pos1']                      = 'Above, ������';
$BL['be_cnt_pos2']                      = 'Above, �����';
$BL['be_cnt_pos3']                      = '����, ��������';
$BL['be_cnt_pos4']                      = '����, ������';
$BL['be_cnt_pos5']                      = '����, �����';
$BL['be_cnt_pos6']                      = '��� �������, ��������';
$BL['be_cnt_pos7']                      = '��� �������, �����';
$BL['be_cnt_pos0i']                     = 'align the image above and left of the text block';
$BL['be_cnt_pos1i']                     = 'align the image above and centered of the text block';
$BL['be_cnt_pos2i']                     = 'align the image above and right of the text block';
$BL['be_cnt_pos3i']                     = 'align the image below and left of the text block';
$BL['be_cnt_pos4i']                     = 'align the image below and centered of the text block';
$BL['be_cnt_pos5i']                     = 'align the image above and right of the text block';
$BL['be_cnt_pos6i']                     = 'align the image left within the text block';
$BL['be_cnt_pos7i']                     = 'align the image right within the text block';
$BL['be_cnt_maxw']                      = '�������.&nbsp;������';
$BL['be_cnt_maxh']                      = '�������.&nbsp;����';
$BL['be_cnt_enlarge']                   = '�������&nbsp;���������';
$BL['be_cnt_caption']                   = '������';
$BL['be_cnt_subject']                   = '����';
$BL['be_cnt_recipient']                 = '����������';
$BL['be_cnt_buttontext']                = '������� ��������';
$BL['be_cnt_sendas']                    = '�������� ���';
$BL['be_cnt_text']                      = '�������';
$BL['be_cnt_html']                      = 'html';
$BL['be_cnt_formfields']                = '����� ������';
$BL['be_cnt_code']                      = 'code';
$BL['be_cnt_infotext']                  = 'info&nbsp;text';
$BL['be_cnt_subscription']              = '��������';
$BL['be_cnt_labelemail']                = 'label&nbsp;email';
$BL['be_cnt_tablealign']                = 'table&nbsp;align';
$BL['be_cnt_labelname']                 = 'label&nbsp;name';
$BL['be_cnt_labelsubsc']                = 'label&nbsp;subscr.';
$BL['be_cnt_allsubsc']                  = 'all&nbsp;subscr.';
$BL['be_cnt_default']                   = '�������������';
$BL['be_cnt_left']                      = '��������';
$BL['be_cnt_center']                    = '������';
$BL['be_cnt_right']                     = '�����';
$BL['be_cnt_buttontext']                = 'button&nbsp;text';
$BL['be_cnt_successtext']               = 'success&nbsp;text';
$BL['be_cnt_regmail']                   = 'regist.email';
$BL['be_cnt_logoffmail']                = 'logoff.email';
$BL['be_cnt_changemail']                = 'change.email';
$BL['be_cnt_openimagebrowser']          = 'open image browser';
$BL['be_cnt_openfilebrowser']           = 'open file browser';
$BL['be_cnt_sortup']                    = '���������� ����';
$BL['be_cnt_sortdown']                  = '���������� ����';
$BL['be_cnt_delimage']                  = '�������� ����������� �������';
$BL['be_cnt_delfile']                   = '�������� ����������� �������';
$BL['be_cnt_delmedia']                  = '�������� ����������� ���������';
$BL['be_cnt_column']                    = '�����';
$BL['be_cnt_imagespace']                = 'image&nbsp;space';
$BL['be_cnt_directlink']                = 'direct link';
$BL['be_cnt_target']                    = '������';
$BL['be_cnt_target1']                   = '�� ��� ��������';
$BL['be_cnt_target2']                   = 'in parent frame of the window';
$BL['be_cnt_target3']                   = 'in same window without frames';
$BL['be_cnt_target4']                   = 'in the same frame or window';
$BL['be_cnt_bullet']                    = 'list (table)';
$BL['be_cnt_ullist']     		        = 'list';
$BL['be_cnt_ullist_desc']     		    = '~ = 1st Level, &nbsp; ~~ = 2nd level, &nbsp; etc.';
$BL['be_cnt_linklist']                  = '����� �������������';
$BL['be_cnt_plainhtml']                 = '���� html';
$BL['be_cnt_files']                     = '������';
$BL['be_cnt_description']               = '���������';
$BL['be_cnt_linkarticle']               = 'link article';
$BL['be_cnt_articles']                  = '�����';
$BL['be_cnt_movearticleto']             = 'move selected article to link article list';
$BL['be_cnt_removearticleto']           = 'remove selected article from link article list';
$BL['be_cnt_mediatype']                 = '����� ���������';
$BL['be_cnt_control']                   = 'control';
$BL['be_cnt_showcontrol']               = 'show control bar';
$BL['be_cnt_autoplay']                  = '�������� �����������';
$BL['be_cnt_source']                    = '����';
$BL['be_cnt_internal']                  = '���������';
$BL['be_cnt_openmediabrowser']          = 'open media browser';
$BL['be_cnt_external']                  = '���������';
$BL['be_cnt_mediapos0']                 = '�������� (����������)';
$BL['be_cnt_mediapos1']                 = '������';
$BL['be_cnt_mediapos2']                 = '�����';
$BL['be_cnt_mediapos3']                 = 'block, ��������';
$BL['be_cnt_mediapos4']                 = 'block, �����';
$BL['be_cnt_mediapos0i']                = 'align media above and left of the text block';
$BL['be_cnt_mediapos1i']                = 'align media above and centered of the text block';
$BL['be_cnt_mediapos2i']                = 'align media above and right of the text block';
$BL['be_cnt_mediapos3i']                = 'align media left within the text block';
$BL['be_cnt_mediapos4i']                = 'align media right within the text block';
$BL['be_cnt_setsize']                   = '��������� �� �������';
$BL['be_cnt_set1']                      = 'set media size to 160x120px';
$BL['be_cnt_set2']                      = 'set media size to 240x180px';
$BL['be_cnt_set3']                      = 'set media size to 320x240px';
$BL['be_cnt_set4']                      = 'set media size to 480x360px';
$BL['be_cnt_set5']                      = 'clear media width and height';

// added: 28-12-2003
$BL['be_admin_page_add']                = 'create new pagelayout';
$BL['be_admin_page_name']               = 'layout name';
$BL['be_admin_page_edit']               = 'edit pagelayout';
$BL['be_admin_page_render']             = 'rendering';
$BL['be_admin_page_table']              = 'table';
$BL['be_admin_page_div']                = 'css div';
$BL['be_admin_page_custom']             = 'custom';
$BL['be_admin_page_custominfo']         = 'from template main block';
$BL['be_admin_tmpl_layout']             = 'layout';
$BL['be_admin_tmpl_nolayout']           = 'No page layout available!';

// added: 31-12-2003
$BL['be_ctype_search']                  = '���������';
$BL['be_cnt_results']                   = '������������';
$BL['be_cnt_results_per_page']          = 'per&nbsp;page (if empty show all)';
$BL['be_cnt_opennewwin']                = '������� ���� ���������';
$BL['be_cnt_searchlabeltext']           = 'these are predefined texts and values for the search form and search result page and texts are shown when more than the given count of results per page should be shown.';
$BL['be_cnt_input']                     = 'input';
$BL['be_cnt_style']                     = '����';
$BL['be_cnt_result']                    = '����������';
$BL['be_cnt_next']                      = '�������';
$BL['be_cnt_previous']                  = '�����������';
$BL['be_cnt_align']                     = '������������';
$BL['be_cnt_searchformtext']            = '�� �������� ������� �������������� ���� � ����� ���������� ����� ������� � �� ������������ ��� ��� ������� ��������� (���) ����� ���������.';
$BL['be_cnt_intro']                     = '��������';
$BL['be_cnt_noresult']                  = '������ ����������';

// added: 02-01-2004
$BL['be_admin_page_disable']            = '��������������';

// added: 09-01-2004
$BL['be_article_articleowner']          = '���������� ������';
$BL['be_article_adminuser']             = 'admin user';
$BL['be_article_username']              = '����������';

// added: 10-01-2004
$BL['be_ctype_wysywig']                 = 'WYSIWYG HTML';

// added, changed: 11-01-2004
$BL['be_admin_struct_regonly']          = '����� ���� ����� ������������� �������';
$BL['be_admin_struct_status']           = 'frontend menu status';

// added: 15-02-2004
$BL['be_ctype_articlemenu']				= 'article menu';
$BL['be_cnt_sitelevel']					= 'site level';
$BL['be_cnt_sitecurrent']				= 'current site level';

// added: 24-03-2004
$BL['be_subnav_admin_starttext']		= 'backend default text';
$BL['be_ctype_ecard']					= '����������� �����';
$BL['be_ctype_blog']					= 'blog';
$BL['be_cnt_ecardtext']                 = 'title/e-card';
$BL['be_cnt_ecardtmpl']                 = 'mail tmpl';
$BL['be_cnt_ecard_image']               = '������ ������������ ������';
$BL['be_cnt_ecard_title']               = '������ ������������ ������';
$BL['be_cnt_alignment']                 = '������������';
$BL['be_cnt_ecardform']                 = 'form tmpl';
$BL['be_cnt_ecardform_err']             = '��� �� ����� ��� �������������� �� * ����� �����������';
$BL['be_cnt_ecardform_sender']          = '����������';
$BL['be_cnt_ecardform_recipient']       = '����������';
$BL['be_cnt_ecardform_name']            = '�����';
$BL['be_cnt_ecardform_msgtext']         = '�� ������ ��� ���� ���������';
$BL['be_cnt_ecardform_button']          = '������� ��� ����������� �����';
$BL['be_cnt_ecardsend']                 = '����� ������';

// added: 28-03-2004
$BL['be_admin_startup_title']           = 'Backend default startup text';
$BL['be_admin_startup_text']            = 'startup text';
$BL['be_admin_startup_button']          = 'save startup text';

// added: 17-04-2004
$BL['be_ctype_guestbook']				= 'guestbook/comment';
$BL['be_cnt_guestbook_listing']			= 'listing';
$BL['be_cnt_guestbook_listing_all']		= 'list&nbsp;all&nbsp;entries';
$BL['be_cnt_guestbook_list']			= 'list';
$BL['be_cnt_guestbook_perpage']			= 'per&nbsp;page';
$BL['be_cnt_guestbook_form']			= 'form';
$BL['be_cnt_guestbook_signed']			= 'signed';
$BL['be_cnt_guestbook_nav']				= 'nav';
$BL['be_cnt_guestbook_before']			= '����';
$BL['be_cnt_guestbook_after']			= '����';
$BL['be_cnt_guestbook_entry']			= '�������';
$BL['be_cnt_guestbook_edit']			= '�����������';
$BL['be_cnt_ecardform_selector']        = 'selector';
$BL['be_cnt_ecardform_radiobutton']     = 'radio button';
$BL['be_cnt_ecardform_javascript']      = 'JavaScript functionality';
$BL['be_cnt_ecardform_over']        	= 'onMouseOver';
$BL['be_cnt_ecardform_click']       	= 'onClick';
$BL['be_cnt_ecardform_out']       		= 'onMouseOut';
$BL['be_admin_struct_topcount']         = 'top article count';

// added: 19-04-2004
$BL['be_subnav_msg_newslettersend']     = '����������� ������';
$BL['be_newsletter_addnl']              = '�������� ������������ �������';
$BL['be_newsletter_titleeditnl']        = '����������� ������������ �������';
$BL['be_newsletter_newnl']              = '���������� ����';
$BL['be_newsletter_button_savenl']      = '���������� ������������ �������';
$BL['be_newsletter_fromname']           = '��� �����';
$BL['be_newsletter_fromemail']          = '��� ��������� ������������ ������������';
$BL['be_newsletter_replyto']            = '�������� �� ��������� ������������ ������������';
$BL['be_newsletter_changed']            = '��������� ������';
$BL['be_newsletter_placeholder']        = 'placeholder';
$BL['be_newsletter_htmlpart']           = 'HTML ����������� ������������ �������';
$BL['be_newsletter_textpart']           = 'TEXT ����������� ������������ �������';
$BL['be_newsletter_allsubscriptions']   = '���� �� ���������';
$BL['be_newsletter_verifypage']         = '����������� ���������';
$BL['be_newsletter_open']               = 'HTML and TEXT input';
$BL['be_newsletter_open1']              = '(������� ���� ������ ��� �� �������)';
$BL['be_newsletter_sendnow']            = '�������� ������������ �������';
$BL['be_newsletter_attention']          = '<strong style="color:#CC3300;">Attention!</strong> Sending a newsletter to multiple recipients is very hazardous. Recipients should have been verified otherwise you will send potential spam. Think twice before you send the newsletter. Check your newsletter by sending a test.';
$BL['be_newsletter_attention1']         = '��� ����� ����� ������� ��� �������� ����������� ������ ������������ �� �� ������ ����� ������ ����� �� ������� �� �� ���������������.'; 
$BL['be_newsletter_testemail']          = 'test email';
$BL['be_newsletter_sendnlbutton']       = '�������� ������������ �������';
$BL['be_newsletter_sendprocess']        = '�������� �����������';
$BL['be_newsletter_attention2']         = '<strong style="color:#CC3300;">Attention!</strong> Please do not stop the send process. Otherwise it is possible that you will send the newsletter more than twice to a recipient. When sending fails all non achieved recipient are stored in a session array and will be used if you send again immediately.';
$BL['be_newsletter_testerror']          = '<span style="color:#CC3300;font-size:11px;">the test email address <strong>###TEST###</strong> is NOT valid!<br />&nbsp;<br />Try again please!';
$BL['be_newsletter_to']                 = '����������';
$BL['be_newsletter_ready']              = '�������� ������������ �������: ��������';
$BL['be_newsletter_readyfailed']        = '������� � �������� ������������ ������� ���� ';
$BL['be_subnav_msg_subscribers']        = '����������� ������������ �������';

// added: 20-04-2004
$BL['be_ctype_sitemap']				    = 'sitemap';
$BL['be_cnt_sitemap_catimage']          = 'level icon';
$BL['be_cnt_sitemap_articleimage']      = 'article icon';
$BL['be_cnt_sitemap_display']           = 'display';
$BL['be_cnt_sitemap_structuronly']      = 'structure levels only';
$BL['be_cnt_sitemap_structurarticle']   = 'structure levels + articles';
$BL['be_cnt_sitemap_catclass']          = 'level class';
$BL['be_cnt_sitemap_articleclass']      = 'article class';
$BL['be_cnt_sitemap_count']             = 'counter';
$BL['be_cnt_sitemap_classcount']        = 'add to class name';
$BL['be_cnt_sitemap_noclasscount']      = 'don\'t add to class name';

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

// added: 10-05-2004
$BL['be_ctype_pages']                   = 'ext. content';
$BL['be_cnt_pages_select']              = 'select file';
$BL['be_cnt_pages_fromfile']            = 'file from structure';
$BL['be_cnt_pages_manually']            = 'custom path/file or URL';
$BL['be_cnt_pages_cust']                = 'file/URL';
$BL['be_cnt_pages_from']                = 'source';

// added: 24-05-2004
$BL['be_ctype_reference']               = 'rollover images';
$BL['be_cnt_reference_basis']           = '������������';
$BL['be_cnt_reference_horizontal']      = '���������';
$BL['be_cnt_reference_vertical']        = '������';
$BL['be_cnt_reference_aligntext']       = 'small reference images';
$BL['be_cnt_reference_largetext']       = 'large reference image';
$BL['be_cnt_reference_zoom']            = '�������';
$BL['be_cnt_reference_middle']          = '����';
$BL['be_cnt_reference_border']          = '����';
$BL['be_cnt_reference_block']           = 'block w x h';

// added: 31-05-2004
$BL['be_article_rendering']             = 'rendring';
$BL['be_article_nosummary']             = 'don\'t display summary in full article';
$BL['be_article_forlist']               = 'article listing';
$BL['be_article_forfull']               = 'display full article';

// added: 08-07-2004
$BL["setup_dir_exists"]                 = '<strong>�������!</strong> � &quot;SETUP&quot; ��������� ������� �����! ��������� ���� �� ������ - ������ ���������� ���������.';

// added: 12-08-2004
$BL['be_cnt_guestbook_banned']          = '������������� ������';
$BL['be_cnt_guestbook_flooding']        = 'flooding';
$BL['be_cnt_guestbook_setcookie']       = 'set cookie';
$BL['be_cnt_guestbook_allowed']         = '����������� ���� ���� ���';
$BL['be_cnt_guestbook_seconds']         = '������������';
$BL['be_alias_ID']                      = '������� ����������';
$BL['be_ftrash_delall']                 = "����� �������� ��� ������ �� ���������� \n��� �� ������ ���� ���� �����������?";
$BL['be_ftrash_delallfiles']            = '�������� ���� ��� ������� ���� ���� �����������';

// added: 16-08-2004
$BL['be_subnav_msg_importsubscribers']  = 'CSV subscribers import';
$BL['be_newsletter_importtitle']        = '�������� ����������� ������������ �������';
$BL['be_newsletter_entriesfound']       = '��������&nbsp;��������';
$BL['be_newsletter_foundinfile']        = 'in file';
$BL['be_newsletter_addresses']          = '�����������';
$BL['be_newsletter_csverror']           = 'Imported CSV file seems to be incorrect! Check delimeter!';
$BL['be_newsletter_importall']          = 'import all entries';
$BL['be_newsletter_addressesadded']     = '����������� �����������.';
$BL['be_newsletter_newimport']          = '��� ��������';
$BL['be_newsletter_importerror']        = '�������� ������� �� CSV ������ ��� - ��� ������ �� ��������� ����� ���������!';
$BL['be_newsletter_shouldbe1']          = '�� CSV ������ ��� ������ �� ����� ������������ ����';
$BL['be_newsletter_shouldbe2']          = '���� �������� �� ��������� ��� �������������� delimeter';
$BL['be_newsletter_sample']             = '������';
$BL['be_newsletter_selectCSV']          = '������ ������� CSV';
$BL['be_newsletter_delimeter']          = 'delimeter';
$BL['be_newsletter_importCSV']          = '�������� ������� CSV';

// added: 24-08-2004
$BL['be_admin_struct_orderarticle']     = 'ordering of assigned articles';
$BL['be_admin_struct_orderdate']        = '���������� �����������';
$BL['be_admin_struct_orderchangedate']  = '������ �����������';
$BL['be_admin_struct_orderstartdate']   = '���������� �������';
$BL['be_admin_struct_orderdesc']        = '��������';
$BL['be_admin_struct_orderasc']         = '�������';
$BL['be_admin_struct_ordermanual']      = '����������� (������ ����/����)';
$BL['be_cnt_sitemap_startid']           = '������ ��';

// added: 20-10-2004
$BL['be_ctype_map']                     = 'map';
$BL['be_save_btn']                      = '����������';
$BL['be_cmap_location_error_notitle']   = '����������� ���� ����� ��� ���� ��� ���������.';
$BL['be_cnt_map_add']                   = '�������� ����������';
$BL['be_cnt_map_edit']                  = '����������� ����������';
$BL['be_cnt_map_title']                 = '������ ����������';
$BL['be_cnt_map_info']                  = '�������/�����������';
$BL['be_cnt_map_list']                  = '����� ����������';
$BL['be_btn_delete']                    = '����� �������� ��� ������ �� \n���������� ���� ��� ���������?';

// added: 05-11-2004
$BL['be_ctype_phpvar']                  = 'PHP ����������';
$BL['be_cnt_vars']                      = '����������';

// added: 19-11-2004 -- copy - Fernando Batista http://fernandobatista.net
$BL['be_func_struct_copy']              = '��������� ������';
$BL['be_func_struct_nocopy']            = '�������������� ���������� ������';
$BL['be_func_struct_copy_level']        = 'copy structure level';
$BL['be_func_struct_no_copy']           = "It's not possible to copy the root level!";

// added: 27-11-2004
$BL['be_date_minute']                   = '�����';
$BL['be_date_minutes']                  = '�����';
$BL['be_date_hour']                     = '���';
$BL['be_date_hours']                    = '����';
$BL['be_date_day']                      = '����';
$BL['be_date_days']                     = '�����';
$BL['be_date_week']                     = '��������';
$BL['be_date_weeks']                    = '���������';
$BL['be_date_month']                    = '�����';
$BL['be_date_months']                   = '�����';
$BL['be_off']                           = '��������';
$BL['be_on']                            = '�������';
$BL['be_cache']                         = 'cache';
$BL['be_cache_timeout']                 = 'timeout';

// added: 13-12-2004
$BL['be_subnav_admin_groups']			= 'users &amp; groups';

// added: 20-12-2004
$BL['be_ctype_forum']					= 'forum';
$BL['be_subnav_msg_forum']				= 'forums list';
$BL['be_forum_title']					= 'forum title';
$BL['be_forum_permission']				= 'permissions';
$BL['be_forum_add']						= 'add forum';
$BL['be_forum_titleedit']				= 'edit forum';

// added: 15-01-2005
$BL['be_admin_page_customblocks']       = 'custom';
$BL['be_show_content']                  = 'display';
$BL['be_main_content']                  = '����� �����';
$BL['be_admin_template_jswarning']      = '�������������!!! \nCustom blocks may change! \n\nIf you cancel \nreset your pagelayout setting! \n\nChange template?\n\n';

$BL['be_ctype_rssfeed']					= 'RSS feed';
$BL['be_cnt_rssfeed_url']				= 'RSS url';
$BL['be_cnt_rssfeed_item']				= 'items';
$BL['be_cnt_rssfeed_max']				= 'max.';
$BL['be_cnt_rssfeed_cut']				= 'hide 1st item';

$BL['be_ctype_simpleform']				= 'email contact form';

$BL['be_cnt_onsuccess']				    = 'on success';
$BL['be_cnt_onerror']				    = 'on error';
$BL['be_cnt_onsuccess_redirect']	    = 'redirect on success';
$BL['be_cnt_onerror_redirect']	        = 'redirect on error';

$BL['be_cnt_form_class']				= 'form class';
$BL['be_cnt_label_wrap']				= 'label wrap';
$BL['be_cnt_error_class']				= 'error class';
$BL['be_cnt_req_mark']				    = 'required mark';
$BL['be_cnt_mark_as_req']				= 'mark as required';
$BL['be_cnt_mark_as_del']				= 'mark item for deletion';


$BL['be_cnt_type']				        = '�����';
$BL['be_cnt_label']				        = '�������';
$BL['be_cnt_needed']					= '�����������';
$BL['be_cnt_delete']					= '��������';
$BL['be_cnt_value']					= '����';
$BL['be_cnt_error_text']				= '������ �������';
$BL['be_cnt_css_style']					= 'CSS ����';
$BL['be_cnt_send_copy_to']				= 'CC ��';

$BL['be_cnt_field']						= array("text"=>'text (single-line)', "email"=>'email', "textarea"=>'text (multi-line)', 
												"hidden"=>'hidden', "password"=>'password', "select"=>'select menu', 
												"list"=>'list menu', "checkbox"=>'checkbox', "radio"=>'radio button', 
												"upload"=>'file', "submit"=>'send button', "reset"=>'reset button', 
												"break"=>'break', "breaktext"=>'break text', "special"=>'text (spezial)');

$BL['be_cnt_access']					= '��������';
$BL['be_cnt_activated']					= '��������������';
$BL['be_cnt_available']					= '���������';
$BL['be_cnt_guests']					= '����������';
$BL['be_cnt_admin']						= '�����������';
$BL['be_cnt_write']						= '�����';
$BL['be_cnt_read']						= '�������';

$BL['be_cnt_no_wysiwyg_editor']			= '�������������� WYSIWYG editor';
$BL['be_cnt_cache_update']				= '���������� cache';
$BL['be_cnt_cache_delete']				= '�������� cache';
$BL['be_cnt_cache_delete_msg']			= '����� �������� ��� ������ �� ���������� �� cache?  \n���� ������ �� ���������� ��� ��� ������.  \n';

$BL['be_admin_usr_issection']			= 'login section';
$BL['be_admin_usr_ifsection0']			= 'frontend';
$BL['be_admin_usr_ifsection1']			= 'backend';
$BL['be_admin_usr_ifsection2']			= 'frontend and backend';

// added: 31-03-2005 -- Copy/Paste Article Content - Fernando Batista http://fernandobatista.net
$BL['be_func_content_edit']              = 'edit this article content part';
$BL['be_func_content_paste0']            = 'paste in article';
$BL['be_func_content_paste']             = 'paste later article content part';
$BL['be_func_content_cut']               = 'cut this article content part';
$BL['be_func_content_no_cut']            = "It's not possible to cut the article content part!";
$BL['be_func_content_copy']              = 'copy this article content part part';
$BL['be_func_content_no_copy']           = "It's not possible to copy the article content part!";
$BL['be_func_content_paste_cancel']      = 'cancel article content part change';

$BL['be_cnt_move_deleted'] = '�������� ������������ �������';
$BL['be_cnt_move_deleted_msg'] = '����� �������� ��� ������ �� ������������ ��� �� ������  \n������������ �� ����������� ���� ������ ������ ���������; \n';

$BL['be_admin_struct_permit'] = 'authorized to access (let empty for everybody)';
$BL['be_admin_struct_adduser_all']   = 'take over all users';
$BL['be_admin_struct_adduser_this']  = 'take over selected user';
$BL['be_admin_struct_remove_all']    = '�������� ���� ��� �������';
$BL['be_admin_struct_remove_this']   = '�������� ����������� ������';


$BL['be_ctype_alias'] = 'contentpart alias';
$BL['be_cnt_setting'] = 'take over';
$BL['be_cnt_spaces'] = 'spaces of contentpart alias';
$BL['be_cnt_toplink'] = 'top link setting of contentpart alias';
$BL['be_cnt_block'] = 'display (block) setting of contentpart alias';
$BL['be_cnt_title'] = 'titles of contentpart alias';

?>