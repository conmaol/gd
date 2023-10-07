<?php
namespace controllers;
use models, views;

class module {
  public function __construct() {
    $model = new models\module();
    new views\module($model);
  }

}