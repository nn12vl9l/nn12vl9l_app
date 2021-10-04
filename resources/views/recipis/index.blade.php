@extends('layouts.app')
@section('title', '一覧画面')
@section('content')
    @if (!empty($recipis))
        <ul>
            @foreach ($recipis as $recipi)
                <li class="list-unstyled border mb-5 pl-3 shadow">
                    @include('partial.recipi')
                </li>
            @endforeach
        </ul>
    @endif
@endsection
