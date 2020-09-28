<?php

use Illuminate\Support\Facades\DB;


$menu =DB::table('dichvu')
        ->select('id_dv','slug', 'name_dv')
        ->get();

$menutd =DB::table('tuyendung')
        ->select('id_tuyendung', 'name_tuyendung')
        ->where('Anhien','=','1')
        ->get();  



?>
<div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu {{ request()->is('thiet-ke','thiet-ke/*') ? 'active ' : '' }}">
                        <a href="{{route('thietke')}}">THIẾT KẾ</a><span class="menu-arrow"></span>
                            <ul class="submenu active">
                              
                                @foreach ($menu as $mn)
                                    
                            
                            <li><a class="" href="{{route("thietkesg",$mn->id_dv)}}-{{$mn->slug}}">{{$mn->name_dv}}</a></li> 
                                @endforeach                               


                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#">THI CÔNG</a> 
                        </li>

                        <li class="has-submenu">
                            <a href="#">BLOG</a> 
                        </li>
                        <li class="has-submenu">
                            <a href="#">TUYỂN DỤNG</a> <span class="menu-arrow"></span>
                            <ul class="submenu">  
                                @foreach ($menutd as $td)
                                    
                                                   
                            <li><a href="#">{{$td->name_tuyendung}}</a></li>
                                  @endforeach                                                
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#">LIÊN HỆ</a> 
                            
                        </li>

                    </ul>
                    <!-- End navigation menu-->
                </div>