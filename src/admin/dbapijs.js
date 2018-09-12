function users(){
    console.log("here");
    // users table connect
    $('#users-table').DataTable( {
        "processing": true,
        "serverSide": true,
        "paging": false,
        "ajax": "admin/users/server_processing.php",
        language: {
            "sProcessing":   "Обработка на резултатите...",
            "sLengthMenu":   "Показване на _MENU_ резултата",
            "sZeroRecords":  "Няма намерени резултати",
            "sInfo":         "Показване на резултати от _START_ до _END_ от общо _TOTAL_",
            "sInfoEmpty":    "Показване на резултати от 0 до 0 от общо 0",
            "sInfoFiltered": "(филтрирани от общо _MAX_ резултата)",
            "sInfoPostFix":  "",
            "sSearch":       "Търсене:",
            "sUrl":          "",
            "oPaginate": {
                "sFirst":    "Първа",
                "sPrevious": "Предишна",
                "sNext":     "Следваща",
                "sLast":     "Последна"
            }
        },
        select: {
            style: 'single'
        }
    } );
    // end user table connect

    // row select and button disable
    var table = $('#users-table').DataTable();

    $('#users-table tbody').on( 'click', 'tr', function () {
        console.log( table.row( this ).data() );
        if ( $(this).hasClass('selected') ) { 
            $("#editModalBt").addClass("disabled");
            $("#deleteModalBt").addClass("disabled");
            } 
        else{
            $("#editModalBt").removeClass("disabled");
            $("#deleteModalBt").removeClass("disabled");
        }
    } );

    $('#deleteModalBt').click( function () {
        //Wzimane na ID-to selectnatiq element
        if (window.confirm("Сигурни ли сте, че искате да изтриете?")){
            var userId = table.row('.selected').data()[0];
     
            //Tuk shte pusnem ajax zaqwka za iztriwane na elementa.
             // Fire off the request to /form.php
            
            request = $.ajax({
                url: 'admin/users/adminDelete.php',
                type: "POST",
                data: {id:userId}
            })
            table.row('.selected').remove().draw( false );
        }
        
    });

    
    
    
// EVENT 1

$('#userModalAdd').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    action = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Операция - ' + 'Добавяне на администратор' );
    });



    //EVENT 2

    $('#userModalEdit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    action = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Операция - ' + 'Променяне на данни' );

    var userId = table.row('.selected').data()[0];
    var userName = table.row('.selected').data()[1];
    var password = table.row('.selected').data()[2];
    modal.find('#usernameEdit').val(userName);
    modal.find('#passwordEdit').val(password);
    modal.find('#idEdit').val(userId);
    });



    // SUBMIT FORM 1
    
    $("#submitFormAdd").on('click', function() {
        $("#modalFormAdd").submit();
    });


    //SUBMIT FORM 2
    $("#submitFormEdit").on('click', function() {
        $("#modalFormEdit").submit();
    });

    //FORM VALIDATION

    $("#modalFormAdd").validate({
        rules: {
            username:{
                required: true,
                minlength: 3
            },
            password:{
                required: true,
                minlength: 3
            }

        }

    });
    $("#modalFormEdit").validate({
        rules: {
            username:{
                required: true,
                minlength: 3
            },
            password:{
                required: true,
                minlength: 3
            }

        }

    });

}

