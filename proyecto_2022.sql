-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-09-2023 a las 11:40:08
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Proyecto_2022`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `IDadmin` int(11) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Contrasenia` varchar(50) NOT NULL,
  `Nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`IDadmin`, `Usuario`, `Contrasenia`, `Nombre`) VALUES
(1, 'emiliaguerson@gmail.com', 'emilia2005', 'Emilia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `IDCat` int(11) NOT NULL,
  `DSCat` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`IDCat`, `DSCat`) VALUES
(1, 'Sintomas'),
(2, 'Ejercicios'),
(3, 'quees');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `IDCom` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`IDCom`, `Nombre`, `Mail`, `Comentario`) VALUES
(1, 'Emilia', 'siemprelosupe@gmail.com', 'JAJA, siempre lo supe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_padecimiento`
--

CREATE TABLE `detalles_padecimiento` (
  `IDgeneral` int(11) NOT NULL,
  `IDCat` int(11) DEFAULT NULL,
  `Texto` longtext,
  `IDpad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalles_padecimiento`
--

INSERT INTO `detalles_padecimiento` (`IDgeneral`, `IDCat`, `Texto`, `IDpad`) VALUES
(7, 2, '<p><strong>Ejercicios y tips para gente con el padecimiento</strong></p>\r\n\r\n<p><em>Ejercicios para el sobre pensamiento:</em></p>\r\n\r\n<ol>\r\n	<li>Una opci&oacute;n puede ser escribir qu&eacute; escribas en un papel los pensamientos negativos qu&eacute; ten&eacute;s y luego romper la hoja</li>\r\n	<li>Para calmarte un poco de sobrepensar + estar ansioso puedes meditar, esto te puede ayudar a calmar la ansiedad y relajarte un poco.</li>\r\n	<li>Distraerte. Hay muchas formas de hacerlo, ac&aacute; te damos algunas:</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>&nbsp;&nbsp;Salir a la calle</li>\r\n	<li>&nbsp;&nbsp;Escuchar m&uacute;sica</li>\r\n	<li>&nbsp;&nbsp;Hacer ejercicio</li>\r\n	<li>&nbsp;&nbsp;Hablar con alguien (amigxs, familiares, etc)</li>\r\n	<li>&nbsp;&nbsp;Hacer algo qu&eacute; te guste&nbsp;</li>\r\n</ul>\r\n\r\n<p><strong>&iexcl;Ojo!:</strong> No busques distraerte o relajarte con nada de lo siguiente: Sustancias psicoactivas como el alcohol, drogas, etc. Esto no te ayudar&aacute; en nada, solo lo empeora, y tampoco autolesionarse.</p>\r\n\r\n<p><em>Te damos alternativas para la autolesi&oacute;n:</em></p>\r\n\r\n<ul>\r\n	<li>Agarrar una hoja de papel y cortarla en pedacitos</li>\r\n	<li>Dibujar o escribir lo qu&eacute; sent&iacute;s</li>\r\n	<li>Tomar una almohada y gritar en ella</li>\r\n	<li>Similar a la segunda, escribir los pensamientos negativos y luego romper la hoja (simulando qu&eacute; destru&iacute;s esos pensamientos negativos)</li>\r\n	<li>Llama a alguien con quien te sientas bien, mejor amigx, familiar, etc</li>\r\n	<li>Pinta o dibuja lineas rojas donde quisieras hacerte da&ntilde;o</li>\r\n</ul>\r\n\r\n<p><strong>&iexcl;Ojo!: </strong>Estas <strong>no son soluciones definitivas</strong>, ayudan a reducir el impulso de autolesi&oacute;n pero no lo resuelven, es importante acudir a un profesional qu&eacute; pueda ayudarte.</p>\r\n\r\n<p><em>Qu&eacute; decir y que no</em></p>\r\n\r\n<p><em>NO decir esto:</em></p>\r\n\r\n<p><em>&ldquo;Ten&eacute;s mucho, hay gente qu&eacute; no tiene nada&rdquo; </em>A veces tener mucho en la vida no llena o arregla los problemas qu&eacute; causa el trastorno de ansiedad, estos comentarios agravan a la persona y hacen sentir culpa.<br />\r\n<br />\r\n<em>NO decir esto:</em></p>\r\n\r\n<p><em>&ldquo;No entiendo porque estas tan triste, no es para tanto&rdquo;</em> Para vos no es para tanto pero seguramente para esa persona si lo es, lo qu&eacute; se logra al decir este tipo de comentarios es minimizar y/o invalidar los sentimientos de esa persona. No a todos les afectan las cosas de la misma forma y menos al tener este padecimiento.</p>\r\n\r\n<p><em>SI decir esto:</em></p>\r\n\r\n<p><em>&ldquo;Se que puede ser dif&iacute;cil para vos, yo estoy ac&aacute; para acompa&ntilde;arte si quer&eacute;s&rdquo;</em> o <em>&ldquo;Se que puede ser dif&iacute;cil para vos, &iquest;te puedo ayudar en algo?&rdquo;</em> No minimizas lo que la persona siente, comprend&eacute;s lo dif&iacute;cil que puede ser para la misma y sabiendo lo dif&iacute;cil que puede ser le ofreces tu compa&ntilde;&iacute;a para que no la pase tan mal y tenga el apoyo de alguien.</p>\r\n\r\n<p><em>NO decir esto:</em></p>\r\n\r\n<p><em>&ldquo;No llores, no te sirve de nada&rdquo; </em>Dejemos de pensar qu&eacute; llorar es algo malo. Llorar le puede ayudar a desahogarse. En vez de decir este tipo de cosas es mejor acompa&ntilde;ar a la persona mientras llora, si es qu&eacute; la persona quiere, si quiere llorar solx est&aacute; muy bien tambi&eacute;n.</p>\r\n\r\n<p><em>SI decir esto:</em></p>\r\n\r\n<p><em>&ldquo;Si necesitas llorar hacelo&rdquo;</em>, <em>&ldquo;Si necesitas desahogarte hacelo, estoy aca para vos si me necesitas&rdquo; </em>o <em>&ldquo;No esta mal que llores, te sirve para liberar lo que sent&iacute;s&rdquo;</em> No lo haces sentir culpable por haber llorado/ estar llorando y le mostras que no tiene nada de malo hacerlo</p>\r\n\r\n<p><em>NO decir esto:</em></p>\r\n\r\n<p><em>&ldquo;&iquest;Vas a ir al psiquiatra? Eso es para locos y para problemas serios, no algo como la ansiedad&rdquo;</em>&nbsp; No no y no. Nunca decir esto, se invalida y minimiza totalmente lo qu&eacute; la persona est&aacute; pasando. Y adem&aacute;s el psiquiatra no es &ldquo;para locos&rdquo;, el psiquiatra te puede ayudar con lo qu&eacute; est&aacute;s pasando, &iexcl;No juzguemos!</p>\r\n\r\n<p><em>SI decir esto:</em></p>\r\n\r\n<p><em>&ldquo;Apoyo tu decisi&oacute;n , sabes que me ten&eacute;s ac&aacute; para apoyarte en lo que hagas&rdquo;</em> La persona se siente contenida y apoyada por lo que seguro se va a sentir bien y seguro con esa persona.</p>\r\n\r\n<p><em>NO decir esto:</em></p>\r\n\r\n<p><em>&ldquo;Estas exagerando mucho&rdquo; / &ldquo;Creo qu&eacute; estas exagerando&rdquo;</em> Volvemos a invalidar o minimizar lo qu&eacute; la persona siente, para la persona que padece trastorno de ansiedad algo qu&eacute; a vos te puede parecer &ldquo;una pavada&rdquo;, para esa persona le puede parecer un mont&oacute;n.<br />\r\n<br />\r\n<em>SI decir esto:</em></p>\r\n\r\n<p>&ldquo;Tal vez no pueda ayudarte pero si quer&eacute;s podemos salir a caminar a un lugar tranqui para despejarte&rdquo;, &ldquo;Lo que te pasa no es ninguna tonter&iacute;a para mi, me importa mucho tus preocupaciones y lo que sent&iacute;s&rdquo; o &ldquo;Tal vez no pueda entender por lo que estas pasando pero te acompa&ntilde;o&rdquo; No invalid&aacute;s ni minimizas, adem&aacute;s que muestras que te importa haciendo que no se sienta como una molestia</p>\r\n\r\n<p><em>NO decir esto:</em></p>\r\n\r\n<p><em>&ldquo;Relajate&rdquo;</em> la persona qu&eacute; est&aacute; pasando por un mal momento seguro quiere/intenta relajarse, esto le puede causar m&aacute;s presi&oacute;n o sentir qu&eacute; no lo est&aacute; logrando</p>\r\n\r\n<p><em>SI decir esto:</em></p>\r\n\r\n<p><em>&ldquo;Intenta respirar profundo, yo estoy ac&aacute; si necesit&aacute;s algo&rdquo;</em> o <em>&ldquo;&iquest;Puedo hacer algo para ayudarte? Si necesitas hablar yo voy a ser todo o&iacute;dos&rdquo;</em> la persona se sentir&aacute; apoyada y no sentir&aacute; presi&oacute;n, al menos no tanta como si le dijeras &ldquo;rel&aacute;jate&rdquo;&nbsp;</p>\r\n\r\n<p><strong>&iexcl;Ojo!:</strong> A veces al no saber qu&eacute; le pasa a la persona queremos saber porque nos preocupa mucho y es entendible, pero en lo posible evitar preguntar mucho<em> &ldquo;&iquest;Qu&eacute; te pasa?</em>&rdquo; ya qu&eacute; la persona se puede sentir presionada, a&uacute;n m&aacute;s angustiada, culpable e incluso qu&eacute; nunca te lo diga. Hay qu&eacute; saber darle su espacio. Pregunta una o dos veces como mucho, si te dice qu&eacute; no quiere respet&aacute; su decisi&oacute;n y no insistas. Podes decirle qu&eacute; cualquier cosa que necesite hablar estar&aacute;s ah&iacute; para esa persona.</p>\r\n', 3),
(8, 1, '<p><strong>S&iacute;ntomas de ansiedad en lxs nenxs</strong></p>\r\n\r\n<p>La ansiedad tiene muchos s&iacute;ntomas y puede lucir diferente de una/ nene/a a otro/a. Estas son algunas de las se&ntilde;ales m&aacute;s comunes que indican que podr&iacute;a tener un trastorno de ansiedad:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Problemas para dormir&nbsp;</li>\r\n	<li>Quejarse de dolores de est&oacute;mago u otros problemas f&iacute;sicos&nbsp;</li>\r\n	<li>Evitar ciertas situaciones&nbsp;</li>\r\n	<li>No separarse de sus pap&aacute;s o cuidadores&nbsp;</li>\r\n	<li>Dificultad para concentrarse en clase o estar muy inquieto&nbsp;</li>\r\n	<li>Hacer berrinches&nbsp;</li>\r\n</ul>\r\n\r\n<p><em>Los s&iacute;ntomas de la ansiedad por separaci&oacute;n incluyen:&nbsp;</em></p>\r\n\r\n<ul>\r\n	<li>Preocuparse de que los pap&aacute;s o cuidadores enfermen o mueran&nbsp;</li>\r\n	<li>Negarse a salir de casa o a ir al colegio</li>\r\n	<li>Miedo de dormir solo o de estar solo&nbsp;</li>\r\n	<li>Pesadillas sobre la separaci&oacute;n&nbsp;</li>\r\n	<li>S&iacute;ntomas f&iacute;sicos (como dolores de cabeza o est&oacute;mago) antes de una separaci&oacute;n prevista.&nbsp;</li>\r\n</ul>\r\n\r\n<p><em>Los s&iacute;ntomas del trastorno de ansiedad social en los ni&ntilde;os incluyen:&nbsp;</em></p>\r\n\r\n<ul>\r\n	<li>Evitar la mayor&iacute;a de las situaciones sociales o sentirse muy mal cuando tienen que participar en ellas&nbsp;</li>\r\n	<li>S&iacute;ntomas f&iacute;sicos como temblores, sudor o problemas para respirar en situaciones sociales&nbsp;</li>\r\n	<li>En los/as nenes/as chiquitos, berrinches y llantos en situaciones sociales&nbsp;</li>\r\n	<li>Miedo a que los dem&aacute;s perciban su ansiedad y los juzguen por ello&nbsp;&nbsp;</li>\r\n</ul>\r\n\r\n<p><em>Los s&iacute;ntomas del trastorno de ansiedad generalizada en los ni&ntilde;os incluyen:&nbsp;</em></p>\r\n\r\n<ul>\r\n	<li>Inquietud&nbsp;</li>\r\n	<li>Sensaci&oacute;n de nerviosismo&nbsp;</li>\r\n	<li>Sentirse cansado la mayor parte del tiempo&nbsp;</li>\r\n	<li>Problemas para concentrarse&nbsp;</li>\r\n	<li>Sensaci&oacute;n de ira&nbsp;</li>\r\n	<li>Problemas para dormir&nbsp;</li>\r\n</ul>\r\n\r\n<p><em>Los s&iacute;ntomas de trastorno de p&aacute;nico incluyen:</em></p>\r\n\r\n<ul>\r\n	<li>Miedo constante a sufrir m&aacute;s ataques de p&aacute;nico&nbsp;</li>\r\n	<li>Un gran cambio en el comportamiento normal despu&eacute;s de los ataques de p&aacute;nico, como por ejemplo evitar los lugares que les recuerdan un ataque</li>\r\n</ul>\r\n\r\n<p><em>Los s&iacute;ntomas de trastorno obsesivo compulsivo (TOC) incluyen:</em></p>\r\n\r\n<ul>\r\n	<li>Las obsesiones son los pensamientos no deseados que hacen que los/as nenes/as se sientan molestos/as y ansiosos/as.&nbsp;</li>\r\n	<li>Las compulsiones son reglas que los/as nenes/as sienten que deben seguir para deshacerse de su ansiedad.&nbsp;</li>\r\n</ul>\r\n\r\n<p><strong>S&iacute;ntomas de ansiedad en los adolescentes</strong></p>\r\n\r\n<p>Los s&iacute;ntomas de ansiedad var&iacute;an mucho, desde el aislamiento y la evitaci&oacute;n, hasta la irritabilidad y la agresividad. La ansiedad suele pasar desapercibida porque los adolescentes saben ocultar sus pensamientos y sentimientos. Pero estos son algunos de los comportamientos que pueden ser una se&ntilde;al de que un adolescente est&aacute; ansioso:</p>\r\n\r\n<ul>\r\n	<li>Miedos y preocupaciones recurrentes sobre partes rutinarias de la vida diaria</li>\r\n	<li>Irritabilidad</li>\r\n	<li>Problemas de concentraci&oacute;n</li>\r\n	<li>Autoconciencia extrema o sensibilidad a las cr&iacute;ticas</li>\r\n	<li>Retirada de actividades sociales</li>\r\n	<li>Evitaci&oacute;n de situaciones dif&iacute;ciles o nuevas</li>\r\n	<li>Quejas cr&oacute;nicas de dolores de est&oacute;mago o de cabeza</li>\r\n	<li>Calificaciones bajas o rechazo por la escuela</li>\r\n	<li>B&uacute;squeda reiterada de seguridad</li>\r\n	<li>Problemas de sue&ntilde;o</li>\r\n	<li>Consumo de sustancias</li>\r\n</ul>\r\n', 3),
(9, 3, '<p><strong>Empecemos explicando &iquest;Qu&eacute; es la ansiedad?</strong></p>\r\n\r\n<p>La ansiedad es una forma gen&eacute;rica de describir un sentimiento de preocupaci&oacute;n y/o malestar extremo. Sentir esto es totalmente normal, pero se transforma en un problema cuando dura mucho tiempo o impide hacer cosas como ver a tus amigos o incluso ir al colegio. Esto ser&iacute;a un trastorno de ansiedad. Hay distintos tipos de trastornos de ansiedad pero eso depende de cada persona, igualmente hay muchos s&iacute;ntomas qu&eacute; coinciden entre s&iacute;.&nbsp;</p>\r\n\r\n<p><em>Ansiedad en Ni&ntilde;os</em></p>\r\n\r\n<p><strong>Tipos de trastorno de ansiedad</strong></p>\r\n\r\n<p><em>Trastorno de ansiedad por separaci&oacute;n:</em></p>\r\n\r\n<p>En este tipo se suelen poner muy molestos al estar lejos de sus padres o cuidadores y esto va m&aacute;s all&aacute; de lo normal con los/as nenes/as de esa edad.</p>\r\n\r\n<p><em>Trastorno de ansiedad social:</em></p>\r\n\r\n<p>Se suelen sentir extremadamente intimidados frente a otras personas. Tambi&eacute;n suelen tener much&iacute;simo miedo de pasar verg&uuml;enza y por esto evitan situaciones sociales e incluso hablar en clase.</p>\r\n\r\n<p><em>Mutismo selectivo</em>:</p>\r\n\r\n<p>&nbsp;Los/as nenes/as con mutismo selectivo tienen dificultades para hablar en algunas situaciones, como en el colegio. Estos/as nenes/as no son solamente t&iacute;midos. Su ansiedad es tan grave que se sienten congelados y no son capaces de hablar.&nbsp;&nbsp;</p>\r\n\r\n<p><strong>&iexcl;Ojo!</strong> Los ni&ntilde;os que tienen&nbsp; problemas para hablar debido a un trastorno del habla o a una barrera ling&uuml;&iacute;stica no son diagnosticados con mutismo selectivo.&nbsp;</p>\r\n\r\n<p><em>Trastorno de ansiedad generalizada:&nbsp;</em></p>\r\n\r\n<p>Los/as nenes/as con trastorno de ansiedad generalizada se preocupan por muchas cosas de la vida cotidiana. Su preocupaci&oacute;n no es causada por nada en concreto y es lo suficientemente grave como para dificultar su vida.&nbsp;&nbsp;</p>\r\n\r\n<p>Para que el trastorno de ansiedad generalizada sea diagnosticado, los/as nenes/as deben experimentar los s&iacute;ntomas casi todos los d&iacute;as durante al menos seis meses.&nbsp;</p>\r\n\r\n<p><em>Trastorno de p&aacute;nico:&nbsp;</em></p>\r\n\r\n<p>Los/as nenes/as con trastorno de p&aacute;nico tienen ataques de p&aacute;nico constantes e inesperados. Los ataques de p&aacute;nico provocan sensaciones f&iacute;sicas que pueden hacer que los/as nenes/as piensen que se est&aacute;n muriendo o que est&aacute;n teniendo un ataque al coraz&oacute;n. Se les diagnostica un trastorno de p&aacute;nico cuando experimentan al menos un ataque de p&aacute;nico y otros sintomas (p&aacute;gina de s&iacute;ntomas)</p>\r\n\r\n<p><em>Trastorno obsesivo-compulsivo (TOC):</em></p>\r\n\r\n<p>Los/as nenes/as con TOC, (OCD, por sus siglas en ingl&eacute;s), tienen pensamientos y preocupaciones que les producen mucha ansiedad. Desarrollan reglas para s&iacute; mismos que sienten que deben seguir para controlar la ansiedad.&nbsp;&nbsp;</p>\r\n\r\n<p>Los/as nenes/as pueden ser diagnosticados con TOC cuando tienen obsesiones, compulsiones o ambas.&nbsp;</p>\r\n\r\n<p><em>Fobia espec&iacute;fica:</em>&nbsp;</p>\r\n\r\n<p>Los/as nenes/as con fobias espec&iacute;ficas tienen mucho miedo a una o varias cosas en concreto. Este miedo es algo que por lo general no se considera peligroso. Las fobias alteran la vida de los/as nenes/as cuando se esfuerzan por evitar las cosas que les dan miedo.&nbsp;</p>\r\n\r\n<p>Las fobias m&aacute;s comunes en los ni&ntilde;os son:&nbsp;&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Animales o bichos&nbsp;</li>\r\n	<li>Cosas del mundo natural, como el agua o las alturas&nbsp;</li>\r\n	<li>La sangre o los disparos&nbsp;</li>\r\n	<li>Situaciones espec&iacute;ficas, como las multitudes o los espacios reducidos&nbsp;</li>\r\n	<li>Otras, como los v&oacute;mitos, la asfixia o los sonidos fuertes&nbsp;</li>\r\n</ul>\r\n\r\n<p>&iquest;En qu&eacute; se diferencia la ansiedad en los adolescentes?</p>\r\n\r\n<p>Los adolescentes ansiosos son diferentes de los nenes/as ansiosos/as. En cada etapa del desarrollo, los/as nenes/as tienen preocupaciones e inestabilidades diferentes.</p>\r\n\r\n<p>Los nenes/as m&aacute;s chiquitos/as son propensos a sentir ansiedad por cosas externas, como animales o bichos, la oscuridad, monstruos abajo de la cama o que les pase algo malo a sus pap&aacute;s. Pero los adolescentes suelen estar m&aacute;s preocupados por ellos mismos, como por ejemplo: C&oacute;mo le va en el colegio, en el deporte, como son vistos por los dem&aacute;s, los cambios de su cuerpo, etc</p>\r\n\r\n<p>Algunos adolescentes ansiosos han tenido ansiedad durante muchos a&ntilde;os antes de llegar a la adolescencia. Tal vez los pap&aacute;s se hayan dado cuenta de eso, pero el nene/a &ldquo;funcionaba&rdquo; bien a pesar de su angustia, por lo que no se hizo nada al respecto. O el/la nene/a fue tratado, y las cosas mejoraron. Pero a medida que se espera m&aacute;s de ellos, en primaria y secundaria, y a medida que se centran m&aacute;s en sus compa&ntilde;eros, la ansiedad puede resurgir y volverse m&aacute;s grave a&uacute;n. Algunos adolescentes, que no eran ni&ntilde;os ansiosos, desarrollan tipos de ansiedad del inicio en la adolescencia, como la ansiedad social y los ataques de p&aacute;nico.<br />\r\n<br />\r\n<strong>&iquest;Qu&eacute; les puede provocar ansiedad a los adolescentes?</strong></p>\r\n\r\n<p><em>Su rendimiento:</em></p>\r\n\r\n<p>En la mayor&iacute;a, los qu&eacute; padecen ansiedad, la misma suele estar dirigida al perfeccionismo, o a la necesidad de dar lo mejor de s&iacute; mismos en la escuela. Incluso cuando los pap&aacute;s dicen que recomiendan a los adolescentes que no se estresen por las notas, ellos igual sienten mucha presi&oacute;n para obtener notas &ldquo;perfectas&rdquo;.</p>\r\n\r\n<p><em>C&oacute;mo son percibidos:</em></p>\r\n\r\n<p>Casi todos los adolescentes en alg&uacute;n momento se enfocan como los ven los dem&aacute;s, o sea, forma parte de la adolescencia pero si esto lo piensan demasiado podr&iacute;a ser trastorno de ansiedad. Se pueden llegar a preocupar mucho por como pueden ser vistos, qu&eacute; los puedan ver como rid&iacute;culos, in&uacute;tiles o qu&eacute; incluso tengan miedo de hacer algo vergonzoso.&nbsp;</p>\r\n\r\n<p><em>&ldquo;Como persona qu&eacute; padece esto puedo decir qu&eacute; es verdad, a mi me pasaba a veces qu&eacute; antes de salir de mi casa me ve&iacute;a bien y cuando llegaba al colegio sent&iacute;a qu&eacute; todos me iban/estaba viendo como una rid&iacute;cula cuando seguramente no era asi&rdquo; </em>Muriel-</p>\r\n\r\n<p><em>Sus cuerpos:</em></p>\r\n\r\n<p>En la adolescencia hay muchos cambios f&iacute;sicos lo qu&eacute; puede ser un malestar para muchos de los adolescentes. Si se desarrollan antes o despu&eacute;s qu&eacute; los chicos/as de su edad puede hacer qu&eacute; se sientan distintos o qu&eacute; no encajan o no son parte. Puede ser por varias cosas, les dejamos algunos ejemplos:</p>\r\n\r\n<ul>\r\n	<li>Desarrollo por la menstruaci&oacute;n (si te &ldquo;estilizas&rdquo;, si te crecen o no los pechos, etc)</li>\r\n	<li>Altura (Puede ser qu&eacute; algunos sienten qu&eacute; se ven como de 10 a&ntilde;os mientras otros/as tienen una altura como de 18)</li>\r\n	<li>Alguna parte del cuerpo qu&eacute; no es como la de &ldquo;los dem&aacute;s&rdquo; o qu&eacute; &ldquo;es fea&rdquo;&nbsp;</li>\r\n	<li>Sentir qu&eacute; tu f&iacute;sico no encaja por ser &ldquo;gorda&rdquo;,&nbsp; &ldquo;flaca&rdquo;, etc (Esto tambi&eacute;n puede afectar por algunos comentarios qu&eacute; creen &ldquo;chistosos&rdquo; o &ldquo;inofensivos&rdquo; y afectan, como por ejemplo: &ldquo;Estas muy flaca, &iquest;est&aacute;s comiendo?&rdquo;, &ldquo;Deber&iacute;as bajar de peso, tenes los brazos gordos&rdquo;)</li>\r\n	<li>Color de tez&nbsp;</li>\r\n</ul>\r\n\r\n<p>Lo qu&eacute; m&aacute;s suelen querer los adolescentes es sentirse aceptado por sus pares. Algunos suelen desarrollar una ansiedad extrema llamada trastorno dism&oacute;rfico corporal. Se obsesionan mucho con un defecto f&iacute;sico qu&eacute; tienen (puede ser real o imaginario) y esto les causa gran angustia. Nosotros les queremos decir a todos los adolescentes qu&eacute; est&eacute;n leyendo esto qu&eacute; no importa como sean, no hagan cosas para &ldquo;encajar&rdquo; con los dem&aacute;s, SEAN USTEDES MISMOS, son hermosos asi como son, todos tenemos imperfecciones pero eso nos hacer ser &uacute;nicos.&nbsp;</p>\r\n\r\n<p><strong>Tipos de ansiedad</strong></p>\r\n\r\n<p><em>Ansiedad y rechazo escolar:</em></p>\r\n\r\n<p>La escuela puede causar muchas cosas qu&eacute; generan ansiedad en un adolescente ya qu&eacute; este es un lugar donde la mayor parte del tiempo est&aacute;n ah&iacute;</p>\r\n\r\n<p>Muchas veces puede deberse a cosas como qu&eacute; un profesor los llame al azar y respondan mal y qu&eacute; se r&iacute;an de ellos por eso, o qu&eacute; queden mal frente a la clase y tambi&eacute;n se burlen.&nbsp;</p>\r\n\r\n<p><em>Ansiedad y consumo de sustancias:</em></p>\r\n\r\n<p>A veces los adolescentes ansiosos pueden llegar a consumir drogas con el objetivo o manera de enfrentar el malestar causado por la ansiedad. La qu&eacute; m&aacute;s se suele usar es la marihuana ya qu&eacute; esta suele dar sensaci&oacute;n de relajaci&oacute;n.&nbsp;</p>\r\n\r\n<p>Esto es terriblemente malo ya qu&eacute; el &ldquo;relajamiento&rdquo; dura muy poco, el adolescente sigue con ansiedad y encima se puede volver dependiente de la sustancia. Adem&aacute;s qu&eacute; estar&iacute;an automedicandose.</p>\r\n\r\n<p><em>Ansiedad y depresi&oacute;n:</em></p>\r\n\r\n<p>Suele ser frecuente qu&eacute; los adolescentes se sientan, adem&aacute;s de ansiosos, deprimidos. Esto seguramente sea por qu&eacute; la vida de alguien qu&eacute; padece trastorno de ansiedad puede resultar muy angustiante o muy limitante qu&eacute; te lleva a la depresi&oacute;n.</p>\r\n\r\n<p>Este tipo de &ldquo;capas&rdquo; de ansiedad y depresi&oacute;n es com&uacute;n y suele ser pasada por alto.&nbsp;</p>\r\n\r\n<p>Pero tambi&eacute;n es posible que la ansiedad y la depresi&oacute;n sean dos trastornos concurrentes distintos.</p>\r\n\r\n<p>El trastorno de ansiedad generalizada (TAG), est&aacute; especialmente vinculado a la depresi&oacute;n en etapas posteriores de la vida, hasta el punto de que tambi&eacute;n se considera un precursor de la depresi&oacute;n. El TAG es una ansiedad que no se desencadena por una cosa concreta (eso se llama fobia espec&iacute;fica), sino por una preocupaci&oacute;n persistente y excesiva por una serie de cosas cotidianas.</p>\r\n\r\n<p><strong>&iquest;Cu&aacute;ndo deber&iacute;a preocuparte?</strong></p>\r\n\r\n<p><em>La ansiedad grave no es realista:</em></p>\r\n\r\n<p>Despu&eacute;s de tener relaciones sexuales, a una chica le puede preocupar quedarse embarazada. A una chica con un trastorno obsesivo-compulsivo le puede preocupar la posibilidad de estar embarazada aunque nunca haya tenido relaciones sexuales.</p>\r\n\r\n<p><em>La ansiedad grave es desproporcionada:</em></p>\r\n\r\n<p>Un estudiante de &uacute;ltimo a&ntilde;o de secundaria puede tener estr&eacute;s antes de hacer los ex&aacute;menes de acceso a la universidad. Un/a nene/a con un trastorno de ansiedad generalizada puede pasar la noche en vela preocup&aacute;ndose por el mismo examen, aunque el/la nene/a solamente est&eacute; en quinto de primaria.</p>\r\n\r\n<p><em>La ansiedad grave es ser demasiado t&iacute;mido:</em></p>\r\n\r\n<p>Un/a nene/a puede ponerse nervioso hablar con los/as nenes/as de su clase. Alguien que sufre de un trastorno de ansiedad social puede evitar pedir comida en un restaurante por miedo a hacer el rid&iacute;culo.</p>\r\n\r\n<p><em>La ansiedad grave no es normalmente algo que se desee o que se pueda controlar:</em></p>\r\n\r\n<p>Un/a nene/a de jard&iacute;n de infantes puede llorar en la escuela porque extra&ntilde;a a su mam&aacute;. Un/a nene/a con un trastorno de ansiedad por separaci&oacute;n puede llorar en la escuela porque no puede evitar pensar que su madre va a morir si &eacute;l no est&aacute; con ella.</p>\r\n\r\n<p><em>La ansiedad grave no desaparece:</em></p>\r\n\r\n<p>Aunque los s&iacute;ntomas de ansiedad son comunes e incluso esperables despu&eacute;s de sufrir una mala experiencia, la mayor&iacute;a de los/as nenes/as se recuperan pasado un tiempo. Tres meses despu&eacute;s, una ni&ntilde;a con un trastorno por estr&eacute;s postraum&aacute;tico seguir&aacute; teniendo pesadillas.</p>\r\n\r\n<p><em>La ansiedad grave lleva a la evitaci&oacute;n:</em></p>\r\n\r\n<p>Una nena puede estar nerviosa antes de ir a una fiesta de cumplea&ntilde;os. Una nena con una&nbsp; fobia espec&iacute;fica a ruidos fuertes podr&iacute;a dejar por completo de ir a fiestas de cumplea&ntilde;os por temor a que explote un globo.</p>\r\n', 3),
(10, 2, '<p>Una forma de tratamiento es la hospitalizaci&oacute;n, y hay criterios para determinar si el ni&ntilde;o necesita ir al hospital.</p>\r\n\r\n<p>La terapia familiar es crucial en los trastornos alimentarios. La <em>participaci&oacute;n de la familia</em> en el tratamiento de los trastornos alimentarios ahora se reconoce como esencial y est&aacute; claro que para los ni&ntilde;os, adolescentes, y hasta los adultos j&oacute;venes, especialmente los que todav&iacute;a viven en casa, la familia debe participar en el tratamiento.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Qu&eacute; </strong><strong>no</strong><strong> decir</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;Estas muy flaco, te ves muy bien&rdquo; Esto afecta por lo general a este tipo de persona ya qu&eacute; se asocia estar &ldquo;flaco&rdquo; con estar &ldquo;saludable&rdquo; o incluso verte &ldquo;mucho mejor&rdquo;, incluso puede tambi&eacute;n afectar ese tipo de comentarios si no est&aacute; dirigido a esa persona (una persona de su entorno)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;Come mas, estas muy flaquita&rdquo; o &ldquo;Anorexia? Bulimia? Come m&aacute;s y se soluciona&rdquo; NO!!! Los TCA no es solo comer m&aacute;s y listo, es mucho m&aacute;s complejo qu&eacute; eso. Por eso se requiere ayuda psicol&oacute;gica e incluso psiqui&aacute;trica. Adem&aacute;s muchas veces en la bulimia por vomitar la comida se empiezan a lastimar partes internas del cuerpo a causa del &aacute;cido del est&oacute;mago, como el es&oacute;fago por ejemplo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;Si bajaras de peso estar&iacute;as m&aacute;s lindx&rdquo; Ser flacx no es equivalente a ser lindo, la belleza no se mide por cu&aacute;nto pesas, ya sos lindx como sos as&iacute;, no necesitas bajar de peso para &ldquo;ser m&aacute;s bellx&rdquo; se baja de peso o se sube de peso por cuestiones de salud y porque uno se siente bien consigo mismo.</p>\r\n', 4),
(11, 1, '<p><strong>S&iacute;ntomas de trastornos alimentarios en general</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>imagen del cuerpo distorsionada:</em></p>\r\n\r\n<p>Por m&aacute;s qu&eacute; este bien y los dem&aacute;s lo vean bien (o muy flaco) la persona tiene una imagen de su cuerpo totalmente diferente. Por m&aacute;s qu&eacute; los dem&aacute;s les insistan en qu&eacute; est&aacute;n bien ellos no cambiar&aacute;n esa idea, seguir&aacute;n pensando qu&eacute; &ldquo;est&aacute;n mal&rdquo; o &ldquo;estan gordos&rdquo;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Obsesi&oacute;n con la apariencia:</em></p>\r\n\r\n<p>Las personas con trastornos alimentarios suelen estar extremadamente obsesionados con su f&iacute;sico/apariencia y esto define &ldquo;su valor&rdquo; qu&eacute; se dan a ellos mismos. Sus pensamientos est&aacute;n por lo general en la comida y su apariencia.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Dietas extremas:</em></p>\r\n\r\n<p>Esto se ve en anorexia nerviosa. Suelen seguir dietas muy extremas y de forma estricta. Esto tiene probabilidades de pasarle a personas perfeccionistas y atletas.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Comer en exceso:</em></p>\r\n\r\n<p>Esto se ve en la bulimia nerviosa. Se suelen dar atracones, qu&eacute; por lo general son secretos. Y para &ldquo;compensar&rdquo; eso hacen cosas como auto-vomitar, ejercicio instant&aacute;neo luego del atrac&oacute;n e incluso tomar laxantes.&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>Se&ntilde;ales de </strong><strong>alerta</strong><strong> de TCA</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Se&ntilde;ales de anorexia:</em></p>\r\n\r\n<ul>\r\n	<li>Perder peso y estar peligrosamente delgado (por lo general no creen qu&eacute; no estan saludables y quieren seguir bajando de peso)</li>\r\n	<li>Obsesi&oacute;n con dietas y calor&iacute;as</li>\r\n	<li>Pasar varias horas haciendo mucho ejercicio</li>\r\n	<li>Saltarse comidas</li>\r\n	<li>Evitar comer en situaciones sociales</li>\r\n	<li>Menstruaci&oacute;n irregular, p&eacute;rdida del pelo y cansancio constante<br />\r\n	&nbsp;</li>\r\n</ul>\r\n\r\n<p><em>Se&ntilde;ales de bulimia:</em></p>\r\n\r\n<ul>\r\n	<li>Ejercicio excesivo</li>\r\n	<li>Tomar laxantes y/o pastillas para adelgazar</li>\r\n	<li>Ir al ba&ntilde;o de inmediato al terminar de comer</li>\r\n	<li>Pasar mucho tiempo en el ba&ntilde;o</li>\r\n	<li>Dolor de garganta, dientes descoloridos y falta de esmalte</li>\r\n	<li>Guardar comida en su habitaci&oacute;n</li>\r\n	<li>Ver qu&eacute; desaparece comida en la casa en grandes cantidades</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Trastorno por atrac&oacute;n:</em></p>\r\n\r\n<ul>\r\n	<li>Comer cantidades muy grandes de comida</li>\r\n	<li>Comer cuando no tienen hambre</li>\r\n	<li>Comer hasta qu&eacute; se sienten mal</li>\r\n	<li>Comer muy r&aacute;pido</li>\r\n	<li>Comer a &ldquo;escondidas&rdquo; (entre comillas porque a veces creen qu&eacute; no se dan cuenta de esto los dem&aacute;s)</li>\r\n	<li>Sentirse deprimido, ansioso y/o avergonzado por haber comido demasiado</li>\r\n	<li>Perder peso repetidamente y volver a ganarlo</li>\r\n</ul>\r\n', 4),
(12, 3, '<p>&iquest;Qu&eacute; es un Trastorno alimentario (TCA)?</p>\r\n\r\n<p>Un trastorno alimentario (TCA) es una obsesi&oacute;n con el peso y como qu&eacute; la preocupaci&oacute;n de un cuerpo perfecto. Es dif&iacute;cil notarlo ya qu&eacute; los adolescentes suelen preocuparse por su f&iacute;sico/apariencia.</p>\r\n\r\n<p>Por lo general estas personas suelen tener una imagen distorsionada de su cuerpo, por ejemplo, pensar qu&eacute; est&aacute;n muy gordos cuando est&aacute;n muy delgados. Adem&aacute;s su autoestima va en conjunto con su peso y apariencia.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tipos de trastornos alimentarios</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Anorexia nerviosa:</em></p>\r\n\r\n<p>Comen muy poco y est&aacute;n muy pendientes de ser perfectos. Bajan much&iacute;simo de peso.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Bulimia nerviosa:</em></p>\r\n\r\n<p>Suelen comer much&iacute;simo en poco tiempo, (un atrac&oacute;n) y luego se deshacen de todo lo qu&eacute; comieron, provocando el auto-v&oacute;mito, tomando laxantes e incluso hacer ejercicio al poco tiempo de haber comido, lo qu&eacute; tambi&eacute;n puede causar vomito. Pueden tener un peso normal o sobrepeso.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hay adolescentes qu&eacute; ocultan muy bien sus trastornos alimentarios, por eso hay qu&eacute; estar atentos a las se&ntilde;ales. En caso de qu&eacute; estos no sean tratados a tiempo pueden ser muy peligrosos.</p>\r\n', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padecimientos`
--

CREATE TABLE `padecimientos` (
  `IDpad` int(11) NOT NULL,
  `DSpad` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `padecimientos`
--

INSERT INTO `padecimientos` (`IDpad`, `DSpad`) VALUES
(2, ''),
(3, 'Trastorno de Ansiedad'),
(4, 'Trastorno alimentario (TCA)');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`IDadmin`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`IDCat`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`IDCom`);

--
-- Indices de la tabla `detalles_padecimiento`
--
ALTER TABLE `detalles_padecimiento`
  ADD PRIMARY KEY (`IDgeneral`),
  ADD KEY `cat` (`IDCat`),
  ADD KEY `pad` (`IDpad`);

--
-- Indices de la tabla `padecimientos`
--
ALTER TABLE `padecimientos`
  ADD PRIMARY KEY (`IDpad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `IDadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `IDCat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `IDCom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `detalles_padecimiento`
--
ALTER TABLE `detalles_padecimiento`
  MODIFY `IDgeneral` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `padecimientos`
--
ALTER TABLE `padecimientos`
  MODIFY `IDpad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalles_padecimiento`
--
ALTER TABLE `detalles_padecimiento`
  ADD CONSTRAINT `cat` FOREIGN KEY (`IDCat`) REFERENCES `categoria` (`IDCat`),
  ADD CONSTRAINT `pad` FOREIGN KEY (`IDpad`) REFERENCES `padecimientos` (`IDpad`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
