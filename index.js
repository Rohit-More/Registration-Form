const validation = ()=> {
    var Name = document.getElementById('name').value;
    var Email= document.getElementById('email').value;
    var Phone = document.getElementById('phone').value;
    var Country = document.getElementById('countryCode');
    var countryCode = Country.options[Country.selectedIndex].getAttribute('data-countryCode');
    var Department = document.getElementById('department').value;
    var error_message = document.getElementById('error_message');
    var text;
    error_message.style.padding ="10px";
   
  
if(Name.length==0){
    text = "Please Enter Valid Name";
	error_message.style.background = "#fe8b8e";
    error_message.innerHTML = text;
    return false;
}

if(Email.indexOf('@')==-1 ||Email.length<6){
    text = "Please Enter Valid Email id";
	error_message.style.background = "#fe8b8e";
    error_message.innerHTML = text;
    return false;
}

if(Phone==""){
    text = "Please Enter Phone Number";
	error_message.style.background = "#fe8b8e";
    error_message.innerHTML = text;
    return false;
}

if(isNaN(Phone)){
    text = "Only digits are allowed";
	error_message.style.background = "#fe8b8e";
    error_message.innerHTML = text;
    return false;
}
if(Country.value==""){
    text = "Please Select a Country";
	error_message.style.background = "#fe8b8e";
    error_message.innerHTML = text;
    return false;
}
if(countryCode === null) {
	text="Error: Country Code not selected";
	error_message.style.background = "#fe8b8e";
	error_message.innerHTML = text;
	return false;
}
if(Department=="Department"){
    text = "Please Select a Course";
	error_message.style.background = "#fe8b8e";
    error_message.innerHTML = text;
    return false;
}
     text = "submitted successfully";
	error_message.style.background = "#77dd77";
    error_message.innerHTML = text;
return true;
}

$(document).ready(function() {
    	$('#regform').submit(function(event) {
		event.preventDefault();

		let status = validation();

		const name = $(this).find("#name").val();
		const email = $(this).find("#email").val();
		const countrycode = $(this).find("#countryCode").val();
		const phonenumber = $(this).find("#phone").val();
		const country = $(this).find("#countryCode").children("option:selected").attr("data-countryCode");
		const courses = $(this).find("#department").val();
		if(status){
       		$.ajax({
        		type: 'POST',
			url: 'process.php',
			data: {
				name: name,
				email: email,
				countrycode: countrycode,
				phonenumber: phonenumber,
				country: country,
				courses: courses,
			}
		});
			window.location.reload();
		};
        return false;
    }); 
})
