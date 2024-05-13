<header>
    <div class="header_body">
        <div class="header_logo">
            <i class="fa-solid fa-newspaper"></i>
            <a href="{{route('front.home')}}"><span>NewsPortal</span></a>
        </div>
        <div class="header_nav">
            <ul class="header_list">
                @foreach($categories as $category)
                    <li class="header_item"><a href="{{route('category.show', $category->id)}}">{{$category->title}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="header_enter">
            <a href=""><i class="fa-solid fa-door-open"></i>logout</a>
            <a href=""><i class="fa-solid fa-door-closed"></i>login</a>
        </div>
    </div>
</header>
