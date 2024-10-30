
<div class="container breadcrumb">
    <ol class="breadcrumb-list" itemscope itemtype="https://schema.org/BreadcrumbList">
        @foreach($BREADCRUMB as $link)
        <li class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a href="{{$link['item']}}" class="breadcrumb_link" itemprop="item">
                <span itemprop="name">{{$link['name']}}</span>
            </a>
            <meta itemprop="position" content="{{$link['position']}}" />
        </li>
        @endforeach
    </ol>
</div>