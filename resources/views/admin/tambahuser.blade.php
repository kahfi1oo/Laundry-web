@extends('admin.mainadmin')

@section('mainadmin')
    
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Data Admin</h5>
<div class="row justify-content">
    <div class="col-md-5">
      <div class="form-signin">
            
      <form action="/tambahuser" method="post">
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
              is-invalid @enderror" id="nama" name="nama" placeholder="Nama" required>
              @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="row m-1">
            <div class="d-flex align-items-center col-md-3">
                Alamat
            </div>
            <div class="d-flex align-items-center col-sm-1">
                :
            </div>
            <div class="col">
              <input type="text" class="form-control @error('alamat') 
              is-invalid @enderror" id="alamat" name="alamat" placeholder="Alamat" required>
              @error('alamat')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="row m-1">
            <div class="d-flex align-items-center col-md-3">
                Nomor HP
            </div>
            <div class="d-flex align-items-center col-sm-1">
                :
            </div>
            <div class="col">
              <input type="text" class="form-control @error('no_hp') 
              is-invalid @enderror" id="no_hp" name="no_hp" placeholder="Nomor HP" required>
              @error('no_hp')
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
                <input type="text" class="form-control @error('username') 
                is-invalid @enderror" id="username" name="username" placeholder="Username" required>
                @error('username')
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
                is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
          </div>
          <button class="btn btn-danger mt-4" type="submit"><a href="/akunuser" style="color:white">Batal</a></button>
          <button class="btn btn-primary mt-4" type="submit">Simpan</button>
      </form>

    </div>
    </div>
  </div>

</div>
</div>
@endsection