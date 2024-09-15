<?php
    abstract class Animal {
        // Abstract method, to be implemented by each animal subclass
        abstract public function makeSound();
    }

    class Dog extends Animal {
        public function makeSound() {
            return "Gow! Goww!";
        }
    }

    class Cat extends Animal {
        public function makeSound() {
            return "Mew! Mewooo!";
        }
    }
    class Cow extends Animal {
        public function makeSound() {
            return "Hamba!";
        }
    }

    $animals = [
        new Dog(),
        new Cat(),
        new Cow(),
    ];
    
    foreach ($animals as $animal) {
        echo get_class($animal) . " says: " . $animal->makeSound() . "<br>";
    }
?>