<?php
    $query=mysqli_query($conn,$sql)or die("sql error : ".mysqli_error($conn));
    if($query->num_rows > 0)
    {
        while($row=$query->fetch_object())
        {
            echo $row->id." ";
            echo $row->name." ";
            echo $row->description." ";
            echo $row->image." ";
            echo $row->path_image." ";
        }
        $mysqli->br();
        $mysqli->hr();

        
    }


?>