<?php
$function_name=$_POST['fName'];
$function_name="get_".$function_name;
echo $function_name;
$select_condition_fields=$_POST['select'];
print_r($select_condition_fields);
$where_condition_fields=$_POST['where'];
print_r($where_condition_fields);
$file_name_read="select_function_starting.txt";
$file_name_write="/var/www/html/apiformer/files/select.txt";
$file = fopen($file_name_read,"r")or die('unable to open file'.$file_name_read);
$file_write=fopen($file_name_write,"w")or die('unable to open file'.$file_name_write);
while(!feof($file))
fputs( $file_write,fgets($file));

$towrite="		$"."where_condition_fields=array(";
$towrite.=form_string_of_array($where_condition_fields);
$towrite.=");".PHP_EOL;
fputs($file_write,$towrite);

$towrite="		$"."select_condition_fields=array(";
$towrite.=form_string_of_array($select_condition_fields);
$towrite.=");".PHP_EOL;
fputs($file_write,$towrite);


$file_name_read="select_function_ending.txt";
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

