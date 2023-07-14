@extends('frontend.layout.main')


@section('main-container');
 <!-- Contact Start -->
     <div class="container-fluid">
        
        <div class="row gx-0 align-items-center">
            <div class="col-lg-8 mb-5 mb-lg-0 bg-primary" style="height: 560px;">
            <img class="w-100 h-100" src="https://cdn.pixabay.com/photo/2016/11/18/21/37/laptop-1836990_1280.jpg" alt="Image">
            </div>
            <div class="col-lg-4">
             <div class="contact-form bg-light p-5">
                <div class="row g-3">
                        <div class="col-12 col-sm-12 text-center">
                          <h1>LOGIN</h1><span class="muted">Please log into your account</span>
                        </div>
                     

                    <div class="row g-4">
                        <div class="col-12 col-sm-12">
                            <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-12">
                            <input type="email" class="form-control border-0" placeholder="Password" style="height: 55px;">
                        </div>
                        
                        <div class="col-12 d-flex">
                        &nbsp;<input type="radio" class=" border-0 ml-2 " placeholder="Password" style="height: 55px;">&nbsp;
                        <label for="" class="mt-3 ml-4">Reminder</label>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">LOGIN</button>
                        </div>
                        <div class="text-center"><a href="#" >Forgot your password?</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
<br>
    @endsection