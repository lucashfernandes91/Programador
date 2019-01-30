<template>
  <div class="container">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <ul class="navbar-nav">
        <li class="nav-item">
          <router-link to="/projetos" class="nav-link">Projetos</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/create/project" class="nav-link">Criar Projeto</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/create/manager" class="nav-link">Gerentes</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/create/employee" class="nav-link">Funcionários</router-link>
        </li>
      </ul>
    </nav><br />
    <transition name="fade">
      <router-view></router-view>
    </transition>
  </div>
</template>

<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .5s
    }
    .fade-enter, .fade-leave-active {
      opacity: 0
    }
</style>

<script>

    export default{
    }
</script>