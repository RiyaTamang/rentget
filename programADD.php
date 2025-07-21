<?php
include_once '../connectcheck/conncheck.php';
 if(isset($_POST['btn'])&&isset($_POST['program_name'])&&$_SERVER['REQUEST_METHOD']==='POST')
{
    $program_names=$_POST['program_name'];
      $success=false;
foreach($program_names as $programs)
{
    if(!empty($programs))
    {
    $insert = "insert into program (program_name) values ('$programs')";
    $insert=mysqli_query($conn,$insert);
    if($insert)
    {
        $success=true;
    }
    }
}
if($success==true)
    {
header('Content-Type:application/json');
echo json_encode([
  'success' => true,
  'message'=> 'Saved successfully!'
]);

}
else{
  echo json_encode([
    'success'=> false,
    'message' => 'Error while saving the form.'
  ]);
}
}

?>