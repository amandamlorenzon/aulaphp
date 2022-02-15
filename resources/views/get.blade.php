<html>
    <body>
        <h1>Formulário de Pesquisa</h1>
        <form method="POST">

            <label for="filme">A qual filme você assistiu?</label>
            <select name="filme">
                <option value="Senhor dos Aneis">Senhor dos Aneis</option>
                <option value="Hobbit">Hobbit</option>
            </select>

            <br /><br />

            <label>O que achou do filme?</label><br />
            <input type="radio" name="opniao" value="ótimo"> Ótimo
            <input type="radio" name="opniao" value="bom"> Bom
            <input type="radio" name="opniao" value="regular"> Regular
            <input type="radio" name="opniao" value="ruim"> Ruim

            <br /><br />
            <label for="comentarios">Deixe seus comentários</label><br />
            <textarea name="comentarios" rows="5" cols="50"></textarea>

            <br /><br />
            <p>Deixe seu contato</p>
            <label for="nome">Nome: </label><input type="text" name="nome"><br />
            <label for="email">Email:</label> <input type="text" name="email"><br />

            <br/>
            <br/>
            <input type="checkbox" name="novidades" value="1"> Quero receber novidades por email<br /><br />

            <input type="submit" value="Enviar dados">
            <input type="reset" value="Limpar">

        </form>
    </body>
</html>
