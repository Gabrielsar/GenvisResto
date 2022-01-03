 <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4 page-title">
                    	<h3 class="text-white">Categories</h3>
                        <hr class="divider my-4" />
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#appetizer">Appetizer</a>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#maincourse">Main Course</a>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#dessert">Dessert</a>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#drink">Drink</a>
                    </div>                   
                </div>
            </div>
        </header>
	<section class="page-section" id="appetizer">
        <h2>&nbsp;&nbsp;Appetizer</h2>
        <div id="menu-field" class="card-deck">
                <?php 
                    include'admin/db_connect.php';
                    $qry = $conn->query("SELECT * FROM  product_list WHERE category_id = 1");
                    while($row = $qry->fetch_assoc()):
                    ?>
                    <div class="view_prod col-lg-3" data-id=<?php echo $row['id'] ?>>
                     <div class="card menu-item ">
                        <img src="assets/img/<?php echo $row['img_path'] ?>" class="card-img-top" height="200" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $row['name'] ?></h5>
                        </div>
                      </div>
                    </div>
                <?php endwhile; ?>
        </div>
    </section>
    <hr>
    <section class="page-section" id="maincourse">
        <h2>&nbsp;&nbsp;Main Course</h2>
        <div id="menu-field" class="card-deck">
                <?php 
                    include'admin/db_connect.php';
                    $qry = $conn->query("SELECT * FROM  product_list WHERE category_id = 2");
                    while($row = $qry->fetch_assoc()):
                    ?>
                    <div class="view_prod col-lg-3" data-id=<?php echo $row['id'] ?>>
                     <div class="card menu-item ">
                        <img src="assets/img/<?php echo $row['img_path'] ?>" class="card-img-top" height="200" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $row['name'] ?></h5>
                        </div>
                        
                      </div>
                    </div>
                <?php endwhile; ?>
        </div>
    </section>
    <hr>
    <section class="page-section" id="dessert">
        <h2>&nbsp;&nbsp;Dessert</h2>
        <div id="menu-field" class="card-deck">
                <?php 
                    include'admin/db_connect.php';
                    $qry = $conn->query("SELECT * FROM  product_list WHERE category_id = 3");
                    while($row = $qry->fetch_assoc()):
                    ?>
                    <div class="view_prod col-lg-3" data-id=<?php echo $row['id'] ?>>
                     <div class="card menu-item ">
                        <img src="assets/img/<?php echo $row['img_path'] ?>" class="card-img-top" height="200" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $row['name'] ?></h5>
                        </div>
                        
                      </div>
                    </div>
                <?php endwhile; ?>
        </div>
    </section>
    <hr>
    <section class="page-section" id="drink">
        <h2>&nbsp;&nbsp;Drink</h2>
        <div id="menu-field" class="card-deck">
                <?php 
                    include'admin/db_connect.php';
                    $qry = $conn->query("SELECT * FROM  product_list WHERE category_id = 4");
                    while($row = $qry->fetch_assoc()):
                    ?>
                    <div class="view_prod col-lg-3" data-id=<?php echo $row['id'] ?>>
                     <div class="card menu-item ">
                        <img src="assets/img/<?php echo $row['img_path'] ?>" class="card-img-top" height="200" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $row['name'] ?></h5>
                        </div>
                        
                      </div>
                    </div>
                <?php endwhile; ?>
        </div>
    </section>
    <script>
        
        $('.view_prod').click(function(){
            uni_modal_right('Product','view_prod.php?id='+$(this).attr('data-id'))
        })
    </script>
	
