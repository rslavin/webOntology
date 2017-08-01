@extends('layouts.default')

@section('content')
<h2>{{ $node->name }}</h2>

    <hr />

    @include('node.relationships')

@stop

