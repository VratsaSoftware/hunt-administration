@extends('layouts.admin')
@section('content')
<div data-page="teams" class="page">
                <table id="teams" border="3" class="table table-striped">
                    <tr>
                        <th>Team Name</th>
                        <th>Team Leader</th>
                        <th>Team Members</th>
                        <th>Date Registered</th>
                    </tr>
                </table>
            </div>
        </main>
        @endsection
    <script defer src="https://www.gstatic.com/firebasejs/6.3.5/firebase-app.js"></script>
    <script defer src="https://www.gstatic.com/firebasejs/6.3.5/firebase-database.js"></script>
    <script defer src="js_my/main.js"></script>


            