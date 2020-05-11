function addText(text) {
    document.getElementById('text').value += text;
}
function remove() {
    const lastText = document.getElementById('text').value;
    document.getElementById('text').value = lastText.slice(0, -1);
}
function clear() {
    document.getElementById('text').value = "";
}
function allowedText(text) {
    const validChars = /[0-9().+\-*/ ]/;
    const strIn = text.value;
    let strOut = '';
    for(let i=0; i < strIn.length; i++) {
        strOut += (validChars.test(strIn.charAt(i)))? strIn.charAt(i) : '';
    }
    text.value = strOut;
}