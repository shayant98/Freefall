<div class="container">

  <h2>Projecten</h2>

  <ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
    <li data-option-value="*" class="active"><a href="#">Show All</a></li>
    <li data-option-value=".website"><a href="#">Websites</a></li>
    <li data-option-value=".logo"><a href="#">Logos</a></li>
    <li data-option-value=".brands"><a href="#">Brands</a></li>
    <li data-option-value=".medias"><a href="#">Medias</a></li>
  </ul>

  <hr>

  <div class="row">
    <div class="sort-destination-loader sort-destination-loader-showing">
    <ul class="portfolio-list sort-destination popup-gallery-ajax" data-sort-id="portfolio">
       <?php
       $sql = mysqli_query($conn, "SELECT * FROM fr_projects  INNER JOIN fr_users ON fr_projects.project_owner = fr_users.id WHERE status =0 ");
         while ($row = mysqli_fetch_array($sql)) {
           $id = $row['id'];
           $name = $row['project_name'];
           $disc = $row['project_disc'];
           $u_name = $row['name'];
           $surname = $row['surname'];
           $price = $row['project_price'];
           $deadline = $row['project_deadline'];
           ?>
           <li class="col-md-3 col-sm-6 col-xs-12 isotope-item <?php echo $row['project_tags']; ?>">
             <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
               <span class="thumb-info-wrapper">
                 <a href="ajax/portfolio-ajax-project.html" data-ajax-on-modal>
                   <img src="img/team/team-1.jpg" class="img-responsive" alt="">
                   <span class="thumb-info-title">
                     <span class="thumb-info-inner"><?php echo $name ?></span>
                     <span class="thumb-info-type"><?php echo $u_name ?></span>
                   </span>
                 </a>
               </span>
               <span class="thumb-info-caption">
                 <span class="thumb-info-caption-text"><?php echo $disc ?></span>
                 <span class="thumb-info-social-icons">
                   <a href="#" data-toggle="tooltip" title=<?php echo $price ?>><i class="fa fa-money"></i><span>Budget</span></a>
                   <a href="#" data-toggle="tooltip" title=<?php echo $u_name ?>><i class="fa fa-user"></i><span>Opdrachtgever</span></a>
                   <a href="#" data-toggle="tooltip" title=<?php echo $deadline ?>><i class="fa fa-calendar-o"></i><span>Deadline</span></a>
                 </span>
               </span>
             </span>
           </li>


           <?php
}
             ?>

           </ul>
           </div>

  </div>

</div>
<?php include "includes/footer.php";
?>
<div id="M" class="modal fade modal" role="dialog">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
        <div class="modal-content">


        </div>
        </div>
    </div>
</div><div class="container">

  <h2>Projecten</h2>

  <ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
    <li data-option-value="*" class="active"><a href="#">Show All</a></li>
    <li data-option-value=".website"><a href="#">Websites</a></li>
    <li data-option-value=".logo"><a href="#">Logos</a></li>
    <li data-option-value=".brands"><a href="#">Brands</a></li>
    <li data-option-value=".medias"><a href="#">Medias</a></li>
  </ul>

  <hr>

  <div class="row">
    <div class="sort-destination-loader sort-destination-loader-showing">
    <ul class="portfolio-list sort-destination popup-gallery-ajax" data-sort-id="portfolio">
       <?php
       $sql = mysqli_query($conn, "SELECT * FROM fr_projects  INNER JOIN fr_users ON fr_projects.project_owner = fr_users.id WHERE status =0 ");
         while ($row = mysqli_fetch_array($sql)) {
           $id = $row['id'];
           $name = $row['project_name'];
           $disc = $row['project_disc'];
           $u_name = $row['name'];
           $surname = $row['surname'];
           $price = $row['project_price'];
           $deadline = $row['project_deadline'];
           ?>
           <li class="col-md-3 col-sm-6 col-xs-12 isotope-item <?php echo $row['project_tags']; ?>">
             <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
               <span class="thumb-info-wrapper">
                 <a href="ajax/portfolio-ajax-project.html" data-ajax-on-modal>
                   <img src="img/team/team-1.jpg" class="img-responsive" alt="">
                   <span class="thumb-info-title">
                     <span class="thumb-info-inner"><?php echo $name ?></span>
                     <span class="thumb-info-type"><?php echo $u_name ?></span>
                   </span>
                 </a>
               </span>
               <span class="thumb-info-caption">
                 <span class="thumb-info-caption-text"><?php echo $disc ?></span>
                 <span class="thumb-info-social-icons">
                   <a href="#" data-toggle="tooltip" title=<?php echo $price ?>><i class="fa fa-money"></i><span>Budget</span></a>
                   <a href="#" data-toggle="tooltip" title=<?php echo $u_name ?>><i class="fa fa-user"></i><span>Opdrachtgever</span></a>
                   <a href="#" data-toggle="tooltip" title=<?php echo $deadline ?>><i class="fa fa-calendar-o"></i><span>Deadline</span></a>
                 </span>
               </span>
             </span>
           </li>


           <?php
}
             ?>

           </ul>
           </div>

  </div>

</div>
<?php include "includes/footer.php";
?>
<div id="M" class="modal fade modal" role="dialog">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
        <div class="modal-content">


        </div>
        </div>
    </div>
</div>
