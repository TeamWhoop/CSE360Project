<?php
$lang['privacy_stp18'] = 'Para agregar o quitar usuarios a los grupos, vaya a los <em>Usuarios » Administrar</em> página';
$lang['privacy_stp17'] = 'Un grupo en Piwigo es solo un conjunto de usuarios: asi grupos hacen mas fácil la administración de los permisos de albumes, y la administración de las propriedades de los usuarios. Aquí está la página donde se pueden gestionar los grupos para cambiar el nombre, fusionar, duplicar, eliminarlos. También puede configurar uno o más grupos como "grupo predeterminado", que significa que los usuarios recién registrados se verán afectados a los grupos establecidos por defecto.';
$lang['privacy_stp16'] = 'Al igual que en su ordenador, puede seleccionar varios álbumes con las teclas Maj y Control, a continuación, haga clic en la flecha para cambiarlos. <br> Ahora, permítanme presentarles a los grupos.';
$lang['privacy_stp15'] = 'Justo antes de explicar los grupos, un consejo profesional: aquí está el enlace a la página de configuración de álbumes privados/ públicos a la vez. Haga clic en él';
$lang['privacy_stp14'] = 'Entonces los usuarios y grupos de usuarios  pueden  acceder al álbum.';
$lang['privacy_stp13'] = 'Ahora haga clic en la ficha Privado.';
$lang['privacy_stp12'] = 'En esa página, puede elegir si el álbum estará disponible para cualquier persona o será restringido a algunos usuarios';
$lang['privacy_stp11'] = 'Ahora haga clic en la ficha Permisos';
$lang['privacy_stp10'] = 'Estamos en la gestión de la lista de álbum disponible en el menú utilizando <em> álbumes »Administrar </em> <br> Editar en el álbum, con solo pasar y luego haga clic en Editar.';
$lang['privacy_stp1'] = 'Hola! voy a ser su guía para descubrir como proteger sus fotos en Piwigo. Por favor siga mis instrucciones, y haz clic en "siguiente" (o utiliza las flechas de su teclado) para navegar. Si va a otra pagina de la administración, sera redirigido a la pagina actual del tour. Si está atascado y no puede terminar el tour, ir a <em> Plugins »Dar un paseo </em> eso terminará la gira. <br> Empezemos!';
$lang['privacy_stp4'] = 'Así tenemos dos sistemas para gestionar los permisos de acceso a las fotos. Son independientes, así puede crear un grupo "familia", pero este grupo no tiene nada que ver con el nivel de privacidad "Familia".<br><br>Los niveles de privacidad se aplican por imagen, y los permisos de grupo / usuario se aplican por álbum.Puede usar ambos o sólo un sistema, es flexible.<br><br>La siguiente pestaña es sobre gestión grupo.';
$lang['privacy_stp3'] = 'Tómese un tiempo para leer la información debajo.';
$lang['privacy_stp24'] = 'Este tour a terminado.<p style="text-align:center">Disfrute de su Piwigo!</p>Si le gusta Piwigo y quiere ayudarnos, puede contribuir ayudandonos para traducciones, donaciones, etc.<a href="http://piwigo.org/basics/contribute" target="_blank">Haga clic aquí para ayudarnos</a>. Gracias';
$lang['privacy_stp22'] = '<em>Para usuarios avanzados</em><br><br>En Piwigo, puede proteger sus fotos originales utilizando su configuración local. Utiliza la variable $conf[\'original_url_protection\']:por defecto esta vacía, puede poner como valor "images" para proteger solo las fotos, o "all" para proteger también todo tipo de media, que puede consumir recursos o podrían simplemente no funcionan en su servidor.<br><br> Esta opción funciona para contenido publico y privado. Esta opción actualmente requiere negar los acceso a las carpetas / upload y / galerías, mediante el uso de un archivo. htaccess (normalmente un archivo de texto con "Denegar de todos" para el contenido) o las configuraciones del servidor.<br><br>Por favor, tenga en cuenta que los nombres de archivo de fotos subidas utilizando otro método que FTP son <b> aleatorizados </ b>, por lo que son imposibles de adivinar: el nombre del archivo y así el camino a la foto original sólo se puede conocer si el visitante tiene acceso a una imagen con nuevo tamaño de esa foto, al igual que la miniatura. $conf[\'original_url_protection\']y negar el acceso a las carpetas / upload y / galerías tienen el propósito de evitar esto.';
$lang['privacy_stp21'] = 'Las soluciones son :<ul><li>poner una marca de agua, al menos sobre fotos de media y alta definición.</li><li>y desactivar tamaños XL y XXL .</li><li>y desactivar la Alta Definición (descarga y visualización de la foto original) para los usuarios interesados.';
$lang['privacy_stp20'] = 'Ahorra sabe como guardar sus fotos de forma privada, pero se sorprenderá de ver como guardar sus fotos de forma publica. Es posible que primero piense en bloquear al visitante la descarga de foto: no se puede, porque la web ha sido creada de esa manera (el navegador del visitante descargar todos los recursos que se muestran y más). El botón derecho del ratón se puede desactivar, una capa transparente se puede poner en la parte superior de la foto, etc, pero no va a deshabilitar la descarga. Páginas web completas se pueden guardar en cualquier navegador.';
$lang['privacy_stp2'] = 'Aquí puede acceder a la ayuda integrada. Haga clic en Siguiente para ir directamente a la página de ayuda sobre la gestión de permisos';
$lang['privacy_stp19'] = 'Aquí puede editar rápidamente un solo usuario sobrevolando lo y haga clic en el enlace Editar.<br><br>Puede seleccionar varios usuarios y editarlos a la vez para elegir una acción que aplicar.';
$lang['privacy_title4'] = 'Permisos';
$lang['privacy_title5'] = 'Permisos > Grupos';
$lang['privacy_title6'] = 'Nivel de privacidad';
$lang['privacy_title7'] = 'Nivel de privacidad';
$lang['privacy_title8'] = 'Nivel de privacidad';
$lang['privacy_title9'] = 'Nivel de privacidad';
$lang['privacy_title22'] = 'Configuración local: Protección original';
$lang['privacy_title24'] = 'Ha sido un gran momento';
$lang['privacy_title3'] = 'Permisos';
$lang['privacy_title21'] = 'Fotos publicas';
$lang['privacy_title2'] = 'Ayuda dentro de su Piwigo';
$lang['privacy_title20'] = 'Fotos publicas';
$lang['privacy_title19'] = 'Usuarios';
$lang['privacy_title18'] = 'Grupos';
$lang['privacy_title17'] = 'Grupos';
$lang['privacy_title15'] = 'Sugerencia';
$lang['privacy_title12'] = 'Permisos de álbum';
$lang['privacy_title11'] = 'Permisos de álbum';
$lang['privacy_title10'] = 'Permisos de álbum';
$lang['privacy_title1'] = 'Bienvenidos al Tour sobre privacidad';
$lang['privacy_stp9'] = '...y selecciona la acción "Quien puede ver estas fotos ?"Ahora puede cambiar el nivel de privacidad de las fotos seleccionadas.<br><br>Pero también se puede hacer eso por una imagen específica, en su página de edición. Puede acceder a ella desde la parte pública, o desde aquí.<br><br>Ahora, les voy a mostrar el otro sistema de permiso por álbum basado en los grupos y usuarios. ';
$lang['privacy_stp8'] = 'Selecciona una o varias fotos...';
$lang['privacy_stp7'] = '... O usted puede hacer que más tarde, aquí en el Administrador de lotes en el modo Global. <br> Esta es la página de <em> Fotos »Fotos actuales </em>, por lo que el filtro" Última importación "es establecido.';
$lang['privacy_stp6'] = 'Al cargar las imágenes, puede cambiar el nivel de privacidad de las fotos subidas allí mismo ...';
$lang['privacy_stp5'] = 'A continuación se explica cómo se puede gestionar los Grupos. <br> Esos permisos son sólo para el acceso a las fotos y a los álbumes, cuando se navega en la parte pública o para las aplicaciones externas. Más adelante veremos otras protecciones, pero vamos a practicar ahora!';
$lang['privacy_title14b'] = '';
$lang['privacy_stp14b'] = 'Aviso importante : los web-maestres y administradores no tienen "pase libre" cuando navegan en la parte publica, pero pueden acceder a todos los álbumes y fotos en la parte administración.';
