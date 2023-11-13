<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Form Layouts Design - Bracket Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{ asset('assets/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/jquery-switchbutton/jquery.switchButton.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/highlightjs/github.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/select2/css/select2.min.css') }}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bracket.css') }}">
</head>
<body>
<!-- ########## START: MAIN PANEL ########## -->

            <div class="pd-y-50 bg-gray-700 mg-t-20">
                <div class="modal d-block pos-static">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content bd-0 rounded-0 wd-xs-350 wd-xl-auto mg-xl-x-25">
                            <div class="modal-body pd-0">
                                <div class="row flex-row-reverse no-gutters">
                                    <div class="col-xl-6">
                                        <div class="pd-30">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <div class="pd-xs-x-30 pd-y-10">
                                                <h5 class="tx-xs-28 tx-inverse mg-b-5">Welcome back!</h5>
                                                <p>Sign in to your account to continue</p>
                                                @if(session('success'))
                                                    <span class="text-danger">{{session('success')}}</span>
                                                @endif
                                                <br>
                                                <form method="post" action="{{ route('check-login') }}">
                                                    @csrf
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control pd-y-12" placeholder="Enter your email">
                                                    @if ($errors->has('email'))
                                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                                    @endif
                                                </div><!-- form-group -->
                                                <div class="form-group mg-b-20">
                                                    <input type="password" name="password" class="form-control pd-y-12" placeholder="Enter your password">
                                                    @if ($errors->has('password'))
                                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                                    @endif
                                                    <a href="" class="tx-12 d-block mg-t-10">Forgot password?</a>
                                                </div><!-- form-group -->

                                                <button name="submit" type="submit" class="btn btn-primary pd-y-12 btn-block">Sign In</button>
                                                </form>
                                                <div class="mg-t-30 mg-b-20 tx-12">Don't have an account yet? <a href="{{ route('register') }}">Sign Up</a></div>
                                            </div>
                                        </div><!-- pd-20 -->
                                    </div><!-- col-6 -->
                                    <div class="col-xl-6 bg-primary">
                                        <div class="pd-40">
                                            <h4 class="tx-white mg-b-20"><span>[</span> Mckinney $ Co  <span>]</span></h4>
                                            <p class="tx-white op-7 mg-b-60">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                            <p class="tx-white tx-13">
                                                <span class="tx-uppercase tx-medium d-block mg-b-15">Our Address:</span>
                                                <span class="op-7">4964 Lavista Rd, Tucker, GA 30084</span>
                                            </p>
                                        </div>
                                    </div><!-- col-6 -->
                                </div><!-- row -->
                            </div><!-- modal-body -->
                        </div><!-- modal-content -->
                    </div><!-- modal-dialog -->
                </div><!-- modal -->
            </div><!-- pd-y-50 -->

<!-- ########## END: MAIN PANEL ########## -->
<script src="{{asset('assets/lib/jquery/jquery.js')}}"></script>
<script src="{{asset('assets/lib/popper.js/popper.js')}}"></script>
<script src="{{asset('assets/lib/bootstrap/bootstrap.js')}}"></script>
<script src="{{asset('assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
<script src="{{asset('assets/lib/moment/moment.js')}}"></script>
<script src="{{asset('assets/lib/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{asset('assets/lib/jquery-switchbutton/jquery.switchButton.js')}}"></script>
<script src="{{asset('assets/lib/peity/jquery.peity.js')}}"></script>
<script src="{{asset('assets/lib/highlightjs/highlight.pack.js')}}"></script>
<script src="{{asset('assets/lib/select2/js/select2.min.js')}}"></script>

<script src="{{asset('assets/js/bracket.js')}}"></script>
<script>
    $(function(){
        'use strict'

        $('.form-layout .form-control').on('focusin', function(){
            $(this).closest('.form-group').addClass('form-group-active');
        });

        $('.form-layout .form-control').on('focusout', function(){
            $(this).closest('.form-group').removeClass('form-group-active');
        });

        // Select2
        $('#select2-a, #select2-b').select2({
            minimumResultsForSearch: Infinity
        });

        $('#select2-a').on('select2:opening', function (e) {
            $(this).closest('.form-group').addClass('form-group-active');
        });

        $('#select2-a').on('select2:closing', function (e) {
            $(this).closest('.form-group').removeClass('form-group-active');
        });

    });
</script>
</body>
</html>
