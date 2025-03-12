import Echo from "laravel-echo";

import Pusher from "pusher-js";
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: "pusher",
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: true,
});

/**
 * 
window.Echo.channel('chat').listen('SendMessage', (e) => {
    console.log(e);
    document.getElementById('messages').innerHTML += `<p>${e.message}</p>`
});
 */
var userId = document.querySelector('meta[name="user_id"]').getAttribute('content');
window.Echo.private("chat" + userId).listen("SendMessage", (e) => {
    console.log(e);
    document.getElementById("messages").innerHTML += `<p>${e.message}</p>`;
});

// presence channel
window.Echo.join('online')
    .here((users) => {
        console.log("Users in channel:", users);
    })
    .joining((user) => {
        console.log("User joined:", user);
    })
    .leaving((user) => {
        console.log("User left:", user);
    })
    .error((error) => {
        console.error("Echo error:", error);
    });