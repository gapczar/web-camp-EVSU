<?php
	class user{
		function __construct(PDO $DB) {
			$this->DB=$DB;
		}

		private $DB;

		private $username;
		private $password;
		private $email;

		public function set_username($username){
			$this->username=$username;
		}

		public function set_password($password){
			$this->password=sha1($password);
		}
	
		public function set_email($email){
			$this->email=$email;
		}
		

		public function isEmail($email){
			if (filter_var($email, FILTER_VALIDATE_EMAIL))
				return true;
			else 
				return false;

		}

		public function passwordMatched($password1,$password){
			if (filter_var($password==$password1))
				return true;
			else 
				return false;
		}


		public function register(){
			$query="INSERT INTO user SET username=:UN,password=:PS,email=:EM";

			$INS=$this->DB->prepare($query);
			$INS->bindParam(':UN',$this->username);
			$INS->bindParam(':PS',$this->password);
			$INS->bindParam(':EM',$this->email);
			
			if($INS->execute()){
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