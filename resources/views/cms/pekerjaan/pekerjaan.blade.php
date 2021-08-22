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
                <h2>Input Pekerjaan</h2>
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
                    action="{{ route('create_pekerjaan') }}"
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
                                value="{{ old('nm') }}"
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
                            <input
                                class="form-control"
                                name="discount"
                                required
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                autocomplete="off"
                                value="{{ old('discount') }}"
                            />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Image Pekerjaan Max 3
                            <span class="required">*</span></label
                        >
                        @if(Session::get('fail'))
                        <div class="col-md-6 col-sm-6">
                            <div class="d-flex justify-content-around">
                                <div class="square fail">
                                    <span>+</span>
                                    <img
                                        alt=""
                                        class="kotak hidden"
                                        onclick="changeImg(this)"
                                    />
                                    <input
                                        type="file"
                                        name="img[]"
                                        class="hidden"
                                        accept="image/png, image/jpeg"
                                        onchange="render(this)"
                                    />
                                </div>
                                <div class="square fail">
                                    <span>+</span>
                                    <img
                                        alt=""
                                        class="kotak hidden"
                                        onclick="changeImg(this)"
                                    />
                                    <input
                                        type="file"
                                        name="img[]"
                                        class="hidden"
                                        accept="image/png, image/jpeg"
                                        onchange="render(this)"
                                    />
                                </div>
                                <div class="square fail">
                                    <span>+</span>
                                    <img
                                        alt=""
                                        class="kotak hidden"
                                        onclick="changeImg(this)"
                                    />
                                    <input
                                        type="file"
                                        name="img[]"
                                        class="hidden"
                                        accept="image/png, image/jpeg"
                                        onchange="render(this)"
                                    />
                                </div>
                            </div>
                            <div class="text-danger" style="text-align: center">
                                {{Session::get('fail') }}
                            </div>
                        </div>
                        @else
                        <div class="col-md-6 col-sm-6">
                            <div class="d-flex justify-content-around">
                                <div class="square">
                                    <span>+</span>
                                    <img
                                        alt=""
                                        class="kotak hidden"
                                        onclick="changeImg(this)"
                                    />
                                    <input
                                        type="file"
                                        name="img[]"
                                        class="hidden"
                                        accept="image/png, image/jpeg"
                                        onchange="render(this)"
                                    />
                                </div>
                                <div class="square">
                                    <span>+</span>
                                    <img
                                        alt=""
                                        class="kotak hidden"
                                        onclick="changeImg(this)"
                                    />
                                    <input
                                        type="file"
                                        name="img[]"
                                        class="hidden"
                                        accept="image/png, image/jpeg"
                                        onchange="render(this)"
                                    />
                                </div>
                                <div class="square">
                                    <span>+</span>
                                    <img
                                        alt=""
                                        class="kotak hidden"
                                        onclick="changeImg(this)"
                                    />
                                    <input
                                        type="file"
                                        name="img[]"
                                        class="hidden"
                                        accept="image/png, image/jpeg"
                                        onchange="render(this)"
                                    />
                                </div>
                            </div>
                            <div class="text-muted" style="text-align: center">
                                For Best Image Quality Resolution Should be
                                400px x 400px
                            </div>
                        </div>
                        @endif
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
                                >{{ old("desc") }}</textarea
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
                                >{{ old("feature") }}</textarea
                            >
                        </div>
                        <div class="alert">please put something here</div>
                    </div>
                    <div class="field item form-group" id="paragraf">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Paragraf <span class="required">*</span></label
                        >
                        <div class="col-md-6 col-sm-6">
                            <textarea
                                class="form-control"
                                name="paragraf[]"
                                style="height: 100px"
                                required
                                >{{ old("p") }}</textarea
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
                    <div class="ln_solid">
                        <div class="form-group">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary">
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
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Pekerjaan Data</h2>
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
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <div
                                id="datatable_wrapper"
                                class="
                                    dataTables_wrapper
                                    container-fluid
                                    dt-bootstrap
                                    no-footer
                                "
                            >
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table
                                            id="slidertable"
                                            class="
                                                table
                                                table-striped
                                                table-bordered
                                                dataTable
                                                no-footer
                                            "
                                            style="width: 100%"
                                            role="grid"
                                            aria-describedby="datatable_info"
                                        >
                                            <thead>
                                                <tr role="row">
                                                    <th
                                                        class="sorting"
                                                        tabindex="0"
                                                        aria-controls="datatable"
                                                        rowspan="1"
                                                        colspan="1"
                                                        aria-label="Position: activate to sort column ascending"
                                                        style="width: 50%"
                                                    >
                                                        Name Pekerjaan
                                                    </th>
                                                    <th style="width: 50%">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($pekerjaans as
                                                $pekerjaan)
                                                <tr>
                                                    <td>
                                                        {{$pekerjaan->nm_pekerjaan}}
                                                    </td>
                                                    <td>
                                                        <a
                                                            href="{{route('preview_pekerjaan',$pekerjaan->id)}}"
                                                            target="_blank"
                                                            rel="noopener noreferrer"
                                                        >
                                                            <button
                                                                type="button"
                                                                class="
                                                                    btn
                                                                    btn-round
                                                                    btn-info
                                                                "
                                                            >
                                                                <i
                                                                    class="
                                                                        fa
                                                                        fa-eye
                                                                    "
                                                                    title="Preview"
                                                                ></i></button
                                                        ></a>
                                                        <a
                                                            href="{{route('edit_pekerjaan',$pekerjaan->id)}}"
                                                            rel="noopener noreferrer"
                                                        >
                                                            <button
                                                                type="button"
                                                                class="
                                                                    btn
                                                                    btn-round
                                                                    btn-warning
                                                                "
                                                            >
                                                                <i
                                                                    class="
                                                                        fa
                                                                        fa-edit
                                                                    "
                                                                    title="Edit"
                                                                ></i>
                                                            </button>
                                                        </a>
                                                        <button
                                                            type="button"
                                                            class="
                                                                btn
                                                                btn-round
                                                                btn-danger
                                                            "
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#delete{{$pekerjaan->id}}"
                                                        >
                                                            <i
                                                                class="
                                                                    fa fa-trash
                                                                "
                                                                title="Delete"
                                                            ></i>
                                                        </button>
                                                    </td>
                                                </tr>

                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@foreach ($pekerjaans as $u)
<div
    class="modal fade"
    id="delete{{$u->id}}"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Delete Pekerjaan
                    {{$u->nm_pekerjaan}}
                </h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                >
                    X
                </button>
            </div>
            <div class="modal-body">Are You Sure ?</div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                >
                    Cancel
                </button>
                <a href="{{route('delete_pekerjaan',$u->id)}}">
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button></a
                >
            </div>
        </div>
    </div>
</div>
@endforeach @endsection @section('script') @section('script')
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
    $(".square span").on("click", function () {
        $(this).next().click();
    });
    function copyP() {
        $("#paragraf")
            .clone()
            .find('textarea[name="paragraf[]"]')
            .val("")
            .end()
            .insertBefore(".ln_solid");
    }
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
    function changeImg(ef) {
        $(ef).next().click();
    }
</script>
@endsection
