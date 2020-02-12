<?php require_once './head.php' ?>

<article class="app">
  <h1>This is my php test</h1>
  <div>
    <form method="POST" action="../controller/PersonController.php">
      <input type="text" name="name" placeholder="name">
      <input type="text" name="age" placeholder="age">
      <input type="submit">
    </form>
  </div>
</article>