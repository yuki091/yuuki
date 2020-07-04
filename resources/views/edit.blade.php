<h1>編集</h1>
<p><a href="{{ url('/home')}}"> Cloth List </a></p>
 
<form action="{{ route('create',$cloth->id)}}" method="POST">
    @csrf
    @method('PUT')
    <p>Item名：<input type="text" name="category" value="{{ $cloth->title }}"></p>
    <p>ブランド：<input type="text" name="brand" value="{{ $cloth->author }}"></p>
    <p>メモ：<input type="text" name="memo" value="{{ $cloth->author }}"></p>
    <input type="submit" value="編集">
</form>