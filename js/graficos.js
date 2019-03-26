am4core.useTheme(am4themes_animated);
am4core.useTheme(am4themes_material);

function Gerar() {
    var tipo = document.getElementById("tipoid").value;

    console.log(tipo);
    switch (tipo) {
        case 'XY':
            XY();
            break;
        case 'Torta':
            Pie();
            break;
        case 'Radar':
            Radar();
            break;
        case 'Sliced':
            Sliced();
            break;
    }
}

function Pie() {
    var legenda = document.getElementById("legendaidPIE").checked;

    var tipoGrafico = document.getElementById("tipoGraficoPIE").value;
    
    // Escolhendo o tipo de gráfico a ser exibido
    switch(tipoGrafico){
        case '2D':
            // Cria um instancia 2D
            var chart = am4core.create("conteudo", am4charts.PieChart);
            
            // Cria a serie pie 2D
            var series = chart.series.push(new am4charts.PieSeries());
            series.dataFields.value = "litres";
            series.dataFields.category = "country";
            break;
        case '3D':
            // Cria um instancia 3D
            var chart = am4core.create("conteudo", am4charts.PieChart3D);
            
            // Cria a serie pie 3D
            var series = chart.series.push(new am4charts.PieSeries3D());
            series.dataFields.value = "litres";
            series.dataFields.category = "country";
            break;
    }
    
    // Adiciona dados
    chart.dataSource.url = "json/data_pie.json";
    
    // Inserindo raio interno no gráfico
    var raio = document.getElementById("raioidPIE").value;
    chart.innerRadius = am4core.percent(raio);
    
    var label = document.getElementById("labelidPIE").checked;
    // Habilitando/Desabilitando labels
    series.labels.template.disabled = !label;
    series.ticks.template.disabled = !label;

    
    // Inserindo título no grafico
    var title = chart.titles.create();
    var titulo = document.getElementById("tituloidPIE").value;
    title.text = titulo;
    title.fontSize = 25;
    title.marginBottom = 30;

    if (legenda === true) {
        chart.legend = new am4charts.Legend();
    }
}

function XY() {
    var cursor = document.getElementById("cursoridXY").checked;
    var legenda = document.getElementById("legendaidXY").checked;
    var zoom = document.getElementById("zoomidXY").checked;

    // Criando uma instancia
    var chart = am4core.create("conteudo", am4charts.XYChart);

    // Adicionando dados
    chart.dataSource.url = "json/data_xy.json";

    // Criando eixos
    var tipoEixoX = document.getElementById("tipoEixoXidXY").value;
    var tipoEixoY = document.getElementById("tipoEixoYidXY").value;
    var eixoX = document.getElementById("nomeEixoXidXY").value;
    var eixoY = document.getElementById("nomeEixoYidXY").value;

    switch (tipoEixoX) {
        case 'Categoria':
            var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis.dataFields.category = "country";
            break;
        case 'Data':
            var categoryAxis = chart.xAxes.push(new am4charts.DateAxis());
            categoryAxis.dateFormatter.dateFormat = 'dd-MM-yyyy';
            break;
        case 'Duração':
            var categoryAxis = chart.xAxes.push(new am4charts.DurationAxis());
            categoryAxis.durationFormatter.durationFormat = 'hh:ii:ss';
            break;
        case 'Valor':
            var categoryAxis = chart.xAxes.push(new am4charts.ValueAxis());
            break;
    }
    categoryAxis.title.text = eixoX;
    
    switch (tipoEixoY) {
        case 'Categoria':
            var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
            categoryAxis.dataFields.category = "country";
            break;
        case 'Data':
            var categoryAxis = chart.yAxes.push(new am4charts.DateAxis());
            categoryAxis.dateFormatter.dateFormat = 'dd-MM-yyyy';
            break;
        case 'Duração':
            var categoryAxis = chart.yAxes.push(new am4charts.DurationAxis());
            categoryAxis.durationFormatter.durationFormat = 'hh:ii:ss';
            break;
        case 'Valor':
            var categoryAxis = chart.yAxes.push(new am4charts.ValueAxis());
            break;
    }
    categoryAxis.title.text = eixoY;

    // Criando série de dados
    var tipoGrafico = document.getElementById("tipoGraficoXY").value;
    
    switch (tipoGrafico){
        case 'Coluna':
            var series = chart.series.push(new am4charts.ColumnSeries());
            series.dataFields.valueY = "litres";
            series.dataFields.categoryX = "country";
            series.columns.template.tooltipText = "Series: {name}\nCategory: {categoryX}\nValue: {valueY}";
            series.columns.template.fill = am4core.color("#bbdefb"); // fill
            break;
        case 'Coluna 3D':
            var series = chart.series.push(new am4charts.ColumnSeries3D());
            series.dataFields.valueY = "litres";
            series.dataFields.categoryX = "country";
            series.columns.template.tooltipText = "Series: {name}\nCategory: {categoryX}\nValue: {valueY}";
            series.columns.template.fill = am4core.color("#bbdefb"); // fill
            break;
        case 'Cone':
            var series = chart.series.push(new am4charts.ConeSeries());
            series.dataFields.valueY = "litres";
            series.dataFields.categoryX = "country";
            series.columns.template.tooltipText = "Series: {name}\nCategory: {categoryX}\nValue: {valueY}";
            series.columns.template.fill = am4core.color("#bbdefb"); // fill
            break;
        case 'Coluna Curva':
            var series = chart.series.push(new am4charts.CurvedColumnSeries());
            series.dataFields.valueY = "litres";
            series.dataFields.categoryX = "country";
            series.columns.template.tooltipText = "Series: {name}\nCategory: {categoryX}\nValue: {valueY}";
            series.columns.template.fill = am4core.color("#bbdefb"); // fill
            break;
        case 'Linha':
            var series = chart.series.push(new am4charts.LineSeries());
            series.dataFields.valueY = "litres";
            series.dataFields.categoryX = "country";
            series.stroke = am4core.color("#83fa12");
            series.strokeWidth = 3; 
            break;
        case 'Degrais':
            var series = chart.series.push(new am4charts.StepLineSeries());
            series.dataFields.valueY = "litres";
            series.dataFields.categoryX = "country";
            series.stroke = am4core.color("#83fa12");
            series.strokeWidth = 3; 
            break;
        case 'OHLC':
            var series = chart.series.push(new am4charts.OHLCSeries());
            series.dataFields.valueY = "litres";
            series.dataFields.categoryX = "country";
            series.columns.template.tooltipText = "Series: {name}\nCategory: {categoryX}\nValue: {valueY}";
            series.columns.template.fill = am4core.color("#104547"); // fill
            break;
    }
    series.name = "Serie";
    
    // Inserindo título no grafico
    var title = chart.titles.create();
    var titulo = document.getElementById("tituloidXY").value;
    title.text = titulo;
    title.fontSize = 25;
    title.marginBottom = 30;

    if (cursor === true) {
        chart.cursor = new am4charts.XYCursor();
    }
    if (legenda === true) {
        chart.legend = new am4charts.Legend();
    }
    if (zoom === true) {
        chart.scrollbarX = new am4core.Scrollbar();
        chart.scrollbarY = new am4core.Scrollbar();
    }
}

