@extends('layout')

@section('content')
<h2>Edit Item</h2>

<form action="{{ route('items.update', $item->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name" value="{{ $item->name }}" required>
    </div>
    <div>
        <label for="description">Description</label><br>
        <textarea id="description" name="description">{{ $item->description }}</textarea>
    </div>
    <div>
        <label for="price">Price</label><br>
        <input type="number" id="price" name="price" value="{{ $item->price }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('items.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
