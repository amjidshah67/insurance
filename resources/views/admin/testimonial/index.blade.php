@extends('admin.layout.app')
@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ route('admin-dashboard') }}">Bracket</a>
                <a class="breadcrumb-item" href="{{ route('testimonial.index') }}">Services</a>
            </nav>
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Testimonial</h4>
            <p class="mg-b-0">Navigation share general markup and styles, from the base .nav class to the active and disabled states.</p>
        </div>

        <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(session('success'))
                    <span class="text-success ">{{session('success')}}</span>
                @endif
                <!-- Action buttons Code Start -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- Add New Button Code Moved Here -->
                        <div class="table-toolbar pull-right">
                            <div class="btn-group">
                                <a href="{{ route('testimonial.create') }}" id="sample_editable_1_new"
                                   class="btn blue">
                                    Add <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Add New Button Code Moved Here -->
                    </div>
                </div>
                <!-- Action buttons Code End -->


                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box blue">

                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-th"></i>
                        </div>
                    </div>

                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover" id="sample_1">
                            <thead>
                            <tr>
                                <th>Page Title</th>
                                <th>Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                            <tr class="odd gradeX">
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->status }}</td>
                                <td class="center text-center">
                                    <a href="{{ route('testimonial.show',$item->id) }}"
                                       class="btn btn-xs blue" title="Show Record">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a href="{{ route('testimonial.edit',$item->id) }}"
                                       class="btn btn-xs green" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-xs red" data-toggle="modal" data-target="#confirmDelete" title="Delete Record">
                                        <i class="fa fa-trash-o"></i>
                                    </a>

                                    <div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Delete Record</h4>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete this record?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                    <a href="#" class="btn btn-danger" onclick="document.getElementById('deleteForm{{$item->id}}').submit();">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <form action="{{ route('testimonial.destroy', $item->id) }}" method="POST" id="deleteForm{{$item->id}}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
        </div>
            </div><!-- br-section-wrapper -->
        </div><!-- br-pagebody -->
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
