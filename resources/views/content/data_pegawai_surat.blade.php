@extends('home')
@section('data_pegawai_no_surat')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">No Surat</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach($data_surat as $data)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $data->no_surat }}</td>
                    <td>{{ $data->tanggal }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection