<?php
include("include/head.html");
?>


<!-- Formulaire de connection - - - - -->
<!-- - - - - - - - - - - - - - - - - - -->
<form class="div_form_connect">
	<div id="title_form_connect">
		<table>
			<tr>
				<td>
					<img src="img/cadena.png" id="img_connect" height="55" width="45" />
				</td>
				<td>
					<h2 style="margin-left: 30%; margin-top: 5%;">Connection</h2>
				</td>
			</tr>
		</table>
    </div>
    <div id="cont_form_connect">
		<div class="form-group">
		    <input type="text" id="login" class="form-control" required style="width: 80%;">
		    <label class="form-control-placeholder" for="login">Login</label>			
		</div>
		<div class="form-group">
		    <input type="password" id="password" class="form-control" required style="width: 80%;">
		    <label class="form-control-placeholder" for="password">Password</label>			
		</div>
    </div>    
    <div>
   		<center>
    		<button type="submit" class="btn btn-primary" style="width: 150px; height: 50px; margin-top: 4%; font-size: 18px; cursor: pointer;">Valider</button>
   		</center>
    </div>
</form>
<!-- Mot de pass oublié -->
<!-- - - - - - - - - - - - - - - - - - -->
<center>
	<p id="p_oublie" data-toggle="modal" data-target="#myModal">Mot de passe oublié ?</p>
</center>

<!-- Contenu de la page mot de passe oublié -->
<!-- - - - - - - - - - - - - - - - - - -->
<div class="container">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header" style="background-color: rgba(25, 80, 158, 1); color: white;">
          <h4 class="modal-title">Mot de passe oublié</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="cursor: pointer;">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>



<?php
include("include/footer.html");
?>