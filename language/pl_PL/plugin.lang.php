<?php
$lang['lien_titre'] = 'Słuchaj muzyki';
$lang['lien_expl'] = 'Pokaż odtwarzacz muzyki';
$lang['mp_evidence_title'] = 'Informacja';
$lang['mp_evidence_txt'] = 'Galeria posiada odtwarzacz muzyki. Czy chcesz go pokazać?';
$lang['mp_evidence_2'] = 'Zapamiętaj';
$lang['mp_montre'] = 'Pokaż playlistę';
$lang['mp_cache'] = 'Ukryj playlistę';
$lang['mp_send'] = 'Wyślij';
$lang['mp_need_help'] = "Potrzebujesz pomocy ?";
$lang['mp_help_q1'] = "Gdzie umieścić mp3?";
$lang['mp_help_q2'] = "Dodałem mp3 ale nie mogę ich znaleźć w playliście !";
$lang['mp_help_q3'] = "O co chodzi z 'Pokaż miniaturki w playliście' ?";
$lang['mp_help_q4'] = "Jak działa ta wtyczka ?";
$lang['mp_help_q5'] = "Czy mogę dodać mp3 z zewnętrznego serwera albo umieszczoną w innym folderze ?";
$lang['mp_help_q6'] = "Czy mogę dodać podcast ?";
$lang['mp_help_q7'] = "Nie znalazłem tutaj odpowiedzi / Mam inny problem";
$lang['mp_help_q8'] = "Nowość: Możesz zabronić dostępu do odtwarzacza";
$lang['mp_help_div1'] = "Mp3 musi być wrzucona do folderu wtyczki o nazwie Music na przykład tak: \"[PWG folder]/plugins/music_player/music/[new playlist]/\". Możesz tworzyć playlisty po nazwisku autora w nazwie folderu (music/moby/go.pm3), albo umieścić nazwę autora bezpośrednio w nazwie plku (music/electro/moby-go.pm3)";
$lang['mp_help_div2'] = "Nie zaktualizowałeś playlisty: Kliknij więc na druga ikonę ('Zarządzaj muzyką') obok playlisty, a nastepnie w końcowym kroku przycisnij 'Zatwierdź modyfikacje'";
$lang['mp_help_div3'] = "To odnosi sie do miniaturki, którą możesz umieścić (3-cia ikona ('Zarządzaj miniaturkami') obok playlisty";
$lang['mp_help_div4'] = "Ta wtyczka pozwala na tworzenie i zarządzanie playlistami, personalizacje playera i jego pop-up'a.<br />
    Aby stworzyć playliste :
    <br />-Po pierwsze:, Potrzebujesz folderu: /music w folderze wtyczki. WAZNE !! (następująca notka nie dotyczy darmowych użytkowników) folder /music musi mieć wszystkie możliwe uprawnienia write/read (chmod 777 lub rwxrwxrwx).
    <br />- Następnie w folderze /music należy stworzyć kolejny folder który będzie zawierał pliki mp3 oraz playlistę z rozszerzeniem .xml. Ostrożnie : nazwa folderu jest ważna : NIE UŻYWAJ ZNAKÓW SPECJALNYCH w nazwie folderu
    <br />- Następnie kliknij w  'Synchronizuj z /music' : foldery w /music zostały utworzone na podstawie mp3. Playlisty z rozszerzeniem xml zostały utworzone w folderach o tych samych nazwach.
    <br/>- reception of the form: it is used to have a small descriptive text which will be used as link to play the playlist, in the window of the player. Leave empty a field text and the playlsit concerned will not be recorded in data base
    <br/>- sending of the form and recording in data base: then you can add a miniature by upload or link: you can even directly send it by ftp with for name '[name of the file] .jpg'?
    <br /><br />
    Aby zarządzać playlistą :
    <br />- Kliknij na 2-gą ikonę obok playlisty
    <br />- Wykonaj następujące kroki : Nie zapomnij o ostatnim !";
