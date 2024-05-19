<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free-6.5.2-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
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
                    <a class="header_navbar_site" href="{{route('front.home')}}">go Site...</a>
                </div>
            </div>
            <div class="header_navbar_menu">
                <ul>
                    <li>
                        <a href="{{route('admin.home')}}">home</a>
                    </li>
                    <li>
                        <a href="{{route('categories.index')}}">categories</a>
                    </li>
                    <li>
                        <a href="{{route('tags.index')}}">tags</a>
                    </li>
                    <li>
                        <a href="{{route('roles.index')}}">roles</a>
                    </li>
                    <li>
                        <a href="{{route('posts.index')}}">posts</a>
                    </li>
                    <li>
                        <a href="{{route('users.index')}}">users</a>
                    </li>
                    <li>
                        <a href="#">comments</a>
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
                        <i class="fa-solid fa-circle-exclamation"></i>
                        {{ session('error') }}
                        <i class="fa-solid fa-circle-exclamation"></i>
                    </div>
                @endif

                @if (session()->has('success'))
                    <div class="alerts_success">
                        <i class="fas fa-check"></i>
                        {{ session('success') }}
                        <i class="fas fa-check"></i>
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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
<script>
    $(function () {
        jQuery(() => {
            $(".header_navbar_menu [href]").each(function () {
                if (this.href === window.location.href) {
                    $(this).addClass("active");
                }
            });
        });
        $('#summernote').summernote({
            placeholder: 'Create text post',
            tabsize: 2,
            height: 220,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'italic', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            lang: 'ru-RU',
            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],

        });
        $('.select2').select2()
    });
</script>
</body>
</html>
