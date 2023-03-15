<!DOCTYPE html>
<html>
<head>
<?php include_once('../application/includes/headset.php'); ?>
</head>
<body class="bg-dark">
<?php include_once('../application/includes/header.php'); ?>
<?php include_once('../application/includes/mainmenu.php'); ?>

<div class="bg-light">
	<div class="container">
		<div class="pt-4">
			<br>
			<br>
			
			<?php
			//include_once('includes/dynamic-generate-rate-01.php'); 
			include_once('includes/dynamic-generate-rate-02.php'); 
			?>


			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		</div>
	</div>
</div>

<?php 
include_once('../application/includes/footer.php'); 
include_once('../application/includes/modals.php');
include_once('../application/includes/modals/generate-rates.php');
?>





<style>
	.autocomplete-items {
		position: absolute;
		top: 100%;
		left: 0%;
		background-color: #ffffff;
		width: 100%;
		margin-top: 0.25rem;
		overflow-x: hidden;
		overflow-y: auto;
		max-height: 371px;
		z-index: 8;
	}
	.autocomplete-items div {
		display: flex;
		border-left: 1px solid #d7d7d7;
		border-right: 1px solid #d7d7d7;
		background-color: #ffffff;
		transition: all 0.3s;
		cursor: pointer;
		font-size: 0.9rem;
		color: #6c757d;
		padding: 0.5rem 1rem;
	}
	.autocomplete-items div:first-child {
		border-top: 1px solid #d7d7d7;
	}
	.autocomplete-items div:last-child {
		border-bottom: 1px solid #d7d7d7;
	}
	.autocomplete-items div:hover {
		background-color: #f2f2f2;
	}
	.autocomplete-items div strong{
		color: #1a73e8;
	}

	.autocomplete-items::-webkit-scrollbar {width: 4px;}
	.autocomplete-items::-webkit-scrollbar-track {background: #f1f1f1; }
	.autocomplete-items::-webkit-scrollbar-thumb {background: #a1a1a1; }
	.autocomplete-items::-webkit-scrollbar-thumb:hover {background: #8a8a8a; }

	.autocomplete-active {
	  background-color: #f2f2f2 !important; 
	}

</style>
<script>
function autocomplete(inp, arr) {
  var currentFocus;
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      this.parentNode.appendChild(a);
      for (i = 0; i < arr.length; i++) {
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          b = document.createElement("DIV");
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          b.addEventListener("click", function(e) {
              inp.value = this.getElementsByTagName("input")[0].value;
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });


  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        currentFocus++;
        addActive(x);
      } else if (e.keyCode == 38) { //up
        currentFocus--;
        addActive(x);
      } else if (e.keyCode == 13) {
        e.preventDefault();
        if (currentFocus > -1) {
          if (x) x[currentFocus].click();
        }
      }
  });

  function addActive(x) {
    if (!x) return false;
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {

    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

var roomcategories = [
	"Standard",
	"Deluxe",
	"Family Suite",
	"Villa Suite",
];

autocomplete(document.getElementById("myInput"), roomcategories);
</script>
</body>
</html>

