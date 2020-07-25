<?php
//API名称
$APIname='QAC_API';
// 存储数据的文件
$filename = 'sinetxt.txt';
if(!file_exists($filename)) {
    die($filename.'数据文件不存在');
} else {
	//读取资源文件
	$giturlArr = file($filename);
}
$giturlData = [];
//将资源文件写入数组
foreach ($giturlArr as $key => $value) {
	$value = trim($value);
	if (!empty($value)) {
		$giturlData[] = trim($value);
	}
}
//随机输出一张
$randKey = rand(0, count($giturlData));
$imgurl = $giturlData[$randKey];
//随机输出十张图片_后面数字可改
$randKeys = array_rand($giturlData, 500);
$imgurls = [];
foreach ($randKeys as $key) {
	$imgurls[] = $giturlData[$key];
}
//json格式
$json = array("API_name"=>"$APIname");
$returnType = $_GET['return'];
switch ($returnType) {
	//浏览器直接输出图片
	case 'img':
		$img = file_get_contents($imgurl, true);
		header("Content-Type: image/jpeg;");
		echo $img;
		break;
	//随机JSON输出10张图片
	case 'jsonpro':
		header('Content-type:text/json');
		//随机输出十张
		case 'jsonpro':
		$json['imgurls'] = $imgurls;
		echo json_encode($json,JSON_PRETTY_PRINT);
		break;
	//JSON格式输出
	case 'json':
		$json['imgurl'] = $imgurl;
		$imageInfo = getimagesize($imgurl);
		$json['width'] = "$imageInfo[0]";
		$json['height'] = "$imageInfo[1]";
		header('Content-type:text/json');
		echo json_encode($json,JSON_PRETTY_PRINT);
		break;
    //直接跳转		
	default:
		header("Location:" . $imgurl);
		break;
}
?>
