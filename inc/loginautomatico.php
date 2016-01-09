			<div class="SignInCenterForm">
				<form action="index.php" method="post">
					<p style="text-align:center;font-size:12px;font-family:Arial,Tahoma;margin-bottom:20px;color:#363636;">FERRAMENTA INTRANET DE RMA</p>
					<hr style="background-color:gray;margin-bottom:10px;height:1px;"/>
					<div class="form">
						<table>
							<tr style="height:30px;">
								<td width="30%"><div class="formSignInLabel" style="margin-bottom:10px;font-size:17px;font-family:Verdana;">Identifique-se!</div></td>
							</tr>
							<tr style="height:30px;">
								<td width="70%">

									<div>
										<select class="formInputSignInAutomatico" name="identificacao">
											<option value="N/A" selected></option>
				<?php
				$sql = $conexao->query("SELECT * FROM usuarios ORDER BY nome ASC"); 
				while($linha =  $sql->fetch_array()) {
				?>
											<option value="<?php echo $linha['nome']; ?>"><?php echo $linha['nome']; ?></option>
				<?php
				}
				?>
										</select>
									</div>
								</td>
							</tr>
						</table>
					</div>
					<hr/>
					<button class="formButtonSignInHome fr" name="signinautomatico">Entrar</button>
					<p class="both" style="font-family:Verdana,Arial,Tahoma;padding-top:5px;font-size:11px;"><a href="index.php?page=signin">Abrir login avancado</a></p>
				</form>
			</div>