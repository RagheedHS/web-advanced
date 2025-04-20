@extends('layouts.app')
@section('content')

<main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="contact-us container">
      <div class="mw-930">
        <h2 class="page-title">CONTACT US</h2>
      </div>
    </section>

    <hr class="mt-2 text-secondary " />
    <div class="mb-4 pb-4"></div>

    <section class="contact-us container">
      <div class="mw-930">
        <div class="contact-us__form">
            <form id="contactForm">
                <h3 class="mb-5">Get In Touch</h3>
                
                <div class="form-floating my-4">
                    <input type="text" id="conName" class="form-control" name="name" placeholder="Name *" required>
                    <label for="conName">Name *</label>
                </div>
                
                <div class="form-floating my-4">
                    <input type="text" id="conPhone" class="form-control" name="phone" placeholder="Phone *" required>
                    <label for="conPhone">Phone *</label>
                </div>
                
                <div class="form-floating my-4">
                    <input type="email" id="conEmail" class="form-control" name="email" placeholder="Email address *" required>
                    <label for="conEmail">Email address *</label>
                </div>
                
                <div class="my-4">
                    <textarea id="conMessege" class="form-control form-control_gray" name="message" placeholder="Your Message" cols="30" rows="8" required></textarea>
                </div>
                
                <div class="my-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
      </div>
    </section>
</main>

@endsection

@push("scripts")
<script>
    $(document).ready(function() {
        $("#contactForm").on("submit", function(e) {
            e.preventDefault();
            alert("Your message has been sent!");
            this.reset();
        });
    });
</script>
@endpush