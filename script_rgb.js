let i = 0;
let colors = ['yellow', 'blue', 'red', 'orange'];
// Triggers every second
function changeColor() {
    document.body.style.backgroundColor = colors[i];
    i++;
    if (i >= colors.length) {
        i = 0;  // Reset i to 0 if it exceeds colors length
    }
}
setInterval(changeColor, 500);