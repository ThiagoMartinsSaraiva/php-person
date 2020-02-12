<?php 
  class PersonModel {
    private string $name;
    private int $age;

    public function getName(): string {
      return $this->name;
    }

    public function setName(string $name): PersonModel {
      $this->name = $name;
      return $this;
    }

    public function getAge(): int {
      return $this->age;
    }

    public function setAge(int $age): PersonModel {
      $this->age = $age;
      return $this;
    }

    public function insert() {
      $connection = Database::connect();
      $stmt = $connection->prepare("INSERT INTO person (name, age) " .
                                  "VALUES (:name, :age)");
  
      $stmt->bindValue(':name', $this->getName());
      $stmt->bindValue(':age', $this->getAge());

      if (!$stmt->execute())
        return $stmt->errorInfo();
      
      header('Location: ../view/success.php');
    }

    public function list() {
      $connection = Database::connect();
      $stmt = $connection->prepare("SELECT * FROM person");

      if (!$stmt->execute())
        return $stmt->errorInfo();

      $people = array();
      while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $people[] = array("name" => $result['name'],
                          "age" => $result['age']);
      }
      return $people;
    }
  }