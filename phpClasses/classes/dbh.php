<?php
// OOP Database Connection
class Dbh{

    private $host = "localhost";
    private $username = "root";
    private $pwd = "";
    private $dbName = "productsInfo";
    protected $tName = "product";

    public function connect(){
    $connection = new mysqli($this->host,$this->username,$this->pwd,$this->dbName);
        if ($connection == !$connection) {
            echo "<script>console.log('Try Again !')</script>";
        }else{
            echo "<script>console.log('Done !')</script>";
        }
    return $connection;
    }
// ============ Furniture ============
    public function furniture($sku, $Pname, $price, $height, $width , $length){
        $conn = $this->connect();
        $query = "INSERT INTO `$this->tName`(`sku`, `Pname`, `price`, `height`, `width`, `length`) VALUES ('$sku','$Pname','$price','$height','$width','$length')";
        mysqli_query($conn, $query);
    }

// ============ Book ============
    public function saveBook($sku, $Pname, $price, $weight){
        $conn = $this->connect();
        $query = "INSERT INTO `$this->tName`(`sku`, `Pname`, `price`, `weight`) VALUES ('$sku','$Pname','$price','$weight')";
        mysqli_query($conn, $query);
    }

// ============ DVD ============
    public function saveDVD($sku, $Pname, $price, $size){
        $conn = $this->connect();
        $query = "INSERT INTO `$this->tName`(sku, Pname, price, size) VALUES ('$sku','$Pname','$price','$size')";
        mysqli_query($conn, $query);
    }
}
?>