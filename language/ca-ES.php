<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.17.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Reserves ràpides');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Mostrar perfils');
jr_define('_JOMRES_COM_MR_QUICK______DESC', 'Deixat en blanc intencionadament');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Configuració general');
jr_define('_JOMRES_COM_MR_BACK', 'Endarrere');
jr_define('_JOMRES_COM_MR_YES', 'Sí');
jr_define('_JOMRES_COM_MR_NO', 'No');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Nou');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Nova propietat');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Hoste nou');
jr_define('_JOMRES_COM_MR_SAVE', 'Guardar');
// View bookings
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Nom');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', "Data d'arribada");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Data de sortida');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_BLANK', 'Blanc');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', "Nom de l'usuari");
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', "Nivell d'accés");
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Usuari modificat');
// Edit bookings
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Totes les reserves');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Editar reserves: ');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Arribades/Sortides');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Hoste');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Habitació');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Pagament');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Nom');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Cognom');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Requisits especials');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Observi si us plau que alguns requisits especials poden incurrir en recàrrecs.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Canceli la reserva');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'El número o nom de la casa');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Carrer');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Ciudad');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Codi postal');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Número de telèfon');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Número mòvil');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'Direcció electrònica');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', "No pot cancelar aquesta reserva, perquè l'hoste ha confirmat l'entrada");
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Dipòsit no pagat');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Confirmar cancelació');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Reserva cancelada');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Dies per arribar');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Tipus de reserva');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Negre');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Recepció');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', "Nom de l'habitació");
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', "Número de l'habitació");
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Pis');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Accés denegat');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Màxim de clients');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', "Tipus d'habitació");
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', "Descripció de l'habitació");
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', "Llista de característiques de l'habitación");
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Dipòsit pagat');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Introduïr dipòsit');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Total a pagar');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Ref. de Dipòsit');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Número de Reserva');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Dipòsit');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Dipòsit salvat');
// Edit Language
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Habitacions disponibles');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Propietat');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', "Tipus d'habitació");
// Display guest form
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', "Editar detalls d'hoste");
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Nom');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Cognom');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Casa');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Carrer');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Ciutat');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Codi Postal');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Telèfon');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Mòvil');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Seleccioni una habitació');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', "Dies d'estancia");
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Total');
// Rooms tab
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Vegi habitacions i configuració de les característiques');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Habitació');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Hb característiques');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Hb tipus');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Propietats');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Prop. característiques');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Habitació');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Tipus');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Nom');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Número');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Pis');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Màx. de persones');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Característiques');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', "Editar l'article");
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Hb característiques');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Descripció de la característica');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Característica del lloc afegida');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Característica del lloc actualitzada');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Hb tipus');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Tipus abreviatura del lloc');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', "Descripció de tipus de l'habitació");
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Tipus de habitació afegida');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Editar article');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Nom');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Carrer');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Ciutat');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Regió');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'País');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Codi Postal');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Telf.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'Email');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Website');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Característiques');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Propietat actualitzada');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Característica de la propietat');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Característica de la propietat abrev.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Descripció completa de característica de la propietat ');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Característica de la propietat actualitzada');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Tarifes');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Títol de tarifa');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Descripció');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Vàlid de');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Vàlid fins a');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Tarifa per nit');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Dies mínims');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Dies màxims');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Persones mínimes');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Persones màximes');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', "Tipus de l'Hb");
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignorar PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Permetre caps de setmana');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Editar article');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Copiar article idèntic');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Tarifa borrada');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Editar la tarifa');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Reserva guardada');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Reservar una habitació');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', "Entrada d'hoste");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', "Sortida d'hoste");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Llistar les reserves');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'I N I C I');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', "Administració d'hoste");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Administració de propietat');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Verifiqui la disponibilitat');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Nom');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Cognom');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Número de la Casa');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Carrer');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Ciutat');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Codi Postal');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Número de telèfon');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mòvil');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'No hi ha habitacions disponibles capaces de satisfer els paràmetres especificats');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', '<center>Gràcies per fer la seva reserva amb nosaltres. Esperem que vostè disfruti de la seva permanència.<br><br> <b>Si us plau, noti que això és només una reserva preliminar, i no serà confirmada fins que vosté rebi el seu email de confirmació per part nostra.</center>');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', "Entrada d'hoste ");
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', "Entrada d'hoste");
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', "Sortida d'hoste");
// Config panel
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Suplements');
jr_define('_JOMRES_COM_A_TARIFFS', 'Tarifes & Moneda');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Fitxers pujats');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Només suplements per persona');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Recordi marcar "Sí" si vosté vol carregar només suplements de persona');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Només carregar suplement de persona');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'El Dipòsit requereix percentatge?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'El dipòsit és un percentatge de la suma de la reserva? Si no, el dipòsit aplicat és un valor fix');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'El dipòsit va requerir el valor');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'Per persona, per nit');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Esculli "Sí" si vosté vol càrrecs per persona-per-nit. Si no, llavors els costos es calcularan en base a habitació-per-nit');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Mida de la carpeta');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Màx. Mida de carpeta en Kilobytes');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Reservat');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Detalls de la reserva ');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Se li recorda que una reserva és un contracte legalment obligatori, si per alguna raó vostè ha de cancel·lar o acurtar la seva reserva llavors serà encara responsable de pagar la quantitat completa.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', "<i>La cancel·lació i l'acortament es carreguen al seu compte</i> Si vostè cancel·la les seves vacances, la cancelació ha de ser confirmada per escrit. Els càrrecs pr cancel·lació són:");
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', "La data de l'arribada a 14 dies");
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Imprimeixi la carta de confirmació');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Impressió de la factura');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Número de nits: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Cost per nit: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Suma total');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Imprimir factura');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Afegeixi el servei per facturar');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Descripció del servei');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Valor del Servei');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Altres articles facturats');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Article afegit a la factura');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Pujar imatge ');
jr_define('_JOMRES_FILE_UPLOAD', 'Arxiu pujat');
jr_define('_JOMRES_COM_A_ODDS', 'Probabilitats i termes');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'Cridar llista de Minicomponents');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Marqui aquesta opció a Si per veure un log dels minicomponents utilitzats al final de la fulla després de que Jomres completi la seva execució. És útil si estàs intentant identificar que Minicomponents estan portant a cap certs serveis.');
jr_define('_JOMRES_FILE_DELETE', 'Borri aquesta imatge');
jr_define('_JOMRES_FILE_DELETED', "El fitxer s'ha borrat");
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Borrar');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', "Incapaç d'eliminar aquesta habitació, ja hi ha reservs. Cancel·li aquestes reserves i torni a intentar-ho.");
jr_define('_JOMRES_COM_MR_ROOM_DELETED', "Carcaterística d'habitació eliminada");
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', "Borri la característica de l'habitació");
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', "Impossible eliminar aquesta característica de l'habitació, està assignada o ocupada. Elimini la característica d'aquestes habitacions i torni a intentar-ho.");
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', "Característica de l'habitació borrada");
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Borrar la característica de la propietat');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', "Impossible eliminar aquesta característica de la propietat, está assignada. Elimini la característica d'aquesta propietat i torni a intentar-ho.");
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', "La característica de la propiedad s'ha borrat.");
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', "Borri tipus de l'habitació");
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', "Tipus d'habitació borrada");
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'Borri la propietat');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', "La propietat s'ha borrat");
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Vosté no té els permisos per a borrar aquesta propietat.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', "Amplada d'imatge gran");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Fagi click per a veure el mapa');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Descripció de la propietat');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', "Horari d'entrada");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', "Activitats de l'àrea");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Direccions');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Aeroports');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Altres transports');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Polítiques i reclamacions');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Direcció');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Visitants poden reservar online');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Posi això a "SI" per assegurar que els visitants puguin reservar una habitació online.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Reserves per a un període fix');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', "Si posa això en 'SI' les reserves seran per un període fix. Si es posa en 'NO', llavors assegúris que el 'día predefinit d'arribada' es va posar en 'SI' (si no vol forçar al client a arribar un día específic) en aquest cas no aconseguirá moltes entrades al calendari de disponibilitat");
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Període de Reserves: ');
jr_define('_JOMRES_COM_A_BOOKING', 'Reservar una Hb');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Màx. períodes, p.e. 3x7 períodes = 21 dies');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Es una habitació per a solters?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Reservar');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Confirmar la reserva');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Dilluns');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Dimarts');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Dimecres');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Dijous');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Divendres');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Dissabte');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Diumenge');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'Dl');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'Dm');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'Dc');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'Dj');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'Dv');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'Db');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'Dg');
jr_define('_JOMRES_COM_A_AVLCAL', 'calendari de disponibilitat.');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'El color del tipus de lletra per a la data actual');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'El color del tipus de lletra per dies en el mes de desplegament');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'El color del tipus de lletra per dies no en el mes de desplegament');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Color de fons per dies quan la propietat/espai està disponible');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Color de fons per dies quan no es mostra mes');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Color de fons per dies ocupats');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', "Color de fons per a reservar provisionalment els espais (reserves per a un dipòsit que no s'ha près)");
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Color de fons per a dates endarrerides');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Ocupat/no disponible');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Disponible per a reserves');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Reserves provisionals');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', "Dia predefinit d'arribada");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Només per als llocs que ofereixen les reserves fixes del període. Esculli el dia en que han de començar les arribades.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', "Dia fix d'arribada");
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', "Període de l'estància (dies)");
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Mostrar la disponibilitat?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Posi això a "Sí" per a mostrar els calendaris de disponibilitat');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Disponibilitat');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Click en una data lliure per a veure el formulari de reserves.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Reserves negres');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Noves Reserves negres ');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Borrar hoste');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Hoste borrat');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Incapaç de borrar aquest hoste ja que té reserves obertes. Cancel·li les reserves i provi un altre cop.');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'No importa');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Format de sortida del Calendari');
jr_define('_JOMRES_COM_CALENDARINPUT', "Format d'entrada del Calendari");
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', "Això permet canviar el format d'entrada de les dades");
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Les reserves fixes del període permeten interrupcions curtes');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', "Longitud d'interrupció curta");
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Publicat');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Auditoría');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Data');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', "Usuari (Nom d'usuari)");
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Filtre en la data');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Estat');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Arribada Pendent');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Arribades avui');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Resident actual');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Surt avui');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Sortida endarrerida');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'No haarribat');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Habitació creada');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Habitació actualitzada');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Habitació borrada');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', "Característica creada d'Hb");
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', "Característica actualitzada d'Hb");
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', "Característica borrada d'Hb");
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Propietat creada');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Propietat actualitzada');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Propietat borrada');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Configuració de propietat editada');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Propietats publicades');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Tarifa creada');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Tarifa actualitzada');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Afegir càrrecs per serveis');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Hoste Entrada');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Dipòsit ingressat');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Hoste creat');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Hoste actualitzat');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Habitació reservada');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Extra creat');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Extra Actualitzat');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Extra Borrat');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Extra Extra.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Reserva negra introduïda.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Reserva negra borrada.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Extra');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Descripció');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Nom');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Preu');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Extra actualitzat');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Editar article');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Extra borrat');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', "Administració d'extres");
jr_define('_JOMRES_COM_A_EXTRAS', 'Mostrar els extres en el moment de reservar?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', "Posi això a 'Sí' per a mostrar qualsevol extra que vostè desitgi oferir a l'hoste");
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Extres opcionals.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', "Dia d'inici de Reserva negra");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Serveis actuals resumits');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Administració de Reserva negra');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Error al reservar aquestes habitacions, una o més de les habitacions que vostè ha escollit no estan lliures.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Habitacions incluïdes en Reserva negra');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'No hi ha Reserva negra en la llista');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', "Número d'estrelles");
jr_define('_JOMRES_COM_A_RESET', 'Reposar');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Reserva cancel·lada');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Busqui aquí per a:');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Símbol de moneda');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Codi de moneda');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Fagi click per a més informació');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', '¿Limitar les reserves anticipades?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', "Posi això a 'Sí' si vostè vol limitar les reserves anticipades (utilitzar el pròxim camp per a posar el límit en termes de dies). Si vostè posa això a sí llavors si l'usuario intenta reservar més de n dies llavors la seva data d'arribada serà restaurada a la data d'avui");
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Dies de reserves anticipades estan limitats a:');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Impost');
jr_define('_JOMRES_COM_A_ROOMTAX', "IVA de l'habitació");
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Impost fix ');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', "Percentatge d'impost");
jr_define('_JOMRES_COM_A_EUROTAX', 'Impost');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', "Percentatge d'impostos");
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Arxivar tots els registres');
jr_define('_JOMRES_FRONT_TARIFFS', 'Les nostres tarifes');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Nom de tarifa');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Descripció de tarifa');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', "Tipus d'habitació");
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Vàlid desde');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Vàlid fins a');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'Per persona per nit');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'Per nit');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'No inclou caps de setmana');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Dies mínims');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Dies màxims');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Persones mínimes');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Persones màximes');
jr_define('_JOMRES_FRONT_PREVIEW', 'Inspecció previa');
jr_define('_JOMRES_COM_A_EDITINGMODEON', "Mode d'edició activat?");
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Text actualitzat.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', "Corregeixi l'idioma");
jr_define('_JOMRES_FRONT_PTYPE', 'Tipus de propietat');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Llista de propietats');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Editar tipus de propietats');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Tipus de propietat');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Descripció de tipus de propietat');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Tipus de propietat grabat');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Tipus de propietat borrats');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Recordi pagar');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Ningún servei extra per a facturar');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Dipòsit');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Quantitat completa');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Quantitat carregada en temps de la reserva');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', "Utilitzi aquesta opció per a decidir el que s'ha de carregar al reservar. Esculli el dipòsit si el dipòsit s'ha de carregar, o la quantitat completa si la quantitat completa s'ha de carregar.");
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Mesos del Cal. a mostrar');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', "En la disponibilitat de les habitacions, quants mesos del calendari s'haurien de mostrar?");
// V1.4
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Pasarel·les');
jr_define('_JOMRES_COM_A_CANCEL', 'Cancelar');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', "Esculli si us plau les habitacion(s) que vostè desitja tenir fora de servei, i les dates relevants. <br>Si una habitació no té una marca, no es pot incluir en la Reserva negra fins que totes les reserves estiguin completes/cancel·lades.<br/> Quan vostè hagi escollit les dates apropiades, fer click en el botó blau 'aplica' per a reexaminar la disponibilitat de l'habitació. ");
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<center>Si us plau entrar un altre cop.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Raó');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Utilitzar pasarel·les de Pagaments en Línea?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Esculli si us plau el seu mètode de pagament.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Pasarel·les de Pagaments en Línea permès?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Plugin modificat');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Plugin insertat');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'Veure la web de la propietat');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'Link Extern');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Posi el link del seu website aquí.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Editar Tarjeta de crèdit');
jr_define('_JOMRES_COM_A_EDITICON', "Editar la mida de l'icona");
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Diapositives');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Mostrar enllaç a Diapositives?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Mostrar diapositives en línea?');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Imatge de la propietat');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Mostrar enllaç a Tarifes?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Popups permesos?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Carregar les imatges en sèrie');
jr_define('_JOMRES_A_TABS_MISC', 'Miscel·lani');
jr_define('_JOMRES_A', 'Configuració de la pàgina');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Utilitzi les característiques globals de la propietat');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'Icona');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Esculli el plugin de la cerca que vostè desitgi utilitzar.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Ho sento, la seva cerca no ha trobat resultats. Modifiqui si us plau la seva cerca i provi un altre cop.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Segur que vostè desitja fer això?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Reservar una propietat');
//v1.4c
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Mostrar Tarifes?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Direcció');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Informació detallada');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Click per a habitacions i disponibilitats');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', "Mostrar informació de direcció a sota d'aquest enllaç");
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', "Mostrar detalls de la propietat a sota d'aquest enllaç");
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', "Mostrar habitacions i disponibilitats a sota d'aquest enllaç");
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Tarifa simple');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Promitjos');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Seleccioni el model de tarifa a utilitzar');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', "Vostè té disponible dos mètodes de calcular les tarifes. Primer, el mètode de 'tarifa simple' el qual permet ofertar diferents tarifes a l'hoste i el càlcul per estada és el mateix per a tota la estancia completa. Això és útil quan volem oferir diferents tarifes per a una mateixa data. Esculli l'altre mètode, 'tarifa promig' si desitja ajustar els preus dependents de la data. El sistema trobarà totes les tarifes per a cada dia de reserva i retornarà el promig de tot el período desitjat");
// v1.4e
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Mostrar data de sortida escollida');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', "Posar a SI si desitja mostrar el camp data de sortida. Només utilitzi si sap què fer, la data de sortida sempre s'activarà el dia després de l'arribada.");
// v1.4f
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Límit de descripció');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Això limita la quantidad de caràcters mostrats quan es descriu una propietat.');
// v1.4g
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', '¿Format date() utilitzat?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Publicar');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Despublicar');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Error en entrada de color de fons');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'País per defecte en formulari de reserva');
jr_define('_JOMRES_JAVASCRIPT_', 'Camps marcats amb * vermell són requerits.');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'Els usuaris poden registrar les seves propietats?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', "Posar a 'SI' si desitja que els usuaris estiguin habilitats per a registrar les seves propietats sense intervenció de l'administrador.");
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Camps marcats amb * vermell són requerits.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Propietat creada');
// v1.4i
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', "Mostrar calendari desde l'inici de l'any?");
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', "El calendari de disponibilitat es mostrarà desde l'inici de l'any actual.");
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Habitacions disponibles');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Tornar a detalls de la propietat');
jr_define('_JOMRES_FRONT_ROOMTYPES', "Tipus d'habitació");
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Límit de cerca aleatoria');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Mostrar enllaç a Google Currency Conversion en el llistat de tarifes?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Convertir preu a :');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'Permetre als usuaris editar utilitzant editors HTML?');
// v2
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', "Utilitzi aquest formulari per a fer la seva reserva. Mogui el cursor sobre les imtges de 'i' per a més informació sobre la columna. Modifiqui els seus detalls del registre com la data d'arribada i sortida i el número d'hostes, llavors seleccioni la habitació que desitgi de la llista de disponibilitat. Premi sobre qualsevol habitació disponible per a agregar-la a la seva reserva. Quan ho hagi fet, vostè pot afegir qualsevol extra optatiu, també pot proporcionar els seus detalls de direcció. Quan el formulari estigui complet utilitzi el botó per a confirmar el seu registre.");
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', "Utilitzi aquest formulari per a fer la seva reserva. Mogui el cursor sobre les imatges de 'i' per a més informació sobre la columna. Modifiqui els seus detalls del registre com la data d'arribada i sortida i el número d'hostes, llavors seleccioni l'habitació que desitja de la llista de disponibilitat. Premi sobre Qualsevol habitació disponible per a afegir-la a la seva reserva. Quan ho hagi fet, vostè pot afegir qualsevol extra optatiu, també pot proporcionar els seus detalls de direcció. Quan el formulari estigui complet utilitzi el botó per a confirmar el seu registre.");
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Particularitats de reserva');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Seleccioni els detalls requerits de la seva reserva');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Disponibilitat ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', "Seleccioni l'habitació que desitja");
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Mirar si la propietat està disponible per aquesta data.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Extres opcionals');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Seleccioni quin extra opcional desitja incluïr en la reserva');
jr_define('_JOMRES_COM_PERDAY', 'Per nit');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Direcció');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Si us plau ingressi els detalls.');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Habitacions disponibles');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Habitacions seleccionades');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', "<br>La possible data d'arribada més propera és: ");
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'Per nit:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Total:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Extres:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'impostos:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Descomptes:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Total Final:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Hostes');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Click per a afegir aquesta habitació a la seva reserva');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Click per a eliminar aquesta habitació de la seva reserva');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', "Tipus d'hostes");
jr_define('_JOMRES_VARIANCES_TYPE', 'Tipus');
jr_define('_JOMRES_VARIANCES_TYPE_TT', "Tipus d'hoste, Ex: Nens 5-10, o estudiants ");
jr_define('_JOMRES_VARIANCES_NOTES', 'Notes');
jr_define('_JOMRES_VARIANCES_NOTES_TT', "Notes del que vostè pot voler fer respecte a aquest tipus d'hoste");
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Màxim');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', "Màxim número d'aquest tipus d'hoste que pot ser seleccionat en la reserva");
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'És percentatge');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', "La figura calculada és un percentatge de la figura BASE calculada per a l'habitació. Si això es posa a 'NO' llavors la figura que vostè especifica simplement s'afegeix o substraeix del valor BASE de l'habitació.");
jr_define('_JOMRES_VARIANCES_POSNEG', 'Afegir variància?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', "La figura calculada s'afegeix o elimina de la figura BASE calculada per a l'habitació. Posi això a 'NO' si vostè vol això per a un descompte de la figura BASE.");
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Variància');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Quantitat a variar');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', "Modificat tipus d'ordre d'hoste");
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', "Eliminat tipus d'hoste");
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', "Creat tipus d'hoste");
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', "Actualitzat tipus d'hoste");
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', "Actualitzat tipus d'hoste");
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', "Mostrar enllaç a llistat d'habitacions en la pàgina de detalls de la propietat?");
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', "¿Mostrar <b>només</b> llistat de disponibilitat d'habitacions per calendari?");
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', "Canvïi això a 'Sí' per a desactivar desplegament del títol de propietat i detalls, per a que només el calendari de disponibilitat d'habitacions sigui vist en la secció de detalls de la propietat. Pensat per a usuaris que alquilen les habitacions de les propietats.");
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Interval mínim de Arribada-Sortida');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', "L'interval mínim en la reserva entre les dates d'arribada i sortida.");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', "Llistat d'habitacions en la reserva mostra número d'habitació");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', "Llistat d'habitacions en la reserva mostra nom d'habitació");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', "Llistat d'habitacions en la reserva mostra llistat de tarifes");
jr_define('_JOMRES_ORDER', 'Ordre');
jr_define('_JOMRES_REQUIREDFIELDS', 'Requerit');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', "Dies abans de l'arribada");
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', "Lapse mínim de dies entre avui i el dia de l'arribada.");
jr_define('_JOMRES_DTV', 'Variacions del tipus de data');
jr_define('_JOMRES_DTV_DOW', 'Dia de la setmana');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', "Tipus d'hoste per defecte");
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', "Número per defecte del primer tipus d'hoste a mostrar, si utilitza diferents tipus d'hostes.");
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Només els usuaris registrats poden reservar en línea?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Ho sentim, per a reservar en línea ha de ser un usuari registrat. Click aquí per a registrar-se en el lloc.');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Color de text per a enllaços en reserves');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Vores cap de setmana');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Habitació reservada');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Reserva negra');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Arrodonir dipòsit a número enter?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', '¿Carregar dipòsits?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Càrrecs de tarifes desats com figures setmanals?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', "Té l'opció de desar els càrrecs per tarifa en valors diaris i setmanals.");
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Preu per setmana');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', "Dates d'arribada arreglades: ");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Quan aquesta opció és seleccionada, els números de les dates són mostradas en el menú desplegable');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', "Data d'arribada incorrecta");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Data de sortida incorrecta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', "La reserva és molt curta. Es necessiten diversos dies entre l'arribada i la sortida:");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', "L'interval és");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', "Variant tipus d'hoste incorrecta");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', "Seleccioni el tipus d'hoste");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Masses opcions per a la llista de tarifes');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Ha escollit més habitacions que hostes, click en una habitació per a eliminar-la de la seva selecció');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Masses hostes per als llits disponibles');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Necessita més habitacions');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Esculli una habitació');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Nom requerit');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Cognom requerit');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'No. casa requerit');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Carrer requerit');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Poble requerit');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Regió requerit');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Codi postal requerit');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'País requerit');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Telèfon requerit');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Mòvil requerit');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Email requerit');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'Tenim VACANTS!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'No hi ha habitacions seleccionades');
jr_define('_JOMRES_BOOKING_NUMBER', 'Reserva no.');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Ok per a reservar, missatge de fons');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Baixar variables de plantilla?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Activar això per a baixar variables de la plantilla per a cada vista. Útil si desitja veure si cert element està disponible per a ser utilitzat en una plantilla determinada.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Figura és percentatge');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', "Posi això a 'Sí' si la figura de càlcul de persones és un percentatge. Si no llavors s'aplicarà com una xifra fixa.");
//v2rc2
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Límit en habitacions/tarifes disponibles');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', "Utilitzi això per a limitar el número d'habitacions disponibles i aranzels que es llisten en el formulari de reserva. Posi'l a zero si vostè no vol habilitar limitacions. ");
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'NO hi ha VACANTS!');
// Translate from here
// Introduced in v2.5
// v2.6
jr_define('_JOMRES_BOOKITNOW', 'Reservi ara: ');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', "Mode d'edició Global?");
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', "Vagi amb compte amb aquesta funció. Si s'estableix en Sí, el mode d'edició afectarà el text a mesura per a totes les propietats en el sistema per a la constant que s'està editant.");
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Símbol Global de moneda');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Plegat de Components');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Posi això a Sí, si el componente està plegat de manera que les àrees del mòdul i de capçalera no són visibles');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Només caps de Setmana');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Dies de cap de setmana');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', "Estableixi els seus dies de cap de setmana. Tarifes que permetin o no caps de setmana tindran aquesta opció en compte al generar la llista d'habitacions.");
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', "Seleccioni el seu país abans d'afegir altra informació de la propietat");
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Grabi els seus canvis abans de pujar imatges de la propietat');
jr_define('_JOMRES_TARIFFSFROM', 'Preus desde - ');
jr_define('_JOMRES_SEARCH_ALL', 'Tot');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Cerca per país');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Cerca per regió');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Cerca per ciutat');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Funció de cerca.');
jr_define('_JOMRES_SEARCH_BUTTON', 'Buscar');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Escrigui una paraula en el quadre i premi el botó.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Paraules de cerca: ');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Si us plau, introdueixi la seva arribada prevista i la data de sortida i premi el botó per a buscar habitacions disponibles en les dates escollides.');
jr_define('_JOMRES_SEARCH_PTYPES', 'Llistar propietats per tipus de propietat');
jr_define('_JOMRES_SEARCH_RTYPES', "Llistar propietats per tipus d'habitació");
jr_define('_JOMRES_SORTORDER_DEFAULT', 'Per defecte');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'Nom Propietat');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'Regió Propietat');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'Ciutat Propietat');
jr_define('_JOMRES_SORTORDER_STARS', 'Estrelles');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Detalls Propietat - ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Formulari de Reserva');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Actualitzi la seva direcció');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', "Revisar disponibilitat<br/>(La selecció d'habitació es resetejarà)");
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Revisar disponibilitat');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Modifiqui els seus extres opcionals');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', "Canvii la seva selecció d'habitació");
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Actualitzi la seva direcció');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Ho sentim una o més dades de direcció són incorrectes');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Imatge Habitació');
jr_define('_JOMRES_CURRENCYFORMAT', 'Format de moneda');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Opcions de cerca');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Logs Disponibles');
jr_define('JOMRES_COM_A_MESSAGE', 'Missatge');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normal');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Avançat');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Micro gestió');
jr_define('JOMRES_COM_A_TARIFFMODE', 'Mode configuració tarifes');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', "<b>Compte: Canviar entre diferents tipus de tarifes pot originar pèrdua de dades. Vegi les notes a continuació respecte a això</b>.
<br/><br/>
Té tres opcions per a configurar les tarifes.<br/>
Mode Normal: Pots tenir una tarifa per cada tipus d'habitació, això és vàlid per als següents 10 anys.<br/>
Micro gestió: Pots canviar el preu per cada día i habitació/propietat<br/>
Avançat: L'antic mètode Jomres de generar tarifes<br/>
<br/>
Els diferents modes de tarifes li permeten escollir el mètode de configuració de les tarifes que més li convingui. <br/>
El mode normal és el més simplista, però és més fàcil d'entendre, ja que creuarà referència d'habitacions i tarifes a tipus d'habitació/propietat i li permet configurar les habitacions i els preus en la mateixa pàgina. <br/>
Micro gestió li permet variar els tipus en el día a día sense haver de gestionar un munt de tarifes, que es realitza per lots de referències creuades de tarifes diferents entre sí. Això dóna lloc a una sèrie de tarifes que s'han creat per a que abarquin un període de temps, però no es poden aplicar una tarifa sobre una altra. <br/>
Mode avançat li permet crear una habitació i asociar-la amb un tipus d'habitació. A continuació, crea una tarifa que s'associa amb un tipus d'habitació. L'ús d'aquest mètode és possible aplicar una tarifa sobre una altra, per exemple, un tipus d'habitació \"Doble llit\" pot tenir una tarifa d'allotjament i esmorzar, y una altra per al llit, esmorzar i sopar. El mètode avançat requereix una mica més d'atenció als detalls, ja que és posible desassociar una habitació o tarifa d'un tipus d'habitació/propietat o configurar-la incorrectament vàlida desde i fins les dates, però dóna opcions de configuració que els altres modes no ofereixen. <br/>
<br/>
Degut a que els modes Normal i Micro gestió requereixen una posada a punt específica d'habitacions i tarifes per al mode de treballar el sistema pot ser necessari tornar a situar algunes dades per a fer les configuracions de l'actual compatible amb el mode d'edició actual tarifa. <br/>
<br/>
Normal -> Avançat. Sense canvis. Les tarifes vigents es mantenen. <br/>
Normal -> Micro gestió. Totes les tarifes existents s'eliminen. <br/>
Avançat -> Normal. Totes les tarifes existents s'eliminen. <br/>
Avançat -> Micro gestió. Totes les tarifes existents s'eliminen. <br/>
Micro gestió -> Avançat. Totes les referències creuades existents entre les tarifes s'eliminen, però les tarifes es mantenen. <br/>
Micro gestió -> Normal. Totes les referpencies creuades existents i les tarifes s'eliminen.<br/>");
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', "Mostrar la llista d'habitacions en el full de detall?");
jr_define('JOMRES_PROPERTYTYPE', 'Tipus de propietat');
jr_define('JOMRES_MAXPEOPLEINROOM', 'Persones màximes per habitació');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Persones màximes en la reserva');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Afegir nota');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Editar nota');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Borrar nota');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Veure notes');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Afegir nova nota');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Editar nota');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Borrar nota');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Llistat de reserves');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Les meves reserves');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Veure reserves');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Veure preferits');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'No té cap preferit afegir encara!');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Tipus de propieta');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Wise price');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'Actiu');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Aquest plugin permet activar i configurar els preus de les seves habitacions dinàmicament.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', "La majoría de les empreses recalculen els preus de les habitacions en funció del número d'habitacions d'un tipus requerit que estan disponibles en una data determinada. Això els permet oferir descomptes en el tipus d'habitació que no està ocupada durant un període determinat amb l'objetiu d'atreure als clients que d'una altra manera podrien perdre's. <br/> L'activació i configuració d'aquest plugin li permet oferir preus ajustables basats en el número d'habitacions d'un tipus seleccionat que estan disponibles en la propietat en un dia determinat. <br/> Threashold defineix el número de dies que desde la data actual fins la data d'arribada permet activar aquesta característica, ens permet la possibilitat d'ajustar el percentatge d'habitacions que poden estar disponibles abans de que un determinat descompte s'apliqui.");
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', "Threashold (número de dies entre l'arribada i la data actual)");
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', "Percentatge d'habitacions ocupades  10%");
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', "Percentatge d'habitacions ocupades  25%");
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', "Percentatge d'habitacions ocupades  50%");
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', "Percentatge d'habitacions ocupades  75%");
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'Descompte %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' ha sigut descomptat de  ');
jr_define('_JOMCOMP_WISEPRICE_TO', ' a ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', " Preu d'habitació no descomptat ");
jr_define('JOMRES_COM_A_MAPSKEY', 'Google maps API key');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'Pots obtenir google maps API key desde <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Un cop tingui introduït el seu map key aquí, Jomres mostrar el mapa en la seva pàgina de detall de la propietat.');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'Últim minut');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'Actiu?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', "Posar a Sí si vol oferir ofertes d'últim minut.");
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Threshold');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', "Si es fa la reserva i la data d'arribada és només N dies desde la data de reserva, el descompte pot ser aplicat");
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Descompte');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'En percentatge');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Un descompte ha sigut aplicat a aquesta reserva!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', "El cost de l'estancia ha sigut reduït en  ");
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', "Aquesta propietat ofereix un descompte d'últim minut de ");
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', " per cent si la seva data d'arribada és anterior a ");
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', " per cent o més si la seva data d'arribada és abans de ");
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Reservi ara per a disfrutar de la millor oferta!');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Informació detallada de tarifa');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', "Posar a Sí per a veure l'informació detallada en els detalls de propietat/tarifa");
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Reduïr al mínim les opcions de configuració');
jr_define('_JOMCOMP_AMEND', 'Modificar reserva - Selecció de propietat');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'Seleccionar nova propietat');
jr_define('_JOMCOMP_AMEND_HEADER', 'Contracte Original:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'Dipòsit Pagat');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'Dipòsit No Pagat');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Anulació Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Anulació de Dipòsit');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL', 'Cance·llar');
jr_define('_JRPORTAL_CPANEL', 'Panell de Control');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Tipus de Comissió predeterminada');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Esculli la comissió predeterminada que serà aplicada a la propietat en cas de que no sigui seleccionada una altra.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'Llista de tips de comissió');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Tipus de comissió');
jr_define('_JRPORTAL_CRATE_TITLE', 'Títol');
jr_define('_JRPORTAL_CRATE_TYPE', 'Tipus');
jr_define('_JRPORTAL_CRATE_VALUE', 'Tipus de comissió');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'Codi de moneda');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'Llista de propietats');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Nom propietat');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Direcció propietat');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'Les propietats que tinguin color de fons vermell encara no tenen un tipus de comissió aplicat.');
jr_define('_JRPORTAL_STATS_PATETITLE', 'Estadístiques');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Tipus de comissió');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Llista de reserves');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Propietat id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Factura id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Reserves total');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Data arxivada');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Descripció');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', "Pot tenir arxius específics d'idioma mitjançant l'ajust del nom de la subcarpeta, ex. 'yachtbrokerage' i copiar un arxiu de subllenguatge en la subcarpeta. Pot modificar aquell arxiu de llenguatges per aquell tipus de propietat per a convertir-se en habitacions, ex DVDs, ect.");
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', "No es pot eliminar aquesta propietat, ja que és la única propietat a la que té accés. Si desitja desactivar-la, si us plau utilitzi la característica de despublicar en la seva barra d'eines. ");
// Jomres v3.0.6
// Jomres v3.1
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Allotjament Total');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'nit(s) de ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'per habitació ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', "Augmentar la duració de l'estància ");
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Resum de preu ');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'Si us plau llegir i acceptar ');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'Un resum de su reserva es mostra a continuació. <br /> Per a fer qualsevol canvi, si us plau fagi clic en el botó Modificar reserva. ');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'Si necessita canviar qualsevol informació anterior, si us plau fagi clic aquí');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'Modificar Reserva');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'Si us plau, introdueixi qualsevol sol·licitud especial en el quadre següent.');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', "Confirmo que la informació anterior és correcta i d'acord amb la ");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'per persona per nit ');
// Jomres 3.1.10
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF')) {
    jr_define('_PN_OF', 'de');
}
if (!defined('_PN_START')) {
    jr_define('_PN_START', 'Començament');
}
if (!defined('_PN_PREVIOUS')) {
    jr_define('_PN_PREVIOUS', 'Anterior');
}
if (!defined('_PN_NEXT')) {
    jr_define('_PN_NEXT', 'Següent');
}
if (!defined('_PN_END')) {
    jr_define('_PN_END', 'Fi');
}
if (!defined('_PN_RESULTS')) {
    jr_define('_PN_RESULTS', 'Resultats');
}
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Tingui en compte que això no és un formulari de reserva, en el seu lloc està enviant un correu electrònic. <br/> Si us plau, introdueixi el missatge que li agradaria enviar a ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Contactar amb Hotel');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Consulta de la propietat de  ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Gràcies por la seva consulta, el seu missatge ha sigut enviat a la direcció de contacte de la propietat, amb còpia al seu propi correu electrònic per als seus arxius. Se li contestarà tan aviat com sigui possible');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' amb respecte a ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Consulta');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', "Si us plau seleccioni l'allotjament desitjat en la llista de la dreta");
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Habitacions mínimes ja seleccionades');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', "Número mínim d'habitacions prèviament seleccionades en la reserva abans de mostrar el combo de tipu d'habitació/tarifa que poden ser oferides. Li permet tenir les tarifes de descompte, quan més de N habitacions estan ja seleccionades. ");
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', "Número màxim d'habitacions ja seleccionades ");
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', "El número màxim d'habitacions ja seleccionades en la reserva abans de que el combo tarifes/habitació ja no s'ofereixi. Li permet deixar d'oferir aquest tipus de combinació de tarifes/habitació un cop que N habitacions hagin sigut seleccionats en el formulari de reserva. ");
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', "Tingui en compte que Suplement per persona no serà utilitzada si Suplement per persona s'estableix en Sí en la Configuració General. Aquests ajusts són una alternativa a tenir tarifes planes Suplement per persona, no una addició a la tarifa plana SPS.");
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'Disponible');
jr_define('_JOMRES_AVLCAL_QUARTER', 'Algunes reservas');
jr_define('_JOMRES_AVLCAL_HALF', 'Ocupació mitja');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'Ocupació alta');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'Complet');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Per setmana');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Per dia');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Per reserva');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Per persona per reserva');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'Per persona per dia');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'Per persona per setmana');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Per dia (Mínim dies)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Per dies X habitacions seleccionades');
jr_define('_JOMRES_REGISTRYREBUILD', 'Reconstruir registre');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', "Normalment, el Jomres plugin Registro es reconstrueix automàticament cada vegada que veu que l'administrador de plugins afegeix o treu un plugin, però és possible que vostè no pugui utilitzar aquestes característiques, per alguna raó, per tant vostè pot utilitzar aquesta funció per a reconstruir el Registro manualment. Si vostè té accés a la funció de l'administrador de complements i actualitzacions, llavors és poc probable que vostè hagi d'utilitzar aquesta funció. Haurà de reconstruir del plugin de registro sempre que afegeixi un nou mini-component i no utilitzi l'Administrador de complements per a afegir-lo.");
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Registre reconstruït amb èxit');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', "Hi ha hagut un error amb la reconstrucció del registro de minicomponents. Vostè ha de verificar el seu registre d'errors Jomres per a veure si hi ha un registre que ha provocat l'error.");
jr_define('_JOMRES_SEARCH_PRICERANGES', 'Buscar per rang de preu.');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'No té ninguna reserva encara!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Editar el seu tipus propietat');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Seleccionar el seu tipus propietat');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'La seva consulta...');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'Límit llista propietats');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', "El número de propietats per a mostrar en una pàgina després d'una cerca");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Funció de cerca integrada');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', "La característica cerca integrada Jomres permet als usuaris buscar a través de Jomres Propietats d' acord amb un conjunt de funcions. Si ja ha utilitzat les funcions de cerca de Jomres en Joomla vostè estarà familiaritzat amb aquests ajusts. <br/> Aquesta característica ens permet oferir el maneig de la cerca en Jomres per a aquells usuaris que no desitgen utilitzar mòduls de cerca de Joomla, o per a altres usuaris de CMS que no tenen els seus propis mòduls de cerca Jomres. <br/> Només recordi que si decideix buscar alguna cosa a través d'un enllaç (és a dir, no un menú desplegable), llavors les opcions de cerca no es duràn a terme, només l'element que es correspon amb l'enllaç que ha fet clic. <br/> Noti que per defecte el disseny d'aquesta cerca integrada no és molt bonic. Això és perque l'arxiu de plantilla que construeix el disseny ha d'incluïr totes les opcions possibles, algunes de les quals són incompatibles.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Activar aquesta funció?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Si aquesta funció està habilitada, qualsevol crida a Jomres que mostri la llista de propietats mostrarà també les opcions de cerca.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Utilitzar columnes');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', "Qualsevol opció de cerca que hagi definit com enllaç (quan sigui el cas) es mostrarà com columnes (IE posa br al final de l'enllaç)");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Cerca per regió seleccionant combo desplegable');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', 'Ofereix un menú desplegable de cerca per a filtrar a través de països/regions/ciutats. Si va a utilitzar aquesta funció, llavors serà millor que no utilitzi la cerca per regió o ciutat que segueix.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Buscar per nom Propietat');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Mostrar la cerca pel nom de propietat introduïda');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Mostrar com un desplegable?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', "Canvïi això a No per a mostrar la llista d'enllaços");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Buscar per ciutat/regió');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Mostrar la cerca per la regió introduïda');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Mostrar com un desplegable?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', "Canvïi això a No per a mostrar la llista d'enllaços");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Buscar per tipus de propietat');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Mostrar la cerca per tipus de propietat introduïda');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Mostrar com un desplegable?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', "Canvïi això a No per a mostrar la llista d'enllaços");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', "Buscar per tipus d'habitació");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', "Mostrar la cerca pel tipus d'habitació introduïda");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Mostrar com un desplegable?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', "Canvïi això a No per a mostrar la llista d'enllaços");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Buscar per característiques');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Mostrar la cerca per la característica introduïda');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Mostrar com un desplegable?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', "Canvïi això a No per a mostrar la llista d'enllaços com a descripció d'imatges i caselles de verificació");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Buscar per descripció');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Mostrar la cerca per la descripció introduïda');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Buscar per disponibilitat');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Mostrar la cerca per la disponibilitat introduïda');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Buscar per rang de preu');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Mostrar la cerca per rang de preu introduït');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Buscar per increments de rang de preu');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres mirarà en tots els valors de les tarifes a continuació, calcularà una sèrie de rangs de preus basat en els increments de valor que ha establert aquí.');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', "Per defecto, si una propietat no està seleccionada en Jomres es realitza una cerca. Si aquesta cerca no ha sigut provocada per un mòdul de cerca, llavors la cerca originarà resultats a l'atzar (deliberadament). Aquesta opció li permet limitar el nombre de resultats en aquesta cerc a l'atzar.");
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Ajustos de treball per a Cron i registre');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Pseudocron informació del treball. La funcionalitat pseudocron és necessària per a la facturació i maneig de la comissió.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', "Instal·lat minicomponents cron. Per a executar una tasca de cron individual utilitzi els enllaços que s'especifiquen a continuació. Tingui en compte que el cron jobs no produeix ningún resultat pel que no veurà ninguna informació en la pàgina. En canvi, es refereix a les anotacions de treball referides a continuació.");

