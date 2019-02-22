var data = [];

$(document).ready(function () {
    $.ajax({
        type: 'POST',
        url: "/?api=all",
        success: function(res) {
            for (let i=0; i<res.length; i++){
                data.push({
                    data_id: res[i].id,
                    title: res[i].name,
                    start: res[i].date_start,
                    end: res[i].date_end
                });
            }
            initCalendar();
        }
    });
});

function getDateNow() {

    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1;

    var yyyy = today.getFullYear();
    if (dd < 10) {
        dd = '0' + dd;
    }
    if (mm < 10) {
        mm = '0' + mm;
    }

    return yyyy + '-' + mm + '-' + dd;
}

function initCalendar() {
    $('#calendar').fullCalendar({
        schedulerLicenseKey: 'GPL-My-Project-Is-Open-Source',
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        defaultDate: getDateNow(),
        navLinks: true,
        editable: true,
        eventLimit: true,
        events: data,
        eventClick: function(calEvent, jsEvent, view) {
            if (confirm('Do you edit it?')) {
                window.location.href = '/?view=edit&id='+calEvent.data_id;
            }
        }
    });
}