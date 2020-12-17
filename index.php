<?php include 'inc/header.php'; ?>
<?php include 'inc/slider.php'; ?>


 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Feature Products</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
          <div class="row px-sm-2 px-0 pt-3">
	      	<?php 
              $getFpd = $pd->getFeaturedProduct();
              if ($getFpd) {
                  while ($result = $getFpd->fetch_assoc()) {
                      ?>
				<div class="col-md-3 offset-md-0 offset-sm-2 offset-1 col-sm-8 col-10 offset-sm-2 offset-1 mb-3">
            <div class="card">
                <div class="px-2 red text-uppercase">new</div>
                <div class="d-flex justify-content-center"> <img src="admin/<?php echo $result['image']; ?>" class="product" alt=""> </div> <b class="px-2">
                    <p class="h4"><?php echo $result['productName']; ?></p>
                </b>
                <div class="d-flex align-items-center justify-content-start rating border-top border-bottom py-2">
                    <div class="text-muted text-uppercase px-2 border-right"><?php echo $fm->textShorten($result['body'], 40); ?></div>
                    
                </div>
                <div class="d-flex align-items-center justify-content-between py-2 px-3">
                    <div class="h4">Nrs.<?php echo $result['price']; ?></div>
                    <div> <button class="btn btn-dark text-uppercase"><a href="details.php?proId=<?php echo $result['productId']; ?>">buy now </a> </button> </div>
                </div>
            </div>
        </div>
				<?php
                  }
              } ?>
            </div>
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>New Products</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			
      <div class="row px-sm-2 px-0 pt-3">
        <?php 
              $getNpd = $pd->getNewProduct();
              if ($getNpd) {
                  while ($result = $getNpd->fetch_assoc()) {
                      ?>
        <div class="col-md-3 offset-md-0 offset-sm-2 offset-1 col-sm-8 col-10 offset-sm-2 offset-1 mb-3">
            <div class="card">
                <div class="px-2 red text-uppercase">new</div>
                <div class="d-flex justify-content-center"> <img src="admin/<?php echo $result['image']; ?>" class="product" alt=""> </div> <b class="px-2">
                    <p class="h4"><?php echo $result['productName']; ?></p>
                </b>
                <div class="d-flex align-items-center justify-content-start rating border-top border-bottom py-2">
                    <div class="text-muted text-uppercase px-2 border-right"><?php echo $fm->textShorten($result['body'], 40); ?></div>
                    
                </div>
                <div class="d-flex align-items-center justify-content-between py-2 px-3">
                    <div class="h4">Nrs.<?php echo $result['price']; ?></div>
                    <div> <button class="btn btn-dark text-uppercase"><a href="details.php?proId=<?php echo $result['productId']; ?>">buy now </a> </button> </div>
                </div>
            </div>
        </div>
        <?php
                  }
              } ?>
      </div>

         
        </div>
      
    </div>
 </div>

<?php include 'inc/footer.php'; ?>
