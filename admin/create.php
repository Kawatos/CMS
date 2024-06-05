
<?php 
include("templates/header.php")
?>
        <div class="create-form w-100 mx-auto p-4" style="max-width:700px;">
            <form action="process.php" method="post">
                <div class="form-field mb-4">
                    <input type="text" class="form-control" name="title" placeholder="Titulo">
                </div>
                <div class="form-field mb-4">
                    <textarea class="form-control" name="summary" id="" cols="30" rows="10" placeholder="Digite um sumario"></textarea>

                </div>
                <div class="form-field mb-4">
                    <textarea class="form-control" name="content" id="" cols="30" rows="10" placeholder="Digite o conteudo"></textarea>

                </div>

                <input type="hidden" name="date" value="<?php echo date("y/m/d"); ?>">

                <div class="form-field mb-4">
                    <input type="submit" value="submit" class="btn btn-primary" name="create">
                </div>
            </form>
        </div>
<?php 
include("templates/footer.php")
?>