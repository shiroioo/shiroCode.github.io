

<?php

function percentSemasa (int $hadir,int $total_hari){

    return ($hadir/$total_hari)*100;          
}

function percentMingguan (int $hadir){

    return ($hadir/24)*100;          
}

function percentBulanan (int $hadir){

    return ($hadir/96)*100;          
}

function percentTahunan (int $hadir){

    return ($hadir/1920)*100;          
}