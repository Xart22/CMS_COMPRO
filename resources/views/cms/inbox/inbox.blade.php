@extends('cms.layout') @section('title','Inbox') @section('header')
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
                <h2>Inbox</h2>
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
                <table class="table table-striped table-bordered" id="inbox">
                    <thead>
                        <th style="width: 10px">No</th>
                        <th style="width: 250px">Form</th>
                        <th style="width: 250px">Email</th>
                        <th style="width: 250px">No Telp</th>
                        <th>Text</th>
                        <th style="width: 200px">Time</th>
                    </thead>
                    <tbody>
                        @foreach($inbox as $in)
                        <tr>
                            <td>{{$in->id}}</td>
                            <td>{{$in->form}}</td>
                            <td>{{$in->email}}</td>
                            <td>{{$in->no_telp}}</td>
                            <td>{{$in->message}}</td>
                            <td>{{$in->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection @section('script')
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
        $("#inbox").DataTable();
    });
</script>
@endsection
