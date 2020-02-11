(function(){
    var doc = document,
        gameTitle = doc.getElementById('game_name'),
        gameChapters = doc.getElementById('game_chapters'),
        chapterPopUp = doc.getElementById('chapter_popup'),
        chapterBtn = doc.getElementById('add_chapter');

    var gameKey = location.hash.slice(1);

    var gameRef = ref.child('games/' + gameKey);

    gameRef.on('value', snap => {
        var gameData = snap.val();

        gameTitle.textContent = gameData.name;

        if(gameData.chapters == undefined){
            var msg = doc.createElement('p');

            msg.textContent = 'There are no game chapters created.';

            gameChapters.appendChild(msg);
        }
    });

    chapterBtn.addEventListener('click', openChapterForm);

    function openChapterForm(e){

    };
})();