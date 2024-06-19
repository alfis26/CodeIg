@extends('template.backend.theme')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Id</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">Time Insert</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($daftar_user as $urut => $user)
            <tr>
              <td>{{$urut+1}}</td>
              <td>{{$user->id}}</td>
              <td>{{$user->username}}</td>
              <td>{{$user->password}}</td>
              <td>{{$user->created_at}}</td>
              <td><a href ='{{site_url("backend/Dashboard/hapus/". $user->id )}}'>Hapus</a> | 
              <a href ='{{site_url("backend/User/profile/" . $user->id )}}'>Edit</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      @endsection