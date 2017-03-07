<?php


$newMessage = $_POST;
$newMessage['time'] = date("H:i d-m-Y ",time());
$newMessage['result']=1;
if(
	isset($_SERVER['HTTP_X_REQUESTED_WITH']) 
	&& !empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
	&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
	) {
	echo json_encode($newMessage);
	// Если к нам идёт Ajax запрос, то ловим его
	/*echo json_encode( [ 'result' => (int)$res ] );
	$newMessage['time'] = date('d.m.Y H:i', $newMessage['time']);
	echo json_encode( [ 'message' => $newMessage ] );
	*/}



	/*
if(
 isset($_SERVER['HTTP_X_REQUESTED_WITH']) 
 && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
 && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
) {
 // Если к нам идёт Ajax запрос, то ловим его
 $newMessage['time'] = date('d.m.Y H:i', $newMessage['time']);
 echo json_encode( [ 'message' => $newMessage ] );
 exit;
}
	*/