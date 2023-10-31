		</div>
	</div>
	<script>
   	$(document).ready(function(){
	  	var url = window.location.href;
	  	var array = url.split('/');
		var lastsegment = array[array.length-1];

      	$('.sidebar-menu li a').each(function(){
        	var li_url=$(this).attr('href');
          	if(li_url==lastsegment){
           	$(this).parents('li').addClass('active');
           	}
        });
   	});  
   </script>
	<script type="text/javascript">
	
	</script>
	<script>
		
		var psw1 = document.getElementById("psw1");
		var psw1ttl = document.getElementById("psw1ttl");
		psw1.onkeyup  = function()
		{
			var lowerCaseLetters = /[a-z]/g;
			var upperCaseLetters = /[A-Z]/g;
			var numbers = /[0-9]/g;
			if((psw1.value.match(lowerCaseLetters)) && (psw1.value.match(upperCaseLetters)) && (psw1.value.match(numbers)) && (psw1.value.length >= 8) )
			{
				psw1ttl.innerHTML = "Password strenght : Strong";
				psw1ttl.style.color = "green";
			}
			else{
				psw1ttl.innerHTML = "Password strenght : Weak";
				psw1ttl.style.color = "red";
			}
		}


		var psw2 = document.getElementById("psw2");
		var psw2ttl = document.getElementById("psw2ttl");
		psw2.onkeyup  = function()
		{
			var psw1 = document.getElementById("psw1");
			if (psw2.value === psw1.value)
			{
				psw2ttl.innerHTML = "Password Matched";
				psw2ttl.style.color = "green";
			}
			else
			{
				psw2ttl.innerHTML = "Password doesn't matched";
				psw2ttl.style.color = "red";
			}
		}
	</script>
	<script>
      $(function () {
        $("#example1").DataTable({
			"ordering": false
			});
      });
    </script>
	
</body>
</html>