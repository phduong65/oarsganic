<x-layout-admin>
    <x-slot:title>Create</x-slot:title>
    <div class="container" style="padding: 60px 100px;">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name" class="form-label">Tên sản phẩm:</label>
            <input type="text" name="name" id="name" class="form-control" />
            <br />
            <label for="description" class="form-label">Mô Tả:</label>
            <input type="text" name="description" id="description" class="form-control" />
            <br />
            <label for="price" class="form-label">Giá sản phẩm:</label>
            <input type="number" name="price" id="price" class="form-control" />
            <br />
            <label for="photo" class="form-label">Hình ảnh</label>
            <input type="file" name="photo" id="photo" class="form-control" />
            <br />
            <label for="status" class="form-label">Mô Tả:</label>
            <input type="text" name="status" id="status" class="form-control" />
            <br />
            <label for="quality" class="form-label">Số Lượng</label>
            <input type="number" name="quality" min="1" id="quality" class="form-control" />
            <br />
            <div class="categories" style="display: flex;justify-content: start;flex-direction: row; gap:20px;">
                @foreach ($categories as $category)
                <label class="form-check-label">
                    <input type="checkbox" name="categories[]" class="form-check-input" value="{{$category->id}}"> {{$category->name}}
                </label>
                @endforeach
            </div>
            <div class="button-add py-2">                
                <button type="submit" class="btn btn-primary">Thêm sản
                    phẩm</button>
            </div>
        </form>
    </div>
</x-layout-admin>