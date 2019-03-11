@extends('gentelella.app')
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@section('pagetitle', 'Q&A 및 공지사항')


@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">

            @component('gentelella.panel')
                @slot('title')
                    <h2>공지 추가</h2>
                @endslot

                <button type="button" class="btn btn-primary" onclick="location.href='  {{route('admin.qnatest',['type'=>'notice'])}}'">notice</button>
                <button type="button" class="btn btn-secondary" onclick="location.href='{{route('admin.qnatest',['type'=>'qna'])}}'">qna</button>

            @endcomponent

    </div>
</div>
@endsection