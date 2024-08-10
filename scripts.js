 let active = sessionStorage.getItem("active");
 const btn = document.querySelector('#btn');
 const sidebar = document.querySelector('.sidebar');
 const mainContainer = document.querySelector(".mainContainer");

 const enableActive = () => {
   sidebar.classList.add("active");
   sessionStorage.setItem("active", "enabled");
 };

 const disableActive = () => {
   sidebar.classList.remove("active");
   sessionStorage.setItem("active", null);
 }

 if (active === "enabled") {
   enableActive();
   sidebar.classList.add("no-transition");
   mainContainer.classList.add("no-transition");
 }

 btn.addEventListener("click", () => {
   active = sessionStorage.getItem("active");
   sidebar.classList.remove("no-transition");
   mainContainer.classList.remove("no-transition");
   if (active !== "enabled") {
      enableActive();
   }
   else {
      disableActive();
   }
 });
