<?php
    function execute($sql,$params=null){
        $link = mysqli_connect("localhost", "root", "", "blog");
        if ($link === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        if ($params==null) {
            if ($res = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($res) > 0) {
                    return $res;
                }
            } else {
                return false;
            }
        } else {
            $stmt = $link->prepare($sql);
            $stmt->execute($params);
            $res = $stmt->get_result();
            return $res;
        }
        
        mysqli_close($link);

    }
?>
