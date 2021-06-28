@extends('admin.layouts.layout')
@section('title', 'Thêm người dùng')
@section('content')

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Thêm sản phẩm</h3>
                        </div>
                    </div>
                    <form method="POST" action="{{route('admin.products.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="col-xl-12 form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="img">Select image:</label>
                                        <input type="file" id="img" name="image" >
                                    </div>
                                    <div class="col-md-6">
                                        <label>Description</label>
                                        <input type="text" name="description" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Price</label>
                                        <input type="text" name="price" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Status</label>
                                        <input type="text" name="status" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary ml-4">Submit</button>
                            <button type="button" class="btn btn-secondary ml-2 cancel">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function () {

        $('.cancel').click(function () {
            const url = route('admin.users.index');
            window.location.href = url;
        })

    });

</script>
@endsection
