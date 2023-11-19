$(document).ready(function () {
    $("input[name='Cpf']").blur(function () {
        var $nome = $("input[name='Nome']");
        var $E_mail = $("input[name='E_mail']");
        var $Telefone = $("input[name='Telefone']");
        var $Tipo_Servico = $("input[name='Tipo_Servico']");
        var $Data_Horario = $("input[name='Data_Horario']");

        var cpf = $('#Cpf').val();

        $.getJSON('function.php', { cpf },
            function (retorno) {
                console.log(retorno);
                console.log(retorno[0].Nome); //teste

                $nome.val(retorno[0].Nome);
                $E_mail.val(retorno[0].E_mail);
                $Telefone.val(retorno[0].Telefone);
                $Tipo_Servico.val(retorno[0].Tipo_Servico);
                $Data_Horario.val(retorno[0].Data_Horario);

                

                //... terminar...
            });
    });
});