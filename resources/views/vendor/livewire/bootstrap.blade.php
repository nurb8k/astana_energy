@php
if (! isset($scrollTo)) {
    $scrollTo = 'body';
}

$scrollIntoViewJsSnippet = ($scrollTo !== false)
    ? <<<JS
       (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
    JS
    : '';
@endphp


    @if ($paginator->hasPages())
        <div class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <div class="pagination-item disabled pagination-item-prev">
                        <img src="{{asset('user/assets/img/icons/prev.svg')}}" alt="">
                    </div>
{{--                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">--}}
{{--                        <span class="page-link" aria-hidden="true">&lsaquo;</span>--}}
{{--                    </li>--}}
                @else
                <div dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" class="pagination-item pagination-item-prev" wire:click="previousPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" rel="prev" aria-label="@lang('pagination.previous')">
                    <img src="{{asset('user/assets/img/icons/prev.svg')}}" alt="">
                </div>
{{--                    <li class="page-item">--}}
{{--                        <button type="button" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" class="page-link" wire:click="previousPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</button>--}}
{{--                    </li>--}}
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
{{--                                <li class="page-item active" wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}" aria-current="page"><span class="page-link">{{ $page }}</span></li>--}}

                            <div class="pagination-item active" wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}" aria-current="page">
                                {{ $page }}
                            </div>

                            @else

{{--                            <li class="page-item" wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}"><button type="button" class="page-link" wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}">{{ $page }}</button></li>--}}

                            <div class="pagination-item" wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}" wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}">
                                {{ $page }}
                            </div>
                        @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
{{--                    <li class="page-item">--}}
{{--                        <button type="button" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" class="page-link" wire:click="nextPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</button>--}}
{{--                    </li>--}}

                <div dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" class="pagination-item pagination-item-next" wire:click="nextPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" rel="next" aria-label="@lang('pagination.next')">
                    <img src="{{asset('user/assets/img/icons/next.svg')}}" alt="">
                </div>
                @else
{{--                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">--}}
{{--                        <span class="page-link" aria-hidden="true">&rsaquo;</span>--}}
{{--                    </li>--}}

                <div class="pagination-item disabled pagination-item-next">
                    <img src="{{asset('user/assets/img/icons/next.svg')}}" alt="">
                </div>

                @endif
        </div>

    @endif
