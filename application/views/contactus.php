<?php $this->load->view('common/header'); ?>
<?php if (!empty($this->session->flashdata('alert_success'))) {
    echo "<div class='row'>";
    echo "<div class='alert alert-success contact_msg' id='error_delay_fade'>";
    echo $this->session->flashdata('alert_success');
    echo "</div>";
    echo "</div>";
} else if (!empty($this->session->flashdata('alert_error'))) {
    echo "<div class='row'>";
    echo "<div class='alert alert-danger contact_msg' id='error_delay_fade'>";
    echo $this->session->flashdata('alert_error');
    echo "</div>";
    echo "</div>";
}
?>
<section class="section_top inner_pages">
    <div class="contentt">
        <div class="container">
            <div class="row align-items-stretch no-gutters contact-wrap">
                <div class="col-md-8">
                    <div class="form h-100">
                        <h3>Send us a message</h3>
                        <form class='mb-5' action="<?php echo html_escape(base_url('contact-us')) ?>" method="POST" id="contactForm" name="contactForm" novalidate="novalidate" onsubmit="form_submit_reg.disabled=true;return true;">
                            <div class="row">
                                <div class="col-md-6 form-groupp mb-5">
                                    <label class="col-form-label">Name *</label>
                                    <input type="text" class="form-controll" name="name" placeholder="Your name">
                                    <span class="err_message">
                                        <?php echo form_error('name'); ?>
                                    </span>
                                </div>
                                <div class="col-md-6 form-groupp mb-5">
                                    <label class="col-form-label">Email *</label>
                                    <input type="text" class="form-controll" name="email" placeholder="Your email">
                                    <span class="err_message">
                                        <?php echo form_error('email'); ?>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-5">
                                    <label class="col-form-label">Phone</label>
                                    <input type="text" class="form-controll" name="subject" placeholder="Subject ">
                                    <span class="err_message">
                                        <?php echo form_error('subject'); ?>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-groupp mb-5">
                                    <label class="col-form-label">Message *</label>
                                    <textarea class="form-controll" name="message" cols="30" rows="4" placeholder="Write your message"></textarea>
                                    <span class="err_message">
                                        <?php echo form_error('message'); ?>
                                    </span>
                                </div>
                            </div>
                            <?php echo captcha_common_html(); ?>
                            <div class="row">
                                <div class="col-md-12 form-group" id="form_submit_reg">
                                    <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                                    <span class="submitting"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info h-100">
                        <h3>Contact Information</h3>
                        <p class="mb-5">Let our dedicated customer support team assist you in finding the perfect lab
                            equipment and analytical instruments to meet your scientific needs. Experience our
                            commitment to excellence and discover why so many professionals choose us as their trusted
                            laboratory equipment supplier.
                        </p>
                        <ul class="list-unstyled">
                            <li class="d-flex">
                                <i class="fa fa-map-marker mr-3"></i>
                                <span class="text">Labosearch.Inc 360 Bloomfield Avenue, Windsor CT, 06095, USA.</span>
                            </li>
                            <li class="d-flex">
                                <i class="fa fa-phone mr-3"></i>
                                <span class="text">+1 438 901 2321</span>
                            </li>
                            <li class="d-flex">
                                <i class="fa fa-envelope mr-3"></i>
                                <span class="text">info@labosearch.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var correctCaptcha = function(response) {
        if (response.length == 0) {
            alert('Please verify captcha');
        } else {
            document.getElementById("form_submit_reg").removeAttribute("disabled");
        }
    }
    $("#error_delay_fade").fadeIn().delay(3000).fadeOut();
</script>
<?php $this->load->view('common/footer'); ?>