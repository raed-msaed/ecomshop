@extends('admin.layouts.template')
@section('pagetitle', 'All Sub Category')
@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>All Sub Category</h4>
        </div>
        @if (session()->has('message'))
          <div class="alert alert-success">
            {{ session()->get('message') }}
          </div>
        @endif
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-md">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Created At</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($subcategories as $subcategory)
                  <tr>
                    <td>{{ $subcategory->id }}</td>
                    <td>{{ $subcategory->subcategory_name }}</td>
                    <td>{{ $subcategory->slug }}</td>
                    <td>
                      @if ($subcategory->status == 'active')
                        <div class="badge badge-success">Active</div>
                      @else
                        <div class="badge badge-danger">Not Active</div>
                      @endif
                    </td>
                    <td>
                      <a href="{{ route('admin.editsubcategory', $subcategory->id) }}" class="btn btn-primary">Edit</a>
                      <a href="{{ route('admin.deletesubcategory', $subcategory->id) }}" class="btn btn-danger">Delete</a>

                      @if ($subcategory->status == 'active')
                        <form action="{{ route('admin.deactivatesubcategory', $subcategory->id) }}" method="POST">
                          @csrf
                          <input type="hidden" value="{{ $subcategory->id }}" name="subcat_id" />
                          <input type="submit" value="Deactivate It" class="btn btn-danger mt-2" />
                        </form>
                        <!--Methode GET <a href="{{ route('admin.deactivatesubcategory', $subcategory->id) }}" class="btn btn-danger">Deactivate It</a> -->
                      @else
                        <form action="{{ route('admin.activatesubcategory') }}" method="POST">
                          @csrf
                          <input type="hidden" value="{{ $subcategory->id }}" name="subcat_id" />
                          <input type="submit" value="Activate It" class="btn btn-primary mt-2" />
                        </form>
                        <!--Methode GET <a href="{{ route('admin.activatesubcategory', $subcategory->id) }}" class="btn btn-primary">Activate It</a> -->
                      @endif

                    </td>
                  </tr>
                @endforeach
              </tbody>


            </table>
          </div>
        </div>
        <div class="card-footer text-right">
          <nav class="d-inline-block">
            <ul class="pagination mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1 <span
                    class="sr-only">(current)</span></a></li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
@endsection
