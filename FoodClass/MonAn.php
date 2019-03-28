<?php
  require_once("entities/Product.class.php");

  if(isset($_GET["id"]) )
    $id = $_GET["id"];
else    
    $id="";
 ?>
<?php

$tenmonan_theoloai = MonAn::MonAn_TheoLoai();
?>


                                                                    <!--Tenmonan_theoloai-->
                                                                    <?php
                                                                    foreach ($tenmonan_theoloai as $rows) 
                                                                    {        
                                                                    ?>
                                                                        <li class="wow fadeInUp" data-wow-delay="0.1s">
                                                                            <div class="featured-restaurant-box">
                                                                                <div class="featured-restaurant-thumb">
                                                                                    <a href="food-detail.php?id=MonAn&MaMonAn=<?php echo $rows['MaMonAn'];?>"
                                                                                        title="" itemprop="url"><img
                                                                                            src="assets/images/resource/<?php echo $rows['Avatar'];?>"
                                                                                            alt="<?php echo $rows['Avatar'];?>"
                                                                                            itemprop="image"></a>
                                                                                </div>
                                                                                <div class="featured-restaurant-info">
                                                                                    <h4 itemprop="headline"><a
                                                                                            href="food-detail.php?id=MonAn&MaMonAn=<?php echo $rows['MaMonAn'];?>"
                                                                                            title=""
                                                                                            itemprop="url"><?php echo $rows['TenMonAn']; ?></a>
                                                                                    </h4>
                                                                                    <span class="price">$85.00</span>
                                                                                    <p itemprop="description">Lorem
                                                                                        Ipsum is simply dummy text of
                                                                                        the printing industry</p>
                                                                                    <ul class="post-meta">
                                                                                        <li><i
                                                                                                class="fa fa-check-circle-o"></i>
                                                                                            Min order $50</li>
                                                                                        <li><i
                                                                                                class="flaticon-transport"></i>
                                                                                            30min</li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="ord-btn">
                                                                                    <a class="brd-rd2" href="#"
                                                                                        title="Order Now"
                                                                                        itemprop="url">Order Now</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    </ul>


                                                                </div>
                                                                
