@extends ('template.master')

@section('title')
<h1>Manajemen kelas</h1>
@endsection

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kamu kelas apa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/kelas" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNIS">Nama Kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" id="InputNIS" placeholder="Masukan Kelas Kamu">
                  </div>

                <div class="form-group">
                    <label for="InputNama">jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="InputNama" placeholder="Jurusan Kamu">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection