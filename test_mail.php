<?php
try{
    $server_name="10.64.144.9";
    $db_name="19jygr06";
    $user_name="19jygr06";
    $user_pass="19jygr06";
    $dsn="sqlsrv:server=$server_name;database=$db_name";
    $pdo=new PDO($dsn,$user_name,$user_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

}catch(PDOException $e){
    print "接続エラー!:".$e->getMessage();
    exit();
}
?>

<?php
	
	
	try{
	    $sql="SELECT ordering.order_no,ordering.payment_type,ordering.oc_zip,ordering.o_address1,ordering.o_address2,item.item_name,ordering.sum_quantity,ordering.total_amount,ordering.o_custname
				FROM ordering inner join order_details on ordering.order_no =order_details.order_no INNER JOIN item ON order_details.item_id=item.item_id WHERE order_details.order_no= 2";
		
        $stmt= $pdo->prepare($sql);
        $stmt->execute(); // SQL文を実行

		$cnt=0;
   		while($data = $stmt->fetch(PDO::FETCH_ASSOC)){
			//print_r($data);	
			if($cnt==0){
				mb_language("Japanese"); 
				mb_internal_encoding("UTF-8"); 
				ini_set( "SMTP", "10.64.144.9" );
				
				$to = '19jy0216@jynet.jec.ac.jp'; 
				$header = "MIME-Version: 1.0\n";
				$header .= "Content-Transfer-Encoding: 7bit\n";
				$header .= "Content-Type: text/plain; charset=ISO-2022-JP\n";
				$header .= "From:19jy0100@jynet.jec.ac.jp"; 
				$subject = "【株式会社Charmclo】ご注文お礼（銀行振り込み）";
				
				$body = $data['o_custname'] . "様\n"; 
				$body .= "このたびはご注文いただき誠にありがとうございます。\n";
				$body .= "数ある店舗の中から当店をお選びいただき、\n";
				$body .= "誠にありがとうございます。\n";
				$body .= "以下の内容でご注文をお受けいたしましたので \n";
				$body .= "ご確認をお願いいたします。\n";
				$body .= "＜注文情報＞\n";
				$body .= "------------------------------------------\n";
				$body .= "[注文番号]". $data['order_no']."\n";
				$body .= "[お支払方法]". $data['o_custname']."\n";
				$body .= "[配送方法] 宅配便\n";
				$body .= "[お届け先] ご本人様宛 \n";
				$body .= "〒".$data['oc_zip']."\n";
				$body .= $data['o_address1'].$data['o_address2']."\n";
				$body .= "――――――――――――――――――――――\n";
					
				$totalamount = $data['total_amount'];
				$cnt++;
			}
			$body .= "購入品:{$data['item_name']} \n";
			$body .= "------------------------------------------ \n";
			$body .= "個数：{$data['sum_quantity']}個 \n";
			$body .= "------------------------------------------ \n";
		}
		
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

		if(mb_send_mail($to, $subject, $body,$header)){
	    	 header("location:javascript:history.back(-1)");
	    }else{
	  		 header('location:bankPayment.php');
	  	}
    }catch(PDOException $e){
        print"SQL実行エラー!:".$e->getMessage();
        exit();
    }
   
  
?>