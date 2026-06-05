@include('header')
<main class="main">
    <!-- Banner Start -->
    <section class="banner_section width100">
        <div class="container">
            <div class="row">
                <div class="col-md-5 d-flex align-items-center">
                    <div class="home_slider_leftbox mb-5">
                        <!-- <div class="home_scherpa_logo">SCHERPA</div> -->
                        <h1 class="banner_text1">
                            Symbiosis Institute of Education
                        </h1>
                        <h2 class="banner_text2">
                            Postgraduate Diploma in Early
                        </h2>
                        <h2 class="banner_text2">
                            Childhood Education (PGD - ECE)
                        </h2>
                        <div class="banner_explore_btn">
                            <a href=""><span>Admissions Open 2026-27</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 p-0">
                    <div class="owl-carousel_banner owl-carousel">
                        <div class="item"><img src="{{ asset('assets/images/banner/bannerimg1.webp') }}" class="img-fluid"></div>
                        <div class="item"><img src="{{ asset('assets/images/banner/bannerimg2.webp') }}" class="img-fluid"></div>
                        <div class="item"><img src="{{ asset('assets/images/banner/bannerimg3.webp') }}" class="img-fluid"></div>
                        <div class="item"><img src="{{ asset('assets/images/banner/bannerimg4.webp') }}" class="img-fluid"></div>
                        <div class="item"><img src="{{ asset('assets/images/banner/bannerimg5.webp') }}" class="img-fluid"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
    <!-- Banner Ends  -->

    <section class="Announcement_box mb-3 mb-md-5 mt-2 width100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="ann_head">Announcement</div>
                    <marquee behavior="scroll" direction="left">
                        Join a vibrant community of educators, mentors, and experts providing lifelong support, collaboration, and insights in early childhood education. 
                    </marquee>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT SECTION START -->
    <section id="about" class="about-section width100">
        <div class="container">            
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading">About <span>SIE</span></div>
                        </div>
                    </div>
                    <div class="row mb-5 mb-sm-3">
                        <div class="col-lg-12 mb-4">
                            The Symbiosis Institute of Education (SIE), a constituent of Symbiosis International (Deemed University), stands as a pioneering institution dedicated to excellence in teacher education, educational research, and capacity building.
                        </div>
                        <div class="col-lg-12 mb-4">
                            Rooted in the guiding philosophy of “Vasudhaiva Kutumbakam” - the world is one family, the institute nurtures educators who are globally aware, socially responsible, and committed to transformative learning.
                        </div>
                        <div class="col-lg-12 mb-5">
                            At SIE, education is envisioned not merely as the transmission of knowledge, but as a dynamic process of inquiry, reflection and practice. 
                        </div>
                        <div class="col-lg-12 mb-4">
                            <a href="#" class="black_btn">Explore More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="about_img_box">
                        <img src="{{ asset('assets/images/about-img.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT SECTION END -->
    <!-- rating start -->
    <section id="rating" class="rating-section width100">
        <div class="rating_box width100">
            <div class="rating_rightbox">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="rating_listmain">

                                <div class="rating_list">
                                    <div class="rating_list_inner">
                                        <div class="row">
                                            <div class="col-lg-12 rating_text1 counter" data-target="46">0</div>
                                            <div class="col-lg-12 rating_head">Institutes</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="rating_list">
                                    <div class="rating_list_inner">
                                        <div class="row">
                                            <div class="col-lg-12 rating_text1 counter" data-target="6">0</div>
                                            <div class="col-lg-12 rating_head">Cities in India</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="rating_list">
                                    <div class="rating_list_inner">
                                        <div class="row">
                                            <div class="col-lg-12 rating_text1 counter" data-target="130" data-plus="true">0</div>
                                            <div class="col-lg-12 rating_head">Programmes</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="rating_list">
                                    <div class="rating_list_inner">
                                        <div class="row">
                                            <div class="col-lg-12 rating_text1 counter" data-target="13">0</div>
                                            <div class="col-lg-12 rating_head">Research Centres</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="rating_list">
                                    <div class="rating_list_inner">
                                        <div class="row">
                                            <div class="col-lg-12 rating_text1 counter" data-target="85" data-plus="true">0</div>
                                            <div class="col-lg-12 rating_head">Countries Global <br>Representation</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="rating_list">
                                    <div class="rating_list_inner">
                                        <div class="row">
                                            <div class="col-lg-12 rating_text1 counter" data-target="1">0</div>
                                            <div class="col-lg-12 rating_head">International campus <br>in Dubai</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- rating end -->
    <section id="program" class="width100">
        <div class="programme_section">
            <div class="container">
                <div class="row" style="align-items: center;">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-lg-12"><div class="heading">Programme<span> Outcomes</span></div></div>
                            <div class="col-lg-12 mb-5">
                                The Postgraduate Diploma in Early Childhood Education (PGD-ECE) prepares educators to nurture young minds through creative and child-centered learning approaches. The program focuses on child development, classroom management, and modern teaching methodologies for early learners. It equips aspiring teachers with practical skills to create engaging, inclusive, and supportive learning environments.
                            </div>
                            <div class="col-lg-12"><a href="#" class="black_btn">Explore More</a></div>
                        </div>
                        
                    </div>
                    <div class="col-md-5 text-center">
                        <img src="{{ asset('assets/images/programme_img.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="events_section width100" id="events">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="heading"><span>Events</span></div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-4 mb-4">
                    <div class="event_list">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="owl-carousel_event owl-carousel">
                                    <div class="item"><div class="event_img"><img src="{{ asset('assets/images/events/event1-1.jpg') }}" class="img-fluid"></div></div>
                                    <div class="item"><div class="event_img"><img src="{{ asset('assets/images/events/event1-2.jpg') }}" class="img-fluid"></div></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12 mb-4 event_content">
                                        In February 2026, PhD scholars from the Faculty of Education, as part of their coursework, participated in an experiential learning visit focused on early childhood education. The scholars interacted with faculty members to gain insights into innovative teaching practices, child-centric curricula, and the various learning tools and activities designed to promote joyful and engaging learning experiences for children.
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <a href="{{url('/events#event8')}}">View More</a>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="event_list">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="owl-carousel_event owl-carousel">
                                    <div class="item"><div class="event_img"><img src="{{ asset('assets/images/events/event2-1.jpeg') }}" class="img-fluid"></div></div>
                                    <div class="item"><div class="event_img"><img src="{{ asset('assets/images/events/event2-2.jpeg') }}" class="img-fluid"></div></div>
                                    <div class="item"><div class="event_img"><img src="{{ asset('assets/images/events/event2-3.jpeg') }}" class="img-fluid"></div></div>
                                    <div class="item"><div class="event_img"><img src="{{ asset('assets/images/events/event2-4.jpeg') }}" class="img-fluid"></div></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12 mb-4 event_content">
                                        Professors and interns from University of Melbourne, Australia visited the institute to understand the child-centric teaching practices adopted in early childhood education, with a special focus on foundational cognitive, social, emotional, and creative development among children.
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <a href="{{url('/events#event9')}}">View More</a>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-0 mb-sm-4">
                    <div class="event_list">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="owl-carousel_event owl-carousel">
                                    <div class="item"><div class="event_img"><img src="{{ asset('assets/images/events/event2-4.jpeg') }}" class="img-fluid"></div></div>
                                    <div class="item"><div class="event_img"><img src="{{ asset('assets/images/events/event3-1.jpeg') }}" class="img-fluid"></div></div>
                                    <div class="item"><div class="event_img"><img src="{{ asset('assets/images/events/event3-2.jpeg') }}" class="img-fluid"></div></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12 mb-4 event_content">
                                        Teacher trainees conducted interactive and engaging classroom sessions for young children as part of their practical learning experience, using storytelling, rhymes, role-play, and activity-based teaching methods to create a joyful and child-centric learning environment." 
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <a href="{{url('/events#event10')}}">View More</a>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section class="width100" id="gallery" style="position: relative;padding: 200px 0 40px 0;">
        <img src="{{ asset('assets/images/pencil-rocket.png') }}" alt="img" class="program-child">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="heading"><span>Gallery</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="owl-carousel_gallery owl-carousel">                        
                        <div class="item">
                            <div class="gallery_inner" style="background-image: url({{ asset('assets/images/gallery/Gallery1.jpeg') }});"></div>
                        </div>
                        <div class="item">
                            <div class="gallery_inner" style="background-image: url({{ asset('assets/images/gallery/Gallery2.jpeg') }});"></div>
                        </div>
                        <div class="item">
                            <div class="gallery_inner" style="background-image: url({{ asset('assets/images/gallery/Gallery3.jpeg') }});"></div>
                        </div>
                        <div class="item">
                            <div class="gallery_inner" style="background-image: url({{ asset('assets/images/gallery/Gallery4.jpeg') }});"></div>
                        </div>
                        <div class="item">
                            <div class="gallery_inner" style="background-image: url({{ asset('assets/images/gallery/Gallery5.jpeg') }});"></div>
                        </div>
                        <div class="item">
                            <div class="gallery_inner" style="background-image: url({{ asset('assets/images/gallery/Gallery6.jpeg') }});"></div>
                        </div>
                        <div class="item">
                            <div class="gallery_inner" style="background-image: url({{ asset('assets/images/gallery/Gallery7.jpeg') }});"></div>
                        </div>
                        <div class="item">
                            <div class="gallery_inner" style="background-image: url({{ asset('assets/images/gallery/2.webp') }});"></div>
                        </div>
                        <div class="item">
                            <div class="gallery_inner" style="background-image: url({{ asset('assets/images/gallery/3.webp') }});"></div>
                        </div>
                        <div class="item">
                            <div class="gallery_inner" style="background-image: url({{ asset('assets/images/gallery/4.webp') }});"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</main>
@include('footer')

