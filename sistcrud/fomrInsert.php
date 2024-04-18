<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>  Insert </title>
    <link rel="stylesheet" type="text/css" href="CSS/Estilo.css">
</head>
<body> 
    <main>
   <header> Cadastrar dados dos clientes </header>
   <section>
       <form action="insert.php" method="post">

        <p> Nome: <input type="text" name="nome">  </p>
        <p> E-mail: <input type="email" name="e-mail"> </p>
        <p> Idade: <input type="number" name="idade"> </p>
  
        <button type="submit"> Inserir dados</button>
        </form>
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