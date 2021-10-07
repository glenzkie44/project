@extends('base')

@section('content')

<div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="card mt-5">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">User Registration</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/register')}}"method="post">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button class="btn btn-secondary" type="submit">Register</button>
                </form>
                </form>
            </div>
        </div>
    </div>
</div>

@stop