<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculo de Consumo de Combustível</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
</head>
<body>
    <main>
        <div class="painel">
            <h2>Instruções</h2>
            <div class="conteudo-painel">
                <p>Esta aplicação tem como finalidade demonstrar os valores que
                    serão gastos com combustível durante uma viagem, com base no
                consumo do seu veículo, e com a distância determinada por você!</p>
                <p>Os combustíveis disponíveis para este cálculo são:</p>
                <ul>
                    <li><b>Gasolina - R$ 4,99</b></li>
                </ul>
            </div>
        </div>

        <div class="painel">
            <h2>Cálculo do valor (R$) do consumo</h2>
            <div class="conteudo-painel">
                <form action="{{url('/gasto')}}" method="get">
                    <label for="combustivel">Combusível</label>

                    <select name="combustivel" id="">
                        <option value="Gasolina" selected>Gasolina</option>
                        <option value="Etanol">Etanol</option>
                        <option value="Diesel">Diesel</option>
                    </select>

                    <label for="valorcombustivel">valor</label>
                    <input type="number" name="valorcombustivel" step="0.01" id="">

                    <label for="distancia">Distância em Quilômetros a ser percorrida</label>
                    <input type="number" class="campoTexto" step="0.01" name="distancia" required/>

                    <label for="autonomia">Consumo de combustível do veículo (Km/L)</label>
                    <input type="number" class="campoTexto" step="0.01" name="autonomia" required/>

                    <button class="botao" type="submit">Calcular</button>
                </form>
            </div>
        </div>

    </main>
</body>
</html>