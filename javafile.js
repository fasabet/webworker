var test = {"x": "Long test", "y": 456};

var mijnjson = JSON.stringify(test);

function Draw() {
    postMessage(mijnjson);
}
Draw();
