function validateForm() {
var naam = document.forms["contact_form"]["naam"].value;
var achternaam = document.forms["contact_form"]["achternaam"].value;
var email = document.forms["contact_form"]["email"].value;
var bericht = document.forms["contact_form"]["bericht"].value;

if (naam == null || naam == "") {
	document.getElementById("naamWaarschuwing").className="fout";
	return false;
} else {
	document.getElementById("naamWaarschuwing").className="goed";
}

if (achternaam == null || achternaam == "") {
	document.getElementById("achternaamWaarschuwing").className="fout";
	return false;
} else {
	document.getElementById("achternaamWaarschuwing").className="goed";
}

if (email == null || email == "") {
	document.getElementById("emailWaarschuwing").className="fout";
	return false;
} else {
	document.getElementById("emailWaarschuwing").className="goed";
}

if (bericht == null || bericht == "") {
	document.getElementById("berichtWaarschuwing").className="fout";
	return false;
} else {
	document.getElementById("berichtWaarschuwing").className="goed";
}
}
