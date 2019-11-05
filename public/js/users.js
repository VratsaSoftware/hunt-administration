(function(){
    var usersRef = ref.child('users');

    var doc = document,
        usersTable = doc.getElementById('users');

    usersRef.on('child_added', snap => {
        appendUser(snap.key, snap.val());
    });

    function appendUser(key, user){
        var userWrapper = doc.createElement('tr');

        userWrapper.setAttribute('data-key', key);

        var userName = doc.createElement('td'),
            userAge = doc.createElement('td'),
            userEmail = doc.createElement('td'),
            userPhone = doc.createElement('td');

        userName.textContent = user.name;
        userAge.textContent = user.age;
        userEmail.textContent = user.email;
        userPhone.textContent = user.phone;

        userWrapper.appendChild(userName);
        userWrapper.appendChild(userAge);
        userWrapper.appendChild(userEmail);
        userWrapper.appendChild(userPhone);

        usersTable.appendChild(userWrapper);
    }
})()