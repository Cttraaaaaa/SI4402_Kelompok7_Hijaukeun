@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('login.action') }}" method="POST">
            @csrf
            <div class="form-container">
                <form action="" method="post">
                    <h3>login now</h3>
                    <input type="email" name="email" required placeholder="enter your email" value="{{ old('email') }}"/>
                    <input type="password" name="password" required placeholder="enter your password">
                    <input type="submit" name="submit" value="login now" class="form-btn">
                    <p>Belum punya akun? <a href="register_form.php">register now</a></p>
                </form>
            </div>
@endsection