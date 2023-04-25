<?php

require_once "../include/connection.php";
session_start();

if(isset($_POST['signup'])){
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $tname = $_POST['tname'];
    $lname = $_POST['lname'];
    $id = $_POST['id'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone1 = $_POST['phone1'];
    $phone2 = $_POST['phone2'];
    $read = $_POST['read'];
    $job = $_POST['job'];
    $isqualify = $_POST['isqualify'];
    $qualify = $_POST['qualify'];
    $training = $_POST['training'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

        $_SESSION['data'] = [
            "fname" => $fname, "sname" => $sname, "tname" => $tname, "lname" => $lname,
            "id" => $id, "gender" => $gender, "city" => $city, "email" => $email, "address" => $address,
            "phone1" => $phone1, "phone2" => $phone2, "read" => $read, "job" => $job, "isqualify" => $isqualify,
            "qualify" => $qualify, "training" => $training];

    if(empty($fname)){
        $error[] = "error";
        $_SESSION['fname_error'] = "ادخل الاسم الاول";
        header("location: ../index.php");
    }elseif(is_numeric($fname)){
        $error[] = "error";
        $_SESSION['fname_error'] = "الاسم الاول ابد ان يكون كلمة";
        header("location: ../index.php");
    }elseif(strlen($fname) < 3){
        $error[] = "error";
        $_SESSION['fname_error'] = "الاسم الاول لابد ان يكون أكثر من ثلاث حروف";
        header("location: ../index.php");
    }

    if(empty($sname)){
        $error[] = "error";
        $_SESSION['sname_error'] = "ادخل الاسم الثانى";
        header("location: ../index.php");
    }elseif(is_numeric($sname)){
        $error[] = "error";
        $_SESSION['sname_error'] = "الاسم الثانى ابد ان يكون كلمة";
        header("location: ../index.php");
    }elseif(strlen($sname) < 3){
        $error[] = "error";
        $_SESSION['sname_error'] = "الاسم الثانى لابد ان يكون أكثر من ثلاث حروف";
        header("location: ../index.php");
    }

    if(empty($tname)){
        $error[] = "error";
        $_SESSION['tname_error'] = "ادخل الاسم الثالث";
        header("location: ../index.php");
    }elseif(is_numeric($tname)){
        $error[] = "error";
        $_SESSION['tname_error'] = "الاسم الثالث ابد ان يكون كلمة";
        header("location: ../index.php");
    }elseif(strlen($tname) < 3){
        $error[] = "error";
        $_SESSION['tname_error'] = "الاسم الثالث لابد ان يكون أكثر من ثلاث حروف";
        header("location: ../index.php");
    }

    if(empty($lname)){
        $error[] = "error";
        $_SESSION['lname_error'] = "ادخل الاسم الاخير";
        header("location: ../index.php");
    }elseif(is_numeric($lname)){
        $error[] = "error";
        $_SESSION['lname_error'] = "الاسم الاخير ابد ان يكون كلمة";
        header("location: ../index.php");
    }elseif(strlen($lname) < 3){
        $error[] = "error";
        $_SESSION['lname_error'] = "الاسم الاخير لابد ان يكون أكثر من ثلاث حروف";
        header("location: ../index.php");
    }

    if(empty($id)){
        $error[] = "error";
        $_SESSION['id_error'] = "ادخل الرقم الوطنى";
        header("location: ../index.php");
    }elseif(!is_numeric($id)){
        $error[] = "error";
        $_SESSION['id_error'] = " الرقم الوطنى لابد ان يكون رقم";
        header("location: ../index.php");
    }elseif(strlen($id) < 14){
        $error[] = "error";
        $_SESSION['id_error'] = "الرقم الوطنى لابد ان يتكون من  14 رقم";
        header("location: ../index.php");
    }

    if(empty($gender)){
        $error[] = "error";
        $_SESSION['gender_error'] = "أختر اجابة";
        header("location: ../index.php");
    }

    if($city == 0){
        $error[] = "error";
        $_SESSION['city_error'] = "أختر المحافظة";
        header("location: ../index.php");
    }

    if(empty($address)){
        $error[] = "error";
        $_SESSION['address_error'] = "ادخل العنوان";
        header("location: ../index.php");
    }elseif(is_numeric($address)){
        $error[] = "error";
        $_SESSION['address_error'] = " العنوان لابد ان يكون حروف";
        header("location: ../index.php");
    }elseif(strlen($address) < 10){
        $error[] = "error";
        $_SESSION['address_error'] = "العنوان أقل من  10 حروف";
        header("location: ../index.php");
    }

    if(empty($email)){
        $error[] = "error";
        $_SESSION['email_error'] = "ادخل البريد الاكترونى";
        header("location: ../index.php");
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error[] = "error";
        $_SESSION['email_error'] = " البريد الاكترونى غير صالح";
        header("location: ../index.php");
    }

    if(empty($phone1)){
        $error[] = "error";
        $_SESSION['phone1_error'] = "ادخل الهاتف";
        header("location: ../index.php");
    }elseif(!is_numeric($phone1)){
        $error[] = "error";
        $_SESSION['phone1_error'] = " الهاتف لابد ان يكون ارقام";
        header("location: ../index.php");
    }elseif(strlen($phone1) < 11){
        $error[] = "error";
        $_SESSION['phone1_error'] = "الهاتف أقل من  11 حروف";
        header("location: ../index.php");
    }
    if(!empty($phone2) && !is_numeric($phone2)){
        $error[] = "error";
        $_SESSION['phone2_error'] = " الهاتف لابد ان يكون ارقام";
        header("location: ../index.php");
    }elseif(!empty($phone2) && strlen($phone2) < 11){
        $error[] = "error";
        $_SESSION['phone2_error'] = "الهاتف أقل من  11 حروف";
        header("location: ../index.php");
    }

    if(empty($read)){
        $error[] = "error";
        $_SESSION['read_error'] = "أختر اجابة";
        header("location: ../index.php");
    }


    if(empty($isqualify)){
        $error[] = "error";
        $_SESSION['isqualify_error'] = "أختر اجابة";
        header("location: ../index.php");
    }

    if($isqualify == "yes" && $qualify == 0){
        $error[] = "error";
        $_SESSION['qualify_error'] = "ادخل المؤهل";
        header("location: ../index.php");
    }

    if(empty($training)){
        $error[] = "error";
        $_SESSION['training_error'] = "أختر اجابة";
        header("location: ../index.php");
    }

    if(empty($password)){
        $error[] = "error";
        $_SESSION['password_error'] = "ادخل كبمة المرور";
        header("location: ../index.php");
    }elseif(strlen($password) < 6){
        $error[] = "error";
        $_SESSION['password_error'] = "كبمة المرور أقل من  6 حروف";
        header("location: ../index.php");
    }

    if($password != $confirmpassword){
        $error[] = "error";
        $_SESSION['confirmpassword_error'] = "غير متطابقة";
        header("location: ../index.php");
    }

    if(!isset($error)){
    
        // if($gender == "male"){
        //     $gender = "ذكر";
        // }elseif($gender == "female"){
        //     $gender = "أنثى";
        // }
        $query = "SELECT id FROM users WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            $_SESSION['errors'] = ["هذا الحساب موجود بالفعل"];
            header("location:../index.php");
        }else {
            $password = password_hash($password, PASSWORD_DEFAULT); 

            $query = "INSERT INTO users (id, fname, sname, tname, lname, gender, city, address, email, phone1, phone2, readable, job, qualification, qualifications, courses, password) VALUES ('$id', '$fname', '$sname', '$tname', '$lname', '$gender', '$city', '$address', '$email', '$phone1','$phone2', '$read', '$job', '$isqualify', '$qualify', '$training', '$password')";
            $result = mysqli_query($conn, $query);
            if($result){
                unset($_SESSION['data']);
                $_SESSION['success'] = ["تم تسجيل الحساب بنجاح"];
                header("location:../index.php");
            }else {
                $_SESSION['errors'] = ["حدث شئ ما خطأ"];
                header("location:../index.php");
            }
        }
}
}

