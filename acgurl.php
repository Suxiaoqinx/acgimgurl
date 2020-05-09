<?php
// 存储数据的文件
$filename = 'sinetxt.txt';
if(!file_exists($filename)) {
    die($filename . ' 数据文件不存在');
}
// 读取整个数据文件
$data = file_get_contents($filename);
// 按换行符分割成数组
$data = explode(PHP_EOL, $data);
// 随机获取一行索引
$result = $data[array_rand($data)];
// 去除多余的换行符（解决获取空值问题）
$result = str_replace(array("\r","\n","\r\n"), '', $result);
$size_arr = array('large', 'mw1024', 'mw690', 'bmiddle', 'small', 'thumb180', 'thumbnail', 'square');
$size = !empty($_GET['size']) ? $_GET['size'] : 'large' ;
$server = rand(1,4);
if(!in_array($size, $size_arr)){
	$size = 'large';
}
$url = 'http://tva'.$server.'.sinaimg.cn/'.$size.'/'.$result.'.jpg';
//解析JSON
$result=array("code"=>"200","acgurl"=>"$url");
$type=$_GET['return'];
switch ($type)
{   
//格式解析                             
case 'json':
$path = "$url";
$pathinfo = pathinfo($path);
$imageInfo = getimagesize($url);  
$result['width']="$imageInfo[0]";  
$result['height']="$imageInfo[1]";
$result['size']="$pathinfo[extension]"; 
header('Content-type:text/json');
$url=str_replace("http:","https:", $result);
echo json_encode($url);
break;
//不输出图片链接直接显示                             
case 'img':
$img = file_get_contents($url,true);
header("Content-Type: image/jpeg;");
echo $img;
break;
//IMG
default:
header("Location:".$result['acgurl']);
break;
}
$type1=$_GET['ssl'];
switch ($type1)
{   
//HTTPS图片输出                             
case 'true':
$url=str_replace("http:","https:", $result['acgurl']);
header("Location:".$url);
break;
}
?>
