<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('eu', array (
  'validators' => 
  array (
    'This value should be false.' => 'Balio hau faltsua izan beharko litzateke.',
    'This value should be true.' => 'Balio hau egia izan beharko litzateke.',
    'This value should be of type {{ type }}.' => 'Balio hau {{ type }} motakoa izan beharko litzateke.',
    'This value should be blank.' => 'Balio hau hutsik egon beharko litzateke.',
    'The value you selected is not a valid choice.' => 'Hautatu duzun balioa ez da aukera egoki bat.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Gutxienez aukera {{ limit }} hautatu behar duzu.|Gutxienez {{ limit }} aukera hautatu behar dituzu.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Gehienez aukera {{ limit }} hautatu behar duzu.|Gehienez {{ limit }} aukera hautatu behar dituzu.',
    'One or more of the given values is invalid.' => 'Emandako balioetatik gutxienez bat ez da egokia.',
    'This field was not expected.' => 'Eremu hau ez zen espero.',
    'This field is missing.' => 'Eremu hau falta da.',
    'This value is not a valid date.' => 'Balio hau ez da data egoki bat.',
    'This value is not a valid datetime.' => 'Balio hau ez da data-ordu egoki bat.',
    'This value is not a valid email address.' => 'Balio hau ez da posta elektroniko egoki bat.',
    'The file could not be found.' => 'Ezin izan da fitxategia aurkitu.',
    'The file is not readable.' => 'Fitxategia ez da irakurgarria.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fitxategia handiegia da ({{ size }} {{ suffix }}). Baimendutako tamaina handiena {{ limit }} {{ suffix }} da.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Fitxategiaren mime mota ez da egokia ({{ type }}). Hauek dira baimendutako mime motak: {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Balio hau gehienez {{ limit }} izan beharko litzateke.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Balio hau luzeegia da. Gehienez karaktere {{ limit }} eduki beharko luke.|Balio hau luzeegia da. Gehienez {{ limit }} karaktere eduki beharko lituzke.',
    'This value should be {{ limit }} or more.' => 'Balio hau gutxienez {{ limit }} izan beharko litzateke.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Balio hau motzegia da. Karaktere {{ limit }} gutxienez eduki beharko luke.|Balio hau motzegia da. Gutxienez {{ limit }} karaktere eduki beharko lituzke.',
    'This value should not be blank.' => 'Balio hau ez litzateke hutsik egon behar.',
    'This value should not be null.' => 'Balio hau ez litzateke nulua izan behar.',
    'This value should be null.' => 'Balio hau nulua izan beharko litzateke.',
    'This value is not valid.' => 'Balio hau ez da egokia.',
    'This value is not a valid time.' => 'Balio hau ez da ordu egoki bat.',
    'This value is not a valid URL.' => 'Balio hau ez da baliabideen kokatzaile uniforme (URL) egoki bat.',
    'The two values should be equal.' => 'Bi balioak berdinak izan beharko lirateke.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fitxategia handiegia da. Baimendutako tamaina handiena {{ limit }} {{ suffix }} da.',
    'The file is too large.' => 'Fitxategia handiegia da.',
    'The file could not be uploaded.' => 'Ezin izan da fitxategia igo.',
    'This value should be a valid number.' => 'Balio hau zenbaki egoki bat izan beharko litzateke.',
    'This file is not a valid image.' => 'Fitxategi hau ez da irudi egoki bat.',
    'This is not a valid IP address.' => 'Honako hau ez da IP helbide egoki bat.',
    'This value is not a valid language.' => 'Balio hau ez da hizkuntza egoki bat.',
    'This value is not a valid locale.' => 'Balio hau ez da kokapen egoki bat.',
    'This value is not a valid country.' => 'Balio hau ez da herrialde egoki bat.',
    'This value is already used.' => 'Balio hau jadanik erabilia izan da.',
    'The size of the image could not be detected.' => 'Ezin izan da irudiaren tamaina detektatu.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Irudiaren zabalera handiegia da ({{ width }}px). Onartutako gehienezko zabalera {{ max_width }}px dira.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Irudiaren zabalera txikiegia da ({{ width }}px). Onartutako gutxieneko zabalera {{ min_width }}px dira.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Irudiaren altuera handiegia da ({{ height }}px). Onartutako gehienezko altuera {{ max_height }}px dira.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Irudiaren altuera txikiegia da ({{ height }}px). Onartutako gutxieneko altuera {{ min_height }}px dira.',
    'This value should be the user\'s current password.' => 'Balio hau uneko erabiltzailearen pasahitza izan beharko litzateke.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Balio honek zehazki karaktere {{ limit }} izan beharko luke.|Balio honek zehazki {{ limit }} karaktere izan beharko lituzke.',
    'The file was only partially uploaded.' => 'Fitxategiaren zati bat bakarrik igo da.',
    'No file was uploaded.' => 'Ez da fitxategirik igo.',
    'No temporary folder was configured in php.ini.' => 'Ez da aldi baterako karpetarik konfiguratu php.ini fitxategian.',
    'Cannot write temporary file to disk.' => 'Ezin izan da aldi baterako fitxategia diskoan idatzi.',
    'A PHP extension caused the upload to fail.' => 'PHP luzapen batek igoeraren hutsa eragin du.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Bilduma honek gutxienez elementu {{ limit }} eduki beharko luke.|Bilduma honek gutxienez {{ limit }} elementu eduki beharko lituzke.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Bilduma honek gehienez elementu {{ limit }} eduki beharko luke.|Bilduma honek gehienez {{ limit }} elementu eduki beharko lituzke.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Bilduma honek zehazki elementu {{ limit }} eduki beharko luke.|Bilduma honek zehazki {{ limit }} elementu eduki beharko lituzke.',
    'Invalid card number.' => 'Txartel zenbaki baliogabea.',
    'Unsupported card type or invalid card number.' => 'Txartel mota onartezina edo txartel zenbaki baliogabea.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Hau ez da baliozko banku internazionaleko kontu zenbaki (IBAN) bat.',
    'This value is not a valid ISBN-10.' => 'Balio hau ez da onartutako ISBN-10 bat.',
    'This value is not a valid ISBN-13.' => 'Balio hau ez da onartutako ISBN-13 bat.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Balio hau ez da onartutako ISBN-10 edo ISBN-13 bat.',
    'This value is not a valid ISSN.' => 'Balio hau ez da onartutako ISSN bat.',
    'This value is not a valid currency.' => 'Balio hau ez da baliozko moneta bat.',
    'This value should be equal to {{ compared_value }}.' => 'Balio hau {{ compared_value }}-(r)en berbera izan beharko litzateke.',
    'This value should be greater than {{ compared_value }}.' => 'Balio hau {{ compared_value }} baino handiagoa izan beharko litzateke.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Balio hau {{ compared_value }}-(r)en berdina edota handiagoa izan beharko litzateke.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Balio hau {{ compared_value_type }} {{ compared_value }}-(r)en berbera izan beharko litzateke.',
    'This value should be less than {{ compared_value }}.' => 'Balio hau {{ compared_value }} baino txikiagoa izan beharko litzateke.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Balio hau {{ compared_value }}-(r)en berdina edota txikiagoa izan beharko litzateke.',
    'This value should not be equal to {{ compared_value }}.' => 'Balio hau ez litzateke {{ compared_value }}-(r)en berdina izan behar.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Balio hau ez litzateke {{ compared_value_type }} {{ compared_value }}-(r)en berbera izan behar.',
    'This form should not contain extra fields.' => 'Formulario honek ez luke aparteko eremurik eduki behar.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Igotako fitxategia handiegia da. Mesedez saiatu fitxategi txikiago bat igotzen.',
    'The CSRF token is invalid.' => 'CSRF tokena ez da egokia.',
    'fos_user.username.already_used' => 'Erabiltzaile izena hori erabiltzen da dagoeneko',
    'fos_user.username.blank' => 'Sartu erabiltzaile izena mesedez',
    'fos_user.username.short' => '[-Inf,Inf]Erabiltzaile izena motzegia da',
    'fos_user.username.long' => '[-Inf,Inf]Erabiltzaile izena luzeegia da',
    'fos_user.email.already_used' => 'E-posta helbide hori erabiltzen da dagoeneko',
    'fos_user.email.blank' => 'Sarty E-posta helbidea mesedez',
    'fos_user.email.short' => '[-Inf,Inf]E-posta helbidea motzegia da',
    'fos_user.email.long' => '[-Inf,Inf]E-posta helbidea luzeegia da',
    'fos_user.email.invalid' => 'E-posta helbidea ez da zuzena',
    'fos_user.password.blank' => 'Sartu pasahitza mesedez',
    'fos_user.password.short' => '[-Inf,Inf]Pasahitza motzegia da',
    'fos_user.password.mismatch' => 'Bi pasahitzek ez dute bat egiten',
    'fos_user.new_password.blank' => 'Sartu pasahitz berria mesedez',
    'fos_user.new_password.short' => '[-Inf,Inf]Pasahitz berria motzegia da',
    'fos_user.current_password.invalid' => 'Sartutako pasahitza ez da baliagarria',
    'fos_user.group.blank' => 'Sartu izena mesedez',
    'fos_user.group.short' => '[-Inf,Inf]Izena motzegia da',
    'fos_user.group.long' => '[-Inf,Inf]Izena luzeegia da',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Talde eguneratu',
    'group.show.name' => 'Taldearen izena',
    'group.new.submit' => 'Taldea sortu',
    'group.flash.updated' => 'Taldea eguneratua izan da',
    'group.flash.created' => 'Taldea sortua izan da',
    'group.flash.deleted' => 'Taldea ezabatua izan da',
    'security.login.username' => 'Erabiltzaile izena',
    'security.login.password' => 'Pasahitza',
    'security.login.remember_me' => 'Oroitu',
    'security.login.submit' => 'Sartu',
    'profile.show.username' => 'Erabiltzaile izena',
    'profile.show.email' => 'E-posta',
    'profile.edit.submit' => 'Erabiltzailea eguneratu',
    'profile.flash.updated' => 'Perfila eguneratua izan da',
    'change_password.submit' => 'Pasahitza aldatu',
    'change_password.flash.success' => 'Pasahitz ongi eguneratu da',
    'registration.check_email' => 'E-posta bat bidali da %email% helbidera. Kontua aktibatzeko klik egin beharreko esteka zehazten da.',
    'registration.confirmed' => 'Zorionak %username%, zure kontua aktibatua dago.',
    'registration.back' => 'Itzuli.',
    'registration.submit' => 'Izena eman',
    'registration.flash.user_created' => 'Erabiltzailea ongi sortu da',
    'registration.email.subject' => 'Ongi etorri %username%!',
    'registration.email.message' => 'Kaixo %username%!

Kontuaren balidazioazioarekin jarraitzeko - ireki ondoko orria: %confirmationUrl%

Adeitasunez,
Taldea.
',
    'resetting.password_already_requested' => '24 orduen barruan erabiltzaile honen pasahitza eskatua izan da.',
    'resetting.check_email' => 'Email bat bidali zaio %email% helbideari. Pasahitza berreskuratzeko esteka zehazten da bertan.',
    'resetting.request.invalid_username' => '%username% erabiltzailea edo E-posta ez da existitzen.',
    'resetting.request.username' => 'Erabiltzaile izena',
    'resetting.request.submit' => 'Pasahitza berreskuratu',
    'resetting.reset.submit' => 'Pasahitza aldatu',
    'resetting.flash.success' => 'Pasahitza ongi aldatu da',
    'resetting.email.subject' => 'Pasahitza berrezarri',
    'resetting.email.message' => 'Kaixo %username%!

Pasahitza berrezartzeko egin klik esteka honetan: %confirmationUrl%

Adeitasunez,
Taldea.
',
    'layout.logout' => 'Irten',
    'layout.login' => 'Sartu',
    'layout.register' => 'Izena eman',
    'layout.logged_in_as' => '%username% bezala konektatua',
    'form.group_name' => 'Taldearen izena',
    'form.username' => 'Erabiltzaile izena',
    'form.email' => 'E-posta',
    'form.current_password' => 'Oraingo pasahitza',
    'form.password' => 'Pasahitza',
    'form.password_confirmation' => 'Errepikatu pasahitza',
    'form.new_password' => 'Pasahitz berria',
    'form.new_password_confirmation' => 'Errepikatu pasahitza',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaine doit avoir exactement {{ limit }} caractère.|Cette chaine doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'fos_user.username.already_used' => 'Le nom d\'utilisateur est déjà utilisé',
    'fos_user.username.blank' => 'Entrez un nom d\'utilisateur s\'il vous plait',
    'fos_user.username.short' => '[-Inf,Inf]Le nom d\'utilisateur est trop court',
    'fos_user.username.long' => '[-Inf,Inf]Le nom d\'utilisateur est trop long',
    'fos_user.email.already_used' => 'L\'adresse e-mail est déjà utilisée',
    'fos_user.email.blank' => 'Entrez une adresse e-mail s\'il vous plait',
    'fos_user.email.short' => '[-Inf,Inf]L\'adresse e-mail est trop courte',
    'fos_user.email.long' => '[-Inf,Inf]L\'adresse e-mail est trop longue',
    'fos_user.email.invalid' => 'L\'adresse e-mail est invalide',
    'fos_user.password.blank' => 'Entrez un mot de passe s\'il vous plait',
    'fos_user.password.short' => '[-Inf,Inf]Le mot de passe est trop court',
    'fos_user.password.mismatch' => 'Les deux mots de passe ne sont pas identiques',
    'fos_user.new_password.blank' => 'Entrez un nouveau mot de passe s\'il vous plait',
    'fos_user.new_password.short' => '[-Inf,Inf]Le nouveau mot de passe est trop court',
    'fos_user.current_password.invalid' => 'Le mot de passe est invalide',
    'fos_user.group.blank' => 'Entrez un nom s\'il vous plait',
    'fos_user.group.short' => '[-Inf,Inf]Le nom est trop court',
    'fos_user.group.long' => '[-Inf,Inf]Le nom est trop long',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'Digest nonce has expired.' => 'Le digest nonce a expiré.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Mettre à jour le groupe',
    'group.show.name' => 'Nom du groupe',
    'group.new.submit' => 'Créer le groupe',
    'group.flash.updated' => 'Le groupe a été mis à jour',
    'group.flash.created' => 'Le groupe a été créé',
    'group.flash.deleted' => 'Le groupe a été supprimé',
    'security.login.username' => 'Nom d\'utilisateur',
    'security.login.password' => 'Mot de passe',
    'security.login.remember_me' => 'Se souvenir de moi',
    'security.login.submit' => 'Connexion',
    'profile.show.username' => 'Nom d\'utilisateur',
    'profile.show.email' => 'Adresse e-mail',
    'profile.edit.submit' => 'Mettre à jour',
    'profile.flash.updated' => 'Le profil a été mis à jour',
    'change_password.submit' => 'Modifier le mot de passe',
    'change_password.flash.success' => 'Le mot de passe a été modifié',
    'registration.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien d\'activation sur lequel il vous faudra cliquer afin d\'activer votre compte.',
    'registration.confirmed' => 'Félicitations %username%, votre compte est maintenant activé.',
    'registration.back' => 'Retour à la page d\'origine.',
    'registration.submit' => 'Enregistrer',
    'registration.flash.user_created' => 'L\'utilisateur a été créé avec succès',
    'registration.email.subject' => 'Bienvenue sur Gudetama France %username% !',
    'registration.email.message' => 'Kon\'nichiwa %username% !

Pour valider ton compte de jaune d\'oeuf, merci de te rendre sur %confirmationUrl%

Cordialement,
L\'équipe Gudetama France.
',
    'resetting.password_already_requested' => 'Un nouveau mot de passe a déjà été demandé pour cet utilisateur dans les dernières 24 heures.',
    'resetting.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien sur lequel il vous faudra cliquer afin de réinitialiser votre mot de passe.',
    'resetting.request.invalid_username' => 'Le nom d\'utilisateur ou l\'adresse e-mail "%username%" n\'existe pas.',
    'resetting.request.username' => 'Nom d\'utilisateur ou adresse e-mail',
    'resetting.request.submit' => 'Réinitialiser le mot de passe',
    'resetting.reset.submit' => 'Modifier le mot de passe',
    'resetting.flash.success' => 'Le mot de passe a été réinitialisé avec succès',
    'resetting.email.subject' => 'Réinitialisation de votre mot de passe',
    'resetting.email.message' => 'Bonjour %username% !

Pour réinitialiser votre mot de passe, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe.
',
    'layout.logout' => 'Déconnexion',
    'layout.login' => 'Connexion',
    'layout.register' => 'Inscription',
    'layout.logged_in_as' => 'Connecté en tant que %username%',
    'form.group_name' => 'Nom du groupe',
    'form.username' => 'Nom d\'utilisateur',
    'form.email' => 'Adresse e-mail',
    'form.current_password' => 'Mot de passe actuel',
    'form.password' => 'Mot de passe',
    'form.password_confirmation' => 'Vérification',
    'form.new_password' => 'Nouveau mot de passe',
    'form.new_password_confirmation' => 'Vérification',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
