@extends('admin.layout.master')

{{-- title --}}
@section('title')Articles - Course You Can CMS @stop

{{-- style --}}
@section('style')
<!-- DATATABLES-->
<link rel="stylesheet" href="{{asset('admin/vendor/datatables-colvis/css/dataTables.colVis.css')}}">
<link rel="stylesheet" href="{{asset('admin/vendor/datatable-bootstrap/css/dataTables.bootstrap.css')}}">
@stop

{{-- container --}}
@section('container')
<section>
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">Articles</div>
        <!-- Zero Configuration-->
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive b0">
                    <table id="datatable1" class="table table-striped table-hover">
                        
                        <a href="{!! URL::to('admin/articles/all') !!}" class="mb-sm btn @if ($status == 'all') btn-primary @else btn-default @endif">All(1)</a> &nbsp;
                        <a href="{!! URL::to('admin/articles/publish') !!}" class="mb-sm btn @if ($status == 'publish') btn-primary @else btn-default @endif">Publish(1)</a> &nbsp;
                        <a href="{!! URL::to('admin/articles/trash') !!}" class="mb-sm btn @if ($status == 'trash') btn-primary @else btn-default @endif">Trash(1)</a>

                        <a class="btn btn-labeled btn-success pull-right" href="{!! URL::to('admin/article-new') !!}">
                           <span class="btn-label"><i class="fa fa-plus"></i> </span>Add New
                        </a>
                        <hr>
                        <thead>
                            <tr>
                                <th class="wd-md">Title</th>
                                <th>Author</th>
                                <th>Categories</th>
                                <th>Tags</th>
                                <th>Updated Date</th>
                                <th width="320">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="">AngularJS</a>
                                </td>
                                <td>
                                    <span>Keith Gutierrez</span>
                                </td>
                                <td>
                                    <span class="mr">HTML5</span>
                                    <span>JAVASCRIPT</span>
                                </td>
                                <td>
                                    <span class="mr-sm label label-primary">angularjs</span>
                                    <span class="mr-sm label label-primary">mvc</span>
                                </td>
                                <td>10/05/2015</td>
                                <td>
                                    <button type="button" class="btn btn-labeled btn-success btn-sm">
                                       <span class="btn-label"><i class="icon-pencil"></i> </span>Edit
                                    </button> &nbsp;
                                    <button type="button" class="btn btn-labeled btn-info btn-sm">
                                       <span class="btn-label"><i class="fa fa-link"></i> </span>View
                                    </button> &nbsp;
                                    <button type="button" class="btn btn-labeled btn-danger btn-sm">
                                       <span class="btn-label"><i class="fa fa-trash-o"></i> </span>Move to Trash
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

{{-- script --}}
@section('script')
<!-- DATATABLES-->
<script src="{{asset('admin/vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/vendor/datatables-colvis/js/dataTables.colVis.js')}}"></script>
<script src="{{asset('admin/vendor/datatable-bootstrap/js/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('admin/vendor/datatable-bootstrap/js/dataTables.bootstrapPagination.js')}}"></script>
<script src="{{asset('admin/js/demo/demo-datatable.js')}}"></script>
@stop