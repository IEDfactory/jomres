<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.17.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Translated to fr-FR by Mario Oliveira, Camara de Lobos, Madeira Island, Portugal, 14Oct2010 - www.marioliveira.net. Updated 21-Jun2011 for version 5 stable
 * Continued translation to fr-FR by Vincent Vermeille, Fribourg, Switzerland, 11-03-2013 2010 for version 7.2.12
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
//#################################################################
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'réservation rapide');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Afficher les profils');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Configuration Générale');
jr_define('_JOMRES_COM_MR_BACK', 'Retour');
jr_define('_JOMRES_COM_MR_YES', 'Oui');
jr_define('_JOMRES_COM_MR_NO', 'Non');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Nouveau');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Nouvel établissement');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Nouveau client');
jr_define('_JOMRES_COM_MR_SAVE', 'Sauvegarder');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Nom');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Arrivée');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Départ');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Nom d\'utilisateur');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Niveau d\'accès');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Utilisateur modifié');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Toutes les réservations');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Editer la réservation : ');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Arr./Dép.');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Client');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Chambre');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Paiement');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Prénom');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Nom');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Besoin(s) spécifique(s)');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Certains besoins spécifiques peuvent être facturés.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Annuler la réservation');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Numéro');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Rue');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Ville');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Code Postal');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Numéro de téléphone');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Numéro de portable');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'Adresse email');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Nous ne pouvons pas annuler cette réservation car le client occupe déjà les installations');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'La réservation n\'a pas été réglée');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Confirmez l\'annulation');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'réservation annulée');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'jours avant l\'arrivée');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Type de réservation');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Indisponibilité');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Réception');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Nom de la chambre');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Numéro de la chambre');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Étage');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Accès aux personnes à mobilité réduite ?');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Max. de personnes');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Type de chambre');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Description des types de chambres');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Liste des équipements de la chambre');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Dépôt payé');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Entrez le montant de l\'acompte');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Total à régler');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Référence de l\'acompte');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Numéro de réservation');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Acompte');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Acompte sauvegardé');
// Edit Language
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Disponibilités :');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Établissement');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Type de la Chambre');
// Display guest form
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Editer les détails du client');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Prénom');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Nom');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Numéro');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Rue');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Ville');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Code Postal');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Téléphone');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Téléphone portable');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'réservez');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Séjour');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Total');
// Rooms tab
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Afficher la configuration des chambres & des établissements');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Chambres');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Propriété Ch.');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Types Ch.');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Établissement');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'propriété du dispositif');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Chambre');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Type');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Nom');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Numéro');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Étage');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Max. de personnes');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Equipements');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Editer l\'élément');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Dispositif Ch.');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Description des propriétés');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Propriété de la chambre ajoutée');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Propriété de la chambre mise-à-jour');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Types de Chambre');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Abrégé du type de la chambre');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Description du type de la chambre');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Type de chambre ajouté');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Editer l\'élément');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Nom');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Rue');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Ville');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Région');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Pays');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Code Postal');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Tel.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'email');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Site Internet');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Equipements');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Établissement mis-à-jour');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Equipement  de l\'établissement');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Abrégé des dispositifs de l\'établissement.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Description complète de l\'équipement de l\'établissement');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Equipement l\'établissement mis-à-jour');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Tarifs');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Titre du Tarif');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Description');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Valide du ');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Valide jusqu\'àu ');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Prix');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Min. de jours');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Max. de jours');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Min. de personnes');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Max. de personnes');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Type de chambre');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignorer le PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Autoriser les Week-Ends');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Editer l\'élément');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Cloner l\'élément');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Tarif supprimé');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Editer le tarif');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Réservation enregistrée');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Enlever réservation');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Lister les réservations');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Récapitulatif');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Administration des clients');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Administration des établissements');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Vérifier la disponibilité');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Prénom');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Nom');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Numéro');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Rue');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Ville');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Code Postal');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Téléphone');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Numéro de Portable');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Il n\'y a aucune chambre susceptible de satisfaire les paramètres de votre recherche');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', '<center>Nous vous remercions d\'avoir effectué votre réservation en utilisant nos services, nous vous souhaitons un excellent séjour.<br><br> <b>Veuillez cependant noter que vous venez d\'effectuer une pré-réservation, et que celle-ci sera confirmée lorsque vous recevrez la lettre de confirmation que nous allons vous faire parvenir dans les plus bref délais.</center>');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Réserver un hôte');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Réservation d\'hôte effectuée ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Retirer la réservation d\'un hôte ');
// Config panel
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Suppléments');
jr_define('_JOMRES_COM_A_TARIFFS', 'Tarifs & Devises');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Charger un fichier');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Suppléments pour personne seule');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Assurez vous de sélectionner OUI si vous facturez un supplément pour les personnes seules');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Montant du supplément pour les personnes seules');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Un acompte requis en pourcentage?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'l\'acompte doit être un pourcentage de la somme totale ? Si cela n\'est pas le cas, vous devez alors indiquer le montant d\'un acompte fixe');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Montant requis pour un acompte');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'Par personne - Par nuit');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Sélectionnez OUI si vous voulez facturer Par personne - Par nuit. Si cela n\'est pas le cas, Le montant doit être calculé sur une base Par chambre - Par nuit');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Taille du fichier');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Taille Max. du fichier Image en Kilobyte');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Réservé');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Détails de votre réservation');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Nous vous rappelons que la réservation fait office de contrat, donc si par aucune raison vous deviez annuler ou raccourcir la durée de votre séjour, vous resterez redevable de la totalité de la somme.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Montant de l\'annulation et de la terminaison du contrat</i> Si vous deviez annuler votre séjour, la confirmation d\'annulation doit être faite par écrit. Le montant des charges d\'annulation est de :');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Arrivée prévue dans les 14 prochains jours');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Imprimer une lettre de confirmation');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Impression de la facture');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Nombre de nuits: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Coût par nuit : ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Total');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Imprimer la facture');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Ajouter le service à la note');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Description du service ');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Valeur du service');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Autres éléments facturés');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Elément ajouté à la note');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Téléchargez une image');
jr_define('_JOMRES_FILE_UPLOAD', 'Charger un fichier');
jr_define('_JOMRES_COM_A_ODDS', 'Divers');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'Cataloguer appels aux minicomposants');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Mettre Oui pour voir une liste des minicomposants appelés au fond de la page, après que Jomres a été exécuté. Cela désactive aussi la fonction interne de redirection, ce qui est utile si vous essayez d\'identifier quels minicomposamts font quels services.');
jr_define('_JOMRES_FILE_DELETE', 'Effacer cette image');
jr_define('_JOMRES_FILE_DELETED', 'Fichier effacé');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Supprimer');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Il n\'est pas possible de supprimer cette chambre, il y a déjà des réservations assignées. Annulez ces réservations et recommencez.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Chambre supprimée');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Supprimer les équipements de la chambre');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Il n\'est pas possible de supprimer l\'équipement de cette chambre, il est déjà assigné à d\'autres chambres. Supprimez l\'équipement de ces chambres et recommencez.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Equipement de la chambre supprimé');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Supprimer l\'équipement de l\'établissement');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Il n\'est pas possible de supprimer cet équipement, il est déjà assigné à un établissement. Supprimez l\'équipement de cet établissement et recommencez.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Équipement de l\'établissement supprimé');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Effacer le type de chambre');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Type de chambre effacé');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'Effacer établissement');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'l\'établissement a été effacé');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Vous n\'êtes pas autorisé à supprimer cet établissement.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Largeur de l\'image');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Carte d\'accès');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Description de l\'établissement');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Horaires d\'arrivée');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Zone d\'activités');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Accès par route');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Aéroports');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Autres formes de transport');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Normes et renonces');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Adresse');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Les visiteurs peuvent réserver en ligne');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Sélectionner OUI si vous voulez que les visiteurs puissent réserver une chambre en ligne.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Les réservations sont établies pour une période fixe');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Si vous sélectionnez OUI, la réservation sera activée pour une période fixe. Si vous sélectionnez NON, rassurez vous que la fonction  \"Jour d\'arrivée prédéfini\" n\'est pas activée à OUI (à moins que vous souhaitiez imposer une date d\'arrivée fixe à vos hôtes) Sinon vous n\'obtiendrez pas beaucoup de liens de disponibilité sur le calendrier.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Période de réservation: ');
jr_define('_JOMRES_COM_A_BOOKING', 'réservation des chambres');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Périodes Maximum, Ex. 3 x 7 périodes de réservation = 21 jours');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'C\'est un établissement avec des chambres individuelles ?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Vérifier la réservation');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Confirmer la réservation');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Lundi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Mardi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Mercredi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Jeudi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Vendredi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Samedi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Dimanche');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'Lun');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'Mar');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'Mer');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'Jeu');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'Ven');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'Sam');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'Dim');
jr_define('_JOMRES_COM_A_AVLCAL', 'Calendrier disponible');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Couleur des caractères pour la date actuelle');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'Couleur des caractères pour les jours affichés dans le mois ');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Couleur des caractères pour les jours qui ne sont pas affichés dans le mois');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Couleur d\'arrière plan de la cellule pour les jours où l\'établissement/chambre est disponible');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Couleur d\'arrière plan de la cellule pour les jours non affichés dans le mois en cours');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Couleur d\'arrière plan de la cellule pour les jours occupés');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Couleur d\'arrière plan de la cellule pour les réservations provisoires (réservations pour lesquelles un acompte n\'a pas encore été perçu)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Couleur d\'arrière plan de la cellule pour les jours antérieurs');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Occupé/pas disponible');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Disponible pour réservations');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'réservations provisoires');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Date d\'arrivée prédéfinie');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Uniquement pour les sites offrant des périodes de réservation fixe. Choisissez le jour dans lequel les arrivées doivent démarrer.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Jour d\'arrivé fixé');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Durée du séjour (en jours)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Afficher les disponibilités sous forme de calendrier ?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Sélectionnez OUI si vous voulez afficher le calendrier des disponibilités');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Disponibilité');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Cliquer sur une date libre pour accéder au formulaire de réservation.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Nouvelle entrée d\'indisponibilité');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Supprimer l\'hôte');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'L\'hôte a été supprimé');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Ce n\'est pas possible de supprimer cet hôte car il y a déjà une réservation en cours. Annulez la réservation et recommencez.');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Aucune préférence');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Format de sortie du calendrier');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Format d\'entrée du calendrier');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Ceci permet à l\'utilisateur de modifier l\'entrée des dates dans Jomres.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Les réservations à période fixe permettent des courts séjours');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Durée du séjour');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Publié');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Vérification rétrospective');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Date');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Nom (utilisateur)');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Filtrer sur la date');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Texte adapté mis à jour');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Statut');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Arrivée en attente');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Arrive aujourd\'hui');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Résident actuel');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Départ aujourd\'hui');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Départ en retard');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Indisponibilités');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', ' N\'est pas arrivé');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'La chambre a été créée');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'La chambre a été mise-à-jour');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'La chambre a été supprimée');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'L\'équipement de la chambre a été créé ');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'L\'équipement de la chambre a été mis-à-jour');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'L\'équipement de la chambre a été effacé');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'L\'établissement a été créé');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'L\'établissement a été mis-à-jour');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'L\'établissement a été effacé');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Paramètre de l\'équipement modifié');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Equipement publié');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Le tarif a été créé');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'le tarif a été mis-à-jour');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Montant svc. créé');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Introduire la réservation');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Un compte enregistré');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'L\'hôte a été créé');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'L\'hôte a été mis-à-jour');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Réserver une chambre');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Un extra a été crée');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Un extra a été mis-à-jour');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Un extra a été effacé');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Un extra a été publié.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Liste des indisponibilités entrées.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Liste des indisponibilités effacées.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Extras');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Description');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Nom');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Prix');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Extra mis-à-jour');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Editer l\'élément');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Extra supprimé');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Gérer les extras');
jr_define('_JOMRES_COM_A_EXTRAS', 'Afficher les extras au moment de la réservation?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Sélectionner OUI pour afficher les extras que vous voulez proposer à l\'hôte');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Extra/option.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Date de début de l\'indisponibilité');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Date de reprise en service');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Indisponibilités');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Il y a eu une erreur lors de votre tentative de réservation pour cette/ces chambres, une ou plusieurs ne sont pas disponibles.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Chambres inclues dans la Liste d\'Indisponibilités');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Il n\'y a pas de réservations sur la Liste d\'Indisponibilités à afficher');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Nombre d\'étoiles');
jr_define('_JOMRES_COM_A_RESET', 'Remise à zéro');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'réservation annulée');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Rechercher ici pour: ');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Symbole de la devise');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Code de la devise');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Renseignements additionnels');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Limiter les réservations à l\'avance ?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Sélectionner OUI si vous voulez limiter les réservations à l\'avance (utilisez le champ suivant pour entrer la limite en nombre de jours). Si vous sélectionnez OUI alors l\'utilisateur qui souhaitera réserver avant n jours à l\'avance sera enregistré à la date d\'aujourd\'hui');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Le nombre de jours pour la réservation à l\'avance est limité à: ');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Taxe');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Taxe pour la chambre');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Montant des taxes fixes');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Pourcentage de la taxe');
jr_define('_JOMRES_COM_A_EUROTAX', 'Taxe');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Pourcentage de la taxe');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Archiver tous les enregistrements');
jr_define('_JOMRES_FRONT_TARIFFS', 'Nos Tarifs');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Nom du Tarif');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Description du tarif');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Type de chambre');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Valide du');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'au');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'Par personne et par nuit');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'Par nuit');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'N\'inclue pas les week-ends');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Minimum de jours');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Maximum de jours');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Minimum de personnes');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Maximum de personnes');
jr_define('_JOMRES_FRONT_PREVIEW', 'Afficher');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Edition ?');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Mettre à jour le texte personnalisé.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Editer la langue');
jr_define('_JOMRES_FRONT_PTYPE', 'Type d\'établissement');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Lister les types d\'établissement');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Editer le type d\'établissement');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Types d\'établissement');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Description du type d\'établissement');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Types d\'établissements sauvegardés');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'type(s) d\'établissement(s) supprimé(s)');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Rappel de paiement');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Pas de services supplémentaires à ajouter à la note');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Un acompte');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Somme totale');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Montant enregistré au moment de la réservation');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Utilisez cette option pour décider ce qui sera facturé lors de la réservation. Choisisez le Un acompte, si un acompte doit être perçu ou le montant total si c\'est celui qui doit être perçu.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Mois du calendrier à afficher');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'Dans la mise à disposition des chambres, combien de mois le calendrier doit-il afficher ?');
// V1.4
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Payment Gateways');
jr_define('_JOMRES_COM_A_CANCEL', 'Annulé');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Veuillez choisir la/les chambre(s) que vous voulez prendre, et les dates appropriées. <br>si une chambre n\'a pas de marque \"vérifiée\", celle-ci ne pourra pas être insérée dans la Liste d\'Indisponibles avant la fin ou l\'annulation de la réservation.<br/> Lorsque vous avez choisi les dates appropriées, cliquez sur le bouton bleu \"appliqué\" pour revérifier la disponibilité de la chambre. ');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<center><b>Il semblerait que Joomla vous a déconnecté par inactivité</b> Veuillez vous reconnecter et réessayer.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Raison');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Utiliser les gateways de paiement ?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Veuillez sélectionner votre méthode de paiement.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Gateway activée?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Paramètres des <i>plugins</i> modifiés');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Insérer les paramètres des plugins ');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'Voir le site internet de cette propriété');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'Lien extérieur');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Introduisez ici un lien vers votre propriété.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Editer la carte de crédit');
jr_define('_JOMRES_COM_A_EDITICON', 'Editer la taille de l\'icone');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Diaporama');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Afficher le lien vers les diaporamas ?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Afficher les diaporamas en ligne?');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Images de l\'établissement');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Afficher le lien vers les tarifs?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Fenêtres <i>popup</i> autorisées ?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Charger images par lots');
jr_define('_JOMRES_A_TABS_MISC', 'Divers');
jr_define('_JOMRES_A', 'Configuration du site');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Utiliser les dispositifs globaux de l\'établissement');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'Icône');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Sélectionner le <i>plugin</i> de recherche que vous voulez utiliser.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Désolé, votre recherche n\'a pas retournée de résultats. Veuillez modifier les paramètres de votre recherche.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Etes vous certain de vouloir réaliser cette action?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Réserver une chambre');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Réservez cette annonce');
//v1.4c
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Voir les tarifs en ligne ?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adresse');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Détail');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Cliquez pour voir les disponibilités');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Voir l\'adresse avec ce lien');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Voir l\'annonce avec ce lien');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Voir les disponibilités avec ce lien');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Pourcentage du tarif');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Moyenne');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Sélectionnez le modèle de tarif');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'Vous avez 2 choix de calcul du tarif. Au premier, \"tarif unique\", permet d\'offrir une variété de tarifs différents à l\'hôte à la même taxe pendant tout le séjour. Ceci est utile si vous voulez divers tarifs différents pour la même date, par exemple tarif lit et petit déjeuner, et tarif lit petit déjeuner et dîner. Choisissez le tarif \"moyennes\" si vous voulez ajuster vos prix en fonction de la date en question. Jomres trouvera tous les tarifs pour chaque jour de la réservation, les groupe ensemble et retourne la taxe moyenne pour la période de séjour');
// v1.4e
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Voir les dates de départ?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Sélectionnez non si vous ne voulez pas voir apparaitre la date de départ dans une boite de sélection. Conseillable seulement si vous savez ce que vous faîtes, car la date de départ dans les réservations sera toujours ajustée au jour suivant l\'arrivée.');
// v1.4f
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Paramètres des limites');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Limitation du nombre de caractères visibles.');
// v1.4g
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Format et style de la date?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Publier');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Annuler publication');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'type de chambre');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'Pour assigner une image à cet établissement il faut d\'abord charger une image pour le type de chambre dans le répertoire /images/stories/jomres/rmtypes/ . ');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'ERREUR - Couleur du fond ');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Langue par défaut');
jr_define('_JOMRES_JAVASCRIPT_', 'Les champs marqués par une étoile sont requis.');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'L\'utilisateur peut enregistrer les paramètres ?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Utilisez cette option si vous voulez que l\'utilisateur s\'enregistre sans intervention de l\'administrateur.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Les champs marqués par une étoile sont requis.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Créer le compte');
// v1.4i
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Montrer le calendrier avec l\'année?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Disponibilités depuis le début de cette année.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Nombre de chambres disponibles');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Retour sur le détail');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Type de chambre');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'limitation de recherche');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Convertir la grille de tarif avec Google?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Conversion du taux :');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'Autoriser l\'éditeur HTML pour les utilisateurs ?');
// v2
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'Utilisez ce formulaire pour effectuer votre réservation. Déplacez votre souris sur l\'image du \"i\" pour plus d\'information sur la colonne. Modifiez les particularités des réservations comme les dates d\'arrivée ou de départ et les numéros des hôtes, puis sélectionnez la ou les chambres voulues depuis la liste. Cliquez sur n\'importe quelle chambre disponible pour l\'ajouter à la liste des réservations possibles. Quand vous aurez terminé, vous pouvez ajouter des services supplémentaires (option) et remplir le nom, adresse etc. Quand le formulaire soit prêt, confirmez votre réservation en cliquant soumettre (submit).');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Utilisez ce formulaire pour votre réservation. Le \"i\" vous fournit d\'avantage d\'information sur la colonne. Vous pouvez modifier vos souhaits (arrivée, départ, nombre de personnes) à tout moment. Quand vous aurez terminé, vous pouvez ajouter s\'il y a lieu des options ou services supplémentaires et confirmer avec le bouton soumettre (submit).');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Options de réservation');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Sélection de vos détails de demande de réservation');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Disponibilité ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Choisissez la ou les chambre(s) que vous voulez');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Vérifiez si cela est possible en ce moment.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Services en option');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Ajouter une ou des option(s) à mon séjour');
jr_define('_JOMRES_COM_PERDAY', 'Par nuit');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Votre adresse');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Merci de remplir vos détails. Veuillez remarquer les champs obligatoires.');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Disponibles');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Chambres sélectionnées :');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>La date d\'arrivée au plus tôt est le: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'Par nuit :');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Total :');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'option(s) retenue(s) :');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Réservations prévues');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'Taxe:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Remise:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Total avec option(s):');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Hôtes');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Merci de confirmer en cliquant pour ajouter votre sélection');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'J\'annule et efface cette sélection');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Types des hôte(s)');
jr_define('_JOMRES_VARIANCES_TYPE', 'Type');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'Type d\'hôtes, ex. adultes, enfants entre 5-10 ans, ou étudiants, etc ');
jr_define('_JOMRES_VARIANCES_NOTES', 'Remarques');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Remarques que vous voulez formuler quant au type d\'hôtes ?');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Maximum');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Le nombre maximum d\'hôtes de ce type qui peut être sélectionné dans ce formulaire.');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'est un pourcentage');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'ce résultat est un pourcentage calculé sur la valeur de la chambre. Si vous indiquez non, alors la valeur que vous indiquez est simplement ajoutée ou retranchée de la valeur de base de la chambre.');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Ajoutez la différence ?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'Le résultat est ajouté ou retranché de la valeur de base la chambre. Si vous indiquez non, le rabais sera appliqué sur la base. ');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Différence');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'La valeur de la différence');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Type d\'ordre client modifiée');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Type de client effacé');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Type de client créé');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Type de client mis à jour');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Type de client mis à jour');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Montrer le lien vers la liste de chambres dans les détails de la propriété?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'Montrer <b>uniquement</b> les disponibilités pour le calendrier/la liste des chambres ?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Cliquez Oui pour désactiver l\'affichage de l\'entête et des détails, de façon à n\'avoir que le calendrier de disponibilités dans la page de détails de la propriété. Destiné vraiment aux utilisateurs qui louent des propriétés mono-chambre (maisons, appartements).');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Intervalle minimum Arrivée-Départ');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'intervalle minimum de réservation entre la date d\'arrivée et la date de départ.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Le formulaire de réservation montre le numéro de la chambre');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Le formulaire de réservation montre le nom de la chambre');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Le formulaire de réservation montre le titre du tarif');
jr_define('_JOMRES_ORDER', 'Ordre');
jr_define('_JOMRES_REQUIREDFIELDS', 'Infos client');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'jours avant l\'arrivée');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Le nombre minimum de jours qui doivent passer, à partir de \"aujourd\'hui\", avant la date d\'arrivée.');
jr_define('_JOMRES_DTV', 'variations par type de dates');
jr_define('_JOMRES_DTV_DOW', 'Jour de la semaine');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Type d\'hôte par défaut');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Nombre de personnes par défaut pour le premier type de client montré. Si vous utilisez les types de client, ce chiffre est le nombre de personnes sélectionné par défaut pour le premier type de client dans le formulaire de réservation.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Seulement les utilisateurs enregistrés peuvent effectuer des réservations en ligne?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Désolé, vous devez être un utilisateur enregistré pour pourvoir réserver en ligne. Cliquez ici pour vous logger sur le site !');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Couleur des caractères pour les liens aux réservations en cours');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Limites du weekend');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'réservation validée');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'réservation en liste d\'indisponibilités');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Arrondir l\'acompte à la valeur supérieure?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Facturer un acompte?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Les tarifs sont par semaine?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Vous avez la possibilité d\'enregistrer les tarifs soit comme étant des valeurs par nuit soit par semaine. Si vous les enregistrez par semaine, vous DEVEZ basculer cette option sur OUI.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Tarif par semaine');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Date d\'arrivée récurrente: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Quand l\'option DATE D\'ARRIVEE FIXE est activée, le nombre de dates qui peut être affiché dans la liste déroulante. Remarquez que la liste de dates ne fait pas inclusion d\'aucune date si une réservation n\'est pas possible à cause de réservations précédentes, et que cette liste sera deux fois plus longue que votre chiffre sélectionné, car elle aura un nombre similaire de dates dans son historique (où applicable)');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'La date d\'arrivée n\'est pas correcte');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'La date de départ n\'est pas correcte');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Votre réservation est trop courte. Notre établissement fixe le minimum de nuits à :');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Votre intervalle est de :');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'La variante type d\'hôte n\'est pas correcte');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Sélectionnez le nombre et le type d\'hôtes');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Vous êtes trop nombreux pour les tarifs. Veuillez nous contacter par mail ou téléphone.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Vous avez choisi plus de chambres que vous n\'avez d\'hôtes! Cliquez sur une chambre pour l\'enlever de votre réservation');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Il y a trop d\'hôtes pour les lits disponibles');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Il faut choisir une chambre supplémentaire');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Sélectionner une chambre');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Introduisez votre prénom');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Introduisez votre Nom');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Introduisez le n° de porte');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Introduisez votre rue, chemin, impasse, avenue, etc.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Introduisez votre ville !');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Introduisez votre région');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Introduisez votre code postal');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Introduisez votre pays !');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Le numéro de téléphone fixe est nécessaire');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Le numéro de mobile est nécessaire');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'L\'adresse email est nécessaire');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'Nous avons des disponibilités!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Aucune sélection');
jr_define('_JOMRES_BOOKING_NUMBER', 'N° de réservation');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Ok pour lancer la réservation, messages en arrière-plan');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Vider les variables du thème?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'A remplir pour réaliser un dump DHTML (vidange) des variables du thème (<i>template</i>) de toutes les variables de chaque fichier FRONTEND (visibles en frontal). Utile si vous voulez voir si un élément est disponible dans un certain thème.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Le montant est un pourcentage');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Indiquez Oui si la majoration pour une personne seule est un pourcentage. Si Non, le montant appliqué sera ajouté ou retranché du montant global.');
//v2rc2
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Disponibilités/Tarifs');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Utilisez cette entrée pour limiter le nombre de chambres et de tarifs disponibles listés dans le formulaire de réservation. Indiquez 0 si vous ne voulez pas activer cette limitation.');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'Aucune disponibilité dans cette période !');
// Translate from here
// v2.6
jr_define('_JOMRES_BOOKITNOW', '');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Mode d\'édition global?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Attention sur cette fonction. Si le mode global est activé, les changes de texte affecteront TOUS les établissements dans le système pour la constante que vous éditez.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Symbole monétaire global');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Composant enveloppé');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Sélectionnez oui pour envelopper le composant de façon à ne pas afficher les espaces module et en-tête');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Weekends seulement');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Jours du weekend');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Sélectionnez vos jours de weekend. Les tarifs permettant ou pas les weekends ce baseront sur ce paramètre pour générer la liste des chambres.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Sélectionnez votre pays avant d\'ajouter des informations sur l\'établissement.');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Gardez les changes sur l\'établissement avant de charger son image.');
jr_define('_JOMRES_TARIFFSFROM', 'Prix à partir de - ');
jr_define('_JOMRES_SEARCH_ALL', 'Tous');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Recherche par pays');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Recherche par région');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Recherche par ville');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Recherche par caractéristique');
jr_define('_JOMRES_SEARCH_BUTTON', 'Recherche');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Entrez le texte à rechercher dans la boite et cliquez sur le bouton.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Texte à rechercher: ');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Introduisez les dates de votre séjour et cliquer sur le bouton pour trouver les chambres ayant des disponibilités pour cette période.');
jr_define('_JOMRES_SEARCH_PTYPES', 'Lister tous les établissements par type');
jr_define('_JOMRES_SEARCH_RTYPES', 'Lister tous les établissements par type de chambre');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'Défaut');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'Nom de l\'établissement');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'Région de l\'établissement');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'Ville de l\'établissement');
jr_define('_JOMRES_SORTORDER_STARS', 'Étoiles');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Détails établissement - ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Formulaire de réservation');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Changer l\'adresse');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Re-vérification de la disponibilité<br/>(La sélection des chambres sera réinitialisée)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Re-vérification de la disponibilité');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Modification de vos extras en option');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Changement de votre sélection de chambres');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Changement de votre adresse');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Désolé, un ou plus des champs adresse sont incorrects.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Image de la chambre');
jr_define('_JOMRES_CURRENCYFORMAT', 'Format monétaire');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Options de recherche');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Journaux disponibles');
jr_define('JOMRES_COM_A_MESSAGE', 'Message');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normal');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Avancé');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Microgéré');
jr_define('JOMRES_COM_A_TARIFFMODE', 'Mode de configuration tarifaire');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', '<b>Attention: Changer entre les différents types de tarification peut résulter en perte de données. Lisez ci-dessous sur ce sujet.</b>.
<br/><br/>
Vous avez trois options pour configurer vos tarifs.<br/>
Mode normal: Vous aurez un tarif pour chaque type de chambre, que sera valide pour les dix prochaines années.<br/>
Microgéré: Vous pouvez modifier les prix jour à jour pour chaque type de chambre/établissement. <br/>
Avancé: La \"vielle\" méthode de tarification Jomres. <br/>
<br/>
Les différents modes de tarification vous permettent de choisir la méthode qui convienne le mieux à chaque établissement.<br/>
Le mode normal est le plus simple mais il est le plus facile à comprendre car il crééra des références croisées entre chambres et tarifs vers types de chambre/établissement et vous permettra de configurer les chambres et les prix sur la même page.<br/>
Le mode microgeré vous permet de faire varier les tarifs jour à jour sans devoir gérer des tonnes de tarifs différents, ceci est fait en créant des références croisées entre un grand nombre de tarifs. Le résultat est un nombre de tarifs créés pour vous couvrant une certaine période, mais vous ne pouvez pas \"empiler\" les tarifs.<br/>
Le mode avancé vous permet de créer une chambre et de l\'associer à un type de chambre. Vous pouvez alors créér un tarif et l\'associer au type de chambre. Utiliser cette méthode permet \"d\'empiler\" les tarifs les uns sur les autres. Par exemple, un type de chambre \"lit double\" peut avoir un tarif pour lit et petit déjeuner, et un autre pour lit, petit déjeuner et dîner. La méthode avancée demande un peu plus d\'attention aux détails car il est possible de dissocier une chambre ou un tarif d\'un type de chambre/établissement, ou de définir des dates valides mais incorrectes. Il offre cependant des options de configuration que les autres modes n\'offrent pas.<br/>
<br/>
Comme les modes Normal et Microgéré demandent un paramétrage spécifique des chambres et tarifs pour le mode tarifaire, le système peut devoir réinitialiser certaines données pour rendre les configurations tarifaires existantes compatibles avec le nouveau mode tarifaire choisi.<br/>
<br/>
Normal -> Avancé. Pas de change. Les tarifs existants sont conservés.<br/>
Normal -> Microgéré. Tous les tarifs existants sont effacés.<br/>
Advanced -> Normal. Tous les tarifs existants sont effacés.<br/>
Advanced -> Microgéré. Tous les tarifs existants sont effacés.<br/>
Microgéré -> Avancé. Tous les références croisées entre les tarifs sont effacées, mais les tarifs eux mêmes sont conservés.<br/>
Microgéré -> Normal. Tous les références croisées et les tarifs sont effacés.<br/>');
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Afficher la liste des chambres dans la page de détails de l\'établissement ?');
jr_define('JOMRES_PROPERTYTYPE', 'Type d\'établissement');
jr_define('JOMRES_MAXPEOPLEINROOM', 'Max personnes par chambre');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Max personnes par réservation');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Ajouter note');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Editer note');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Effacer note');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Voir notes');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Nouvelle note ajoutée');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Note éditée');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Note effacée');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Lister les réservations');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Mes réservations');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Voir réservation');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Voir favoris');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Vous n\'avez pas encore ajouté de favoris!');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Type d\'établissement');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Tarification intelligente');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'Active');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Ce <i>plugin</i> vous permet de configurer vos prix dynamiquement.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'La plupart des établissements recalculent le prix de leurs chambres en fonction du nombre de chambres d\'un certain type qui sont disponibles sur les dates demandées. Ceci permet d\'offrir des réductions sur un type de chambre au taux de remplissage faible pendant une certaine période de l\'année, ayant comme objectif d\'attirer affaires qui seraient autrement perdus.<br/>Activer et configurer ce <i>plugin</i> vous permet d\'offrir des tarifs ajustables basés sur le nombre de chambres d\'un certain type qui sont disponibles dans l\'établissement sur un jour donné.<br/> L\'écart de jours détermine le nombre maximum de jours jusqu\'à de la date d\'arrivée, avant que les prix soient ajustés par cette fonctionnalité. Les options de pourcentage vous permettent de configurer le pourcentage de chambres qui doivent être disponibles avant que la réduction donnée soit appliquée.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'Seuil (nombre de jours entre la date d\'arrivée et aujourd\'hui)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Pourcentage de chambres occupées 10%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Pourcentage de chambres occupées 25%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Pourcentage de chambres occupées 50%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Pourcentage de chambres occupées 75%');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'Réduction %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' à été réduit à partir de ');
jr_define('_JOMCOMP_WISEPRICE_TO', ' vers ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Tarif de la chambre sans remise ');
jr_define('JOMRES_COM_A_MAPSKEY', 'Clé API Google maps');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'Vous pouvez récupérer une clé Google maps API sur <a href=\"https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key\" target=\"_blank\">Google maps</a>. Un fois votre clé copiée ici, Jomres affichera la carte dans la page de détails de l\'établissement.');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'Dernière minute');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'Active?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Activez cette option si vous voulez offrir des remises de dernière minute.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Écart');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Si pour une réservation faite la date d\'arrivée est à moins de N jours de la date de réservation, alors la remise peut être appliquée');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Remise');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'En pourcentage');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Une remise a été appliquée à cette réservation!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Le coût du séjour a été réduit de ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'Cet établissement offre une réduction dernière minute de ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', ' pourcent si vous réservez pour arriver avant le ');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', ' pourcent ou plus si vous réservez pour arriver avant le ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. réservez maintenant pour bénéficier de cet offre!');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Information tarifaires détaillées');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Choisissez Oui pour afficher une information tarifaire plus détaillée dans le <i>popup</i> de détail des tarifs de l\'établissement');
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Minimiser les options de configuration');
jr_define('_JOMCOMP_AMEND', 'Modifier réservation - Sélection d\'établissement');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'Choisir un nouvel établissement');
jr_define('_JOMCOMP_AMEND_HEADER', 'Contrat original :');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'Acompte payé');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'Acompte non payé');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Modifier le total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Modifier l\'acompte');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL', 'Annuler');
jr_define('_JRPORTAL_CPANEL', 'Tableau de contrôle');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Taux de commission par défaut');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Choisir le taux de commission qui sera appliqué par défaut à un établissement dans l\'éventualité où un autre taux de commission n\'a pas été défini.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'Liste Taux de commissions');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Taux de commissions');
jr_define('_JRPORTAL_CRATE_TITLE', 'Titre');
jr_define('_JRPORTAL_CRATE_TYPE', 'Type');
jr_define('_JRPORTAL_CRATE_VALUE', 'Taux de commission');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'Code monétaire');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'Liste d\'établissements');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Nom d\'établissement');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Adresse de l\'établissement');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'Les établissements dont la couleur de fond est rouge n\'ont pas encore de taux de commission appliqué.');
jr_define('_JRPORTAL_STATS_PATETITLE', 'Statistiques');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Taux de commission');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Liste de réservations');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Id de l\'établissement');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Id facture');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Total réservation');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Date d\'archive');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Description');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Vous pouvez avoir des fichiers de langues spécifiques aux types d\'établissements en donnant le nom d\'un sous-dossier dans la description, i.e. \"locationbateaux\" et en copiant un fichier de langue dans ce sous-dossier. Vous pouvez alors modifier les messages pour ce type d\'établissement de façom à ce que chambres devienne, par exemple DVDs, etc...');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Vous ne pouvez pas effacer cet établissement car il est le seul auquel vous ayez accès. Si vous voulez le désactiver, veuillez utiliser la fonctionnalité annuler publication dans votre barre d\'outils. ');
// Jomres v3.0.6
// Jomres v3.1
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Total en hébergement');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', ' nuit(s) à ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', ' par chambre ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Total amélioration de votre séjour (inc. taxe)');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Détail du prix');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'Veuillez lire et accepter ');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'Un résumé de votre réservation est affiché ci-dessous.<br /> Pour changer la réservation, veuillez cliquer sur le bouton Modifier réservation. ');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'Si vous devez modifier les informations ci-dessus, veuillez cliquer ici');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'Modifier réservation');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'Veuillez entrer ci-dessous vos demandes particulières.');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Je confirme que l\'information ci dessus est correcte et accepte les ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', ' par personne par nuit ');
// Jomres 3.1.10
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF')) {
    jr_define('_PN_OF', 'de');
}
if (!defined('_PN_START')) {
    jr_define('_PN_START', 'Début');
}
if (!defined('_PN_PREVIOUS')) {
    jr_define('_PN_PREVIOUS', 'Antér.');
}
if (!defined('_PN_NEXT')) {
    jr_define('_PN_NEXT', 'Prochain');
}
if (!defined('_PN_END')) {
    jr_define('_PN_END', 'Fin');
}
if (!defined('_PN_RESULTS')) {
    jr_define('_PN_RESULTS', 'Résultats');
}
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Remarquez que ceci n\'est pas un formulaire de réservation, mais que vous n\'envoyez qu\'un email.<br/>Introduisez le message que vous aimeriez envoyer à ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Contacter l\'hôtel');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Formulaire d\'enquête d\'établissement');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Merci de votre enquête, le message a été envoyé à l\'adresse email de contact de l\'établissement et copié pour votre adresse pour votre connaissance. Vous aurez une réponse aussitôt que possible.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' concernant ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Enquête');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Sélectionnez votre logement demandé à partir de la liste à droite');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Min. de chambres déjà sélectionné');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Nombre minimum de chambres déjà sélectionné sur le formulaire avant qu\'il soit possible d\'offrir une combinaison tarif/type de chambre. Ceci vous permet d\'avoir tarifs rebattues quand plus de N chambres deviennent sélectionnées.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Max. de chambres déjà sélectionné');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Nombre maximum de chambres déjà sélectionné sur le formulaire pour faire arrêter l\'offre d\'une combinaison tarif/type de chambre. Ceci vous permet de ne plus offrir des tarifs rebattues quand plus de N chambres deviennent sélectionnées.');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', 'Remarques que des suppléments pour une seule personne définis ici ne seront pas utilisés si les suppléments pour une seule personne ont été définis OUI dans la configuration générale. Les définitions ici contenues sont une alternative à avoir des taux uniques concernant suppléments pour personnes seules, pas une addition aux SPS à taux uniques.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'Disponible');
jr_define('_JOMRES_AVLCAL_QUARTER', 'Quelques réservations');
jr_define('_JOMRES_AVLCAL_HALF', 'Demi-réservé');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'Majoritairement réservé');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'Complètement réservé');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Par semaine');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Par jour');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Par réservation');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Par personne par réservation');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'Par personne par jour');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'Par personne par semaine');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Par jours (min jours)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Per jours X chambres sélectionnées');
jr_define('_JOMRES_REGISTRYREBUILD', 'Rétablir registre de minicomposants');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', 'Normalement le registre des <i>plugins</i> Jomres est rétabli automatiquement toutes les fois que vous voyez le gérant de minicomposants et ajouter ou enlevez un <i>plugin</i>. Quand même, c\'est possible que vous ne pouvez pas utiliser ces capacités par quelque raison. Vous pourrez donc utiliser cette fonction pour rétablir le registre manuellement. Si vous avez accès au gérant de <i>plugins</i> et de mises à jour, ce n\'est pratiquement pas probable que vous aurez besoin de cette fonction. Vous aurez besoin de rétablir le registre de <i>plugins</i> chaque fois que vous ajoutez un mini-composant et n\'ayez pas utilisé le Gérant de <i>Plugins</i> por le faire.');
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Registre reconstruit avec succès');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'Il y a eu un erreur en reconstruisant le registre de minicomposants. Vous devrez vérifier l\'erreur dans le <i>log</i> Jomres pour voir s\'il y a une référence de quoi a occasionné cet erreur.');
jr_define('_JOMRES_SEARCH_PRICERANGES', 'Recherche par gamme de prix.');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Vous n\'avez pas encore fait aucune réservation encore!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Éditez le type de votre propriété');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Sélectionnez le type de votre propriété');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Votre enquête...');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'Limite de Liste des Établissements/Propriétés');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'Nombre de propriétés à montrer dans la page après une recherche');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Service de recherche intégré');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', "Le service Jomres intégré de recherche permet aux utilisateurs rechercher parmi des propriétés selon une séquence de fonctions. Si vous avez déjà utilisé  les capacités de recherche Jomres dans Joomla vous serez à l\'aise avec ces définitions.<br/>Cette caractéristique nous permet d\'offrir recherche contenue dans Jomres, pour les utilisateurs qui, ou ne veulent pas utiliser des modules de recherche Joomla, ou utilisent autres systèmes de gestion de contenus qui n\'auraient pas des modules de recherche.<br/>Rappelez-vous que, si vous choisissez rechercher quelque chose à travers un lien (pas un <i>dropdown</i>) autres options de recherche ne seront pas établies, seulement l\'élément correspondant au lien où vous avez cliqué.<br/>Remarquez que, par défaut la disposition de cette recherche intégrée n\'est par très joli. Ceci parce que le fichier que fait la recherche doit agréger toutes les options possibles, quelques unes incompatibles.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Activer cette caractéristique?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Si la caractéristique est activée, tous les demandes à Jomres qui montrent la liste d\'établissements signifient que les options de recherche sont aussi montrées.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Utiliser colonnes');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Aucune option de recherche que vous ayez définie du type lien (tant qu\'applicable) seront montrées comme colonnes (ce qui veut dire, br mis à la fin du lien)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Rechercher région par <i>dropdown</i> de sélection combiné');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', 'Offrir un <i>dropdown</i> de recherche pour filtrer pays/régions/villes. Si vous allez utiliser cette option vous aurez mieux de ne pas utiliser la recherche région/ville ci-dessous.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Recherche par nom de propriété');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Montrer la recherche par nom de la propriété.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Montrer comme <i>dropdown</i>?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Sélectionnez Non pour montrer la liste comme liens');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Recherche par ville/région');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Montrer la recherche par région');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Montrer comme <i>dropdown</i>?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Sélectionnez Non pour montrer la liste comme liens');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Recherche par type de propriété');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Montrer la recherche par type de propriété');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Montrer comme <i>dropdown</i>?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Sélectionnez Non pour montrer la liste comme liens');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Recherche par type de chambre');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Montrer la recherche par type de chambre');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Montrer comme <i>dropdown</i>?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Sélectionnez Non pour montrer la liste comme liens');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Recherche par caractéristiques');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Montrer la recherche par caractéristiques');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Montrer comme <i>dropdown</i>?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Sélecter Non pour montrer la liste comme des images d\'outils et boîtes de vérification');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Recherche par description');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Montrer la recherche par description');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Recherche par disponibilité');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Montrer la recherche par disponibilité');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Montrer par gamme de prix');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Montrer la recherche par gamme de prix');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Accroissements de prix');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres regardera dans toutes les valeurs des tarifs et présentera une série d\'accroissements basés sur les spécifications définies ici.');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Par défaut, si un établissement n\'est pas sélectionné à Jomres, une recherche est faite. Si cette recherche n\'a pas été déclanchée par un module de recherche, elle produira des résultats aléatoires (en le faisant exprès). Cette option permet de limiter le nombre de retours dans cette recherche aléatoire.');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Définition el résultats des travaux automatiques (<i>cron jobs</i>)');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Information de travail Pseudocron. La fonctionnalité pseudocron est nécessaire pour la manipulation de facturation et commissions.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Minicomposants <i>cron</i> installés. Pour un travail automatique individuel, utilisez les liens ci-dessous. Remarquez que les travaux automatiques (<i>cron jobs</i>) ne produisent aucune sortie de données, donc vous ne verrez pas aucune information sur la page. Référez-vous par contre à la liste de travaux ci-dessous.');

