<?php

// session_start();


// include("php/connection.php");




// $case_num = $_POST['case_num'];
// $jaw = $_POST['jaw'];
// $resin_type = $_POST['resin_type'];
// $nisting = $_POST['nisting'];
// $printing = $_POST['printing'];
// $finishing = $_POST['finishing'];
// $light_cure = $_POST['light_cure'];
// $ready = $_POST['ready'];



// // $id = "";
// // $case_number = "";
// // $jaw = '$_POST["jaw"]';
// // $resin_type = "";
// // $nisting = "";
// // $printing = "";
// // $finishing = "";
// // $light_cure = "";
// // $ready = "";

// // //  $jaw = $_POST['jaw'];

// // if (isset($_POST['id'])) {
// //     $id = $POST['id'];
// // }

// // if (isset($_POST['case_number'])) {
// //     $case_number = $_POST['case_number'];
// // }

// if (isset($_POST['jaw'])) {
//     foreach ($jaw as $j) {
//         $jaw .= $j . ",";
//     }
   
// }

// if (isset($_POST['resin_type'])) {
//     $resin_type = $_POST['resin_type'];
// }

// if (isset($_POST['nisting'])) {
//     $nisting = $_POST['nisting'];
// }

// if (isset($_POST['printing'])) {
//     $printing = $_POST['printing'];
// }

// if (isset($_POST['finishing'])) {
//     $finishing = $_POST['finishing'];
// }

// if (isset($_POST['light_cure'])) {
//     $light_cure = $_POST['light_cure'];
// }

// if (isset($_POST['ready'])) {
//     $ready = $_POST['ready'];
// }


// // $jaws = "";


// $query = "";

// if (isset($_POST['btn-add'])) {

//     if (!empty($case_number) && !empty($jaw)) {
//         //save to database
//         // $id = random_num(20);
//         $query = "insert into print (case_number,jaw,resin_type,nisting,printing,finishing,light_cure,ready)
//                   values ('$case_number','$jaw','$resin_type','$nisting','$printing','$finishing','$light_cure','$ready')";
//         mysqli_query($con, $query);
//     }

//     header("Location: index.php");
// }
// if (isset($_POST['btn-edit'])) {
//     $query = "update print set case_number='$case_num',jaw='$jaw',resin_type='$resin_type',nisting='$nisting',printing='$printing',finishing='$finishing',light_cure='$light_cure',ready='$ready' where id=$id ";
//     mysqli_query($con, $query);
// }

// if (isset($_POST['btn-delete'])) {
//     $query = "delete from print where id=$id ";
//     mysqli_query($con, $query);
// }
