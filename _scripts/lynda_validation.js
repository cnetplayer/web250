var inputFields = document.partyForm.getElementsByTagName("input");
var pfError = document.getElementById('errorHint');
var pfPhoneError = document.getElementById('phoneError');

var validationInfo = {
	"phone" : {
		"pattern" : "\\d{3}[\\-]\\d{3}[\\-]\\d{4}",
		"placeholder" : "xxx-xxx-xxxx"
	},
	"fname" : {
		"required" : true
	},
	"lname" : {
		"required" : true
	},
	"email" : {
		"required" : true
	},
	"guests" : {
		"required" : true
	},
	"date" : {
		"required" : true
	}
}

document.partyForm.onsubmit = function() {
	if (!(Modernizr.input.required)) {
		for (index in validationInfo) {
			var pfField = document.getElementById(index);
			if ((validationInfo[index].required) && (pfField.value == '')) {
				pfError.innerHTML = "The " + index + "is a required field!"
				pfField.select();
				return false;
			}//check required
		}//check validation
	return true;
	}//Modernizr check
}//onsubmit function

for (index in inputFields) {

	var pfField = inputFields[index];

	pfField.onchange = function() {
		
		if (Modernizr.input.pattern) {
			var pfPattern = this.pattern;
			var pfPlaceholder = this.placeholder;
		} else {
			var pfPattern = validationInfo[this.name].pattern;
			var pfPlaceholder = validationInfo[this.name].placeholder;
		}
		
		var isValid = this.value.search(pfPattern) >= 0;

		if (!(isValid)) {
			pfPhoneError.innerHTML = "Input does not match expected pattern. " + pfPlaceholder;
		} else { //pattern not valid
			pfPhoneError.innerHTML = "";
		} //pattern is valid

	} // myField has changed

	pfField.onfocus = function() {
		var hint = "*Entry Required!";
		var isRequired = this.hasAttribute("required");
		
		if (isRequired) {
			pfError.innerHTML = hint;
		} else { //input required
			pfError.innerHTML = "";
		} // input not required		
	}
} // inputFields