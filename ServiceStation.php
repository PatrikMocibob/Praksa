<!DOCTYPE html>
<html lang="hr">
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

        <!-- Mobile Sort Buttons -->
<div class="d-md-none mb-2">
  <strong>Sort by:</strong>
  <button onclick="sortTableByItem()" class="btn btn-sm btn-outline-primary">Item</button>
  <button onclick="sortTableByCostMedkit()" class="btn btn-sm btn-outline-primary">Cost</button>
</div>


       <!-- Medkits Table -->
<div class="table-responsive mt-4">
  <h4>Medkits Available for Purchase</h4>
  <table class="table table-striped repo-table medkits-table" id="medkitsTable">
    <thead>
      <tr>
        <th id="sortItem" class="sortable-column">Item</th>
        <th>Image</th>
        <th id="sortCost" class="sortable-column">Cost</th>
        <th>Heal Amount</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Small Health Pack</td>
        <td><img src="slike/Maps/service_station/service_station3.jpg" alt="Small Health Pack" class="img-thumbnail" width="100" /></td>
        <td>$3k–6k</td>
        <td>25HP</td>
      </tr>
      <tr>
        <td>Medium Health Pack</td>
        <td><img src="slike/Maps/service_station/service_station4.jpg" alt="Medium Health Pack" class="img-thumbnail" width="100" /></td>
        <td>$5k–11k</td>
        <td>50HP</td>
      </tr>
      <tr>
        <td>Large Health Pack</td>
        <td><img src="slike/Maps/service_station/service_station5.jpg" alt="Large Health Pack" class="img-thumbnail" width="100" /></td>
        <td>$9k–16k</td>
        <td>100HP</td>
      </tr>
    </tbody>
  </table>
</div>


        <!-- Mobile Sort Buttons -->
        <div class="d-md-none mb-2">
  <strong>Sort by:</strong>
  <button onclick="sortTableByUpgrade()" class="btn btn-sm btn-outline-primary">Upgrade</button>
  <button onclick="sortTableByCostUpgrades()" class="btn btn-sm btn-outline-primary">Cost</button>
</div>
<!-- Upgrades Table -->
<div class="table-responsive mt-4">
  <h4>Upgrades Available for Purchase</h4>
  <table class="table table-striped repo-table upgrades-table" id="upgradesTable">
    <thead>
      <tr>
        <th id="sortUpgrade" class="sortable-column">Upgrade</th>
        <th>Image</th>
        <th id="sortCostUpgrade" class="sortable-column">Cost</th>
        <th>Info</th>
      </tr>
    </thead>
    <tbody>
      <tr><td>Stamina</td><td><img src="slike/Maps/service_station/service_station6.jpg" alt="Stamina Upgrade" class="img-thumbnail" width="100"></td><td>$2k–14k</td><td>Increase stamina by 10</td></tr>
      <tr><td>Sprint Speed</td><td><img src="slike/Maps/service_station/service_station7.jpg" alt="Sprint Speed Upgrade" class="img-thumbnail" width="100"></td><td>$5k–24k</td><td>Boost movement speed</td></tr>
      <tr><td>Health</td><td><img src="slike/Maps/service_station/service_station8.jpg" alt="Health Upgrade" class="img-thumbnail" width="100"></td><td>$4k–18k</td><td>+20 max HP</td></tr>
      <tr><td>Grab Strength</td><td><img src="slike/Maps/service_station/service_station9.jpg" alt="Grab Strength Upgrade" class="img-thumbnail" width="100"></td><td>$6k–45k</td><td>Lift heavier items</td></tr>
      <tr><td>Grab Range</td><td><img src="slike/Maps/service_station/service_station10.jpg" alt="Grab Range Upgrade" class="img-thumbnail" width="100"></td><td>$6k–32k</td><td>Increases pickup range</td></tr>
      <tr><td>Grab Throw</td><td><img src="slike/Maps/service_station/service_station11.jpg" alt="Grab Throw Upgrade" class="img-thumbnail" width="100"></td><td>$6k–8k</td><td>Allows object throwing</td></tr>
      <tr><td>Tumble Launch</td><td><img src="slike/Maps/service_station/service_station12.jpg" alt="Tumble Launch Upgrade" class="img-thumbnail" width="100"></td><td>$4k–5k</td><td>Increases tumble distance</td></tr>
      <tr><td>Extra Jump</td><td><img src="slike/Maps/service_station/service_station13.jpg" alt="Extra Jump Upgrade" class="img-thumbnail" width="100"></td><td>$10k–18k</td><td>Gain an extra jump</td></tr>
      <tr><td>Map Player Count</td><td><img src="slike/Maps/service_station/service_station14.jpg" alt="Map Player Count Upgrade" class="img-thumbnail" width="100"></td><td>$9k–12k</td><td>Track teammate locations</td></tr>
    </tbody>
  </table>
