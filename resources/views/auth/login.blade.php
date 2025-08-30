@extends('auth.app')

@section('content')
<form method="POST" action="{{ route('postLogin') }}"></form>
@csrf
<div class="card">
    <div class="card-body">
    <!-- Logo -->
    <div class="app-brand justify-content-center">
        <a href="index.html" class="app-brand-link gap-2">
        <span class="app-brand-logo demo"></span>
        <span class="app-brand-text demo text-uppercase fw-bolder">Login</span>
    </a>
    </div>
    <div class="flex items-center justify-center">
        <div class="mb-3">
            <label for="email" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Masukkan Username" />
        </div>
        <div class="mb-3 form-password-toggle">
            <label class="form-label" for="password">Password</label>
            <div class="input-group input-group-merge">
                <input type="password" class="form-control" name="password"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>
        </div>
            
        </div>
        <button class="btn btn-primary d-grid w-100">Masuk</button>
    </form>
    <p class="text-center">
        <span>Belum memiliki akun?</span><a href="{{ route('register') }}"><span> Daftar</span></a>
    </p>
</div>
</div>
@endsection