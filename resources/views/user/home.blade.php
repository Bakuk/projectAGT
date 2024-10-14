@extends('user.layouts.app')

@section('content')
    <div class="container mt-5">
        <h3>Новости техникума</h3>
        <div class="row">
            @foreach($news as $item)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        @if($item->coverImage())
                            <img src="{{ asset('storage/' . $item->coverImage()->path) }}" class="card-img-top" alt="{{ $item->title }}">
                        @else
                            <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Placeholder">
                        @endif
                        <div class="card-body">
                            <p class="card-text text-muted">{{ $item->created_at->translatedFormat('d F Y') }}</p>
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ Str::limit($item->content, 100) }}</p>
                            <a href="{{ route('news.show', $item->id) }}" class="btn btn-primary">Подробнее...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <a href="/news/" class="btn btn-primary">Все новости здесь...</a>
    </div>
@endsection

<style>
    .band {
        width: 90%;
        max-width: 1240px;
        margin: 0 auto;

        display: grid;

        grid-template-columns: 1fr;
        grid-template-rows: auto;
        grid-gap: 20px;

        @media (min-width: 30em) {
            grid-template-columns: 1fr 1fr;
        }

        @media (min-width: 60em) {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    .card {
        background: white;
        text-decoration: none;
        color: #444;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        display: flex;
        flex-direction: column;
        min-height: 100%;

    // sets up hover state
    position: relative;
        top: 0;
        transition: all .1s ease-in;

        &:hover {
            top: -2px;
            box-shadow: 0 4px 5px rgba(0,0,0,0.2);
        }

        article {
            padding: 20px;
            flex: 1;

            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        h1 {
            font-size: 20px;
            margin: 0;
            color: #333;
        }

        p {
            flex: 1;
            line-height: 1.4;
        }

        span {
            font-size: 12px;
            font-weight: bold;
            color: #999;
            text-transform: uppercase;
            letter-spacing: .05em;
            margin: 2em 0 0 0;
        }

        .thumb {
            padding-bottom: 60%;
            background-size: cover;
            background-position: center center;
        }
    }

    .item-1 {
        @media (min-width: 60em) {
            grid-column: 1 / span 2;

            h1 {
                font-size: 24px;
            }
        }
    }
</style>
