<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Karim website</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="description" content="Добро пожаловать на zerkalo-tatarstan.ru — ваш идеальный партнер в мире стеклообработки! Мы специализируемся на изготовлении высококачественных материалов из обработанного стекла, предоставляя индивидуальные решения для каждого заказчика. Наши опытные мастера готовы подготовить стеклянные изделия точно по вашим размерам, а также гарантировать безопасность с помощью тщательной обработки кромок.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="/images/favicon.png">
        <link rel="apple-touch-icon" href="/images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/images/apple-touch-icon-114x114.png">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="/css/font-icons.min.css">
        <link rel="stylesheet" type="text/css" href="/css/theme-vendors.min.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
        <link rel="stylesheet" type="text/css" href="/css/responsive.css" />
    </head>
    <body class="bg-smoky-black">
        <div class="left-sidebar-wrapper" data-sticky_parent>
            <!-- start left menu -->
            @livewire('load-main-menu')
            <!-- start sidebar section -->
            <div class="sidebar-wrapper" data-sticky_column>


                @yield('content')


                <!-- start footer -->
                <footer class="footer-creative-agency footer-dark border-top border-color-white-transparent">



                    <div class="footer-bottom padding-one-tb xs-no-padding-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-6 order-2 order-md-0 text-sm-center text-md-start last-paragraph-no-margin">
                                    <p class="text-extra-medium">&copy; 2023 Coded by <a href="https://www.raimita.lv/" target="_blank" class="text-decoration-line-bottom text-white">www.raimita.lv</a></p>
                                </div>

                            </div>
                        </div>
                    </div>


                </footer>
                <!-- end footer -->
            </div>
            <!-- end sidebar section -->
        </div>
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
        <!-- end scroll to top -->
        <!-- javascript -->
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/theme-vendors.min.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>
    </body>
</html>
