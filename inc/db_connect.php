<?php
try {
	require_once 'db_info.php';
	$dbh = new PDO ( DB_SERVER, USER_NAME, PASS );
	$dbh ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch ( PDOException $e ) {
	print "接続エラー!: " . $e->getMessage () . "<br/>";
	die ();
}
// Class Connection {
// 	private  $server = "mysql:host=localhost;dbname=online-shopping";
// 	private  $user = "root";
// 	private  $pass = "";
// 	private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
// 	protected $con;
	 
// 	public function openConnection() {
// 		try{
// 			$this->con = new PDO($this->server, $this->user,$this->pass,$this->options);
// 			return $this->con;
// 		}
// 		catch (PDOException $e) {
// 			echo "There is some problem in connection: " . $e->getMessage();
// 		}
// 	}
// 	public function closeConnection() {
// 		 $this->con = null;
// 	}
// }

?>