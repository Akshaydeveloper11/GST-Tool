@extends('frontend.layout.main')
@section('main-container')
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ url('frontend/img/animetion image1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <i class="fa fa-home fa-4x text-primary mb-4 d-none d-sm-block"></i>
                            <h1 class="display-2 text-uppercase text-white mb-md-4">Welcome to Our Capitall</h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2 data-toggle='modal' data-target='#myModal'">login</a> -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Contect
                            </button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ url('frontend/img/animation image.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <i class="fa fa-tools fa-4x text-primary mb-4 d-none d-sm-block"></i>
                            <h1 class="display-2 text-uppercase text-white mb-md-4">We Are Trusted For Your Project</h1>


                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Services Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4"> <span class="text-primary">Our Services</span> </h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="{{ url('frontend/img/animation image.jpg') }}" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-credit-card text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Expense</h4>
                        <p>The Expense module allows you to manage your company expenses. You can categorize and
                            subcategorize all of your expenses. All expenses are connected with accounts so never allow
                            another expense to go unaccounted.</p>
                        <a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="{{ 'frontend/img/ourservice1.jpg' }}" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-shopping-cart text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Purchase</h4>
                        <p>The Purchase module allows you to manage product purchases and returns. By creating purchases the
                            stock quantity of products will be increased and by deleting purchases the stock quantity of
                            products will be decreased.</p>
                        <a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="{{ url('frontend/img/ourservice2.jpg') }}" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-handshake text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Sales</h4>
                        <p>The Sales module allows you to manage sales quotations, product sales, and returns. By creating
                            sales the stock quantity of products will be decreased and by deleting sales the stock quantity
                            of products will be increased.</p>
                        <a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="{{ url('frontend/img/ourservice5.jpg') }}" alt=""
                        style="height:242px;">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-university text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Accounting</h4>
                        <p>The Accounting module allows you to manage transactions and accounts. Every transaction is
                            connected to cash or bank accounts. A credit transaction will increase the balance and a debit
                            transaction will decrease the balance.</p>
                        <a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid " src="{{ url('frontend/img/service4.jpg') }}" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-share text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3 ">Loan</h4>
                        <p>The Loan module helps you to manage loan authorities, loans, and loan payments. Acculance allows
                            you to create both CC loans & Term loans. The amount will be added to account and can be used
                            for transactions.</p>
                        <a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="{{ url('frontend/img/ourservice1.jpg') }}" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-share text-primary"></i>
                    </div>
                    <div class="px-4 ">
                        <h4 class="text-uppercase pt-4">Asset</h4>
                        <p>The Asset module helps you manage your company assets and their deprecation. We have implemented
                            a straight-line depreciation method to calculate the deprecation. You can also create assets
                            without any deprecation.</p>
                        <a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->
    <!-- what we do -->
    <div class="card p-5">
        <div id="carouselExampleinvestors" class="carousel slide">
            <div class="carousel-inner">
                {{-- first carousel --}}
                <div class="carousel-item active p-3">
                    <div class="row">
                        <div class="col-md-6 order-1">
                            <div class="px-5">
                                <h1 class="">Transform <br>how we do business!</h1><br>
                            </div>


                            <p>
                                With iBilling, you have the proven best tools for your business & Personal Finance.</p>
                            <p> Uncover insights, make decisions faster with more confidence, and do your best work with
                                iBilling, today.</p>

                            <P>Before KGS, Anuj was with PwC’s Financial Advisory Services practice of New Delhi and
                                PwC’s Assurance for about 7 years. He has an experience in conducting due diligence
                                reviews and statutory audits across various international GAAPs and group reporting
                                modules.
                            </P>



                        </div>
                        <div class="col-md-5 order-md-2 mb-4 mb-lg-0 ">
                            <img src="{{ url('frontend/img/whatwedo.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                {{-- end first carousel --}}
                {{-- second caroulel --}}
                <div class="carousel-item  p-3">
                    <div class="row">
                        <h2>A Software from the Future</h2>
                        <p style="color:#FD5D14;">A New Generation of Business Software to grow your business</p>
                        <hr>
                        <div class="col-md-6 order-2"><br>
                            <div class="">
                                <p class=" fw-normal text-dark " style="font-size:30px;">Real-Time Business Intelligence</p>
                                
                            </div>


                            <p>
                                No matter what kind of business you’re in — technology, consumer goods, manufacturing or
                                anything else. This is the Dashboard, designed for you. Spend less time on manual tasks &
                                Start focusing on what truly matters for your business..</p>
                            <p>
                                Before KGS, Anuj was with PwC’s Financial Advisory Services practice of New Delhi and PwC’s
                                Assurance for about 7 years. He has an experience in conducting due diligence reviews and
                                statutory audits across various international GAAPs and group reporting modules.
                            </p>
                            <p>Business transactions are the interactions between businesses and their customers, vendors
                                and others with whom they do business. It is the key element for any business. A business
                                must record all business transactions to ensure complete and reliable information when the
                                financial statements are prepared.
                            </p>

                        </div>
                        <div class="col-md-5 order-md-1 mb-4 mb-lg-0 ">


                            <img src="{{ url('frontend/img/screenshot2.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                {{-- end second carousel --}}
                {{-- third carousel --}}
                <div class="carousel-item  p-3">
                    <div class="row">
                       
                        <div class="col-md-6 order-1"><br>
                            <div class="">
                                <p class=" fw-normal text-dark " style="font-size:30px;">Invoicing</p>
                            </div>


                            <p>
                                CloudOnex Invoicing software is one of the best invoicing software in the market. It’s ready for both online & offline invoicing method. Create it, send it, get payment online. Or print it, give it to your customers.
                                We have added innovative way to send invoice. Every invoice generates unique, secure invoice url. You can send it via email, messenger, live chat. So that customer does not need to login to view your invoice. Customer can pay invoice directly using this link.</p>
                            <ul>
                                <li>Send Notification- Invoice Created, Payment reminder, Overdue notice, Payment confirmation etc.</li>
                                <li>Get paid faster with Online Payment gateways
                                    Create invoice with wysiwyg editor</li>
                                <li>Add notes, payment terms in invoice</li>
                                <li>Add Payment to invoice, Record Partial Payment</li>
                                <li>View / Download PDF</li>
                                <li>Customizable invoice layout</li>
                            </ul>

                        </div>
                        <div class="col-md-5 order-md-2 mb-4 mb-lg-0 ">
                            
                            <p class=" fw-normal text-dark " style="font-size:30px;">Create Beautiful Invoice</p>

                            <img src="{{ url('frontend/img/screenshot3.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleinvestors"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon btn btn-dark" aria-hidden="true"></span>
            <span class="visually-hidden ">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleinvestors"
            data-bs-slide="next">
            <span class="carousel-control-next-icon btn btn-dark" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>




















    <!-- what we do end -->
    <!-- Appointment Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h1 class="display-5 text-uppercase mb-4">Request A <span class="text-primary">Call Back</span></h1>
                </div>
                <p class="mb-5">If you need to speak to us about a general query fill in the form below and we will call
                    you back within the same working day.</p>
                <a class="btn btn-primary py-3 px-5" href="">Get A Quote</a>
            </div>
            <div class="col-lg-8">
                <div class="bg-light text-center p-5">
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Your Name"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" placeholder="Your Email"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text" class="form-control border-0 datetimepicker-input"
                                        placeholder="Call Back Date" data-target="#date" data-toggle="datetimepicker"
                                        style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="text" class="form-control border-0 datetimepicker-input"
                                        placeholder="Call Back Time" data-target="#time" data-toggle="datetimepicker"
                                        style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0" rows="5" placeholder="Message"></textarea>
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















    <!-- Modal -->
    <div class="modal fade show modal-" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contact</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="bg-light text-center p-2">
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control border-0" placeholder="Your Name"
                                            style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control border-0" placeholder="Your Email"
                                            style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="date" id="date" data-target-input="nearest">
                                            <input type="text" class="form-control border-0 datetimepicker-input"
                                                placeholder="Call Back Date" data-target="#date"
                                                data-toggle="datetimepicker" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="time" id="time" data-target-input="nearest">
                                            <input type="text" class="form-control border-0 datetimepicker-input"
                                                placeholder="Call Back Time" data-target="#time"
                                                data-toggle="datetimepicker" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control border-0" rows="5" placeholder="Message"></textarea>
                                    </div>
                                    <!-- <div class="col-12">
                                                <button class="btn btn-primary w-100 py-3" type="submit">Submit Request</button>
                                            </div> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
