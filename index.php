<?php



if ($_REQUEST['submit']) {
    // ======== Book ======== 
        $bSku             =   $_REQUEST['sku'    ];
        $Bname            =   $_REQUEST['name'   ];
        $Bprice           =   $_REQUEST['price'  ];
        $weight           =   $_REQUEST['weight' ];
    // ======== DVD ========          
        $DVDSku           =   $_REQUEST['sku'    ];
        $DVDname          =   $_REQUEST['name'   ];
        $DVDprice         =   $_REQUEST['price'  ];
        $size             =   $_REQUEST['size'   ];
    // ======== Furniture ========  
        $furnitureSku     =   $_REQUEST['sku'    ];
        $furnitureName    =   $_REQUEST['name'   ];
        $furniturePrice   =   $_REQUEST['price'  ];
        $height           =   $_REQUEST['height' ];
        $width            =   $_REQUEST['width'  ];
        $length           =   $_REQUEST['length' ];
        include './phpClasses/classes/dbh.php';
        $obj = new Dbh();
        if ($height && $width && $length) {
            $obj->furniture($furnitureSku, $furnitureName, $furniturePrice, $height, $width, $length);
        }
        else if($weight){
            $obj->saveBook($bSku, $Bname, $Bprice, $weight);
        }
        else if($size){
            $obj->saveDVD($DVDSku, $DVDname, $DVDprice, $size);
        }
        else{
            echo "<script>console.log('You Didn't Insert The Required Fields')</script>";
        }
        echo "<script>console.log('YEEESSS Done')</script>";

        include './phpClasses/classes/users.php';
        include './phpClasses/classes/viewUser.php';

}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;500;700;800&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;800&display=swap"
    rel="stylesheet">
    <!-- Main JS File -->
    <script src="./js/script.adding.js" defer></script>
    <!-- Main Sass File -->
    <link rel="stylesheet" href="./css/css_add/style.css">
    <title>addproduct</title>
</head>
<body>
    <form class="addingContent" action="" method="GET" >


    <!-- ============== Start Header ============== -->
        <div class="header">
            <div class="container">
                <div class="left-side">
                    <h1>Product Add</h1>
                </div>
                <div class="right-side">
                    <input type="submit" name="submit" class="saveBtn" value="Save">
                    <button type="button" class="cancleBtn"><a href="index2.php">Cancel</a></button>
                </div>
            </div>
        </div>
    <!-- ============== End Header ============== -->
    <!-- ============== Start Product Form ============== -->

        <div class="myProductForm" id="product_form">
            <div class="container">
                <div class="filling-info">
                    <!-- Start SKU, Name, And Price -->
                    <div class="input-wrapper wrapper-one">
                        <label for="">SKU</label>
                        <input required type="text" id="sku" name="sku">
                    </div>
                    <div class="input-wrapper wrapper-two">
                        <label for="">Name</label>
                        <input required type="text" id="name" name="name">
                    </div>
                    <div class="input-wrapper wrapper-three num">
                        <label for="">price ($)</label>
                        <input required type="number" id="price" name="price">
                    </div>
                    <!-- End SKU, Name, And Price -->
                    <!-- Start Type Switcher -->
                    <div class="input-wrapper wrapper-four">
                        <label for="">Type Switcher</label>
                        <select name="typeSwitcher"   class="mySwitcher" id="productType" required>
                            <option value=""          >Select</option>
                            <option value="dvd"       >DVD disc</option>
                            <option value="book"      >Book</option>
                            <option value="Furniture" >Furniture</option>
                        </select>
                    </div>
                    <!-- End Type Switcher -->
                    <!-- Start Specific Type -->
                        <div id="dvd" class="section dvd">
                            <div class="input-wrapper dvd-attribute num">
                                <label for="" class="description">Please, Provide Disc Size(MB):</label>
                                <input type="number"  name="size" class="mySize" id="size">
                            </div>
                        </div>
                        <div id="book" class="section book">
                            <div class="input-wrapper book-attribute num">
                                <label for="" class="description">Please, Provide The Book Weight:</label>
                                <input type="number" name="weight" class="myWeight" id="weight">
                            
                            </div>
                        </div>
                        <div id="furniture" class="section furniture">
                            <div class="furniture-attribute">
                                <p class="askDimensions">Please, Provide Dimensions:</p>
                                    <div class="input-wrapper num">
                                        <label for="">Height: </label>
                                        <input type="number" name="height" class="myHeight" id="height">
                                    </div>
                                    <div class="input-wrapper num">
                                        <label for="">Width: </label>
                                        <input type="number" name="width"  class="myWidth" id="width">
                                    </div>
                                    <div class="input-wrapper num">
                                        <label for="">Length: </label>
                                        <input type="number" name="length" class="myLength" id="length">
                                    </div>
                            </div>
                        </div>
                    <!-- </div> -->
                    <!-- End Specific Type -->
                </div>
            </div>
        </div>
    </form>
    <!-- ============== End Product Form ============== -->
    <!-- ============== Start Footer ============== -->
    <footer>
        <div class="container">
            <div class="scandiweb">Scandiweb Test Assignment</div>
        </div>
    </footer>
    <!-- ============== End Footer ============== -->
</body>
</html>