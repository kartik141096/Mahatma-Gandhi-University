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
                        
                        <?php if(is_array($blog) && $blog != NULL) {
                            
                                foreach($blog as $blog){
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
                                            <!-- <a class="d-inline-block" href="<?=base_url('about/blog/'.$blog->id)?>"> -->
                                                <h2><?=$blog->title?></h2>
                                            <!-- </a> -->
                                            <p><?=$blog->subtitle?></p>
                                            <?php
                                            foreach($blog_slave AS $blog_details){ ?>


                                                <h4><?=$blog_details->heading?></h4>
                                                <p><?=$blog_details->description?></p>


                                            <?php
                                                }
                                            ?>
                                        </div>
                                        
                                    </article>

                            <?php 
                            }  
                        }
                        else{ ?>

                            <h3>No Blogs Found</h3>

                        <?php } ?>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>