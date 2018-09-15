<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<title>單曲查詢</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script>
	$(function() {
		<?php
			include_once("availableTags.php");
			availableTags("songTitle");
		?>
		$( "#input" ).autocomplete({
		  source: availableTags
		});
	});
	</script>
	<script>
		function f(e) {
			// keyCode = 13 = enter
			if (e.keyCode == 13) {
				var textInput = document.getElementById("input").value;
				document.getElementById("form").submit();
			}
		}
	</script>
	<link type="text/css" rel="stylesheet" href="jqcloud.css" />
	<link type="text/css" rel="stylesheet" href="bar.css" />
	<link type="text/css" rel="stylesheet" href="input.css" />
	<link type="text/css" rel="stylesheet" href="a.css" />
	<script type="text/javascript" src="jqcloud-0.2.10.js"></script>
	<?php
		include_once('trimBrackets.php');
		include_once("db.php");
		// 讀取所有歌手, 創作量圖表
		// 愛用詞彙
		if(array_key_exists('input',$_GET)){
			$q = $_GET['input'];
			// 查詢是否有這個歌手
			$sql = 'select seggLyric from song where song.songTitle = "' . $q . '"';
			//$sql = 'select * from album';
			//echo $sql.'<br>';
			$result = mysqli_query($linkid,$sql);
			$resultarray = mysqli_fetch_array($result);
			$r = array();
			$max = 0;
			while($resultarray!=null){
				//echo $resultarray[0];
				$tokens = preg_split("/\r\n|\n|\r|%/", $resultarray[0]);
				
				foreach($tokens as $key => $token){
					if(mb_strlen($token)<=1)
						continue;
					if($token=='')
						continue;
					if(array_key_exists($token,$r))
						$r[$token] += 1;
					else
						$r[$token] = 1;
					if($max<$r[$token])
						$max=$r[$token];
				}
				$resultarray = mysqli_fetch_array($result);	
			}
			// to new 
			$index=0;
			$tempName = array();
			$tempCount = array();
			
			// to js
			$count = 0;
			echo '<script type="text/javascript">';
				echo 'var words = [';
				foreach ($r as $key => $value){
					echo '{text:"';
					echo str_replace('\n\r','',$key).'", weight:';
					echo $value;
					echo '},';
					$resultarray = mysqli_fetch_array($result);
				}
				echo ']';
			echo '</script>';
			
			// [ {text='',weight=} , {} , ... ]
		}	
	?>
	<script type="text/javascript">
		$(function(){
			// 同時隨機幫每一個標籤加上 r1, r2, r3 的 className
			$("#c").jQCloud(words, {
				delayedMode: true, 
				randomClasses: 3
			});
		});
	</script>
</head>
<body>
	<!-- 以下Query面板 -->
	<form id="form" name="form" method="get">
		<input id="input" name="input" placeholder="輸入單曲名稱" type="text" onkeypress="f(event)"></input>
	</form>
	<?php
		include_once('db.php');
		include_once('trimBrackets.php');
	?>
	
	<!-- 候選歌曲清單 -->
	<?php
		include_once('db.php');
		include_once('trimBrackets.php');
		if(array_key_exists('input',$_GET)){
			$sql = 'select * from song join album on song.albumID = album.albumID where song.songTitle = "' . $q . '"';
			$result = mysqli_query($linkid,$sql);
			$resultarray = mysqli_fetch_array($result);
			$r = array();
			$max = 0;
			echo '<h1>《'.$q ."》的可能結果</h1><br>";
			while($resultarray!=null){
				$buttonName = "演唱：".$resultarray['songSinger']." | 專輯：".$resultarray['albumName']
				." | 作詞：".$resultarray['lyricWriter'];
				echo '<a class="button" href="song.php?input='.$q.'&id='.$resultarray['songID'].'">'.$buttonName.'</a>';
				$resultarray = mysqli_fetch_array($result);	
			}
		}
	?>
	
	<div style="width: 100%;">
	<?php
	/*單曲查詢
歌曲metadata
歌曲名稱/作詞/作曲
jieba切過--->?
魔鏡連結
youtube外掛
該曲的歌手創作年表(標出單曲)
該曲的詞家創作年表(標出單曲)*/
		// 歷年創作
		if(!array_key_exists('id',$_GET))
			return;
		echo "<hr>";
		$q = $_GET['id'];
		$sql = 'select * from song join album on song.albumID = album.albumID where songID = '.$q;
		//$sql = 'select * from album';
		//echo $sql.'<br>';
		$result = mysqli_query($linkid,$sql);
		$resultarray = mysqli_fetch_array($result);
		// 歌曲名稱/作詞/作曲
		echo '<h1>';
		echo $resultarray['songTitle'].'<br>';
		echo '唱:'.$resultarray['songSinger'].'/專輯:'.$resultarray['albumName'].'<br>';
		
		echo'詞:'.$resultarray['lyricWriter'].'/曲:'.$resultarray['musicWriter'].'<br>';
		echo '</h1>';
		// 歌詞
		echo '<p>';
		echo str_replace('\n','<br>',$resultarray['lyric']).'<br>';
		echo '</p>';
		echo '<a class="button" href="'.$resultarray['songUrl'].'">魔鏡歌詞網：'.$resultarray['songTitle'].'</a>'
	?>
	</div>
	<div style="float:left;width: 49%;">
	<?php
	/*
		// 愛用詞彙
		if(!array_key_exists('id',$_GET))
			return;
		$q = $_GET['input'];
		// 查詢是否有這個歌手
		$sql = 'select seggLyric from song where song.songTitle = "' . $q . '"';
		//$sql = 'select * from album';
		//echo $sql.'<br>';
		$result = mysql_query($sql);
		$resultarray = mysql_fetch_array($result);
		$r = array();
		$max = 0;
		while($resultarray!=null){
			//echo $resultarray[0];
			$tokens = explode( '%', $resultarray[0] );
			foreach($tokens as $key => $token){
				if($token=='')
					continue;
				if(array_key_exists($token,$r))
					$r[$token] += 1;
				else
					$r[$token] = 1;
				if($max<$r[$token])
					$max=$r[$token];
			}
			$resultarray = mysql_fetch_array($result);	
		}
		// to new 
		$index=0;
		$tempName = array();
		$tempCount = array();
		arsort($r);
		foreach ($r as $key => $value){
				if($key!='0000')
					$tempName[$index] = $key.'('.$value.')';
				else
					$tempName[$index] = '年分不詳'.'('.$value.')';
				$tempCount[$index] = ceil(($value*100)/$max);//ceil($value*100/$max);
				$index++;
		}
		
		//echo $_GET['input'];
		include_once('strip.php');
		stripGraph($q." 愛用詞彙",$tempName,$tempCount);
		// strip graph
		*/
	?>
	</div>
	<div style="float:right;width: 49%;">
		<div id="c" style="width: 100%; height: 500px;"></div>
	</div>
</body>
</html>