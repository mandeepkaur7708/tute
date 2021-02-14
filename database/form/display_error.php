<?php


	function isAnyError($errorBag,$field, $type = ''){
		if($type == ''){
			if(isset($errorBag[$field])){
				return '<span style="color: red">'.$field.' field is required</span>';
			}else{
				return '';
			}
		}elseif($type == 'radio' || $type == 'checkbox'){
			if(isset($_POST['submit']) && !isset($_POST[$field])){
				return '<span style="color: red">'.$field.' field is required</span>';
			}else{
				return '';
			}
		}
	}


	function editValue($record, $key, $type = '', $value = ''){
		if($type == 'radio' || $type == 'checkbox'){
			if(isset($record[$key])){
				if($record[$key] == $value){
					return 'checked';
				}else{
					return '';
				}
			}
		}else{
			return (isset($record[$key]))?$record[$key]:'';
		}
	}

?>