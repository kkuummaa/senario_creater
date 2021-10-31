@extends('layouts.toplay')
@section('title', 'トップ画面')

@section('content')
    <div>
        {{-- 作品一覧 --}}
        @if(count($senarios) > 0)
        <div class="card-deck">
        @foreach($senarios as $senario)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $senario->title }}</h5>
                        <p class="card-text">{{ $senario->overview }}</p>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        @else
        <p>作品がありません</p>
        @endif
    </div>
    {{-- 作品を追加ボタン --}}
    @php
    $url = action('User\SenarioController@add');
    @endphp
    <div>
        <button type="button" class="btn btn-secondary"　onclick="location.href='{!! $url !!}'">作品を追加</button>
    </div>
@endsection