@extends('admin.layout.app')
@section('content')
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Add Testimonial</h4>
            <p class="mg-b-0">Navigation share general markup and styles, from the base .nav class to the active and
                disabled states.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-body">
                            <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="page_title" class="col-md-2 control-label">Blog Title *</label>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input type="text" id="page_title" maxlength="190" name="title"
                                               value="{{ old('title') }}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="slug" class="col-md-2 control-label">Slug *</label>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input id="slug" type="text" name="slug" maxlength="190" value="{{ old('slug') }}"
                                               class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="slug" class="col-md-2 control-label">Image *</label>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input id="image" type="file" name="image" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="meta_title" class="col-md-2 control-label">Rating *</label>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input type="number" id="rating" maxlength="190" name="rating"
                                               value="{{ old('rating') }}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="page_title" class="col-md-2 control-label"> Name *</label>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input type="text" id="page_title" maxlength="190" name="name"
                                               value="{{ old('name') }}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="page_title" class="col-md-2 control-label"> Position *</label>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input type="text" id="page_title" maxlength="190" name="position"
                                               value="{{ old('position') }}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="content" class="col-md-2 control-label">Content</label>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input type="text" id="page_title" maxlength="190" name="description"
                                               value="{{ old('description') }}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-2 col-md-10">
                                        <input type="submit" class="btn blue" id="save" value="Save">
                                        <input type="button" class="btn black" name="cancel" id="cancel" onclick="window.location.href = '{!! URL::route('blogs.index') !!}'" value="Cancel">
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
    </div>
    </div>
@endsection
<script type="text/javascript" src="{!! URL::to('assets/plugins/ckeditor/ckeditor.js') !!}"></script>
<script src="{!! URL::to('assets/scripts/core/app.js') !!}"></script>
<script>
    jQuery(document).ready(function () {

        // initiate layout and plugins
        App.init();
        Admin.init();
        $('#cancel').click(function () {
            window.location.href = "{!! URL::route('testimonial.index') !!}";
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
</script>