function buildingType(){
    $('#bdType-table').DataTable( {
        "processing": true,
        "serverSide": true,
        "paging": false,
        "ajax": "admin/buildingType/bdType_server_processing.php",
        language: {
            "sProcessing":   "Обработка на резултатите...",
            "sLengthMenu":   "Показване на _MENU_ резултата",
            "sZeroRecords":  "Няма намерени резултати",
            "sInfo":         "Показване на резултати от _START_ до _END_ от общо _TOTAL_",
            "sInfoEmpty":    "Показване на резултати от 0 до 0 от общо 0",
            "sInfoFiltered": "(филтрирани от общо _MAX_ резултата)",
            "sInfoPostFix":  "",
            "sSearch":       "Търсене:",
            "sUrl":          "",
            "oPaginate": {
                "sFirst":    "Първа",
                "sPrevious": "Предишна",
                "sNext":     "Следваща",
                "sLast":     "Последна"
            }
        },
        select: {
            style: 'single'
        }
    } );
    // end user table connect

    // row select and button disable/enable
    var table = $('#bdType-table').DataTable();

    $('#bdType-table tbody').on( 'click', 'tr', function () {
        console.log( table.row( this ).data() );
        if ( $(this).hasClass('selected') ) { 
            $("#bdTypeeditModalBt").addClass("disabled");
            $("#bdTypedeleteModalBt").addClass("disabled");
            } 
        else{
            $("#bdTypeeditModalBt").removeClass("disabled");
            $("#bdTypedeleteModalBt").removeClass("disabled");
        }
    } );

    $('#bdTypedeleteModalBt').click( function () {
        //Wzimane na ID-to selectnatiq element
        if (window.confirm("Сигурни ли сте, че искате да изтриете?")){
            var bdTypeId = table.row('.selected').data()[0];
            //Tuk shte pusnem ajax zaqwka za iztriwane na elementa.
             // Fire off the request to /form.php
            
            request = $.ajax({
                url: 'admin/buildingType/bdTypeDelete.php',
                type: "POST",
                data: {id:bdTypeId}
            })
            table.row('.selected').remove().draw( false );
        }
       
    });

    
    
    
// EVENT ADD

$('#bdTypeModalAdd').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    action = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Операция - ' + 'Добавяне на тип на сграда' );
    });



    //EVENT Edit

    $('#bdTypeModalEdit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    action = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Операция - ' + 'Променяне на данни' );

    var id = table.row('.selected').data()[0];
    var bdType = table.row('.selected').data()[1];
    modal.find('#bdTypeidEdit').val(id);
    modal.find('#bdTypeEdit').val(bdType);
    });



    // SUBMIT FORM ADD
    
    $("#bdTypesubmitFormAdd").on('click', function() {
        $("#bdTypemodalFormAdd").submit();
    });


    //SUBMIT FORM EDIT
    $("#bdTypesubmitFormEdit").on('click', function() {
        $("#bdTypemodalFormEdit").submit();
    });

    //FORM VALIDATION

    $("#bdTypemodalFormAdd").validate({
        rules: {
            bdType:{
                required: true,
                minlength: 3
            }

        }

    });
    $("#bdTypemodalFormEdit").validate({
        rules: {
            bdType:{
                required: true,
                minlength: 3
            }

        }

    });
}

function areaType(){
    $('#arType-table').DataTable( {
        "processing": true,
        "serverSide": true,
        "paging": true,
        "ajax": "admin/areaType/arType_server_processing.php",
        language: {
            "sProcessing":   "Обработка на резултатите...",
            "sLengthMenu":   "Показване на _MENU_ резултата",
            "sZeroRecords":  "Няма намерени резултати",
            "sInfo":         "Показване на резултати от _START_ до _END_ от общо _TOTAL_",
            "sInfoEmpty":    "Показване на резултати от 0 до 0 от общо 0",
            "sInfoFiltered": "(филтрирани от общо _MAX_ резултата)",
            "sInfoPostFix":  "",
            "sSearch":       "Търсене:",
            "sUrl":          "",
            "oPaginate": {
                "sFirst":    "Първа",
                "sPrevious": "Предишна",
                "sNext":     "Следваща",
                "sLast":     "Последна"
            }
        },
        select: {
            style: 'single'
        }
    } );
    // end user table connect

    // row select and button disable
    var table = $('#arType-table').DataTable();

    $('#arType-table tbody').on( 'click', 'tr', function () {
        console.log( table.row( this ).data() );
        if ( $(this).hasClass('selected') ) { 
            $("#arTypeeditModalBt").addClass("disabled");
            $("#arTypedeleteModalBt").addClass("disabled");
            } 
        else{
            $("#arTypeeditModalBt").removeClass("disabled");
            $("#arTypedeleteModalBt").removeClass("disabled");
        }
    } );

    $('#arTypedeleteModalBt').click( function () {
        //Wzimane na ID-to selectnatiq element
        if (window.confirm("Сигурни ли сте, че искате да изтриете?")){
            var arTypeId = table.row('.selected').data()[0];
            //Tuk shte pusnem ajax zaqwka za iztriwane na elementa.
            // Fire off the request to /form.php
            
            request = $.ajax({
                url: 'admin/areaType/arTypeDelete.php',
                type: "POST",
                data: {id:arTypeId}
            })
            table.row('.selected').remove().draw( false );
         }
    });

    
    
    
// EVENT 1

$('#arTypeModalAdd').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    action = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Операция - ' + 'Добавяне на тип на имот' );
    });



    //EVENT 2

    $('#arTypeModalEdit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    action = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Операция - ' + 'Променяне на данни' );

    var id = table.row('.selected').data()[0];
    var arType = table.row('.selected').data()[1];
    modal.find('#arTypeidEdit').val(id);
    modal.find('#arTypeEdit').val(arType);
    });



    // SUBMIT FORM 1
    
    $("#arTypesubmitFormAdd").on('click', function() {
        $("#arTypemodalFormAdd").submit();
    });


    //SUBMIT FORM 2
    $("#arTypesubmitFormEdit").on('click', function() {
        $("#arTypemodalFormEdit").submit();
    });

    //FORM VALIDATION

    $("#arTypemodalFormAdd").validate({
        rules: {
            arType:{
                required: true,
                minlength: 3
            }

        }

    });
    $("#arTypemodalFormEdit").validate({
        rules: {
            arType:{
                required: true,
                minlength: 3
            }

        }

    });
}

