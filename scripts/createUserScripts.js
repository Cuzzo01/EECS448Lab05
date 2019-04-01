function formSubmit() {
  let userID = document.forms['newUser']['userID'].value;

  if (userID.length < 1 || userID.length > 32) {
    alert("UserID cannot be blank or greater than 32 chars, please try again.")
    return false;
  }
  return true;
}
