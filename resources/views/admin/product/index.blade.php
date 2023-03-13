<x-app-layout>
    <h1>Products</h1>

    <a href="{{ route('product.create') }}" class="btn btn-primary btn-sm">Add New</a>

    <table class="table my-4">
        <tr class="bg-light">
            <th class="border border-1">SN</th>
            <th class="border border-1">Image</th>
            <th class="border border-1 w-50">Product</th>
            <th class="border border-1">Regular Price</th>
            <th class="border border-1">Sale Price</th>
            <th class="border border-1">Category</th>
            <th class="border border-1">Action</th>

        </tr>

        @foreach ($products as $item)
            <tr>
                <td class="border border-1">{{ $item->id }}</td>
                <td class="border border-1">
                    <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">
                        <img src="{{ asset($item->image) }}" width="60" alt="">
                    </a>
                    <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered ">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $item->name }}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset($item->image) }}" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                            </div>
                        </div>
                </td>
                <td class="border border-1">{{ $item->name }}</td>
                <td class="border border-1">{{ $item->regular_price }}</td>
                <td class="border border-1">{{ $item->sale_price }}</td>
                <td class="border border-1">{{ $item->category->name }}</td>
                <td class="border border-1">
                    <a href="{{ route('product.edit',$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                </td>
            </tr>
        @endforeach


    </table>
</x-app-layout>
