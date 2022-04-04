<?php 
    // Header
    include_once 'includes/header.php'; 
?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Clientes</h3>
        <table classs="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Email:</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Cesar</th>
                    <th>Augusto</th>
                    <th>cesaraug76@hotmail.com</th>
                    <th>46</th>
                    <th><a href="" class="btn-floating blue"><i class="material-icons">edit</i></a></th>
                    <th><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></th>
                </tr>     
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn">Adicionar Cliente</a>
    </div>
    
</div>
<?php 
    // Footer
    include_once 'includes/footer.php'; 
?>



      