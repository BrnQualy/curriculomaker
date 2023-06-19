<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gerador de Currículo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head> 
<body>
    <main class="container" style="margin-top:30px">
        <form action="curriculoMaker.php" method="post" target="_blank" enctype="multipart/form-data">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center mt-2">Preencha com suas infromaçoes</h4>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome">
                    </div>
                    <div class="row">
                    </div>
                    <div class="col">
                    </div>
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" name="endereco" id="endereco">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="telefone">Número para contato</label>
                            <input type="text" class="form-control" name="telefone" id="telefone">
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="resumo">Resumo</label>
                    <textarea class="form-control" name="resumo" id="resumo"></textarea>
                </div>
            </div>
            <div class="card-body" id="div-formacoes">
                <h4 class="card-title">Formação Acadêmica</h4>
                <button class="btn btn-sm right" id="btn-adicionar-formacao" title="Adicionar formação">Adicionar formação</button>
            </div>
            <div class="card-body" id="div-experiencias">
                <h4 class="card-title">Experiência Profissional</h4>
                <button class="btn btn-sm right" id="btn-adicionar-experiencia" title="Adicionar experiência">Adicionar experiência</button>
            </div>
            <div class="card-body" id="div-experiencias">
                <h4 class="card-title"></h4>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="modelo" id="modelo1" value="modelo1" checked> Modelo Padrão
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">Gerar Currículo</button>
                <button class="btn btn-default" type="reset">Apagar Dados</button>
            </div>
            </div>
        </form>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="JS/index.js"></script>
</body>
</html>
