<?php 
  require "../app_lista_tarefas_private/Conexao.php";
  require "../app_lista_tarefas_private/Tarefa.model.php";
  require "../app_lista_tarefas_private/Tarefa.service.php";

  $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

  if($acao == 'inserir') {
    
    $tarefa = new Tarefa();
    $tarefa->__set('tarefa', $_POST['tarefa']);
  
    $conexao = new Conexao();
  
    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->inserir();
  
    header('Location: nova_tarefa.php?inclusao=1');
  } else if($acao == 'recuperar') {
    
    
    $tarefa = new Tarefa();
    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefas = $tarefaService->recuperar();
  }else if($acao == 'atualizar') {
    
    $tarefa = new Tarefa();
    $tarefa->__set('id', $_POST['id'])
           ->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();
    $tarefaService = new TarefaService($conexao, $tarefa);
    if($tarefaService->atualizar()) {
      header('Location: todas_tarefas.php');
    }
  }else if($acao == 'remover') {

    $tarefa = new Tarefa();
    $tarefa->__set('id', $_GET['id']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->remover();
    header('Location: todas_tarefas.php');
  }else if($acao == 'marcarrealizada') {

    $tarefa = new Tarefa();
    $tarefa->__set('id', $_GET['id'])->__set('id_status', 2);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->marcarRealizada();

    header('Location: todas_tarefas.php');
  }


  else if($acao == 'remover1') {

    $tarefa = new Tarefa();
    $tarefa->__set('id', $_GET['id']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->remover();
    header('Location: index.php');
  }else if($acao == 'marcarrealizada1') {

    $tarefa = new Tarefa();
    $tarefa->__set('id', $_GET['id'])->__set('id_status', 2);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->marcarRealizada();

    header('Location: index.php');
  }else if($acao == 'atualizar1') {
    
    $tarefa = new Tarefa();
    $tarefa->__set('id', $_POST['id'])
           ->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();
    $tarefaService = new TarefaService($conexao, $tarefa);
    if($tarefaService->atualizar()) {
      header('Location: index.php');
    }
  }
  

?>