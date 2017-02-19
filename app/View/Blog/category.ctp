<div class="main">
    <div class="page-header larger parallax custom" style="background-image:url(assets/images/page-header-bg.jpg)">
        <div class="container">
            <h1>Blog</h1>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Blog</li>
            </ol>
        </div><!-- End .container -->
    </div><!-- End .page-header -->

    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <?php foreach ($posts as $post) { ?>
                      <article class="entry entry-list">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="entry-media">
                                      <figure>
                                          <a href="/blog/detail/<?php echo $post['Post']['slug'];?>"><img src="/frontend/images/blog/post1.jpg" alt="Post image"></a>
                                      </figure>
                                      <div class="entry-meta">
                                          <span><i class="fa fa-calendar"></i><?php echo $post['Post']['dateadd'];?></span>
                                          <a href="#"><i class="fa fa-user"></i> Admin</a>
                                      </div><!-- End .entry-media -->
                                  </div><!-- End .entry-media -->
                              </div><!-- End .col-md-6 -->
                              <div class="col-md-6">
                                  <h2 class="entry-title"><i class="fa fa-file-image-o"></i>
                                      <a href="/blog/detail/<?php echo $post['Post']['slug'];?>"><?php echo $post['Post']['title'];?></a>
                                  </h2>
                                  <div class="entry-content">
                                      <?php echo $post['Post']['content'];?>
                                      <a href="/blog/detail/<?php echo $post['Post']['slug'];?>" class="readmore">Read more<i class="fa fa-angle-right"></i></a>
                                  </div><!-- End .entry-content -->
                              </div><!-- End .col-md-6 -->
                          </div><!-- End .row -->
                      </article>
                  <?php } ?>
                <pre>
                    <?php print_r($posts)?>
                </pre>
                <nav class="pagination-container">
                    <label>Showing: 1-4 of 16</label>
                    <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
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
                        <li><a href="/blog/category/<?php echo $category['Category']['id'];?>"><i class="fa-li fa fa-chain"></i><?php echo $category['Category']['name'];?> (4)</a></li>
                        <?php }?>
                    </ul>
                </div><!-- end .widget -->

                <div class="widget">
                    <h3 class="widget-title">Recent Posts</h3>
                    <ul class="posts-list">
                        <?php foreach($recent_posts as $recent_post){?>
                        <li>
                            <figure>
                                <a href="/blog/detail/<?php echo h($recent_post['Post']['slug']); ?>" title="Dolores labore quod"><img src="/frontend/images/blog/thumbs/post1.jpg" alt="Post"></a>
                            </figure>
                            <h5><a href="/blog/detail/<?php echo h($recent_post['Post']['slug']); ?>"><?php echo h($recent_post['Post']['title']); ?></a></h5>
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

            </aside>
        </div><!-- End .row -->
    </div><!-- End .container -->
</div><!-- End .main -->