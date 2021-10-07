@extends('base')

@section('content')

<div style="width: 900px;" class="container max-w-full mx-auto pt-4">
    <h1 class="text-4xl font-bold mb-4">Midterm Project</h1>
        <a class="btn btn-primary" href="{{ 'dashboard' }}">Dashboard</a>

        <a class="btn btn-success" style="margin-left: 90%" href="{{ route('items.create') }}">Add new Item</a>

        <table class="table table-stripped">
            <thead>
                <th>Name:</th>
                <th>Description</th>
                <th>Pice</th>
                <th>Quantity</th>
                <th>Action</th>
            </thead>
            @foreach($items as $one)
            <tbody">
                <tr>
                    <td>{{ $one->name }}</td>
                    <td>{{ $one->description }}</td>
                    <td>{{ $one->price }}</td>
                    <td>{{ $one->quantity }}</td>
                    <td>
                        <form method="POST" action="/items/{{ $one->id }}">
                            <a href="/items/{{ $one->id }}/edit" class="btn btn-primary">Edit</a>
                            {{ csrf_field() }}
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
</div>

@endsection