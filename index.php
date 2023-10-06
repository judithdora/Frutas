<!DOCTYPE html>
<html>
<head>
    <title>Suma de Manzanitas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            background-color: #87CEEB; /* Color de fondo celeste */
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #FF69B4; /* Color de fondo rosado */
            text-align: center;
        }
        h1 {
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        .apple-block {
            display: inline-block;
            vertical-align: top;
            margin: 20px;
        }
        img {
            max-width: 100px;
            height: auto;
        }
        .result-message {
            font-weight: bold;
            font-size: 24px;
            margin-top: 20px;
        }
        .happy-face, .sad-face {
            font-size: 40px;
        }
        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Suma de Manzanitas</h1>

        <button id="generar">Generar número</button>

        <script>
            var num1, num2, resultado;

            function generarNumeros() {
                // Generar dos números aleatorios entre 1 y 10
                num1 = Math.floor(Math.random() * 10) + 1;
                num2 = Math.floor(Math.random() * 10) + 1;
                
                // Calcular la suma de los números
                resultado = num1 + num2;

                // Mostrar números y manzanas
                mostrarNumerosYManzanas();
            }

            function mostrarNumerosYManzanas() {
                var num1Element = document.getElementById("num1");
                var num2Element = document.getElementById("num2");
                var appleBlockA = document.getElementById("apple-block-a");
                var appleBlockB = document.getElementById("apple-block-b");

                num1Element.textContent = num1;
                num2Element.textContent = num2;

                appleBlockA.innerHTML = '';
                appleBlockB.innerHTML = '';

                for (var i = 0; i < num1; i++) {
                    appleBlockA.innerHTML += '<img src="manzanita.png" alt="Manzana">';
                }

                for (var j = 0; j < num2; j++) {
                    appleBlockB.innerHTML += '<img src="manzanita.png" alt="Manzana">';
                }
            }

            function verificarResultado() {
                var respuestaInput = document.getElementById("respuesta");
                var resultMessage = document.getElementById("result-message");
                var respuesta = parseInt(respuestaInput.value);

                // Verificar si la respuesta es correcta
                if (respuesta === resultado) {
                    resultMessage.innerHTML = '<img src="gifAlegre.gif" alt="Manzana">; Respuesta Correcta';
                } else {
                    resultMessage.innerHTML = '<img src="gifTriste.gif" alt="Manzana">; Respuesta Incorrecta';
                }
            }

            // Asociar la función de generar números al botón "Generar"
            var generarButton = document.getElementById("generar");
            generarButton.addEventListener("click", generarNumeros);
        </script>

        <div class="apple-block">
            <h2>Bloque A</h2>
            <label for="sumandoA">Número de Manzanas: <span id="num1">0</span></label>
            <div id="apple-block-a"></div>
        </div>

        <div class="apple-block">
            <h2>Bloque B</h2>
            <label for="sumandoB">Número de Manzanas: <span id="num2">0</span></label>
            <div id="apple-block-b"></div>
        </div>

        <form>
            <label for="respuesta">Ingresa la suma de las Manzanas:</label>
            <input type="number" id="respuesta" required>
            <button type="button" onclick="verificarResultado()">Verificar</button>
        </form>

        <div class="result-message" id="result-message"></div>
    </div>
</body>
</html>


