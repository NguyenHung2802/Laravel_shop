@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
    <form action="/admin" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="menu">Tên danh mục</label>
                <input type="text" name="menu" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên danh mục">
            </div>

            <div class="form-group">
                <label>Danh mục</label>
                <select class="form-control" name="parent_id">
                    <option value="0">Danh mục cha</option>
                </select>
            </div>

            <div class="form-group">
                <label>Mô tả</label>
                <textarea class="form-control" name="description" ></textarea>
            </div>

            <div class="form-group">
                <label>Mô tả chi tiết</label>
                <textarea class="form-control" id="content" name="content" ></textarea>
            </div>

            <div class="form-group">
                <label>Kích hoạt</label>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="active" value="1" name="active">
                        <label for="active" class="custom-control-label">Có</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="no_active" checked="no_active">
                        <label for="no_active" class="custom-control-label">Không</label>
                    </div>

                </div>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Tạo danh mục</button>
        </div>
        @csrf
    </form>
@endsection

@section('footer')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
