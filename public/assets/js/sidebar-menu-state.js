/**
 * Created by Arte 01 on 27/11/2014.
 */

// É necessário criar a definição do plugin dentro de um Onload.
(function( $ ){
    // Adiciona ao objeto Function do JQuery seu plugin.
    $.fn.nomedoplugin = function(options) {

        // Definição dos valores padrões
        var defaults = {
            'parametro1' : 'valor1',
            'parametro2' : 'valor2',
        };

        // Geração das settings do seu plugin
        var settings = $.extend( {}, defaults, options );


        // Loop que utiliza todos os itens envolvidos na utilização do plugin
        // Este looping garante o encadeamento para que todos os itens sejam utilizados
        return this.each(function() {
            // Seu código aqui
            // Para utilizar os parâmetros utilize: settings.parametro1
        });
    };
})( jQuery );

//function supports_html5_storage() {
//    try {
//        return 'localStorage' in window && window['localStorage'] !== null;
//    } catch (e) {
//        return false;
//    }
//}