<?php 
    function totalcuti($selected_lv, $total, $tempcuti)
    {
        @include 'db_con.php';
        $sql = "SELECT * FROM cuti WHERE $selected_lv='Cuti Sakit' AND $tempcuti='5' AND admin_id='2' ";
        $result =mysqli_query($conn, $sql);
		while (mysqli_fetch_array($result)) {
                $total -= $tempcuti;  
                return $total;
                $total++;
           
        }
        // if ($selected_lv == 'Cuti Sakit') {
            // -- // same method
            // -- // $total = $total - $cuti;
        // }
    }

    function total($total, $selected_leave, $tempoh_cuti)
    {
        @include 'db_con.php';
        $sql = "SELECT * FROM cuti WHERE lv_type='$selected_leave' AND lv_duration='$tempoh_cuti' AND admin_id='2' ";
        mysqli_query($conn, $sql);
		// caluclation
        // $total -= $tempoh_cuti; 
        $total = $total - $tempoh_cuti; 
            return $total;
            $total++;
    }
?>

