@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Topic: {{$topic->title}}</h1>
        <p>
            {{$topic->content}}
            <br>
            <i>Author: {{$topic->user->name}}</i>
        </p>
        <hr>

        <h3>Replies ({{count($topic->replies)}})</h3>

        @foreach($topic->replies as $reply)

            <p>
                {{$reply->content}}
                <br>
                <i>Author: {{$reply->user->name}}</i>
            </p>
            <hr>
        @endforeach

    </div>

@endsection
