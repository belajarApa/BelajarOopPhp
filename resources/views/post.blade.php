@extends('layout.main1')
@section('main_content')

		<!-- Banner starts -->
		<section class="banner banner__single-post banner__standard">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="post-title-wrapper">
							<div class="btn-group">
								<a href="#" class="cat-btn bg-color-blue-one">{{$post->category->name}}</a>
							</div>
							<h2 class="m-t-xs-20 m-b-xs-0 axil-post-title hover-line">
								{{$post->title}}
							</h2>
							<h6>
								{{$post->quote}}
							</h6>
							<div class="post-metas banner-post-metas m-t-xs-20">
								<ul class="list-inline">
									<li><a href="#" class="post-author post-author-with-img"><img src="../assets/images/author/01.png" alt="author">Ashley Graham</a></li>
									<li><a href="#"><i class="feather icon-activity"></i>5k Views</a></li>
									<li><a href="#"><i class="feather icon-share-2"></i>230 Shares</a></li>
								</ul>
							</div>
							<!-- End of .post-metas -->
						</div>
						<!-- End of .post-title-wrapper -->
					</div>
					<!-- End of .col-lg-6 -->

					<div class="col-lg-6">
						<img src="../assets/images/post/latest-post.jpg" alt="" class="img-fluid" width="600" height="600">
					</div>
				</div>
				<!-- End of .row -->
			</div>
			<!-- End of .container -->
		</section>
		<!-- End of .banner -->

		<!-- post-single-wrapper starts -->
		<div class="post-single-wrapper p-t-xs-60">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<main class="site-main">
							<article class="post-details">
								<div class="single-blog-wrapper">
									<div class="post-details__social-share mt-2">
										<ul class="social-share social-share__with-bg social-share__vertical">
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-behance"></i></a></li>
											<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										</ul>
										<!-- End of .social-share__no-bg -->
									</div>
									<!-- End of .blockquote -->
								</div>
								<!-- End of .single-blog-wrapper -->
							</article>
							<h3>{{$post->title}}</h3>

									<p>{!!$post->body!!}</p>

									<blockquote class="blockquote blockquote__with-image m-t-xs-0 m-b-xs-30">
										<figure>
											<img src="../assets/images/post-single-gallery/post-single-gallery-1.jpg"
												alt="image">
										</figure>
										<p>
											If you’ve been waiting for an invitation, this calligraphy is it.
											Commissioned
											by
											Facebook, this is a hand-lettered design for a poster. Quote is Facebook
											Building 8
											VP’s
											Regina Dugan—and mine.
										</p>
									</blockquote>

						<!-- End of main -->
					</div>
					<!--End of .col-auto  -->
					<div class="col-lg-4">
						<aside class="post-sidebar">
							<div class="tag-widget m-b-xs-30">
								<div class="widget-title">
									<h3>Tags</h3>
								</div>
								<div class="axil-content">
									<ul class="tag-list-wrapper">
										<li><a href="#">Gaming</a></li>
										<li><a href="#">Adventure</a></li>
										<li><a href="#">Travel</a></li>
										<li><a href="#">Sports</a></li>
										<li><a href="#">Science</a></li>
										<li><a href="#">Technology</a></li>
										<li><a href="#">Fashion</a></li>
										<li><a href="#">Life Style</a></li>
									</ul>
									<!-- End of .tab-list-wrapper -->
								</div>
								<!-- End of .content -->
							</div>
							<!-- End of .tag-widget -->

							<div class="instagram-widget m-b-xs-40">
								<div class="widget-title">
									<h3>Instagram</h3>
								</div>

								<div class="axil-content">
									<ul class="instagram-post-list-wrapper">
										<li class="instagram-post-list perfect-square">
											<a href="#" class="list-inner"
												style="background-image: url(../assets/images/instagram-post/instagram-post-1.jpg)">
												<div class="post-info-wrapper overlay">
													<div class="post-info">
														<i class="feather icon-heart"></i>
														20K+
													</div>
													<!-- End of .post-info -->

													<div class="post-info">
														<i class="feather icon-message-square"></i>
														200+
													</div>
													<!-- End of .post-info -->
												</div>
												<!-- End of .post-info-wrapper overlay -->
											</a>
										</li>
										<!-- End of .instagram-post-list -->

										<li class="instagram-post-list perfect-square">
											<a href="#" class="list-inner"
												style="background-image: url(../assets/images/instagram-post/instagram-post-2.jpg)">
												<div class="post-info-wrapper overlay">
													<div class="post-info">
														<i class="feather icon-heart"></i>
														20K+
													</div>
													<!-- End of .post-info -->

													<div class="post-info">
														<i class="feather icon-message-square"></i>
														200+
													</div>
													<!-- End of .post-info -->
												</div>
												<!-- End of .post-info-wrapper overlay -->
											</a>
										</li>
										<!-- End of .instagram-post-list -->

										<li class="instagram-post-list perfect-square">
											<a href="#" class="list-inner"
												style="background-image: url(../assets/images/instagram-post/instagram-post-3.jpg)">
												<div class="post-info-wrapper overlay">
													<div class="post-info">
														<i class="feather icon-heart"></i>
														20K+
													</div>
													<!-- End of .post-info -->

													<div class="post-info">
														<i class="feather icon-message-square"></i>
														200+
													</div>
													<!-- End of .post-info -->
												</div>
												<!-- End of .post-info-wrapper overlay -->
											</a>
										</li>
										<!-- End of .instagram-post-list -->

										<li class="instagram-post-list perfect-square">
											<a href="#" class="list-inner"
												style="background-image: url(../assets/images/instagram-post/instagram-post-4.jpg)">
												<div class="post-info-wrapper overlay">
													<div class="post-info">
														<i class="feather icon-heart"></i>
														20K+
													</div>
													<!-- End of .post-info -->

													<div class="post-info">
														<i class="feather icon-message-square"></i>
														200+
													</div>
													<!-- End of .post-info -->
												</div>
												<!-- End of .post-info-wrapper overlay -->
											</a>
										</li>
										<!-- End of .instagram-post-list -->

										<li class="instagram-post-list perfect-square">
											<a href="#" class="list-inner"
												style="background-image: url(../assets/images/instagram-post/instagram-post-5.jpg)">
												<div class="post-info-wrapper overlay">
													<div class="post-info">
														<i class="feather icon-heart"></i>
														20K+
													</div>
													<!-- End of .post-info -->

													<div class="post-info">
														<i class="feather icon-message-square"></i>
														200+
													</div>
													<!-- End of .post-info -->
												</div>
												<!-- End of .post-info-wrapper overlay -->
											</a>
										</li>
										<!-- End of .instagram-post-list -->

										<li class="instagram-post-list perfect-square">
											<a href="#" class="list-inner"
												style="background-image: url(../assets/images/instagram-post/instagram-post-6.jpg)">
												<div class="post-info-wrapper overlay">
													<div class="post-info">
														<i class="feather icon-heart"></i>
														20K+
													</div>
													<!-- End of .post-info -->

													<div class="post-info">
														<i class="feather icon-message-square"></i>
														200+
													</div>
													<!-- End of .post-info -->
												</div>
												<!-- End of .post-info-wrapper overlay -->
											</a>
										</li>
										<!-- End of .instagram-post-list -->
									</ul>
									<!-- End of .instagram-post-list-wrapper -->

									<div class="m-t-xs-20">
										<button class="btn btn-primary btn-small">FOLLOW US</button>
									</div>
								</div>
								<!-- End of .content -->
							</div>
							<!-- End of .instagram-widget -->
							<!-- End of .add-block-widget -->
						</aside>
						<!-- End of .post-sidebar -->
					</div>
					<!-- End of .col-lg-4 -->
				</div>
				<!-- End of .row -->
			</div>
			<!-- End of .container -->
		</div>
		<!-- End of .post-single-wrapper -->

	@endsection