jr_define('_JOMRES_COM_A_CRON_METHOD', 'Mètode');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', "Si vostè no té accés a cron jobs, activi aquest minicomponent, del contrari crei una tasca programada i dígali que s'executi<br /> <i>curl -s ".JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime('tmplcomponent').'&no_html=1> /dev/null</i> ');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Mostrar el registre en el navegador');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', "Només funciona si el mètode s'estableix en minicomponent.");
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Registre habilitat');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', "Posi això en Sí per a que el registre estigui habilitat. Els resultats dels registres s'emitiràn a continuació");
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Registre detallat');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Lots de registre de sortida');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Edició de plantilla');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Camps personalitzats');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Aquí pot definir camps simples personalitzats que es mostraràn en el formulari de reserva.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Nom de camp (sense espais)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Valor per defecte');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Descripció');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Requerit');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Quantitat màxima');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', "Si la quantitat màxima s'estableix en més de 1 , als hostes se'ls oferirà un menú desplegable per a escollir la quantitat dels extres que necessiten.");
jr_define('_JRPORTAL_TAXRATES_TITLE', 'Impost');
jr_define('_JRPORTAL_TAXRATES_CODE', 'Codi Impost');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'Descripció Impost');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'No pot borrar aquest Impost.');
jr_define('_JRPORTAL_TAXRATES_RATE', 'Tasa');
jr_define('_JRPORTAL_INVOICES_TITLE', 'Factures');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'No pagada');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Pagada');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Cancel·lada');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'Pendent');
jr_define('_JRPORTAL_INVOICES_USER', 'Usuari');
jr_define('_JRPORTAL_INVOICES_STATUS', 'Estat');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Plantejat');
jr_define('_JRPORTAL_INVOICES_DUE', 'Deguda');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Suscripció');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Total pendent de pagament');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Freqüència repetició');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Dia del mes recurrents');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'Codi de moneda');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Línies de comanda');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Nom');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Descripció');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Preu inicial');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Quantitat inicial');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Descompte inicial');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Total inicial');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', "Codi d'impost");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', "Descripció d'impost");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Tasa impositiva');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Reemplaçar els ajustos estàndar de la pasarel·la Jomres? ');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Mostrar les meves factures');
jr_define('_JRPORTAL_COUPONS_TITLE', 'Cupons descompte');
jr_define('_JRPORTAL_COUPONS_DESC', 'Els codis de descompte es poden generar i enviar ​​als clients com un incentiu per a fer reserves. Vàlid desde i fins les dates es refereix a les dates en que la reserva es pot fer en endavant, no a la data de la propia reserva.');
jr_define('_JRPORTAL_COUPONS_CODE', 'Codi de cupó');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'Vàlid desde');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'Vàlid fins');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'Import de descompte');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'El descompte és un percentatge');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Només habitació');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', "Si té un codi de cupó, si us plau escrigui'l en el quadre i fagi clic en 'Guardar cupó' per a guardar els detalls de cupó en la seva reserva.");
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Guardar cupó');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Cupó guardat en reserva');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Número de cupó no trobat');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Valor de cupó de descompte');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Descompte de reserva. Codi de Descompte vàlid/valor dels descomptes/configuració de cupó: ');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Escollir idioma');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', "Trïi les opcions d'idioma que es mostra en el menú desplegable");
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', "Mostrar el menú desplegable de selecció d'idioma?");
/*
* @ignore
*/
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Estimat/da');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Gràcies per registrar-se ');
jr_define('_JRPORTAL_NEWUSER_USERNAME', "El seu nom d'usuari és : ");
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'La seva contrasenya és : ');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Si us plau inicïi sessió per a veure les seves reserves ');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Cupó guardat');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Cupó borrat');
// Not used yet
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Usuari');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Contrasenya');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API id');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Número de telèfon notificacions');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Si us plau utilitzi el format 'codi del país, número de mòvil'. Per exemple, el número de mòvil en el Regne Unit sería per exemple '447979123456'. Deixi en blanc si no desitja que ninguna notificació de correu electrònic sigui enviada al teu telèfon mòvil.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<b>Obviament, no es pot utilitzar/provar aquesta pasarel·la desde localhost, haurà de fer-ho desde un servidor en funcionament.</b>
<br/>
<br/>
Per utilitzar la pasarel·la Clickatell necessita un compte de Clickatell i almenys una connexió registrada (API instància sub-producte) entre la seva aplicació i nostra porta d'enllaç. Cada mètode de connexió és conegut com un sub-producte. He aquí com:<br/>
<br/>
<b>Paso 1 - registrar un compte Clickatell </ b> <br/>
Si encara no té un compte de Clickatell, és necessari registrar-se per obtenir un com el que segueix. Del contrari vagi al pas 2. <br/>
* Anar a la http://www.clickatell.com/products/sms_gateway.php, i escollir el sub-producte adequat de la API (mètode de connexió) que desitja utilitzar (Clickatell Central (API)) <br/>
* Fagi clic en l'enllaç de registre. <br/>
* Ompli el formulari d'inscripció. <br/>
Un cop superat amb èxit l'enviament del formulari automàticament ingressarà en el seu nou compte i serà portat a una pàgina on vostè pot escollir els seus API connection. <br/>
<b> Pas 2 - afegir un registre API connection (sub-producte) </ b> <br/>
Si no està ja connectat al seu compte, ha de fer-ho en <br/> http://www.clickatell.com/login.php
* Seleccioni\"Administrar els meus productes\" en el menú superior. <br/>
* Seleccioni el tipus de connexió de la API que desitgi utilitzar (API HTTP) del menú desplegable ('Add Connection'). <br/>
* Completar el formulari. Asseguri's de que introdueix la IP bloquejada (la IP d'aquest servidor), ajustar Callback a HTTP POST. Haurà d'establir la devolució de trucada IP " .get_showtime('live_site')."/index.php?option=com_jomres&task=sms_clickatell_callback i un identificador d'usuari i contrasenya. <br/>
Si es registra més d'una connexió de la API, el nom de la descripció que ha introduït per a cada un ha de ser únic - no es pot tenir múltiples APIs amb el mateix nom <br/>.
Després d'enviar el formulari, les seves dades d'autenticació es mostraràn, incluïda la identificació única de cada connexió de la API (api_id). Aquestes dades d'autenticació es requereixen quan es connecta a la pasarel·la Clickatell per a enviar un missatge. <br/>
<br/>
Utilitzi el seu nom d'usuari, contrasenya i api_id per a omplir els camps anteriors.
<br/>
<br/>
");
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Utilitzar moneda global?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Posi això en sí per forçar totes les propietats que utilitzin la mateixa moneda (ex. & # 8 3 6 4 ;) ');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', "Mostrar el formulari Llista de reserva de l'habitació accessible");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Mostrar el formulari Llista de reserva Màxims ocupants');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', "Tingui en compte que els preus d'habitació indicats són estimacions i el preu total de la reserva no es calcularà fins que hagi afegit una habitació o habitacions a la seva selecció.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Suscripció paquets');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Nom');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Descripció');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Publicat');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Import total');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Límit propietats');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', "Subscriure's");
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Utilitzi la funcionalitat de maneig de subscripcions');
jr_define('_JOMRES_COM_NEWUSER', 'Crear nou usuari en reserva');
jr_define('_JOMRES_COM_NEWUSER_DESC', "Crear nou compte d'usuari en usuaris no registrats.");
jr_define('_JOMRES_CLICKTOREGISTER', 'Fagi clic aquí per a registrar la seva propietat');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', "Gràcias per la seva reserva - segueixi nous detalls d'usuari");
jr_define('_JOMRES_LATLONG_DESC', 'Utilitzi el seu ratolí per desplaçar-se pel mapa, i arrossegui el punter a la localització de la seva propietat per a indicar la seva latitud i longitud.');
jr_define('_JOMRES_CONTROLPANEL', 'Panell de control');
// Jomres v4.2
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Mostrar Factura');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Mostrar Factures');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Adegir la meva propietat a aquest lloc');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Alerta : ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Ho sentim, però aquest ID de paquet no es reconeix.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Ho sentim, vostè ja està subscrit a un paquet gratuït, vostè no pot subscriure el paquet de nou.');
jr_define('_JOMRES_COM_YOURBUSINESS', 'Les dades del seu negoci');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'Nom negoci');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'Número VAT');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Edifici número');
jr_define('_JOMRES_INVOICE_NUMBER', 'Factura No. ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Seleccioni les dates en que desitja aplicar la reserva negra. Quan hagi seleccionat les dates apropiades, fagi clic en el botó "Aplicar" per a comprovat la disponibilitat. <br/> 
<br/> 
Si la propietat té una o més reserves per al període desitjat, llavors vostè no serà capaç de fer la reserva negra fins que les altres reserves/reserves negres, hagin sigu cancel·lades/retirades.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Ho sentim, no pot fer reserva negra en aquesta propietat aquestes dates.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Pot fer reserves negres per a aquestes dates');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', "La seva propietat està configurada per a carregar per persona per nit, però vostè no té cap tipus d'evaluació creada o publicada, si us plau, crear i publicar un o més tipus d'hostes. ");
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'No té cap tarifa configurada encara, vostè no podrà realitzar cap tipus de reserva per a la seva propietat.');
jr_define('_JOMRES_EDITINGMODE_ON', 'Mode edició actiu');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Mode edició desactivat');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Carregar dipòsit variable?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', "Dipòsits variables permet definir si li agradaria cobrar la totalitat de la reserva si la data d'arribada està a N dies de 'avui'. Estableixi aquesta opció en Sí per activar la funció, e introdueixi el número de dies més endavant, així per exemple si el día d'arribada és en el termini de 60 dies, llavors com quantitat del dipòsit serà carregat l'import total, del contrari la quantitat es basarà en el dipòsit de les opcions configurades anteriorment.");
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', "El número de dies, en el que l'import total serà cobrat com dipòsit.");
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'Email de confirmació ha sigut enviat. Vostè pot tancar aquesta finestra ara.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', "Contacte amb l'agent");
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Marcar factura com pagada');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Factura marcada com pagada');
jr_define('_JOMRES_APIKEY_REMAKE', 'Fer nova API Key');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', "És una instal·lació d'una sola propietat?");
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', "Si aquesta opció està establida en Sí, l'interfaz Jomres a usuaris no autoritzats es simplifica enormement. Per defecte les crides a Jomres, en comptes de ser donades com una llista de les característiques, només portarà al client a la central de reserves per a la primera propietat en el sistema. Administradors de la propietat tampoc podran veure el botó Detalls de la propietat de vista prèvia o el botó Afegir nova propietat. Ideal si només vol una llista de béns i tenir reserves per a elles.<br/>");
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Balanç de pagaments');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', "Tingui en compte vostè està utilitzant el mode d'edició amb el mode global d'edició habilitat. Això està bé si vostè sap el que significa el mode d'edició global. Si no està segur si ha d'utilitzar Jomres d'aquesta manera, si us plau, consulti <a href='http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode' target='_blank'>el mode d'edició de pàgina del manual</a> per a obtenir més informació sobre aquest tema.");
jr_define('_JOMRES_SUPPORTKEY', 'Clau de Suport');
jr_define('_JOMRES_SUPPORTKEY_DESC', '.El seu número clau de suport (també conegut com el número de llicència). Vostè necessitarà una llicència actualitzada per a poder descarregar les actualitzacions i complements per a Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Descompte personal');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Registrar propietats limitades a un sol país?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', "Pot assegurar-se que els registres de la propietat es limiten a un sol país mitjançant l'establiment d'aquesta opció en Sí i establir el país en la següent opció.");
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Les propietats estan localitzades en aquest país : ');
jr_define('_JOMRES_JQUERYTHEME', 'Tema Jquery');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'Trïi un tema jQuery per a utilitzar per a les pestanyes dels detalls de propietat.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'Ho sentim, però la propietat no està disponible actualment.');
jr_define('_JOMRES_REVIEWS', 'Comentaris');
jr_define('_JOMRES_REVIEWS_TITLE', 'Títol comentaris');
jr_define('_JOMRES_REVIEWS_DATE', 'Publicat en ');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'Encara no hi ha comentaris per aquesta propietat.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Li agradaria ser el primer en fer un comentario sobre aquesta propietat?');
jr_define('_JOMRES_REVIEWS_IAGREE', "Estic d'acord amb aquest comentari");
jr_define('_JOMRES_REVIEWS_IDISAGREE', "No estic d'acord amb aquest comentari");
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Valoració mitja: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Vots totals:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Afegir un nou comentari.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Necessita estar registrat per enviar un comentari.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', "Digui'ns què opina d'aquest establiment : ");
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Aquest client ens va dir: ');
jr_define('_JOMRES_REVIEWS_PROS', 'Pors: ');
jr_define('_JOMRES_REVIEWS_CONS', 'Contres: ');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Enviat el: ');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'Vostè ja ha realitzat un comentari sobre aquesta propietat, no pot publicar un altre comentari sobre ella.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Ho sentim, però no es permet publicar comentaris en aquest lloc.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'Click per mostrar comentaris');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', " usuaris d'acord amb aquest comentari. ");
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' usuaris en desacord amb aquest comentari.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', " usuari d'acord amb aquest comentari. ");
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'usuari en desacord amb aquest comentari.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', "Gràcies per compartir la seva opinió d'aquest comentari.");
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', "Gràcies, però ja ha compartit l'opinió d'aquest comentari.");
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', "Si us plau assegúri's de que tots els camps estan correctament complimentats");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Si us plau, resumeixi el seu comentari introduïnt un títol');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Si us plau, introdueixi un comentari més complet en el quadre de descripció');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', "Si us plau, introdueixi les experiències positives com a client d'aquest establiment");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', "Si us plau, introdueixi qualsevol experiència negativa que s'hagi trobat");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', "Si ua plau, qualifiqui l'amabilidad que ha rebut per part del personal");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', "Si us plau, quina és la seva valoració de l'establiment");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', "Si us plau, quina és la seva opinió sobre la netedat de l'establiment");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', "Si us plau, qualifiqui l'allotjament. Era còmode o incòmode");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Si us plau, proporcioni la seva opinió sobre la relació Qualitat-Preu');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Si us plau, valori els serveis oferits');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Revisió del comentari');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'La seva experiència en major detall');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Gràcies per enviar-nos la seva opinió.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Gràcies per enviar-nos la seva opinió. Serà publicada en breu per un dels nostres moderadors.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Utilitzar la funció de comentaris de Jomres?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Publicar automàticament els comentaris?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', "Si s'estableix No haurà de publicar manualment els comentaris");
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Ajustar el mode test en els comentaris?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Normalment els Administradors de Propietat no poden fer comentaris. Naturalment això no és lo ideal en un lloc en funcionament.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', "Aquesta és una llista de totes les propietats. Per a veure els comentaris d'una propietat premi en ella. Desde aquí podrà publicar o borrar comentaris.");
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Número de comentaris no publicats');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Total comentaris');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Publicar/Despublicar comentari');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Borrar comentari');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'Informe de comentari');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Revisió dels comentaris');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Si us plau, introdueixi el seu informe');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', "Veu alguna cosa en aquest comentari que sigui qüestionable o inexacte? Informi'ns i veurem què podem fer per vostè.");
jr_define('_JOMRES_REVIEWS_SUBMIT', 'Enviar');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Informe creat per ');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', "Els informes són publicats pels usuaris que poden estar en desacord amb el contingut d'un comentari. L'única manera d'eliminar un informe és eliminar la revisió.");
jr_define('_JOMRES_REVIEWS_RATING', 'Valoracions (1 = escàs 10 = excel·lent) ');
jr_define('_JOMRES_REVIEWS_RATING_1', 'Hospitalitat  ');
jr_define('_JOMRES_REVIEWS_RATING_2', 'Localització ');
jr_define('_JOMRES_REVIEWS_RATING_3', 'Netedat ');
jr_define('_JOMRES_REVIEWS_RATING_4', 'Allotjament ');
jr_define('_JOMRES_REVIEWS_RATING_5', 'Relació qualitat-preu ');
jr_define('_JOMRES_REVIEWS_RATING_6', 'Serveis ');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'Comentat per : ');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'Amagar comentaris');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Mostrar Formulari de reserva en la pàgina de detalls de la propietat?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', "Posi això en Sí per mostrar el formulari de reserva en la pàgina de detalls de la propietat. Si s'estableix en No, apareixerà un enllaç en la pàgina de detalls de la propietat apuntant al formulari de reserva.");
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Els preus inclouen impostos?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Els preus són impostos incluïts? Si els seus preus inclouen impostos seleccioni Si. Si no estan incluïts seleccioni No.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'IVA extres:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', "El camp de día de la setmana li permet establir una tasa per a un determinat día de la setmana, un cop que fagi clic en el botó de día de la setmana tots els días de la setmana s'ajustaran a aquesta tasa.");
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', "Els selectors de data i la tarifa d'entrada li permeten establir un preu per a un interval de temps donat. Trïi una data d'inici i fi, introdueixi un preu, i fagi clic en el botó de fixació de tarifes.");
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Inici interval');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Fi interval');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Tarifa');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Fixar les tarifes');
jr_define('_JOMRES_PARTNERS_TITLE', 'Socis');
jr_define('_JOMRES_CALENDAR_RTL', 'fals');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Habitació ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'hoste(s). ');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', "Hem assignat el número d'hostes a les seves habitacions. Si desitja canviar aquesta assignació, haurà de contactar amb l\'hotel després de fer la reserva. Es poden aplicar càrrecs extra si canvia les assignacions.");
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', "Tingui en compte que la seva propietat no s'ha publicat encara, només es pot veure la propietat, els visitants del lloc no la veuran");
// 4.5.5
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Ordre de resultats predeterminat per a cerca per defecte');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', "Canviar aquesta opció per canviar l'ordre en que els resultats de la cerca són presentats de forma predeterminada.");
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Mostrar resultat de la cerca per menú desplegable');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Estil de llista habitacions');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', "En el formulari de reserva, utilitzant l'estil 'Clàssic', l'estil de llista d'habitacions li ofereix habitacions individuals per als clients. Amb l'estil 'Tipus d'habitació', els hostes trien el número d'habitacions de tipus X (per exemple, 2 x dobles) en lloc");
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Clàssic');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Tipus habitacions');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Calendari de la setmana comença el día, Diumenge Dilluns');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', "Només els clients de l'establiment poden fer comentaris?");
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Establir en Sí si desitja restringir comentaris només a aquells usuaris que hagin sigut hostes en aquest establiment.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Per habitació');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Hostes per habitació : ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Hoestes per reserva : ');
jr_define('_JOMRES_NUMBER_OF_ROOMS', "Número d'habitacions");
jr_define('_JRPORTAL_MONTHS_LONG_0', 'Gener');
jr_define('_JRPORTAL_MONTHS_LONG_1', 'Febrer');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'Març');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'Abril');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'Maig');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'Juny');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'Juliol');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'Agost');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'Septembre');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'Octubre');
jr_define('_JRPORTAL_MONTHS_LONG_10', 'Novembre');
jr_define('_JRPORTAL_MONTHS_LONG_11', 'Desembre');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', "Posi això en Sí per a reduïr el número d'opcions disponibles per als administradors de la propietat en la secció Configuració General. Això és útil si no vol que els administradors de propietats disposin de molts ajustos, en el seu lloc pot editar jomres_config.php per a definir les opcions per defecte de l'establiment.");
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Si us plau, seleccioni una opció per a la seva reserva');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p>If this option is set to Yes, then managers will be able to see the html editor provided with the CMS, and enter HTML into the description. This is a potential security risk as there is a possibility that they can introduce unwanted HTML or Javascript. Additionally, if they enter poorly formatted HTML the page design could become compromised. It's better to leave this option set to No wherever possible.</p><p>If all managers are trusted users (e.g. yourself) then you can leave it set to Yes and you modify the different HTML tags that they are allowed to enter in the Input Filtering tab in Site Configuration.</p><p>If, on the other hand, you're using Jomres as a portal where you invite users to add and administer their own properties then this isn't the ideal configuration. Instead you should leave this option set to No. With it set to No managers will instead see a markdown editor that they can use to enter basic formatting which should be sufficient for the majority of users.</p>");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', "Vista d'administració De Propietat");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Vista previa Lloc');
jr_define('_JOMRES_PARTNER_DISCOUNT', 'Descompte Associat ');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Buscar usuari');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', "Introdueixi alguns caràcters per a buscar un usuari.<br/> Quand seleccioni un usuari automàticament s'afegirà com Associat i el portarà a la pàgina següent on pot assignar propietats i descomptes per a l'usuari.");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Associats existents');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', "Trïi un Associat per a ser portat a la seva pàgina d'administració.");
jr_define('_JOMRES_PARTNER_SHOW_TITLE', 'Associat :');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Buscar per una propietat');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Introdueixi alguns caràcters del nom de propietat i seleccioni una propietat.<br/> Quan vostè seleccioni la propietat s'afegirà a la cartera de l'Associat, però encara no disfrutarà dels descomptes, serà necessari que els configuri vostè mateix.");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Propietats actuals');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Fagi clic en una propietat per a modificar la configuració de descompte de l'Associat per aquesta propietat.");
// 4.6
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'Aquest compte ha sigut suspès, no és possible administrar la seva Propietat(s) amb aquest compte.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', "Compte d'Administrador suspès");
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', "Compte d'Administrador rehabilitat");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', "Tingui en compte que el seu compte d'Administrador de la propietatd ha sigut suspès. Vostè no serà capaç de realitzar les funcions de gestió de la propietat fins que el compte hagi sigut restaurat.");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', "Tingui en compte que el seu compte d'Administrador de propietat ja està actiu. Vostè pot seguir exercint les funcions d'administració de propietats. Si us plau, ingressi en compte i assegúri's de que la Propietat(s) correcta han sigut publicades. Gràcies.");
jr_define('_JOMCOMP_MYUSER_REMOVE', 'Eliminar preferits');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Arxiu de dades de Reserves');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', "L'arxiu de reserva de dades és un volcat de la informació de la reserva, la informació és capturada després de confirmar la reserva fent clic. Passi el ratolí sobre una data per veure el volcat de les dades en brut. La informació és emagatzemada en la taula XXX__jomres_booking_data_archive.");
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Editar compte');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', "To add a user as a property manager, first enter the first few characters of their username in the field above. When the correct user has been found click on that name to select it, then choose which property(s) they should be a manager of.");
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Actuals Administradors');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', "Buscar per número d'hostes");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', "Mostrar la cerca número d'hostes en menú desplegable");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', "Buscar per número d'estrelles");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', "Mostrar la cerca número d'estrelles en menú desplegable");
jr_define('_JOMRES_SEARCH_GUESTNUMBER', "Número d'hostes");
jr_define('_JOMRES_SEARCH_STARS', "Número d'estrelles");
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Número de propietats');
// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY', 'Carregar Jomres jQuery library?');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'Pot establir això a NO si vostè té una plantilla que utilitza jQuery. Això pot resoldre els problemes de conflicte jquery en algunes plantilles, però no tots.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', "Enabling this option allows you to see the language switcher in the Fullscreen view in the frontend.");
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Les miniatures es creen automàticament per a les imatges carregadas.');
// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Ample màxim de miniatures petites (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', "Les miniatures petites s'utilitzen en la llista de propietats, mentre que les miniatures de mida mitjana s'utilitzen en la capçalera de propietat.");
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Altura màxim de miniatures petites (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Ample màxim de miniatures mitjes (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Altura màxima de miniatures mitjes (px).');
jr_define('_JOMRES_TOUCHTEMPLATES', 'Traducció etiquetes');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'Utilitzar la funcionalitat de Comissionista?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', "Posi això en Sí per mostrar el resultat de les factures de la comissió que s'han plantejat.");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Administrador de les reserves crea factures de comissió?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Si un Administrador fa una reserva, això també crea una línia en factura de la comissió?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Auto suspendre als administradors quan les factures són marcades com pendents?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Umbral per a la autosuspensió');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'Aquest umbral és el número de dies que un administrador té per pagar una factura abans de que sigui suspès i no publicades les seves propietats.');
//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', 'Idioma de context');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', "Aquesta característica permet a Jomres l'ús d'etiquetes que són apropiades per al seu enfocament actual, pel que si el seu interès es centra en una Yacht Brokerage (Venta de yats), canviar el context permetrà Jomres presentar les etiquetes d'un arxiu d'idioma diferent. Per exemple, si estableix el context per a 'Yacht Brokerage', llavors Jomres primer es troba el llenguatge actual, a continuació, buscarà en /'.JOMRES_ROOT_DIRECTORY.'/languages un sub-directori anomenat 'yachtbrokerage'. Si l'arxiu existeix en el llenguatge actual, l'arxiu serà utilitzat. Si no, llavors Jomres buscarà un arxiu d'idioma Inglés en aquest mateix directori. Si no es troba, Jomres utilitzarà l'arxiu d'idioma per l'idioma seleccionat en el directori /'.JOMRES_ROOT_DIRECTORY.'/languages.");
// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Configuració avançada del lloc');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', "Estableixi aquesta opció a Sí si desitja utilitzar les opcions avançades de configuració del lloc. Si vostè acaba de començar amb Jomres, llavors li recomanem, que per ara deixi això en No, ja que la instal·lació per defecte és suficient per a començar, ha d'afegir Jomres al menú principal i accedir a l'interfaç com 'admin' i començar a configurar la seva propietat(s). Tingui en compte que moltes de les opcions avançades només seran aplicables a les instal·lacions de Jomres Silver, els usuaris Jomres Lite no seran capaços de treure el màxim profit de la totalitat de les característiques permeses.");
jr_define('_JOMRES_CONFIG_JQUERY_UI', 'Carregar Jomres jQuery UI library?');
jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'Preu (descendent)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'Preu (ascendent)');
// 4.7.6
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'El resum de preus i estimacions ha de ser un preu per nit/setmana/mes?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Per nit');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Per setmana');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Per mes');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'Per persona');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'setmana(s) en ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'mes(os) en ');
// 4.7.7
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', "Com ha de treballar l'opció de cerca per número de persones?");
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Afecta a totes les cerques. Quan utilitzem la funció de cerca número de convidats, buscarem propietats les tarifes de les quals permetin allotjar un número major o igual al número escollit. Número igual o mayor? ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Si us plau esperi, la seva sol·licitud està en procés i serà redirigit a la pàgina web de Paypal.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Si no és automàticament dirigit a Paypal en 5 segons ...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Click aquí');
// 4.7.8
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Reserva vàlida a partir de');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Reserva vàlida fins ');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', 'Nom Hoste');
jr_define('_JRPORTAL_COUPONS_DESC_478', "Els codis de descompte poden ser generats i passats ​als clients com un incentiu per a fer les reserves.<br/>Dates Vàlides desde/fins per a referir-se a les dates en que pot ser una reserva feta, mentres que Data Reserva vàlida desde/fins es refereix a les dates en que la reserva que ha de cobrir el cupó sigui vàlida. Si la reserva es troba fora d'aquest període les tarifes normals s'aplicaran als dies fora d'aquest període.<br/>Si desitja que la reserva estigui disponible per a uns hostes específics, trïi el nom dels hostes en el menú desplegable per a limitar el cupó només a aquells hostes.");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'Amb el seu cupó, aquesta reserva ha sigut rebaixada de ');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', ' a ');
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', "Posi això en No per a desactivar la càrrega tant de Jquery UI javascript com d'arxius CSS.");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Carregar Jomres jQuery UI CSS library?');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', "Posi No només per a desactivar l'arxiu jquery UI CSS.");
//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Total inc impost');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Despublicar Propietat');
// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', 'Utilitzar Funcionalitat de Conversió');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', "Utilitza la funcionalitat de conversió online de jomres.. Això ofereix un desplegable de conversió als usuaris de la pàgina, on podran escollir la moneda en la que volen veure els preus ofertats. La presentació del preu s'ajusta per a monstrar el preu convertit, seguit pel preu 'natiu' de la propietat entre parèntesis..");
jr_define('_JOMRES_CONVERSION_DISCLAIMER', "Hem posat els nostres millors esforços en obtenir el més precís i més ràpid sistema de canvi de divisa que podem. El nostre servei de conversió de divises online està destinat a informació i no pretén reflexar canvis exactes. D'acord amb lo exposat anteriorment, no garantitzem l'exactitud dels canvis de divisa. Utilitzant aquest servei acceptes que l'ús de la mateixa corre pel teu compte i risc.");
// 5.2.1
// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'Conversió de moneda/codi de moneda');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'Detecció de IP, clau API');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', "Per a fixar automàticament en el desplegable de canvi de moneda, Jomres utilitza un servri gratuït anomenar IpinfoBB per a detectar el país del visitant, no obstant haurà d'obtenir primer una clau API en: <a href='http://ipinfodb.com/register.php' target='_blank'>IPinfoDB</a>.");
jr_define('_JOMRES_DEBUGGING_TAB', 'Depuració');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Allotjament iva excluït ');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Allotjament iva incluït');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'IVA Allotjament:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Obrir el formulari de Reserves');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Tornar als detalls de la propietat');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Seleccionat automàticament?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Balanç (després del pagament del dipòsit)');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filtrar recurss basats en les seves característiques.');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Últimes Reserves');
jr_define('_JOMRES_DATEPERIOD_SECOND', 'Segon');
jr_define('_JOMRES_DATEPERIOD_MINUTE', 'Minut');
jr_define('_JOMRES_DATEPERIOD_HOUR', 'Hora');
jr_define('_JOMRES_DATEPERIOD_DAY', 'Dia');
jr_define('_JOMRES_DATEPERIOD_WEEK', 'setmana');
jr_define('_JOMRES_DATEPERIOD_MONTH', 'mes');
jr_define('_JOMRES_DATEPERIOD_YEAR', 'any');
jr_define('_JOMRES_DATEPERIOD_DECADE', 'dècada');
jr_define('_JOMRES_DATEPERIOD_S', 's');
jr_define('_JOMRES_DATEPERIOD_AGO', 'fa');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'desde ara');
jr_define('_JOMRES_WHOLEDAY_TITLE', 'Les reserves són per a dies enters?');
jr_define('_JOMRES_WHOLEDAY_DESC', 'Per defecte els recursos de reserves de sistema estan apagats per la nit pel que una reserva del primer de Gener'.date('Y', strtotime('next year')).' al segon de Gener '.date('Y', strtotime('next year')).' només cobreix una nit. Però si canvia aquesta opció a Si, llavors la reserva cubrirà dies enters, pel que una reserva en aquests dies cubrirà ambdós dies i al client se li facturaran dos dies.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Per día');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Per persona i día');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Entrada');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Sortida');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'dia(s) en');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Data de Sortida incorrecta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', "La reserva és molt curta. Ha d'haver almenys aquests dies entre l'entrada i la sortida:");
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Mínim interval entre Entrada/Sortida ');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', "L'interval mínim en el formulari de reserva entre les dates d'entrada i sortida. Un interval de 1 significa que las dates d'entrada i sortida poden establir-se en el mateix día, però això depèn encara de l'interval mínim que és calculat automàticament pel motor de reserva, ja que comprova les tarifes vàlides pel període de reserva.");
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', "El preu resumit i l'estimat ha de ser facturat per día/per setmana/per mes?");
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Per día');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', "Dies abans de l'entrada.");
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', "El número mínim de dies ha d'abarcar desde 'hoy' fins la data d'entrada.");
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', "Canvïi això a Sí, si vol limitar reserves avançades (utilitzi el següent camp per a fixar el límit en termes de dies). Si canvia aquest camp a Sí, llavors si l'usuari intenta reservar més de x dies per adelantat, llavors el seu día d'entrada es fixarà en la data del día d'avui.");
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Mostrar camp de data de sortida?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Marqui això No si no vol mostrar el camp de data de sortida. Només utilitzi això si sap el que fa, ja que la data de sortida en les reserves es mostarà sempre com el día posterior a l'entrada.");
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', "Si marca això com Sí, llavors les reserves es prendran per un període prefixat. Si es marca com No, assegúri's de que el camp \"dia d'entrada definit\" no està marcat com Sí (a no ser que específicament vulguis forçar als clients a sortir en un día de la setmana que vulguis) d'una altra manera no tindrà molts links en el calendari de disponibilitat.");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', "Día d'entrada predefinit");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', "Només per a llocs que ofereixen períodes fixes de reserves. Trïi el día de la setmana en el que ha de ser realitzada l'entrada.");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', "Día d'entrada prefixat");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', "Dies d'entrada prefixats repetits:");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', "Quan les dateas prefixades d'entrada estan seleccionades, el número de dates que es poden veure en la llista desplegable. Fíxi's que la llista de dates no incluirà ninguna data si la reserva no és possible degut a reserves anteriors, i que la llista serà de fet el doble de llarga que el seu número seleccionat ja que tindrà un número similar de dates històriques (on sigui possible).");
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Per persona, per día');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Seleccioni Sí si vol canviar per-persona per-día. Si no, llavors els costos es calcularan en base a per-recurs-per-día.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', "Els dipòsits variables li permeten definir si li agradaria carregar la quantitat sencera a la data de l'entrada de la reserva en x dies desde avui. Marqui aquesta opció com Sí per activar aquesta característica e introdueixi més avall el número de dies, així per exemple si el día d'entrada està dins dels 60 dies, el dipòsit es carregarà per la totalitat de la reserva, en cas contrari la quantitat es basarà en les opcions de dipòsit configurades més amunt.");
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', "La majoría dels negocis recalcularan els preus del recurs basat en el número de recursos d'un tipus requerit que estan disponibles en la data donada. Això els permet oferir descomptes en un tipus de recurs/negoci que no està ocupat durant el período donat, amb l'avantatge d'atreure a negocis que d'una altra forma es podrien perdre.<br/> Activant i configurant aquest plugin podrà oferir preus ajustables en base al número de recursos d'un tipus escollit que estan disponibles en el negoci el día estipulat.<br/> L'umbral de dies, defineix el número de dies entre els que ha d'estar la data d'entrada abans de que els preus del recurs s'ajustin a aquesta característica, llavors les opcions de percentatges li permetràn configurar el percentatge de recursos que poden estar disponibles després de que se'ls apliqui un descompte donat. Fíxi's però que si múltiples recursos són reservats, el nivell actual de descompte s'aplicarà a tots els recursos i no es reduïrà a mesura que es seleccionin més recursos.");
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', "Umbral (número de dies entre la data d'entrada i avui.)");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Entrada pendent');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Entrada Avui');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Entrada realitzada');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Sortides Avui');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Sortides Finalitzades');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'No ha entrat');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Dies');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Marcar una reserva com entrada realitzada.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Marcar com reserva retornada.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Marcar una reserva com entrada reservada ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Marcar una reserva com retornada');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Cost per día: ');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Número de dies: ');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', "Anul·lació total d'Allotjaments");
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Guardar la Anul·lació');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', "Enviar als nous usuaris les seves dades d'accés?");
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', "Si l'opció de crear nou usuari est marcada com Sí, pot canviar aquesta opció a No per assegurar-se de que no se'ls envia els seus detalls d'accés un cop que s'ha creat l'usuari. Això pot ser útil si està afegint automàticament usuaris a una llista de correu, per exemple, i no vol que els usuaris es loguejin.");
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Mostrar impostos en el resum de totals del formulari de reserva?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', "Evitar que el formulari de reserva mostre els camps d'impostos en el resum de totals marcant aquesta opció com NO.");
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Umbral de cancel·lació');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', "Conectat, els usuaris registrats poden cancel·lar les seves pròpies reserves. Aquí pot fixar l'umbral en dies, en els que la reserva no pot ser cancel·lada després d'un cert número de dies abans del día d'arribada.");
jr_define('_JOMRES_EDIT_PROFILE', 'Editar Perfil');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'tipus de relació amb la propietat');
jr_define('_JOMRES_IMAGE', 'Imatge');
jr_define('_JOMRES_CRATES_CLICKINITIAL', "Premi sobre una lletra per a mostrar tots els negocis que comencen per aquesta lletra. Un cop que té una llista de propietats pot assignar tases de comissió a aquestes propietats o prémer sobre els seus icones d'edició per a veure les estadístiques dels negocis.");
jr_define('_JRPORTAL_TAX_RATE_EDIT', "Editar percentatge d'impostos");
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Editar camps personalitzats');
jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'Clau de llicència del servidor');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'Usuari de llicència del servidor');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', "Si vostè té un nom d'usuario i contrasenya en el servidor de llicència, si us plau introdueixi'ls. Això l'ajudarà a accedir als plugins als que està subscrit. Si ha ingressat una clau vàlida de suport en el camp de més avall, no és necessari insertar l'usuari i contrasenya aquí.");
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'Versió Actual de Jomres : ');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Última versió de Jomres');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Alerta : Hi ha una nova versió de Jomres disponible, se li recomana actualitzar quan pugui.');
jr_define('_JOMRES_PRODUCT_INFORMATION', 'Benvingut a Jomres, esperem que disfruti utilitzant el sistema de reserves preferit de Joomla. Si desitja comprar llicències de Jomres Plata u Or , <a href="http://www.jomres.net/prices" target="_blank"> Si us plau, visiti la nostra pàgina</a> per a obtenir informació sobre la millora.');
jr_define('_JOMRES_PRODUCT_INFORMATION2', "Aquest sistema és ideal per a qualsevol escenari, pot ser un sistema simple de reserva d'una sola propietat fins un lloc amb múltiples usuaris, en diferents idiomes amb múltiples propietats. Sius plau vegi la secció \"Ayuda\" a l'esquerra, incluïnt la pàgina de \"Como començar\" que el pot ajudar amb els primers passos.");
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Propietat Activa');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'Alternatives de configuració SMTP');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', "Marqui aquesta opció com Sí per utilitzar configuracions de SMTP alternatives. Un creixent número d'allotjaments web sembla que estan bloquejant la funcionalitat de PHP mail, pel que pot escollir anul·lar les configuracions que Jomres adopta del seu allotjament CMS (joomla) i utilitzar les configuracions al seu gust. .");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Allotjament Alternatiu');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Canvïi això al seu servidor de mail SMTP');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Port alternatiu');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'canviar això al seu port smtp');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Protocol Alternatiu');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Depenent de la seva configuració del seu servidor smtp, ha de deixar aquesta en blanc, o introduïr 'ssl' o 'tls'. Pregunti al seu proveïdor smtp si el desconeix.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Utilitzar autenticació');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', "si el seu servidor smtp requereix que els clients es connectin marqui Sí. S'utilitzarà llavors el nom d'usuari i contrasenya..");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Usuari Alternatiu');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Contrasenya Alternativa');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define('_JOMRES_QUICK_INFO', 'Informació Ràpida');
jr_define('_JOMRES_MENU_SHOW', 'Mostrar');
jr_define('_JOMRES_MENU_HIDE', 'Ocultar');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'Per defecte');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Qualsevol');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Registrats');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'Gestor');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Super Gesto');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Ningú');
jr_define('_JOMRES_ACCESS_CONTROL_TITLE', "Menu de control d'Accés");
jr_define('_JOMRES_ACCESS_CONTROL_DESC', "Aquesta característica li permet controlar qui podrà veure un plugin en el menú principal. Les opcions 00009 són visibles pels usuaris registrats i no registrats, les 00010 normalment són per a les activitats de recepció que s'utlitzen habitualment en el dia a dia, les 00011 s'utilitzen per a definir i configurar una propietat però s'utilitzen menys.");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Recepcionista');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', "Control d'Accés Total");
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', "Marqui aquesta opció com Sí per activar la característica de control d'accés total, després visita l'opció de Control d'Accés a sota de Manteniment del sistema per poder configurar els controls d'accés.");
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Observi, però, que aquests ajustos no controlen els scripts subratllats als que connecten, així per exemple si assigna <i>00009user_option_03_search</i> al 'Gestor', un usuari que coneixi jomres pot encara fer una trucada a j06000search.class.php introduïnt http://www.domain.com/index.php?option=com_jomres&task=search en la seva barra de navegacions. Això es fa intencionadament, ja que aquest Control d'Accés a Menú simplement controla el que pot ser vist en el Menú Principal de Jomres. Si necessita controls més ajustats, marqui Si l'opció de Control d'Accés Total en la Configuració del Lloc i torni a entrar en el Menú de Control d'Accés .");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', "Control Total d'Accés");
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong>Aquesta característica és per a usuaris avançats només. Si no sap per a què s'utilitza, i no té una raó específica per utilitzar-lo, si us plau torni a la configuració del lloc i marqui No en la casella de Control d'Accés Total.</strong><br/>
	Aquesta opció li permet controlar qui pot accedir als minicomponents (els qual amb alguna excepció estan insertats en el nucli dur del sistema). Si el nivell d'accés més pròxim al nom d'un script està fixat per defecte, llavors l'opcio de Control d'Accés Total estarà definit com Si <strong>qualsevol</strong> pote accedir als scripts que no podrien accedir i per tant, si pretens utilitzar aquesta funció HAS DE MARCAR el nivell de control d'accés per a <strong>tots</strong> els minicomponentes de Jomres llistats aquí. Si no sap el que fan aquests minicomponents, li recomanem encaridament que no utilitzi de ninguna manera aquesta funcionalitat.<br/>
	En Jomres, els nivells d'accés segueixen una piràmide, pel que els Super Managers són més grans que els Managers. En resum Super Manager>Manager>Recepcionista>Registrats>Sense Registre. Pel que si un usuari registrat té accés a un minicomponent, també el tenen el recepcionista, el manager i el super manager.<br/>
	Observi que no pot controlar l'àrea d'administrador dels minicomponents. Tot el món en el área d'administrador és considerat com un usuari de confiança i no se'ls impedeix l'accés a ningún script (especialment aquest).
	");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', "Precaució! Té activat el control d'accés total, però hem tingut en compte les opcions del control d'accés i les hem comparat amb el número de minicomponents que han de ser controlats, i les dos no coincideixen, per tant deu tenir scripts que no estan sota control. Això pot ser un problema de seguretat i se li insta a resoldre'l urgentement visitant la característica de Control d'Accés i comprovar que els nivells apropiats han sigut aplicats.");
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', "Usuaris amb drets d'administració d'aquesta propietat");
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'la seva direcció e-mail');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Paràmetres');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Força');
jr_define('_JOMRES_METATITLE', 'Meta títol');
jr_define('_JOMRES_METADESCRIPTION', 'Meta descripció');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Afegeixi la seva propietat : Pas 2 de 2');
jr_define('_JOMRES_CART_TITLE', 'Les meves reserves proposades');
jr_define('_JOMRES_CART_INFO', 'Observi, aquestes reserves encara no han sigut guardades. Si es desconecta o la seva sessió expira ese perdrà. Recordi confirmar les seves reserves!!!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'Confirmar reserva(s)');
jr_define('_JOMRES_CART_OR', ' o ');
jr_define('_JOMRES_CART_SAVEFORLATER', 'Guardar per a més tard');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'No té reserves guardades encara.');
jr_define('_JOMRES_CART_VIEWCART', 'Veure carret');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', "Subdirectori d'arxius d'idiomes");
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', "Punt d'inici de la Latitud per defecte");
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', "Punt d'inici de la Longitud per defecte");
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', "Quina ha de ser la longitud/latitud per defecte en el mapa de Google en la pàgina d'editar propietats, abans de que la marca hagia sigut moguda?");
jr_define('_JOMRES_SYSTEM_EMAILS', "Desde quina direcció s'envien els e-mails?");
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', "Deixi aquesta opció en blanc per a desactivar-la. Jomres utilitzarà la direcció(ns) de l\'hotel quan envïi emails als clients, però el seu servei d'email pot no acceptar emails desde direccions arbitràries (ex. només admeten mails d'una direcció autoritzada). En aquest cas pot utilitzar aquest camp per introduïr una direcció que s'introduïrà en el camp DESDE per a tots els emails.");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Veure com llista');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Veure com Foto');
jr_define('_JOMRES_COMPARE', 'Comparar');
jr_define('_JOMRES_REMOVE', 'Borrar');
jr_define('_JOMRES_RETURN_TO_RESULTS', 'Tornar als resultats de cerca');
jr_define('_JOMRES_ADDTOSHORTLIST', 'Afegir a Llista resumida');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Borrar de llista resumida');
jr_define('_JOMRES_VIEWSHORTLIST', 'Vegi la seva Llista resumida');
jr_define('_JOMRES_COOKIEPOLICY_1', 'Important: Política de Cookies');
jr_define('_JOMRES_COOKIEPOLICY_2', "Utilitzem cookies per ajudar a mantenir el nostre lloc relevant i fàcil d'utilitzar.");
jr_define('_JOMRES_COOKIEPOLICY_3', 'Llegir més...');
jr_define('_JOMRES_COOKIEPOLICY_4', "La legislació Europea requereix que totes les webs especifiquin clarament si s'uyilitzan cookies i el propòsit d'aquestes.");
jr_define('_JOMRES_COOKIEPOLICY_5', 'El motor de reserves i cerca de la pàgina necessita ser capaç de recordar les opcions que has escollit per poder treballar de la millor manera possible. Per això, necessita emmagatzemar informació que està associada a un petit arxiu anomenat "cookie" que únicament identifica el seu navegador, i per poder fer-ho, necessitem que accepte que podem utilizar-la. Si no accepta aquesta política de cookies llavors es veurà severament limitat en el que pot fer en la pàgina.');
jr_define('_JOMRES_COOKIEPOLICY_6', "Sí, accepto l'ús de cookies segons lo exposat.");
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'El dipòsit requerit és el cost de la primera nit?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Els preus es calculen en base a per nit. ¿Vol que el dipòsit sigui el càrrec per una nit?. Si és així, pot ignorar les següents opcions.');
jr_define('_JOMRES_NOTHINGINSHORTLIST', 'No ha afegit cao article a la seva llista resumida.');
jr_define('_JOMRES_SAFEMODE', 'Activar mode segur?');
jr_define('_JOMRES_SAFEMODE_DESC', 'Marqui Sí per canviar a mode segur. Desactivarà tots els plugins i Jomres només utilitzarà les funcionalitats del nucli.');
jr_define('_JOMRES_PRICE_ON_APPLICATION', 'PEA');
jr_define('COMMON_NEXT', 'Següent');
jr_define('COMMON_CANCEL', 'Cancel·lar');
jr_define('COMMON_SUBMIT', 'Enviar');
jr_define('COMMON_SAVE', 'Guardar');
jr_define('COMMON_DELETE', 'Borrar');
jr_define('COMMON_RETURN', 'Tornar');
jr_define('COMMON_CLOSE', 'Tancar');
jr_define('COMMON_BACK', 'Endarrere');
jr_define('COMMON_HOME', 'Inici');
jr_define('COMMON_NEW', 'Nou');
jr_define('COMMON_SEND', 'Enviar');
jr_define('RECAPTCHA_TITLE', 'reCaptcha');
jr_define('RECAPTCHA_INFO', "Captcha s'utilitza per assegurar-se de que el cliente que utilitza els formularis web és humana, i s'utilitza per evitar que als gestors de la propietat els omplin de Spam robots d'internet. Per utilitzar el formulari de contacte de Jomres hauràs de registrar-te en <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> i configurar el teu domini per rebre la clau pública i privada. Quan rebia aquestes claus, si us plau introdueixi-les més avall. El servei reCapcha és gratuït i el proveeix Google.");
jr_define('RECAPTCHA_PUBLIC_KEY', 'Clau Pública');
jr_define('RECAPTCHA_PRIVATE_KEY', 'Clau Privada');
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', "Temps d'espera de bloqueig d'arxiu");
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', "Per evitar el perill de que els usuaris fagin una reserva doble, Jomres utilitza un fitxer de bloqueig per evitar que una habitació sigui afegida a la llista d'habitacions disponibles en el formulari de reserva si algú més ha afegit tal habitació al seu la mateixa data. Per defecte aquest bloqueih es desactivarà en 3600 segons o una hora. Pot canviar el temps d'aquest fitxer de bloqueig canviant aquesta casella.");
jr_define('_JOMRES_BOOTSTRAPSWITCH', "'Activar les plantilles bootstrap de Jomres' i les seves funcionalitats?");
jr_define('COMMON_ACTION', 'Acció');
jr_define('COMMON_VIEW', 'Vista');
jr_define('BACKTOTOP', 'Tornar amunt');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Dèbil');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Fort');
jr_define('_JOMRES_INPUTFILTERING', "Filtrat d'Entrades");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', "Nivell de filtrat d'Entrades");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "La majoría de les dades introduïdes en el sistema es neteja primer traient les etiquetes html, després utilitzant la funcionalitat de filtrat de variables PHP per fer les dades més segures abans de que s'introdueixin en la base de dades. Vostè po voler permetre certes entrades (per exemple entrades de text en els detalls de pàgina de la propietat) per incluïr HTML. Hi ha dos nivells de filtrat que pot utilitzar en aquesta entrada, bé dèbil o fort. Només haurà d'utilitzar l'opció Dèbil si l'usuari que introdueix dades és de confiança, com companys administradors de sistema, d'altra manera ha de deixar aquesta opció com fort. Quan el marqui com fort (recomanat) pot especificar quines etiquetes permetre editant la següent opció 'Purificador HTML d'etiquetes permeses'. ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', "Etiquetes d'Entrada permeses");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "Poy editar les etiquetes que el purificador de html acceptarà a través del seu sistema de filtrat. Per defecte són 'p,b,strong,a[href],i' (per ejemple. Pàrraf, Negreta, Marcat, Enllaços i Cursives). Per a més informació d'etiquetes permeses, si us plau llegeixi la documentació del purificador HTML en<a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Pot canviar aquesta opció, però li recomanem que deixi la que ve per defecte.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Entrads permeses');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "Pot definir quines entrades de formularis permetran html editant aquesta opció, qualsevol entrada afegida a aquesta llista serà analitzada a través del purificador HTML en lloc de tenir tot l'Html separat. Per defecte és: 'descripcio_propietat hores_entrada_propietat _activitats_area_propietat direccio_conduint_propietat aeroports_propietat altrestransports_propietat politiquesreclamacio_propietat'. Afegeixi més entrades afegint el seu nom de formulari separat per un espai.");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Detalls de la propietat en pestanyes?');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Marqui aquesta opció per mostrar els detalls de la propietat en pestanyes. Marqui No si les vol visualitzar sense pestanye.');
jr_define('COMMON_PRINT', 'Imprimir');
jr_define('COMMON_EDIT', 'Editar');
jr_define('COMMON_COPY', 'Copiar');
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Joomla 3 inclou el bootstrap de twitter per defecte, i Jomres té plantilles i funcionalitats que utilitzaran aquestes plantilles. Per defecte si utilitza Homres en joomla 3 pot encara optar per utilitzar les plantilles Bootstrap de Jomres i les seves funcionalitats, però per defecte aquestes opcions estan marcades com NO.');
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Utilitzar plantilles Jomres Bootstrap en el frontend?');
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Aquí estan algunes alternatives que potser vulgui considerar.');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', 'Auto-detectar el país dels clients?');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', 'El sistema intentarà automàticament detectar el país dels clients si no ha reservat abans. Pot marcar aquesta opció No i definir quin país prefereix que apareixi per defecte en el formulari de reserva en la següent opció.');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'Sobre Jomres');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'ajuda');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Com començar');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', "Control d'Accés");
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'Eines per a desenvolupadors');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'idiomes');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', "generació d'ingressos");
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'estructura del lloc');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'Manual (online)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'El meu compte (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'Funcionalitat del portal');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Gestor de plugins');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'integració');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'Informes/estadístiques');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'ajuda');
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', 'Millores');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'mètodes de pagament');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Tarifa per defecte');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', "això només s'aplica a noves tarifes");
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Anys a mostrar');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', "Defineix el número d'anys a mostrar quan edita un tipus de tarifa.");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'rebuts');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'detalls de compte');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Accés');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Desconexió');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'buscar');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'panell de control');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'reserva');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'factures');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'Ajustos');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'miscel·lànea');
jr_define('_JOMRES_EDIT_COUNTRY_TITLE', 'Editar país');
jr_define('_JOMRES_EDIT_COUNTRY_ID', 'id de país');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Codi del país');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Nom del País');
jr_define('_JOMRES_EDIT_REGION_TITLE', 'Editar Regió');
jr_define('_JOMRES_EDIT_REGION_ID', 'id de Regió');
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Codi de la regió');
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', 'Nombre de la región');
jr_define('_JOMRES_COM_LISTCOUNTRIES', 'Llistar Paísos');
jr_define('_JOMRES_COM_LISTREGIONS', 'Llistar regions');
jr_define('_JOMRES_EXPORT_DEFINITIONS', 'Exportar definicions');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', "Aquesta característica li permet exportar les traduccions que han sigut creades utilitzant la característica de Traducció d'Idioma. Crearà un camp de text amb totes les dades requerides per construïr un nou arxiu d'idioma, tot el que has de fer és copiar i enganxar això en un nou arxiu d'idioma que pots posar en un nou servidor basat en Jomres, o si vols contribuïr a la comunitat Jomres.");
jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Traduïr locals');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', "Traduïr les cadenes d'arxius d'idioma");
jr_define('_JOMRES_COM_NOTAMANAGER', "Error, l'usuari amb el que estàs accedint no és un super usuari en Jomres, no podràs utilitzar aquesta característica fins que hagis utilitzat la funcionalitat de Mostrar Perfil per fer-te tant gestor i super gestor. Això és una funcialitat de seguretat.");
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'Disseny per defecte del llistat de propietats');
jr_define('_JOMRES_STAYFORAMINIMUMOF', 'Estància per un mínim de');
jr_define('_JOMRES_NIGHTSFOR', ' Nits per ');
jr_define('_JOMRES_AGENT', 'Agent');
jr_define('_JOMRES_AGENT_DETAILS', "Detalls de l'Agent");
jr_define('_JOMRES_AGENT_LISTINGS', "Anuncis de l'Agent");
jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', 'Aprovar automàticament noves propietats');
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', "Si marca aquesta opció com No entonces haurà d'aprovar manualment les novas propietats. Fins que una propietat no sigui aprovada no podrà ser publicada per un Gestor/Super Gestor de la Propietat.");
jr_define('_JOMRES_APPROVALS_MENU_NAME', 'Aprovacions');
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'Aquesta Propiedad encara no ha siguto aprovada. Un cop que ho sigui seràs capaç de publicar-la.');
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'Ho sentim, no pots publicar aquesta propietat ja que no ha sigut aprovada encara.');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'Una nova propietat requereix aprovació');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', "S'ha afegit una propietat al sistema que requereix la seva aprobació. Premi sobre l'enllaç per a veure la llista de propietats pendents d'aprovació :  ");
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'La seva propietat ha sigut aprovada');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', 'Felicitats, la seva propietat ha sigut aprovada, si us plau premi el següent enllaç per veure el panell de control de la propietat : ');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Els noms de les regions són traduïbles');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', "Si no té un servidor molt ràpid li aconsellem deixar marcat aquesta opció com NO. Degut a l'ampli número de noms de regions, la traducció de tals noms ocupa una gran quantitat de memòria que pot ralentitzar els seus resultats de cerca.");
jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Convidat reservat.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', "Ho sentim, aquesta adreça email ja es troba en ús. Si aquesta és la seva adreça email, si us plau assegúri's d'haver-se loguejat abans d'intentar reservar.");
jr_define('JOMRES_TAPTOCALL', 'Premi per trucar');
jr_define('JOMRES_NEWREVIEW_SUBJECT', 'Nova revisió per ');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'Una nova revisió ha sigut deixada per ');
jr_define('JOMRES_NEWREPORT_SUBJECT', 'Nou Informe');
jr_define('JOMRES_NEWREPORT_MESSAGE', 'Una nova revisió ha sigut informada per ');
jr_define('JOMRES_SUPERIOR', 'Superior');
jr_define('JOMRES_GRANDTOTAL_EX_TAX', 'Grand total (ex tax) : ');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', 'Grand total (inc tax) : ');
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Total tax : ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Type the two words: ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Enter what you hear: ');
jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Replay the audio track ');
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Download the track in MP3 format');
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'Visual mode');
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Audio mode');
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', 'Refresh');
jr_define('JOMRES_RECAPTCHA_HELP_BTN', 'Help');
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Sorry, that was incorrect. Please try again.');
jr_define('JOMRES_GOOGLE_MAPS', 'Google map options');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Use weather layer?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celcius');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fahrenheit');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Use transit layer?');
jr_define('JOMRES_GOOGLE_MAPS_POIS', 'Enable Gmap Points of Interest (including possibly your competitors)?');
jr_define('_JOMRES_METAKEYWORDS', 'Meta Keywords');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'Scan this code into your phone to get directions to us.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "The VAT number you entered doesn't appear to be correct. You should have something like this: BE805670816B01");
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Invalid VAT Number. Please check the validity of your VAT Number with the Europa VAT Number validation webservice (VIES)');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Congratulations. We were able to validate your VAT number.');
jr_define('_JOMRES_TAX_RULES_LIST', 'List tax rules');
jr_define('_JOMRES_TAX_RULE', 'Tax rule');
jr_define('_JOMRES_TAX_RULE_INFO', 'Tax rules are used to establish different tax rules for different regions. These tax rules affect the person making the booking, if they are registered, logged in and have edited their account using the "edit my account" page. The purpose of these rules is to accommodate bookers in those areas who are VAT exempt, you may find that you do not need to create many rules, if any at all.');
jr_define('_JOMRES_TAX_RATES_IMPORT', 'Import tax rates');
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', 'We can import tax rates for the EU for you, if you wish. Note, if you use this feature then all of your existing Tax Rates will be removed.');
jr_define('_JRPORTAL_TAX_RULE_EDIT', 'Edit tax rule');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', 'The VAT number for this property.');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Please enter the VAT number for this property.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'VAT number validated.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'VAT number not validated.');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Business details entered here will be used on commission and subscriptions invoices.');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "You don't seem to have filled in your account details yet. To list your property on the site, we need you to complete your account details before we can go further.");
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Production or Development?');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'If you set this option to Development we will enable error reporting, otherwise when set to Production that will be switched off. If this is a live server we recommend that you set this option to "production".');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Production');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Development');
//v7.3.3
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Resource details');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Tariff details');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Only');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'left!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Resource feature');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Unable to remove this resource feature, it is assigned to a resource. Remove the feature from this resource and retry.');
// v7.4
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'Media Centre');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Add images');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Room images');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Property main image');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Slideshow images');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'Clear list');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Drag & Drop files here');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Choose the resource you want to upload images for. If you can upload images for individual resources (e.g. rooms) you will be given a second dropdown to choose the specific resource. ');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'If you upload multiple images as the "Main property image" these will be used in the Property List . Slideshow images will be shown on the property details page.');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'View your image');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Delete image');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Upload image');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Room types icons');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Property feature icons');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Upload all files');
//8.0
jr_define('COMMON_PREV', 'Prev');
jr_define('COMMON_MORE', 'More');
jr_define('_JOMRES_DASHBOARD_TODAY', 'Today');
jr_define('_JOMRES_DASHBOARD_YEAR', 'Year');
jr_define('_JOMRES_DASHBOARD_MONTH', 'Month');
jr_define('_JOMRES_DASHBOARD_WEEK', 'Week');
jr_define('_JOMRES_DASHBOARD_DAY', 'Day');
jr_define('_JOMRES_HLEGEND', 'Legend');
jr_define('_JOMRES_HFILTER', 'Filter');
jr_define('_JOMRES_HFROM', 'From');
jr_define('_JOMRES_HTO', 'To');
jr_define('_JOMRES_HNEW_BOOKING', 'New booking');
jr_define('_JOMRES_HSTATUS_DEPOSIT', 'Deposit status');
jr_define('_JOMRES_HSTATUS_GUEST', 'Guest status');
jr_define('_JOMRES_HSTATUS_BOOKING', 'Booking status');
jr_define('_JOMRES_HSTATUS_PUBLISHING', 'Publishing status');
jr_define('_JOMRES_HSTATUS_INVOICE', 'Invoice status');
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', 'Invoice type');
jr_define('_JOMRES_HSTATUS_APPROVED', 'Approved');
jr_define('_JOMRES_HSTATUS_CURRENT', 'Current business');
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Show bookings for');
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Show invoices for');
jr_define('_JOMRES_STATUS_ANY', 'Any');
jr_define('_JOMRES_STATUS_PAID', 'Paid');
jr_define('_JOMRES_STATUS_NOTPAID', 'Not paid');
jr_define('_JOMRES_STATUS_CHECKEDOUT', 'Checked out');
jr_define('_JOMRES_STATUS_ACTIVE', 'Active');
jr_define('_JOMRES_STATUS_CANCELLED', 'Cancelled');
jr_define('_JOMRES_STATUS_PUBLISHED', 'Published');
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', 'Not published');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Guests with active bookings');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Guests with past bookings');
jr_define('_JOMRES_STATUS_BOOKINGS', 'Bookings');
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'Subscriptions');
jr_define('_JOMRES_STATUS_COMMISSIONS', 'Commissions');
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', 'All my businesses');
jr_define('_JOMRES_ACTION_SET_CURRENT', 'Set as current');
jr_define('_JOMRES_ACTION_CHECKIN', 'Check in');
jr_define('_JOMRES_ACTION_CHECKOUT', 'Check out');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'bookings');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'properties');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'guests');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'reports');
jr_define('_JOMRES_HLIST_GUESTS', 'Guests');
jr_define('_JOMRES_HLIST_GUESTS_MENU', 'List guests');
jr_define('_JOMRES_HLIST_INVOICES_MENU', 'List invoices');
jr_define('_JOMRES_HLIST_PROPERTIES', 'Properties');
jr_define('_JOMRES_HQUICK_BOOKING', 'Quick booking');
jr_define('_JOMRES_HDATE_OF_BOOKING', 'Date of booking');
jr_define('_JOMRES_HTWO_WEEKS', 'Two weeks');
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'This booking will be cancelled. Press OK to cancel the booking.');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'Today checkins');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'Today checkouts');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Current residents');
jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'Navigation bar location');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Default (content area)');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Fixed to top');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Fixed to bottom');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Inverted navbar (colour change)');
jr_define('_JOMRES_BOOKING_NUMBER', 'Booking number');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Show guests for');
jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap version');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', 'Currently only applies to the frontend. This option allows you to choose whether or not to use Jomres templates that are compatible with Bootstrap 2 or Bootstrap 3. Unless you are sure that your template works with Bootstrap 3 then we recommend you leave this set to Bootstrap 2.');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Show guests for');
jr_define('_JOMRES_HFIXED_PERIODS', 'Fixed periods');
jr_define('_JOMRES_HDEPOSITS', 'Deposits');
jr_define('_JOMRES_HBOOKING_FORM', 'Booking form');
jr_define('_JOMRES_HREQUIRED_FIELDS', 'Required fields');
jr_define('COMMON_PLACEHOLDER_FIRSTNAME', 'Tom');
jr_define('COMMON_PLACEHOLDER_SURNAME', 'Smith');
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
jr_define('COMMON_PLACEHOLDER_STREET', 'My Street');
jr_define('COMMON_PLACEHOLDER_TOWN', 'My Town');
jr_define('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME', 'My Hotel');
jr_define('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
jr_define('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
jr_define('EXTENDED_CONFIGURATION', 'Extended Configuration');
jr_define('SIMPLE_CONFIGURATION', 'Simple Configuration');
jr_define('_JOMRES_HRESOURCE_FEATURES', 'Resource features');
jr_define('_JOMRES_HRESOURCE_TYPE', 'Resource type');
 jr_define('_JOMRES_HEDIT_GUEST_TYPE', 'Edit guest type');
jr_define('_JOMRES_HEDIT_COUPON', 'Edit coupon');
jr_define('_JOMRES_HEDIT_EXTRA', 'Edit extra');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Create multiple resources');
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Generate resources');
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'How many resources?');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Resources type');
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Max guests per resource');
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Delete all existing resources?');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Please note, you are currently viewing the administrator area with Advanced Site Config set to No. If you want to see more options please set Site Configuration -> Misc -> Advanced Site Config to Yes.');
jr_define('DATATABLES_SINFO', 'Showing _START_ to _END_ of _TOTAL_ entries');
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Approval');
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', 'Reject booking inquiry');
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Approve booking inquiry');
jr_define('_JOMRES_STATUS_APPROVED', 'Approved');
jr_define('_JOMRES_STATUS_REJECTED', 'Rejected');
jr_define('_JOMRES_STATUS_INQUIRY', 'Inquiry');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Bookings require approval or availability confirmation?');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'If set to yes, when a booking is made, it will not show up on the availability calendars (and other guests can still book those days and resource) until the property manager accepts/confirms availability for the booking. Once confirmed, booking is inserted as provisional (if doesn`t override other bookings; other guests can`t book the same dates anymore) and an email is sent to the customer to make the payment.');
jr_define('_JOMRES_ERROR', 'Error');
jr_define('_JOMRES_ERROR_MESSAGE', 'Sorry! An error occurred while trying to process this function. It has been reported for you and we will look into it.');
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Message');
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', 'File');
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', 'Line');
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', 'Trace');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Email templates');
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Edit email template');
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'Email subject');
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', 'Email text');
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', 'Email type');
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', 'Email name');
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', 'Email description');
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Please see this page for help customizing the emails and a list of the available output: <a href="http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target="_blank">Email Templates Help</a>');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Site Admin New Booking Email');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'Email sent to the site admin when a new booking is made, if the global Paypal gateway is enabled');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Hotel New Booking Email');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'Email sent to property owner when a new booking is made');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Guest New Booking Email');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'Email sent to guest when a new booking is made');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Guest Confirmation Letter');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Printable letter or email that can be sent manually by the property owner to confirm a booking');
jr_define('_JOMRES_CAN_BE_APPROVED', 'This booking can be approved. All selected resources are available for the selected dates.');
jr_define('_JOMRES_CANT_BE_APPROVED', 'This booking can`t be approved because some of the resources are already booked for the selected dates. You`ll need to amend the booking first.');
jr_define('_JOMRES_SHOW_POWEREDBY', 'Show the Powered by Jomres link in the Jomres footer.');
jr_define('GUEST_BUDGET', 'Budget');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'Use Budget feature?');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Bootstrapped sites only! The Budget feature is a feature of the property list that a guest can use to highlight for them properties who's price per night is under a certain figure. The feature has some limitations in that it might not be appropriate for some sites that use many different currencies. Note, if you're using this and the Featured Listings plugin, your featured listing wrapping class is automatically changed to 'panel-primary' when the property list is shown.");
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Name: ');
jr_define('_JOMRES_FOR', 'For');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'night');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'nights');
jr_define('_JOMRES_LIVE_SCROLLING', 'Use Live Scrolling/Infinate Scrolling in property list?');
jr_define('_JRPORTAL_MONTHS_SHORT_0', 'Jan');
jr_define('_JRPORTAL_MONTHS_SHORT_1', 'Feb');
jr_define('_JRPORTAL_MONTHS_SHORT_2', 'Mar');
jr_define('_JRPORTAL_MONTHS_SHORT_3', 'Apr');
jr_define('_JRPORTAL_MONTHS_SHORT_4', 'May');
jr_define('_JRPORTAL_MONTHS_SHORT_5', 'Jun');
jr_define('_JRPORTAL_MONTHS_SHORT_6', 'Jul');
jr_define('_JRPORTAL_MONTHS_SHORT_7', 'Aug');
jr_define('_JRPORTAL_MONTHS_SHORT_8', 'Sep');
jr_define('_JRPORTAL_MONTHS_SHORT_9', 'Oct');
jr_define('_JRPORTAL_MONTHS_SHORT_10', 'Nov');
jr_define('_JRPORTAL_MONTHS_SHORT_11', 'Dec');
jr_define('DATATABLES_SEMPTYTABLE', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SINFO', 'Mostrant de _START_ a _END_ de _TOTAL_ registres');
jr_define('DATATABLES_SINFOEMPTY', 'Mostrant de 0 a 0 de 0 registres');
jr_define('DATATABLES_SINFOFILTERED', '(filtrat de _MAX_ total registres)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', '.');
jr_define('DATATABLES_SLENGTHMENU', 'Mostra _MENU_ registres');
jr_define('DATATABLES_SLOADINGRECORDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SPROCESSING', 'Processant...');
jr_define('DATATABLES_SSEARCH', 'Filtrar:');
jr_define('DATATABLES_SZERORECORDS', "No s'han trobat registres.");
jr_define('DATATABLES_SFIRST', 'Primer');
jr_define('DATATABLES_SLAST', 'Últim');
jr_define('DATATABLES_SNEXT', 'Següent');
jr_define('DATATABLES_SPREVIOUS', 'Anterior');
jr_define('DATATABLES_SSORTASCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SSORTDESCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SHOWHIDE', 'Change columns');
jr_define('_BOOKING_ONREQUEST', 'Booking on request');
jr_define('_BOOKING_INSTANT', 'Instant booking');
jr_define('_JOMRES_COM_FONTAWESOME', 'Include Font Awesome icon set?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Set this to Yes if your template does not include Font Awesome.');
jr_define('_BOOKING_CALCQUOTE', 'Request booking');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Dear ');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Select a site');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Site id');
jr_define('_JOMRES_IS_EU_COUNTRY', 'EU Country?');
jr_define('_JOMRES_HLASTCHANGED', 'Last changed');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'Hotel Booking Cancellation Email');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'Email sent to the property owner when a new booking is cancelled');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'Guest Booking Cancellation Email');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'Email sent to guest when a new booking is cancelled');
jr_define('_JOMRES_TEST_EMAIL_SEND', 'Send test email');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'Test email');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'This is a test email from your booking system.');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Test email sent successfully');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Test email was not sent');
jr_define('_INVOICE_TRANSACTIONS', 'Transactions');
jr_define('_OPENEXCHANGE_API', 'Open Exchange Rates API key');
jr_define('_OPENEXCHANGE_API_DESC', 'To convert prices between services you will need an Open Exchange Rates API key. You MUST have an API key to display prices correctly in Jomres, however you can <a href="https://openexchangerates.org/signup/free" _target="_blank">register for a free key</a> (hourly updates, 1000 requests/month - no HTTPS, email support or advanced features). Jomres downloads exchange rates once a day so as long as you use the key on only a handful of sites, you\'re unlikely to exceed these limits. Previous to Jomres 8.3 we used an older, undocumented Yahoo feature however have discovered that using this feature is in contradiction of Yahoo\'s Terms and Conditions. As a result we have to assume that the feature may disappear at some point in the future, hence the change to using Open Exchange Rates.');
jr_define('_JOMRES_COMMISSION', 'Commission');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'If you upload multiple images for individual optional extras, only the first image will be used.');
jr_define('_JRPORTAL_INVOICES_PAYNOW', 'Pay now');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'This invoice in now due. Please click the button to select the payment method.');
jr_define('_JOMRES_EXTRAS_TEMPLATE', "Here's a list of some of the great things you can purchase while making a booking at this property. ");
jr_define('GATEWAYS_INSTRUCTIONS', 'On this page you can configure any installed gateways. These options allow you to take payments for any Commission or Subscription invoices. Frontend settings can only be overridden by Paypal, all other gateways will need to be configured via the Property Configuration -> Gateways tab, however if a gateway appears in this list then it should be capable of processing both Booking deposit payments and invoice payments.');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Show in property details page?');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Property Details page settings');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Property management in Jomres is made only from the site frontend cpanel. On this page you`ll be able to list all properties in the system, so you can assign commission rates and approve/unapprove them (if these features are enabled). To create a new property, edit existing ones, manage bookings or any other property/bookings related tasks, you`ll have to login to the site frontend and go to the Jomres default page. There you`ll see the Jomres frontend cpanel.');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Room feature icons');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Property Feature Categories');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Edit Property Feature Category');
jr_define('_JOMRES_HCATEGORY', 'Category');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Show property features separated into categories?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Set this to YES to separate the property features into categories. This option affects only the property features displayed on the property details page. All other pages will display them without splitting them into categories.');
jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Undo checkin');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Undo checkout');
jr_define('_JOMRES_STATUS_UNISSUED', 'Unissued');
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'Your download and support key is valid, you will be able to download plugins via the plugin manager.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Your download and support key is NOT valid, you will be NOT able to download plugins via the plugin manager.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Sub-type');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "You haven't yet set your property sub-type. This is where you define it as something like a 5 bedroom villa or 4 bedroom cottage and it helps guests who are searching to refine their searches.");
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Give your property a sub-type');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Email templates');
jr_define('_JOMRES_CONTACT_SETTINGS', 'Contact settings');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'From here you can override all properties contact details (email, phone, fax) so all communication with guests will be sent to you and not to the property owners.');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Override listings contact details?');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "If this option is set to Yes then property email addresses and phone numbers will be replaced with the ones set in this tab. This forces all communications to be sent to your nominated email address ensuring that the guest and property owner can't bypass the booking engine and the commission charges that will result. It also means that whenever a property's description is changed the property will be set to Unapproved (if the approvals feature is enabled) and you will need to manually check the description to ensure that the managers hasn't entered telephone or email details into the text fields before approving it again.");
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Changes made to listing details require site admin verification. If you save new details, your listing will be unpublished and pending site admin approval before being visible again to site visitors. You won`t be able to receive online bookings while your listing is unpublished and pending approval.');
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Review booking request');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Confirm booking request');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Amend booking request');
jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Mark invoice as pending');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Invoice marked as pending');
jr_define('_JOMRES_TRACKING_ENABLE', 'Send anonymous tracking data?');
jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'Select Yes to send anonymous tracking data to Jomres.net to help us understand better how you use the system.');
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Please ensure that your details have been completed on the Edit My Account page before attempting to make bookings on behalf of your clients.');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', "Guest's contact details");
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', ' -- New Guest -- ');
jr_define('_JOMRES_CHARTS', 'Charts');
jr_define('_JOMRES_CHARTS_SELECT', 'Select chart...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'Income by year/month');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Ok, let's get started. First you need to create some rooms for this property.");
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Create some rooms now');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Research has proven that properties with lots of high quality images generate more views. Upload a main image and some slideshow pictures to improve your chances of getting bookings.');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Upload an image');
jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Create some tariffs');
jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'What will guests book?');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Is this property type a hotel type property, where you rent out rooms in the property, or a villa type property, where you rent out the whole property in one booking? ');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Rooms in the property');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'The entire property');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Both'); // This is an interim setting that gives backward compatability for existing users who won't yet have updated their property types. It won't be selectable
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'What will guests book?');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "You'll need to complete your address details so that your guests can find you when they come to stay.");
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Update your address');
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Oops, it looks like you might have forgotten to complete all the fields.');
jr_define('_JOMRES_CONTANT_US', 'Contact us');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Welcome to your new online listing for ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Hi, and welcome to your new property on ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', "You recently added a new property to our website, and we'd like to welcome you to the family.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'You can see your new dashboard ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', ' here ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', "Once you've setup your property you can see how it looks to site visitors by visiting ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', ' your front page.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', "(it's not published, so site visitors can't see it yet).");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', "At the top of the page you'll see a number of messages. The buttons next to these messages will guide you to the pages you need to visit to set up your property on our site. Once you've performed each of these tasks it'll be much easier for visitors on our site to find your property and make bookings online.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'If you have any questions at all, please ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'contact us');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', "and we'll be delighted to answer all your questions.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'All the best, our team at ');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK', "You don't seem to have any tours to sell. Create a tour profile, then use the Generate button to create some tours.");
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Let's create some tours!");
jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'Swap currency symbol location');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Use this option to move the currency symbol from behind of, to in front of the price figure, or vice versa.');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Enter your facebook page id, for example "jomres". Leave this blank to show nothing. Do not enter https://www.facebook.com or anything else.');
jr_define('COMMON_DOWNLOAD', 'Download');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Next you will need to add some tariffs. These are your basic prices.');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap is not enabled!');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Warning, you do not have Bootstrap enabled in Jomres Site Configuration -> Misc tab. To provide <i>some</i> functionality Jomres is currently using it\'s old, jQuery UI based templates, however these have not been worked on in several years. All current development and improvements of Jomres templates ( layout files ) are made to it\'s Bootstrap 3 template files. To get the best out of Jomres we recommend you install a Bootstrap 3 based theme for Wordpress or Joomla. Once you have done that you can enable Jomres\' Bootstrap templates in Site Configuration.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Your support key is valid. Note that this license does not allow plugin downloads.');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Drag bookings to this area to cancel them');
jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] ) otherwise you will not be able to access Jomres from the site frontend to manage your properties and bookings.');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Before you can create a room type, we need to know if it's for a hotel type property, or a villa type property.");
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Click to add new room types');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Warning, you have one or more property types with no room types. Properties need room types so that property managers can create tariffs.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Use the New button to create new Room Types.');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tours');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'No bookings/Real estate ( simple listing )');
jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Log file location');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres logs system activity by default to the '.JOMRES_SYSTEMLOG_PATH." location. As this file may contain sensitive information ( api keys, system paths, gateway information, guest information) we strongly recommend that you change this path to one above your web document root. If you don't understand what this means, please ask your web hosts for advice as they'll know your file system.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres logs detailed information about your system, including api keys, system paths, gateway and guest information, all of which should not be visible to the rest of the internet. Your System Log path is not set, so system logs are currently being saved to the '.JOMRES_SYSTEMLOG_PATH." directory, which is not ideal. Please visit Site Configuration -> Debugging and set a path in your filesystem that's outsite of the web root. If in doubt, please contact your web hosts as they will be able to advise you.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'If your CMS is installed in the root directory of your website, then a suitable location would be ');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "You do not have a Google Maps key set. Due to recent changes in Google maps, all new sites will need an API key to be able to use Google map's features. Please <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>see our manual page on how to create an API key</a> and save the key in Jomres.");
jr_define('JOMRES_GOOGLE_MAP_STYLE', 'Google map colour scheme');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Right, let's start adding your property to the website. We need to collect a little information about your property here. This will allow us to set up the bare bones of your property. Once that's done, then you'll be guided through adding rooms, prices and images.");
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'The property type helps you to define how the property will be booked, for example with hotels you "sell" just one or two rooms at a time, whereas with villas you offer the entire property.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Note that the email address doesn't need to be the same as the one you used when registering your account. This allows you to have different addresses for different properties.");
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Minimum Deposit');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'You can configure the minimum deposit amount to be charged. If you do, then the "Deposit required is cost of the first night?" & "Deposit required is percentage?" settings in Property Configuration cannot be configured, instead all deposit values are a percentage and must be at least the figure you define here.');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'This figure cannot be less than ');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslog host');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Syslog Port');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "If you want to send system logging messages to a syslog server, you can set the Hostname or IP ( e.g. 192.168.0.2) and port (e.g. 514) here. Note, if the site is set to 'Development' then DEBUG messages will be sent. If set to 'Production' then only INFO level and higher messages will be sent. To disable logging to the remote server, empty the host and port fields.");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP is not allowed to access the the 'openlog' and 'syslog' PHP functions. This is a server side setting, if you'd like Jomres to send messages to a syslog server, please consult your hosts and confirm if PHP is allowed to access these functions. Once enabled, you will be able to configure your syslog server's settings here.");
jr_define('_JOMRES_SEND_ERROR_EMAIL', 'Send an email to site admin when an error occurs?');
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "Historically issues that should be investigated have been emailed to site owners. This can be great for keeping an eye on the running of your system as it has an awful lot of moving parts and it's difficult to keep track of all of them. Unfortunately, Spiders and Bots crawling your sites ( even friendly ones ) can inadvertently trigger fatal errors and this can cause the number of messages you recieve to be overwhelming. If that's the case then set this option to No. Jomres sends logging messages to both a set of logging files and to a syslog server ( if  your specific PHP settings allow, if they don't please contact your host ). You can manually analyse the files if you are looking for something specific ( for example, if you're developing a gateway and want to use the gateway_log() function call.) but that's a lot of information to trawl through so it's better to use something like a syslog file analyser. If you're developing on linux then there are lots of tools available to you, if on Windows then a simple tool you can use is http://maxbelkov.github.io/visualsyslog/ On this page set the 'Syslog host' to '127.0.0.1' and the 'Port' to 514 to see messages logged in that tool. ");
jr_define('_JOMRES_FAQ', 'Frequently asked questions');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_INTRODUCTION', 'Introduction');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_WHATISJOMRES', 'What is Jomres?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_WHATISJOMRES', "Jomres is a hotel and villa booking system that works with the Joomla and Wordpress Content Management Systems. It's a full booking system, think 'booking.com' or 'airbnb' without the expense. It's a complete toolkit that allows you to build a unique online booking service for as many properties as you want.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_USERSADD', 'Can users register on my Jomres site and add their own properties?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_USERSADD', 'Yes. By default Jomres allows registered users to add their own properties to your site. You can disable this in the Site Configuration > Misc tab if you need to.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PROPERTIES', 'Properties');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_ADDPROPERTIES', 'How do I add a new property?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_ADDPROPERTIES', "When Jomres is installed the administrator user is created as a Super Property Manager. Log into the frontend of your CMS (the public pages) as your administrator user and from there you can add new properties. <br/>You can create new managers in the Property Managers page if you want to add a new manager, however by default ( you can disable this ) any registered user who creates a property is automatically created as a property manager for the properties they create. For security reasons they cannot administer other manager's properties. This can be changed by elevating that user to a Super Property Manager in the Property Managers page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_IMPORTPROPERTIES', 'Can I import properties from another system?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_IMPORTPROPERTIES', "There are a number of ways you can import properties. The Property Import plugin allows you to import properties via CSV. This allows you to import multiple properties at once, but is an administrator only feature. If the property manager has a Beds24 account then they can import any existing properties from their account there once they've linked API keys. Another way is to use the API, there is a feature to add and remove properties however this would require you to be a developer familiar with using REST APIs to use this functionality.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_IMPORTBOOKINGS', 'Can I import bookings from another system?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_IMPORTBOOKINGS', "Bookings can be imported into a property by a property manager through the iCal plugin, which offers a feature to import bookings in the property manager's menu. Also, if a property manager has a Beds24 account and their property has been linked with Beds24, then they can perform a Resend Notify action in Beds24. ");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_EMAILTEMPLATES', 'Can I edit email templates?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_EMAILTEMPLATES', 'Property managers can edit email templates through their toolbar under Settings > Email Templates.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Payments');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TAKEPAYMENTS', 'How do I allow properties to take payments?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TAKEPAYMENTS', 'You will need to install a payment gateway. Jomres has two payment gateways, which connect to Paypal or Stripe. It also offers a couple of Offline gateways, and you can purchase other payment gateways from our partners.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_WHICHGATEWAY', 'Which gateway should I use?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_WHICHGATEWAY', "If you want to take a percentage of a manager's deposit for your own costs, then use the Stripe gateway. If you don't, and instead intend to use the Subscription and/or commission functionality, then you'll need to use the Paypal gateway.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PAYMENTACCOUNTS', 'When a guest makes a payment for a booking, who gets the money?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PAYMENTACCOUNTS', "That depends on how you have set up payment gateways on your site. If you're using Paypal, you can configure it to override all frontend settings, essentially making your account the only account that receives payments. If you don't choose to do that, then each property will need to setup their payment gateway account in Settings > Gateways tab. If you're using Stripe, then once the property manager has connected their account to yours ( see the Stripe documentation in the manual for more information ) then they'll receive all funds, minus a commission fee that you can configure if you choose to do so.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_TROUBLESHOOTING', 'Troubleshooting');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_EMAIL', "Booking emails aren't being sent.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_EMAIL', "If you're having problems sending emails from the system, please check your host CMS's email settings. Jomres uses the Wordpress or Joomla settings for sending emails. If they're wrong, Jomres will not be able to send emails either.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "You can't see the payment gateway after making a booking.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "If you are logged in as a Property Manager, you will not see the payment gateway, because you don't pay yourself, silly. Only non-manager users will see the gateway when making bookings.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PURCHASINGJOMRES', 'Jomres License');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE', 'After buying X license, am I forced to purchase renewals once the license has expired?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE', "No, if you've purchased a Starter, Business or Enterprise license, then you can continue using the software indefinately, it will not be magically cripped. The exception to this rule is if you purchase a subscription. Once a subscription has been cancelled you will no longer be able to use the plugins and you will need to uninstall them.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_EXPIRED', 'My license has expired, can I upgrade Jomres anyway?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_EXPIRED', "While you physically can, it's not recommended that you do. Once a license has expired you will no longer be able to benefit from support or download updates to plugins for your Jomres installation. This means that you should <i>not</i> upgrade your Jomres installation after the license has expired. This is because plugins regularly need to be updated to work with current versions of the system, so often your older plugins will not work on a newer version of the system. If you still want to upgrade to take advantage of new functionality, you should purchase a Renewal license, which is effectively a normal license with a 50% discount.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_SOFTWARELICENSE', 'What software license is Jomres released under?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_SOFTWARELICENSE', "Jomres is licensed under both the MIT and GPL licenses. Plugins downloaded by Starter, Business and Enterprise licenses are released under the same license, and are completely free and open source. Plugins downloaded for trial and subscription licenses are not released under the GPL or MIT licenses and are Ioncube encoded. This approach allows us to offer you a variety of different licenses to suit everybody's pockets.");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Properties');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'How do I create a property?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Click on Properties > New Property to add a new property.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'How can I see what my property looks like to guests?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Click on Properties > Preview to see how your property looks to guests.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'How do I add rooms?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "How you add rooms depends on your Tariff Editing mode. In the Normal tariff editing mode, you don't need to add rooms, as they're automatically added when you configure your prices. If you are using Micromanage or Advanced tariff editing mode, then in Settings > Rooms you can add, edit and delete rooms. You will also be able to create room features, and assign these features to those rooms. Additionally, you will be able to upload images for individual rooms using the Media Centre. When  you create rooms, you should try to ensure that they reflect your real-world rooms in your property as that will make them easier to manage.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'How do I set room prices?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "This depends on your tariff editing mode. If you are using the Normal Tariff editing mode ( Property Configuration > Tariff Editing Modes tab) then you can configure the number of rooms you have, the price, the number of people each room can accommodate and the total number of people you want in each booking. This mode allows you to set room prices for the next 10 years. <br/>If you are using the Advanced or Micromanage tariff editing modes, then you are able to set room prices for every day for years to come. You can also have multiple tariffs for the same room type, for example you can have one tariff for Bed&Breakfast and another for Bed, Breakfast & Evening meal. Unless you have a specific need, we recommend that you use Micromanage all the time, Advanced will work in the same way but you need to be careful to ensure that your different tariff's start and end dates are consecutive.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'How do I create optional extras?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Extras can be added to bookings and are configured in Settings > Extras. These can be either optional or 'forced', in other words the guest cannot de-select them in the booking. You can offer different methods of charging for optional extras, and whether or not they're shown in your Property Details page. Because extras can be made to only show if a booking is within certain dates ( for example, for seasonal fruits ), you should make sure that you have set the Valid from and To dates. Once you have created optional extas, you can upload images for them through the Media Manager.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'How can I take payments online?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "To take payments online, you need to have an account with an online payment provider, called a Gateway. To see the available gateways, go to Property Configuration > Gateways tab. Click on a gateway's name to be taken to it's configuration page.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Can I give discounts?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Discounts can be given, there are a number of different ways this can be done. If you are making a booking on behalf of a customer, then you can set your own Deposit and Booking totals in the booking form, using the \"Override Accommodation Total\" and \"Override Deposit\" fields ( guests can't use this feature ). Another way to give a guest a discount is to create discount coupons, which can be configured so that they can only be used between certain dates ( Valid from/to ) or applied only when the booking falls between certain dates ( Booking valid from/to ). This discount coupons can be assigned to just one guest, or if you want you can print out the coupons. The printout includes a QR code which guests can scan into their phones that takes them to your booking form with the discount code already applies. ");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Bookings');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'When I click New booking, I am taken to the Contact form, why?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Before you can take bookings online, you must first configure some prices (tariffs) for each room type you have in your real-world property. Once you have created some tariffs, you will be able to take bookings.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'What are Black Bookings?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Black bookings are bookings that have been created to take a room or rooms out of service. They're not associated with any guests and are useful, for example, if a room needs to be refurbished.");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Images');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'How do I upload images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "To upload images, you need to visit the Settings > Media Centre page. On this page you will see several panes. At the top you might see some notes, and underneath them you'll see a dropdown. This dropdown allows you to select which resource you're uploading images for. <br/> On the right is a column with Add Images, Clear List and Upload all. Click Add Images and select some images from your desktop or mobile device. When you've done that, the column will change to a list of thumbnails. From here you can upload one or more images for your resources.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "What is the 'Main' image?");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'The Main image is the one that appears in search results and in your property header ( the area at the top of pages that show something about your property ). You should choose an image that displays your property in the best possible light. To upload a main image, make sure Property Main Image is selected in the dropdown list at the top left, then upload one or more images. If you upload more than one image, then all images will be used in the search results page displaying as a small slideshow.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'What are room feature icons?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Room features can be created by users of Micromanage or Advanced tariff editing modes. These can be linked to one or more rooms, and are displayed in the booking form. Once you have created a room feature, you can upload an image for that feature by first selecting Room Features Icons in the dropdown in the Media Centre, then selecting the room feature's name from the dropdown that will appear underneath.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'How do I upload room images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', 'Rooms can be created by users of Micromanage or Advanced tariff editing modes. Once one or more rooms have been created, you can upload multiple images for each room through the Media Centre (select the room name/number after selecting Room Images in the dropdown). These images can be seen in a slideshow by viewing the Preview page and selecting the Our Rooms tab then clicking on the Availability link.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'How do I upload slideshow images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Slideshow images are seen in the Property Details ( Preview ) page, next to the Book Now button.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'How do I upload Extras Images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Similar to the rooms and room features, you need to create an Extra first. Once that's done, you can select Extras in the top dropdown. When you've done that, you need to select the name of the Extra from the dropdown list below. When the name is selected you can upload one or more images for that Extra.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES_SETUP', 'How do I setup currency symbols?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES_SETUP', "You don't. All currency symbols are already stored in the system, and it's up to property managers to select the currency that's right for them in the Property Configuration page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES', 'How do I enable multiple currencies?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES', "Jomres has functionality to convert prices from one currency to another automatically. First you need to visit the Site Configuration > Currency Conversion tab. In there you will find links to two online services. The first service, once the API has been saved, allows Jomres to download currency conversion data once a day. The second enables IP based geolocation for users. Request a free API key from each service. With these two services combined, Jomres can detect the user's local currency, and display prices of properties in both the guest's local currency, plus the hotel's own currency. If you don't setup these API keys then Jomres will default to the Euro currency symbol. If you want you can set a global currency code. This means that property managers will not be able to select any other currencies, however potential guests will still see prices in thier own local currency unless they've used the currency switcher feature to change the currency that prices are displayed in. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'How do I save descriptions in multiple languages?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "To save descriptions in multiple languages, first visit the Settings > Property Details page. Save the description for your property there. Next, change the language that you're viewing the site in. Now go to the Settings Property Details page again, and save the details again. So, if the site is capable of showing both English and Spanish (or any other) languages, you would select English, enter the description in English then click Save. Next, change your current language to Spanish, then save the new Spanish description. This works for all inputs on that page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PROPERTIES_NUMBER', 'How many properties can I list?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PROPERTIES_NUMBER', "There's no coded limit to the number of properties that you can list, the only limitation is in the physical limitation of the server itself. If it's a server with many other accounts on then resources will be limited, if, on the other hand it's a dedicated or virtual dedicated server, then you will be able to list many more properties.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Can I modify other properties on this site?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'No, you cannot. You can only administer properties you have created or been assigned to as a property manager.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Can I modify other properties on this site?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Yes you can, you're a Super Property Manager and can modify any properties shown in the List Properties page.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'What are Guest Types/How do I change per person per night?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "In Settings > Property Configuration > Tariffs and Currencies tab, you can decided whether you want to charge per person per night. If you charge per person per night, you will need to create one or more guest types. You can create a simple guest type, where you just give them a description ( e.g. 'Persons' ), or you can create several different guest types, for example 'Adults' and 'Children under 10'. For the children, if you want to offer a discount of 50% then you'd set 'Is percentage' to Yes, and the Variance value to 50. Rooms have base rates, this setting allows you to adjust the price of the room based on the guest type.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'What are Room Features?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Room features are things that make the room stand out. They can be something simple like Tea and Coffee making facilities, or they can be things that really make the room rise above the others, like 'Views over the bay'. Once you have created a Room Feature, you can upload images for that feature in the Media Centre. These room features can be viewed on the room availability page, and if you've configured your property to show the Classic Rooms list style ( where guests can selected exactly which room they want to book ) then they can use the room features to filter ooms shown in the booking form.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_PROFILES', 'Can I make a user a property manager?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_PROFILES', "Yes you can, through the Property Managers page under User Management. If the user is already registered, in the input at the top of the Property Managers page type the first few characters of their username and their username will appear underneath. Click on their username and you will be taken to a page where you can configure which properties they have access to. If they're not already registered, you'll first need to use your host CMS's user management pages to add them as a user to the CMS.<br/><br/> A word of advice : If you intend to charge property managers for listing their properties on your site, either through taking commission via the Stripe gateway or subscriptions/commission functionality, we don't recommend that you add users in this way. In this instance, only super property managers should be added using this process, and when they are added you shouldn't select any properties in the list underneath. All other users should be encouraged to create properties themselves in the frontend. This will add them as property managers automatically and ensures that the correct user is billed.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PLUGINS', 'Plugins');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS', 'What is the Plugin Manager for?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS', 'The Plugin Manager is a key tool in Jomres. It allows us to distribute the most up-to-date version of Jomres plugins to you through an automatic download and installation feature.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_IONCUBE', 'Why do I see a warning about Ioncube Loaders when I click on the Plugin Manager page?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_IONCUBE', "You have saved a Trial license key in Site Configuration, but your web server doesn't offer the latest Ioncube Loaders. Please ask your hosts to install the loaders, which can be found  <a href='http://www.ioncube.com/loaders.php' target='_blank'>on this page.</a> If you have purchased a full, non-subscription license and you think you're seeing this in error, you may have forgotten to enter your full license key in the Site Configuration page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_INSTALLATION', 'How do I install a plugin?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_INSTALLATION', "Assuming that you have a valid license key number saved in Site Configuration, all you need to do is click the Install button next to the plugin name in the plugin manager. Jomres will install the plugin for you and bring you back to the plugins page afterwards. Occasionally, instead, you might be taken to a Discovery page if you're running Jomres in Joomla. Just click the Discover button to install the plugin.<br/><br/>NOTE Don't install all of the plugins, they don't all work together ( by design ). You could end up with blank pages in the booking form. Instead, identify the plugins you need and experiment with each one.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_SITESTRUCTURE', 'Site Structure');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_INTRO', 'What does Site Structure mean?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_INTRO', "Site Structure in Jomres refers to the various elements of your site that make it unique. It defines the Property types you list for ( e.g. villas or hotels ) and the room/sub types for those property types. So, if you're selling self-catering holidays, then you would be selling rentals of something like a chalet or villa. Different chalets could have different numbers of rooms, balconies etc. In the case of Hotels or B&Bs, you're selling rooms <em>in</em> the property, and they'd be double bedrooms, singles etc. To help clarify this, a default installation already has several rooms and property types created for you to help you understand. If you want to sell Tours, do not try to create a new property type without reading the section on Tours first.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYTYPES', 'What are Property Types?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYTYPES', 'In this system, a Property type refers to, literally, the type of property. This can be a hotel, a villa, an apartment. Property managers cannot create Property types because Property types are an item that can be searched by guests. To ensure that your search functionality stays nice and neat and tidy, only Site administrators can create property types.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURES', 'What are Property Features?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURES', "Property features are things that make a property unique. For example, one Property Feature could be that it's 'Close to the beach' whilst another hotel could have the feature that it's inside a national park, offers bridleways, something like that. Like Property Types, managers cannot create new features, they can only select from the ones you create. Property Features can have images assigned to them. First you need to upload feature images through the Site Strucutre > Media Centre > Property Feature Icons dropdown. Upload as many feature icons as you want, then when you create a Property Feature you can choose it's image.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURECATEGORIES', 'What are Property Feature Categories?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURECATEGORIES', "Property features are displayed in the Property Details page, among others. On the Property Details page, features can be displayed grouped by categories, for example 'Living Area', 'Accessibility' etc.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_ROOMFEATURES', 'What are Room features?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_ROOMFEATURES', "Property managers that use Micromanage or Advanced tariff editing mode are able to edit their rooms directly. They're also able to create things called Room Features which are displayed in the Room availability page for each property. If they use the Classic rooms list display in the booking form, then guests are able to use Room features to filter out rooms before selecting one or more. On the Site Structure > Room features page Site Managers are also able to create room features, and these features can be seen in all property booking forms where the property uses the Classic Rooms list. Basically, it's a Global Room feature. These Room Features can be configured to only be shown to certain property types, and images for these room features can be uploaded through the Site Structure > Media Centre page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_COUNTRIES', 'Why is there a page to edit countries/regions?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_COUNTRIES', "You'd think that a list of countries was fairly immutable, but you'd be wrong. Over the years, when maintaining a list of countries, we've see many changes. As a result, we learned that it was easiest to allow Site Managers to define the countries they'd like to show on the site. This allows the die-hard Catalan to display their province as a unique country, if that's the statement they'd like to make. The same goes for other regions of the world.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_LOCALISATION', 'Localisation/Translation');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_LOCALISATION_INTRO', 'How do I translate things?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_LOCALISATION_INTRO', "Translation of labels/strings is done through the Languages menu options, mainly the Translate Language File/Translate Locales pages. Because the language files are very large, when you click on this page they can take a while to load. <br/><br/>Let's look at an example. Let's say that you want to translate Germany to Deutschland. First click on Translate Locales. Next check the language dropdown in the top right from English to German. Next, scroll down the page until you get to Germany. You can see it has a dotted underline. This means you can translate it. Click on the word, you will see a popup containing the word 'Germany'. Change this to 'Deutschland' and click the green tick. If your host CMS is configured to offer German language pages to site visitors, then the word 'Germany' will now be shown as 'Deutschland'. This concept applies through-out Jomres. <br/><br/>On the Property Manager pages, Property Managers might also see a Label Editing Mode dropdown at the top of their pages. When this is set to On, then they will also be able to make changes in the frontend, however those changes will only affect their currently Active property, so for example they can easily change the word Tariffs to Prices for just one property if that's what's required.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_TOURS', 'Tours');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_INTRO', 'What are tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_INTRO', "This may sound like a silly question, but in fact it's not. Over the years we've learned that different cultures have different perceptions of what a 'tour' is. As a result, expectations of selling tours vary wildly, so before we discuss tours, first we will define what we think of tours as. <br/> A tour is a simple journey or visit to view an attraction or monument. A stay in a hotel is not a tour, however tours can be participated in while staying at a hotel.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_HOWTOSELL', 'How do I use Jomres to sell tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_HOWTOSELL', 'To address the question of selling tours in Jomres, you will first need to install the Jintour plugin. This plugin allows you to create tours that are sold as part of vacation rentals. It also allows you to create properties that are exclusively for selling tours. Once this plugin has been installed, then property managers will be able to create Tours and Tour properties in the frontend.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_WHATISJINTOUR', 'What is the Jintour plugin?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_WHATISJINTOUR', 'Jintour stands for Jomres INtegrated TOURs. It allows you to create simple, limited resources that can be booked out, that are not rooms in a property. Whilst the plugin is designed to allow bookings of tours primarily, they can be used for many things, not just tours. They can be used, for example, by a ski lodge that wants to rent out skis and gear. As this equipment will have limited availability, you can use the Jintour plugin to allow guests to reserve and pay for this gear at booking time.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_SAMEBOOKING', 'How do I sell tours and vacation rentals in the same booking?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_SAMEBOOKING', "In this scenario, you've got a hotel, and you want to sell tours to a local attraction. Log into the frontend and go to the hotel you've created. Next, click on Settings > Tour/Activity management. On this page, follow the onscreen instructions to first create a tour profile, then generate tours. Once that's done, you'll be able to sell both tours and room bookings and optional extras alongside each other in the same booking form.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_STANDALONETOURS', 'What about if I only want to sell tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_STANDALONETOURS', "First you will need to create a new property in the frontend. When you do, ensure that you set the 'Property type' to Tour. When you've created this new property, then you will be able to create tours again through the Settings > Tour/Activity management page. You will also be able to offer optional extras as in normal properties, the only thing you won't be able to do is configure rooms, room features or tariffs as you're not selling rooms in this property.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_GLOBALTOURS', 'How can I create a Tour/bookable resource that can be seen in all properties booking forms?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_GLOBALTOURS', "In the administrator area of your site, visit the Portal > Functionality Tour/Activity Managenent page. The tour profile/generation process is the same as used in the frontend, however any tours generated here are seen in the frontend. One typical scenario where this may be used is if the site administrator is organising events around the country, and they want to sell hotel bookings. They would create the participating hotels in the frontend as normal, setting room prices etc, then the 'tours' in this case would actually be the attendance fee for the event itself.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_FIRSTTHINGSFIRST', "Ok, I've installed Jomres, what next?");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_FIRSTTHINGSFIRST', "The very, very first thing you should do, now that you've installed Jomres is click Help on the menu to the left, then click Getting Started. Seriously, go away and do that now.");
jr_define('_JOMRES_MANAGE_PROPERTIES', 'Manage Properties');
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "You do not have a IP Detection API Key set. This is required to allow the system to automatically detect the user's location and set their currency and country automatically. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "You do not have an Open Exchange Rates API Key set. This is required to allow the system to automatically download and use currency exchange rates. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Permit number');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Some countries legislate that you must display a permit number for your property. If you have such a number, enter it here and it will be added to the property header section.');
jr_define('_JOMRES_SHORTCODES', 'Shortcodes');
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "The <strong>plg_content_jomres_asamodule_mambot</strong> plugin MUST be installed and enabled for these shortcodes to work. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "You must ensure that the <strong>'Jomres Shortcodes'</strong> plugin is enabled. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
jr_define('SHORTCODE_TASK', 'Task');
jr_define('SHORTCODE_DESCRIPTION', 'Description');
jr_define('SHORTCODE_ARGUMENTS', 'Arguments');
jr_define('SHORTCODE_EXAMPLE', 'Example');
jr_define('INTEGRITY_CHECK', 'Filesystem Integrity Check');
jr_define('INTEGRITY_CHECK_DESC', 'This feature allows you to check that the filesystem matches that supplied in the current version of Jomres. This is useful in ensuring that all files were updated correctly after installation/upgrade. Files in Red are missing, files in Orange exist but are different from those supplied in the current build. Only fiiles that are potential problems will be listed here.');
jr_define('INTEGRITY_CHECK_FILENAME', 'Filesystem Integrity Check');
jr_define('INTEGRITY_CHECK_LOCALHASH', 'Local hash');
jr_define('INTEGRITY_CHECK_BUILDHASH', 'Version hash');
jr_define('INTEGRITY_CHECK_NOPROBLEMS', 'Awesome! No problems were found.');
jr_define('_JOMRES_PROPERTYTYPE_MARKER', 'Google maps marker');
jr_define('_JOMRES_JAVASCRIPT_READMORE', 'Read more');
jr_define('_JOMRES_JAVASCRIPT_READLESS', 'Read less');
jr_define('_JOMRES_TOURIST_TAX_TITLE', 'Tourist tax');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Tourist tax rate');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Set the tourist tax rate. The tourist tax is only calculated after the initial booking is generated, and is added to the booking confirmation page, in the extra services box.');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Is percentage?');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Set this to Yes if the tax is a percentage or No if it's a flat fee.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Affects the entire booking value?');
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Set this to Yes if the tax is to cover the entire value of the booking, so it is a percentage of both the accommodation plus any extras, or No if it is only calculated based only on the value of the accommodation total. If the option 'Is Percentage' above is set to No, then this option is ignored.");
jr_define('_JOMRES_TOURIST_TAX_NOTE', 'Please be aware that a tourist tax will be added to this booking. You will be able to see the tax on the review booking page.');
jr_define('NO_LICENSE_MESSAGE', "You have not saved a license number in Site Configuration, therefore you will not be able to download plugins. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('INVALID_LICENSE_MESSAGE', "You seem to be using a license number that's invalid or has expired. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('VALID_LICENSE_MESSAGE', "Congratulations, you're using a valid license number and can install Core plugins through the Jomres plugin manager.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'This page allows you to upload images for your property and the things you offer. It has one main button, and a second button that allows you to select specific resources to upload images for. So, the Main property image and the Slideshow will only show one button but if you have created any e.g. Optional Extras or Rooms, then you will see a second button where you can upload images for those specific resources.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'This page allows you to upload images for your property and the things you offer. It has one main button, and a second button that allows you to select specific resources to upload images for. So, the Main property image and the Slideshow will only show one button but if you have created any Optional Extras then you will see a second button where you can upload images for those specific resources.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>First choose the image(s) you'd like to upload by clicking Add Image or using Drag and Drop. These will appear in the column on the right hand side.</li>
  <li>Above this area, use the \"Choose the resource\" button to choose which resource you want to upload images for. You may be offered the option to choose a specific resource underneath. </li>
  <li> Once you've chosen a resource you can then click the Upload Image button under an image to associate it with that resource. Once an image has been uploaded, it will disappear from the column on the right hand site, and appear in the left.</li>
  <li>Use the Trash button next to existing images to remove images you no longer want to be shown.</li>
  <li>You can change the order that files are shown in the slideshow by renaming them before uploading them, as they are displayed in pages in alphabetical order.</li>
</ol>
 ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Next to the Resource button, you may see a Preview button. If you click on this you will see a popup that shows you how the currently uploaded images will look in a page. This helps to give you an idea of how the images will look to your customers.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "There is no limit to the number of images you can upload. Images are automatically resized when they are uploaded. You can only upload JPG and PNG files.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Ideally any images you upload would be at least ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " pixels wide, otherwise they may look fuzzy after they've been uploaded.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Any images you upload cannot be more than ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', " in size.");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Choose the resource you want to upload images for");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Specific resource");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Images already uploaded for this resource");
