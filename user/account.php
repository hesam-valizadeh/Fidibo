<?php
require_once '../inc/actions.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>تنظیمات حساب</title>
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
<?php include "../inc/header.php"; ?>
<div class="row title-user my-5 mx-0 px-0">

    <header class="mt-5  w-100">
        <h1 class="text-right text-white pr-5">حساب کاربر</h1>
        <h2 class="page-title text-right rtl pr-5">با تکمیل مشخصات فردی خود ما را در ارائه خدمات بهتر یاری کنید. </h2>

    </header>

</div>


<section class="rtl text-right">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
               aria-selected="true">تنظیمات حساب</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
               aria-selected="false">سوابق خرید</a>
        </li>

    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active mb-5 pb-5" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h4 class="text-info pr-5 pt-5">مشخصات فردی</h4>
            <hr class="mb-5">
            <!--            star-form-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" novalidate>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <input type="text" name="frname" class="form-control <?php if(!empty($frnameErr)) echo 'is-invalid'; ?>" placeholder="نام">
                                    <div class="invalid-feedback">
                                        <?php echo $frnameErr ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="laname" class="form-control <?php if(!empty($lanameErr)) echo 'is-invalid'; ?>" placeholder="نام خانوادگی">
                                    <div class="invalid-feedback">
                                        <?php echo $lanameErr ?>
                                    </div>
                                </div>
                            </div>

                                <div class="mb-3"> تاریخ تولد</div>
                            <div class="row mb-5">
                                <div class="col-md-2">
                                    <select name="day" class="day form-control">
                                        <option value="">روز</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select name="month" class="month form-control">
                                        <option value="">ماه</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>

                                <div class="col-md-2">
                                    <select name="year" class="year form-control">
                                        <option value="">سال</option>
                                        <option value="1300">1300</option>
                                        <option value="1301">1301</option>
                                        <option value="1302">1302</option>
                                        <option value="1303">1303</option>
                                        <option value="1304">1304</option>
                                        <option value="1305">1305</option>
                                        <option value="1306">1306</option>
                                        <option value="1307">1307</option>
                                        <option value="1308">1308</option>
                                        <option value="1309">1309</option>
                                        <option value="1310">1310</option>
                                        <option value="1311">1311</option>
                                        <option value="1312">1312</option>
                                        <option value="1313">1313</option>
                                        <option value="1314">1314</option>
                                        <option value="1315">1315</option>
                                        <option value="1316">1316</option>
                                        <option value="1317">1317</option>
                                        <option value="1318">1318</option>
                                        <option value="1319">1319</option>
                                        <option value="1320">1320</option>
                                        <option value="1321">1321</option>
                                        <option value="1322">1322</option>
                                        <option value="1323">1323</option>
                                        <option value="1324">1324</option>
                                        <option value="1325">1325</option>
                                        <option value="1326">1326</option>
                                        <option value="1327">1327</option>
                                        <option value="1328">1328</option>
                                        <option value="1329">1329</option>
                                        <option value="1330">1330</option>
                                        <option value="1331">1331</option>
                                        <option value="1332">1332</option>
                                        <option value="1333">1333</option>
                                        <option value="1334">1334</option>
                                        <option value="1335">1335</option>
                                        <option value="1336">1336</option>
                                        <option value="1337">1337</option>
                                        <option value="1338">1338</option>
                                        <option value="1339">1339</option>
                                        <option value="1340">1340</option>
                                        <option value="1341">1341</option>
                                        <option value="1342">1342</option>
                                        <option value="1343">1343</option>
                                        <option value="1344">1344</option>
                                        <option value="1345">1345</option>
                                        <option value="1346">1346</option>
                                        <option value="1347">1347</option>
                                        <option value="1348">1348</option>
                                        <option value="1349">1349</option>
                                        <option value="1350">1350</option>
                                        <option value="1351">1351</option>
                                        <option value="1352">1352</option>
                                        <option value="1353">1353</option>
                                        <option value="1354">1354</option>
                                        <option value="1355">1355</option>
                                        <option value="1356">1356</option>
                                        <option value="1357">1357</option>
                                        <option value="1358">1358</option>
                                        <option value="1359">1359</option>
                                        <option value="1360">1360</option>
                                        <option value="1361">1361</option>
                                        <option value="1362">1362</option>
                                        <option value="1363">1363</option>
                                        <option value="1364">1364</option>
                                        <option value="1365">1365</option>
                                        <option value="1366">1366</option>
                                        <option value="1367">1367</option>
                                        <option value="1368">1368</option>
                                        <option value="1369">1369</option>
                                        <option value="1370">1370</option>
                                        <option value="1371">1371</option>
                                        <option value="1372">1372</option>
                                        <option value="1373">1373</option>
                                        <option value="1374">1374</option>
                                        <option value="1375">1375</option>
                                        <option value="1376">1376</option>
                                        <option value="1377">1377</option>
                                        <option value="1378">1378</option>
                                        <option value="1379">1379</option>
                                        <option value="1380">1380</option>
                                        <option value="1381">1381</option>
                                        <option value="1382">1382</option>
                                        <option value="1383">1383</option>
                                        <option value="1384">1384</option>
                                        <option value="1385">1385</option>
                                        <option value="1386">1386</option>
                                        <option value="1387">1387</option>
                                        <option value="1388">1388</option>
                                        <option value="1389">1389</option>
                                        <option value="1390">1390</option>
                                        <option value="1391">1391</option>
                                        <option value="1392">1392</option>
                                        <option value="1393">1393</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-5 ">
                                <span class="pr-3">جنسیت</span>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline1" checked>آقا</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline2">خانم</label>
                                </div>
                            </div>
                            <button class="btn btn-success px-5 mt-5">ذخیره</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <h2 class="my-5 p-5 text-center">هیچ سابقه خریدی وجود ندارد </h2>
        </div>
    </div>


    </div>
</section>


<?php include "../inc/footer.php"; ?>

<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/javascript.js"></script>
<script src="../js/owl.carousel.min.js"></script>
</body>
</html>


