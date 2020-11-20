

<!--database starts-->
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>


<!--database ends-->

<!DOCTYPE html>                                               
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Mobile Comparison site</title>

<!--Header tag-->

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!--middle tag-->  

<link rel="stylesheet" href="miniproject.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<link href="styles.css" rel="stylesheet">

<!--Footer tag-->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="footerstyle.css" rel="stylesheet">

<!--NewsLetter tag-->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="newsetterstyle.css" rel="stylesheet">


</style>
</head>

<body>



    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="miniprj.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>

<!--real code-->


<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="#" class="navbar-brand">Tech<b>BUZZ</b></a>  		

    <!-- Collection of nav links, forms, and other content for toggling -->

    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
      <div class="navbar-nav">
        <a href="miniprj.php" class="nav-item nav-link">Home</a>
        <a href="page2.php" class="nav-item nav-link">Mobiles & Tablets</a>			
        <a href="page3.php" class="nav-item nav-link active">Top 10</a>
        <a href="page4.php" class="nav-item nav-link">Best</a>
        <a href="page5.php" class="nav-item nav-link">News & Reviews</a>
        <a href="page6.php" class="nav-item nav-link">Laptops</a>
        <a href="page7.php" class="nav-item nav-link">Latest Items</a>
        <a href="page8.php" class="nav-item nav-link">Our Team</a>

      </div>
      <form class="navbar-form form-inline">
        <div class="input-group search-box">								
          <input type="text" id="search" class="form-control" placeholder="Search here...">
          <div class="input-group-append">
            <span class="input-group-text">
              <i class="material-icons">&#xE8B6;</i>
            </span>
          </div>
        </div>
      </form>
      <div class="navbar-nav ml-auto action-buttons">
        <div class="nav-item dropdown">
          <a href="login.php" data-toggle="action-buttons" class="nav-link dropdown-toggle mr-4">Login</a>
        </div>
      </div>

    </div>
    <div class="navbar-nav ml-auto action-buttons">
      <a href="register.php" data-toggle="action-buttons" class="nav-link dropdown-toggle mr-4">Sign up</a>
      </div>

    <div class="navbar-nav ml-auto action-buttons">
      <a href="logout.php" data-toggle="action-buttons" class="nav-link dropdown-toggle mr-4">Log Out</a>
      </div>

    </div>
    </nav>
    </body>

 <!--cards for android starts-->



 <br><h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Suggested Android Phones</h1> <br> 
 <section class="text-gray-700 body-font">
  <div class="card-deck">
    <div class="card bg-primary">
      <div class="card-body text-center">
        <h4 class="card-title">SAMSUNG M51</h4>
        <img class="card-img-top" src="android_phones/samsungm51.png" alt="Card image" width="100px">
        <p class="card-text">Meanest Monster is here. Click below to find out !</p>
        <a href="https://www.flipkart.com/samsung-galaxy-m51-electric-blue-128-gb/p/itme2ec4f481bae3?pid=MOBFVVEJRYZ73YSF&lid=LSTMOBFVVEJRYZ73YSFYFMKYS&marketplace=FLIPKART&srno=s_1_1&otracker=search&otracker1=search&fm=SEARCH&iid=a9aa5ca1-7d7e-4a39-ba5e-825d571a18c2.MOBFVVEJRYZ73YSF.SEARCH&ppt=sp&ppn=sp&ssid=0d2cnfphp7fovrb41605867752357&qH=2c89e3c32ec2ea4d" class="btn btn-primary">See Profile</a>
      </div>
    </div>

    <div class="card bg-warning">
      <div class="card-body text-center">
        <h4 class="card-title">ONE PLUS 8 PRO</h4>
        <img class="card-img-top" src="android_phones/oneplus8pro.png" alt="Card image" width="100px">
        <p class="card-text">Never Settle with Newest OnePlus</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>

    <div class="card bg-success">
      <div class="card-body text-center">
        <h4 class="card-title">SAMSUNG GALAXY Z FOLD2 5G</h4>
        <img class="card-img-top" src="android_phones/galaxyzfold2.png" alt="Card image" width="100px">
        <p class="card-text">Meanest Monster is here. Click below to find out !</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>

    <div class="card bg-danger">
      <div class="card-body text-center">
        <h4 class="card-title">SAMSUNG GALAXY NOTE20 5G</h4>
        <img class="card-img-top" src="android_phones/note20ultra.png" alt="Card image" width="100px">
        <p class="card-text">Meanest Monster is here. Click below to find out !</p>
        <a href="" class="btn btn-primary">See Profile</a>
      </div>
    </div>

    <div class="card bg-success">
      <div class="card-body text-center">
        <h4 class="card-title">ASUS ROG PHONE 3</h4>
        <img class="card-img-top" src="android_phones/rogphone3.png" alt="Card image" width="100px">
        <p class="card-text">Meanest Monster is here. Click below to find out !</p>
        <a href="https://www.flipkart.com/asus-rog-phone-3-black-128-gb/p/itmf8623d755871d?pid=MOBFUXPBV3TFMPAH&lid=LSTMOBFUXPBV3TFMPAH63D3RA&marketplace=FLIPKART&srno=s_1_1&otracker=AS_QueryStore_OrganicAutoSuggest_1_7_na_na_na&otracker1=AS_QueryStore_OrganicAutoSuggest_1_7_na_na_na&fm=SEARCH&iid=b80bcfa3-8d21-46e6-bb6e-60f1e02d10a6.MOBFUXPBV3TFMPAH.SEARCH&ppt=sp&ppn=sp&ssid=ocn7huh1eud8blz41605373915001&qH=1f568d0b548915af" class="btn btn-primary">See Profile</a>
      </div>
    </div>
  </div> 
