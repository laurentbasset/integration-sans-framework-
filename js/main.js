document.getElementById('btPretPerso').addEventListener("click", function() {
    document.getElementById('simMenu').style.display = 'none';
    document.getElementById('simCalculPret').style.display = 'block';
  });
document.getElementById('btCloseCalcul').addEventListener("click", function() {
  document.getElementById('simMenu').style.display = 'block';
  document.getElementById('simCalculPret').style.display = 'none';
});

document.getElementById('field1').addEventListener("change", function() {
  alert('hello');
});

function gotoSlide2(){
  let root = document.documentElement;
  //root.style.setProperty('--animSlide', 'anim_slide2' );
  root.style.setProperty('--pos0', '-400px' );
  root.style.setProperty('--pos1', '-800px' );
  root.style.setProperty('--pos2', '0px' );
}