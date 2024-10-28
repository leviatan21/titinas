
<div class="single-navigation">

    @if (!empty($prev))
    <div class="previous-post">
        @if (!empty($prev['image']))
        <div class="post-media">
            <a href="{{$prev['link']['href']}}" title="{{$prev['title']}}">
                <img src="{{$prev['image']}}" alt="{{$prev['title']}}" 
                    class="img-fluid" width="75"
                    decoding="async" loading="lazy" fetchpriority="low"
                />
            </a>
        </div>
        @endif

        <div class="post-content">
            <div class="arrow-post">
                @include('components.svg.arrow-left-long')&nbsp;Anterior
            </div>
            <a href="{{$prev['link']['href']}}" title="{{$prev['title']}}">
                <div class="post-title">{{$prev['title']}}</div>
            </a>
        </div>
    </div>
    @endif

    @if (!empty($next))
    <div class="next-post">
        @if (!empty($next['image']))
        <div class="post-media">
            <a href="{{$next['link']['href']}}" title="{{$next['title']}}">
                <img src="{{$next['image']}}" alt="{{$next['title']}}" 
                    class="img-fluid" width="75"
                    decoding="async" loading="lazy" fetchpriority="low"
                />
            </a>
        </div>
        @endif
        <div class="post-content">
            <div class="arrow-post">
                @include('components.svg.arrow-right-long')&nbsp;Siguiente
            </div>
            <a href="{{$next['link']['href']}}" title="{{$next['title']}}">
                <div class="post-title">{{$next['title']}}</div>
            </a>
        </div>
    </div>
    @endif

</div>
