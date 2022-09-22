<?php
    include('db_connect.php');

    if(isset($_POST['submit'])){

        $child_Fname = $_POST['child_Fname'];

        $child_Mname = $_POST['child_Mname'];

        $child_Lname = $_POST['child_Lname'];

        $child_B_date = $_POST['child_B_date'];

        $child_P_birth = $_POST['child_P_birth'];

        $hospt_name = $_POST['hospt_name'];

        $birth_time = $_POST['birth_time'];

        $status = 0;


// ============= Father Informations==============>>>
        $father_Fname = $_POST['father_Fname'];

        $father_Mname = $_POST['father_Mname'];

        $father_Lname = $_POST['father_Lname'];

        $father_nation = $_POST['father_nation'];

        $father_occup = $_POST['father_occup'];

        $father_trib = $_POST['father_trib'];

// Apload file father_N_id
        $father_N_id = rand(1000,10000)."-".$_FILES['father_N_id'];
        $tname = $_FILES['father_N_id']['tmp_name'];
        $uploads_dir = '/files';
        move_uploaded_file($tname, $uploads_dir.'/'.$father_N_id);

// Apload file father_Z_id
        $father_Z_id = rand(1000,10000)."-".$_FILES['father_Z_id'];
        $tname = $_FILES['father_Z_id']['tmp_name'];
        $uploads_dir = '/files';
        move_uploaded_file($tname, $uploads_dir.'/'.$father_Z_id);

// Apload file father_B_cert
        $father_B_cert = rand(1000,10000)."-".$_FILES['father_B_cert'];
        $tname = $_FILES['father_B_cert']['tmp_name'];
        $uploads_dir = '/files';
        $HEY = move_uploaded_file($tname, $uploads_dir.'/'.$father_B_cert);

// Apload file marid_cert
        $marid_cert = rand(1000,10000)."-".$_FILES['marid_cert'];
        $tname = $_FILES['marid_cert']['tmp_name'];
        $uploads_dir = '/files';
        $HEY = move_uploaded_file($tname, $uploads_dir.'/'.$marid_cert);



// ============= Mother Informations==============>>>
        $mother_Fname = $_POST['mother_Fname'];

        $mother_Mname = $_POST['mother_Mname'];

        $mother_Lname = $_POST['mother_Lname'];

        $mother_nation = $_POST['mother_nation'];

        $mother_occup = $_POST['mother_occup'];

        $mother_trib = $_POST['mother_trib'];

// Apload file mother_N_id
        $mother_N_id = rand(1000,10000)."-".$_FILES['mother_N_id'];
        $tname = $_FILES['mother_N_id']['tmp_name'];
        $uploads_dir = '/files';
        $HEY = move_uploaded_file($tname, $uploads_dir.'/'.$mother_N_id);

// Apload file mother_Z_id
        $mother_Z_id = rand(1000,10000)."-".$_FILES['mother_Z_id'];
        $tname = $_FILES['mother_Z_id']['tmp_name'];
        $uploads_dir = '/files';
        move_uploaded_file($tname, $uploads_dir.'/'.$mother_Z_id);

// Apload file mother_B_cert
        $mother_B_cert = rand(1000,10000)."-".$_FILES['mother_B_cert'];
        $tname = $_FILES['mother_B_cert']['tmp_name'];
        $uploads_dir = '/files';
        move_uploaded_file($tname, $uploads_dir.'/'.$mother_B_cert);


        $sql = "INSERT INTO Child_info(child_Fname,child_Mname,child_Lname,child_b_date,child_p_birth,hospit_name,birth_time,
        father_Fname,father_Mname,father_Lname,father_nation,father_occup,father_trib,father_N_id,father_Z_id,father_B_cert,maried_cert,
        mother_Fname,mother_Mname,mother_Lname,mother_nation,mother_occup,mother_tribe,mother_N_id,mother_Z_id,mother_B_cert,status)

        VALUES('$child_Fname','$child_Mname','$child_Lname','$child_B_date','$child_P_birth','$hospt_name','$birth_time',
        '$father_Fname','$father_Mname','$father_Lname','$father_nation','$father_occup','$father_trib','$father_N_id','$father_Z_id','$father_B_cert','$marid_cert',
        '$mother_Fname','$mother_Mname','$mother_Lname','$mother_nation','$mother_occup','$mother_trib','$mother_N_id','$mother_Z_id','$mother_B_cert','$status')";
                        
                        //  echo "<script> alert('New record added successfuly')</script>";
        
        if(mysqli_query($conn,$sql)){   
            header('Location: index.php');
            echo "<script> alert('New record added successfuly')</script>";
            
        }else{
            echo "Not aploaded";
        }



    }