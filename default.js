/*function displayAdminLogin()
{
    var element = document.getElementById("buttonAdmin");
    element.classList.add("active");
}
*/
/*
$(document).ready(function(){
    $("#buttonAdmin").click(function(){
      $("#buttonAdmin").addClass("active");
    });
  });
 */
$(document).ready(function(){
    $("#buttonAdmin").click(function(){
      $("#login2").hide();
      $("#login1").show();
    });
  });
  $(document).ready(function(){
    $("#buttonSalesPerson").click(function(){
      $("#login1").hide();
      $("#login2").show();
    });
  });

  $(document).ready(function(){
    $("#adminOptionButton1").click(function(){
      $("#adminOption2").hide();
      $("#adminOption3").hide();
      $("#adminOption4").hide();
      $("#adminOption1").show();
    });
  });

  $(document).ready(function(){
    $("#adminOptionButton2").click(function(){
      $("#adminOption1").hide();
      $("#adminOption3").hide();
      $("#adminOption4").hide();
      $("#adminOption2").show();
    });
  });

  $(document).ready(function(){
    $("#adminOptionButton3").click(function(){
      $("#adminOption2").hide();
      $("#adminOption1").hide();
      $("#adminOption4").hide();
      $("#adminOption3").show();
    });
  });

  $(document).ready(function(){
    $("#adminOptionButton4").click(function(){
      $("#adminOption2").hide();
      $("#adminOption3").hide();
      $("#adminOption1").hide();
      $("#adminOption4").show();
    });
  });

  
function submitAdmin()
{
    var idea1 = document.getElementById('U1').value;
    var idea2 = document.getElementById('U2').value;
    if(idea1=='aptadmin'&&idea2=='admin@123')
    {
        document.getElementById('success').style.display='block';
    }
}

  
function submitUser()
{
    var idea1 = document.getElementById('U1').value;
    var idea2 = document.getElementById('U2').value;
    if(idea1=='aptuser'&&idea2=='user@123')
    {
        document.getElementById('success').style.display='block';
    }
}



  function shopListDropdown() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
      txtValue = a[i].textContent || a[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
      } else {
        a[i].style.display = "none";
      }
    }
  }
  