@extends('layouts.app')

@section('title', $entry->title . ' - Blog')
@include('layouts.header')

@section('content')

  <h2>{{ $entry->title }}</h2>
  <article>
  {{ $entry->content }} 
  </article>
@endsection

