@isset($breadcrumbs)
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            @foreach($breadcrumbs as $nav_item)
                @if($loop->last)
                    <li class="breadcrumb-item active" aria-current="page">{{ $nav_item['text'] }}</li>
                @else
                    <li class="breadcrumb-item"><a href="{{ $nav_item['url'] }}">{{ $nav_item['text'] }}</a></li>
                @endif
            @endforeach
        </ol>
    </nav>
@endisset