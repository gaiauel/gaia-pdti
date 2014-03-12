<?php

function is_production() {
	return isset($_ENV['production']);
}

function link_to($url) {
	if (is_production()) {
		return "/index.php/" . $url;
	} else {
		return "http://localhost/slim_tests/2/index.php/" . $url;
	}
}

function resource($url) {
	if (is_production()) {
		return "";
	} else {
		return "http://localhost/slim_tests/2/" . $url;
	}
}

?>