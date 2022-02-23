@extends('layout')

@section('content')
    <article>
    <section>
    <h4>{{$article->title}}</h4>
    <p>
      {!! $article->body !!}
    </p>
    </section>
    </article>
@endsection
