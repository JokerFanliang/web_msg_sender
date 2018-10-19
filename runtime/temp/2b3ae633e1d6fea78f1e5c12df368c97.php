<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"D:\phpStudy\PHPTutorial\WWW\workerman\public/../application/index\view\index\index.html";i:1539928735;}*/ ?>
<html>
	<head>
		<script>
			ws = new WebSocket("ws://192.168.3.201:2346");
			ws.onopen = function() {
			    alert("连接成功");
			    ws.send('hello world');
			    alert("给服务端发送一个字符串：hello world");
			};
			ws.onmessage = function(e) {
			    alert("收到服务端的消息：" + e.data);
			};

		</script>
	</head>
	<body>
		<div>测试</div>
	</body>
</html>