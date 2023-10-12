<x-layout-admin>
    <x-slot:title>
        Quan ly san pham
    </x-slot:title>
    <div class="container">
        @if($success=Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{$success}}
        </div>
        @endif
        <a href="{{route('products.create')}}" class="btn btn-primary" style="margin: 20px 0 0;">Add Product</a>
        <table class="table">
            <thead>
                <td>ID</td>
                <td>Photo</td>
                <td>Name</td>
                <td>Description</td>
                <td>Price</td>
                <td>Quality</td>
                <td style="text-align: center;">Action</td>
            </thead>
            @foreach($products as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td><img src="{{URL::asset('img/img_product')}}/{{$item->photo}}" width="150px" height="150px"></td>
                <td><a href="{{ route('products.show',  $item->id) }}">{{$item->name}}</a></td>
                <td>{{$item->description}} </td>
                <td>{{$item->price}}</td>
                <td>{{$item->quality}}</td>
                <td style="display: flex; gap:10px;border-bottom:none;border-top:1px solid #dee2e6">
                    <a href="{{route('products.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('products.destroy', $item->id) }}" method="POST" onclick="return confirm('Are you sure you want to delete this item')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        
    </div>
</x-layout-admin>