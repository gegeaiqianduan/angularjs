<?php
	header("Content-type: text/html; charset=utf-8"); //若出现乱码，则查看编码规范；1.文件2.页面3.请求4.地址
    header("Access-Control-Allow-Origin:*");   //允许跨域
	
	$info = $_GET['info']?$_GET['info']:'你漂亮么';
    $ch = curl_init();
    $url = 'http://apis.baidu.com/turing/turing/turing?key=879a6cb3afb84dbf4fc84a1df2ab7319&info='.$info;
    $header = array(
        'apikey: fd004ba5fcd42d742c6c6368e8c8cb3a',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

    // var_dump(json_decode($res));
	$result = json_decode($res,true);  //将对象转换。
    echo json_encode($result);    //echo是输出，将$result对象转化json对象。
?>
