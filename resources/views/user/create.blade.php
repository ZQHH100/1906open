<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册--页面</title>
    <link href="/admin.bak/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/admin.bak/css/animate.css" rel="stylesheet">
    <link href="/admin.bak/css/style.css?v=4.1.0" rel="stylesheet">
</head>
<body>
<form class="form-horizontal" action="{{url('/user/store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="inputName" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="用户名" name="user_name">
        </div>
    </div>
    <div class="form-group">
        <label for="inputTel" class="col-sm-2 control-label">手机号</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="手机号" name="tel">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail" class="col-sm-2 control-label">邮箱</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="邮箱" name="email">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" placeholder="密码" name="pwd">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="col-sm-2 control-label">确认密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" placeholder="确认密码" name="pwd1">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">注册账号</button>
        </div>
    </div>
</form>
</body>
</html>