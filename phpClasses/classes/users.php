<?php
class Users extends Dbh{

    // Function To Fetch The Data.
    private function getProduct(){
        // Connect To DB
        $conn=$this->connect();
            $array = array();  
            $query = "SELECT * FROM `product` WHERE 1";
            // Send The Query To DB
            $result = mysqli_query($conn, $query);  
            // Save The Data In $row
            while($row = mysqli_fetch_assoc($result)){$array[] = $row;}  
            return $array;  
    }

    // A Function To Remove Data From The DB
    public function remove(){
        // When Click on The Delete Mass Btn(name = 'deleteCheckbox')
        if (isset($_REQUEST['deleteCheckbox'])) {
            // Save All Sheckbox In The Variable of $checkBoxName.
            $checkBoxName= $_REQUEST['checky'];
            // Extract Their id Numbers And Use In Your SQL.
            $extractId = implode(', ', $checkBoxName);
            $query = "DELETE FROM `product` WHERE id IN($extractId)";
            $run = mysqli_query($this->connect(), $query);
            return $run;
        }
}

    // Function To Display The Data.
    public function display(){
        $result = $this-> getProduct();
        foreach ($result as $value)  {

            if ($value[   'height'  ]) {
                echo "                
                <div class='box'>
                    <input name='checky[]' class='myBoxes' type='checkbox' value = ".$value['id'].">
                    <div class='info-container'>
                        <div class='sku'>SKU: ".        $value[  'sku'    ].".</div>
                        <div class='name'>Name: ".      $value[  'Pname'  ].".</div>
                        <div class='price'>Price: ".    $value[  'price'  ].".</div>
                        <div> Dimension: ".             $value[  'height' ]. ' X '. 
                                                        $value[  'width'  ]. ' X '. 
                                                        $value[  'length' ].". 
                        </div>
                    </div>
                </div>
                ";
            }
            else if($value[   'size'  ]){
                echo "                
                <div class='box'>
                    <input name='checky[]' class='myBoxes' type='checkbox' value = ".$value['id'].">
                    <div class='info-container'>
                        <div class='sku'>SKU: ".       $value[  'sku'   ].".</div>
                        <div class='name'>Name: ".     $value[  'Pname' ].".</div>
                        <div class='price'>Price: ".   $value[  'price' ].".</div>
                        <div> Size: ".                 $value[  'size'  ].".</div>
                    </div>
                </div>
                ";
            }
            else if($value[   'weight'  ]){
                echo "                
                <div class='box'>
                    <input name='checky[]' class='myBoxes' type='checkbox' value = ".$value['id'].">
                    <div class='info-container'>
                        <div class='sku'>SKU: ".      $value[   'sku'     ].".</div>
                        <div class='name'>Name: ".    $value[   'Pname'   ].".</div>
                        <div class='price'>Price: ".  $value[   'price'   ].".</div>
                        <div> Weight: ".              $value[   'weight'  ].".</div>
                    </div>
                </div>
                ";
            }
        }
    }
}
?>