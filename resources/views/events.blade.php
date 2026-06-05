@include('header')

<main class="main">
    <section class="inner-banner">
        <div class="container">
            <div class="inner-banner-content">
                <h1>Events</h1>
            </div>
        </div>
    </section>
    <section class="event-details-section">
        <div class="container">
            <div class="events_inner m-0">
                <div class="events_images mobile-event-slider">
                    <div class="events_box">
                        <img src="{{ asset('assets/images/events/event1-1.jpg') }}" alt="">
                    </div>
                    <div class="events_box">
                        <img src="{{ asset('assets/images/events/event1-2.jpg') }}" alt="">
                    </div>
                </div>
                <p>In February 2026, PhD scholars from the Faculty of Education, as part of their coursework, participated in an experiential learning visit focused on early childhood education. The scholars interacted with faculty members to gain insights into innovative teaching practices, child-centric curricula, and the various learning tools and activities designed to promote joyful and engaging learning experiences for children.</p>
            </div>

            <div class="events_inner" style="background-color: #e3e3e336;">
                <div class="events_images mobile-event-slider">
                    <div class="events_box">
                        <img src="{{ asset('assets/images/events/event2-1.jpeg') }}" alt="">
                    </div>
                    <div class="events_box">
                        <img src="{{ asset('assets/images/events/event2-2.jpeg') }}" alt="">
                    </div>
                    <div class="events_box">
                        <img src="{{ asset('assets/images/events/event2-3.jpeg') }}" alt="">
                    </div>
                </div>
                <p>Professors and interns from University of Melbourne, Australia visited the institute to understand the child-centric teaching practices adopted in early childhood education, with a special focus on foundational cognitive, social, emotional, and creative development among children.</p>
            </div>

            <div class="events_inner">
                <div class="events_images mobile-event-slider">
                    <div class="events_box">
                        <img src="{{ asset('assets/images/events/event3-1.jpeg') }}" alt="">
                    </div>
                    <div class="events_box">
                        <img src="{{ asset('assets/images/events/event3-2.jpeg') }}" alt="">
                    </div>
                    <div class="events_box">
                        <img src="{{ asset('assets/images/events/event3-3.jpeg') }}" alt="">
                    </div>
                </div>
                <p>Teacher trainees conducted interactive and engaging classroom sessions for young children as part of their practical learning experience, using storytelling, rhymes, role-play, and activity-based teaching methods to create a joyful and child-centric learning environment.</p>
            </div>
        </div>
    </section>
</main>

@include('footer')

