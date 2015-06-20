<?php 

require_once('vendor/autoload.php');


if ( isset($argv[1]) ) 
	{
		$url = $argv[1];
	}
else
	{
		echo "You need to enter a url as an argument";
		die();
	}

$test = new \Aboustayyef\Extractor($url);

echo $test->getTitle();
echo "\n\n\n"; 
echo $test->getText();
echo "\n\n\n"; 
echo $test->getHtml();