<form action="{{$action}}" method="post" role="form" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Parent</label>
            <select class="form-control select2" name="category_id" style="width: 100%;">
                <option value="0">Category</option>
                @foreach($datalist as $rs)
                    <option value="{{ $rs->id }}" @if($rs->id == ($data->category_id ?? null))
                    selected="selected" @endif>
                        {{$rs->title}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" value="{{$data->title ?? null}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Keywords</label>
            <input type="text" name="keywords" value="{{$data->keywords ?? null}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" value="{{$data->description ?? null}}"
                   class="form-control">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" value="{{$data->price ?? null}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Quantity</label>
            <input type="number" name="quantity" value="{{$data->quantity ?? null}}" class="form-control">
        </div>
        <div class="form-group">
            <label>MinQuantity</label>
            <input type="number" value="{{$data->minquantity ?? null}}" name="minquantity"
                   class="form-control">
        </div>
        <div class="form-group">
            <label>Tax</label>
            <input type="number" value="{{$data->tax ?? null}}" name="tax" class="form-control">
        </div>
        <div class="form-group">
            <label>Detail</label>
            <div class="form-group">
                <label>Detail</label>
                <textarea id="detail" name="detail">{{$data->detail ?? null}}</textarea>
                <script>
                    $(document).ready(function () {
                        $('#detail').summernote();
                    });
                </script>
            </div>
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" value="{{$data->slug ?? null}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" value="{{$data->image ?? null}}" class="form-control">

            @if ($data->image ?? false)
                <img src="{{ Storage::url($data->image) }}" height="60"
                     alt="">
            @endif
        </div>
        <div class="form-group">
            <label>Status</label>
            <select class="form-control select2" name="status" style="width: 100%;">
                <option selected="selected">{{$data->status ?? null}}</option>
                <option>True</option>
                <option>False</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Edit Card</button>
    </div>
</form>

