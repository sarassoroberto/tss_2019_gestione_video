<?php
class DatasetJSON
{
    /** @var array dataset i dati su cui posso fare una ricerca */
    protected $dataset;
    /** @var  string source il percorso per ottenere i json */
    protected $source;

    const FILE_NOT_FOUND = 10;

    /**
     * leggere un file JSON e converirlo in un array di oggetti php
     * in caso di formato errato restistuisce un eccezione con codici di errore  
     * @see http://php.net/manual/en/function.json-last-error.php
     * 
     * @param string $source
     * @return void
     */
    public function setDataset($source)
    {
        if (file_exists($source)) {

            $this->source = $source;
            $this->dataset = json_decode(file_get_contents($source));
            $err = json_last_error();
            if ($err !== JSON_ERROR_NONE) {
                throw new Exception('il formato json non è corretto', $err);
            }
        } else {
            throw new Exception('il file richiesto non esiste', self::FILE_NOT_FOUND);
        }
    }
    /**
     * Undocumented function
     *
     * @return array
     */
    public function getDataset()
    {
        return $this->dataset;
    }
}
