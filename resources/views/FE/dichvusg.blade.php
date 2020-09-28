@section('pagetitle', " $Ten_dv - Thiết kế chuyên nghiệp")
    @include('FE.header')
<section>
    
    <section class="bg-home" style="background-image: url({{asset('imgbanner')}}/{{$img_banner}});" >
        <div class="bg-overlay">

        </div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="title-heading text-center">
                                <h1 class="mt-30x ">{{$Ten_dv}} </h1>
                                <p class="text-white-ct mx-auto ">  {{$Slogan_dv}}
                                </p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr style="border: 1px solid rgb(190, 186, 186); width: 90%;" >

    <!--------------------------------------->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlelane mb-5" ><h3>{{$Ten_dv}}
                </h3></div>
            </div>
            <div class="row p-3">


                @forelse ($sp as $spz)
               
                    
              

                <div class="col-6 col-md-4 imgcafe">
                <img  src="{{asset('hinhduan')}}/{{$spz->hinh_page_pri}}" class="img-fluid" alt="">
                    <div class="name text-center" >{{$spz->name_page}}</div>
                </div>
               
                @empty
                        <div class="col-md-12">
                            <p><i>Sản Phẩm Đang Được Cập Nhật...</i></p>
                        </div>
                        
                @endforelse
                <div class="col-12">
                    <div class="pagination-area d-sm-flex mt-15">
                        <nav aria-label="#">
                            <ul class="pagination">
                                <?php echo $sp->links(); ?>
                            </ul>
                        </nav>
                       
                    </div>
                </div>

                


            </div>
 
          
        </div>
    </div>
   
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
                        <b>Bảng báo giá thiết kế nội thất nhà hàng tại Tramdecor bao gồm các hạng mục:</b>
                        <ul>
                            <li>Báo giá thiết kế nội thất 3D                                </li>
                            <li>Báo giá thiết kế triển khai kỹ thuật 2D (bao gồm bản vẽ mặt bằng bố trí nội thất, bản vẽ chi tiết trần sàn tường, bản vẽ chi tiết đồ đạc)                                </li>
                            <li>Báo giá thiết kế mặt bằng bố trí ( không tính phí nếu khách hàng ký hợp đồng hợp tác)
                            </li>
                        </ul>
                        <p>Tùy theo nhu cầu báo giá thiết kế nội thất nhà hàng trọn gói, hay thiết kế concept, Tramdecor sẽ gửi file chi phí thiết kế nội thất chi tiết cho khách hàng. Đơn giá thiết kế nội thất nhà hàng được tính theo m2, hãy liên hệ trực tiếp đến nhân viên tư vấn của Tramdecor để nhận báo giá chính xác.</p>
                    </p>
                     </div>
                        <div class="button1" >   <a href="">  <button style="height: 60px;" class=" btn btn-custom custom1 mb-5" >LIÊN HỆ BÁO GIÁ : +(84) 905 036 439</button></a></div>
               
            </div>
         


        </div>
    </div>

   @include('FE.danhgia')
</section>
@include('FE.footer')