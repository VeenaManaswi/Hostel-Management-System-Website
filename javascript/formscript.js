document.addEventListener("DOMContentLoaded", function() {
    var occupationRadio = document.getElementsByName("occupation");
    var classDegreeInput = document.getElementById("classDegree");
    var jobDetailsInput = document.getElementById("jobDetails");
  
    for (var i = 0; i < occupationRadio.length; i++) {
      occupationRadio[i].addEventListener("change", function() {
        if (this.value === "studying") {
          classDegreeInput.style.display = "block";
          jobDetailsInput.style.display = "none";
        } else if (this.value === "job") {
          classDegreeInput.style.display = "none";
          jobDetailsInput.style.display = "block";
        }
      });
    }
  });
  function confirm(){
    window.open('confirm.html','_blank');
  }