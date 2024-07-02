<?php
$charlist="";
$charid=[];
$space=" ";
$spaceid=[0];
$alphabig="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$alphaid=[];
for($i=1;$i<=26;$i++){
    $alphaid;
}
function raihan_box($box_title,$box_text){
    $total="";
    $total=$total . '<div class="m10">';
    $total=$total . '<div class="raihanboxtitle p10">';
    $total=$total . '<h2>' . $box_title . '</h2>';
    $total=$total . '</div>';
    $total=$total . '<div class="raihanbox p10">';
    $total=$total . $box_text;
    $total=$total . '</div>';
    $total=$total . '</div>';
    return $total;
}
function raihan_p($text){
    return '<p class="m10">'.$text.'</p>';
}
function raihan_h2($text){
    return '<h2 class="m10">'.$text.'</h2>';
}
function raihan_button_menu($text,$action){
    return '<a href="'.$action.'"><div class="raihanbuttonmenu-m10r p10">'.$text.'</div></a>';
}
function raihan_button_menu_r($text,$action){
    return '<a href="'.$action.'"><div class="raihanbuttonmenu p10">'.$text.'</div></a>';
}
function raihan_form($action,$list_of_boxes,$submit_button_text){
    $finale="";
    $finale=$finale . '<form action="'.$action.'">';
    for($i=0;$i<count($list_of_boxes);$i++){
        if($list_of_boxes[$i]=="Password" or $list_of_boxes[$i]=="Pass Word"){
            $finale=$finale . '<label for="'.$list_of_boxes[$i].'">'.$list_of_boxes[$i].':</label><br>'.
            '<input type="password" id="'.$list_of_boxes[$i].'" name="'.$list_of_boxes[$i].'"><br>';
        }else{
            $finale=$finale . '<label for="'.$list_of_boxes[$i].'">'.$list_of_boxes[$i].':</label><br>'.
            '<input type="text" id="'.$list_of_boxes[$i].'" name="'.$list_of_boxes[$i].'"><br>';
        }
    }
    $finale=$finale . '<input type="submit" value="'.$submit_button_text.'">';
    $finale=$finale . '</form>';
    return $finale;
}
?>