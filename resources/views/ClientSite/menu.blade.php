@extends('ClientSite.master')
@section('content')
<div id="wrapper">
    <div class="content">
       <?php if($cat->count()=="0"){
        echo '<section class="parallax-section header-section">
            <div class="bg bg-parallax comming-soon-menu" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
            <div class="overlay"></div>
            <div class="container">
                <h2 class="menu-comming-soon-text">Menu Comming Soon</h2>
                 <h3>the Fine Dine Restaurant</h3>
            </div>
        </section>';
        }else{ ?>
        @foreach($cat as $i=>$cat)

        <section class="parallax-section <?php if($i==0) {
            echo 'header-section';
        }?>">
            <div class="bg bg-parallax" style="background-image:url({{url('uploads/Category')}}/{{$cat->cat_image}})" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
            <div class="overlay"></div>
            <div class="container">
                <h2>{{$cat->cat_name}}</h2>
                <!-- <h3>Aenean ultricies mi vitae est</h3> -->
                <div class="bold-separator">
                    <span></span>
                </div>
            </div>
        </section>
        <section id="menu-sec">
            <div class="triangle-decor"></div>
            <!-- style="background-image:url({{url('public/Client_Assests/images/menu/2.png')}})" -->
            <div class="menu-bg rbd"  data-top-bottom="transform: translateX(-200px);" data-bottom-top="transform: translateX(200px);"></div>
            <div class="container">
                <div class="separator color-separator"></div>
                <div class="menu-holder">
                    <div class="row">
                        <?php
                        $cat_name=$cat->cat_name;
                         $menu=DB::table('add_menu_item')->where('item_category','=',$cat_name)->get();?>
                        @foreach($menu as $menu)
                        <div class="col-md-6">
                            <!--menu item-->
                            <div class="menu-item <?php if($menu->item_type=="chef"){echo "hot-deal";} ?>">
                                <?php if($menu->item_type=="chef"){?>
                                <span class="hot-desc">Chef Selection</span>
                                  <?php } ?>
                                <div class="menu-item-details">
                                    <div class="menu-item-desc"><a href="" class="image-popup">{{$menu->item_name}}</a></div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs {{$menu->item_price}}</div>
                                    </div>
                                </div>
                                <p>{{$menu->item_des}}</p>
                            </div>
                            <!--menu item end-->
                        </div>
                        @endforeach
                       
                </div>
                <div class="bold-separator">
                    <span></span>
                </div>
            </div>
        </section>

        @endforeach
          <?php } ?>
   

    </div>
    <!--content end-->
    <!--=============== footer ===============-->
      @endsection