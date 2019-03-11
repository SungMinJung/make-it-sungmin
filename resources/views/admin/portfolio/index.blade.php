@extends('gentelella.app')


@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        @component('gentelella.panel')
            @slot('title')
                <h2>포트폴리오 목록</h2>
                <a href='{{route('admin.portfolio.create')}}'>
                    <button class="btn btn-primary pull-right">게시물 추가 </button>
                </a>
            @endslot
            
        <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr class="headings">
                    <th>#</th>
                    <th class="column-title">번호 </th>
                    <th class="column-title">카테고리 </th>
                    <th class="column-title">제목 </th>
                    <th class="column-title">비고 </th>
                    </th>
                    <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                </tr>
            </thead>
            
            
        
            <tbody>
                @foreach ($portList as $item)
                    <tr class="pointer">
                        <td class="a-center ">
                            <input type="checkbox" name="" id="">
                        </td>
                        <td class="a-center ">{{ $item->id }}</td>
                        <td class="a-center ">{{ $item->category }}</td>
                        <td class=""><a href="{{ route('admin.portfolio.show', $item->id) }}">{{ $item->title }}</a></a></td>
                        <td>
                            <a href="{{ route('admin.portfolio.edit', $item->id) }}">
                                <button class="btn btn-warning btn-xs">수정</button>
                            </a>
                            <form method="POST" action="{{ route('admin.portfolio.destroy', $item->id) }}" style="display: inline">
                                {{ csrf_field() }}
                                {{ method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger btn-xs">삭제</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
            {{-- <div class="paging">
                {{ $items->appends($_GET)->links() }}
            </div> --}}
        </div>
        @endcomponent
    </div>
</div>
@endsection