<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{ env('APP_NAME','BestBlog')}}</title>
</head>
<body>
    @include('includes.navbar')
    <div class="mb-3"></div>
    <div class="container">
        @include('includes.messages')    
        @yield('content')
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>