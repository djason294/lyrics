<?php
	ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
	error_reporting(E_ALL & ~E_NOTICE);
?>

<?php
	set_time_limit(0);
	ini_set('memory_limit', '3072M');

	$linkID=mysql_connect('localhost','root','');
	mysql_select_db('mojim');
	mysql_query("SET NAMES 'utf8'");

	$str_sql="select albumID,albumYear from album";
	echo $str_sql."<br/>";
	$result = mysql_query($str_sql,$linkID);

	$song_title_array=array();
	$counter=0;
	
	while($resultArray = mysql_fetch_array($result)){
		$song_title_array[$counter]['albumID'] 		= $resultArray[0];
		$song_title_array[$counter]['albumYear']= $resultArray[1];
		$counter+=1;
	}
	$sql_all="";
	for($i=0;$i<$counter;$i++){

		$str_sql="UPDATE `song` SET songYear = '".$song_title_array[$i]['albumYear']."' WHERE albumID='".$song_title_array[$i]['albumID'] ."';";
		//mysql_query($str_sql,$linkID);
		//echo $str_sql."<br/>";
		$sql_all=$sql_all.$str_sql;
		//echo $i."<br/>";
		if(($i%5==0)){
			
			mysqli::multi_query($linkID,$sql_all);
			echo $sql_all."<br/>";
			//if($i==10000)echo $sql_all."<br/>";
			$sql_all="";

		}
	}
	
	mysqli::multi_query($linkID,$sql_all);
	


	//select songID from album join song on song.albumID = album.albumID where song.lyricWriter = "林夕" GROUP BY album.albumYear ORDER BY album.albumYear



?>