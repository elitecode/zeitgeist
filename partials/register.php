<?php
ob_start();
session_start();
?>




<script type="text/javascript" src="aktk.js">


</script>

</script>
<div>
	<div style="float:left;width:30em;height:20em;margin-top:4em;">
		<div style="background-color:#d59200;height:3em;">
			<p style="color:white;font-weight:bold;font-size:20px;padding-top: 0.4em;">LOGIN</p>
		</div>
		<div style="float:left;width:1em;background-color:rgba(0,0,0,0.0);height:17em;">
			<div style="width: 0px;
				height: 0px;
				border-style: solid;
				border-width: 0 1em 1em 0;
				border-color: transparent #b27a01 transparent transparent;">
			</div>
	
		</div>
		<div style="float:right;background-color:rgba(0,0,0,0.4);width:29em;height:20em;">
		<form method="post" action="partials/login.php">
			<input style="width:16em;height:3em;background-color:rgba(0,0,0,0.0);margin-top:3em;border:2px solid white;" placeholder="Email.." name="email">
			<input style="width:16em;height:3em;background-color:rgba(0,0,0,0.0);margin-top:2em;border:2px solid white;" placeholder="Password.." type="Password" name="password"><br>
			<input type="submit" value="LOGIN" id="rajbhai" style="width:8em;height:3em;background-color:rgba(0,0,0,0.0);border:2px solid white;margin-top:2em;">
                         <br><br>
                          <a style="color:white;text-decoration:none" href = "javascript:void(0)" onclick = "document.getElementById('light1').style.display='block';document.getElementById('fade1').style.display='block'">Forgot password? Click Here!</a>
                         
                        
			
		</form>
                               <div id="light1" class="white_content1"><p style="color:red;"></p> 
                        
                        <br>
                        <p style="color:white">Type in your registered email address, password will be sent there :<p>
                        <form method="post"  action="partials/forgot.php">
			<input style="width:16em;height:3em;background-color:rgba(0,0,0,0.0);margin-top:1em;border:2px solid white;" placeholder="Email.." name="email_forgot">
                        <br>
           
			<input type="submit" value="SUBMIT" id="rajbhai3" style="width:8em;height:3em;background-color:rgba(0,0,0,0.0);border:2px solid white;margin-top:1em;color:white;">
			
			</form>
                          <br>
                          <a style="text-decoration:none;" href = "javascript:void(0)" onclick = "document.getElementById('light1').style.display='none';document.getElementById('fade1').style.display='none'">
                        <p id = 'reg-close' style="text-align:center;x">Close</p></a></div>
		         <div id="fade1" class="black_overlay1"></div>
		</div>
	</div>
	<div style="float:left;margin-left:9em;">
		<div style="border-left:medium #fff solid; height:7.5em;margin-top:4em;" >
		</div>
		<p style="color:white;font-weight:bold;font-size:20px;margin-top:1em;margin-left:-0.5em;">OR</p>
		<div style="border-left:medium #fff solid; height:7.5em;margin-top:1em;" >
		</div>
	</div>
	

	<div style="width:30em;float:left;height:32em;margin-top:4em;margin-left:8em;margin-bottom:0.5em;">
		<div style="background-color:#d59200;height:3em;">
			<p style="color:white;font-weight:bold;font-size:20px;padding-top: 0.4em;">SIGN UP</p>
		</div>
		<div style="float:left;width:1em;background-color:rgba(0,0,0,0.0);height:17em;">
			<div style="width: 0px;
				height: 0px;
				border-style: solid;
				border-width: 0 1em 1em 0;
				border-color: transparent #b27a01 transparent transparent;">
			</div>
	
		</div>
		<div style="float:right;background-color:rgba(0,0,0,0.4);width:29em;height:29em;">
		<form method="POST" action="partials/register_me.php">
			<input style="width:16em;height:3em;background:transparent;margin-top:2em;border:2px solid white;" placeholder="Name.." name="uname" onkeypress="checkInput(event)">
			<input style="width:16em;height:3em;background-color:rgba(0,0,0,0.0);margin-top:1.5em;border:2px solid white;" placeholder="Email.." name="email" ><br>
			<input style="width:16em;height:3em;background-color:rgba(0,0,0,0.0);margin-top:1.5em;border:2px solid white;" placeholder="Password.." type="Password" name="password">
			<input style="width:16em;height:3em;background-color:rgba(0,0,0,0.0);margin-top:1.5em;border:2px solid white;" placeholder="Contact.." name="contact" onkeypress="checkInput1(event)">
			<input style="width:16em;height:3em;background-color:rgba(0,0,0,0.0);margin-top:1.5em;border:2px solid white;" placeholder="College.." name="college_name">
			
			<br>
			<input type="submit" id="rajbhai" name="rajbhai"  value="SIGN UP" style="border:2px solid white;width:8em;height:3em;margin-top:1.5em;background-color:rgba(0,0,0,0.0)" >
            		</form>

            
                         <?php
			if((isset($_SESSION['registration_error']) && strlen($_SESSION['registration_error']) != 0) || 
			(isset($_SESSION['registration_successful']) && strlen($_SESSION['registration_successful']) != 0) || 
			(isset($_SESSION['login_error']) && strlen($_SESSION['login_error']) != 0))
			{
				?>
			<div id="light" class="white_content"><p style="color:red;">
            
			
			
			<?php
			if(isset($_SESSION['registration_error']) && strlen($_SESSION['registration_error']) != 0)
			{
					if ($_SESSION['registration_error']!=="Your Password has been sent to your mail.")
                                        echo "Please correct the following errors<br/>";
					echo $_SESSION['registration_error'];
					$_SESSION['registration_error'] = "";
					unset($_SESSION['registration_error']);
			}
			else if(isset($_SESSION['registration_successful']) && strlen($_SESSION['registration_successful']) != 0)
			{
					echo $_SESSION['registration_successful'];
					$_SESSION['registration_successful'] = "";
					unset($_SESSION['registration_successful']);
			}
			else if(isset($_SESSION['login_error']) && strlen($_SESSION['login_error']) != 0)
			{
				echo "Cannot login<br/>".$_SESSION['login_error'];
				if(($_SESSION['login_error'] === "Account is not verified") || ($_SESSION['login_error'] === "Wrong activation key") || ($_SESSION['login_error'] === "Activation Key sent to mail.<br/> Check your inbox and type the key below :"))
				{
				?>
                <br>
                <form method="post" action="partials/verify_email.php">
			<input style="width:16em;height:3em;background-color:rgba(0,0,0,0.0);margin-top:1em;border:2px solid white;" placeholder="Email.." name="ver_email">
            <br>
            <input style="width:16em;height:3em;background-color:rgba(0,0,0,0.0);margin-top:1em;border:2px solid white;" placeholder="Activation Key.." name="text">
            <br>
			<input type="submit" value="SUBMIT" id="rajbhai3" style="width:8em;height:3em;background-color:rgba(0,0,0,0.0);border:2px solid white;margin-top:1em;color:white;">
			
			</form>
                <?php	
				}
				$_SESSION['login_error'] = "";
				unset($_SESSION['login_error']);
			
					?>
					
            <?php
			}
			?>
            </p> <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"><br><p id = 'reg-close' style="text-align:center;x">Close</p></a></div>
		    <div id="fade" class="black_overlay"></div>
           
					<?php
					
				}
			?>
            

		</div>

	</div>
