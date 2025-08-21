<!-- start page title -->
<section class="ipad-top-space-margin page-title-big-typography bg-dark-gray cover-background background-position-center-top p-0" style="background-image: url(img/index/slider-04.png)">
            <div class="container">
                <div class="row align-items-end justify-content-center one-half-screen md-small-screen sm-extra-small-screen pb-4" style="max-height: 400px;">
                    <div class="col-lg-10 col-md-8 position-relative page-title-extra-small text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h2 class="text-white mb-0 text-uppercase ls-3px fw-600">Ready to Make Some Business?</h2>
                        <h1 class="mb-20px alt-font text-white fw-500 ls-minus-4px">Dealer Wanted</h1>
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
                        <?php if (isset($_GET['success']) && $_GET['success'] === '1'): ?>
                        <div class="alert alert-success" role="alert" style="margin-bottom:15px;">
                            Thank you! Your application has been submitted.
                        </div>
                        <?php endif; ?>
                        <form action="/krttxform/process_dealer" method="post" enctype="multipart/form-data" class="row">
                            
                            <div class="col-12">
                                <label for="subject">Subject:</label>
                                <select id="subject" name="subject" required>
                                    <option value="Dealer Wanted">Dealer Wanted</option>
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
                        <span class="text-base-color fs-12 fw-600 ls-3px text-uppercase mb-5px d-block">Dealer Application</span>
                        <h4 class="text-white mb-20px fw-600">Let's grow together</h4>
                        <p>We are currently seeking motivated and dedicated dealers to join our growing network! As a dealer, you will play a key role in representing our brand, selling our high-quality products, and helping to expand our market presence.</p>
                        <p>If you are passionate about providing exceptional customer service and are looking for a lucrative opportunity to grow your business, we want to hear from you.</p>
                        <h4 class="text-white mb-20px fw-600">How to Apply:</h4>
                        <p>If you’re interested in becoming a dealer, please fill this form.
                        </p>
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