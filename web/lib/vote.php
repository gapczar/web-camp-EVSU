<?php
	class vote{

		function __construct($DB){
			$this->DB=$DB
		}

		private $DB
		private $userID;
		private $appID;

		public function vote($userID,$appID){

			$query="INSERT INTO vote SET appID=:AP,userID=:ID";
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

		public function validateVoteNums($userID){

			$sql="SELECT COUNT(*) as cnt FROM vote WHERE userID=:UI";
			$INS=$this->DB->prepare($sql);
			$INS->bindParam(':UI',$this->userID);

			$return=$INS->execute();
			return=$return;
		}

	}