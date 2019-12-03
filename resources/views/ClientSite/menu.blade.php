@extends('ClientSite.master')
@section('content')

<style type="text/css">
    
    /*menu items */
.sub-category-drinks{
   background: linear-gradient(30deg,#b6712b 0%,#F2EA91 50%,#b6712b 100%) !important; 
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
    font-size: 22px !important

}


</style>

<div id="wrapper">
    <div class="content">
       <?php if($cat->count()=="0"){
        echo '<section class="parallax-section header-section">
            <div class="bg bg-parallax comming-soon-menu" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
            <div class="overlay"></div>
            <div class="container">
                <h2 class="menu-comming-soon-text">Menu Comming Soon</h2>
                 <h3>the Fine Dine Restaurantsss</h3>
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
                <h2><?php echo str_replace("_"," ",$cat->cat_name);?></h2>
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
                                    <div class="menu-item-desc">{{$menu->item_name}}</div>
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
   

       <section class="parallax-section ">
            <div class="bg bg-parallax" style="background-image:url({{url('public/Client_Assests/images/bg/20.jpg')}})" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
            <div class="overlay"></div>
            <div class="container">
                <h2>Bar & Drinks</h2>
                <!-- <h3>Aenean ultricies mi vitae est</h3> -->
                <div class="bold-separator">
                    <span></span>
                </div>
            </div>
        </section>
        <section id="menu-sec">
            <div class="triangle-decor"></div>
            <div class="menu-bg rbd"  data-top-bottom="transform: translateX(-200px);" data-bottom-top="transform: translateX(200px);"></div>
            <div class="container">
                <div class="separator color-separator"></div>
            
            <!-- Fresh Juice -->
            <div class="menu-holder">
                    <div class="row">
                        
                        <div class="col-md-12 text-center">
                             <div class="sub-category-drinks">FRESH EXOTOC SEASONAL JUICES</div>
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">APPLE</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 530</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Peach</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 530</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Strawberry</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 530</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>



                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Orange</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 530</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>



                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Grapes</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 530</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>



                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Pomegranate</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 530</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>
                                               
                </div>
                <div class="bold-separator">
                    <span></span>
                </div>                
            </div>

            <!-- Mocktails -->
            <div class="menu-holder">
                    <div class="row">
                        
                        <div class="col-md-12 text-center">
                             <div class="sub-category-drinks">THE TOP NOTCH MOCKTAILS</div>
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Mint Margarita</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 480</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Apple Ginger Margarita</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 480</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Grapes Mint Margarita</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 480</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>



                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Lemonade</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 390</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>



                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Pina Colada</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 485</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>



                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Strawberry Cooler</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 390</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Oreo Shake</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 450</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>



                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Salted Caramel Shake</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 450</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>


                    <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">
                                        Almond Date Shake
                                    </div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 500</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                        
                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Angel Kiss</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 450</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>


                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">
                                        Rainbow Magic
                                    </div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 450</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>
                                               
                </div>
                <div class="bold-separator">
                    <span></span>
                </div>                
            </div>  

            <!-- Smoothies -->
            <div class="menu-holder">
                    <div class="row">
                        
                        <div class="col-md-12 text-center">
                             <div class="sub-category-drinks">SMOOTHIES</div>
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Peach Smoothy</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 450</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Apple Smoothy</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 450</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Banana Smoothy</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 450</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>



                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Mango Smoothy</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 450</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>



                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Strawberry Smoothy</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 450</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>



                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Grapes Smoothy</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 450</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>
                                               
                </div>
                <div class="bold-separator">
                    <span></span>
                </div>                
            </div>

            <!-- Cold Beverage chillers -->
            <div class="menu-holder">
                    <div class="row">
                        
                        <div class="col-md-12 text-center">
                             <div class="sub-category-drinks">COLD BEVERAGE CHILLERS</div>
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Apple Chiller</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 475</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Strawberry Chiller</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 475</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Mango Chiller</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 475</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>



                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Banana Chiller</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 475</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                                               
                </div>
                <div class="bold-separator">
                    <span></span>
                </div>                
            </div>

        <!-- ICE TEA -->
            <div class="menu-holder">
                    <div class="row">
                        
                        <div class="col-md-12 text-center">
                             <div class="sub-category-drinks">ICED TEA</div>
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Peach Ice Tea</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 420</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Apple Ice Tea</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 420</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Strawberry Ice Tea</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 420</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>



                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Rasberry Ice Tea</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 420</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>



                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Mango Ice Tea</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 420</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>



                        </div>
                                               
                </div>
                <div class="bold-separator">
                    <span></span>
                </div>                
            </div>

            <!--  Shake -->
            <div class="menu-holder">
                    <div class="row">
                        
                        <div class="col-md-12 text-center">
                             <div class="sub-category-drinks">SHAKES</div>
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Mango Shake</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 499</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Banana Shake</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 499</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Strawberry Shake</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 499</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                                               
                </div>
                <div class="bold-separator">
                    <span></span>
                </div>                
            </div>

            <!--  Hot Beverages -->
            <div class="menu-holder">
                    <div class="row">
                        
                        <div class="col-md-12 text-center">
                             <div class="sub-category-drinks">HOT BEVERAGES </div>
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Traditional Hand Whipped Coffee</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 363</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">English Tea</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 250</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Chai</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 250</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>



                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Masala Chai</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 250</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>



                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Honey Tea</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 250</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>



                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Cinnamon Tea</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 250</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>


                    <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Lemon Tea</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 250</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                                               
                </div>
                <div class="bold-separator">
                    <span></span>
                </div>                
            </div>


        <!--  Soft Drinks-->
            <div class="menu-holder">
                    <div class="row">
                        
                        <div class="col-md-12 text-center">
                             <div class="sub-category-drinks">SOFT DRINKS</div>
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Coke</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 120</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Diet Coke</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 130</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Sprite</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 120</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>



                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Sprite Zero</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 130</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>



                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Fanta</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 120</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>



                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Fresh Lime Sprite</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 150</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                         <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Mineral Water Small</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 75</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>



                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Mineral Water Large</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 110</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Red Bull</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 350</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>


                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Perrier Water</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 250</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>


                        <div class="col-md-4">
                            <!--menu item-->
                            <div class="menu-item ">
                            <div class="menu-item-details">
                                    <div class="menu-item-desc">Ginger ale</div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">Rs 270</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <!--menu item end-->
                        </div>

                                               
                </div>
                <div class="bold-separator">
                    <span></span>
                </div>                
            </div>

        </section>







    </div>


    <!--content end-->
    <!--=============== footer ===============-->
      @endsection

