<nav class="custom-navbar" data-spy="affix" data-offset-top="20">
    <div class="container">
        <a class="logo" href="#">Meyawo</a>
        <ul class="nav">
            @foreach ($data as $d)    
            <li class="item">
                <a class="link" href="#{{ $d->url }}">{{ $d->nama_menu }}</a>
            </li>
            @endforeach
        </ul>
        <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </a>
    </div>
</nav>
