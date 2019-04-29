<?php

class Gestione_Video_controller
{
    public function __construct()
    {
        //echo "sono il costruttore: " . __CLASS__ . " " . __FUNCTION__ . '<br>';
    }

    public function tutti()
    {
        //echo "sono il metodo tutti: " . __CLASS__ . " " . __FUNCTION__ . '<br>';

        // $videoDao = new AutoreDao();
        // $res = $videoDao->read();

        $view = new ViewCore();
        echo $view->render(
            'gestione_video\tutti_i_video.html',
            [
                'autori' => $res,
                'sezione' => 'Tutti i video',
            ]
        );

    }

    public function disabilitati()
    {
        //echo "sono il metodo tutti: " . __CLASS__ . " " . __FUNCTION__ . '<br>';

        $videoDao = new AutoreDao();
        $res = $videoDao->read();

        $view = new ViewCore();
        echo $view->render(
            'gestione_video\tutti_i_video.html',
            [
                'sezione' => 'video disabilitati',
                'autori' => $res,
            ]
        );
    }

    public function abilitati()
    {
        //echo "sono il metodo tutti: " . __CLASS__ . " " . __FUNCTION__ . '<br>';

        $videoDao = new AutoreDao();
        $res = $videoDao->read();

        $view = new ViewCore();
        echo $view->render(
            'gestione_video\tutti_i_video.html',
            [
                'autori' => $res,
                'sezione' => 'video abilitati',
            ]
        );
    }

    public function eliminaAutore()
    {
        $id_autore = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        echo __FUNCTION__ . " $id_autore";

        // echo "elimina autore $id_autore";

        if ($id_autore) {
            $dao = new AutoreDao();
            $dao->delete($id_autore);
        }

        $url = RouterCore::link('gestione_video', 'tutti');
        header("Location: $url");
    }

    public function eliminavideo()
    {
        echo __FUNCTION__ . " ";
        // $ids_autore = filter_input(INPUT_POST, 'id_autore', null, array(

        //     'flags'  => FILTER_REQUIRE_ARRAY
        // ));

        $ids_autore = filter_input(
            INPUT_POST,
            'id_autore',
            FILTER_DEFAULT,
            FILTER_REQUIRE_ARRAY
        );

        $dao = new AutoreDao();
        foreach ($ids_autore as $id_autore) {
            $dao->delete($id_autore);
        }

        $url = RouterCore::link('gestione_video', 'tutti');
        header("Location: $url");

        ///print_r($_POST['id_autore']);
        //print_r($ids_autore);
    }

    public function infoAutore()
    {
        $id_autore = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        $dao = new AutoreDao();
        $res = "";

        $view = new ViewCore();
        echo $view->render(
            'gestione_video\info_utente.html',
            [
                'autori' => $res,
                'sezione' => 'Informazioni autore: [nome] [cognome]',
            ]
        );
    }
}
