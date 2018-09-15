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

	//$str_sql="select COUNT(songTitle),songTitle,songSinger from song group by songTitle,songSinger ORDER BY COUNT(songTitle)  DESC";



	


	$song_title_array=array();
	$counter=0;
	
	//parse from sql
	$str_sql="select COUNT(songTitle),songTitle,songSinger,albumID,songID from song group by songTitle,songSinger ,albumID";
	echo $str_sql."<br/>";
	$result = mysql_query($str_sql,$linkID);

	while($resultArray = mysql_fetch_array($result)){
				
		$copy_amount = $resultArray[0];
		
		if($copy_amount>1){
			$song_title_array[$counter]['title'] 	= $resultArray[1];
			$song_title_array[$counter]['singer']	= $resultArray[2];
			$song_title_array[$counter]['albumID'] 	= $resultArray[3];
			$song_title_array[$counter]['ID'] 		= $resultArray[4];
			$counter+=1;
		}
	}

	for($i=0;$i<$counter;$i++){
		$str_sql="select songID from song
			where songTitle='".$song_title_array[$i]['title'].
			"' and songSinger= '".$song_title_array[$i]['singer'].
			"' and albumID= '".$song_title_array[$i]['albumID']."'";
		echo $str_sql."<br/>";
		$result= mysql_query($str_sql,$linkID);
		$resultArray = mysql_fetch_array($result);
		$tmp_ID=$resultArray[0];
		echo "ID: ".$tmp_ID."<br/>";
		while($resultArray = mysql_fetch_array($result)){
			$str_sql="DELETE FROM song WHERE songID =".$resultArray[0];
	  		echo $str_sql."<br/>";
			//mysql_query($str_sql,$linkID);
		
		}

	}
	

	


?>