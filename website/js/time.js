// time.js
function getTime() {
    $.ajax({
        url: 'time.php',
        success: function(data) {
            $("#time").html(data);
        }
    });
    setTimeout(getTime, 1000); // you could choose not to continue on failure...
}
