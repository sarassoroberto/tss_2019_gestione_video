$(document).ready(function() {
  //inizia lo script principale quando il DOM e caricato
  $('#ricerca').on('keyup', function(e) {
    var ricerca = e.currentTarget.value
    ///console.log('JS: ricerca:', ricerca)

    $.ajax('ricerca.php', {
      data: { ricerca: ricerca },
      success: function(response) {
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
  }) //keyup
}) // ready