jr_define('_JOMRES_MARKDOWN_TITLE', 'Text formatting');
jr_define('_JOMRES_MARKDOWN_DESC', 'You can enter text here using simple Markdown formatting. You don\'t need to know any HTML, just use the buttons to make the information look like you want, or format text according to these examples.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Emphasis');
jr_define('_JOMRES_MARKDOWN_BOLD', 'bold');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'italics');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'strikethrough');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Headers");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Big header');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Medium header");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Small header');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Tiny header');
jr_define('_JOMRES_MARKDOWN_LISTS', "Lists");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Generic list item');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Numbered list item');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Links');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Text to display');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Quotes');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'This is a quote.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'It can span multiple lines!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Images');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tables');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Column');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Show property images as slideshow in property list?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'If set to yes, a slideshow of property main images will be displayed. If set to no, then the first property main image will be displayed.');
jr_define('EDIT_CMS_USER', 'Edit CMS user');
jr_define('BOOKING_MADE_BY', 'Booking made by');
jr_define('_JOMRES_ROUTER_FEATURES', 'Amenities');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Room Types');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'External booking form URL');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Here you can set an external URL if you want to use a 3rd party website for making bookings. All jomres booking buttons will point to this URL. Leave this field blank if you want to use the Jomres booking form.');
jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (short room description/subtitle)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Room Description');
jr_define('_JOMRES_GUEST_BLACKLISTED', 'Guest blacklisted');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'If this guest is black listed then they will no longer be able to make bookings in this property.');
jr_define('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Save jomres session files to disk or to database. Recommended: database');
jr_define('_JOMRES_MAP_HEIGHT',"Map height (px) ");
jr_define('_JOMRES_MAP_ZOOMLEVEL',"Map zoom level ");
jr_define('_JOMRES_MAP_MAPTYPE',"Map type ");

