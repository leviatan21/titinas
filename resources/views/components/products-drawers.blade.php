<div id="featured-links" class="boxed-wrapper mt-4 clearfix">
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