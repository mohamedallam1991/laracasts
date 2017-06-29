<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/all.css" >

</head>
<body>

    @include('partials.navbar')


    <div id="fucking" class="container">
        <div class="row">
        @include ('partials.flash')

        @yield ('content')
        </div>
    </div>



<script src="/js/all.js" ></script>
<script>
        $('div.alert').not('.alert-important').delay(3000).slideUp(300);
</script>
@yield ('footer')
</body>
</html>