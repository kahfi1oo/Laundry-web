@extends('admin.mainadmin')

@section('mainadmin')
    
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Reset Password</h5>
<div class="row justify-content">
    <div class="col-md-5">
      <div class="form-signin">
        @foreach ($user as $u)
            
      <form action="/akunuser/updatepw" method="post">
        @csrf
            <input type="hidden" name="id" value="{{ $u->id }}">
          
          <div class="row m-1">
            <div class="d-flex align-items-center col-md-3">
                Password
            </div>
            <div class="d-flex align-items-center col-sm-1">
                :
            </div>
            <div class="col">
                <input type="password" class="form-control @error('password') 
                is-invalid @enderror" id="password" name="password" placeholder="Password Baru" required>
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
      @endforeach

    </div>
    </div>
  </div>

</div>
</div>
@endsection