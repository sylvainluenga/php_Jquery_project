<?php
//////Functions/ by Alex sylvain Luenga///////////

function message_goto($msg, $url="login.php"){
die('<script language=javascript>alert("'.$msg.'");location=("'.$url.'");</script>');
}
function redirectto($url){
die('<script language=javascript>location=("'.$url.'");</script>');
}
function message($msg){
die('<script language=javascript>alert("'.$msg.'");</script>');
}
function alert($msg){
die('<b><center><font color=#FF0000>['.$msg.']</font></center></b>');

}

?>
