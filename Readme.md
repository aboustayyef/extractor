#Text

This is a utility class for extracting text from urls

##Usage

```
<?php

use Aboustayyef\Extractor;
$document = new Extractor("http://source/to/document.html");
$title = $document->getTitle();
$text = $document->getText();


?>

```
