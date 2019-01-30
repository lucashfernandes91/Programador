<template>
  <div>
    <h1>Criar Projeto</h1>
    <form @submit.prevent="addProjeto">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Nome do Projeto:</label>
            <input type="text" class="form-control" v-model="projeto.nome">
          </div>
        </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Descrição do Projeto:</label>
              <textarea class="form-control" v-model="projeto.descricao" rows="5"></textarea>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label>Data de Inicio:</label>
              <input type="date" class="form-control" v-model="projeto.dt_inicio">
            </div>

            <div class="form-group">
              <label>Data de Término:</label>
              <input type="date" class="form-control" v-model="projeto.dt_fim">
            </div>
          </div>
        </div>

        <br />
        <div class="form-group">
          <button class="btn btn-primary">Criar</button>
        </div>
    </form>
  </div>
</template>

<script>
    export default {
        data(){
        return {
          projeto:{}
        }
    },
    methods: {
      addProjeto(){
        let uri = 'http://localhost:8000/api/projetos/create';
        this.axios.post(uri, this.projeto).then((response) => {
          this.$router.push({name: 'projetos'});
        });
      }
    }
  }
</script>
