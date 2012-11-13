<?php
/*
 *delete all data in ad table and  dump data from ad.txt into ad table
 *
 */

// read data from txt
if(!isset($_GET['del']))
{
echo '<h2><font color="#ff0000">All AD  data will be delete</font> ,click <a href="?del">here</a> to continue<h2>';
exit();

}
$file="ad.txt";
$fp=fopen($file,'r');
$arr_lines=array();
while(!feof($fp))
{
	$line=trim(fgets($fp));
	if(strlen($line))
	{
		if($line['0']!=='#')
		{
			$arr_lines[]=$line;
		}
	}

}
fclose($fp);
$arr_to_ins=array();

foreach($arr_lines as $v){
	$arr_row=explode('||',$v);

	//image process
	if($arr_row['0']=='image')
	{
		$row_db=array(
				'type'=>'image',
				'slot'=>$arr_row['1'],
				'weight'=>rand(10,20),
				'enabled'=>0,
				'url'=>$arr_row['2'],
				'title'=>$arr_row['3'],
				'image'=>$arr_row['4'],
				'text'=>$arr_row['5'],
				'weight' => $arr_row['6'],
			     );

	$arr_to_ins[]=$row_db;
	}
//text process
	if($arr_row['0']=='text'){
		$row_db=array(
				'type'=>'text',
				'slot'=>$arr_row['1'],
				'weight'=>rand(10,20),
				'enabled'=>0,
				'url'=>$arr_row['2'],
				'title'=>$arr_row['3'],
				'text'=>$arr_row['4'],
				'weight' => $arr_row['5'],
			);	


	$arr_to_ins[]=$row_db;
}
//elem process
	if($arr_row['0']=='elem'){
		$row_db=array(
				'type'=>'elem',
				'slot'=>$arr_row['1'],
				'weight'=>rand(10,20),
				'enabled'=>0,
				'url'=>$arr_row['2'],
				'title'=>$arr_row['3'],
				'image'=>$arr_row['4'],
				'resource_id'=>$arr_row['5'],
				'weight' => $arr_row['6'],
			);	


	$arr_to_ins[]=$row_db;
}
//maga process
	if($arr_row['0']=='maga'){
		$row_db=array(
				'type'=>'maga',
				'slot'=>$arr_row['1'],
				'weight'=>rand(10,20),
				'enabled'=>0,
				'title'=>$arr_row['2'],
				'text'=>$arr_row['3'],
				'resource_id' => $arr_row['4'],
				'weight' => $arr_row['5'],
			);	


	$arr_to_ins[]=$row_db;
}


}


//push data into db

$con=mysql_connect('db1','root','');
mysql_select_db('magazine',$con);
mysql_set_charset('utf8',$con);
$table='ad_ads';

//Truncate table
mysql_query("truncate $table");
echo "Table $table has been truncated !<br><br>";

//
$count=0;
foreach($arr_to_ins as $row){
$query=sprintf('INSERT INTO `%s` (`%s`) VALUES ('."'".'%s'."'".')', $table, implode("`, `", array_keys($row)), implode("', '", $row));
mysql_query($query);
echo mysql_affected_rows()." Row inserted<br>";
$count++;
//echo $query."<br>";
}
echo "<br>$count Rows inserted in all";
//var_dump($con);
