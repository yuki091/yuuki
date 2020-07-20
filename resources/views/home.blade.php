<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mycloset</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div>
    <div class="header flex">
      <div class="header-title">
        <p>Mycloset</p>
      </div>
      <div class="header-right flex">
        <a href="/home/create">アイテム登録</a>
      </div>
    </div>

  <div class="l-wrapper">
    <article class="card">
      <div class="card__header">
        @foreach ($clothes as $cloth)
        <figure class="card__thumbnail">
          <img src="{{ asset('storage/'.$cloth->cloth_filename) }}" width="350px" height="350px">
        </figure>
      </div>
      <div class="card__body">
        <p class="card__text">カテゴリー：{{ $cloth->category_name }}</p>
        <p class="card__text">ブランド  ：{{ $cloth->brand_name }}</p>
        <p class="card__text">メモ      ：{{ $cloth->memo}}</p>
      </div>
      <div class="card__footer">
        <p class="card__text"><a href="/home/{{$cloth->id}}" class="button -compact">詳細</a></p>
        <p class="card__text"><a href="/home/{{$cloth->id}}/edit" class="button -compact">編集</a></p>
        <form action="/home/{{$cloth->id}}" method="post" class="card__text">
          {{ csrf_field() }}
          @method('DELETE')
          <input type="submit" class="button -compact" value="削除">
        </form>
        @endforeach
      </div>
    </article>
  </div>
</body>
</html>




