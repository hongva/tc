<?php
/*
Controller name: Options
Controller description: To get data ads
*/
class JSON_API_options_Controller {

    public function get_options() {
        global $json_api;
        $optionstring = $json_api->query->options;
	$optionarrayindexed = explode(',', $optionstring);

	foreach ($optionarrayindexed as $option) {
		$optionarrayassociative["$option"] = get_option($option);
	}

	if ($optionstring) {
	        return $optionarrayassociative;
	} else {
		$json_api->error("Include 'options' var in your request, options comma separated. See for a list of options: http://codex.wordpress.org/Option_Reference");
		return null;
	}

    }

}

?>