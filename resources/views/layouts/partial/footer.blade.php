  {{--<footer class="footer">--}}

            {{--© 2018 Eliteadmin by themedesigner.in--}}

        {{--</footer>--}}

        {{--<!-- ============================================================== -->--}}

        {{--<!-- End footer -->--}}

        {{--<!-- ============================================================== -->--}}

    {{--</div>--}}

    <!-- ============================================================== -->

    <!-- End Wrapper -->

    <!-- ============================================================== -->

    <!-- ============================================================== -->

    <!-- All Jquery -->

    <!-- ============================================================== -->

    <script src="{{asset('/')}}asets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<!--<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
     Bootstrap tether Core JavaScript -->

    <script src="{{asset('/')}}asets/node_modules/popper/popper.min.js"></script>

    <script src="{{asset('/')}}asets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- slimscrollbar scrollbar JavaScript -->

    <script src="{{asset('/')}}dist/js/perfect-scrollbar.jquery.min.js"></script>

    <!--Wave Effects -->

    <script src="{{asset('/')}}dist/js/waves.js"></script>

    <!--Menu sidebar -->

    <script src="{{asset('/')}}dist/js/sidebarmenu.js"></script>

    <!--stickey kit -->

    <script src="{{asset('/')}}asets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>

    <script src="{{asset('/')}}asets/node_modules/sparkline/jquery.sparkline.min.js"></script>

    <!--Custom JavaScript -->

    <script src="{{asset('/')}}dist/js/custom.min.js"></script>
    

    <script src="{{asset('/')}}asets/js/progress.js"></script>
    <script src="{{asset('/')}}asets/js/selectcounty-map.js"></script>
    <script src="{{asset('/')}}asets/js/year-select.js"></script>

    <!-- ============================================================== -->

    <!-- This page plugins -->

    <!-- ============================================================== -->

    <script src="{{asset('/')}}asets/node_modules/switchery/dist/switchery.min.js"></script>

    <script src="{{asset('/')}}asets/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"></script>

    <script src="{{asset('/')}}asets/node_modules/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

    <script src="{{asset('/')}}asets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

    <script src="{{asset('/')}}asets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>

    <script src="{{asset('/')}}asets/node_modules/dff/dff.js" type="text/javascript"></script>

    <script type="text/javascript" src="{{asset('/')}}asets/assets/node_modules/multiselect/js/jquery.multi-select.js"></script>



<script src="{{asset('/')}}asets/node_modules/countrypicker/countrypicker.min.js"></script>
<!--<script src="http://maps.google.com/maps?file=api&amp;v=2.x&amp;key=AIzaSyDxexZDrPusqY36snWHfW7gBrzozeNWUYE" type="text/javascript"></script>-->
    <script src="{{asset('/')}}asets/node_modules/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{asset('/')}}asets/node_modules/vectormap/jquery-jvectormap-world-mill-en.js"></script>

   <!-- <script src="{{asset('/')}}asets/node_modules/vectormap/jvectormap.custom.js"></script>-->


<script src=".{{asset('/')}}asets/node_modules/moment/moment.js"></script>

<script type="text/javascript" src="{{asset('/')}}asets/node_modules/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.js"></script>
<script type="text/javascript">

            $(document).ready(function(e) {
                $('.yearselect').yearselect();

                $('.yrselectdesc').yearselect({step: 5, order: 'desc'});
                $('.yrselectasc').yearselect({order: 'asc'});
            });
        </script> 
<!--<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>-->

<script>


function sTnext(){
	document.getElementById("entry-main-ind").style.display = "block";
	document.getElementById("topper-st").style.display = "none";
}
            function yesnoCheck(that) {
                if (that.value == 161) {
                    document.getElementById("ifYes").style.display = "block";
                    document.getElementById("hiddenBox").style.display = "none";
					document.getElementById("hiddenBoxtext").that.value = "United States";

                }else if(that.value != "161"){
                    document.getElementById("ifYes").style.display = "none";
                    document.getElementById("hiddenBox").style.display = "block";
                } else{
                    document.getElementById("ifYes").style.display = "none";
                    document.getElementById("hiddenBox").style.display = "none";
                }

            }

            function showColorBox() {

                var x = document.getElementById("ifYes");



                var myDiv = document.getElementById("hiddenBox");

                if (x.value.length == 5 )

                {

                    myDiv.style.display = "block";

                } else {

                    myDiv.style.display = "none";

                }
            }

/*var 
$('.dynamics').each(function(i){
     $(this).addClass('thumb' + (i+1));
});*/
var $addingClass = $('.dynamics');
$('.dynamics').each(function(i){
     $(this).addClass('thumb' + (i+1));   // Add Class
     $(this).attr('id' , 'thumb' + (i+1));  // Set id for each div 
});
$('.dynamics').each(function(i){
     $(this).addClass('thumb' + (i+1));   // Add Class
     $(this).attr('id' , 'thumb' + (i+1));  // Set id for each div 
});

