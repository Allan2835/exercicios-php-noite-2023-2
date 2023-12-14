<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>
        <input type="number" id="num1" placeholder="Digite um número">
        <input type="number" id="num2" placeholder="Digite um número">
        <input type="number" id="num3" placeholder="Digite um número">

        <button onClick='enviarNumeros()' type="submit">Calcular</button>
    </form>
    <script>
        function enviarNumeros() {
            let num1 = document.getElementById('num1').value;
            let num2 = document.getElementById('num2').value;
            let num3 = document.getElementById('num3').value;

            let valida = validarCampos(num1, num2, num3);

            if (valida == true) {
                window.open(`somaMediaBack.php?num1=${num1}&&num2=${num2}&&num3=${num3}`);
            }
        }

        function validarCampos(valor1, valor2, valor3) {
            if (valor1 == '') {
                alert('Preencha todos os campos');
                document.querySelector('#num1') ;
                return false;
            } else if (valor2 == '') {
                alert('Preencha todos os campos');
                document.querySelector('#num2');
                return false;
            } else if (valor3 == '') {
                alert('Preencha todos os campos');
                document.querySelector('#num3');
                return false;
            } else {
                return true;
            }
        }

    </script>
</body>

</html>