$lang['mp_help_div5'] = "Tak : Aby to zrobić wybierz playlistę, przejdź do punktu drugiego, dodaj plik. Bądź ostrożny: nawet jeśli mp3 jest na tym samym serwerze musisz podać pełny adres wraz z http://";
$lang['mp_help_div6'] = "Tak : Od wersji 1.3 dodano oddzielny blok dla podcastu oraz możliwość dodania playlist z zewnętrznego serwera. Uwaga  : playlista musi być w formacie Atom, Xspf lub RSS . (podcasty zawsze mają format RSS)";
$lang['mp_help_div7'] = 'Wsparcie dla wtyczki znajdziesz tutaj : <a href="http://forum.phpwebgallery.net/viewtopic.php?pid=68781"> http://forum.phpwebgallery.net/viewtopic.php?pid=68781/a>';
$lang['mp_help_div8'] = "Nowość: możesz zablokować dostęp do odtwarzacza. Jeśli stworzysz grupę 'music_group', tylko członkowie tej grupy będą mieli dostęp do muzyki. Jeśli grupa nie istnieje (a domyślnie nie istnieje), każdy ma dostęp do muzyki";
$lang['mp_admin_leg'] = 'Menadżer playlisty';
$lang['mp_admin_tt_synchro'] = 'Synchronizuj z folderem /music';
$lang['mp_admin_folder'] = 'Folder';
$lang['mp_admin_nm_pl'] = 'Nazwa playlisty';
$lang['mp_admin_nm_edit'] = 'Edytuj nazwę';
$lang['mp_admin_pl'] = 'Zarządzaj muzyką';
$lang['mp_admin_min'] = 'Zarządzaj miniaturkami';
$lang['mp_admin_leg1'] = 'Podcast (RSS) lub playlista z zewnętrznego serwera';
$lang['mp_admin_leg2'] = 'Opcja wtyczki';
$lang['mp_admin_2_opt1'] = 'Pokaż wtyczkę jako blok pasku menu ';
$lang['mp_admin_2_opt2'] = 'Pokaż "nagłówek"';
$lang['mp_admin_2_opt3'] = 'Pokaż "stopkę", prawa autorskie';
$lang['mp_admin_2_opt4'] = 'Pop_up';
$lang['mp_admin_2_opt4_1'] = 'wysokość';
$lang['mp_admin_2_opt4_2'] = 'szerokość';
$lang['mp_admin_leg3'] = 'Opcje odtwarzacza';
$lang['mp_admin_3_opt1_1'] = 'wysokość całkowita';
$lang['mp_admin_3_opt1_2'] = 'szerokość całkowita';
$lang['mp_admin_3_opt2_1'] = 'wysokość playlisty';
$lang['mp_admin_3_opt2_2'] = "[Info : jeśli miniaturka jest włączona, całkowita wysokość równa jest wysokości playlisty i 20px paska.]";
$lang['mp_admin_3_opt3_1'] = 'Pokaż miniaturki na playliście';
$lang['mp_admin_3_opt3_2'] = 'szerokość miniaturki';
$lang['mp_admin_3_opt3_3'] = "[Info :jeśli miniaturka jest włączona i jeśli jej szerokość jest < od szerokości całkowitej, wtedy miniaturka (domyślnie) pojawi się po lewej stronie.] ";
$lang['mp_admin_3_opt4'] = 'Odtwarzaj muzykę losowo';
$lang['mp_admin_3_opt5'] = 'Po zakończeniu powtórz playlistę';
$lang['mp_admin_3_opt6'] = 'Odtwórz tą playlistę od początku';
$lang['mp_admin_3_opt7'] = "Automatycznie uruchamiaj playlistę (bez bocznego paska)";
$lang['mp_admin_3_opt9'] = "Styl narzucony domyślnie :  ";
$lang['mp_admin_3_opt9b'] = "nie zmieniaj";
$lang['mp_admin_3_opt10'] = "Aktywuj automatyczne zarządzanie stylami: Styl używany przez użytkownika będzie zastosowany dla odtwarzacza. Jeśli ta opcja jest wyłączona lub jeśli styl użytkownika jest inny niż te dostępna dla odtwarzacza, wtedy zastosowany będzie domyślny styl.";
$lang['mp_adm_envoi_1'] = 'Opis';
$lang['mp_adm_envoi_2'] = 'zawiera';
$lang['mp_adm_return'] = 'Powrót do playlisty';
$lang['mp_adm_return_2'] = 'Powrót do playlisty';
$lang['mp_adm_edit_1'] = 'Tekst opisu';
$lang['mp_adm_edit_2'] = 'Playlista';
$lang['mp_adm_edit_3'] = 'Synchronizuj playlistę';
$lang['mp_ou'] = 'LUB';
$lang['mp_adm_info_img'] = "(dodaj nowy obrazek i wykasuj stary)";
$lang['mp_adm_suppr_1'] = 'Co chcesz zrobić  ?';
$lang['mp_adm_suppr_2'] = 'Usunąć tylko bazę danych playlist (Przy następnej synchronizacji utworzą się ponownie) ';
$lang['mp_adm_suppr_3'] = 'Usunąć bazę danych playlist I FOLDER (pliki mp3 i xml zostaną usunięte)';
$lang['mp_msg_suppr1'] = 'Usuwanie folderu zakończone sukcesem';
$lang['mp_msg_suppr2'] = 'Błąd : nie usunięto folderu';
$lang['mp_msg_suppr3'] = 'Usuwanie bazy danych zakończono sukcesem';
$lang['mp_msg_edit1'] = 'Edycja OK';
$lang['mp_msg_edit2'] = "Playlista zaktualizowana !";
$lang['mp_msg_edit3'] = "wiersz zmodyfikowano !";
$lang['mp_msg_edit4'] = "Usuń z bazy danych  :";
$lang['mp_msg_edit5'] = "Usuń z :";
$lang['mp_adm_etape_1'] = "Krok pierwszy (opcjonalny)";
$lang['mp_adm_et1_txt'] = "Dodałeś lub usunąłeś pliki mp3 z folderu ?Jeśli tak musisz zsynchronizować bazę danych:";
$lang['mp_adm_etape_2'] = "2gi krok (opcjonalny)";
$lang['mp_adm_et2_txt'] = "Dodaj mp3 z zewnętrznego serwera ";
$lang['mp_adm_et2_nbr'] = "Liczba dodanych: ";
$lang['mp_adm_et2_rg'] = "Wstaw wiersz : ";
$lang['mp_adm_et2_rg2'] = "(jeśli pusty, przejdź na dół playlisty)";
$lang['mp_adm_etape_3'] = "3ci krok !";
$lang['mp_adm_thead1'] = "NAZWA";
$lang['mp_adm_thead2'] = "URL";
$lang['mp_adm_thead3'] = "GÓRA";
$lang['mp_adm_thead4'] = "DÓŁ";
$lang['mp_adm_thead5'] = "Zmień url/nazwę";
$lang['mp_adm_thead6'] = "Usuń";
$lang['mp_adm_etape_4'] = "4ty krok !";
$lang['mp_adm_et4_txt'] = "Utwórz .xml z playlistą";
$lang['mp_adm_et4_ok'] = "Zatwierdź zmiany";
$lang['mp_adm_ed_sup_ok'] = "Jesteś pewny ?";
$lang['mp_adm_ed_sup_info'] = "Jeśli jest to plik z folderu '/music', będzie on usunięty  : w innym wypadku skasowany będzie tylko wpis w bazie danych.";
$lang['mp_msg_err_aj1'] = "Błąd: pole url puste"; 
$lang['mp_msg_err_aj2'] = "Błąd: pole tekstowe puste";
$lang['mp_msg_admin1'] = 'Nie dodany';
$lang['mp_msg_admin_3_1'] = 'Plik';
$lang['mp_msg_admin_3_2'] = 'Utworzony';
$lang['mp_msg_admin_4'] = 'Dodany z';
$lang['mp_msg_admin_5'] = 'Zapisano konfigurację odtwarzacza muzyki';
$lang['mp_msg_admin_6'] = 'Zapisano konfigurację wtyczki';
$lang['mp_uploadimg_ok'] = 'Zapisano obrazek';
$lang['mp_linkimg_ok'] = 'Zapisano obrazek';
$lang['mp_info_min']="[ Miniaturka jest opcjonalna. ]";
$lang['mp_text_no_autorisation']="Nie wolno Ci słuchać muzyki ! Skontaktuj się z webmasterem i poproś o pozwolenie";
?>