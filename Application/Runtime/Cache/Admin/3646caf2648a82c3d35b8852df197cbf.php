<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>查看用户</title>
	<link rel="stylesheet" type="text/css" href="/elearning/Application/Admin/Public/Css/public.css" />
</head>
<body>
	<table class="table" border=1>
		<tr>
			<th style="text-align:center;">用户id</th>
			<th style="text-align:center;">用户昵称</th>
			<th style="text-align:center;">密码</th>
			<th style="text-align:center;">大学</th>
		</tr>
		<?php if(is_array($user)): foreach($user as $key=>$v): ?><tr>
				<td align="center"><?php echo ($v["id"]); ?></td>
				<td align="center"><?php echo ($v["username"]); ?></td>
				<td align="center"><?php echo ($v["password"]); ?></td>
				<td align="center"><?php echo ($v["university"]); ?></td>
			</tr><?php endforeach; endif; ?>
	</table>
</body>
</html>