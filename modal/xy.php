<?php
 echo '<!-- Button trigger modal -->'.
                '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalXY">'.
                    'Novo Gráfico XY'.
                '</button>'.

                '<!-- Modal -->'.
                '<div class="modal fade" id="exampleModalXY" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">'.
                    '<div class="modal-dialog" role="document">'.
                        '<div class="modal-content">'.
                            '<div class="modal-header">'.
                                '<h5 class="modal-title" id="exampleModalLabel">Novo Gráfico XY</h5>'.
                                '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'.
                                    '<span aria-hidden="true">&times;</span>'.
                                '</button>'.
                            '</div>'.
                            '<div class="modal-body">'.
                                '<div id="form_opcoes">'.
                                    '<form name="opcoes">'.
                                        '<!--<label>Tipo de Gráfico</label>'. '  '.
                                        '<select id="tipoid" name="tipo">'.
                                            '<option>XY</option>'.
                                            '<option>Torta</option>'.
                                            '<option>Radar</option>'.
                                            '<option>Sliced</option>'.
                                        '</select><br>-->'.
                                        '<label>Título do Gráfico: </label>'. '   '.
                                        '<input type="text" name="titulo" id="tituloidXY"><br>'.
                                        '<label>Habilitar Cursor: </label>'. '  '.
                                        '<input type="radio" id="cursoridXY" name="cursor"/>sim'. '  '.
                                        '<input type="radio" id="cursoridXY" name="cursor"/>não'.
                                        '<br>'.
                                        '<label>Habilitar Zoom: </label>'. '  '.
                                        '<input type="radio" id="zoomidXY" name="zoom"/>sim'. '  '.
                                        '<input type="radio" id="zoomidXY" name="zoom"/>não'.
                                        '<br>'.
                                        '<label>Habilitar Legenda: </label>'. '  '.
                                        '<input type="radio" id="legendaidXY" name="legenda"/>sim'. '  '.
                                        '<input type="radio" id="legendaidXY" name="legenda"/>não'.
                                        '<br>'.
                                        '<label>Tipo do Eixo X</label>'. '  '.
                                        '<select id="tipoEixoXidXY" name="tipoEixoX">'.
                                            '<option>Categoria</option>'.
                                            '<option>Data</option>'.
                                            '<option>Duração</option>'.
                                            '<option>Valor</option>'.
                                        '</select><br>'.
                                        '<label>Label Eixo X: '. '  '.
                                        '<input type="text" name="nomeEixoX" id="nomeEixoXidXY"><br>'.
                                        '<label>Tipo do Eixo Y</label>'. '  '.
                                        '<select id="tipoEixoYidXY" name="tipoEixoY">'.
                                            '<option>Categoria</option>'.
                                            '<option>Data</option>'.
                                            '<option>Duração</option>'.
                                            '<option>Valor</option>'.
                                        '</select><br>'.
                                        '<label>Label Eixo Y: '. '  '.
                                        '<input type="text" name="nomeEixoY" id="nomeEixoYidXY"><br>'.
                                        '<label>Tipo do Gráfico</label>'. '  '.
                                        '<select id="tipoGraficoXY" name="tipoGrafico">'.
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
                                '<button type="button" class="btn btn-primary" onclick="XY();" data-dismiss="modal">Gerar Gráfico</button>'.
                            '</div>'.
                        '</div>'.
                    '</div>'.
                '</div>';