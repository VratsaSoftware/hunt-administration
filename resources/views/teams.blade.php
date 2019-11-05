@extends('layouts.admin')
@section('content')
<table id="teams" border="1" class="table table-striped">
    <tr>
        <th>Team Name</th>
        <th>Team Leader</th>
        <th>Team Members</th>
        <th>Date Registered</th>
    </tr>
</table>
@endsection
@section('js')
<script defer src="js/teams.js"></script>
@endsection


            