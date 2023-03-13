<x-app-layout>
    <h1>Create Category</h1>
    <a href="{{ route('category.index') }}" class="btn btn-primary btn-sm">Go Back</a>

    <form action="{{ route('category.store') }}" method="post" class="my-4" enctype="multipart/form-data">
        @csrf
       <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name">Company<span class="text-danger">*</span></label>
                <input id="name" class="form-control" type="text" name="name" placeholder="Company Name" required>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="address">Address<span class="text-danger">*</span></label>
                <input id="address" class="form-control" type="text" name="address" placeholder="Company Name" required>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="phone">Phone<span class="text-danger">*</span></label>
                <input id="phone" class="form-control" type="text" name="phone" placeholder="Company Name" required>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="email">Email<span class="text-danger">*</span></label>
                <input id="email" class="form-control" type="text" name="email" placeholder="Company Name" required>
            </div>
        </div>

       <div class="col-md-12">
        <div class="form-group">
            <label for="map">MAP</label>
            <textarea id="map" class="form-control" name="map" rows="3"></textarea>
        </div>
       </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="logo">Upload Image (Optional) <span class="text-danger">*</span></label>
                <input id="logo" class="form-control-file" type="file" name="logo">
            </div>
        </div>





        <button type="submit" class="btn btn-success">Save Record</button>
       </div>
    </form>
</x-app-layout>
