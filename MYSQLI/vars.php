<?php
    $tb="tb_curriculum";
    $cols="id,name,description,image,path_image";
    $where_not_deleted="deleted=0";
    $sql="SELECT $cols from $tb where $where_not_deleted";
?>