function buildingLocation(){
    $('#bdLoc-table').DataTable( {
        "processing": true,
        "serverSide": true,
        "paging": true,
        "ajax": "admin/buildingLocation/bdLoc_server_processing.php",
        language: {
            "sProcessing":   "Обработка на резултатите...",
            "sLengthMenu":   "Показване на _MENU_ резултата",
            "sZeroRecords":  "Няма намерени резултати",
            "sInfo":         "Показване на резултати от _START_ до _END_ от общо _TOTAL_",
            "sInfoEmpty":    "Показване на резултати от 0 до 0 от общо 0",
            "sInfoFiltered": "(филтрирани от общо _MAX_ резултата)",
            "sInfoPostFix":  "",
            "sSearch":       "Търсене:",
            "sUrl":          "",
            "oPaginate": {
                "sFirst":    "Първа",
                "sPrevious": "Предишна",
                "sNext":     "Следваща",
                "sLast":     "Последна"
            }
        },
        select: {
            style: 'single'
        }
    } );
   
    // end user table connect

    // row select and button disable
    var table = $('#bdLoc-table').DataTable();

    $('#bdLoc-table tbody').on( 'click', 'tr', function () {
        console.log( table.row( this ).data() );
        if ( $(this).hasClass('selected') ) { 
            $("#bdLoceditModalBt").addClass("disabled");
            $("#bdLocdeleteModalBt").addClass("disabled");
            } 
        else{
            $("#bdLoceditModalBt").removeClass("disabled");
            $("#bdLocdeleteModalBt").removeClass("disabled");
        }
    } );

    $('#bdLocdeleteModalBt').click( function () {
        //Wzimane na ID-to selectnatiq element
        if (window.confirm("Сигурни ли сте, че искате да изтриете?")) { 
            var bdLocId = table.row('.selected').data()[0];
            //Tuk shte pusnem ajax zaqwka za iztriwane na elementa.
             // Fire off the request to /form.php
            
            request = $.ajax({
                url: 'admin/buildingLocation/bdLocDelete.php',
                type: "POST",
                data: {id:bdLocId}
            })
            table.row('.selected').remove().draw( false );
          }
      
    });

    
    
    
// EVENT 1

$('#bdLocModalAdd').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    action = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Операция - ' + 'Добавяне на локация на сграда' );
    });



    //EVENT 2

    $('#bdLocModalEdit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    action = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Операция - ' + 'Променяне на данни' );

    var id = table.row('.selected').data()[0];
    var bdCity = table.row('.selected').data()[1];
    var bdLoc = table.row('.selected').data()[2];
    modal.find('#bdLocidEdit').val(id);
    modal.find('#bdCityEdit').val(bdCity);
    modal.find('#bdLocEdit').val(bdLoc);
    });



    // SUBMIT FORM 1
    
    $("#bdLocsubmitFormAdd").on('click', function() {
        $("#bdLocmodalFormAdd").submit();
    });


    //SUBMIT FORM 2
    $("#bdLocsubmitFormEdit").on('click', function() {
        $("#bdLocmodalFormEdit").submit();
    });

    
    //FORM VALIDATION

    $("#bdLocmodalFormAdd").validate({
        rules: {
            bdCity:{
                required: true,
                minlength: 3
            },
            bdLoc:{
                required: true,
                minlength: 3
            }

        }

    });
    $("#bdLocmodalFormEdit").validate({
        rules: {
            bdCity:{
                required: true,
                minlength: 3
            },
            bdLoc:{
                required: true,
                minlength: 3
            }

        }

    });
}

