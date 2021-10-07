@extends('layouts.app')
@section('title', '投稿画面')
@section('content')

    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<h1>新規レシピ投稿</h1>
    <form action="/recipis" method="POST">
    @csrf
    <p>
        <label for="name">料理名</label>
        <input type="text" name="name" value="{{ old('name') }}">
    </p>
    <p>
        <label for="category_id">カテゴリー</label>
        <select name="category_id" id="category_id">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" @if (old('category')==$category->id) selected @endif>{{ $category->name }}</option>
            @endforeach
        </select>
    </p>
    <p>
        <label for="meterial">材料</label>
        <textarea name="meterial" id="meterial" cols="30" rows="2">{{ old('meterial') }}</textarea>
    </p>
    <p>
        <label for="seasoning">調味料</label>
        <textarea name="seasoning" id="seasoning" cols="30" rows="2">{{ old('seasoning') }}</textarea>
    </p>
    <p>
        <label for="recipi">レシピ</label>
        <textarea name="recipi" id="recipi" cols="30" rows="4">{{ old('recipi') }}</textarea>
    </p>
    <p>
        <label for="img_path">料理画像</label>
        <input type="text" name="img_path" value="{{ old('img_path') }}">
    </p>
    <p>
        <label for="comment">コメント</label>
        <textarea name="comment" id="comment" cols="30" rows="2">{{ old('comment') }}</textarea>
    </p>
    <input type="submit" value="登録" class="btn btn-outline-info">
</form>
<button type="button" onclick="location.href='/recipis'" class="btn btn-outline-success">戻る</button>
@endsection

