@extends('layouts.admin')
@section('content')
    <h1 id="game_name"></h1>
    <div class="chapters-action">
        <button id="add_chapter">Add chapter</button>
    </div>
    <div id="game_chapters">
    </div>
    <form action="#" method="POST" id="chapter_popup">
        <input type="text" name="chapter_title" placeholder="Chapter Title" required>
        <input type="text" name="chapter_description" placeholder="Chapter Description" required>
        <select name="chapter_type">
            <option value="default">Choose chapter type</otpion>
            <option value="password">Password</option>
            <option value="stages">Stages</option>
        </select>
        <fieldset>
            <input type="text" name="password_question" placeholder="Question">
            <input type="text" name="password_answer" placeholder="Answer">
            <input type="text" name="password_image_url" placeholder="Image url">
            <input type="text" name="password_location" placeholder="Location"> 
        </fieldset>
    </form>
@endsection
@section('js')
    <script defer src="js/chapters.js"></script>
@endsection