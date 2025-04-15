<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Swiftbroom Academy - REPO</title>

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css" />

    <!-- Orbitron Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Navigation Bar -->
    <?php include 'header.php'; ?>

    <!-- Swiftbroom Academy Content -->
    <div class="container main-content">
      <div class="row content-box text-box align-items-center">
        <!-- TEXT SECTION -->
        <div class="col-md-7">
          <h2>SWIFTBROOM ACADEMY</h2>
          <p class="swiftbroom-description">
            Swiftbroom Academy is a sprawling, enchanted school once alive with
            magical learning, now shrouded in mystery.
            <br /><br />
            From candlelit corridors and floating libraries to potion labs and
            hidden classrooms, players explore eerie academic ruins while
            uncovering arcane secrets.
            <br /><br />
            Expect dynamic traps, spellbound enemies, and puzzling mechanisms
            that make every run through the Academy feel like a twisted field
            trip from hell.
          </p>
        </div>

        <!-- IMAGE SECTION -->
        <div class="col-md-4">
          <img
            src="slike/Maps/swiftbroom_academy/Swiftbroom_Academy.jpg"
            alt="Swiftbroom Academy Overview"
            class="img-fluid map-image"
            data-toggle="modal"
            data-target="#imageModal"
          />
        </div>
      </div>

      <!-- VALUABLES & MONSTERS -->
      <div class="row content-box">
        <div class="col-md-4">
          <h5>Notable Valuables</h5>
          <ul>
            <li>Love Potion</li>
            <li>Master Potion</li>
            <li>Hourglass</li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Exclusive Valuables</h5>
          <ul>
            <li>Broom</li>
            <li>Chomp Book</li>
            <li>Cube of Knowledge</li>
            <li>Dumgolf's Staff</li>
            <li>Goblin Head</li>
            <li>Griffin Statue</li>
            <li>Hourglass</li>
            <li>Love Potion</li>
            <li>Master Potion</li>
            <li>Power Crystal</li>
            <li>Sword</li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Notable Monsters</h5>
          <ul>
            <li>Robe</li>
            <li>Spewer</li>
            <li>Rugrat</li>
            <li>Huntsman</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- IMAGE MODAL -->
    <div
      class="modal fade"
      id="imageModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="imageModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <img
              src="slike/Maps/swiftbroom_academy/Swiftbroom_Academy.jpg"
              alt="Swiftbroom Academy Large"
              class="img-fluid"
            />
          </div>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
