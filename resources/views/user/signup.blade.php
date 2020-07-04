<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="{{ route('user.signup') }}" method="post">
    <label for="InputName">氏名</label>
    <input type="text" name="name" id="InputName" placeholder="氏名">
    <label for="InputEmail">メール・アドレス</label>
    <input type="email" name="email"  id="InputEmail" placeholder="メール・アドレス">
    <label class="col-sm-3 control-label" for="InputPassword">パスワード</label>
    <input type="password" name="password"  id="InputPassword" placeholder="パスワード">
    <button type="submit">新規登録</button>
    {{ csrf_field() }}
  </form>
</body>
</html>