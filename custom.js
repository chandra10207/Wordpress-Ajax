
jQuery.ajax({
                type: 'POST',
                data: {
                    'action': 'your_action',
                    'other_data1': data1,
                    'other_data2': data2
                },
                url: your_variable.ajax_url, 
                success: function(data, lable) {
                    $("your_dom").text(data);
                },
                error: function(data) {
                    
                }
            });



