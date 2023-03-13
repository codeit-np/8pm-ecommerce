<x-app-layout>
    <h1>Company</h1>
    <a href="{{ route('company.create') }}" class="btn btn-primary btn-sm">Add</a>
    <table class="table my-4">
        <tr class="bg-light">
            <th class="border border-1">SN</th>
            <th class="border border-1">Logo</th>
            <th class="border border-1">category</th>
            <th class="border border-1">Address</th>
            <th class="border border-1">Phone</th>
            <th class="border border-1">Email</th>
            <th class="border border-1">Action</th>
        </tr>

       @if (!empty($category))
       <tr class="bg-white">
        <td class="border border-1" style="color: black">1</td>
        <td><img src="{{ asset($category->logo) }}" width="40" alt=""></td>
        <td class="border border-1" style="color: black">{{ $category->name }}</td>
        <td class="border border-1" style="color: black">{{ $category->address }}</td>
        <td class="border border-1" style="color: black">{{ $category->phone }}</td>
        <td class="border border-1" style="color: black">{{ $category->email }}</td>
        <td class="border border-1" style="color: black">
           <form action="{{ route('category.destroy',$category->id) }}" method="post">
            @csrf
            @method('delete')
            <a href="{{ route('category.edit',$category->id) }}" class="btn btn-primary btn-sm">Edit</a>
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
           </form>
        </td>
    </tr>
       @endif
    </table>
</x-app-layout>
