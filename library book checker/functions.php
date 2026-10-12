<?php
include 'form.php';

$returnDate = $_Get['returnDate'];
$dueDate = $_GET['dueDate'];


//calculated the dates
function calculateDates(){
    if($returnDate > $dueDate){
        return $dueDate - $returnDate;
    } else if($returnDate < $dueDate){
        return $returnDate - $dueDate;
    } else if($returnDate == $dueDate){
        return 'You submitted on the due date';
    }

}
?>