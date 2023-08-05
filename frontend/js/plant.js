  // Get all the accordion items
  const accordionItems = document.querySelectorAll(".accordion-item");

  // Attach click event listeners to each accordion heading
  accordionItems.forEach((item) => {
    const heading = item.querySelector(".accordion-heading");
    const content = item.querySelector(".accordion-content");

    // Toggle the content visibility on click
    heading.addEventListener("click", () => {
      content.classList.toggle("active");

      // Close other accordion items when a new one is clicked (optional)
      accordionItems.forEach((otherItem) => {
        if (otherItem !== item) {
          otherItem.querySelector(".accordion-content").classList.remove("active");
        }
      });
    });
  });

