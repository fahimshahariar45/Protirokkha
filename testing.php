<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
      />
  
      <link rel="stylesheet" href="css/style.css" />
      <title>প্রতিরক্ষা</title>
</head>
<body>
<?php include 'login/header.php'; ?>
        <section class="map">
                <div class="image-container">
                  <div class="image">
                    <img src="assets/map.png" alt="" />
                  </div>
                  <div class="map-search"><i class="fas fa-search"></i></div>
                  <div class="map-options">
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus"></i>
                    <div class="arrows">
                      <i class="fas fa-sort-up"></i>
                      <i class="fas fa-sort-down"></i>
                    </div>
                  </div>
                </div>
                <div class="reports">
                  <div class="title-container">
                    <h2 class="title">Live Reports</h2>
                    <div class="arrows"></div>
                  </div>
                  <div class="report-container">
                    <div class="report">
                      <div class="country">
                        <img src="assets/india.png" alt="" />
                        <h3>India</h3>
                      </div>
                      <div class="numbers">
                        <h4>100,392</h4>
                        <i class="fas fa-sort-up"></i>
                      </div>
                    </div>
                    <div class="report">
                      <div class="country">
                        <img src="assets/canada.png" alt="" />
                        <h3>Canada</h3>
                      </div>
                      <div class="numbers">
                        <h4>86,498</h4>
                        <i class="fas fa-sort-up"></i>
                      </div>
                    </div>
                    <div class="report">
                      <div class="country">
                        <img src="assets/united-states.png" alt="" />
                        <h3>USA</h3>
                      </div>
                      <div class="numbers">
                        <h4>81,340</h4>
                        <i class="fas fa-sort-down"></i>
                      </div>
                    </div>
                    <div class="report">
                      <div class="country">
                        <img src="assets/italy.png" alt="" />
                        <h3>Italy</h3>
                      </div>
                      <div class="numbers">
                        <h4>64,049</h4>
                        <i class="fas fa-sort-up"></i>
                      </div>
                    </div>
                    <div class="report">
                      <div class="country">
                        <img src="assets/china.png" alt="" />
                        <h3>China</h3>
                      </div>
                      <div class="numbers">
                        <h4>50,871s</h4>
                        <i class="fas fa-sort-up"></i>
                      </div>
                    </div>
                    <div class="report">
                      <div class="country">
                        <img src="assets/united-kingdom.png" alt="" />
                        <h3>UK</h3>
                      </div>
                      <div class="numbers">
                        <h4>32,332</h4>
                        <i class="fas fa-sort-up"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="contact">
                <h1 class="title">Are You want to Test for Covid 19?</h1>
                <h4 class="title">Fill the form,We will contact you</h4>
                <div class="form">
                      <form method="post" action="insert.php">
        <input type="text" name="name"placeholder="Full Name"><br><br/>
        <input type="text" name="mobile"placeholder="Mobile Number"><br><br/>
        <input type="text" name="address"placeholder="Full Address"><br><br/>

     
          <input type="submit" name="save" value="submit" >  
            </form>
                </div>
              </section>


              <?php include 'login/footer.php'; ?>

              <script src="https://unpkg.com/scrollreveal"></script>
              <script src="js/script.js"></script>
            </body>
          </html>

</body>
</html>