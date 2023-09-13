@extends('admin.layouts.master-without-nav')

@section('title')
    Giriş
@endsection

@section('body')

    <body>
    @endsection

    @section('content')
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Hoş Geldin!</h5>
                                            <p>Devam etmek için giriş yap.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{ URL::asset('/assets/images/profile-img.png') }}" alt="profile-img"
                                             class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="auth-logo">
                                    <a href="{{ route('index') }}" class="auth-logo-light">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ URL::asset('/assets/images/logo-light.svg') }}" alt=""
                                                     class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>

                                    <a href="{{ route('index') }}" class="auth-logo-dark">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ URL::asset('/assets/images/logo.svg') }}" alt=""
                                                     class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" method="POST" action="{{ isset($login) ? route('login') : ""}}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label">E-posta</label>
                                            <input name="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   id="username" autocomplete="email" {{--value="admin@ubit.com.tr"--}}
                                                   autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Şifre</label>
                                            <div
                                                class="input-group auth-pass-inputgroup @error('password') is-invalid @enderror">
                                                <input type="password" name="password"
                                                       class="form-control  @error('password') is-invalid @enderror"
                                                       id="userpassword" aria-label="Password"
                                                       aria-describedby="password-addon" {{--value="Ubit123456."--}}>
                                                <button class="btn btn-light " type="button" id="password-addon"><i
                                                        class="mdi mdi-eye-outline"></i></button>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                Beni hatırla
                                            </label>
                                        </div>

                                        <div class="mt-3 d-grid">
                                            @csrf
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Giriş
                                                Yap
                                            </button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>

                        <div class="text-center">
                            <div>
                                <p>©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>
                                    Ubit.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end account-pages -->

@endsection
