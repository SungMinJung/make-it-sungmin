@extends('gentelella.base')
@section('bodyclass', 'nav-md')

@section('body')
<div class="container body">
    <div class="main_container">
    @include('gentelella.nav')


      @include('gentelella.top')

      <!-- page content -->
      <div class="right_col" role="main">
        <div id="app">
            <div class="">

            <div class="page-title">
                <div class="title_left">
                    <h3>@yield('pagetitle')</h3>
                </div>

                <div class="title_right">
                    @yield('title_right')
                </div>

            </div>

            <div class="clearfix"></div>

            @yield('content')
            </div>
        </div>
      </div>
      <!-- /page content -->

      @include('gentelella.footer')
    </div>
  </div>
@endsection
