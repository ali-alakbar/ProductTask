
<?php

include './phpClasses/classes/dbh.php';
include './phpClasses/classes/users.php';
include './phpClasses/classes/remove.php';
$obj = new Dbh();
$obj->connect();
$user = new Users();
$user -> remove();

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
    <script src="./js/script.listing.js" defer></script>
    <!-- Main Sass File -->
    <link rel="stylesheet" href="./css/css_list/style.css">
    <title>listProduct</title>
</head>

<body>
    <form class="addingContent" action="#" method="POST">
        <!-- ============== Start Header ============== -->
        <div class="header">
            <div class="container">
                <div class="left-side">
                    <h1>Product List</h1>
                </div>
                <div class="right-side">
                    <button type="button" class="saveBtn"><a href="./index.php">ADD</a></button>
                    <button type="submit" name="deleteCheckbox" id="delete-product-btn" class="delete">MASS DELETE</button>
                </div>
            </div>
        </div>
        <!-- ============== End Header ============== -->
        <!-- ============== Start Products ============== -->
        <section id="product" class="product">
            <div class="container">
            <?php
            $user -> display();
            ?>
            </div>
        </section>
        <!-- ============== End Products ============== -->
        <!-- ============== Start Footer ============== -->
    <footer>
        <div class="container">
            <div class="scandiweb">Scandiweb Test Assignment</div>
        </div>
    </footer>
    <!-- ============== End Footer ============== -->
    </form>
</body>
</html>