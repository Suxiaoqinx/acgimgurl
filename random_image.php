<?php
$arrayName = array(
'https://ws2.sinaimg.cn/large/0072Vf1pgy1foxkfy08umj31kw0w0nng.jpg',
'https://ws2.sinaimg.cn/large/0072Vf1pgy1foxkihz4b4j31hc0u0wux.jpg',
'https://ws3.sinaimg.cn/large/005WQYV9ly1fphw0wvlzyj31hc0u0goo.jpg',
'https://ws4.sinaimg.cn/large/0072Vf1pgy1foxk7nr5qqj31hc0u04gk.jpg',
'https://ws3.sinaimg.cn/large/0072Vf1pgy1foxk7pair6j31hc0u0000.jpg',
'https://ws4.sinaimg.cn/large/0072Vf1pgy1foxkgbgscjj31hc0u0k39.jpg',
'https://ws2.sinaimg.cn/large/0072Vf1pgy1foxk3pfp31j31hc0u0kas.jpg',
'https://ws2.sinaimg.cn/large/a15b4afegy1fnmwrzp4jaj21hc0tgqk7.jpg',
'https://ws3.sinaimg.cn/large/0072Vf1pgy1foxkjenkjaj31hc0u0dwt.jpg',
'https://ws4.sinaimg.cn/large/0072Vf1pgy1foxkg6fz2pj31hc0u0auw.jpg',
'https://ws2.sinaimg.cn/large/0072Vf1pgy1foxkcs4066j31hc0u0wrj.jpg',
'https://ws3.sinaimg.cn/large/0072Vf1pgy1foxk41fsxtj31hc0u0k3f.jpg',
'https://ws4.sinaimg.cn/large/0072Vf1pgy1foxkbwxfq0j31hc0u0h43.jpg',
'https://ws1.sinaimg.cn/large/0072Vf1pgy1foxki4cli7j31kw0w0kgr.jpg',
'https://ws2.sinaimg.cn/large/a15b4afegy1fnmwxha4eaj21hc0u0jv5.jpg',
'https://ws3.sinaimg.cn/large/005WQYV9ly1fphw0upq7ij31hc0u0ajm.jpg',
'https://ws1.sinaimg.cn/large/0072Vf1pgy1foxlo6rle0j31hc0u0wx0.jpg',
'https://ws2.sinaimg.cn/large/0072Vf1pgy1foxkf1iizuj31hc0u0dy7.jpg',
'https://ws1.sinaimg.cn/large/0072Vf1pgy1foxk744kw6j31hc0u0ni5.jpg',
'https://ws2.sinaimg.cn/large/0072Vf1pgy1foxk7lqroij31kw0w0nkz.jpg',
'https://ws2.sinaimg.cn/large/0072Vf1pgy1foxli41klcj31hc0u0asv.jpg',
'https://ws4.sinaimg.cn/large/0072Vf1pgy1foxlnyr3elj31hc0u0nis.jpg',
'https://ws2.sinaimg.cn/large/0072Vf1pgy1foxkfwib13j31hc0u0ndf.jpg',
'https://ws2.sinaimg.cn/large/a15b4afegy1fnmwxiu6llj21hc0u0agb.jpg',
'https://ws2.sinaimg.cn/large/0072Vf1pgy1foxkg94nzbj31kw0w0hcf.jpg',
'https://ws2.sinaimg.cn/large/0072Vf1pgy1fodqin80wgj31kw15w1l0.jpg',
'https://ws2.sinaimg.cn/large/0072Vf1pgy1foxkj2ashuj31kw0w0hcp.jpg',
'https://ws3.sinaimg.cn/large/0072Vf1pgy1foxk6q3dx1j31hc0u0gtw.jpg',
'https://ws2.sinaimg.cn/large/0072Vf1pgy1foxkd5scpnj31kw0w0h93.jpg',
'https://ws2.sinaimg.cn/large/0072Vf1pgy1foxkcf9mfnj31hc0u0h7p.jpg',
'https://ws1.sinaimg.cn/large/0072Vf1pgy1foxkd13vc7j31kw0w0txx.jpg',
'https://ws3.sinaimg.cn/large/005WQYV9ly1fphw0skk7ij31hc0u0adn.jpg',
'https://ws1.sinaimg.cn/large/0072Vf1pgy1foxk6m2xufj31hc0u0aru.jpg',
'https://ws3.sinaimg.cn/large/0072Vf1pgy1foxkg877vyj31hc0u0ndz.jpg',
'https://ws4.sinaimg.cn/large/0072Vf1pgy1foxlhbqhasj31hc0u0qjw.jpg',
'https://ws3.sinaimg.cn/large/0072Vf1pgy1foxlnpnp2nj31hc0u0h2d.jpg',
'https://ws4.sinaimg.cn/large/0072Vf1pgy1foxkiv5gzwj31hc0u0ncg.jpg',
'https://ws3.sinaimg.cn/large/005WQYV9ly1fphw12urd5j31hc0u0dje.jpg',
'https://ws1.sinaimg.cn/large/0072Vf1pgy1foxlohgkwfj31hc0u0k69.jpg',
'https://ws2.sinaimg.cn/large/0072Vf1pgy1foxkfughl3j31hc0u0to8.jpg',
'https://ws2.sinaimg.cn/large/006r4FMjgy1focmfblf0zj31hc0u0jxb.jpg',
'https://ws1.sinaimg.cn/large/0072Vf1pgy1foxlnvil7zj31hc0u07lt.jpg',
'https://ws1.sinaimg.cn/large/0072Vf1pgy1foxkfrmrlgj31hc0u0wt1.jpg',
'https://ws2.sinaimg.cn/large/0072Vf1pgy1foxlni3jwbj31hc0u0ard.jpg',
'https://ws1.sinaimg.cn/large/0072Vf1pgy1foxkjiky1hj31hc0u0nhq.jpg',
'https://ws3.sinaimg.cn/large/005WQYV9ly1fphw0vv2ehj31hc0u0aeg.jpg',
'https://ws3.sinaimg.cn/large/0072Vf1pgy1foxkd4s1rxj31hc0u0qo0.jpg',
);
$id = count($arrayName)-1;
$ids = rand(0,$id);
//Result Generate
$result['code']='200';
$result['imgurl']=''.$arrayName[$ids].'';
 
//Type Choose
$type=$_GET['return'];
switch ($type)
{   
    
//JSON
case 'json':
header('Content-type:text/json');
echo json_encode($result, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
break;
 
//302 Redirect
case '302':
header("Location:".$result['imgurl']);
break;
    
//IMG
default:
header("Location:".$result['imgurl']);
break;
}
