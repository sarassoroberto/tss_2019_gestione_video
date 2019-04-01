$(document).ready(function () {
  alert("sono io");
  //inizia lo script principale quando il DOM e caricato
  $('#ricerca').on('keyup', function (e) {
    var ricerca = e.currentTarget.value
    ///console.log('JS: ricerca:', ricerca)
    console.log(ricerca.length);
    if (ricerca.length > 3) {

      console.log(ricerca.length);



      $.ajax('ricerca.php', {

        method: "GET",
        //data: json che contiene delle coppie chiave - valore
        data: { 'ricerca': ricerca },
        //datatype: "json",
        // on success è la funzione di callback 
        success: function (response) {

          json_response = JSON.parse(response)
          //console.log('response: ', json_response)
          let html = ''
          for (let index = 0; index < json_response.length; index++) {
            let video = json_response[index]
            let titolo = video.titolo
            let url = video.video_url

            html += "<img src='" + url + "'> <h3>" + titolo + '</h3>'
            //console.log(titolo, url)
          }

          $('#risultato').html(html)
          //"<img src='+video.video_url+'><div" + video.titolo + '</div>'
        }
      }) // ajax

    }// end if


  }) //keyup
}) // ready
