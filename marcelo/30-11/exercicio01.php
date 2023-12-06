<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>
        <input name="campo" type="number" id="valor1" placeholder=" Digite o primeiro valor">
        <input name="campo" type="number" id="valor2" placeholder=" Digite o segundo valor">
        <input name="campo" type="number" id="valor3" placeholder=" Digite o terceiro valor">
        <button onclick="teste()">Verificar</button>

    </form>

    <script>
        function teste() {
            let numero1 = document.getElementById('valor1').value;
            let numero2 = document.getElementById('valor2').value;
            let numero3 = document.getElementById('valor3').value;

            let validar = validarCampos(numero1, numero2, numero3);

            if (validar == true) {
                window.open(`resolucao01.php?num1=${numero1}&&num2=${numero2}&&num3=${numero3}`);
            }
        }

        function validarCampos(numero1, numero2, numero3) {

            if (numero1 == '') {
                alert('Preencha o primeiro valor');
                document.querySelector('#valor1').focus();
                return false;
            } else if (numero2 == '') {
                alert('Preencha o segundo valor');
                document.querySelector('#valor2').focus();
                return false;
            } else if (numero3 == '') {
                alert('Preencha o terceiro valor');
                document.querySelector('#valor3').focus();
                return false;
            } else {
                return true
            }
        }

    </script>

</body>

</html>

<!-- 1 - Faça um programa, com uma função que necessite de três argumentos, e que forneça a soma desses três argumentos
através de uma função. Seu script também deve fornecer a média dos três números, através de uma segunda função que chama
a primeira. Obs. faça uma validação para não deixar o usuário enviar inputs vazios. -->