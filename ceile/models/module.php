<?php

namespace models;

class module {

  private $_html;
  
  public function __construct() {
      if (isset($_GET["en"])) {
          $en = $_GET["en"];
          if ($en == "") { // English term index
              $this->_enIndex();
              return;
          }
          else {
              $file = 'data/en/' . $en[0] . '/' . $en . '.xml'; // individual English term modules
              $uri = '?en=' . $en;
          }
      }
      else if (isset($_GET["gd"])) {
          $gd = $_GET["gd"];
          if ($gd == "") { // Gaelic term index
              $this->_gdIndex();
              return;
          }
          else {
              $file = '../gadelica/gramar/gd/' . $gd[0] . '/' . $gd[0].$gd[1] . '/' . $gd . '.xml'; // individual Gaelic term modules
              $uri = '?gd=' . $gd;
          }
      }
      else if (isset($_GET["xx"])) {
          $xx = $_GET["xx"];
          if ($xx == "") { // subject index
              $this->_xxIndex();
              return;
          }
          else {
              $file = '../gadelica/gramar/xx/' . $xx . '.xml'; // individual subject modules
              $uri = '?xx=' . $xx;
          }
      }
      else if (isset($_GET["q"])) {
          $q = $_GET["q"];
          if ($q == "") { // question index
              $this->_qIndex();
              return;
          }
          else {
              $file = 'data/q/' . $q . '.xml'; // individual question modules
              $uri = '?q=' . $q;
          }
      }
      else {
          $this->_blurb();
          return;
      }      
      $xml = new \SimpleXMLElement($file,0,true);
      $xsl = new \DOMDocument;
      if (isset($_GET["print"])) { $xsl->load('print.xsl'); }
      else { $xsl->load('module.xsl'); }
      $proc = new \XSLTProcessor;
      $proc->importStyleSheet($xsl);
      $proc->setParameter('', 'uri', $uri); //////////
      $this->_html = $proc->transformToXML($xml);
  }

  private function _enIndex() {
      $this->_html = "<ul>";
      $terms = ["because", 
                "ever", 
                "more", 
                "never"];
      foreach ($terms as $nextTerm) {
    	  $this->_html .= "<li><a href=\"?en=" . $nextTerm . "\">". $nextTerm . "</a></li>";
      }
      $this->_html .= "</ul>";
  }

  private function _gdIndex() {
      $this->_html = "<ul>";
      $terms = [/*"a-chaoidh", "a-riamh",*/ 
                "abair", 
                "ag", 
                "aindeoin", 
                "an-comhnaidh", 
                "barrachd", 
                "beir", /*"ceann",*/ 
                "cion",
                "cluinn", 
                "deannan", 
                "daonnan", 
                "dìth",
                "dèan", /*"deireadh",*/ 
                "faic", 
                "faigh", /*"oir",*/ 
                "mòran",
                "pailteas", 
                "rach", 
                "ruig", /*"seach",*/ 
                "thig", 
                "thoir", 
                "uiread"];
      $terms = [];
      $path = './data/gd';
      $it = new \RecursiveDirectoryIterator($path);
      foreach (new \RecursiveIteratorIterator($it) as $nextFile) {
          if ($nextFile->getExtension()=='xml') {
              $terms[] = $nextFile->getBasename('.xml');
          }
      }
      sort($terms);
      foreach ($terms as $nextTerm) {
    	  $this->_html .= "<li><a href=\"?gd=" . $nextTerm . "\">". $nextTerm . "</a></li>";
      }
      $this->_html .= "</ul>";
  }

  private function _xxIndex() {
      $this->_html = <<<HTML

HTML;
  }

  private function _qIndex() {
      $this->_html = <<<HTML

HTML;

  }

  private function _blurb() { // display the default homepage
     $this->_html = <<<HTML
<p>blah</p>
HTML;
  }

  public function getHtml() {
	  return $this->_html;
  }
  
}
