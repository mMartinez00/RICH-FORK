const inputs = document.querySelectorAll(".input");

inputs.forEach((input) => {
  input.addEventListener("focus", () => input.classList.add("focus"));
  input.addEventListener("blur", () => {
    if (input.value === "") input.classList.remove("focus");
  });
});
