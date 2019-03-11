<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-5">
                사진
            </div>
            <div class="col-1"></div>
            <div class="col-4">
                <div class="row">
                    사진
                </div>
                <div class="row">
                        메이크아이티는 고객의 목적에 맞는 웹과 어플리케이션을<br>
                        효율적이고 합리적으로 제작하는 전문업체입니다.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                test<br>test<br>test<br>
            </div>
            <div class="col-2">
                test<br>test<br>test<br>
            </div>
            <div class="col-2">
                test<br>test<br>test<br>
            </div>
            <div class="col-2">
                test<br>test<br>test<br>
            </div>
            <div class="col-2">
                test<br>test<br>test<br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            ㅋㅋㅋ<br>
            ㅋㅋㅋ<br>
            ㅋㅋㅋ<br>
            ㅋㅋㅋ<br>
            ㅋㅋㅋ<br>
        </div>
    </div>
    <div class="row">
        <div class="container">
            ㅋㅋㅋ<br>
            ㅋㅋㅋ<br>
            ㅋㅋㅋ<br>
            ㅋㅋㅋ<br>
            ㅋㅋㅋ<br>
        </div>
    </div>
    <div class="row">
        <div class="container">
            ㅋㅋㅋ<br>
            ㅋㅋㅋ<br>
            ㅋㅋㅋ<br>
            ㅋㅋㅋ<br>
            ㅋㅋㅋ<br>
        </div>
    </div>


    <div class="container">
        <div class="row">
            sd
        </div>
        <div class="row">
            li li li li
        </div>
        <div class="row">
        @foreach ($portfolio as $item)
            <div class="col-2" style="background: url('{{$item['main_image'] }}')">
                <p>{{ $item['title'] }}</p>
            </div>
        @endforeach
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-5">
                </div>
                <div class="col-5">
                    ㅋㅋㅋ<br>
                    ㅋㅋㅋ<br>
                    ㅋㅋㅋ<br>
                    ㅋㅋㅋ<br>
                    ㅋㅋㅋ<br>
                </div>
                                    
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4">
                사진
            </div>
            <div class="col-1"></div>
            <div class="col-4">
                는 항상 최고의 솔루션을 제공합니다
            </div>
        </div>
    </div>
</body>
</html>