<?php
$lang['lien_titre'] = 'Escuchar música';
$lang['lien_expl'] = 'muestra una ventana emergente con un reproductor de audio';

$lang['mp_evidence_title'] = 'Información';
$lang['mp_evidence_txt'] = 'La galería cuenta con un reproductor de música. ¿Quieres verlo ?';
$lang['mp_evidence_2'] = 'recordar';

$lang['mp_montre'] = 'Mostrar los playlist';
$lang['mp_cache'] = 'Esconder los playlist';

$lang['mp_send'] = 'Mandar';
$lang['mp_need_help'] = "Necesita ayuda ?";

$lang['mp_help_q1'] = "Donde poner mis mp3 ?";
$lang['mp_help_q2'] = "He añadido algunos mp3 pero no aparecen en la lista de reproducción !";
$lang['mp_help_q3'] = "¿Qué significa la opción 'Mostrar la imagen en miniatura de la lista de reproducción' ?";
$lang['mp_help_q4'] = "¿Cómo funciona el plugin?";
$lang['mp_help_q5'] = "¿Cómo puedo añadir mp3 a distancia o presentes en otras carpetas ?";
$lang['mp_help_q6'] = "¿Podemos agregar podcasts o una lista de reproducción a distancia ?";
$lang['mp_help_q7'] = "No puedo encontrar respuestas aquí / tengo un problema muy grande";
$lang['mp_help_q8'] = "Nuevo: Se pueden restringir los derechos de la escucha";

$lang['mp_help_div1'] = "Los mp3 deben estar en la carpeta de música del plugin de esa manera\"[la carpeta de pwg]/plugins/music_player/music/[nueva playlist]/\". Es recomendable hacer lista de reproducción por artista (music/moby/go.pm3), o de otro modo poner el nombre del artista en el nombre del archivo mp3 (music/electro/moby-go.pm3)";
$lang['mp_help_div2'] = "No se han actualizado lista de reproducción : Para ello haga clic en el segundo icono  ('Gestionar la música') junto a la lista de reproducción, entonces el último paso realizado hacer 'Guardar cambios'";
$lang['mp_help_div3'] = "Esta es una imagen que se puede agregar haciendo clic en el tercero icono  ('Gestionar en miniatura') junto a la lista de reproducción";
$lang['mp_help_div4'] = "El plug-in le permite crear y gestionar listas de reproducción, personalizar la pantalla del reproductor y su pop-up.<br />
para crear una lista de reproducción :
<br />- En primer lugar asegúrate de que tienes una carpeta / música en el directorio de plugins. ¡IMPORTANTE! (usuario de Free no están preocupados con la siguiente declaración) El archivo /música debe tener permisos de lectura / escritura, en otras palabras,, un chmod de 777 o rwxrwxrwx.
<br />- A continuación, cree una carpeta en la carpeta /música que contendrá la lista de reproducción mp3 y en .xml. Advertencia: el nombre de la carpeta es importante: EVITAR LOS CARACTERES Y COMILLAS en los nombres de las carpetas
<br />- hacer clic en 'sincronizar la carpeta /music' : las carpetas estaran listadas dentro de /music igual que los ficheros mp3 contenidos en ellos. Las listas de reproducción en formato xml estan creadas con el mismo nombre que la carpeta.
<br />- recepción del formulario : sirve a tener un pequeño texto descriptivo que servirá como un vínculo para reproducir la lista de reproducción en la ventana del reproductor. Deja el campo de texto en blanco y la playlsit en cuestión no será almacenada en la base de datos
<br />- envio del formulario y registro en la base de datos : A continuación, puede añadir un archivo de upload en miniatura o enlace : Incluso puede enviar directamente a través de FTP con el nombre [nombre de la carpeta] en '.jpg'
<br /><br />
para gestionar una lista de reproducción:
<br />- haga clic en el segundo icono al lado de la lista de reproducción
<br />- A continuación, siga los pasos: no se olvide de el último !";
$lang['mp_help_div5'] = "Para ello, accede a la lista de su elección y, en el paso 2, agregue el archivo. Advertencia: aunque el mp3 está en el mismo servidor que este plugin requiere una dirección URL completa, con http://";
$lang['mp_help_div6'] = "Si : desde la 1.3 un bloque para podcast y lista de reproducción distante ha sido añadido. Advertencia: la lista de reproducción debe estar en formato Atom, XSPF (Usado por el plug-in), o RSS. (Los podcasts son RSS)";
$lang['mp_help_div7'] = 'El soporte de plug-in se hace aquí : <a href="http://forum.phpwebgallery.net/viewtopic.php?pid=68781"> http://forum.phpwebgallery.net/viewtopic.php?pid=68781</a>';
$lang['mp_help_div8'] = "Nuevo: Se pueden restringir los derechos de la escucha. En efecto, si se crea un grupo 'grupo musical' , sólo los usuarios pertenecientes a este grupo podran leer esta música. Si no se a creado (caso por defecto), todo el mundo puede acceder al lector";

