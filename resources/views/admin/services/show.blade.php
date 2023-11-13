@extends('admin.layout.app')
@section('content')
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Show Services</h4>
            <p class="mg-b-0 m-5">Navigation share general markup and styles, from the base .nav class to the active and disabled states.</p>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Image:</strong>
                        <img src="{{ asset('uploads/'.$dataShow->image) }}" width="100px">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>title:</strong>
                        {{ $dataShow->title }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Meta Title:</strong>
                        {{ $dataShow->meta_title }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Seo keyword:</strong>
                        {{ $dataShow->seo_keyword }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Meta Description:</strong>
                        {{ $dataShow->meta_description }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>status:</strong>
                        {{ $dataShow->status }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label"><strong>Contents:</strong> </label>
                    <div class="col-md-8">
                        <label class="">{!! strip_tags($dataShow->description) !!}</label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>created_at:</strong>
                        {{ $dataShow->created_at->diffForHumans() }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>updated_at:</strong>
                        {{ $dataShow->updated_at->diffForHumans() }}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10"></div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <button class="btn black" id="cancel" onclick="window.location.href = '{!! URL::route('blogs.index') !!}'"> < Back..</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="{!! URL::to('assets/scripts/core/app.js') !!}"></script>
<script>
    jQuery(document).ready(function() {
        // initiate layout and plugins
        App.init();
        Admin.init();
    });
</script>
