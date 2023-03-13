<x-app-layout>
    <h1>Edit Category</h1>
    <a href="{{ route('category.index') }}" class="btn btn-primary btn-sm">Go Back</a>

    <form action="{{ route('category.update',$category->id) }}" method="post" class="my-4" enctype="multipart/form-data">
        @csrf
        @method('put')
       <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name">category Name <span class="text-danger">*</span></label>
                <input id="name" class="form-control" type="text" name="name" placeholder="Enter category name" required value="{{ $category->name }}">
            </div>
        </div>

        <div class="col-md-6 d-flex">
            <div class="form-group">
                <label for="logo">Upload Logo <span class="text-danger">*</span></label>
                <input id="logo" class="form-control-file" type="file" name="logo">
            </div>

            <div>
                <img src="{{ asset($category->image) }}" width="120" class="rounded" alt="">
            </div>
        </div>


        <button type="submit" class="btn btn-success">Update Record</button>
       </div>
    </form>
</x-app-layout>
