@extends('cms.layout') @section('title','Dashboard') @section('content')

<div class="row">
    @if(Session::get('success'))
    <div class="alert alert-success w-25" role="alert">
        {{Session::get('success')}}
    </div>
    @endif

    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Change Data Admin</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li>
                        <a class="collapse-link"
                            ><i class="fa fa-chevron-up"></i
                        ></a>
                    </li>
                    <li>
                        <a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form
                    action="{{ route('change_pass',$user->id) }}"
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @csrf

                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Username <span class="required">*</span></label
                        >
                        @if(Session::get('password'))
                        <div class="col-md-6 col-sm-6 bad">
                            <input
                                class="form-control"
                                name="nm"
                                required
                                autocomplete="off"
                                value="{{ old('nm') }}"
                            />
                        </div>
                        @else
                        <div class="col-md-6 col-sm-6">
                            <input
                                class="form-control"
                                name="nm"
                                required
                                autocomplete="off"
                                value="{{ $user->name }}"
                            />
                        </div>
                        @endif
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Password <span class="required">*</span></label
                        >
                        <div class="col-md-6 col-sm-6" id="dPass">
                            <input
                                class="form-control"
                                name="pass"
                                id="pass"
                                required
                                autocomplete="off"
                                value="{{ old('pass') }}"
                                type="password"
                                minlength="6"
                            />
                            @if(Session::get('password'))
                            <div class="text-danger">Password Not Same</div>
                            @else
                            <div class="text-danger" style="display: none">
                                Password Not Same
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Confirm Password<span class="required"
                                >*</span
                            ></label
                        >
                        <div class="col-md-6 col-sm-6" id="dPassV">
                            <input
                                class="form-control"
                                name="passVertif"
                                id="pasVertif"
                                required
                                autocomplete="off"
                                value="{{ old('passVertif') }}"
                                type="password"
                                minlength="6"
                                oninput="vertifPass(this.value)"
                            />
                            @if(Session::get('password'))
                            <div class="text-danger">Password Not Same</div>
                            @else
                            <div class="text-danger" style="display: none">
                                Password Not Same
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="ln_solid">
                        <div class="form-group">
                            <div class="col-md-6 offset-md-3">
                                <button
                                    type="submit"
                                    class="btn btn-primary"
                                    id="sbm"
                                >
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-success">
                                    Reset
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection @section('script')
<script>
    function vertifPass(passV) {
        const pass = $("#pass").val();

        if (pass.length == passV.length) {
            if (pass != passV) {
                $("#sbm").prop("disabled", true);
                $("#dPass").addClass("bad");
                $("#dPassV").addClass("bad");
                $(".text-danger").show();
            } else {
                $("#sbm").prop("disabled", false);
                $("#dPass").removeClass("bad");
                $("#dPassV").removeClass("bad");
                $(".text-danger").hide();
            }
        } else {
            $("#sbm").prop("disabled", true);
        }
    }
</script>

@endsection
