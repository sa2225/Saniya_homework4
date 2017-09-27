  $obj = new main();
  
  /* Definitions*/
  $text = "Saniya Anand";
  $number = array(1,2,3,4,5,6,7);
  $cars = array("Accord", "Elantra", "Mini Cooper","Accent");
  $cosmetics = array("Loreal","MAC","Maybelline","Clinique");
  $items = array("perfume", "cream", "lipstick");
  $unique = array("candy", "crush", "saga");
  $key = array(10,11,12,13,14);
  $value = array(22,24,26,28,30);
  

  /* instantiation */
  $obj->printthis($text);
  $obj->printArray($number);
  $obj->flippingArray($number);
  $obj->chunkofarrays($cars);
  $obj->positionofarrays($cosmetics);
  $obj->listallarrays($cosmetics);
  $obj->sumofarrays($number);
  $obj->returnvalues($cars);
  $obj->arrayfill($number);
  $obj->arraypad($value);
  


  class main {

    public function __construct() {

      echo 'hello i\'m an Object </br>';

    }

    public function printthis($text) {
      echo '<h1>Print function demo </h1>';
      print($text);
      echo '<hr>';
    }

    public function printArray($array) {
      echo '<h1>Array print function</h1>';
      print_r($array);
      echo '<hr>';
    }
    
    public function flippingArray ($array) {
      echo '<h1>Array flip function</h1>';
      print_r(array_flip($array));
      echo '<hr>';
    }

    public function chunkofarrays($cars){
      echo '<h1>Chunk of Arrays</h1>';
      print_r(array_chunk($cars, 2));
      echo '<hr>';
    }

    public function positionofarrays($cosmetics){
      echo '<h1>Position of Arrays</h1>';
      echo pos($cosmetics);
      echo next($cosmetics);
      echo '<hr>';
    }

    public function listallarrays($cosmetics){
      echo '<h1>List of Arrays</h1>';
      list($perfume, $cream, $lipstick) = $cosmetics;
      echo "$perfume is $cream and $lipstick is better .\n";
      echo '<hr>';


    }  

    public function sumofarrays($number){
      echo '<h1>Sum of Arrays</h1>';
      echo "sum(number) = " .array_sum($number) . "\n";
      echo '<hr>';

    }

    
    public function returnvalues($cars){
      echo '<h1>Returns value of array element currently being pointed</h1>';
      $number = current($cars);
      print_r(current($cars));
      echo '<hr>';
    
    }


    public function arrayfill($number){
    echo '<h1>Fill an array with values</h1>';
    $number = array_fill(0, 1, 'Accenture');
    print_r($number);
    echo '<hr>';
    }

    public function arraypad($value){
    echo '<h1>Pad array to the specified length with a value</h1>';
    print_r(array_pad($value, -10, 10));
    echo '<hr>';
  }


    public function __destruct() {

      echo '</br> I\'m Done';

    }


  }

  ?>