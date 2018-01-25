<?php

//开启缓冲区，php.ini也可以配置（默认开启）
ob_start();
echo '11123123ss';
// file_put_contents('index.shtml',ob_get_contents());
//页面显示是先通过缓冲区再输出的
//清空缓冲区之后页面不会有echo的输出
// ob_clean();

file_put_contents('index.shtml',ob_get_clean());
