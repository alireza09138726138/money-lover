
{extends file="layoutregister.tpl"}

{block name="content"}


<style>
.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}

.icon {
    padding: 10px;
    background: dodgerblue;
    color: white;
    min-width: 50px;
    text-align: center;
}

.input-field {
    width: 100%;
    padding: 10px;
    outline: none;
}

.input-field:focus {
    border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
    background-color: dodgerblue;
    color: white;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
</style>

<form action="" method="post" style="max-width:500px;margin:auto">
<h2>Register Form</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
	<input type="text" placeholder="Username" name="usrnm" class="input-field" style="background-color:lightgrey;" required>
</div>

<div class="input-container">
    <i class="fa fa-envelope icon"></i>
<input type="text" name="email" placeholder="Email" class="input-field" style="background-color:lightgrey;" required>
</div>

<div class="input-container">
    <i class="fa fa-key icon"></i>
<input type="password" name="psw" placeholder="Password" id="roll" class="input-field" style="background-color:lightgrey;" required>
</div>

<input type="submit" name="submit" value="submit" class="btn btn-primary" >

</form>



{if !$valid}
	<script> bootbox.alert("<h4 style='font-weight:bold;font-style:italic;'>Invalid email format. Valid email should be:</h4><h3> test@example.com\n</h3>") </script>
  {/if}


{if $wrong_credentials}
	<script> bootbox.alert("<h3 style='font-weight:bold;font-style:italic;'>Notice:&nbsp;&nbsp;<h3><h4> <span style='color:red'>your fill &nbsp;&nbsp;</span>is exist.</h4>") </script>
  {/if}
 
{if $honest_credentials}
 <script> bootbox.alert("<h3 style='font-weight:bold;font-style:italic;'> Successfully.&nbsp;&nbsp;<h3>");</script>
 {/if}

{if $resultt}
 <script> bootbox.alert("<h3 style='font-weight:bold;font-style:italic;'>sighnup Successfully.&nbsp;&nbsp;<h3>");</script>
 {/if}
{/block}