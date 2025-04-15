@extends('admin.layout.main')

@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Menu Item</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('menus.index') }}">Menus</a></li>
          <li class="breadcrumb-item"><a href="{{ route('menu.items.index', $menu->id) }}">Menu Items</a></li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      <div class="col-md-12">
        <form method="post" action="{{ route('menu.items.update', [$menu->id, $menuItem->id]) }}">
          @csrf
          @method('PUT')

          <div class="mb-3 mt-3">
            <label for="label">Label:</label>
            <input type="text" class="form-control" id="label" name="label" value="{{ old('label', $menuItem->label) }}" required>
          </div>

          <div class="mb-3 mt-3">
            <label for="type">Type:</label>
            <select class="form-control" name="type" id="type" required>
              <option value="page" {{ old('type', $menuItem->type) == 'page' ? 'selected' : '' }}>Page</option>
              <option value="custom" {{ old('type', $menuItem->type) == 'custom' ? 'selected' : '' }}>Custom URL</option>
            </select>
          </div>

          <div class="mb-3 mt-3" id="page-select" style="{{ old('type', $menuItem->type) == 'page' ? '' : 'display:none;' }}">
            <label for="page_id">Select Page:</label>
            <select class="form-control" name="page_id" id="page_id">
              <option value="">-- Select Page --</option>
              @foreach ($pages as $page)
                <option value="{{ $page->id }}" {{ old('page_id', $menuItem->page_id) == $page->id ? 'selected' : '' }}>
                  {{ $page->title }}
                </option>
              @endforeach
            </select>
          </div>

          <div class="mb-3 mt-3" id="url-input" style="{{ old('type', $menuItem->type) == 'custom' ? '' : 'display:none;' }}">
            <label for="url">Custom URL:</label>
            <input type="text" class="form-control" id="url" name="url" value="{{ old('url', $menuItem->url) }}">
          </div>

          <div class="mb-3 mt-3">
            <label for="target">Open In:</label>
            <select class="form-control" name="target" id="target">
              <option value="_self" {{ old('target', $menuItem->target) == '_self' ? 'selected' : '' }}>Same Tab</option>
              <option value="_blank" {{ old('target', $menuItem->target) == '_blank' ? 'selected' : '' }}>New Tab</option>
            </select>
          </div>

          <button type="submit" class="btn btn-primary">Update Menu Item</button>
        </form>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const typeSelect = document.getElementById('type');
    const pageSelect = document.getElementById('page-select');
    const urlInput = document.getElementById('url-input');

    function toggleFields() {
      if (typeSelect.value === 'page') {
        pageSelect.style.display = 'block';
        urlInput.style.display = 'none';
      } else {
        pageSelect.style.display = 'none';
        urlInput.style.display = 'block';
      }
    }

    typeSelect.addEventListener('change', toggleFields);
    toggleFields();
  });
</script>

@endsection
