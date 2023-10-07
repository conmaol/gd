<?php

namespace views;
use models;

class entry_instance {

	private $_model;   // an instance of models\entry_instance

	public function __construct($model) {
		$this->_model = $model;
	}

	public function show() {
		$html = '<div class="list-group-item"><span title="' . models\sources::getRef($this->_model->getSource()) . '">';
		$html .= models\sources::getEmoji($this->_model->getSource());
		$html .= '</span>&nbsp;&nbsp;<strong>' . $this->_model->getHw() . '</strong> ';
		$html .= '<em class="text-muted" data-toggle="tooltip" title="' . models\entry::getPosInfo($this->_model->getPos())[2] . '">' . models\entry::getPosInfo($this->_model->getPos())[0] . '</em> ';
		$html .= '<ul style="list-style-type:none;">';
		if ($this->_model->getForms()) {
			$html .= '<li>';
			foreach ($this->_model->getForms() as $nextForm) {
				$html .= ' ' . $nextForm[0] . ' <em class="text-muted" data-toggle="tooltip" title="' . models\entry::getPosInfo($nextForm[1])[2] . '">' . models\entry::getPosInfo($nextForm[1])[0] . '</em> ';
			}
			$html .= '</li>';
		}
		$trs = $this->_model->getTranslations();
		if ($trs) {
			$html .= '<li class="text-muted">';
			foreach ($trs as $nextTranslation) {
				$html .= '<mark>' . $nextTranslation[0] . '</mark>';
				if ($nextTranslation!=end($trs)) { $html .= ' | '; }
			}
			$html .= '</li>';
		}
		if ($this->_model->getNotes()) {
			$html .= '<li><small class="text-muted">[';
			foreach ($this->_model->getNotes() as $nextNote) {
				$html .= '' . $nextNote[0] . '';
			}
			$html .= ']</small></li>';
		}
		//$html .= '<li><small data-toggle="tooltip" data-html="true" data-placement="bottom" title="' . models\sources::getRef($this->_model->getSource()) . '">' . models\sources::getShortRef($this->_model->getSource()) . '</small></li>';
		$html .= '</ul>';
		$html .= '</div>';
		return $html;
	}

}
