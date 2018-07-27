<?php
$function_name=$_POST['fName'];
$function_name="get_".$function_name;
echo $function_name;
$data_fields=$_POST['insert'];
print_r($data_fields);



$file_name_read="insert_function_starting.txt";
$file_name_write="/var/www/html/apiformer/files/insert.txt";
$file = fopen($file_name_read,"r")or die('unable to open file'.$file_name_read);
$file_write=fopen($file_name_write,"w")or die('unable to open file'.$file_name_write);
while(!feof($file))
fputs( $file_write,fgets($file));
fclose($file);
$towrite="		$"."data_fields=array(";
$towrite.=form_string_of_array($data_fields);
$towrite.=");".PHP_EOL;
fputs($file_write,$towrite);



$file_name_read="insert_function_ending.txt";
$file = fopen($file_name_read,"r")or die('unable to open file'.$file_name_read);
while(!feof($file))
fputs( $file_write,fgets($file));
fclose($file);
fclose($file_write);
echo "done";



function form_string_of_array($array)
{
	$size=sizeof($array);
	$result="";
	for($i=0;$i<$size;$i++)
	{
		$result.="'".$array[$i]."'";
		if($i!=$size-1)
		$result.=",";
	}
	return $result;

}
?>