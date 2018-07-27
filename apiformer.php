<?php

$table1=$_POST['table1'];
$table2=$_POST['table2'];
$controller_name=$_POST['controller_name'];
$model_name=$controller_name."_model";
$file_name_read="header.txt";
$file_name_write="./files/".$controller_name.".txt";
$file = fopen($file_name_read,"r")or die('unable to open file'.$file_name_read);
$file_write=fopen($file_name_write,"w")or die('unable to open file'.$file_name_write);
while(!feof($file))
fputs( $file_write,fgets($file));
fclose($file);
$towrite="class ".$controller_name." extends MY_Controller {\n";
$towrite.='var '."$".'table1="'.$table1.'";'.PHP_EOL;
$towrite.='var '."$".'table2="'.$table2.'";'.PHP_EOL;
$towrite.='var '.'$'.'model_name="'.$model_name.'";'.PHP_EOL;
fputs($file_write,$towrite);
$file_name_read="constructor.txt";
$file = fopen($file_name_read,"r")or die('unable to open file'.$file_name_read);
while(!feof($file))
fputs($file_write,fgets($file));
fclose($file);
fputs($file_write,PHP_EOL.PHP_EOL.PHP_EOL."//ENTER THE OTHER FUNCTIONS HERE".PHP_EOL.PHP_EOL.PHP_EOL);
$file_name_read="extra_functions.txt";
$file = fopen($file_name_read,"r")or die('unable to open file'.$file_name_read);
while(!feof($file))
fputs($file_write,fgets($file));
fclose($file);
fputs($file_write,"}");
fclose($file_write);


$file_name_read="model_final.txt";
$file_name_write="./files/".$controller_name."_model.txt";
$file = fopen($file_name_read,"r")or die('unable to open file'.$file_name_read);
$file_write=fopen($file_name_write,"w")or die('unable to open file'.$file_name_write);
$model_name=ucfirst($model_name);
$towrite="<?php".PHP_EOL."class ".$model_name." extends CI_Model{".PHP_EOL;
fputs($file_write,$towrite);
while(!feof($file))
fputs( $file_write,fgets($file));
fclose($file);




echo "done";
?> 



