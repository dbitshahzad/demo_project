@extends('layouts.master')
@section('body')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="container mt-5 ">
    <div class="row">
        <div class="col-8 bg-info p-5">
            <form action="{{ route('register') }}" method="POST">
                @if (session()->has('message'))
                    <div class="alert alert-primary">
                        {{ session()->get('message') }}
                    </div>
                @endif
                @csrf
                <input type="text" class="form-control mb-3" name="name" placeholder="Enter Name" required>
                @error('name')
                    {{ $message }}
                @enderror

                <input type="email" class="form-control mb-3" name="email" placeholder="Enter email" required>
                @error('email')
                    {{ $message }}
                @enderror <input type="password" class="form-control mb-3" name="password" placeholder="Enter password"
                    required>
                @error('password')
                    {{ $message }}
                @enderror
                <select name="role" id="role" class="form-select" required>
                    <option value="" disabled selected>Select Role</option>
                    @foreach (App\Models\User::$registerableRoles as $role)
                        <option value="{{ $role }}">{{ $role }}</option>
                    @endforeach
                </select>

                {{-- <input type="CNIC" name="cnic" placeholder="cnic" class="form-control mb-3"> --}}
                <button type="submit" class="btn btn-danger">save</button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

@endsection
