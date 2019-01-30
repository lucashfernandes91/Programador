<template>
  <div>
    <h1>Criar Funcinário</h1>
    <form @submit.prevent="addFuncionario">
      <div class="row">
        <div class="col-md-6">
	        <div class="form-group">
	            <label>Nome do Funcionário:</label>
	            <input type="text" class="form-control" v-model="funcionario.nome">
	          </div>
        	</div>
        </div>

      	<div class="row">
	        <div class="col-md-6">
	          <div class="form-group">
	            <label>ID do Projeto:</label>
	            <input type="number" class="form-control" v-model="funcionario.projeto_id">
	          </div>
	        </div>
        </div>

        <div class="row">
	        <div class="col-md-6">
	          <div class="form-group">
	            <label>ID do Gerente:</label>
	            <input type="number" class="form-control" v-model="funcionario.gerente_id">
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
          funcionario:{}
        }
    },
    methods: {
      addFuncionario(){
        let uri = 'http://localhost:8000/api/funcionarios/create';
        this.axios.post(uri, this.funcionario).then((response) => {
          this.$router.push({name: 'projetos'});
        });
      }
    }
  }
</script>
