function mudar(obj){
    let selecionado = obj.checked;
    if (selecionado) {
        let decisao = confirm('Tem certeza de que quer desbloquear');
        if(decisao){
            $(document).on("click", ".switch", function () {
                let idtabela = $(this).closest('tr').find('td[id]').attr('id');
                /*alert(idtabela);*/
                var id_tbtd = $("#idtd").val(); //pega o valor de hiden
               $.ajax({
                    method: "POST",
                    url: "libera_bc_php.php",
                    data: {id_tbtd} // Dados a serem enviados
                });
                    
                
            });//não excluir este bloco e abaixo
        }
    } else {
        header('Location: index_adm.php');
		exit();
    }
}