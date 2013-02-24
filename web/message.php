<?php

class message{

	private $msgtype;
	private $msgbody;

	function __construct($mbody,$mtype){

		$this->msgtype=$mtype;
		$this->msgbody=$mbody;

		if($this->msgtype==0)
		{

			$msg='<div id="errdiv">
					<div id="errTitle">
					ERROR:
					</div>
					<div id="errmsg">
					'.$tihs->msg;.'
					</div>
				</div>';
						
		}

		elseif($tihs->msgtype==1)
		{
			$msg='<div id="errdiv">
					<div id="errTitle">
					ERROR:
					</div>
					<div id="errmsg">
					'.$tihs->msg;.'
					</div>
				</div>';
		}

		elseif($this->msgtype==2)
		{
			$msg='<div id="errdiv">
					<div id="errTitle">
					ERROR:
					</div>
					<div id="errmsg">
					'.$tihs->msg;.'
					</div>
				</div>';

		}
	}

	function __destruct(){

		$this->msgtype=null;
		$this->msgbody-null;

	}

}
?>