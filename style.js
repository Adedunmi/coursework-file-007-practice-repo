Array.from(document.getElementsByTagName('input')).forEach((e, i)=>{
    e.addEventListener('keyup', (el)=>{
        if (e.value.length > 0) {
            document.getElementsByClassName('bi-caret-down-fill')(i).style.transform = "aqua";

        } else {
            //document.getElementsByClassName('bi-caret-down-fill')(i).style.tranform = "rotate(0deg)";//

        }
    })

})
const menuButton = document.querySelector('.menu-button');

menuButton.addEventListener('click', () => {
  menuButton.classList.toggle('active');
});
<!-- Javascript -->
<script>
  function validateform() {
    var tel = document.getElementById("phonenum").value;

    if (tel.length < 10) {
      alert("Phone number must be of atleast 10 digits!");
      return false;
    } else if (isNaN(tel)) {
      alert("Phone number should not include character!");
      return false;
    }
    return true;
  }
          // Get the modal
          var modal = document.getElementById("myModal");

          // Get the image and insert it inside the modal - use its "alt" text as a caption
          var img = document.getElementById("myImg");
          var modalImg = document.getElementById("img01");
          var captionText = document.getElementById("caption");
          img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
          }

          // Get the <span> element that closes the modal
          var span = document.getElementsByClassName("close")[0];

          // When the user clicks on <span> (x), close the modal
          span.onclick = function () {
            modal.style.display = "none";
          }