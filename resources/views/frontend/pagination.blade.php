@if ($paginator->lastPage() > 1)
<ul class="pagination justify-content-center">
    <li class="page-item {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
        <a href="{{ $paginator->url(1) }}" class="page-link">Previous</a>
    </li>
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li class="page-item">
            <a href="{{ $paginator->url($i) }}" class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }} page-link">{{ $i }}</a>
        </li>
    @endfor
    <li class="page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
        <a href="{{ $paginator->url($paginator->currentPage()+1) }}" class="page-link" >Next</a>
    </li>
</ul>
@endif