</div>

<!-- Mobile Sort Buttons -->
<div class="d-md-none mb-2">
  <strong>Sort by:</strong>
  <button onclick="sortTableByWeapon()" class="btn btn-sm btn-outline-primary">Weapon</button>
  <button onclick="sortTableByPrice()" class="btn btn-sm btn-outline-primary">Price</button>
</div>
<!-- Weapons Table -->
<div class="table-responsive mt-4">
  <h4>Weapons Available for Purchase</h4>
  <table id="weaponsTable" class="table table-striped repo-table weapons-table" style="table-layout: fixed; width: 100%;">
    <thead>
      <tr>
        <th id="sortWeapon" class="sortable-column">Weapon</th>
        <th>Image</th>
        <th id="sortPrice" class="sortable-column">Price</th>
        <th>Function</th>
      </tr>
    </thead>
    <tbody>
      <tr><td>Crystal</td><td><img src="slike/Maps/service_station/service_station15.jpg" alt="Crystal" class="img-fluid"></td><td>$7k–$19k</td><td>Recharges eligible items at the charging station.</td></tr>
      <tr><td>Grenade</td><td><img src="slike/Maps/service_station/service_station16.jpg" alt="Grenade" class="img-fluid"></td><td>$3k</td><td>Arms by pressing E. Explodes after a short delay, dealing 75HP damage.</td></tr>
      <tr><td>Stun Grenade</td><td><img src="slike/Maps/service_station/service_station17.jpg" alt="Stun Grenade" class="img-fluid"></td><td>$3k</td><td>Acts as a flashbang. Stuns entities and players.</td></tr>
      <tr><td>Shockwave Grenade</td><td><img src="slike/Maps/service_station/service_station18.jpg" alt="Shockwave Grenade" class="img-fluid"></td><td>$3k</td><td>Explodes into a shockwave, electrocuting and displacing nearby entities.</td></tr>
      <tr><td>Duct Tape Grenade</td><td><img src="slike/Maps/service_station/service_station19.jpg" alt="Duct Tape Grenade" class="img-fluid"></td><td>$2k</td><td>Found in the secret section. Chance to spawn with the Human Grenade.</td></tr>
      <tr><td>Human Grenade</td><td><img src="slike/Maps/service_station/service_station20.jpg" alt="Human Grenade" class="img-fluid"></td><td>$2k</td><td>Found in the secret section. Chance to spawn with the Duct Tape Grenade.</td></tr>
      <tr><td>Shockwave Mine</td><td><img src="slike/Maps/service_station/service_station21.jpg" alt="Shockwave Mine" class="img-fluid"></td><td>$3k</td><td>Latches to the ground, electrocutes anything nearby when triggered.</td></tr>
      <tr><td>Explosive Mine</td><td><img src="slike/Maps/service_station/service_station22.jpg" alt="Explosive Mine" class="img-fluid"></td><td>$3k</td><td>Latches to the ground, explodes when stepped on.</td></tr>
      <tr><td>Stun Mine</td><td><img src="slike/Maps/service_station/service_station23.jpg" alt="Stun Mine" class="img-fluid"></td><td>$3k</td><td>Stuns any creature that steps on it. Can be disarmed.</td></tr>
      <tr><td>Rubber Duck</td><td><img src="slike/Maps/service_station/service_station24.jpg" alt="Rubber Duck" class="img-fluid"></td><td>$15k–$18k</td><td>Bounces and deals damage, with a chance to explode.</td></tr>
      <tr><td>Baseball Bat</td><td><img src="slike/Maps/service_station/service_station25.jpg" alt="Baseball Bat" class="img-fluid"></td><td>$25k–$28k</td><td>Deals 25 damage and knocks enemies into structures.</td></tr>
      <tr><td>Frying Pan</td><td><img src="slike/Maps/service_station/service_station26.jpg" alt="Frying Pan" class="img-fluid"></td><td>$19k–$30k</td><td>Short-range melee with medium damage.</td></tr>
      <tr><td>Inflatable Hammer</td><td><img src="slike/Maps/service_station/service_station27.jpg" alt="Inflatable Hammer" class="img-fluid"></td><td>$9k–$11k</td><td>Deals 3 damage and may cause a large explosion.</td></tr>
      <tr><td>Sledge Hammer</td><td><img src="slike/Maps/service_station/service_station28.jpg" alt="Sledge Hammer" class="img-fluid"></td><td>$39k–$43k</td><td>Heavy melee weapon with high damage and knockback.</td></tr>
      <tr><td>Sword</td><td><img src="slike/Maps/service_station/service_station29.jpg" alt="Sword" class="img-fluid"></td><td>$24k–$28k</td><td>Medium-range melee with medium damage.</td></tr>
      <tr><td>Gun</td><td><img src="slike/Maps/service_station/service_station30.jpg" alt="Gun" class="img-fluid"></td><td>$47k</td><td>Moderate damage weapon for players and monsters.</td></tr>
      <tr><td>Shotgun</td><td><img src="slike/Maps/service_station/service_station31.jpg" alt="Shotgun" class="img-fluid"></td><td>$79k–$96k</td><td>Deals high damage at short range.</td></tr>
      <tr><td>Tranq Gun</td><td><img src="slike/Maps/service_station/service_station32.jpg" alt="Tranq Gun" class="img-fluid"></td><td>$15k–$16k</td><td>Temporarily stuns enemies. Fires up to 3 shots.</td></tr>
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

    <script>
  // First script for Medkits table (already working)
  let sortOrderItem = 0; // 0 = original, 1 = ascending, 2 = descending
  let sortOrderCostMedkit = 0; // 0 = original, 1 = ascending, 2 = descending

  // Function to sort the table based on the "Item" column (Medkits)
  function sortTableByItem() {
    const table = document.getElementById("medkitsTable");
    const rows = Array.from(table.rows).slice(1); // Exclude header row

    rows.sort((rowA, rowB) => {
      const itemA = rowA.cells[0].innerText.toLowerCase();
      const itemB = rowB.cells[0].innerText.toLowerCase();

      if (sortOrderItem === 1) {
        return itemA.localeCompare(itemB); // Ascending
      } else if (sortOrderItem === 2) {
        return itemB.localeCompare(itemA); // Descending
      }
      return 0; // No sorting
    });

    rows.forEach(row => table.appendChild(row));
    sortOrderItem = (sortOrderItem + 1) % 3; // Toggle sort order
  }

  // Function to sort the table based on the "Cost" column (Medkits)
  function sortTableByCostMedkit() {
    const table = document.getElementById("medkitsTable");
    const rows = Array.from(table.rows).slice(1); // Exclude header row

    rows.sort((rowA, rowB) => {
      const costA = rowA.cells[2].innerText.replace(/[^0-9.-]+/g, ""); // Remove $ and k
      const costB = rowB.cells[2].innerText.replace(/[^0-9.-]+/g, ""); // Remove $ and k

      if (sortOrderCostMedkit === 1) {
        return parseInt(costA) - parseInt(costB); // Ascending
      } else if (sortOrderCostMedkit === 2) {
        return parseInt(costB) - parseInt(costA); // Descending
      }
      return 0; // No sorting
    });

    rows.forEach(row => table.appendChild(row));
    sortOrderCostMedkit = (sortOrderCostMedkit + 1) % 3; // Toggle sort order
  }

  // Add event listener to the "Item" header (Medkits)
  document.getElementById("sortItem").addEventListener("click", sortTableByItem);

  // Add event listener to the "Cost" header (Medkits)
  document.getElementById("sortCost").addEventListener("click", sortTableByCostMedkit);
