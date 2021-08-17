<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>CMS</title>
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/bootstrap.min.css') }}"
        />
    </head>
    <body style="background-color: #dedede">
        <div class="d-flex justify-content-center">
            <div class="container-box mt-5">
                <div class="container">
                    @if($data)
                    <img
                        src="/sumaju/storage/app/{{ $data->logo_small }}"
                        alt=""
                    />
                    @endif
                </div>
                <form action="{{ route('auth_login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label"
                            >Username</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            name="username"
                            placeholder="Username"
                            value="{{ old('username') }}"
                        />
                        <span class="text-danger"
                            >@error('username'){{ $message }}@enderror</span
                        >
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label"
                            >Password</label
                        >
                        <input
                            type="password"
                            class="form-control"
                            name="password"
                            placeholder="Password"
                            value="{{ old('password') }}"
                        />
                        <span class="text-danger"
                            >@error('password'){{ $message }}@enderror</span
                        >
                    </div>
                    @if(Session::get('fail'))
                    <div class="p-3 mb-2 bg-danger text-white">
                        {{ Session::get('fail') }}
                    </div>
                    @endif

                    <button
                        type="submit"
                        class="btn btn-block mb-3 text-white"
                        style="background-color: #21cc4e"
                    >
                        Login
                    </button>
                </form>
            </div>
        </div>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
        <!--Bootstrap Core-->
        <script src="{{ asset('assets/js/propper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    </body>
</html>
