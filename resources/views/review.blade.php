@extends('layout')

@section('title')
    Feedback
@endsection

@section('main_content')
    <h1 class="mb-5">Add feedback form</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error  }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/review/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="Input your email" class="form-control mb-5">
        <input type="text" name="subject" id="subject" placeholder="Input your feedback" class="form-control mb-5">
        <textarea name="message" id="message" placeholder="Input your message" class="form-control mb-5"></textarea>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection
