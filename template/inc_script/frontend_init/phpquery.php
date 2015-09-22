<?php
/**
 * prepare bootstrap form
 * @param string $text html from CP
 * @param array $data CP Data
 */

include_once(TEMPLATE_PATH."inc_script/vendor/phpQuery-onefile.php");

function CP_PHPQUERY($text,  $data) {


	// render CP Title in Teaser, instead of category
	if($data['acontent_type'] == 8){

		$text = render_cnt_template($text, 'ACONTENT_TITLE',  $data['acontent_title']);
		$text = render_cnt_template($text, 'ACONTENT_SUBTITLE',  $data['acontent_subtitle']);
		return $text;

		//dd($text,  $data);
	}


	if(! in_array($data['acontent_type'], array(23,0))){
		return $text;
	}

	//include_once(TEMPLATE_PATH."inc_script/vendor/phpQuery-onefile.php");

	$html = phpQuery::newDocument($text);

	// Plain text
	if($data['acontent_type'] == 0){
		$html['table']->addClass('table');
	}

	// form
	if($data['acontent_type'] == 23){ // check if this is a form CP

		$h3 = $html['h3']->text();

		pq('h3')->addClass('smalltitle')->html('<span>'.$h3.'</span>');

		$search[]	= '/\[label:(.*?)\](.*?)\[\/label\]/s';
		$replace[]	= '<label class="form-label" for="$1">$2</label>';

		$text = preg_replace($search, $replace, $text);
		$cpdata = unserialize($data['acontent_form']);

		$html['.form-field']->addClass('form-group');

		// horizontal forms wenn <div form>
		if($cpdata['labelpos'] == 3)
		{
			// create legend
			$html['.form-horizontal .form-field>label']->addClass('col-sm-3 control-label');
			foreach($html['.form-type-breaktext'] as $breaktext){
				$bt = '<legend>'.pq($breaktext)->text().'</legend>';
				pq($breaktext)->replaceWith($bt);
			}
			// wrap input fields
			$wrappers = $html['.form-horizontal .form-field input:submit, .form-horizontal .form-field input[type=text], .form-horizontal .form-field input[type=email], .form-horizontal .form-field textarea, .form-horizontal .form-field select'];
			foreach($wrappers as $input){
				pq($input)->wrap('<div class="col-sm-9"></div>');
			}
			$html['.form-type-submit']->prepend('<label class="col-sm-3"></label>');
		}



		$html['.form-field input[type=text], .form-field input[type=email], .form-field textarea,.form-field select']->addClass('form-control');
		$html['input:submit']->addClass('btn btn-default btn-lg');

		$html['.form-type-radio-inline label']->addClass('radio-inline');

		foreach($html['.form-type-checkbox span label, .form-checkbox label'] as $input){
			pq($input)->wrap('<div class="checkbox"></div>');
		}
		foreach($html['.form-type-radio label:not(".form-label")'] as $input){
			pq($input)->wrap('<div class="radio"></div>');
		}

		$tmpl = PHPWCMS_TEMPLATE.'inc_default/form.html';
		if(file_exists($tmpl)) {
			// load custom template
			$tmpl = file_get_contents($tmpl);
			$html = str_replace('{FORM}',$html, $tmpl);
		}

	}

	return $html;
}

register_cp_trigger('CP_PHPQUERY');