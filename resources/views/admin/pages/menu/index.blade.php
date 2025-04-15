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
        <h1>Menu List</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
          <li class="breadcrumb-item active">Menus</li>
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
            <h3 class="card-title"><a href="{{ route('menus.create') }}">Add New Menu</a></h3>
          </div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
            @endif

            @if (session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
            @endif

            <table id="sortable-menu" class="table table-hover">
              <thead>
                <tr>
                    <th class="col-sm-2 col-md-2">ID</th>
                    <th class="col-sm-2 col-md-2">Name</th>
                    <th class="col-sm-2 col-md-2">Slug</th>
                    <th class="col-sm-3 col-md-3" style="text-align: right;">Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse($menus as $key => $menu)
                  <tr data-id="{{ $menu->id }}">
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $menu->name }}</td>
                      <td>{{ $menu->slug }}</td>
                      <td style="text-align: right">
                          <a href="{{ route('menu.items.index', $menu->id) }}">Items</a> |
                          <a href="{{ route('menus.edit', $menu->id) }}">Edit</a> |
                          <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" style="display:inline;">
                              @csrf
                              @method('DELETE')
                              <button type="submit" onclick="return confirm('Are you sure?')" style="border:none; background:none; color:red;">Delete</button>
                          </form>
                      </td>
                  </tr>
                @empty
                  <tr>
                      <td colspan="4">No menus found.</td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<div class="pagination">
    @if ($menus->previousPageUrl())
        <a href="{{ $menus->previousPageUrl() }}"><< Previous</a>
    @endif

    @if ($menus->nextPageUrl())
        &nbsp;&nbsp;&nbsp;<a href="{{ $menus->nextPageUrl() }}">Next >></a>
    @endif
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script>
    $(document).ready(function() {
        $("#sortable-menu tbody").sortable({
            update: function(event, ui) {
                var newOrder = $(this).sortable('toArray', { attribute: 'data-id' });

                $.ajax({
                    url: '{{ route("menus.update_order") }}',
                    method: 'POST',
                    data: { order: newOrder, _token: '{{ csrf_token() }}' },
                    success: function(response) {
                        console.log('Menu order updated');
                    },
                    error: function(xhr) {
                        console.error('Update failed:', xhr.responseText);
                    }
                });
            }
        });
    });
</script>
@endsection
