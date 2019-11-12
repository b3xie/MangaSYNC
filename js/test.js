document.addEventListener('DOMContentLoaded', function () {   
    var x = "Friend Request sent"
    var button = document.getElementById('add-friend');
    button.onclick = function () {
        document.getElementById('friend-text').innerHTML = x;
    };
}, false);