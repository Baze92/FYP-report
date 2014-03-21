			var action = "decryptStatus";
			var tosend = $("#encryptedStatuses").html();
			var jData = {};
      jData.stuff = tosend;
      jData.action = action;
 				 $.ajax
          ({
           			cache: false,
           			type: "POST",
           			async: false,
           			url:  "http://localhost:8000/ServiceModelSamples/service/form",
           			data: JSON.stringify(jData),
           			contentType: "application/json; charset=utf-8",
           			dataType: "xml",
           			
                success:function(data)
 							    {
 							  		test = $(data).find	('receiverResult'); 
  									var myhtml = test.text();
 							 			$("#status_display").html(myhtml);
 								  },
           			
                error: function (xhr,error) 
                  {
           					 alert(error);
           			  }   		  
          });




          