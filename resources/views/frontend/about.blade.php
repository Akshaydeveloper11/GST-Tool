
@extends('frontend.layout.main')
@section('main-container')
   <!-- About Start -->
   <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <h1 class="display-5 text-uppercase mb-4">About  <span class="text-primary">us</span> </h1>
              
                <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor</p>
                <div class="row gx-5 py-2">
                    <div class="col-sm-6 mb-2">
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Perfect Planning</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Professional Workers</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>First Working Process</p>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Perfect Planning</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Professional Workers</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>First Working Process</p>
                    </div>
                </div>
                <p class="mb-4">Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos labore</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In saepe officia explicabo ut cupiditate itaque, omnis labore placeat, magni enim aliquid possimus fuga deserunt consequuntur rerum reprehenderit natus voluptate maxime dicta? In vitae eveniet, iste inventore dolorem sunt, quis magnam laboriosam id officiis impedit fugiat. Ab, temporibus veniam? Ullam, eum!</p>
                
            </div>
            <div class="col-lg-5 pb-5" style="min-height: 400px;">
                <div class="position-relative  h-100 ms-5" >
                    <img class="position-absolute w-100 h-100 mt-5 ms-n5" src="https://cdn.pixabay.com/photo/2015/01/09/11/08/startup-594090_1280.jpg" style="object-fit:cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

    <!-- Appointment Start -->
    <div class="container-fluid bg-light py-6 px-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h1 class="display-5 text-uppercase mb-4">Request A <span class="text-primary">Call Back</span></h1>
                    </div>
                    <p class="mb-5">Nonumy ipsum amet tempor takimata vero ea elitr. Diam diam ut et eos duo duo sed. Lorem elitr sadipscing eos et ut et stet justo, sit dolore et voluptua labore. Ipsum erat et ea ipsum magna sadipscing lorem. Sit lorem sea sanctus eos. Sanctus sit tempor dolores ipsum stet justo sit erat ea, sed diam sanctus takimata sit. Et at voluptua amet erat justo amet ea ipsum eos, eirmod accusam sea sed ipsum kasd ut.</p>
                    <a class="btn btn-primary py-3 px-5" href="">Get A Quote</a>
                </div>
                <div class="col-lg-8">
                    <div class="bg-white text-center p-5">
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Call Back Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Call Back Time" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    <!-- Appointment End -->


   

    @endsection