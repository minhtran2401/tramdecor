@foreach ($kq as $p)
<div>{{$p->name_page}}</div>
<div>{{$p->hinh_page_demo}}</div>
<?php
$demo = $p->hinh_page_demo;
$arr = explode("," , $demo);
?>
TAGS:
<ul>
    @foreach ($arr as $z)
    <li><a href="" class=""> {{$z}}</a> </li>
    @endforeach
</ul>

@foreach(json_decode($p->hinh_page_demo, true) as $images)
<div class="col-lg-2 col-md-2 col-sm-2">
    <a href="{{ URL::to('hinhdemo/'.$images)}}"
       class="portfolio-box">
        <img src="{{ URL::to('hinhdemo/'.$images)}}"
             class="img-responsive" alt="--">
        <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
            <span class="glyphicon glyphicon-zoom-in"
                  style="font-size: 80px"></span>
            </div>
        </div>
    </a>
</div> 
@endforeach


@endforeach