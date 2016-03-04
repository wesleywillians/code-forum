@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Forum</h1>

        <table class="table table-bordered">
            <thead>
            <tr>

                <th>Topic</th>
                <th>Replies</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($topics as $topic)
                <tr>
                    <td>{{$topic->title}}</td>
                    <td>{{count($topic->replies)}}</td>
                    <td>{{$topic->user->name}}</td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
