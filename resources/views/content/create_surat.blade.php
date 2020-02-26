@extends('home')
@section('create_no_surat')
    <div class="container">
        <form action="{{ url('home/no_surat') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">No Surat</label>
                <input type="text" class="form-control" name="no_surat" id="exampleInputEmail1" aria-describedby="emailHelp" required="required">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" id="exampleInputPassword1" required="required">
            </div>
            <button type="submit" class="btn btn-primary">Create Nomor Surat</button>
        </form>
    </div>
@endsection