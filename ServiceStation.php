<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Service Station - REPO</title>

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

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Navigation Bar -->
    <?php include 'header.php'; ?>

    <!-- Page Content -->
    <div class="container main-content mt-4">
      <div class="content-box text-box">
        <h2>Service Station</h2>

        <!-- Summary Section -->
        <div class="row mt-4">
          <div class="col-md-6">
            <h4>Summary</h4>
            <p>
              The Service Station is a deserted gas station where players can
              purchase a variety of items, including upgrades, weapons, traps,
              grenades, and more.
            </p>
          </div>
          <div class="col-md-6">
            <img
              src="slike/Maps/service_station/service_station.jpg"
              alt="Service Station Overview"
              class="img-fluid map-image"
              data-toggle="modal"
              data-target="#mapModal1"
            />
          </div>
        </div>

        <!-- Secret Room Section -->
        <div class="row mt-4">
          <div class="col-md-6 order-md-2">
            <h4>The Secret Room</h4>
            <p>
              A secret room always appears in the service station. To find it,
              go to the purchase station and to the right of it is a tile you
              can lift—always on the side with the medkits.
            </p>
            <p>
              It’s difficult to enter in singleplayer without the extra jump
              upgrade, but you can also use Shockwave gear.
            </p>
            <p>
              A Human Grenade and a Duct Tape Grenade may spawn here. Stow Away
              (Larry) is also located inside.
            </p>
          </div>
          <div class="col-md-6 order-md-1">
            <img
              src="slike/Maps/service_station/service_station2.jpg"
              alt="Secret Room"
              class="img-fluid map-image"
              data-toggle="modal"
              data-target="#mapModal2"
            />
          </div>
        </div>

        <!-- Medkits Table -->
        <div class="table-responsive mt-4">
          <h4>Medkits Available for Purchase</h4>
          <table class="table table-striped repo-table">
            <thead>
              <tr>
                <th>Item</th>
                <th>Image</th>
                <th>Cost</th>
                <th>Heal Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Small Health Pack</td>
                <td>
                  <img
                    src="slike/Maps/service_station/service_station3.jpg"
                    alt="Small Health Pack"
                    class="img-thumbnail"
                    width="100"
                  />
                </td>
                <td>$3k–6k</td>
                <td>25HP</td>
              </tr>
              <tr>
                <td>Medium Health Pack</td>
                <td>
                  <img
                    src="slike/Maps/service_station/service_station4.jpg"
                    alt="Medium Health Pack"
                    class="img-thumbnail"
                    width="100"
                  />
                </td>
                <td>$5k–11k</td>
                <td>50HP</td>
              </tr>
              <tr>
                <td>Large Health Pack</td>
                <td>
                  <img
                    src="slike/Maps/service_station/service_station5.jpg"
                    alt="Large Health Pack"
                    class="img-thumbnail"
                    width="100"
                  />
                </td>
                <td>$9k–16k</td>
                <td>100HP</td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Upgrades Table -->
        <div class="table-responsive mt-4">
          <h4>Upgrades Available for Purchase</h4>
          <table class="table table-striped repo-table">
            <thead>
              <tr>
                <th>Upgrade</th>
                <th>Image</th>
                <th>Cost</th>
                <th>Info</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Stamina</td>
                <td>
                  <img 
                    src="slike/Maps/service_station/service_station6.jpg" 
                    alt="Stamina Upgrade" 
                    class="img-thumbnail" 
                    width="100">
                </td>
                <td>$2k–14k</td>
                <td>Increase stamina by 10</td>
              </tr>
              <tr>
                <td>Sprint Speed</td>
                <td><img src="slike/Maps/service_station/service_station7.jpg" alt="Sprint Speed Upgrade" class="img-thumbnail" width="100"></td>
                <td>$5k–24k</td>
                <td>Boost movement speed</td>
              </tr>
              <tr>
                <td>Health</td>
                <td><img src="slike/Maps/service_station/service_station8.jpg" alt="Health Upgrade" class="img-thumbnail" width="100"></td>
                <td>$4k–18k</td>
                <td>+20 max HP</td>
              </tr>
              <tr>
                <td>Grab Strength</td>
                <td><img src="slike/Maps/service_station/service_station9.jpg" alt="Grab Strength Upgrade" class="img-thumbnail" width="100"></td>
                <td>$6k–45k</td>
                <td>Lift heavier items</td>
              </tr>
              <tr>
                <td>Grab Range</td>
                <td><img src="slike/Maps/service_station/service_station10.jpg" alt="Grab Range Upgrade" class="img-thumbnail" width="100"></td>
                <td>$6k–32k</td>
                <td>Increases pickup range</td>
              </tr>
              <tr>
                <td>Grab Throw</td>
                <td><img src="slike/Maps/service_station/service_station11.jpg" alt="Grab Throw Upgrade" class="img-thumbnail" width="100"></td>
                <td>$6k–8k</td>
                <td>Allows object throwing</td>
              </tr>
              <tr>
                <td>Tumble Launch</td>
                <td><img src="slike/Maps/service_station/service_station12.jpg" alt="Tumble Launch Upgrade" class="img-thumbnail" width="100"></td>
                <td>$4k–5k</td>
                <td>Increases tumble distance</td>
              </tr>
              <tr>
                <td>Extra Jump</td>
                <td><img src="slike/Maps/service_station/service_station13.jpg" alt="Extra Jump Upgrade" class="img-thumbnail" width="100"></td>
                <td>$10k–18k</td>
                <td>Gain an extra jump</td>
              </tr>
              <tr>
                <td>Map Player Count</td>
                <td><img src="slike/Maps/service_station/service_station14.jpg" alt="Map Player Count Upgrade" class="img-thumbnail" width="100"></td>
                <td>$9k–12k</td>
                <td>Track teammate locations</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="table-responsive mt-4">
  <h4>Weapons Available for Purchase</h4>
  <table class="table table-striped repo-table" style="table-layout: fixed; width: 100%; overflow: hidden;">
    <thead>
      <tr>
        <th style="width: 18%;">Item</th>
        <th style="width: 18%;">Image</th> 
        <th style="width: 20%;">Cost</th>
        <th style="width: 34%;">Function</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="word-wrap: break-word; white-space: normal;">Crystal</td>
        <td><img src="slike/Maps/service_station/service_station15.jpg" alt="Crystal" class="img-fluid" style="max-width: 100%; height: auto;"></td>
        <td>$7k–$19k</td>
        <td>Recharges eligible items at the charging station.</td>
      </tr>
      <tr>
        <td style="word-wrap: break-word; white-space: normal;">Grenade</td>
        <td><img src="slike/Maps/service_station/service_station16.jpg" alt="Grenade" class="img-fluid" style="max-width: 100%; height: auto;"></td>
        <td>$3k</td>
        <td>Arms by pressing E. Explodes after a short delay, dealing 75HP damage.</td>
      </tr>
      <tr>
        <td style="word-wrap: break-word; white-space: normal;">Stun Grenade</td>
        <td><img src="slike/Maps/service_station/service_station17.jpg" alt="Stun Grenade" class="img-fluid" style="max-width: 100%; height: auto;"></td>
        <td>$3k</td>
        <td>Acts as a flashbang. Stuns entities and players.</td>
      </tr>
      <tr>
        <td style="word-wrap: break-word; white-space: normal;">Shockwave Grenade</td>
        <td><img src="slike/Maps/service_station/service_station18.jpg" alt="Shockwave Grenade" class="img-fluid" style="max-width: 100%; height: auto;"></td>
        <td>$3k</td>
        <td>Explodes into a shockwave, electrocuting and displacing nearby entities.</td>
      </tr>
      <tr>
        <td style="word-wrap: break-word; white-space: normal;">Duct Tape Grenade</td>
        <td><img src="slike/Maps/service_station/service_station19.jpg" alt="Duct Tape Grenade" class="img-fluid" style="max-width: 100%; height: auto;"></td>
        <td>$2k</td>
        <td>Found in the secret section. Chance to spawn with the Human Grenade.</td>
      </tr>
      <tr>
        <td style="word-wrap: break-word; white-space: normal;">Human Grenade</td>
        <td><img src="slike/Maps/service_station/service_station20.jpg" alt="Human Grenade" class="img-fluid" style="max-width: 100%; height: auto;"></td>
        <td>$2k</td>
        <td>Found in the secret section. Chance to spawn with the Duct Tape Grenade.</td>
      </tr>
      <tr>
        <td style="word-wrap: break-word; white-space: normal;">Shockwave Mine</td>
        <td><img src="slike/Maps/service_station/service_station21.jpg" alt="Shockwave Mine" class="img-fluid" style="max-width: 100%; height: auto;"></td>
        <td>$3k</td>
        <td>Latches to the ground, electrocutes anything nearby when triggered.</td>
      </tr>
      <tr>
        <td style="word-wrap: break-word; white-space: normal;">Explosive Mine</td>
        <td><img src="slike/Maps/service_station/service_station22.jpg" alt="Explosive Mine" class="img-fluid" style="max-width: 100%; height: auto;"></td>
        <td>$3k</td>
        <td>Latches to the ground, explodes when stepped on.</td>
      </tr>
      <tr>
        <td style="word-wrap: break-word; white-space: normal;">Stun Mine</td>
        <td><img src="slike/Maps/service_station/service_station23.jpg" alt="Stun Mine" class="img-fluid" style="max-width: 100%; height: auto;"></td>
        <td>$3k</td>
        <td>Stuns any creature that steps on it. Can be disarmed.</td>
      </tr>
      <tr>
        <td style="word-wrap: break-word; white-space: normal;">Rubber Duck</td>
        <td><img src="slike/Maps/service_station/service_station24.jpg" alt="Rubber Duck" class="img-fluid" style="max-width: 100%; height: auto;"></td>
        <td>$15k–$18k</td>
        <td>Bounces and deals damage, with a chance to explode.</td>
      </tr>
      <tr>
        <td style="word-wrap: break-word; white-space: normal;">Baseball Bat</td>
        <td><img src="slike/Maps/service_station/service_station25.jpg" alt="Baseball Bat" class="img-fluid" style="max-width: 100%; height: auto;"></td>
        <td>$25k–$28k</td>
        <td>Deals 25 damage and knocks enemies into structures.</td>
      </tr>
      <tr>
        <td style="word-wrap: break-word; white-space: normal;">Frying Pan</td>
        <td><img src="slike/Maps/service_station/service_station26.jpg" alt="Frying Pan" class="img-fluid" style="max-width: 100%; height: auto;"></td>
        <td>$19k–$30k</td>
        <td>Short-range melee with medium damage.</td>
      </tr>
      <tr>
        <td style="word-wrap: break-word; white-space: normal;">Inflatable Hammer</td>
        <td><img src="slike/Maps/service_station/service_station27.jpg" alt="Inflatable Hammer" class="img-fluid" style="max-width: 100%; height: auto;"></td>
        <td>$9k–$11k</td>
        <td>Deals 3 damage and may cause a large explosion.</td>
      </tr>
      <tr>
        <td style="word-wrap: break-word; white-space: normal;">Sledge Hammer</td>
        <td><img src="slike/Maps/service_station/service_station28.jpg" alt="Sledge Hammer" class="img-fluid" style="max-width: 100%; height: auto;"></td>
        <td>$39k–$43k</td>
        <td>Heavy melee weapon with high damage and knockback.</td>
      </tr>
      <tr>
        <td style="word-wrap: break-word; white-space: normal;">Sword</td>
        <td><img src="slike/Maps/service_station/service_station29.jpg" alt="Sword" class="img-fluid" style="max-width: 100%; height: auto;"></td>
        <td>$24k–$28k</td>
        <td>Medium-range melee with medium damage.</td>
      </tr>
      <tr>
        <td style="word-wrap: break-word; white-space: normal;">Gun</td>
        <td><img src="slike/Maps/service_station/service_station30.jpg" alt="Gun" class="img-fluid" style="max-width: 100%; height: auto;"></td>
        <td>$47k</td>
        <td>Moderate damage weapon for players and monsters.</td>
      </tr>
      <tr>
        <td style="word-wrap: break-word; white-space: normal;">Shotgun</td>
        <td><img src="slike/Maps/service_station/service_station31.jpg" alt="Shotgun" class="img-fluid" style="max-width: 100%; height: auto;"></td>
        <td>$79k–$96k</td>
        <td>Deals high damage at short range.</td>
      </tr>
      <tr>
        <td style="word-wrap: break-word; white-space: normal;">Tranq Gun</td>
        <td><img src="slike/Maps/service_station/service_station32.jpg" alt="Tranq Gun" class="img-fluid" style="max-width: 100%; height: auto;"></td>
        <td>$15k–$16k</td>
        <td>Temporarily stuns enemies. Fires up to 3 shots.</td>
      </tr>
    </tbody>
  </table>
</div>





        

      </div>
    </div>

    <!-- Modals -->
    <div
      class="modal fade"
      id="mapModal1"
      tabindex="-1"
      role="dialog"
      aria-labelledby="mapModalLabel1"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <img
              src="slike/Maps/service_station/service_station.jpg"
              alt="Service Station Overview Large"
              class="img-fluid"
            />
          </div>
        </div>
      </div>
    </div>

    <div
      class="modal fade"
      id="mapModal2"
      tabindex="-1"
      role="dialog"
      aria-labelledby="mapModalLabel2"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <img
              src="slike/Maps/service_station/service_station2.jpg"
              alt="Secret Room Large"
              class="img-fluid"
            />
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
