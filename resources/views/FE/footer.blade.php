<footer class="footer">
    <div class="section-two">
        <div class="container">
            <!--Footer Info -->
            <div class="row footer-info">
                
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="footer-head">
                     
                    </div>
                    <div class="footer-item mt-3">
                        <ul class="list-unstyled">
                            <?php

use Illuminate\Support\Facades\DB;

$menu =DB::table('dichvu')
        ->select('id_dv', 'name_dv')
        ->get();


  

?>
@foreach ($menu as $mn)
    

                        <li><a href="{{asset('thiet-ke')}}/{{$mn->id_dv}}"><i class="fas fa-chevron-right mr-2"></i> {{$mn->name_dv}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12">
                   
                    <p style="color: #fc0 !important;" class="text-footer-clr mt-3">LIÊN HỆ NGAY ĐỂ ĐƯỢC TƯ VẤN</p>
                    <div class="text-ft">
                       <p>TRAMDECOR rất hân hạnh được chào đón quý khách hàng tại văn phòng của chúng tôi tại: </p>
                       <p>17 Tú Xương, phường 7, quận 3, tp HCM</p>

                       <p style="color: #fc0 !important;" class="text-footer-clr mt-3">HOTLINE : (+84) 905 036 439</p>
                       <p>Email: tram@tramdecor.com</p>
                    </div>
                </div>

               
                <div class="col-lg-4 col-md-6 col-sm-12">
                    
                    <div class="footer-news mt-3">
                      
                        <button class="btn btn-custom custom2" >XEM PROFILE TẠI ĐÂY</button>
                       
                    </div>
                </div>
            </div>
            <!-- End Footer Info -->
        </div>
    </div>
    <hr>

    <!-- Copyright Bar -->
    <section class="section-30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="copy-rights text-white mb-0"><a href="https://www.facebook.com/profile.php?id=100005567533403" target="_blank">TRẦN NHẬT MINH MADE WITH ♥</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Copyright Bar -->
</footer>
<!-- FOOTER END -->




    


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="cssFE/js/owl.carousel.min.js"></script>
<script src="cssFE/js/owlcarousel.init.js"></script>
<script src="cssFE/js/slick.min.js"></script> 
<script src="cssFE/js/slick.init.js"></script> 
<script src="cssFE/js/jquery.min.js"></script>
<script src="cssFE/js/popper.min.js"></script>
<script src="cssFE/js/bootstrap.min.js"></script>
<script src="cssFE/js/app.js"></script>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>