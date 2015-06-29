@extends('main')


@section('content')

<section id="list">
    <h3>Feedback list</h3>
    <div class="list">
        <div class="item">
        @foreach($posts as $post)
            <p>From: {{$post->name}}</p>
            <p>Date : {{$post->created_at}}</p>
            <p>{{$post->content}}</p>
            <hr />
        </div>
        @endforeach

    </div>
</section>

<section id="form">
    <form method="post" action="#">
        <table>
            <tr>
                <td>From</td>
                <td><input type="text" /></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><input type="text" /></td>
            </tr>
            <tr>
                <td>Feedback text</td>
                <td><textarea></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" /></td>
            </tr>
        </table>
    </form>
</section>
@stop
