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
  }