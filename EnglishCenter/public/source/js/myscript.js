$(document).ready(function () {
    $('#dataTables-example').DataTable({
        responsive: true
    });
    $("div.alert").delay(1000).slideUp();
});

$(document).ready(function () {
    $("#btn_Add_Image").click(function () {
        $("#img_Current").hide();
        $("#fImage_Add").click();
    });
    function ImagePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#frm_Show_Preview + img').remove();
                $('#frm_Show_Preview').after('<img id="img_Add" width="200px" height="200px" src="' + e.target.result + '" class="img-responsive"/>');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#fImage_Add").change(function () {
        ImagePreview(this);
    });
    $("#btn_Refesh_Image").click(function () {
        $("#img_Current").show();
        $("#img_Add").remove();
    });
});

$(document).ready(function () {
    $("#btn_Add_Image_Detail").click(function () {
        $('#fImage_Add_Detail').click();
    });

    function ImagePreviewDetail(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#frm_Show_Preview_Detail').append('<div class="Image_Preview_Detail"><img id="img_Add_Detail" src="' + e.target.result + '"/></div>');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#fImage_Add_Detail").change(function () {
        ImagePreviewDetail(this);
    });
    $("#btn_Refesh_Image_Detail").click(function () {
     $("#del_img_detail").remove(); 
 });
});

$(document).ready(function () {
    $("#btn_update_image_user").click(function () {
        $("#file_update_image_user").click();
    });
    function ImagePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img_curent_user').hide(); 
                $('#frm_Show_Preview').append('<img class="profile-user-img img-responsive img-circle" src="' + e.target.result + '"/>');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#file_update_image_user").change(function () {
        ImagePreview(this);
    });
});
$(document).ready(function() {
    $("#btn-add-gallery").click(function () {
        $('#file-input-gallery').click();
    });
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img height="100">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }
                reader.readAsDataURL(input.files[i]);
            }
        }
    };
    $('#file-input-gallery').on('change', function() {
        imagesPreview(this, 'div.gallery-photo');
    });
});

$(document).ready(function () {
    $('a#del_img_detail').on('click', function () {
        var url = "http://localhost:80/Laravel/EnglishCenter/public/admin/product/destroyImageDetail/";
        var _token = $("form[name='frmEditProduct']").find("input[name='_token']").val();
        var idHinh = $(this).parent().find("img").attr("idHinh");
        var img = $(this).parent().find("img").attr("src");
        var rid = $(this).parent().find("img").attr("id");
        $.ajax({
            url: url + idHinh,
            type: 'GET',
            cache: false,
            data: {
                "_token": _token,
                "idHinh": idHinh,
                "urlHinh": img
            },
            success: function (data) {
                if (data == "Oke") {
                    $("#" + rid).remove();

                } else {
                    alert("Error !");
                }
            }
        });
    });
});




$(document).ready(function(){
    $("#dataTables-example").on('click','.show-modal',function(){
        $('#frmShowCate').modal('show');
        var currentRow=$(this).closest("tr");
        var nameparent = currentRow.find(".nameparent").html();
        $('#parentcate').text(nameparent);
        $('#idcate').text($(this).data('id'));    
        $('#namecate').text($(this).data('name'));
        $('#keywordscate').text($(this).data('keywords'));
        $('.modal-title').text('Show Post');
    });
    $('#frmAddCate').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url: "http://localhost:8080/Laravel/EnglishCenter/public/admin/cate/catemanager-add",
            type: "POST",
            data: $('#frmAddCate').serialize(),
            success:function(response){
                $('#modalAddCate').modal('hide');
                addRow(response);             
            },
            error:function(error){
                console.log(error),
                alert("Error!!!");
            }
        });
        $('#frmAddCate')[0].reset();
    });
    function addRow(response){
        var parent_id="";
        var cate_array = response.cate;
        var parent_cate_array = response.parent_cate;
        parent_cate_array.forEach(function(parent_value){
            if(cate_array.parent_id == 0){
                parent_id = "It's parent";var row = '<tr class="odd gradeX" align="center" id="post" >'+
                '<td>'+cate_array.name+'</td>'+
                '<td>'+cate_array.keywords+'</td>'+
                '<td><p class="nameparent">'+parent_id+'</p></td>'+
                '<td>'+'<a class="show-modal btn btn-info btn-sm" data-id="'+cate_array.id+'" data-name="'+cate_array.name+'" data-keywords="'+cate_array.keywords+'" data-parent_id="'+parent_id+'" ><i class="fa fa-eye"></i></a>'+
                '</td>'+'</tr>';
                $('#resultforajax').append(row);   
            }
            if(cate_array.parent_id == parent_value.id){
                parent_id = parent_value.name;
                var row = '<tr class="odd gradeX" align="center" id="post" >'+
                '<td>'+cate_array.name+'</td>'+
                '<td>'+cate_array.keywords+'</td>'+
                '<td><p class="nameparent">'+parent_id+'</p></td>'+
                '<td>'+'<a class="show-modal btn btn-info btn-sm" data-id="'+cate_array.id+'" data-name="'+cate_array.name+'" data-keywords="'+cate_array.keywords+'" data-parent_id="'+parent_id+'" ><i class="fa fa-eye"></i></a>'+
                '</td>'+'</tr>';
                $('#resultforajax').append(row);               
            }
        });   
    }
    //Update managercate
    $("#dataTables-example").on('click','.edit-modal',function(){    
        $('#idEditCate').val($(this).data('id'));
        $('#sltEditParent').val($(this).data('parent_id'));
        $('#txtEditCateName').val($(this).data('name'));
        $('#txtEditKeywords').val($(this).data('keywords'));
        $('#modalEditCate').modal('show');
    });
    $('#frmEditCate').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url: "http://localhost:8080/Laravel/EnglishCenter/public/admin/cate/catemanager-update",
            type: "POST",
            data: $('#frmEditCate').serialize(),
            success:function(response){               
                $('#modalEditCate').modal('hide'); 
                alert(response);
                console.log(response);            
            },
            error:function(error){
                console.log(error),
                alert("Error!!!");
            }
        });
    });
});


