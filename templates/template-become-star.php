<?php 
/* Template Name: Become a Support Star Template */ 
get_header(); ?>
<section class="step-form-container pt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 py-5">
        <div class="step-form-content">
          <h1>Ready to become a Support Star?</h1>
        </div>
        <div class="step-form-wrapper">
          <div class="container">
            <form id="become-support" action="#">
              <div>
                <h3>Personal details</h3>
                <section>
                  <h4>Please enter your personal details*</h4>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-floating mb-3">
                        <input type="text" name="fname" class="form-control" id="first-name" placeholder="First Name" />
                        <label for="first-name">First Name</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-floating mb-3">
                        <input type="text" name="lname" class="form-control" id="last-name" placeholder="Last Name" />
                        <label for="last-name">Last Name</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-floating mb-3">
                        <input type="text" name="pnumber" class="form-control" id="phone-number" placeholder="Phone Number" />
                        <label for="phone-number">Phone Number</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-floating mb-3">
                        <input type="type" name="email" class="form-control" id="email" placeholder="Email Address" />
                        <label for="email">Email Address</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-floating">
                        <input type="text" name="address" class="form-control" id="address" placeholder="Enter your address" required />
                        <label for="address">Enter your address</label>
                      </div>
                    </div>
                  </div>
                </section>
                <h3>Australian Resident</h3>
                <section>
                  <h4>Are you an Australian Resident?</h4>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <input type="radio" name="aus-resident" class="form-check-input" id="aus-resident-yes">
                        <label for="aus-resident-yes" class="form-check-label">Yes</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <input type="radio" name="aus-resident" class="form-check-input" id="aus-resident-no">
                        <label for="aus-resident-no" class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </section>
                <h3>Rights in Australia</h3>
                <section>
                  <h4>Do you have full working rights in Australia?</h4>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <input type="radio" name="aus-rights" class="form-check-input" id="aus-rights-yes">
                        <label for="aus-rights-yes" class="form-check-label">Yes</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <input type="radio" name="aus-rights" class="form-check-input" id="aus-rights-no">
                        <label for="aus-rights-no" class="form-check-label">No</label>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="more-details" placeholder="If no, please provide more details like visa, etc...">
                        <label for="more-details">If no, please provide more details like visa, etc...</label>
                      </div>
                    </div>
                  </div>
                </section>
                <h3>Driving licence</h3>
                <section>
                  <h4>Do you have a valid driving licence?</h4>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <input type="radio" name="aus-licence" class="form-check-input" id="aus-licence-yes">
                        <label for="aus-licence-yes" class="form-check-label">Yes</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <input type="radio" name="aus-licence" class="form-check-input" id="aus-licence-no">
                        <label for="aus-licence-no" class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </section>
                <h3>Second languages</h3>
                <section>
                  <h4>Do you speak any second languages?</h4>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <input type="radio" name="aus-language" class="form-check-input" id="aus-language-yes">
                        <label for="aus-language-yes" class="form-check-label">Yes</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <input type="radio" name="aus-language" class="form-check-input" id="aus-language-no">
                        <label for="aus-language-no" class="form-check-label">No</label>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="specify" placeholder="If yes, please specify">
                        <label for="specify">If yes, please specify</label>
                      </div>
                    </div>
                  </div>
                </section>
                <h3>Qualifications</h3>
                <section>
                  <h4>Qualifications* e.g. Degree/Diploma/Certificate, Institution, Date Completed</h4>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-floating mb-3">
                        <textarea name="aus-language" class="form-control" id="qualifications" placeholder="Qualifications* e.g. Degree/Diploma/Certificate, Institution, Date Completed" style="height: 150px"></textarea>
                        <label for="qualifications">Qualifications* e.g. Degree/Diploma/Certificate, Institution, Date Completed</label>
                      </div>
                    </div>
                  </div>
                </section>
                <h3>Relevant Experience*</h3>
                <section>
                  <h4>Relevant Experience*</h4>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-floating mb-3">
                        <textarea name="experience" class="form-control" id="experience" placeholder="Experience" style="height: 150px"></textarea>
                        <label for="experience">Experience</label>
                      </div>
                    </div>
                  </div>
                </section>
                <h3>National Police Clearance?</h3>
                <section>
                  <h4>Do you have National Police Clearance?</h4>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <input type="radio" name="national-police" class="form-check-input" id="national-police-yes">
                        <label for="national-police-yes" class="form-check-label">Yes</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <input type="radio" name="national-police" class="form-check-input" id="national-police-no">
                        <label for="national-police-no" class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </section>
                <h3>Location preferences</h3>
                <section>
                  <h4>Location preferences</h4>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-floating mb-3">
                        <textarea name="location-preferences" class="form-control" id="location-preferences" placeholder="Location preferences" style="height: 150px"></textarea>
                        <label for="location-preferences">Location preferences</label>
                      </div>
                    </div>
                  </div>
                </section>
                <h3>Upload resume (not required)</h3>
                <section>
                  <h4>Upload resume (not required)</h4>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="mb-3">
                        <label for="upload" class="form-label">Upload resume</label>
                        <input class="form-control" type="file" id="upload">
                      </div>
                    </div>
                  </div>
                </section>
                <h3>About us</h3>
                <section>
                  <h4>Where did you hear about us?</h4>
                  <div class="row">
                    <div class="col-lg-12">
                      <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select</option>
                        <option value="Google Referral">Google Referral</option>
                        <option value="From a colleague">From a colleague</option>
                        <option value="Referral from a client">Referral from a client</option>
                        <option value="Radio">Radio</option>
                        <option value="TV">TV</option>
                        <option value="Social">Social</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                  </div>
                </section>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();?>