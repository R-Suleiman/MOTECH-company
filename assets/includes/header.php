<?php

echo '
 <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
          <div class="col-lg-3 bg-dark d-none d-lg-block">
            <a
              href="../index.php"
              class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center"
            >
              <h1 class="m-0 text-primary">MOTECH</h1>
            </a>
          </div>
          <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
              <a href="../index.php" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 text-primary text-uppercase">MOTECH</h1>
              </a>
              <button
                type="button"
                class="navbar-toggler"
                data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div
                class="collapse navbar-collapse justify-content-between"
                id="navbarCollapse"
              >
                <div class="navbar-nav mr-auto py-0">
                  <a href="../index.php" class="nav-item nav-link"
                    >Home</a
                  >
                  <a href="about.php" class="nav-item nav-link">About</a>
                  <div class="nav-item dropdown">
                    <a
                      href="#"
                      class="nav-link dropdown-toggle"
                      data-bs-toggle="dropdown"
                      >Services</a
                    >
                    <div class="dropdown-menu rounded-0 m-0 bg-dark">
                      <a
                        href="service.php"
                        class="dropdown-item text-white bg-dark"
                        >Graphic design</a
                      >
                      <a
                        href="service.php"
                        class="dropdown-item text-white bg-dark"
                        >Web development</a
                      >
                      <a
                        href="service.php"
                        class="dropdown-item text-white bg-dark"
                        >Photography</a
                      >
                      <a
                        href="service.php"
                        class="dropdown-item text-white bg-dark"
                        >Video production</a
                      >
                      <a
                        href="service.php"
                        class="dropdown-item text-white bg-dark"
                        >IT Consultations</a
                      >
                    </div>
                  </div>
                  <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
'


?>