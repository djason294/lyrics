<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	
	<link type="text/css" rel="stylesheet" href="jqcloud.css" />
	<link type="text/css" rel="stylesheet" href="bar.css" />
	<link type="text/css" rel="stylesheet" href="input.css" />
	<script type="text/javascript" src="jquery-3.0.0.min.js"></script>
	<script type="text/javascript" src="jqcloud-0.2.10.js"></script>
	<?php
		include_once('trimBrackets.php');
		include_once("db.php");
		// 讀取所有歌手, 創作量圖表
		$sql = 'select count(*), songSinger from song GROUP BY songSinger ORDER BY count(*) DESC limit 200';
		$result = mysqli_query($linkid,$sql);
		$resultarray = mysqli_fetch_array($result);
		
		// to js
		$count = 0;
		echo '<script type="text/javascript">';
			echo 'var words = [';
			while($resultarray!=null){
				if(strcmp($resultarray['songSinger'],'')==0){
					$resultarray = mysqli_fetch_array($result);
					continue;
				}
				echo '{text:"';
				echo trimBrackets(str_replace('\n','',$resultarray['songSinger'])).'", weight:';
				echo $resultarray['count(*)'].', url:';
				echo '"'.'singer.php?input='.$resultarray['songSinger'].'"';
				echo '},';
				$resultarray = mysqli_fetch_array($result);
			}
			echo ']';
		echo '</script>';
		// [ {text='',weight=} , {} , ... ]
	?>
	<?php
		// 讀取所有詞家, 創作量圖表
		$sql = 'select count(*), lyricWriter from song GROUP BY lyricWriter ORDER BY count(*) DESC limit 200';
		$result = mysqli_query($linkid,$sql);
		$resultarray = mysqli_fetch_array($result);
		
		// to js
		$count = 0;
		echo '<script type="text/javascript">';
			echo 'var words2 = [';
			while($resultarray!=null){
				if(strcmp($resultarray['lyricWriter'],'')==0){
					$resultarray = mysqli_fetch_array($result);
					continue;
				}
				echo '{text:"';
				echo trimBrackets(str_replace('\n','',$resultarray['lyricWriter'])).'", weight:';
				echo $resultarray['count(*)'].', url:';
				echo '"'.'lyricist.php?input='.$resultarray['lyricWriter'].'"';
				echo '},';
				$resultarray = mysqli_fetch_array($result);
			}
			echo ']';
		echo '</script>';
		// [ {text='',weight=} , {} , ... ]
	?>
	<script type="text/javascript">
		$(function(){
			// 同時隨機幫每一個標籤加上 r1, r2, r3 的 className
			$("#s").jQCloud(words, {
				delayedMode: true, 
				randomClasses: 3
			});
			$("#l").jQCloud(words2, {
				delayedMode: true, 
				randomClasses: 3
			});
		});
	</script>
	<title>中文歌曲曲風分析</title>
</head>
<body>
	<?php
		include_once('bar.php');
	?>
	<div style="width:90%;height:20px;margin:0 auto;">
		
		<div id="c" style="width:100%;">
			<h1>程式說明</h1>
		</div>
		<div style="float:left;width: 49%;">
			<br>
			<div id="sa" style="width: 80%;">
				<?php
					$sql = 'select count(*),songSinger from song GROUP BY songSinger ORDER BY count(*) desc limit 10';
					//$sql = 'select * from album';
					//echo $sql.'<br>';
					$result = mysqli_query($linkid,$sql);
					$resultarray = mysqli_fetch_array($result);
					$tempName = array();
					$tempCount = array();
					$all = 0;
					$max=0;
					$index = 0;
					while($resultarray!=null){
						//echo $resultarray[0].'<br>';
						//echo $resultarray[1].'<br>';
						//$temp[]
						$all = $all + $resultarray[0];
						if($max<$resultarray[0])
							$max = $resultarray[0];
						$tempName[$index] = trimBrackets($resultarray[1])
						.' ('.$resultarray[0].')';
						$tempCount[$index] = $resultarray[0];
						$index++;
						$resultarray = mysqli_fetch_array($result);
					}
					for($i=0;$i<$index;$i++)
						$tempCount[$i] = ceil(($tempCount[$i]*100)/$max);
					// 若有query出現則貼出內容
					//echo $_GET['input'];
					include_once('strip.php');
					stripGraph("歌手排行",$tempName,$tempCount);
					// strip graph
				?>
			</div>
		</div>
		<div style="float:right;width: 49%;">
			<br>
			<div id="la" style="width: 80%;">
				<?php
					$sql = 'select count(*),lyricWriter from song where lyricWriter != "" GROUP BY lyricWriter ORDER BY count(*) desc limit 10';
					//$sql = 'select * from album';
					//echo $sql.'<br>';
					$result = mysqli_query($linkid,$sql);
					$resultarray = mysqli_fetch_array($result);
					$tempName = array();
					$tempCount = array();
					$all = 0;
					$max=0;
					$index = 0;
					while($resultarray!=null){
						//echo $resultarray[0].'<br>';
						//echo $resultarray[1].'<br>';
						//$temp[]
						$all = $all + $resultarray[0];
						if($max<$resultarray[0])
							$max = $resultarray[0];
						$tempName[$index] = $resultarray[1].' ('.$resultarray[0].')';
						$tempCount[$index] = $resultarray[0];
						$index++;
						$resultarray = mysqli_fetch_array($result);
					}
					for($i=0;$i<$index;$i++)
						$tempCount[$i] = ceil(($tempCount[$i]*100)/$max);
					// 若有query出現則貼出內容
					//echo $_GET['input'];
					include_once('strip.php');
					stripGraph("詞家排行",$tempName,$tempCount);
					// strip graph
				?>
			</div>
		</div>
		<div style="float:left;width: 49%;">
			<br>
			<div id="s" style="width: 100%; height: 350px;"></div>
		</div>
		<div style="float:right;width: 49%;">
			<br>
			<div id="l" style="width: 100%; height: 350px;"></div>
		</div>
	</div>
</body>
</html>