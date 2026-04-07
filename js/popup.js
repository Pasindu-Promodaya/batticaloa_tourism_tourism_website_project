// popup.js
// Handles the pop-up modal for attractions

document.addEventListener("DOMContentLoaded", function () {
  const modal = document.createElement("div");
  modal.id = "attraction-modal";
  modal.innerHTML = `
    <div class="modal-overlay"></div>
    <div class="modal-content">
      <span class="modal-close">&times;</span>
      <div class="modal-body"></div>
    </div>
  `;
  document.body.appendChild(modal);

  const closeModal = () => {
    modal.classList.remove("active");
    document.body.style.overflow = "";
  };

  modal.querySelector(".modal-close").onclick = closeModal;
  modal.querySelector(".modal-overlay").onclick = closeModal;

  window.showAttractionModal = function (data) {
    const body = modal.querySelector(".modal-body");
    body.innerHTML = `
      <div class="popup-structure">
        <div class="popup-main">
          <div class="popup-image">
            <img src="${data.img}" alt="${data.title}" />
          </div>
          <div class="popup-info">
            <h2>${data.title}</h2>
            <div class="popup-description">${data.description}</div>
          </div>
        </div>
        <div class="popup-map">
          <a href="${data.mapUrl}" target="_blank" rel="noopener">
            <img src="${data.mapImg}" alt="${data.title} Map Location" />
            <div class="map-caption">Click to view on Google Maps</div>
          </a>
        </div>
      </div>
    `;
    modal.classList.add("active");
    document.body.style.overflow = "hidden";
  };
});
