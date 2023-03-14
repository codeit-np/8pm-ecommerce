<x-app-layout>
    <h1>Create category</h1>
    <a href="{{ route('category.index') }}" class="btn btn-primary btn-sm">Go Back</a>

    <form action="{{ route('category.store') }}" method="post" class="my-4" enctype="multipart/form-data">
        @csrf
       <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name">category Name <span class="text-danger">*</span></label>
                <input id="name" class="form-control" type="text" name="name" placeholder="Enter category name" required>
            </div>
        </div>




        <div class="col-md-12">
            <div class="form-group">
                <label for="logo">Upload Image (Optional)</label>
                <input id="logo" class="form-control-file" type="file" name="image">
            </div>
        </div>

        <button type="submit" class="btn btn-success">Save Record</button>
       </div>
    </form>
</x-app-layout>
