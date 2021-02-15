<?php
    include_once "db_connection.php";
    try {
        $database = new Connection();
        $dbConn = $database->openConnection();
            
        if(isset($_POST["add_ordering"])) {
            $c_code = $_POST['c_code'];
            $total_amount = $_POST['total_amount'];
            $total_qty = $_POST['total_qty'];
            $order_date = date("Y-m-d");
                // echo $id;
            $stm = $dbConn->prepare("INSERT INTO ordering (order_no, c_code, order_date, sum_quantity, total_amount, delivery_fees) 
                            VALUES ( 'o1', :c_code, :order_date, :total_qty, :total_amount, 700)") ;
                // inserting a record
            $stm->execute(
                array(
                    ':c_code' => $c_code, 
                    ':order_date' => $order_date,
                    ':total_qty' => $total_qty,
                    ':total_amount' => $total_amount,
                )
            );
            header("Location:sendRegister.php?c_code=$c_code");
        }
    }catch (PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    }
?>