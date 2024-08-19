@extends('layout.mainLayout')

@section('title', 'ClassRoom')

@section('content')
<h1>ini halaman kelas</h1>
<table class="table">
    <tr>
        <th>No</th>
        <th>Kelas</th>
    </tr>
    @foreach ($cllas as $kelas)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $kelas->name }}</td>
        </tr>
    @endforeach
</table>


@endsection
