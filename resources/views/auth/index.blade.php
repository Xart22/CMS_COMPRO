<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Talikuat Bima Jabar</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--===============================================================================================-->
        <!--===============================================================================================-->
        <link
            rel="stylesheet"
            type="text/css"
            href="{{
                asset('assets/login/vendor/bootstrap/css/bootstrap.min.css')
            }}"
        />
        <!--===============================================================================================-->
        <link
            rel="stylesheet"
            type="text/css"
            href="{{
                asset(
                    'assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css'
                )
            }}"
        />
        <!--===============================================================================================-->
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('assets/login/vendor/animate/animate.css') }}"
        />
        <!--===============================================================================================-->
        <link
            rel="stylesheet"
            type="text/css"
            href="{{
                asset('assets/login/vendor/css-hamburgers/hamburgers.min.css')
            }}"
        />
        <!--===============================================================================================-->
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('assets/login/vendor/select2/select2.min.css') }}"
        />
        <!--===============================================================================================-->
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('assets/login/vendor/util.css') }}"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('assets/login/vendor/main.css') }}"
        />
        <!--===============================================================================================-->
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img
                            src="/semaju/storage/app/{{
                            $data->logo_big
                        }}"
                            alt="{{$data->nm_perusahaan}}"
                        />
                    </div>
                    <div class="login-form">
                        <form
                            class="login100-form validate-form"
                            action="{{ route('auth_login') }}"
                            method="POST"
                        >
                            @csrf
                            <span
                                class="login100-form-title"
                                style="color: white"
                            >
                                {{$data->nm_perusahaan}}
                            </span>
                            <div
                                class="wrap-input100 validate-input"
                                data-validate="Username Tidak Boleh Kosong"
                            >
                                <input
                                    class="input100"
                                    type="text"
                                    name="username"
                                    placeholder="Username"
                                    value="{{ old('username') }}"
                                />
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i
                                        class="fa fa-id-card"
                                        aria-hidden="true"
                                    ></i>
                                </span>
                            </div>

                            <div
                                class="wrap-input100 validate-input"
                                data-validate="Password Tidak Boleh Kosong"
                            >
                                <input
                                    class="input100"
                                    type="password"
                                    name="password"
                                    placeholder="Password"
                                />
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i
                                        class="fa fa-lock"
                                        aria-hidden="true"
                                    ></i>
                                </span>
                            </div>
                            @if(Session::get('fail'))
                            <div class="container-login100-form-btn">
                                <div class="container bg-danger">
                                    <span>{{Session::get('fail')}}</span>
                                </div>
                            </div>
                            @endif
                            <div class="container-login100-form-btn">
                                <button
                                    class="login100-form-btn"
                                    type="submit"
                                    name="submit"
                                >
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--===============================================================================================-->
        <script src="{{
                asset('assets/login/vendor/jquery/jquery-3.2.1.min.js')
            }}"></script>
        <!--===============================================================================================-->
        <script src="{{
                asset('assets/login/vendor/bootstrap/js/popper.js')
            }}"></script>
        <script src="{{
                asset('assets/login/vendor/bootstrap/js/bootstrap.min.js')
            }}"></script>
        <!--===============================================================================================-->
        <script src="{{
                asset('assets/login/vendor/select2/select2.min.js')
            }}"></script>
        <!--===============================================================================================-->
        <script src="{{
                asset('assets/login/vendor/tilt/tilt.jquery.min.js')
            }}"></script>
        <script>
            $(".js-tilt").tilt({
                scale: 1.1,
            });
        </script>
        <!--===============================================================================================-->
        <script src="{{ asset('/js/main.js') }}"></script>
    </body>
</html>
