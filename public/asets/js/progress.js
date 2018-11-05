$(document).ready(function(){
    /*$('#qty_input').prop('disabled', true);*/
    $('#plus-btn').click(function(){
        $('#qty_input').val(parseInt($('#qty_input').val()) + 1 );
    });
    $('#minus-btn').click(function(){
        $('#qty_input').val(parseInt($('#qty_input').val()) - 1 );
        if ($('#qty_input').val() == 0) {
            $('#qty_input').val(1);
        }
    });
	
	/*$('#vechl_input').prop('disabled', true);*/
    $('#vechlplus-btn').click(function(){
        $('#vechl_input').val(parseInt($('#vechl_input').val()) + 1 );
    });
    $('#vechlminus-btn').click(function(){
        $('#vechl_input').val(parseInt($('#vechl_input').val()) - 1 );
        if ($('#vechl_input').val() == 0) {
            $('#vechl_input').val(1);
        }
    });

    $('#hidethis').click(function () {
        $('#tableShow').show()
    })
});
$(document).ready(function(){
$('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
    $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
    $(document).ready(function() {
        $('#editable-datatable').DataTable();
    });
});
function goVasalelavel() {
	document.getElementById('labelvachel').style.display ='none';
}
function shoModel() {
	document.getElementById('vechDetails').style.display ='block';
}
function goVasale() {
	document.getElementById('tableShow').style.display ='none';
}
function showVasale() {
	document.getElementById('vasale-tbale').style.display ='block';
}
function changeWidth() {
	document.getElementById('progresss1').style.width = "20%"
}
function changeColorbg() {
	document.getElementById('progresss2').style.width = "20%"
}
function changeColorbg1() {
	document.getElementById('progresss3').style.width = "20%"
}
function changeColorbg2() {
	document.getElementById('progresss4').style.width = "20%"
}
function hideticTable() {
		$('#table').addClass('hide_table').removeClass('show-tab')
	}
	function addTds() {
		$('.other-wind-hidden').addClass('className').removeClass('other-wind-hidden')
	}
	function addHydro() {
		$('.other-hydro-hidden').addClass('hydro-other').removeClass('other-hydro-hidden')
	}
	function addBiomass(){
		$('.other-biomas-hidden').addClass('biomass-other').removeClass('other-biomas-hidden')
	}
	function addTidal(){
		$('.other-tidal-hidden').addClass('tidal-other').removeClass('other-tidal-hidden')
	}
	function addNuclear(){
		$('.other-nuclear-hidden').addClass('nuclear-other').removeClass('other-nuclear-hidden')
	}
	function disableMove(){
	$( ".disable" ).click(function( event ) {
	  event.preventDefault();
	});
	}

        /* Latest compiled and minified JavaScript included as External Resource */
        function showNext() {
            document.getElementById('hidethis').style.display ='block';
        }
        function show1(){
            document.getElementById('myDIV').style.display ='block';
        }
        function show2(){
            document.getElementById('div1').style.display = 'block';
        }
        var elem = document.getElementById("sleAttached");
        elem.onchange = function(){
            var hiddenDiv = document.getElementById("myDIV");
            var bgDiv = document.getElementById("progresss4");
            hiddenDiv.style.display = (this.value == "") ? "none":"block";
            bgDiv.style.background = "#29627e";

        };
        function typeSelectCheck(nameSelect){
            if(nameSelect.value){
                var optionElements = document.getElementsByClassName('prettyprint');
                for(var i=0; i < optionElements.length; i++){
                    //if the class contains the selected value, then show it, else hide it
                    optionElements[i].style.display = optionElements[i].classList.contains(nameSelect.value)?'block':'none';
                }
            }
        }
        function toggle(id){
            var element = document.getElementById(id);
            if(element.style.display=="none"){
                element.style.display="block";
            }else{
                element.style.display="block";
            }
        }
        function admSelectCheck(nameSelect){
            if(nameSelect){
                admOptionValue = document.getElementById("Own").value;
                if(admOptionValue == nameSelect.value){
                    document.getElementById("admDivCheck").style.display = "block";
                }
                else{
                    document.getElementById("admDivCheck").style.display = "none";
                }
            }
            else{
                document.getElementById("admDivCheck").style.display = "none";
            }
        }

