<div class="main">
    <div class="page-header larger parallax custom" style="background-image:url(assets/images/page-header-bg.jpg)">
        <div class="container">
            <h1>Blog Post</h1>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Blog Post</li>
            </ol>
        </div><!-- End .container -->
    </div><!-- End .page-header -->

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <article class="entry">
                    <div class="entry-media">
                        <figure>
                            <img src="/frontend/images/blog/post1.jpg" alt="entry image">
                        </figure>
                    </div><!-- End .enty-media -->

                    <h2 class="entry-title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit .</h2>
                    <div class="entry-meta">
                        <span><i class="fa fa-calendar"></i>17 January, 2016</span>
                        <a href="#"><i class="fa fa-comments"></i>8 Comment(s)</a>
                        <a href="#"><i class="fa fa-user"></i> Admin</a>
                    </div><!-- End .entry-meta -->

                    <div class="entry-content">
                        <?php echo h($post['Post']['content']); ?>
                    </div><!-- End .entry-content -->

                    <div class="entry-author">
                        <figure>
                            <img src="/frontend/images/blog/users/author.jpg" alt="Author" class="img-responsive">
                        </figure>
                        <div class="author-content">
                            <h4><a href="#">Justin Gadget</a></h4>
                            <p>Perspiciatis accusantium laudantium deserunt ad vel sit ipsam consequuntur tenetur similique, recusandae esse a enim, quibusdam ullam, error doloribus. Accusamus alias, ipsum tempora sapiente reiciendis quasi nostrum ratione aspernatur repellat.</p>
                            <div class="social-icons">
                                <label>Find Us:</label>
                                <a href="#" class="social-icon" title="Facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="social-icon" title="Twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="social-icon" title="Github"><i class="fa fa-github"></i></a>
                                <a href="#" class="social-icon" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="social-icon" title="Tumblr"><i class="fa fa-tumblr"></i></a>
                                <a href="#" class="social-icon" title="Flickr"><i class="fa fa-flickr"></i></a>
                            </div><!-- End .social-icons -->
                        </div><!-- end .author-content -->
                    </div><!-- End .entry-author -->
                </article>

                <div class="single-related-posts">
                    <h3 class="title mb25">Related Posts</h3>
                    <div class="blog-related-carousel owl-carousel">
                        <article class="entry entry-grid">
                            <div class="entry-media">
                                <figure>
                                    <a href="single.html"><img src="/frontend/images/blog/post1.jpg" alt="Post image"></a>
                                </figure>
                                <div class="entry-meta">
                                    <span><i class="fa fa-calendar"></i>17 Jan, 2016</span>
                                    <a href="#"><i class="fa fa-user"></i> Admin</a>
                                </div><!-- End .entry-media -->
                            </div><!-- End .entry-media -->
                            <h2 class="entry-title"><i class="fa fa-file-image-o"></i><a href="single.html">Lorem ipsum dolor sit ametli elits.</a></h2>
                            <div class="entry-content">
                                <p>Molestiae neque doloremque, voluptatum nostrum praesentium esse fugiat sus siel. Deserunt praesentium archite.</p>
                                <a href="#" class="readmore">Read more<i class="fa fa-angle-right"></i></a>
                            </div><!-- End .entry-content -->
                        </article>

                        <article class="entry entry-grid">
                            <div class="entry-media">
                                <figure id="blog-post-gallery" class="carousel slide" data-ride="carousel" data-interval="10000">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <a href="single.html"><img src="/frontend/images/blog/post2.jpg" alt="Post image"></a>
                                        </div><!-- End .item -->

                                        <div class="item">
                                            <a href="single.html"><img src="/frontend/images/blog/post3.jpg" alt="Post image"></a>
                                        </div><!-- End .item -->
                                    </div><!-- End .carousel-inner -->

                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#blog-post-gallery" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                    <a class="right carousel-control" href="#blog-post-gallery" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                                </figure><!-- End .carousel -->

                                <div class="entry-meta">
                                    <span><i class="fa fa-calendar"></i>14 Jan, 2016</span>
                                    <a href="#"><i class="fa fa-user"></i> Admin</a>
                                </div><!-- End .entry-meta -->
                            </div><!-- End .entry-media -->
                            <h2 class="entry-title"><i class="fa fa-file-image-o"></i><a href="single.html">Lorem ipsum dolor sit ametli elits.</a></h2>
                            <div class="entry-content">
                                <p>Molestiae neque doloremque, voluptatum nostrum praesentium esse fugiat sus siel. Deserunt praesentium archite.</p>
                                <a href="#" class="readmore">Read more<i class="fa fa-angle-right"></i></a>
                            </div><!-- End .entry-content -->
                        </article>

                        <article class="entry entry-grid">
                            <div class="entry-media">
                                <figure>
                                    <a href="single.html"><img src="/frontend/images/blog/post4.jpg" alt="Post image"></a>
                                </figure>
                                <div class="entry-meta">
                                    <span><i class="fa fa-calendar"></i>17 Jan, 2016</span>
                                    <a href="#"><i class="fa fa-user"></i> Admin</a>
                                </div><!-- End .entry-media -->
                            </div><!-- End .entry-media -->
                            <h2 class="entry-title"><i class="fa fa-file-image-o"></i><a href="single.html">Lorem ipsum dolor sit ametli elits.</a></h2>
                            <div class="entry-content">
                                <p>Molestiae neque doloremque, voluptatum nostrum praesentium esse fugiat sus siel. Deserunt praesentium archite.</p>
                                <a href="#" class="readmore">Read more<i class="fa fa-angle-right"></i></a>
                            </div><!-- End .entry-content -->
                        </article>

                        <article class="entry entry-grid">
                            <div class="entry-media">
                                <figure>
                                    <a href="single.html"><img src="/frontend/images/blog/post5.jpg" alt="Post image"></a>
                                </figure>
                                <div class="entry-meta">
                                    <span><i class="fa fa-calendar"></i>17 Jan, 2016</span>
                                    <a href="#"><i class="fa fa-user"></i> Admin</a>
                                </div><!-- End .entry-media -->
                            </div><!-- End .entry-media -->
                            <h2 class="entry-title"><i class="fa fa-file-image-o"></i><a href="single.html">Lorem ipsum dolor sit ametli elits.</a></h2>
                            <div class="entry-content">
                                <p>Molestiae neque doloremque, voluptatum nostrum praesentium esse fugiat sus siel. Deserunt praesentium archite.</p>
                                <a href="#" class="readmore">Read more<i class="fa fa-angle-right"></i></a>
                            </div><!-- End .entry-content -->
                        </article>
                    </div><!-- End .blog-related-carousel -->
                </div><!-- End .post-related-posts -->

                <div class="comments">
                    <h3 class="title mb25"><span>Commnets (20)</span></h3>
                    <ul class="comments-list media-list">
                        <li class="media">
                            <div class="comment">
                                <div class="media-left">
                                    <img class="media-object" src="/frontend/images/blog/users/user1.jpg" alt="User name">
                                </div><!-- End .media-left -->
                                <div class="media-body">
                                    <h4 class="media-heading">Steve Nash<span class="comment-date">49 min ago</span></h4>

                                    <p>Enim ad sapiente itaque illo laudantium tempore rem iure accusantium atque. Qui facilis quibusdam laborum. Nobis animi provident ipsum quidem eveniet voluptate expedita veniam porro quod a. Temporibus, voluptates provident.Ex deserunt error, culpa voluptatibus.</p>
                                </div><!-- End .media-body -->
                            </div><!-- End .comment -->
                            <ul>
                                <li class="media">
                                    <div class="comment">
                                        <div class="media-left">
                                            <img class="media-object" src="/frontend/images/blog/users/user2.jpg" alt="User name">
                                        </div><!-- End .media-left -->
                                        <div class="media-body">
                                            <h4 class="media-heading">Desmond Mason<span class="comment-date">32 min ago</span></h4>

                                            <p>Ex deserunt error, culpa voluptatibus, explicabo commodi id fugiat ipsa. Doloremque ipsum sapiente laudantium similique repellat, tempora voluptatem. Sunt tempore eligendi inventore molestiae delectus harum quasi consequuntur nisi repellendus saepe?</p>
                                        </div><!-- End .media-body -->
                                    </div><!-- End .comment -->
                                    <ul>
                                        <li class="media">
                                            <div class="comment">
                                                <div class="media-left">
                                                    <img class="media-object" src="/frontend/images/blog/users/user3.jpg" alt="User name">
                                                </div><!-- End .media-left -->
                                                <div class="media-body">
                                                    <h4 class="media-heading">Ben Wallece<span class="comment-date">21 min ago</span></h4>

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, iure. Minima alias nam magni distinctio voluptatum dolorum nostrum, iusto magnam ullam iure pariatur, qui dolore maiores iste, unde vitae. Dolores.</p>
                                                </div><!-- End .media-body -->
                                            </div><!-- End .comment -->
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="media">
                            <div class="comment">
                                <div class="media-left">
                                    <img class="media-object" src="/frontend/images/blog/users/user4.jpg" alt="User name">
                                </div><!-- End .media-left -->
                                <div class="media-body">
                                    <h4 class="media-heading">Steve Kerr<span class="comment-date">2 hours ago</span></h4>

                                    <p>Minima quae unde quam totam enim. Corporis debitis, tenetur illo deleniti totam perferendis doloribus. Laboriosam aperiam provident debitis earum fuga quibusdam odit unde vel hic commodi dolor, minus, nobis aliquid.</p>
                                </div><!-- End .media-body -->
                            </div><!-- End .comment -->
                        </li>
                    </ul>
                </div><!-- End .comments -->

                <div id="respond" class="comment-respond">
                    <h3 class="title mb25"><span>Send a Reply</span></h3>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Name" required>
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6">
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->
                        <input type="url" class="form-control" placeholder="Website" required>
                        <textarea class="form-control" rows="6" placeholder="Add Your Comment" required></textarea>
                        <div class="mb5"></div>
                        <input type="submit" class="btn btn-black min-width" value="Send Reply">
                    </form>
                </div><!-- End #respond -->
            </div><!-- End .col-md-9 -->

            <aside class="col-md-3 sidebar">
                <div class="widget search-widget">
                    <form action="#">
                        <input type="search" class="form-control" placeholder="Search in here" required>
                        <button type="submit" class="btn btn-link"><i class="fa fa-search"></i></button>
                    </form>
                </div><!-- End .widget -->

                <div class="widget">
                    <h3 class="widget-title">Categories</h3>
                    <ul class="fa-ul">
                        <?php foreach($categories as $category){?>
                        <li><a href="#"><i class="fa-li fa fa-chain"></i><?php echo $category['Category']['name'];?> (4)</a></li>
                        <?php }?>
                    </ul>
                </div><!-- end .widget -->

                <div class="widget">
                    <h3 class="widget-title">Recent Posts</h3>
                    <ul class="posts-list">
                        <?php foreach($recent_posts as $recent_post){?>
                        <li>
                            <figure>
                                <a href="#" title="Dolores labore quod"><img src="/frontend/images/blog/thumbs/post1.jpg" alt="Post"></a>
                            </figure>
                            <h5><a href="#"><?php echo h($recent_post['Post']['title']); ?></a></h5>
                            <span><?php echo h($recent_post['Post']['dateadd']); ?></span>
                        </li>
                        <?php }?>
                    </ul>
                </div><!-- End .widget -->

                <div class="widget">
                    <h3 class="widget-title">Tagcloud</h3>
                    <div class="tagcloud">
                        <a href="#">Design</a>
                        <a href="#">Develop</a>
                        <a href="#">Seo</a>
                        <a href="#">jQuery</a>
                        <a href="#">Wordpress</a>
                        <a href="#">Angular</a>
                        <a href="#">Node</a>
                        <a href="#">Express</a>
                        <a href="#">Gulp</a>
                        <a href="#">Sass</a>
                        <a href="#">Bootstrap</a>
                        <a href="#">Html5</a>
                        <a href="#">Css3</a>
                        <a href="#">Node</a>
                    </div><!-- End .tagcloud -->
                </div><!-- End .widget -->

                <div class="widget flickr-widget">
                    <h3 class="widget-title">Flickr</h3>
                    <div class="row">
                        <ul class="flickr-widget-list clearfix"></ul>
                    </div><!-- end .row -->
                </div><!-- End .widget -->

                <div class="widget">
                    <h3 class="widget-title">Twitter Feed</h3>
                    <div class="twitter-feed-widget">

                    </div><!-- End .twitter-feed-widget -->
                </div><!-- End .widget -->

                <div class="widget">
                    <h3 class="widget-title">Video</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="560" height="315" src="http://www.youtube.com/embed/jt8YicG-F6c" allowfullscreen></iframe>
                    </div><!-- End .embed-responsive -->
                </div><!-- End .widget -->
            </aside>
        </div><!-- end .row -->
    </div><!-- End .container -->
</div><!-- End .main -->