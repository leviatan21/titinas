
@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <article class="post type-post status-publish format-audio has-post-thumbnail hentry category-travel tag-automotive tag-music tag-sweet post_format-post-format-audio">
        @if(!empty($post['image']))
        <div class="post-media">
            <img src="{{$post['image']}}" class="card-img-top" alt="{{$post['title']}}" class="attachment-bard-full-thumbnail size-bard-full-thumbnail wp-post-image" decoding="async" />
        </div>
        @endif

    	<header class="post-header">
            <h1 class="post-title">{!!$post['title']!!}</h1>

            <span class="border-divider"></span>

            @if(!empty($post['dateHumans']))
            <div class="post-meta clear-fix">
                <span class="post-date">{{$post['dateHumans']}}</span>
            </div>
            @endif
        </header>

        <div class="post-content">
            @foreach ($post['content'] as $content)
            <p>{!!$content!!}</p>
            @endforeach
        </div>

        <footer class="post-footer">

            @if(!empty($post['category']))
            <div class="post-categories">
                @foreach ($post['category'] as $category)
                <a href="{{$category['href']}}" rel="category">{{$category['title']}}</a>
                @endforeach
            </div>
            @endif

            @if(!empty($post['tag']))
            <div class="post-tags">
                @foreach ($post['tag'] as $tag)
                <a href="{{$tag['href']}}" rel="tag">{{$tag['title']}}</a>
                @endforeach
            </div>
            @endif

            @if(!empty($post['author']['title']))
            <span class="post-author">
                By&nbsp;<a href="{{$post['author']['href']}}" title="{{$post['author']['title']}}" rel="author">{{$post['author']['title']}}</a>
            </span>
            @endif

        </footer>

        @if (!empty($post['schemamarkup']))
        @include('components.schemamarkup', ['schemamarkup' => $post['schemamarkup'] ])
        @endif
    </article>

    @if (!empty($prev) || !empty($next))
    <div class="single-navigation">
        @if (!empty($prev))
        <div class="previous-post">
            @if (!empty($prev['image']))
            <a href="{{$prev['link']['href']}}" title="{{$prev['title']}}">
                <div class="post-media">
                    <img src="{{$prev['image']}}" alt="{{$prev['title']}}" class="attachment-bard-single-navigation size-bard-single-navigation wp-post-image" decoding="async" loading="lazy" />
                </div>
            </a>
            @endif

            <div>
                <span>
                    <svg class="svg-inline--fa fa-long-arrow-alt-left fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="long-arrow-alt-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path></svg>
                    &nbsp;Anterior
                </span>
                <a href="{{$prev['link']['href']}}" title="{{$prev['title']}}">
                    <h5>{{$prev['title']}}</h5>
                </a>
            </div>
        </div>
        @endif

        @if (!empty($next))
        <div class="next-post">
            @if (!empty($next['image']))
                <a href="https://bard-free.wp-royal-themes.com/demo/must-look-fashionable/" title="{{$next['title']}}">
                <img src="{{$next['image']}}" alt="{{$next['title']}}" class="attachment-bard-single-navigation size-bard-single-navigation wp-post-image" decoding="async" loading="lazy" />
            </a>
            @endif
            <div>
                <span>
                    <svg class="svg-inline--fa fa-long-arrow-alt-right fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="long-arrow-alt-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"></path></svg>
                    &nbsp;Siguiente
                </span>
                <a href="{{$next['link']['href']}}" title="{{$next['title']}}">
                    <h5>{{$next['title']}}</h5>
                </a>
            </div>
        </div>
        @endif
    </div>
    @endif
{{--
    <div class="related-posts">
        <h3>You May Also Like</h3>
       
        <section>
            <a href="https://bard-free.wp-royal-themes.com/demo/jump-shots-mood/"><img width="500" height="380" src="https://bard-free.wp-royal-themes.com/demo/wp-content/uploads/sites/2/2018/05/bard-v2-37-1-500x380.jpg" class="attachment-bard-grid-thumbnail size-bard-grid-thumbnail wp-post-image" alt="" decoding="async" loading="lazy"></a>
            <h5><a href="https://bard-free.wp-royal-themes.com/demo/jump-shots-mood/">Jump Shots Mood</a></h5>
            <span class="related-post-date">December 17, 2023</span>
        </section>

        <section>
            <a href="https://bard-free.wp-royal-themes.com/demo/must-look-fashionable/"><img width="500" height="380" src="https://bard-free.wp-royal-themes.com/demo/wp-content/uploads/sites/2/2018/04/bard-26-500x380.jpg" class="attachment-bard-grid-thumbnail size-bard-grid-thumbnail wp-post-image" alt="" decoding="async" loading="lazy"></a>
            <h5><a href="https://bard-free.wp-royal-themes.com/demo/must-look-fashionable/">Must Look Fashionable!</a></h5>
            <span class="related-post-date">December 22, 2023</span>
        </section>

        <section>
            <a href="https://bard-free.wp-royal-themes.com/demo/lonely-heart-marie/"><img width="500" height="380" src="https://bard-free.wp-royal-themes.com/demo/wp-content/uploads/sites/2/2018/04/bard-35-500x380.jpg" class="attachment-bard-grid-thumbnail size-bard-grid-thumbnail wp-post-image" alt="" decoding="async" loading="lazy"></a>
            <h5><a href="https://bard-free.wp-royal-themes.com/demo/lonely-heart-marie/">Lonely Heart Marie</a></h5>
            <span class="related-post-date">December 17, 2023</span>
        </section>
    
        <div class="clear-fix"></div>
    </div>
--}}
</div>
@endsection
