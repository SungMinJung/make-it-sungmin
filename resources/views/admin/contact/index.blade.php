@extends('gentelella.app')

@section('pagetitle', "Contact us 관리")

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

<div class="container body">
    <div class="main_container">

      <!-- page content -->
      <div role="main">
        <div class="">
          
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        @foreach ($contacts as $item)
                        <!-- start recent activity -->
                        <ul class="messages">
                        <li>
                            <div class="message_wrapper">
                            <h4 class="heading">작성자 : {{ $item->contact_name }} &nbsp&nbsp&nbsp 작성일 : {{ $item->created_at }}</h4>
                            <h5 class="message">연락처 : {{ $item->contact_tel }} &nbsp&nbsp&nbsp 이메일 : {{ $item->contact_email }} &nbsp&nbsp&nbsp 참고사이트 : {{ $item->contact_refsite }}</h2>
                            <blockquote class="message">{{ $item->contact_content }}</blockquote>
                            <form action="{{ route('admin.contact.destroy', $item->id) }}" method="post" style="float:right;position:relative;bottom:50px;left:50px;">
                              @method('delete')
                              @csrf
                              <button type="submit" class="btn btn-danger">삭제</button>
                            </form>
                            <br />
                            </div>
                        </li>
                        </ul>
                        <!-- end recent activity -->
                        @endforeach
                    </div>
                        {{ $contacts->render() }}
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
</div>

@endsection

{{-- <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">

        @component('gentelella.panel')
            @slot('title')
                <h2>Contact us 목록</h2>
            @endslot

        <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
                <thead>
                    <tr class="headings">
                        <th>#</th>
                        <th class="column-title">번호 </th>
                        <th class="column-title">이름 </th>
                        <th class="column-title">이메일 </th>
                        <th class="column-title">작성일 </th>
                        <th class="column-title">비고 </th>
                        </th>
                        <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($contacts as $item)
                        <td class="a-center ">
                            <input type="checkbox" name="" id="">
                        </td>
                        <td class="a-center ">{{ $item->id }}</td>
                        <td class="">{{ $item->contact_name }}</td>
                        <td class="">{{ $item->contact_email }}</td>
                        <td class="">{{ $item->created_at }}</td>
                        <td class="">
                            <button class="btn btn-warning btn-xs" onclick="location.href='{{ route('admin.contact.show', $item->id) }}'">보기</button>
                            <form action="{{ route('admin.contact.destroy', $item->id) }}" method="post" style="float:left;">
                                @csrf
                                @method('delete')
                                <button type="submit">삭제</button>
                            </form>
                        </td>
                    @endforeach
                </tbody>
            </table>
        </div>

        @endcomponent

    </div>
</div> --}}