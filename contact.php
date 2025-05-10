<!DOCTYPE html>
<html lang="hr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact - REPO</title>

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

    <div class="container main-content mt-5 mb-5">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="card shadow p-4">
            <h2 class="text-center mb-4">Contact Us</h2>
            <form id="contactForm" class="needs-validation" novalidate>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="firstname">Name</label>
                  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Name" required />
                  <div class="invalid-feedback">Please enter your name.</div>
                </div>
                <div class="form-group col-md-6">
                  <label for="lastname">Last Name</label>
                  <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name" required />
                  <div class="invalid-feedback">Please enter your last name.</div>
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required />
                <div class="invalid-feedback">Please enter a valid email address.</div>
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="(555) 123-4567" />
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea
                  class="form-control"
                  id="message"
                  name="message"
                  rows="5"
                  placeholder="Type your message here..."
                  required
                ></textarea>
                <div class="invalid-feedback">Please enter your message.</div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary px-5">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color: #4CAF50; border: 3px solid #388E3C;">
          <div class="modal-header" style="border-bottom: 2px solid #388E3C;">
            <h5 class="modal-title" id="successModalLabel" style="color: #fff; font-weight: bold;">Message Sent</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff;">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="color: #fff;">
            Your message has been successfully sent. We will get back to you shortly!
          </div>
          <div class="modal-footer" style="border-top: 2px solid #388E3C;">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #388E3C;">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Modals and Bootstrap Validation + AJAX -->
    <script>
      (function () {
        const form = document.getElementById("contactForm");

        form.addEventListener("submit", function (event) {
          event.preventDefault();
          event.stopPropagation();

          if (form.checkValidity()) {
            const formData = new FormData(form);

            fetch("submit_contact.php", {
              method: "POST",
              body: formData,
            })
              .then((response) => response.json())
              .then((data) => {
                if (data.success) {
                  $('#successModal').modal('show');
                  form.reset();
                  form.classList.remove('was-validated');
                } else {
                  alert("There was an error: " + data.error);
                }
              })
              .catch((error) => {
                alert("Request failed: " + error);
              });
          }

          form.classList.add("was-validated");
        }, false);
      })();
    </script>
  </body>
</html>
