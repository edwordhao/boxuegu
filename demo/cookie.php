<?php

    var_dump($_COOKIE);
	//服务器之所以能拿到浏览器存储的cookie,是因为浏览器中的每一次请求,都会把当前域名下存储的所有的cookie信息发送给服务器.
	
    echo $_COOKIE["name"];
	setcookie("php", "shoutai");
	//服务器端设置cookie并不能直接将cookie存入浏览器,而是在请求的响应头里面添加一个内容为 Set-Cookie:php=shoutai
	//浏览器在接收到响应以后,根据响应的内容,将cookie存入浏览器
?>