@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <form action="{{ route('karyawan.update', $karyawan) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" placeholder="nama" name="nama" value="{{ $karyawan->nama }}" >
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" placeholder="email" name="email" value="{{ $karyawan->email }}">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="alamat" class="form-control" placeholder="alamat" name="alamat" value="{{ $karyawan->alamat }}">
                </div>
                <div class="form-group">
                  <label for="no_hp">No Hp</label>
                  <input type="text" class="form-control" placeholder="no hp" name="no_hp" value="{{ $karyawan->no_hp }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>

  @endsection