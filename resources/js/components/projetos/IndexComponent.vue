<template>
  <div>
      <h1>Projetos</h1>
        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2">
            <router-link :to="{ name: 'create-project' }" class="btn btn-primary">Criar Projeto</router-link>
          </div>
        </div><br />

        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Data de Inicio</th>
                <th>Data Final</th>
                <th>Excluir</th>
            </tr>
            </thead>
            <tbody>
                <tr v-for="projeto in projetos" :key="projeto.id">
                    <td>{{ projeto.id }}</td>
                    <td>{{ projeto.nome }}</td>
                    <td>{{ projeto.descricao }}</td>
                    <td>{{ projeto.dt_inicio }}</td>                    
                    <td>{{ projeto.dt_fim }}</td>
                    <td><button class="btn btn-danger" @click = "deleteProject(projeto.id)">Excluir</button></td>
                </tr>
            </tbody>
        </table>
  </div>
</template>

<script>
  export default {
      data() {
        return {
          projetos: []
        }
      },
      created() {
      let uri = 'http://localhost:8000/api/projetos';
      this.axios.get(uri).then(response => {
        this.projetos = response.data.data;
      });
    },
    methods: {
      deleteProject(id)
      {
        let uri = `http://localhost:8000/api/projetos/delete/${id}`;
        this.axios.delete(uri).then(response => {
          this.projetos.splice(this.projetos.indexOf(id), 1);
        });
      }
    }
  }
</script>
