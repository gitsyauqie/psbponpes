<!-- BEGIN: Header-->
<header class="page-topbar" id="header">
      <div class="navbar navbar-fixed">
        <nav
          class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow"
        >
          <div class="nav-wrapper">
           
            <ul class="navbar-list right">
            
              
              
              <li>
                <a
                  class="waves-effect waves-block waves-light profile-button"
                  href="javascript:void(0);"
                  data-target="profile-dropdown"
                  ><span class="avatar-status avatar-online"
                    ><img
                      src="<?= base_url('admin')?>/app-assets/images/avatar/avatar-7.png"
                      alt="avatar" /><i></i></span
                ></a>
              </li>
              
            </ul>
            
            <!-- profile-dropdown-->
            <ul class="dropdown-content" id="profile-dropdown">
              <li>
                <a class="grey-text text-darken-1" href="user-profile-page.html"
                  ><i class="material-icons">person_outline</i> Profile</a
                >
              </li>
              <li>
                <a class="grey-text text-darken-1" href="app-chat.html"
                  ><i class="material-icons">chat_bubble_outline</i> Chat</a
                >
              </li>
              <li>
                <a class="grey-text text-darken-1" href="page-faq.html"
                  ><i class="material-icons">help_outline</i> Help</a
                >
              </li>
              <li class="divider"></li>
              <li>
                <a class="grey-text text-darken-1" href="user-lock-screen.html"
                  ><i class="material-icons">lock_outline</i> Lock</a
                >
              </li>
              <li>
                <a class="grey-text text-darken-1" href="<?= base_url('logout')?>"
                  ><i class="material-icons">keyboard_tab</i> Logout</a
                >
              </li>
            </ul>
          </div>
          <nav class="display-none search-sm">
            <div class="nav-wrapper">
              <form id="navbarForm">
                <div class="input-field search-input-sm">
                  <input
                    class="search-box-sm mb-0"
                    type="search"
                    required=""
                    id="search"
                    placeholder="Explore Materialize"
                    data-search="template-list"
                  />
                  <label class="label-icon" for="search"
                    ><i class="material-icons search-sm-icon">search</i></label
                  ><i class="material-icons search-sm-close">close</i>
                  <ul
                    class="search-list collection search-list-sm display-none"
                  ></ul>
                </div>
              </form>
            </div>
          </nav>
        </nav>
      </div>
    </header>