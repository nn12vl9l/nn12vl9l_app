@extends('layouts.app')
@section('title', '編集画面')
@section('content')

<h1>投稿記事編集</h1>
    <form action="/recipis/{{ $recipi->id }}" method="POST">
    @csrf
    @method('PATCH')
    <p>
        <label for="name">料理名</label>
        <input type="text" name="name" value="{{ old('name', $recipi->name) }}">
    </p>
    <p>
        <label for="name">カテゴリー</label>
        <input type="text" name="category_id" value="{{ old('category_id', $recipi->category_id) }}">
    </p>
    <p>
        <label for="name">材料</label>
        <input type="text" name="meterial" value="{{ old('meterial', $recipi->meterial) }}">
    </p>
    <p>
        <label for="name">調味料</label>
        <input type="text" name="seasoning" value="{{ old('seasoning', $recipi->seasoning) }}">
    </p>
    <p>
        <label for="name">レシピ</label>
        <input type="text" name="recipi" value="{{ old('recipi', $recipi->recipi) }}">
    </p>
    <p>
        <label for="name">コメント</label>
        <input type="text" name="comment" value="{{ old('comment', $recipi->comment) }}">
    </p>
    <input type="submit" value="更新">
    </form>
    <a href="/recipis">戻る</a>
@endsection
