@extends('layouts.admin')
@section('content')

        <main>
            
            <div data-page="games" class="page">
                <button class="open" data-popupname="create-game">Create Game</button>
                <div class="game" style="display: none;">
                    <h1 class="game_name">Test</h1>
                    <img class="cover_image" alt="Cover image">
                    <p class="game_end"></p>
                    <p class="game_start"></p>
                    <p class="game_story"></p>
                    <a class="help_link">Help Link</a>
                    <p class="help_number"></p>
                    <a class="map_link">Map Link</a>
                    <p class="max_players"></p>
                    <p class="min_players"></p>
                    <a class="start_img_link">Start image link</a>
                    <p class="start_password"></p>
                    <div class="actions">
                    </div>
                </div>
                <form action="#" method="POST" class="popup-form create-game">
                    <div class="form">
                        <h1>Create Game</h1>
                        <button class="close" data-popupname="create-game">x</button>
                        <input type="text" name="game_name" placeholder="Game Name" required>
                        <input type="text" name="cover_img" placeholder="Cover Image" required>
                        <label for="game_end">Game End</label>
                        <input type="datetime-local" name="game_end" id="game_end" placeholder="Game End" required>
                        <label for="game_start">Game Start</label>
                        <input type="datetime-local" name="game_start" id="game_start" placeholder="Game Start" required>
                        <textarea name="game_story" placeholder="Game Story" required></textarea>
                        <input type="text" name="help_link" placeholder="Help Link" required>
                        <input type="text" name="map_link" placeholder="Map Link" required>
                        <input type="tel" name="help_number" placeholder="Help Number" required>
                        <input type="number" name="max_players" min="2" placeholder="Max Players" required>
                        <input type="number" name="min_players" min="1" placeholder="Min Players" required>
                        <input type="text" name="start_img_link" placeholder="Start image link" required>
                        <input type="password" name="start_pass" placeholder="Start Password" required>
                        <input type="submit" name="add_game" value="Add Game">
                    </div>
                </form>
                <form action="#" method="POST" class="popup-form edit-game">
                    <div class="form">
                        <h1>Edit Game</h1>
                        <button class="close" data-popupname="edit-game">x</button>
                        <input type="text" name="game_name" placeholder="Game Name" required>
                        <input type="text" name="cover_img" placeholder="Cover Image" required>
                        <label for="game_end_edit">Game End</label>
                        <input type="datetime-local" name="game_end" id="game_end_edit" placeholder="Game End" required>
                        <label for="game_start_edit">Game Start</label>
                        <input type="datetime-local" name="game_start" id="game_start_edit" placeholder="Game Start" required>
                        <textarea name="game_story" placeholder="Game Story" required></textarea>
                        <input type="text" name="help_link" placeholder="Help Link" required>
                        <input type="text" name="map_link" placeholder="Map Link" required>
                        <input type="tel" name="help_number" placeholder="Help Number" required>
                        <input type="number" name="max_players" min="2" placeholder="Max Players" required>
                        <input type="number" name="min_players" min="1" placeholder="Min Players" required>
                        <input type="text" name="start_img_link" placeholder="Start image link" required>
                        <input type="password" name="start_pass" placeholder="Start Password" required>
                        <input type="submit" name="add_game" value="Edit Game">
                    </div>
                </form>
            </div>
        </main>
@endsection
@section('js')
<script defer src="https://www.gstatic.com/firebasejs/6.3.5/firebase-app.js"></script>
    <script defer src="https://www.gstatic.com/firebasejs/6.3.5/firebase-database.js"></script>
    <script defer src="games.js/main.js"></script>
@endsection




            




    

    


            