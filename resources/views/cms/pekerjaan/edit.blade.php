@extends('cms.layout') @section('title','Pekerjaan') @section('header')
<link
    href="{{
        asset(
            'assets/cms/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css'
        )
    }}"
    rel="stylesheet"
/>
<link
    href="{{
        asset(
            'assets/cms/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css'
        )
    }}"
    rel="stylesheet"
/>
<link
    href="{{
        asset(
            'assets/cms/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css'
        )
    }}"
    rel="stylesheet"
/>
<link
    href="{{
        asset(
            'assets/cms/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css'
        )
    }}"
    rel="stylesheet"
/>
<link
    href="{{
        asset(
            'assets/cms/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css'
        )
    }}"
    rel="stylesheet"
/>
<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />
@endsection @section('content')
<div class="row">
    @if(Session::get('success'))
    <div class="alert alert-success w-25" role="alert">
        {{Session::get('success')}}
    </div>
    @endif
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edit Pekerjaan {{$pekerjaan->nm_pekerjaan}}</h2>
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
                    action="{{ route('update_pekerjaan',$pekerjaan->id) }}"
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @csrf

                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Name Pekerjaan
                            <span class="required">*</span></label
                        >
                        @if(Session::get('nm'))
                        <div class="col-md-6 col-sm-6 bad">
                            <input
                                class="form-control"
                                name="nm"
                                required
                                autocomplete="off"
                                value="{{ old('nm') }}"
                            />
                            <div class="text-danger">
                                {{Session::get('nm') }}
                            </div>
                        </div>
                        @else
                        <div class="col-md-6 col-sm-6">
                            <input
                                class="form-control"
                                name="nm"
                                required
                                autocomplete="off"
                                value="{{ $pekerjaan->nm_pekerjaan }}"
                            />
                        </div>
                        @endif
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Discount <span class="required">*</span></label
                        >
                        <div class="col-md-6 col-sm-6">
                            @if($pekerjaan->discount)
                            <input
                                class="form-control"
                                name="discount"
                                required
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                autocomplete="off"
                                value="{{ $pekerjaan->discount }}"
                            />
                            @else
                            <input
                                class="form-control"
                                name="discount"
                                required
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                autocomplete="off"
                                value="{{ old('discount') }}"
                            />
                            @endif
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Image Pekerjaan
                            <span class="required">*</span></label
                        >
                        <div class="col-md-6 col-sm-6">
                            <div class="d-flex justify-content-around">
                                @if(Session::get('upload'))
                                @foreach($pekerjaan->imgs as $d)
                                <div
                                    style="border: red 2px dashed; padding: 5px"
                                >
                                    <span class="hidden">+</span>
                                    @if($d->img_pekerjaan)
                                    <img
                                        src="/semaju/storage/app/{{$d->img_pekerjaan}}"
                                        alt=""
                                        class="kotak"
                                        onclick="changeImg(this)"
                                    />
                                    @else
                                    <img
                                        alt=""
                                        class="kotak"
                                        onclick="changeImg(this)"
                                    />@endif
                                    <input
                                        type="file"
                                        name="img_{{$d->id}}"
                                        class="hidden"
                                        accept="image/png, image/jpeg"
                                        onchange="render(this)"
                                    />
                                </div>
                                @endforeach @else @foreach($pekerjaan->imgs as
                                $d)
                                <div>
                                    <span class="hidden">+</span>
                                    @if($d->img_pekerjaan)
                                    <img
                                        src="/semaju/storage/app/{{$d->img_pekerjaan}}"
                                        alt=""
                                        class="kotak"
                                        onclick="changeImg(this)"
                                    />
                                    @else
                                    <img
                                        alt=""
                                        class="kotak"
                                        onclick="changeImg(this)"
                                    />@endif
                                    <input
                                        type="file"
                                        name="img_{{$d->id}}"
                                        class="hidden"
                                        accept="image/png, image/jpeg"
                                        onchange="render(this)"
                                    />
                                </div>
                                @endforeach @endif
                            </div>
                            @if(Session::get('upload'))
                            <div class="text-danger" style="text-align: center">
                                {{Session::get('upload') }}
                            </div>
                            @else
                            <div class="text-muted" style="text-align: center">
                                For Best Image Quality Resolution Should be
                                400px x 400px
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Description <span class="required">*</span></label
                        >
                        <div class="col-md-6 col-sm-6">
                            <textarea
                                class="form-control"
                                name="desc"
                                style="height: 100px"
                                required
                                >{{ $pekerjaan->desc }}</textarea
                            >
                        </div>
                        <div class="alert">please put something here</div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Feature and Benefits
                            <span class="required">*</span></label
                        >
                        <div class="col-md-6 col-sm-6">
                            <textarea
                                class="form-control"
                                name="feature"
                                style="height: 100px"
                                required
                                >{{ $pekerjaan->feature }}</textarea
                            >
                        </div>
                        <div class="alert">please put something here</div>
                    </div>
                    @foreach($pekerjaan->texts as $text)
                    <div class="field item form-group" id="paragraf">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Paragraf <span class="required">*</span></label
                        >
                        <div class="col-md-6 col-sm-6">
                            <textarea
                                class="form-control"
                                name="p_{{$text->id}}"
                                style="height: 100px"
                                required
                                >{{$text->p}}</textarea
                            >
                        </div>
                        <span
                            style="
                                padding: 8px;
                                font-size: large;
                                color: red;
                                cursor: copy;
                                font-weight: bolder;
                            "
                            onclick="copyP()"
                            >+</span
                        >

                        <div class="alert">please put something here</div>
                    </div>
                    @endforeach
                    <div class="ln_solid">
                        <div class="form-group">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-success">
                                    Reset
                                </button>
                                <a href="{{ route('pekerjaan') }}">
                                    <button
                                        type="button"
                                        class="btn btn-danger"
                                    >
                                        Back
                                    </button></a
                                >
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection @section('script') @section('script')
<!-- Datatables -->
<script src="{{
        asset('assets/cms/vendors/datatables.net/js/jquery.dataTables.min.js')
    }}"></script>