jr_define('_JOMRES_TEMPLATE_PACKAGES',"Template Override Manager");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD',"Template packages are plugins that can provide override templates for various core Jomres template files.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO',"This page lists any template files that can be overridden by a template package's template files. If you want to override a certain template file, click on the edit button for that file, on the next page you will be able to choose which version you want to override with. Note, these overrides take priority over both Jomres Core and any Wordpress or Joomla theme/template overrides. You can disable an override by deleting it in the List Template Overrides page.");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME',"Template name");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH',"Current path");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN',"Not overridden");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO',"You can choose which template file to override the Core template files by changing the dropdown");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Percentage Rooms Booked");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Percentage Rooms Booked");
jr_define('_JOMRES_SELECT_WIDGETS',"Select widgets");
jr_define('_JOMRES_INTERVAL',"Interval");
jr_define('_JOMRES_TIMELINE',"Timeline");
jr_define('_JOMRES_CPANEL_GRID',"Control panel home layout");
jr_define('_JOMRES_CPANEL_GRID_DESC',"Select the grid layout of your frontend property management control panel home page.");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES',"Google Map Markers");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES',"Town images");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING',"Changing the property type will delete all rooms, tariffs, property settings and reset availability.");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Please note, after updating you must update any Jomres Plugins that are already installed, through the Jomres plugin manager. If you have Core plugins installed, but do not have a valid Jomres license then we <em>do not</em> recommend that you update Jomres as older plugins often may not work with newer versions of Jomres. ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Please note, after updating you must update any Jomres Plugins that are already installed, through the Jomres plugin manager.');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "If you would like to update Jomres and it's plugins you will need a renewal license. Please visit <a href='https://www.jomres.net/pricing' target='_blank'>our site</a> for more information. In most cases these licenses are 50% of the price of a full license. Please ensure that you have logged into our shop before attempting to purchase a renewal.");
jr_define('_JOMRES_PAYMENT_METHOD_USED',"Payment method : ");

