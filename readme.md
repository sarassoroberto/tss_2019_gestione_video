// index.php?controller=gestione_utenti&action=tutti


// eseguire un Controller Gestione_utenti
$controller = new Gestione_utenti_controller();

// un metodo che corrisponde all'azione da svolgere
$controller->tutti();

// dentro tutti
// chiedo al database  i dati di cui ho bisogno
$utentiDao = new UtentiDAO();
$utenti = $utentiDao->read();

// ??? Presenter



$utentiViews = new UtentiViews($utenti);
