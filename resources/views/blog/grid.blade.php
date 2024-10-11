
<div class="container pt-4">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
        @foreach ($posts as $item)
        <div class="col mb-3">
            <div class="card h-100">
                @if(!empty($item['image']))
                <img src="{{$item['image']}}" class="card-img-top" alt="{{$item['title']}}">
                @endif
                <div class="card-body d-flex flex-column">
                    <h2 class="card-title">{{$item['title']}}</h2>

                    @if(!empty($item['author']) || !empty($item['dateHumans']))
                    <div class="row">
                        @if(!empty($item['author']))
                        <div class="col text-left">
                            <span class="post-author">
                                <a href="{{$item['author']['href']}}">{{$item['author']['title']}}</a>
                            </span>
                        </div>
                        @endif
                        @if(!empty($item['dateHumans']))
                        <div class="col text-right">
                            <span class="post-date">
                                {{$item['dateHumans']}}
                            </span>
                        </div>
                        @endif
                    </div>
                    @endif

                    @if(!empty($item['content']))
                    <p class="card-text my-4">{!!$item['content'][0]!!}</p>
                    @endif

                    <a class="btn btn-sm btn-outline-secondary mt-auto text-center" href="{{$item['link']['href']}}">
                        {{$item['link']['title']}}
                    </a>

                    <ul class="post-footer">

                        @if(!empty($item['category']))
                        <li class="post-categories">
                            @foreach ($item['category'] as $category) 
                                <a href="{{$category['href']}}">{{$category['title']}}</a>
                            @endforeach
                        </li>
                        @endif

                        @if(!empty($item['tag']))
                        <li class="post-tags">
                            @foreach ($item['tag'] as $tag)
                                <a href="{{$tag['href']}}">{{$tag['title']}}</a>
                            @endforeach
                        </li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@if (!empty($paginator))
@include('components.paginator', ['paginator'=> $paginator])
@endif