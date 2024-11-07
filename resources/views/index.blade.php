@extends('layout')
@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Quản lý sinh viên</h2>
        <a href="{{route('sinhvien.create') }}" class="btn btn-primary">Thêm mới</a>
    </div>
    
    @if (Session::has('thongbao'))
        <div class="alert alert-success">
            {{ Session::get('thongbao') }}
        </div>
        
    @endif
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>STT</th>
                <th>Mã sinh viên</th>
                <th>Họ tên</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <!-- Rows of student data will go here -->

            @foreach ($sinhvien as $sv)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $sv->MaSV }}</td>
                <td>{{ $sv->HoTen }}</td>
                <td>{{ $sv->NgaySinh }}</td>
                <td>{{ $sv->GioiTinh }}</td>
                <td>{{ $sv->Sdt }}</td>
                <td>{{ $sv->DiaChi }}</td>
                <td>
                    <a href="{{ route('sinhvien.show', $sv->id) }}" class="btn btn-success">Xem</a>
                    <form action="{{ route('sinhvien.destroy',$sv->id) }}" method="POST">
                        <a href="{{ route('sinhvien.edit',$sv->id )}}" class="btn btn-info">Sửa</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>

                </td>
            </tr>
            @endforeach
         
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>
@endsection