<?php
function toasterSuccess($message){
    session()->flash('toaster.success',$message);
}
?>
