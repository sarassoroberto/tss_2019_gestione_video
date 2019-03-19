<?php
class CriteriaTitolo  implements Criteria
{
    private $ricerca;
    public function __construct($ricerca)
    {
        $this->ricerca = $ricerca;
    }
    public function meetCriteria(array $videos)
    {

        $res = array();

        foreach ($videos as $video) {

            if (stripos($video->titolo, $this->ricerca) !== false) {

                $res[] = $video;
            };
        }

        return $res;
    }
}
