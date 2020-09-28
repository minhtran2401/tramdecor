@section('pagetitle', 'Thiết kế chuyên nghiệp')
    @include('FE.header')



    <section>
        <section class="bg-home" style="background-image: url({{asset('cssFE')}}/images/home/bg-cafe.jpg);" >
            <div class="bg-overlay">

            </div>
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="title-heading text-center">
                                    <h1 class="mt-30x ">THI CÔNG - THIẾT KẾ NỘI THẤT SỐ MỘT </h1>
                                    <p class="text-white-ct mx-auto ">  CHUYÊN TƯ VẤN VÀ CUNG CẤP GIẢI PHÁP THIẾT KẾ KHÔNG GIAN ẤN TƯỢNG, HỢP XU HƯỚNG
                                    </p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        




        @foreach ($dv as $k)
            
       

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 mb-3">
                  
                   <div class="titlelane" ><h3>{{$k->name_dv}}
                </h3>
            </div>             
                </div>
                <div class="col-md-5">
                  
                      
                       <div class="noidung" > 
                           <p>
                           <?php echo  $k->mota_dv?>
                            </p>

                        </div>
                 <a href="">  <button class=" btn btn-custom custom1 mb-5" >HOTLINE (+84) 905 036 439</button></a>
                   
                </div>
                <div class="col-md-7">
                   <div class="anhdemo" >
                   <img src="{{asset('imgdichvu')}}/{{$k->image_dv}}" alt="">
               </div>
                  
               </div>
               <div class="container">
                <div class="row">
                    <?php
                    $spcon =DB::table('page')
                    ->join('dichvu','dichvu.id_dv','=','page.id_dv')
                       ->where("page.id_dv",'=',$k->id_dv)
                       ->limit(3)
                       ->get();    
                ?>
                    <div class="row p-3">
                     
                   @forelse ($spcon as $sp)
                       
                 
                        <div class="col-6 col-md-4 imgcafe">
                        <img  src="{{asset('hinhduan')}}/{{$sp->hinh_page_pri}}" class="img-fluid" alt="">
                        <div class="name text-center" >{{$sp->name_page}}</div>
                       
                        </div>
                        @empty
                            <div class="col-md-12">
                                <p><i>Sản Phẩm Đang Cập Nhật ...</i></p>
                            </div>
                   @endforelse
                   

                    </div>
                </div>
            </div>
       
        <hr style="border: 1px solid rgb(190, 186, 186); width: 90%;" >
 @endforeach
        




        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 mb-3">
                  
                   <div class="titlelane" ><h3>TẠI SAO CHỌN TRAMDECOR</h3></div>
                </div>

             <div class="col-md-12">
                 <p>- Cung cấp dịch vụ toàn diện từ thiết kế đến thi công nội thất </p>

                   <p> - Thiết kế sáng tạo, phong cách đa dạng, concept ý tưởng mới lạ</p>
                    
                  <p> - Chúng tôi luôn chuẩn xác về tiến độ, giúp khách hàng rút ngắn được thời gian chuẩn bị, đẩy nhanh thời gian kinh doanh đưa vào vận hành</p> 
                    
                   <p>- Chúng tôi luôn sẵn sàng cộng tác dù bạn ở bất kỳ thành phố nào</p>
             </div>   

             <div class="col-6 col-md-8">
             <img src="{{asset('cssFE')}}/images/sanpham/cafe/8.jpg" class="img-fluid" alt="">
             </div>
             <div class="col-6 col-md-4">
                <div class="titlelane" ><h3>QUY TRÌNH LÀM VIỆC CHUYÊN NGHIỆP</h3></div>
                <p>
                    <b>Bước 1</b>
                    <p>Tiếp nhận thông tin, tư vấn sơ bộ</p>
                    <p>Báo giá thiết kế</p>
                    <b>Bước 2</b>
                    <br>
                    <p>Khảo sát hiện trạng</p>
                    <p>Ký hợp đồng</p>
                    <b>Bước 3</b>
                    <br>
                    <p>Thiết kế bố trí phối cảnh 3D</p>
                    <p>Lên phương án thiết kế phối cảnh 3D</p>
                    <b>Bước 4</b>
                    <br>
                    <p>Triển khai bản vẽ kĩ thuật thi công 2D</p>
                    <p>Lập dự án thi công</p>
                    
                </p>
            </div>

            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 mb-3">
                  
                   <div class="titlelane" ><h3>GIÁ THIẾT KẾ NỘI THẤT
                </h3></div>
                 
                </div>
                <div class="col-md-12">
                  
                      
                       <div class="noidung" > 
                           <p>
                            TRAMDECOR cam kết tư vấn và báo giá phù hợp nhất cho từng loại hình công trình. Để sản phẩm hoàn thiện đạt được chất lượng thẩm mỹ nhất, công năng sử dụng hiệu quả, đúng với ngân sách đầu tư, chạm được đến phân khúc khách hàng của từng thương hiệu. Hãy liên hệ với chúng tôi để được báo gía chi tiết.
                        </p>
                         </div>
                 <a href="">  <button style="height: 60px;" class=" btn btn-custom custom1 mb-5" >LIÊN HỆ BÁO GIÁ : +(84) 905 036 439</button></a>
                   
                </div>
             


            </div>
        </div>
        

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlelane mb-5" ><h3>KHÁCH HÀNG ĐÁNH GIÁ VỀ DỊCH VỤ CỦA TRAMDECOR
                    </h3></div>
                </div>

             <div class="col-md-4 mb-5">
                 <div class="ykien">
                     <p>“Cảm ơn team nhiều! Thiết kế chúng tôi rất hài lòng, hy vọng Bánh Mì Xin Chào và Tramdecor sẽ còn nhiều cơ hội tiếp tục đồng hànhhành cùng nhau trong thời gian sắp tới”</p>
                     <div class="thongtin" >
                        — MR HOÀNG - DỰ ÁN BÁNH MÌ XIN CHÀO
                     </div>
                 </div>
             </div>

             
             <div class="col-md-4 mb-5">
                <div class="ykien">
                    <p>“Thiết kế đẹp, hiện đại, đúng ý đồ”</p>
                    <div class="thongtin" >
                        — MR TRỌNG - CREATIVE COFFEE
                    </div>
                </div>
            </div>

            
            <div class="col-md-4 mb-5">
                <div class="ykien">
                    <p>“Thiết kế đẹp, nhiệt tình, hỗ trợ khách hàng hết lòng”
                    </p>
                    <div class="thongtin" >
                        — MR QUỐC - DỰ ÁN SKY GARDEN CAFE
                    </div>
                </div>
            </div>
          

            </div>
        </div>

        </div>

        


       

    </section>
      


     
    @section('footer')
          @include('FE.footer')
  
