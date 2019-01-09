<?php session_start(); ?>
<?php
function message(){
	//good message
	if(isset($_SESSION["good_message"])){
		$output = "<div class='uk-alert-success' uk-alert><a class='uk-alert-close' uk-close></a><p>";
		$output .= htmlentities($_SESSION["good_message"]);
		$output .= "</p></div>";
		$_SESSION["good_message"] = null;
		return $output;
	}
	
	//bad message
	if(isset($_SESSION["bad_message"])){
		$output = "<div class='uk-alert-danger' uk-alert><a class='uk-alert-close' uk-close></a><p>";
		$output .= htmlentities($_SESSION["bad_message"]);
		$output .= "</p></div>";
		$_SESSION["bad_message"] = null;
		return $output;
	}
}



?>