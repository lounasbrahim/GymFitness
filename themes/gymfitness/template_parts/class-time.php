<?php 
    $class_days = get_field("classes_days");
    $start_time = get_field("start_time");
    $end_time = get_field("end_time"); ?>
    <p class="class-time"><?php echo 
        "<span class='gym-day'>". $class_days . "</span> - " 
        . $start_time . " to " 
        . $end_time  ?>
    </p>