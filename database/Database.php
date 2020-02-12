<?php 

final class Database {
  public static function connect() {
    try {
      $connection = new PDO("mysql:host=localhost;port=3306;dbname=person", "root", "");
    } catch (PDOException $e) {
      die ("<div>" . $e->getMessage() . "</div>");
    }
    return ($connection);
  }
}