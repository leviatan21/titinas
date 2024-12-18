
<div class="row row-cols-1 row-cols-sm-1 row-cols-md-3">
    @foreach ($posts as $item)
    <div class="col mb-3">
        <div class="card blog h-100">
            @if(!empty($item['image']))
            <a href="{{$item['link']['href']}}" title="{{$item['link']['title']}}">
                <img src="{{$item['image']}}" alt="{{$item['title']}}" 
                    class="card-img-top" width="500"
                    decoding="async" loading="lazy" fetchpriority="auto"
                />
            </a>
            @endif
            <div class="card-body d-flex flex-column">
                <h2 class="card-title post-title">
                    <a href="{{$item['link']['href']}}" title="{{$item['link']['title']}}">
                        {{$item['title']}}
                    </a>
                </h2>

                @if(!empty($item['author']) || !empty($item['dateHumans']))
                <div class="row">
                    @if(!empty($item['author']))
                    <div class="col text-left">
                        <span class="post-author">
                            <a href="{{$item['author']['href']}}" title="{{$item['author']['title']}}">
                                {{$item['author']['title']}}
                            </a>
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

                <a class="btn btn-sm btn-outline-brand mt-auto text-center" href="{{$item['link']['href']}}" title="{{$item['link']['title']}}">
                    {{$item['link']['title']}}
                </a>

                <ul class="post-footer">

                    @if(!empty($item['category']))
                    <li class="post-categories">
                        @foreach ($item['category'] as $category) 
                            <a href="{{$category['href']}}" title="{{$category['title']}}">{{$category['title']}}</a>
                        @endforeach
                    </li>
                    @endif

                    @if(!empty($item['tag']))
                    <li class="post-tags">
                        @foreach ($item['tag'] as $tag)
                            <a href="{{$tag['href']}}" title="{{$tag['title']}}">{{$tag['title']}}</a>
                        @endforeach
                    </li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
    @endforeach
</div>

@if (!empty($paginator) && $paginator->lastPage() > 1)
@include('components.paginator', ['paginator'=>$paginator])
@endif
