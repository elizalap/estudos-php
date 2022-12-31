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
                  <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#modalMarca">Adicionar</button>
               </template>
            </card-component>           
            <!-- fim card de listagem de marcas -->
        </div>
    </div>
     
    <modal-component id="modalMarca" titulo="Adicionar marca">
      <template v-slot:alertas >
         <alert-component tipo="success" :detalhes="transacaoDetalhes" titulo="Cadastro realizado com sucesso" v-if="transacaoStatus == 'adicionado'"></alert-component>
         <alert-component tipo="danger" :detalhes="transacaoDetalhes" titulo="Erro ao tentar cadastrar marca" v-if="transacaoStatus == 'erro'"></alert-component>
      </template>
      <template v-slot:conteudo>
         <div class="form-group">
            <input-container-component id="novoNome" titulo="Nome da marca" id-help="novoNomeHelp" texto-ajuda="Informe o nome da marca.">
               <input type="text" class="form-control" id="novoNome" aria-describedby="novoNomeHelp" placeholder="Nome" v-model="nomeMarca">
            </input-container-component>
            {{ nomeMarca }}
         </div>

         <div class="form-group">
            <input-container-component id="novoImagem" titulo="Imagem" id-help="novoImagemHelp" texto-ajuda="Selecione uma imagem no formato PNG">
               <input type="file" class="form-control-file" id="novoImagem" aria-describedby="novoImagemHelp" placeholder="Selecione uma imagem" @change="carregarImagem($event)">
            </input-container-component>
            {{ arquivoImagem }}
         </div>
      </template>
      <template v-slot:rodape>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
         <button type="button" class="btn btn-primary" @click="salvar()">Salvar</button>
      </template>
    </modal-component>
</div>
</template>

<script>
import axios from 'axios';

   export default {
      computed: {
         token() {
            let token = document.cookie.split(';').find(indice => {
               return indice.includes('token=')
            })

            token = token.split('=')[1]
            token = 'Bearer' + token

            return token
         }
      },
      data() {
         return {
            urlBase: 'http://localhost:8000/api/v1/marca',
            nomeMarca: '',
            arquivoImagem: [],
            transacaoStatus: '',
            transacaoDetalhes: {}
         }
      },
      methods: {
         carregarImagem(e) {
            this.arquivoImagem = e.target.files
         },
         salvar() {

            let formData = new FormData();
            formData.append('nome', this.nomeMarca)
            formData.append('imagem', this.arquivoImagem[0])

            let config = {
               headers: {
                  'Content-Type': 'multipart/form-data',
                  'Accept': 'application/json',
                  'Authorization': this.token
               }
            }

            axios.post(this.urlBase, formData, config)
               .then(response => {
                  this.transacaoStatus = 'adicionado'
                  this.transacaoDetalhes = {
                     mensagem: 'ID do registro' + response.data.id
                  }
               })
               .catch(errors => {
                  this.transacaoStatus = 'erro'
                  this.transacaoDetalhes = errors.response
               })
         }
      }
   }
</script>
