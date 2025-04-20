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
            <h1>Quote Requests</h1>
         </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
               <li class="breadcrumb-item active">Quotes</li>
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
               <div class="card-body">
                  @if (session('status'))
                     <div class="alert alert-success">
                        {{ session('status') }}
                     </div>
                  @endif

                  @if(count($quotes) > 0)
                     <div class="row">
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Name</th>
                                 <th>Email</th>
                                 <th>Phone</th>
                                 <th>Message</th>
                                 <th>Date</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($quotes as $index => $quote)
                                 <tr>
                                    <td>{{ $quotes->firstItem() + $index }}</td>
                                    <td>{{ $quote->name }}</td>
                                    <td>{{ $quote->email }}</td>
                                    <td>{{ $quote->phone }}</td>
                                    <td>{{ $quote->message }}</td>
                                    <td>{{ $quote->created_at->format('Y-m-d') }}</td>
                                 </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  @else
                     <h6 class="display-8">NO QUOTES FOUND</h6>
                  @endif
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<div class="pagination">
    @if ($quotes->previousPageUrl())
        << <a href="{{ $quotes->previousPageUrl() }}">Previous</a>
    @endif

    @if ($quotes->nextPageUrl())
        &nbsp;&nbsp;&nbsp;<a href="{{ $quotes->nextPageUrl() }}">Next >></a>
    @endif
</div>
@endsection
