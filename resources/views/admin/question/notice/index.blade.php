<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">

        @component('gentelella.panel')
            @slot('title')
                <h2>공지사항</h2>
                <a href="{{route('admin.notice.create')}}">
                    <button class="btn btn-primary pull-right">공지 추가 </button>
                </a>

            @endslot

        <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr class="headings">
                    <th>#</th>
                    <th class="column-title">번호 </th>
                    <th class="column-title">제목</th>
                    <th class="column-title">글쓴이 </th>
                    <th class="column-title">날짜 </th>
                    <th class="column-title">조회수 </th>
                    <th class="column-title">비고 </th>

                    <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($notices as $notice)

                    <tr >
                        <td class="a-center ">
                            <input type="checkbox" name="" id="">
                        </td>
                        <td class="a-center ">{{ $notice->id }}</td>
                        <td class="">{{ $notice->subject }}</td>
                        <td class=""><b> 관리자</b></td>   
                        <td class="">{{ date("Y년 m월 d일", strtotime($notice->created_at)) }}</td>
                        <td class="">{{$notice->cnt}}</td>
                        <td>
                        <button class="btn btn-warning btn-xs" onclick="location.href='{{route('admin.notice.edit',['id'=>$notice->id])}}'">수정</button>
                            <button class="btn btn-success btn-xs" onclick="location.href='{{route('admin.notice.show',['id'=>$notice->id])}}'"> 보기</button>
                            {{-- <button class="btn btn-danger btn-xs" onclick="location.href='{{route('admin.notice.destroy',['id'=>$notice->id])}}'">삭제</button> --}}
                            <form action="{{route('admin.notice.destroy',$notice->id)}}" method="post" style="display:inline;">
                                    @csrf
                                    @method('delete')
                                <button class="btn btn-danger btn-xs" type="submit">삭제</button>
                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
            </table>
            <div class="paging">
                {{ $notices->appends($_GET)->links() }}
            </div>
            {{-- {{$notices->render()}} --}}
        </div>
        @endcomponent
    </div>
</div>