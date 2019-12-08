    
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Adicione um novo livro!</h1>
    </div>

    <!-- Content Row -->
    <div class="row" id="cadastrarLivro">

        <div class="col-xl-8 col-md-6 mb-12">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" v-model="novoLivro.titulo">
            </div>
            <div class="form-group">
                <label for="paginas">N° de páginas</label>
                <input type="text" class="form-control" id="paginas" v-model="novoLivro.paginas">
            </div>
            <div class="form-group">
                <label for="capa">Capa</label>
                <input type="text" class="form-control" id="capa" v-model="capa">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" id="descricao" rows="3"></textarea>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-12">
            <h2>Capa</h2>
            <img src="view/imagens/img-logo.png" id="capa-ilustracao" class="capa-cadastro" alt="Insira sua capa!" title="Insira sua capa!">
        </div>
    </div>

    <div class="row"> 
        <div class="col-xl-12 col-md-12 mb-12" style="text-align: center;">
            <button type="button" class="btn btn-primary" v-on:click="salvarLivro">Salvar</button>
            <button type="button" class="btn btn-warning" v-on:click="loadEspera">Cancelar</button>
        </div>
    </div>