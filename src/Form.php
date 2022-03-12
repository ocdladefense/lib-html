<?php


namespace Html\Form;





const VERSION = "5";

const DOC_TYPE = "html5";



function Submit($name, $text) {

	return "<input type='submit' value='Submit' />";
}




function Reset($name, $value) {

	return "<input type='reset' name='$name' id='$name' value='$value' />";
}




function Button($name, $label, $value = "0") {

	return "<button name='{$name}' id='{$name}' value='{$value}'>{$label}</button>";
}