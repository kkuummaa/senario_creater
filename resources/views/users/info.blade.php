@extends('layouts.toplay')
@section('title', '作品情報一覧')

@section('content')
    {{-- タイトルと概要変更ボタン --}}
    <div class="title">
        <h2>{{ $senario->title }}</h2>
    </div>
    {{ $url = action('User\SenarioController@title_edit') . "?id=" . $senario->id }}
    <button type="button" name="title-edit" onclick="location.href='{{ $url }}'">変更</button>
    {{-- 概要と変更ボタン --}}
    <div class="overview">
        <h2>{{ $senario->overview}}</h2>
    </div>
    {{ $url = action('User\SenarioController@overview_edit') . "?id=" . $senario->id }}
    <button type="button" name="overview-edit" onclick="location.href='{{ $url }}'">変更</button>
    {{-- 世界観と変更ボタン --}}
    @if($senario->setting != Null)
    <h2>世界観</h2>
    <div class="setting">
        <h2>{{ $senario->setting->content }}</h2>
    </div>
    {{ $url = action('User\SettingController@edit') . "?id=" . $senario->setting->id }}
    <button type="button" name="setting-edit" onclick="location.href='{{ $url }}'">変更</button>
    @else
    {{ $url = action('User\SettingController@add') . "?id=" . $senario->setting->id }}
    <button type="button" name="setting-create" onclick="location.href='{{ $url }}'">世界観を作成</button>
    @endif
    {{-- キャラと追加ボタン --}}
    <div class="character">
        @if(count($senario->characters))
        @foreach($senario->characters as $character)
        <div class="character-card">
            <h2>{{ $character->name }}</h2>
            <p>{{ $character->content }}</p>
        </div>
        @endforeach
        @endif
        {{ $url = action('User\CharacterController@add') . "?id=" . $senario->id }}
        <button type="button" name="character-create" onclick="location.href='{{ $url }}'">キャラクターを追加</button>
    </div>
    {{-- シナリオボードと追加ボタン --}}
    <div class="senario-board">
        @if(count($senario->scenes))
        @foreach($senario->scenes as $scene)
            <div class="senario-card">
                <h2>
                    {{ $scene->name }}
                </h2>
                <p>
                    {{ $scene->content }}
                </p>
            </div>
        @endforeach
        @endif
        {{ $url = action('User\SenarioBoardController@add') . "?id=" . $senario->id }}
        <button type="button" name="senario-board-create" onclick="location.href='{{ $url }}'">シナリオボードを追加</button>
    </div>
    {{-- 作品を削除ボタン --}}
    {{ $url = action('User\SenarioController@delete') . "?id=" . $senario->id }}
    <button type="button" name="senario-delete" onclick="location.href='{{ $url }}'">作品を削除</button>
@endsection