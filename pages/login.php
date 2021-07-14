<?php
require_once '../inc/actions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ورود-ثبت نام</title>
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

<body>

<!-- Modal -->
<div class=" " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm rounded shadow" role="document">
        <div class="modal-content text-right">
            <div class="modal-header m-auto ">
                <h5 class="modal-title " id="exampleModalLabel">ورود در فیدیبو</h5>

            </div>
            <div class="modal-body">
                <button class="btn btn-danger text-center btn-block  my-3"> ورود با اکانت گوگل</button>

                <div class="text-center py-3">
                    <h5>ثبت نام</h5>
                </div>
                <div class="modal-footer">
                    <form class="" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                          novalidate>
                        <div class="form-group">
                            <label for="exampleInputEmail1">آدرس ایمیل</label>
                            <input type="email" name="iemail2" required
                                   value="<?php if (!empty(['iemail2'])) echo $_POST['iemail2'] ?>"
                                   class="form-control <?php if (!empty($emailErr2)) echo 'is-invalid'; ?>"
                                   id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="youremail@gmail.com">
                            <div class="invalid-feedback">
                                <?php echo $emailErr2 ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">رمز عبور (حداقل ۶ حرف)</label>
                            <input type="password" name="ipass"
                                   class="form-control <?php if (!empty($pass)) echo 'is-invalid'; ?>"
                                   id="exampleInputPassword1" required
                                   placeholder=""
                                   size="100">
                            <div class="invalid-feedback">
                                <?php echo $passErr ?>
                            </div>
                        </div>

                        <button class="btn btn-success" type="submit" name="login" formaction="../user/account.php">ثبت نام</button>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/javascript.js"></script>
</body>

</html>