</script>

<script>
  // Second script for Upgrades table (fixing the issue)
  let sortOrderUpgrade = 0; // 0 = original, 1 = ascending, 2 = descending
  let sortOrderCostUpgrades = 0; // Separate sortOrderCost for Upgrades table

  // Function to sort the table by the "Upgrade" column
  function sortTableByUpgrade() {
    const table = document.getElementById("upgradesTable");
    const rows = Array.from(table.rows).slice(1); // Exclude header row

    rows.sort((rowA, rowB) => {
      const upgradeA = rowA.cells[0].innerText.toLowerCase();
      const upgradeB = rowB.cells[0].innerText.toLowerCase();

      if (sortOrderUpgrade === 1) {
        return upgradeA.localeCompare(upgradeB); // Ascending
      } else if (sortOrderUpgrade === 2) {
        return upgradeB.localeCompare(upgradeA); // Descending
      }
      return 0; // No sorting
    });

    rows.forEach(row => table.appendChild(row));
    sortOrderUpgrade = (sortOrderUpgrade + 1) % 3; // Cycle: 0 -> 1 -> 2 -> 0
  }

  // Function to sort the table by the "Cost" column
  function sortTableByCostUpgrades() {
    const table = document.getElementById("upgradesTable");
    const rows = Array.from(table.rows).slice(1); // Exclude header row

    rows.sort((rowA, rowB) => {
      // Extract cost values and convert them to numbers
      const costA = parseInt(rowA.cells[2].innerText.replace(/[^0-9.-]+/g, "")); // Remove '$' and 'k'
      const costB = parseInt(rowB.cells[2].innerText.replace(/[^0-9.-]+/g, "")); // Remove '$' and 'k'

      if (sortOrderCostUpgrades === 1) {
        return costA - costB; // Ascending
      } else if (sortOrderCostUpgrades === 2) {
        return costB - costA; // Descending
      }
      return 0; // No sorting
    });

    rows.forEach(row => table.appendChild(row));
    sortOrderCostUpgrades = (sortOrderCostUpgrades + 1) % 3; // Cycle: 0 -> 1 -> 2 -> 0
  }

  // Add event listeners for sorting when clicking on columns (Upgrades)
  document.getElementById("sortUpgrade").addEventListener("click", sortTableByUpgrade);
  document.getElementById("sortCostUpgrade").addEventListener("click", sortTableByCostUpgrades);
