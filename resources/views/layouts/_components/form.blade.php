<form action="{{ route('produtos.store') }}" method="POST">
    @csrf
    <div class="input-box">
        <label for="data">Data</label>
        <input class="data" type="date" name="data" id="data" placeholder="Data">
    </div>
    <span class="error">{{ $errors->has('data') ? $errors->first('data') : '' }}</span>

    <div class="input-box">
        <label for="produto">Produto</label>
        <input type="text" name="produto" id="produto" placeholder="Produto">
    </div>
    <span class="error">{{ $errors->has('produto') ? $errors->first('produto') : '' }}</span>

    <div class="input-box">
        <label for="quantidade">Quantidade</label>
        <input type="text" name="quantidade" id="quantidade" placeholder="Quantidade">
    </div>
    <span class="error">{{ $errors->has('quantidade') ? $errors->first('quantidade') : '' }}</span>

    <div class="input-area">
        <label for="descricao">Descrição</label>
        <textarea name="descricao" id="descricao" placeholder="Digite aqui sua descrição"></textarea>
    </div>
    <span class="error">{{ $errors->has('descricao') ? $errors->first('descricao') : '' }}</span>

    <div class="input-btn">
        <button type="submit">Salvar</button>
    </div>
</form>
