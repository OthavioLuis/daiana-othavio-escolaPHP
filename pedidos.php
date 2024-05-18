<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Pedidos</title>
</head>
<body>

    <div id="boxAparecer">
        <div class="modal">
            <div class="mo-1">
                <p>Modal - Visualizar Pedidos</p>
                <i class="fa-solid fa-x" onclick="fecharBox()"></i>
            </div>
            <div class="mo-2">
                <div class="mo-02">
                    <p>#ID</p>
                    <input type="number" name="numero" id="numero">
                </div>
                <div class="mo-02">
                    <p>#DATA</p>
                    <input type="date" name="data" id="data">
                </div>
                <div class="mo-02">
                    <p>#TURMA</p>
                    <input type="text" name="texto" id="texto">
                </div>
            </div>
            <div class="mo-2">
                <div class="mo-02">
                    <p>#NOME</p>
                    <input type="text" name="texto" id="texto1">
                </div>
                <div class="mo-02">
                    <p>#VALOR</p>
                    <input type="text" placeholder="R$" name="data" id="data">
                </div>
            </div>
            <div class="mo-2">
                <div class="mo-02">
                    <textarea placeholder="00 - Camisa feminina - Desenvolvimento de Sistemas - GG - R$" id="texto2" rows="10" cols="50"></textarea>
                </div>
            </div>
            <div class="mo-02 m02">
                <button class="btn-m02" type="submit">Confirmar Pedido</button>
                <button class="btn-m03">Cancelar Pedido</button>
            </div>
        </div>
    </div>

    <div class="corpo">
        <div class="lista-1 lista-11">
            <div class="caixa-lista-1">
                <button class="btn-importar">Em Aberto</button>
                <button class="btn-importar">Confirmados</button>
                <button class="btn-importar btn11">Finalizados</button>
            </div>
            <table>
                <div class="caixa02"><p>Pedidos Encontrados</p></div>
                <tr class="cor-diferente">
                    <td>#ID</td>
                    <td>#DATA</td>
                    <td>#TURMA</td>
                    <td>#NOME</td>
                    <td>#VALOR</td>
                    <td>#DESC</td>
                    <td class="escolher"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="escolher">
                        <button class="es-1" onclick="abrirBox()">V</button>
                        <button class="es-2">F</button>
                        <button class="es-3">X</button>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="escolher"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="escolher"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="escolher"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="escolher"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="escolher"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="escolher"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="escolher"></td>
                </tr>
            </table>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>