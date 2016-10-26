<?php
    header("Content-type: text/html; charset=utf-8"); //若出现乱码，则查看编码规范；1.文件2.页面3.请求4.地址
    header("Access-Control-Allow-Origin:*");   //允许跨域
    $ch = curl_init();
    $url = 'http://apis.baidu.com/tngou/cook/classify?id=0';
    $header = array(
        'apikey: fd004ba5fcd42d742c6c6368e8c8cb3a',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

    // var_dump(json_decode($res));  //var_dump是类似于js里的console.table（obj）的。
    $result = json_decode($res,true);  //将对象转换。
    echo json_encode($result);    //echo是输出，将$result对象转化json对象。
?>