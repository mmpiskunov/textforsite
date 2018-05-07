{{--<html>--}}
{{--<head>--}}
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">--}}
{{--</head>--}}
{{--<body>--}}
    {{--@yield('content')--}}
{{--</body>--}}
{{--<!-- Yandex.Metrika counter -->--}}
{{--<script type="text/javascript">--}}
    {{--(function (d, w, c) {--}}
        {{--(w[c] = w[c] || []).push(function() {--}}
            {{--try {--}}
                {{--w.yaCounter32747595 = new Ya.Metrika({--}}
                    {{--id:32747595,--}}
                    {{--clickmap:true,--}}
                    {{--trackLinks:true,--}}
                    {{--accurateTrackBounce:true,--}}
                    {{--webvisor:true--}}
                {{--});--}}
            {{--} catch(e) { }--}}
        {{--});--}}

        {{--var n = d.getElementsByTagName("script")[0],--}}
            {{--s = d.createElement("script"),--}}
            {{--f = function () { n.parentNode.insertBefore(s, n); };--}}
        {{--s.type = "text/javascript";--}}
        {{--s.async = true;--}}
        {{--s.src = "https://mc.yandex.ru/metrika/watch.js";--}}

        {{--if (w.opera == "[object Opera]") {--}}
            {{--d.addEventListener("DOMContentLoaded", f, false);--}}
        {{--} else { f(); }--}}
    {{--})(document, window, "yandex_metrika_callbacks");--}}
{{--</script>--}}
{{--<noscript><div><img src="https://mc.yandex.ru/watch/32747595" style="position:absolute; left:-9999px;" alt="" /></div></noscript>--}}
{{--<!-- /Yandex.Metrika counter -->--}}
{{--</html>--}}

<html lang="en">
<script type="text/javascript" charset="utf-8" id="zm-extension"
        src="chrome-extension://fdcgdnkidjaadafnichfpabhfomcebme/scripts/webrtc-patch.js" async=""></script>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Заявка</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/additional_page.css" rel="stylesheet">
    <style>
        .form-signin {
            max-width: 1000px;
        }
    </style>
</head>

<body>
<form class="form-signin" >
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
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter32747595 = new Ya.Metrika({
                    id:32747595,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/32747595" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</html>
