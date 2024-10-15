
@if (!empty($paginator))
    <div class="container pt-4 pb-5">
        <nav class="blog-pagination numeric" data-max-pages="2" data-loading="Loading...">
            @if (!$paginator->onFirstPage())
                <a href="{{ $paginator->previousPageUrl() }}" class="numeric-prev-page" aria-label="Anterior" rel="prev">
                    <svg class="svg-inline--fa fa-long-arrow-alt-left fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="long-arrow-alt-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path></svg>                    
                </a>
            @endif

            <span class="numeric-current-page">{{ $paginator->currentPage() }} de {{ $paginator->lastPage() }}</span>

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="numeric-next-page" aria-label="Siguiente" rel="next">
                    <svg class="svg-inline--fa fa-long-arrow-alt-right fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="long-arrow-alt-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"></path></svg>
                </a>
            @endif
        </nav>
    </div>
@endif