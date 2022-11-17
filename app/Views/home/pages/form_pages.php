<?= $this->extend('home/layouts/form_layout') ?>


<?= $this->section('content') ?>

        <div class="container py-5 py-md-12">
          <div class="row">
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
              <h2 class="display-4 mb-3 text-center">Formulir Pendaftaran</h2>
              <p class="lead text-center mb-10">
                Silahkan di isi sesuai data yang anda miliki.
              </p>
              <form
                id="myForm"
                class="contact-form needs-validation"
                method="post"
                action=""
                novalidate
                autocomplete="off"
              >
                <div style="text-align: center">
                  <span class="step" id="step-1">1</span>
                  <span class="step" id="step-2">2</span>
                  <span class="step" id="step-3">3</span>
                  <span class="step" id="step-4">4</span>
                </div>

                <div class="messages"></div>
                <div class="row gx-4" id="tab-1">
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_name"
                        type="text"
                        name="name"
                        class="form-control"
                        placeholder="Jane"
                        required
                      />
                      <label for="form_name">First Name *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please enter your first name.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_lastname"
                        type="text"
                        name="surname"
                        class="form-control"
                        placeholder="Doe"
                        required
                      />
                      <label for="form_lastname">Last Name *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please enter your last name.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_email"
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="jane.doe@example.com"
                        required
                      />
                      <label for="form_email">Email *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-12">
                    <div class="form-select-wrapper">
                      <select class="form-select" id="form-select" required>
                        <option selected disabled value="">
                          Select a department
                        </option>
                        <option value="1">Sales</option>
                        <option value="2">Marketing</option>
                        <option value="3">Customer Support</option>
                      </select>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please select a department.
                      </div>
                    </div>
                  </div>

                  <div class="index-btn-wrapper">
                    <div
                      class="btn btn-green rounded-pill me-1 mt-5"
                      onclick="run(1, 2);"
                    >
                      Next
                    </div>
                  </div>
                </div>
                <div class="row gx-4" id="tab-2">
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_name"
                        type="text"
                        name="name"
                        class="form-control"
                        placeholder="Jane"
                        required
                      />
                      <label for="form_name">First Name *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please enter your first name.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_lastname"
                        type="text"
                        name="surname"
                        class="form-control"
                        placeholder="Doe"
                        required
                      />
                      <label for="form_lastname">Last Name *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please enter your last name.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_email"
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="jane.doe@example.com"
                        required
                      />
                      <label for="form_email">Email *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-12">
                    <div class="form-select-wrapper">
                      <select class="form-select" id="form-select" required>
                        <option selected disabled value="">
                          Select a department
                        </option>
                        <option value="1">Sales</option>
                        <option value="2">Marketing</option>
                        <option value="3">Customer Support</option>
                      </select>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please select a department.
                      </div>
                    </div>
                  </div>

                  <div class="index-btn-wrapper">
                    <div
                      class="btn btn-green rounded-pill mb-2 me-1 mt-5"
                      onclick="run(2, 1);"
                    >
                      Previous
                    </div>
                    <div
                      class="btn btn-green rounded-pill mb-2 me-1 mt-5"
                      onclick="run(2, 3);"
                    >
                      Next
                    </div>
                  </div>
                </div>
                <div class="row gx-4" id="tab-3">
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_name"
                        type="text"
                        name="name"
                        class="form-control"
                        placeholder="Jane"
                        required
                      />
                      <label for="form_name">First Name *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please enter your first name.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_lastname"
                        type="text"
                        name="surname"
                        class="form-control"
                        placeholder="Doe"
                        required
                      />
                      <label for="form_lastname">Last Name *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please enter your last name.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_email"
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="jane.doe@example.com"
                        required
                      />
                      <label for="form_email">Email *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-12">
                    <div class="form-select-wrapper">
                      <select class="form-select" id="form-select" required>
                        <option selected disabled value="">
                          Select a department
                        </option>
                        <option value="1">Sales</option>
                        <option value="2">Marketing</option>
                        <option value="3">Customer Support</option>
                      </select>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please select a department.
                      </div>
                    </div>
                  </div>

                  <div class="index-btn-wrapper">
                    <div
                      class="btn btn-green rounded-pill mb-2 me-1 mt-5"
                      onclick="run(3, 2);"
                    >
                      Previous
                    </div>
                    <div
                      class="btn btn-green rounded-pill mb-2 me-1 mt-5"
                      onclick="run(3, 4);"
                    >
                      Next
                    </div>
                  </div>
                </div>
                <div class="row gx-4" id="tab-4">
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_name"
                        type="text"
                        name="name"
                        class="form-control"
                        placeholder="Jane"
                        required
                      />
                      <label for="form_name">First Name *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please enter your first name.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_lastname"
                        type="text"
                        name="surname"
                        class="form-control"
                        placeholder="Doe"
                        required
                      />
                      <label for="form_lastname">Last Name *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please enter your last name.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_email"
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="jane.doe@example.com"
                        required
                      />
                      <label for="form_email">Email *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-12">
                    <div class="form-select-wrapper">
                      <select class="form-select" id="form-select" required>
                        <option selected disabled value="">
                          Select a department
                        </option>
                        <option value="1">Sales</option>
                        <option value="2">Marketing</option>
                        <option value="3">Customer Support</option>
                      </select>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please select a department.
                      </div>
                    </div>
                  </div>
                  <div class="index-btn-wrapper">
                    <div
                      class="btn btn-green rounded-pill mb-2 me-1 mt-5"
                      onclick="run(4, 3);"
                    >
                      Previous
                    </div>
                    <div
                      class="btn btn-green rounded-pill mb-2 me-1 mt-5"
                      onclick="run(4, 5);"
                    >
                      Next
                    </div>
                  </div>
                </div>
                <div class="row gx-4" id="tab-5">
                <div class="tab" id="tab-5">
                    <div class="index-btn-wrapper justify-content-center">
                      <div
                        class="btn btn-green rounded-pill mb-3 me-5 "
                        onclick="run(5, 4);"
                      >
                        Previous
                      </div>
                      <button
                        class="btn btn-primary rounded-pill btn-send mb-3"
                        type="submit"
                        name="submit"
                      >
                        Submit
                      </button>
                    </div>
                  </div>
                </div>
                <!-- /.row -->
              </form>
              <!-- /form -->
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
       
<?= $this->endSection() ?>