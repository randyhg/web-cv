<h2>Contact Me</h2>
<div class="contact-block">
    <form action="{{ url ('insert-data') }}" method="post" autocomplete="off" id="contactForm">
    @csrf
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
            <div class="help-block with-errors"></div>
        </div>                                 
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <input type="text" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
            <div class="help-block with-errors"></div>
        </div> 
        </div>
        <div class="col-md-12">
        <div class="form-group">
            <input type="text" placeholder="Subject" id="subject" class="form-control" name="subject" required data-error="Please enter your subject">
            <div class="help-block with-errors"></div>
        </div>
        </div>
        <div class="col-md-12">
        <div class="form-group"> 
            <textarea class="form-control" id="message" name="message" placeholder="Your Message" rows="5" data-error="Write your message" required></textarea>
            <div class="help-block with-errors"></div>
        </div>
        <div class="submit-button">
            <button class="btn btn-common" id="submit" type="submit">Send Message</button>
            <div id="msgSubmit" class="h3 text-center hidden"></div> 
            <div class="clearfix"></div> 
        </div>
        </div>
    </div>            
    </form>
</div>
</div>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
