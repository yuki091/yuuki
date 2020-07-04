<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="header-title">
    <a href="{{ route('user.signup') }}">新規登録</a>
  </div>
  <h1>ログイン</h1>
  <form action="{{ route('user.signin') }}" method="post">
    <label for="email">E-Mail</label>
    <input type="text" id="email" name="email">
    <label for="password">Password</label>
    <input type="password" id="password" name="password">
    <button type="submit">ログイン</button>
    {{ csrf_field() }}
  </form>
</body>
</html>
<style scoped>

</style>