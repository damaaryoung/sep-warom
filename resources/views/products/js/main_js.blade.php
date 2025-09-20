<script>
$(document).ready(function() {
    setTimeout(function() {
        loadCategories(1);
        loadAllProducts(1, "")
    }, 500);

    $("#deleteSubCategory").on("click", function() {
        deleteSubCategory();
    });

    $("#deleteCategory").on("click", function() {
        deleteCategory();
    })

    $(document).ajaxSend(function(event, request, settings) {
        document.getElementById('loading').style.display = 'flex';
    });
    
    $(document).ajaxComplete(function(event, request, settings) {
        document.getElementById('loading').style.display = 'none';
    });

    
    let typingTimer; // timer global
    const delay = 1000; // 1 detik
    $('#formInputSearch').on('input', function () {
        clearTimeout(typingTimer); // reset timer tiap ada input
        const value = $(this).val();
        typingTimer = setTimeout(() => {
            loadSearchProducts(1, "");
        }, delay);
    });
});

function clickCategoriesList(categoryId, categoryName){  
    $('#filter').css('display', 'flex');
    $('#filter_category').css('display', 'flex');
    $('#sub_categories_dropdown').css('display', 'flex')
    $('#choosen_category').text(categoryName);
    
    $('#filter_sub_category').css('display', 'none');
    
    $("#searchCategoryId").val(categoryId);
    $("#seerchSubCategoryId").val("");

    $('#selectedPageSearch').val("");
    loadSubCategories(1,categoryId);
    loadSearchProducts(1, "")
}

function clickSubCategoriesList(subCategoryId, subCategoryName){
    $('#filter_sub_category').css('display', 'flex');
    $('#sub_categories_dropdown').css('display', 'flex');
    $('#choosen_sub_category').text(subCategoryName);
    
    $("#seerchSubCategoryId").val(subCategoryId);
    $('#selectedPageSearch').val("");
    
    loadSearchProducts(1, "")
}

function deleteCategory(){
    $('#filter').css('display', 'none');
    $('#filter_category').css('display', 'none');
    $('#sub_categories_dropdown').css('display', 'none')
    $('#choosen_category').text("");

    $('#filter_sub_category').css('display', 'none');
    
    $("#searchCategoryId").val("");


    $('#filter_sub_category').css('display', 'none');
    $('#choosen_sub_category').text("");
    
    $("#seerchSubCategoryId").val("");

    $('#selectedPageSearch').val("");
    loadAllProducts(1, "")
}

function deleteSubCategory(){
    $('#filter_sub_category').css('display', 'none');
    $('#choosen_sub_category').text("");
    $("#seerchSubCategoryId").val("");

    $('#selectedPageSearch').val("");
    loadSearchProducts(1, "");
}

function selectPage(page){
    $('#selectedPage').val(page);
    loadAllProducts(1, "");
}

function selectPageSearch(page){
    $('#selectedPageSearch').val(page);
    loadSearchProducts(1, "");
}

async function loadCategories(page, params = {}) {
    var url = "{{ url('/products/getCategories') }}";
    param_send = {
        "_token" : '{{csrf_token()}}'
    }

    let result = await fetch_data_table(url, param_send, page).then((response) => {
        
        // Parse data_table dari string JSON jadi array
        let categories = JSON.parse(response.data_table);
        
        let ul = document.getElementById("categories_list");
        ul.innerHTML = "";
        
        // Loop data categories
        categories.forEach(cat => {
            // Membuat elemen li dan a
            let li = document.createElement("li");
            let a = document.createElement("a");
            a.href = "javascript:void(0)";
            a.setAttribute("data-idcategories", cat.id);
            a.setAttribute("data-namecategories", cat.name);
            a.innerText = cat.name;
            
            // Menambahkan event listener pada <a>
            a.addEventListener("click", function(event) {
                let categoryId = event.target.getAttribute("data-idcategories");
                let categoryName = event.target.getAttribute("data-namecategories");
                clickCategoriesList(categoryId, categoryName);
            });
            
            // Menambahkan <a> ke <li>, lalu <li> ke <ul>
            li.appendChild(a);
            ul.appendChild(li);
        });
    }).catch((e) => console.log(e));

}

async function loadSubCategories(page, mIdCategories) {
    var param_send = {};

    var url = "{{ url('/products/getSubCategories') }}";

    param_send = {
        "_token" : '{{csrf_token()}}',
        id_categories: mIdCategories,
    }

    let result = await fetch_data_table(url, param_send, page).then((response) => {
        
        // Parse data_table dari string JSON jadi array
        let sub_categories = JSON.parse(response.data_table);
        console.log(sub_categories);
        
        let ul = document.getElementById("sub_categories_list");
        ul.innerHTML = "";
        
        sub_categories.forEach(cat => {
            // Membuat elemen li dan a
            let li = document.createElement("li");
            let a = document.createElement("a");
            a.href = "javascript:void(0)";
            a.setAttribute("data-idcategories", cat.id);
            a.setAttribute("data-namecategories", cat.name);
            a.innerText = cat.name;
            
            // Menambahkan event listener pada <a>
            a.addEventListener("click", function(event) {
                let subCategoryId = event.target.getAttribute("data-idcategories");
                let subCategoryName = event.target.getAttribute("data-namecategories");
                clickSubCategoriesList(subCategoryId, subCategoryName);
            });
            
            // Menambahkan <a> ke <li>, lalu <li> ke <ul>
            li.appendChild(a);
            ul.appendChild(li);
        });
    }).catch((e) => console.log(e));

}

