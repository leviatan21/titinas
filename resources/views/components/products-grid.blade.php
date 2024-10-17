<div class="container mt-4 mb-6">
    <div id="featured-links" class="boxed-wrapper clearfix">
        @foreach ($products as $item)
            <div class="featured-link">
                <a href="{{$item['href']}}">
                    <img src="{{$item['image']}}" alt="{{$item['alt']}}" 
                        class="img-fluid" width="522" height="306" 
                        decoding="async" loading="lazy" fetchpriority="auto" 
                    />
                </a>
            </div>
        @endforeach
    </div>
</div>