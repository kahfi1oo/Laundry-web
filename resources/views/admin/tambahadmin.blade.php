@extends('admin.mainadmin')

@section('mainadmin')
    
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Data Admin</h5>
<div class="row justify-content">
    <div class="col-md-5">
      <div class="form-signin">
            
      <form action="/registeradmin" method="post">
        @csrf
          <div class="row m-1">
            <div class="d-flex align-items-center col-md-3">
                Nama
            </div>
            <div class="d-flex align-items-center col-sm-1">
                :
            </div>
            <div class="col">
              <input type="text" class="form-control @error('nama') 
              is-invalid @enderror" id="nama_admin" name="nama_admin" placeholder="Nama" required>
              @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="row m-1">
            <div class="d-flex align-items-center col-md-3">
                Username
            </div>
            <div class="d-flex align-items-center col-sm-1">
                :
            </div>
            <div class="col">
                <input type="text" class="form-control @error('username_admin') 
                is-invalid @enderror" id="username_admin" name="username_admin" placeholder="Username" required>
                @error('username_admin')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
          </div>
  
          <div class="row m-1">
            <div class="d-flex align-items-center col-md-3">
                Password
            </div>
            <div class="d-flex align-items-center col-sm-1">
                :
            </div>
            <div class="col">
                <input type="password" class="form-control @error('password') 
                is-invalid @enderror" id="password_admin" name="password_admin" placeholder="Password" required>
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
          </div>
          <button class="btn btn-danger mt-4" type="submit"><a href="/akunadmin" style="color:white">Batal</a></button>
          <button class="btn btn-primary mt-4" type="submit">Simpan</button>
      </form>

    </div>
    </div>
  </div>

</div>
</div>
@endsection