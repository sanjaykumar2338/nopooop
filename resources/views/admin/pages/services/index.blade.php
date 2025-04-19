@extends('admin.layout.main')

@section('content')
<style>
    .pagination {
        font-size: 21px;
        float: inline-end;
        padding-right: 18px;
    }

    .pagination ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .pagination ul li {
        display: inline;
        margin-right: 5px;
    }

    .pagination ul li a {
        text-decoration: none;
        padding: 5px 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .pagination ul li a.active {
        background-color: #007bff;
        color: white;
    }
</style>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Services List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Services</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <a href="{{ url('admin/services/add/new') }}">Add New Service</a>
                        </h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if(count($services) > 0)
                            @foreach($services as $service)
                                <div class="row">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th class="col-sm-2 col-md-2">Title</th>
                                                <th class="col-sm-3 col-md-3 text-end" style="text-align: right">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="col-sm-2 col-md-2">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h4 class="product-title">
                                                                <a href="#">{{ $service->title }}</a>
                                                            </h4>
                                                            <span>Created at: </span>
                                                            <span class="text-success"><strong>{{ $service->created_at }}</strong></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-sm-3 col-md-3 text-end" style="text-align: right">
                                                    <a href="/admin/services/remove/{{ $service->id }}" class="btn btn-danger">Remove</a>
                                                    <a href="/admin/services/edit/{{ $service->id }}" class="btn btn-primary">EDIT</a>
                                                    <a href="/admin/services/moderate/{{ $service->id }}" class="btn btn-primary" style="display:none">Moderate</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            @endforeach
                        @else
                            <h6 class="display-8">THERE'S NO SERVICE<br><a href="/admin/services/add/new">ADD Service</a></h6>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="pagination">
    @if ($services->previousPageUrl())
        <a href="{{ $services->previousPageUrl() }}"><< Previous</a>
    @endif
    
    @if ($services->nextPageUrl())
        &nbsp;&nbsp;&nbsp;<a href="{{ $services->nextPageUrl() }}">Next >></a>
    @endif
</div>
@endsection
