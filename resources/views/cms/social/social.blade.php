@extends('cms.layout') @section('title','Social Media')
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
                <h2>Input Social Media</h2>
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
                <form action="{{ route('create_social') }}" method="POST">
                @else
                <form action="{{ route('edit_social',$data->id) }}" method="POST"> 
                @endif
                    @csrf

                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Facebook Link</label
                        >
                        <div class="col-md-6 col-sm-6">
                            <div class="form-floating">
                                @if(isset($data->facebook))
                                <input
                                class="form-control"
                                type="text"
                                name="fb"
                                required
                                value="{{$data->facebook}}"
                            />
                                @else
                                <input
                                class="form-control"
                                type="text"
                                name="fb"
                                required
                            />
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Twiter Link</label
                        >
                        <div class="col-md-6 col-sm-6">
                            <div class="form-floating">
                                @if( isset($data->twiter))
                                <input
                                class="form-control"
                                type="text"
                                name="tw"
                                required
                                value="{{$data->twiter}}"
                            />
                                @else
                                <input
                                class="form-control"
                                type="text"
                                name="tw"
                                required
                            />
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Instagram Link</label
                        >
                        <div class="col-md-6 col-sm-6">
                            <div class="form-floating">
                                @if( isset($data->instagram))
                                <input
                                class="form-control"
                                type="text"
                                name="ig"
                                value="{{$data->instagram}}"
                            />
                                @else
                                <input
                                class="form-control"
                                type="text"
                                name="ig"
                                required
                            />
                                @endif
                            </div>
                        </div>
                        <div class="alert">please put something here</div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Linkedin Link</label
                        >
                        <div class="col-md-6 col-sm-6">
                            <div class="form-floating">
                                @if( isset($data->linkedin))
                                <input
                                class="form-control"
                                type="text"
                                name="li"
                                value="{{$data->linkedin}}"
                            />
                                @else
                                <input
                                class="form-control"
                                type="text"
                                name="li"
                                required
                            />
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Template Text WhatsApp</label
                        >
                        <div class="col-md-6 col-sm-6">
                            <div class="form-floating">
                                @if( isset($data->linkedin))
                                <input
                                class="form-control"
                                type="text"
                                name="text_wa"
                                value="{{$data->text_wa}}"
                            />
                                @else
                                <input
                                class="form-control"
                                type="text"
                                name="text_wa"
                                required
                            />
                                @endif
                            </div>
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
</div>
@endsection
