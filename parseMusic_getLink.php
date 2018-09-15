<?php

include("LIB_parse.php");
include("LIB_http.php");
include("singerHtmlList.php");
$num = 5;

for($count = $num; $count < $num+1 ;$count++){

//$link = $singerHtmlList[$count];
$link = "http://mojim.com/twh100241.htm";
/*
//找出歌手名稱
$web_page = http_get($target=$link,$referer="");
$meta_tag_array = parse_array($web_page['FILE'],'<dd class="hb9">','</dd>');
$singer = remove($meta_tag_array[0],"【","】");
*/
//找出網址中的連結和歌名，並將連結存在html_array
$html_array = array();
$counter = 0 ;
$web_page = http_get($target=$link,$referer="");
$meta_tag_array = parse_array($web_page['FILE'],'<span class="hc','</span>');
for($xx=0;$xx < count($meta_tag_array); $xx++){
	$meta_tag_array2 = parse_array($meta_tag_array[$xx],'<a','</a>');
	for($j=0;$j<count($meta_tag_array2);$j++){
		$href_attr = get_attribute($meta_tag_array2[$j],$attribute="href");
//		$title_attr = get_attribute($meta_tag_array2[$j],$attribute="title");
		if(preg_match("/[htm]$/",$href_attr)){
			$htm = "http://mojim.com".$href_attr;
			$html_array[$counter] = $htm;
			$counter ++;
			echo $htm."<br>";
		}
	}
}
}

//將歌詞parse出來
function parse_lyrics($html){
	$web_page = http_get($target=$html,$referer="");
	$meta_tag_array = parse_array($web_page['FILE'],'<dt id=','</div>');
	$lyrics = remove($meta_tag_array[0],"<a","</a>");
	$lyrics = remove($lyrics,"<li","</li>");
	return $lyrics;
//	return $meta_tag_array[0];
}


?>