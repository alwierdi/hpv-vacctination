<style>
    .gradasi {
        background: linear-gradient(to right, #5EB47C, #007D6E);
    }

    .smooth {
        scroll-behavior: smooth;
    }

    .orange {
        color: #EC744A;
    }

    .martop {
        margin-top: 15rem;
    }

    .hero {
        background: linear-gradient(to right, #5EB47C, #007D6E);
        padding: 1rem 0;
        color: white;
        position: relative;
    }

    .posisi {
        position: relative;
        top: -15rem;
    }

    .goals-section {
        max-width: 700px;
        padding: 40px;
    }

    .middle {
        align-items: center;
    }

    .goals-section h3 {
        font-size: 1.5rem;
        font-weight: normal;
        margin-bottom: 1.5rem;
    }

    .goals-section h1 {
        font-size: 3.5rem;
        font-weight: normal;
        margin-bottom: 30px;
    }

    .goal-item {
        display: flex;
        align-items: center;
        margin-top: 4rem;
        margin-bottom: 1.5rem;
    }

    .goal-item img {
        width: 50px;
        height: 50px;
        margin-right: 15px;
    }

    .goal-item h5 {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }

    .goal-item p {
        font-size: 1rem;
        font-weight: 100;
        margin: 0;
    }
</style>

@extends('components.userLayout')
@section('content')
    <section class="container py-5 mt-5">
        <div class="row align-items-center">
            {{-- Left Content --}}
            <div class="col-md-6 text-md-start text-center">
                <h1 class="fw-bold">Empowering Health:</h1>
                <p class="fs-4 fw-semibold text-danger">Why Just Survive, When You Can Live Happily.</p>
                <p class="fs-6">Ready to start the journey?</p>
                <a ondblclick="scrollToSection('data')" class="btn text-white fw-semibold smooth"
                    style="background-color: #EC744A;">Get started</a>
            </div>

            {{-- Right Content --}}
            <div class="col-md-6 text-center">
                <img src="{{ asset('assets/cardiologist.png') }}" alt="Health Illustration" class="img-fluid">
            </div>
        </div>
    </section>

    <section class="py-5 gradasi" id="data">
        <div class="container">
            <div class="row text-center text-white">
                <div class="col-md-4">
                    <h5>Cervical Cancer</h5>
                    <h2 class="fw-bold">&gt;95%</h2>
                </div>
                <div class="col-md-4">
                    <h5>Invasive Anal Cancer</h5>
                    <h2 class="fw-bold">88.3%</h2>
                </div>
                <div class="col-md-4">
                    <h5>Vaginal Cancer</h5>
                    <h2 class="fw-bold">74%</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 martop">
        <div class="container text-center">
            <h6 class="text-uppercase text-muted">Our Mission</h6>
            <h2 class="fw-bold">To make HPV vaccinations accessible and affordable, ensuring that no one faces preventable
                cervical cancer.</h2>
            <div class="row mt-5 align-items-center">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="border border-2 border-dark rounded p-4 h-100">
                        <img src="{{ asset('assets/leftIcon.png') }}" alt="Icon" class="mb-3">
                        <h5 class="fw-semibold">Improve Accessibility</h5>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="border border-3 border-dark rounded p-4 h-100 w-auto text-white gradasi">
                        <img src="{{ asset('assets/middleIcon.png') }}" alt="Icon" class="mb-3">
                        <h5 class="fw-semibold">Increase Awareness</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border border-2 border-dark rounded p-4 h-100">
                        <img src="{{ asset('assets/rightIcon.png') }}" alt="Icon" class="mb-3">
                        <h5 class="fw-semibold">Reduce Cost Barriers</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-us" class="py-5 martop">
        <div class="container">
            <div class="row align-items-center">
                {{-- Left Content --}}
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('assets/heroIcon2.png') }}" alt="Doctor Illustration" class="img-fluid"
                        style="max-height: 400px;">
                </div>
                {{-- Right Content --}}
                <div class="col-lg-6">
                    <h5 class="text-muted">About Us</h5>
                    <h2 class="fw-bold">
                        We are helping women in <br>
                        <span class="orange">27-45 years old</span> to access <br>
                        affordable HPV Vaccination
                    </h2>
                    <p class="mt-3">Want to know more about us?</p>
                    <a href="{{ route('aboutus.view') }}" class="btn text-white fw-semibold"
                        style="background-color: #EC744A;">See
                        detail</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 martop">
        <div class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 posisi z-10">
                        <img src="{{ asset('assets/suntikIcon.png') }}" alt="suntik icon" class="img-fluid">
                    </div>
                    <div class="col-md-6 d-flex middle">
                        <div class="goals-section">
                            <h3>Goals</h3>
                            <h1>To make HPV vaccination</h1>
                            <div class="goal-item">
                                <img src="{{ asset('assets/tanamanVector.png') }}" alt="Easily Accessible Icon">
                                <div>
                                    <h5>Easily Accessible</h5>
                                    <p>By reducing the price of HPV vaccine to the lowest, we allow every woman to get
                                        vaccinated.</p>
                                </div>
                            </div>
                            <div class="goal-item">
                                <img src="{{ asset('assets/orangVector.png') }}" alt="Increase Awareness Icon">
                                <div>
                                    <h5>Increase awareness</h5>
                                    <p>To eliminate HPV, we have to let everyone know its existence.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex justify-content-center align-items-center">
    <h1 class="w-full text-center mt-5">FAQ</h1>
    </div>
    <div class="container mt-3 mb" style="margin-bottom: 10rem;">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        Accordion Item #1
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                        plugin adds the appropriate
                        classes that we use to style each element. These classes control the overall appearance, as well as
                        the showing and hiding via CSS
                        transitions. You can modify any of this with custom CSS or overriding our default variables. It's
                        also worth noting that just
                        about
                        any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Accordion Item #2
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate
                        classes that we use to style each element. These classes control the overall appearance, as well as
                        the showing and hiding via CSS
                        transitions. You can modify any of this with custom CSS or overriding our default variables. It's
                        also worth noting that just
                        about
                        any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Accordion Item #3
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate
                        classes that we use to style each element. These classes control the overall appearance, as well as
                        the showing and hiding via CSS
                        transitions. You can modify any of this with custom CSS or overriding our default variables. It's
                        also worth noting that just
                        about
                        any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    function scrollToSection(sectionId) {
        const targetSection = document.getElementById(sectionId);
        if (targetSection) {
            targetSection.scrollIntoView({
                behavior: 'smooth'
            });
        }
    }
</script>
