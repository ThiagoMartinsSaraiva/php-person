<?php 
  class PersonModel {
    private string $name;
    private int $age;

    public function getName(): string {
      return $this->name;
    }

    public function setName(string $name) {
      $this->name = $name;
      return $this;
    }

    public function getAge(): int {
      return $this->age;
    }

    public function setAge(int $age) {
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
      
    }
  }