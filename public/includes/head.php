<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>App Lista Tarefas</title>

	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!-- <script>
			function editar(id, txt_tarefa) {
				//criar um form de edição
				let form = document.createElement('form')
				form.action = 'index.php?acao=atualizar1'
				form.method = 'post'
				form.className = 'row'

				//criar um input hidden para guardar o id da tarefa
				let inputId = document.createElement('input')
				inputId.type = 'hidden'
				inputId.name = 'id'
				inputId.value = id

				//criar um input para a entrada do texto
				let inputTarefa = document.createElement('input')
				inputTarefa.type = 'text'
				inputTarefa.name = 'tarefa'
				inputTarefa.className = 'col-9 form-control'
				inputTarefa.value = txt_tarefa
				

				//criar um button para envio do form
				let button = document.createElement('button')
				button.type = 'submit'
				button.className = 'col-3 btn btn-info'
				button.innerHTML = 'Atualizar'

				//incluir input no form
				form.appendChild(inputTarefa)

				//incluir inputId no form
				form.appendChild(inputId)


				//incluir o button no form
				form.appendChild(button)
				
				// console.log(form)
				
				//selecionar a div tarefa
				let tarefa = document.querySelector('#tarefa_'+id)
				
				//limpar o texto da tarefa para inclusão do form
				tarefa.innerHTML = ''
				
				//incluir form na página
				tarefa.insertBefore(form, tarefa[0])
				// alert(txt_tarefa)

			}

			function remover(id) {
					location.href = 'index.php?acao=remover1&id='+id
			}

			function marcarRealizada(id) {
				location.href = 'index.php?acao=marcarrealizada1&id='+id
			}
		</script> -->

</head>

<body>