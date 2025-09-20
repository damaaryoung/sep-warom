<script>
$(document).ready(function() {
    setTimeout(function() {
        loadProducts()
    }, 500);

    $(document).ajaxSend(function(event, request, settings) {
        document.getElementById('loading').style.display = 'flex';
    });
    
    $(document).ajaxComplete(function(event, request, settings) {
        document.getElementById('loading').style.display = 'none';
    });
});

async function loadProducts() {

    var url = "{{ url('/load-products/getDetailsProduct') }}";
    param_send = {
        "_token" : '{{csrf_token()}}',
        id_data: $('#idData').val()
    }
    
    let result = await fetch_data_table(url, param_send, 1).then((response) => {
        let data = JSON.parse(response.data_table);


        $("#product_name").text(data.product_name);
        $("#description").text(data.description);
        $("#product_image").attr("src", data.product_img);

         $("#btn_download").on("click", function() {
            window.open(data.product_docs, "_blank");
        });

        
        let specs = data.specification.split('.').join('.<br><br>')
        let sentences = data.specification
                        .split('.')
                        .map(s => s.trim())
                        .filter(s => s.length);

        let datas = "";
        for(i = 0; i < sentences.length; i++){
            datas += `<div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-patch-check flex-shrink-0"></i>
                            <div>
                                <p>${sentences[i]}</p>
                            </div>
                        </div>`;
        }
        $('#icon_box').html(datas);
        $('#icon_box').css('display', 'block');
        
        $('#section_products').css('display', 'block');
    }).catch((e) => console.log(e));
}
</script>