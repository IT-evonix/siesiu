@include('header')
<main class="main">
    <section class="inner-banner">
        <div class="container">
            <div class="inner-banner-content">
                <h1>Life at SIE</h1>
            </div>
        </div>
    </section>

    <Section class="lifeatsie_mainsec">
        <div class="lifeatsie_main pb-0">
            <div class="container">
                <div class="lifeatsie_inner">
                    <div class="lifeatsie_img">
                        <img class="img-fluid" src="{{ asset('assets/images/gallery/Gallery5.jpeg') }}" alt="">
                    </div>
                    <div class="lifeatsie_content">
                        <div class="heading">
                            Infrastructure
                        </div>
                        <p>The programme benefits from the well-designed and child-centric infrastructure of Symbi Stars School. Equipped with vibrant classrooms, activity zones, and learning spaces tailored for young learners, the environment provides an authentic setting for understanding early childhood education in action.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="lifeatsie_main pb-0">
            <div class="container">
                <div class="lifeatsie_inner lifeatsie_inner2">
                    <div class="lifeatsie_img">
                        <img class="img-fluid" src="{{ asset('assets/images/gallery/Gallery4.jpeg') }}" alt="">
                    </div>
                    <div class="lifeatsie_content">
                        <div class="heading">
                            Sports
                        </div>
                        <p>Students have access to the sports facilities at the Symbiosis campus on SB Road, which include well-maintained spaces for physical activities and fitness. These facilities encourage a balanced lifestyle, promoting physical well-being alongside academic engagement.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="lifeatsie_main pb-0">
            <div class="container">
                <div class="lifeatsie_inner">
                    <div class="lifeatsie_img">
                        <img class="img-fluid" src="{{ asset('assets/images/gallery/Gallery4.jpeg') }}" alt="">
                    </div>
                    <div class="lifeatsie_content">
                        <div class="heading">
                            Health Facilities
                        </div>
                        <p>Healthcare support is available through the Symbiosis Health Centre located on the SB Road campus. The centre provides access to basic medical services and ensures the well-being and safety of students throughout the programme.</p>
                    </div>
                </div>
            </div>
        </div>
    </Section>

    <div class="student_support_box">
        <div class="container">
            <div class="student_support_inner">
                <div class="heading text-white">Student Support</div>
                <a class="student-wellbeingbtn" target="_blank" href="https://www.siu.edu.in/about-us/why-us/student-wellbeing">
                    Student Wellbeing
                </a>
            </div>
        </div>
    </div>

</main>
@include('footer')