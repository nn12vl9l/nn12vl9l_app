@extends('layouts.app')
@section('title', '投稿画面')
@section('content')

<h1>新規レシピ投稿</h1>
    <form action="/recipis" method="POST">
    @csrf
    <p>
        <label for="name">料理名</label>
        <input type="text" name="name" value="{{ old('name') }}">
    </p>
    <p>
        <label for="name">カテゴリー</label>
        <input type="text" name="catefory_id" value="{{ old('catefory_id') }}">
    </p>
    <p>
        <label for="name">材料</label>
        <input type="text" name="material" value="{{ old('material') }}">
    </p>
    <p>
        <label for="name">調味料</label>
        <input type="text" name="seasoning" value="{{ old('seasoning') }}">
    </p>
    <p>
        <label for="name">レシピ</label>
        <textarea name="recipi" cols="30" rows="5"></textarea>
    </p>
    <p>
        <label for="name">料理画像</label>
        <input type="text" name="img_path" value="{{ old('img_path') }}">
    </p>
    <p>
        <label for="name">コメント</label>
        <input type="text" name="comment" value="{{ old('comment') }}">
    </p>
    <input type="submit" value="登録">
</form>
<a href="/recipis/">戻る</a>
@endsection

