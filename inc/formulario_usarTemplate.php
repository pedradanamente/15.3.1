<html>
 <head>
  <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
 </head>
 <body>
  <form action="index.php?url=sending&acao=enviar&opcao=template" method="post">
   <table width="100%" border="0">
    <tr>
     <td>
      <!-- Destinatários -->
      <div class="X1">
        E-mails destinatários (Separe por quebra de linha):
      </div>
      <!-- Nome do remetente -->
      <div class="X1">
        Nome do remetente (Empresa):
      </div>
      <!-- Destinatários -->
      <div class="X2">
        <textarea class="textareaX4" name="para" cols="55" rows="40" autofocus required><?php
        if (isset($_GET['enviaremail'])) {
          $newString = check_input($_GET['enviaremail']);
          echo $newString;
        }
          ?></textarea>
      </div>
      <!-- Nome do remetente -->
      <div class="X2">
        <input class="X3" name="nomeremetente" type="text" size="50" value="<?php echo template('empresa'); ?>" required/>
      </div>
      <!-- E-mail do remetente -->
      <div class="X1">
        E-mail do remetente:
      </div>
      <div class="X2">
        <input class="X3" type="text" size="50" name="emailremetente" value="<?php echo emailremetente(); ?>" required/>
      </div>
      <!-- Assunto -->
      <div class="X1">
        Assunto:
      </div>
      <div class="X2">
        <input class="X3" name="assunto" type="text" size="55" value="<?php echo template('assunto'); ?>" required/>
      </div>
      <!-- Telefone -->
      <div class="X1">
       Telefone:
      </div>
      <div class="X2">
        <input class="X3" name="telefone" type="text" size="50" value="<?php echo template('telefone'); ?>" />
      </div>
      <!-- CNPJ -->
      <div class="X1">
        CNPJ:
      </div>
      <div class="X2">
        <input class="X3" name="cnpj" type="text" size="50" value="<?php echo template('cnpj'); ?>"/>
      </div>
      <!-- SITE -->
      <div class="X1">
        Site:
      </div>
      <div class="X2">
        <input class="X3" name="site" type="text" size="50" value="<?php echo template('site'); ?>"/>
      </div>
      <!-- METODO -->
      <div class="X1">
        Método:
      </div>
      <div class="X2">
        <input class="X3" style="color:rgba(255,255,255,0.5);" name="metodo_displayon" type="text" size="50" value="<?php if (metodo()=="Hospedagem") { echo "Smtp da Hospedagem"; }else if (metodo()=="smtpGmail") { echo "Smtp do Gmail"; } ?>" disabled/>
        <input style="display:none;" name="metodo" type="text" size="50" value="<?php echo metodo(); ?>" />
      </div>

      <div style="clear:both;"><br/><hr/></div>
      <div style="float:right;">
        <input style="width:100px;border:1px solid rgba(0,0,0,0.8);" type="submit" name="Submit" value="Enviar"/>
      </div>

     </td>
    </tr>
   </table>
  </form>
 </body>
</html>