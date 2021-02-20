<?php 
    session_start();
    include_once "db_connection.php";
    try{
        $database = new Connection();
        $dbConn = $database->openConnection();

        if(isset($_POST['delete'])){
            $id = $_POST['item_id'];
            $convini = $_POST['convini'];
                echo $del_id;
            // $totalTax = (10/100*$_SESSION['final_amount']);
            // $value = $totalTax+700;
            echo $value;
            
                $sql = "SELECT (price*quantity) as amount FROM item i INNER JOIN cart c ON i.item_id = c.item_id WHERE c.item_id = ?";
                $st = $dbConn->prepare($sql);
                $st->execute([$id]);
                foreach ($st->fetchAll() as $row) {
                    $tax = 10/100*($row['amount']);
                    $_SESSION['final_amount'] = $_SESSION['final_amount'] - $row['amount'] - $tax;
                    if($_SESSION['final_amount'] == 700){
                        $_SESSION['final_amount'] = 0;
                    }
                    echo $_SESSION['final_amount'];
                }
            $del_st = $dbConn->prepare("DELETE FROM cart WHERE `item_id` = ?");
            $del_st->execute([$id]);
            echo "<meta http-equiv='refresh' content='0'>";
        } 
        header("Location: conviniPaymentConfirm.php?convini=$convini");
    } catch (PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    }
?>