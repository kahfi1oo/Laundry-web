@extends('main')

@section('navbar')

<div class="row justify-content-center">
  <div class="col-md-4">
    <div class="form-signin">
    <h1 class="h3 mb-4 fw-normal text-center">Register</h1>

    <form action="/register" method="post">
      @csrf
        <div class="p-2" style="">
            <input type="text" class="form-control @error('nama') 
            is-invalid @enderror" id="nama" name="nama" placeholder="Nama">
            @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>

        <div class="p-2" style="">
            <input type="text" class="form-control @error('alamat') 
            is-invalid @enderror" id="alamat" name="alamat" placeholder="Alamat">
            @error('alamat')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>

        <div class="p-2" style="">
            <input type="tel" class="form-control @error('notelp') 
            is-invalid @enderror" id="no_hp" name="no_hp" placeholder="No Telepon"> 
            @error('no_hp')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>

        <div class="p-2" style="">
            <input type="text" class="form-control @error('username') 
            is-invalid @enderror" id="username" name="username" placeholder="Username">
            @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>

        <div class="p-2">
            <input type="password" class="form-control @error('password') 
            is-invalid @enderror" id="password" name="password" placeholder="Password">
            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>

        <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
    </form>

    <hr>
  <div class="signin">
    <p>Sudah memiliki akun? <a href="/login">Login Sekarang</a></p>
  </div>
  
  </div>
  </div>
</div>


@endsection