<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Escola Tecnica Estadual Monteiro Lobato -->
	<!-- Criação de Sites II-->
	<!-- Helen Perini Maia -->
	<!-- Cândido Luciano Farias -->
	<!--Faça um aplicativo em PHP que receba o peso e a altura de uma pessoa 
	através de um formulário. Ao submeter o formulário deverá ser calculado e 
	exibido o fator IMC, baseado nos dados informados.
	Importante a boa apresentação deste aplicativo -->
		<!-- 21/03/2019 -->
	<title>Index</title>
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
	
		<container class="cont2" >
			<div class="tit">
				<p class="tit2"  id="tt">
					INSIRA SEUS DADOS ABAIXO E CALCULE SEU IMC
				</p>
				<p>
			</div>
			<form action="calc.php" method="post" class="form">
				<div class="input">
					<label class="label">Peso (kg):</label>
				<input class="inp" type="text" name="peso" placeholder="EX: 58.5" title="Informe apenas valores positivos, caso necessário, utilize'.'" maxlength="4" pattern="[0-9]+[\.]?[0-9]+$" required />	
				</div>

				<div class="input">
					<label class="label">Altura (cm):</label>
					<input class="inp" type="text" name="altura" placeholder="Ex: 165" title="Informe apenas valores positivos e inteiros" maxlength="4" pattern="[0-9]*$" required />	
				</div>
				<div class="b1">
					<button class="b2" onclick="">
						<span>
							CALCULAR
						</span>
					</button>
				</div>
			</form>
		</container>

	</body>
</html>