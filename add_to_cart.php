<?php 
    session_start();
    include_once "db_connection.php";
    try {
        $database = new Connection();
        $db = $database->openConnection();
            
        if(isset($_POST["add_to_cart"])) {
            $id = $_POST['cart_itemId'];
            $c_code = $_SESSION['c_code'];

            $sql = "SELECT stock FROM item WHERE item_id = ?";
            $prepare = $db->prepare ( $sql );
            $prepare->execute ( array($id));
            $stock_result = $prepare->fetch ( PDO::FETCH_ASSOC );
            $stock = $stock_result['stock'];
            if($stock > 0){   
                    // echo $id;
                $stm = $db->prepare("INSERT INTO cart (item_id, c_code, quantity) 
                                VALUES ( ?, ?, 1)") ;
                    // inserting a record
                $stm->execute(
                    array(
                        // ':cart_itemId' => $_POST['cart_itemId'], 
                        $id, $c_code
                    )
                );
                header("Location: cart.php");
            }else{
                header("Location: javascript:history.back(-1)");
            }
            
        }
    }catch (PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    }
?>