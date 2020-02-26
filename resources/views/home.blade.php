@extends('layouts.app')

@section('content')
<div class="page">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Main</div>

                <div class="card-body">
                    @if(Auth::user()->level == 'admin')
                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{ url('home/no_surat/create') }}" class="btn btn-primary">Create Nomor Surat</a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ url('home/no_surat') }}" class="btn btn-warning">Input Data Pegawai No Surat</a> 
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-success">Create Pegawai/Admin Accout</button> 
                        </div>
                    </div>
                    <div class="row">
                        @yield('create_no_surat')
                        @yield('data_pegawai_no_surat')
                    </div>
                    @else
                    <div class="pegawai">
                        <p>pegawai</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
