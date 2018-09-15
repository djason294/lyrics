<?php

include("LIB_parse.php");
include("LIB_http.php");


$link = "http://mojim.com/twzlhc1_all.htm";
//找出歌手名稱
$web_page = http_get($target=$link,$referer="");

$meta_tag_array = parse_array($web_page['FILE'],'<ul class="s_listA"','</ul>');
for($k=0;$k<count($meta_tag_array);$k++){

$meta_tag_array2 = parse_array($meta_tag_array[$k],'<a','</a>');

for($xx=0;$xx < count($meta_tag_array2); $xx++){
		$href_attr = get_attribute($meta_tag_array2[$xx],$attribute="href");
		$title_attr = get_attribute($meta_tag_array2[$xx],$attribute="title");
		if(preg_match("/[htm]$/",$href_attr)){
			$htm = "http://mojim.com".$href_attr;
			$singer = str_replace("歌詞","",$title_attr);
			echo '"'.$htm.'",<br>';
//			echo $singer."<br>";
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