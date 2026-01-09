@extends('layouts.app')

@section('content')

<a href="{{ route('students.create') }}" class="btn btn-primary mb-3">
    thêm học sinh mới
</a>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Họ và tên</th>
            <th>Mã học sinh</th>
            <th>email</th>
            <th>số điện thoại</th>
            <th>tên trường học</th>
            <th width="180">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
        <tr>
            <td>{{ $student->full_name }}</td>
            <td>{{ $student->student_id }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone}}</td>
            <td>{{ $student->schools->schools_name }}</td>
            <td>
                <a href="{{ route('students.edit', $student) }}" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('students.destroy', $student) }}" method="POST"
                      style="display:inline-block"
                      onsubmit="return confirm('bạn có chắc chắn muốn xóa học sinh này?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $students->links('pagination::bootstrap-5') }}

@endsection
