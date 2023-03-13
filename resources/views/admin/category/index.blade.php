<x-app-layout>
    <h1>Categories</h1>

    <a href="{{ route('category.create') }}" class="btn btn-primary btn-sm">Add New</a>

    <table class="table my-4">
        <tr class="bg-light">
            <th class="border border-1">SN</th>
            <th class="border border-1">Image</th>
            <th class="border border-1 w-75">Category</th>
            <th class="border border-1">Slug</th>
            <th class="border border-1">Action</th>
        </tr>

        @foreach ($categories as $item)
            <tr>
                <td class="border border-1">{{ $item->id }}</td>
                <td class="border border-1">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">
                        <img src="{{ asset($item->image ?? 'img/noimage.jpeg') }}" class="rounded" width="40" alt="">
                    </a>

                    <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              ...
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </td>
                <td class="border border-1">{{ $item->name }}</td>
                <td class="border border-1">{{ $item->slug }}</td>
                <td class="border border-1">
                    <a href="{{ route('category.edit',$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                </td>
            </tr>
        @endforeach


    </table>
</x-app-layout>
