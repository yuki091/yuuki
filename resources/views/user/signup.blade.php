<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="header flex">
    <div class="heaer-left">
      <p>Mycloth</p>
    </div>
    <div class="header-right flex">
      <a href="signin">ログイン</a>
    </div>
  </div>
  <div class="title">
    <p>新規登録</p>
  </div>
  <div class="card">
    <form action="{{ route('user.signup') }}" method="post">
      <input type="text" name="name" id="InputName" placeholder="氏名" />
      <input type="email" name="email"  id="InputEmail" placeholder="メールアドレス" />
      <input type="password" name="password"  id="InputPassword" placeholder="パスワード" />
      <button type="submit">新規登録</button>
      {{ csrf_field() }}
    </form>
  </div>
</body>
</html>
<style>
* {
margin: 0;
padding: 0;
border: 0;
font-family: "";
}
.flex {
display: flex;
justify-content: space-between;
}
.header-right{
  text-align: right;
}
.title p{
  text-align: center;
  margin-top: 30px;
}
.card {
margin: 100px auto;
width: 350px;
background: ;
border-radius: 5px;
padding: 20px;
}
input {
margin-top: 15px;
width: 80%;
border-radius: 10px;
padding: 10px;
border: 1px solid black;
color: black;
}
form {  
  text-align: center;
}
button {
width: 100px;
text-align: center;
padding: 8px 0 10px;
color: #fff;
background-color: #5419da;
border-radius: 25px;
cursor: pointer;
margin-top: 15px;
}
</style>