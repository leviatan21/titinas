
    <div id="main-nav" class="clear-fix">
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
                    <li class="menu-item menu-item-type-custom menu-item-object-custom {{$SEO->CANONICAL == $item['href'] ? 'current-menu-ancestor' : ''}}" itemprop="name" role="menuitem">
                        <a href="{{$item['href']}}" @isset($item['target']) target="{{$item['target']}}" @endisset @isset($item['rel']) rel="{{$item['rel']}}" @endisset @isset($item['label']) title="{{$item['label']}}" @endisset>
                            @isset($item['image']) <img src="{{$item['image']}}" class="menu-item-image" alt="{{$item['label']}}" width="30" height="25" /> @endisset
                            {{$item['text']}}
                        </a>
                    </li>
@endforeach
                </ul>
            </nav>
            <nav class="mobile-menu-container">
                <ul id="mobile-menu">
@foreach ($MENU as $item)
                    <li class="menu-item menu-item-type-custom menu-item-object-custom">
                        <a href="{{$item['href']}}" @isset($item['target']) target="{{$item['target']}}" @endisset @isset($item['rel']) rel="{{$item['rel']}}" @endisset @isset($item['label']) aria-label="{{$item['label']}}" @endisset>
                            {{$item['text']}}
                        </a>
                    </li>
@endforeach
                </ul>
            </nav>
        </div>
    </div>