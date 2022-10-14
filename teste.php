echo "# Teste-Avaliativo---010-2022" >> README.md 
git init 
git add README.md 
git commit -m "first commit" 
git branch -M main 
git remote add origin https://github.com/ predross/Teste-Avaliativo---010-2022.git
 git push -u origin main



<?php
        if(isset($_POST['submit']))
        {
        include_once('integra.php');
        $nome = $_POST['nome'];
        $Endereco = $_POST['Endereco'];
        $Bairro = $_POST['Bairro'];
        $CEP = $_POST['CEP'];
        $Cidade = $_POST['Cidade'];
        $UF = $_POST['UF'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $quantidade = $_POST['quantidade'];



        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,endereço,bairro,cep,cidade,uf,email,telefone,quantidade)
        VALUES ($nome,$Endereco,$Bairro,$CEP,$Cidade,$UF,$email,$telefone,$quantidade)");

        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
        $result = $conexao->query($sql);






}



?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro Sgino</title>
        <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to left, rgb(220, 20, 63), rgb(29, 2, 34));
        }
        .box{
            color: white;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.2);
            padding: 10px;
            border-radius: 10px;
            width: 35%;
        }
        fieldset{
            border: 3px solid rgb(230, 14, 25);
            border-radius: 5px;
        }
        legend{
            border: 1px solid rgb(230, 14, 25);
            padding: 20px;
            text-align: center;
            background-color: red;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 20px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -15px;
            font-size: 10px;
            color: rgb(230, 14, 25);
        }
        #submit{
            background-image: linear-gradient(to right,rgb(230, 14, 25), rgb(129, 18, 33));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(230, 14, 25), rgb(129, 18, 33));
        }
    </style>
</head>
<body>
    <div class="box">

        <form action="teste.php" method="POST">
            <fieldset>
                <legend>Cadastro de pedidos</legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="Endereco" id="Endereco" class="inputUser" required>
                    <label for="Endereco" class="labelInput">Endereço:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="Bairro" id="Bairro" class="inputUser" required>
                    <label for="Bairro" class="labelInput">Bairro:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="CEP" name="CEP" id="CEP" class="inputUser" required>
                    <label for="CEP" class="labelInput">CEP:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="Cidade" id="Cidade" class="inputUser" required>
                    <label for="Cidade" class="labelInput">Cidade:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="UF" id="UF" class="inputUser" required>
                    <label for="UF" class="labelInput">UF:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>DADOS PARA PRODUÇÃO:</p>
                <p>Tipo de revistinha:</p>
                <input type="radio" id="convite" name="DADOS DE PRODUÇÃO" value="convite" required>
                <label for="convite">Convite</label>
                <input type="radio" id="lembrança" name="DADOS DE PRODUÇÃO" value="lembrança" required>
                <label for="lembrança">Lembrança</label>
                <input type="radio" id="convite-lembrança" name="DADOS DE PRODUÇÃO" value="convite-lembrança" required>
                <label for="convite-lembrança">Convite-Lembrança</label>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="quantidade" id="quantidade" class="inputUser" required>
                    <label for="quantidade" class="labelInput">Quantidade:</label>
                </div>
                <br>
                <p>marque caso seja sim</p>
                <input type="radio" id="sugestoes" name="DADOS DE PRODUÇÃO" value="sugestoes" required>
                <label for="sugestoes">Aceito sugestões de texto para capa</label>
                <br><br>
                <div class="inputBox">
                    <input type="file" name="anexo" id="anexo" class="inputUser" required>
                    <label for="anexo" class="labelInput">Imagens</label>
                <br><br>
                <input type="submit" name="submit" id="submit" onClick="alert('o formulário foi enviado com sucesso'); return true">
           
            </form>
            </fieldset>
        </form>
        <form>
        <div>
                    <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">nome</th>
                <th scope="col">endereço</th>
                <th scope="col">bairro</th>
                <th scope="col">cep</th>
                <th scope="col">cidade</th>
                <th scope="col">uf</th>
                <th scope="col">email</th>
                <th scope="col">telefone</th>
                <th scope="col">quantidade</th>
                <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while($user_data = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>"; $user_data['id']."</td>"; 
                    echo "<td>"; $user_data['nome']."</td>"; 
                    echo "<td>"; $user_data['endereço']."</td>"; 
                    echo "<td>"; $user_data['bairro']."</td>"; 
                    echo "<td>"; $user_data['cep']."</td>"; 
                    echo "<td>"; $user_data['cidade']."</td>"; 
                    echo "<td>"; $user_data['uf']."</td>"; 
                    echo "<td>"; $user_data['email']."</td>"; 
                    echo "<td>"; $user_data['telefone']."</td>"; 
                    echo "<td>"; .$user_data['quantidade']."</td>"; 
                    echo "<td>
                     <a class='btn btn-sm btn-primary' href='#'>
                     <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-brush' viewBox='0 0 16 16'>
                     <path d='M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04zM4.705 11.912a1.23 1.23 0 0 0-.419-.1c-.246-.013-.573.05-.879.479-.197.275-.355.532-.5.777l-.105.177c-.106.181-.213.362-.32.528a3.39 3.39 0 0 1-.76.861c.69.112 1.736.111 2.657-.12.559-.139.843-.569.993-1.06a3.122 3.122 0 0 0 .126-.75l-.793-.792zm1.44.026c.12-.04.277-.1.458-.183a5.068 5.068 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.59 1.927-5.566 4.66-7.302 6.792-.442.543-.795 1.243-1.042 1.826-.121.288-.214.54-.275.72v.001l.575.575zm-4.973 3.04.007-.005a.031.031 0 0 1-.007.004zm3.582-3.043.002.001h-.002z'/>
                   </svg>
                    </a>
                    
                    
                    
                    <td>";
                    echo "</tr>";






                }                
                
                
                ?>
            </tbody>
            </table>
        </div>
           
    </div>
</body>
</html> 
