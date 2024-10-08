@extends('admin.layouts.app')

@section('title', 'news')

@section('content')
    <div class="band">
        @foreach($news as $new)
            <div class="item-{{$loop->iteration}}">
                <a href="https://design.tutsplus.com/articles/international-artist-feature-malaysia--cms-26852" class="card">
                    <img class="thumb" style="background-image: url('./../{{$new->path_image}}');">
                    <article>
                        <h1>{{$new->title}}</h1>
                        <span>Mary Winkler</span>
                    </article>
                </a>
            </div>
        @endforeach
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
