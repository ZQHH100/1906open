<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="{{url('/open/store')}}" method="post" >
		@csrf
		<table>
			<tr>
				<td>公司名</td>
				<td><input type="text" name="c_name"></td>
			</tr>
			<tr>
				<td>法人</td>
				<td><input type="text" name="c_legal"></td>
			</tr>
			<tr>
				<td>公司地址</td>
				<td><input type="text" name="c_site"></td>
			</tr>
            <tr>
				<td>营业执照照片</td>
				<td><input type="text" name="c_business"></td>
			</tr>
            <tr>
				<td>联系人电话</td>
				<td><input type="text" name="c_phone"></td>
			</tr>
            <tr>
				<td>Email</td>
				<td><input type="text" name="c_email"></td>
			</tr>
			<tr>
				<td><input type="submit" value="注册"></td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>