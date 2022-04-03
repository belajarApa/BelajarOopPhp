@extends('layout.main')
@section('main_content')

<div class="banner banner-home__with-post">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
           <div class="col-lg-8">
						<div class="banner-left-content load-anim-wrapper">
							<div class="post-title-wrapper">

								<div class="post-metas banner-post-metas post-meta-primary load-anim">
									<ul class="list-inline">
										<li>By <a href="#" class="post-author">Ashley Graham</a></li>
									</ul>
								</div>
								<!-- End of .post-metas -->

								<h2
									class="m-t-xs-20 m-b-xs-10 axil-post-title hover-line color-white txt-shadow  load-anim">
									<a href="post-format-standard.html">
										Here’s All the Fashion News You already Missed
									</a>
								</h2>
								<p class="big color-white m-b-xs-20 m-b-sm-40 load-anim">
									Fusce dictum quis quam ac consequat. Nam imperdiet, libero a dapibus efficitur
								</p>
								<div class="load-anim">
									<button class="btn btn-primary">READ MORE</button>
								</div>
							</div>
							<!-- End of .post-title-wrapper -->
						</div>
					</div>
            <!-- End of  .col-lg-9 -->
            <div class="col-lg-4">
                <div class="axil-banner-sidebar load-anim-wrapper">
                    <div class="axil-banner-sidebar-media-wrapper nicescroll-container">
                        @foreach ($post as $p)
                        <div class="media post-block post-block__mid m-b-xs-30 load-anim">
                            <div class="media-body">
                                <h3 class="axil-post-title hover-line"><a href="/post/{{$p->slug}}">{{$p->title}}</a></h3>
                                <p class="mid">{{$p->quote}}</p>
                            </div>
                        </div>
                        @endforeach
                        <!-- End of .media -->
                        <div class="axil-scroll-up-down">
                            <a href="#" class="axil-post-scroll-down"></a>
                            <a href="#" class="axil-post-scroll-up"></a>
                        </div>
                    </div>
                    <!-- End of .axil-banner-sidebar-media-wrapper -->
                    <div class="banner-social-share-wrapper">
                        <ul
                            class="social-share social-share__with-bg social-share__square social-share__vertical">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <!-- End of .banner-social-share-wrapper -->
                </div>
                <!-- End of .axil-banner-sidebar -->
            </div>
            <!-- End of .col-lg-3 -->
        </div>
        <!-- End of .row -->
    </div>
    <!-- End of .container-fluid -->
</div>

<div class="recent-news-wrapper__fluid p-t-lg-80 p-t-xs-60 p-b-xs-20">
    <div class="custom-fluid-container">
        <div class="row masonry-grid">
            @foreach ($post as $pos)    
            <div class="grid-item col-lg-4">
                <div
                    class="media post-block post-block__fluid post-block__mid flex-column m-b-xs-30 m-b-md-70 m-b-lg-70">
                    <a href="/post/{{$pos->slug}}" class="align-self-center w-100"><img
                            class="w-100 m-b-xs-30" src="assets/images/fluid-gallery/gallery-img-1.jpg"
                            alt="fluid image"></a>
                    <div class="media-body">
                        <div class="post-cat-group m-b-xs-15">
                            <a href="/author/{{$pos->user1->username}}" class="post-cat cat-btn btn-big bg-color-red-two">{{$pos->user1->username}}</a>
                        </div>
                        <h3 class="axil-post-title hover-line"><a href="/post/{{$pos->slug}}">{{$pos['title']}}</a></h3>
                        <p class="mid">{{$pos['quote']}}</p>


                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- End of .row -->
    </div>
    <!-- End of .custom-fluid-container -->
</div>

	@endsection