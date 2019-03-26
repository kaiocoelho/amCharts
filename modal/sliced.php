<?php
 echo '<!-- Button trigger modal -->'.
                '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalSliced">'.
                    'Novo Gráfico Sliced'.
                '</button>'.

                '<!-- Modal -->'.
                '<div class="modal fade" id="exampleModalSliced" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">'.
                    '<div class="modal-dialog" role="document">'.
                        '<div class="modal-content">'.
                            '<div class="modal-header">'.
                                '<h5 class="modal-title" id="exampleModalLabel">Novo Gráfico Sliced</h5>'.
                                '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'.
                                    '<span aria-hidden="true">&times;</span>'.
                                '</button>'.
                            '</div>'.
                            '<div class="modal-body">'.
                                '<div id="form_opcoes">'.
                                    '<form name="opcoes">'.
                                        '<label>Título do Gráfico: </label>'. '   '.
                                        '<input type="text" name="titulo" id="tituloidSLI"><br>'.
                                        '<label>Habilitar Legenda: </label>'. '  '.
                                        '<input type="radio" id="legendaidSLI" name="legenda"/>sim'. '  '.
                                        '<input type="radio" id="legendaidSLI" name="legenda"/>não'.
                                        '<br>'.
                                        '<label>Habilitar Label: </label>'. '  '.
                                        '<input type="radio" id="labelidSLI" name="label"/>sim'. '  '.
                                        '<input type="radio" id="labelidSLI" name="label"/>não'.
                                        '<br>'.
                                        '<label>Tipo do Gráfico: </label>'. '  '.
                                        '<select id="tipoGraficoidSLI" name="tipoGraficoSLI">'.
                                            '<option>Funil</option>'.
                                            '<option>Piramide</option>'.
                                        '</select><br>'.
                                    '</form>'.
                                '</div>'.
                            '</div>'.
                            '<div class="modal-footer">'.
                                '<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>'.
                                '<button type="button" class="btn btn-primary" onclick="Sliced();" data-dismiss="modal">Gerar Gráfico</button>'.
                            '</div>'.
                        '</div>'.
                    '</div>'.
                '</div>';