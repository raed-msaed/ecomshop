@extends('admin.layouts.template')

@section('pagetitle', 'Edit Brand')

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Edit Brand</h4>
        </div>

        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form action="{{ route('admin.updatebrand') }}" method="post">
          @csrf
          <div class="card-body">
            <input type="hidden" class="form-control" name="brand_id" value="{{ $brand_info->id }}">
            <div class="form-group">
              <label for="brand_name">Enter Brand Name</label>
              <input type="text" class="form-control" id="brand_name" name="brand_name"
                value="{{ $brand_info->brand_name }}">
            </div>
          </div>

          <div class="card-footer">
            <button class="btn btn-primary">Update Brand</button>
          </div>

        </form>
      </div>
    </div>
  </div>
@endsection
