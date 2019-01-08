<?php include "header.php";?>

          <div id="owl-demo" class="owl-carousel owl-theme">

<?php include 'db_connect.php';
$query = "SELECT * FROM premium_caterers_info";
$sql = mysqli_query($conn,$query);
while ($data = mysqli_fetch_assoc($sql))
{
$photo = $data['photo_path'];
$title = $data['title'];
$id = $data['id'];
?>
        <div class="item">
        <a href="premium_caterers_details.php?id=<?php echo $id; ?>">
        <img class="img-responsive" src="admin/<?php echo $photo; ?>">
        </a>
        </div>
<?php } ?>
        </div>

        <h1 class="section__title">caterers in Indore</h1>

<!-- PAGE CONTENT
    ============================== -->
      <div class="container">
      <div class="row">
      <div class="col-sm-4 col-md-3">
      <!-- Categories -->
      <h3 class="header header_plain">Recommended caterers</h3>

      <div class="list-group">

<?php include 'db_connect.php';
$query = "SELECT * FROM premium_caterers_info";
$sql = mysqli_query($conn,$query);
while ($data = mysqli_fetch_assoc($sql))
{
$photo = $data['photo_path'];
$title = $data['title'];
$id = $data['id'];
?>           
            <a href="premium_caterers_details.php?id=<?php echo $id; ?>">
            <img class="img-responsive" src="admin/<?php echo $photo; ?>">
            <a href="premium_caterers_details.php?id=<?php echo $id; ?>" class="list-group-item active">
            <span class="badge"></span><?php echo $title; ?>
            </a>
<?php } ?>
  
            </div>
            <div class="clearfix"></div>
            </div>
            

        <div class="col-sm-8 col-md-9">
          <div class="row">
            <div class="col-xs-12 visible-xs">
              <div class="h3 header">Cafe</div>
            </div>
          </div>
          <div class="row">
          <?php
include 'db_connect.php';
$query = "SELECT * FROM caterers_info";
$sql = mysqli_query($conn,$query);
while ($data = mysqli_fetch_assoc($sql))
{
$photo = $data['photo_path'];
$title = $data['title'];
$id = $data['id'];
?>

            <div class="col-sm-4">
              <div class="product-list__item">
                <!-- Image -->
                <div class="product-list__img">
                  <a href="caterers_details.php?id=<?php echo $id; ?>">
                    <img src="admin/<?php echo $photo; ?>" alt="Product Image">
                  </a>
                </div>
                <!-- Captions -->
                <div class="product-list__caption">
                  <h3 class="product-list__title">
                    <a href="caterers_details.php?id=<?php echo $id; ?>"><?php echo $title; ?></a>
                  </h3>
                  
                  
                </div>
              </div>
            </div>
            <?php } ?>
            </div>
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->


<?php
include "footer.php";
?>
