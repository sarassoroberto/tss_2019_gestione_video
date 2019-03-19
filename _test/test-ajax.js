// comando
$.ajax('request.php', {
  success: function(data) {
    console.log(data, $('#alert'))
    $('<div class="box">' + data + '</div>').appendTo('#alert')
  },
  data: {
    colore: 'yellow',
    quantita: 10
  }
})
// manipolare il documento (DOM)
// $(selettore)
