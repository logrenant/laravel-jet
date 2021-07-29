<form action="{{$action}}" method="post" role="form">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Parent</label>
            <select class="form-control select2" name="parent_id" style="width: 100%;">
                <option value="">Main Category</option>
                @foreach($datalist as $rs)
                    <option value="{{ $rs->id }}"   @if($rs->id == ($rs->parent_id ?? null))
                    selected="selected"
                        @endif>
                        {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title ?? null)}}>
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
            <input type="text" name="description" value="{{$data->description ?? null}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" value="{{$data->slug ?? null}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Status</label>
            <select class="form-control select2" name="status" style="width: 100%;">
                <option selected="selected" >{{$data->status ?? null}}</option>
                <option>True</option>
                <option>False</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Edit Card</button>
    </div>
</form>

