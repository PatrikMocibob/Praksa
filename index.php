<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REPO - UI</title>

    <!-- Bootstrap 4 CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      crossorigin="anonymous"
    />

    <!-- Custom Styles -->
    <link rel="stylesheet" href="styles.css" />

    <!-- Orbitron Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome 6 Free -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Navigation Bar (Header) -->
    <?php include 'header.php'; ?>

    <!-- Main Content -->
    <div class="container main-content">
      <div class="content-wrapper">
        <!-- Text Content Box -->
        <div class="content-box text-box">
          <h2>ABOUT THE GAME</h2>
          <p>
            <span
              >R.E.P.O. is an online co-op horror game featuring physics,
              proximity voice chat, and scary monsters.</span
            >
            <span
              >Extract valuable objects using your physics-based grabbing
              tool.</span
            >
            <span
              >This game is still in early access and available on Steam.</span
            >
          </p>
        </div>

        <!-- Image Grid -->
        <div class="content-box">
          <div class="image-grid">
            <img
              src="slike/slika_homepage.jpg"
              alt="Image 1"
              class="img-thumbnail image-hover"
              data-toggle="modal"
              data-target="#imageModal"
            />
            <img
              src="slike/slika_homepage2.jpg"
              alt="Image 2"
              class="img-thumbnail image-hover"
              data-toggle="modal"
              data-target="#imageModal"
            />
            <img
              src="slike/slika_homepage3.jpg"
              alt="Image 3"
              class="img-thumbnail image-hover"
              data-toggle="modal"
              data-target="#imageModal"
            />
            <img
              src="slike/slika_homepage4.jpg"
              alt="Image 4"
              class="img-thumbnail image-hover"
              data-toggle="modal"
              data-target="#imageModal"
            />
            <img
              src="slike/slika_homepage5.jpg"
              alt="Image 5"
              class="img-thumbnail image-hover"
              data-toggle="modal"
              data-target="#imageModal"
            />
            <img
              src="slike/slika_homepage6.jpg"
              alt="Image 6"
              class="img-thumbnail image-hover"
              data-toggle="modal"
              data-target="#imageModal"
            />
          </div>
        </div>
      </div>

      <!-- Get the Game Now Button -->
      <div class="get-game-btn-container text-center">
        <a
          href="https://store.steampowered.com/app/3241660/REPO/"
          class="btn btn-repo get-game-btn"
          >Get the Game Now</a
        >
      </div>
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="imageModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="imageModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body text-center">
            <img
              src=""
              alt="Enlarged Image"
              class="img-fluid"
              id="modalImage"
            />
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php include 'footer'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      $(document).ready(function () {
        $(".image-grid img").click(function () {
          var imgSrc = $(this).attr("src");
          $("#modalImage").attr("src", imgSrc);
        });
      });
    </script>
  </body>
</html>
