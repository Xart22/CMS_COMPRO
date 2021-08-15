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
                <h2>Company Data</h2>
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
                <form action="{{ route('create_data_perusahaan') }}" method="POST" enctype="multipart/form-data">
                @else
                <form action="{{ route('edit_data_perusahaan',$data->id) }}" method="POST" enctype="multipart/form-data"> 
                @endif
                    @csrf

                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Company Name</label
                        >
                        <div class="col-md-6 col-sm-6">
                            <div class="form-floating">
                                @if(isset($data->nm_perusahaan))
                                <input
                                class="form-control"
                                name="nm_perusahaan"
                                required
                                autocomplete="off"
                                value="{{$data->nm_perusahaan}}"
                            />
                                @else
                                <input
                                class="form-control"
                                name="nm_perusahaan"
                                required
                                autocomplete="off"
                                value="{{old('nm_perusahaan')}}"
                            />
                                @endif
                            </div>
                        </div>
                        <div class="alert">please put something here</div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Address</label
                        >
                        <div class="col-md-6 col-sm-6">
                            <div class="form-floating">
                                @if( isset($data->alamat))
                                <textarea
                                    class="form-control"
                                    name="alamat"
                                    style="height: 60px"
                                    
                                    >{{$data->alamat}}</textarea
                                >@else
                                <textarea
                                    class="form-control"
                                    name="alamat"
                                    style="height: 60px"
                                    
                                   
                                >{{old('alamat')}}</textarea>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Lat Koordinat Google Maps</label
                        >
                        <div class="col-md-6 col-sm-6">
                            <div class="form-floating">
                                @if( isset($data->lat))
                                <input
                                class="form-control"
                                name="lat"
                                required
                                autocomplete="off"
                                value="{{$data->lat}}"
                            />
                                @else
                                <input
                                class="form-control"
                                name="lat"
                                required
                                autocomplete="off"
                                value="{{old('lat')}}"
                            />
                                @endif
                            </div>
                        </div>
                        <div class="alert">please put something here</div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Long Koordinat Google Maps</label
                        >
                        <div class="col-md-6 col-sm-6">
                            <div class="form-floating">
                                @if( isset($data->long))
                                <input
                                class="form-control"
                                name="long"
                                required
                                autocomplete="off"
                                value="{{$data->long}}"
                            />
                                @else
                                <input
                                class="form-control"
                                name="long"
                                required
                                autocomplete="off"
                                value="{{old('long')}}"
                            />
                                @endif
                            </div>
                        </div>
                        <div class="alert">please put something here</div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >No. Telp</label
                        >
                        <div class="col-md-6 col-sm-6">
                            <div class="form-floating">
                                @if( isset($data->no_telp))
                                <input
                                class="form-control"
                                name="no_tlp"
                                required
                                autocomplete="off"
                                value="{{$data->no_telp}}"
                            />
                                @else
                                <input
                                class="form-control"
                                name="no_tlp"
                                required
                                autocomplete="off"
                                value="{{old('no_tlp')}}"
                            />
                                @endif
                            </div>
                        </div>
                        <div class="alert">please put something here</div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >No. WhatsApp</label
                        >
                        <div class="col-md-6 col-sm-6">
                            <div class="form-floating">
                                @if( isset($data->no_telp))
                                <input
                                class="form-control"
                                name="no_wa"
                                required
                                autocomplete="off"
                                value="{{$data->no_wa}}"
                            />
                                @else
                                <input
                                class="form-control"
                                name="no_wa"
                                required
                                autocomplete="off"
                                value="{{old('no_wa')}}"
                            />
                                @endif
                            </div>
                        </div>
                        <div class="alert">please put something here</div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Email</label
                        >
                        <div class="col-md-6 col-sm-6">
                            <div class="form-floating">
                                @if( isset($data->email))
                                <input
                                class="form-control"
                                type="email"
                                name="email"
                                required
                                autocomplete="off"
                                value="{{$data->email}}"
                            />
                                @else
                                <input
                                class="form-control"
                                type="email"
                                name="email"
                                required
                                autocomplete="off"
                                value="{{old('email')}}"
                            />
                                @endif
                            </div>
                        </div>
                        <div class="alert">please put something here</div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Operational day</label
                        >
                        <div class="col-md-6 col-sm-6">
                            <div class="form-floating">
                                @if( isset($data->no_telp))
                                <input
                                class="form-control"
                                name="hari"
                                required
                                autocomplete="off"
                                value="{{$data->hari_operasional}}"
                            />
                                @else
                                <input
                                class="form-control"
                                name="hari"
                                required
                                autocomplete="off"
                                value="{{old('hari')}}"
                            />
                                @endif
                            </div>
                        </div>
                        <div class="alert">please put something here</div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Operational hour</label
                        >
                        <div class="col-md-6 col-sm-6">
                            <div class="form-floating">
                                @if( isset($data->no_telp))
                                <input
                                class="form-control"
                                name="jam"
                                required
                                autocomplete="off"
                                value="{{$data->jam_operasional}}"
                            />
                                @else
                                <input
                                class="form-control"
                                name="jam"
                                required
                                autocomplete="off"
                                value="{{old('jam')}}"
                            />
                                @endif
                            </div>
                        </div>
                        <div class="alert">please put something here</div>
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Small Company Logo</label
                        >
                        @if(Session::get('fail_small'))
                        <div class="col-md-6 col-sm-6 bad">
                            <input
                                class="form-control"
                                type="file"
                                name="logo_small"
                                required="required"
                                accept="image/png, image/jpeg"
                            />
                            <div class="text-danger">
                                {{Session::get('fail_small') }}
                            </div>
                        </div>
                        @else
                        <div class="col-md-6 col-sm-6">
                            <input
                                class="form-control"
                                type="file"
                                name="logo_small"
                                required="required"
                                accept="image/png, image/jpeg"
                            />
                            <div class="text-muted">
                                For Best Image Quality Resolution Should be
                                200px x 200px
                            </div>
                    </div>
                    @endif
                    </div>
                    <div class="field item form-group">
                        <label
                            class="col-form-label col-md-3 col-sm-3 label-align"
                            >Big Company Logo</label
                        >
                        @if(Session::get('fail_big'))
                        <div class="col-md-6 col-sm-6 bad">
                            <input
                                class="form-control"
                                type="file"
                                name="logo_big"
                                required="required"
                                accept="image/png, image/jpeg"
                            />
                            <div class="text-danger">
                                {{Session::get('fail_big') }}
                            </div>
                        </div>
                        @else
                        <div class="col-md-6 col-sm-6">
                            <input
                                class="form-control"
                                type="file"
                                name="logo_big"
                                required="required"
                                accept="image/png, image/jpeg"
                            />
                            <div class="text-muted">
                                For Best Image Quality Resolution Should be
                                800px x 600px
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
</div>
@endsection
@section('script')
<script>
    $(document).ready(()=>{
        $(".alert").fadeOut(3000);
    })
</script>
@endsection