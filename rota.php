"https://www.google.com/maps/d/embed?mid=1YG9TV3Epp9zPlaABxixMomTyYyNpm5w&ehbc=2E312F", "Fortaleza/Centro" => "https://www.google.com/maps/d/embed?mid=1MZFCFuuEEK_7-go4joMU4eMAKPuWrDg&ehbc=2E312F", "Macapá/Santana(Via Fazendinha)" => "https://www.google.com/maps/d/embed?mid=1QwCF_14hH8_PM88qiS2XfSmqPjXnh7k&ehbc=2E312F", "Marabaixo/Universidade" => "https://www.google.com/maps/d/embed?mid=1U_vNbdKVtVGss3_tINCCmhD46XZ-xSs&ehbc=2E312F", "ValeVerde" => "https://www.google.com/maps/d/embed?mid=1pAmkBukAmSTybA6mOM0Q7IWLL1dhYn4&ehbc=2E312F", "Açucena/Centro" => "https://www.google.com/maps/d/u/0/embed?mid=1OdXsfh8zNheqalLP8KXS_pShUTxPGaE&ehbc=2E312F", "Congós/Jardim" => "https://www.google.com/maps/d/u/0/embed?mid=1rkftkd3vJsp_oHWCuVXSQHz3nevkxBE&ehbc=2E312F", "Jardim/Centro/Zerão" => "https://www.google.com/maps/d/u/0/embed?mid=1dtGcGwF3ADlRC7HUDx3JE0RyyboH1To&ehbc=2E312F", "Jardim 1" => "https://www.google.com/maps/d/u/0/embed?mid=1U-Uvp94s-N1edpTX6kRZPDFPe8tRhZ4&ehbc=2E312F", "Jardim/São Camilo" => "https://www.google.com/maps/d/u/0/embed?mid=1UoQWTF4CVyO-1FA5Wm6QnGXxqtFTQ2I&ehbc=2E312F", "Universidade/Jardim" => "https://www.google.com/maps/d/u/0/embed?mid=1u5IqTVeoqdFAVlSnVRPv25v9Bi-5w40&ehbc=2E312F", "Zerão/São Camilo" => "https://www.google.com/maps/d/u/0/embed?mid=1ROwImhOMBvw-TgoF-SUo4Wra5SIxuxo&ehbc=2E312F", "Canal do Jandia/SaoCamilo" => "https://www.google.com/maps/d/u/0/embed?mid=1GjuRt56OW3P7oPDyqzMaNeIdm3oowzA&ehbc=2E312F", "Infraero 1/SaoCamilo" => "https://www.google.com/maps/d/u/0/embed?mid=1mNJCrFwwNVZOeHHPyCVHi8l00v2oCmo&ehbc=2E312F", "Pedrinhas/Novo Horizonte" => "https://www.google.com/maps/d/u/0/embed?mid=1mNJCrFwwNVZOeHHPyCVHi8l00v2oCmo&ehbc=2E312F", "Resnascer/Unifap" => "https://www.google.com/maps/d/u/0/embed?mid=1qPonSU84Oo3ypWtIUc0vnEYYniuszUI&ehbc=2E312F&noprof=1", "Brasil Novo/SãoCamilo" => "https://www.google.com/maps/d/u/0/embed?mid=1YRjHFcI__Wk9S428kkMV8RoRoJroGA0&ehbc=2E312F", "Brasil Novo/Universidade" => "https://www.google.com/maps/d/u/0/embed?mid=15sC5TadvpVD3uq48T1A2SzGjJhLowgI&ehbc=2E312F", "Buritizal/Centro"=>"https://www.google.com/maps/d/u/0/embed?mid=1-mKrIwQqY007yhYeYqA5ftaI0UxHBds&ehbc=2E312F", "Buritizal/Sao Camilo" => "https://www.google.com/maps/d/u/0/embed?mid=1UhyL8uxmXrk2Xv_oDmYh3_cBfKKg46I&ehbc=2E312F", "Goiabal/Centro" => "https://www.google.com/maps/d/u/0/embed?mid=13hA4X1b7t9ZJrbEcpr04cNDatmocvxo&ehbc=2E312F", "Infraero II/Centro/Zerão" => "https://www.google.com/maps/d/u/0/embed?mid=1KIlKEXcFdEyFS1cOC_Ms021-Yr7PM9M&ehbc=2E312F", "Infraero/Marabaixo" => "https://www.google.com/maps/d/u/0/embed?mid=1SFxR7kre039IrfN6td6rrtNIDX5LHUs&ehbc=2E312F", "Infraero/São Camilo" => "https://www.google.com/maps/d/u/0/embed?mid=1B1p-U_xukHkjhTych10HQVSWQSFltCw&ehbc=2E312F", "Macapaba/Garden" => "https://www.google.com/maps/d/u/0/embed?mid=1kmbtIRfVn6_6rRQepsV9vLO23Jr9lBI&ehbc=2E312F", "Macapaba/São Camilo" => "https://www.google.com/maps/d/u/0/embed?mid=1k9UVt23coRQxe8pmRNfulQoMYyI-pYk&ehbc=2E312F", "Mestre Oscar ipê/Centro" => "https://www.google.com/maps/d/u/0/embed?mid=1Gs2fTSwkiWs5kxobgvFk09aNPhWQ_js&ehbc=2E312F", ]; if ($_SERVER["REQUEST_METHOD"] == "POST") { if (isset($_POST["linha"])) { $linha = $_POST["linha"]; if (array_key_exists($linha, $mapas)) { $link_mapa = $mapas[$linha]; echo ""; } else { echo "
Mapa não encontrado.
"; } } else { echo "Linha não selecionada."; } } else { echo "Erro: Método de requisição inválido."; } echo "
Voltar
$linha
"; ?>


<?php

// Array associativo com os links dos mapas
$mapas = [
    "Amazonas/SãoCamilo" => "https://www.google.com/maps/d/embed?mid=1YG9TV3Epp9zPlaABxixMomTyYyNpm5w&ehbc=2E312F",
    "Fortaleza/Centro" => "https://www.google.com/maps/d/embed?mid=1MZFCFuuEEK_7-go4joMU4eMAKPuWrDg&ehbc=2E312F",
    "Macapá/Santana(Via Fazendinha)" => "https://www.google.com/maps/d/embed?mid=1QwCF_14hH8_PM88qiS2XfSmqPjXnh7k&ehbc=2E312F",
    "Marabaixo/Universidade" => "https://www.google.com/maps/d/embed?mid=1U_vNbdKVtVGss3_tINCCmhD46XZ-xSs&ehbc=2E312F",
    "ValeVerde" => "https://www.google.com/maps/d/embed?mid=1pAmkBukAmSTybA6mOM0Q7IWLL1dhYn4&ehbc=2E312F",
    "Açucena/Centro" => "https://www.google.com/maps/d/u/0/embed?mid=1OdXsfh8zNheqalLP8KXS_pShUTxPGaE&ehbc=2E312F",
    "Congós/Jardim" => "https://www.google.com/maps/d/u/0/embed?mid=1rkftkd3vJsp_oHWCuVXSQHz3nevkxBE&ehbc=2E312F",
    "Jardim/Centro/Zerão" => "https://www.google.com/maps/d/u/0/embed?mid=1dtGcGwF3ADlRC7HUDx3JE0RyyboH1To&ehbc=2E312F",
    "Jardim 1" => "https://www.google.com/maps/d/u/0/embed?mid=1U-Uvp94s-N1edpTX6kRZPDFPe8tRhZ4&ehbc=2E312F",
    "Jardim/São Camilo" => "https://www.google.com/maps/d/u/0/embed?mid=1UoQWTF4CVyO-1FA5Wm6QnGXxqtFTQ2I&ehbc=2E312F",
    "Universidade/Jardim" => "https://www.google.com/maps/d/u/0/embed?mid=1u5IqTVeoqdFAVlSnVRPv25v9Bi-5w40&ehbc=2E312F",
    "Zerão/São Camilo" => "https://www.google.com/maps/d/u/0/embed?mid=1ROwImhOMBvw-TgoF-SUo4Wra5SIxuxo&ehbc=2E312F",
    "Canal do Jandia/SaoCamilo" => "https://www.google.com/maps/d/u/0/embed?mid=1GjuRt56OW3P7oPDyqzMaNeIdm3oowzA&ehbc=2E312F",
    "Infraero 1/SaoCamilo" => "https://www.google.com/maps/d/u/0/embed?mid=1mNJCrFwwNVZOeHHPyCVHi8l00v2oCmo&ehbc=2E312F",
    "Pedrinhas/Novo Horizonte" => "https://www.google.com/maps/d/u/0/embed?mid=1mNJCrFwwNVZOeHHPyCVHi8l00v2oCmo&ehbc=2E312F",
    "Resnascer/Unifap" => "https://www.google.com/maps/d/u/0/embed?mid=1qPonSU84Oo3ypWtIUc0vnEYYniuszUI&ehbc=2E312F&noprof=1",
    "Brasil Novo/SãoCamilo" => "https://www.google.com/maps/d/u/0/embed?mid=1YRjHFcI__Wk9S428kkMV8RoRoJroGA0&ehbc=2E312F",
    "Brasil Novo/Universidade" => "https://www.google.com/maps/d/u/0/embed?mid=15sC5TadvpVD3uq48T1A2SzGjJhLowgI&ehbc=2E312F",
    "Buritizal/Centro"=>"https://www.google.com/maps/d/u/0/embed?mid=1-mKrIwQqY007yhYeYqA5ftaI0UxHBds&ehbc=2E312F",
    "Buritizal/Sao Camilo" => "https://www.google.com/maps/d/u/0/embed?mid=1UhyL8uxmXrk2Xv_oDmYh3_cBfKKg46I&ehbc=2E312F",
    "Goiabal/Centro" => "https://www.google.com/maps/d/u/0/embed?mid=13hA4X1b7t9ZJrbEcpr04cNDatmocvxo&ehbc=2E312F",
    "Infraero II/Centro/Zerão" => "https://www.google.com/maps/d/u/0/embed?mid=1KIlKEXcFdEyFS1cOC_Ms021-Yr7PM9M&ehbc=2E312F",
    "Infraero/Marabaixo" => "https://www.google.com/maps/d/u/0/embed?mid=1SFxR7kre039IrfN6td6rrtNIDX5LHUs&ehbc=2E312F",
    "Infraero/São Camilo" => "https://www.google.com/maps/d/u/0/embed?mid=1B1p-U_xukHkjhTych10HQVSWQSFltCw&ehbc=2E312F",
    "Macapaba/Garden" => "https://www.google.com/maps/d/u/0/embed?mid=1kmbtIRfVn6_6rRQepsV9vLO23Jr9lBI&ehbc=2E312F",
    "Macapaba/São Camilo" => "https://www.google.com/maps/d/u/0/embed?mid=1k9UVt23coRQxe8pmRNfulQoMYyI-pYk&ehbc=2E312F", 
    "Mestre Oscar ipê/Centro" => "https://www.google.com/maps/d/u/0/embed?mid=1Gs2fTSwkiWs5kxobgvFk09aNPhWQ_js&ehbc=2E312F",
];

// Verifica se o método de requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se a linha foi enviada
    if (isset($_POST["linha"])) {
        $linha = $_POST["linha"];

        // Limpa a entrada do usuário para prevenir XSS
        $linha = htmlspecialchars($linha, ENT_QUOTES, 'UTF-8');

        // Verifica se a linha existe no array de mapas
        if (array_key_exists($linha, $mapas)) {
            $link_mapa = $mapas[$linha];
            // Utilize uma estrutura de template para evitar XSS
            echo "<iframe src='$link_mapa' width='600' height='450'></iframe>";
        } else {
            echo "Mapa não encontrado.";
        }
    } else {
        echo "Linha não selecionada.";
    }
} else {
    echo "Erro: Método de requisição inválido.";
}

// Botão para voltar
echo "<button onclick='goBack()'>Voltar</button>";

// Função JavaScript para voltar uma página
echo "<script>
function goBack() {
    window.history.back();
}
</script>";