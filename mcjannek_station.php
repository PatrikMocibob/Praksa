<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>McJannek Station - REPO</title>

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

    <!-- McJannek Station Content -->
    <div class="container main-content">
      <div class="row content-box text-box align-items-center">
        <!-- TEXT SECTION -->
        <div class="col-md-7">
          <h2>MCJANNEK STATION</h2>
          <p class="mcjannek-description">
            McJannek Station is a labyrinthine underground transit hub long
            abandoned after a failed evacuation.
            <br /><br />
            Players must traverse broken platforms, overgrown tunnels,
            maintenance rooms, and train cars that are now crawling with danger.
            <br /><br />
            Environmental hazards, tight corridors, and limited lighting make
            this map a tense experience filled with jump scares and
            claustrophobic encounters.
          </p>
        </div>

        <!-- IMAGE SECTION -->
        <div class="col-md-4">
          <img
            src="slike/Maps/mcjannek_station/Mcjannek.jpg"
            alt="McJannek Station Overview"
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
            <li>Cash</li>
            <li>Small Vase</li>
            <li>Orange Vial</li>
            <li>Emerald Bracelet</li>
            <li>Radioactive Plate</li>
            <li>Fan</li>
            <li>Computer Server Tail</li>
            <li>Computer Server Wide</li>
            <li>3D Printer</li>
            <li>Clown Toy (Bomb)</li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Exclusive Valuables</h5>
          <ul>
            <li>Barrel</li>
            <li>Big Sample</li>
            <li>Bonsai Tree</li>
            <li>Creature Leg</li>
            <li>Desktop Computer</li>
            <li>Flamethrower</li>
            <li>Fan</li>
            <li>Guitar</li>
            <li>HDD</li>
            <li>Ice Block</li>
            <li>Ice Saw</li>
            <li>Laptop</li>
            <li>Propane Tank</li>
            <li>Sample</li>
            <li>Sample Cooler</li>
            <li>Sample Six Pack</li>
            <li>Server Rack</li>
            <li>Science Station</li>
            <li>3D Printer</li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Notable Monsters</h5>
          <ul>
            <li>Headman</li>
            <li>Peeper</li>
            <li>Huntsman</li>
            <li>Apex Predator</li>
            <li>Mentalist</li>
            <li>Clown</li>
            <li>Trudge</li>
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
              src="slike/Maps/mcjannek_station/Mcjannek.jpg"
              alt="McJannek Station Large"
              class="img-fluid"
            />
          </div>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
    <?php include 'footer'; ?>

    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
