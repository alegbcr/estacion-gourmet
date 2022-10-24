// Wait for the page to load
window.addEventListener("load", () => {
  // Get data from form
  const form = document.querySelector(".contact");

  // Get data form all fields
  const fields = document.querySelectorAll(".contact .form-control");
  let submitButton = document.getElementById("submit-button");

  // Inputs validation, works as a listener of button disable
  window.addEventListener("change", () => {
    const inputsValue = [...fields].map((i) => i.value);
    console.log(inputsValue);

    const verification = inputsValue.every((element) => element === "");
    console.log(verification);
    if (
      inputsValue[0] !== "" &&
      inputsValue[1] !== "" &&
      inputsValue[2] !== "" &&
      inputsValue[3] !== "" &&
      inputsValue[4] !== "" &&
      inputsValue[5] !== ""
    ) {
      submitButton.disabled = false;
    }
  });

  // grecaptcha.ready(function () {
  //   grecaptcha
  //     .execute("6LeK8b8hAAAAAEr7Jyli_fxqeBWwesozG8Zeg6oi", {
  //       action: "form",
  //     })
  //     .then(function (token) {
  //       const itoken = document.getElementById("token");
  //       itoken.value = token;
  //     });
  // });
});
