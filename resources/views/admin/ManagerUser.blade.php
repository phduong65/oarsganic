<x-layout-admin>
    <x-slot:title>
        Quản lý Người dùng
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
                <td>Name</td>
                <td>Email</td>
                <td>UserType</td>
                <td>Created_at</td>
                <td style="text-align: center;">Action</td>
            </thead>
            @foreach($users as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->userType}}</td>
                <td>{{$item->created_at}}</td>
                <td>
                    <form action="{{route('users.destroy',$item->id) }}" method="POST" onclick="return confirm('Are you sure you want to delete this item')">
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