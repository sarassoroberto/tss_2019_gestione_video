<?php
class CriteriaUrlExists implements Criteria
{
    public function meetCriteria(array $videos)
    {
        // alternativa a un foreach , 
        $res = array_filter($videos, function ($video) {

            $header = get_headers($video->video_url);
            if ($header[0] != 'HTTP/1.1 404 Not Found') {
                return true;
            } else {

                return false;
            };
        }); // filter end

        //print_r($res);
        return $res;
    }
}