jr_define('_JOMRES_PRICES',"Buy Jomres");


jr_define('_OAUTH_TITLE',"App key management");
jr_define('_OAUTH_APPS',"REST API client details");
jr_define('_OAUTH_IDENTIFIER',"Identifier");
jr_define('_OAUTH_APIKEY',"Client ID");
jr_define('_OAUTH_SECRET',"Secret");
jr_define('_OAUTH_CREATED',"Created/Updated App");
jr_define('_OAUTH_CLIENT_ID_INFO',"The Client ID and Secret are created for you. The Identifier is so that you can easily identify this key pair.");
jr_define('_OAUTH_SCOPE_TITLE',"Permissions ( what the client can do ) ");
jr_define('_OAUTH_SCOPE_CATEGORY_USER' , "User permissions");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES' , "Property permissions");

jr_define('API_DOCUMENTATION_TITLE',"App REST API documentation");

jr_define('_OAUTH_CONFIG',"API Core configuration");

jr_define('_OAUTH_CONFIG_SHOW',"Show API client configuration options in Jomres main menu?");
jr_define('_OAUTH_CONFIG_SHOW_DESC',"You may choose to not show the API client configuration options in the 'My Account' section of the Jomres mainmenu. You could instead decide that you wanted to show them on other pages using Jomres Shortcodes.");

