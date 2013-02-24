<?php
	class user{
		function __construct(PDO $DB) {
			$this->DB=$DB;
		}

		private $DB;

		private $username;
		private $password;
		private $email;

		public function isEmail($email){
			if (filter_var($email, FILTER_VALIDATE_EMAIL))
				return true;
			else 
				return false;

		}

		public function passwordMatched($email1,$email2){
			if (filter_var($email, FILTER_VALIDATE_EMAIL))
				return true;
			else 
				return false;
		}


		public function register(){
			$query="INSERT INTO user SET username=:UN,password=:PS,email=:EM";
			$INS=$this->DB->prepare($query);
			$INS->bindParam(':FN',$this->username);
			$INS->bindParam(':LN',$this->password);
			$INS->bindParam(':ADD',$this->email);
			$x=$INS->execute();
			if($x){
				return true;
			}
			else
				return false;

		}

		public function login(){
			$sql="SELECT COUNT(*) as cnt,User_ID,UserName,Password,FirstName,LastName FROM user WHERE UserName=:UN AND Password=:PS";
			$sth=$this->DB->prepare($sql);
			$sth->bindParam(':UN',$this->UserName);
			$sth->bindParam(':PS',$this->Password);
			if($sth->execute()){
				$row= $sth->fetch(PDO::FETCH_BOTH);
				if($row['cnt']==0){
					$_SESSION['logged_in']=false;
				}
				else{
					$_SESSION['logged_in']=true;
					$_SESSION['id']=true;

				}
				// $_SESSION['User_Type']=$row[0];				
			}
		}

		public function logout(){
			unset($_SESSION['logged_in']);
			// unset($_SESSION['User_Type']);
			session_destroy();
			return true;
		}	}

?>