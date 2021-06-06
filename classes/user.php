<?php 

class User {
    public $name;
    public $lastName;
    public $age;
    public $email;

    function __construct($name, $lastName, $age, $email) {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->email = $email;
    }
}

class Vips extends User {
    public $vip_member;

    function __construct($name, $lastName, $age, $email) {
        parent::__construct($name, $lastName, $age, $email);
    } 

    public function get_vips() {
        return $this->vip_member = $this->age > 28 ? 'Membro VIP' : 'Utente normale';
    }
}

$user1 = new Vips('Trebor', 'Lion', 22, 'kingdomhearts@gmail.com');
$user2 = new Vips('Marco', 'Tonino', 60, 'verdone@gmail.com');
$user3 = new Vips('Francesco', 'Totti', 18, 'roma@gmail.com');
$user4 = new Vips('Torrone', 'Titti', 45, 'riomma@gmail.com');
$user5 = new Vips('Alessio', 'Fonzi', 20, 'fonzetti@gmail.com');

?>