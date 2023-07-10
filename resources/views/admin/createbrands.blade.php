@extends('admin.layouts.template')
@section('pagetitle', 'Create Brand')
@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Create Brand</h4>
        </div>

        <form action="{{ route('admin.storebrand') }}" method="post">
          @csrf
          <div class="card-body">

            <div class="form-group">
              <label for="brand_name">Enter Brand Name</label>
              <input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Apple">
            </div>
          </div>

          <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Create Brand" />
          </div>

        </form>
      </div>
    </div>
  </div>
@endsection