async function loadAllProducts(page, search_datas) {
    var param_send = {};

    var url = "{{ url('/products/getAllProducts') }}";

    param_send = {
        "_token" : '{{csrf_token()}}',
        search_data: search_datas,
        page: $('#selectedPage').val()
    }

    let result = await fetch_data_table(url, param_send, page).then((response) => {
        let response_code = JSON.parse(response.response_code);
        let msg = JSON.parse(response.msg);

        if(response_code == "00"){
            renderData(response)
            renderPaginationAll(response)
            $('#fail_load').css('display', 'none');
        } else {
            $('#product_sections').css('display', 'none');
            $('#nav_pagination_all').css('display', 'none');
            $('#fail_load').css('display', 'block');
            $('#fail_msg').text(msg);
        }
    }).catch((e) => console.log(e));
}

async function loadSearchProducts(page, search_datas) {
    var param_send = {};

    var url = "{{ url('/products/getSearchProducts') }}";

    param_send = {
        "_token" : '{{csrf_token()}}',
        search_data         : $('#formInputSearch').val(),
        searchCategoryId    : $('#searchCategoryId').val(),
        seerchSubCategoryId : $('#seerchSubCategoryId').val(),
        page                : $('#selectedPageSearch').val()
    }

    let result = await fetch_data_table(url, param_send, page).then((response) => {
        let response_code = JSON.parse(response.response_code);
        let msg = JSON.parse(response.msg);

        if(response_code == "00"){
            renderData(response)
            renderPaginationSearch(response)
            $('#fail_load').css('display', 'none');
        } else {
            $('#product_sections').css('display', 'none');
            $('#nav_pagination_all').css('display', 'none');
            $('#fail_load').css('display', 'block');
            $('#fail_msg').text(msg);
        }
    }).catch((e) => console.log(e));
}

function loadDetails($id){
    const base = "{{ url('/detail-products') }}";
    window.location.href = `${base}/${encodeURIComponent($id)}`;
}

function renderData(response){
    let productsData = JSON.parse(response.data_table);
    let response_code = JSON.parse(response.response_code);
    
    let datas = "";
    
    datas += `<div class="container" id="product_cotainer">
                <div class="row gy-4" id="product_table">`;
    for(i = 0; i < productsData.length; i++){
        datas += `<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div style="text-align:center">
                            <img src="${productsData[i]['product_img']}" alt="Service Icon" style="width: 200px; height: 200px;">
                        </div>
                        <br>
                        <h3>${productsData[i]['product_name']}</h3>
                        <p>${productsData[i]['description']}</p>
                        <a href="javascript:void(0)" 
                            class="readmore stretched-link" 
                            onclick="loadDetails('${productsData[i]['id']}')">
                            Lihat Detail Produk <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>`;
    }
    
    datas += `      </div>
                </div>`;
                
    $('#product_sections').html(datas);
    $('#product_sections').css('display', 'flex');
}

function renderPaginationAll(response){
    let paginationData = JSON.parse(response.pagination);
    let pagination = "";
    pagination += `<ul class="pagination justify-content-center" id="ul_pagination_all">`;
    if(paginationData.current_page != 1){
        pagination += `<li class="page-item">
                            <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-disabled="false" data-page="${paginationData.current_page - 1}">Previous</a>
                        </li>`;
    } 
    for(i = 1; i <= paginationData.last_page; i++){
        if(i == paginationData.current_page){
            pagination += `<li class="page-item disabled"><a class="page-link" href="javascript:void(0)" aria-disabled="true">${i}</a></li>`;
        } else {
            pagination += `<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page="${i}" >${i}</a></li>`;
        }
    }
    if(paginationData.current_page != paginationData.last_page){
        pagination += `<li class="page-item">
                            <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-disabled="false" data-page="${paginationData.current_page + 1}">Next</a>
                        </li>`;
    } 
    pagination += `</ul>`;
    
    $('#nav_pagination_all').html(pagination);
    $('#nav_pagination_all').css('display', 'block');
    
    // Tambahin event delegation sekali aja
    $('#nav_pagination_all').off('click', '.page-link').on('click', '.page-link', function () {
        const page = $(this).data('page');
        if(page){ 
            selectPage(page); // panggil function selectPage(page)
        }
    });

    $('#nav_pagination_search').css('display', 'none');
}

function renderPaginationSearch(response){
    let paginationData = JSON.parse(response.pagination);
    let pagination = "";
    pagination += `<ul class="pagination justify-content-center" id="ul_pagination_search">`;
    if(paginationData.current_page != 1){
        pagination += `<li class="page-item">
                            <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-disabled="false" data-page="${paginationData.current_page - 1}">Previous</a>
                        </li>`;
    } 
    for(i = 1; i <= paginationData.last_page; i++){
        if(i == paginationData.current_page){
            pagination += `<li class="page-item disabled"><a class="page-link" href="javascript:void(0)" aria-disabled="true">${i}</a></li>`;
        } else {
            pagination += `<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page="${i}" >${i}</a></li>`;
        }
    }
    if(paginationData.current_page != paginationData.last_page){
        pagination += `<li class="page-item">
                            <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-disabled="false" data-page="${paginationData.current_page + 1}">Next</a>
                        </li>`;
    } 
    pagination += `</ul>`;
    
    $('#nav_pagination_search').html(pagination);
    $('#nav_pagination_search').css('display', 'block');
    
    // Tambahin event delegation sekali aja
    $('#nav_pagination_search').off('click', '.page-link').on('click', '.page-link', function () {
        const page = $(this).data('page');
        if(page){ 
            selectPageSearch(page); // panggil function selectPage(page)
        }
    });
    
    $('#nav_pagination_all').css('display', 'none');
}
</script>