<?php
  require_once '../model/PersonModel.php';
  require_once '../database/Database.php';

  $p = new PersonModel();
  $p->setName($_POST['name'])
  ->setAge($_POST['age']);

  echo $p->getName() . " " . $p->getAge();

  $p->insert();