</section>

<!--Cards For Ios Starts-->


<br><h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">IOS Phones</h1> 
 <section class="text-gray-700 body-font">
  <div class="card-deck">
    <div class="card bg-primary">
      <div class="card-body text-center">
        <h4 class="card-title">IPHONE 12 PRO</h4>
        <img class="card-img-top" src="ios_phones/iphone12pro.png" alt="Card image" width="100px"> <br>
        <p class="card-text">Newest Iphone Luanched </p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>

    <div class="card bg-warning">
      <div class="card-body text-center">
        <h4 class="card-title">IPHONE 12 MINI</h4>
        <img class="card-img-top" src="ios_phones/iphone12mini.png" alt="Card image" width="100px"> <br>
        <p class="card-text">Smallest Iphone ever</p> <br> 
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>

    <div class="card bg-success">
      <div class="card-body text-center">
        <h4 class="card-title">IPHONE 11 PRO MAX</h4>
        <img class="card-img-top" src="ios_phones/iphone11promax.png" alt="Card image" width="100px">  <br>
        <p class="card-text">Still powerfull</p> <br>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>

    <div class="card bg-danger">
      <div class="card-body text-center">
        <h4 class="card-title">IPHONE XR</h4>
        <img class="card-img-top" src="ios_phones/iphone xr.png" alt="Card image" width="100px"> <br>
        <p class="card-text">Best entry level phone till now</p> <br>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>

    <div class="card bg-success">
      <div class="card-body text-center">
        <h4 class="card-title">IPHONE SE 2020</h4>
        <img class="card-img-top" src="ios_phones/iphone se2020.png" alt="Card image" width="100px"><br>
        <p class="card-text">Value for money smartphone ! </p> <br>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>
  </div> 
</section>

<!--Comparison page-->
  
