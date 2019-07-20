function changeSelected(liLabel){
var tempList = document.getElementById("side-nav").children;

  for (i = 0; i < tempList.length; i++) {
	  var tmpItem = tempList[i].getElementsByTagName("A")[0];
     if( tmpItem.innerHTML == liLabel){
		//tmpItem.addClass('actvie');
		//$(this).addClass('actvie');
		//alert('yes');
		var parentLi = tmpItem.parentNode;
		parentLi.className = parentLi.className + " active";
	}
    } //end for loop
} //end changeSelected

//end PHP
    } //end onload
	
	</script>

<div class="col-md-3 hidden-sm hidden-xs">
<div class="pbmenu">
<div class="text-info pbmenu_title">ABOUT US</div>
<ul id="side-nav" class="nav nav-pills nav-stacked">
  <li><a href="history.php">HISTORY</a></li>
  <li><a href="philosophy.php">PHILOSOPHY</a></li>
  <li><a href="student_life.php">STUDENT LIFE</a></li>
  <li><a href="faculty.php">FACULTY</a></li>
  <li><a href="governance.php">BOARD OF TRUSTEES</a></li>
  <li><a href="consecration.php">CONSECRATION</a></li>
</ul>
</div>
</div>