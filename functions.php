<?php
include_once('database.php');



// echo "<pre>";
// var_dump($categorias);


$filmes_locacao_maisbarata = $connection->query('select titulo 
from filme  
order by preco_da_locacao 
LIMIT 4');
$filmes_locacao_maisbarata = $filmes_locacao_maisbarata->fetchAll();


// echo "<pre>";
// var_dump($filmes_locacao_maisbarata);

$filmes_categoria = $connection->query('select f.titulo, f.preco_da_locacao, f.duracao_do_filme, f.ano_de_lancamento, f.classificacao
from filme f, filme_categoria fc, categoria c
where f.filme_id=fc.filme_id 
  and fc.categoria_id = c.categoria_id 
  and c.nome = "Action"');
$filmes_categoria = $filmes_categoria->fetchAll();

// echo "<pre>";
// var_dump($filmes_categoria);


function ListarCategorias(){
  global $connection;
  $categorias = $connection->query('select nome from categoria order by 1');
  $categorias = $categorias->fetchAll();
  
  foreach($categorias as $categoria){
    echo "<div class='tamanho'>
    <a href='".$categoria['filme_id']."'>".$categoria['nome']."</a>
</div>";
  }
}


function listarFilmes(){
  global $connection;
  $filmes_locacao_maisbarata = $connection->query('select titulo 
from filme  
order by preco_da_locacao 
LIMIT 4');
$filmes_locacao_maisbarata = $filmes_locacao_maisbarata->fetchAll();

foreach($filmes_locacao_maisbarata as $filme){
  echo "<div class='col-12 borda'>
  <a href='".$filme['filme_id']."'>".$filme['titulo']."</a>
</div>";
}



}

