<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>おえかき</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="https://image.ibb.co/fOur3b/favicon.png" />
    <meta name="theme-color" content="#3a9fff">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/oekaki.css')}}">

</head>

<body>
    <!-- partial:index.partial.html -->

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="https://image.ibb.co/fOur3b/favicon.png" />
        <meta name="theme-color" content="#1885ed">
        <title>Bricks.io - Homepage</title>
    </head>

    <body>
        <header class="header">
            <div class="container header__container">
                <div class="header__logo"><img class="header__img" src="https://image.ibb.co/kcVou6/path3000.png">
                    <h1 class="header__title">Bricks<span class="header__light">.io</span></h1>
                </div>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="header__menu">
                    <nav id="navbar" class="header__nav collapse">
                        <ul class="header__elenco">
                            <li class="header__el"><a href="#" class="header__link">ホーム</a></li>
                            <li class="header__el"><a href="#" class="header__link">値段</a></li>
                            <li class="header__el"><a href="#" class="header__link">体験話</a></li>
                            <li class="header__el"><a href="#" class="header__link">ブログ</a></li>
                            <li class="header__el"><a href="#" class="header__link">お問い合わせ</a></li>
                            <li class="header__el header__el--blue"><a href="" class="btn btn--white">ログイン →</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <div class="sect sect--padding-top">
            <div class="container">
                @yield('main')
                <!--
        <div class="row">
          <div class="col-md-12">
            <div class="site">
              <h1 class="site__title">練習用ホームページ</h1>
              <h2 class="site__subtitle">サブタイトル</h2>
              <div class="site__box-link">
                <a class="btn btn--width" href="">ボタン</a>
                <a class="btn btn--revert btn--width" href="">お問い合わせ</a>
              </div>
              <img class="site__img" src="https://image.ibb.co/c7grYb/image3015.png">
            </div>
          </div>
        </div>