</div>
<style>
	#reg-close
	{
		text-align: center;
		margin-left: 35%;
		margin-right: 35%; 
		border:2px solid white;
	}
	#rajbhai:hover 
	{
		background-color: #d59200 !important;
		border: 0px !important;
	}
	.black_overlay{
        display: block;
        position: absolute;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.0);
        z-index:1001;
        -moz-opacity: 0.8;
        opacity:.80;
        filter: alpha(opacity=80);
    }
    .white_content {
        display: block;
        position: absolute;
        top: 25%;
        left: 25%;
      	right: 25%;
      	min-width: 480px;
        padding: 16px;
        margin: 10px;
       	/*border: 2px solid white;*/
        background-color: rgba(0,0,0,0.9);
        z-index:1002;
        overflow: auto;
    }
    	.black_overlay1{
        display: none;
        position: absolute;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.0);
        z-index:1001;
        -moz-opacity: 0.8;
        opacity:.80;
        filter: alpha(opacity=80);
    }
    .white_content1 {
        display: none;
        position: absolute;
        top: 25%;
        left: 25%;
      	right: 25%;
      	min-width: 480px;
        padding: 16px;
        margin: 10px;
       	/*border: 2px solid white;*/
        background-color: rgba(0,0,0,0.9);
        z-index:1002;
        overflow: auto;
    }

</style>
<script>
function checkInput(evt)
{
    //only alpha-numeric characters
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    if(key===8){return;}
    if(key===37){return;}
    if(key===38){return;}
    if(key===39){return;}
    if(key===40){return;}
    if(key===46){return;}
    if(key===9){return;}
       if(key===32){return;}
    key = String.fromCharCode(key);
    var regex = /[a-zA-Z]|\./;
    if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
    }

}
</script>
<script>
function checkInput1(evt)
{
    //only alpha-numeric characters
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    if(key===8){return;}
    if(key===37){return;}
    if(key===38){return;}
    if(key===39){return;}
    if(key===40){return;}
    if(key===46){return;}
    if(key===9){return;}
       if(key===32){return;}
    key = String.fromCharCode(key);
    var regex = /[0-9]|\./;
    if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
    }

}</script>
