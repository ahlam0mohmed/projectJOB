<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.min.js"></script>
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


    <div class="box text-center p-5 m-5">
        <div class="card p-5">
            <div class="card-header">
                <h1>إنشاء حساب مجاني</h1>
                <p>هل لديك حساب؟ <a href="#">ادخل إليه الآن</a></p>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-item ">
                        <p class="form-label h5" >الاسم الاول</p>
                        <input placeholder="الاسم الأول" class="input"  type="text" maxlength="100">
                    </div>
                    <div class="form-item ">
                        <p class="form-label h5" >اسم العائلة</p>
                        <input placeholder="اسم العائلة" class="input"  type="text" maxlength="100">

                    </div>
                    <div class="form-item ">
                        <p class="form-label h5" >البريدالإلكتروني</p>
                        <input placeholder="you@example.com" class="input"  type="email" maxlength="100">
                    </div>
                    <div class="form-item ">
                        <p class="form-label h5" >كلمة السر</p>
                        <input placeholder="كلمة السر"  class="input" type="password" maxlength="30" >
                    </div>
                    
                </form>
            </div>
            <div class="card-footer">
                <button type="submit"  class="btn u-expanded-m bg-primary mx-5" ><a href="/per-info"><h4> تابع لإنشاء سيرتك الذاتية  </h4></a></button>
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

    <script src="js/app.js"></script>
</body>
</html>