@extends('gentelella.app')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        @component('gentelella.panel')
            @slot('title')
                <h2>포트폴리오 수정</h2>
            @endslot

            <form method="POST" action="{{ route('admin.portfolio.update', $port->id)}}" class="form-horizontal form-label-left">
                {{ csrf_field() }}
                {{ method_field('PUT')}}
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="카테고리">
                        카테고리 <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="select2_group form-control" name="category">
                            <option selected value="WEB">Web</option>
                            <option value="APP">App</option>
                            <option value="RESPON">Responsive</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">
                        타이틀 제목 <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="title" name="title" required="required" class="form-control col-md-7 col-xs-12" value= {{$port->title}}>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">
                        메인 제목 <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="title" name="main_title" required="required" class="form-control col-md-7 col-xs-12" value= {{$port->main_title}}>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">
                        링크 <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="link" name="link" required="required" class="form-control col-md-7 col-xs-12" value= {{$port->link}}>
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">
                        개발 날짜<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="date" id="dep_date" name="dep_date" required="required" class="form-control col-md-7 col-xs-12" value= {{$port->dep_date}} >
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">
                        썸네일 <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="title_imgurl" name="title_imgurl" value= {{$port->title_imgurl}}>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">
                        메인사진 <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">   
                        <textarea id="summernote" name="summernote">{{$port->main_imgurl}}</textarea>
                    </div>
                </div>


                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">수정</button>
             
                        <button class="btn btn-primary" type="reset">다시</button>
                        
                    </div>
                </div>


            </form>
        @endcomponent

    </div>
</div>
@endsection
