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
                <form action="{{ route('create_intro') }}" method="POST">
                @else
                <form action="{{ route('edit_intro',$data->id) }}" method="POST"> 
                @endif
                    @csrf

                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Paragraf 1 </label
                        >
                        <div class="col-md-6 col-sm-6">
                            <div class="form-floating">
                                @if(isset($data->paragraf_1))
                                <textarea
                                    class="form-control"
                                    name="p_1"
                                    style="height: 100px"
                                    required
                                    >{{$data->paragraf_1}}</textarea
                                >@else
                                <textarea
                                    class="form-control"
                                    name="p_1"
                                    style="height: 100px"
                                    required
                                ></textarea>
                                @endif
                            </div>
                        </div>
                        <div class="alert">please put something here</div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Paragraf 2</label
                        >
                        <div class="col-md-6 col-sm-6">
                            <div class="form-floating">
                                @if( isset($data->paragraf_2))
                                <textarea
                                    class="form-control"
                                    name="p_2"
                                    style="height: 100px"
                                    
                                    >{{$data->paragraf_2}}</textarea
                                >@else
                                <textarea
                                    class="form-control"
                                    name="p_2"
                                    style="height: 100px"
                                   
                                ></textarea>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Paragraf 3</label
                        >
                        <div class="col-md-6 col-sm-6">
                            <div class="form-floating">
                                @if( isset($data->paragraf_3))
                                <textarea
                                    class="form-control"
                                    name="p_3"
                                    style="height: 100px"
                                    
                                    >{{$data->paragraf_3}}</textarea
                                >@else
                                <textarea
                                    class="form-control"
                                    name="p_3"
                                    style="height: 100px"
                                    
                                ></textarea>
                                @endif
                            </div>
                        </div>
                        <div class="alert">please put something here</div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Paragraf 4</label
                        >
                        <div class="col-md-6 col-sm-6">
                            <div class="form-floating">
                                @if( isset($data->paragraf_4))
                                <textarea
                                    class="form-control"
                                    name="p_4"
                                    style="height: 100px"
                                    >{{$data->paragraf_4}}</textarea
                                >
                                @else
                                <textarea
                                    class="form-control"
                                    name="p_4"
                                    style="height: 100px"
                                ></textarea>
                                @endif
                            </div>
                        </div>
                        <div class="alert">please put something here</div>
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
                                src="/sumaju/public/cms/preview/intro"
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
