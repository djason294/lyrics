<?php

include("LIB/LIB_parse.php");
include("LIB/LIB_http.php");
include("boys_album_list.php");
include("girls_album_list.php");
include("groups_album_list.php");
set_time_limit(0);
ini_set('memory_limit', '3072M');

$myfile = fopen("boys_album_list_meta.txt", "w") or die("Unable to open file!");

for($k=0;$k<count($boys);$k++){
//$link = $singerHtmlList[$count];
$link = $boys[$k];

//找出網址中的連結和歌名，並將連結存在html_array

$web_page = http_get($target=$link,$referer="");
$meta_tag_array = parse_array($web_page['FILE'],'<dd class="hb2','</dd>');
for($i=0;$i<count($meta_tag_array);$i++){
	$tmp = $boys[$k]."\r\n";
	fwrite($myfile,$tmp);
	$albumName = return_between($meta_tag_array[$i],'<span class="hc1">','</span>',EXCL);
	$albumName = strip_tags($albumName);
	$albumReleaseMeta = return_between($meta_tag_array[$i],'<span class="hc2">','</span>',EXCL);
	$albumReleaseMeta = preg_split("<br>",$albumReleaseMeta);
	$tmp =  $albumName."\r\n";
	fwrite($myfile,$tmp);
	$tmp = preg_replace("/[<|>]/","",$albumReleaseMeta[0]);
	$tmp = $tmp."\r\n";
	fwrite($myfile,$tmp);
	$tmp =  preg_replace("/[<|>|\/]/","",$albumReleaseMeta[1]);
	$tmp = $tmp."\r\n";
	fwrite($myfile,$tmp);
	$tmp =  return_between($albumReleaseMeta[2],'<font color="#E0C2AD">','</font>',EXCL);
	$tmp = $tmp."\r\n";
	fwrite($myfile,$tmp);
	
	$tmp = return_between($meta_tag_array[$i],'<span class="hc3">','</span>',EXCL);
	$songList = parse_array($tmp,'<a','</a>');
	for($j=0;$j<count($songList);$j++){
		$HLink = get_attribute($songList[$j],$attribute="href");
		if(preg_match("/twy/",$HLink)){
			$tmp2 = get_attribute($songList[$j],$attribute="title");
			$tmp2 =  preg_replace("/歌詞/","",$tmp2);
			fwrite($myfile,$tmp2);
			$tmp2 =  $HLink."\r\n";
			fwrite($myfile,$tmp2);
		}
	}
	$tmp = return_between($meta_tag_array[$i],'<span class="hc4">','</span>',EXCL);
	$songList = parse_array($tmp,'<a','</a>');
	for($j=0;$j<count($songList);$j++){
		$HLink = get_attribute($songList[$j],$attribute="href");
		if(preg_match("/twy/",$HLink)){
			$tmp2 = get_attribute($songList[$j],$attribute="title");
			$tmp2 =  preg_replace("/歌詞/","",$tmp2);
			fwrite($myfile,$tmp2);
			$tmp2 =  $HLink."\r\n";
			fwrite($myfile,$tmp2);
		}
	}
		$tmp = return_between($meta_tag_array[$i],'<span class="hc5">','</span>',EXCL);
	$songList = parse_array($tmp,'<a','</a>');
	for($j=0;$j<count($songList);$j++){
		$HLink = get_attribute($songList[$j],$attribute="href");
		if(preg_match("/twy/",$HLink)){
			$tmp2 = get_attribute($songList[$j],$attribute="title");
			$tmp2 =  preg_replace("/歌詞/","",$tmp2);
			fwrite($myfile,$tmp2);
			$tmp2 =  $HLink."\r\n";
			fwrite($myfile,$tmp2);
		}
	}
	fwrite($myfile,"end\r\n");
}
$meta_tag_array = parse_array($web_page['FILE'],'<dd class="hb3','</dd>');
for($i=0;$i<count($meta_tag_array);$i++){
//	$meta_tag_array2 = parse_array($meta_tag_array[$i],'<span class="hb2','</dd>');
	
	$albumName = return_between($meta_tag_array[$i],'<span class="hc1">','</span>',EXCL);
	$albumName = strip_tags($albumName);
	$albumReleaseMeta = return_between($meta_tag_array[$i],'<span class="hc2">','</span>',EXCL);
	$albumReleaseMeta = preg_split("<br>",$albumReleaseMeta);
	$tmp =  $albumName."\r\n";
	fwrite($myfile,$tmp);
	$tmp = preg_replace("/[<|>]/","",$albumReleaseMeta[0]);
	$tmp = $tmp."\r\n";
	fwrite($myfile,$tmp);
	$tmp =  preg_replace("/[<|>|\/]/","",$albumReleaseMeta[1]);
	$tmp = $tmp."\r\n";
	fwrite($myfile,$tmp);
	$tmp =  return_between($albumReleaseMeta[2],'<font color="#E0C2AD">','</font>',EXCL);
	$tmp = $tmp."\r\n";
	fwrite($myfile,$tmp);
	
	$tmp = return_between($meta_tag_array[$i],'<span class="hc3">','</span>',EXCL);
	$songList = parse_array($tmp,'<a','</a>');
	for($j=0;$j<count($songList);$j++){
		$HLink = get_attribute($songList[$j],$attribute="href");
		if(preg_match("/twy/",$HLink)){
			$tmp2 = get_attribute($songList[$j],$attribute="title");
			$tmp2 =  preg_replace("/歌詞/","",$tmp2);
			fwrite($myfile,$tmp2);
			$tmp2 =  $HLink."\r\n";
			fwrite($myfile,$tmp2);
		}
	}
	$tmp = return_between($meta_tag_array[$i],'<span class="hc4">','</span>',EXCL);
	$songList = parse_array($tmp,'<a','</a>');
	for($j=0;$j<count($songList);$j++){
		$HLink = get_attribute($songList[$j],$attribute="href");
		if(preg_match("/twy/",$HLink)){
			$tmp2 = get_attribute($songList[$j],$attribute="title");
			$tmp2 =  preg_replace("/歌詞/","",$tmp2);
			fwrite($myfile,$tmp2);
			$tmp2 =  $HLink."\r\n";
			fwrite($myfile,$tmp2);
		}
	}
		$tmp = return_between($meta_tag_array[$i],'<span class="hc5">','</span>',EXCL);
	$songList = parse_array($tmp,'<a','</a>');
	for($j=0;$j<count($songList);$j++){
		$HLink = get_attribute($songList[$j],$attribute="href");
		if(preg_match("/twy/",$HLink)){
			$tmp2 = get_attribute($songList[$j],$attribute="title");
			$tmp2 =  preg_replace("/歌詞/","",$tmp2);
			fwrite($myfile,$tmp2);
			$tmp2 =  $HLink."\r\n";
			fwrite($myfile,$tmp2);
		}
	}
	fwrite($myfile,"end\r\n");
}
}
fclose($myfile);

/*

//將歌詞parse出來
function parse_lyrics($html){
	$web_page = http_get($target=$html,$referer="");
	$meta_tag_array = parse_array($web_page['FILE'],'<dt id=','</div>');
	$lyrics = remove($meta_tag_array[0],"<a","</a>");
	$lyrics = remove($lyrics,"<li","</li>");
	return $lyrics;
//	return $meta_tag_array[0];
}
*/

?>