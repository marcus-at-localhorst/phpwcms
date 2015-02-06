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


// ----------------------------------------------------------------
// obligate check for phpwcms constants
if (!defined('PHPWCMS_ROOT')) {
   die("You Cannot Access This Script Directly, Have a Nice Day.");
}
// ----------------------------------------------------------------


if((isset($_GET["s"]) && intval($_GET["s"]) == 1) || isset($_GET['struct'])) { //Show single article information

	//Artikel editieren
	$article = array();
	$article["article_id"] = empty($_GET["id"]) ? 0 : intval($_GET["id"]);
	$article["article_timeout"] = '';
	$article['article_nosearch'] = '';
	$article['article_nositemap'] = 1;
	$article['article_morelink'] = 1;
	$article["article_cntpart"] = array();

	// check if in POST mode (form submitted) and NOT add new article
	if((!isset($_POST["article_update"]) || !intval($_POST["article_update"])) && !isset($_GET['struct'])) {
		$read_done = false;
		$sql  =	"SELECT DISTINCT *, date_format(article_tstamp, '%Y-%m-%d %H:%i:%s') AS article_date ";
		$sql .= "FROM ".DB_PREPEND."phpwcms_article LEFT JOIN ".DB_PREPEND."phpwcms_articlecat ON ";
		$sql .=	DB_PREPEND."phpwcms_article.article_cid=".DB_PREPEND."phpwcms_articlecat.acat_id WHERE ";
		$sql .= DB_PREPEND."phpwcms_article.article_id='".$article["article_id"]."' ";
		$sql .= $_SESSION["wcs_user_admin"] ? '' : 'AND '.DB_PREPEND.'phpwcms_article.article_uid='._dbEscape($_SESSION["wcs_user_id"]).' ';
		$sql .= "LIMIT 1";
		if($result = mysql_query($sql, $db) or die("error getting info about article")) {
			if($row = mysql_fetch_assoc($result)) {
				$article["article_id"]			= $row["article_id"];
				$article["article_title"]		= $row["article_title"];
				$article["article_alias"]		= $row["article_alias"];
				$article["article_notitle"]		= $row["article_notitle"];
				$article["article_hidesummary"]	= $row["article_hidesummary"];
				$article["article_subtitle"]	= $row["article_subtitle"];
				$article["article_summary"]		= $row["article_summary"];
				$article["article_aktiv"]		= $row["article_aktiv"];
				$article["article_date"]		= $row["article_date"];
				$article["article_begin"]		= $row["article_begin"];
				$article["article_end"]			= $row["article_end"];
				$article["article_redirect"]	= $row["article_redirect"];
				$article["article_username"]	= $row["article_username"];
				$article["article_uid"]			= $row["article_uid"];
				if($row["acat_id"]) {
					$article["article_cat"]			= $row["acat_name"].' [ID:'.$row["acat_id"].']';
					$article["article_catid"]		= $row["acat_id"];
					$article["template_id"]			= $row['acat_template'];
					$article["article_cntpart"]		= isset($row['acat_cntpart']) ? convertStringToArray($row['acat_cntpart']) : false;
					$article['article_cpdefault']	= empty($row['acat_cpdefault']) ? 0 : intval($row['acat_cpdefault']);
				} else {
					$article["article_cat"]			= $indexpage['acat_name'].' [ID:0]';
					$article["article_catid"]		= 0;
					$article["template_id"]			= $indexpage['acat_template'];
					$article["article_cntpart"]		= isset($indexpage['acat_cntpart']) ? convertStringToArray($indexpage['acat_cntpart']) : false;
					$article['article_cpdefault']	= empty($indexpage['acat_cpdefault']) ? 0 : intval($indexpage['acat_cpdefault']);
				}
				$article["article_keyword"]		= $row["article_keyword"];
				$article["image"]				= unserialize($row["article_image"]);
				$article["article_timeout"]		= $row["article_cache"];
				$article['article_nosearch']	= $row['article_nosearch'];
				$article['article_nositemap']	= $row['article_nositemap'];
				$set_begin = ($article["article_begin"]) ? 1 : 0;
				$set_end = ($article["article_end"]) ? 1 : 0;

				$article['article_aliasid']		= $row['article_aliasid'];
				$article['article_headerdata']	= $row['article_headerdata'];
				$article['article_morelink']	= $row['article_morelink'];
				$article['article_noteaser']	= $row['article_noteaser'];
				$article['article_pagetitle']	= $row['article_pagetitle'];
				$article['article_paginate']	= $row['article_paginate'];
				$article['article_sort']		= $row['article_sort'];
				$article['article_priorize']	= $row['article_priorize'];
				$article['article_created']		= $row['article_created'];
				$article['article_norss']		= $row['article_norss'];
				$article['article_menutitle']	= $row['article_menutitle'];
				$article['article_description']	= $row['article_description'];
				$article['article_lang']		= $row['article_lang'];
				$article['article_lang_type']	= $row['article_lang_type'];
				$article['article_lang_id']		= $row['article_lang_id'];
				$article['article_opengraph']	= $row['article_opengraph'];

				$article['article_archive_status']	= $row['article_archive_status'];

				$article["acat_overwrite"] = $row['acat_overwrite'];

				$read_done = true;
			}
			mysql_free_result($result);
		}
		if(!$read_done) {
			headerRedirect(PHPWCMS_URL."phpwcms.php?do=articles&p=2");
		}


	// add new article inside structure
	} elseif( isset($_GET['struct']) ) {

		// define defaults
		$article["article_id"]					= 0;
		$article["article_catid"]				= intval($_GET['struct']);
		$article["article_title"]				= '';
		$article["article_alias"]				= '';
		$article["article_subtitle"]			= '';
		$article["article_menutitle"]			= '';
		$article["article_description"]			= '';
		$article["article_summary"]				= '';
		$article["article_notitle"]				= 0;
		$article["article_hidesummary"]			= 0;
		$article["article_aktiv"]				= $phpwcms['set_article_active'];
		$article["article_begin"]				= '';
		$article["article_end"]					= '';
		$article["article_keyword"]				= '';
		$article["article_redirect"]			= '';
		$article['article_aliasid']				= '';
		$article['article_headerdata']			= 0;
		$article['article_morelink']			= 1;
		$article['article_noteaser']			= 0;
		$article["article_pagetitle"]			= '';
		$article['article_paginate']			= 0;
		$article['article_sort']				= 0;
		$article['article_priorize']			= 0;
		$article['article_norss']				= 1;
		$article['article_archive_status']		= 1;
		$article["article_timeout"]				= '';
		$article['article_nosearch']			= '';
		$article['article_nositemap']			= 1;
		$article["article_uid"]					= $_SESSION["wcs_user_id"];
		$article["article_username"]			= $_SESSION["wcs_user_name"];
		$article['article_lang']				= '';
		$article['article_lang_type']			= '';
		$article['article_lang_id']				= 0;
		$article['article_opengraph']			= empty($phpwcms['set_sociallink']['article']) ? 0 : 1;

		$article['image']						= array();
		$article['image']['tmpllist']			= 'default';
		$article['image']['tmplfull']			= 'default';
		$article['image']['name']				= '';
		$article['image']['id']					= '';
		$article['image']['caption']			= '';
		$article["image"]["hash"]				= '';
		$article['image']['list_usesummary']	= 0;
		$article['image']['list_name']			= '';
		$article['image']['list_id']			= 0;
		$article['image']['list_width']			= '';
		$article['image']['list_height']		= '';
		$article['image']['list_zoom']			= 0;
		$article['image']['list_caption']		= '';
		$article["image"]["list_hash"]			= '';
		$article['image']['zoom']				= 0;

		$set_begin								= 0;
		$set_end								= 0;

	} else {

		// Take article Post data
		$article_err = array();

		$article["article_catid"]			= intval($_POST["article_cid"]);
		$article["article_title"]			= clean_slweg($_POST["article_title"], 255);
		$article["article_alias"]			= proof_alias($article["article_id"], $_POST["article_alias"], 'ARTICLE');
		$article["article_subtitle"]		= clean_slweg($_POST["article_subtitle"], 255);
		$article["article_menutitle"]		= clean_slweg($_POST["article_menutitle"], 255);
		$article["article_description"]		= clean_slweg($_POST["article_description"], 255);
		$article["article_summary"]			= str_replace('<p></p>', '<p>&nbsp;</p>', slweg($_POST["article_summary"]));
		$article["article_notitle"]			= isset($_POST["article_notitle"]) ? 1 : 0;
		$article["article_hidesummary"]		= isset($_POST["article_hidesummary"]) ? 1 : 0;
		$article["article_aktiv"]			= isset($_POST["article_aktiv"]) ? 1 : 0;
		$article["article_begin"]			= clean_slweg($_POST["article_begin"]);
		$article["article_end"]				= clean_slweg($_POST["article_end"]);
		$article["article_keyword"]			= implode(', ', convertStringToArray( clean_slweg($_POST["article_keyword"]) , ',') );
		$article["article_lang"]			= isset($_POST["article_lang"]) ? clean_slweg($_POST["article_lang"]) : '';
		$article['article_lang_type']		= $article["article_lang"] == '' || empty($_POST["article_lang_type"]) ? '' : in_array($_POST["article_lang_type"], array('category', 'article')) ? $_POST["article_lang_type"] : '';
		$article['article_lang_id']			= $article['article_lang_type'] == '' || empty($_POST["article_lang_id"]) ? 0 : intval($_POST["article_lang_id"]);
		$article["article_redirect"]		= clean_slweg($_POST["article_redirect"]);
		$set_begin							= isset($_POST["set_begin"]) ? 1 : 0;
		$set_end							= isset($_POST["set_end"]) ? 1 : 0;
		$article['article_nosearch']		= isset($_POST['article_nosearch']) ? 1 : '';
		$article['article_nositemap']		= isset($_POST['article_nositemap']) ? 1 : 0;
		$article['article_aliasid']			= intval($_POST["article_aliasid"]);
		$article['article_headerdata']		= isset($_POST["article_headerdata"]) ? 1 : 0;
		$article['article_morelink']		= isset($_POST["article_morelink"]) ? 1 : 0;
		$article['article_noteaser']		= isset($_POST["article_noteaser"]) ? 1 : 0;
		$article["article_pagetitle"]		= clean_slweg($_POST["article_pagetitle"]);
		$article['article_paginate']		= isset($_POST["article_paginate"]) ? 1 : 0;
		$article['article_sort']			= empty($_POST["article_sort"]) ? 0 : intval($_POST["article_sort"]);
		$article['article_priorize']		= empty($_POST["article_priorize"]) ? 0 : intval($_POST["article_priorize"]);
		$article['article_norss']			= empty($_POST["article_norss"]) ? 0 : 1;
		$article['article_archive_status']	= empty($_POST["article_archive"]) ? 0 : 1;
		$article["article_timeout"]			= clean_slweg($_POST["article_timeout"]);
		$article['article_opengraph']		= empty($_POST["article_opengraph"]) ? 0 : 1;
		if(isset($_POST['article_cacheoff']) && intval($_POST['article_cacheoff'])) {
			$article["article_timeout"] = '0'; //check if cache = Off
		}
		if($_SESSION["wcs_user_admin"]) {
			$article["article_uid"] = isset($_POST["article_uid"]) ? intval($_POST["article_uid"]) : $_SESSION["wcs_user_id"];
		}
		if(empty($article["article_uid"])) {
			$article["article_uid"] = $_SESSION["wcs_user_id"];
		}
		$article["article_username"]		= clean_slweg($_POST["article_username"],100);
		if(!$article["article_username"]) {
			$article["article_username"] = $_SESSION["wcs_user_name"];
		}
		if($article["article_title"] === '') {
			$article_err[] = $BL['be_article_err1'];
		}
		if($article["article_begin"]) { //Check date
			$article["article_begin"] = phpwcms_strtotime($article["article_begin"]);
			if($article["article_begin"] == false) {
				$article["article_begin"] = date("Y-m-d H:i:s");
				$set_begin = 1;
				$article_err[] = $BL['be_article_err2'];
			} else {
				$article["article_begin"] = date("Y-m-d H:i:s", $article["article_begin"]);
				$set_begin = 1;
			}
		} else {
			$article["article_begin"] = date("Y-m-d H:i:s");
			$set_begin = 0;
		}
		if($article["article_end"]) { //Check date
			$article["article_end"] = phpwcms_strtotime($article["article_end"]);
			if($article["article_end"] == false) {
				$article["article_end"] = date("Y-m-d H:i:s", time() + (3600*24*365*10) );
				$set_end = 1;
				$article_err[] = $BL['be_article_err4'];
			} else {
				$article["article_end"] = date("Y-m-d H:i:s", $article["article_end"]);
				$set_end = 1;
			}
		} else {
			$article["article_end"] = date("Y-m-d H:i:s", time() + (3600*24*365*10) );
			$set_end = 0;
		}		//Ende Check Date

		$article['image'] = array();
		$article['image']['tmpllist']	= slweg($_POST["article_tmpllist"]);
		$article['image']['tmplfull']	= slweg($_POST["article_tmplfull"]);

		// get summary image info for article detail
		$article['image']['name']		= clean_slweg($_POST["cimage_name"]);
        $article['image']['id']			= intval($_POST["cimage_id"]);
        $article['image']['width']		= (intval($_POST["cimage_width"]))  ? intval($_POST["cimage_width"])  : '';
        $article['image']['height']		= (intval($_POST["cimage_height"])) ? intval($_POST["cimage_height"]) : '';
		$article['image']['caption']	= clean_slweg($_POST["cimage_caption"]);
        $article['image']['zoom']		= empty($_POST["cimage_zoom"]) ? 0 : 1;
		$article['image']['lightbox']	= empty($_POST["cimage_lightbox"]) ? 0 : 1;

		if ((!RESPONSIVE_MODE && $article['image']['width'] > $phpwcms["content_width"]) || $article['image']['width'] == '') {
			$article['image']['width'] = $phpwcms["content_width"];
		}

        if ($article['image']['id']) {
            // check for image information and get alle infos from file
            $img_sql  = "SELECT * FROM " . DB_PREPEND . "phpwcms_file WHERE f_id=";
			$img_sql .= $article['image']['id']." LIMIT 1";

            if ($img_result = mysql_query($img_sql, $db) or die("error while getting content image info")) {
                if ($img_row = mysql_fetch_assoc($img_result)) {

					$article['image']['id']		= $img_row['f_id'];
					$article['image']['name']	= $img_row['f_name'];
					$article['image']['hash']	= $img_row['f_hash'];
					$article['image']['ext']	= $img_row['f_ext'];

                }
				mysql_free_result($img_result);
            }
        }

		// get list image for article
		$article['image']['list_usesummary']	= isset($_POST["cimage_usesummary"]) ? 1 : 0;
		$article['image']['list_name']			= clean_slweg($_POST["cimage_list_name"]);
        $article['image']['list_id']			= intval($_POST["cimage_list_id"]);
        $article['image']['list_width']			= (intval($_POST["cimage_list_width"]))  ? intval($_POST["cimage_list_width"])  : '';
        $article['image']['list_height']		= (intval($_POST["cimage_list_height"])) ? intval($_POST["cimage_list_height"]) : '';
		$article['image']['list_caption']		= clean_slweg($_POST["cimage_list_caption"]);
        $article['image']['list_zoom']			= empty($_POST["cimage_list_zoom"]) ? 0 : 1;
		$article['image']['list_lightbox']		= empty($_POST["cimage_list_lightbox"]) ? 0 : 1;

		$article['image']['list_maxwords']		= empty($_POST["article_listmaxwords"]) ? 0 : intval($_POST["article_listmaxwords"]);

		if((!RESPONSIVE_MODE && $article['image']['list_width'] > $phpwcms["content_width"]) || $article['image']['list_width'] == '') {
			$article['image']['list_width'] = $phpwcms["content_width"];
		}

        if($article['image']['list_id']) {
            // check for image information and get alle infos from file
            $img_sql  = "SELECT * FROM " . DB_PREPEND . "phpwcms_file WHERE f_id=";
			$img_sql .= $article['image']['list_id']." LIMIT 1";

            if ($img_result = mysql_query($img_sql, $db) or die("error while getting content image info")) {
                if ($img_row = mysql_fetch_assoc($img_result)) {

					$article['image']['list_id']	= $img_row['f_id'];
					$article['image']['list_name']	= $img_row['f_name'];
					$article['image']['list_hash']	= $img_row['f_hash'];
					$article['image']['list_ext']	= $img_row['f_ext'];

                }
				mysql_free_result($img_result);
            }
        }


		if( count($article_err) == 0 ) {

			if($article["article_id"] == 0) {

				// Insert (create) new article

				$data = array(
					'article_created'		=> time(),
					"article_cid"			=> $article["article_catid"],
					"article_title"			=> $article["article_title"],
					"article_alias"			=> $article["article_alias"],
					"article_keyword"		=> $article["article_keyword"],
					"article_aktiv"			=> $article["article_aktiv"],
					"article_begin"			=> $article["article_begin"],
					"article_end"			=> $article["article_end"],
					"article_subtitle"		=> $article["article_subtitle"],
					"article_summary"		=> $article["article_summary"],
					"article_redirect"		=> $article["article_redirect"],
					"article_sort"			=> $article["article_sort"],
					"article_username"		=> $article["article_username"],
					"article_notitle"		=> $article["article_notitle"],
					"article_hidesummary"	=> $article["article_hidesummary"],
					"article_image"			=> serialize($article['image']),
					"article_cache"			=> $article["article_timeout"],
					"article_nosearch"		=> $article['article_nosearch'],
					"article_nositemap"		=> $article['article_nositemap'],
					"article_aliasid"		=> $article['article_aliasid'],
					"article_headerdata"	=> $article['article_headerdata'],
					"article_morelink"		=> $article['article_morelink'],
					"article_noteaser"		=> $article['article_noteaser'],
					"article_pagetitle"		=> $article['article_pagetitle'],
					"article_paginate"		=> $article['article_paginate'],
					"article_priorize"		=> $article['article_priorize'],
					"article_norss"			=> $article['article_norss'],
					"article_uid"			=> $article["article_uid"],
					"article_archive_status"=> $article["article_archive_status"],
					"article_menutitle"		=> $article["article_menutitle"],
					'article_description'	=> $article["article_description"],
					'article_serialized'	=> '',
					'article_lang'			=> $article["article_lang"],
					'article_lang_type'		=> $article["article_lang_type"],
					'article_lang_id'		=> $article["article_lang_id"],
					'article_opengraph'		=> $article["article_opengraph"]
				);

				$result = _dbInsert('phpwcms_article', $data);

				if(isset($result['INSERT_ID'])) {
					$article["article_id"] = $result['INSERT_ID'];
				} else {
					$result = false;
				}


			} else {

				// Update article summary data
				$sql =	"UPDATE ".DB_PREPEND."phpwcms_article SET ".
						"article_cid=".$article["article_catid"].",".
						"article_title="._dbEscape($article["article_title"]).", ".
						"article_alias="._dbEscape($article["article_alias"]).", ".
						"article_keyword="._dbEscape($article["article_keyword"]).", ".
						"article_aktiv=".$article["article_aktiv"].", ".
						"article_begin="._dbEscape($article["article_begin"]).", ".
						"article_end="._dbEscape($article["article_end"]).", ".
						"article_subtitle="._dbEscape($article["article_subtitle"]).", ".
						"article_summary="._dbEscape($article["article_summary"]).", ".
						"article_redirect="._dbEscape($article["article_redirect"]).", ".
						"article_sort="._dbEscape($article["article_sort"]).", ".
						"article_username="._dbEscape($article["article_username"]).", ".
						"article_notitle=".$article["article_notitle"].", ".
						"article_hidesummary=".$article["article_hidesummary"].", ".
						"article_image="._dbEscape(serialize($article['image'])).", ".
						"article_cache="._dbEscape($article["article_timeout"]).", ".
						"article_nosearch="._dbEscape($article['article_nosearch']).", ".
						"article_nositemap=".$article['article_nositemap'].", ".
						"article_aliasid=".$article['article_aliasid'].", ".
						"article_headerdata=".$article['article_headerdata'].", ".
						"article_morelink=".$article['article_morelink'].", ".
						"article_noteaser=".$article['article_noteaser'].", ".
						"article_pagetitle="._dbEscape($article['article_pagetitle']).", ".
						"article_paginate=".$article['article_paginate'].", ".
						"article_priorize=".$article['article_priorize'].", ".
						"article_norss=".$article['article_norss'].", ".
						"article_archive_status=".$article['article_archive_status'].", ".
						"article_menutitle="._dbEscape($article["article_menutitle"]).",".
						"article_description="._dbEscape($article["article_description"]).", ".
						"article_lang="._dbEscape($article["article_lang"]).", ".
						"article_lang_type="._dbEscape($article["article_lang_type"]).", ".
						"article_lang_id="._dbEscape($article["article_lang_id"]).", ".
						"article_opengraph=".$article["article_opengraph"].' ';

						if($_SESSION["wcs_user_admin"]) {
							$sql .= ", article_uid=".$article["article_uid"]." ";
						}

				$sql .=	"WHERE article_id=".$article["article_id"];

				$result = _dbQuery($sql, 'UPDATE');
			}

			if($result) {
				update_cache(); // set cache timeout = 0

				_dbSaveCategories($article["article_keyword"], 'article', $article["article_id"], ',');

				$update = isset($_POST['updatesubmit']) ? '&aktion=1' : '';
				headerRedirect(PHPWCMS_URL.'phpwcms.php?do=articles&p=2&s=1'.$update.'&id='.$article["article_id"]);
			}

		} else {
			set_status_message( $BL['be_admin_usr_err'] . ': ' . implode(', ', $article_err) , 'warning');
		}
	}

	// check if it is recommend to overwrite template defaults
	if(!isset($article["acat_overwrite"])) {

		if($article['article_catid']) {
			$article["acat_overwrite"] = _dbGet('phpwcms_articlecat', 'acat_overwrite', 'acat_trash != 9 AND acat_id = '.$article['article_catid'], '', '', 1);
			$article["acat_overwrite"] = empty($article["acat_overwrite"][0]['acat_overwrite']) ? '' : $article["acat_overwrite"][0]['acat_overwrite'];
		} elseif($article['article_catid'] === 0 && !empty($indexpage['acat_overwrite'])) {
			$article["acat_overwrite"] = $indexpage['acat_overwrite'];
		} else {
			$article["acat_overwrite"] = '';
		}
	}

	// include template defaults which should be overwritten by custom settings
	if($article["acat_overwrite"] && is_file(PHPWCMS_TEMPLATE.'inc_settings/template_default/'.$article["acat_overwrite"])) {
		@include(PHPWCMS_TEMPLATE.'inc_settings/template_default/'.$article["acat_overwrite"]);
	}

	// list mode
	if( (!isset($_GET["aktion"]) || !intval($_GET["aktion"])) && !isset($_GET['struct'])) {

		include_once PHPWCMS_ROOT."/include/inc_tmpl/articlecontent.list.tmpl.php";
		$phpwcms['be_parse_lang_process'] = true;

	// edit article summary
	} elseif( (isset($_GET["aktion"]) && intval($_GET["aktion"]) == 1) || isset($_GET['struct']) ) {

		include_once PHPWCMS_ROOT."/include/inc_tmpl/article.editsummary.tmpl.php";

	} elseif(intval($_GET["aktion"]) == 2) { //Neuen Artikelcontent erstellen

		if(isset($content["error"])) {
			unset($content["error"]); //reset Error
		}
		$content["media_control"] = 1; //Vordefinierte Werte

		if(isset($_GET["acid"]) && intval($_GET["acid"])) {
			$content["id"]  = intval($_GET["acid"]);
			$content["aid"]	= intval($_GET["id"]);

			$sql =  "SELECT * FROM ".DB_PREPEND."phpwcms_articlecontent WHERE acontent_id=".$content["id"]." AND acontent_aid=".$content["aid"]." LIMIT 1";
			if($result = mysql_query($sql, $db) or die("error while reading article content data")) {
				if($row = mysql_fetch_array($result)) {
					$content["title"]	 		= $row["acontent_title"];
					$content["subtitle"] 		= $row["acontent_subtitle"];
					$content["visible"]	 		= $row["acontent_visible"];
					$content["before"]	 		= $row["acontent_before"];
					$content["after"]	 		= $row["acontent_after"];
					$content["top"]	 	 		= $row["acontent_top"];
					$content["type"]	 		= $row["acontent_type"];
					$content["sorting"]	 		= $row["acontent_sorting"];
					$content["block"]			= $row["acontent_block"];
					$content["anchor"]	 		= $row["acontent_anchor"];
					$content['module']			= $row["acontent_module"];
					$content['comment']			= $row["acontent_comment"];
					$content['paginate_title']	= $row["acontent_paginate_title"];
					$content["paginate_page"]	= $row["acontent_paginate_page"];
					$content["granted"]			= $row["acontent_granted"];
					$content["tab"]				= $row["acontent_tab"];
					$content['tid']				= $row['acontent_tid'];

					if($content["type"] != 30 && is_file(PHPWCMS_ROOT.'/include/inc_lib/content/cnt'.$content["type"].'.takeval.inc.php')) {

						include(PHPWCMS_ROOT.'/include/inc_lib/content/cnt'.$content["type"].'.takeval.inc.php');

					} elseif($content["type"] == 30 && is_file($phpwcms['modules'][$content['module']]['path'].'inc/cnt.read.php')) {

						$content['comment']	= $row["acontent_comment"];

						// load module data
						include($phpwcms['modules'][$content['module']]['path'].'inc/cnt.read.php');

					} else {

						include(PHPWCMS_ROOT.'/include/inc_lib/content/cnt0.takeval.inc.php');

					}
				}
				mysql_free_result($result);
			}

		} else {
			$content["id"] 	= 0;
			$content["aid"]	= intval($_GET["id"]);
			$content['tid']	= 0;

			if(isset($_POST["ctype"])) {

				$content["type"]	= explode(':', $_POST["ctype"]);
				$content["module"]	= empty($content["type"][1]) ? '' : trim($content["type"][1]);
				$content["type"]	= intval($content["type"][0]);

			} else {

				$content["type"]	= 0;
				$content["module"]	= '';

			}

			$content["sorting"] = 10;
			if(isset($_POST["csorting"])) {
				$content["sorting"]	+= intval($_POST["csorting"]);
			}
		}
		//list($content["category"], $content["article"], $content["template_id"]) = explode("#|#", $_SESSION["article_path"]);

		//if form posted
		if(isset($_POST["caktion"]) && intval($_POST["caktion"])) {

			include_once(PHPWCMS_ROOT."/include/inc_lib/article.readform.inc.php"); //get posted values from form

			if(!isset($content["error"])) { //if no error

				$SQL  = "acontent_aid				= '".$content["aid"]."', ";
				$SQL .= "acontent_uid				= "._dbEscape($_SESSION["wcs_user_id"]).", ";
				$SQL .= "acontent_title				= "._dbEscape($content["title"]).", ";
				$SQL .= "acontent_subtitle			= "._dbEscape($content["subtitle"]).", ";
				$SQL .= "acontent_type				= '".$content["type"]."', ";
				$SQL .= "acontent_sorting			= '".$content["sorting"]."', ";
				$SQL .= "acontent_visible			= '".$content["visible"]."', ";
				$SQL .= "acontent_before			= "._dbEscape($content["before"]).", ";
				$SQL .= "acontent_after				= "._dbEscape($content["after"]).", ";
				$SQL .= "acontent_top				= "._dbEscape($content["top"]).", ";
				$SQL .= "acontent_block				= "._dbEscape($content["block"]).", ";
				$SQL .= "acontent_anchor			= "._dbEscape($content["anchor"]).", ";
				$SQL .= "acontent_module			= "._dbEscape($content["module"]).", ";
				$SQL .= "acontent_comment			= "._dbEscape($content["comment"]).", ";
				$SQL .= "acontent_paginate_page		= "._dbEscape($content["paginate_page"]).", ";
				$SQL .= "acontent_paginate_title	= "._dbEscape($content["paginate_title"]).", ";
				$SQL .= "acontent_granted			= "._dbEscape($content["granted"]).", ";
				$SQL .= "acontent_tab				= "._dbEscape($content["tab"]).", ";
				$SQL .= "acontent_tid				= "._dbEscape($content["tid"]).", ";

				$WHERE = '';

				// load SQL addition for special content part
				if($content['type'] != 30 && file_exists(PHPWCMS_ROOT.'/include/inc_lib/content/cnt'.$content['type'].'.sql.inc.php')) {

					include(PHPWCMS_ROOT.'/include/inc_lib/content/cnt'.$content['type'].'.sql.inc.php');

				} elseif($content['type'] == 30 && file_exists($phpwcms['modules'][$content['module']]['path'].'inc/cnt.sql.php')) {

					include($phpwcms['modules'][$content['module']]['path'].'inc/cnt.sql.php');

				} else {

					include(PHPWCMS_ROOT.'/include/inc_lib/content/cnt0.sql.inc.php');

				}

				// clean up SQL and remove ending ","
				$SQL = trim($SQL);
				if(substr($SQL, -1, 1) == ',') $SQL = substr($SQL, 0, -1);

				if(!$content["id"]) { //if new content part should be created

					// use SET method for INSERT too
					$SQL  = "INSERT INTO ".DB_PREPEND."phpwcms_articlecontent SET acontent_created=NOW(), " . $SQL;

					//insert data into DB and get content part ID
					if(!$content["update_type"]) { //if content type wasn't changed
						if($result = mysql_query($SQL, $db) or die("error while creating new article content: ".mysql_error())) {
							$content["id"] = mysql_insert_id($db); //successful created
							change_articledate($content["aid"]); //update article date too
							update_cache(); // set cache timeout = 0
							if(!empty($_POST['SubmitClose'])) {
								headerRedirect(PHPWCMS_URL."phpwcms.php?do=articles&p=2&s=1&id=".$content["aid"]);
							}
						}
					} else {
						$content["type"] = $content["target_type"];
					}
				} else { //if content part should be updated

					$SQL  = "UPDATE ".DB_PREPEND."phpwcms_articlecontent SET " . $SQL;
					$SQL .= " WHERE acontent_id=".$content['id'];
					if(empty($ctype_change_aid) || $ctype_change_aid != 'DO_CHANGE') {
						$SQL .= " AND acontent_aid=".$content['aid'];
					}
					$SQL .= $WHERE;

					if($result = mysql_query($SQL, $db) or die("error while updating content: ".$SQL)) {

						if($content["update_type"]) { //If content part type was changed
							$sql  = "UPDATE ".DB_PREPEND."phpwcms_articlecontent SET";
							$sql .= " acontent_type=".$content["target_type"];
							$sql .= " WHERE acontent_id=".$content["id"];
							$sql .= " AND acontent_aid=".$content["aid"];
							mysql_query($sql, $db) or die("error while updating content type info");
						}
						change_articledate($content["aid"]); //update article date too
						update_cache(); // set cache timeout = 0
						if(empty($_POST['SubmitClose'])) {
							// cnt teaser has some special filter options
							if(isset($_POST['teaser_filter_category']) && is_intval($_POST['teaser_filter_category'])) {
								$_SESSION['teaser_filter_category'] = intval($_POST['teaser_filter_category']);
							}
							if(!empty($_POST['teaser_filter_category_by_tags'])) {
								$_SESSION['teaser_filter_category_by_tags'] = true;
							}
							headerRedirect(PHPWCMS_URL."phpwcms.php?do=articles&p=2&s=1&aktion=2&id=".$content["aid"]."&acid=".$content["id"]);
						} else {
							headerRedirect(PHPWCMS_URL."phpwcms.php?do=articles&p=2&s=1&id=".$content["aid"]);
						}
					}
				} //end update/insert
			} //end error check
		}

		//form to edit article content parts
		include(PHPWCMS_ROOT."/include/inc_tmpl/articlecontent.edit.tmpl.php");

	}
	//end edit article content part
}
?>