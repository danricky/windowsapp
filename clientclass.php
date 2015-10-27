
<?php
include_once('base.php');

class clientclass extends base{

    //function to fetch all data from the dabatabase

    function fetchAll()
    {
        $sql="select * from news order by TIMESTAMP";

        return $this->query($sql);
    }

    function fetchNewsByFilter($filter)
    {
        $sql="select * from news where category='$filter'";

        return $this->query($sql);
    }
}
?>
