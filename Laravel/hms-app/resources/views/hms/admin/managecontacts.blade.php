
@extends('hms.admin.layout')
@section('title-name')
::Manage All Contacts Data
@endsection 
@section('content')
<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
<h1 class="mt-4">Manage contacts</h1>
<div class="card mb-4">
<div class="card-header">
<i class="fas fa-table me-1"></i>
Manage All Conmtacts Data
</div>
<div class="card-body">
<table id="datatablesSimple">
<thead>
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Subjects</th>
<th>Messages</th>
<th>Action</th>
</tr>
</thead>
<tfoot>
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Subjects</th>
<th>Messages</th>
<th>Action</th>
</tr>
</tfoot>
<tbody>
@foreach($data as $row)    
<tr>
<td>{{$row->name}}</td>
<td>{{$row->email}}</td>
<td>{{$row->phone}}</td>
<td>{{$row->subject}}</td>
<td>{{$row->message}}</td>
<td><a href="" class="btn btn-danger text-white"><span>Delete</span></td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</main>


@endsection