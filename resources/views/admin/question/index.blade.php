@extends('gentelella.app')

@section('pagetitle', 'Q&A 및 공지사항')

@section('title_right')
<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
    <form class="input-group" action="">
      <input type="text" class="form-control" placeholder="Search for..." name="search">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Go!</button>
      </span>
    </form>
  </div>
@endsection

@section('content')

@include('admin.question.notice.index')
@include('admin.question.qna.index')

@endsection
