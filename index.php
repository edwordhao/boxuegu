<?php

    //$_SEVRVER  返回一个数组,里面包含很多的信息,有url上面的信息
    //var_dump($_SERVER);

    //"PATH_INFO"  是获取url当中 php后面的 路径, 也就是用户输入的模块名和文件名..返回的是 字符串
    //$pathInfo = $_SERVER["PATH_INFO"];
    //echo $pathInfo;
    //echo substr($pathInfo, 1);

    //var_dump(explode("/", $pathInfo));
    //把获取到的用户输入的路径信息,转换成数组
    //数组中的第一个元素, 就是用户传进来的模块名
    //数组中的第二个元素,就是用户传进来的文件名
    //explode 是php里面通过某个值去截取字符串.返回一个数组
    //$pathArr = explode("/", substr($pathInfo, 1));

   //include  后面跟上路径,可以通过php打开一个文件
    //include "/views/dashboard/index.html";

    //根据用户传进来的路径信息,动态拼接成文件的路径,把文件include进来
    //include "/views/".$pathArr[0]."/".$pathArr[1].".html";


    //给pathInfo设置一个默认值,当用户不传路径信息的时候,有一个默认的跳转路径
    $pathInfo = "/dashboard/index";
    ///判断 $_SERVER 里面有没有 PATH_INFO 这个键
    if(array_key_exists("PATH_INFO", $_SERVER)){
        //如果有的话, 获取$_SERVER 里面 PATH_INFO这个键里面的值;
        $pathInfo = $_SERVER["PATH_INFO"];
    }
    // 把$pathInfo 里面的值,转换成一个数组,得到用户输入的 模块名以及文件名
    $pathArr = explode("/", substr($pathInfo, 1));

    if(count($pathArr) == 2){
        // 根据用户传进来的信息,动态拼接成文件的路径,把文件include起来
        include "/views/".$pathArr[0]."/".$pathArr[1].".html";
    } else {
        include "/views/dashboard/".$pathArr[0].".html";
    }




?>