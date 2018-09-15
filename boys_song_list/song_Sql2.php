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
	/*
	function startsWith($haystack, $needle) {
    // search backwards starting from haystack length characters from the end
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
	}
	*/
	function startsWith($haystack,$needle){
		
		$tmp = preg_split("/(:|：)/",$haystack);
		return trim($tmp[0]) == $needle ? true:false;
	}
	


	$f = fopen("boys_song_list.txt", "r");
	$line=0;
	while(!feof($f)) {

		//get some data
		$str = fgets($f);
		echo $str."<br>";
		//singer table

		//album table
		if(startsWith($str,"singer")){
			$albumSinger=str_replace("singer : ", "", $str);
		}else if(startsWith($str,"專輯名稱")){
			$albumName=str_replace("專輯名稱 :", "", $str);
		}else if(startsWith($str,"語言")){
			$albumLanguage=str_replace("語言 :", "", $str);
		}else if(startsWith($str,"日期")){
			$albumYear=str_replace("日期 :", "", $str);
		}else if(startsWith($str,"發行")){
			$publisherName=str_replace("發行 : ", "", $str);
		}else if(startsWith($str,"歌名")){
			$songName=str_replace("歌名 : ", "", $str);
			
			do{
				$str = fgets($f);
				$tmp="";
				//$songLyric=str_replace("歌詞:", "", $str);
				//parse 作詞作曲
				echo "start finding lyric: ".$str."<br/>";
		  		if(startsWith($str,"Link")){
					$songLink=str_replace("Link : ", "", $str);
					$songLink="https://mojim.com".$songLink;
				}else if(startsWith(trim($str),"作詞")||startsWith(trim($str),"作詞")){
		  			echo "find 作詞<br>";
		  			$tmp=preg_split("/(:|：)/",trim($str));
					$lyricWriter=trim($tmp[1]);
				}else if(startsWith(trim($str),"作曲")){
					echo "find 作曲<br>";
					$tmp=preg_split("/(:|：)/",trim($str));
					$musicWriter=trim($tmp[1]);
				}else if(($str=="/r/n")||($str=="/n")){	
					echo "=============獨到換行˙惹從下一行開始跑"."<br/>";
					do{
						echo "我要 寫歌 喔喔喔喔喔喔 ";
						$str = fgets($f);
						$lyric=$lyric.$str;
					}while(!(startsWith($str,"歌名"))&&!(trim($str)=="end"));
					
					//跳出迴圈就是結束一首歌
				}
				
				
				//找出押韻
				//切開用結疤
	
				//跳出迴圈結束一首歌
			}while((!(startsWith($str,"歌名")))&&(!(trim($str)=="end")));
			
			
			




			echo "start sql"."<br/>";
			$str_sql="select albumID from album where albumSinger='".trim($albumSinger)."' and albumName= '".trim($albumName)."'";
			echo $str_sql."<br/>";
	  		$result = mysql_query($str_sql);
	  		$resultArray = mysql_fetch_array($result);
	  		$albumID 	= $resultArray[0];
	  		

	  		$str_sql="INSERT INTO song (albumID,songTitle,songSinger, lyricWriter,musicWriter,lyric) values ('"
	  			.trim($albumID)."','"
	  			.trim($songName)."','"
	  			.trim($albumSinger)."', '"
	  			.trim($lyricWriter)."', '"
	  			.trim($musicWriter)."', '"
	  			.trim($lyric)."')";
	  		echo $str_sql."<br/>";
	  		$result = mysql_query($str_sql);

			//zerolize
	  		$albumID="";
	  		$songName="";
	  		$lyricWriter="";
	  		$musicWriter="";
	  		$lyric="";




		}else if(trim($str)=="end" && !(trim($albumName)=="")){
	  		
	  		/*
	  		$str_sql="INSERT INTO album (albumUrl,albumSinger,albumName, albumYear,albumLanguage,publisherName) values ('"
	  			.trim($albumUrl)."','"
	  			.trim($albumSinger)."','"
	  			.trim($albumName)."', '"
	  			.trim($albumYear)."-00"."', '"
	  			.trim($albumLanguage)."', '"
	  			.trim($publisherName)."')";
	  		echo $str_sql."<br/>";
	  		*/	  		
	  		

	  		$albumName="";
	  		$albumYear="";
	  		$albumLanguage="";
	  		$publisherName="";
		}else{
			echo "!!!!!!!else,error occur: ".$str."!!!!!!!!<br/>";
		}
		//song table




	  $line++;
	}
	  
	fclose($f);

?>