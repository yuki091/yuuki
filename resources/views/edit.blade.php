<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCloset</title>
</head>
<body>
    <div class="header flex">
        <div class="header-title">
          <p>Mycloset</p>
        </div>
        <div class="header-right flex">
          <a href="/home">Home</a>
        </div>
    </div>

  <h1>編集</h1>
  <!-- <img src="{{ asset('storage/'.$cloth->cloth_filename) }}" width="350px" height="350px"> -->
<form action="/home/{{$cloth->id}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
@method('PUT')
    <input type="file" name="filename" value="{{$cloth->cloth_filename}}">
    <p>カテゴリー：<input type="text" name="category_name" value="{{$cloth->category_name}}"></p>
    <p>ブランド  ：<input type="text" name="brand_name" value="{{$cloth->brand_name}}"></p>
    <p>メモ      ：<input type="text" name="memo" value="{{$cloth->memo}}"></p>
    <input type="submit" value="更新">
</form>
</body>
</html>
<style>
*{
 margin: 0;
 padding: 0;
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
.header-right a {
  line-height: 70px;
  float: right;
  margin-right: 30px;
  cursor: pointer;
  font-size: 18px;
  color: white;
}
</style>

