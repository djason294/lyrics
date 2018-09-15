<?php
	ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
	error_reporting(E_ALL & ~E_NOTICE);
?>

<?php
	set_time_limit(0);
	ini_set('memory_limit', '3072M');

	$linkid = mysqli_connect("localhost","root","","mojin");
	//mysql_select_db('mojin');
	mysqli_query($linkid,'SET NAMES UTF8');
	mb_internal_encoding('utf-8');

	//$str_sql="select COUNT(songTitle),songTitle,songSinger from song group by songTitle,songSinger ORDER BY COUNT(songTitle)  DESC";



	


	$song_title_array=array();
	$counter=0;
	
	//parse from sql
	$str_sql="select COUNT(songTitle),songTitle,songSinger,songID from song group by songTitle,songSinger";
	//find out all pairs of reparse_song
	echo $str_sql."<br/>";
	$result = mysqli_query($linkid,$str_sql);

	while($resultArray = mysqli_fetch_array($result)){
				
		$copy_amount = $resultArray[0];
		
		if($copy_amount>1){
			echo "title".$song_title_array[$counter]['title']."<br/>";
			$song_title_array[$counter]['title'] 	= $resultArray[1];
			$song_title_array[$counter]['singer']	= $resultArray[2];
			$song_title_array[$counter]['ID'] 		= $resultArray[3];
			$counter+=1;
		}
	}
	//for each pairs
	for($i=0;$i<$counter;$i++){

		$str_sql="select songID,songYear from song
			where songTitle='".$song_title_array[$i]['title'].
			"' and songSinger= '".$song_title_array[$i]['singer'].
			"' and songID>=    '".$song_title_array[$i]['ID'].
			"' order by songYear asc";
		echo $str_sql."<br/>";
		$result= mysqli_query($linkid,$str_sql);
		
		

		$song_year_album=array();
		$resultAA = mysqli_fetch_array($result);
		$orgin_ID=$resultAA[0];

		while($resultA = mysqli_fetch_array($result)){
			$ID=$resultA[0];
			//$song_year_album[$count]['year']=$result[1];
			
			$str_sql="Update song SET reparse = '".$orgin_ID."' where songID = '".$ID."' and reparse is null";
			echo $str_sql."<br/>";
			mysqli_query($linkid,$str_sql);
		}

		
	}



	/*
	for($i=0;$i<$counter;$i++){
		$str_sql="select songYear from song
			where songTitle='".$song_title_array[$i]['title'].
			"' and songSinger= '".$song_title_array[$i]['singer'].
			"' and albumID= '".$song_title_array[$i]['albumID']."'";
		echo $str_sql."<br/>";
		$result= mysql_query($str_sql,$linkID);
		$resultArray = mysql_fetch_array($result);
		$tmp_ID=$resultArray[0];
	}

	while($resultArray = mysql_fetch_array($result)){
		$id_listji3
		$str_sql="UPDATE song SET reparse = ".$."WHERE ";
  		echo $str_sql."<br/>";
		mysql_query($str_sql,$linkID);
	}

	while($resultArray = mysql_fetch_array($result)){
		$id_list
		$str_sql="UPDATE song SET reparse = ".$."WHERE ";
  		echo $str_sql."<br/>";
		mysql_query($str_sql,$linkID);
	}
	
	*/

	


?>