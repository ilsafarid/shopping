@extends('layout.navbarfooter')
@section('content')

<!-- ***** Main Banner Area Start ***** -->
<div class="page-heading about-page-heading" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>Contact Us</h2>
                    <span>Shopping made easy, and support made easier. Get in touch today!</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Contact Area Starts ***** -->
<div class="contact-us">
    <div class="container">
        <div class="row align-items-start">
            <!-- Map Section -->
            <div class="col-lg-6">
                <div id="map">
                    <iframe
                         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.9892674536354!2d67.08289597401198!3d24.864216145109893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33c0572c40fe5%3A0xa4ac4451b6df758f!2sShaheed-e-Millat%20Rd%2C%20Karachi%2C%20Pakistan!5e0!3m2!1sen!2s!4v1745575725132!5m2!1sen!2s"
                        width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen>
                    </iframe>
                </div>
            </div>

            <!-- Form Section -->
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Say Hello. Don't Be Shy!</h2>
                    <span>Details to details is what makes our shop different from the other shops.</span>
                </div>

                @if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif

                <form id="contact" action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <input name="name" type="text" id="name" placeholder="Your name" class="form-control mb-3" required>
                        </div>
                        <div class="col-12">
                            <input name="email" type="email" id="email" placeholder="Your email" class="form-control mb-3" required>
                        </div>
                        <div class="col-12">
                            <textarea name="message" rows="5" id="message" placeholder="Your message" class="form-control mb-3" required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" id="form-submit" class="btn btn-dark w-100">
                                <i class="fa fa-paper-plane"></i> Send
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ***** Contact Area Ends ***** -->

<!-- ***** Subscribe Area Starts ***** -->
<div class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-heading">
                    <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                    <span>Details to details is what makes our shop different from the other shop.</span>
                </div>
                <form id="subscribe" action="" method="get">
                    <div class="row">
                        <div class="col-lg-5">
                            <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-5">
                            <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                    placeholder="Your Email Address" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-2">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-dark-button"><i
                                        class="fa fa-paper-plane"></i></button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li>Store Location:<br><span>Sunny Isles Beach, FL 33160, karachi</span></li>
                            <li>Phone:<br><span>0333008214</span></li>
                            <li>Office Location:<br><span>Block A Shaheed-e-Millat Road,karachi</span></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>
                            <li>Email:<br><span>TechVerse@company.com</span></li>
                            <li>Social Media:<br><span><a href="#">Facebook</a>, <a href="#">Instagram</a>, <a
                                        href="#">Behance</a>, <a href="#">Linkedin</a></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Subscribe Area Ends ***** -->




@endsection