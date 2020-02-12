<?php
  require_once '../model/PersonModel.php';

  $p = new PersonModel();
  $p->setName($_POST['name'])
  ->setAge($_POST['age']);

  echo $p->getName() . " " . $p->getAge();
?>