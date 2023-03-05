<?php

class User {
    public $name;
    public $email;
    public $password;

    // A constructor is a method that runs when an object is created
    public function __construct($name, $email, $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    //Methods are basically functions inside of a class
    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
}

// Instantiate a user object

$user1 = new User('Jamil','jamil@gmail.com','233455');
$user2 = new User('Emily', 'emily@yahoo.com', 'joe');

// echo $user1->name;
// echo $user2->email;

// Inheritance

class Employee extends User{
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title(){
        return $this->title;
    }

};

$employee1 = new Employee('Shahid', 'shahid@mail.com', '2345', 'Middleman');

echo $employee1->name;
echo $employee1->title;
