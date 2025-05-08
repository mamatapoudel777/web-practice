<?php
setcookie("car","tata",time()+86400);
print_r($_COOKIE);
if(!isset($_COOKIE["car"])){
echo "cookie 'car' is set!";
echo "cookie is:".$_COOKIE["car"];
}
else{
echo "cookie is not set";
}
?>