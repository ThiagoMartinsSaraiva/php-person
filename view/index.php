<?php require_once './head.php';
require_once '../database/Database.php';
require_once '../Model/PersonModel.php';

$p = new PersonModel();
$list = $p->list();

?>

<article class="app">
  <h1>This is my php test</h1>
  <div>
    <form method="POST" action="../controller/PersonController.php">
      <input type="text" name="name" placeholder="name">
      <input type="text" name="age" placeholder="age">
      <input type="submit">
    </form>
    <div>
      <?php foreach($list as $result): ?>
        <div class="mt-2">
          <?= $result['name'] ?>
          <?= $result['age'] ?>
        </div>
        <hr>
      <?php  endforeach; ?>
    </div>
  </div>
</article>