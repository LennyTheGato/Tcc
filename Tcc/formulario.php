<style>

input[type=text], select {
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.formulario {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.direita {
  float; right
  background-color: #f2f2f2;
  padding: 20px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

</style>
<body>

<h3>Formulário</h3>

<div class="formulario">
  <div class="direita">

    <form action="resultado.php" method="post">

      <label for="id_nome">Nome</label>
      <input type="text" id="id_nome" name="nome" placeholder="Digite seu Nome">

      <br/><br/>

      <label for="id_sobrenome">Sobrenome</label>
      <input type="text" id="id_sobrenome" name="sobrenome" placeholder="Digite seu Sobrenome">

      <br/><br/>

      <label for="id_estado">Estado</label>
      <select id="id_estado" name="estado" >
          <option disabled selected value=""> Selecione...</option>
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espírito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MT">Mato Grosso</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PA">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>

      </select>
      <br/><br/>

      <label for="Comente">Comente</label><br/>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Comente algo..." style="height:300px; width:60%"></textarea>
      </div>
    </div>
  
    <input type="submit" value="Submit">
  </form>
</div>

