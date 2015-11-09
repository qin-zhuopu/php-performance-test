<?php
$redis = new Redis();
$r = $redis->connect('10.240.0.2', 6379, 1);
if($r){
$key = $redis->incr('key');

$redis->close();
var_dump($key);
}
else{
header("HTTP/1.0 502 sys busy");
}
