<?php

class markup{

	function add_input($type,$name,$value=null,$hostreq=null){

		echo '<input type="'.$type.'" name="'.$name.'" ' .$value.'" ' .$hostreq. '/>';


	}

	function add_img($img,$class=null){

		echo '<img src="'.$img.'" '.$class.'/>';
	}

	function add_select($option,$opt){

		echo '<select>';
		foreach($option as $opt)
		{
			echo '<option value="'.$opt.'">'.$opt.'</option>';
		}
		echo '</slect>';

	}


}
?>