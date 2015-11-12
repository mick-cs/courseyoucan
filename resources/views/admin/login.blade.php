@extends('admin.layout.master')
{{-- title --}}
@section('title')Login - Course You Can CMS @stop

{{-- container --}}
@section('container')
    <div class="block-center mt-xl wd-xl">
        <!-- START panel-->
        <div class="panel panel-dark panel-flat">

            <div class="panel-heading text-center">
                <h3 class="logo">Course You Can CMS</h3>
            </div>
            <div class="panel-body">
                <p class="text-center pv">SIGN IN TO CONTINUE.</p>
                <form role="form" class="mb-lg" data-parsley-validate="" novalidate="" method="post">
                    <div class="form-group has-feedback">
                        <input type="text" name="username" placeholder="Username" required class="form-control">
                        <span class="fa fa-user form-control-feedback text-muted"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" placeholder="Password" required class="form-control">
                        <span class="fa fa-lock form-control-feedback text-muted"></span>
                    </div>
                    <div class="clearfix">
                        <div class="checkbox c-checkbox pull-left mt0">
                            <label>
                                <input type="checkbox" value="true" name="remember">
                                <span class="fa fa-check"></span>
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    @include('admin.partials.errors')
                    <button type="submit" class="btn btn-block btn-primary mt-lg">Login</button>
                </form>

            </div>
        </div>
        <!-- END panel-->
        <div class="p-lg text-center">
            <span>&copy;</span>
            <span>2015</span>
            <span>-</span>
            <span>Course you can. All rights reserved.</span>
        </div>
    </div>
@stop

{{-- script --}}
@section('script')
<!-- PARSLEY-->
    <script src="{{asset('admin/vendor/parsleyjs/dist/parsley.min.js')}}"></script>
@stop