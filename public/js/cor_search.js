function search(){
	var name = document.getElementById('searchName').value;
	var searchBy = document.getElementById('searchBy').value;
	$.ajax({
		url: "cor_details/search",
		type: "post",
		data: {
			searchName: name,
			searchBy: searchBy
		},
		success: function(result){
        	$("#result").html(result);
    	}
	});

}

function searchBy(){
	var name = document.getElementById('searchName').value;
	var searchBy = document.getElementById('searchBy').value;
}