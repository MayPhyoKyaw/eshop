<?php
    // session_start();
    include_once "db_connection.php";
    try {
        $database = new Connection();
        $dbConn = $database->openConnection();
            
        if(isset($_POST["add_ordering"])) {
            $c_code = $_POST['c_code'];
            $c_phone = $_POST['c_phone'];
            $c_address1 = $_POST['c_address1'];
            $c_address2 = $_POST['c_address2'];
            $c_email = $_POST['c_email'];
            $c_name = $_POST['c_name'];
            $total_amount = $_POST['total_amount'];
            $total_qty = $_POST['sum_qty'];
            $order_date = date("Y-m-d");
            $deliTime = $_POST['deliTime'];
            $deliDate = $_POST['deliDate'];
            $itemIDs = $_POST['itemIDs'];
            $quantities = $_POST['quantities'];

            $st1 = $dbConn->prepare("INSERT INTO ordering (c_code, oc_phone, o_address1, o_address2, o_email, o_custname, order_date, payment_type, status, sum_quantity, total_amount, delivery_fees, deli_code, date) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, 'コンビニ', '未代', ?, ?, 700, ?, ?)") ;
                // inserting a record
            $st1->execute(
                array(
                    $c_code, $c_phone, $c_address1, $c_address2, $c_email, $c_name, $order_date, $total_qty, $total_amount, $deliTime,  $deliDate
                )
            );

            $O_no = $dbConn->lastInsertId();
            // echo $no;
            // $_SESSION['lastInsertedOrderNo'] = $O_no;

            $index = 0;
            while($index < Count($itemIDs)){
                $itemId = $itemIDs[$index];
                $qty = $quantities[$index];
                $st2 = $dbConn->prepare("INSERT INTO order_details (item_id, order_no, quantity) VALUES (?, ?, ?)");
                $st2->execute(array($itemId, $O_no, $qty));
                
                $st3 = $dbConn->prepare("UPDATE item SET stock = stock-?  WHERE `item_id` = ?");
                // $update_st->bindParam( ":update_id", $update_id, PDO::PARAM_STR);
                // $update_st->bindParam( ":quantity", $quantity, PDO::PARAM_INT);
                $st3->execute(array($qty, $itemId));

                $del_sql = "DELETE FROM cart WHERE `item_id` = ?" ;
                $st4 = $dbConn->prepare($del_sql);
                $st4->execute(array($itemId));

                $index++;
            }
            
            header("Location: javascript:history.back(-1)");
        }
    }catch (PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    }
?>