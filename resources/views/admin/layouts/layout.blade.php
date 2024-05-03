<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPanel</title>
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free-6.5.2-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="header_navbar wrapper_content">
            <div class="header_navbar_logo">
                <div class="header_navbar_logo_icon">
                    <i class="fa-solid fa-hammer"></i>
                </div>
                <div class="header_navbar_logo_brand">
                    <a href="{{route('admin.home')}}">AdminPanel</a>
                </div>
            </div>
            <div class="header_navbar_menu">
                <ul>
                    <li>
                        <a href="{{route('admin.home')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{route('categories.index')}}">Categories</a>
                    </li>
                    <li>
                        <a href="{{route('tags.index')}}">Tags</a>
                    </li>
                    <li>
                        <a href="{{route('roles.index')}}">Roles</a>
                    </li>
                    <li>
                        <a href="#">Posts</a>
                    </li>
                    <li>
                        <a href="#">Users</a>
                    </li>
                    <li>
                        <a href="#">Comments</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="alerts_block">
            <div class="alerts_data">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="alerts_list">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="alerts_danger">
                        {{ session('error') }}
                    </div>
                @endif

                @if (session()->has('success'))
                    <div class="alerts_success">
                        <i class="fas fa-check"></i>
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
        @yield('content')
    </main>
    <footer class="footer">
        <div class="footer_content wrapper_content">
            <div class="footer_rights">
                Created by Soloviev NV in 2023, all rights reserved.
            </div>
        </div>
    </footer>
</div>
<script src="{{asset('assets/admin/js/jQueryv3.7.1.js')}}"></script>
<script>
    jQuery(() => {
        $(".header_navbar_menu [href]").each(function () {
            if (this.href === window.location.href) {
                $(this).addClass("active");
            }
        });
    });
</script>
</body>
</html>
