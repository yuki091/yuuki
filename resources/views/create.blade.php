<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mycloth</title>
</head>
<body>
  <div>
    <div class="header flex">
        <div class="header-title">
          <p>Mycloth</p>
        </div> 
    </div>
    <!-- フォーム
    <form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
         アップロードした画像。なければ表示しない -->
      <!-- @isset ($filename)
      <div>
          <img src="{{ asset('storage/' . $filename) }}">
      </div>
      @endisset

        <label for="photo"></label>
        <input type="file" class="form-control" name="file">
        <br>
        
        {{ csrf_field() }}
        <button class="btn btn-success">Upload</button>
    </form> --> 
  
    <form method="post" action="store" enctype="multipart/form-data">
      {{ csrf_field() }}
      <label>ファイル<input type="file" class="btn"name="images"></label>
      <label>カテゴリー <input type="text" name="category_name"></label>
      <label>ブランド <input type="text" name="brand_name"></label>
      <label>メモ <input type="text" name="memo"></label>
      <input type="submit" id="button" value="登録" />
    </form>
  </div>
</body>
</html>
<style>
*{
 margin: 0;
 padding: 0;
 border: 0;
 font-family: Hiragino Maru Gothic ProN;
}
.flex {
display: flex;
justify-content: space-between;
}
.header {
  background-color: #333;
  height: 70px;
  font-size: 30px;
  color: #EEEEEE;
}
.header-title p {
  line-height: 70px;
  font-size: 30px;
  margin-left: 30px;
}
form {
  margin-top: 20px;
  text-align: center;
}
.btn {
  margin-top: 30px;
}
.category {
  display: flex;
  flex-direction: column;

}
.category input {
  width: 30%;
  height: 50px;
  margin-top: 30px;
  margin-bottom: 15px;
  border-radius: 10px;
  border: 1px solid white;
  background-color: #333;
  color: 00000;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
}
textarea {
  margin-left: auto;
  margin-right: auto;
  width: 30%;
  background-color: #333;
  border-radius: 10px;
  margin-top: 15px;
  height: 80px;
}
.footer input {
  
  text-align: center;
}
</style>