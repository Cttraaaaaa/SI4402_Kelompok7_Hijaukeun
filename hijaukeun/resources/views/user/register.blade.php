@extends('utama')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('register.action') }}" method="POST">
            @csrf
            <div class="form-container">
                <form action="" method="post">
                     <h3>register now</h3>
                    <input type="text" name="name" required placeholder="enter your name" value="{{ old('nama') }}"/>
                    <input type="email" name="email" required placeholder="enter your email" value="{{ old('email') }}"/>
                    <input type="password" name="password" required placeholder="enter your password">
                    <input type="password" name="cpassword" required placeholder="confirm your password">
                    <select name="user_type">
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                    </select>
                    <input type="submit" name="submit" value="register now" class="form-btn">
                    <p>Sudah punya akun ? <a href="{{ route('login') }}">login now</a></p>
                </form>

  

</div>

@endsection