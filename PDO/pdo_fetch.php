<?php
    try
    {
        $tb="tb_curriculum";
        $col_deleted="deleted=";
        $not_deleted=0;
        $where=$col_deleted.$not_deleted;
        $sql="SELECT * from $tb where $where";

        $stmt=$conn->prepare($sql);
        $stmt->execute();
        echo "<h3>TB : $tb pdo excute and foreach</h3>";
        foreach($stmt as $row)
        {
            echo $row["id"]." ";
            echo $row["name"]." ";
            echo $row["description"]." ";
            echo $row["image"]." ";
            echo $row["path_image"]." ";
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