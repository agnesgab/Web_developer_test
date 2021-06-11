const form = document.querySelector("form");
const emailInput = document.getElementById("email");
const errorMessage = document.querySelector(".error-message");
const errorMessage2 = document.querySelector(".error-message2");
const checkboxInput = document.querySelector(".check-input");
const successContainer = document.querySelector(".success-container");
const formContainer = document.querySelector(".form-container");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  formValidation();
});

function formValidation() {
  const emailValue = emailInput.value.trim();

  if (emailValue === "" || emailValue == null) {
    errorMessage.innerHTML = `<p class="error">Email address is required</p>`;
  } else if (!checkEmail(emailValue)) {
    errorMessage.innerHTML = `<p class="error">Please provide a valid e-mail address</p>`;
  } else if (emailValue.endsWith(".co")) {
    errorMessage.innerHTML = `<p class="error">We are not accepting subscriptions from Colombia emails</p>`;
    return emailValue != true;
  } else {
    errorMessage.innerHTML = "";
  }

  if (checkboxInput.checked != true) {
    errorMessage2.innerHTML = `<p class="error">You must accept the terms and conditions</p>`;
  } else {
    errorMessage2.innerHTML = "";
  }
  finalCheck(emailValue, checkboxInput);
}

function checkEmail(emailInput) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    emailInput
  );
}

function finalCheck(emailValue, checkboxInput) {
  if (checkEmail(emailValue) && checkboxInput.checked == true) {
    console.log("success");
    successContainer.classList.remove("hidden");
    formContainer.classList.add("hidden");
  }
}
