<?php

class human {
    public $gender;
    public $name_one;
    
    public function __construct($gender) {
        $this->gender = $gender;
        
        echo self::get_gender();
    }
    
    public function get_gender() {
        return $this->gender . "\n";
    }
    
    public function set_gender( $gender) {
        $this->gender = $gender;
    }
    
    protected function set_name($name) {
        $this->name_one = $name;
        echo $this->name_one;
    }
    
    
}

class person extends human {

    public $name;
    
    public function get_data() {
        echo $this->set_name('test') . "\n";
        echo $this->get_gender() . "\n";
    }
    
}


$human = new human('female');
$human->set_gender('male');
$human->get_gender();


/*
$human = new human('female');
$human->get_gender();

$person = new person('male');
$person->set_gender('male');
$person->get_gender();
$person->get_data();
*/






?>
