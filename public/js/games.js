(function(){
    var gamesRef = ref.child('games');

    var doc = document,
        gamesTable = doc.getElementById('games');

    gamesRef.on('child_added', snap => {
        appendGame(snap.key, snap.val());
    });

    function appendGame(key, game){
        var gameWrapper = doc.createElement('tr');

        gameWrapper.setAttribute('data-key', key);

        var gameProperties = doc.createElement('td');

        gameProperties.setAttribute('colspan', 11);

        gameProperties.textContent = JSON.stringify(game);

        gameWrapper.appendChild(gameProperties);

        gamesTable.appendChild(gameWrapper);
    }
})()