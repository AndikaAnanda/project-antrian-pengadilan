/**
 * Handle realtime event
 */
function handlePusherLogic(data) {
    console.log(data);
}

Pusher.logToConsole = true;
var pusher = new Pusher("38b82fc40272e7396e5a", {
    cluster: "ap1",
});

var channel = pusher.subscribe("call-channel");
channel.bind("call-updated", function (data) {
    handlePusherLogic(data);
});
