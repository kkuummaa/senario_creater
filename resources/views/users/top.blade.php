@extends('layouts.toplay')
@section('title', 'トップ画面')

@section('content')
    <div>
        {{-- 作品一覧 --}}
        @if(count($senarios) > 0)
        @foreach($senarios as $senario)
        {{ $senario->title }}
        {{ $senario->overview }}
        @endforeach
        @else
        <p>作品がありません</p>
        @endif
    </div>
    {{-- 作品を追加ボタン --}}
    @php
    $url = action('User\SenarioController@add');
    @endphp
    <button onclick="location.href='{!! $url !!}'">作品を追加</button>
@endsection