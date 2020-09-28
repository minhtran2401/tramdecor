<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="titlelane " ><h3>KHÁCH HÀNG CỦA CHÚNG TÔI Ở KHẮP MỌI NƠI
            </h3></div>
        </div>
        <div class="homeimg col-md-12 mt-5" >
            <img src="cssFE/images/home/bg2.jpg" alt="">
        </div>
    </div>
</div>

<!--phan hoi user-->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="titlelane mb-5" ><h3>KHÁCH HÀNG ĐÁNH GIÁ VỀ DỊCH VỤ CỦA TRAMDECOR
            </h3></div>
        </div>

        <?php
        $dg =DB::table('danhgia')

        ->orderby('id_danhgia', 'desc')
        ->limit(3)
        ->get();
?>    


        @foreach ($dg as $dg)
            
     

     <div class="col-md-4 mb-5">
         <div class="ykien">
         <p>“{{$dg->noidung_danhgia}}”</p>
             <div class="thongtin" >
                — {{$dg->nguoi_danhgia}} - {{$dg->duan_danhgia}}
             </div>
         </div>
     </div>

     @endforeach

  

    </div>
</div>