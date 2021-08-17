@extends('cms.layout') @section('title','Product') @section('header')
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
                <h2>Input Product</h2>
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
                    action="{{ route('create_produk') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @csrf

                    <span class="section">Personal Info</span>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Name Product <span class="required">*</span></label
                        >
                        @if(Session::get('nm'))
                        <div class="col-md-6 col-sm-6 bad">
                            <input
                                class="form-control"
                                name="nm_produk"
                                required
                                value="{{ old('nm_produk') }}"
                            />
                            <div class="text-danger">
                                {{Session::get('nm') }}
                            </div>
                        </div>
                        @else
                        <div class="col-md-6 col-sm-6">
                            <input
                                class="form-control"
                                name="nm_produk"
                                required
                            />
                        </div>
                        @endif
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Specification<span class="required">*</span></label
                        >
                        <div class="col-md-6 col-sm-6">
                            <textarea
                                class="form-control"
                                name="spec"
                                style="height: 100px"
                                required
                                >{{ old("spec") }}</textarea
                            >
                        </div>
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
                                >{{ old("desc") }}</textarea
                            >
                        </div>
                        <div class="alert">please put something here</div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Image Product
                            <span class="required">*</span></label
                        >
                        @if(Session::get('fail'))
                        <div class="col-md-6 col-sm-6 bad">
                            <input
                                class="form-control"
                                type="file"
                                name="img[]"
                                required="required"
                                accept="image/png, image/jpeg"
                                multiple
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
                                name="img[]"
                                required="required"
                                accept="image/png, image/jpeg"
                                multiple
                            />
                            <div class="text-muted">
                                For Best Image Quality Resolution Should be
                                400px x 400px
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
                                                    <th style="width: 200px">
                                                        Name Produk
                                                    </th>
                                                    <th style="width: 200px">
                                                        Specification
                                                    </th>
                                                    <th style="width: 200px">
                                                        Description
                                                    </th>
                                                    <th style="width: 200px">
                                                        Image 1
                                                    </th>
                                                    <th style="width: 200px">
                                                        Image 2
                                                    </th>
                                                    <th>Image 3</th>
                                                    <th style="width: 56px">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($data as $produk)
                                                <tr>
                                                    <td>
                                                        {{$produk->nm_produk}}
                                                    </td>
                                                    <td>
                                                        {{$produk->spec}}
                                                    </td>
                                                    <td>
                                                        {{$produk->desc}}
                                                    </td>
                                                    <td>
                                                        <img
                                                            src="/sumaju/storage/app/{{$produk->img_big_1}}"
                                                            width="200"
                                                        />
                                                    </td>
                                                    <td>
                                                        <img
                                                            src="/sumaju/storage/app/{{$produk->img_big_2}}"
                                                            width="200"
                                                        />
                                                    </td>
                                                    <td>
                                                        <img
                                                            src="/sumaju/storage/app/{{$produk->img_big_3}}"
                                                            width="200"
                                                        />
                                                    </td>
                                                    <td class="d-flex">
                                                        <a
                                                            href="/sumaju/public/cms/preview/produk/{{$produk->id}}"
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
                                                            data-bs-target="#modal{{$produk->id}}"
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
                                                            data-bs-target="#delete{{$produk->id}}"
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
                    {{$d->nm_produk}}
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
                action="{{route('edit_produk',$d->id)}}"
                method="post"
                enctype="multipart/form-data"
            >
                @csrf
                <div class="modal-body">
                    <div class="item form-group">
                        <label
                            class="col-form-label col-md-1 col-sm-1 label-align"
                            for="first-name"
                            >Name Product
                        </label>
                        <div class="col-md-10 col-sm-10">
                            <input
                                class="form-control"
                                name="nm_produk"
                                required
                                value="{{ $d->nm_produk }}"
                            />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label
                            class="col-form-label col-md-1 col-sm-1 label-align"
                            for="first-name"
                            >Specification
                        </label>
                        <div class="col-md-10 col-sm-10">
                            <textarea
                                class="form-control"
                                name="spec"
                                style="height: 100px"
                                required
                                >{{ $d->spec }}}</textarea
                            >
                        </div>
                    </div>
                    <div class="item form-group">
                        <label
                            class="col-form-label col-md-1 col-sm-1 label-align"
                            for="first-name"
                            >Description
                        </label>
                        <div class="col-md-10 col-sm-10">
                            <textarea
                                class="form-control"
                                name="desc"
                                style="height: 100px"
                                required
                                >{{ $d->desc }}</textarea
                            >
                        </div>
                    </div>
                    <div class="item form-group">
                        <label
                            class="col-form-label col-md-1 col-sm-1 label-align"
                            >Image Product
                            <span class="required">*</span></label
                        >
                        @if(Session::get('modal_fail'))
                        <div class="col-md-10 col-sm-10 bad">
                            <input
                                class="form-control"
                                type="file"
                                name="img[]"
                                accept="image/png, image/jpeg"
                                multiple
                            />
                            <div class="text-danger">
                                {{Session::get('modal_fail') }}
                            </div>
                        </div>
                        @else
                        <div class="col-md-10 col-sm-10">
                            <input
                                class="form-control"
                                type="file"
                                name="img[]"
                                accept="image/png, image/jpeg"
                                multiple
                            />
                            <div class="text-muted">
                                For Best Image Quality Resolution Should be
                                400px x 400px
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
                    {{$u->nm_produk}}
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
                <a href="{{route('delete_produk',$u->id)}}">
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
@if(Session::get('modalId'))
<script>
    $(function () {
        $("#modal{{Session::get('modalId')}}").modal("show");
    });
</script>
@endif @endsection
