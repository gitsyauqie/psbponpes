<?= $this->extend('santri/layouts/index') ?>
<?= $this->section('content') ?>

     <!-- BEGIN: Page Main-->
     <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
              <h5 class="breadcrumbs-title mt-0 mb-0"><span><?php echo $breadcrumbs_title; ?></span></h5>
                <ol class="breadcrumbs mb-0">
                <li class="breadcrumb-item"><a href="#"><?php echo $breadcrumbs_item; ?></a>
                </li>
                <li class="breadcrumb-item"><a href="#"><?php echo $breadcrumbs_item2; ?></a>
                </li>
              </ol>
              </div>
             
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <!-- users view start -->
            <div class="section users-view">
              <!-- users view media object start -->
              <div class="card-panel">
                <div class="row">
                  <div class="col s12 m7">
                    <div class="display-flex media">
                      <a href="#" class="avatar">
                        <img
                          src="<?= base_url('admin')?>/app-assets/images/avatar/avatar-15.png"
                          alt="users view avatar"
                          class="z-depth-4 circle"
                          height="64"
                          width="64"
                        />
                      </a>
                      <div class="media-body">
                        <h6 class="media-heading">
                          <span class="users-view-name">Dean Stanley </span>
                          
                          
                        </h6>
                        <span>NIK : </span>
                        <span class="users-view-id">1192121201219212</span>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
             

            </div>
         
            <div
              style="bottom: 50px; right: 19px"
              class="fixed-action-btn direction-top"
            >
              <a
                class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"
                ><i class="material-icons">add</i></a
              >
              <ul>
                <li>
                  <a href="css-helpers.html" class="btn-floating blue"
                    ><i class="material-icons">help_outline</i></a
                  >
                </li>
                <li>
                  <a href="cards-extended.html" class="btn-floating green"
                    ><i class="material-icons">widgets</i></a
                  >
                </li>
                <li>
                  <a href="app-calendar.html" class="btn-floating amber"
                    ><i class="material-icons">today</i></a
                  >
                </li>
                <li>
                  <a href="app-email.html" class="btn-floating red"
                    ><i class="material-icons">mail_outline</i></a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="content-overlay"></div>
        </div>

        <div class="col s12 m6">
               <div class="container">
                   <div class="section user-view">
                    <div class="card-content">
                    <table class="striped">
                        <tbody>
                          <tr>
                            <td>Registered:</td>
                            <td>01/01/2019</td>
                          </tr>
                          <tr>
                            <td>Latest Activity:</td>
                            <td class="users-view-latest-activity">
                              30/04/2019
                            </td>
                          </tr>
                          <tr>
                            <td>Verified:</td>
                            <td class="users-view-verified">Yes</td>
                          </tr>
                          <tr>
                            <td>Role:</td>
                            <td class="users-view-role">Staff</td>
                          </tr>
                          <tr>
                            <td>Status:</td>
                            <td>
                              <span
                                class="users-view-status chip green lighten-5 green-text"
                                >Active</span
                              >
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    </div>
               </div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->

  
<?= $this->endSection() ?>
