<?php
 echo '<!-- Button trigger modal -->'.
                '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalPie">'.
                    'Novo Gráfico Pie'.
                '</button>'.

                '<!-- Modal -->'.
                '<div class="modal fade" id="exampleModalPie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">'.
                    '<div class="modal-dialog" role="document">'.
                        '<div class="modal-content">'.
                            '<div class="modal-header">'.
                                '<h5 class="modal-title" id="exampleModalLabel">Novo Gráfico Pie</h5>'.
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
                                        '<input type="text" name="tituloPIE" id="tituloidPIE"><br>'.
                                        '<label>Habilitar Label: </label>'. '  '.
                                        '<input type="radio" id="labelidPIE" name="label"/>sim'. '  '.
                                        '<input type="radio" id="labelidPIE" name="label"/>não'.
                                        '<br>'.
                                        '<label>Habilitar Legenda: </label>'. '  '.
                                        '<input type="radio" id="legendaidPIE" name="legenda"/>sim'. '  '.
                                        '<input type="radio" id="legendaidPIE" name="legenda"/>não'.
                                        '<br>'.
                                        '<label>Tipo de Gráfico: </label>'. '   '.
                                        '<select id="tipoGraficoPIE" name="tipoGraficoPIE">'.
                                            '<option>2D</option>'.
                                            '<option>3D</option>'.
                                        '</select><br>'.
                                        '<label>Valor do raio interno (%): </label>'. '   '.
                                        '<input type="numeric" name="raio" id="raioidPIE">'.
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
                                '<button type="button" class="btn btn-primary" onclick="Pie();" data-dismiss="modal">Gerar Gráfico</button>'.
                            '</div>'.
                        '</div>'.
                    '</div>'.
                '</div>';

