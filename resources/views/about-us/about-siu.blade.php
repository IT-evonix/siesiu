@include('header')
<main class="main">
    <section class="inner-banner">
        <div class="container">
            <div class="inner-banner-content">
                <h1>About SIU</h1>
            </div>
        </div>
    </section>

    <section class="about-university">
        <div class="container">
            <div class="about-grid">
                <div class="about-images">
                    <div class="image-large">
                        <img src="{{ asset('assets\images\innerpages\about\siu-campus.webp') }}" alt="">
                    </div>
                    <div class="image-column">
                        <img class="img-fluid" src="{{ asset('assets\images\innerpages\about\siu2.webp') }}" alt="">
                        <img class="img-fluid" src="{{ asset('assets\images\innerpages\about\siu3.webp') }}" alt="">
                    </div>
                    <div class="experience-box">
                        <h3>25<span>+</span></h3>
                        <p>Years of Experience</p>
                    </div>
                </div>
                <div class="about-content">
                    <!-- <div class="heading">
                        About <span>SIU</span>
                    </div> -->
                    <p>
                        Symbiosis International (Deemed University) is a multi-disciplinary university offering its
                        students and faculty a vibrant learning ecosystem designed around its multi-cultural and
                        innovative ethos.
                    </p>
                    <p>
                        Symbiosis was established in 1971 by Prof. Dr. S.B. Mujumdar, which was a ‘home away from home’
                        for International students. The Institution is based on the principles of Vedic thought of
                        <b>"World is one family"</b>.
                    </p>
                    <p>Today the university has its campuses spread across <b>6 Cities in India</b> and <b>1
                            International campus in Dubai, UAE</b> </p>
                    <p>All the university campuses epitomize the Symbiosis vision, 'Promoting International
                        Understanding through Quality Education' and are a beehive of international students from all
                        across the globe, being privy to Indian culture and hospitality.</p>
                    <p>Offers doctoral, post graduate, under graduate, diploma and certificate programmes under eight
                        faculties namely Law, Management, Computer Studies, Medical & Health Sciences, Media &
                        Communication, Humanities & Social Sciences, Engineering and Design.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="rating" class="rating-section width100 statmain">
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

</main>
@include('footer')