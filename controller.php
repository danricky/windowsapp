<?php
if (isset($_REQUEST['cmd'])){

    $cmd=$_REQUEST['cmd'];

    function getNews(){
        include_once("clientclass.php");
        $news=new clientclass();

        $news->fetchAll();
        if($row=$news->fetchArray()){
            echo '{"result":1,news:[';
            while($row){
                echo json_encode($row);
                if($row=$news->fetchArray()){
                    echo ',';
                }
            }

            echo ']}';
        }
        echo '{"result":0,"message":"No news found"}';
    }

    //get news by filter
     function getNewsByFilters()
    {
        include_once("clientclass.php");
        $news=new clientclass();
        $filter=$_REQUEST['filter'];
        $news->fetchNewsByFilter(filter);
        if($row=$news->fetchArray()){
            echo '{"result":1,news:[';
            while($row){
                echo json_encode($row);
                if($row=$news->fetchArray()){
                    echo ',';
                }
            }

            echo ']}';
        }
        echo '{"result":0,"message":"No news found"}';
    }

    switch ($cmd) {
        case 1:
            getNews();
            break;
        case 2:
            getNewsByFilters();
            break;

        default:

            break;
    }


}
?>
