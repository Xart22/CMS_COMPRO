@extends('cms\layout') @section('title','Intro')
@section('header')@section('content')
<div class="row">
    @if(Session::get('success'))
    <div class="alert alert-success w-25" role="alert">
        {{Session::get('success')}}
    </div>
    @endif
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Input Intro</h2>
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
                @if($data == null)
                <form action="{{ route('create_popup') }}" method="POST" enctype="multipart/form-data">
                @else
                <form action="{{ route('edit_popup',$data->id) }}" method="POST" enctype="multipart/form-data"> 
                @endif
                    @csrf

                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Pop Up Image </label
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
                                1280px x 800px
                            </div>
                            @endif     
                    </div>
                    </div>
                    <div class="ln_solid">
                        <div class="form-group">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-success w-100">
                                    Save
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
                <h2>Intro Preview</h2>
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
                            <iframe
                                src="/sumaju/public/"
                                frameborder="0"
                                width="100%"
                                height="1000"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
