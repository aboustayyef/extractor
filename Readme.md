#Text

This is a utility class for extracting text from urls. It is a simple wrapper around the (no longer updated) PHP readability class by fivefilters. 

##Usage

```
<?php

use Aboustayyef\Extractor;
$document = new Extractor("http://source/to/document.html");
$title = $document->getTitle();
$text = $document->getText();


?>

```
