<?php
	ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
	error_reporting(E_ALL & ~E_NOTICE);
?>

<?php

	require_once "/jieba-php-master/src/vendor/multi-array/MultiArray.php";
	require_once "/jieba-php-master/src/vendor/multi-array/Factory/MultiArrayFactory.php";
	require_once "/jieba-php-master/src/class/Jieba.php";
	require_once "/jieba-php-master/src/class/Finalseg.php";

?>
<?php
	set_time_limit(0);
	ini_set('memory_limit', '3072M');

	$linkID=mysql_connect('localhost','root','');
	mysql_select_db('mojim');
	mysql_query("SET NAMES 'utf8'");

	use Fukuball\Jieba\Jieba;
	use Fukuball\Jieba\Finalseg;
	Jieba::init(array('mode'=>'default','dict'=>'big'));
	Finalseg::init();

	
	$str_sql="select songID, lyric from song where type=0 and songID >70050";
	//echo $str_sql."<br/>";
	$result = mysql_query($str_sql,$linkID);
	while($resultArray = mysql_fetch_array($result)){
				
		$id = $resultArray[0];
		echo $id;
		$lyric = $resultArray[1];
		
		$seg_list = Jieba::cut($lyric);
		$segglyric="";
		for ($i=0;$i<count($seg_list);$i++){
			$segglyric=$segglyric.trim($seg_list[$i])."%";
			
		}
		//echo $segglyric."<br/>";
		$str_sql="Update song SET seggLyric = '".trim($segglyric)."' WHERE songID = ".$id;
	  	//echo $str_sql."<br/>";
	  	mysql_query($str_sql,$linkID);
	}
	
?>
