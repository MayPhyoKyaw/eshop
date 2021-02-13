<?php 
    include_once "db_connection.php";
    try {
        $database = new Connection();
        $db = $database->openConnection();
        if(isset($_POST["add_to_cart_detail"])) {
            $id = $_POST['cart_itemId'];
            $qty = $_POST['cart_qty'];
            // echo $qty;
            $stm = $db->prepare("INSERT INTO cart (item_id, c_code, quantity) 
                        VALUES ( :cart_itemId, 100, :qty)") ;
            // inserting a record
            $stm->execute(
                array(
                    ':cart_itemId' => $_POST['cart_itemId'], 
                    ':qty' => $_POST['cart_qty'], 
                )
            );
        }
    }catch (PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    }
    header('location:cart.php');
?>