<?php
session_start();


include("php/connection.php");
// include("php/login.php");


// Logout
if (empty($_SESSION['id'])) : header('Location:index.php');
endif;

if (isset($_POST['btn_save'])) {

    $case_number = $_POST['case_num'];
    $name = $_POST['name'];
    $jaw = $_POST['jaw'];
    $printer_type = $_POST['printer_type'];
    $resin_type = $_POST['resin_type'];
    $nisting = $_POST['nisting'];
    $printing = $_POST['printing'];
    $finishing = $_POST['finishing'];
    $light_cure = $_POST['light_cure'];
    $ready = $_POST['ready'];
    $date = date('Y-m-d');

    if (!empty($case_number)) {

        $query = "insert into print
(case_number,name,jaw,printer_type,resin_type,nisting,printing,finishing,light_cure,ready,date)
values
('$case_number','$name','$jaw','$printer_type','$resin_type','$nisting','$printing','$finishing','$light_cure','$ready','$date')";
        mysqli_query($con, $query);
    }

    header("Location: print_tr-admin.php");
}

if (isset($_POST['btn_save_update'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $case_number = $_POST['case_number'];
    $jaw = $_POST['jaw'];
    $printer_type = $_POST['printer_type'];
    $resin_type = $_POST['resin_type'];
    $nisting = $_POST['nisting'];
    $printing = $_POST['printing'];
    $finishing = $_POST['finishing'];
    $light_cure = $_POST['light_cure'];
    $ready = $_POST['ready'];

    if (count($_POST) > 0) {

        if ($ready == "on") {

            $edit = "update print set name='$name', case_number='$case_number' , jaw='$jaw', printer_type='$printer_type'
,resin_type='$resin_type' , nisting='on' , printing='on' , finishing='on' , light_cure='on' , ready='on' where id='$id'
";
            mysqli_query($con, $edit);
        } else {
            $edit = "update print set name='$name' , case_number='$case_number', jaw='$jaw', printer_type='$printer_type'
,resin_type='$resin_type' , nisting='$nisting' , printing='$printing' , finishing='$finishing' ,
light_cure='$light_cure' , ready='$ready' where id='$id' ";
            mysqli_query($con, $edit);
        }

        if ($edit) {
            mysqli_close($con); //Close connection
            header("location:print_tr-admin.php"); // redirects to all records page
            exit;
        } else {
            echo mysqli_error($con);
        }
    }
}

if (isset($_POST['btn-delete'])) {

    $id = $_POST['id'];
    echo '';

    echo '<div class="modal fade">
    <div class="modal-dialog">
        <form method="POST" class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Delete</h5>
                <button type="button" class="btn-close"><i class="fas fa-times-circle"></i></button>
            </div>

            <div class="modal-body">
                Are you sure delete this ID
                <input type="text" name="id_" value=' . $id . '>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-close">Close</button>
                <button type="submit" name="sure_del" class="btn btn-delete">Delete</button>
            </div>

        </form>
    </div>
</div>';
}

if (isset($_POST['sure_del'])) {
    $id_ = $_POST['id_'];
    $query = "delete from print where id=$id_";
    mysqli_query($con, $query);
}

if (isset($_POST['search'])) {

    $valueToSearch = $_POST['SearchValue'];
    $query = " SELECT * FROM print WHERE case_number LIKE ' %{$valueToSearch}% ' ";
    $result_page = filtertable($query);
} else {
    $query = "SELECT * FROM print ORDER BY id DESC ";
    $result_page = filtertable($query);
}

function filtertable($query)
{
    $con = mysqli_connect("localhost", "root", "", "print");
    $filter_result = mysqli_query($con, $query);
    return $filter_result;
}
