<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>backEnd | appssiluman</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
        <meta content="Techzaa" name="author" />
        @include('partial.stylecss')
    </head>
    <body>
        <div class="wrapper">
            @include('partial.topbar')
            @include('partial.leftsidebar')
            <div class="content-page">
                <div class="content">

                    @yield('dashboard');

                </div>
            @include('partial.footer')
            </div>
        </div>
        @include('partial.themesetting')
        @include('partial.stylejs')
    </body>
</html>
