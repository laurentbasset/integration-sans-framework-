document.getElementById('btPretPerso').addEventListener("click", function() {
    document.getElementById('simMenu').style.display = 'none';
    document.getElementById('simCalculPret').style.display = 'block';
  });
document.getElementById('btCloseCalcul').addEventListener("click", function() {
  document.getElementById('simMenu').style.display = 'block';
  document.getElementById('simCalculPret').style.display = 'none';
});

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