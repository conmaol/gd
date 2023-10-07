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
              $file = 'data/xx/' . $xx . '.xml'; // individual subject modules
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
<ul>
  <li>
    <a href="?xx=nouns/nouns"><!--<span class="gd">ainmearan</span>--><span class="en">nouns</span></a>
    <ul>
      <li>
        <a href="?xx=nouns/common_nouns"><span class="en">common nouns</span><!--<span class="gd">ainmearan gnàthach</span>--></a>
          <ul>
								<!--<li><a href="?xx=nouns/ethnonymic_common_nouns"><span class="en">ethnonymic common nouns</span><span class="gd">ainmearan gnàthach cinnidheach</span></a></li>
								<li><a href="?xx=nouns/derived_common_nouns"><span class="en">derived common nouns</span><span class="gd">ainmearan gnàthach bunaichte</span></a>, 
								<a href="?xx=nouns/compound_common_nouns"><span class="en">compound common nouns</span><span class="gd">ainmearan gnàthach fillte</span></a></li>-->
		    <!--<li><a href="?xx=nouns/verbal_nouns">verbal nouns</a></li>		-->		
	      </ul>
	  </li>
	  <li><a href="?xx=nouns/proper_nouns"><span class="en">proper nouns</span><span class="gd">ainmearan sònrachaidh</span></a>
             <!-- <ul>
                <li>
									<a href="?xx=nouns/anthroponymic_proper_nouns"><span class="en">anthroponymic proper nouns</span><span class="gd">ainmearan sònrachaidh daonna</span></a>,
									<a href="?xx=nouns/toponymic_proper_nouns"><span class="en">toponymic proper nouns</span><span class="gd">ainmearan sònrachaidh àite</span></a>
								</li>
							</ul>-->
	  </li>
    </ul>
  </li>
  <li><a href="?xx=nouns/quantity_expressions">quantity expressions</a></li>
  <!--<li><a href="?xx=adjectives/adjectives"><span class="gd">buadhairean</span><span class="en">adjectives</span></a>
          <ul>
            <li><a href="?xx=adjectives/derived_adjectives">derived adjectives</a>,
						    <a href="?xx=adjectives/compound_adjectives">compound adjectives</a>
						</li>
					</ul>
  </li>-->
  <li><a href="?xx=verbs/verbs"><!--<span class="gd">gnìomhairean</span>--><span class="en">verbs</span></a>
				
					<ul>
					<!--
						<li><a href="?xx=verbs/derived_verbs"><span class="gd">gnìomhairean bunaichte</span><span class="en">derived verbs</span></a>, 
						    <a href="?xx=verbs/compound_verbs"><span class="gd">gnìomhairean fillte</span><span class="en">compound verbs</span></a>, 
						    <a href="?xx=verbs/simple_verbs"><span class="gd">gnìomhairean sìmplidh</span><span class="en">simple verbs</span></a>
						    </li>-->
						<li><a href="?xx=verbs/irregular_verbs">irregular verbs</a></li>
						<li><a href="?xx=verbs/infinitivals">infinitivals</a></li>
						<!--<li>the predicative verb <a href="?gd=bi"><i>bi</i></a>, <a href="?xx=verbs/modal_verbs">modal verbs</a></li>-->
					</ul>
  </li>
  <!--
  <li><a href="?xx=prepositions/prepositions"><span class="gd">roimhearan</span><span class="en">prepositions</span></a>
				  <ul>
				    <li><a href="?xx=prepositions/compound_prepositions">compound prepositions</a></li>
				  </ul>
  </li>
  <li><a href="?xx=adverbs/adverbs"><span class="gd">co-ghnìomhairean</span><span class="en">adverbs</span></a></li>
  <li><a href="?xx=nouns/names"><span class="gd">ainmean</span><span class="en">names</span></a>
    <ul>
            <li><a href="?xx=nouns/proper_nouns"><span class="en">proper nouns</span><span class="gd">ainmearan sònrachaidh</span></a>
							<ul>
                <li>
									<a href="?xx=nouns/anthroponymic_proper_nouns"><span class="en">anthroponymic proper nouns</span><span class="gd">ainmearan sònrachaidh daonna</span></a>,
									<a href="?xx=nouns/toponymic_proper_nouns"><span class="en">toponymic proper nouns</span><span class="gd">ainmearan sònrachaidh àite</span></a>
								</li>
							</ul>
						</li>
						<li><a href="?xx=nouns/name_descriptions"><span class="en">name-descriptions</span><span class="gd">ainmean tuairisgeulach</span></a></li>
					</ul>
					<ul>
            <li><a href="?xx=nouns/anthroponyms">anthroponyms</a>
							<ul>
								<li>
									<a href="?xx=nouns/anthroponymic_proper_nouns"><span class="en">anthroponymic proper nouns</span><span class="gd">ainmearan sònrachaidh daonna</span></a>
								</li>
							</ul>
						</li>
						<li><a href="?xx=nouns/toponyms">toponyms</a>
							<ul>
								<li>
									<a href="?xx=nouns/toponymic_proper_nouns"><span class="en">toponymic proper nouns</span><span class="gd">ainmearan sònrachaidh àite</span></a>
								</li>
							</ul>
						</li>
						<li>
							<a href="?xx=nouns/ergonyms">ergonyms</a>,
							<a href="?xx=nouns/chrematonyms">chrematonyms</a>,
							<a href="?xx=nouns/glottonyms">glottonyms</a>,
							<a href="?xx=nouns/chrononyms">chrononyms</a>
						</li>
					</ul>
  </li>
  <li><a href="?xx=adverbs/adverbials"><span class="gd">abairtean co-ghnìomhaireil</span><span class="en">adverbials</span></a>
				  <ul>
				    <li><a href="?xx=adverbs/temporal_adverbials"><span class="gd">abairtean co-ghnìomhaireil tìmeil</span><span class="en">temporal adverbials</span></li>
				    <li><a href="?xx=adverbs/adverbials_of_cause"><span class="gd">abairtean adhbharach</span><span class="en">adverbials of cause/reason</span></li>
				    <li><a href="?xx=adverbs/adverbials_of_contrast">adverbials of contrast</li>
				  </ul>
  </li>-->
