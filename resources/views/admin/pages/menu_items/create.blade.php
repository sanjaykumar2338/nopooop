@extends('admin.layout.main')

@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Create Menu Item ({{ $menu->name }})</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('menus.index') }}">Menus</a></li>
          <li class="breadcrumb-item"><a href="{{ route('menu.items.index', $menu->id) }}">Items</a></li>
          <li class="breadcrumb-item active">Create</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      @if ($errors->any())
        <div class="alert alert-danger w-100">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <div class="col-md-12">
        <form method="POST" action="{{ route('menu.items.store', $menu->id) }}">
          @csrf

          <div class="mb-3 mt-3">
            <label for="label">Label:</label>
            <input type="text" class="form-control" id="label" name="label" placeholder="Display text for the menu item" required>
          </div>

          <div class="mb-3 mt-3">
            <label for="type">Link Type:</label>
            <select name="type" id="type" class="form-control" required onchange="toggleTypeFields()">
              <option value="">Select Type</option>
              <option value="page">Page</option>
              <option value="custom">Custom Link</option>
            </select>
          </div>

          <div class="mb-3 mt-3" id="page-field" style="display: none;">
            <label for="page_id">Select Page:</label>
            <select name="page_id" class="form-control">
              <option value="">-- Select Page --</option>
              @foreach ($pages as $page)
                <option value="{{ $page->id }}">{{ $page->title }}</option>
              @endforeach
            </select>
          </div>

          <div class="mb-3 mt-3" id="url-field" style="display: none;">
            <label for="url">Custom URL:</label>
            <input type="url" name="url" class="form-control" placeholder="https://example.com">
          </div>

          <button type="submit" class="btn btn-primary">Add Menu Item</button>
        </form>
      </div>
    </div>
  </div>
</section>

<script>
  function toggleTypeFields() {
    const type = document.getElementById('type').value;
    document.getElementById('page-field').style.display = type === 'page' ? 'block' : 'none';
    document.getElementById('url-field').style.display = type === 'custom' ? 'block' : 'none';
  }
</script>

@endsection
