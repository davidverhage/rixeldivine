<?php
//Loading all php files from the functions/ folder
//this keeps your wordpress functions file clean
//and you can split up your function build up by parsing functionality in different files.

$folder =   get_template_directory()."/lib/";
$files = glob($folder."*.php"); // return array files
foreach($files as $phpFile){
	require_once("$phpFile");
}