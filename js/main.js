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

// ouverture fermeture menu lateral
document.getElementById("btOpenMenu").addEventListener("click", function(){
  document.getElementById("mySidenav").style.width = "100%";
  document.getElementById("btOpenMenu").style.display = "none";
  document.getElementById("btCloseMenu").style.display = "inline-block";
});
document.getElementById("btCloseMenu").addEventListener("click", function(){
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("btOpenMenu").style.display = "inline-block";
  document.getElementById("btCloseMenu").style.display = "none";
});
// function gotoSlide2(){
//   let root = document.documentElement;
//   //root.style.setProperty('--animSlide', 'anim_slide2' );
//   root.style.setProperty('--pos0', '-400px' );
//   root.style.setProperty('--pos1', '-800px' );
//   root.style.setProperty('--pos2', '0px' );
// }