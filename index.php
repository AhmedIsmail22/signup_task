<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CDN/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style1.css">
    <title>Document</title>
</head>
<body>
<div class="container lang text-light"> <a class="nav-link py-1" href="#">English</a> </div>
   <nav class="navbar navbar-expand-lg">
  <div class="container-fluid p-0">
    <a class="navbar-brand" href="index.php">وزارة القوى العاملة <br/>Ministry of Manpower</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">  </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-home text-primary"></i> الرئيسية</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-building text-primary"></i> التدريب المهنى</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-briefcase text-primary"></i> التدريب البدراى</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-list-alt text-primary"></i> عن الاكاديمية</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-graduation-cap text-primary"></i> المدربون</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-phone text-primary"></i> اتصل بنا</a>
        </li>
      </ul>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link"><i class="fa fa-user text-primary"></i>تسجيل دخول</a>
        </li>
        <li class="nav-item">
          <a class="nav-link search-icon"><i class="fa fa-search text-primary"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container banner"></div>

   <section class="container w-100 text-light px-2">
    <form action="handle/handle-signUp.php" method="POST">
    <?php
        if(isset($_SESSION['errors'])){
            foreach($_SESSION['errors'] as $error){
                ?>
                    <div class="alert alert-danger text-center"><?=$error; ?></div>
                <?php
            }
        }
        unset($_SESSION['errors']);

        if(isset($_SESSION['success'])){
            foreach($_SESSION['success'] as $msg){
                ?>
                    <div class="alert alert-success text-center"><?=$msg; ?></div>
                <?php
            }
        }

        unset($_SESSION['success']);
    ?>
        <div class="row">
            <div class="col-12">
            <h5 class="header">بيانات المندوب</h5>
            </div>
        </div>
       <div class="row mb-4">
            <div class="col-md-3">
                <input type="text" class="form-control" id="validationDefault01" placeholder="الاسم الاول" name="fname"
                value="<?php if(isset($_SESSION['data']['fname'])) echo $_SESSION['data']['fname']; ?>">
                <label class="text-danger w-100">
                    <?php 
                        if(isset($_SESSION['fname_error'])){
                            echo $_SESSION['fname_error'];
                        }
                        unset($_SESSION['fname_error']);
                    ?>
                </label>
            </div>
            <div class="col-md-3">
                <input type="text" class="form-control" id="validationDefault02" placeholder="الاسم الثانى" name="sname"
                value="<?php if(isset($_SESSION['data']['sname'])) echo $_SESSION['data']['sname']; ?>">
                <label class="text-danger w-100">
                    <?php 
                        if(isset($_SESSION['sname_error'])){
                            echo $_SESSION['sname_error'];
                        }
                        unset($_SESSION['sname_error']);
                    ?>
                </label>
            </div>
            <div class="col-md-3">
                <input type="text" class="form-control" id="validationDefault02" placeholder="الاسم الثالث" name="tname"
                value="<?php if(isset($_SESSION['data']['tname'])) echo $_SESSION['data']['tname']; ?>">
                <label class="text-danger w-100">
                    <?php 
                        if(isset($_SESSION['tname_error'])){
                            echo $_SESSION['tname_error'];
                        }
                        unset($_SESSION['tname_error']);
                    ?>
                </label>
            </div>
            <div class="col-md-3">
                <input type="text" class="form-control" id="validationDefault02" placeholder="الاسم الاخير" name="lname"
                value="<?php if(isset($_SESSION['data']['lname'])) echo $_SESSION['data']['lname']; ?>">
                <label class="text-danger w-100">
                    <?php 
                        if(isset($_SESSION['lname_error'])){
                            echo $_SESSION['lname_error'];
                        }
                        unset($_SESSION['lname_error']);
                    ?>
                </label>
            </div>
       </div>
          
       <div class="row mb-4">
            <div class="col-md-6">
                <input type="text" class="form-control" id="validationDefault01" placeholder="الرقم الوطنى" name="id"
                value="<?php if(isset($_SESSION['data']['id'])) echo $_SESSION['data']['id']; ?>">
                <label class="text-danger w-100">
                    <?php 
                        if(isset($_SESSION['id_error'])){
                            echo $_SESSION['id_error'];
                        }
                        unset($_SESSION['id_error']);
                    ?>
                </label>
            </div>
            <div class="col-md-3 d-flex justify-content-between align-items-center">
                <div><p>النوع</p> </div>
                <div>
                    <input type="radio" class="form-check-input" name="gender" value="male"
                    <?php if(isset($_SESSION['data']['gender']) && $_SESSION['data']['gender'] == "male") echo "checked"; ?> />
                    <label class="form-check-label mx-3 mb-2" for="flexRadioDefault1">ذكر</label>
                </div>
                <div>
                    <input type="radio" class="form-check-input" name="gender" value="female" 
                    <?php if(isset($_SESSION['data']['gender']) && $_SESSION['data']['gender'] == "female") echo "checked"; ?> >
                    <label class="form-check-label mx-3 mb-2" for="flexRadioDefault1"> انثى </label>
                </div>
                <label class="text-danger w-100">
                    <?php 
                        if(isset($_SESSION['gender_error'])){
                            echo $_SESSION['gender_error'];
                        }
                        unset($_SESSION['gender_error']);
                    ?>
                </label>
            </div>
            <div class="col-md-3">
            <select class="w-100 form-control" id="validationDefault01" name="city">
                <option value="0" selected>المحافظة المقيم بها</option>
                <option value="القاهرة" 
                <?php if(isset($_SESSION['data']['city']) && $_SESSION['data']['city'] == "القاهرة") echo "selected"; ?> >
                القاهرة</option>
                <option value="الجيزة"
                <?php if(isset($_SESSION['data']['city']) && $_SESSION['data']['city'] == "الجيزة") echo "selected"; ?>>
                    الجيزة</option>
                <option value="الاسكندرية"
                <?php if(isset($_SESSION['data']['city']) && $_SESSION['data']['city'] == "الاسكندرية") echo "selected"; ?>>
                    الاسكندرية</option>
                    <option value="المنوفية"
                <?php if(isset($_SESSION['data']['city']) && $_SESSION['data']['city'] == "المنوفية") echo "selected"; ?>>
                المنوفية</option>
                <option value="الدقهلية"
                <?php if(isset($_SESSION['data']['city']) && $_SESSION['data']['city'] == "الدقهلية") echo "selected"; ?>>
                الدقهلية</option>
                <option value="القليوبية"
                <?php if(isset($_SESSION['data']['city']) && $_SESSION['data']['city'] == "القليوبية") echo "selected"; ?>>
                القليوبية</option>
                <option value="الشرقية"
                <?php if(isset($_SESSION['data']['city']) && $_SESSION['data']['city'] == "الشرقية") echo "selected"; ?>>
                الشرقية</option>
            </select>
            <label class="text-danger w-100">
                    <?php 
                        if(isset($_SESSION['city_error'])){
                            echo $_SESSION['city_error'];
                        }
                        unset($_SESSION['city_error']);
                    ?>
                </label>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-12">
                <input type="text" class="form-control" id="validationDefault01" placeholder="العنوان بالتفصيل" name="address"
                value="<?php if(isset($_SESSION['data']['address'])) echo $_SESSION['data']['address']; ?>" >
                <label class="text-danger w-100">
                    <?php 
                        if(isset($_SESSION['address_error'])){
                            echo $_SESSION['address_error'];
                        }
                        unset($_SESSION['address_error']);
                    ?>
                </label>
            </div>
        </div>
        <hr class="bg-light my-5">
        
        <div class="row">
            <div class="col-12">
                <h5 class="header">بيانات التواصل</h5>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-6">
                <input type="email" class="form-control" id="validationDefault01" placeholder="البريد الاكترونى" name="email"
                value="<?php if(isset($_SESSION['data']['email'])) echo $_SESSION['data']['email']; ?>">
                <label class="text-danger w-100">
                    <?php 
                        if(isset($_SESSION['email_error'])){
                            echo $_SESSION['email_error'];
                        }
                        unset($_SESSION['email_error']);
                    ?>
                </label>
            </div>
            <div class="col-md-3">
                <input type="text" class="form-control" id="validationDefault01" placeholder="رقم الهاتف" name="phone1"
                value="<?php if(isset($_SESSION['data']['phone1'])) echo $_SESSION['data']['phone1']; ?>">
                <label class="text-danger w-100">
                    <?php 
                        if(isset($_SESSION['phone1_error'])){
                            echo $_SESSION['phone1_error'];
                        }
                        unset($_SESSION['phone1_error']);
                    ?>
                </label>
            </div>
            <div class="col-md-3">
                <input type="text" class="form-control" id="validationDefault01" placeholder="رقم الهاتف 2" name="phone2"
                value="<?php if(isset($_SESSION['data']['phone2'])) echo $_SESSION['data']['phone2']; ?>">
                <label class="text-danger w-100">
                    <?php 
                        if(isset($_SESSION['phone2_error'])){
                            echo $_SESSION['phone2_error'];
                        }
                        unset($_SESSION['phone2_error']);
                    ?>
                </label>
            </div>
        </div>
        
        <hr class="bg-light my-5">

        <div class="row">
            <div class="col-12">
                <h5 class="header">المستوى التعليمى والوظيفة</h5>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-3">
                <h5>هل تجيد القراءة والكتابة</h5>
            </div>
            <div class="col-md-3">
            <input type="radio" class="form-check-input " name="read" value="yes"
            <?php if(isset($_SESSION['data']['read']) && $_SESSION['data']['read'] == "yes") echo "checked"; ?> >
                <label class="form-check-label mx-3" for="flexRadioDefault1">
                    نعم
                </label>
                <input type="radio" class="form-check-input" name="read" value="no"
                <?php if(isset($_SESSION['data']['read']) && $_SESSION['data']['read'] == "no") echo "checked"; ?> >
                <label class="form-check-label mx-3" for="flexRadioDefault1">
                    لا
                </label>
                <label class="text-danger w-100">
                    <?php 
                        if(isset($_SESSION['read_error'])){
                            echo $_SESSION['read_error'];
                        }
                        unset($_SESSION['read_error']);
                    ?>
                </label>
            </div>

            <div class="col-md-6">
                <input type="text" class="form-control" id="validationDefault01" placeholder="وظيفتك ان وجدت" name="job"
                value="<?php if(isset($_SESSION['data']['job'])) echo $_SESSION['data']['job']; ?>" >
                <label class="text-danger w-100">
                    <?php 
                        if(isset($_SESSION['job_error'])){
                            echo $_SESSION['job_error'];
                        }
                        unset($_SESSION['job_error']);
                    ?>
                </label>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-3">
                <h5>هل لديك مؤهل أكاديمى ؟</h5>
            </div>
            <div class="col-md-3">
            <input type="radio" class="form-check-input " name="isqualify" value="yes"
            <?php if(isset($_SESSION['data']['isqualify']) && $_SESSION['data']['isqualify'] == "yes") echo "checked"; ?> >
                <label class="form-check-label mx-3" for="flexRadioDefault1">
                    نعم
                </label>
                <input type="radio" class="form-check-input" name="isqualify" value="no"
                <?php if(isset($_SESSION['data']['isqualify']) && $_SESSION['data']['isqualify'] == "no") echo "checked"; ?> >
                <label class="form-check-label mx-3" for="flexRadioDefault1">
                    لا
                </label>
                <label class="text-danger w-100">
                    <?php 
                        if(isset($_SESSION['isqualify_error'])){
                            echo $_SESSION['isqualify_error'];
                        }
                        unset($_SESSION['isqualify_error']);
                    ?>
                </label>
            </div>
            <div class="col-md-3">
            <h5>نوع المؤهل ان وجدت ؟</h5>
            </div>
            <div class="col-md-3">
            <select name="qualify" class="w-100 form-control" id="validationDefault01">
                <option value="0" selected>المؤهل</option>
                <option value="ماجستير" 
                <?php if(isset($_SESSION['data']['qualify']) && $_SESSION['data']['qualify'] == "ماجستير") echo "selected"; ?>>
                ماجسيتير</option>
                <option value="دكتوراه"
                <?php if(isset($_SESSION['data']['qualify']) && $_SESSION['data']['qualify'] == "دكتوراه") echo "selected"; ?>>
                دكتوراه</option>
                <option value="بكالوريوس"
                <?php if(isset($_SESSION['data']['qualify']) && $_SESSION['data']['qualify'] == "بكالوريوس") echo "selected"; ?>>
                بكالوريوس</option>
            </select>
            <label class="text-danger w-100">
                    <?php 
                        if(isset($_SESSION['qualify_error'])){
                            echo $_SESSION['qualify_error'];
                        }
                        unset($_SESSION['qualify_error']);
                    ?>
                </label>
            </div>
        </div>
        
        <hr class="bg-light my-5">
        
        
        <div class="row mb-4">
            <div class="col-md-3">
                <h5 class="long-text">نوع الدورات التدريبية الذى يرغب بها المندوب ؟</h5>
            </div>
            <div class="col-md-3 pr-5 online">
                <input type="radio" class="form-check-input" name="training" value="online" 
                <?php if(isset($_SESSION['data']['training']) && $_SESSION['data']['training'] == "online") echo "checked"; ?> >
                <label class="form-check-label mx-3" for="flexRadioDefault1">
                    اونلاين
                </label>
            </div>
            <div class="col-md-3">
                <input type="radio" class="form-check-input" name="training" value="offline"
                <?php if(isset($_SESSION['data']['training']) && $_SESSION['data']['training'] == "offline") echo "checked"; ?> >
                <label class="form-check-label mx-3" for="flexRadioDefault1">
                    فى مركز التدريب فقط
                </label>
            </div>
            <div class="col-md-3">
                <input type="radio" class="form-check-input" name="training" value="online_and_offline"
                <?php if(isset($_SESSION['data']['training']) && $_SESSION['data']['training'] == "online_and_offline") echo "checked"; ?>  >
                <label class="form-check-label mx-3" for="flexRadioDefault1">
                    الاثنان معا
                </label>
            </div>
            <label class="text-danger w-100">
                    <?php 
                        if(isset($_SESSION['training_error'])){
                            echo $_SESSION['training_error'];
                        }
                        unset($_SESSION['training_error']);
                    ?>
                </label>
        </div>

        <hr class="bg-light my-5">

        <div class="row mb-4">
            <div class="col-md-6">
            <input type="password" class="form-control" id="validationDefault01" placeholder="كلمة المرور" name="password">
            <label class="text-danger w-100">
                    <?php 
                        if(isset($_SESSION['password_error'])){
                            echo $_SESSION['password_error'];
                        }
                        unset($_SESSION['password_error']);
                    ?>
                </label>  
        </div>
            <div class="col-md-6">
            <input type="password" class="form-control" id="validationDefault01" placeholder="تأكيد كلمة المرور" name="confirmpassword">
            <label class="text-danger w-100">
                    <?php 
                        if(isset($_SESSION['confirmpassword_error'])){
                            echo $_SESSION['confirmpassword_error'];
                        }
                        unset($_SESSION['confirmpassword_error']);
                    ?>
                </label>  
        </div>
        </div>

        <hr class="bg-light my-5">

        <div class="row mb-4 align-items-center">
            <div class="col-md-6 text-right">
                <button type="submit" class="btn btn-warning w-50 " name="signup">تسجيل مستخدم جديد</button>
            </div>
            <div class="col-md-6 align-items-center">
                <p class="mt-3">لدى حساب بالفعل</p>
            </div>
        </div>
      </form>
   </section>


   <footer>
    <div class="container py-5 pt-3 pb-0 text-light">
    <div class="row py-5">
        <div class="col-md-3">
            <h1 class="text-center">NITG</h1>
            <h5>أكاديمية التدريب المهنى</h5>
            <h5>التابعة لوزارة القوى العاملة المصرية</h5>
        </div>
        <div class="col-md-3">
        <h5>الشركة الوطنية الهندسية للبرمجيات وتكنولوجيا المعلومات</h5>
        <h5>شارع الملك فيصل محافظة الجيزة 168</h5>
        <h5>(+20) 109 1568 240(+20) 1149830855</h5>
        <h5>info@nitg.eg.com</h5>
        </div>
    </div>
    <div class="row px-5 d-flex justify-content-between bg-light text-dark">
    <div class="col-md-8 text-warning">
            كافة الحقوق محفوظة &copy; 2023 الشركة الوطنية الهندسية للبرمجيات وتكنولوجيا المعلومات
        </div>
        <div class="col-md-4 contact-icons">
        <ul class="float-start">
            <li>
            <a class="text-primary"><i class="fa fa-facebook-square"></i></a>
            </li>
            <li>
            <a class="text-danger"><i class="fa fa-youtube-play"></i></a>
            </li>
            <li>
            <a class="text-info"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
            <a class="text-success"><i class="fa fa-whatsapp"></i></a>
            </li>
      </ul>
        </div>
    </div>
    </div>
   </footer>
<script src="CDN/jquery.slim.min.js"></script>
<script src="CDN/popper.min.js"></script>
<script src="CDN/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

<?php
    unset($_SESSION['data']);
?>