<?php
 echo '<!-- Button trigger modal -->'.
                '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalRadar">'.
                    'Novo Gráfico Radar'.
                '</button>'.

                '<!-- Modal -->'.
                '<div class="modal fade" id="exampleModalRadar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">'.
                    '<div class="modal-dialog" role="document">'.
                        '<div class="modal-content">'.
                            '<div class="modal-header">'.
                                '<h5 class="modal-title" id="exampleModalLabel">Novo Gráfico Radar</h5>'.
                                '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'.
                                    '<span aria-hidden="true">&times;</span>'.
                                '</button>'.
                            '</div>'.
                            '<div class="modal-body">'.
                                '<div id="form_opcoes">'.
                                    '<form name="opcoes">'.
                                        '<label>Título do Gráfico: </label>'. '   '.
                                        '<input type="text" name="titulo" id="tituloidRAD"><br>'.
                                        '<label>Habilitar Cursor: </label>'. '  '.
                                        '<input type="radio" id="cursoridRAD" name="cursor"/>sim'. '  '.
                                        '<input type="radio" id="cursoridRAD" name="cursor"/>não'.
                                        '<br>'.
                                        '<label>Habilitar Zoom: </label>'. '  '.
                                        '<input type="radio" id="zoomidRAD" name="zoom"/>sim'. '  '.
                                        '<input type="radio" id="zoomidRAD" name="zoom"/>não'.
                                        '<br>'.
                                        '<label>Habilitar Legenda: </label>'. '  '.
                                        '<input type="radio" id="legendaidRAD" name="legenda"/>sim'. '  '.
                                        '<input type="radio" id="legendaidRAD" name="legenda"/>não'.
                                        '<br>'.
                                        '<label>Tipo do Gráfico</label>'. '  '.
                                        '<select id="tipoGraficoRAD" name="tipoGrafico">'.
                                            '<option>Linha</option>'.
                                            '<option>Coluna</option>'.
                                        '</select><br>'.
                                    '</form>'.
                                '</div>'.
                            '</div>'.
                            '<div class="modal-footer">'.
                                '<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>'.
                                '<button type="button" class="btn btn-primary" onclick="Radar();" data-dismiss="modal">Gerar Gráfico</button>'.
                            '</div>'.
                        '</div>'.
                    '</div>'.
                '</div>';