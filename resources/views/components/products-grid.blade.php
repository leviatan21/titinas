<div class="container mt-4 mb-6">
    <div id="featured-links" class="boxed-wrapper clearfix">
        @foreach ($products as $item)
            <div class="featured-link">
                <a href="{{$item['href']}}">
                    <img src="{{$item['image']}}" alt="{{$item['alt']}}" width="522" height="306" loading="lazy" fetchpriority="auto" />
                </a>
            </div>
        @endforeach
    </div>
</div>