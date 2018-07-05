var list = ["a.jpg", "b.jpg","c.jpg","d.jpg","e.jpg"];

function getRandomInt(max) {
    return Math.floor((Math.random() * max)+1);
}
function changeImage() {
  var variable = getRandomInt(4);
  return list[variable];
}
