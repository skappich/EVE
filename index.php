<!DOCTYPE html>
<html>
	<head>

  		<title>EVE (POC)</title>
  		<meta charset="utf-8" />
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="css/themes/EVEPOC.css" />
  		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile.structure-1.3.0.min.css" /> 
  		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> 
  		<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script> 
			<script src="js/eve.js"></script>
			<script type="text/javascript">
				function EVEgetOverviewJobAddress(obj,va){
					sessionStorage.valocation = $(obj).children("p:last-child").text();
					sessionStorage.va = va;
				}
			</script>
			
	</head>

	<body>
		<div id="start" data-role="page">
			<div data-role="header" data-position="fixed">
				<h1>EVE (POC)</h1>
			</div>
			<div data-role="content">
				<form>
    					<label for="textinput-s">Benutzername:</label>
    					<input type="text" name="textinput-s" id="textinput-s" placeholder="Benutzername" value="" data-clear-btn="true">
					<label for="passwordinput-s">Passwort:</label>
					<input type="password" name="passwordinput-s" id="passwordinput-s" placeholder="Passwort" value="" data-clear-btn="false">
					<a href="#uebersicht" data-role="button" data-theme="a">Anmelden</a>
			</div>
			<div data-role="footer" data-position="fixed">
				<h6>&copy; TwoDices E.E.S.</h6>
			</div>
		</div>
		
		<div id="uebersicht" data-role="page">
			<div data-role="header" data-position="fixed">
				<h1>EVE (POC) Übersicht</h1>
			</div>
			<div data-role="content">
				<ul data-role="listview" data-inset="true">
					<li data-role="list-divider">Sonntag, 5. Mai, 2013 <span class="ui-li-count">5</span></li>
    			<li data-theme="d">
    					<a href="#JobMenu" onClick="EVEgetOverviewJobAddress(this,6547)" data-transition="flow" data-rel="popup">
    						<h2>Equipmentlieferung 75 Pax</h2>
    						<h2>Stephen Weber</h2>
    						<p class="adress"><strong>Pfinztalstr. 8, 76227 Karlsruhe</strong></p>
        				<p class="ui-li-aside"><strong>8:00 - 11:00</strong></p>
        			</a>
        	</li>
   				<li data-theme="c">
   					<a href="#JobMenu" onClick="EVEgetOverviewJobAddress(this,6548)" data-transition="flow" data-rel="popup">
    						<h2>Speisenlieferung 75 Pax</h2>
    						<h2>Hotel der Blaue Reiter</h2>
    						<p><strong>Amalienbadstr. 16, 76227 Karlsruhe</strong></p>
        				<p class="ui-li-aside"><strong>11:30</strong></p>
        			</a>
   				</li>
    			<li data-theme="b">
    				<a href="#JobMenu" data-transition="flow" data-rel="popup">
    					<h2>Speisen- & Equipmentlieferung 35 Pax</h2>
    					<h2>Bernd Hoecker</h2>
    					<p><strong>Zeppelinstr. 32, 76139 Karlsruhe</strong></p>
        			<p class="ui-li-aside"><strong>10:30</strong></p>
    				</a>
    			</li>
    			<li data-theme="b">
    				<a href="#JobMenu" data-transition="flow" data-rel="popup">
    					<h2>Büffet- & Equipmentabholung 350 Pax</h2>
    					<h2>Roland Kaiser</h2>
    					<p><strong>Kaiserstr. 64, 76133 Karlsruhe</strong></p>
        			<p class="ui-li-aside"><strong>14:30</strong></p>
    				</a>
    			</li>
    			<li data-theme="b">
    				<a href="#JobMenu" data-transition="flow" data-rel="popup">
    					<h2>Equipmentabholung 15 Pax</h2>
    					<h2>Sandra Stier</h2>
    					<p><strong>Memelerst. 128, 76227 Karlsruhe</strong></p>
        			<p class="ui-li-aside"><strong>16:30</strong></p>
    				</a>
    			</li>
    			<li data-theme="b">
    				<a href="#JobMenu" onClick="sessionStorage.id=0816" data-transition="flow" data-rel="popup">
    					<h2>Speisenlieferung 150 Pax</h2>
    					<h2>Horst Paschulke</h2>
    					<p><strong>Rittnertstr. 92, 76227 Karlsruhe</strong></p>
        			<p class="ui-li-aside"><strong>18:30</strong></p>
    				</a>
    			</li>
    			<li data-theme="b">
    				<a href="#JobMenu" onClick="sessionStorage.id=0815" data-transition="flow" data-rel="popup">
    					<h2>Speisenlieferung 45 Pax</h2>
    					<h2>Ursula Landowski</h2>
    					<p><strong>Killisfeldstr. 18, 76227 Karlsruhe</strong></p>
        			<p class="ui-li-aside"><strong>20:30</strong></p>
    				</a>
    			</li>
				</ul>
			</div>
			<div data-role="footer" data-position="fixed">
				<h6>&copy; TwoDices E.E.S.</h6>
			</div>
			<div data-role="popup" id="JobMenu" data-theme="a">
    			<ul data-role="listview" data-inset="true" style="min-width:210px;" data-theme="a">
            <li data-role="divider" data-theme="c">wähle...</li>
            <li><a href="#JobDetails" data-transition="flow" data-position-to="window" data-rel="popup">Details anzeigen</a></li>
            <li><a href="#JobStatusChange" data-transition="flow" data-position-to="window" data-rel="popup">Status ändern</a></li>
            <li><a href="#" onClick="this.href='https://maps.google.de/maps?q='+sessionStorage.valocation">Navigation</a></li>
            <li><a href="#">Deligieren</a></li>
        	</ul>
				</div>
				<div data-role="popup" id="JobDetails" data-theme="a"  data-dismissible="false">
					<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Schliessen</a>
					<h2>Jobdetails</h2>
					<h4>Equipmentlieferung Sonntag 5. Mai 2013 &mdash; 8:30</h4>
					<h5>Lieferanschrift</h5>
				</div>
				<div data-role="popup" id="JobStatusChange" data-theme="a"  data-dismissible="false" class="ui-content">
					<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Schliessen</a>
					<form>
    				<fieldset data-role="controlgroup" data-type="vertical">
        			<legend>Wähle den aktuellen Status:</legend>
        			<input type="radio" name="radio-choice-h-2" id="radio-choice-h-2a" value="on" checked="checked">
        			<label for="radio-choice-h-2a">ungeladen</label>
        			<input type="radio" name="radio-choice-h-2" id="radio-choice-h-2b" value="off">
        			<label for="radio-choice-h-2b">geladen</label>
        			<input type="radio" name="radio-choice-h-2" id="radio-choice-h-2c" value="other">
        			<label for="radio-choice-h-2c">unterwegs</label>
    				</fieldset>
					</form>
				</div>
		</div>
		<script type="text/javascript">
				$( "#uebersicht" ).on( "pageeforechange", function( event ) {
  				alert( "This page was just inserted into the dom!" );
				});	
			</script>
	</body>
</html>