jr_define('_JOMRES_COM_A_CRON_METHOD', 'Méthode');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', "Si vous n\'avez pas accès aux travaux automatiques, définissez ceci comme minicomposant, autrement créez un travail automatique (<i>cron job</i>) et préparez-le pour exécuter <br /> <i>curl -s ".JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime('tmplcomponent').'&no_html=1> /dev/null</i> ');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Montrer <i>logging</i> dans le <i>browser</i>');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Fonctionne seulement si la méthode est définie comme minicomposant.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Logging activé');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Définissez Oui pour permettre logging. Les résultats seront affichés ci-dessous.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Logging verbeux');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Grandes quantités de sorties de logging');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Édition de thèmes');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Champs adaptés');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Vous pouvez définir ici champs adaptés spécifiques qui seront affichés dans le formulaire de réservation.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'NomduChamp (sans espaces)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Valeur défaut');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Description');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Requis');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Quantité maximale');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Si la quantité maximale est définie de façon à être plus grande que 1, les hôtes verront un <i>dropdown</i> pour choisir la quantité d\'extras qu\'ils peuvent demander.');
jr_define('_JRPORTAL_TAXRATES_TITLE', 'Taux');
jr_define('_JRPORTAL_TAXRATES_CODE', 'Code du taux');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'Description de taxe');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'Vous ne pouvez pas éliminer ce taux.');
jr_define('_JRPORTAL_TAXRATES_RATE', 'Valeur du taux');
jr_define('_JRPORTAL_INVOICES_TITLE', 'Factures');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Pas payées');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Payées');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Annulées');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'Suspendues');
jr_define('_JRPORTAL_INVOICES_USER', 'Utilisateur');
jr_define('_JRPORTAL_INVOICES_STATUS', 'Statut');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Ramassées');
jr_define('_JRPORTAL_INVOICES_DUE', 'En dette');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Souscription');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Total général');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Fréquence de renouvellement');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Jour du mois, de renouvellement');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'Code de devise');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Ligne d\'articles');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Nom');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Description');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Prix au départ');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Quantité au départ');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Rabais au départ');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Total au départ');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Code du taux');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Description du taux');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Valeur du taux');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Passer au dessus des définitions standard du <i>gateway</i> Jomres?');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Montrer ma facture');
jr_define('_JRPORTAL_COUPONS_TITLE', 'Coupons de rabais');
jr_define('_JRPORTAL_COUPONS_DESC', 'Codes de rabais peuvent être générés et passés aux les hôtes comme un stimulant pour faire plus de réservations. Valable dès et jusqu\'au se réfèrent aux dates quand les réservations peuvent être acceptées, pas aux dates de la réservation elle-même.');
jr_define('_JRPORTAL_COUPONS_CODE', 'Code de coupon');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'Valable du');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'Valable jusqu\'au');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'Montant du rabais');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'Le rabais est en pourcentage');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Chambre seulement');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Si vous avez un code de coupon, entrez-le ici et cliquez sur le lien "garder coupon" pour sauver les détails vis à vis votre réservation.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Garder coupon');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Coupon sauvé vis à vis la réservation');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Numéro de coupon pas trouvé');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Valeur du rabais du coupon');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Réservation rabattue. Définition du code de coupon/valeur du rabais: ');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Choisissez langues');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Choisissez les options de langue à afficher sur le menu <i>dropdown</i>.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Afficher le <i>dropdown</i> de choix des langues?');
/*
* @ignore
*/
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Cher(ère)');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Merci de votre enregistrement ');
jr_define('_JRPORTAL_NEWUSER_USERNAME', 'Votre nom d\'utilisateur est: ');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'Votre mot de passe est: ');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Veuillez vous logger pour voir vos réservations ');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Coupon gardé');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Coupon éliminé');
// Not used yet
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Nom d\'utilisateur');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Mot de passe');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API id');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Notification ver le mobile numéro');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', 'Utilisez le format \'code pays, numéro de mobile\'. Par exemple, si vous avez un mobile utilisé en France ceci serait quelque chose comme \'337979123456\'. Laissez vide si vous ne voulez pas recevoir des messages de nortification sur votre téléphone.');
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', '
<b>Logiquement l\'usage/test de ce <i>gateway</i> n\'est pas possible avec un serveur privé (localhost), vous avez bsoin d\'un serveur public actif.</b>
<br/>
<br/>
Pour utiliser le gateway Clickatell vous vez besoin d\'un compte Clickatell et au moins une connexion enregistrée (API sub-product, ou sous-produit) entre votre application et le gateway. Chaque connexion est connue comme un sous-produit. Voici comment le faire:<br/>
<br/>
<b>Pas 1 - Enregistrez-vous pour un compte Clickatell</b><br/>
Si vous n\'en avez pas encore, vous aurez besoin de vous enregistrer pour avoir un compte. Autrement, suivez directement vers le pas 2.<br/>
* Allez à http://www.clickatell.com/products/sms_gateway.php, et choisissez le sous-produit API approprié (méthode de connexion) que vous voulez utiliser (Central Clickatell (API))<br/>
* Clique sur l\'hiper-lien enregistrer.<br/>
* Remplissez le formulaire d\'enregistrement.<br/>
Après l\'avoir soumis avec succès, vous serez automatiquement loggé dans votre nouveau compte et emmené à une page où vous pourrez ajouter votre connexion API.<br/>
<b>Pas 2 - Ajoutez une connexion API enregistrée (sous-produit)</b><br/>
Si vous n\'êtes pas encore loggé à votre compte, vous devrez le faire à http://www.clickatell.com/login.php<br/>
* Sélectionnez \"Gérer mes produits\" dans le menu du sommet.<br/>
* Sélectionnez la connexion API que vous voulez utiliser (HTTP API) dans le menu <i>dropdown</i> (\'Ajouter connexion\').<br/>
* Complétez le formulaire. Rassurez vous d\'introduire l\'IP bloqué(l\'IP de ce serveur), définissez <i>Callback</i> comme HTTP POST. Vous aurez besoin de définir l\'adresse callback comme ".$jomresConfig_live_site."/index.php?option=com_jomres&task=sms_clickatell_callback plus un nom d\'utilisateur et un mot de passe.<br/>
Si vous avez enregistré plus d\'une connexion API, le nom descriptif que vous introduisez pour chacune doit être unique - vous ne pouvez pas avoir plusieurs API avec le même nom.<br/>
Après avoir soumis le formulaire avec succès, les détails de votre autorisation seront affichés, y inclus l\'ID API de chaque connexion. Ces détails d\'authentification sont nécessaires quand vous vous connectez au gateway Clickatell pour envoyer un message.<br/>
<br/>
Utilisez votre nom d\'utilisateur, mot de passe et api_id pour remplir les champs ci-dessus.<br/>
<br/>
');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Liste de chambre du formulaire de réservation affiche accès indisponible');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Liste de chambre du formulaire de réservation affiche max. personnes');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Veuillez remarquer que les prix des chambre montrés sont estimatifs et que le prix total de la réservation ne sera calculé que quand vous aurez ajouté une ou plusieurs chambres dans votre sélection.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Paquets de souscription');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Nom');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Description');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Publié');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Montant total');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Limite d\'établissements');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Souscrire');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Utiliser la fonctionnalité de gérance de souscriptions');
jr_define('_JOMRES_COM_NEWUSER', 'Créez un nouveau utilisateur en réservant');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Créez un nouveau compte d\'utilisateur lors d\'une réservation par quelq\'un pas enregistré.');
jr_define('_JOMRES_CLICKTOREGISTER', 'Cliquez ici pour enregistrer votre propriété');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Merci de votre réservation - détails de nouveau utilisateur suivants');
jr_define('_JOMRES_LATLONG_DESC', 'Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude.');
jr_define('_JOMRES_CONTROLPANEL', 'Tableau de contrôle');
// Jomres v4.2
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Afficher facture');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Afficher factures');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Ajouter ma propriété à ce site');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Avis: ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Nous regrettons, mais ce paquet n\'est pas reconnu.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Nous regrettons, mais vous avez déjà souscrit un paquet gratuit, et vous ne pouvez pas le faire de nouveau.');
jr_define('_JOMRES_COM_YOURBUSINESS', 'Vos détails d\'affaires');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'Nom commercial');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'Nombre TVA');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Nr de porte');
jr_define('_JOMRES_INVOICE_NUMBER', 'Facture No. ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Sélectionez les dates dans lesquelles vous voulez appliquer l\'interdiction de réserver. Après, cliquez sur le bouton \"Appliquer\" pour revérifier l\'indisponibilité. <br/> 
<br/> 
Si l\'établissement a un ou plusieurs réservations pour la période mentionnée, vous ne pourrez pas annuler la réservation jusqu\'à ce que les autres réservations/indisponibilités ont été annulés/remarquées.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Nous regrettons, vous ne pouvez pas faire cette propriété devenir indisponible pour les dates indiquées.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Vous pouvez faire cette propriété devenir indisponible pour ces dates.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Votre propriété est configurée pour charger par personne par nuit, mais vous n\'avez pas crée ou affiché encore aucun type d\'hôte. Veuillez créer e publier au moins un type d\'hôte. ');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Vous n\'avez pas encore aucun tarif configuré, donc vous ne pourrez pas avoir aucune réservation pour votre propriété.');
jr_define('_JOMRES_EDITINGMODE_ON', 'Mode d\'édition activé');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Mode d\'édition désactivé');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Charger dépôts variables?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Dépôts variables vous permettront de définir si vous aimeriez charger le montant total si la date d\'arrivée de la réservation tombe dans une période de N jours à partir d\'aujourd\'hui. Veuillez la définir Oui pour activer cette caractéristique, et introduisez le nombre de jours ci-dessous; par exemple, si l\'arrivée est dans 60 jours, alors le montant du dépôt chargé sera le total, autrement le montant sera basé sur les options de dépôt configurées ci-dessus.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Nombre de jours pendant lesquels le montant total sera chargé comme dépôt.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'Email de confirmation envoyé. Vous pouvez maintenant fermer cette fenêtre.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Agent de contact');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Marquer facture payée');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Facture marquée comme payée');
jr_define('_JOMRES_APIKEY_REMAKE', 'Obtenir nouveau clef API');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Cette installation est pour une seule propriété?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Si cette option est définie comme Oui, la vue <i>front end</i> de Jomres aux utilisateurs non autorisés devient très simplifiée. Les demandes à Jomres par défaut à partir d\'une option de menu, au lieu d\'avoir comme réponse une liste de propriétés, simplement emmène l\'hôte au formulaire de réservation du système. Gérants de propriété ne verront pas aussi le bouton de prévision des détails de propriété ou le bouton d\'ajouter une nouvelle propriété. L\'idéal si vous ne voulez qu\'afficher une propriété et en accepter des réservations.<br/>');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Solde en paiement');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Remarquez, vous allez utiliser le Mode Édition ensemble avec le Mode Global d\'Édition actif. Ce qui est bon si vous savez ce que signifie le Mode Global d\'Édition, mais mauvais si vous n\'êtes pas au courant, ce qui peut occasionner des problèmes. Si vous n\'êtres pas sur d\'utiliser Jomres comme ça, veuillez voir <a href="http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">la page du manuel sur Mode d\'Édition</a> pour renseignements additionnels sur ce sujet.');
jr_define('_JOMRES_SUPPORTKEY', 'Clef de support');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'Le numéro de clef de votre licence de support (ausi connu comme numéro de licence). Vous aurez besoin d\'une licence valable pour pouvoir décharger des mises-à-jour et <i>plugins</i> de Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Rabais personnel');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Limiter l\'enregistrement de propriétés à un seul Pays?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Vous pouvez vous assurer que l\'enregistrement de propriétés soit limité à un seul Pays, en définissant cette option comme Oui et le Pays en question dans l\'option suivante.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Les propriétés sont localisées dans ce Pays: ');
jr_define('_JOMRES_JQUERYTHEME', 'Thème Jquery');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'Choisissez un thème jQuery à utiliser dans les séparateurs de détails de propriété.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'Nous regrettons, mais cette propriété n\'est pas couramment disponible.');
jr_define('_JOMRES_REVIEWS', 'Classification');
jr_define('_JOMRES_REVIEWS_TITLE', 'Revoir titre');
jr_define('_JOMRES_REVIEWS_DATE', 'émis le ');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'Il n\' y a pas de classification encore pour cette propriété.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Aimeriez-vous être le premier à donner une classification?');
jr_define('_JOMRES_REVIEWS_IAGREE', 'Je suis d\'accord avec cette classification');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'Je ne suis pas d\'accord avec cette classification');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Classification moyenne: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Total de votes:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Ajouter une classification.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Vous avez besoin d\'être en login pour donner une classification.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', 'Dites-nous ce que vous pensez de cet établissement: ');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Cet hôte nous a dit: ');
jr_define('_JOMRES_REVIEWS_PROS', 'Faveur: ');
jr_define('_JOMRES_REVIEWS_CONS', 'Contre: ');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Soumis le: ');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'Vous avez déjà classé cet établissement, donc vous ne pouvez pas le faire de nouveau.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Nous regrettons, mais vous n\'êtes pas autorisé à donner classifications sur ce site.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'Cliquez pour montrer classifications');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' hôtes sont d\'accord avec cette classification. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' hôtes ne sont pas d\'accord avec cette classification.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' hôte est d\'accord avec cette classification. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', ' hôte n\'est pas d\'accord avec cette classification.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Merci d\'avoir partagé votre opinion à travers cette classification.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Remerciements, mais vous avez déjà partagé votre opinion sur cette classification.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Rassurez-vous que tous les champs ont été remplis.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Veuillez abréger votre classification introduisant un titre');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Veuillez introduire une classification plus détaillée dans la boîte descriptive suivante');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Introduisez les bons morceaux d\'avoir été un hôte dans cet établissement');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Introduisez aucune pensée négative que vous pourriez avoir eue de votre expérience');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Classez l\'hospitalité que vous avez reçue du personnel');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Classez ce que vous pensez de la localisation de l\'établissement');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Donnez votre opinion sur la netteté de l\'établissement');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Classez l\'hébergement. Était-il confortable ou seulement passable');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Donnez votre opinion s\'il a justifié l\'argent dépense');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Classez les services');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Sommaire de la classification');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Votre expérience plus détaillée');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Merci de nous avoir livré votre classification.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Merci de nous avoir donné votre classification. Elle sera publiée bientôt par un de nos modérateurs en service.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Utiliser code de monnaie global?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Définissez Non pour forcer toutes les propriétés à utiliser le même code de monnaie (par ex., & # 8 3 6 4 ;)');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Utiliser la fonctionnalité de classification Jomres?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Publier automatiquement les classifications?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Si vous définissez comme Non, vous aurez besoin de publier les classifications manuellement');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Définir classifications comme en mode essai?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Normalement les gérants de propriété ne peuvent pas classer les établissements. Si le mode essai est activé, ils peuvent le faire. Naturellement, ceci n\'est pas l\'idéal dans un environnement de travail normal.');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Hôtes par chambre : ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Hôtes par réservation : ');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Numéro de chambres');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Voici une liste de toutes les propriétés. Pour donner suite aux classifications d\'une propriété, cliquez sur cette propriété. À partir de ce point vous pourrez publier ou annuler une classification.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Numéro de classifications pas publiées');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Total de classifications');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Publier/Annuler la classification');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Éliminer classification');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'Déférer la classification');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Revoir déferrements');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Introduisez votre déferrement');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'Voyez-vous dans cette classifications quelque chose objective ou inexacte? Déférez-la et nous nous en occuperons.');
jr_define('_JOMRES_REVIEWS_SUBMIT', 'Soumettre');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Déferrement crée par ');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Déferrements sont émis par des utilisateurs qui peuvent ne pas être d\'accord avec le contenu d\'une classification. La seule façon d\'éliminer un déferrement est éliminer la classification.');
jr_define('_JOMRES_REVIEWS_RATING', 'Points (1 = pauvre 10 = excellent) ');
jr_define('_JOMRES_REVIEWS_RATING_1', 'Hospitalité  ');
jr_define('_JOMRES_REVIEWS_RATING_2', 'Localisation ');
jr_define('_JOMRES_REVIEWS_RATING_3', 'Netteté ');
jr_define('_JOMRES_REVIEWS_RATING_4', 'Ébergement ');
jr_define('_JOMRES_REVIEWS_RATING_5', 'Il vaut la peine ');
jr_define('_JOMRES_REVIEWS_RATING_6', 'Services ');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'Classé par : ');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'Cacher classifications');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Afficher le formulaire de réservation dans la page de détails de l\'établissement?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Définissez Oui pour montrer le formulaire de réservation dans la page de détails de la propriété. Si vous marquez Non, un lien sera visible das cette page menant vers le formulaire.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Les prix comprennent le taux?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Les prix le comprennent? Si vos prix font inclusion du taux, sélectionnez Oui, autrement Non.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Taux sur extras:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'Le champ jour de la semaine vous permet de définir une date pour un jour de semaine précis, quand vous cliquez sur le bouton jour de la semaine tous les jours de la semaine seront associés à ce taux.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Les sélecteurs de date et l\'introduction du taux vous permettent de définir un prix pour une séquence de dates précise. Choisissez une date de début et de fin, introduisez un prix, et appuyez sur le bouton Définir Taux.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Date de début');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Date de fin');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Taux');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Définir taux');
jr_define('_JOMRES_PARTNERS_TITLE', 'Partenaires');
jr_define('_JOMRES_CALENDAR_RTL', 'faux');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Chambre ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'hôte(s). ');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Voici comment nous avons associé vos hôtes aux chambres. Si vous aimeriez changer cette association, vous devrez contacter l&#39;hôtel après avoir complété la réservation. Ceci peut entraîner des frais extra.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Remarquez que votre propriété n\'est pas publiée encore; seulement vous pouvez la voir, pas les visiteurs du site');
// 4.5.5
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Ordre par défaut de résultats de la recherche');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Changez cette option pour modifier l\'ordre après laquelle les résultats de la recherche seront présentés par défaut.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Montrer <i>dropdown</i> d\'ordre de résultats de recherche');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Type de liste des chambres');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'Dans le formulaire de réservation, utilisant le type de liste de chambre \"classique\" vous offrez aux hôtes chambres individuelles. Avec la vue par type de chambre, les hôtes choisissent le numéro de chambres du type X (par éx., 2 x doubles)');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Classique');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Types de chambre');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Quel jour de calendrier pour commencer la semaine, Dimanche ou Lundi');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Seulement les hôtes de la propriété peuvent donner classification?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Définissez Oui si vous voulez limiter classifications seulement aux utilisateurs qui ont été hôtes dans la propriété.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Par chambre');
// v 4.5.7 - adicionado?
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Hôtes par chambre: ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Hôtes par réservation: ');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Nombre de chambres');
jr_define('_JRPORTAL_MONTHS_LONG_0', 'janvier');
jr_define('_JRPORTAL_MONTHS_LONG_1', 'février');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'mars');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'avril');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'mai');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'juin');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'juillet');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'août');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'septembre');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'octobre');
jr_define('_JRPORTAL_MONTHS_LONG_10', 'novembre');
jr_define('_JRPORTAL_MONTHS_LONG_11', 'décembre');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Définissez Oui pour réduire le nombre d\'options disponibles aux gérants de propriété dans la section de Configuration Générale. Ceci est utile si vous ne voulez pas que les gérants de propriété voient trop de définitions, au lieu de ça vous pourrez éditer jomres_config.php pour définir des options de propriété par défaut.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Veuillez sélectionner une option pour votre réservation');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p>If this option is set to Yes, then managers will be able to see the html editor provided with the CMS, and enter HTML into the description. This is a potential security risk as there is a possibility that they can introduce unwanted HTML or Javascript. Additionally, if they enter poorly formatted HTML the page design could become compromised. It's better to leave this option set to No wherever possible.</p><p>If all managers are trusted users (e.g. yourself) then you can leave it set to Yes and you modify the different HTML tags that they are allowed to enter in the Input Filtering tab in Site Configuration.</p><p>If, on the other hand, you're using Jomres as a portal where you invite users to add and administer their own properties then this isn't the ideal configuration. Instead you should leave this option set to No. With it set to No managers will instead see a markdown editor that they can use to enter basic formatting which should be sufficient for the majority of users.</p>");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'Vue de gérance de propriété');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Vue de prévision du site');
jr_define('_JOMRES_PARTNER_DISCOUNT', 'Rabais de partenaire ');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Rechercher utilisateur');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Introduisez quelques lettres pour rechercher un utilisateur.<br/> Quand vous sélectionnez un utilisateur vous l\'ajouterez automatiquement comme Partenaire et vous serez emmené à la page suivante, où vous pourrez lui assigner propriétés et rabais.');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Partenaires courants');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Choisissez un partenaire pour être emmené à la page d\'administration de partenaires.');
jr_define('_JOMRES_PARTNER_SHOW_TITLE', 'Partenaire :');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Rechercher une propriété');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', 'Introduisez quelques lettres du nom de la propriété et sélectionnez une.<br/> Après l\'avoir sélectionnée vous l\'ajouterez au portefeuille du partenaire, mais il n\'aura pas encore aucun rabais, vous devrez le définir vous-même.');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Propriétés courantes');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', 'Cliquez sur une propriété pour éditer les définitions de rabais pour le partenaire concernant cette propriété.');
// 4.6
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'Ce compte a été suspendu, vous ne pouvez plus administrer votre (vos) propriété(s) par ce compte.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Compte de gérant suspendu');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Compte de gérant réactivé');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Veuillez remarquer que votre compte de gérant de propriété a été suspendu. Vous ne pourrez pas accomplir aucune tâche de gérence jusuqu\'à ce que le compte aura été rétabli.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Veuillez remarquer que votre compte de gérant de propriété est maintenant actif. Vous pourrez continuer à accomplir des fonctions de gérence. Veuillez vous logger dans votre compte et vérifier si votre(vos) propriété(s) ont été publiées. Merci.');
jr_define('_JOMCOMP_MYUSER_REMOVE', 'Enlever favoris');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Archive de données de réservations');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'Cet archive est le résultat brut d\'information de réservations capturtée après que le bouton confirmer r´serve a été actionné. Détenez la souris sure une date pour voir les données. Cette information est gardée dans la table XXX__jomres_booking_data_archive.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Éditer compte');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'To add a user as a property manager, first enter the first few characters of their username in the field above. When the correct user has been found click on that name to select it, then choose which property(s) they should be a manager of.');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Gérants existants');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Recherche par nombre d\'hôtes');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Montrer la recherche par <i>dropdown</i> de nombre d\'hôtes');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Recherche par étoiles');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Montrer la recherche par <i>dropdown</i> d\'étoiles');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'Nombre d\'hôtes');
jr_define('_JOMRES_SEARCH_STARS', 'Nombre d\'étoiles');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Nombre de propriétés');
// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY', 'Charger bibliothèque Jomres jQuery?');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'Vous pouvez choisir Non si vous avez un thème qui utilise jquery. Ceci PEUT résoudre quelques problèmes de conflits jquery dans quelques thèmes, mais pas dans tous les cas.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Enabling this option allows you to see the language switcher in the Fullscreen view in the frontend.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Les images de référence sont automatiquement crées pour toutes les images chargées.');
// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Largeur max. d\'image de référence (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Images de référence petittes sont utilisées dans la liste de propriétés, tandis que celles de taille moyenne sont utilisées dans l\'en-tête de chaque propriété.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Hauteur max. d\'images de référence (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Largeur max. d\'images de référence moyennes (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Hauteur max. d\'images de référence moyennes (px).');
jr_define('_JOMRES_TOUCHTEMPLATES', 'Traduction d\'Étiquettes');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'Utiliser la fonctionnalité commissions?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Choisissez Oui pour montrer au gérant les factures de commissions émises.');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Réservations de gérant originent des factures de commission?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Si un gérant fait une réservation, ceci origine un article de ligne sur une facture de commissions?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Auto-suspendre gérants qui ont des factures marquées comme pendantes?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Limite d\'auto-suspension');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'Ce limite est le numéro de jours qu\'un gérant a pour paier une facture avant qu\'il soit suspendu et ses propriétés cessent d\'être publiées.');
//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', 'Contexte langue');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Utilisez cette option pour modifier le contexte de langage du site. Ceci permet à Jomres d\'utiliser étiquettes plus convenables pour votre encadrement courant, donc si cet enquadrement est location de yachts, changer le contexte permet à Jomres de montrer des étiquettes d\'un ficihier de langue différent. Par éxemple, si vous choisissez définir le contexte comme "Yacht brokerage", Jomres cherche premièrement la langue courante, après recherche le directoire /'.JOMRES_ROOT_DIRECTORY.'/language par un directoire appelé "yachtbrokerage". Si ce fichier existe pour la langue en cours, ce fichier sera utilisé. Sinon, Jomres cherche le fichier de langue anglaise sur ce directoire. S\'il ne peut pas être trouvé, Jomrs utilisera le fichier de langue pour la langue choisie dans le directoire /'.JOMRES_ROOT_DIRECTORY.'/languages.');
// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Configuration avancée du site');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Choisissez Oui si vous voulez utiliser les options avancées de configuration. Si vous venez de commencer Jomres, vous êtes conseillé(e) à laisser l\'option Non, car l\'installation par défaut est suffisante pour vous permettre de commencer, donc il suffirait d\'ajouter Jomres au menu principal et vous logger comme "admin", en commencant à configurer votre (vos) propriété(s). Veuillez remarquer que plusieurs options de la configuration avancée sonmt applicables seulement à l\'installation Jomres Silver, et les utilisateurs Jomres Lite ne pourront prendre complètement avantage d\'une quantité de charactéristiques que l\'option permet.');
jr_define('_JOMRES_CONFIG_JQUERY_UI', 'Charger bibliothèque Jomres jQuery UI?');
jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'Prix (le plus haut d\'abbord)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'Prix (le plus bas d\'abbord)');
// 4.7.6
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Le sommaire des prix et estimations doivent être évalués par nuit/par semaine/par mois?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Par nuit');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Par semaine');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Par mois');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'Par personne');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'semaine(s) à ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'mois à ');
// 4.7.7
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'Commewnt doit fonctionner l\'option de recherche par numéro d\'hôtes?');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Affecte tous les modules de recherche. En utilisant la charactéristique de recherche par nombre, doit cette charactéristique chercher propriétés dont le tarif supporte nombres d\'hôtes jusqu\'à et égal au nombre choisi, égal ao nombre choisi, ou égal et plus grand que ce nombre? ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Attendez svp, votre réservation est en train d\'être processée et vous serez renvoyé(e) vers le site Paypal.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Si vous n\'êtes pas redirectionné(e) vers Paypal dans 5 secondes...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Cliquez ici');
// 4.7.8
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Réservation valable du');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Réservation valable jusqu\'au');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', 'Nom de l\'hôte');
jr_define('_JRPORTAL_COUPONS_DESC_478', 'Des codes d\'escompte peuvent être produits et passés aux hôtes comme un encouragement pour réserver.<br/>
Les dates de \'valable dès le et jusuqu\'au\' se réfèrent aux dates entre lesqueles un réservation peut être faite, tandis que des dates de validité de réservation dès le/jusqu\'au se réfèrent à la période pendant laquelle la réservation doit être faite pour que le coupon soit valable. Si une réservation tombe hors de cette période les taxes normales sont applicables pour les jours hors de la période définie.<br/>
Si vous voulez que la réservation soit disponible pour un hôte spécifique, choisissez son nom dans la liste <i>dropdown</i> pour limiter ce coupon a cet hôte en particulier.');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'Avec votre coupon, cette réservation a été réduite de ');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', ' pour ');
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Marquez Non pour déactiver le chargement de Jquery UI javascript aussi bien que des fichiers CSS.');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Charger la bilbiothèque Jomres jQuery UI CSS?');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Marquez Non pour déactiver seulement le fichier jquery UI CSS.');
//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Total inc. taxe');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Propriété pas en ligne');
// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', 'Utilise les fonctions de conversion');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', 'Utilisez la fonctionnalité de conversion en ligne Jomres. Cela offrira une liste déroulante de conversion aux utilisateurs frontend; où ils seront en mesure de choisir la monnaie qu\'ils souhaitent afficher. Le prix afficher sera le prix dans la monnais choisie, suivi par, entre parenthèses, le prix  « indigène » .');
jr_define('_JOMRES_CONVERSION_DISCLAIMER', 'Nous avons utilisé nos meilleurs efforts pour obtenir les taux de change plus précises et à jour que nous pouvons. Notre fonctionnalité de conversion de devises en ligne est un service fourni à titre informatif seulement et ne vise pas à fournir des chiffres exacts. En conséquence, nous ne garantissons pas l\'exactitude des taux de change. En utilisant cette fonctionnalité, vous reconnaissez que toute utilisation de la fonctionnalité de conversion de taux sera entièrement à vos propres risques.');
// 5.2.1
// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'Codes de devises/conversion de devise courantes');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP détection API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'Pour définir automatiquement le code de la monnaie pour le menu déroulant de choix de monnaie; Jomres est en mesure d\'utiliser un service gratuit appelé IPinfoDB pour détecter les pays des visiteurs, mais vous devez vous inscrire et obtenir une clé API à <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> en premier.');
jr_define('_JOMRES_DEBUGGING_TAB', 'Débogage');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Location sans taxe');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Location TTC');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Taxe chambre:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Ouvrir le formulaire de réservation');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Retour aux détails de la propriété');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Automatiquement sélectionné ?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Balance (après le paiement du dépôt)');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filtrer les ressources selon leurs options.');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Dernière réservation');
jr_define('_JOMRES_DATEPERIOD_SECOND', 'seconde');
jr_define('_JOMRES_DATEPERIOD_MINUTE', 'minute');
jr_define('_JOMRES_DATEPERIOD_HOUR', 'heure');
jr_define('_JOMRES_DATEPERIOD_DAY', 'jour');
jr_define('_JOMRES_DATEPERIOD_WEEK', 'semaine');
jr_define('_JOMRES_DATEPERIOD_MONTH', 'mois');
jr_define('_JOMRES_DATEPERIOD_YEAR', 'année');
jr_define('_JOMRES_DATEPERIOD_DECADE', 'Décennie');
jr_define('_JOMRES_DATEPERIOD_S', 's');
jr_define('_JOMRES_DATEPERIOD_AGO', 'Il y a');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'à partir de maintenant');
jr_define('_JOMRES_WHOLEDAY_TITLE', 'Les réservations sont des jours entiers ?');
jr_define('_JOMRES_WHOLEDAY_DESC', 'Par défaut le système de réservations est hors service la nuit, réservation possible à partir du 1er janvier '.date('Y', strtotime('next year')).' au 2 janvier '.date('Y', strtotime('next year')).' pour une seule nuit. Si vous définissez cette option sur Oui, noter que la réservation couvrira la journée entière. Si vous choisissez NON, une réservation ces jours-là couvrira les deux jours et le client serait facturé pour deux jours.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Par jour');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Par personne et par jour');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Début de location');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Retour');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'nuit (s) à');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Date de retour incorrect');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'La réservation est trop courte. Il faut faire au moins un jour entre les dates de début de location et de retour :');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Intervalle minimal pour le début de location/retour');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'L\'intervalle minimum dans le formulaire de réservation entre le début de location et la fin. Un intervalle de 1 signifie que les dates de début et de fin peuvent être réglés sur le même jour, mais ce n\'est pas tributaire de l\'intervalle minimum calculé automatiquement par le moteur de réservation, car il vérifie les tarifs qui sont valides pour la période de réservation.');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'L\'estimations et le résumé des prix devraient être tarifées selon les jours / semaines / mois ?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Par jour');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Jours avant la date de retour ');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'Le nombre minimal de jours qui doit s\'écouler, àpartir d\' « aujourd\'hui », avant la date de retour.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Mettre sur OUI si vous souhaitez limiter les Réservations anticipées (utiliser le champ suivant pour définir la limite en termes de jours). Si vous ne définissez pas sur OUI et que l\'utilisateur essaie de réserver plus de X jours à l\'avance, la date de début ou de fin sera ramenée à cette date ');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Voir la date de retour de l\'entrée ?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', 'Mettre sur NON si vous ne voulez pas afficher la boîte de saisie de date de retour. Utilisez uniquement que ce si vous savez ce que vous faites, comme la date de retour dans la réservation sera toujours réglé jusqu\'au lendemain de la date de retour.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'Si vous choisissez Oui, alors les réservations seront prises pour une période déterminée. Si celui-ci est défini sur non, assurez vous que « définir le jour de retour » est défini sur NON (sauf si vous voulez spécifiquement forcer les gens au retour à un certain jour de la semaine) sinon vous n\'obtiendrez beaucoup de liens dans le calendrier des disponibilités.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Jour de retour prédéfini');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Uniquement pour les sites offrants une période fixe réservations. Choisir le jour de la semaine où le retour doit être effectué.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Jour de retour fixe');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Dates fixes récurrantes de retour: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'Lorsque les dates fixes de collecte sont sélectionnées, le nombre de dates qui peut être affiché dans la liste déroulante de dates changent. Car la liste des dates n\'inclura pas les dates de réservation possible en raison des réservations préalables, et que la liste sera effectivement plus longue du moment que votre sélection inclura un nombre de dates anciennes (si existante).');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Par personne et par jour');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Sélectionnez Oui si vous voulez facturer par PERSONNE par jour. Si Non, alors les coûts seront calculées sur une base de:  Par OPTIONS par jour');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Dépôts variables permet de définir si vous souhaitez facturer le montant total si la date de retour de la réservation est dans N jours dès « aujourd\'hui ». Définissez cette option sur Oui pour activer cette fonctionnalité et entrez le nombre de jours ci-dessous, ainsi, par exemple, si le jour de ramassage est dans 60 jours, alors le montant du dépôt facturé sera le montant total, sinon le montant se basera sur les options de dépôt configurées plus haut.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'La plupart des entreprises recalcule le prix des ressources/options/objets en se basant sur le nombre de ressources/options/objets d\'un type requis; qui sont disponibles à une date donnée. <br/> Cela leur permet d\'offrir des rabais sur un type de ressources/options/objets qui n\'est pas occupé/utilisé pendant une période donnée; dans le but d\'attirer des clients suplémentaires.<br/> L\'activation et la configuration de ce plugin vous permet d\'offrir une tarification réglable, basée sur le nombre de ressources/options/objets d\'un type sélectionné disponiblent dans l\'entreprise à un jour donné.<br/>Le seuil de jours, définit le nombre de jours pendant lesquels la date de retour doit être inclue avant le prix des ressources/options/objets et sont ajustées par cette fonctionnalité,<br/> puis les pourcentages dans les ressources/options/objets vous permettent de configurer le pourcentage des ressources/options/objetss qui peuvent être disponibles avant d\'applique une réduction donnée. Notez cependant, que si plusieurs ressources/options/objets ont un rabais actif; le rabais actuel s\'appliquera mais ne se s\'ajoutera pas au rabais déjà actif des ressources/options/objets choisis.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Seuil (nombre de jours entre la date de retour et aujourd\'hui)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Retour en attente');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Retour aujourd\'hui');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Retour de location(s)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Retours aujourd\'hui');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Retour en retard');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'N\'a pas été rendu/ramené');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Jours');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', ' Marquer une réservation de retour.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Marquer une réservation retournée.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Marquer une réservation rendue');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Marquer une réservation retournée');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Coût par jour: ');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Nombre de jours: ');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Modfifier le total de l\'hébregements');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Enregistrer la modification');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Envoyer par courriel au nouvel utilisateur les informations de connexion (login/mot de passe) ?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'Si l\'option de créer un nouvel utilisateur est définie sur Oui lors de réservations/locations celui-ci recevra ses infoermations de connextion automatiquement à l\'adresse mail inscrite dans son compte. Vous pouvez définir cette option sur NON pour que ces informations ne soient pas envoyées lorsque l\'utilisateur est créé. Cela peut être utile si vous ajoutez automatiquement de nouveaux utilisateurs à une liste de diffusion, par exemple; et que vous ne voulez pas que les utilisateurs puissent se connecter.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Voir la/les taxe dans les totaux du formulaire de réservation ?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Mettre cette option sur NON si vous ne souhaitez pas afficher la/les taxe dans les totaux de la réservation/location');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Annulation de la limite');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Connecté, les clients enregistrés peuvent annuler leurs réservations. Ici, vous pouvez définir la limite, en jours, où la réservation ne peut être annulée avant la date d\'arrivée.');
jr_define('_JOMRES_EDIT_PROFILE', 'Modifier le profil');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Type de liens de la propriété');
jr_define('_JOMRES_IMAGE', 'Image');
jr_define('_JOMRES_CRATES_CLICKINITIAL', 'Cliquez sur la lettre pour afficher toutes les entreprises commencant par cette lettre. Une fois que vous avez une liste de propriétés, vous pouvez affecter des taux de commission à ces propriétés, ou cliquez sur leur icône « modifier » pour afficher les statistiques de l\'entreprise.');
jr_define('_JRPORTAL_TAX_RATE_EDIT', 'Modifier le taux d\'imposition');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Modifier le champ personnalisé');
jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'Mot de passe  du serveur de licence');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'Nom d\'utilisateur du serveur de license');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', 'Si vous avez un nom d\'utilisateur et un mot de passe pour le serveur de licences, veuillez les entrer ici. Cela vous aidera pour installer les plugins . Si vous avez entré une clé de Support valide dans le champ ci-dessus, il n\'est pas nécessaire de fournir le nom d\'utilisateur/mot de passe ici.');
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'Version de Jomres: ');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Dernière version de Jomres: ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'ATTENTION ! : Il existe une nouvelle version de Jomres, nous vous conseillons de mettre à niveau votre version le plus rapidement !');
jr_define('_JOMRES_PRODUCT_INFORMATION', 'Bienvenue sur Jomres, nous espérons que vous apprécierez d\'utiliser le système de réservation préféré sur le CMS Joomla. Si vous souhaitez acheter une licence Jomres Silver ou Jomres Gold, <a href="http://www.jomres.net/prices" target="_blank"> visiter notre site</a> pour plus d\'informations sur comment vous pouvez mettre à jour votre license.');
jr_define('_JOMRES_PRODUCT_INFORMATION2', 'Ce système est idéal pour n\'importe quel scénario, c\'est un systeme de réservation/location simple pour une seule propriété, jusqu\'à un site disposant de plusieurs utilisateurs, en plusieurs langues, avec plusieurs propriétés. Veuillez consulter la section « Aide » à gauche, et la page « Bien commencer » qui vous guidera dans vos premiers pas.');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Propriété Active');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'Paramètres SMTP alternatifs');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Définissez cette option sur OUI pour utiliser ces paramètres SMTP alternatif. Un nombre croissant d\'hébergeurs semble bloquer la fonctionnalité PHP mail, ainsi vous pouvez choisir de contourner les paramètres de courrier de base pour Jomres de votre hébergeur et d\'utiliser les paramètres de votre choix  definis ici.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Hôte alternatif');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Changer votre serveur de messagerie smtp ici');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Port alternatif');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Changer votre port smtp ici');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Protocol alterbatif');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', 'Selon vos paramètres de serveur smtp, vous devez laissez ce champ vide ou entrez "ssl" ou "tls". Demandez à votre fournisseur de SMTP si vous ne connaissez pas.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Utiliser l\'authentification');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'Si votre serveur SMTP exige une authentification pour vous connecter, indiquez ce Oui. Le nom d\'utilisateur et le mot de passe seront ensuite utilisé.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Nom d\'utilisateur alternatif');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Mot de passe alternatif');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define('_JOMRES_QUICK_INFO', 'Info Express');
jr_define('_JOMRES_MENU_SHOW', 'Voir');
jr_define('_JOMRES_MENU_HIDE', 'Cacher');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'Par défaut');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Tout le monde');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Enregistré');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'Manager');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Super Manager');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Personne');
jr_define('_JOMRES_ACCESS_CONTROL_TITLE', 'Contrôle d\'accès menu');
jr_define('_JOMRES_ACCESS_CONTROL_DESC', 'Cette fonction vous permet de contrôler qui sera en mesure de voir un plugin dans le menu principal. Généralement les options d\'utilisateur 00009 sont visibles soit par les visiteurs du site non enregistrés. <br/> 00010 sert généralement aux réceptionistes qui ont une utilisation quotidienne, tandis que 00011 est utilisé pour installer et configurer une/des propriétés, mais est utilisé en moins souvent.');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Réceptionniste');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'Contrôle d\'accès complet');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Définissez cette option sur Oui pour activer la fonctionnalité de contrôle d\'accès complet, Contrôler ensuite l\'option de contrôle d\'accès de la Maintenance du système pour configurer des contrôles d\'accès.');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', 'Remarque, cependant, ces paramètres ne contrôlent pas les scripts sous-jacents ainsi, par exemple, si vous définissez <i>00009user_option_03_search</i> à "Manager", un utilisateur qui connait Jomres peut toujours appeler j06000search.class.php en entrant http://www.domain.com/index.php?option=com_jomres&task=search dans la barre d\'adresse de leur navigateur. C\'est voulu, comme cet accès Menu contrôle simplement ce qui peut être vu dans le Menu principal de Jomres. Si vous avez besoin de contrôle plus strict,régler la Config Site-> Full Access Control option Oui et contrôler l\'option de Menu contrôle d\'accès.');
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Contrôle d\'accès total');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong>Cette fonctionnalité est pour les utilisateurs avancés seulement. Si vous ne savez pas à quoi ça sert iln'y a aucune raison spécifique pour l\'utiliser, s\'il vous plaît revener à la Configuration du Site et définisser l\'option de contrôle d\'accès total sur NON<br>
	Cette fonction vous permet de contrôler qui peut accéder à quelles minicomponents (avec quelques exceptions qui sont codées en dures dans le système).
		<br/>
		Le niveau d'accès à côté du nom d'un script est la valeur par défaut, Avec le plein contrôle de l'accès sur OUI <strong>tout le monde</strong> accède aux scripts auquels ils ne devraient pas pouvoir accéder donc si vous avez l'intention d'utiliser cette fonctionnalité, vous devez définir le niveau de contrôle d'accès pour <strong>chaque</strong> minicomponent Jomres énuméré ici.
		<br/>
		Si vous ne savez pas ce que font ces minicomponents, alors nous vous conseillons vivement de ne pas utiliser cette fonctionnalité
		<br>
		Jomres a un system d'accès niveaux comme une pyramide, donc les Super administrateurs de biens, sont plus importants que les gestionnaires.
		<br/>
		En bref Super Manager > Manager > réceptionniste > Registered > non enregistré. Si un utilisateur enregistré a accès à un minicomponent, le faire réceptionnistes et les gestionnaires et les cadres, Manger.
		<br>
		Notez que vous ne pouvez pas contrôler la zone minicomponents administrateur sans être super manager. Tout le monde dans le domaine de l'administrateur est considéré comme un utilisateur de confiance en ce qu'ils ne devraient pas être bloqués d'accéder à n'importe quel script (surtout celui-ci).");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Mise en garde ! Vous avez le contrôle de l\'accès complet activé, cependant, nous avons compté l\'accès contrôlent les paramètres et les a comparés au nombre de minicomponents qui doit être contrôlé, et les deux ne correspondent pas, donc vous pouvez avoir des scripts qui ne sont pas contrôlés. Cela pourrait être un problème de sécurité et nous vous demandons de le régler à la fois en visitant la fonctionnalité de contrôle d\'accès et en vérifiant que les niveaux appropriés ont été appliqués.');
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Utilisateurs avec les droits admin pour cette propriété');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'Votre adresse email');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Modèle');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Paramètres');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Force');
jr_define('_JOMRES_METATITLE', 'Meta title');
jr_define('_JOMRES_METADESCRIPTION', 'Meta description');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Ajoutez votre propriété : étape 2 sur 2');
jr_define('_JOMRES_CART_TITLE', 'Mes réservations proposées');
jr_define('_JOMRES_CART_INFO', 'Noter que ces réservations n\'ont pas encore été enregistrées. Si vous vous déconnectez ou votre session expire, elles seront perdues. N\'oubliez pas de confirmer vos réservations !');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'Confirmer la/les réservation(s)');
jr_define('_JOMRES_CART_OR', ' ou ');
jr_define('_JOMRES_CART_SAVEFORLATER', 'Enregistrer pour plus tard');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'Vous n\'avez pas encore enregistré les réservations.');
jr_define('_JOMRES_CART_VIEWCART', 'Afficher le panier');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Sous-répertoire de fichiers de langue');
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Latitude de départ par défaut ');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Longitude de départ par défaut');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'Dans Google map sur la page d\'édition de propriété, avant que le marqueur a été déplacé, vous avez les points de départ de latitude/longitude par défaut ');
jr_define('_JOMRES_SYSTEM_EMAILS', 'Email envoyés à partir de quelle adresse ?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', "Laissez cette option vide pour la désactiver. Jomres utilisera l'adresses e-mail de l'établissement lors de l'envoi d'emails aux clients, mais votre service de messagerie peut ne pas autoriser les e-mails provenant d'adresses arbitraires (c'est-à-dire, seulement que des mails d'une adresse autorisée). Si c'est le cas, vous pouvez utiliser cette entrée pour entrer une adresse qui sera considérée comme l'adresse de l'expéditeur pour tous les emails de système.");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Affichage de la liste');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Photo vue');
jr_define('_JOMRES_COMPARE', 'Comparer');
jr_define('_JOMRES_REMOVE', 'Supprimer');
jr_define('_JOMRES_RETURN_TO_RESULTS', 'Retour aux résultats de la recherche');
jr_define('_JOMRES_ADDTOSHORTLIST', 'Ajouter à la liste restreinte');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Retirer de la liste restreinte');
jr_define('_JOMRES_VIEWSHORTLIST', 'Voir la liste restreinte');
jr_define('_JOMRES_COOKIEPOLICY_1', 'Important : Politique de Cookie');
jr_define('_JOMRES_COOKIEPOLICY_2', 'Nous utilisons des cookies pour aider à garder notre site pertinente et facile à utiliser.');
jr_define('_JOMRES_COOKIEPOLICY_3', 'Lire la suite...');
jr_define('_JOMRES_COOKIEPOLICY_4', 'La législation européenne exige que tous les sites Web mentionnent clairement si les cookies sont utilisés et leur but.');
jr_define('_JOMRES_COOKIEPOLICY_5', "Le moteur de recherche et de réservation de ce site doit pouvoir se souvenir des options que vous avez choisi. Pour cela il a besoin de stocker des informations qui sont misent dans un  petit fichier appelé un \"cookie\" qui identifie de manière unique votre navigateur.Vous devez accepter l'enregistrement de ces dobnnées afin de pouvoir utiliser toutes les fonctions de ce site. Si vous n'acceptez pas cette politique de cookie, puis vous serez beaucoup limité dans ce que vous pouvez faire sur ce site.");
jr_define('_JOMRES_COOKIEPOLICY_6', 'Oui, j\'accepte l\'utilisation de cookies de cette manière.');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'L\'avance/dépôt requis est-il le prix de la première nuit ?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Les prix sont calculés sur une base par nuit. Voulez-vous que l\'avance/dépôt soit calculer sur une nuit ? Dans l\'affirmative, vous pouvez ignorer les options suivantes.');
jr_define('_JOMRES_NOTHINGINSHORTLIST', "Vous n'avez pas ajouté des articles à votre liste.");
jr_define('_JOMRES_SAFEMODE', 'Activer le mode sans échec ?');
jr_define('_JOMRES_SAFEMODE_DESC', "Mettre cette valeur sur Oui pour déclencher le mode sans échec. Cela va désactiver tous les plugins pour que Jomres n'utilise que ses fonctionnalités de base.");
jr_define('_JOMRES_PRICE_ON_APPLICATION', 'POA');
jr_define('COMMON_NEXT', 'Suivant(e)');
jr_define('COMMON_CANCEL', 'Annuler');
jr_define('COMMON_SUBMIT', 'Envoyer');
jr_define('COMMON_SAVE', 'Enregistrer');
jr_define('COMMON_DELETE', 'Effacer');
jr_define('COMMON_RETURN', 'Retourner');
jr_define('COMMON_CLOSE', 'Fermer');
jr_define('COMMON_BACK', 'Retour');
jr_define('COMMON_HOME', 'Accueil');
jr_define('COMMON_NEW', 'Nouveau');
jr_define('COMMON_SEND', 'Envoyer');
jr_define('RECAPTCHA_TITLE', 'reCaptcha');
jr_define('RECAPTCHA_INFO', 'Captcha sert à s\'assurer que le client, à l\'aide de formulaires web est un être humain et est utilisé pour empêcher les administrateurs de biens d\'être \"spammer\"par des robots sur internet. Pour utiliser le formulaire, vous devrez vous inscrire à la page d\'accueil <a href="\"http://www.google.com/recaptcha\"" target="\"_blank\"">le reCaptcha Google</a> et définir votre domaine de recevoir vos clés publique et privée. Lorsque vous avez reçu ces clés, veuillez les entrer ci-dessous. Le service reCapcha est un service gratuit fourni par Google.');
jr_define('RECAPTCHA_PUBLIC_KEY', 'Public key');
jr_define('RECAPTCHA_PRIVATE_KEY', 'Private key');
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Lockfile timeout');
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', 'Pour éviter le danger de la reservation des chambres en double jomres utilise un fichier de verrouillage pour empêcher qu\'une chambre ajoutée à la liste de chambres disponibles dans le formulaire de réservation soit aujouter dans un autre formulaire à la même date. Par défaut cette sécurité expire au bout de 3600 secondes, ou une heure. Vous pouvez modifier le temps d\'expiration de ce verrou en changeant ce chiffre.');
jr_define('_JOMRES_BOOTSTRAPSWITCH', 'Activez le modèles Bootstrap Jomres et ses fonctionnalitées ?');
jr_define('COMMON_ACTION', 'Action');
jr_define('COMMON_VIEW', 'Voir');
jr_define('BACKTOTOP', 'Haut de page');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Faible');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Forts');
jr_define('_JOMRES_INPUTFILTERING', 'Filtre d\'entrée');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Entrée niveau de filtrage');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "La plupart des données entrées dans le système sont nettoyées en premier lieu des balises html, puis à l\'aide de la fonctionnalité de filtrage de variable PHP pour sécuriser les données avant qu\'elles entrent dans la base de données. Vous pouvez autoriser certaines instances (par exemple, les entrées de texte dans la page de détails de propriété) d\'inclure HTML. Il existe deux niveaux de filtrage, vous peuvent utiliser pour filtrer cette entrée, faibles ou forts.  Vous ne devez utiliser le paramètre faible, seulment si les utilisateurs de la saisie des données sont approuvés par vous-même, par ex. collègues administrateurs système sinon vous devriez laisser sur Strong. Lorsque la valeur forte (recommandé), vous pouvez spécifier les balises pour permettre en modifiant le réglage suivant « nettoyage HTML balises autorisées ». ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Balises d\'entrée autorisées');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "Vous pouvez éditer les tags du système de filtrage des tag HTML. La valeur par défaut est ' p, b, strong, a [href], BOLD , Strong, links et italique). Pour plus d'informations sur les balises autorisées, s'il vous plaît lire documention <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Il est conseillé de laisser la valeur par défaut.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Entrées autorisées');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "Vous pouvez définir quels tag de formulaire sont autorisés, toute entrée ajoutée à cette liste sera analysée par le biais de HTML Purifier au lieu d'avoir tout le html dépouillé. Valeur par défaut est: « property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers ». Ajouter plus d'entrées en ajoutant leurs noms, séparés par un espace.");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Détails de propriété dans les onglets ?');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Définissez cette option pour afficher les détails de la propriété dans les onglets. Réglez-le sur non pour leur montrer sans onglets.');
jr_define('COMMON_PRINT', 'Imprimer');
jr_define('COMMON_EDIT', 'Editer');
jr_define('COMMON_COPY', 'Copier');
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', "Joomla 3 comprend un cadre « bootstrap » de Twitter par défaut, et Jomres a modèles et fonctionnalités qui utiliseront ces modèles. Par défaut, si vous n'avez pas Jomres ces commutateurs sont réglés sur Joomla 3 Oui, mais vous pouvez les définir sur non si vous le souhaitez (non recommandé). Si vous exécutez une version de Joomla inférieur à 3 Joomla, vous pouvez toujours opter pour utiliser les modèles de Jomres Bootstrap et fonctionnalité, mais par défaut, que ces options sont la valeur NON");
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Utilisez des modèles de Jomres Bootstrap dans le frontend ?');
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Voici quelques alternatives, que vous voudrez peut-être envisager.');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', 'Auto-détection du pays ?');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "Le système essaie de détecter automatiquement les pays de l'invité. Vous pouvez définir cette option sur non et définir le pays que vous préférez pour apparaître dans le formulaire de réservation, dans l'option suivante.");
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'Sur Jomres');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'Aide');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Mise en route');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', "Contrôle d'accès");
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'Outils de développement');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'Traduction');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'Génération de revenus');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'Structure du site');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'Manual (online)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'My Account (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'Fonctionnalités du portail');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Gestionnaire de plugin');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'Intégration');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'Rapports et statistiques');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'Aide');
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', 'Mises à niveau');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'Modes de paiement');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Tarif par défaut');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', "Cela s'applique uniquement aux nouveaux tarifs");
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Années à voir');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', "Définit le nombre d'années à afficher lorsque vous modifiez un type de tarif");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'Factures');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'Détails de compte');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Connexion');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Déconnexion');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'Rechercher');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'Tableau de bord');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'Réservation/Indisponibilité');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'Factures');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'Paramètres');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'Divers');
jr_define('_JOMRES_EDIT_COUNTRY_TITLE', 'Modifier le pays');
jr_define('_JOMRES_EDIT_COUNTRY_ID', 'Id de pays');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Code de pays');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Nom de pays');
jr_define('_JOMRES_EDIT_REGION_TITLE', 'Modifier les régions');
jr_define('_JOMRES_EDIT_REGION_ID', 'Id de régions');
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Code des pays');
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', 'Nom de régions');
jr_define('_JOMRES_COM_LISTCOUNTRIES', 'Liste des pays');
jr_define('_JOMRES_COM_LISTREGIONS', 'Liste des régions');
jr_define('_JOMRES_EXPORT_DEFINITIONS', 'Exporter les définitions');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', "Cette fonctionnalité vous permet d'exporter les traductions qui ont été construites à l'aide de la fonctionnalité de traduction de langue. Il s'accumule dans un champ de texte avec toutes les données nécessaires à la construction d'un nouveau fichier de langue, de tout ce que vous devez faire est de copier et coller cette sortie dans un nouveau fichier de langue que vous pouvez mettre sur un nouveau serveur de base de Jomres, en arrière ou si vous voulez contribuer à la communauté de Jomres.");
jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Définition de paramètres régionaux');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Traduire les chaînes du fichier lang');
jr_define('_JOMRES_COM_NOTAMANAGER', "Erreur, l'utilisateur n'est pas un super manager au sein de Jomres, vous n\'êtes pas en mesure d'utiliser cette fonction jusqu'à ce que vous ayez modifier le/les profils pour être aussi bien un gestionnaire et/ou un Super gestionnaire. Il s'agit d'une fonctionnalité de sécurité.");
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'Présentation de propriété: layout par par défaut');
jr_define('_JOMRES_STAYFORAMINIMUMOF', 'Séjour pour un minimum de');
jr_define('_JOMRES_NIGHTSFOR', ' nuits pour ');
jr_define('_JOMRES_AGENT', 'Agent');
jr_define('_JOMRES_AGENT_DETAILS', "Détails de l'agent");
jr_define('_JOMRES_AGENT_LISTINGS', "Listes d'agents");
jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', 'Approuver automatiquement les nouvelles propriétés ?');
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', "Si vous définissez cette option sur non, vous devrez approuver manuellement les nouvelles propriétés. Jusqu'à ce qu'une propriété a été approuvée; elle ne peut être publiée par un administrateur de biens seulement par un SuperAdmin.");
jr_define('_JOMRES_APPROVALS_MENU_NAME', 'Approbations');
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', "Cette propriété n'a pas encore été approuvée. Dès qu'elle sera approuvée, vous serez en mesure de la publier.");
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', "Désolé, vous ne pouvez pas publier cette propriété car elle n'a pas encore été approuvée.");
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'Une nouvelle propriété requiert une approbation');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', "Une propriété a été ajoutée au système et requiert votre approbation. Cliquez sur le lien pour afficher les propriétés en attente dans la liste d'approbation : ");
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'Votre propriété a été approuvée');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', 'Félicitations, votre propriété a été approuvée, veuillez cliquer sur le lien suivant pour afficher le panneau de configuration de la propriété : ');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Les noms de région sont traduisibles');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', "Sauf si vous utilisez un serveur très rapide, qu'il est conseillé de laisser cet option sur NON. En raison du grand nombre de noms de région, la traduction de noms de région utilise beaucoup de mémoire; ce qui peut ralentir le résultat de votre recherche.");
jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', "Livre d'&eacute;or.");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Désolé, cette adresse e-mail est déjà utilisée. Si il s\'agit de votre adresse de courriel, veuillez vous assurer que vous avez connecté avant d\'essayer de réserver.');
jr_define('JOMRES_TAPTOCALL', 'Tap to call');
jr_define('JOMRES_NEWREVIEW_SUBJECT', 'New review for ');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'A new review has been left for ');
jr_define('JOMRES_NEWREPORT_SUBJECT', 'New Report');
jr_define('JOMRES_NEWREPORT_MESSAGE', 'A review has been reported for ');
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
jr_define('DATATABLES_SEMPTYTABLE', 'Aucune donnée disponible dans le tableau');
jr_define('DATATABLES_SINFO', "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments");
jr_define('DATATABLES_SINFOEMPTY', "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments");
jr_define('DATATABLES_SINFOFILTERED', '(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', '');
jr_define('DATATABLES_SLENGTHMENU', 'Afficher _MENU_ &eacute;l&eacute;ments');
jr_define('DATATABLES_SLOADINGRECORDS', 'Chargement en cours...');
jr_define('DATATABLES_SPROCESSING', 'Traitement en cours...');
jr_define('DATATABLES_SSEARCH', 'Rechercher&nbsp;:');
jr_define('DATATABLES_SZERORECORDS', 'Aucun &eacute;l&eacute;ment &agrave; afficher');
jr_define('DATATABLES_SFIRST', 'Premier');
jr_define('DATATABLES_SLAST', 'Dernier');
jr_define('DATATABLES_SNEXT', 'Suivant');
jr_define('DATATABLES_SPREVIOUS', 'Pr&eacute;c&eacute;dent');
jr_define('DATATABLES_SSORTASCENDING', ': activer pour trier la colonne par ordre croissant');
jr_define('DATATABLES_SSORTDESCENDING', ': activer pour trier la colonne par ordre décroissant');
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