function buildings(){
    $('#bd-table').DataTable( {
        "processing": true,
        "serverSide": true,
        "paging": true,
        "ajax": "admin/buildings/bd_server_processing.php",
        language: {
            "sProcessing":   "Обработка на резултатите...",
            "sLengthMenu":   "Показване на _MENU_ резултата",
            "sZeroRecords":  "Няма намерени резултати",
            "sInfo":         "Показване на резултати от _START_ до _END_ от общо _TOTAL_",
            "sInfoEmpty":    "Показване на резултати от 0 до 0 от общо 0",
            "sInfoFiltered": "(филтрирани от общо _MAX_ резултата)",
            "sInfoPostFix":  "",
            "sSearch":       "Търсене:",
            "sUrl":          "",
            "oPaginate": {
                "sFirst":    "Първа",
                "sPrevious": "Предишна",
                "sNext":     "Следваща",
                "sLast":     "Последна"
            }
        },
        select: {
            style: 'single'
        }
    } );
   
    // end user table connect

    // row select and button disable
    var table = $('#bd-table').DataTable();

    $('#bd-table tbody').on( 'click', 'tr', function () {
        console.log( table.row( this ).data() );
        if ( $(this).hasClass('selected') ) { 
            $("#bdeditModalBt").addClass("disabled");
            $("#bddeleteModalBt").addClass("disabled");
            } 
        else{
            $("#bdeditModalBt").removeClass("disabled");
            $("#bddeleteModalBt").removeClass("disabled");
        }
    } );

    $('#bddeleteModalBt').click( function () {
        //Wzimane na ID-to selectnatiq element
        if (window.confirm("Сигурни ли сте, че искате да изтриете?")) { 
            var bdId = table.row('.selected').data()[0];
            //Tuk shte pusnem ajax zaqwka za iztriwane na elementa.
             // Fire off the request to /form.php
            
            request = $.ajax({
                url: 'admin/buildings/bdDelete.php',
                type: "POST",
                data: {id:bdId}
            })
            table.row('.selected').remove().draw( false );
          }
      
    });

    
    
    
// EVENT 1

$('#bdModalAdd').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    action = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Операция - ' + 'Добавяне на сграда' );
    });



    //EVENT 2
    

    $('#bdModalEdit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    action = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Операция - ' + 'Променяне на данни' );

    var bdId = table.row('.selected').data()[0];
    var bdType = table.row('.selected').data()[1];
    var bdfnDate = table.row('.selected').data()[2];
    var bdAddDate = table.row('.selected').data()[3];
    var bdPrice = table.row('.selected').data()[4];
    var bdPriceSM = table.row('.selected').data()[5];
    var bdSM = table.row('.selected').data()[6];
    var bdAct16 = table.row('.selected').data()[7];
    var bdCity = table.row('.selected').data()[8];
    var bdLoc = table.row('.selected').data()[9];
    var bdAddress = table.row('.selected').data()[10];
    var bdSaleRent = table.row('.selected').data()[11];
   var bMainImg = table.row('.selected').data()[12];
    var bOtherImg = table.row('.selected').data()[13];
    var bDescription = table.row('.selected').data()[14];

    $("#bCityEdit > option").each(function() {
        
        if((bdCity.localeCompare(this.text))==0)
        {
           modal.find('#bCityEdit').val($(this).val());
        }
    });

    $("#bLocEdit > option").each(function() {
        
        if((bdLoc.localeCompare(this.text))==0)
        {
           modal.find('#bLocEdit').val($(this).val());
        }
    });

    $("#bdType > option").each(function() {
        
        if((bdType.localeCompare(this.text))==0)
        {
           modal.find('#bdType').val($(this).val());
        }
    });
    $("#bSaleRent > option").each(function() {
        
        if((bdSaleRent.localeCompare(this.text))==0)
        {
           modal.find('#bSaleRent').val($(this).val());
        }
    });
    
    $("#bMainImageEdit").append(bMainImg);
    $("#bOtherImageEdit").append(bOtherImg);
   
    var fnDateArr = bdfnDate.split("-");
    modal.find('#bdidEdit').val(bdId);
    //modal.find('#bdType').val(bdType);
    modal.find('#bdYear').val(fnDateArr[0]);
    modal.find('#bdMonth').val(Number(fnDateArr[1]));
    modal.find('#bdAddDateEdit').val(bdAddDate);
    modal.find('#act16').val(bdAct16);
    modal.find('#bAddressAdd').val(bdAddress);
    modal.find('#bDescription').val(bDescription);
    modal.find('#bdPriceEdit').val(bdPrice);
    modal.find('#bdPriceSMEdit').val(bdPriceSM);
    modal.find('#bdSMEdit').val(bdSM);
    
    });

    $('#bdModalEdit').on('hide.bs.modal', function (event) {
    $("#bMainImageEdit").empty()
    $("#bOtherImageEdit").empty() 
    });



    // SUBMIT FORM 1
    
    $("#bdsubmitFormAdd").on('click', function() {
        $("#bdmodalFormAdd").submit();
    });


    //SUBMIT FORM 2
    $("#bdsubmitFormEdit").on('click', function() {
        $("#bdmodalFormEdit").submit();
    });

    
    //FORM VALIDATION

    $("#bdmodalFormAdd").validate({
        rules: {
            bAddress:{
                required: true,
            },
            bMainImg:{
                required: true,
            },
            bDescription:{
                required: true,
            },
            bdPrice:{
                required: true,
            },
            bdPriceSM:{
                required: true,
            },
            bdSM:{
                required: true,
            }

        }

    });
    $("#bdmodalFormEdit").validate({
        rules: {
            bAddress:{
                required: true,
            },
            bDescription:{
                required: true,
            },
            bdPrice:{
                required: true,
            },
            bdPriceSM:{
                required: true,
            },
            bdSM:{
                required: true,
            }

        }

    });
}

