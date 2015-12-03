<!doctype html>
<html>
<head>
	<title>Testseite A</title>
	
	<style>
	
	form label {
		width: 120px;
		display: blook;
		float: left;
	}
	</style>
	
	<script>
	//JavaScript Validierung 
	
	function istFertig(form)
	{
		var validierung = true;
		
		if(form.anrede.value == '')
		{
			alert("Bitte wählen Sie eine Anrede aus.");
			validierung = false;
		}
		
		if(form.vorname.value == '')
		{
			alert("Bitte geben Sie einen Vorname an.");
			validierung = false;
		}
		
		if(form.nachname.value == '')
		{
			alert("Bitte geben Sie einen Nachname an.");
			validierung = false;
		}
		
		if(form.strasse.value == '')
		{
			alert("Bitte geben Sie eine Strasse an.");
			validierung = false;
		}
		
		if(form.ort.value == '')
		{
			alert("Bitte geben Sie einen Ort an.");
			validierung = false;
		}
		
		if(form.plz.value == '')
		{
			alert("Bitte geben Sie eine PLZ an.");
			validierung = false;
		}
		
		if(form.mitteilung.value == '')
		{
			alert("Bitte geben Sie eine Mitteilung an.");
			validierung = false;
		}
		
		return validierung;
	}
		</script>
</head>
	<body>
		<div id="header"><img src="Basel.jpg" alt="Basel"width="100%" /></div>
		
		<div id="content-wrapper">
			<div id="content1">
			<img src="Basel2.jpg" width="100%" height="450">
				
				</div>
					<!--Anrede (select), Vorname (input), Nachname (input), Strasse (input), Ort(input), 
					PLZ(input), Mitteilung (textarea), Senden (Button)-->
	
	<div id="errormessage">
	<h2>Kontakt</h2>
			<form name="einfachesformular" onSubmit="return istFertig(this);"  method="post">
				<label> Anrede</label>
				
				<select name="anrede">
					<option value="">Bitte w&auml;hlen</option>
					<option value="Herr">Herr</option>
					<option value="Frau">Frau</option>
					<option value="An">An</option>
				</select> 
				<br />
				<label> Vorname</label>
				<input type="text" name="vorname" />
				<br />
				<label> Nachname</label>
				<input type="text" name="nachname" />
				<br />
				<label> Strasse</label>
				<input type="text" name="strasse" />
				<br />
				<label> Ort</label>
				<input type="text" name="ort" />
				<br />
				<label> PLZ</label>
				<input type="text" name="plz" />
				<br />
				<label> Vorname</label>
				<input type="text" name="vorname" />
				<br />
				<br />
				<label> Mitteilung</label>
				<textarea name="mitteilung" rows="4" cols="50">
					</textarea>
					</form>
					
				<button type="submit" name="submit">Senden</button>
				</div>
				<p>
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed 
					diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
					sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
					Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit 
					amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
					eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
					At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
					no sea takimata sanctus est Lorem ipsum dolor sit amet.
				</p>
			</div>
			<div id="content2">
				<p>
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed 
					diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
					sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
					Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit 
					amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
					eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
					At vero 
				</p>
				<a href="http://google.ch">
					Search it!! :-)
				</a>
			</div>
		</div>
		<footer>
			&copy; Mislim Dauti
		</footer>
	</body>
</html>