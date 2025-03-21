<template>
    <div class="header">
        <div class="body">
            <div class="form">
                <div class="title">
                    <h2>Produtos utilizados</h2>
                </div>
                <div class="input-b">
                    <form-component></form-component>
                </div>
            </div>
        </div>

        <div class="table">
            <div class="table-header">
                <div class="titulo-cad">
                    <h2>Produtos cadastrados</h2>
                </div>
                <div class="table-cad">
                    <table-component></table-component>
                </div>
            </div>
        </div>
        <div id="sair"><a @click="logout">Sair</a></div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    methods: {
        async logout() {
            try {
                await axios.post("/logout"); // Faz a requisição para o backend
                localStorage.removeItem("token"); // Remove o token (caso use JWT)
                window.location.href = "/login"; // Redireciona para a tela de login
            } catch (error) {
                console.error("Erro ao sair:", error);
            }
        },
    },
};
</script>
