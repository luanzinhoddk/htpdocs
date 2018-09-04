function show_cidades(uf_id) {
    http_request = new XMLHttpRequest();
    http_request.onreadystatechange = function(){
        if (http_request.status == 200) {
            document.getElementById('div_cidade').innerHTML = http_request.responseText;
        }
    }
}