function Radar() {
    var cursor = document.getElementById("cursoridRAD").checked;
    var legenda = document.getElementById("legendaid").checked;
    var zoom = document.getElementById("zoomidRAD").checked;

    // Cria uma instancia
    var chart = am4core.create("conteudo", am4charts.RadarChart);

    // Adiciona dados
    chart.dataSource.url = "json/data_radar.json";
    
    /* Create axes */
    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
    categoryAxis.dataFields.category = "country";

    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
    valueAxis.dataFields.category = "litres";


    var tipoGrafico = document.getElementById("tipoGraficoRAD").value;
    
    // Cria e configura  série de acordo com o tipo selecionado pelo usário
    switch(tipoGrafico){
        case 'Linha':
            var series = chart.series.push(new am4charts.RadarSeries());
            series.dataFields.valueY = "litres";
            series.dataFields.categoryX = "country";
            series.name = "Sales";
            series.strokeWidth = 3;
            series.zIndex = 2;
            break;
        case 'Coluna':
            var series = chart.series.push(new am4charts.RadarColumnSeries());
            series.dataFields.valueY = "litres";
            series.dataFields.categoryX = "country";
            series.name = "Units";
            series.strokeWidth = 0;
            series.columns.template.fill = am4core.color("#CDA2AB");
            series.columns.template.tooltipText = "Series: {name}\nCategory: {categoryX}\nValue: {valueY}";
            break;
    }
    
    // Inserindo título no grafico
    var title = chart.titles.create();
    var titulo = document.getElementById("tituloidRAD").value;
    title.text = titulo;
    title.fontSize = 25;
    title.marginBottom = 30;

    if (cursor === true) {
        chart.cursor = new am4charts.RadarCursor();
    }
    if (legenda === true) {
        chart.legend = new am4charts.Legend();
    }
    if (zoom === true) {
        chart.scrollbarX = new am4core.Scrollbar();
        chart.scrollbarY = new am4core.Scrollbar();
    }
}

function Sliced() {
    var cursor = document.getElementById("cursorid").checked;
    var legenda = document.getElementById("legendaid").checked;
    var zoom = document.getElementById("zoomid").checked;

    let chart = am4core.create("conteudo", am4charts.SlicedChart);
    chart.dataSource.url = 'json/data_sliced.json';

    var series1 = chart.series.push(new am4charts.FunnelSeries());
    series1.dataFields.value = "value2";
    series1.dataFields.category = "name";
    series1.labels.template.disabled = true;

    var series2 = chart.series.push(new am4charts.PyramidSeries());
    series2.dataFields.value = "value2";
    series2.dataFields.category = "name";
    series2.labels.template.disabled = true;

    var man = "M53.5,476c0,14,6.833,21,20.5,21s20.5-7,20.5-21V287h21v189c0,14,6.834,21,20.5,21 c13.667,0,20.5-7,20.5-21V154h10v116c0,7.334,2.5,12.667,7.5,16s10.167,3.333,15.5,0s8-8.667,8-16V145c0-13.334-4.5-23.667-13.5-31 s-21.5-11-37.5-11h-82c-15.333,0-27.833,3.333-37.5,10s-14.5,17-14.5,31v133c0,6,2.667,10.333,8,13s10.5,2.667,15.5,0s7.5-7,7.5-13 V154h10V476 M61.5,42.5c0,11.667,4.167,21.667,12.5,30S92.333,85,104,85s21.667-4.167,30-12.5S146.5,54,146.5,42 c0-11.335-4.167-21.168-12.5-29.5C125.667,4.167,115.667,0,104,0S82.333,4.167,74,12.5S61.5,30.833,61.5,42.5z"

    var series = chart.series.push(new am4charts.PictorialStackedSeries());
    series.dataFields.value = "value3";
    series.dataFields.category = "name";
    series.alignLabels = true;
    series.maskSprite.path = man;

    if (cursor === true) {
        chart.cursor = new am4charts.XYCursor();
    }
    if (legenda === true) {
        chart.legend = new am4charts.Legend();
    }
    if (zoom === true) {
        chart.scrollbarX = new am4core.Scrollbar();
        chart.scrollbarY = new am4core.Scrollbar();
    }
}

