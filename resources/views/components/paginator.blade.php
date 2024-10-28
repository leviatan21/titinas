
@if (!empty($paginator))
    <div class="container pt-4 pb-5">
        <nav class="blog-pagination numeric" data-max-pages="2" data-loading="Loading...">
            @if (!$paginator->onFirstPage())
                <a href="{{ $paginator->previousPageUrl() }}" class="numeric-prev-page" aria-label="Anterior" rel="prev">
                    @include('components.svg.arrow-left-long')
                </a>
            @endif

            <span class="numeric-current-page">{{ $paginator->currentPage() }} de {{ $paginator->lastPage() }}</span>

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="numeric-next-page" aria-label="Siguiente" rel="next">
                    @include('components.svg.arrow-right-long')
                </a>
            @endif
        </nav>
    </div>
@endif