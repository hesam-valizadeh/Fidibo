<?php
require_once '../inc/actions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>تماس با ما</title>
    <meta charset="utf-8">
    <meta name="keywords" content="خرید آنلاین کتاب های معروف دنیا">
    <meta name="description" content="">
    <meta name="author" content="حسام ولی زاده">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="HandheldFriendly" content="True">
    <link rel="shortcut icon" href="../img/fivicon/fiv.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="../img/fivicon/fiv.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../fontawsmen/css/all.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
</head>

<?php include "../inc/header.php"; ?>

<section class="my-5">
    <div class="container-fluid">
        <div class="row">

            <header class="mt-5 title-contact w-100">
                <h1 class="text-right text-white">تماس با ما</h1>
                <h2 class="page-title text-right rtl">آدرس : تهران، خیابان شریعتی، روبرو حسینیه ارشاد، کوچه هدیه، پلاک ۱۱، واحد ۲ - ۰۲۱۲۶۴۱۴۷۴۳ </h2>

            </header>
        </div>
    </div>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-right rtl">
                    <h6 class="">نوع دستگاه</h6>
                    <form class="" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" novalidate >

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" checked>
                            <label class="custom-control-label" for="customRadioInline1">Android</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">IOS</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline3">Windows</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline4" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline4">کتاب‌خوان</label>
                        </div>
                        <div class="col my-3 ">
                            <input type="text" class="form-control <?php if(!empty($devicenameErr)) echo 'is-invalid'; ?>"  name="idevicename"  id="validationCustom01" value="<?php if(!empty(['idevicename'])) echo $_POST['idevicename']?>" placeholder="نام دستگاه" >
                            <div class="invalid-feedback">
                                <?php echo $devicenameErr ?>
                            </div>
                        </div>
                        <select class="custom-select custom-select-sm mb-3 ">
                            <option selected>نوع ارتباط</option>
                            <option value="1">نمیدانم</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="custom-select custom-select-sm mb-3 ">
                            <option selected>نوع مشکل</option>
                            <option value="1">مشکل در پرداخت</option>
                            <option value="2">مشکل در دانلود کتاب</option>
                            <option value="3">کتاب خریدم به کتابخانه اضافه نشد</option>
                            <option value="4">اعتبار خریدم به حسابم اضافه نشد</option>
                            <option value="2">درخواست کتاب خاصی رو داریم</option>
                            <option value="2">سایر موارد</option>

                        </select>
                        <textarea class="form-control <?php if(!empty($questionErr)) echo 'is-invalid'; ?>" id="" cols="77" rows="2"  name="iquest"  placeholder="شرح مشکل"><?php if (!empty($_POST['iquest'])) echo $_POST['iquest']?></textarea>
                        <div class="invalid-feedback">
                            <?php echo $questionErr?>
                        </div>
                        <input type="text" name="iname" value="<?php if(!empty(['iname'])) echo $_POST['iname']?>" class="form-control mt-3 <?php if(!empty($fnameErr)) echo 'is-invalid'; ?>" id="validationCustom01" placeholder="نام و نام خانوادگی " >
                            <div class="invalid-feedback">
                                <?php echo $fnameErr ?>
                            </div>
                            <input type="text" name="iemail" value="<?php if(!empty(['iemail'])) echo $_POST['iemail']?>"  class="form-control my-3 <?php if(!empty($emailErr)) echo 'is-invalid'; ?>" id="validationCustom01" placeholder="آدرس ایمیل" >
                            <div class="invalid-feedback">
                                <?php echo $emailErr ?>
                            </div>
                         
                        <button class="btn btn-success" type="submit" name="sendreq">ارسال</button>
                    </form>
                </div>
                <div class="col-md-6 text-right">
                    <h6>پشتیبانی تلفنی(۹ الی ۱۸) </h6>
                    <h6>021-111111</h6>
                    <div class="accordion" id="accordionExample">

                        <div class="">
                            <div class="" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        اشکال در استفاده از نرم افزار یا پرداخت
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    لطفا در صورت وجود هرگونه سوال یا ابهامی ، ابتدا قسمت پرسش های متداول را مطالعه کنید، اگر پاسخ مشکل خود را نیافتید، فرم را تکمیل و ارسال کنید.
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        درباره فیدیبوک-اولین کتابخوان فارسی
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body text-right">
                                    <ul>
                                        <li class="list-group-item"><a href=""> آیا می‌توانم کتاب‌های خودم (کتاب‌های غیر فیدیبویی) را روی فیدیبوک بخوانم؟</a></li>
                                        <li class="list-group-item"><a href=""> آیا کتاب‌های کیندل روی فیدیبوک قابل خواندن است؟ </a></li>
                                        <li class="list-group-item"><a href=""> بازتاب نور روی صفحه فیدیبوک چگونه است؟</a></li>
                                        <li class="list-group-item"><a href=""> آیا صفحه فیدیبوک لمسی است؟</a></li>
                                        <li class="list-group-item"><a href=""> آیا فیدیبوک دیشکنری دارد؟ </a></li>
                                        <li class="list-group-item"><a href=""> آیا نرم‌افزارهای دیگر روی فیدیبوک نصب می‌شوند؟</a></li>
                                        <li class="list-group-item"><a href=""> در تاریکی مطلق چگونه می‌توانم نور صفحه را بیابم؟</a></li>
                                        <li class="list-group-item"><a href=""> آیا می‌توانم یادداشت های را غیر از درون ریدر در جایی دیگر ثبت کنم؟</a></li>
                                        <li class="list-group-item"><a href=""> فیدیبوک امکان استفاده از مرورگر، وب گردی یا ایمیل را داراست؟</a></li>
                                        <li class="list-group-item"><a href=""> چطور می‌توانم فیدیبوک را به مودم معرفی کنم؟</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        پرسش های متداول
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>لطفا موارد زیر را مطالعه کرده و در صورتی که پاسخ مشکل خود را نیافتید، این فرم را تکمیل کنید.</p>
                                    <ul>
                                        <li class="list-group-item"><a href=""> آیا می‌توانم کتاب‌های خودم (کتاب‌های غیر فیدیبویی) را روی فیدیبوک بخوانم؟</a></li>
                                        <li class="list-group-item"><a href=""> آیا کتاب‌های کیندل روی فیدیبوک قابل خواندن است؟ </a></li>
                                        <li class="list-group-item"><a href=""> آیا کتاب‌های کیندل روی فیدیبوک قابل خواندن است؟ </a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsezero" aria-expanded="false" aria-controls="collapsezero">
                                        پیشنهاد یا انتقاد
                                    </button>
                                </h2>
                            </div>
                            <div id="collapsezero" class="collapse" aria-labelledby="headingzero" data-parent="#accordionExample">
                                <div class="card-body">
                                    فیدیبو از هرگونه انتقاد یا پیشنهادی صمیمانه استقبال می کند. کافی است فرم روبرو را پر کنید و به جای شرح مشکل ، پیشنهاد یا انتقاد خود را بنویسید.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </article>
</section>

<!-------------footer------------->
<?php include "../inc/footer.php"; ?>

<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/javascript.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>

</html>
