<header>
    <div class="header_body">
        <div class="header_logo">
            <i class="fa-solid fa-newspaper"></i>
            <a href="{{route('front.home')}}"><span>NewsPortal</span></a>
        </div>
        <div class="header_nav">
            <ul class="header_list">
                @if(isset($categories) && count($categories) > 0)
                    @foreach($categories as $category)
                        <li class="header_item">
                            <a href="{{route('category.show', $category->id)}}">
                                {{$category->title}}
                            </a>
                        </li>
                    @endforeach
                @else
                    <li class="header_item">
                        Категорий пока нет ... добавти категорию.
                    </li>
                @endif
            </ul>
            <div class="header_burger">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="header_enter">
            @auth
                <a href="{{route('logout')}}"><i class="fa-solid fa-door-open"></i>logout</a>
            @endauth
            @guest
                <a href="{{route('register.index')}}"><i class="fa-solid fa-door-open"></i>register</a>
                <a href="{{route('login.index')}}"><i class="fa-solid fa-door-closed"></i>login</a>
            @endguest
        </div>
    </div>
</header>
