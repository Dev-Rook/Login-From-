const MenuIcon = document.querySelector(".MenuIcon");
let SideBar = document.querySelector(".SideMenu");

let isShow = true;

function toggle() {
  if (isShow) {
    SideBar.style.display = "block";
    isShow = false;
  } else {
    SideBar.style.display = "none";
    isShow = true;
  }
}

// MenuIcon.addEventListener("Click", () => {
//     SideBar.style.tranform = 0
// })
