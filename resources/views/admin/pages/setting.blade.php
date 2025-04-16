@extends('admin.layout.main')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Setting</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Setting</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
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
            <form method="post" enctype="multipart/form-data" action="{{ route('setting.store') }}">
                @csrf
                <div class="mb-3 mt-3">
                  <label for="product_name">Email:</label>
                  <input type="email" class="form-control" value="{{$rec?->email}}" id="email" placeholder="Enter Email" name="email">
                </div>

                <div class="mb-3 mt-3">
                  <label for="product_name">Phone:</label>
                 <input type="text" maxlength="13" class="form-control" value="{{$rec?->phone}}" name="phone">
                </div>

                <div class="mb-3 mt-3">
                    <label for="image">Logo:</label>
                    <input type="file" class="form-control" id="logo" name="logo">

                    @if (!empty($rec?->logo))
                        <div class="mt-2">
                            <a href="{{ asset($rec->logo) }}" target="_blank">View Existing Logo</a><br>
                            <img src="{{ asset($rec->logo) }}" alt="Current Logo" style="max-height: 60px; margin-top: 5px;">
                        </div>
                    @endif
                </div>

                <div class="mb-3 mt-3">
                  <label for="facebook">Facebook URL:</label>
                  <input type="url" class="form-control" id="facebook" name="facebook" placeholder="https://facebook.com/yourpage" value="{{ $rec?->facebook }}">
                </div>

                <div class="mb-3 mt-3">
                  <label for="twitter">Twitter URL:</label>
                  <input type="url" class="form-control" id="twitter" name="twitter" placeholder="https://twitter.com/yourprofile" value="{{ $rec?->twitter }}">
                </div>

                <div class="mb-3 mt-3">
                  <label for="instagram">Instagram URL:</label>
                  <input type="url" class="form-control" id="instagram" name="instagram" placeholder="https://instagram.com/yourhandle" value="{{ $rec?->instagram }}">
                </div>

                <div class="mb-3 mt-3">
                  <label for="linkedin">LinkedIn URL:</label>
                  <input type="url" class="form-control" id="linkedin" name="linkedin" placeholder="https://linkedin.com/company/yourcompany" value="{{ $rec?->linkedin }}">
                </div>

                <div class="mb-3 mt-3">
                  <label for="youtube">YouTube URL:</label>
                  <input type="url" class="form-control" id="youtube" name="youtube" placeholder="https://youtube.com/yourchannel" value="{{ $rec?->youtube }}">
                </div>

         
                <button type="submit" class="btn btn-primary">Update</button>
              </form>
          </div>
        </div>
        <br>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
  </section>
@endsection