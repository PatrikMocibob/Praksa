<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Disposal Arena - REPO</title>

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

    <!-- Disposal Arena Content -->
    <div class="container main-content">
      <div class="row content-box text-box align-items-center">
        <!-- TEXT SECTION -->
        <div class="col-md-7">
          <h2>DISPOSAL ARENA</h2>
          <p class="disposal-description">
            Disposal Arena is a grim industrial battleground built atop a
            massive waste processing plant.
            <br /><br />
            Players fight through conveyor belts, burning furnaces, and
            scrapyard piles in a race against time and hazard.
            <br /><br />
            This map features environmental traps, moving machinery, and wide
            open killing floors, demanding fast movement and sharp coordination.
            <br /><br />
            The arena also serves as the unfortunate place where the Taxman
            sends players when they all fail to meet their tax quota. They are
            placed in a room where the Taxman mocks them through a message
            panel.
            <br /><br />
            They are then released to fight in a shrinking arena filled with
            weapons and objects — the last one standing becomes the
            <strong>King of the Losers</strong>, earning a special crown for the
            duration of their next game (as long as they don't die before
            picking it up). <br /><br />
            If playing solo, you simply fall to your death. When using the
            message panel, the message you send is:
            <em>"💀💀💀❓"</em> — though you will not be alive long enough to
            finish sending it.
          </p>
        </div>

        <!-- IMAGE SECTION -->
        <div class="col-md-5">
          <img
            src="slike/Maps/disposal_arena/Disposal_Arena.jpg"
            alt="Disposal Arena Overview"
            class="img-fluid map-image"
            data-toggle="modal"
            data-target="#imageModal"
          />
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
              src="slike/Maps/disposal_arena/Disposal_Arena.jpg"
              alt="Disposal Arena Large"
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
