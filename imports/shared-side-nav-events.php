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
<div class="text-info pbmenu_title">EVENTS</div>
<ul id="side-nav" class="nav nav-pills nav-stacked">
  <li><a href="visit-caggiano.php">BISHOP CAGGIANO</a></li>
  <li><a href="visit-burke.php">CARDINAL BURKE</a></li>
  <li><a href="shindig.php">ANNUAL SHINDIG</a></li>
  <li><a href="coming-soon.php">THEATER</a></li>
</ul>
</div>
</div>