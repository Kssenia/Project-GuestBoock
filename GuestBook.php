<?php

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

$newMessage = $_POST;

function validation($data, $file, $fileList) {
	if ( file_exists($file) && file_get_contents($file) != NUll ) {
	 	$allMessages = json_decode ( file_get_contents($file), true  );
		$data['time']=date("H:i d-m-Y ",time());
		$data['filename'] = addFile($fileList);
		array_unshift($allMessages, $data);
		file_put_contents($file, json_encode( $allMessages));
		setcookie("name", $data['nameGroup'], time()+3000);
		setcookie("email", $data['emailGroup'], time()+3000);
		$_SESSION['notice'] = 'Message Saved !!!';
		include "GuestBookVeiw.php";
	} else {
 		echo "БД не найдена";
	}
}

if (
	isset($_SERVER['HTTP_X_REQUESTED_WITH']) //флажки - проверка на аджакс 
	&& !empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
	&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
) {
// Если к нам идёт Ajax запрос, то ловим его
//echo json_encode( [ 'result' => (int)$res ] );

	echo json_encode( [ 'message' => $newMessage ] );
		exit;
} else {

	define( "DB_PATH", "db.txt" );
  
	if ($newMessage['nameGroup'] != '' && 
		$newMessage['emailGroup'] != '' && 
		$newMessage['textGroup'] != '') {
		validation($newMessage, DB_PATH, $_FILES);
	} else {
		echo "Пусто";
	}
}




