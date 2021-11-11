function showMusic(str) {
    var xhttp;
    if (str.length == 0) { 
      document.getElementById("txtMusic").innerHTML = "";
      return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtMusic").innerHTML = this.responseText;
      }
    };
    console.log(str);
    xhttp.open("GET", "getMusic.php?q="+str, true);
    xhttp.send();
  }