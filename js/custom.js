// generate a random 3 digit rgb value
function getRandomNum() {
  let randomNum = Math.floor((Math.random() * 256) + 1);
  return randomNum;
}

// target html body background color and populate with randomly generated rgb values
function changeBackground() {
  let a = getRandomNum();
  let b = getRandomNum();
  let c = getRandomNum();
  document.body.style.backgroundColor = 'rgb(' + [a,b,c].join(',') + ')';
}

document.addEventListener("load", changeBackground())
