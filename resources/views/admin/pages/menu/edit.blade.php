@extends('admin.layout.main')

@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Menu</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Menus</li>
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
        <form method="post" action="{{ route('menus.update', $menu->id) }}">
          @csrf
          @method('PUT')
          <div class="mb-3 mt-3">
            <label for="name">Menu Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $menu->name) }}" placeholder="e.g. Header, Footer">
          </div>

          <button type="submit" class="btn btn-primary">Update Menu</button>
        </form>
      </div>
    </div>
    <br>
  </div>
</section>

@endsection
