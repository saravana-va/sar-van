<?php
    class one {
        public $book;
        public $price;
        function __construct($book_name,$book_price) {
        $this->book=$book_name;
        $this->price=$book_price;
        $this->display();
        }
    }
    class two extends one {
        function __construct($book_name,$book_price) {
        parent::__construct($book_name,$book_price);
        }
        public function display() {
        echo $this->book."=".$this->price."<br>";
        } 
    }
    $obj1 = new two("wings of fire","200");
    $obj2 = new two("pirates of carabian","500");
?>
