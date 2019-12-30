<?php require 'header.php'; ?>
    <div class="container">
        <div class="col-lg-12">
            <h3>Buscador em PHP</h3>
            <form method="POST">
                <input type="text" class="form-control" name="search" placeholder="Faça uma busca por cidade" />
                <br />
                <input type="submit" class="btn btn-primary" name="btnSearch" value="Buscar" />
            </form>
        </div>
        <?php if($result): ?>
        <div>
            <?php foreach($result as $res): ?>
            <p><?php echo $res['nome']; ?></p>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
<?php require 'footer.php'; ?>
