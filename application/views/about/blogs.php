<div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>blogs</h3>
                        <p><a href="index.html">Home /</a> blogs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        
                        <?php if(is_array($blogs) && $blogs != NULL) {
                            
                                foreach($blogs as $blog){
                        ?>
                                    <article class="blog_item">
                                        <div class="blog_item_img">
                                            <img class="card-img rounded-0" src="<?=base_url('assets/images/blogs/'.$blog->img)?>" alt>
                                            <a href="#" class="blog_item_date">
                                                <h3><?=$blog->date?></h3>
                                                <p><?=$blog->month?></p>
                                            </a>
                                        </div>
                                        <div class="blog_details">
                                            <a class="d-inline-block" href="<?=base_url('about/blog/'.$blog->id)?>">
                                                <h2><?=$blog->title?></h2>
                                            </a>
                                            <p><?=$blog->subtitle?></p>
                                        </div>
                                    </article>

                            <?php } ?>

                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <!-- <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li> -->
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>

                        <?php }else{ ?>

                            <h3>No Blogs Found</h3>

                        <?php } ?>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>