<script src="{{
        asset(
            'assets/cms/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js'
        )
    }}"></script>
<script src="{{
        asset(
            'assets/cms/vendors/datatables.net-buttons/js/dataTables.buttons.min.js'
        )
    }}"></script>
<script src="{{
        asset(
            'assets/cms/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js'
        )
    }}"></script>
<script src="{{
        asset(
            'assets/cms/vendors/datatables.net-buttons/js/buttons.flash.min.js'
        )
    }}"></script>
<script src="{{
        asset(
            'assets/cms/vendors/datatables.net-buttons/js/buttons.html5.min.js'
        )
    }}"></script>
<script src="{{
        asset(
            'assets/cms/vendors/datatables.net-buttons/js/buttons.print.min.js'
        )
    }}"></script>
<script src="{{
        asset(
            'assets/cms/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js'
        )
    }}"></script>
<script src="{{
        asset(
            'assets/cms/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js'
        )
    }}"></script>
<script src="{{
        asset(
            'assets/cms/vendors/datatables.net-responsive/js/dataTables.responsive.min.js'
        )
    }}"></script>
<script src="{{
        asset(
            'assets/cms/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js'
        )
    }}"></script>
<script src="{{
        asset(
            'assets/cms/vendors/datatables.net-scroller/js/dataTables.scroller.min.js'
        )
    }}"></script>
<script src="{{
        asset('assets/cms/vendors/jszip/dist/jszip.min.js')
    }}"></script>
<script src="{{
        asset('assets/cms/vendors/pdfmake/build/pdfmake.min.js')
    }}"></script>
<script src="{{
        asset('assets/cms/vendors/pdfmake/build/vfs_fonts.js')
    }}"></script>
<script>
    $(document).ready(() => {
        $(".alert").fadeOut(3000);
    });
    function render(val) {
        const [file] = val.files;
        $(val).closest("img").attr("src", URL.createObjectURL(file));
        $(val).siblings("img").attr("src", URL.createObjectURL(file));
        $(val).siblings("img").removeClass("hidden");
        $(val).siblings("span").hide();
        $(val).parent(".square").css("padding", "0");
        $(val).parent(".square").css("border", "none");
        $(val).parent(".square").css("background-color", "none");
    }
    function copyP() {
        $("#paragraf")
            .clone()
            .find('textarea[name="paragraf[]"]')
            .val("")
            .end()
            .insertBefore(".ln_solid");
    }
    function changeImg(ef) {
        $(ef).next().click();
    }
</script>
@endsection
