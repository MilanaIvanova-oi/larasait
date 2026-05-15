@extends('front.basa')
@section('catprod')

    <h1>Категории-Товары</h1>

    <div class="block">
        <div class="block_cat">
            <ul>
                @foreach($cat as $item)
                    <li><a href =  "{{ route ('catprodlink', $item->id) }}">{{ $item->name }}</a></li>
                @endforeach

            </ul>
        </div>
        <div class="block_prod">
            @foreach($prod as $p)
                <p>{{ $p->title }}</p>
            @endforeach
        </div>
    </div>

@endsection