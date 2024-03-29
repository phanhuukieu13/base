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
                            <h3 class="card-label">Sửa thông tin</h3>
                        </div>
                    </div>
                    <form method='post' action="{{ route('admin.users.update', ['id' => $user->id ]  ) }}">
                        @csrf
                        <div class="card-body">
                            <div class="col-xl-12 form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Họ tên:</label>
                                        <input type="text" name="name" value="{{$user->name}}" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Email:</label>
                                        <input type="text" name="email" value='{{$user->email}}' class="form-control">
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
        $(document).ready(function(){

            $('.cancel').click(function(){
                const url = route('admin.users.index');
                window.location.href = url;
            })

        });
    </script>
@endsection
