<?php
	class DB{

		public static function connection(){
				$dns="mysql:host=localhost;dbname=apps";
				$user='root';
				$pass='root';
				try{
					$DB=new PDO($dns,$user,$pass);
					$DB->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
					return $DB;
				}
				catch(PDOException $e){
					echo 'erro->'.$e->getMessage();
				}
			}

	}

?>