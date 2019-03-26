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
                                        '<input type="text" name="titulo" id="tituloid"><br>'.
                                        '<label>Habilitar Cursor: </label>'. '  '.
                                        '<input type="radio" id="cursorid" name="cursor"/>sim'. '  '.
                                        '<input type="radio" id="cursorid" name="cursor"/>não'.
                                        '<br>'.
                                        '<label>Habilitar Zoom: </label>'. '  '.
                                        '<input type="radio" id="zoomid" name="zoom"/>sim'. '  '.
                                        '<input type="radio" id="zoomid" name="zoom"/>não'.
                                        '<br>'.
                                        '<label>Habilitar Legenda: </label>'. '  '.
                                        '<input type="radio" id="legendaid" name="legenda"/>sim'. '  '.
                                        '<input type="radio" id="legendaid" name="legenda"/>não'.
                                        '<br>'.
                                        '<label>Tipo do Eixo X</label>'. '  '.
                                        '<select id="tipoEixoXid" name="tipoEixoX">'.
                                            '<option>Categoria</option>'.
                                            '<option>Data</option>'.
                                            '<option>Duração</option>'.
                                            '<option>Valor</option>'.
                                        '</select><br>'.
                                        '<label>Label Eixo X: '. '  '.
                                        '<input type="text" name="nomeEixoX" id="nomeEixoXid"><br>'.
                                        '<label>Tipo do Eixo Y</label>'. '  '.
                                        '<select id="tipoEixoYid" name="tipoEixoY">'.
                                            '<option>Categoria</option>'.
                                            '<option>Data</option>'.
                                            '<option>Duração</option>'.
                                            '<option>Valor</option>'.
                                        '</select><br>'.
                                        '<label>Label Eixo Y: '. '  '.
                                        '<input type="text" name="nomeEixoY" id="nomeEixoYid"><br>'.
                                        '<label>Tipo do Gráfico</label>'. '  '.
                                        '<select id="tipoGrafico" name="tipoGrafico">'.
                                            '<option>Coluna</option>'.
                                            '<option>Coluna 3D</option>'.
                                            '<option>Cone</option>'.
                                            '<option>Coluna Curva</option>'.
                                            '<option>Linha</option>'.
                                            '<option>Degrais</option>'.
                                            '<option>OHLC</option>'.
                                        '</select><br>'.
                                        '<!--<input type="button" value="Gerar Gráfico" onclick="Gerar();">'.
                                        '<input type="button" value="Gráfico XY" onClick="XY();">'.
                                        '<input type="button" value="Gráfico Pie" onClick="Pie();">'.
                                        '<input type="button" value="Gráfico Radar" onClick="Radar();">'.
                                        '<input type="button" value="Gráfico Sliced" onClick="Sliced();">-->'.
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