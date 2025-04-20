<header id="header" class="clearfix">
    <div class="container clearfix">
        <div id="menu-button">
            <div id="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span>
            </div>
        </div>

        <nav id="main-nav">
            <ul id="options" class="option-set clearfix" data-option-key="filter">
                <li><a href="{{ route('home') }}" class="splink">Home</a></li>
                <li><a href="#about" class="splink">About</a></li>
                <li><a href="#services" class="splink">Services</a></li>
                <li>
                    <a href="#" class="sub-nav-toggle">Portfolio</a>
                    <ul class="sub-nav hidden">
                        @php
                            $categories = App\Models\PortfolioCategory::all();
                        @endphp
                        @foreach ($categories as $category)
                            <li><a href="#{{ str_replace(' ', '-', strtolower($category->name)) }}"
                                    class="splink">{{ $category->name }}</a></li>
                        @endforeach
                        <li><a href="#portfolio" class="splink">Show All</a></li>
                    </ul>
                </li>
                <li><a href="#contact" class="splink">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
