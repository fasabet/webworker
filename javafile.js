
var y = 0;
function Draw() {
    if (y < 500) {
        postMessage(y);
        y += 10;
        setTimeout("Draw()", 500);

    }
}
Draw();
