Seitenerstellung:
	1. Neuen Ordner in "pages" erstellen
	2. "config.php" anlegen
		2.1 $navPriority (int) - Priorität in der Navigationsleiste (Höhere Zahlen gelangen weiter nach vorne!)
		2.2 $permission (int) - Für diese Seite benötigte Berechtigung
		2.3 $permission_specific (int) - Für diese Seite spezifische Berechtigung (Seite wird bei anderem Wert nicht angezeigt, selbst wenn höher)
	3. "content.php" anlegen mit Inhalt des Body's der Website  