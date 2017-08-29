
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">

     /* Enhance the look of the textarea expanding animation */
     .animated {
        -webkit-transition: height 0.2s;
        -moz-transition: height 0.2s;
        transition: height 0.2s;
      }

      .stars {
        margin: 20px 0;
        font-size: 24px;
        color: #d17581;
      }
  </style>
  <style type="text/css">
    .thumbnail{ padding: 0;}

    .carousel-control, .item{
         border-radius: 4px;
     }

    .caption{
        height: 130px;
        overflow: hidden;
    } 

    .caption h4
    {
        white-space: nowrap;
    }

    .thumbnail img{
      width: 100%;
    }

    .ratings 
    {
        color: #d17581;
        padding-left: 10px;
        padding-right: 10px;
    }

    .thumbnail .caption-full {
    padding: 9px;
    color: #333;
    }

    footer{
      margin-top: 50px;
      margin-bottom: 30px;
    }
  </style>
</head>
<body>
    <nav class="navbar navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="http://demos.maxoffsky.com/shop-reviews">My shop</a>
            </div>

            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        </nav>

    <div class="container">
          <div class="row">
        <div class="col-md-3">
            <p class="lead">Shop Categories</p>
            <div class="list-group">
              <a href="#" class="list-group-item active">Printable</a>
              <a href="#" class="list-group-item">Cupcake wrappers</a>
            </div>
        </div>
		
		<?php
					$city = "";
					if (isset($_GET["page"])) 
					{ 
						$page  = $_GET["page"]; 
					} 
					else
					{ 
						$page=1; 
					};
					$start_from = ($page-1) * $results_per_page;
					$sql = "SELECT * FROM paddy LIMIT $start_from, ".$results_per_page;
					$rs_result = mysqli_query($con,$sql);
				
					
					 $count = 0;
					 while($row = mysqli_fetch_row($rs_result)) {
						 if($count==3)
						 {
							 echo "</div>";
							 $count = 0;
						 }
						 if($count == 0)
						 {
							 echo "<div class='row'>";
						 }
						 $count = $count+1;
						 $sql2 = "SELECT addressCity FROM login WHERE username = '$row[5]'";
						 
						 $rs_result2 = mysqli_query($con,$sql2);
						 while($row2 = mysqli_fetch_row($rs_result2))
						 {
							$city = $row2[0];
						 }
						 
						 
						 
						 
					?>
        <div class="col-md-9">
            <div class="thumbnail">
              <img src="http://placehold.it/820x320" alt="">
              <div class="caption-full">
                  <h4 class="pull-right">$20.99</h4>
                  <h4><a href="http://demos.maxoffsky.com/shop-reviews/products/1">First product</a></h4>
                  <p>This is a short description asdf as This is a short description asdf as</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
              <div class="ratings">
                  <p class="pull-right">2072 reviews</p>
                  <p>
                                          <span class="glyphicon glyphicon-star"></span>
                                          <span class="glyphicon glyphicon-star"></span>
                                          <span class="glyphicon glyphicon-star"></span>
                                          <span class="glyphicon glyphicon-star-empty"></span>
                                          <span class="glyphicon glyphicon-star-empty"></span>
                                        3.9 stars
                  </p>
              </div>
            </div>
            <div class="well" id="reviews-anchor">
              <div class="row">
                <div class="col-md-12">
                                                                      </div>
              </div>
              <div class="text-right">
                <a href="#reviews-anchor" id="open-review-box" class="btn btn-success btn-green">Leave a Review</a>
              </div>
              <div class="row" id="post-review-box" style="display:none;">
                <div class="col-md-12">
                  <form method="POST" action="http://demos.maxoffsky.com/shop-reviews/products/1" accept-charset="UTF-8"><input name="_token" type="hidden" value="judkeKLbcKuAcR3yyrIfwcfvVXJ398ZnpQJZmxKV">                  <input id="ratings-hidden" name="rating" type="hidden">                  <textarea rows="5" id="new-review" class="form-control animated" placeholder="Enter your review here..." name="comment" cols="50"></textarea>                  <div class="text-right">
                    <div class="stars starrr" data-rating="0"></div>
                    <a href="#" class="btn btn-danger btn-sm" id="close-review-box" style="display:none; margin-right:10px;"> <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                    <button class="btn btn-success btn-lg" type="submit">Save</button>
                  </div>
                </form>                </div>
              </div>

                            <hr>
                <div class="row">
                  <div class="col-md-12">
                                          <span class="glyphicon glyphicon-star"></span>
                                          <span class="glyphicon glyphicon-star"></span>
                                          <span class="glyphicon glyphicon-star"></span>
                                          <span class="glyphicon glyphicon-star-empty"></span>
                                          <span class="glyphicon glyphicon-star-empty"></span>
                    
                    Anonymous <span class="pull-right">4 hours ago</span> 
                    
                    <p>asddsad woawow</p>
                  </div>
                </div>
                            <hr>
                <div class="row">
                  <div class="col-md-12">
                                          <span class="glyphicon glyphicon-star"></span>
                                          <span class="glyphicon glyphicon-star"></span>
                                          <span class="glyphicon glyphicon-star"></span>
                                          <span class="glyphicon glyphicon-star"></span>
                                          <span class="glyphicon glyphicon-star-empty"></span>
                    
                    Anonymous <span class="pull-right">11 hours ago</span> 
                    
                    <p> Ooiiooooiihghh</p>
                  </div>
                </div>
                
                   
                
                
                            <ul class="pagination">
			<li class="disabled"><span>&laquo;</span></li><li class="active"><span>1</span></li><li><a href="http://demos.maxoffsky.com/shop-reviews/products/1?page=2">2</a></li><li><a href="http://demos.maxoffsky.com/shop-reviews/products/1?page=3">3</a></li><li><a href="http://demos.maxoffsky.com/shop-reviews/products/1?page=4">4</a></li><li><a href="http://demos.maxoffsky.com/shop-reviews/products/1?page=5">5</a></li><li><a href="http://demos.maxoffsky.com/shop-reviews/products/1?page=6">6</a></li><li><a href="http://demos.maxoffsky.com/shop-reviews/products/1?page=7">7</a></li><li><a href="http://demos.maxoffsky.com/shop-reviews/products/1?page=8">8</a></li><li class="disabled"><span>...</span></li><li><a href="http://demos.maxoffsky.com/shop-reviews/products/1?page=20">20</a></li><li><a href="http://demos.maxoffsky.com/shop-reviews/products/1?page=21">21</a></li><li><a href="http://demos.maxoffsky.com/shop-reviews/products/1?page=2">&raquo;</a></li>	</ul>
            </div>
        </div>

    </div>

      <!--<footer>
        <div class="row">
          <div class="col-md-12">
            Created by <a href="http://maxoffsky.com" target="_blank">Maks</a>
          </div>
        </div>
      </footer>-->

    </div>


    <script type="text/javascript" src='//code.jquery.com/jquery-1.10.2.min.js'></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
      <script src="http://demos.maxoffsky.com/shop-reviews/js/expanding.js"></script>
  <script src="http://demos.maxoffsky.com/shop-reviews/js/starrr.js"></script>

  <script type="text/javascript">
    $(function(){

      // initialize the autosize plugin on the review text area
      $('#new-review').autosize({append: "\n"});

      var reviewBox = $('#post-review-box');
      var newReview = $('#new-review');
      var openReviewBtn = $('#open-review-box');
      var closeReviewBtn = $('#close-review-box');
      var ratingsField = $('#ratings-hidden');

      openReviewBtn.click(function(e)
      {
        reviewBox.slideDown(400, function()
          {
            $('#new-review').trigger('autosize.resize');
            newReview.focus();
          });
        openReviewBtn.fadeOut(100);
        closeReviewBtn.show();
      });

      closeReviewBtn.click(function(e)
      {
        e.preventDefault();
        reviewBox.slideUp(300, function()
          {
            newReview.focus();
            openReviewBtn.fadeIn(200);
          });
        closeReviewBtn.hide();
        
      });

      // If there were validation errors we need to open the comment form programmatically 
      
      // Bind the change event for the star rating - store the rating value in a hidden field
      $('.starrr').on('starrr:change', function(e, value){
        ratingsField.val(value);
      });
    });
  </script>

</body>
</html>
