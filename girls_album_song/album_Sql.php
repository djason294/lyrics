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
		
		$tmp = preg_split("/:/",$haystack);
		return trim($tmp[0]) == $needle ? true:false;
	}
	


	$f = fopen("girls_album_list_meta.txt", "r");
	$num=1;
	$line=0;
	while(!feof($f)) {

		//get some data
		$str = fgets($f);
		echo $str."<br>";
		//singer table

		//album table
		if(startsWith($str,"URL")){
			$albumUrl=str_replace("URL :", "", $str);
		}else if(startsWith($str,"singer")){
			$albumSinger=str_replace("singer : ", "", $str);
		}else if(startsWith($str,"專輯名稱")){
			$albumName=str_replace("專輯名稱 :", "", $str);
		}else if(startsWith($str,"語言")){
			$albumLanguage=str_replace("語言 :", "", $str);
		}else if(startsWith($str,"日期")){
			$albumYear=str_replace("日期 :", "", $str);
		}else if(startsWith($str,"發行")){
			$publisherName=str_replace("發行 : ", "", $str);
		}else if(trim($str)=="end" && !(trim($albumName)=="")){
	  		echo "start sql"."<br/>";
	  		$str_sql="INSERT INTO album (albumUrl,albumSinger,albumName, albumYear,albumLanguage,publisherName,type) values ('"
	  			.trim($albumUrl)."','"
	  			.trim($albumSinger)."','"
	  			.trim($albumName)."', '"
	  			.trim($albumYear)."-00"."', '"
	  			.trim($albumLanguage)."', '"
	  			.trim($publisherName)."', '"
	  			.$num."')";
	  		echo $str_sql."<br/>";
	  		mysql_query($str_sql);
	  		$id=mysql_insert_id();
	  		echo $id;
	  		//$albumSinger="";
	  		//$albumUrl="";
	  		$albumName="";
	  		$albumYear="";
	  		$albumLanguage="";
	  		$publisherName="";
		}else{
			echo "else: ".$str."<br/>";
		}
		//song table
		




	  $line++;
	}
	  
	fclose($f);

?>