@extends('layouts.admin')
@section('content')
<table id="users" border="1">
    <tr>
        <th>Username</th>
        <th>Age</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
</table>
@endsection
@section('js')
<script defer src="js/users.js"></script>
@endsection