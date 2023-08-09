<div class="paginationWrapper">
    @if ($paginator->hasPages())
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage() || $paginator->hasMorePages() )
                <li wire:click="nextPage"><a href="javascript:void(0)">Selanjutnya</a></li>
            @else
                <li wire:click="previousPage"><a href="javascript:void(0)">Sebelumnya</a></li>
            @endif
        </ul>
    @endif
</div>