$(document).ready(function () {
    var total_min = 12;
    var remaining_min = 0;
    var remaining_sec = 0;
    var is_running = false;

    var countdown = function () {
        if (!is_running) {
            remaining_min = total_min;
            is_running = true;
        }

        if (remaining_sec == 0 && remaining_min > 0) {
            remaining_min--;
            remaining_sec = 59;
        }

        if (remaining_sec > 0) {
            remaining_sec--;
        }

        if (remaining_min == 0 && remaining_sec == 0) {
            alert("Het gio");
            clearTimeout(timeoutHandle);
        }

        var display_min = "";
        var display_sec = "";

        display_min = (remaining_min > 9) ? remaining_min : ("0" + remaining_min);
        display_sec = (remaining_sec > 9) ? remaining_sec : ("0" + remaining_sec)

        $("#minutes").html(display_min);
        $("#seconds").html(display_sec);
    };

    var timeoutHandle = setInterval(countdown, 1000);
});