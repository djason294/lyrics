<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	
	<link type="text/css" rel="stylesheet" href="jqcloud.css" />
	<link type="text/css" rel="stylesheet" href="bar.css" />
	<link type="text/css" rel="stylesheet" href="input.css" />
	<script type="text/javascript" src="jquery-3.0.0.min.js"></script>
	<script type="text/javascript" src="jqcloud-0.2.10.js"></script>
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
		程式說明
		<div id="c" style="width:100%;height:300px;border: 1px solid #ccc;"></div>
		<div style="float:left;width: 49%;">
			歌手排行
			<div id="sa" style="float:left; width: 100%; height: 350px; border: 1px solid #ccc;"></div>
		</div>
		<div style="float:right;width: 49%;">
			詞家排行
			<div id="la" style="float:right; width: 100%; height: 350px; border: 1px solid #ccc;"></div>
		</div>
		<div style="float:left;width: 49%;">
			歌手雲
			<div id="s" style="float:left; width: 100%; height: 350px; border: 1px solid #ccc;"></div>
		</div>
		<div style="float:right;width: 49%;">
			詞家雲
			<div id="l" style="float:right; width: 100%; height: 350px; border: 1px solid #ccc;"></div>
		</div>
	</div>
</body>
</html>