<?php 
include("templates/header.php")
?>

<?php 
$id = $_GET['id'];
if ($id) {
    include("../connect.php");
    $sqlEdit = "SELECT * FROM posts WHERE id= $id";
    $result = mysqli_query($conn, $sqlEdit);
} else {
    echo "Nenhuma postagem encontrada";
}


?>
        <div class="create-form w-100 mx-auto p-4" style="max-width:700px;">
            <form action="process.php" method="post">
                <?php 
                while ($data = mysqli_fetch_array($result)) {
                
                ?>
                <div class="form-field mb-4">
                    <input type="text" class="form-control" name="title" placeholder="Titulo" value="<?php echo $data['title']; ?>">
                </div>
                <div class="form-field mb-4">
                    <textarea class="form-control" name="summary" id="" cols="30" rows="10" placeholder="Digite um sumario"><?php echo $data['summary']; ?></textarea>

                </div>
                <div class="form-field mb-4">
                    <textarea class="form-control" name="content" id="" cols="30" rows="10" placeholder="Digite o conteudo"><?php echo $data['content']; ?></textarea>

                </div>

                <input type="hidden" name="date" value="<?php echo date("Y/m/d"); ?>">
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div class="form-field">
                    <input type="submit" value="submit" class="btn btn-primary" name="update" >
                </div>
                <?php
                }
                ?>
            </form>
        </div>
<?php 
include("templates/footer.php")
?>