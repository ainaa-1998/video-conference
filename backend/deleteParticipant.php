<?php
header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

$name = $data['name'];
$matric = $data['matric'];

include('dbConnect.php'); 

$sql = "delete FROM participant WHERE (name, matric)".
"= ('$name','$matric')";

if (mysqli_query($conn, $sql)) {
  $response[] = [
    'status' => 'success',
    'message' => 'Participant deleted successfully',
  ];
  echo json_encode($response);
} else {
  echo json_encode("Error: " . $sql . "<br>" . mysqli_error($conn));
}

mysqli_close($conn);
?>