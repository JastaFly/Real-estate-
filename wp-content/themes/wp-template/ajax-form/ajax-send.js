let send_form = function() {
    let space = document.getElementById('acf-field_5e00bf9502acb').value;
    let price = document.getElementById('acf-field_5e00c0eb02acc').value;
    let adress = document.getElementById('acf-field_5e00c2fd53bf2').value;
    let live_space = document.getElementById('acf-field_5e00c64d576e8').value;
    let flor = document.getElementById('acf-field_5e00c9b770280').value;
    let image = document.getElementsByName('acf[field_5e00cacaa614f]')[0].value;
    let type = document.getElementById('acf-field_5e00cbad09606').value;
    let city = document.getElementById('acf-field_5e04c55723050').value;
    let main_link = document.location.protocol + '//' + document.location.host + '/';
    let data = {
        'acf[field_5e00bf9502acb]': space,
        'acf[field_5e00c0eb02acc]': price,
        'acf[field_5e00c2fd53bf2]': adress,
        'acf[field_5e00c64d576e8]': live_space,
        'acf[field_5e00cacaa614f]': image,
        'acf[field_5e00cbad09606]': type,
        'acf[field_5e04c55723050]': city
    }
   $.ajax({                                   
       url: main_link + 'wp-content/themes/wp-template/ajax-form/db-logic.php',                               
        type: "POST", 
        data: data,  
        dataType: "html",
        success: function(result) { 
            $('.modal-shadow').slideToggle(300);
            $('.modal-window').slideToggle(300);
            /*
            let modal_shadow = document.getElementsByClassName('modal-shadow');
            modal_shadow[0].style.display = 'block';
            let modal_windows = document.getElementsByClassName('modal-window');
            modal_windows[0].style.display = 'block';
            let post_link = document.getElementById('post_link');
            post_link.setAttribute('href', result);
            console.log(result); */
       }
    }); 
}
