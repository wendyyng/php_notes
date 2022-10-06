<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User
{
    // Properties are just variables that belong to a class.
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

    // A constructor is a method that runs when an object is created
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;

        // echo 'constructor ran';
    }

    //Method is  function that belongs to a class
    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }
}

// Instatiate a user object
$user1 = new User('Wendy', 'wendy@gmail.com', '1234');
$user2 = new User('Alice', 'alice@gmail.com', '1234');

// $user1->set_name('Brad');
// $user2->set_name('John');

echo $user1->get_name();
echo $user2->get_name();

// $user1->name = 'Brad';

// var_dump($user1);
// var_dump($user2);

// Inheritance

class employee extends User
{
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title()
    {
        return $this->title;
    }
}

$employee1 = new Employee('Sarah', 'sarah@gmail.com', '1234', 'manager');

echo $employee1->get_title();