-->
            </div>
        </div>

        <div class="sect sect--padding-bottom">
            <div class="container">
                <div class="row row--center">
                    <h1 class="row__title">
                        お値段以上
                    </h1>
                    <h2 class="row__sub">あなたのベストプラン</h2>
                </div>
                <div class="row row--center row--margin">
                    <div class="col-md-4 col-sm-4 price-box price-box--purple">
                        <div class="price-box__wrap">
                            <div class="price-box__img"></div>
                            <h1 class="price-box__title">
                                ガバガバプラン
                            </h1>
                            <p class="price-box__people">
                                1人用
                            </p>
                            <h2 class="price-box__discount">
                                <span class="price-box__dollar">¥</span>5,000<span class="price-box__discount--light">/月</span>
                            </h2>
                            <h3 class="price-box__price">
                                ¥9,335,000/月
                            </h3>
                            <p class="price-box__feat">
                                Features
                            </p>
                            <ul class="price-box__list">
                                <li class="price-box__list-el">自主的なPCウィルス感染</li>
                                <li class="price-box__list-el">HDDバースト</li>
                                <li class="price-box__list-el">非常に高い爆発事故リスク</li>
                                <li class="price-box__list-el">お先暗し</li>
                            </ul>
                            <div class="price-box__btn">
                                <a class="btn btn--purple btn--width">買う</a>
                            </div>
                        </div>
                    </div>
                    <!-- second -->
                    <div class="col-md-4 col-sm-4 price-box price-box--violet">
                        <div class="price-box__wrap">
                            <div class="price-box__img"></div>
                            <h1 class="price-box__title">
                                マシマシプラン
                            </h1>
                            <p class="price-box__people">
                                100 - 500 people
                            </p>
                            <h2 class="price-box__discount">
                                <span class="price-box__dollar">¥</span>11,000<span class="price-box__discount--light">/月</span>
                            </h2>
                            <h3 class="price-box__price">
                                ¥9,560,000,000/月
                            </h3>
                            <p class="price-box__feat">
                                Features
                            </p>
                            <ul class="price-box__list">
                                <li class="price-box__list-el">ちょっとマシなPC感染リスク</li>
                                <li class="price-box__list-el">確率的なHDDバースト</li>
                                <li class="price-box__list-el">マシな爆発リスク</li>
                                <li class="price-box__list-el">不安な毎日</li>
                            </ul>
                            <div class="price-box__btn">
                                <a class="btn btn--violet btn--width">買う</a>
                            </div>
                        </div>
                    </div>

                    <!-- terzo -->
                    <div class="col-md-4 col-sm-4 price-box price-box--blue">
                        <div class="price-box__wrap">
                            <div class="price-box__img"></div>
                            <h1 class="price-box__title">
                                ガチガチプラン
                            </h1>
                            <p class="price-box__people">
                                500人
                            </p>
                            <h2 class="price-box__discount">
                                <span class="price-box__dollar">¥</span>9,900,000<span class="price-box__discount--light">/月</span>
                            </h2>
                            <h3 class="price-box__price">
                                $345,000,000,000/月
                            </h3>
                            <p class="price-box__feat">
                                Features
                            </p>
                            <ul class="price-box__list">
                                <li class="price-box__list-el">超高性能ウィルス対策ソフト梱包</li>
                                <li class="price-box__list-el">HDDバーストなし</li>
                                <li class="price-box__list-el">爆発リスクなし</li>
                                <li class="price-box__list-el">明るい未来毎日楽しい</li>
                            </ul>
                            <div class="price-box__btn">
                                <a class="btn btn--blue btn--width">買う</a>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>


        <div class="sect sect--white">
            <div class="container">
                <div class="row">
                    <h1 class="row__title">
                        Success Stories
                    </h1>
                    <h2 class="row__sub">Companies you <span class="row__sub--light">(will)</span> propably know</h2>
                </div>
                <div class="row row--margin row--text-center">
                    <div class="col-md-8 col-sm-10 col-xs-12 row__carousel">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="item__content">
                                        <img class="item__img" src="https://cdn.worldvectorlogo.com/logos/slack-1.svg" alt="Slack"><span class="item__name">slack</span>
                                        <p class="item__description">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                            parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                            pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                                            pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
                                            rhoncus ut, imperdiet a, venenatis vitae, justo.
                                        </p>
                                    </div>
                                    <div class="item__avatar"></div>
                                    <p class="item__people">Josh Doe</p>
                                    <p class="item__occupation">Ceo of Google</p>
                                </div>

                                <div class="item">
                                    <div class="item__content">
                                        <img class="item__img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Google-favicon-2015.png/150px-Google-favicon-2015.png" alt="Google"><span class="item__name">google</span>
                                        <p class="item__description">
                                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                            quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel,
                                            aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                                            venenatis vitae, justo.
                                        </p>
                                    </div>
                                    <div class="item__avatar"></div>
                                    <p class="item__people">Mary Tompson</p>
                                    <p class="item__occupation">Ceo of Dribbble</a>
                                </div>

                                <div class="item">
                                    <div class="item__content">
                                        <img class="item__img" src="https://www.hrexaminer.com/wp-content/uploads/2016/10/2016-10-11-hrexaminer-stackoverflow-6-xxl-sq-250px.png" alt="Stackoverflow"><span class="item__name">stackoverflow</span>
                                        <p class="item__description">
                                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                                            consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec,
                                            vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis
                                            vitae, justo.
                                        </p>
                                    </div>
                                    <div class="item__avatar"></div>
                                    <p class="item__people">Andrew Palmer</p>
                                    <p class="item__occupation">Ceo of Slack</a>
                                </div>

                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <img class="carousel-control__img" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMxLjQ5NCAzMS40OTQiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDMxLjQ5NCAzMS40OTQ7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPHBhdGggZD0iTTEwLjI3Myw1LjAwOWMwLjQ0NC0wLjQ0NCwxLjE0My0wLjQ0NCwxLjU4NywwYzAuNDI5LDAuNDI5LDAuNDI5LDEuMTQzLDAsMS41NzFsLTguMDQ3LDguMDQ3aDI2LjU1NCAgYzAuNjE5LDAsMS4xMjcsMC40OTIsMS4xMjcsMS4xMTFjMCwwLjYxOS0wLjUwOCwxLjEyNy0xLjEyNywxLjEyN0gzLjgxM2w4LjA0Nyw4LjAzMmMwLjQyOSwwLjQ0NCwwLjQyOSwxLjE1OSwwLDEuNTg3ICBjLTAuNDQ0LDAuNDQ0LTEuMTQzLDAuNDQ0LTEuNTg3LDBsLTkuOTUyLTkuOTUyYy0wLjQyOS0wLjQyOS0wLjQyOS0xLjE0MywwLTEuNTcxTDEwLjI3Myw1LjAwOXoiIGZpbGw9IiM2Zjc5ZmYiLz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />

                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <img class="carousel-control__img" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMxLjQ5IDMxLjQ5IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMS40OSAzMS40OTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiPgo8cGF0aCBkPSJNMjEuMjA1LDUuMDA3Yy0wLjQyOS0wLjQ0NC0xLjE0My0wLjQ0NC0xLjU4NywwYy0wLjQyOSwwLjQyOS0wLjQyOSwxLjE0MywwLDEuNTcxbDguMDQ3LDguMDQ3SDEuMTExICBDMC40OTIsMTQuNjI2LDAsMTUuMTE4LDAsMTUuNzM3YzAsMC42MTksMC40OTIsMS4xMjcsMS4xMTEsMS4xMjdoMjYuNTU0bC04LjA0Nyw4LjAzMmMtMC40MjksMC40NDQtMC40MjksMS4xNTksMCwxLjU4NyAgYzAuNDQ0LDAuNDQ0LDEuMTU5LDAuNDQ0LDEuNTg3LDBsOS45NTItOS45NTJjMC40NDQtMC40MjksMC40NDQtMS4xNDMsMC0xLjU3MUwyMS4yMDUsNS4wMDd6IiBmaWxsPSIjNmY3OWZmIi8+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />

                            </a>
                        </div>

                    </div>



                </div>
            </div>
        </div>

        <div class="sect sect--white sect--no-padding">
            <div class="container">
                <div class="row row--center">
                    <div class="col-md-3 col-xs-6 col-sm-6 partner">
                        <a href="#" class="partner__link">
                            <img class="partner_img" src="https://image.ibb.co/mOtHRw/fblogo.png">
                        </a>
                    </div>

                    <div class="col-md-3  col-xs-6 col-sm-6 partner">
                        <a href="#" class="partner__link">
                            <img class="partner_img" src="https://image.ibb.co/nfpXRw/twitterlogo.png">
                        </a>
                    </div>


                    <div class="col-md-3 col-xs-6 col-sm-6 partner">
                        <a href="#" class="partner__link">
                            <img class="partner_img" src="https://image.ibb.co/imgOYb/googlelogo.png">
                        </a>
                    </div>

                    <div class="col-md-3 col-xs-6 col-sm-6 partner">
                        <a href="#" class="partner__link">
                            <img class="partner_img" src="https://image.ibb.co/ebGAeG/dribbblelogo.png">
                        </a>
                    </div>


                </div>
                <div class="row row--center">
                    <div class="col-md-3 col-xs-6 col-sm-6 partner">
                        <a href="#" class="partner__link">
                            <img class="partner_img" src="https://image.ibb.co/npV8Yb/gitlogo.png">
                        </a>
                    </div>

                    <div class="col-md-3 col-xs-6 col-sm-6 partner">
                        <a href="#" class="partner__link">
                            <img class="partner_img" src="https://image.ibb.co/cGyZ6w/stacklogo.png">
                        </a>
                    </div>


                    <div class="col-md-3 col-xs-6 col-sm-6 partner">
                        <a href="#" class="partner__link">
                            <img class="partner_img" src="https://image.ibb.co/ij03zG/inlogo.png">
                        </a>
                    </div>

                    <div class="col-md-3 col-xs-6 col-sm-6 partner">
                        <a href="#" class="partner__link">
                            <img class="partner_img" src="https://image.ibb.co/ekqdzG/codepenlogo.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="sect sect--white">
            <div class="container">
                <div class="row">
                    <h1 class="row__title">
                        Our blog
                    </h1>
                    <h2 class="row__sub">Sneak peeks from our writings</h2>
                </div>

                <div class="row row--margin">
                    <div class="col-md-6 article-pre__col">
                        <a href="#" class="article-pre ">
                            <div class="article-pre__img article-pre__img--first"></div>
                            <h2 class="article-pre__info">
                                <span class="article-pre__cat">Protips • </span><span class="article-pre__aut"> by Ann
                                    Timothy</span> <span class="article-pre__date"> - 5 mins read</span>
                            </h2>
                            <h1 class="article-pre__title">How to improve analytics using few tools in Bricks<span class="article-pre__arrow--purple"> →</span></h1>
                        </a>
                    </div>

                    <div class="col-md-6 article-pre__col">
                        <a href="#" class="article-pre ">
                            <div class="article-pre__img article-pre__img--second"></div>
                            <h2 class="article-pre__info">
                                <span class="article-pre__cat">Pricing • </span><span class="article-pre__aut"> by Josh
                                    Ford</span> <span class="article-pre__date"> - 5 mins read</span>
                            </h2>
                            <h1 class="article-pre__title">Rich Thornett & Dan Coderholm about Dribbble in early
                                2009<span class="article-pre__arrow--purple">→</span></h1>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 article-pre__col">
                        <a href="#" class="article-pre ">
                            <div class="article-pre__img article-pre__img--fourth"></div>
                            <h2 class="article-pre__info">
                                <span class="article-pre__cat">Success Stories • </span><span class="article-pre__aut">
                                    by Andrew Lincoln</span> <span class="article-pre__date"> - 5 mins read</span>
                            </h2>
                            <h1 class="article-pre__title">Steward Butterfield told us about his startup Slack<span class="article-pre__arrow--purple"> →</span></h1>
                        </a>
                    </div>

                    <div class="col-md-6 article-pre__col">
                        <a href="#" class="article-pre ">
                            <div class="article-pre__img article-pre__img--third"></div>
                            <h2 class="article-pre__info">
                                <span class="article-pre__cat">Protips • </span><span class="article-pre__aut"> by Ann
                                    Timothy</span> <span class="article-pre__date"> - 5 mins read</span>
                            </h2>
                            <h1 class="article-pre__title">How to improve analytics using few tools in Bricks<span class="article-pre__arrow--purple"> →</span></h1>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="sect sect--padding-bottom">
            <div class="container">
                <div class="row">
                    <h1 class="row__title">
                        Contact Us </h1>
                    <h2 class="row__sub">Feel free to ask any questions</h2>
                </div>
                <div class="row row--margin">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="contacts">
                            <a href="#" class="contacts__link"><img src="https://image.ibb.co/kcVou6/path3000.png">
                                <h1 class="contacts_title-ag">Bricks<span class="contacts--light">.io</span></h1>
                            </a>
                            <p class="contacts__address">
                                431 Broadway, Floor 1-2<br>
                                New York NY 10013<br>
                                United States
                            </p>
                            <p class="contacts__info">
                                tel. <a href="#" class="contacts__info-link">+1 234 567 890</a>
                            </p>
                            <p class="contacts__info">
                                m. <a href="#" class="contacts__info-link">info@bricks.io</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form id="contact" class="form">
                            <div class="form-group">
                                <select class="form__field form__select">
                                    <option selected value>Choose topic*</option>
                                    <option value=1>Pricing</option>
                                    <option value=2>Success Stories</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="form__field--half">
                                    <input type="text" placeholder="Name*" class="form__field form__text"></input>
                                </div>
                                <div class="form__field--half">
                                    <input type="text" placeholder="Surname" class="form__field form__text"></input>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form__field--half">
                                    <input type="text" placeholder="Email address*" class="form__field form__text"></input>
                                </div>
                                <div class="form__field--half">
                                    <input type="text" placeholder="Phone number" class="form__field form__text"></input>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea type="text" placeholder="Your messsage*" class="form__field form__textarea"></textarea>
                                <button class="btn btn--up btn--width" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>

        <div class="sect sect--violet ">
            <img src="https://image.ibb.co/fWyVtb/path3762.png" class="career-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="career_title">Oh! Your have digged our website in search for the new job?</h1>
                        <h1 class="career_sub">We will pleased to have you onboard! Check open positions.</h1>
                        <a href="#" class="btn btn--white btn--width">Careers</a>
                    </div>
                </div>
            </div>

        </div>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-xs-6">
                        <img class="footer__img" src="https://image.ibb.co/kcVou6/path3000.png">
                        <h1 class="footer__title">Bricks<span class="footer__light">.io</span></h1>
                    </div>
                    <div class="col-md-10 col-xs-6">
                        <div class="footer__social">
                            <a href="#" class="footer__social-l">
                                <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDYxMiA2MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDYxMiA2MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNjEyLDExNi4yNThjLTIyLjUyNSw5Ljk4MS00Ni42OTQsMTYuNzUtNzIuMDg4LDE5Ljc3MmMyNS45MjktMTUuNTI3LDQ1Ljc3Ny00MC4xNTUsNTUuMTg0LTY5LjQxMSAgICBjLTI0LjMyMiwxNC4zNzktNTEuMTY5LDI0LjgyLTc5Ljc3NSwzMC40OGMtMjIuOTA3LTI0LjQzNy01NS40OS0zOS42NTgtOTEuNjMtMzkuNjU4Yy02OS4zMzQsMC0xMjUuNTUxLDU2LjIxNy0xMjUuNTUxLDEyNS41MTMgICAgYzAsOS44MjgsMS4xMDksMTkuNDI3LDMuMjUxLDI4LjYwNkMxOTcuMDY1LDIwNi4zMiwxMDQuNTU2LDE1Ni4zMzcsNDIuNjQxLDgwLjM4NmMtMTAuODIzLDE4LjUxLTE2Ljk4LDQwLjA3OC0xNi45OCw2My4xMDEgICAgYzAsNDMuNTU5LDIyLjE4MSw4MS45OTMsNTUuODM1LDEwNC40NzljLTIwLjU3NS0wLjY4OC0zOS45MjYtNi4zNDgtNTYuODY3LTE1Ljc1NnYxLjU2OGMwLDYwLjgwNiw0My4yOTEsMTExLjU1NCwxMDAuNjkzLDEyMy4xMDQgICAgYy0xMC41MTcsMi44My0yMS42MDcsNC4zOTgtMzMuMDgsNC4zOThjLTguMTA3LDAtMTUuOTQ3LTAuODAzLTIzLjYzNC0yLjMzM2MxNS45ODUsNDkuOTA3LDYyLjMzNiw4Ni4xOTksMTE3LjI1Myw4Ny4xOTQgICAgYy00Mi45NDcsMzMuNjU0LTk3LjA5OSw1My42NTUtMTU1LjkxNiw1My42NTVjLTEwLjEzNCwwLTIwLjExNi0wLjYxMi0yOS45NDQtMS43MjFjNTUuNTY3LDM1LjY4MSwxMjEuNTM2LDU2LjQ4NSwxOTIuNDM4LDU2LjQ4NSAgICBjMjMwLjk0OCwwLDM1Ny4xODgtMTkxLjI5MSwzNTcuMTg4LTM1Ny4xODhsLTAuNDIxLTE2LjI1M0M1NzMuODcyLDE2My41MjYsNTk1LjIxMSwxNDEuNDIyLDYxMiwxMTYuMjU4eiIgZmlsbD0iIzcyOTNiMyIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                            </a>
                            <a href="#" class="footer__social-l">
                                <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDk2LjEyNCA5Ni4xMjMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDk2LjEyNCA5Ni4xMjM7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNNzIuMDg5LDAuMDJMNTkuNjI0LDBDNDUuNjIsMCwzNi41Nyw5LjI4NSwzNi41NywyMy42NTZ2MTAuOTA3SDI0LjAzN2MtMS4wODMsMC0xLjk2LDAuODc4LTEuOTYsMS45NjF2MTUuODAzICAgYzAsMS4wODMsMC44NzgsMS45NiwxLjk2LDEuOTZoMTIuNTMzdjM5Ljg3NmMwLDEuMDgzLDAuODc3LDEuOTYsMS45NiwxLjk2aDE2LjM1MmMxLjA4MywwLDEuOTYtMC44NzgsMS45Ni0xLjk2VjU0LjI4N2gxNC42NTQgICBjMS4wODMsMCwxLjk2LTAuODc3LDEuOTYtMS45NmwwLjAwNi0xNS44MDNjMC0wLjUyLTAuMjA3LTEuMDE4LTAuNTc0LTEuMzg2Yy0wLjM2Ny0wLjM2OC0wLjg2Ny0wLjU3NS0xLjM4Ny0wLjU3NUg1Ni44NDJ2LTkuMjQ2ICAgYzAtNC40NDQsMS4wNTktNi43LDYuODQ4LTYuN2w4LjM5Ny0wLjAwM2MxLjA4MiwwLDEuOTU5LTAuODc4LDEuOTU5LTEuOTZWMS45OEM3NC4wNDYsMC44OTksNzMuMTcsMC4wMjIsNzIuMDg5LDAuMDJ6IiBmaWxsPSIjNzI5M2IzIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                            </a>

                            <a href="#" class="footer__social-l">
                                <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDQzOC41MzMgNDM4LjUzMyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDM4LjUzMyA0MzguNTMzOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggZD0iTTQwOS4xMzMsMTA5LjIwM2MtMTkuNjA4LTMzLjU5Mi00Ni4yMDUtNjAuMTg5LTc5Ljc5OC03OS43OTZDMjk1LjczNiw5LjgwMSwyNTkuMDU4LDAsMjE5LjI3MywwICAgYy0zOS43ODEsMC03Ni40Nyw5LjgwMS0xMTAuMDYzLDI5LjQwN2MtMzMuNTk1LDE5LjYwNC02MC4xOTIsNDYuMjAxLTc5LjgsNzkuNzk2QzkuODAxLDE0Mi44LDAsMTc5LjQ4OSwwLDIxOS4yNjcgICBjMCwzOS43OCw5LjgwNCw3Ni40NjMsMjkuNDA3LDExMC4wNjJjMTkuNjA3LDMzLjU5Miw0Ni4yMDQsNjAuMTg5LDc5Ljc5OSw3OS43OThjMzMuNTk3LDE5LjYwNSw3MC4yODMsMjkuNDA3LDExMC4wNjMsMjkuNDA3ICAgczc2LjQ3LTkuODAyLDExMC4wNjUtMjkuNDA3YzMzLjU5My0xOS42MDIsNjAuMTg5LTQ2LjIwNiw3OS43OTUtNzkuNzk4YzE5LjYwMy0zMy41OTYsMjkuNDAzLTcwLjI4NCwyOS40MDMtMTEwLjA2MiAgIEM0MzguNTMzLDE3OS40ODUsNDI4LjczMiwxNDIuNzk1LDQwOS4xMzMsMTA5LjIwM3ogTTIxOS4yNywzMS45NzdjNDcuMjAxLDAsODguNDEsMTUuNjA3LDEyMy42MjEsNDYuODJsLTMuNTY5LDQuOTkzICAgYy0xLjQyNywyLjAwMi00Ljk5Niw1Ljg1Mi0xMC43MDQsMTEuNTY1Yy01LjcwOSw1LjcwOC0xMS45NDMsMTEuMTM2LTE4LjY5OSwxNi4yNzRjLTYuNzYyLDUuMTQtMTUuOTQsMTAuOTkyLTI3LjU1NSwxNy41NTkgICBjLTExLjYxMSw2LjU2Ny0yMy45ODIsMTIuMzI4LTM3LjExNywxNy4yNzZjLTIxLjg4Ny00MC4zNTUtNDUuMjk2LTc2LjcwOS03MC4yMzEtMTA5LjA2NCAgIEMxOTAuMDU1LDMzLjc4NCwyMDQuODA1LDMxLjk3NywyMTkuMjcsMzEuOTc3eiBNNzIuNTI0LDEwMy4wNmMxOC4yNzEtMjMuMDI2LDQwLjUzNy00MC43Myw2Ni44MDYtNTMuMSAgIGMyMy42MDEsMzEuNDA1LDQ2LjgyLDY3LjM4MSw2OS42NjIsMTA3LjkyMWMtNTcuODYyLDE1LjIyNy0xMTUuNTMyLDIyLjg0MS0xNzMuMDE0LDIyLjgzOCAgIEM0Mi4wNzIsMTUxLjk4LDU0LjI1MywxMjYuMDkxLDcyLjUyNCwxMDMuMDZ6IE00NC41NCwyODYuNzk0Yy04LjM3Ni0yMS40MTItMTIuNTYzLTQzLjkyMy0xMi41NjMtNjcuNTI3ICAgYzAtMi42NjYsMC4wOTgtNC42NjUsMC4yODYtNS45OTZjNjguOTA1LDAsMTMyLjk1NS04Ljg0OCwxOTIuMTQ5LTI2LjU1M2M2LjA5MiwxMS44LDExLjEzNiwyMi4zNjQsMTUuMTMzLDMxLjY5MyAgIGMtMC43NzEsMC4zOC0xLjk5OSwwLjgwNi0zLjcxMywxLjI4M2MtMS43MTksMC40NzYtMi45NTMsMC44MDYtMy43MjEsMC45OTlsLTEwLjU2MSwzLjcxMSAgIGMtNy4yMzYsMi42NjYtMTYuNzA4LDcuMjM1LTI4LjQwOSwxMy43MDNjLTExLjcwNCw2LjQ3OC0yNC4xMjMsMTQuMTgyLTM3LjI1NywyMy4xM2MtMTMuMTM0LDguOTQ5LTI2LjY5NiwyMC43OTctNDAuNjg0LDM1LjU1MyAgIGMtMTMuOTksMTQuNzUtMjUuNzQzLDMwLjU5MS0zNS4yNiw0Ny41M0M2NC43MTMsMzI3LjM4MSw1Mi45MTQsMzA4LjIsNDQuNTQsMjg2Ljc5NHogTTIxOS4yNyw0MDYuNTYgICBjLTQ0LjU0LDAtODQuMzItMTQuMjc3LTExOS4zNDMtNDIuODI1bDQuMjgzLDMuMTQyYzYuNjYxLTE0LjY2LDE2LjQ2Mi0yOC43NDYsMjkuNDA4LTQyLjI1NyAgIGMxMi45NDQtMTMuNTExLDI1LjQxLTI0LjQxMywzNy40MDEtMzIuNjk1YzExLjk5MS04LjI3NCwyNS4wMjgtMTYuMDc3LDM5LjExNS0yMy40MTRjMTQuMDg0LTcuMzIzLDIzLjY5MS0xMS45OTEsMjguODM1LTEzLjk4MyAgIGM1LjE0LTEuOTk4LDkuMjMzLTMuNTcyLDEyLjI3OC00LjcxNmwwLjU2OC0wLjI4N2gwLjU3NWMxOC42NDcsNDguOTE2LDMxLjk3Nyw5Ni4zMTMsMzkuOTY4LDE0Mi4xODQgICBDMjY4Ljc1Niw0MDEuNjExLDI0NC4zOTcsNDA2LjU1NywyMTkuMjcsNDA2LjU2eiBNMzc2Ljg3NiwzMjAuNDc5Yy0xNC4wODYsMjEuNzk2LTMxLjY5NiwzOS44MzQtNTIuODE3LDU0LjEwNCAgIGMtNy44MS00My43NzYtMTkuOTg1LTg4LjQxNS0zNi41NDktMTMzLjkwMmMzNy44NzctNS45MDcsNzYuOC0zLjE0MiwxMTYuNzcxLDguMjc0ICAgQzQwMC4wOTIsMjc0Ljg0MSwzOTAuOTU1LDI5OC42ODcsMzc2Ljg3NiwzMjAuNDc5eiBNNDAzLjcwNiwyMTYuNjk4Yy0xLjkwMy0wLjM3OC00LjI4NS0wLjgxLTcuMTM5LTEuMjgzICAgYy0yLjg1NC0wLjQ3My02LjMzMS0xLjA0Ny0xMC40MjQtMS43MTNjLTQuMDg3LTAuNjY2LTguNjYyLTEuMjgzLTEzLjcwMi0xLjg1NWMtNS4wNDUtMC41NzEtMTAuNDIxLTEuMDkzLTE2LjEzNi0xLjU2OSAgIGMtNS43MDgtMC40NzgtMTEuOC0wLjg1NS0xOC4yNjgtMS4xNDNjLTYuNDc5LTAuMjg0LTEzLjA0Mi0wLjQyOC0xOS43MDUtMC40MjhjLTYuNjU2LDAtMTMuNjU3LDAuMTkzLTIwLjk4MSwwLjU3MSAgIGMtNy4zMjYsMC4zNzUtMTQuNDE0LDEuMDQ5LTIxLjI2NSwxLjk5OWMtMC41NzUtMC45NTMtMS4yODctMi41MjQtMi4xNDMtNC43MTRjLTAuODU1LTIuMTg3LTEuNDc5LTMuODU1LTEuODQ4LTQuOTk3ICAgYy0zLjYyMS03Ljk5NC03LjgxLTE3LjAzNi0xMi41NzMtMjcuMTIxYzEzLjEzNC01LjMzMywyNS42NTItMTEuNDY5LDM3LjU1NS0xOC40MThjMTEuODkyLTYuOTQ5LDIxLjQwMi0xMy4xMzEsMjguNTQ0LTE4LjU1NSAgIGM3LjEzOS01LjQzLDEzLjg5NS0xMS4xODgsMjAuMjctMTcuMjc3YzYuMzc5LTYuMDksMTAuNTEzLTEwLjMyMywxMi40MjMtMTIuNzAzYzEuOTA2LTIuMzg0LDMuNzEzLTQuNzE0LDUuNDI0LTYuOTk1bDAuMjg3LTAuMjg4ICAgYzI3Ljc4OCwzMy44OCw0MS45NzQsNzIuODk3LDQyLjUzOCwxMTcuMDU5TDQwMy43MDYsMjE2LjY5OHoiIGZpbGw9IiM3MjkzYjMiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                            </a>

                            <a href="" class="footer__social-l">
                                <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDQzMC4xMTcgNDMwLjExNyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDMwLjExNyA0MzAuMTE3OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggaWQ9IkxpbmtlZEluIiBkPSJNNDMwLjExNywyNjEuNTQzVjQyMC41NmgtOTIuMTg4VjI3Mi4xOTNjMC0zNy4yNzEtMTMuMzM0LTYyLjcwNy00Ni43MDMtNjIuNzA3ICAgYy0yNS40NzMsMC00MC42MzIsMTcuMTQyLTQ3LjMwMSwzMy43MjRjLTIuNDMyLDUuOTI4LTMuMDU4LDE0LjE3OS0zLjA1OCwyMi40NzdWNDIwLjU2aC05Mi4yMTljMCwwLDEuMjQyLTI1MS4yODUsMC0yNzcuMzJoOTIuMjEgICB2MzkuMzA5Yy0wLjE4NywwLjI5NC0wLjQzLDAuNjExLTAuNjA2LDAuODk2aDAuNjA2di0wLjg5NmMxMi4yNTEtMTguODY5LDM0LjEzLTQ1LjgyNCw4My4xMDItNDUuODI0ICAgQzM4NC42MzMsMTM2LjcyNCw0MzAuMTE3LDE3Ni4zNjEsNDMwLjExNywyNjEuNTQzeiBNNTIuMTgzLDkuNTU4QzIwLjYzNSw5LjU1OCwwLDMwLjI1MSwwLDU3LjQ2MyAgIGMwLDI2LjYxOSwyMC4wMzgsNDcuOTQsNTAuOTU5LDQ3Ljk0aDAuNjE2YzMyLjE1OSwwLDUyLjE1OS0yMS4zMTcsNTIuMTU5LTQ3Ljk0QzEwMy4xMjgsMzAuMjUxLDgzLjczNCw5LjU1OCw1Mi4xODMsOS41NTh6ICAgIE01LjQ3Nyw0MjAuNTZoOTIuMTg0di0yNzcuMzJINS40NzdWNDIwLjU2eiIgZmlsbD0iIzcyOTNiMyIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </body>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script src="./{{asset('js/script.js')}}"></script>

</body>

</html>