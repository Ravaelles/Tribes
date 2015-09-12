
var backgroundPath = "/images/background/background1.png";

var currentTurn = 1;

// =====================================

jQuery(document).ready(function () {
    startGame();
});

// =====================================

function startGame() {
    var jsonResponse = $.get("/newGame.php", function () {
    })
            .done(function () {
                var json = jsonResponse.responseText;
                response = JSON.parse(json);

                paintBackground(backgroundPath);
                paintAllUnitTypes(response['mapUnitTypes']);
            })
            .fail(function () {
                alert("Error trying to");
            })
            .always(function () {
            });
}

function paintBackground(backgroundPath) {
    canvas().css('background-image', 'url("' + backgroundPath + '")');
}

function paintAllUnitTypes(mapUnitTypes) {
    for (var key in mapUnitTypes) {
        paintUnitType(mapUnitTypes[key]);
    }
}

function paintUnitType(mapUnitType) {
    var mapUnits = mapUnitType['objects'];
    var image = mapUnitType['image'];
    var imageSize = mapUnitType['imageSize'];
    for (var key in mapUnits) {
        var mapUnit = mapUnits[key];
        paintUnit(mapUnit, image, imageSize);
    }
}

function paintUnit(unit, image, imageSize) {
//    console.log(unit)
//    console.log(imageSize)

    if (isNewUnitOnMap(unit)) {
        addNewUnit(unit, image, imageSize);
    }
}

// =====================================

function isNewUnitOnMap(unit) {
    return currentTurn == unit['turnShown'];
}

function addNewUnit(unit, image, imageSize) {
    addNewMapObject(unit, image, imageSize);
}

function addNewMapObject(unit, image, imageSize) {
    console.log(unit);
    console.log(image);
    console.log(imageSize);

    var x = unit['x'];
    var y = unit['y'];
    var people = unit['people'];
    var className = unit['cssClassName'];
    var width = imageSize[0];
    var height = imageSize[1];
    var mapObjectElement = "<div class='map-unit " + className + "' style='left: " + x + "px; top: " + y + "px; '> \
        <img src='/images/" + image + "' width='" + width + "' height='" + height + "' />\n\n\
        <div class='map-unit-value-background background-left-top'>" + people + "</div>\n\
        <div class='map-unit-value-background background-right-top'>" + people + "</div>\n\
        <div class='map-unit-value-background background-left-bottom'>" + people + "</div>\n\
        <div class='map-unit-value-background background-right-bottom'>" + people + "</div>\n\
        <div class='map-unit-value'>" + people + "</div>\n\
</div>\n";
    canvas().append(mapObjectElement);
}

function canvas() {
    return $("#canvas");
}

// =====================================

function jsonToArray(json) {
//    return Object.keys(json).map(function(k) { return json[k] });
    return JSON.parse(json);
}