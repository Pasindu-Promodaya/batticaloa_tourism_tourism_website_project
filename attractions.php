<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tourist Attractions</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header>
      <h1>Tourist Attractions</h1>
      <?php include 'nav.php'; ?>
    </header>
    <main>
      <section>
        <h2>Explore Batticaloa</h2>
        <div class="attraction">
          <img src="images/fort.jpeg" alt="Batticaloa Dutch Fort" />
          <div class="attraction-info">
            <h3>Batticaloa Dutch Fort</h3>
            <p>Batticaloa Dutch Fort is a historic fort in the town of Batticaloa in Sri Lanka. It was built by the Portuguese in 1628 and was captured by the Dutch in 1638.</p>
            <button class="view-btn" onclick="showAttractionModalByIndex(0)">View</button>
          </div>
        </div>
        <div class="attraction">
          <img src="images/lagoon.jpeg" alt="Batticaloa Lagoon Park" />
          <div class="attraction-info">
            <h3>Batticaloa Lagoon Park</h3>
            <p>Batticaloa Lagoon Park is a picturesque area renowned for its stunning vistas and rich biodiversity.</p>
            <button class="view-btn" onclick="showAttractionModalByIndex(1)">View</button>
          </div>
        </div>
        <div class="attraction">
          <img src="images/beach.jpeg" alt="Kallady Beach" />
          <div class="attraction-info">
            <h3>Kallady Beach</h3>
            <p>Kallady Beach in Batticaloa, Sri Lanka, is a serene, long sandy coastline popular for its breathtaking sunrises, palm-lined shores, and the unique, melodic "singing fish" phenomenon audible near the bridge between April and September.</p>
            <button class="view-btn" onclick="showAttractionModalByIndex(2)">View</button>
          </div>
        </div>
        <div class="attraction">
          <img src="images/temple.jpeg" alt="Kallady Temple" />
          <div class="attraction-info">
            <h3>Kallady Temple</h3>
            <p>A Hindu temple, or mandir, is a symbolic cosmic house of God, representing the intersection of humanity and divinity.</p>
            <button class="view-btn" onclick="showAttractionModalByIndex(3)">View</button>
          </div>
        </div>
      </section>
    </main>
      <!-- Modal structure is injected by popup.js -->
    <footer>
      <p>&copy; 2026 Batticaloa Tourism. All rights reserved.</p>
    </footer>
  </body>
  <script src="js/popup.js"></script>
</body>
<script>
// Data for pop-up modal
const attractionsData = [
  {
    img: 'images/fort.jpeg',
    title: 'Batticaloa Dutch Fort',
    description: 'Batticaloa Dutch Fort is a historic fort in the town of Batticaloa in Sri Lanka. It was built by the Portuguese in 1628 and was captured by the Dutch in 1638.<br><br><b>Highlights:</b><ul><li>Colonial architecture</li><li>Historic walls</li><li>Lagoon views</li></ul>',
    mapImg: 'images/fort-location.jpeg',
    mapUrl: 'https://maps.app.goo.gl/Ymgx5CaSSg9AnxH58?g_st=aw'
  },
  {
    img: 'images/lagoon.jpeg',
    title: 'Batticaloa Lagoon Park',
    description: 'Batticaloa Lagoon Park is a picturesque area renowned for its stunning vistas and rich biodiversity.<br><br><b>Highlights:</b><ul><li>Scenic sunset views</li><li>Bird watching</li><li>Boat rides</li></ul>',
    mapImg: 'images/lagoon-location.jpeg',
    mapUrl: 'https://maps.app.goo.gl/rVNyvnK8bVsncQL77?g_st=aw'
  },
  {
    img: 'images/beach.jpeg',
    title: 'Kallady Beach',
    description: 'Kallady Beach in Batticaloa, Sri Lanka, is a serene, long sandy coastline popular for its breathtaking sunrises, palm-lined shores, and the unique, melodic "singing fish" phenomenon audible near the bridge between April and September.<br><br><b>Highlights:</b><ul><li>Golden sandy beach</li><li>Sunrise views</li><li>Melodic singing fish</li></ul>',
    mapImg: 'images/beach-location.jpeg',
    mapUrl: 'https://maps.app.goo.gl/KiofkUsnDPmLeHBQ7?g_st=aw'
  },
  {
    img: 'images/temple.jpeg',
    title: 'Kallady Temple',
    description: 'A Hindu temple, or mandir, is a symbolic cosmic house of God, representing the intersection of humanity and divinity.<br><br><b>Highlights:</b><ul><li>Colorful architecture</li><li>Spiritual ambiance</li><li>Festivals</li></ul>',
    mapImg: 'images/temple-location.jpeg',
    mapUrl: 'https://maps.app.goo.gl/AcAhuwNNbtgYzV3H6?g_st=aw'
  }
];
function showAttractionModalByIndex(idx) {
  showAttractionModal(attractionsData[idx]);
}
</script>
</html>
