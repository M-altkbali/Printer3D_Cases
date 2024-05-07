/********************************************************* header ***********************************************************/
window.addEventListener("scroll", function () {
    var header = document.querySelector("nav");
    header.classList.toggle("sticky", window.scrollY > 0);
    header.css({
        "box-shadow": "0 0 10px rgba(0, 0, 0, 0.5)"
    }, window.scrollY > 0);
});


/*************************************************** slider ***********************************************************/
// var myIndex = 0;
// carousel();

// function carousel() {
//     var i;
//     var x = document.getElementsByClassName("mySlides");
//     for (i = 0; i < x.length; i++) {
//         x[i].style.display = "none";
//     }
//     myIndex++;
//     if (myIndex > x.length) {
//         myIndex = 1
//     }
//     x[myIndex - 1].style.display = "block";
//     setTimeout(carousel, 5000);
// }

/************************************************************* add row *************************************************************/
// $(document).ready(function () {
//     $(".btn_add").click(function () {
//         $(".table").append(
//             '<tr><td><input type="text"></td><td><div><input type="checkbox" id="upp"><label for="upp">upper</label></div><div><input type="checkbox" id="low"><label for="low">lower</label></div></td><td><button><i class="fas fa-check-circle"></i></button></td><td></td><td></td><td></td><td></td><td></td></tr>'
//         );
//     });

//     //button down
//     $(".btn_add").mouseenter(function () {
//         $(this).css({
//             "border-bottom": "0px solid #9b2a00",
//             "margin": "2px 0 0 0"
//         });
//     });
//     $(".btn_add").mouseout(function () {
//         $(this).css({
//             "border-bottom": "4px solid #9b2a00",
//             "margin": "0px 0 0 0"
//         });
//     });
// });




var checkbox = document.querySelector('input[name=mode]');

checkbox.addEventListener('change', function () {
    if (this.checked) {
        trans()
        document.documentElement.setAttribute('data-theme', 'light')
    } else {
        trans()
        document.documentElement.setAttribute('data-theme', 'dark')
    }
})

let trans = () => {
    document.documentElement.classList.add('transition');
    window.setTimeout(() => {
        document.documentElement.classList.remove('transition');
    }, 1000)
}


/********************************************** Filter table********************************************************/
function myFunction() {
    var input, filter, table, tr, td, cell, i, j;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 1; i < tr.length; i++) {
        // Hide the row initially.
        tr[i].style.display = "none";

        td = tr[i].getElementsByTagName("td");
        for (var j = 0; j < td.length; j++) {
            cell = tr[i].getElementsByTagName("td")[j];
            if (cell) {
                if (cell.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    break;
                }
            }
        }
    }
}

// next and prev button


  function show() { 
      var item = myItemObjectArray[currentItemIndex];
      document.getElementById("curidx").innerHTML=item.itemId+":"+item.itemName
      document.getElementById("previous").disabled=currentItemIndex<=0;
      document.getElementById("next").disabled=currentItemIndex>=myItemObjectArray.length-1;
      
    }

    var myItemObjectArray = new Array();
    var currentItemIndex = 5;
    window.onload=function() {
      document.getElementById("previous").onclick=function() {
        currentItemIndex--;
        if (currentItemIndex<=0) {
          currentItemIndex=0;
        }
        show();       
      }
      document.getElementById("next").onclick=function() {
        currentItemIndex++;
        if (currentItemIndex>=myItemObjectArray.length-1) {
          currentItemIndex=myItemObjectArray.length-1;
        }
        show();       
      }
      for(i=0;i<10;i++) {
        var ItemCatalog = new Object();
        ItemCatalog.itemId = i;
        ItemCatalog.itemName = "a"+i;
        myItemObjectArray.push(ItemCatalog);
      }
      show();
    }





    $(document).ready(function() {

    //update to save
    $(".resin_type_c").css("display", "none");
    $(".nisting_c").css("display", "none");
    $(".printing_c").css("display", "none");
    $(".finishing_c").css("display", "none");
    $(".light_cure_c").css("display", "none");
    $(".ready_c").css("display", "none");

    $(".resin_type_nc").css("display", "none");
    $(".nisting_nc").css("display", "none");
    $(".printing_nc").css("display", "none");
    $(".finishing_nc").css("display", "none");
    $(".light_cure_nc").css("display", "none");
    $(".ready_nc").css("display", "none");

    $(".btn_upd").click(function() {



        $(".btn_upd").css("display", "none");
        $(".btn_del").css("display", "none");
        $(".btn_save_update").css("display", "flex");



        $(".resin_type_i").css("display", "none");
        $(".nisting_i").css("display", "none");
        $(".printing_i").css("display", "none");
        $(".finishing_i").css("display", "none");
        $(".light_cure_i").css("display", "none");
        $(".ready_i").css("display", "none");

        $(".resin_type_n").css("display", "none");
        $(".nisting_n").css("display", "none");
        $(".printing_n").css("display", "none");
        $(".finishing_n").css("display", "none");
        $(".light_cure_n").css("display", "none");
        $(".ready_n").css("display", "none");


        $(".resin_type_c").css("display", "block");
        $(".nisting_c").css("display", "block");
        $(".printing_c").css("display", "block");
        $(".finishing_c").css("display", "block");
        $(".light_cure_c").css("display", "block");
        $(".ready_c").css("display", "block");

        $(".resin_type_nc").css("display", "block");
        $(".nisting_nc").css("display", "block");
        $(".printing_nc").css("display", "block");
        $(".finishing_nc").css("display", "block");
        $(".light_cure_nc").css("display", "block");
        $(".ready_nc").css("display", "block");

    });

    // display user
    $(".cont_user").hide();
    $(".fa-user").click(function() {

        $(".cont_user").fadeToggle();

    });


    $('.btn-close').click(function() {
        // $('.modal').css('display', 'none');
        $('.modal').slideUp();
    });


});
window.setTimeout(function() {
    window.location.reload();
}, 120000);