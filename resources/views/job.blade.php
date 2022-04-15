<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB</title>
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
</head>
<body>
    <nav class="p-3 navbar navbar-inverse navbar-expand-md navbar-fixed-top navbar-dark">
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="nav  text-center">
                <li class="nav-itme"><a class="nav-link" href="/index">الرئسية</a></li>
                <li class="nav-itme"><a class="nav-link" href="">من نحن</a></li>
                <li class="nav-itme"><a class="nav-link" href="/job">الوظائف</a></li>
                <li class="nav-itme"><a class="nav-link" href="">الخدمات</a></li>
                <li class="nav-itme"><a class="nav-link" href="">الشركاء والشركات</a></li>
                <li class="nav-itme"><a class="nav-link" href="">تواصل معنا</a></li>
                <li class="nav-itme"><a class="nav-link" href="/login">تسجيل الدخول أو إنشاء حساب</a></li>
            </ul>
        </div>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
    </nav>


    <div class="m-4 p-4 left">
        <div>
            <h2 class="p-5 mark">الوظائف التي يقدمها الموقع</h2>
        </div>
        <div>
            <label >إختيار تصنيف البحث</label>
            <select id="detils">
                <option value="all">الكل</option>
                <option value="city">المحافظة</option>
                <option value="job">الوظيفة</option>
                <option value="cont">جهة العمل</option>
            </select>
            <input id="search" type="text" placeholder="إبحث">
        </div>
       

        <div id="all-job" class="row m-3 p-4">
            <div class="jo col-lg-3 col-md-3 col-sm-4 col-xs-10 ">
                <div class="px-3 card m-3">
                    <div class="card-header">
                        <img class="card-img-top" src="img/تنزيل.jpg" width="200">
                    </div>
                    <div class="card-body">
                        <h4 class=" card-text">المسمى الوظفي: <span class="wok all-ser h6"> سكرتير </span></h4>
                        <h4 class=" card-text">المحافظة: <span class="h6 all-ser cty">صنعاء </span></h4>
                        <h4 class=" card-text">جهة العمل : <span class="h6 all-ser co ">مستشفى </span></h4>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">لمعرفة التفاصيل</a>
                    </div>
                </div>

            </div>

            <div class="jo col-lg-3 col-md-3 col-sm-4 col-xs-10 ">
                <div class="px-3 card m-3">
                    <div class="card-header">
                        <img class="card-img-top" src="img/تنزيل.jpg" width="150">
                    </div>
                    <div class="card-body">
                        <h4 class=" card-text">المسمى الوظفي: <span class="wok all-ser h6">مدير مشروع </span></h4>
                        <h4 class=" card-text">المحافظة: <span class="h6 all-ser cty">حضرموت </span></h4>
                        <h4 class=" card-text">جهة العمل : <span class="h6 all-ser co ">منظمة GIZ </span></h4>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">لمعرفة التفاصيل</a>
                    </div>
                </div>
            </div>

            <div class="jo col-lg-3 col-md-3 col-sm-4 col-xs-10 ">
                <div class="px-3 card m-3">
                    <div class="card-header">
                        <img class="card-img-top" src="img/تنزيل.jpg" width="200">
                    </div>
                    <div class="card-body">
                        <h4 class=" card-text">المسمى الوظفي: <span class="wok all-ser h6"> علاقات عامة </span></h4>
                        <h4 class=" card-text">المحافظة: <span class="h6 all-ser cty">صنعاء </span></h4>
                        <h4 class=" card-text">جهة العمل : <span class="h6 all-ser co ">شركة الصرافة </span></h4>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">لمعرفة التفاصيل</a>
                    </div>
                </div>

            </div>

            <div class="jo col-lg-3 col-md-3 col-sm-4 col-xs-10 ">
                <div class="px-3 card m-3">
                    <div class="card-header">
                        <img class="card-img-top" src="img/تنزيل.jpg" width="200">
                    </div>
                    <div class="card-body">
                        <h4 class=" card-text">المسمى الوظفي: <span class="wok all-ser h6">مدير مشروع </span></h4>
                        <h4 class=" card-text">المحافظة: <span class="h6 all-ser cty">تعز</span></h4>
                        <h4 class=" card-text">جهة العمل : <span class="h6 all-ser co ">منظمة GIZ </span><h4>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">لمعرفة التفاصيل</a>
                    </div>
                </div>

            </div>

            <div class="jo col-lg-3 col-md-3 col-sm-4 col-xs-10 ">
                <div class="px-3 card m-3">
                    <div class="card-header">
                        <img class="card-img-top" src="img/تنزيل.jpg" width="200">
                    </div>
                    <div class="card-body">
                        <h4 class=" card-text ">المسمى الوظفي: <span class="wok all-ser h6"> مشرف </span></h4>
                        <h4 class=" card-text">المحافظة: <span class="h6 all-ser cty">حضرموت</span></h4>
                        <h4 class="card-text">جهة العمل : <span class="h6 all-ser co "> منظمة الأغذية العالمية</span></h4>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">لمعرفة التفاصيل</a>
                    </div>
                </div>

            </div>

            <div class="jo col-lg-3 col-md-3 col-sm-4 col-xs-10 ">
                <div class="px-3 card m-3">
                    <div class="card-header">
                        <img class="card-img-top" src="img/تنزيل.jpg" width="200">
                    </div>
                    <div class="card-body">
                        <h4 class=" card-text">المسمى الوظفي: <span class="wok all-ser h6">محاسب </span></h4>
                        <h4 class=" card-text">المحافظة: <span class="h6 all-ser cty">تعز </span></h4>
                        <h4 class=" card-text">جهة العمل : <span class="h6 all-ser co ">الغرفة التجارية </span></h4>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">لمعرفة التفاصيل</a>
                    </div>
                </div>
             
            </div>


        </div>
    </div>




    <div class="row m-5">
        <h1 class="mx-3 p-3 mark">الأشخاص الذين حصلوا على وظائف عبر فروعنا</h1>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 my-3 ">
            <div class="mx-1 card text-center">
                <div class="card-header">
                    <img class="card-img-top" src="img/user.png" width="100" height="150">
                </div>
                <div class="card-body text-center">
                    <p class="card-titil h4">محمد </p>
                    <p class="card-text h5">حضرموت</p>
                    <p class="card-text h5">منظمة GIZ</p>
                </div>
            </div>
           
            
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 my-3 ">
            <div class="mx-1 card text-center">
                <div class="card-header">
                    <img class="card-img-top" src="img/user.png" width="100" height="150">
                </div>
                <div class="card-body text-center">
                    <p class="card-titil h4">فاطمة </p>
                    <p class="card-text h5">صنعاء</p>
                    <p class="card-text h5">شركة z </p>
                </div>
            </div>
           
            
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 my-3 ">
            <div class="mx-1 card text-center">
                <div class="card-header">
                    <img class="card-img-top" src="img/user.png" width="100" height="150">
                </div>
                <div class="card-body text-center">
                    <p class="card-titil h4">فاطمة </p>
                    <p class="card-text h5">صنعاء</p>
                    <p class="card-text h5">شركة z </p>
                </div>
            </div>
           
            
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 my-3 ">
            <div class="mx-1 card text-center">
                <div class="card-header">
                    <img class="card-img-top" src="img/user.png" width="100" height="150">
                </div>
                <div class="card-body text-center">
                    <p class="card-titil h4">سعيد </p>
                    <p class="card-text h5">تعز</p>
                    <p class="card-text h5">منظمة الأغذية العالمية</p>
                </div>
            </div>
           
            
        </div>
    </div>






    <footer id="footer" class=" u-rel mt-3 mx-2 p-4">
        <div class=" p10y  text-center text-muted bg-dark align-center">
            <div class="row">
                <h3>فروعنا</h3>
                
                    <p>فرع الأردن</p>
                    <p>فرع المملكة العربية السعودية</p>
                    <p>فرع المغرب العربي</p>
                
            </div>
            <div class="row my-2">
                <p class="h3"> وجهتك الأولى للبحث عن وظيفة</p>
            </div>
        </div>
        <div class="row p10y ">
            <p class="t-mute t-xsmall m0-d text-center mb-2">
                © <b>2000-2022 Job.com, Inc.</b> جميع الحقوق محفوظة.	<a class="is-gray" href="#">شروط الاستخدام</a> -
                <a class="is-gray" href="#"> بيان الخصوصية </a> -
                <a class="is-gray" href="#"> سياسة ملفات تعريف الارتباط </a> -
                <a class="is-gray" href="#"> تحذير أمني </a>
                </p>

        </div>

    </footer>

    
    <script>
        var jobs=document.getElementsByClassName("jo");
        var all=document.getElementsByClassName("all-ser")
        var citis= document.getElementsByClassName("cty");
        var work =document.getElementsByClassName("wok");
        var con =document.getElementsByClassName("co");
        var detil;
        var i ,n=0,p=0;


        $(document).ready(function(){

            $('#detils').on('change',function(){
                
                alert($("#detils").val());

                if ($("#detils").val()=="all") {
                    
                    $("#search").on('keyup',function(){
                        detil=$('#search').val().toLowerCase();
                       
                        for (let ind = 0; ind < all.length; ind++) {
                            txtValue = all[ind].textContent || all[ind].innerText;
                            if (txtValue.toLowerCase().indexOf(detil) > -1) {
                                jobs[ind].style.display = "";
                            } else {
                               jobs[ind].style.display = "none";
                            }
                        }
                    });
                
                } 
                else if ($("#detils").val()=="city") {
                    
                    $("#search").on('keyup', function () {
                        detil = $('#search').val().toLowerCase();
                        
                        for (let ind = 0; ind < citis.length; ind++) {
                            txtValue = citis[ind].textContent || citis[ind].innerText;
                            if (txtValue.toLowerCase().indexOf(detil) > -1) {
                                jobs[ind].style.display = "";
                            } else {
                               jobs[ind].style.display = "none";
                            }
                        }
                    });
                
                }
                else if ($("#detils").val()=="job") {
                    
                    $("#search").on('keyup',function(){
                        detil = $('#search').val().toLowerCase();
                        
                        for (let ind = 0; ind < work.length; ind++) {
                            txtValue = work[ind].textContent || work[ind].innerText;
                            if (txtValue.toLowerCase().indexOf(detil) > -1) {
                                jobs[ind].style.display = "";
                            } else {
                               jobs[ind].style.display = "none";
                            }
                        }
                        
                    });
                
                }
                else if ($("#detils").val()=="cont") {
                    
                    $("#search").on('keyup',function(){
                        detil = $('#search').val().toLowerCase();
                        
                        for (let ind = 0; ind < con.length; ind++) {
                            txtValue = con[ind].textContent || con[ind].innerText;
                            if (txtValue.toLowerCase().indexOf(detil) > -1) {
                                jobs[ind].style.display = "";
                            } else {
                               jobs[ind].style.display = "none";
                            }
                        }
                    });
                
                }

            });
           

        });
    </script>
</body>
</html>