<?php
    $query=mysqli_query($conn,$sql)or die("sql error : ".mysqli_error($conn));
    if($query->num_rows > 0)
    {
        while($row=$query->fetch_row())
        {
            echo $row[0]." ";
            echo $row[1]." ";
            echo $row[2]." ";
            echo $row[3]." ";
            echo $row[4]." ";
        }
        $mysqli->br();
        $mysqli->hr();

        
    }

    $query=mysqli_query($conn,$sql)or die("sql error : ".mysqli_error($conn));
    if($query->num_rows > 1)
    {
        while(list($id,$name,$description,$image,$path_image)=mysqli_fetch_row($query))
        {
            echo $id." ";
            echo $name." ";
            echo $description." ";
            echo $image." ";
            echo $path_image." ";
        }
        $mysqli->br();
    }


?>