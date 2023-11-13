@extends('admin.layout.app')
@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ route('admin-dashboard') }}">Bracket</a>
                <a class="breadcrumb-item" href="{{ route('contact.index') }}">Services</a>
            </nav>
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Contact Us</h4>
            <p class="mg-b-0">Navigation share general markup and styles, from the base .nav class to the active and disabled states.</p>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Action buttons Code Start -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- Add New Button Code Moved Here -->
{{--                        <div class="table-toolbar pull-right">--}}
{{--                            <div class="btn-group">--}}
{{--                                <a href="--}}{{-- route('faqs.create') --}}{{--" id="sample_editable_1_new"--}}
{{--                                   class="btn blue">--}}
{{--                                    Add <i class="fa fa-plus"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                            <tr class="odd gradeX">
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td class="center text-center">
                                    <a href="{{ route('contact.show',$item->id) }}"
                                       class="btn btn-xs blue" title="Show Record">
                                        <i class="fa fa-search"></i>
                                    </a>
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
