<?php
//var_dump($_POST);
//exit();

define( 'DB_PATH', 'db.txt' );
//var_dump($newMessage);
$newMessage = $_POST;
//date_default_timezone_get("Europe/Kiev");
//var_dump($unixTime['time']);
 //$unixTime['time']=time();
 //array_unshift( $allMessages, $unixTim);

 // echo json_encode(['result' => 0]);
 // exit();
 //var_dump($newMessage['nameGroup']);

if( $newMessage['nameGroup'] != '' && $newMessage['emailGroup'] != '' && $newMessage['textGroup'] != '' ) {
 //var_dump(file_get_contents( DB_PATH ));
	if( file_exists( DB_PATH) && file_get_contents( DB_PATH ) != NULL ) { 

		$allMessages = json_decode ( file_get_contents( DB_PATH ), true );
  //var_dump($newMessage);
//date_default_timezone_get("Europe/Kiev");
//var_dump($unixTime['time']);
 //$unixTime['time']=time();
		var_dump($allMessages);
		//var_dump($newMessage);

		$allMessages = array_unshift($allMessages, $newMessage);

 //var_dump($allMessages);
	}
	else {
		$allMessages = [$newMessage];
		
	}
	$res = file_put_contents( DB_PATH, json_encode( $allMessages ) );
	
}

if(
	isset($_SERVER['HTTP_X_REQUESTED_WITH']) 
	&& !empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
	&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
	) {
 // Если к нам идёт Ajax запрос, то ловим его
	echo json_encode( [ 'result' => (int)$res ] );
exit;
}

include "GuestBookVeiw.php";




 