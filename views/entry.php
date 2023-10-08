<?php

namespace views;
use models;

class entry {

    private $_model;   // an instance of models\entry
    
    public function __construct($model) {
        $this->_model = $model;
    }

    public function show($action) {
        return $this->_writeInfo();
    }

    private function _writeInfo() {
        $reg = '';
        if ($this->_model->getReg()==1) { $reg = '<small title="Paleo-Gaelic">👻</small>'; };
        if ($this->_model->getReg()==2) { $reg = '<small title="Neo-Gaelic">🤖</small>'; };
        $html = '<div class="modal-header">';
        $html .= '<h2 title="' . $this->_model->getId() . '">' . $reg . ' ' . $this->_model->getHw() . '</h2>';
        $html .= '<em class="text-muted">' . models\entry::getPosInfo($this->_model->getPos())[1] . '</em>';
        $html .= '</div>';
        $html .= '<div class="modal-body">';
        if ($this->_model->getForms()) {
            $html .= '<p>';
            $fs = $this->_model->getForms();
	  foreach ($fs as $nextForm) {
	      $html .= '<em class="text-muted" title="' . models\entry::getPosInfo($nextForm[1])[1] . '">' . models\entry::getPosInfo($nextForm[1])[0] . '</em> ' . $nextForm[0];
	      if ($nextForm!=end($fs)) { $html .= ', '; }
	  }
	  $html .= '</p>';
        }
        $ps = $this->_model->getParts();
        if ($ps) {
            $html .= '<p>↗️ ';
	  foreach ($ps as $nextPart) {
	      $html .= <<<HTML
<a href="#" class="entryRow" data-id="{$nextPart[0]}" title="{$nextPart[0]}">{$nextPart[1]}</a>
HTML;
	      $html .= ' <em class="text-muted">' . models\entry::getPosInfo($nextPart[2])[0] . '</em> ';
	      if ($nextPart!=end($ps)) { $html .= ' | '; }
	  }
            $html .= '</p>';
        }
        
        $html .= '<p>';	
        $translations = $this->_model->getTranslations();
        foreach ($translations as $nextTranslation) {
            $html .= '<mark>' . $nextTranslation . '</mark>';
            if ($nextTranslation!=end($translations)) { $html .= ' | '; }
        }
        $html .= '</p>';
        $html .= '<p> </p>';
        $cs = $this->_model->getCompounds();
        if ($cs) {
            $html .= '<p>↘️ ';
	  foreach ($cs as $nextCompound) {
	      $html .= <<<HTML
<a href="#" class="entryRow" data-id="{$nextCompound[0]}" title="{$nextCompound[0]}">{$nextCompound[1]}</a>
HTML;
	      $html .= ' <em class="text-muted">' . models\entry::getPosInfo($nextCompound[2])[0] . '</em>';
                if ($nextCompound!=end($cs)) { $html .= ' <span class="text-muted">|</span> '; }
	  }
	  $html .= '</p>';
        }
        $url = $this->_model->getURL();
        if ($url) {
            $html .= '<p><a href="/gd/ceile/index.php' . $url . '">more info</a></p>';
        }
         
        
        $html .= '</div>';

    /*$html .= <<<HTML
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">bye</button>
		</div>
HTML;*/
		return $html;
	}
}
