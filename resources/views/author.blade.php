@extends('layout.main1')
@section('main_content')

    <div class="random-posts section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <main class="axil-content">
                        @foreach ($posts as $post)
                        <div class="media post-block post-block__mid m-b-xs-30">
                            <a href="/post/{{$post->slug}}" class="align-self-center"><img class=" m-r-xs-30"
                                src="../assets/images/business-news/post-img-3.jpg" alt=""></a>
                                <div class="media-body">
                                <h3 class="axil-post-title hover-line hover-line">
                                <a href="/post/{{$post->slug}}">{{$post->title}}</a></h3>
                                <p class="mid">{{$post->quote}}</p>
                                <div class="post-metas">
                                    <ul class="list-inline">
                                        <li>Category_<a href="/category/{{$post->category->slug}}">{{$post->category->name}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </main>
                </div>
                <div class="col-lg-4">
                    <aside class="post-sidebar">
                        <div class="add-block-widget m-b-xs-40">
                            <a href="#"><img src="../assets/images/clientbanner/clientbanner2.jpg" alt="sidebar add"
                                    class="img-fluid"></a>
                        </div>
                        <!-- End of .add-block-widget -->
                        <div class="sidebar-social-share-widget m-b-xs-40">
                            <ul class="social-share-list-wrapper">
                                <li class="social-share-list text-center perfect-square">
                                    <a href="#" class="list-inner bg-color-facebook">
                                        <i class="fab fa-facebook-f"></i>
                                        <div class="counts">2000+</div>
                                        <div class="title">Fans</div>
                                    </a>
                                </li>
                                <!-- End of .social-share-list -->

                                <li class="social-share-list text-center perfect-square">
                                    <a href="#" class="list-inner bg-color-twitter">
                                        <i class="fab fa-twitter"></i>
                                        <div class="counts">4000+</div>
                                        <div class="title">Followers</div>
                                    </a>
                                </li>
                                <!-- End of .social-share-list -->

                                <li class="social-share-list text-center perfect-square">
                                    <a href="#" class="list-inner bg-color-youtube">
                                        <i class="fab fa-youtube"></i>
                                        <div class="counts">1M+</div>
                                        <div class="title">Subscribers</div>
                                    </a>
                                </li>
                                <!-- End of .social-share-list -->

                                <li class="social-share-list text-center perfect-square">
                                    <a href="#" class="list-inner bg-color-linkedin">
                                        <i class="fab fa-linkedin-in"></i>
                                        <div class="counts">600+</div>
                                        <div class="title">Connections</div>
                                    </a>
                                </li>
                                <!-- End of .social-share-list -->

                                <li class="social-share-list text-center perfect-square">
                                    <a href="#" class="list-inner bg-color-vimeo">
                                        <i class="fab fa-vimeo"></i>
                                        <div class="counts">500+</div>
                                        <div class="title">Connections</div>
                                    </a>
                                </li>
                                <!-- End of .social-share-list -->

                                <li class="social-share-list text-center perfect-square">
                                    <a href="#" class="list-inner bg-color-pinterest">
                                        <i class="fab fa-pinterest"></i>
                                        <div class="counts">600+</div>
                                        <div class="title">Followers</div>
                                    </a>
                                </li>
                                <!-- End of .social-share-list -->

                                <li class="social-share-list text-center perfect-square">
                                    <a href="#" class="list-inner bg-color-twitch">
                                        <i class="fab fa-twitch"></i>
                                        <div class="counts">1K+</div>
                                        <div class="title">Followers</div>
                                    </a>
                                </li>
                                <!-- End of .social-share-list -->

                                <li class="social-share-list text-center perfect-square">
                                    <a href="#" class="list-inner bg-color-instagram">
                                        <i class="fab fa-instagram"></i>
                                        <div class="counts">1K+</div>
                                        <div class="title">Followers</div>
                                    </a>
                                </li>
                                <!-- End of .social-share-list -->
                            </ul>
                            <!-- End of .social-share-list-wrapper -->
                        </div>
                    </aside>
                    <!-- End of .post-sidebar -->
                </div>
                <!-- End of .col-lg-4 -->
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .container -->
    </div>

	@endsection
	