<div class="container pb-5 mb-2">
  <div class="comparison-table">
      <table class="table table-bordered">
          <thead class="bg-secondary">
              <tr>
                  <td class="align-middle">
                      <select class="form-control custom-select" id="compare-criteria" data-filter="trigger">
                          <option value="all">Comparison criteria *</option>
                          <option value="summary">Summary</option>
                          <option value="general">General</option>
                          <option value="multimedia">Multimedia</option>
                          <option value="performance">Performance</option>
                          <option value="design">Design</option>
                          <option value="display">Display</option>
                          <option value="storage">Storage</option>
                          <option value="camera">Camera</option>
                          <option value="battery">Battery</option>
                          <option value="price">Price &amp; rating</option>
                      </select><small class="form-text text-muted">* Choose criteria to filter table below.</small>
                      <div class="pt-3">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" id="differences">
                              <label class="custom-control-label" for="differences">Show differences only</label>
                          </div>
                      </div>
                  </td>
                  <td>
                      <div class="comparison-item"><span class="remove-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
                          <a class="comparison-item-thumb" href="shop-single.html"><img src="https://via.placeholder.com/160x160/FF0000/000000" alt="Apple iPhone Xs Max"></a><a class="comparison-item-title" href="shop-single.html">Apple iPhone Xs Max</a>
                          <button class="btn btn-pill btn-outline-primary btn-sm" type="button" data-toggle="toast" data-target="#cart-toast">Add to Cart</button>
                      </div>
                  </td>
                  <td>
                      <div class="comparison-item"><span class="remove-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
                          <a class="comparison-item-thumb" href="shop-single.html"><img src="https://via.placeholder.com/160x160/1E90FF/000000" alt="Google Pixel 3 XL"></a><a class="comparison-item-title" href="shop-single.html">Google Pixel 3 XL</a>
                          <button class="btn btn-pill btn-outline-primary btn-sm" type="button" data-toggle="toast" data-target="#cart-toast">Add to Cart</button>
                      </div>
                  </td>
                  <td>
                      <div class="comparison-item"><span class="remove-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
                          <a class="comparison-item-thumb" href="shop-single.html"><img src="https://via.placeholder.com/160x160/FF8C00/000000" alt="Samsung Galaxy S10+"></a><a class="comparison-item-title" href="shop-single.html">Samsung Galaxy S10+</a>
                          <button class="btn btn-pill btn-outline-primary btn-sm" type="button" data-toggle="toast" data-target="#cart-toast">Add to Cart</button>
                      </div>
                  </td>
              </tr>
          </thead>
          <tbody id="summary" data-filter="target">
              <tr class="bg-secondary">
                  <th class="text-uppercase">Summary</th>
                  <td><span class="text-dark font-weight-semibold">Apple iPhone Xs Max</span></td>
                  <td><span class="text-dark font-weight-semibold">Google Pixel 3 XL</span></td>
                  <td><span class="text-dark font-weight-semibold">Samsung Galaxy S10+</span></td>
              </tr>
              <tr>
                  <th>Performance</th>
                  <td>Hexa Core</td>
                  <td>Octa Core</td>
                  <td>Octa Core</td>
              </tr>
              <tr>
                  <th>Display</th>
                  <td>6.5-inch</td>
                  <td>6.3-inch</td>
                  <td>6.4-inch</td>
              </tr>
              <tr>
                  <th>Storage</th>
                  <td>64 GB</td>
                  <td>64 GB</td>
                  <td>128 GB</td>
              </tr>
              <tr>
                  <th>Camera</th>
                  <td>Dual 12-megapixel</td>
                  <td>12.2-megapixel</td>
                  <td>12,16,12-megapixel</td>
              </tr>
              <tr>
                  <th>Battery</th>
                  <td>3,174 mAh</td>
                  <td>3,430 mAh</td>
                  <td>4,100 mAh</td>
              </tr>
          </tbody>
          <tbody id="general" data-filter="target">
              <tr class="bg-secondary">
                  <th class="text-uppercase">General</th>
                  <td><span class="text-dark font-weight-semibold">Apple iPhone Xs Max</span></td>
                  <td><span class="text-dark font-weight-semibold">Google Pixel 3 XL</span></td>
                  <td><span class="text-dark font-weight-semibold">Samsung Galaxy S10+</span></td>
              </tr>
              <tr>
                  <th>Quick charging</th>
                  <td>Yes</td>
                  <td>Yes</td>
                  <td>Yes</td>
              </tr>
              <tr>
                  <th>Operating system</th>
                  <td>iOS v12</td>
                  <td>Android v9.0 Pie </td>
                  <td>Android v9.0 with Samsung One UI </td>
              </tr>
              <tr>
                  <th>Sim slots</th>
                  <td>Single SIM, GSM</td>
                  <td>Single SIM, GSM</td>
                  <td>Hybrid SIM slot, GSM</td>
              </tr>
              <tr>
                  <th>Launch date</th>
                  <td>September 12, 2018 (Official)</td>
                  <td>November 1, 2018 (Official)</td>
                  <td>February 20, 2019 (Official)</td>
              </tr>
              <tr>
                  <th>Sim size</th>
                  <td>SIM1: Nano</td>
                  <td>SIM1: Nano</td>
                  <td>SIM1: Nano SIM2: Nano (Hybrid)</td>
              </tr>
              <tr>
                  <th>Network</th>
                  <td>4G: Available (supports Indian bands) 3G: Available, 2G: Available</td>
                  <td>4G: Available (supports Indian bands) 3G: Available, 2G: Available</td>
                  <td>4G: Available (supports Indian bands) 3G: Available, 2G: Available</td>
              </tr>
              <tr>
                  <th>Fingerprint sensor</th>
                  <td>None (Face ID)</td>
                  <td>Back cover</td>
                  <td>In-screen</td>
              </tr>
          </tbody>
          <tbody id="multimedia" data-filter="target">
              <tr class="bg-secondary">
                  <th class="text-uppercase">Multimedia</th>
                  <td><span class="text-dark font-weight-semibold">Apple iPhone Xs Max</span></td>
                  <td><span class="text-dark font-weight-semibold">Google Pixel 3 XL</span></td>
                  <td><span class="text-dark font-weight-semibold">Samsung Galaxy S10+</span></td>
              </tr>
              <tr>
                  <th>Loudspeaker</th>
                  <td>Yes</td>
                  <td>Yes</td>
                  <td>Yes</td>
              </tr>
              <tr>
                  <th>FM radio</th>
                  <td>No</td>
                  <td>No</td>
                  <td>No</td>
              </tr>
              <tr>
                  <th>Headphone jack</th>
                  <td>No</td>
                  <td>No</td>
                  <td>Yes</td>
              </tr>
          </tbody>
          <tbody id="performance" data-filter="target">
              <tr class="bg-secondary">
                  <th class="text-uppercase">Performance</th>
                  <td><span class="text-dark font-weight-semibold">Apple iPhone Xs Max</span></td>
                  <td><span class="text-dark font-weight-semibold">Google Pixel 3 XL</span></td>
                  <td><span class="text-dark font-weight-semibold">Samsung Galaxy S10+</span></td>
              </tr>
              <tr>
                  <th>Processor</th>
                  <td>Apple A12 Bionic</td>
                  <td>Qualcomm Snapdragon 845 (2.5GHz octa-core)</td>
                  <td>Octa-core Qualcomm Snapdragon 855</td>
              </tr>
              <tr>
                  <th>Graphics</th>
                  <td>Apple GPU (4-core graphics)</td>
                  <td>Adreno 630</td>
                  <td>Mali-G72 MP18</td>
              </tr>
              <tr>
                  <th>Architecture</th>
                  <td>64 bit</td>
                  <td>64 bit</td>
                  <td>64 bit</td>
              </tr>
              <tr>
                  <th>RAM</th>
                  <td>4 GB</td>
                  <td>4 GB</td>
                  <td>8 GB</td>
              </tr>
          </tbody>
          <tbody id="design" data-filter="target">
              <tr class="bg-secondary">
                  <th class="text-uppercase">Design</th>
                  <td><span class="text-dark font-weight-semibold">Apple iPhone Xs Max</span></td>
                  <td><span class="text-dark font-weight-semibold">Google Pixel 3 XL</span></td>
                  <td><span class="text-dark font-weight-semibold">Samsung Galaxy S10+</span></td>
              </tr>
              <tr>
                  <th>Build material</th>
                  <td>Case: AluminiumBack: Mineral Glass</td>
                  <td>Case: AluminiumBack: Aluminium</td>
                  <td>Case: AluminiumBack: Mineral Glass</td>
              </tr>
              <tr>
                  <th>Thickness</th>
                  <td>7.7 mm</td>
                  <td>7.9 mm</td>
                  <td>8.5 mm</td>
              </tr>
              <tr>
                  <th>Width</th>
                  <td>70.9 mm</td>
                  <td>76.7 mm</td>
                  <td>73.8 mm</td>
              </tr>
              <tr>
                  <th>Height</th>
                  <td>143.6 mm</td>
                  <td>157.9 mm</td>
                  <td>158.1 mm</td>
              </tr>
              <tr>
                  <th>Weight</th>
                  <td>174 grams</td>
                  <td>175 grams</td>
                  <td>189 grams</td>
              </tr>
              <tr>
                  <th>Waterproof</th>
                  <td>Yes Water resistant (up to 30 minutes in a depth of 1 meter), IP67</td>
                  <td>Yes Water resistant (up to 30 minutes in a depth of 1 meter), IP67</td>
                  <td>Yes Water resistant (up to 30 minutes in a depth of 1.5 meter), IP68</td>
              </tr>
              <tr>
                  <th>Colors</th>
                  <td>Silver, Space Grey</td>
                  <td>Black, Black and White</td>
                  <td>Midnight Black, Coral Blue, Lilac Purple</td>
              </tr>
          </tbody>
          <tbody id="display" data-filter="target">
              <tr class="bg-secondary">
                  <th class="text-uppercase">Display</th>
                  <td><span class="text-dark font-weight-semibold">Apple iPhone Xs Max</span></td>
                  <td><span class="text-dark font-weight-semibold">Google Pixel 3 XL</span></td>
                  <td><span class="text-dark font-weight-semibold">Samsung Galaxy S10+</span></td>
              </tr>
              <tr>
                  <th>Display type</th>
                  <td>Super Retina OLED</td>
                  <td>'flexible' OLED</td>
                  <td>Super AMOLED</td>
              </tr>
              <tr>
                  <th>Pixel density</th>
                  <td>458 ppi</td>
                  <td>522 ppi</td>
                  <td>522 ppi</td>
              </tr>
              <tr>
                  <th>Screen protection</th>
                  <td>Yes</td>
                  <td>Corning Gorilla Glass v5</td>
                  <td>Corning Gorilla Glass v5</td>
              </tr>
              <tr>
                  <th>Screen size</th>
                  <td>6.5 inches</td>
                  <td>6.3 inches</td>
                  <td>6.4 inches</td>
              </tr>
              <tr>
                  <th>Screen resolution</th>
                  <td>1125 x 2436 pixels</td>
                  <td>1440 x 2880 pixels</td>
                  <td>1440 x 2960 pixels </td>
              </tr>
              <tr>
                  <th>Touch screen</th>
                  <td>Yes, 3D Touch Touchscreen, Multi-touch</td>
                  <td>Yes, Capacitive Touchscreen, Multi-touch</td>
                  <td>Yes, Capacitive Touchscreen, Multi-touch</td>
              </tr>
          </tbody>
          <tbody id="storage" data-filter="target">
              <tr class="bg-secondary">
                  <th class="text-uppercase">Storage</th>
                  <td><span class="text-dark font-weight-semibold">Apple iPhone Xs Max</span></td>
                  <td><span class="text-dark font-weight-semibold">Google Pixel 3 XL</span></td>
                  <td><span class="text-dark font-weight-semibold">Samsung Galaxy S10+</span></td>
              </tr>
              <tr>
                  <th>Internal memory</th>
                  <td>64 GB</td>
                  <td>64 GB</td>
                  <td>128 GB</td>
              </tr>
              <tr>
                  <th>Expandable memory</th>
                  <td>No</td>
                  <td>No</td>
                  <td>Yes Up to 1 TB</td>
              </tr>
          </tbody>
          <tbody id="camera" data-filter="target">
              <tr class="bg-secondary">
                  <th class="text-uppercase">Camera</th>
                  <td><span class="text-dark font-weight-semibold">Apple iPhone Xs Max</span></td>
                  <td><span class="text-dark font-weight-semibold">Google Pixel 3 XL</span></td>
                  <td><span class="text-dark font-weight-semibold">Samsung Galaxy S10+</span></td>
              </tr>
              <tr>
                  <th>Settings</th>
                  <td>Exposure compensation, ISO control</td>
                  <td>Exposure compensation, ISO control</td>
                  <td>Exposure compensation</td>
              </tr>
              <tr>
                  <th>Aperture</th>
                  <td>F2.2</td>
                  <td>F2.4</td>
                  <td>F1.7</td>
              </tr>
              <tr>
                  <th>Camera features</th>
                  <td>10 x Digital zoom, Optical zoom, Auto flash, Face detection, Touch to focus</td>
                  <td>Fixed zocus</td>
                  <td>Wide angle selfie</td>
              </tr>
              <tr>
                  <th>Image resolution</th>
                  <td>4000 x 3000 pixels</td>
                  <td>4000 x 3000 pixels</td>
                  <td>4000 x 3000 pixels</td>
              </tr>
              <tr>
                  <th>Sensor</th>
                  <td>BSI sensor</td>
                  <td>CMOS image sensor</td>
                  <td>CMOS image sensor</td>
              </tr>
              <tr>
                  <th>Autofocus</th>
                  <td>Yes</td>
                  <td>No</td>
                  <td>Yes</td>
              </tr>
              <tr>
                  <th>Shooting modes</th>
                  <td>Continuos shooting, High dynamic range mode (HDR), Burst mode</td>
                  <td>Continuos shooting, High dynamic range mode (HDR)</td>
                  <td>Continuos shooting, High dynamic range mode (HDR)</td>
              </tr>
              <tr>
                  <th>Optical image stabilisation</th>
                  <td>Yes, Dual optical image stabilization</td>
                  <td>Yes</td>
                  <td>Yes</td>
              </tr>
              <tr>
                  <th>Flash</th>
                  <td>Yes, Retina flash</td>
                  <td>Yes, Dual LED flash</td>
                  <td>Yes, LED flash</td>
              </tr>
          </tbody>
          <tbody id="battery" data-filter="target">
              <tr class="bg-secondary">
                  <th class="text-uppercase">Battery</th>
                  <td><span class="text-dark font-weight-semibold">Apple iPhone Xs Max</span></td>
                  <td><span class="text-dark font-weight-semibold">Google Pixel 3 XL</span></td>
                  <td><span class="text-dark font-weight-semibold">Samsung Galaxy S10+</span></td>
              </tr>
              <tr>
                  <th>Talktime</th>
                  <td>Up to 21 hours(4G)</td>
                  <td>Up to 24 hours(4G)</td>
                  <td>Up to 25 hours(4G)</td>
              </tr>
              <tr>
                  <th>Quick charging</th>
                  <td>Yes, fast, 50 % in 30 minutes</td>
                  <td>Yes</td>
                  <td>Yes</td>
              </tr>
              <tr>
                  <th>Wireless charging</th>
                  <td>Yes</td>
                  <td>Yes</td>
                  <td>Yes</td>
              </tr>
              <tr>
                  <th>Type</th>
                  <td>Li-ion</td>
                  <td>Li-ion</td>
                  <td>Li-ion</td>
              </tr>
              <tr>
                  <th>Capacity</th>
                  <td>3,174 mAh</td>
                  <td>3,430 mAh</td>
                  <td>4,100 mAh</td>
              </tr>
          </tbody>
          <tbody id="price" data-filter="target">
              <tr class="bg-secondary">
                  <th class="text-uppercase">Price &amp; rating</th>
                  <td><span class="text-dark font-weight-semibold">Apple iPhone Xs Max</span></td>
                  <td><span class="text-dark font-weight-semibold">Google Pixel 3 XL</span></td>
                  <td><span class="text-dark font-weight-semibold">Samsung Galaxy S10+</span></td>
              </tr>
              <tr>
                  <th>Price</th>
                  <td>$1,099</td>
                  <td>$899</td>
                  <td>$1,000</td>
              </tr>
              <tr>
                  <th>Rating</th>
                  <td>4.5/5</td>
                  <td>4.5/5</td>
                  <td>4.5/5</td>
              </tr>
              <tr>
                  <th></th>
                  <td>
                      <button class="btn btn-outline-primary btn-block" type="button" data-toggle="toast" data-target="#cart-toast" >Add to Cart</button>
                  </td>
                  <td>
                      <button class="btn btn-outline-primary btn-block" type="button" data-toggle="toast" data-target="#cart-toast">Add to Cart</button>
                  </td>
                  <td>
                      <button class="btn btn-outline-primary btn-block" type="button" data-toggle="toast" data-target="#cart-toast">Add to Cart</button>
                  </td>
              </tr>
          </tbody>
      </table>
  </div>
