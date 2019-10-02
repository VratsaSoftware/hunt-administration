 var firebaseConfig = {
    apiKey: "AIzaSyAdkyQLBBLhfQj8xQyc81lDTWQ2sexWJSY",
    authDomain: "treasurehunttest-21a49.firebaseapp.com",
    databaseURL: "https://treasurehunttest-21a49.firebaseio.com",
    projectId: "treasurehunttest-21a49",
    storageBucket: "",
    messagingSenderId: "158026706444",
    appId: "1:158026706444:web:0c5695020c9aecb2"
  };
  // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    
    var database = firebase.database();
    
    var ref = database.ref(), 
        usersRef = ref.child('users'),
        gamesRef = ref.child('games'),
        teamsRef = ref.child('teams'),
        progressesRef = ref.child('progress');

    var doc = document,
        usersTable = doc.getElementById('users'),
        teamShowcaseBox = doc.getElementById('team-showcase'),
        gamesTable = doc.getElementById('games'),
        teamsTable = doc.getElementById('teams'),
        nav = doc.getElementById('nav'),
        navBtns = doc.querySelectorAll('#nav button'),
        pages = doc.querySelectorAll('.page');

    usersRef.on('child_added', snap => {
        appendUser(snap.key, snap.val());
    });

    gamesRef.on('child_added', snap => {
        console.log('game added');
        appendGame(snap.key, snap.val());
    });

    gamesRef.on('child_changed', snap => {
        updateGame(snap.key, snap.val());
    });

    teamsRef.on('child_added', snap => {
        console.log('team added');
        appendTeam(snap.key, snap.val());
    });

    function appendTeam(key, team){
        var tr = doc.createElement('tr'),
            teamName = doc.createElement('td'),
            teamLeader = doc.createElement('td'),
            teamMembers = doc.createElement('td'),
            dateRegistered = doc.createElement('td');

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

        dateRegistered.textContent = (new Date(team.registeredTimestamp)).toString();

        tr.appendChild(teamName);
        tr.appendChild(teamLeader);
        tr.appendChild(teamMembers);
        tr.appendChild(dateRegistered);

        teamsTable.appendChild(tr);
    }
