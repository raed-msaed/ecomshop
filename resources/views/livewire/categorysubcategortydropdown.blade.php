<div>
  <div class="form-group">
    <label for="product_category_id">Select Product Category</label>
    <select wire:model="selectedCategory" id="product_category_id" name="product_category_id" class="form-control">
      <option selected>Select One...</option>
      @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="product_subcategory_id">Select Product Sub Category</label>
    <select class="form-control" id="product_subcategory_id" name="product_subcategory_id">
      <option selected>Select One...</option>
      @foreach ($subcategories as $subcategory)
        <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_name }}</option>
      @endforeach
      <option value="">Electronics</option>
    </select>
  </div>
</div>