</div>

      <!--best phones-->


      <table class="center">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Best Mobile Phones Under 5000</th>
            <th scope="col">Prices</th>
          </tr>
        </thead>
        <tbody>
        <tr>
          <td>Samsung Galaxy M01 Core</td>
          <td>Rs. 4,499</td>
        </tr>
        <tr>
          <td>ThL 5000</td>
          <td>Rs. 4,500</td>
        </tr>
        <tr>
          <td>Lava Z41</td>
          <td>Rs. 4,999</td>
        </tr>
        <tr>
          <td>Intex Aqua Air II</td>
          <td>Rs. 4,889</td>
        </tr>
        <tr>
          <td>Asus Zenfone Lite L1</td>
          <td>Rs. 4,999</td>
        </tr>
        <tr>
          <td>iVooMi Me3</td>
          <td>Rs. 4,049</td>
        </tr>
        <tr>
          <td>Reliance JioPhone</td>
          <td>Rs. 1,500</td>
        </tr>
        <tr>
          <td>Itel A23</td>
          <td>Rs. 3,960</td>
        </tr>
        <tr>
          <td>Nokia 3310 New</td>
          <td>Rs. 3,419</td>
        </tr>
        <tr>
          <td>I Kall K110</td>
          <td>Rs. 3,599</td>
        </tr>
        </tbody>
      </table>



  </div>

  <section class="newsletter">
    <div class="container">
    <div class="row">
    <div class="col-sm-12">
      <div class="content">
        <h2>Subscribe to our TechNews </h2>
      <div class="input-group">
             <input type="email" class="form-control" placeholder="Enter your email">
             <span class="input-group-btn">
             <button class="btn" type="submit">Subscribe Now</button>
             </span>
              </div>
      </div>
    </div>
    </div>
    </div>
    </section>
  <!-- Footer -->

	<section id="footer">
		<div class="container">
      <a href="footerstyle.css" rel="stylesheet">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="miniprj.html"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="page8.html"><i class="fa fa-angle-double-right"></i>About</a></li>
					</ul>
				</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u><a href="miniprj.html">TechBUZZ</a></u> is a technical website which helps users to buy and compare latest electronic devices</p>
					<p class="h6">© All right Reversed.
				<hr>
      </div>
    </a>	
		</div>
	</section>
	<!-- ./Footer -->

  </body>
</html>
