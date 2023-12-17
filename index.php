<?php
// Прототип
interface Prototype {
    public function clone(): Prototype;
}

// Конкретний клас, який реалізує прототип
class ConcretePrototype implements Prototype {
    private $property;

    public function __construct($property) {
        $this->property = $property;
    }

    // Метод клонування
    public function clone(): Prototype {
        return new ConcretePrototype($this->property);
    }

    public function getProperty() {
        return $this->property;
    }
}

// Використання паттерна Прототип
$prototype = new ConcretePrototype('Original Property');

// Клонування
$clone1 = $prototype->clone();
$clone2 = $prototype->clone();

// Зміна властивостей клонів не впливає на оригінал
$clone1->setProperty('Modified Property');
$clone2->setProperty('Another Modified Property');

echo $prototype->getProperty();  // Виведе: Original Property
echo $clone1->getProperty();     // Виведе: Modified Property
echo $clone2->getProperty();     // Виведе: Another Modified Property
