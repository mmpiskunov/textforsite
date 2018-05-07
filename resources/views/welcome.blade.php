<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="initial-scale=1.0, width=device-width" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="copyright" author="Mikhail Piskunov" />
    <title>TextForSite - описания товаров и отзывы для интернет-магазинов по цене от 10 рублей за тысячу знаков</title>
    <link href="css/select2.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/media.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css">
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body id="top">
<div class="header" >
    <div class="center">
        <div class="left"></div>
        <div class="right"></div>
        <div class="main">
            <div class="lang">
                <ul>
                    <!--
                    <li><a href="#">EN</a></li>
                    <li><a href="#">RU</a></li>
                    <li><a href="#">LV</a></li>
                    -->
                </ul>
            </div>
            <div class="logo">
                <img src="images/text_main.png" alt="Тексты для сайта оптом" class="slogan">
                <h1><img src="images/logo.png" alt="TEXT FOR SITE"></h1>
            </div>
            <div class="info">
                <span>У вас <b>много товаров</b> в интернет-магазине?<br>Предлагаем описания товаров и отзывы к ним.</span>
                <a href="#" class="next">Тарифы</a>
            </div>
        </div>
        <!-- <div class="img"><img src="images/img.png" alt=""></div> -->
        <div class="lists">
            <div class="item">
                <h2>Мы разработали технологию, которую назвали <b>вариатор</b> текстов</h2>
                <ul>
                    <li>Подходит для <small>любых</small> языков</li>
                    <li>Быстрая автоматизированная работа</li>
                    <li>Индивидуальная настройка под ваши задачи</li>
                    <li>Высокая уникальность и качество</li>
                    <li>Стоимость - <b>10</b> рублей за тысячу знаков</li>
                </ul>
            </div>
            <div class="item">
                <h2>Как это работает?</H2>
                <p>Если прочитать текст <br /> перед группой студентов <br /> 30-40 человек и попросить их <span>пересказать</span> услышанный текст, то каждый из них изложит текст своими словами. Мы получим много разных логичных вариантов текста на одну тему.</p>
            </div>
            <div class="item">
                <h2>Наша технология</h2>
                <p>делает тоже самое,<br /> только <span>автоматически</span>.<br /> Из одного исходного текста получается множество уникальных <span>пересказов</span> текста. Пересказ происходит не заменой слов на синонимы, а так, как это сделали бы люди.</p>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="example">
        <div class="left"></div>
        <div class="right"></div>
        <div class="center">
            <span class="title">Уникальная технология<a href="#" class="to-top"></a></span>
            <div class="text"><img src="images/block2_text.png" alt="Пример работы"></div>
            <div class="articles">
                <span>Удобный инструмент</span>
                <span>Быстрая генерация</span>
                <h3><b>Бережем самое главное:</b><br>ваше время, ваши нервы, ваши деньги</h3>
            </div>
            <div class="centerform">
                <form action="#" method="post">
                    <div class="select-block">
                        <select id="vid" class="select">
                            <option value="1" selected>Пример описания товара в интернет-магазине</option>
                            <option value="2">Пример отзыва или комментария к товару</option>
                            <option value="3">Пример текста для страницы сайта</option>
                        </select>
                    </div>
                    <a href="#" id="vrec" class="button">Пересказать текст</a>
                    <div class="textarea">
                        <div id="vtext"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="order" id="target-el">
        <div class="left"></div>
        <div class="right"></div>
        <div class="center">
            <span class="title">Индивидуальная настройка<a href="#" class="to-top"></a></span>
            <div class="text"><img src="images/block3_text.png" alt="Тарифы"></div>
            <div class="article">
                <p>Описания товара в интернет-магазине</p>
                <p><span style="font-size:85%">Цена: <span class="blue">10 руб.</span> за тыс.знаков <span class="purple">(тарифы №2 - №5)</span><br><span class="blue">20 руб.</span> за тыс.знаков <span class="purple">(тариф №1)</span><br>Ежемесячные тарифы</span></p>
            </div>
            <div class="price">
                <div class="titleline bgdark">
                    <div class="column1">Тариф</div>
                    <div class="column2">Ассортимент</div>
                    <div class="column3">Объём знаков</div>
                    <div class="column4">Стоимость</div>
                </div>
                <div class="line bglight">
                    <div class="column1">№1</div>
                    <div class="column2">1 тема</div>
                    <div class="column3">150 000</div>
                    <div class="column4">3000 руб.</div>
                </div>
                <div class="line bgdark">
                    <div class="column1">№2</div>
                    <div class="column2">2-5 тем</div>
                    <div class="column3">500 000</div>
                    <div class="column4">5000 руб.</div>
                </div>
                <div class="line bglight">
                    <div class="column1">№3</div>
                    <div class="column2">6-10 тем</div>
                    <div class="column3">1 000 000</div>
                    <div class="column4">10000 руб.</div>
                </div>
                <div class="line bgdark">
                    <div class="column1">№4</div>
                    <div class="column2">11-25 тем</div>
                    <div class="column3">2 500 000</div>
                    <div class="column4">25000 руб.</div>
                </div>
                <div class="line bglight">
                    <div class="column1">№5</div>
                    <div class="column2">26-50 тем</div>
                    <div class="column3">5 000 000</div>
                    <div class="column4">50000 руб.</div>
                </div>
                <div class="undertable">Средняя длина текста - <span class="blue">1500</span> символов</div>
            </div>
            <div class="article">
                <p>Отзывы и комментарии о товарах</p>
                <p><span style="font-size:85%">Цена: <span class="blue">18 руб.</span> за тысячу знаков<br>Ежемесячные тарифы</span></p>
            </div>
            <div class="price">
                <div class="titleline bgdark">
                    <div class="column1">Тариф</div>
                    <div class="column2">Ассортимент</div>
                    <div class="column3">Отзывов</div>
                    <div class="column4">Стоимость</div>
                </div>
                <div class="line bglight">
                    <div class="column1">A</div>
                    <div class="column2">1 тема</div>
                    <div class="column3">500</div>
                    <div class="column4">2000 руб.</div>
                </div>
                <div class="line bgdark">
                    <div class="column1">B</div>
                    <div class="column2">2-5 тем</div>
                    <div class="column3">750</div>
                    <div class="column4">3000 руб.</div>
                </div>
                <div class="line bglight">
                    <div class="column1">C</div>
                    <div class="column2">6-10 тем</div>
                    <div class="column3">1 250</div>
                    <div class="column4">5000 руб.</div>
                </div>
                <div class="line bgdark">
                    <div class="column1">D</div>
                    <div class="column2">11-25 тем</div>
                    <div class="column3">3 000</div>
                    <div class="column4">12000 руб.</div>
                </div>
                <div class="line bglight">
                    <div class="column1">E</div>
                    <div class="column2">26-50 тем</div>
                    <div class="column3">7 000</div>
                    <div class="column4">25000 руб.</div>
                </div>
                <div class="undertable">Средняя длина отзыва - <span class="blue">220</span> символов</div>
            </div>
        </div>
    </div>
    <div class="workflow">
        <div class="top-gradient"></div>
        <div class="center">
            <div class="article">
                <div class="item">
                    <img src="images/parters.png" alt="">
                </div>
                <div class="item">
                    <p>Пришлите нам <span>свою заявку</span> для обсуждения возможности сотрудничества</p>
                    <a href="javascript:return false;" id="form-show" class="button" onclick="$('#form-show').hide(); $('#form-submit').delay().show(1000);">Отправить заявку</a>
                    <a href="#" class="to-top"></a>
                </div>
            </div>
            <form id="form-submit" action="send.php" method="post" style="display:none">
                {{ csrf_field() }}
                <label>ФИО:</label>
                <input type="text" name="name" placeholder="" value="{{ old('name') }}">
                <label>Сайт:</label>
                <input type="text" name="site" placeholder="" value="{{ old('site') }}">
                <label>E-mail:</label>
                <input type="text" name="email" placeholder="" value="{{ old('email') }}">
                <a href="#" class="button form">Отправить</a>
            </form>
        </div>
        <div class="arrows">
            <div class="left"></div>
            <div class="background">
                <div class="center">
                    <div class="item">Увеличение SEO-трафика</div>
                    <div class="item">Рост конверсии в заказы</div>
                </div>
            </div>
            <div class="right"></div>
        </div>
        <div class="center">
            <div class="af_text">Будь выше своих конкурентов!</div>
            <div class="af_text">Нас рекомендуют своим друзьям!</div>
        </div>
        <div class="center" style='color: white;'>
            <div class="intro-list">
                <h2>
                    Наши конкурентные <strong>преимущества</strong> по сравнению с биржами копирайтинга и фрилансерами:
                </h2>
                <ul>
                    <li>Мы можем обеспечить Вам <span>тысячи</span> текстов в сжатые сроки, другие исполнители - нет.</li>
                    <li>Предлагаем тексты по <span>минимальной</span> цене на рынке копирайтинга.</li>
                    <li>Доступны разные варианты передачи Вам результата, включая предоставление индивидуального <span>API</span>.</li>
                </ul>
            </div>
            <div class="text-block last">
                <div id="vcs-icon"></div>
                <h3>Эффективность!</h3>
                <p>Увеличьте <span>доход</span> вашей компании за счёт роста <span>конверсии</span> новых пользователей в постоянных клиентов.</p>
            </div>
            <div class="text-block">
                <div id="files-icon"></div>
                <h3>Зачем Вам это?</h3>
                <p>Создайте на своём сайте страницы с <span>уникальными</span> текстами по нужным Вам ключевым фразам и получите <span>трафик</span> из поисковых систем.</p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="team">
        <div class="center">
            <div class="title"><img src="images/team.png" alt=""></div>
            <a href="#" class="to-top"></a>
            <ul>
                <li>
                    <div class="img"><img src="images/photo_mikhail.png" alt=""></div>
                    <span>Михаил Пискунов<br><font style="font-size:80%">Основатель и программист</font></span>
                    <a href="https://www.facebook.com/piskunovmm" target="_blank"><img src="images/soc1.png" height="35" width="34" alt=""></a>
                    <script language="JavaScript">
                        <!--//
                        user = "info"; site = "mr-web.ru"; document.write('<a href="mailto:' + user + '@' + site + '">'); document.write('<img src="images/soc2.png" height="35" width="34" alt="' + user + '@' + site + '"></a>');
                        //-->
                    </script>
                    <a href="https://lv.linkedin.com/in/mpiskunov" target="_blank"><img src="images/soc3.png" height="35" width="34" alt=""></a>
                </li>
                <li>
                    <div class="img"><img src="images/photo_ekaterina.png" alt=""></div>
                    <span>Екатерина Пискунова<br><font style="font-size:80%">Копирайтер</font></span>
                    <a href="https://www.facebook.com/profile.php?id=100002169761087" target="_blank"><img src="images/soc1.png" height="35" width="34" alt=""></a>
                    <script language="JavaScript">
                        <!--//
                        // user = "ekaterina"; site = "textforsite.com"; document.write('<a href="mailto:' + user + '@' + site + '">'); document.write('<img src="images/soc2.png" height="35" width="34" alt="' + user + '@' + site + '"></a>');
                        //-->
                    </script>
                    <!-- <a href="#"><img src="images/soc3.png" height="35" width="34" alt=""></a> -->
                </li>
            </ul>
            <div class="last">
                <span>Компания основана в Августе 2015 года в Риге (Латвия).<br>В России работает представительство.</span>
                <p>2015 © SIA "Internet-Capital". <!-- <a href="#">Пользовательское соглашение.</a> --></p>
            </div>
        </div>
    </div>
</div>

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

<!--
<noindex>
<link rel="stylesheet" href="//zzvonok.ru/widget/tracker.css">
<script type="text/javascript" src="//zzvonok.ru/php/1.js" charset="UTF-8"></script >
<script type="text/javascript">var uid_code="555";</script>
</noindex>
-->

</body>
</html>