jQuery(document).ready(function () {
    nextTurn();
});

// =====================================

function nextTurn() {
    var jsonResponse = $.get("/turn.php", function() {
        alert("OK")
    })
            .done(function () {
                var json = jsonResponse.responseText;
                alert(json)
                obj = JSON.parse(json);
                console.log(obj)
            })
            .fail(function () {
                alert("error");
            })
            .always(function () {
            });
}

// =====================================

function jsonToArray(json) {
//    return Object.keys(json).map(function(k) { return json[k] });
    return JSON.parse(json);
}