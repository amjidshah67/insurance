@extends('admin.layout.app')
@section('content')
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Add Blogs</h4>
            <p class="mg-b-0">Navigation share general markup and styles, from the base .nav class to the active and
                disabled states.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-body">
                            <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
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
                                    <label for="meta_title" class="col-md-2 control-label">Meta Title *</label>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input type="text" id="meta_title" maxlength="190" name="meta_title"
                                               value="{{ old('meta_title') }}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="page_title" class="col-md-2 control-label"> Seo keywords *</label>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input type="text" id="page_title" maxlength="190" name="seo_keyword"
                                               value="{{ old('seo_keyword') }}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="page_title" class="col-md-2 control-label"> meta_description *</label>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                <textarea name="meta_description" required
                                          class="form-control">{{ old('meta_description') }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="content" class="col-md-2 control-label">Content</label>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                <textarea name="description" class="form-control ckeditor"
                                          maxlength="65000">{{ old('description') }}</textarea>
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
</script>
