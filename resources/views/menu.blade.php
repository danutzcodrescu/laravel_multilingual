<header>
    <div class="menu-container">
        <div class="logo">
           <img src="https://usatftw.files.wordpress.com/2015/09/9455_san_francisco_49ers-primary-2009.gif?w=1000" />
        </div>
        <div class="menu-button" role="button">
          <span class="glyphicon glyphicon-menu-hamburger"></span>
          <span>Menu</span>
        </div>
        
        <nav>
            <ul>
                @foreach ($items as $key => $value)
                    @if ($key=='home')
                        <li><a href="/{{$lang}}/">{{$value}}</a></li>
                    @else
                        <li><a href="/{{$lang}}/{{$value}}">{{$value}}</a></li>
                    @endif
                  
                @endforeach
            </ul>
        </nav>
        <a class="contact" href="tel:0032495304278">
            <span class="glyphicon glyphicon-earphone"></span>
            <span>+32 495 304 278</span>
        </a>
        <a class="contact" href="mailto:manu.temeian@sef.com">
            <span class="glyphicon glyphicon-envelope"></span>
            <span>manu.temeian@sef.com</span>
        </a>
        
        <a class="contact" href="https://facebook.com">
            <span class="fa fa-facebook"></span>
        </a>
    </div>
</header>

