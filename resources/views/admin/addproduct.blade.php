@extends('admin.layouts.template')

@section('pagetitle', 'Add Product')

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Add Product</h4>
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

        <form action="" method="post">
          @csrf
          <div class="card-body">

            <div class="form-group">
              <label for="product_name">Enter Product Name</label>
              <input type="text" class="form-control" id="product_name" name="product_name"
                placeholder="iPhone 13 Pro Max" />
            </div>

            <div class="form-group">
              <label for="product_price">Enter Product Price</label>
              <input type="text" class="form-control" id="product_price" name="product_price" />
            </div>

            <div class="form-group">
              <label for="product_short_des">Enter Short Description</label>
              <textarea class="form-control" id="product_short_des" name="product_short_des" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
              <label for="product_long_des">Enter Long Description</label>
              <textarea class="form-control" id="product_long_des" name="product_long_des" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
              <label for="product_img">Select Product Image</label>
              <input type="file" class="form-control" id="product_img" name="product_img" />
            </div>

            <livewire:categorysubcategortydropdown />

            @php
              $brands = App\Models\Brand::get();
            @endphp

            <div class="form-group">
              <label for="product_brand_id">Select Product Brand</label>
              <select class="form-control" id="product_brand_id" name="product_brand_id">
                <option selected>Select One...</option>
                @foreach ($brands as $brand)
                  <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                @endforeach

              </select>
            </div>

            <div class="form-group">
              <label for="product_size">Enter Product Size</label>
              <input type="text" class="form-control" id="product_size" name="product_size" placeholder="Xl/36/None" />
            </div>

            <div class="form-group">
              <label for="product_color">Select Product Color</label>
              <input type="color" id="product_color" name="product_color" />
            </div>

            <div class="form-group">
              <label for="quantity">Enter Quantity</label>
              <input type="number" class="form-control" id="quantity" name="quantity" placeholder="500" />
            </div>

          </div>

          <div class="card-footer">
            <button class="btn btn-primary">Add Product</button>
          </div>

        </form>
      </div>
    </div>
  </div>
@endsection