function areas(){
    $('#ar-table').DataTable( {
        "processing": true,
        "serverSide": true,
        "paging": true,
        "ajax": "admin/areas/ar_server_processing.php",
        language: {
            "sProcessing":   "Обработка на резултатите...",
            "sLengthMenu":   "Показване на _MENU_ резултата",
            "sZeroRecords":  "Няма намерени резултати",
            "sInfo":         "Показване на резултати от _START_ до _END_ от общо _TOTAL_",
            "sInfoEmpty":    "Показване на резултати от 0 до 0 от общо 0",
            "sInfoFiltered": "(филтрирани от общо _MAX_ резултата)",
            "sInfoPostFix":  "",
            "sSearch":       "Търсене:",
            "sUrl":          "",
            "oPaginate": {
                "sFirst":    "Първа",
                "sPrevious": "Предишна",
                "sNext":     "Следваща",
                "sLast":     "Последна"
            }
        },
        select: {
            style: 'single'
        }
    } );
   
    // end user table connect

    // row select and button disable
    var table = $('#ar-table').DataTable();

    $('#ar-table tbody').on( 'click', 'tr', function () {
        console.log( table.row( this ).data() );
        if ( $(this).hasClass('selected') ) { 
            $("#areditModalBt").addClass("disabled");
            $("#ardeleteModalBt").addClass("disabled");
            } 
        else{
            $("#areditModalBt").removeClass("disabled");
            $("#ardeleteModalBt").removeClass("disabled");
        }
    } );

    $('#ardeleteModalBt').click( function () {
        //Wzimane na ID-to selectnatiq element
        if (window.confirm("Сигурни ли сте, че искате да изтриете?")) { 
            var arId = table.row('.selected').data()[0];
            //Tuk shte pusnem ajax zaqwka za iztriwane na elementa.
             // Fire off the request to /form.php
            
            request = $.ajax({
                url: 'admin/areas/arDelete.php',
                type: "POST",
                data: {id:arId}
            })
            table.row('.selected').remove().draw( false );
          }
      
    });

    
    
    
// EVENT 1

$('#arModalAdd').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    action = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Операция - ' + 'Добавяне на сграда' );
    });



    //EVENT 2
    

    $('#arModalEdit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    action = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Операция - ' + 'Променяне на данни' );

    var arId = table.row('.selected').data()[0];
    var arBd = table.row('.selected').data()[1];
    var arType = table.row('.selected').data()[2];
    var arPrice = table.row('.selected').data()[5];
    var arPriceSM = table.row('.selected').data()[6];
    var arSM = table.row('.selected').data()[7];
    var arFloor = table.row('.selected').data()[8];
    var arAddress = table.row('.selected').data()[12];
    var arSaleRent = table.row('.selected').data()[13];
   var arMainImg = table.row('.selected').data()[14];
    var arOtherImg = table.row('.selected').data()[15];
    var arDescription = table.row('.selected').data()[16];


    $("#arTp > option").each(function() {
        
        if((arType.localeCompare(this.text))==0)
        {
           modal.find('#arTp').val($(this).val());
        }
    });
    $("#arSaleRent > option").each(function() {
        
        if((arSaleRent.localeCompare(this.text))==0)
        {
           modal.find('#arSaleRent').val($(this).val());
        }
    });
    
    $("#arMainImageEdit").append(arMainImg);
    $("#arOtherImageEdit").append(arOtherImg);
   
    modal.find('#aridEdit').val(arId);
    modal.find('#arBd').val(arBd);
    modal.find('#arPriceEdit').val(arPrice);
    modal.find('#arPriceSMEdit').val(arPriceSM);
    modal.find('#arSMEdit').val(arSM);
    modal.find('#arFloor').val(arFloor);
    modal.find('#arAddressEdit').val(arAddress);
    modal.find('#arDescriptionEdit').val(arDescription);
    
    });

    $('#arModalEdit').on('hide.bs.modal', function (event) {
    $("#arMainImageEdit").empty()
    $("#arOtherImageEdit").empty() 
    });



    // SUBMIT FORM 1
    
    $("#arsubmitFormAdd").on('click', function() {
        $("#armodalFormAdd").submit();
    });


    //SUBMIT FORM 2
    $("#arsubmitFormEdit").on('click', function() {
        $("#armodalFormEdit").submit();
    });

    
    //FORM VALIDATION

    $("#armodalFormAdd").validate({
        rules: {
            arAddress:{
                required: true,
            },
            arMainImg:{
                required: true,
            },
            arDescription:{
                required: true,
            },
            arPrice:{
                required: true,
            },
            arPriceSM:{
                required: true,
            },
            arSM:{
                required: true,
            }

        }

    });
    $("#armodalFormEdit").validate({
        rules: {
            arAddress:{
                required: true,
            },
            arDescription:{
                required: true,
            },
            arPrice:{
                required: true,
            },
            arPriceSM:{
                required: true,
            },
            arSM:{
                required: true,
            }

        }

    });
}


