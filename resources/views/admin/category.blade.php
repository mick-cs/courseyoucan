@extends('admin.layout.master')

{{-- title --}}
@section('title')Category - Course You Can CMS @stop

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
        <div class="content-heading">Category</div>
        <!-- Zero Configuration-->
        <div class="row">
            <!-- Article Content-->
            <div class="col-lg-5">
                <div class="panel panel-default">
                    <div class="panel-heading">
                            @if ($op === 'edit')
                                Edit Category
                            @elseif ($op === 'show')
                                View Category
                            @else
                                Add New Category
                            @endif
                    </div>
                    <div class="panel-body">
                        <form role="form" class="mb-lg" data-parsley-validate="" novalidate="" method="post">
                            <div class="form-group">
                                <label>Name</label>
                                <input name="name" type="text" class="form-control" value="{{ $category['name'] }}">
                                <span class="help-block m-b-none">The name is how it appears on your site.</span>
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input name="slug" type="text" class="form-control" value="{{ $category['slug'] }}">
                                <span class="help-block m-b-none">The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</span>
                            </div>
                            <div class="form-group">
                                <label>Parent</label>
                                <select name="pid" class="form-control m-b">
                                    <option value="-1">None</option>
                                    @foreach ($categories as $item)
                                    <option value="{{ $item['id'] }}"
                                    @if ($item['id'] === $category['pid'])
                                        selected="selected"
                                    @endif
                                    >
                                        {{ $item['name'] }}
                                    </option>
                                    @endforeach
                                </select>
                                <span class="help-block m-b-none">Categories, unlike tags, can have a hierarchy. You might have a Jazz category, and under that have children categories for Bebop and Big Band. Totally optional.</span>
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            @include('admin.partials.errors')

                            @if ($op === 'edit')
                                <input type="hidden" name="id" value="{{ $category['id'] }}">
                                <button type="submit" class="btn btn-success mb-lg" id="addNewCat">Save Category</button>
                            @elseif ($op === 'show')
                                <!-- view -->
                            @else
                                <button type="submit" class="btn btn-primary mb-lg" id="addNewCat">Add New Category</button>
                            @endif

                        </form>
                    </div>
                </div>
            </div>
            <!-- Article sidebar-->
            <div class="col-lg-7">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Category List
                        <a class="btn btn-labeled btn-xs btn-success pull-right" href="{!! URL::to('admin/category') !!}">
                           <span class="btn-label"><i class="fa fa-plus"></i> </span>Add New
                        </a>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive b0">
                            <table id="datatable1" class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="wd-md">Name</th>
                                        <th>Slug</th>
                                        <th>Count</th>
                                        <th width="340">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                        <td>
                                            <a href="">{{ $category['name'] }}</a>
                                        </td>
                                        <td>
                                            <span>{{ $category['slug'] }}</span>
                                        </td>
                                        <td>
                                            20
                                        </td>
                                        <td>

                                            <a href="/admin/category/{{ $category['id'] }}/edit" type="button" class="btn btn-labeled btn-success btn-sm">
                                               <span class="btn-label"><i class="icon-pencil"></i> </span>Edit
                                            </button> &nbsp;
                                            <a href="/admin/category/{{ $category['id'] }}/show" type="button" class="btn btn-labeled btn-info btn-sm">
                                               <span class="btn-label"><i class="fa fa-link"></i> </span>View
                                            </button> &nbsp;
                                            <a href="/admin/category/{{ $category['id'] }}/delete" onclick="if(confirm('确定删除?')==false)return false;" type="button" class="btn btn-labeled btn-danger btn-sm">
                                               <span class="btn-label"><i class="fa fa-trash-o"></i> </span>Delete
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

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
@stop