jr_define( '_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Displays the API core documentation page. The API Core allows users to create API clients, which are then used to access the API functionality which is outlined in the API Core documentation." );

jr_define( '_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Displays the API core administration page, where property managers can configure API clients. Note that this is a registered user only feature, so users must be registered and logged in before they can see this page." );

jr_define('API_METHODS_TITLE',"API Methods");
jr_define('API_METHODS_DESCRIPTION',"This list of methods is based on your installed API feature plugins and is automatically generated. If you install or delete an API feature plugin you must visit this page to rebuild this list of API methods available on your site.");

jr_define('_OAUTH_REDIRECT_URI',"Redirect URI");
jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER',"Give me a name that's meaningful to you, such as My Phone");

jr_define('_OAUTH_GRANT_TYPES',"This system supports two grant types , Client Credentials and Implicit. If you are using the <em>client_credentials</em> flow then you will need both the client id and the client secret. If using <em>implicit</em> then your app would send just the client id and you would log into the system to explicitly authorise that app.");

jr_define('_OAUTH_IMPLICIT_NOTES',"To use the <em>implicit</em> grant type flow, you will need to use this url to authorise your apps. When this url is called, and you have authorised the app the system will issue a token that you apps will then use to call this system's API ");
jr_define('_OAUTH_AUTHORISATION_URL',"Authorisation URL");

jr_define( 'WEBHOOKS_CORE', 'Webhooks' );

jr_define('_WEBHOOKS_CONFIG_SHOW',"Show Webhook configuration options in Jomres main menu?");
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC',"You may choose to not show the Webhook configuration options in the 'My Account' section of the Jomres mainmenu. You could instead decide that you wanted to show them on other pages using Jomres Shortcodes.");

jr_define('WEBHOOKS_DOCUMENTATION_TITLE',"Webhooks documentation");

jr_define( '_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Displays the API core documentation page. The API Core allows users to create API clients, which are then used to access the API functionality which is outlined in the API Core documentation." );

jr_define( '_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Displays the API core administration page, where property managers can configure API clients. Note that this is a registered user only feature, so users must be registered and logged in before they can see this page." );

jr_define( 'WEBHOOKS_INTEGRATION_EDIT', 'Edit Integration' );
jr_define( 'WEBHOOKS_INTEGRATION_ID', 'Integration ID' );
jr_define( 'WEBHOOKS_INTEGRATION_URL', 'URL or Name' );
jr_define( 'WEBHOOKS_ENABLED', 'Enabled' );

jr_define( 'WEBHOOKS_AUTH_METHOD_SELECT', 'Authentication method/Integration' );

jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Any webhooks you create will not be triggered as you are not assigned to any properties. Super property managers are not typically assigned individual properties, so you may need a new user for webhook creation.' );
jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Any webhooks you create will be triggered against the following properties : ' );


jr_define( 'PORTAL_REVIEWS_LIMIT', 'Reviews limit' );
jr_define( 'PORTAL_REVIEWS_LIMIT_DESC', 'Use this setting to limit the number of reviews shown in the property details page.' );
jr_define( 'PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Show all reviews' );

jr_define( 'VIDEO_TUTORIALS', 'Video Tutorials' );

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimum deposit value' );
jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "If the calculated deposit is less than this figure, then set deposit to this value instead. This figure might itself be over-ridden if it does not satisfy the site's minimum deposit setting. Leave it set to 0 to not use the setting." );

jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'To increase your site speed, we recommend importing details of the existing site and properties images to database.');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Import existing images details to database');

jr_define( '_JOMRES_S3_ACTIVE_DESC', 'Experimental feature. If enabled, images uploaded using the media centre feature will also be copied to your Amazon S3 bucket and served from your Amazon S3 bucket url. When enabling this the first time, you`ll also be promted to import existing images to your S3 bucket.');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN', 'CloudFront domain');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Replace your default Amazon S3 domain with your CloudFront domain');
jr_define( '_JOMRES_S3_SSLTLS_DESC', 'Recommended to be enabled. For Windows and Mac OSX only, if libcurl wasn`t built with Schannel or Secure Transport support (the native SSL libraries included in Windows and Mac OS X), you should set this to No.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'You`ve enabled the Amazon S3 integration, so you`ll have to copy all existing images to your S3 bucket. Images are now served to your site visitors from your Amazon S3 url, so you`ll need to copy them first to your S3 bucket, otherwise they won`t be visible to your site visitors.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Once you click this button, please do not interrupt the process and wait for a success or error message. Depending on server speed, this may take a while to complete.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Copy existing images to Amazon S3 bucket');


jr_define( 'JOMRES_INCOMPLETE', 'Incomplete' );
jr_define( 'JOMRES_WATING_APPROVAL', 'Pending approval' );
jr_define( 'JOMRES_GOOGLE_MAPS_PDETAILS', 'Property details map' );

jr_define( 'HAS_STARS_TITLE', 'Allows stars classification?');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Force reimport image details to database');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Force reupload images to S3 bucket');
jr_define( '_JOMRES_UNINSTALL_TABLES', 'Delete all Jomres data when uninstalling?');
jr_define( '_JOMRES_UNINSTALL_TABLES_DESC', 'If set to yes, Jomres will delete all it`s database tables when uninstalled. This will delete all Jomres data from db and can`t be undone.');

jr_define( 'TRANSACTION_IDS', 'Transaction id');
jr_define( 'PAYMENT_METHOD', 'Payment method');
jr_define( 'POA_DISPLAY_PRICE', 'POA Price');
jr_define( 'POA_DISPLAY_PRICE_DESC', 'When properties are shown in a list, the system will attempt to find a valid price from configured tariffs based on either today\'s date, or if dates were used in a search, then based on those dates. If it cannot, then it will show POA (Price on application), meaning that the guest should contact you to get a price. If you want, you can configure a price here that will be shown instead of the POA text. This figure would be a "fallback" price to display if no other price can be determined.');

jr_define( 'PLUGINMANAGER_INSTALL', 'You need to install the plugin manager before you can install Jomres plugins, would you like to do that now?');
jr_define( 'PLUGINMANAGER_REINSTALL', 'You need to update the plugin manager before you can update any installed plugins, would you like to do that now?');
jr_define( 'PLUGINMANAGER_INSTALL_BUTTON', "Let's do this!");

jr_define( 'INCLUDEINFILTERS', 'Include in filters?');
jr_define( 'INCLUDEINFILTERS_DESC', 'Property feature filters in Ajax Composite Search can become very long, so you can set this option to No to prevent this feature from showing in the property feature list.');

jr_define( 'REVIEW_REMINDER_PT1', "You have ");
jr_define( 'REVIEW_REMINDER_PT2', " booking(s) that you have not left a review for yet. Please leave a review.");
jr_define( 'BOOKINGS_AWAITING_REVIEWS', "Bookings waiting for reviews");
jr_define( 'REVIEW_NAG', "Nag guests for reviews?");
jr_define( 'REVIEW_NAG_DESC', "Once a guest has been booked out from a booking, the system will remind them to post a review for their booking. Set this option to No to disable this reminder.");

jr_define( 'SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "Send copies of the booking emails to site admins?");
jr_define( 'SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "When enabled, copies of the booking emails sent to property managers will be sent to all site admins too.");

jr_define( 'HIDDEN_ADDRESS_SETTING', "Hide address?");
jr_define( 'HIDDEN_ADDRESS_SETTING_DESC', "If you set this option to Yes, then only guests who have already placed a booking on your property will be able to see the property street address. You might want to use this setting to hide the property's exact location if, for example, it is routinely left unattended.");
jr_define( 'HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optimize images on upload?');
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'When enabled, images will be optimized for web (file size can be up to 75% smaller). Depending on the uploaded image type, your server needs to have one or more of these libraries installed by the hosting provider: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle');
jr_define( 'DATABASE_INTEGRITY_CHECK', 'Database Integrity Check');
jr_define( 'OBSOLETE_FILES_CHECK', 'Obsolete Files Check');
jr_define( 'DATATABLES_COLVIS', 'Column Visibility');

jr_define( 'API_TOKEN_LIFETIME', 'API token lifetime');
jr_define( 'API_TOKEN_LIFETIME_DESC', 'How long an API token remains valid for, in seconds. 86400 = 1 day, 31536000 = 1 year');

jr_define( 'ENCRYPTION_TITLE', 'Encryption' );
jr_define( 'ENCRYPTION_FILE_LOCATION', 'Encryption file location' );
jr_define( 'ENCRYPTION_FILE_LOCATION_DESC', '**Never delete the encryption file** <br/> User data is stored encrypted in tables to ensure that "data at rest" is protected securely, in accordance with GDPR recommendations. By default the encryption key is stored in the file "encryption_key.class.php" in the root of your Jomres installation (typically /public_html/jomres). You can change where the file is stored here. If you do change the location, you must MOVE the file, do not wait for Jomres to create a new version otherwise you will not be able to decode your guests\'s details.' );

jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'The information you save here will be used on invoices generated for this property');

jr_define( '_JOMRES_GDPR_POLICIES', 'GDPR Policies' );
jr_define( '_JOMRES_GDPR_POLICIES_DESC', 'Here you can configure how long after a booking or invoice has been created it is removed from the system to ensure that you are compliant with the GDPR.' );

jr_define( '_JOMRES_GDPR_BOOKING_RETENTION', 'Booking Retention period (in days)' );
jr_define( '_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'How many days after a booking departure date should the booking be deleted? When it is deleted, both the booking and the invoice are removed. A typical retention period might be 365 days.' );

jr_define( '_JOMRES_GDPR_INVOICE_RETENTION', 'Invoice retention (non-booking) period' );
jr_define( '_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Other invoices, such as commission and subscription invoices, are not tied to bookings. As a result they will not be deleted when booking invoices and contracts are deleted. Depending on your country, and your own business practices, you will need to configure a different retention period. A typical retention period might be 3653 days, which is 10 years.' );


jr_define( '_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Your data' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Some features of this website need to store information about your visit. This is used only to provide service to you, is never shared with anyone else and is deleted when no longer needed.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'DO YOU GIVE US PERMISSION TO STORE THIS INFORMATION??' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'In detail' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'You must consent to us storing this data for you to be able to make bookings on this site. Regardless of whether or not you consent to your data being stored, we will store a cookie on your computer to tell us whether or not you have opted in. This helps us to ensure that we do not constantly ask you whether or not you want to opt in or out and it does not contain any Personally Identifiable Information (PII). If you change your mind you can visit the "App permissions" page at any time to opt in or out.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'The information is stored for different time periods depending on the nature of your visit. So, if  you are just looking around we will store approximate geographical location (country level) information. If you perform searches, then to make search forms more user friendly we will store the last things you searched on. This information is typically stored for a maximum of 24 hours and is only used to make your visit more pleasant.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'When you make a booking with us, by necessity more information is stored.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'The technicalites of the booking form are captured and retained for a maximum of 60 days. This is required so that On Request bookings can be turned into full bookings once a booking is approved, and for analysis by our teams in case there is an issue with a booking. If you were not logged in when you made a booking then we will email you a username and password so that you can view your booking history and exercise your Right To Be Forgotten (RTBF) if you wish to do that.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Data entered into the booking form, for example name, email address, real address is stored for a maximum of 365 days after the booking\'s departure date. This information is stored in encrypted form in our database so that only authorised people can view it. If you make a booking then by law we must store your PII whilst the booking is valid. Once the booking has completed, either because it has been cancelled or you have been checked out, then you will be able to exercise your RTBF by logging in and visiting the "Your data" page. Invoice information for completed bookings will still be securely stored in our database to ensure that we abide by relevant tax laws but you will be able to remove all other PII after the booking is completed.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'When you consent to your information being stored as described above, we are legally obliged to store this consent in our database. This information will include your IP number and the content of the opt-in form. We will retain this consent notification indefinately (this is a legal requirement).' );

jr_define( '_JOMRES_GDPR_CONSENT_NOT_SET', 'You have not yet told us if we can collect Personally Identifiable Information about you' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_IN', 'You have consented to us collecting the necessary Personally Identifiable Information to take bookings' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_OUT', 'You have told us to not collect Personally Identifiable Information' );

jr_define( '_JOMRES_GDPR_NOCONSENT_INTRO', 'You have not given us permission to collect your private data' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'For you to perform certain actions on this website we have to collect Personally Identifiable Information about you, but you have not given us permission to do so.' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Change your permissions' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Continue viewing properties' );

jr_define( '_JOMRES_GDPR_APP_MENU_ITEM', 'App permissions' );

jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Guest data' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'These are the details that are stored for you by the various properties. Different hotels may hold different records, depending on what you entered when you made the booking.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'You do not have any data stored with any hotels in this system' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Profile data' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'This is the main data set we hold for you, distinct from those you have shared with different properties.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'You have not saved any profile information' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Here is the Personally Identifyable Information that we store on this website for you. It is constructed in JSON (JavaScript Object Notation) format which is a lightweight data-interchange format. It is easy for humans to read and write and it is easy for machines to parse and generate.' );

jr_define( '_JOMRES_GDPR_REDACTION_STRING', 'Anonymised' );

jr_define( '_JOMRES_GDPR_MY_DATA', 'Your data' );
jr_define( '_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'By accepting these Terms of Use Agreement (this “Agreement”), you agree that:

<ul>
	<li>
		You are authorized to book hotels through this website;
	</li>
	<li>
		You are at least 18 years of age;
	</li>
	<li>
		You possess the legal authority to create a binding legal obligation;
	</li>
	<li>
		You will use the Site in accordance with this Agreement;
	</li>
	<li>
		You will only use the Site to make legitimate reservations for yourself or for another person for whom you are legally authorised to act;
	</li>
	<li>
		You will inform such other persons about this Agreement that applies to the reservations I have made on their behalf, including all rules and restrictions applicable thereto;
	</li>
	<li>
		All information supplied by yourself to the Website is true, accurate, current and complete; and
	</li>
	<li>
		You will safeguard your account information and will supervise and be completely responsible for any use of your account by yourself and anyone other than you.
	</li>
</ul>
' );
jr_define( '_JOMRES_GDPR_MY_DATA_LEAD', 'Security and transparency are important to us.' );
jr_define( '_JOMRES_GDPR_MY_DATA_INTRO', 'We take our responsibilities regarding storing your data very seriously. All Personally Identifiable Information (PII) is stored encrypted in our database using industry standard algorithms to ensure that only authorised users can view this information.' );

jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'You can download all of the PII we store for you.' );
jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Download now' );

jr_define( '_JOMRES_GDPR_MY_RTBF_LEAD', 'Right To Be Forgotten (RTBF)' );
jr_define( '_JOMRES_GDPR_MY_RTBF_INTRO', 'We believe that you should be able to <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank">delete</a> your <a href="https://gdpr-info.eu/art-4-gdpr/" target="_blank">Personally Identifiable Information </a>if you want and if it is practicable. ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'You are not registered on this site. Your general location (country) and IP number will be stored for a maximum of 24 hours and then deleted.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'You are not registered on this site and you have opted out of data collection. We have not stored your PII.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'You are registered on the site and do not have any pending or active bookings. We can anonymise most information we currently hold for you. Would you like to do that? ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Note : This does not delete your account, it simply anonymises our records so that your account cannot be associated with you as a person. By law we must continue to store your PII for invoicing purposes, however we will delete all guest records.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'You are registered on the site, however you have bookings outstanding and we cannot anonymise your data at this time. This data will be retained for a maximum of one year after the booking has been completed, then it will be deleted, if you do not choose to remove it before that time.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Because you are a property manager on our site, we cannot offer you the ability to have your data deleted automatically. Instead, please contact us directly so that we can assign your property(s) to another manager. Once we have done that and removed your status as a property manager, you will be able to automatically have your data deleted.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Forget me!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'This cannot be undone!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Your data has been deleted!' );

jr_define( '_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Sorry, you cannot make a booking as your email address is invalid' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'This page gives you the ability to anonymise any guests who have their information stored in the system. This allows you to be compliant with the GDPR, however you cannot edit any other information on this page. To do that you have to log into the frontend as a property manager. The assumption is that a historic guest has contacted you requesting that you allow them to exercise their right to be forgotten. If they are unable to log into the frontend of the site (perhaps a user was not created for them when they booked) then you can use this area to anonymise them once you have confirmed their identity.' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anonymise guest' );
jr_define( '_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'DELETED PROPERTY' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Guest data anonymised' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Cannot anonymise' );

jr_define( '_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'We need your permission to store your information before you can make a booking. CLICK HERE to give us permission.' );

jr_define( '_JOMRES_GDPR_CONFIG_ENABLE', 'Enable GDPR compliant functionality?' );
jr_define( '_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'WE DO NOT RECOMMEND THAT YOU DISABLE THE GDPR COMPLIANT FUNCTIONALITY. Jomres has built-in features that helps you to ensure that the Jomres section of your site is compliant with the GDPR. If you disable this feature (and you should not if you are in the EU or you do business with citizens of the EU) then Jomres will automatically assume that every visitor to the site has given their permission to have their personal data enabled. App permission and My Data pages will not be shown and users will not be prompted to give their permission to have the data collected.' );


jr_define( 'EMPTY_TEMP_DIR', 'Empty temp dir' );
jr_define( 'EMPTY_TEMP_DIR_DONE', 'Temporary files deleted' );

jr_define( 'MACHINE_TRANSLATION', 'Machine translations' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG', 'Source language' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'It is possible to hook in machine translation functionality. This allows you to enter strings in one language and translations could be pulled from remote services. Be aware that not all translation services support all languages. See those services for more detail.' );

jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Room Types' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'New Room type' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'You can create and edit room types on this page. These room types will be specific to this property only. When setting up your property you first need some Room Types. You can use either those room typies created by the administrator, or you can add your own. Once you have one or more Room Types you can then create rooms of that Room Type. After you have rooms you can then create tariffs (prices) for those rooms because tariffs are linked to Room Types.' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Managers can create room types?' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Use this option to configure whether or not managers can create their own room types in the frontend. We strongly recommend that you leave this option set to No when you first start using Jomres, especially if you are creating a portal because you should create all room types in the administrator area. Room types created by managers will appear in search forms, but because these room types are specific to individual properties, only one property will be shown in search results if that room type is selected durings searches. If you want so that only Super Property Managers can create room types then leave this option set to Yes and use the Access Control plugin to allow only super managers to view the "Settings > Room types" menu option. Only properties that rent out rooms in the property and use Advanced or Micromanage tariff editing modes can use this option. Villa/apartment type properties will not be able to use it.' );
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Room/property type updated');
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Show room types in search options' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'If you choose to allow property managers to create their own room types, you can choose whether or not to show those created room types in the search options where you have chosen to show room types.' );


jr_define( '_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "You shouldn't re-use the same email address for each booking.<br/>If you have a unique domain (eg. not a gmail email address) for your business then use the guest's telephone number as their email address. The email address would then look something like 123456@mydomain.com<br/>This will ensure that a new guest is created when you create a booking ." );

jr_define( '_JOMRES_LOGIN_USERNAME', 'Email address' );
jr_define( '_JOMRES_LOGIN_PASSWORD', 'Password' );
jr_define( '_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED',"We are delighted that you would like to book with us again. To be able to manage all your bookings together, it is necessary that you log in so that the booking can be added to your account. This also ensures that you are authorized to use the e-mail address provided." );

jr_define( '_JOMRES_LOGIN_RESET_MESSAGE', 'If you do not know your password we can send you a password reset email. Please follow the instructions in that email to reset your password.' );
jr_define( '_JOMRES_LOGIN_RESET_BUTTON', 'Forgot your password?' );

jr_define('_JOMRES_REVIEWS_ANONYMISE', 'Anonymise your name?');
jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', 'If you choose to anonymise your name when reviewing we will use your initials instead.');
jr_define('ANONYMOUS', 'Anon');

jr_define('_JOMRES_REVIEWS_REPLY_SAID', ' said ');
jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Reply to this review');
jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Type your reply to this review here.');
jr_define('_JOMRES_REVIEWS_YOUR_REPLY', 'Your reply');
jr_define('_JOMRES_REVIEWS_REPLY_COMMENT', 'Main review');
jr_define('_JOMRES_REVIEWS_REPLY_SAVED', 'Review reply saved');


jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Before submitting a review reply, you must read the following. By submitting a reply you confirm that you agree to these terms and conditions.');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'What are our guidelines for a review reply?');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'You are responding to the review of your property. You <em>must not</em> use your reply as a commercial dispute process. If you need to report a review, you must use the "Report Review" button on the listing, and not this review reply page.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Once you have left your reply you will not be able to edit it.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Allowed and Encouraged');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
	<ul>
    <li>A full response to the review.</li>
    <li>Courtesy and Honesty.</li>
    <li>Sensible responses to the reviewer\'s issues (remember, others may be having similar issues but did not take the opportunity to post a review).</li>
    <li>Encourage the guest to get in contact with you directly to solve issues.
    <li>Always remember that future guests will see your response. Make sure to be professional at all times.</li>
	</ul>
	');
	
jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Not allowed');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
	<ul>
    <li>Commercial disputes.</li>
    <li>Questions to the Reviewer or Others.</li>
    <li>Questionable Language (including cursing).</li>
	</ul>
	');

jr_define('_JOMRES_COM_A_CRON_LASTRAN', 'Last ran');
jr_define('_JOMRES_COM_A_CRON_SCHEDULE', 'Schedule');


jr_define('_JOMRES_INVOICE_NUMBERS', 'Invoice numbers');

jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Use custom invoice numbers?');
jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'You can configure the system to use custom invoice numbers. Only new invoices will be affected.');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Start number');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Numbers are created consecutively. What should the first number be?');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'What format should the invoice number take?');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Configure the invoice number format here. A format can look like {N}/{D} or {N}/{Y} where N is the automatically generated number, D = date in the format YYYYYMMDD (20190131) or Y = YYYY (2019). Any other alpha numeric characters not enclosed in curly braces will be left alone, so a pattern that looks like {N}/{D}-L would result in an invoice number (21) that looks something like 21/2019-L ');

jr_define('_JOMRES_SURCHARGE_TITLE', 'Surcharge');
jr_define('_JOMRES_SURCHARGE_DESC', 'An additional charge that will be added to the room when booked (calculated per day)');


jr_define('_JOMRES_PDF_BUTTON', 'PDF');


jr_define('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Prioritise site-wide labels?');
jr_define('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Custom text saved in the label editing or the translate lang file strings pages are considered "site-wide" labels. Property managers can also customise labels for each property using the label editing feature in the frontend. This allows a property manager to have different texts for his property, which is useful if the property is different to all of the other properties on the site.<br/> When the system searches for label texts, it will prioritise site-wide texts over property specific texts meaning that if a site-wide text exists for that label, the system will choose that one first. If you set this option to No, the system will prioritise property specific texts over site-wide texts.');
