@extends('cms\layout') @section('title','Slider') @section('header')
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
                <h2>Input Slider</h2>
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
                    action="{{ route('create_slider') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @csrf

                    <span class="section">Personal Info</span>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Field Text 1 <span class="required">*</span></label
                        >
                        <div class="col-md-6 col-sm-6">
                            <input
                                class="form-control"
                                name="field_1"
                                required
                                value="{{ old('field_1') }}"
                            />
                        </div>
                        <div class="alert"></div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Field Text 2<span class="required">*</span></label
                        >
                        <div class="col-md-6 col-sm-6">
                            <input
                                class="form-control"
                                name="field_2"
                                type="text"
                                required
                                value="{{ old('field_2') }}"
                            />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Field Text 3<span class="required">*</span></label
                        >
                        <div class="col-md-6 col-sm-6">
                            <input
                                class="form-control"
                                name="field_3"
                                type="text"
                                value="{{ old('field_3') }}"
                            />
                        </div>
                        <div class="alert">please put something here</div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Field Text 4<span class="required">*</span></label
                        >
                        <div class="col-md-6 col-sm-6">
                            <input
                                class="form-control"
                                type="text"
                                name="field_4"
                                value="{{ old('field_4') }}"
                            />
                        </div>
                        <div class="alert">please put something here</div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Image <span class="required">*</span></label
                        >
                        @if(Session::get('fail'))
                        <div class="col-md-6 col-sm-6 bad">
                            <input
                                class="form-control"
                                type="file"
                                name="img"
                                required="required"
                                accept="image/png, image/jpeg"
                            />
                            <div class="text-danger">
                                {{Session::get('fail') }}
                            </div>
                        </div>
                        @else
                        <div class="col-md-6 col-sm-6">
                            <input
                                class="form-control"
                                type="file"
                                name="img"
                                required="required"
                                accept="image/png, image/jpeg"
                            />
                            <div class="text-muted">
                                For Best Image Quality Resolution Should be
                                1920px x 1280px
                            </div>

                            @endif
                        </div>
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
                <h2>Slider Data</h2>
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
                                                    <th style="width: 5px">
                                                        Slider Position
                                                    </th>
                                                    <th style="width: 200px">
                                                        Text 1
                                                    </th>
                                                    <th style="width: 200px">
                                                        Text 2
                                                    </th>
                                                    <th style="width: 200px">
                                                        Text 3
                                                    </th>
                                                    <th style="width: 200px">
                                                        Text 4
                                                    </th>
                                                    <th>Image</th>
                                                    <th style="width: 56px">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($data as $slider)
                                                <tr>
                                                    <td>
                                                        {{$slider->position}}
                                                    </td>
                                                    <td>
                                                        {{$slider->text1}}
                                                    </td>
                                                    <td>
                                                        {{$slider->text2}}
                                                    </td>
                                                    <td>
                                                        {{$slider->text3}}
                                                    </td>
                                                    <td>
                                                        {{$slider->text4}}
                                                    </td>
                                                    <td>
                                                        <img
                                                            src="/sumaju/storage/app/{{$slider->img}}"
                                                            width="200"
                                                        />
                                                    </td>
                                                    <td class="d-flex">
                                                        <a
                                                            href="/sumaju/public/cms/preview/slider/{{$slider->id}}"
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
                                                                    title="Priview"
                                                                ></i></button
                                                        ></a>

                                                        <!-- Edit -->
                                                        <button
                                                            type="button"
                                                            class="
                                                                btn
                                                                btn-round
                                                                btn-warning
                                                            "
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modal{{$slider->id}}"
                                                        >
                                                            <i
                                                                class="
                                                                    fa fa-edit
                                                                "
                                                                title="Edit"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="
                                                                btn
                                                                btn-round
                                                                btn-danger
                                                            "
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#delete{{$slider->id}}"
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
<!-- Modal Edit -->
@foreach ($data as $d)
<!-- Modal -->
<div
    class="modal fade"
    id="modal{{$d->id}}"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Edit Slider
                    {{$d->position}}
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
            <form
                action="{{route('edit_slider',$d->id)}}"
                method="post"
                enctype="multipart/form-data"
            >
                @csrf
                <div class="modal-body">
                    <div class="item form-group">
                        <label
                            class="col-form-label col-md-1 col-sm-1 label-align"
                            for="first-name"
                            >Text 1
                        </label>
                        <div class="col-md-10 col-sm-10">
                            <input
                                type="text"
                                required="required"
                                class="form-control"
                                name="field_1"
                                autocomplete="off"
                                value="{{$d->text1}}"
                            />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label
                            class="col-form-label col-md-1 col-sm-1 label-align"
                            for="first-name"
                            >Text 2
                        </label>
                        <div class="col-md-10 col-sm-10">
                            <input
                                type="text"
                                required="required"
                                class="form-control"
                                name="field_2"
                                autocomplete="off"
                                value="{{$d->text2}}"
                            />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label
                            class="col-form-label col-md-1 col-sm-1 label-align"
                            for="first-name"
                            >Text 3
                        </label>
                        <div class="col-md-10 col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                name="field_3"
                                autocomplete="off"
                                value="{{$d->text3}}"
                            />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label
                            class="col-form-label col-md-1 col-sm-1 label-align"
                            for="first-name"
                            >Text 4
                        </label>
                        <div class="col-md-10 col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                name="field_4"
                                autocomplete="off"
                                value="{{$d->text4}}"
                            />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label
                            class="col-form-label col-md-1 col-sm-1 label-align"
                            for="first-name"
                            >Image
                        </label>
                        @if(Session::get('modal'))
                        <div class="col-md-10 col-sm-10 bad">
                            <input
                                class="form-control"
                                type="file"
                                name="img"
                                required="required"
                                accept="image/png, image/jpeg"
                            />
                            <div class="text-danger">
                                {{Session::get('modal') }}
                            </div>
                        </div>
                        @else
                        <div class="col-md-10 col-sm-10">
                            <input
                                class="form-control"
                                type="file"
                                name="img"
                                required="required"
                                accept="image/png, image/jpeg"
                            />
                            <div class="text-muted">
                                For Best Image Quality Resolution Should be
                                1920px x 1280px
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal"
                        >
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Save changes
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
<!-- Modal Delete -->

@foreach ($data as $u)
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
                    Delete Modal
                    {{$u->position}}
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
                <a href="{{route('delete_slider',$u->id)}}">
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button></a
                >
            </div>
        </div>
    </div>
</div>
@endforeach @endsection @section('script')
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
        $("#slidertable").DataTable();
        $(".alert").fadeOut(3000);
    });
</script>
@if(Session::get('modal'))
<script>
    $(function () {
        $("#exampleModal").modal("show");
    });
</script>
@endif @endsection
