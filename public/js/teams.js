(function(){
    var teamsRef = ref.child('teams');

    var doc = document,
        teamsTable = doc.getElementById('teams');

    teamsRef.on('child_added', snap => {
        appendTeam(snap.key, snap.val());
    });

    function appendTeam(key, team){
        var teamWrapper = doc.createElement('tr');

        teamWrapper.setAttribute('data-key', key);

        var teamName = doc.createElement('td'),
            teamLeader = doc.createElement('td'),
            teamMembers = doc.createElement('td'),
            teamRegistration = doc.createElement('td');

        teamName.textContent = team.name;

        database.ref('/users/' + team.leaderId).once('value').then( snap => {
            teamLeader.textContent = snap.val().name;
        });

        var teamMembersUl = doc.createElement('ul');

        team.members.forEach( member => {
            database.ref('/users/' + member).once('value').then( snap => {
                var memberLi = doc.createElement('li');

                memberLi.textContent = snap.val().name;

                teamMembersUl.appendChild(memberLi);
            });
        });

        teamMembers.appendChild(teamMembersUl);

        teamRegistration.textContent = (new Date(team.registeredTimestamp)).toString();

        teamWrapper.appendChild(teamName);
        teamWrapper.appendChild(teamLeader);
        teamWrapper.appendChild(teamMembers);
        teamWrapper.appendChild(teamRegistration);

        teamsTable.appendChild(teamWrapper);
    }
})();