<?php
class app{

	function __construct($DB){
		$this->DB=$DB;
	}

	private $DB;

	public function get_appLink($id){
		$sql="SELECT applink from apps where appID=:ID";

		try {
			$SEL=$this->DB->prepare($sql);
			$SEL->bindParam(':ID',$id);
			$SEL->execute();
			$row= $SEL->fetch(PDO::FETCH_BOTH);
			return $row['applink'];
		} catch (PDOException $e) {
			echo $e->getMessage();

		}
	}

	public function get_appLinkAllPresentId(){
		$sql="SELECT appID from apps";
		try {
			$SEL=$this->DB->prepare($sql);
			$SEL->execute();
			$row= $SEL->fetch(PDO::FETCH_BOTH);
			return $row['appID'];
		} catch (PDOException $e) {
			echo $e->getMessage();

		}

	}


}