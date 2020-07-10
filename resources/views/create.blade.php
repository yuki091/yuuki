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
    
    <form method="post" action="/home" enctype="multipart/form-data">
      {{ csrf_field() }}
      <label for="photo"></label>
      <input type="file" name="filename" />
      <label>カテゴリー <input type="text" name="category_name"></label>
      <label>ブランド <input type="text" name="brand_name"></label>
      <label>メモ <input type="text" name="memo"></label>
      <input type="submit" id="button" value="登録" />
    </form>
  </div>
</body>
</html>