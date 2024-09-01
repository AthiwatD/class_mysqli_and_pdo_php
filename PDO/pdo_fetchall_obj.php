<?php
    try
    {
        $tb="tb_curriculum";
        $col_deleted="deleted=";
        $not_deleted=0;
        $where=$col_deleted.$not_deleted;
        $cols="id,name,description,image,path_image";
        $sql="SELECT $cols from $tb where $where";

        $stmt=$conn->prepare($sql);
        $stmt->execute();
        $rows=$stmt->fetchAll(PDO::FETCH_OBJ);
        echo "<h3>TB : $tb pdo fetchall object</h3>";
        foreach($rows as $row)
        {
            echo $row->id." ";
            echo $row->name." ";
            echo $row->description." ";
            echo $row->image." ";
            echo $row->path_image." ";
            $pdo->br();
        }
    }
    catch(Exception $e)
    {
        echo `<script type='text/javascript'>alert(`.$e->getMessage().`)</script>`;
    }
    finally
    {
        $pdo->close();
        $pdo->hr();
    }

?>