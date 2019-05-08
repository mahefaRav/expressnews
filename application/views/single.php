	
	<!-- content-section-starts-here -->
	<div class="main-body">
		<div class="wrap">
		<ol class="breadcrumb">
			  <li><a href="index.html">Home</a></li>
			  <li class="active">Single Page</li>
			</ol>
			<div class="single-page">
			<div class="col-md-2 share_grid">
				<h3>SHARE</h3>
				<ul>
					<li>
						<a href="#">
							<i class="facebook"></i>
							<div class="views">
								<span>SHARE</span>
								<label>180</label>	
							</div>			
							<div class="clearfix"></div>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="twitter"></i>
							<div class="views">
								<span>TWEET</span>
								<label>355</label>	
							</div>			
							<div class="clearfix"></div>				
						</a>
					</li>
					<li>
						<a href="#">
							<i class="linkedin"></i>
							<div class="views">
								<span>SHARES</span>
								<label>28</label>	
							</div>			
							<div class="clearfix"></div>								
						</a>
					</li>
					<li>
						<a href="#">
							<i class="pinterest"></i>
							<div class="views">
								<span>PIN</span>
								<label>16</label>	
							</div>			
							<div class="clearfix"></div>				
						</a>
					</li>
					<li>
						<a href="#">
							<i class="email"></i>
							<div class="views">
								<span>Email</span>	
							</div>			
							<div class="clearfix"></div>			
						</a>
					</li>
				</ul>
			</div>


			<div class="col-md-8 content-left single-post">
				<div class="blog-posts">
			        <h3 class="post"><?php echo $article['titre'] ;?></h3>
				<div class="last-article">
					<p class="artext"><?php echo $article['info'] ;?></p>
                        <img src="<?php echo base_url(); ?>assets/images/<?php echo $article['image'] ;?>" class="img-responsive" alt="">
					<p class="artext"><?php echo $article['details'] ;?></p>
				    <div class="clearfix"></div>
			    </div>
		        </div>

            </div>
			
			<div class="clearfix"></div>
		</div>
		</div>
	</div>
	<!-- content-section-ends-here -->