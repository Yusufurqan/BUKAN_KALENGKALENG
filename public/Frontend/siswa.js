function animation(span) {
   span.className = "turn";
   setTimeout(function () {
      span.className = ""
   }, 700);
}

function jam() {
   setInterval(function () {

      var waktu = new Date();
      var jam   = document.getElementById('jam');
      var hours = waktu.getHours();
      var minutes = waktu.getMinutes();
      var seconds = waktu.getSeconds();

      if (waktu.getHours() < 10)
      {
         hours = '0' + waktu.getHours();
      }
      if (waktu.getMinutes() < 10)
      {
         minutes = '0' + waktu.getMinutes();
      }
      if (waktu.getSeconds() < 10)
      {
         seconds = '0' + waktu.getSeconds();
      }
      jam.innerHTML  = '<span>' + hours + '</span>'
                     + '<span>' + minutes + '</span>'
                     + '<span>' + seconds +'</span>';

      var spans      = jam.getElementsByTagName('span');
      animation(spans[2]);
      if (seconds == 0) animation(spans[1]);
      if (minutes == 0 && seconds == 0) animation(spans[0]);

   }, 1000);
}

jam();



  function  date() {
                 
            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth();
            var year = date.getFullYear();
             
            document.getElementById("date").innerHTML =" " + day + " " + months[month]+" "+year;
            }
            date();

function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
