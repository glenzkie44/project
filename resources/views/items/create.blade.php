@extends('base')

@section('content')

<div style="width: 900px;" class="container max-w-full mx-auto pt-4">

    <form method="POST" action="/items">
        {{ csrf_field() }}

        <div class="form-group mt-5">
            <label class="font-bold text-gray-800" for="name">Name: </label>
            <input class="form-control" placeholder="Enter Name" id="name" name="name">
        </div>

        <div class="form-group mt-4">
            <label class="font-bold text-gray-800" for="description">Description: </label>
            <input class="form-control" placeholder="Enter Description" id="description" name="description">
        </div>

        <div class="form-group mt-4">
            <label class="font-bold text-gray-800" for="price">Price: </label>
            <input class="form-control" placeholder="Enter Price" id="price" name="price">
        </div>

        <div class="form-group mt-4">
            <label class="font-bold text-gray-800" for="quantity">Quantity: </label>
            <input class="form-control" placeholder="Enter Quantity" id="quantity" name="quantity">
        </div>

        <button class="btn btn-primary bg-blue-500 tracking-wide text-white px-4 py-3 inline-block mb-5 shadow-lg rounded hover:shadow">Create</button>
        <a href="/items" class="btn btn-danger bg-blue-500 tracking-wide text-white px-4 py-3 inline-block mb-5 shadow-lg rounded hover:shadow">Cancel</a>
    </form>
</div>
@endsection
