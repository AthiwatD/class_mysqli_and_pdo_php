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
        $rows=$stmt->fetchAll(PDO::FETCH_NUM);
        echo "<h3>TB : $tb pdo fetchall num</h3>";
        foreach($rows as $row)
        {
            echo $row[0]." ";
            echo $row[1]." ";
            echo $row[2]." ";
            echo $row[3]." ";
            echo $row[4]." ";
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