</script>

<script>
  let sortOrderWeapon = 0; // 0 = original, 1 = ascending, 2 = descending
  let sortOrderPrice = 0; // 0 = original, 1 = ascending, 2 = descending

  // Function to sort the table based on the "Weapon" column
  function sortTableByWeapon() {
    const table = document.getElementById("weaponsTable");
    const rows = Array.from(table.rows).slice(1); // Exclude header row

    // Sort rows based on the "Weapon" column (index 0)
    rows.sort((rowA, rowB) => {
      const weaponA = rowA.cells[0].innerText.toLowerCase();
      const weaponB = rowB.cells[0].innerText.toLowerCase();

      if (sortOrderWeapon === 1) {
        // Ascending order (A to Z)
        return weaponA.localeCompare(weaponB);
      } else if (sortOrderWeapon === 2) {
        // Descending order (Z to A)
        return weaponB.localeCompare(weaponA);
      }
      return 0; // No sorting, original order
    });

    // Reattach rows to the table in sorted order
    rows.forEach(row => table.appendChild(row));

    // Toggle sort order for next click
    sortOrderWeapon = (sortOrderWeapon + 1) % 3;
  }

  // Function to sort the table based on the "Price" column
  function sortTableByPrice() {
    const table = document.getElementById("weaponsTable");
    const rows = Array.from(table.rows).slice(1); // Exclude header row

    rows.sort((rowA, rowB) => {
      // Extract price values and convert them to numbers (remove '$' and 'k')
      const priceA = rowA.cells[2].innerText.replace(/[^0-9.-]+/g, ""); // Remove $ and k
      const priceB = rowB.cells[2].innerText.replace(/[^0-9.-]+/g, ""); // Remove $ and k

      if (sortOrderPrice === 1) {
        // Ascending order (low to high)
        return parseInt(priceA) - parseInt(priceB);
      } else if (sortOrderPrice === 2) {
        // Descending order (high to low)
        return parseInt(priceB) - parseInt(priceA);
      }
      return 0; // No sorting, original order
    });

    // Reattach rows to the table in sorted order
    rows.forEach(row => table.appendChild(row));

    // Toggle sort order for next click
    sortOrderPrice = (sortOrderPrice + 1) % 3;
  }

  // Add event listener to the "Weapon" header to trigger sorting
  document.getElementById("sortWeapon").addEventListener("click", sortTableByWeapon);

  // Add event listener to the "Price" header to trigger sorting
  document.getElementById("sortPrice").addEventListener("click", sortTableByPrice);
</script>



  </body>
</html>


