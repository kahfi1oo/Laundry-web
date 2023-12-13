@extends('admin.mainadmin')

@section('mainadmin')
    
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Data User</h5>

      <!-- Table with stripped rows -->
      
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">No HP</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
          </tr>
        </thead>
        
        <tbody>
          @foreach ($user as $u)
          <tr>
            <th scope="row">{{ $u->id }}</th>
            <td>{{ $u->nama }}</td>
            <td>{{ $u->alamat }}</td>
            <td>{{ $u->no_hp }}</td>
            <td>{{ $u->username }}</td>
            <td>*****</td>
            <td>
              <a href="/akunuser/edit/{{ $u->id }}"><button type="button" class="btn btn-primary">Edit</button></a>
              <a href="/akunuser/hapus/{{ $u->id }}"><button type="button" class="btn btn-danger">Hapus</button></a>
            </td>
          </tr>
          @endforeach
        </tbody>
        
      </table>
      
        <div>
          <a href="/tambahuser"><button type="button" class="btn btn-success">Tambah</button></a>
        </div> 

    </div>
  </div>

@endsection