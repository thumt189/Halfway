var app = angular.module('app', []);

app.filter("dateRangeFilter", function () {
    return function (items, from, to) {
        var df = parseDate(from);
        var dt = parseDate(to);
        var result = [];
        for (var i = 0; i < items.length; i++) {
            var date = items[i].dob;

            if (df <= date && date <= dt) {
                result.push(items[i]);
            }
        }
        return result;
    };
});

app.filter("filterToday", function () {
    return function (items, wantFilter) {
        if (wantFilter) {
            var today = new Date();
            var compareDate = today.getFullYear() + "-" + (today.getMonth()+1) + "-" + today.getDate();
            var result = [];
            for (var i = 0; i < items.length; i++) {
                var date = items[i].dob;
                if (compareDate == date) {
                    result.push(items[i]);
                }
            }
            return result;
        } else{
            return items;
        }
    };
});

app.filter("filterYesterday", function () {
    return function (items, wantFilter) {
        if (wantFilter) {
            var today = new Date();
            today.setDate(today.getDate() - 1);
            var compareDate = today.getFullYear() + "-" + (today.getMonth()+1) + "-" + today.getDate();
            var result = [];
            for (var i = 0; i < items.length; i++) {
                var date = items[i].dob;
                if (compareDate == date) {
                    result.push(items[i]);
                }
            }
            return result;
        } else{
            return items;
        }
    };
});

app.filter("filterTomorrow", function () {
    return function (items, wantFilter) {
        if (wantFilter) {
             var today = new Date();
            today.setDate(today.getDate() + 1);
            var compareDate = today.getFullYear() + "-" + (today.getMonth()+1) + "-" + (today.getDate());
            var result = [];
            for (var i = 0; i < items.length; i++) {
                var date = items[i].dob;
                if (compareDate == date) {
                    result.push(items[i]);
                }
            }
            return result;
        } else{
            return items;
        }
    };
});

app.filter("filterWeek", function () {
    return function (items, wantFilter) {
        if (wantFilter) {
             var today = new Date();
            today.setDate(today.getDate() + 1);
            var compareDate = today.getFullYear() + "-" + (today.getMonth()+1) + "-" + (today.getDate());
            var result = [];
            for (var i = 0; i < items.length; i++) {
                var date = items[i].dob;
                if (compareDate == date) {
                    result.push(items[i]);
                }
            }
            return result;
        } else{
            return items;
        }
    };
});

function getRequestObject(mode) {
    var object = {};
    object['mode'] = mode;
    return object;
}

function show_notify(title, text, type) {
    (new PNotify({
        title: title,
        text: text,
        type: type
    }));
}

