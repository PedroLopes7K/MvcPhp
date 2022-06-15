<?php

require "View/View.php";
require "Model/Model.php";

class Controller
{

  public function Index()
  {
    $model = new Model();
    $view = new View();
    $string = $model->getString();
    $view->Render($string);
  }
}
