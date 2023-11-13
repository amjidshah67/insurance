@extends('admin.layout.app')
@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ route('admin') }}">Bracket</a>
                <a class="breadcrumb-item" href="{{ route('services.index') }}">Services</a>
            </nav>
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Edit Services</h4>
            <p class="mg-b-0">Navigation share general markup and styles, from the base .nav class to the active and disabled states.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-body">
                            <h4>&nbsp;</h4>
                            <form enctype="multipart/form-data" action="{{ route('services.update',$dataEdit->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Image </label>
                                    <div class="col-md-9">
                                        <img height="100" width="150" src="{!! asset('uploads/'.$dataEdit->image) !!}"/>
                                        <input type="file" name="image" class="form-control"/>
                                        <input type="hidden" name="previous_image" value="{!! $dataEdit->image !!}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="page_title" class="col-md-2 control-label">Page Title *</label>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input type="text" id="page_title" name="title" maxlength="190"
                                               value="{{ old('title', $dataEdit->title) }}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="slug" class="col-md-2 control-label">Slug *</label>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input id="slug" type="text" name="slug" maxlength="190" value="{{ old('title', $dataEdit->slug) }}"
                                               class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="meta_title" class="col-md-2 control-label">Meta Title *</label>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input type="text" id="meta_title" maxlength="190" name="meta_title"
                                               value="{{ old('title', $dataEdit->meta_title) }}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="page_title" class="col-md-2 control-label"> Seo keywords *</label>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input type="text" id="page_title" maxlength="190" name="seo_keyword"
                                               value="{{ old('title', $dataEdit->seo_keyword) }}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="page_title" class="col-md-2 control-label"> meta_description *</label>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                <textarea name="meta_description" required
                                          class="form-control">{{ old('title', $dataEdit->meta_description) }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="content" class="col-md-2 control-label">Content</label>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                <textarea name="description" class="form-control ckeditor"
                                          maxlength="65000">{{ old('title', $dataEdit->description) }}</textarea>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <strong>Status:</strong>
                                    <select name="status" class="form-control">
                                        <option value="1"{{ $dataEdit->status == 1 ? "selected" : "" }}>Active</option>
                                        <option value="0"{{ $dataEdit->status == 0 ? "selected" : "" }}>DeActive</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-offset-2 col-md-10">
                                        <input type="submit" class="btn blue" id="save" value="Save">
                                        <input type="button" class="btn black" name="cancel" id="cancel" onclick="window.location.href = '{!! URL::route('blogs.index') !!}'"value="Cancel">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
        </div>
    </div><!-- br-section-wrapper -->
    </div><!-- br-pagebody -->
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
<script type="text/javascript" src="{!! URL::to('assets/plugins/ckeditor/ckeditor.js') !!}"></script>
<script src="{!! URL::to('assets/scripts/core/app.js') !!}"></script>
<script>
    jQuery(document).ready(function () {

        // initiate layout and plugins
        App.init();
        Admin.init();
        $('#cancel').click(function () {
            window.location.href = "{!! URL::route('blogs.index') !!}";
        });
    });

    $("#page_title").blur(function () {
        var value = $(this).val();
        $('#slug').val(slugify(value));
    }).blur();

    function slugify(text) {
        return text.toString().toLowerCase()
            .replace(/\s+/g, '-')           // Replace spaces with -
            .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
            .replace(/\-\-+/g, '-')         // Replace multiple - with single -
            .replace(/^-+/, '')             // Trim - from start of text
            .replace(/-+$/, '');            // Trim - from end of text
    }
    </script
