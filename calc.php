<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora</title>
		<meta name="viewport" content="width=device-width,initia-scale=1.0"/>
		<meta name="author" content="Helen Perini Maia"/>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="./css/style.css">
	</head>
	<body class="cont">
		<header class="header">
			<h1>CÁLCULO IMC</h1>
		</header>
			<div class="oq">
			<p>IMC significa Índice de Massa Corporal e trata-se de uma relação entre a massa de um indivíduo e a sua altura. Esta relação, mesmo sendo uma medida de referência internacional reconhecida pela OMS (Organização Mundial da Saúde), não mede propriamente a gordura corporal, pois não contempla a massa magra, massa gorda, os líquidos e nem estrutura a óssea do indivíduo em questão.
			Através do cálculo do IMC é possível fazer de forma rápida uma avaliação geral para definir se uma pessoa se encontra em risco de obesidade, ou se ela está abaixo do peso.
			Para determinar o IMC, basta dividir o peso da pessoa (massa) pela sua altura ao quadrado. 
			A massa deve ser definida em quilogramas (kg) e a altura em metros.
			<b> Portanto, a fórmula de cálculo do IMC = massa / (altura x altura).</b>
			</p>
		</div>
	
		<container class="cont2">
			<div class="tit">
				<p class="tit1">RESULTADO:</p>
					<p class="tit2">
					<?php 
						if (isset($_POST['peso']) AND isset($_POST['altura'])) 
						{
							if (is_numeric($_POST['peso']) AND is_numeric($_POST['altura']))
							{
								if (($_POST['altura']>0)&&($_POST['peso']>0))
								{
									$_POST['altura']=$_POST['altura']/100;
									$_POST['imc']= $_POST['peso']/($_POST['altura']*$_POST['altura']);

									echo "PESO: ".number_format($_POST['peso'],1,",",".")."kg <br>";
									echo "ALTURA: ".number_format($_POST['altura'],2,",",".")."m <br>";

									if ($_POST['imc']<16) {
										echo "Seu IMC é ".number_format($_POST['imc'],2,",",".")."kg/m².<br> Você está abaixo do peso ideal.<br>
										(MAGREZA GRAU III) <br>";
									}
									if (($_POST['imc']>=16)&&($_POST['imc']<=16.9)) {
										echo "Seu IMC é ".number_format($_POST['imc'],2,",",".")."kg/m².<br> Você está abaixo do peso ideal. <br>
										(MAGREZA GRAU II) <br>";
									}
									if (($_POST['imc']>=17)&&($_POST['imc']<=18.4)) {
										echo "Seu IMC é ".number_format($_POST['imc'],2,",",".")."kg/m².<br> Você está abaixo do peso ideal. <br>
										(MAGREZA GRAU I) <br>";
									}
									if (($_POST['imc']>=18.5)&&($_POST['imc']<=24.9)) {
										echo "Seu IMC é ".number_format($_POST['imc'],2,",",".")."kg/m².<br> Você está dentro do peso ideal. <br>
										(ADEQUADO) <br>";
									}
									if (($_POST['imc']>=25)&&($_POST['imc']<=29.9)) {
										echo "Seu IMC é ".number_format($_POST['imc'],2,",",".")."kg/m².<br> Você está acima do peso ideal. <br> 
										(SOBREPESO- PRÉ-OBESO) <br>";
									}
									if (($_POST['imc']>=30)&&($_POST['imc']<=34.9)) {
										echo "Seu IMC é ".number_format($_POST['imc'],2,",",".")."kg/m².<br> Você está acima do peso ideal. <br> 
										(OBESIDADE GRAU I) <br>";
									}
									if (($_POST['imc']>=35)&&($_POST['imc']<=39.9)) {
										echo "Seu IMC é ".number_format($_POST['imc'],2,",",".")."kg/m².<br> Você está acima do peso ideal. <br> 
										(OBESIDADE GRAU II) <br>";
									}
									if ($_POST['imc']>=40){
										echo "Seu IMC é ".number_format($_POST['imc'],2,",",".")."kg/m². <br> Você está acima do peso ideal. <br>
										(OBESIDADE GRAU III) <br>";
									}	
									
								}					
								if (($_POST['altura']<=0)||($_POST['peso']<=0))
								{
									echo "O valor de seu peso e/ou sua altura não pode ser igual ou menor que ZERO.";
								}
							}
							else 
							{
								echo "Não foram digitados os valores NUMÉRICOS necessários 
								para calcular seu IMC. Os campos não podem ser deixados em branco,bem como não podem receber valores que não sejam numéricos.";	/*OS VALORES JÁ SÃO VÁLIDADOS PELO FORMULÁRIO*/		
							}		
						}
						else {
								echo "É necessário que algum valor numérico seja inserido. Não deixe os campos em branco.";
							}			

					?>
					</p>
					<p>
				</div>
				<form action="calc.php" method="post" class="form">
					<div class="input">
						<label class="label">Peso (kg):</label>
					<input class="inp" type="text" name="peso" placeholder="Ex: 58.5" title="Informe apenas valores positivos, caso necessário, utilize'.'" maxlength="4" pattern="[0-9]+[\.]?[0-9]+$" required />	
					</div>

					<div class="input">
						<label class="label">Altura (cm):</label>
						<input class="inp" type="text" name="altura" placeholder="Ex: 165" title="Informe apenas valores positivos" maxlength="4" pattern="[0-9]*$" required />	
					</div>
					<div class="b1">
						<button class="b2" onclick="">
							<span>CALCULAR NOVAMENTE</span>
						</button>
					</div>
				</form>
			</container>
	</body>
</html>