<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seven Segment Display</title>
</head>
<body>
    <?php
        include("WaterEffectTitle.php");
    ?>
<div class="digital-watch">
	<svg width="0" height="0" viewBox="0 0 0 0">
		<defs>
			<g id="unit-h">
				<path d="M0 20 L20 40 L180 40 L200 20 L180 0 L20 0 Z"></path>
			</g>
			<g id="unit-v">
				<path d="M20 0 L0 20 L0 180 L20 200 L40 180 L40 20 Z"></path>
			</g>
		</defs>
	</svg>
	<div class="hour">
		<svg id="hour-1" class="num-0" width="130" height="240" viewBox="0 0 260 480">
			<use xlink:href="#unit-h" class="segment a" x="30" y="0"></use>
			<use xlink:href="#unit-v" class="segment b" x="220" y="30"></use>
			<use xlink:href="#unit-v" class="segment c" x="220" y="250"></use>
			<use xlink:href="#unit-h" class="segment d" x="30" y="440"></use>
			<use xlink:href="#unit-v" class="segment e" x="0" y="250"></use>
			<use xlink:href="#unit-v" class="segment f" x="0" y="30"></use>
			<use xlink:href="#unit-h" class="segment g" x="30" y="220"></use>
		</svg>
		<svg id="hour-2" class="num-0" width="130" height="240" viewBox="0 0 260 480">
			<use xlink:href="#unit-h" class="segment a" x="30" y="0"></use>
			<use xlink:href="#unit-v" class="segment b" x="220" y="30"></use>
			<use xlink:href="#unit-v" class="segment c" x="220" y="250"></use>
			<use xlink:href="#unit-h" class="segment d" x="30" y="440"></use>
			<use xlink:href="#unit-v" class="segment e" x="0" y="250"></use>
			<use xlink:href="#unit-v" class="segment f" x="0" y="30"></use>
			<use xlink:href="#unit-h" class="segment g" x="30" y="220"></use>
		</svg>
	</div>
	<div class="minute">
		<svg id="minute-1" class="num-0" width="130" height="240" viewBox="0 0 260 480">
			<use xlink:href="#unit-h" class="segment a" x="30" y="0"></use>
			<use xlink:href="#unit-v" class="segment b" x="220" y="30"></use>
			<use xlink:href="#unit-v" class="segment c" x="220" y="250"></use>
			<use xlink:href="#unit-h" class="segment d" x="30" y="440"></use>
			<use xlink:href="#unit-v" class="segment e" x="0" y="250"></use>
			<use xlink:href="#unit-v" class="segment f" x="0" y="30"></use>
			<use xlink:href="#unit-h" class="segment g" x="30" y="220"></use>
		</svg>
		<svg id="minute-2" class="num-0" width="130" height="240" viewBox="0 0 260 480">
			<use xlink:href="#unit-h" class="segment a" x="30" y="0"></use>
			<use xlink:href="#unit-v" class="segment b" x="220" y="30"></use>
			<use xlink:href="#unit-v" class="segment c" x="220" y="250"></use>
			<use xlink:href="#unit-h" class="segment d" x="30" y="440"></use>
			<use xlink:href="#unit-v" class="segment e" x="0" y="250"></use>
			<use xlink:href="#unit-v" class="segment f" x="0" y="30"></use>
			<use xlink:href="#unit-h" class="segment g" x="30" y="220"></use>
		</svg>
	</div>
	<div class="second">
		<svg id="second-1" class="num-0" width="130" height="240" viewBox="0 0 260 480">
			<use xlink:href="#unit-h" class="segment a" x="30" y="0"></use>
			<use xlink:href="#unit-v" class="segment b" x="220" y="30"></use>
			<use xlink:href="#unit-v" class="segment c" x="220" y="250"></use>
			<use xlink:href="#unit-h" class="segment d" x="30" y="440"></use>
			<use xlink:href="#unit-v" class="segment e" x="0" y="250"></use>
			<use xlink:href="#unit-v" class="segment f" x="0" y="30"></use>
			<use xlink:href="#unit-h" class="segment g" x="30" y="220"></use>
		</svg>
		<svg id="second-2" class="num-0" width="130" height="240" viewBox="0 0 260 480">
			<use xlink:href="#unit-h" class="segment a" x="30" y="0"></use>
			<use xlink:href="#unit-v" class="segment b" x="220" y="30"></use>
			<use xlink:href="#unit-v" class="segment c" x="220" y="250"></use>
			<use xlink:href="#unit-h" class="segment d" x="30" y="440"></use>
			<use xlink:href="#unit-v" class="segment e" x="0" y="250"></use>
			<use xlink:href="#unit-v" class="segment f" x="0" y="30"></use>
			<use xlink:href="#unit-h" class="segment g" x="30" y="220"></use>
		</svg>
	</div>
</div>

    
</body>
</html>