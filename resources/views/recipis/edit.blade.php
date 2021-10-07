@extends('layouts.app')
@section('title', '編集画面')
@section('content')

    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>投稿記事編集</h1>
    <form action="/recipis/{{ $recipi->id }}" method="POST">
        @csrf
        @method('PATCH')
        <p>
            <label for="name">料理名</label>
            <input type="text" name="name" value="{{ old('name', $recipi->name) }}">
        </p>
        <p>
            <label for="category_id">カテゴリー</label>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if (old('category') == $category->id) selected @endif>{{ $category->name }}</option>
                @endforeach
            </select>
        </p>
        <p>
            <label for="meterial">材料</label>
            <textarea name="meterial" id="meterial" cols="30" rows="2">{{ old('meterial', $recipi->meterial) }}</textarea>
        </p>
        <p>
            <label for="seasoning">調味料</label>
            <textarea name="seasoning" id="seasoning" cols="30"
                rows="2">{{ old('seasoning', $recipi->seasoning) }}</textarea>
        </p>
        <p>
            <label for="recipi">レシピ</label>
            <textarea name="recipi" id="recipi" cols="30" rows="4">{{ old('recipi', $recipi->recipi) }}</textarea>
        </p>
        <p>
            <label for="img_path">料理画像URL</label>
            <textarea name="img_path" id="img_path" cols="30" rows="2">{{ old('img_path', $recipi->img_path) }}</textarea>
        </p>
        <p>
            <label for="comment">コメント</label>
            <textarea name="comment" id="comment" cols="30" rows="2">{{ old('comment', $recipi->comment) }}</textarea>
        </p>
        <input type="submit" value="更新" class="btn btn-outline-info">
    </form>
    <p>
        <button type="button" onclick="location.href='/recipis/{{ $recipi->id }}'"
            class="btn btn-outline-success">戻る</button>
    </p>
@endsection
