@extends('Layout.main')

@section('content')
    <form action="registerFunction" method="POST">
        @csrf
        <div class="container">
            <div class="container">
                <label for="">Username</label>
                <input type="text" name="username" id="" />
            </div>
            <div class="container">
                <label for="">Email</label>
                <input type="email" name="email" id="" />
            </div>
            <div class="container">
                <label for="">Password</label>
                <input type="password" name="password" id="" />
            </div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection