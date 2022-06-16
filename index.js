const studentsForm = document.querySelector("[data-student-form]");

const sendRequest = (e) => {
  e.preventDefault();
  // Get Input Value //
  let inputValue = document.querySelector("[data-student-age]").value;
  // Get HTML list //
  let studentsList = document.querySelector("[data-student-list]");
  // Backend Request //
  let requestObject = new XMLHttpRequest();
  requestObject.open("POST", "index.php", true);
  requestObject.setRequestHeader(
    "Content-type",
    "application/x-www-form-urlencoded"
  );
  requestObject.onreadystatechange = () => {
    studentsList.innerHTML = `<li>${requestObject.responseText}</li>`;
  };
  requestObject.send(`student_age=${inputValue}`);
};

studentsForm.addEventListener("submit", sendRequest);
