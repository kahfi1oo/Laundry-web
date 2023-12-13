@extends('admin.mainadmin')

@section('mainadmin')
    
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Data User</h5>
<div class="row justify-content">
    <div class="col-md-5">
      <div class="form-signin">
        @foreach ($user as $u)
            
      <form action="/akunuser/update" method="post">
        @csrf
            <input type="hidden" name="id" value="{{ $u->id }}">
          <div class="row m-1">
            <div class="d-flex align-items-center col-md-3">
                Nama
            </div>
            <div class="d-flex align-items-center col-sm-1">
                :
            </div>
            <div class="col">
              <input type="text" class="form-control @error('nama') 
              is-invalid @enderror" id="nama" name="nama" placeholder="Nama" value="{{ $u->nama }}" required>
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
                is-invalid @enderror" id="alamat" name="alamat" placeholder="Alamat" value="{{ $u->alamat }}" required>
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
                <input type="tel" class="form-control @error('notelp') 
                is-invalid @enderror" id="no_hp" name="no_hp" placeholder="No Telepon" value="{{ $u->no_hp }}" required> 
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
                is-invalid @enderror" id="username" name="username" placeholder="Username" value="{{ $u->username }}" required>
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
                is-invalid @enderror" id="password" name="password" placeholder="*****" disabled="true">
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
          </div>
          <button class="btn btn-danger mt-4" type="submit"><a href="/akunuser" style="color:white">Batal</a></button>
          <button class="btn btn-primary mt-4" type="submit">Simpan</button>
          <button class="btn btn-secondary mt-4"><a href="/akunuser/resetpw/{{ $u->id }}" style="color: white">Reset Password</a></button>
      </form>
      @endforeach

    </div>
    </div>
  </div>

</div>
</div>
@endsection