$lang['mp_admin_leg'] = 'Gestión de lista de reproducción';
$lang['mp_admin_tt_synchro'] = 'Sincronizar con el archivo /music';
$lang['mp_admin_folder'] = 'Carpeta';
$lang['mp_admin_nm_pl'] = 'Nombre de la lista de reproducción';
$lang['mp_admin_nm_edit'] = 'Editar el nombre';
$lang['mp_admin_pl'] = 'Administrar Música';
$lang['mp_admin_min'] = 'Administrar la miniatura';

$lang['mp_admin_leg1'] = 'Podcast (RSS) o lista de reproducción remota';

$lang['mp_admin_leg2'] = 'Opcion del plugin';
$lang['mp_admin_2_opt1'] = 'Resaltar el plugin con un bloque adicional en el menú superior ';
$lang['mp_admin_2_opt2'] = 'Ver el "header", la bandera';
$lang['mp_admin_2_opt3'] = 'Ver el "footer", el copyright';
$lang['mp_admin_2_opt4'] = 'La pop_up';
$lang['mp_admin_2_opt4_1'] = 'Altura';
$lang['mp_admin_2_opt4_2'] = 'Ancho';

$lang['mp_admin_leg3'] = 'Opción del reproductor';
$lang['mp_admin_3_opt1_1'] = 'Altura total';
$lang['mp_admin_3_opt1_2'] = 'Ancho total';
$lang['mp_admin_3_opt2_1'] = 'Altura de la playlist';
$lang['mp_admin_3_opt2_2'] = "[Info : Si la miniatura está seleccionada, lo ideal es que la altura de la playlist mas los 20 px de la bara, forme la altura total.]";
$lang['mp_admin_3_opt3_1'] = 'Ver la imagen en miniatura de la lista de reproducción';
$lang['mp_admin_3_opt3_2'] = 'Ancho de la miniatura';
$lang['mp_admin_3_opt3_3'] = "[Info :Si la miniatura está habilitada y si su anchura es menor que la anchura total,  la miniatura se mostrará a la izquierda (por defecto).] ";
$lang['mp_admin_3_opt4'] = 'Mezclar la música';
$lang['mp_admin_3_opt5'] = 'Repetir la lista de reproducción una vez que haya terminado';
$lang['mp_admin_3_opt6'] = 'Leer esta lista al arancar';
$lang['mp_admin_3_opt7'] = "Desplaza automáticamente la lista de reproducción (sin ascensor)";
$lang['mp_admin_3_opt9'] = "Tema aplicado por defecto  : ";
$lang['mp_admin_3_opt9b'] = "no cambiar";
$lang['mp_admin_3_opt10'] = "Habilitar la gestión automática de estilos  : el tema aplicado al reproductor sera el del usuario. Si esta opción está desactivada o si el tema del usuario no existe para el reproductor, entonces se aplica el tema por defecto";


$lang['mp_adm_envoi_1'] = 'descripción de';
$lang['mp_adm_envoi_2'] = 'contiene';

$lang['mp_adm_return'] = 'Regreso a la lista de reproducción';
$lang['mp_adm_return_2'] = 'Regreso a la lista de reproducción';

