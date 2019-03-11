// generate a random 3 digit rgb value
function getRandomNum() {
  let randomNum = Math.floor((Math.random() * 256));
  return randomNum;
}

// target html body background color and populate with randomly generated rgb values
// found the neat rgb join here: https://stackoverflow.com/questions/14323082/why-doesnt-backgroundcolor-rgba-b-c-work
function changeBackground() {
  let a = getRandomNum();
  let b = getRandomNum();
  let c = getRandomNum();
  document.body.style.backgroundColor = 'rgb(' + [a,b,c].join(',') + ')';
}

//reloads the current document after 6 seconds (6000ms)
window.setInterval(function () {
  location.reload();
},6000);

document.addEventListener("load", changeBackground())
