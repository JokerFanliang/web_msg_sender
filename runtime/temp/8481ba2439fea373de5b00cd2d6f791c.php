<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:92:"D:\phpStudy\PHPTutorial\WWW\web_msg_sender\public/../application/index\view\index\index.html";i:1539930132;}*/ ?>
<html>
	<head>
		<script type="text/javascript" src="/static/index/jquery-1.11.3.js"></script>
		<script src='http://cdn.bootcss.com/socket.io/1.3.7/socket.io.js'></script>
		<script>
		 $(document).ready(function() {
		 // 连接服务端
		 var uid="123";
		 var socket =io('http://'+document.domain+':2120');

		// 连接后登录
		 socket.on('connect',function(){
		 	socket.emit('login',uid);
		 });

		// 后端推送来消息时
		 socket.on('new_msg',function(msg){
		 	alert(msg);
		 });

		// 后端推送来在线数据时
		 socket.on('update_online_count',function(online_stat){
		 	$('#online_box').html(online_stat);
		 });

		})
		</script>
	</head>
	<body>
		<div>测试</div>
	</body>
</html>