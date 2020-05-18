<?php
header("Content-Type: text/html;charset=utf-8");
$btn=$_POST["btn"];
//验证长度
if(count($btn)<34){
 
  echo "您还有选项没填";
}
else{
print_r($btn) ;
if(is_array($btn))
{
foreach($btn as $value){
//复选框
if(is_array($value)){
    
    foreach($value as $i){
      echo $i."<br>";
    }
}
//单选框
else{
    echo "<br>". $value . "<br>";
}
}
}
}

?>