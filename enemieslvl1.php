<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Enemies - Level 1</title>

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

    <!-- ENEMIES LEVEL 1 CONTENT -->
    <div class="container main-content">
      <div class="row content-box text-box align-items-center mb-5">
        <div class="col-md-5">
          <a
            href="slike/Enemies/lvl1/Eye_monster.jpg"
            data-toggle="modal"
            data-target="#imageModal"
          >
            <img
              src="slike/Enemies/lvl1/Eye_monster.jpg"
              alt="Peeper Monster"
              class="img-fluid map-image"
            />
          </a>
        </div>
        <div class="col-md-7">
          <h2>Peeper (Eye Monster)</h2>
          <p>
            <strong>HP:</strong> 50<br />
            The Peeper is a ceiling-dwelling monster that remains closed until a
            player enters its view. Once it opens, it forces the player’s
            crosshair toward it, and if they stare for ~3 seconds, it deals 2
            damage per second until eye contact is broken. <br /><br />
            The effect stops when the player looks away, causing the Eye to
            disappear after a few seconds. While affected, a player’s voice
            pitch becomes helium-high, and their FOV zooms in, making navigation
            disorienting. <br /><br />
            The best way to counter it is to quickly break line of sight.
            Ducking into a doorway or under a table is effective. Only one
            player can be targeted at a time. You can also block its view using
            objects or terrain. <br /><br />
            Though harmless early on, it becomes much more dangerous after
            extraction or at the 50-minute mark due to rapid respawning. If
            spotted from above, it's extremely vulnerable to a single sword
            strike.
          </p>
        </div>
      </div>

      <div class="row content-box text-box align-items-center mb-5">
        <div class="col-md-5">
          <a
            href="slike/Enemies/lvl1/Shadow_chiles.jpg"
            data-toggle="modal"
            data-target="#imageModal"
          >
            <img
              src="slike/Enemies/lvl1/Shadow_chiles.jpg"
              alt="Shadow Child"
              class="img-fluid map-image"
            />
          </a>
        </div>
        <div class="col-md-7">
          <h2>Shadow Child</h2>
          <p>
            <strong>HP:</strong> 150<br />
            The Shadow Child teleports with the sound of a child’s laughter. If
            looked at, your screen darkens slightly and, after 2–3 seconds, it
            jumpscares you with a "yoink", deals 30 damage, and throws you
            across the room. <br /><br />
            Though scary, it’s easily avoided or swatted away. It usually
            disappears within 10 seconds. If it's in your way, just hit it once
            or Tumble Launch into it to stun and remove it. <br /><br />
            Not a threat unless you're near hazards or on low health. It
            requires 9 strength upgrades to pick up.
          </p>
        </div>
      </div>

      <div class="row content-box text-box align-items-center mb-5">
        <div class="col-md-5">
          <a
            href="slike/Enemies/lvl1/The_gnome.jpg"
            data-toggle="modal"
            data-target="#imageModal"
          >
            <img
              src="slike/Enemies/lvl1/The_gnome.jpg"
              alt="Gnome"
              class="img-fluid map-image"
            />
          </a>
        </div>
        <div class="col-md-7">
          <h2>Gnome</h2>
          <p>
            <strong>HP:</strong> 20<br />
            The Gnome spawns in swarms and exists solely to harass and destroy
            scrap. They deal low damage, but their numbers and behavior make
            them dangerous to your loot. <br /><br />
            Fortunately, they're weak. Just pick them up and slam them to the
            floor to kill them. They also make great throwable weapons against
            other monsters. <br /><br />
            Use side-jumps to dodge them when overwhelmed — especially effective
            when fighting 4 or more.
          </p>
        </div>
      </div>

      <div class="row content-box text-box align-items-center mb-5">
        <div class="col-md-5">
          <a
            href="slike/Enemies/lvl1/Apex_predator.jpg"
            data-toggle="modal"
            data-target="#imageModal"
          >
            <img
              src="slike/Enemies/lvl1/Apex_predator.jpg"
              alt="Apex Predator Duck"
              class="img-fluid map-image"
            />
          </a>
        </div>
        <div class="col-md-7">
          <h2>Apex Predator (Duck)</h2>
          <p>
            <strong>HP:</strong> 150<br />
            The Apex Predator looks like a cute duckling until it's attacked or
            grabbed — then it becomes a terrifying flying beast with rapid bite
            attacks (10 damage up to 3 times a second). <br /><br />
            It targets the player that enraged it and can follow them anywhere,
            even under furniture. If you hide well, it can get caught on object
            legs. <br /><br />
            It stays in view when passive and jumps to stay on screen. Lure it
            into traps like toilets or cauldrons (Swiftbroom Academy) to stun
            and kill it. Bangers and the Huntsman are also very effective.
          </p>
        </div>
      </div>

      <div class="row content-box text-box align-items-center mb-5">
        <div class="col-md-5">
          <a
            href="slike/Enemies/lvl1/Spewer.flying.jpg"
            data-toggle="modal"
            data-target="#imageModal"
          >
            <img
              src="slike/Enemies/lvl1/Spewer.flying.jpg"
              alt="Spewer"
              class="img-fluid map-image"
            />
          </a>
        </div>
        <div class="col-md-7">
          <h2>Spewer</h2>
          <p>
            <strong>HP:</strong> 65<br />
            The Spewer is a flying enemy that vomits green sludge on players. If
            it spots you, it either flies in or screams and pukes from afar. If
            it latches on, it changes your voice and may make you vomit —
            damaging players, objects, and scrap. <br /><br />
            It doesn’t deal direct damage while latched, but puke can hurt you
            and allies. If grabbed, it’ll flee. Shake it to remove it.
            <br /><br />
            Its puke doesn’t aggro enemies, so you can use it to kill things
            safely. For example, it can kill a Clown in 3 pukes.
          </p>
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
            <img src="" alt="Enemy Image" class="img-fluid" id="modalImage" />
          </div>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      // Script to dynamically change the image in the modal
      $("#imageModal").on("show.bs.modal", function (e) {
        var imageSource = $(e.relatedTarget).attr("href");
        $("#modalImage").attr("src", imageSource);
      });
    </script>
  </body>
</html>
