@extends('layouts.app')
@section('title', '詳細画面')
@section('content')
    @include('partial.recipi')
    <table class="table-bordered mb-5 mt-3">
        <colgroup span="1" style="width:140px;background-color:#efefef;"></colgroup>
        <tbody>
            <tr>
                <th>料理名</th>
                <td>{{ $recipi->name }}</td>
            </tr>
            <tr>
                <th>カテゴリー</th>
                <td>{{ $recipi->category->name }}</td>
            </tr>
            <tr>
                <th>材料</th>
                <td>{!! nl2br(e($recipi->meterial)) !!}</td>
            </tr>
            <tr>
                <th>調味料</th>
                <td>{!! nl2br(e($recipi->seasoning)) !!}</td>
            </tr>
            <tr>
                <th>レシピ</th>
                <td>{!! nl2br(e($recipi->recipi)) !!}</td>
            </tr>
            <tr>
                <th>コメント</th>
                <td>{!! nl2br(e($recipi->comment)) !!}</td>
            </tr>
        </tbody>
    </table>
    <p>
        <a href="/recipis/{{ $recipi->id }}/edit" class="btn btn-outline-primary">編集</a>
    </p>
    <p>
        <a href="{{ route('recipis.index') }}" class="btn btn-outline-success">戻る</a>
    </p>
    <input type="submit" value="削除する" class="btn btn-outline-secondary" onclick="if(!confirm('本当に削除しますか？')){return false}"
        form="delete-form">
    <form action="/recipis/{{ $recipi->id }}" method="post" id='delete-form'>
        @csrf
        @method('DELETE')
    </form>

@endsection
