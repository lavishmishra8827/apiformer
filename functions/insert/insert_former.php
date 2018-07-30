<?php
$function_name=$_POST['fName'];
$function_name="get_".$function_name;
echo $function_name;
$data_fields=$_POST['insert'];
print_r($data_fields);



$file_name_read="insert_function_starting.txt";
$file_name_write="../../files/insert.txt";
$file = fopen($file_name_read,"r")or die('unable to open file'.$file_name_read);
$file_write=fopen($file_name_write,"w")or die('unable to open file'.$file_name_write);
while(!feof($file))
fputs( $file_write,fgets($file));
fclose($file);
fclose($file_write);
write_values($data_fields,$file_name_write,"data");
// $towrite="		$"."data_fields=array(";
// $towrite.=form_string_of_array($data_fields);
// $towrite.=");".PHP_EOL;
// fputs($file_write,$towrite);



$file_write=fopen($file_name_write,"a")or die('unable to open file'.$file_name_write);
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
function write_values($array,$file_name_write,$name)
{
	$file1=fopen($file_name_write,"a")or die('unable to open file'.$file_name_write);
	$towrite="";
	foreach ($array as $value) {
		$towrite.="		$".$name."['".$value."']="."$"."this->post('".$value."');".PHP_EOL;
	}
	//$towrite.=$name."['cluster_id']="."$"."this->post('cluster_id');".PHP_EOL;
	fputs($file1,$towrite);
	fclose($file1);
}
?>