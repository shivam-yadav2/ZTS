@extends('master.frontmaster')

@section('css')

<style>
    
  .cta_new {
    border-radius: 20px;
    overflow: hidden;
    height: 250px;
}
</style>

@endsection

@section('content')
   @include('frontend.pages.component.banner', [
    'title' => 'Contact Us',
    'description' => 'We’d love to hear from you — let’s build something meaningful together.',
    'background' => 'https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=1600&h=800&fit=crop'
])



    <section class="contact-main volunteer">
        <div class="container">
            <div class="row gutter-40">
                <div class="col-12 col-xl-6">
                    <div class="contact__content">
                        <div class="section__content" data-aos="fade-up" data-aos-duration="1000">
                            <span class="sub-title"><i class="icon-donation"></i> Get In Touch</span>
                            <h2 class="title-animation">Contact Us</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque laudantium, totam rem aperiam, eaque inventore
                            </p>
                        </div>
                        <div class="contact-main__inner cta">
                            <!-- Location -->
                            <div class="contact-main__single">
                                <div class="thumb">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="content">
                                    <h6>Location</h6>
                                    @if($contactInfo && $contactInfo->location)
                                        @foreach($contactInfo->location as $location)
                                            <p><a href="https://maps.app.goo.gl/Gr9pTNqz5FRNrjQw8" target="_blank">
                                                {{ $location }}
                                            </a></p>
                                        @endforeach
                                    @else
                                        <p><a href="https://maps.app.goo.gl/Gr9pTNqz5FRNrjQw8" target="_blank">
                                            20/ 143 Indira Nagar, near Ujala Apartment, Lucknow 226016
                                        </a></p>
                                    @endif
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="contact-main__single">
                                <div class="thumb">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h6>Phone</h6>
                                    @if($contactInfo && $contactInfo->phone)
                                        @foreach($contactInfo->phone as $phone)
                                            <p><a href="tel:{{ preg_replace('/[^0-9]/', '', $phone) }}">{{ $phone }}</a></p>
                                        @endforeach
                                    @else
                                        <p><a href="tel:5224105853">+91 5224105853</a></p>
                                    @endif
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="contact-main__single">
                                <div class="thumb">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h6>Email</h6>
                                    @if($contactInfo && $contactInfo->email)
                                        @foreach($contactInfo->email as $email)
                                            <p><a href="mailto:{{ $email }}">{{ $email }}</a></p>
                                        @endforeach
                                    @else
                                        <p><a href="mailto:zindagitujhesalaam@gmail.com">zindagitujhesalaam@gmail.com</a></p>
                                    @endif
                                </div>
                            </div>

                            <!-- WhatsApp -->
                            @if($contactInfo && $contactInfo->whatsapp_number)
                            <div class="contact-main__single">
                                <div class="thumb">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </div>
                                <div class="content">
                                    <h6>WhatsApp</h6>
                                    @foreach($contactInfo->whatsapp_number as $whatsapp)
                                        <p><a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $whatsapp) }}" target="_blank">{{ $whatsapp }}</a></p>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                            <div class="contact-main__single">
                                <div class="thumb">
                                    <i class="fa-solid fa-share-nodes"></i>
                                </div>
                                <div class="content">
                                    <h6>Social</h6>
                                    <div class="social">
                                        <a href="https://www.facebook.com/ZindagiTujheSaalam/" target="_blank"
                                            aria-label="share us on facebook" title="facebook">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a href="https://www.instagram.com/zindagitujhesalam/" target="_blank" aria-label="share us on vimeo"
                                            title="vimeo">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <!--<a href="https://x.com/" target="_blank" aria-label="share us on twitter"-->
                                        <!--    title="twitter">-->
                                        <!--    <i class="fa-brands fa-twitter"></i>-->
                                        <!--</a>-->
                                        <a href="https://www.linkedin.com/company/zindagi-tujhe-salaam" target="_blank"
                                            aria-label="share us on linkedin" title="linkedin">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-main__thumb cta cta_new">
                            <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=1600&h=800&fit=crop" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="contact__form volunteer__form checkout__form" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <div class="volunteer__form-content">
                            <h4 class="title-animation">Fill Up The Form</h4>
                            <p>Your email address will not be published. Required fields are marked *</p>
                        </div>
                        <form action="#" method="post" class="cta">
                            <div class="input-single">
                                <input type="text" name="full-name" id="fullName" placeholder="Enter Name" required>
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="input-single">
                                <input type="email" name="c-email" id="cEmail" placeholder="Enter Email" required>
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="input-single">
                                <input type="text" name="phone-number" id="phoneNumber" placeholder="Phone Number"
                                    required>
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="input-single alter-input">
                                <textarea name="contact-message" id="contactMessage" placeholder="Your Message..."></textarea>
                                <i class="fa-solid fa-comments"></i>
                            </div>
                            <div class="form-cta">
                                <button type="submit" aria-label="submit message" title="submit message"
                                    class="btn--primary">Get A Quote <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
