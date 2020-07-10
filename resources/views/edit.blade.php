<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>編集</h1>
<p><a href="{{ url('/home')}}">Cloth List</a></p>
 
<form action="/home/{{$cloth->id}}" method="post">
    {{ csrf_field() }}
    @method('PUT')
    <div>
        <p>カテゴリー：<input type="text" name="category" value="{{ $cloth->category_name }}"></p>
        <p>ブランド：<input type="text" name="brand" value="{{ $cloth->brand_name }}"></p>
        <p>メモ：<input type="text" name="memo" value="{{ $cloth->memo }}"></p>
    </div>
    <div>
        <input type="hidden" name="_method" value="patch">
        <input type="submit" value="更新">
    </div>
</form>
</body>
</html>