
<?php
//var_dump($_SERVER['REQUEST_URI']);
if (false !== strpos($_SERVER['REQUEST_URI'], 'guestbook')){
	include "GuestBook.php";
	}else if ($_SERVER['REQUEST_URI']=='/'){
	include "index_View.php";
	}

/*function makecoffee($types = array("капуччино"), $coffeeMaker = NULL)
{
    //$device = is_null($coffeeMaker) ? "вручную" : $coffeeMaker;
    return "Готовлю чашку ".join(", ", $types)." $device.\n";
}
echo makecoffee();
echo makecoffee(array("капуччино", "лавацца"), "в чайнике");

function drink($alcohol=водка,$tea){
	$propouse=is_null($alcohol)?"выпить":"напиться";
return "Когда мне плохо, я хочу". $propous".join(", ", $alcohol);

}
echo drink();*/