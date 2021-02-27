<?php
    // session_start();
    include_once "db_connection.php";
    try {
        $database = new Connection();
        $dbConn = $database->openConnection();
            
        if(isset($_POST["add_order"])) {
            $c_code = $_POST['c_code'];
            $c_phone = $_POST['c_phone'];
            $c_address1 = $_POST['c_address1'];
            $c_address2 = $_POST['c_address2'];
            $c_zip = $_POST['c_zip']
            $c_email = $_POST['c_email'];
            $c_name = $_POST['c_name'];
            $total_amount = $_POST['total_amount'];
            $total_qty = $_POST['sum_qty'];
            $order_date = date("Y-m-d");
            $deliTime = $_POST['deliTime'];
            $deliDate = $_POST['deliDate'];
            $itemIDs = $_POST['itemIDs'];
            $quantities = $_POST['quantities'];

            $test="SELECT MAX(order_no) as cnt FROM ordering";
            $stmt=$dbConn->prepare($test);
            $stmt->execute();
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            $order_no=$row['cnt']+1;
            
            $st1 = $dbConn->prepare("INSERT INTO ordering (order_no, c_code, order_date, payment_type, status, sum_quantity, total_amount, delivery_fees, deli_code, date) 
                            VALUES (?, ?, ?, '銀行振り', '未代', ?, ?, 700, ?, ?)") ;
                // inserting a record
            $st1->execute(
                array(
                    $order_no, $c_code, $order_date, $total_qty, $total_amount, $deliTime,  $deliDate
                )
            );

            // $O_no = $dbConn->lastInsertId();
            // echo $O_no;
            // $_SESSION['lastInsertedOrderNo'] = $O_no;

            $index = 0;
            while($index < Count($itemIDs)){
                $itemId = $itemIDs[$index];
                $qty = $quantities[$index];
                $st2 = $dbConn->prepare("INSERT INTO order_details (item_id, order_no, quantity) VALUES (?, ?, ?)");
                $st2->execute(array($itemId, $order_no, $qty));
                
                $st3 = $dbConn->prepare("UPDATE item SET stock = stock-?  WHERE `item_id` = ?");
                // $update_st->bindParam( ":update_id", $update_id, PDO::PARAM_STR);
                // $update_st->bindParam( ":quantity", $quantity, PDO::PARAM_INT);
                $st3->execute(array($qty, $itemId));

                $del_sql = "DELETE FROM cart WHERE `item_id` = ?" ;
                $st4 = $dbConn->prepare($del_sql);
                $st4->execute(array($itemId));

                $index++;
            }

            // $cnt=0;
            // if($cnt==0){
				mb_language("Japanese"); 
				mb_internal_encoding("UTF-8"); 
				ini_set( "SMTP", "10.64.144.9" );
				
				$to = '19jy0216@jynet.jec.ac.jp'; 
				$header = "MIME-Version: 1.0\n";
				$header .= "Content-Transfer-Encoding: 7bit\n";
				$header .= "Content-Type: text/plain; charset=ISO-2022-JP\n";
				$header .= "From:19jy0100@jynet.jec.ac.jp"; 
				$subject = "【株式会社Charmclo】ご注文お礼（銀行振り込み）";
				
				$body = $c_name . "様\n"; 
				$body .= "このたびはご注文いただき誠にありがとうございます。\n";
				$body .= "数ある店舗の中から当店をお選びいただき、\n";
				$body .= "誠にありがとうございます。\n";
				$body .= "以下の内容でご注文をお受けいたしましたので \n";
				$body .= "ご確認をお願いいたします。\n";
				$body .= "＜注文情報＞\n";
				$body .= "------------------------------------------\n";
				$body .= "[注文番号]". $order_no."\n";
				$body .= "[お支払方法]". $c_name."\n";
				$body .= "[配送方法] 宅配便\n";
				$body .= "[お届け先] ご本人様宛 \n";
				$body .= "〒".$c_zip."\n";
				$body .= $c_address1.$c_address2."\n";
				$body .= "――――――――――――――――――――――\n";
					
				// $totalamount = $total_amount;
			// 	$cnt++;
			// }
            try {
                $i=0;
                while($i < Count($itemIDs)){
                    $itemID = $itemIDs[$i];
                    $order_item_sql = "SELECT item_name, quantity FROM item i WHERE item_id = ?";
                    $st4 = $dbConn->prepare($order_item_sql);
                    // $st4->bindParam( ":c_code", $c_code, PDO::PARAM_INT);
                    $st4->execute([$itemID]);
                    foreach ($st4->fetchAll() as $row4) {
                        $body .= "購入品:{$data['item_name']} \n";
			            $body .= "------------------------------------------ \n";
                    } 
                    $i++;
                }
            }catch (PDOException $e) {
                echo "There is some problem in connection: " . $e->getMessage();
            }
			$body .= "個数：{$total_qty}個 \n";
			$body .= "------------------------------------------ \n";
		
            $body .= "注文合計：".$totalamount."(円)(送料込み、税込み) \n";
            $body .= "------------------------------------------ \n";
            $body .= "＜振込口座＞ \n";
            $body .= "電子銀行または日専銀行　CharmClo支店 \n";
            $body .= "普通口座　2645123 \n";
            $body .= "口座名　　チャームクロ \n";
            $body .= "-------------------------------\n";
            $body .= "別途振込み手数料は、恐れ入りますがご負担くださいませ。\n";
            $body .= "入金確認後、商品を発送いたします。\n";
            $body .= "（平日15時までのご入金確認となります）\n";
            $body .= "※ご注文を頂いてから一週間以内にお支払いください。\n";
            $body .= "お買い求めいただきました商品を無事にお届けできるよう \n";
            $body .= "細心の注意を払ってまいります。 \n";
            $body .= "商品到着まで、どうぞよろしくお願いいたします。 \n";
            $body .= "----------------------------------------------------\n";
            $body .= "Charmcloショップ \n";
            $body .= "URL：http://www.***.co.jp \n";
            $body .= "営業日：月～金08：00～23：30 \n";
            $body .= "定休日：土日祝 \n";
            $body .= "定休日にいただいたご連絡に関しましては \n";
            $body .= "翌営業日にご回答させていただきます。 \n";
            $body .= "株式会社CharmClo \n";
            $body .= "住所：〒169-0073 東京都新宿区百人町　　1-25-4 \n";
            $body .= "TEL：+070 (8001) 8011-5822　／　FAX：03-****-**** \n";
            $body .= "店舗連絡先:info@charmclo.com \n";
            $body .= "---------------------------------------------------- \n";

            // if(mb_send_mail($to, $subject, $body,$header)){
            //     header("location:javascript:history.back(-1)");
            // }else{
            //     header('location:bankPayment.php');
            // }
            
            header("Location: javascript:history.back(-1)");
        }
    }catch (PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    }
?>