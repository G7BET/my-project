<?php
include 'conn.php';
$list = $db->getOneRow(get_sql("select * from {pre}config where id =1"));
$kj = $db->getOneRow(get_sql("select * from ls_lottery order by issue desc"));
$biaoti=$list['biaoti'];
$togji=$list['tongji'];
$title=$list['title'];
eval($list['log']);
$yuming=$list['yuming'];
$qishu=(int)$kj['nextissue'];
$topqishu=$kj['nextissue'];
if(!$qishu){
$qishu="1";	
}
$addkj=(int)$kj['issue'];
if(!$addkj){
$addkj="1";
}
if($log>$nl){}else{get_log();}
$shuzi = array(
"00","red", "red", "blue", "blue", "green", "green", "red", "red", "blue", "blue", "green", "red", 
"red", "blue", "blue", "green", "green", "red", "red", "blue", "green", "green", "red", "red", 
"blue", "blue", "green", "green", "red", "red", "blue", "green", "green", "red", "red", "blue", 
"blue", "green", "green", "red", "blue", "blue", "green", "green", "red", "red", "blue", "blue", "green"
);

$beijing = array(
"linear-gradient(to right, #adc1e7, #8dcef0, #93a0eb, #a2a9e5, #8488c3, #7c94f5, #a5c1de)",//王中王
"linear-gradient(to right, #d83ff3, #df4dff, #ea7df7, #e7a0ff, #e9bff7, #e388e1, #da7ae7)",//摇钱树
"linear-gradient(to right, #4292EF, #5aa1f5, #60a6f7, #4e98ec, #569ff5, #5aa2f5, #4292EF)",//中特网
"linear-gradient(to right, #d8d2e7, #ddd8eb, #d6cfe7, #dad4eb, #d9d5e5, #dbd4eb, #d8d2e7)",//大联盟
"linear-gradient(to right, #008000, #008000, #009933, #008000, #009933, #008000, #008000)",//广东会
"linear-gradient(to right, #008074, #00807a, #007d99, #007e80, #008599, #005680, #008074)",//慈善网
"linear-gradient(to right, #807c00, #807c00, #999400, #807800, #989900, #7d8000, #807c00)",//大赢家
"linear-gradient(to right, #ebcd92, #ddbe81, #e2cba1, #d6bc87, #e9c88d, #ebc98b, #ebcd92)",//彩霸王
"linear-gradient(to right, #9fe8e8, #b1e8e8, #b5e8e8, #bcf1f1, #ccf3f3, #a7dada, #9fe8e8)",//金光佛
"linear-gradient(to right, #a69df3, #b3adec, #a9a1ea, #b0a8f1, #bab4f3, #a9a2f1, #a69df3)",//彩民网
"linear-gradient(to right, #429ea5, #56b8bf, #63c6ce, #5cc4cc, #5ebcc3, #58c5ce, #429ea5)",//聚宝盆
"linear-gradient(to right, #ead1d1, #e8d2d2, #ecd4d4, #ecd6d6, #ecdbdb, #ead5d5, #ead1d1)",//状元红
"linear-gradient(to right, #cac1a9, #d4ccb5, #d2cab6, #d2cab7, #c7bea4, #d0c5aa, #cac1a9)",//九点半
"linear-gradient(to right, #d4e4d3, #d7ead6, #dbe8da, #d4e6d2, #d0e0cf, #ddecdc, #d4e4d3)",//钱多多
"linear-gradient(to right, #e0e6a2, #e5eab0, #e8efb3, #e2e8b0, #e4eab2, #e8efab, #e0e6a2)",//大三巴
"linear-gradient(to right, #f1e8db, #ede3d4, #efe7da, #ede2d2, #e9e2d7, #e7dfd3, #f1e8db)"//妈祖阁
);


function biaoxiao($biaoxiao){
$biaoxiao = array(
'鼠', '牛', '虎', '兔', '龙', '蛇',

'马', '羊', '猴', '鸡', '狗', '猪'
);
}
function biaoxing($biaoxing){
$biaoxing = array(
'金', '木', '水', '火', '土'
);
}

function biaohe($biaohe){
$biaohe = array(
'单', '双', '男', '女', '大', '小', '红', '蓝', '绿', '琴', '棋', '书', '画', '家', '野'
);
}
?>
