@extends('layouts.sbadmin2')
@section('isinya')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Edit Data Administrasi
            </div>
            <div class="card-body">
            <form action="{{ url('administrasi/'.$administrasi->id, []) }}" method="POST">
                    @method('put')
                    @csrf
                    
                    <div class="form-group">
                        <label for="my-input">tanggal</label>
                        <input id="tgl" class="form-control" type="date" name="tanggal" 
                        value="{{ old('tanggal') }}">
                        <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Pasien</label>
                        <select id="my-select" class="form-control" name="pasien_id">
                            <option value="">Pilih Pasien</option>
                            @foreach ( $list_pasien as $id => $a )
                                <option value="{{ $id }}" @selected($id==$administrasi->pasien_id)>
                                    {{ $a }}
                                </option>
                            @endforeach
                        </select>
                        <span class="text-danger">{{ $errors->first('pasien_id') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="my-select">Dokter</label>
                        <select id="my-select" class="form-control" name="dokter_id">
                        <option value="">Pilih Dokter</option>
                            @foreach ( $list_dokter as $id => $a )
                                <option value="{{ $id }}" @selected($id==$administrasi->dokter_id)>{{ $a }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">{{ $errors->first('dokter_id') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Biaya</label>
                        <input id="my-input" class="form-control" type="text" name="biaya" 
                        value="{{ $administrasi->biaya ?? old('biaya') }}">
                        <span class="text-danger">{{ $errors->first('biaya') }}</span>
                    </div>
               <form>
            </div>
            <div class="card-footer">
                <button type="sumbit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
        
    </div>
</div>
@endsection