@extends('layouts.main')
@section('title', '詳細画面')
@section('content')
@include('partial.recipi')
    <table class="table-bordered mb-5 mt-3">
        <colgroup span="1" style="width:140px;background-color:#efefef;"></colgroup>
        <tbody>
            <tr>
                <th>料理名</th>
                <td>
                    <p>{{ $recipi->name }}</p>
                </td>
            </tr>
            <tr>
                <th>カテゴリー</th>
                <td>{{ $recipi->category_id }}</td>
            </tr>
            <tr>
                <th>材料</th>
                <td>{{ $recipi->meterial }}</td>
            </tr>
            <tr>
                <th>調味料</th>
                <td>{{ $recipi->seasoning }}</td>
            </tr>
            <tr>
                <th>レシピ</th>
                <td>{{ $recipi->recipi }}</td>
            </tr>
            <tr>
                <th>コメント</th>
                <td>{{ $recipi->comment }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('recipis.index')}}">戻る</a>
@endsection
