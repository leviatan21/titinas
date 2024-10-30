
<div id="main-nav" class="clearfix">
    <div class="boxed-wrapper">
        <div class="mobile-menu-btn">
            <div class="main-nav-sidebar">
                <div>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="mobile-menu-header">
                Bienvenidos a Titina's materiales para el arte y la creatividad
            </div>
        </div>

        <nav class="main-menu-container">
            <ul id="main-menu" itemscope itemtype="https://schema.org/SiteNavigationElement" role="menu">
            @foreach ($MENU as $item)
                <li class="menu-item {{($item['current']) ? 'current' : ''}}" itemprop="name" role="menuitem">
                    <a href="{{$item['href']}}" @isset($item['target']) target="{{$item['target']}}" @endisset @isset($item['rel']) rel="{{$item['rel']}}" @endisset @isset($item['label']) title="{{$item['label']}}" @endisset>
                    @isset($item['image'])
                        <img src="{{$item['image']}}" alt="{{$item['label']}}" class="menu-item-image" width="30" height="25" decoding="async" loading="lazy" fetchpriority="high" />
                    @endisset
                        {{$item['text']}}
                    </a>
                </li>
            @endforeach
            </ul>
        </nav>
        <nav class="mobile-menu-container">
            <ul id="mobile-menu">
            @foreach ($MENU as $item)
                <li class="menu-item {{($item['current']) ? 'current' : ''}}">
                    <a href="{{$item['href']}}" @isset($item['target']) target="{{$item['target']}}" @endisset @isset($item['rel']) rel="{{$item['rel']}}" @endisset @isset($item['label']) aria-label="{{$item['label']}}" @endisset>
                    @isset($item['image'])
                        <img src="{{$item['image']}}" class="menu-item-image" alt="{{$item['label']}}" width="30" height="25" decoding="async" loading="lazy" fetchpriority="high" />
                    @endisset
                        {{$item['text']}}
                    </a>
                </li>
            @endforeach
            </ul>
        </nav>
    </div>
</div>