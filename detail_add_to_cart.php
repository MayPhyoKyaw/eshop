<?php 
    session_start();
    include_once "db_connection.php";
    try {
        $database = new Connection();
        $db = $database->openConnection();
        if(isset($_POST["add_to_cart_detail"])) {
            $id = $_POST['cart_itemId'];
            $qty = $_POST['cart_qty'];
            $c_code = $_SESSION['c_code'];
            echo $qty;
            if($qty == 0){
                $stm = $db->prepare("INSERT INTO cart (item_id, c_code, quantity) 
                        VALUES ( ?, ?, 1)") ;
                // inserting a record
                $stm->execute(
                    array(
                        // ':cart_itemId' => $_POST['cart_itemId'],
                        $id, $c_code
                    )
                );
            }else{
                $stm = $db->prepare("INSERT INTO cart (item_id, c_code, quantity) 
                            VALUES ( ?, ?, ?)") ;
                // inserting a record
                $stm->execute(
                    array(
                        // ':cart_itemId' => $_POST['cart_itemId'], 
                        // ':qty' => $_POST['cart_qty'], 
                        $id, $c_code, $qty
                    )
                );
            }
        }
    }catch (PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    }
    header('location:cart.php');
?>