@extends('cms.layout') @section('title','Partner') @section('header')
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
                    action="{{ route('create_partner') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @csrf
                    <span class="section">Personal Info</span>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Name Partner <span class="required">*</span></label
                        >
                        @if(Session::get('nm'))
                        <div class="col-md-6 col-sm-6 bad">
                            <input
                                class="form-control"
                                name="nm_partner"
                                required
                                autocomplete="off"
                                value="{{ old('nm_partner') }}"
                            />
                            <div class="text-danger">
                                {{Session::get('nm') }}
                            </div>
                        </div>
                        @else
                        <div class="col-md-6 col-sm-6">
                            <input
                                class="form-control"
                                name="nm_partner"
                                required
                                autocomplete="off"
                            />
                        </div>
                        @endif
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Description<span class="required">*</span></label
                        >
                        <div class="col-md-6 col-sm-6">
                            <textarea
                                class="form-control"
                                name="desc"
                                style="height: 100px"
                                required
                            >
@if(Session::get('nm') ){{ old("desc") }}@endif</textarea
                            >
                        </div>
                    </div>
                    @if(Session::get('fail'))
                    <div class="field item form-group bad">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Logo Partner <span class="required">*</span></label
                        >
                        <div class="col-md-6 col-sm-6">
                            <input
                                class="form-control"
                                type="file"
                                name="logo"
                                required="required"
                                accept="image/png, image/jpeg"
                            />
                            <div class="text-danger">
                                {{Session::get('fail')}}
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Logo Partner <span class="required">*</span></label
                        >
                        <div class="col-md-6 col-sm-6">
                            <input
                                class="form-control"
                                type="file"
                                name="logo"
                                required="required"
                                accept="image/png, image/jpeg"
                            />
                            <div class="text-muted">
                                For Best Image Quality Resolution Should be
                                200px x 200px
                            </div>
                        </div>
                    </div>
                    @endif
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
                                                    <th
                                                        class="sorting"
                                                        tabindex="0"
                                                        aria-controls="datatable"
                                                        rowspan="1"
                                                        colspan="1"
                                                        aria-label="Position: activate to sort column ascending"
                                                    >
                                                        Name Partner
                                                    </th>
                                                    <th
                                                        class="sorting"
                                                        tabindex="0"
                                                        aria-controls="datatable"
                                                        rowspan="1"
                                                        colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                    >
                                                        Description
                                                    </th>
                                                    <th
                                                        class="sorting"
                                                        tabindex="0"
                                                        aria-controls="datatable"
                                                        rowspan="1"
                                                        colspan="1"
                                                        aria-label="Age: activate to sort column ascending"
                                                    >
                                                        Logo Partner
                                                    </th>
                                                    <th
                                                        class="sorting"
                                                        tabindex="0"
                                                        aria-controls="datatable"
                                                        rowspan="1"
                                                        colspan="1"
                                                        aria-label="Salary: activate to sort column ascending"
                                                    >
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($data as $partner)

                                                <tr role="row" class="odd">
                                                    <td>
                                                        {{$partner ->nm_partner}}
                                                    </td>
                                                    <td>
                                                        {{$partner ->desc}}
                                                    </td>
                                                    <td>
                                                        <img
                                                            src="/sumaju/storage/app/{{$partner ->logo_partner}}"
                                                            width="150"
                                                        />
                                                    </td>
                                                    <td class="d-flex">
                                                        <a
                                                            href="{{
                                                                route(
                                                                    'preview_partner'
                                                                )
                                                            }}"
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
                                                        <button
                                                            type="button"
                                                            class="
                                                                btn
                                                                btn-round
                                                                btn-warning
                                                            "
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#update{{$partner->id}}"
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
                                                            data-bs-target="#delete{{$partner->id}}"
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
<!-- Modal Update -->
@foreach ($data as $u)
<div
    class="modal fade"
    id="update{{$u->id}}"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Partner</h5>
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
                action="{{route('edit_partner',$u->id)}}"
                method="post"
                enctype="multipart/form-data"
            >
                @csrf
                <div class="modal-body">
                    <div class="item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            for="first-name"
                            >Name Partner
                        </label>
                        @if(Session::get('nm_update'))
                        <div class="col-md-6 col-sm-6 bad">
                            <input
                                type="text"
                                required="required"
                                class="form-control"
                                name="nm_partner"
                                autocomplete="off"
                                value="{{ old('nm_partner') }}"
                            />
                            <div class="text-danger">
                                {{Session::get('nm_update') }}
                            </div>
                        </div>
                        @else
                        <div class="col-md-6 col-sm-6">
                            <input
                                type="text"
                                required="required"
                                class="form-control"
                                name="nm_partner"
                                autocomplete="off"
                                value="{{$u->nm_partner}}"
                            />
                        </div>
                        @endif
                    </div>
                    <div class="item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            for="first-name"
                            >Description
                        </label>
                        <div class="col-md-6 col-sm-6">
                            <textarea
                                class="form-control"
                                name="desc"
                                style="height: 100px"
                                required
                                >{{$u->desc}}</textarea
                            >
                        </div>
                    </div>

                    <div class="item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            for="first-name"
                            >Logo Partner
                        </label>
                        @if(Session::get('modal_file'))
                        <div class="col-md-6 col-sm-6 bad">
                            <input
                                type="file"
                                class="form-control"
                                name="logo"
                                accept="image/png, image/jpeg"
                            />
                            <div class="text-danger">
                                {{Session::get('modal_file') }}
                            </div>
                        </div>
                        @else
                        <div class="col-md-6 col-sm-6">
                            <input
                                type="file"
                                class="form-control"
                                name="logo"
                                accept="image/png, image/jpeg"
                            />
                            <div class="text-muted">
                                For Best Image Quality Resolution Should be
                                200px x 200px
                            </div>
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
            </form>
        </div>
    </div>
</div>
@endforeach
<!-- Modal Delte -->
@foreach ($data as $d)
<div
    class="modal fade"
    id="delete{{$d->id}}"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Delete Partner {{$d->nm_partner}}
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
                <a href="{{route('delete_partner',$d->id)}}">
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
        $("#update{{Session::get('modal')}}").modal("show");
    });
</script>
@endif @if(Session::get('modal_file'))
<script>
    $(function () {
        $("#update{{Session::get('modalId')}}").modal("show");
    });
</script>
@endif @endsection
