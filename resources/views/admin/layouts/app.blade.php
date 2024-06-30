<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Spotlyf Admin">
    <link rel="shortcut icon" href="{{asset('public/frontend/assets/img/favicon.png')}}" type="image/x-icon">
    <title>@yield('title') - Cloud Guru</title>

    @include('admin/partials/header')

    @stack('css')


</head>



<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static" data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    @include('admin/includes/common-header')
    
 
    
    <div class="app-content content kanban-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="alert_message">
                @include('admin/includes/message-alert')
            </div>
            <div class="content-header row">
                @yield('row')
            </div>
            <div class="content-body">

                <section class="app-kanban-wrapper">
                    @yield('content')
                </section>

                
            </div>
        </div>
    </div>

    @include('admin/includes/common-footer')

    @include('admin/partials/footer')

    @stack('js')
</body>


</html>
