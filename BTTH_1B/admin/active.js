setTimeout(() => {
  if (document.querySelector("#alert")) {
    document.querySelector("#alert").style.display = "none";
    location.href = location.origin + location.pathname;
  }
}, 2000);
