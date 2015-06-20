<?php namespace Aboustayyef;


/**
 *  Extracts the content
 */

class Extractor
{
  public $url;
  private $html;
  private $readability;
  private $title;
  private $result_html;
  private $text;

  function __construct($url)
  {
    $this->url = $url;
    $this->html = @file_get_contents($this->url);

    if (trim($this->html) == "") {
      echo "Couldnt extract HTML";
      die();
    }

    $this->readability = new Fl\Readability($this->html);
    $result = $this->readability->getContent();
    $this->title = $result['title'];
    $this->result_html = $result['content'];
    $this->text = strip_tags($this->result_html);
  }


// getters

  public function getHtml(){
    return $this->result_html;
  }

  public function getText(){
    return $this->text;
  }

  public function getTitle(){
    return $this->title;
  }

}

?>
