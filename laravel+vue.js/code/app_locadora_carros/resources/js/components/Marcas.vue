<template>
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

         <!-- Início do card de busca -->
         <card-component titulo="Busca">
            <template v-slot:conteudo>
               <div class="form-row">
                   <div class="col mb-3">
                      <input-container-component id="inputId" titulo="ID" id-help="idHelp" texto-ajuda="Informe o ID da marca.">
                         <input type="number" class="form-control" id="inputId" aria-describedby="idHelp" placeholder="ID">
                      </input-container-component>                   
                   </div>

                   <div class="col mb-3">
                      <input-container-component id="inputNome" titulo="Nome da marca" id-help="nomeHelp" texto-ajuda="Informe o nome da marca.">
                         <input type="text" class="form-control" id="inputNome" aria-describedby="nomeHelp" placeholder="Nome">
                      </input-container-component>
                   </div>
                </div>
            </template>
            <template v-slot:rodape>
               <button type="submit" class="btn btn-primary btn-sm float-right">Pesquisar</button>
            </template>
         </card-component>
         <!-- fim card de busca-->

            <!-- Início do card de listagem de marcas -->
            <card-component titulo="Relação de marcas">
               <template v-slot:conteudo>
                  <table-component></table-component>
               </template>

               <template v-slot:rodape>
                  <button type="button" class="btn btn-primary btn-sm float-right">Adicionar</button>
               </template>
            </card-component>           
            <!-- fim card de listagem de marcas -->

        </div>
    </div>
</div>
</template>

<script>

</script>
