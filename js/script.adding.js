// =====================
// Start Dynamically Changing Type Switcher
// =====================
class DynamicSwitch{
  constructor() {}
  // ======= A Method To Activate Input Elements =======
  activeProductForm() {
    document.addEventListener("DOMContentLoaded", () => {
      document.querySelector(".mySwitcher").addEventListener("change", (e) => {
        let selected = e.target;
        if (selected.value == "") {
          this.remove();
        }
        if (selected.value.toLowerCase() == "dvd") {
          this.remove();
          this.add("dvd");
        }
        if (selected.value.toLowerCase() == "book") {
          this.remove();
          this.add("book");
        }
        if (selected.value.toLowerCase() == "furniture") {
          this.remove();
          this.add("furniture");
        }
      });
    });
  }

  // ======= Removing Method =======
  remove() {
    document.querySelectorAll(".section").forEach((tag) => {
      tag.value = " ";
      tag.style.display = "none";
    });
  }
  // ======= Adding Method =======
  add(className) {
    //inputs
    let section = document.querySelectorAll(`.${className}`);

    // Remove Every Required Atrribute From Inputs Before You Add Them Again.
    document.querySelectorAll(".section input").forEach((e) => {
      e.removeAttribute("required");
    });
    for (var i = 0; i < section.length; ++i) {
      var selectedOne = window.getComputedStyle(section[i]);
      if (selectedOne.display === "none") {
        section[i].style.display = "flex";
        // Add A Required Atrribute To An Input.
        section[i].querySelector("input").setAttribute("required", "");
      }
    }
  }

    isEmpty() {
      document.querySelector('.saveBtn').addEventListener("click",
        () => {
          let myInputs = document.querySelectorAll('.filling-info input');
          for (let i = 0; i < myInputs.length; i++) {
          if (myInputs[i].value.trim().length ==0) {
            return alert("Fill Out All The Fields");
          }
          break;
          }
        })
      }

}
// =====================
// End Dynamically Changing Type Switcher
// =====================

let myObj = new DynamicSwitch();
myObj.activeProductForm();
myObj.isEmpty()

