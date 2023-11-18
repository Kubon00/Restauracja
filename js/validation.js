function validateName() {
    let x = document.forms["sentMessage"]["name"].value;
    if (x == "") {
      alert("Imię musi być wpisane");
      return false;
    }
  }
  function validateEmail() {
    let x = document.forms["sentMessage"]["email"].value;
    if (x.includes("@")) {
    }
    else
    {
      alert("Nieprawidłowy email")
    }
  }

  function validateMessage() {
    let x = document.forms["sentMessage"]["message"].value;
    if (x.length<10) {
      alert("wiadomość jest za krótka");  
      return false;
    }
  }
