<x-app-layout>
    <h1>Create Product</h1>
    <a href="{{ route('product.index') }}" class="btn btn-primary btn-sm">Go Back</a>

    <form action="{{ route('product.store') }}" method="post" class="my-4" enctype="multipart/form-data">
        @csrf
       <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name">product Name <span class="text-danger">*</span></label>
                <input id="name" class="form-control" type="text" name="name" placeholder="Enter product name" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="regular_price">Regular Price<span class="text-danger">*</span></label>
                <input id="regular_price" class="form-control" type="text" name="regular_price" placeholder="Enter product name" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="sale_price">Sale Price</label>
                <input id="sale_price" class="form-control" type="text" name="sale_price" placeholder="Enter product name" required>
            </div>
        </div>

        <div class="form-group">
            <label for="description">Product Description (Optional)</label>
            <textarea id="description" class="form-control" name="description" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="category_id">Select Category</label>
            <select id="category_id" class="form-control" name="category_id">
                @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="image">Upload Image (Optional)</label>
                <input id="image" class="form-control-file" type="file" name="image">
            </div>
        </div>

        <button type="submit" class="btn btn-success">Save Record</button>
       </div>
    </form>
</x-app-layout>
