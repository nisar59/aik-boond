@extends('frontend.layouts.template')

@section('content')

    <!-- ============abt-01 Section  Start============ -->

    <section class="abt-01">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-wrapper">
                        <h3>Contact Us</h3>
                        <ol>
                            <li>Hmoe<i class="far fa-angle-double-right"></i></li>
                            <li>Contact Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section class="bg-0-b">
         <div class="container">
             <div class="row">
                 <div class="main-card-contact d-flex">
                     <div class="sup-card-contact">
                         <div class="sup-content">
                             <div class="head-content">
                                 <h2>Leave A Message Here</h2>
                                 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A, neque ipsam obcaecati
                                     quis vitae odit aliquid libero sapiente possimus. Distinctio, qui voluptatibus </p>
                             </div>

                             <div class="contact-title">
                                 <h2>Contact Details</h2>
                                 <ol>
                                     <li><i class="far fa-map-marker-check"></i>USA</li>
                                     <li><i class="fal fa-mobile"></i>+91 9751791203 </li>
                                     <li><i class="fal fa-envelope"></i>sales@smarteyeapps.com</li>
                                     <li><i class="fal fa-clock"></i>Mon - Sat 8.00 - 18.00.</li>
                                 </ol>
                             </div>
                         </div>
                     </div>

                     <div class="sup-card-contact-0a">
                         <div class="contact-a1">
                             <form>
                                 <div class="dived d-flex">
                                     <div class="form-group">
                                         <div class="form-sup">
                                             <div class="cal-01">
                                                 <input type="name" name="name" id="" class="form-control"
                                                     placeholder="Enter Your Name">
                                                 <i class="fal fa-user-tie"></i>
                                             </div>

                                             <div class="cal-01">
                                                 <input type="phone" name="phone" id="" class="form-control"
                                                     placeholder="Phone Number">
                                                 <i class="fal fa-phone"></i>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <div class="form-sup">
                                             <div class="cal-01">
                                                 <input type="email" name="email" id="" class="form-control"
                                                     placeholder="Enter Your Email">
                                                 <i class="fal fa-at"></i>
                                             </div>
                                             <div class="cal-01">
                                                 <input type="text" name="subject" id="" class="form-control"
                                                     placeholder="Enter Your Subject">
                                                 <i class="fal fa-envelope-open-text"></i>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="ca-ool">
                                         <textarea name="text" cols="80" rows="6" class="form-control"
                                             placeholder="Message"></textarea>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section class="mab-01">
         <iframe style="width:100%"
             src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"
             height="450" frameborder="0" allowfullscreen=""></iframe>
     </section>

@endsection