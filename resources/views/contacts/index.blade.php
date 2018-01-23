@extends('layout')
@section('content')
<div class="row">
  		<h1>{{ config('Contacts.title') }}</h1>
	<div class="col-sm-12">
 		<table id="contacts-table" class="table table-striped table-bordered table-responsive">
           <thead>
           <tr>
             <th>First Name</th>
             <th>Last Name</th>
             <th class="hidden-sm">Address</th>
             <th class="hidden-md">Phone</th>
             <th class="hidden-md">Mobile</th>
             <th class="hidden-md">address</th>
             <th data-sortable="false">Actions</th>
           </tr>
           </thead>
           <tbody>
           @foreach ($people as $person)
             <tr>
               <td>{{ $person->first_name }}</td>
               <td>{{ $person->last_name }}</td>
               <td class="hidden-sm">{{ $person->address }}</td>
               <td class="hidden-md">{{ $person->phone }}</td>
               <td class="hidden-md">{{ $person->mobile }}</td>
               <td class="hidden-md">{{ $person->address }}</td>
     
               <td>
                 <a href="/admin/tag/23/edit"
                    class="btn btn-xs btn-info">
                   <i class="fa fa-edit"></i> Edit
                 </a>
                  <a href="/admin/tag/23/edit"
                    class="btn btn-xs btn-info">
                   <i class="fa fa-edit"></i> Delete
                 </a>
               </td>
             </tr>
           @endforeach
           </tbody>
         </table>
	</div>
</div>
@stop

@section('scripts')
<script>
	$(document).ready(function()
	{
		$("#contacts-table").DataTable({});	
	});
</script>
@stop