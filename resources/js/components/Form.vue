<template>
    <form action="#" method="POST">
        <div class="input-box">
            <label for="data">Data</label>
            <input
                class="data"
                type="date"
                name="data"
                id="data"
                placeholder="Data"
            />
        </div>

        <div class="input-box">
            <label for="produto">Produto</label>
            <input
                type="text"
                name="produto"
                id="produto"
                placeholder="Produto"
            />
        </div>

        <div class="input-box">
            <label for="quantidade">Quantidade</label>
            <input
                type="text"
                name="quantidade"
                id="quantidade"
                placeholder="Quantidade"
            />
        </div>

        <div class="input-area">
            <label for="descricao">Descrição</label>
            <textarea
                name="descricao"
                id="descricao"
                placeholder="Digite aqui sua descrição"
            ></textarea>
        </div>

        <div class="input-btn">
            <button type="submit">Salvar</button>
        </div>
    </form>
</template>

<script></script>
