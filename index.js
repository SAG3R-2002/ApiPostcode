function zoekinapi(){
    let postcode = $("#postcode").val();
    let huisnr = $("#huisnr").val();
    //alert(postcode + " " + huisnr);
    if (postcode != "" && huisnr != ""){
    $.ajax({
        url: "gebruikapi.php",
        data: {
            postc: postcode,
            nr: huisnr
        },
        dataType: 'json',
        type: 'post',
        success: function (data){
            //plaats en straatnaam in veld id straatplaatsnaam
            $("#straatenplaatsnaam").val(data);
        },
        error: function (){
            alert("foutmelding" + postcode + huisnr)
        }

    })
    }
}