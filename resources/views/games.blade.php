@extends('layouts.admin')
@section('content')
<table id="games" border="1" style="table-layout: fixed; width: 100%;">
    <tr>
        <th>Cover Image</th>
        <th>Game end</th>
        <th>Game start</th>
        <th>Game story</th>
        <th>Help link</th>
        <th>Help number</th>
        <th>Map link</th>
        <th>Max players</th>
        <th>Min players</th>
        <th>Start image link</th>
        <th>Start password</th>
    </tr>
</table>
@endsection
@section('js')
<script defer src="js/games.js"></script>
@endsection


            