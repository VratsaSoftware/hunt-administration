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

var ref = database.ref();