function formSubmit() {
  let content = document.forms['newPost']['postContent'].value;
  if (content.length < 1) {
    alert("Posts cannot be empty, try again");
    return false;
  }
  return true;
}