$lang['mp_adm_edit_1'] = 'texto descriptivo';
$lang['mp_adm_edit_2'] = 'La lista de reproducción';
$lang['mp_adm_edit_3'] = 'Sincronizar lista de reproducción';

$lang['mp_ou'] = 'O';
$lang['mp_adm_info_img'] = "(agregar una nueva imagen sobrescribe la antigua)";

$lang['mp_adm_suppr_1'] = 'Que quiere hacer ?';
$lang['mp_adm_suppr_2'] = 'Eliminar la lista de reproducción de la base de datos sólo (en la siguiente sincronización, volverá) ';
$lang['mp_adm_suppr_3'] = 'Eliminar la lista de reproducción de la base de datos y el expediente completo (fichieros mp3 y xml/o php eliminados )';


$lang['mp_msg_suppr1'] = 'Se elimino los archivos con exito';
$lang['mp_msg_suppr2'] = 'Error: el archivo no se elimino';
$lang['mp_msg_suppr3'] = 'Se elimino la base de datos con éxito';
$lang['mp_msg_edit1'] = 'Exito de la edición';
$lang['mp_msg_edit2'] = "Lista de reproducción actualizada !";
$lang['mp_msg_edit3'] = "Rango modificado !";
$lang['mp_msg_edit4'] = "Eliminación en la base de datos de :";
$lang['mp_msg_edit5'] = "Eliminación  de :";
a
$lang['mp_adm_etape_1'] = "1° etapa (optional)";
$lang['mp_adm_et1_txt'] = "Se han añadido o suprimido archivo mp3 en la carpeta ? Si si, debe sincronizar la base de datos / archivo :";
$lang['mp_adm_etape_2'] = "2° etapa (optional))";
$lang['mp_adm_et2_txt'] = "Añadir uno o mas mp3 distantes. ";
$lang['mp_adm_et2_nbr'] = "Cantidad añadida : ";
$lang['mp_adm_et2_rg'] = "insertar al rango : ";
$lang['mp_adm_et2_rg2'] = "(Si está vacío, en la parte inferior de la lista de reproducción)";
$lang['mp_adm_etape_3'] = "3° etapa !";
$lang['mp_adm_thead1'] = "NOMBRE";
$lang['mp_adm_thead2'] = "URL";
$lang['mp_adm_thead3'] = "Subir";
$lang['mp_adm_thead4'] = "Bajar";
$lang['mp_adm_thead5'] = "Modificar url/nombre";
$lang['mp_adm_thead6'] = "Eliminar";
$lang['mp_adm_etape_4'] = "4° etapa !";
$lang['mp_adm_et4_txt'] = "Administrar la lista de reproducción xml";
$lang['mp_adm_et4_ok'] = "Validar los cambios";

$lang['mp_adm_ed_sup_ok'] = "¿Estás seguro de eliminar ?";
$lang['mp_adm_ed_sup_info'] = "Si se trata de un archivo de '/ música', se ELIMINARA físicamente : de lo contrario sólo la entrada correspondiente en la base de datos se eliminará.";


$lang['mp_msg_err_aj1'] = "Error : campo url vasillo";
$lang['mp_msg_err_aj2'] = "Error : campo texto vasillo";


$lang['mp_msg_admin1'] = 'sin añadidos';
$lang['mp_msg_admin_3_1'] = 'Fichero';
$lang['mp_msg_admin_3_2'] = 'creado';
$lang['mp_msg_admin_4'] = 'Añadido de';
$lang['mp_msg_admin_5'] = 'Configuración del reproductor guardada';
$lang['mp_msg_admin_6'] = 'Configuración del plugin guardada';

$lang['mp_uploadimg_ok'] = 'Upload con exito';
$lang['mp_linkimg_ok'] = 'Image enregistrée';
$lang['mp_info_min']="[ La miniatura es opcional. ]";

$lang['mp_text_no_autorisation']="NO se te permite reproducir música ! Por favor, póngase en contacto con el administrador para averiguar por qué y, posiblemente, le autorizara";


?>