<?php
    include 'pedaco.php';
    $id = $_GET['id'];
?>

    <div class="container">
        <h2>Cadastro de Produtos</h2>

        <form action="atualizar.php?id= <?php echo $id; ?>" method="POST">

            <?php



                require 'conexao.php';
                $sql = "SELECT * FROM produtos WHERE id = $id";
                $stmt = $pdo->query($sql);
                $produto = $stmt->fetch(PDO::FETCH_ASSOC);

            ?>
            <div class="mb-3">
                Nome: <input type="text" value="<?php echo $produto['nome']; ?>" class="form-control" name="nome_novo">
            </div>
            <div class="mb-3">
                Preco: <input type="decimal" value="<?php echo $produto['preco']; ?>" class="form-control" name="preco_novo">
            </div>
            <div class="mb-3">
                Quantidade: <input type="number" value="<?php echo $produto['quantidade']; ?>" class="form-control" name="quantidade_novo">
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>