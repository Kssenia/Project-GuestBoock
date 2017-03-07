<?php

define( "DB_PATH", "db.txt" );

$newMessage = $_POST;

function addFile($fileList) {
	
	if (!empty($fileList)) {
		if ($fileList['userfile']['size']!=0) {
				$path = "".dirname(__FILE__).'\files\\';
				$fileName = pathinfo($fileList['userfile']['name'], PATHINFO_FILENAME)."_".uniqid().".".pathinfo($fileList['userfile']['name'], PATHINFO_EXTENSION);
				$fullPath = $path.$fileName;
				move_uploaded_file($fileList['userfile']['tmp_name'], $fullPath);
				
				
				
				return $fileName;
				
			} else {
				return "without file";
			}
		} else {
			return "file empty";
		}

}


function validation($data, $file, $fileList) {
	if ( file_exists($file) && file_get_contents($file) != NUll ) {
	 	$allMessages = json_decode ( file_get_contents($file), true  );
	 	//date_default_timezone_set("Europe/Kiev");	
		$data['time']=date("H:i d-m-Y ",time());
		$data['filename'] = addFile($fileList);
		array_unshift($allMessages, $data);
		file_put_contents($file, json_encode( $allMessages));
		

	 	// echo '<pre>';
	 	// var_dump($allMessages);
	 	// echo '</pre>';
	} else {
 		echo "БД не найдена";
	}
}

if ($newMessage['nameGroup'] != '' && 
	$newMessage['emailGroup'] != '' && 
	$newMessage['textGroup'] != '') {
	validation($newMessage, DB_PATH, $_FILES);
} else {
	echo "Пусто";
}
 






// define( "DB_PATH", "db.txt" );

// $newMessage = $_POST;

// function validation($data, $file) {
// 	if (file_exists($file) && file_get_contents($file) != NUll ) {
// 		$allMessages = json_decode ( file_get_contents($file), true  );
// 		$data['time']=date("H:i d-m-Y ",time());
// 		array_unshift($allMessages, $data);
// 		file_put_contents($file, json_encode( $allMessages));

// 		echo '<pre>';
// 	 	var_dump($allMessages);
// 	 	echo '</pre>';

// 	} else {
// 		echo "БД не найдена";
// 	}
// }


// 	if ($newMessage['nameGroup'] != '' && 
// 		$newMessage['emailGroup'] != '' && 
// 		$newMessage['textGroup'] != '') {
// 		validation($newMessage, DB_PATH );
// 	} else {
// 	echo "Пусто";
// }

// function validation($text) {
// 	echo "Доброе ";
// 	echo $text;
// }
// validation('утро всем');

// 	$a = 1;
// 	$b = 2;
// 	function Sum() {
// 		global $a, $b;
// 		$b = $a + $b;
// 		$c = $a + $b;
// 	}
// 	echo $b;

// 	function add_some_extra(&$string) {
// 		$string .= 'и кое-что еще.';
// 	}
// 	$str = 'Это строка, ';
// 	add_some_extra($str);
// 	echo $str;

	function foo(&$var)
{
    $var++;
}
function &bar()
{
    $a = 5;
    return $a;
}
foo(bar());