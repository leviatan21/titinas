
<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2">
    @foreach ($posts as $item)
    <div class="col">
        <div class="card manual">
            <div class="card-body">
                @if(!empty($item['image']))
                <div class="col media">
                    <a href="{{$item['link']['href']}}" title="{{$item['link']['title']}}">
                        <img src="{{$item['image']}}" alt="{{$item['title']}}" 
                        class="card-img" width="500"
                        decoding="async" loading="lazy" fetchpriority="auto"
                        />
                    </a>
                </div>
                @endif
                <div class="col content">
                    <h2 class="card-title">
                        <a href="{{$item['link']['href']}}" title="{{$item['link']['title']}}">
                            {{$item['title']}}
                        </a>
                    </h2>

                    @if(!empty($item['description']))
                    <p class="card-text">{!!$item['description']!!}</p>
                    @endif

                    <a class="btn btn-sm btn-outline-brand mt-auto text-center" href="{{$item['link']['href']}}" title="{{$item['link']['title']}}">
                        {{$item['link']['title']}}
                    </a>

                    @if(!empty($item['author']) || !empty($item['dateHumans']))
                        <div class="footer">
                            @if(!empty($item['author']))
                            <div class="post-author">
                                <a href="{{$item['author']['href']}}" title="{{$item['author']['title']}}">
                                    {{$item['author']['title']}}
                                </a>
                            </div>
                            @endif
                            @if(!empty($item['dateHumans']))
                            <div class="post-date">
                                {{$item['dateHumans']}}
                            </div>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@if (!empty($paginator) && $paginator->lastPage() > 1)
@include('components.paginator', ['paginator'=>$paginator])
@endif