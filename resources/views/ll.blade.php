<!DOCTYPE html>
<html>
<body>

<?php
class furniture {
  // Properties
  var $item;
  var $price;

  // Methods
  function __construct($item, $price) {
    $this->item = $item;
    $this->price = $price; 
  }
  function __destruct() {
    echo "The fruit is {$this->item} and the price is {$this->price}."; 
  }
}

$chair = new Fruit("Chair", "60$");
?>
 
</body>
</html>
