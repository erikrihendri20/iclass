
        function base_url() {
            var pathparts = location.pathname.split('/');
            if (location.host == 'localhost') {
                var url = location.origin+'/'+pathparts[1].trim('/')+'/'; // http://localhost/myproject/
            }else{
                var url = location.origin; // http://stackoverflow.com
            }
            return url;
        }

		


	$(document).ready(function() {
	    var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();

		/*  className colors

		className: default(transparent), important(red), chill(pink), success(green), info(blue)

		*/


		/* initialize the external events
		-----------------------------------------------------------------*/

		$('#external-events div.external-event').each(function() {

			// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
			// it doesn't need to have a start or end
			var eventObject = {
				title: $.trim($(this).text()) // use the element's text as the event title
			};

			// store the Event Object in the DOM element so we can get to it later
			$(this).data('eventObject', eventObject);

			// make the event draggable using jQuery UI
			$(this).draggable({
				zIndex: 999,
				revert: true,      // will cause the event to go back to its
				revertDuration: 0  //  original position after the drag
			});

		});


		/* initialize the calendar
		-----------------------------------------------------------------*/
		var calendar
		function initCalendar() {
			calendar =  $('#calendar').fullCalendar({
				header: {
					left: 'title',
					center: 'agendaDay,agendaWeek,month',
					right: 'prev,next today'
				},
				editable: true,
				firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
				selectable: true,
				defaultView: 'month',
	
				axisFormat: 'h:mm',
				columnFormat: {
					month: 'ddd',    // Mon
					week: 'ddd d', // Mon 7
					day: 'dddd M/d',  // Monday 9/7
					agendaDay: 'dddd d'
				},
				titleFormat: {
					month: 'MMMM yyyy', // September 2009
					week: "MMMM yyyy", // September 2009
					day: 'MMMM yyyy'                  // Tuesday, Sep 8, 2009
				},
				allDaySlot: false,
				selectHelper: true,
				select: function(start, end, allDay) {
				    $('#modalTambahJadwal').show();
				    
				    document.getElementById('start').value = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
				    document.getElementById('end').value = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
				    document.getElementById('kode_kelas').value = $('#kode-kelas').val()
				    document.getElementById('jenis').value = 1;
				    document.getElementById('class_name').value = 'info';
				    
				// 	if (title) {
				// 		$.post(
				// 			"tambahJadwal", 
				// 			{
				// 				title:title,
				// 				start:$.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss"),
				// 				end:$.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss"),
				// 				kode_kelas:$('#kode-kelas').val(),
				// 				jenis: 1,
				// 				class_name: 'info'
				// 			}, function(result){
				// 				console.log(start)
				// 				console.log(end)
				// 				console.log(result)
				// 				calendar.fullCalendar('refetchEvents');
				// 				alert('sukses menambahkan')
				// 		});
				// 	}
					calendar.fullCalendar('unselect');
					calendar.fullCalendar('refetchEvents');
				},
				eventResize:function(event) {
				    document.getElementById('start').value = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
				    document.getElementById('end').value = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
				    document.getElementById('kode_kelas').value = $('#kode-kelas').val()
				    document.getElementById('jenis').value = 1;
				    document.getElementById('class_name').value = 'info';
				    document.getElementById('eventId').value = event.id;
				    document.getElementById('judulEvent').value = event.title;
				    
				    $('#modalTambahJadwal').show();
				    
				    calendar.fullCalendar('refetchEvents');
				    
				// 	start=$.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss")
				// 	end=$.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss")
				// 	title=event.title
				// 	id=event.id
				// 	$.ajax({
				// 		url:'tambahJadwal',
				// 		type:'POST',
				// 		data:{
				// 			id:id,
				// 			title:title,
				// 			start:start,
				// 			end:end,
				// 			kode_kelas:$('#kode-kelas').val(),
				// 			jenis: 1,
				// 			class_name: 'info'
				// 		},
				// 		success:function () {
				// 			calendar.fullCalendar('refetchEvents');
				// 			alert('jadwal sukses diubah')
				// 		}
				// 	})
				},
				droppable: true, // this allows things to be dropped onto the calendar !!!
				eventDrop:function (event) {
					document.getElementById('start').value = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
				    document.getElementById('end').value = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
				    document.getElementById('kode_kelas').value = $('#kode-kelas').val()
				    document.getElementById('jenis').value = 1;
				    document.getElementById('class_name').value = 'info';
				    document.getElementById('eventId').value = event.id;
				    document.getElementById('judulEvent').value = event.title;
				    
				    $('#modalTambahJadwal').show();
				    
				    calendar.fullCalendar('refetchEvents');
				},
				eventClick:function(event) {
					if(confirm('apakah anda yakin ingin menghapus jadwal ini?')){
						id=event.id
						$.ajax({
							url:'hapusJadwal',
							type:'POST',
							data:{
								id:id
							},
							success:function () {
								calendar.fullCalendar('refetchEvents');
								alert('jadwal sukses dihapus')
							}
						})
					}
				},
				drop: function(date, allDay) { // this function is called when something is dropped
	
					// retrieve the dropped element's stored Event Object
					var originalEventObject = $(this).data('eventObject');
	
					// we need to copy it, so that multiple events don't have a reference to the same object
					var copiedEventObject = $.extend({}, originalEventObject);
	
					// assign it the date that was reported
					copiedEventObject.start = date;
					copiedEventObject.allDay = allDay;
	
					// render the event on the calendar
					// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
					$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
	
					// is the "remove after drop" checkbox checked?
					if ($('#drop-remove').is(':checked')) {
						// if so, remove the element from the "Draggable Events" list
						$(this).remove();
					}
	
				},
	
				events: 'lihatJadwal/'+$('#kode-kelas').val()+'/1'
			});
		}
		initCalendar()
		$('#kode-kelas').change(function(){
			$('#calendar').html('')
			initCalendar()
		})


	});