</ul>
HTML;
  }

  private function _qIndex() {
      $this->_html = <<<HTML
<ul>
  <li><a href="?q=progressive_case">Should nouns governed by a progressive verbal noun be in the genitive or nominative case?</a></li>
  <li><a href="?q=dative_slenderisation">Should feminine nouns and their adjectives be slenderised after prepositions?</a></li>
  <li class="en"><a href="?xx=verbs/irregular_verbs">Which verbs are irregular?</a></li>
  <li class="gd"><a href="?xx=verbs/irregular_verbs">Dè na gnìomhairean neo-riaghailteach?</a></li>
  <li><a href="?xx=verbs/infinitivals">When should the object precede the verb?</a></li>
  <li><a href="?gd=rach&amp;box=passivebox">How does the <i>rach</i>-passive construction work?</a></li>
  <li><a href="?xx=verbs/infinitivals">Should intransitive verbal nouns be lenited?</a></li>
  <li><a href="?q=progressive_pronouns">How should object pronouns be expressed in the progressive?</a></li>
  <li><a href="?q=verbal_aspect">Verbal aspect?</a></li>
  
			  <!--
			  <li class="en"><a href="?q=names_lenition_genitive">Should names be lenited in the genitive case?</a></li>
			  <li class="gd"><a href="?q=names_lenition_genitive">Am bu chòir ainmean a bhith air an sèimheachadh anns an tuiseal ghinideach?</a></li>
			  <li>How should English modal verbs be translated into Gaelic? (i.e. ‘can’, ‘could’, ‘must’, ‘should’, etc.)</li>
			  -->
</ul>
HTML;

  }

  private function _blurb() { // display the default homepage
     $this->_html = <<<HTML
<p>LEACAN is the second stage of a project which aims to provide a comprehensive, online, modular grammar of traditional Scottish Gaelic.</p>
<p>The current phase of the project is focused on the following topics –</p>
<ul>
  <li>How are <a href="?xx=nouns/quantity_expressions">quantities</a> expressed in Gaelic?</li>
  <li>How is <a href="?q=verbal_aspect">verbal aspect</a> expressed in Gaelic?</li>
  <li>How do <a href="?xx=nouns/names">names</a> and <a href="?xx=nouns/proper_nouns">proper nouns</a> work in Gaelic?</li>
  <li>How is <a href="?q=motion">motion along a trajectory</a> expressed in Gaelic?</li>
  <li>How do <a href="?xx=nouns/nouns">nouns</a> and <a href="?xx=adjectives/adjectives">adjectives</a> decline in the dative and genitive?</li>
  <li>What are the <a href="?q=goc">Gaelic Orthographic Conventions</a>?</li>
  <li>Linguistic resources database – <a href="?q=banca">Banca na Gàidhlig</a></li>
</ul>
<p>Older modules are as follows –
<ul>
   <li>LeaCaG <a href="LeaCaG-2019.pdf" target="_new">grammar guidance</a> (2019)</li>
  <li>What are the irregular verbs in Gaelic? –
  <ul>
    <li><a href="?gd=abair"><strong>abair</strong></a> ‘say’, <a href="?gd=beir"><strong>beir</strong></a> ‘bear’, <a href="?gd=cluinn"><strong>cluinn</strong></a> ‘hear’, 
    <a href="?gd=faic"><strong>faic</strong></a> ‘see’, <a href="?gd=faigh"><strong>faigh</strong></a> ‘get’, 
    <a href="?gd=rach"><strong>rach</strong></a> ‘go’, <a href="?gd=ruig"><strong>ruig</strong></a> ‘reach’, <a href="?gd=thig"><strong>thig</strong></a> ‘come’,
    <a href="?gd=thoir"><strong>thoir</strong></a> ‘give,take’,
    </li>
  </ul>
  </li>
  <li>Should nouns governed by a progressive verbal noun be in the <a href="?q=progressive_case">genitive or nominative case?</a></li>
  <li>Should feminine nouns and their adjectives be <a href="?q=dative_slenderisation">slenderised</a> after prepositions?</li>
  <li>When should the object <a href="?xx=verbs/infinitivals">precede</a> the verb(al noun)?</li>
  <li>How does the <a href="?gd=rach"><strong>rach</strong></a>-passive construction work?</a></li>
  <li>Should intransitive verbal nouns (<a href="?xx=verbs/infinitivals">infinitivals</a>) be lenited?</li>
  <li>How should <a href="?q=progressive_pronouns">object pronouns</a> be expressed in the progressive?</li>
  <li>How should English <a href="?en=if"><strong>if</strong></a> be translated into Gaelic?</li>
  <li>How do relative clauses work with <a href="?xx=prepositions/prepositions">prepositions</a>?</li>
  <li>How do <a href="?xx=nouns/numeric_quantity_expressions">numeric quantity expressions</a> work in Gaelic?</li>
</ul>
</p>

<!--<p>You can read the prolegomenon <a href="prolegomenon/index.html">here</a>.</p>-->
<hr/>
<p class="small text-muted">LEACAN is being developed by <a href="https://dasg.ac.uk" target="_new">DASG</a> and 
        <a href="http://www.soillse.ac.uk" target="_new">Soillse</a>, as part of the <a href="https://www.gaidhlig.scot" target="_new">Bòrd na Gàidhlig</a>-funded LEACAN project.
        Current team members are Dr Mark McConville, Dr David Mandic, Professor Roibeard Ó Maolalaigh (Glasgow University), 
        Professor William Lamb (Edinburgh University), Gordon Wells, Padruig Moireach (UHI), Jo NicDhòmhnaill, Ian MacDhòmhnaill and Mòrag NicLeòid. 
        The following people contributed to previous phases of this work – Dr Susan Ross, Professor Wilson McLeod, Professor Richard Cox, 
        Charles Wilson, Dr Domhnall Uilleam Stiùbhart, Ailean Caimbeul, Catrìona Chaimbeul, Ruairidh MacIllEathain, 
        Donnchadh MacGuaire, Dòmhnall Moireasdan and Catrìona Mhoireach.</p>
HTML;
//$this->_html = "";
  }

  public function getHtml() {
	  return $this->_html;
  }
  

}
