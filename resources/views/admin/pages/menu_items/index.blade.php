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
        <h1>Menu Items - {{ $menu->name }}</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('menus.index') }}">Menus</a></li>
          <li class="breadcrumb-item active">Items</li>
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
              <a href="{{ route('menu.items.create', $menu->id) }}">Add New Menu Item</a>
            </h3>
          </div>

          <div class="card-body">
            @if (session('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table id="sortable-items" class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Label</th>
                  <th>Type</th>
                  <th>Page</th>
                  <th>URL</th>
                  <th style="text-align:right;">Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse($menuItems as $key => $item)
                  <tr data-id="{{ $item->id }}">
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->label }}</td>
                    <td>{{ ucfirst($item->type) }}</td>
                    <td>{{ optional($item->page)->title }}</td>
                    <td>{{ $item->url }}</td>
                    <td style="text-align:right;">
                      <a href="{{ route('menu.item.edit', [$menu->id, $item->id]) }}">Edit</a> |
                      <form action="{{ route('menu.items.destroy', [$menu->id, $item->id]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')" style="border:none; background:none; color:red;">Delete</button>
                      </form>
                    </td>
                  </tr>
                @empty
                  <tr><td colspan="6">No menu items found.</td></tr>
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
    @if ($menuItems->previousPageUrl())
        <a href="{{ $menuItems->previousPageUrl() }}"><< Previous</a>
    @endif

    @if ($menuItems->nextPageUrl())
        &nbsp;&nbsp;&nbsp;<a href="{{ $menuItems->nextPageUrl() }}">Next >></a>
    @endif
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script>
    $(document).ready(function() {
        $("#sortable-items tbody").sortable({
            update: function(event, ui) {
                var newOrder = $(this).sortable('toArray', { attribute: 'data-id' });

                $.ajax({
                    url: '{{ route("menu.items.update_order", $menu->id) }}',
                    method: 'POST',
                    data: { order: newOrder, _token: '{{ csrf_token() }}' },
                    success: function(response) {
                        console.log('Order updated');
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
