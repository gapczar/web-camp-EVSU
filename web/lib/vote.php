<?php
	class vote{

		function __construct($DB){
			$this->DB=$DB;
		}

		private $DB;
		private $userID;
		private $appID;

		public function set_userID($userID){
			$this->userID=$userID;
		}
		
		public function set_appID($userID){
			$this->appID=$appID;
		}


		public function vote($userID,$appID){

			$query="INSERT INTO vote SET appID=:AP,userID=:ID";
			try{
				$INS=$this->DB->prepare($query);
				$INS->bindParam(':AP',$this->userID);
				$INS->bindParam(':ID',$this->appID);
				$x=$INS->execute();
				if($x){
					return true;
				}
				else
					return false;
			}
			catch(PDOExection $e){
				echo $e->getMessage();
			}

		}

		public function validateVoteNums($userID){

			$sql="SELECT COUNT(*) as cnt FROM vote WHERE userID=:UI";
			$INS=$this->DB->prepare($sql);
			$INS->bindParam(':UI',$this->userID);

			$result=$INS->execute();
			foreach ($result as $key);
				if($key['cnt']<5)
					return true;
				else
					return false;
		}

	}