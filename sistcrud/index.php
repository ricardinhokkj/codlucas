<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title> CRUD Bancos de Dados</title>
    <link rel="stylesheet" type="text/css" href="CSS/Estilo.css">
</head>
<body>
    <main>
   <header> Selecione a operação com o Banco de Dados</header>
   <section>
       <div>
           <a href="fomrInsert.php"> Cadastrar Clientes </a>
       </div>
       <div> 
        <a href="formRead.php"> Pesquisar por  nome </a>
       </div>
        <div>
            <a href="readAll.php">  Alterar registro </a>
        </div>
         <div>
             <a href="readAllDelete.php"> Deletar </a>
         </div>
   </section>
 </main>
    <?php
    $host = 'localhost';
    $dbname = 'aula_b4';
    $user = 'root';
    $password = 'mysql2024';


    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // echo "<p>Connected to MySQL successfully!</p>";
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
    ?>
</body>
</html>