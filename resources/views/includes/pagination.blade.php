@if ($paginator->hasPages())
    <div class="pagination">
        @if ($paginator->onFirstPage())
            <a href="#" class="btn" disabled>&laquo;</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="btn active">&laquo;</a>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <a href="#" class="btn">{{ $element }}</a>
            @else
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a href="#" class="btn active">{{ $page }}</a>
                        @else
                            <a href="{{ $url }}" class="btn">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="btn">&raquo;</a>
        @else
            <a href="#" class="btn" disabled>&raquo;</a>
        @endif
    </div>
@endif