var $TABLE = $('#table');
var $BTN = $('#export-btn');
var $EXPORT = $('#export');

$('.table-add').click(function () {
  var $clone = $TABLE.find('tr.hide').clone(true).removeClass('hide table-line');
  $TABLE.find('table').append($clone);
  
});

$('.table-remove').click(function () {
  $(this).parents('tr').detach();
});

$('.table-up').click(function () {
  var $row = $(this).parents('tr');
  if ($row.index() === 1) return; // Don't go above the header
  $row.prev().before($row.get(0));
});

$('.table-down').click(function () {
  var $row = $(this).parents('tr');
  $row.next().after($row.get(0));
});

// A few jQuery helpers for exporting only
jQuery.fn.pop = [].pop;
jQuery.fn.shift = [].shift;

$BTN.click(function () {
  var $rows = $TABLE.find('tr:not(:hidden)');
  var headers = [];
  var data = [];

  // Get the headers (add special header logic here)
  $($rows.shift()).find('th:not(:empty)').each(function () {
    headers.push($(this).text().toLowerCase());
  });

  // Turn all existing rows into a loopable array
  $rows.each(function () {
    var $td = $(this).find('td');
    var h = {};

    // Use the headers from earlier to name our hash keys
    headers.forEach(function (header, i) {
      h[header] = $td.eq(i).text();
    });

    data.push(h);
  });

  // Output the result
  $EXPORT.text(JSON.stringify(data));
});
</script>
<script type="text/javascript">

    $(function() {
       /* //editables 
        $('#username').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username'
        });
		

        $('#firstname').editable({
            validate: function(value) {
                if ($.trim(value) == '') return 'This field is required';
            }
        });

        $('#sex').editable({
            prepend: "not selected",
            source: [{
                value: 1,
                text: 'Male'
            }, {
                value: 2,
                text: 'Female'
            }],
            display: function(value, sourceData) {
                var colors = {
                        "": "#98a6ad",
                        1: "#5fbeaa",
                        2: "#5d9cec"
                    },
                    elem = $.grep(sourceData, function(o) {
                        return o.value == value;
                    });

                if (elem.length) {
                    $(this).text(elem[0].text).css("color", colors[value]);
                } else {
                    $(this).empty();
                }
            }
        });*/

        $('#status').editable();

        $('#group').editable({
            showbuttons: false
        });

        $('#dob').editable();

        $('#comments').editable({
            showbuttons: 'bottom'
        });

        //inline

		$('#thumb1').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });
		$('#OtherWind').editable({
            type: 'text',
            pk: 1,
            name: 'otherwind',
            title: 'Enter Wind',
            mode: 'inline'
        });
		$('#OtherHydro').editable({
            type: 'text',
            pk: 1,
            name: 'other-hydro',
            title: 'Enter Hydro',
            mode: 'inline'
        });
		$('#OtherBiomas').editable({
            type: 'text',
            pk: 1,
            name: 'other-biomas',
            title: 'Enter Biomas',
            mode: 'inline'
        });
		$('#OtherTidal').editable({
            type: 'text',
            pk: 1,
            name: 'other-tidal',
            title: 'Enter Tidal',
            mode: 'inline'
        });
		$('#OtherNuclear').editable({
            type: 'text',
            pk: 1,
            name: 'other-nuclear',
            title: 'Enter Nuclear',
            mode: 'inline'
        });
		$('#thumb2').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });
		$('#thumb3').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });
		$('#thumb4').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });
		$('#thumb5').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });
		$('#thumb6').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });
		$('#thumb7').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });
		$('#thumb8').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });
		$('#thumb9').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });
		$('#thumb10').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });
		$('#thumb11').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });
		$('#thumb13').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });
		$('#thumb14').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });
		$('#thumb15').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });
		$('#thumb16').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });
		$('#thumb17').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });
		$('#thumb18').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });
		$('#thumb19').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });
		$('#thumb20').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });
		$('#thumb21').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });
        $('#inline-username').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline',
			maxlength: '4'
        });
		$('#electricity').editable({
            type: 'text',
            pk: 1,
            name: 'electricity',
            title: 'Electricity',
            mode: 'inline'
        });
		$('#NaturalGas').editable({
				type: 'text',
				pk: 1,
				name: 'Natural Gas',
				title: 'Natural Gas',
				mode: 'inline'
			});
			$('#Poeloil').editable({
				type: 'text',
				pk: 1,
				name: 'Poel oil',
				title: 'Poel oil',
				mode: 'inline'
			});
			$('#wood').editable({
				type: 'text',
				pk: 1,
				name: 'Wood',
				title: 'Wood',
				mode: 'inline'
			}); 
			$('#Propane').editable({
				type: 'text',
				pk: 1,
				name: 'Wood',
				title: 'Wood',
				mode: 'inline'
			});
			$('#Other').editable({
				type: 'text',
				pk: 1,
				name: 'Wood',
				title: 'Wood',
				mode: 'inline'
			});
			$('#electricity1').editable({
            type: 'text',
            pk: 1,
            name: 'electricity',
            title: 'Electricity',
            mode: 'inline'
        });
		$('#NaturalGas1').editable({
				type: 'text',
				pk: 1,
				name: 'Natural Gas',
				title: 'Natural Gas',
				mode: 'inline'
			});
			$('#Poeloil1').editable({
				type: 'text',
				pk: 1,
				name: 'Poel oil',
				title: 'Poel oil',
				mode: 'inline'
			});
			$('#wood1').editable({
				type: 'text',
				pk: 1,
				name: 'Wood',
				title: 'Wood',
				mode: 'inline'
			});
			$('#Propane1').editable({
				type: 'text',
				pk: 1,
				name: 'Wood',
				title: 'Wood',
				mode: 'inline'
			});
			$('#Other1').editable({
				type: 'text',
				pk: 1,
				name: 'Wood',
				title: 'Wood',
				mode: 'inline'
			});
		$('#electricity2').editable({
            type: 'text',
            pk: 1,
            name: 'electricity',
            title: 'Electricity',
            mode: 'inline'
        });
		$('#NaturalGas2').editable({
				type: 'text',
				pk: 1,
				name: 'Natural Gas',
				title: 'Natural Gas',
				mode: 'inline'
			});
			$('#Poeloil2').editable({
				type: 'text',
				pk: 1,
				name: 'Poel oil',
				title: 'Poel oil',
				mode: 'inline'
			});
			$('#wood2').editable({
				type: 'text',
				pk: 1,
				name: 'Wood',
				title: 'Wood',
				mode: 'inline'
			});
			$('#Propane2').editable({
				type: 'text',
				pk: 1,
				name: 'Wood',
				title: 'Wood',
				mode: 'inline'
			});
			$('#Other2').editable({
				type: 'text',
				pk: 1,
				name: 'Wood',
				title: 'Wood',
				mode: 'inline'
			});
			$('#electricity3').editable({
            type: 'text',
            pk: 1,
            name: 'electricity',
            title: 'Electricity',
            mode: 'inline'
        });
		$('#NaturalGas3').editable({
				type: 'text',
				pk: 1,
				name: 'Natural Gas',
				title: 'Natural Gas',
				mode: 'inline'
			});
			$('#Poeloil3').editable({
				type: 'text',
				pk: 1,
				name: 'Poel oil',
				title: 'Poel oil',
				mode: 'inline'
			});
			$('#wood3').editable({
				type: 'text',
				pk: 1,
				name: 'Wood',
				title: 'Wood',
				mode: 'inline'
			});
			$('#Propane3').editable({
				type: 'text',
				pk: 1,
				name: 'Wood',
				title: 'Wood',
				mode: 'inline'
			});
			$('#Other3').editable({
				type: 'text',
				pk: 1,
				name: 'Wood',
				title: 'Wood',
				mode: 'inline'
			});
			$('#electricity4').editable({
            type: 'text',
            pk: 1,
            name: 'electricity',
            title: 'Electricity',
            mode: 'inline'
        });
		$('#NaturalGas4').editable({
				type: 'text',
				pk: 1,
				name: 'Natural Gas',
				title: 'Natural Gas',
				mode: 'inline'
			});
			$('#Poeloil4').editable({
				type: 'text',
				pk: 1,
				name: 'Poel oil',
				title: 'Poel oil',
				mode: 'inline'
			});
			$('#wood4').editable({
				type: 'text',
				pk: 1,
				name: 'Wood',
				title: 'Wood',
				mode: 'inline'
			});
			$('#Propane4').editable({
				type: 'text',
				pk: 1,
				name: 'Wood',
				title: 'Wood',
				mode: 'inline'
			});
			$('#Other4').editable({
				type: 'text',
				pk: 1,
				name: 'Wood',
				title: 'Wood',
				mode: 'inline'
			});
			$('#electricity5').editable({
            type: 'text',
            pk: 1,
            name: 'electricity',
            title: 'Electricity',
            mode: 'inline'
        });
		$('#NaturalGas5').editable({
				type: 'text',
				pk: 1,
				name: 'Natural Gas',
				title: 'Natural Gas',
				mode: 'inline'
			});
			$('#Poeloil5').editable({
				type: 'text',
				pk: 1,
				name: 'Poel oil',
				title: 'Poel oil',
				mode: 'inline'
			});
			$('#wood5').editable({
				type: 'text',
				pk: 1,
				name: 'Wood',
				title: 'Wood',
				mode: 'inline'
			});
			$('#Propane5').editable({
				type: 'text',
				pk: 1,
				name: 'Wood',
				title: 'Wood',
				mode: 'inline'
			});
			$('#Other5').editable({
				type: 'text',
				pk: 1,
				name: 'Wood',
				title: 'Wood',
				mode: 'inline'
			});
			$('#Othermain').editable({
				type: 'text',
				pk: 1,
				name: 'Wood',
				title: 'Wood',
				mode: 'inline'
			});
			
        $('#inline-firstname').editable({
            validate: function(value) {
                if ($.trim(value) == '') return 'This field is required';
            },
            mode: 'inline'
        });

        $('#inline-sex').editable({
            prepend: "not selected",
            mode: 'inline',
            source: [{
                value: 1,
                text: 'Male'
            }, {
                value: 2,
                text: 'Female'
            }],
            display: function(value, sourceData) {
                var colors = {
                        "": "#98a6ad",
                        1: "#5fbeaa",
                        2: "#5d9cec"
                    },
                    elem = $.grep(sourceData, function(o) {
                        return o.value == value;
                    });

                if (elem.length) {
                    $(this).text(elem[0].text).css("color", colors[value]);
                } else {
                    $(this).empty();
                }
            }
        });

        $('#inline-status').editable({
            mode: 'inline'
        });

        $('#inline-group').editable({
            showbuttons: false,
            mode: 'inline'
        });

        $('#inline-dob').editable({
            mode: 'inline'
        });

        $('#inline-comments').editable({
            showbuttons: 'bottom',
            mode: 'inline'
        });



    });
    </script>


    <script>

    jQuery(document).ready(function() {

        // Switchery

        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        $('.js-switch').each(function() {

            new Switchery($(this)[0], $(this).data());

        });

        // For select 2

        $(".select2").select2();

        $('.selectpicker').selectpicker();

        //Bootstrap-TouchSpin

        $(".vertical-spin").TouchSpin({

            verticalbuttons: true,

            verticalupclass: 'ti-plus',

            verticaldownclass: 'ti-minus'

        });

        var vspinTrue = $(".vertical-spin").TouchSpin({

            verticalbuttons: true

        });

        if (vspinTrue) {

            $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();

        }

        $("input[name='tch1']").TouchSpin({

            min: 0,

            max: 100,

            step: 0.1,

            decimals: 2,

            boostat: 5,

            maxboostedstep: 10,

            postfix: '%'

        });

        $("input[name='tch2']").TouchSpin({

            min: -1000000000,

            max: 1000000000,

            stepinterval: 50,

            maxboostedstep: 10000000,

            prefix: '$'

        });

        $("input[name='tch3']").TouchSpin();

        $("input[name='tch3_22']").TouchSpin({

            initval: 40

        });

        $("input[name='tch5']").TouchSpin({

            prefix: "pre",

            postfix: "post"

        });

        // For multiselect

        $('#pre-selected-options').multiSelect();

        $('#optgroup').multiSelect({

            selectableOptgroup: true

        });

        $('#public-methods').multiSelect();

        $('#select-all').click(function() {

            $('#public-methods').multiSelect('select_all');

            return false;

        });

        $('#deselect-all').click(function() {

            $('#public-methods').multiSelect('deselect_all');

            return false;

        });

        $('#refresh').on('click', function() {

            $('#public-methods').multiSelect('refresh');

            return false;

        });

        $('#add-option').on('click', function() {

            $('#public-methods').multiSelect('addOption', {

                value: 42,

                text: 'test 42',

                index: 0

            });

            return false;

        });

        $(".ajax").select2({

            ajax: {

                url: "https://api.github.com/search/repositories",

                dataType: 'json',

                delay: 250,

                data: function(params) {

                    return {

                        q: params.term, // search term

                        page: params.page

                    };

                },

                processResults: function(data, params) {

                    // parse the results into the format expected by Select2

                    // since we are using custom formatting functions we do not need to

                    // alter the remote JSON data, except to indicate that infinite

                    // scrolling can be used

                    params.page = params.page || 1;

                    return {

                        results: data.items,

                        pagination: {

                            more: (params.page * 30) < data.total_count

                        }

                    };

                },

                cache: true

            },

            escapeMarkup: function(markup) {

                return markup;

            }, // let our custom formatter work

            minimumInputLength: 1,

            templateResult: formatRepo, // omitted for brevity, see the source of this page

            templateSelection: formatRepoSelection // omitted for brevity, see the source of this page

        });

    });

    </script>