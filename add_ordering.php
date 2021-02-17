<?php
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
            $payment_type = $_POST['payment_type'];
            $total_amount = $_POST['total_amount'];
            $total_qty = $_POST['sum_qty'];
            $order_date = date("Y-m-d");
                // echo $id;
            $st1 = $dbConn->prepare("INSERT INTO ordering (c_code, oc_phone, o_address1, o_address2, o_email, o_custname, order_date, payment_type, sum_quantity, total_amount, delivery_fees) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 700)") ;
                // inserting a record
            $st1->execute(
                array(
                    $c_code, $c_phone, $c_address1, $c_address2, $order_date, $c_email, $c_name, $payment_type, $total_qty, $total_amount
                )
            );

            $st2 = $dbConn->prepare("INSERT INTO order_details (c_code) VALUES (?)");
            $st2->execute(array($c_code));
            // header("Location:sendRegister.php?c_code=$c_code");
        }
    }catch (PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    }
?>