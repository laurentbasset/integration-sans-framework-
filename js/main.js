document.getElementById('btPretPerso').addEventListener("click", function() {
    document.getElementById('simMenu').style.display = 'none';
    document.getElementById('simCalculPret').style.display = 'block';
  });
document.getElementById('btCloseCalcul').addEventListener("click", function() {
  document.getElementById('simMenu').style.display = 'block';
  document.getElementById('simCalculPret').style.display = 'none';
});