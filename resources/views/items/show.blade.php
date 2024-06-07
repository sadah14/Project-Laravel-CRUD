@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>{{ $item->name }}</h1>
            <p>{{ $item->description }}</p>
            <a href="{{ route('items.index') }}" class="btn btn-secondary">Back to list</a>
        </div>
    </div>
</div>
@endsection
