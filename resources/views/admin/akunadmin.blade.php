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
            <th scope="col">Username</th>
            <th scope="col">Password</th>
          </tr>
        </thead>
        
        <tbody>
          @foreach ($admin as $a)
          <tr>
            <th scope="row">{{ $a->id }}</th>
            <td>{{ $a->nama_admin }}</td>
            <td>{{ $a->username_admin }}</td>
            <td>*****</td>
            <td>
              <a href="/akunadmin/edit/{{ $a->id }}"><button type="button" class="btn btn-primary">Edit</button></a>
              <a href="/akunadmin/hapus/{{ $a->id }}"><button type="button" class="btn btn-danger">Hapus</button></a>
            </td>
          </tr>
          @endforeach
        </tbody>
        
      </table>
      
        <div>
            <a href="/tambahadmin"><button type="button" class="btn btn-success">Tambah</button></a>
        </div> 

    </div>
  </div>

@endsection