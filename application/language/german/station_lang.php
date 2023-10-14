<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// Station Location

$lang['station_location'] = 'Stationsstandort';
$lang['station_location_header_ln1'] = 'Stationsstandorte definieren die Orte, von denen aus du QRV bist. Dein Zuhause, Bei Freunden oder Unterwegs';
$lang['station_location_header_ln2'] = 'Ähnlich wie Logbücher trennen die Stationsstandorte die entsprechenden QSO voneinander ab.';
$lang['station_location_header_ln3'] = 'Es kann immer nur ein Stationsstandort aktiv sein. Welches das aktuell ist siehst du in der Liste an dem "Aktive Station" Symbol';
$lang['station_location_create_header'] = 'Erstellung Stationsstandort';
$lang['station_location_create'] = 'Erstelle einen neuen Stationsstandort';
$lang['station_location_edit'] = 'Bearbeite Stationsstandort: ';
$lang['station_location_updated_suff'] = ' aktualisiert.'; // nur letztes Wort im Satz "XYZ wurde aktualisiert"
$lang['station_location_warning'] = 'Achtung: Du musst einen aktiven Stationsstandort auswählen. Gehe zu Rufzeichen -> Stationsstandorte um einen zu aktivieren.';
$lang['station_location_reassign_at'] = 'Bitte mache die Zuordnung in ';
$lang['station_location_warning_reassign'] = 'Aufgrund von Änderungen in Cloudlog musst du QSOs wieder einem Stationsstandort zuordnen.';
$lang['station_location_name'] = 'Station Name';
$lang['station_location_name_hint'] = 'Kurzname für den Stationsstandort. Zum Beispiel: Home (IO87IP)';
$lang['station_location_callsign'] = 'Station Rufzeichen';
$lang['station_location_callsign_hint'] = 'Station Rufzeichen. Zum Beispiel: HB9HIL/P';
$lang['station_location_power'] = 'Station Sendeleistung (W)';
$lang['station_location_power_hint'] = 'Standardmässig eingestellte Sendeleistung in Watt. Wird von CAT-Daten überschrieben.';
$lang['station_location_emptylog'] = 'Lösche Log';
$lang['station_location_confirm_active'] = 'Bist du sicher, dass du den folgenden Stationsstandort zum aktiven Standort machen möchtest?: ';
$lang['station_location_set_active'] = 'Aktivieren';
$lang['station_location_active'] = 'Aktive Station';
$lang['station_location_claim_ownership'] = 'Claim Ownership';
$lang['station_location_confirm_del_qso'] = 'Bist du sicher, dass du alle QSO an diesem Stationsstandort löschen möchtest?';
$lang['station_location_confirm_del_stationlocation'] = 'Bist du sicher, dass du diesen Stationsstandort löschen willst?:';
$lang['station_location_confirm_del_stationlocation_qso'] = 'Es werden alle QSO an diesem Stationsstandort gelöscht!';
$lang['station_location_dxcc'] = 'Station DXCC';
$lang['station_location_dxcc_hint'] = 'Station DXCC Einteilung. Zum Beispiel: Germany';
$lang['station_location_city'] = 'Station Stadt';
$lang['station_location_city_hint'] = 'Station Stadt. Zum Beispiel: Berlin';
$lang['station_location_state'] = 'Station Staat';
$lang['station_location_state_hint'] = 'Station Staat. Nur verfügbar für einige Länder. Leer lassen falls nicht verfügbar.';
$lang['station_location_county'] = 'Station County';
$lang['station_location_county_hint'] = 'Station County (Nur für USA/Alaska/Hawaii).';
$lang['station_location_gridsquare'] = 'Station Planquadrat';
$lang['station_location_gridsquare_hint_ln1'] = "Station Planquadrat. Zum Beispiel: JO40IC. Wenn du dein Planquadrat nicht kennst <a href='https://zone-check.eu/?m=loc' target='_blank'>klicke hier</a>!";
$lang['station_location_gridsquare_hint_ln2'] = "Wenn du genau auf der Linie eines Planquadrates bist kannst du mehrere Planquadrate mit Kommas getrennt eingeben. Zum Beispiel: IO77,IO78,IO87,IO88.";
$lang['station_location_iota_hint_ln1'] = "IOTA Referenznummer der Station. Zum Beispiel: EU-005";
$lang['station_location_iota_hint_ln2'] = "Du kannst IOTA Referenznummern auf der <a target='_blank' href='https://www.iota-world.org/iota-directory/annex-f-short-title-iota-reference-number-list.html'>IOTA World Website</a> nachschlagen.";
$lang['station_location_sota_hint_ln1'] = "SOTA Referenznummer der Station. Du kannst SOTA Referenznummern auf der <a target='_blank' href='https://www.sotamaps.org/'>SOTA Maps Webseite</a> nachschlagen.";
$lang['station_location_wwff_hint_ln1'] = "WWFF Referenznummer der Station. Du kannst WWFF Referenznummern auf der <a target='_blank' href='https://www.cqgma.org/mvs/'>GMA Map Webseite</a> nachschlagen.";
$lang['station_location_pota_hint_ln1'] = "POTA Referenznummer der Station. Du kannst POTA Referenznummern auf der <a target='_blank' href='https://pota.app/#/map/'>POTA Map Webseite</a> nachschlagen.";
$lang['station_location_signature'] = "Signaturen";
$lang['station_location_signature_name'] = "Signatur Bezeichnung";
$lang['station_location_signature_name_hint'] = "Signatur/Referenz der Station (z.B. GMA)..";
$lang['station_location_signature_info'] = "Signatur Information";
$lang['station_location_signature_info_hint'] = "Signatur/Referenz Information der Station (z.B. DA/NW-357).";
$lang['station_location_eqsl_hint'] = "Der 'QTH Nickname' wie er in deinem eQSL Profil konfiguriert ist.";
$lang['station_location_qrz_subscription'] = 'Abonnement erforderlich';
$lang['station_location_qrz_hint'] = "Finde deinen 'QRZ Logbook API Key' in den <a href='https://logbook.qrz.com/logbook' target='_blank'>QRZ.com Logbuch Einstellungen";
$lang['station_location_qrz_realtime_upload'] = 'QRZ.com Logbuch Echtzeit Upload';
$lang['station_location_hrdlog_realtime_upload'] = "HRDLog.net Logbuch Echtzeit Upload";
$lang['station_location_hrdlog_hint'] = "Erstelle deinen API Key auf <a href='http://www.hrdlog.net/EditUser.aspx' target='_blank'>HRDLog.net Benutzerprofil Seite";
$lang['station_location_qo100_hint'] = "Erstelle deinen API Key auf <a href='https://qo100dx.club' target='_blank'>deiner QO-100 Dx Club's Profil Seite";
$lang['station_location_qo100_realtime_upload'] = "QO-100 Dx Club Echtzeit Upload";
$lang['station_location_oqrs_enabled'] = "OQRS aktivieren";
$lang['station_location_oqrs_email_alert'] = "OQRS Email Benachrichtigung";
$lang['station_location_oqrs_email_hint'] = "Stelle sicher, dass du E-Mail unter Admin/Globale Optionen konfiguriert hast.";
$lang['station_location_oqrs_text'] = "OQRS Text";
$lang['station_location_oqrs_text_hint'] = "Einige Informationen, die du zum QSL-Vorgang hinzufügen möchtest.";



