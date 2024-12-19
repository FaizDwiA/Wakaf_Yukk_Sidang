@extends('layout')

@section('content')
<h2>Add New Item</h2>

<form action="{{ route('items.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="description">Description</label><br>
        <textarea id="description" name="description"></textarea>
    </div>
    <div>
        <label for="price">Price</label><br>
        <input type="number" id="price" name="price" required>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('items.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
