
    

  @yield('header')
 
                <!--Anh bìa-->

               @include('FE.banner')
                <!-- End ảnh bìa--> 
        
                    <div class="container mt-5">
                        <div class="row">
                        <div class="col-md-8">
                            <div class="col-md-12">
                                <div class="title-heading" > <h2> CÔNG TY THI CÔNG &THIẾT KẾ NỘI THẤT CHUYÊN NGHIỆP</h2></div>
                                <div class="content-ct mt-3" ><p>TRAMDECOR  - công ty thi công thiết kế nội thất uy tín tại tphcm, được thành lập từ năm 2013 bởi founder Trâm Nguyễn. Đội ngũ của chúng tôi tập hợp bởi những nhà thiết kế sáng tạo cùng định hướng về thẩm mỹ, đam mê lĩnh vực thiết kế và trang trí. Với phong cách làm việc chuyên nghiệp, tâm huyết, Tramdecor đã xây dựng được những giá trị nhất định trong dịch vụ của mình. Được khách hàng biết đến như một đơn vị thiết kế trẻ chuyên nghiệp, tận tâm, uy tín về chất lượng thiết kế Ý Tưởng Sáng Tạo - Chỉnh Chu Chi Tiết - Tiến Độ Chuẩn Xác, chúng tôi đồng hành đắc lực cho nhiều khách hàng cá nhân, doanh nghiệp, start up trong  và ngoài nước.</p></div>
                            </div>
                           
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12" style="font-family: 'Quicksand', sans-serif;                    ">
                                <p class="text-center" style="color:red;font-size: 18px">&gt;&gt;ĐĂNG KÝ NHẬN TƯ VẤN NGAY&lt;&lt; </p>
                                <div class="row">
                                        <div class="col-md-12"> <label for="name">Họ Tên *</label></div>
                                    <div class="col-lg-6">
                                        <div class="form-group app-label">
                                            <input name="name1" id="name1" type="text" class="form-control bg-grey" >
                                            <small>Họ</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group app-label">
                                            <input name="name2" id="name2" type="email" class="form-control bg-grey" >
                                            <small>Tên</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group app-label">
                                            <label for="phone">Điện Thoại *</label>
                                            <input type="text" class="form-control bg-grey">
                                        </div>
                                    </div>
        
                                    <div class="col-lg-12">
                                        <div class="form-group app-label">
                                            <label for="email">Email *</label>
                                            <input type="text" class="form-control bg-grey">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-right">
                                        <input type="submit" name="send" class="submitBnt btn btn-custom" value="ĐĂNG KÝ">
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        
                        <div class="homeimg col-md-12 mt-5" >
                            <img src="cssFE/images/sanpham/anh1.jpg" alt="">
                        </div>
                      
                    </div>
                  
                    </div>
                    <hr style="border: 1px solid rgb(190, 186, 186); width: 90%;" >
                 
                 <!--End lane1-->   
        
                 <!--dichvu-->
        
                 <!--dv1-->
        
                 <div class="container">
                     <div class="row">
                         <div class="col-md-12">
                           
                                <div class="title text-black"  ><h2 >DỊCH VỤ</h2></div>
                          
                         </div>
          
                         <?php
                         $kq =DB::table('dichvu')
           
                         ->orderby('id_dv', 'asc')
                        
                         ->get();
        ?>    
           
        
                         @foreach ($kq as $s)
                             
                    
        
                         <div class="container mt-5">
                            <div class="row">
                             
                                <div class="col-md-5">
                                  
                                <div class="titlelane" ><h3>THI CÔNG {{$s->name_dv}}</h3></div>
                                       <div class="noidung" > 
                                           <p>
                                            <?php echo $s->mota_dv?>
                                        </p>
                                       </div>
                                    <a href="">  <button class=" btn btn-custom custom1 mb-5" >XEM TẤT CẢ DỰ ÁN {{$s->name_dv}}</button></a>
                                   
                                </div>
                                <div class="col-md-7">
                                   <div class="anhdemo" >
                                   <img src="{{asset('imgdichvu')}}/{{$s->image_dv}}" alt="">
                               </div>
                                  
                               </div>
                            </div>
                        </div>
                      
                        @endforeach
                        
                           
                        </div>
                     </div>
                 </div>
        
          
        
        
        
        
         
        
              
         
        
            
        
                <div class="container mt-5">
                    <div class="row">
                     
                        <div class="col-md-5">
                          
                               <div class="titlelane" ><h3>TẠI SAO CHỌN TRAMDECOR                    </h3></div>
                               <div class="noidung" > 
                                   <p>
                                    <p> - Quy trình làm việc chuyên nghiệp</p>
        
                                   <p>- Thiết kế sáng tạo, phong cách đa dạng, concept ý tưởng mới lạ</p> 
                                    
                                  <p>- Chúng tôi luôn chuẩn xác về tiến độ, giúp khách hàng rút ngắn được thời gian chuẩn bị, đẩy nhanh thời gian kinh doanh đưa vào vận hành        </p>                  </p>                </div>
                         <a href="">  <button class=" btn btn-custom custom1 mb-5" >LIÊN HỆ TƯ VẤN</button></a>
                           
                        </div>
                        <div class="col-md-7">
                           <div class="anhdemo" >
                          <img src="cssFE/images/sanpham/whychoosewe.jpg" alt="">
                       </div>
                          
                       </div>
                    </div>
                </div>
                <!--end dich vu-->
        
                <hr style="border: 1px solid rgb(190, 186, 186); width: 90%;" >
        
                <!--user-->
        
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlelane mb-5" ><h3>ĐỘI NGŨ CỦA TRAMDECOR SÁNG TẠO VÀ CHUYÊN NGHIỆP</h3></div>
                        </div>
                        <div class="row">
        
                            <?php
                            $nv =DB::table('nhanvien')
              
                            ->orderby('id_nv', 'asc')
                           
                            ->get();
           ?>    
              
                           
                            @foreach ($nv as $nv)
                  
                            <div class="col-6 col-md-4">
                            <img width="400" src="{{asset('hinhnhanvien')}}/{{$nv->hinh_nhanvien}}" class="img-fluid" alt="">
                            <div class="name text-center" >{{$nv->name_nv}} - {{$nv->chucvu_nv}}
                                </div>
        
                            </div>
                          
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--enduser-->
        
                <hr style="border: 1px solid rgb(190, 186, 186); width: 90%;" >
                <!--map-->
        
                @include('FE.danhgia')
        
        
                <hr style="border: 1px solid rgb(190, 186, 186); width: 90%;" >
        
                <!--blog-->
        
                <div class="container mb-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlelane " ><h3>BLOG
                            </h3></div>
                        </div>
                        <div class="col-md-12">
                            <small style="font-family: 'Quicksand', sans-serif; color:black;" >Tham khảo ý tưởng thiết kế</small>
                        </div>
                        <div class="col-md-12">
                            <div id="testi-two" class="owl-carousel">
        
                                <?php
                                $blog =DB::table('blog')
                  
                                ->orderby('ngay_blog', 'desc')
                                ->limit(5)
                                ->get();
                ?>    
                            @foreach ($blog as $bl)
                                
                          
                                <div class=" col-md-12">
                                    <!-- POST START -->
                                    <article class="post blog-post">
                                        <div class="post-preview">
                                        <a href="#"><img src="{{asset('imgblog')}}/{{$bl->hinh_blog}}" alt="" class="img-fluid mx-auto d-block"></a>
                                        </div>
                
                                        <div class="post-header">
                                            <h4 class="post-title"><a href="#"> {{$bl->name_blog}} </a></h4>
                                          
                
                                            <div class="post-content">
                                                <p class="text-muted">
                                                    <?php
                                                        echo $bl->tomtat_blog
                                                    ?>
                                                </p>
                                            </div>
                                            <ul class="post-meta">
                                            <li><i class="mdi mdi-calendar"></i> <small>{{date('Y-m-d ', strtotime($bl->ngay_blog))                                    }}</small></li>
                                               
                                            </ul>
                                            <span class="bar"></span>
                
                                            <div class="post-footer">
                                               
                                                <div class="post-more"><a href="#">Đọc tiếp <i class="mdi mdi-arrow-right"></i></a></div>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- POST END -->
                
                                  
                                </div>
                                @endforeach
        
        
                            </div>
                        </div>
                      
                    </div>
                </div>
   

        @yield('footer')
