@include('user.css')
<section id="contact_us">
    {{-- Background images --}}
    <div class="background-three"></div>
    <div class="background-two"></div>

    {{-- items --}}
<div class="container contact_us_item">
    {{-- contact_us heade --}}
   <div class="contact_us_heade">
    <img src="img/1/Group-603.png" style="width:100px" />
    <h4>CONTACT US</h4>
    <img src="img/1/Group-603.png" style="width:100px" />
   </div>
   {{-- FORM --}}
   <div class="form-items">
       <form>
           {{-- name --}}
           <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control"/>
           </div>
           {{-- Number --}}
           <div class="form-group">
            <label>Number</label>
            <input type="number" class="form-control"/>
         </div>
         {{-- Email --}}
         <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control"/>
         </div>
         {{-- title --}}
         <div class="form-group">
            <label>title</label>
            <input type="text" class="form-control"/>
         </div>
         {{-- Message --}}
         <div class="form-group">
            <label >Message</label>
            <textarea class="form-control">
            </textarea>
         </div>
         {{-- button --}}
         <input type="submit" class="form-control btn-contact"  style="width:100%"
         value="SEND"/>
       </form>
   </div>
</div>





@include('user.footer')
</section>
@include('user.javscript')
