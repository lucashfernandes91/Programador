<template>
  <div>
    <h1>Criar Gerente</h1>
    <form @submit.prevent="addGerente">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Nome do Gerente:</label>
            <input type="text" class="form-control" v-model="gerente.nome">
          </div>
        </div>
        </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>ID do Projeto:</label>
            <input type="number" class="form-control" v-model="gerente.projeto_id">
          </div>
        </div>
        </div>

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
          gerente:{}
        }
    },
    methods: {
      addGerente(){
        let uri = 'http://localhost:8000/api/gerentes/create';
        this.axios.post(uri, this.gerente).then((response) => {
          this.$router.push({name: 'projetos'});
        });
      }
    }
  }
</script>
