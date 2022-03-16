
@include('user.css')
@include('user.navbar')
<section id="News">
    <div class="background-two"></div>
    <div class="container">
        <div class="row">
            {{-- ///////////////////////////// --}}
           <div class="col-6">
            <div class="about-icon">
                <img src="img/1/THE_MESSAGE.png"/>
                <small>February 1,2019</small>
           </div>
           <p class="pro-left">Get started with Bootstrap, the world’s most popular framework
            for building responsive, mobile-first sites, with jsDelivr and a
            template starter page.Get started with Bootstrap, the world’s most
           </p>

           <div class="card-lastest card " style="width:22rem;height:21rem" id="div-three" onclick="three();"    >
            <img class="card-img-top" style="width:100%;height:100%;border-radius:10px"
            src="img/50917099_579809792487338_4120282304532709376_n.png">
          </div>
           </div>
            <div class="col-6">
                <p >Get started with Bootstrap, the world’s most popular framework
                    for building responsive, mobile-first sites, with jsDelivr and a
                    template starter page.Get started with Bootstrap, the world’s most
                     popular framework
                    for building responsive, mobile-first sites, with jsDelivr and a
                    template starter page.
                    template starter page.Get started with Bootstrap, the world’s most
                    popular framework
                   for building responsive, mobile-first sites, with jsDelivr and a
                   template starter page.
                   template starter page.Get started with Bootstrap, the world’s most
                  
                </p>
                <p>Get started with Bootstrap, the world’s most popular framework
                    for building responsive, mobile-first sites, with jsDelivr and a
                    template starter page.Get started with Bootstrap, the world’s most
                     popular framework
                    for building responsive, mobile-first sites, with jsDelivr and a
                    template starter page.
                </p>
                <p>Get started with Bootstrap, the world’s most popular framework
                    for building responsive, mobile-first sites, with jsDelivr and a
                    template starter page.Get started with Bootstrap, the world’s most
                     popular framework
                    for building responsive, mobile-first sites, with jsDelivr and a
                    template starter page.
                </p>
                <div style="margin-top: 30px">
                <small >shar</small>
                <div class="socical_icon" style="margin-top: 10px">
                    <img src="img/social_icons/facebook.png" style="width:20px;height:20px;margin-top:15px"/>
                    <img src="img/social_icons/insta.png" style="width:20px;height:20px;margin-top:15px"/>
                    <img src="img/social_icons/twitter.png" style="width:20px;height:20px;margin-top:15px"/>
                    <img src="img/social_icons/youtube.png" style="width:20px;height:20px;margin-top:15px"/>
                 </div>
                </div>
                
            </div>


           {{-- ///////////////////////////////// --}}
        </div>
    </div>
</section>

{{-- OTHER NEWS --}}
<section id="other_news">
{{-- background image --}}
<div class="img_our_impact">
</div>
<div class="container  lastest">

    <div class="lastest-content">
     <div class="card-lastest card "  style="width:18rem;height:18rem" id="div-one" onclick="one();"     >
         <img class="card-img-top" style="width:100%;height:100%"
         src="img/50917099_579809792487338_4120282304532709376_n.png">


         <p>Get started with Bootstrap, the world’s most popular framework for building
            
            <a href="#">Read More <i class="fa-solid fa-arrow-right-long"></i></a>
         </p>

       </div>


       <div class="card-lastest card "  style="width:18rem;height:18rem" id="div-one" onclick="one();"     >
        <img class="card-img-top" style="width:100%;height:100%"
        src="img/50917099_579809792487338_4120282304532709376_n.png">


        <p>Get started with Bootstrap, the world’s most popular framework for building
            
            <a href="#">Read More <i class="fa-solid fa-arrow-right-long"></i></a>
         </p>

      </div>

      <div class="card-lastest card "  style="width:18rem;height:18rem" id="div-one" onclick="one();"     >
        <img class="card-img-top" style="width:100%;height:100%"
        src="img/50917099_579809792487338_4120282304532709376_n.png">


        <p>Get started with Bootstrap, the world’s most popular framework for building
            
            <a href="#">Read More <i class="fa-solid fa-arrow-right-long"></i></a>
         </p>

      </div>
    </div>


</div>

</section>
@include('user.footer')