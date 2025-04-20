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
            <h1>Newsletter Subscribers</h1>
         </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
               <li class="breadcrumb-item active">Subscribers</li>
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

                  @if(count($subscribers) > 0)
                     <div class="row">
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Email</th>
                                 <th>Subscribed On</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($subscribers as $index => $subscriber)
                                 <tr>
                                    <td>{{ $subscribers->firstItem() + $index }}</td>
                                    <td>{{ $subscriber->email }}</td>
                                    <td>{{ $subscriber->created_at->format('Y-m-d H:i') }}</td>
                                 </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  @else
                     <h6 class="display-8">NO SUBSCRIPTIONS FOUND</h6>
                  @endif
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<div class="pagination">
    @if ($subscribers->previousPageUrl())
        << <a href="{{ $subscribers->previousPageUrl() }}">Previous</a>
    @endif

    @if ($subscribers->nextPageUrl())
        &nbsp;&nbsp;&nbsp;<a href="{{ $subscribers->nextPageUrl() }}">Next >></a>
    @endif
</div>
@endsection
