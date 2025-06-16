<!-- start page title -->
<section class="ipad-top-space-margin page-title-big-typography bg-dark-gray cover-background background-position-center-top p-0" style="background-image: url(img/breadcrumb/bc-contact.jpg)">
            <div class="container">
                <div class="row align-items-end justify-content-center one-half-screen md-small-screen sm-extra-small-screen pb-4" style="max-height: 400px;">
                    <div class="col-lg-10 col-md-8 position-relative page-title-extra-small text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h2 class="text-white mb-0 text-uppercase ls-3px fw-600">Feel Free to</h2>
                        <h1 class="mb-20px alt-font text-white fw-500 ls-minus-4px">Contact Us</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->  
 <!-- start section --> 
 <section class="bg-dark-gray background-position-center-top overlap-height" style="background-image: url('images/demo-architecture-dotted-pattern.svg')">
            <div class="container overlap-gap-section">
                <div class="row mb-7 sm-mb-0">
                    <div class="col-lg-8 krttxform">
                        <form action="krttxform/process_dealer.php" method="post" enctype="multipart/form-data" class="row">
                            
                            <div class="col-12">
                                <label for="subject">Subject:</label>
                                <select id="subject" name="subject" required>
                                    <option value="Enquiry">Enquiry</option>
                                </select>
                            </div>
                            
                            <div class="col-12">
                                <label for="User_name">Name:</label>
                                <input type="text" id="User_name" name="User_name" required>
                            </div>
                            
                            <div class="col-6">
                                <label for="User_Email">Email:</label>
                                <input type="email" id="User_Email" name="User_Email" required>
                            </div>
                            
                            <div class="col-6">
                                <label for="Tel_no">Phone Number:</label>
                                <input type="tel" id="Tel_no" name="Tel_no" required>
                            </div>
                            
                            <div class="col-12">
                                <label for="Address">Address:</label>
                                <input type="text" id="Address" name="Address" required>
                            </div>
                            
                            <div class="col-12">
                                <label for="Enquiry">Message:</label>
                                <textarea id="Enquiry" name="Enquiry" rows="5" required></textarea>
                            </div>      
                            
                            <!-- <div class="col-12">
                                <label for="file">Attach File(s):</label>
                                <input type="file" id="file" name="file[]" multiple>
                            </div> -->
                            
                            <div class="col-12">
                                <input type="submit" value="Submit" onclick="validate(document.getElementById('AntiSpam').value, 'ans')"></input>
                            </div>
                        </form>
                    </div>
                    
                    <div class="col-lg-4 md-mb-50px xs-mb-30px" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <span class="text-base-color fs-12 fw-600 ls-3px text-uppercase mb-5px d-block">Contact</span>
                        <h4 class="text-white mb-20px fw-600">Get In Touch With Us</h4>
                        <p>Thank you for visiting our website! We are delighted to have you here, and we want to assure you that we are always ready and eager to assist you. Our team is committed to providing the best possible service to ensure your experience is seamless and enjoyable. Whether you have a question about any of our products or services, need technical support, or simply wish to share your thoughts, ideas, or feedback, we encourage you to reach out to us.</p>

                        <p>Your satisfaction is our top priority, and your feedback plays a crucial role in helping us improve and better serve you. Rest assured that your concerns will be addressed with the utmost care and attention. We are constantly striving to enhance our offerings and your experience, so don't hesitate to let us know how we can further assist you.</p>
                        <!-- <center><img src="img/pro-01/tripler-pro-01-01.png" style="margin: 2rem 0;"></center> -->
                        <a href="#services" class="btn btn-link btn-hover-animation-switch btn-medium text-white primary-font sm-vertical-align-top section-link ls-1px">
                            <!-- <span>
                                <span class="btn-text">Explore services</span>
                                <span class="btn-icon"><i class="fa-solid fa-arrow-right fs-14"></i></span>
                                <span class="btn-icon"><i class="fa-solid fa-arrow-right fs-14"></i></span>
                            </span>  -->
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->