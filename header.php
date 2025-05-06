<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#"> <img
            src="slike/Logo_2x.jpg"
            alt="REPO Logo"
            class="repo-logo"
            style="height: 80px"
            
          /></a>

        <!-- Hamburger Toggle Button -->
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarContent"
          aria-controls="navbarContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible Content -->
        
        <div class="collapse navbar-collapse" id="navbarContent">
          
          <div
            class="ml-auto d-flex flex-column flex-lg-row align-items-start align-items-lg-center"
          >

            <!-- Home Button -->
            <a
              href="index.php"
              class="btn btn-repo mb-2 mb-lg-0 mr-lg-3"
              title="Home"
            >
              <i class="fas fa-house"></i>
            </a>

            <!-- Maps Dropdown -->
            <div class="dropdown mb-2 mb-lg-0 mr-lg-3">
              <button
                class="btn btn-repo dropdown-toggle"
                type="button"
                data-toggle="dropdown"
              >
                MAPS
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="ServiceStation.php"
                  >Service Station</a
                >
                <a class="dropdown-item" href="headman_manor.php"
                  >Headman Manor</a
                >
                <a class="dropdown-item" href="mcjannek_station.php"
                  >McJannek Station</a
                >
                
                <a class="dropdown-item" href="disposal_arena.php"
                  >Disposal Arena</a
                >
              </div>
            </div>

            <!-- Enemies Dropdown -->
            <div class="dropdown mb-2 mb-lg-0 mr-lg-3">
              <button
                class="btn btn-repo dropdown-toggle"
                type="button"
                data-toggle="dropdown"
              >
                ENEMIES
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="enemieslvl1.php">Level 1</a>
                <a class="dropdown-item" href="enemieslvl2.php">Level 2</a>
                <a class="dropdown-item" href="enemieslvl3.php">Level 3</a>
              </div>
            </div>

            <!-- Contact us button -->
            <div class="mb-2 mb-lg-0 mr-lg-5">
              <a href="contact.php" class="btn btn-repo">
                CONTACT US
             </a>
            </div>


            <!-- Search -->
            <form class="form-inline my-2 my-lg-0">
              <input
                class="form-control mr-sm-2 search-bar"
                type="search"
                placeholder="Search..."
                aria-label="Search"
              
              />
              <button class="btn btn-repo" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav>