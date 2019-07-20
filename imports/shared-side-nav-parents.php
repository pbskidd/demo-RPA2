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
<div class="text-info pbmenu_title">PARENTS</div>
<ul id="side-nav" class="nav nav-pills nav-stacked">
  <li><a href="calendar.php">CALENDAR</a></li>
  <li><a href="seton-society.php">SETON SOCIETY</a></li>
  <li><a href="newsletter.php"><i class="fa fa-lock"></i> NEWSLETTER</a></li>
  <li><a href="handbook.php"><i class="fa fa-lock"></i> PARENT HANDBOOK</a></li>
  <li><a href="directory.php"><i class="fa fa-lock"></i> DIRECTORY</a></li>
</ul>
</div>
</div>