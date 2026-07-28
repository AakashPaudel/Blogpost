@extends('layouts.landing_page')

@section('content')

<h1 class="text-4xl font-bold  mb-2">
    Welcome to Our BlogPost System!
</h1>
@include('components.sections.hero')
@include('components.sections.featured-posts')
@include('components.sections.contact')
@include('components.sections.about')

@endsection