function saleTable(){
    $('#sale-table').DataTable( {
        "bProcessing": true,
        "sAjaxSource": "admin/display/sale_server_processing.php",
        "aoColumns": [
        { mData: 'Empid' } ,
                    { mData: 'Name' },
                    { mData: 'Salary' }
            ],
        language: {
            "sProcessing":   "Обработка на резултатите...",
            "sLengthMenu":   "Показване на _MENU_ резултата",
            "sZeroRecords":  "Няма намерени резултати",
            "sInfo":         "Показване на резултати от _START_ до _END_ от общо _TOTAL_",
            "sInfoEmpty":    "Показване на резултати от 0 до 0 от общо 0",
            "sInfoFiltered": "(филтрирани от общо _MAX_ резултата)",
            "sInfoPostFix":  "",
            "sSearch":       "Търсене:",
            "sUrl":          "",
            "oPaginate": {
                "sFirst":    "Първа",
                "sPrevious": "Предишна",
                "sNext":     "Следваща",
                "sLast":     "Последна"
            }
        },
      
    } );
    $('#buildingForm').hide();
    // row select and button disable
    var table = $('#sale-table').DataTable();
    //hide unhide forms
    $(document).on('change', '#arOrBdSale', function(e) {
        if((this.options[e.target.selectedIndex].text.localeCompare("Сгради"))==0)
        {
            $('#areaForm').hide();
            $('#buildingForm').show();
        }
        else if((this.options[e.target.selectedIndex].text.localeCompare("Имоти"))==0)
        {
            $('#buildingForm').hide();
            $('#areaForm').show();
        }
    });
   

}