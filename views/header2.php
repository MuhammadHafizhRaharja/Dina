<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="userhomepage.php" class="nav__logo">
                <img src="assets/logoerase.png" alt="Logo">
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list" id="nav-menu">
                    <li class="nav__item">
                        <a href="userhomepage.php" class="nav__link active-link">Home</a>
                    </li>

                    <li class="nav__item">
                        <a href="#about" class="nav__link">About</a>
                    </li>

                    <li class="nav__item">
                        <a href="#popular" class="nav__link">Popular</a>
                    </li>
                    
                    <li class="nav__item">
                        <a href="#explore" class="nav__link">Explore</a>
                    </li>
                    <li class="nav__item">
                        <div class="navbar-profile">
                            <img src="<?= $profile_picture ?>" alt="profile-image" id="menu-image" class="profile-image">
                        </div>
                    </li>
                    
                      <li class="nav__item nav__item--mobile">
                        <a href="#myprofile" class="nav__link">My Profile</a>
                      </li>
                </ul>

                

                  <div class="menu">
                    <ul>
                      <li>
                        <i class="material-icons-outlined">account_circle</i>
                        My Profile
                      </li>
                      <li>
                        <i class="material-icons-outlined">settings</i>
                        Account Settings
                      </li>
                    </ul>
                    <hr />
            
                    <ul>
                      <li>
                        <i class="material-icons-outlined">analytics</i>
                        Analytics
                      </li>
                      <li>
                        <i class="material-icons-outlined">mail</i>
                        Inbox
                      </li>
                    </ul>
                    <hr />
            
                    <ul>
                      <span style="color: white; font-size: 1.1rem">Switch Accounts</span>
                      <li
                        style="
                          margin-top: 10px;
                          margin-bottom: 10px;
                          background-color: #31363f;
                        "
                      >
                        <img
                          src="about us/images/Foto apis.jpg"
                          alt="profile-image"
                          class="account-profile"
                        />
                        <div class="accounts">
                          <span style="color: white">Muhammad Hafizh Raharja</span>
                          <span>Hafizh@Gmail.com</span>
                        </div>
                      </li>
                      <li>
                        <img
                          src="about us/images/darren.jpeg"
                          alt="profile-image"
                          class="account-profile"
                        />
                        <div class="accounts">
                          <span style="color: white">Darren</span>
                          <span>Darren@Gmail.com</span>
                        </div>
                      </li>
                    </ul>
            
                    <ul>
                        <a href="Index.php">
                      <li class="all-account">
                        <i class="material-icons-outlined">logout</i>
                        Sign out all accounts
                      </li>
                    </ul>
                </a>
                  </div>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </nav>
    </header>