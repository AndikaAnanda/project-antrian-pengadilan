<div class="square-button {{ $category }} rounded-4" data-category="{{ $category }}" data-type="{{ $type }}">
    <p class="title-{{ $category }} rounded-top-4">{{ $title }}</p>
    <p class="ticket">{{ $ticket }}</p>
    @if (isset($showLoading) && $showLoading)
        @include('partials/loading')
    @endif
</div>