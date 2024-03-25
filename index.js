//get the body of the html page
var body = document.getElementsByTagName('body')[0];
var header = document.createElement('h1');
header.appendChild(document.createTextNode("Hello world"));
body.appendChild(header);

var d = 42 || 0;
console.log(d);