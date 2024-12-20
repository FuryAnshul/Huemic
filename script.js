document.getElementById("btnradio1").addEventListener("click", function () {
  document.getElementById("new-drops-section").style.display = "flex";
  document.getElementById("trending-section").style.display = "none";
});

document.getElementById("btnradio2").addEventListener("click", function () {
  document.getElementById("new-drops-section").style.display = "none";
  document.getElementById("trending-section").style.display = "flex";
});

// Define a function to set up event listeners for an image
function setupImageEvents(imageId, hoverSrc, originalSrc) {
  const imageElement = document.getElementById(imageId);

  imageElement.addEventListener("mouseenter", function () {
    this.src = hoverSrc;
  });

  imageElement.addEventListener("mouseleave", function () {
    this.src = originalSrc;
  });
}

// Setup event listeners for each image new
setupImageEvents("image1", "pic/img/img5.jpg", "pic/img/img1.jpg");
setupImageEvents("image2", "pic/img2/img3.jpg", "pic/img2/img1.jpg");
setupImageEvents("image3", "pic/img3/img1.jpg", "pic/img3/img01.jpg");
setupImageEvents("image4", "pic/img4/img3.jpg", "pic/img4/img1.jpg");
setupImageEvents("image5", "pic/img5/img3.jpg", "pic/img5/img1.jpg");

// Apply the function to each image trending
setupImageEvents("ig1", "pic/img/ig3.jpg", "pic/img/ig1.jpg");
setupImageEvents("ig2", "pic/img2/ig3.jpg", "pic/img2/ig1.jpg");
setupImageEvents("ig3", "pic/img3/ig3.jpg", "pic/img3/ig1.jpg");
setupImageEvents("ig4", "pic/img4/ig3.jpg", "pic/img4/ig1.jpg");
setupImageEvents("ig5", "pic/img5/ig3.jpg", "pic/img5/ig1.jpg");

// Setup event listeners for each image for shirt
setupImageEvents("shirt1", "pic/shirt/img1/sh5.jpg", "pic/shirt/img1/sh1.jpg");
setupImageEvents("shirt2", "pic/shirt/img2/sh3.jpg", "pic/shirt/img2/sh1.jpg");
setupImageEvents("shirt3", "pic/shirt/img3/sh3.jpg", "pic/shirt/img3/sh1.jpg");
setupImageEvents("shirt4", "pic/shirt/img4/sh3.jpg", "pic/shirt/img4/sh1.jpg");

// Setup event listeners for each image for tshirt
setupImageEvents(
  "tshirt1",
  "pic/t-shirt/tshirt-5.jpg",
  "pic/t-shirt/tshirt-1.jpeg"
);
setupImageEvents(
  "tshirt2",
  "pic/t-shirt/tshirt-13.jpg",
  "pic/t-shirt/tshirt-11.jpg"
);
setupImageEvents(
  "tshirt3",
  "pic/t-shirt/tshirt-23.jpg",
  "pic/t-shirt/tshirt-21.jpg"
);
setupImageEvents(
  "tshirt4",
  "pic/t-shirt/tshirt-33.jpg",
  "pic/t-shirt/tshirt-31.jpg"
);

// Setup event listeners for each image for tshirt
setupImageEvents("jeans1", "pic/jeans/jeans5.jpg", "pic/jeans/jeans1.jpg");
setupImageEvents("jeans2", "pic/jeans/jeans13.jpg", "pic/jeans/jeans11.jpg");
setupImageEvents("jeans3", "pic/jeans/jeans23.jpg", "pic/jeans/jeans21.jpg");
setupImageEvents("jeans4", "pic/jeans/jeans33.jpg", "pic/jeans/jeans31.jpg");

// Select the radio buttons
const shirtRadio = document.getElementById("category1");
const tshirtRadio = document.getElementById("category2");
const jeansRadio = document.getElementById("category3");

// Sections
const shirtSection = document.getElementById("shirt");
const tshirtSection = document.getElementById("tshirt");
const jeansSection = document.getElementById("jeans");

// Function to toggle sections
function toggleSections() {
  if (shirtRadio.checked) {
    shirtSection.style.display = "flex"; // Show shirt section
    tshirtSection.style.display = "none"; // Hide t-shirt section
    jeansSection.style.display = "none"; // Hide jeans section
  } else if (tshirtRadio.checked) {
    tshirtSection.style.display = "flex"; // Show t-shirt section
    shirtSection.style.display = "none"; // Hide shirt section
    jeansSection.style.display = "none"; // Hide jeans section
  } else if (jeansRadio.checked) {
    jeansSection.style.display = "flex"; // Show jeans section
    shirtSection.style.display = "none"; // Hide shirt section
    tshirtSection.style.display = "none"; // Hide t-shirt section
  }
}

// Add event listeners to radio buttons
shirtRadio.addEventListener("change", toggleSections);
tshirtRadio.addEventListener("change", toggleSections);
jeansRadio.addEventListener("change", toggleSections);

// Call the function initially to set the correct section
toggleSections();

