<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Headman Manor - REPO</title>

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

    <!-- Headman Manor Content -->
    <div class="container main-content">
      <div class="row content-box text-box align-items-center">
        <!-- TEXT SECTION -->
        <div class="col-md-7">
          <h2>HEADMAN MANOR</h2>
          <p class="headman-description">
            Headman Manor is a fog-filled gothic map set in the remnants of a
            haunted estate.
            <br /><br />
            Players will navigate decaying hallways, overgrown gardens, and
            echoing halls while avoiding ghostly threats and extracting cursed
            valuables.
            <br /><br />
            This level is known for its creepy ambience, flickering lights, and
            unique enemy mechanics that challenge communication and teamwork.
          </p>
        </div>

        <!-- IMAGE SECTION -->
        <div class="col-md-4">
          <img
            src="slike/Maps/headman_manor/Headman_Manor.jpg"
            alt="Service Station Overview"
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
            <li>Ship in Bottle</li>
            <li>Cursed Doll</li>
            <li>Television</li>
            <li>Trophy</li>
            <li>Painting</li>
            <li>Human Statue</li>
            <li>Bottle</li>
            <li>Globe</li>
            <li>Dinosaur</li>
            <li>Glass Case Rhino</li>
            <li>Large Vase</li>
            <li>Uranium Plate</li>
            <li>Cash</li>
            <li>Golden Animal Statue</li>
            <li>Diamond</li>
            <li>Harp - Only spawns on this map.</li>
            <li>Music Box - Spins you.</li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Exclusive Valuables</h5>
          <ul>
            <li>Diamond Display</li>
            <li>Dinosaur</li>
            <li>Golden Statue</li>
            <li>Gramophone</li>
            <li>Grandfather Clock</li>
            <li>Harp</li>
            <li>Music Box</li>
            <li>Painting</li>
            <li>Piano</li>
            <li>Radio</li>
            <li>Scream Doll</li>
            <li>Ship in a Bottle</li>
            <li>Television</li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Notable Monsters</h5>
          <ul>
            <li>Spewer</li>
            <li>Trudge</li>
            <li>Robe</li>
            <li>Reaper</li>
            <li>Gnome</li>
            <li>Headman</li>
            <li>Peeper</li>
            <li>Apex Predator</li>
            <li>Shadow Child</li>
            <li>Hidden</li>
            <li>Mentalist</li>
            <li>Chef</li>
            <li>Clown</li>
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
              src="slike/Maps/headman_manor/Headman_Manor.jpg"
              alt="Service Station Overview Large"
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
