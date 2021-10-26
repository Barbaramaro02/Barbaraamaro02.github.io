<!DOCTYPE html>
<html lang="en">
<head>  
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ei-edge">
        <meta name="viewport" content="width=device-width,inicial-scale=1.0">
        <title>login | controle de estoque</title>
        <link rel="stylesheet" href="https://use.fontawesone.com/releases/v5.0.8/css/all.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <script src="assets/js/jquery.3.5.1.slim.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-primary navbar-dark shadow ">
        <a class="navbar-brand" href="#">estoque</a>
        <button class="navbar-toggler" type:"button" data-togger="collapse" data-target="#collapsiblenavbar">
            <span class="navbar-togger-icon"></span>
            <div class="collapse navbar-collapse" id="collapsiblenavbar">
                <ul class="navbar-nav"
                <li class="nav-item">
                    <a class="nav-link" href="#">sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">cadastro</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">politicas</a>
                </li>
            </div>
       </button>
    </nav>
    <br><br>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-4"> 
                <div class="card">
                    <article class="card-bady">
                        <a href="#" class="float-rigth btn btn-outline-primary">registrar</a>
                        <h4 class="card-title mb-4 mt-1">login</h4>
                        <form> 
                            <div class="form-group"> 
                                <label> seu email</label>
                                <input name="email" class="form-control" placeholder="email" type="email">
                            </div>
                            <div class="form-group">
                                <a class="float-right" href="#">esqueceu?<a/>
                                <label> sua senha</label>
                                <input class="from-control" placeholder="******" type="password">  
                            </div>
                            <div class="form=group">
                                <div class="checkbox">
                                    <label><input type="checkbox"> salvar senha</label> 
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> login </button> 
                            </div>
                        </form>
                    </article> 
                </div>
            </div> 
        </div>
    </div>
</body>
</html>