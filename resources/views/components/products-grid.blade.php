<div class="container mt-4">
    <div id="featured-links" class="boxed-wrapper clear-fix">
        @foreach ($products as $item)
            <div class="featured-link">
                <a href="{{$item['href']}}">
                    <img src="{{$item['image']}}" alt="{{$item['alt']}}" width="522" height="306" loading="lazy" fetchpriority="auto" />
                </a>
            </div>
        @endforeach
    </div>
</div>