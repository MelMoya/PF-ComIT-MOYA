-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-07-2018 a las 20:50:19
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `libromania`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE IF NOT EXISTS `autor` (
  `idAutor` int(11) NOT NULL AUTO_INCREMENT,
  `nombreAutor` varchar(255) NOT NULL,
  `apellidoAutor` varchar(255) NOT NULL,
  PRIMARY KEY (`idAutor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`idAutor`, `nombreAutor`, `apellidoAutor`) VALUES
(1, 'Suzanne', 'Collins'),
(2, 'Louis', 'Lowry'),
(3, 'JK', 'Rowling'),
(4, 'Anonimo', ''),
(5, 'George R. R.', 'Martin'),
(6, 'Andrea', 'Compton'),
(7, 'Javier', 'Ruescas'),
(8, 'Maria', 'Herrejon'),
(9, 'Jedet', 'Sanchez'),
(10, 'Manuel', 'Carbajo'),
(11, 'Cassandra', 'Clare'),
(12, 'Sarah', 'Rees Brennan'),
(13, 'Maureen', 'Johnson'),
(14, 'James', 'Dashnner'),
(15, 'Stephanie', 'Garber'),
(16, 'Mark', 'Twain'),
(17, 'Sue', 'Towsend'),
(18, 'Susan E.', 'Hinton'),
(19, 'Jane', 'Austen'),
(20, 'Antoine de', 'Saint-Exupery');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores_por_libro`
--

CREATE TABLE IF NOT EXISTS `autores_por_libro` (
  `idLibro` int(11) NOT NULL,
  `idAutor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autores_por_libro`
--

INSERT INTO `autores_por_libro` (`idLibro`, `idAutor`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 1),
(5, 14),
(6, 5),
(7, 6),
(7, 7),
(7, 8),
(7, 9),
(7, 10),
(8, 11),
(8, 12),
(8, 13),
(9, 11),
(11, 15),
(10, 16),
(12, 17),
(13, 18),
(14, 19),
(15, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autorporusuario`
--

CREATE TABLE IF NOT EXISTS `autorporusuario` (
  `idUsuario` int(11) NOT NULL,
  `idAutor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE IF NOT EXISTS `genero` (
  `idGenero` int(11) NOT NULL AUTO_INCREMENT,
  `genero` varchar(255) NOT NULL,
  PRIMARY KEY (`idGenero`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`idGenero`, `genero`) VALUES
(1, 'Ciencia Ficcion'),
(2, 'Aventura'),
(3, 'Juvenil'),
(4, 'Distopico'),
(5, 'Fantasia'),
(6, 'Infantil'),
(7, 'Drama'),
(8, 'Ficcion'),
(9, 'Contemporaneo'),
(10, 'Comedia'),
(11, 'Romantico'),
(12, 'Novela Corta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generoporlibro`
--

CREATE TABLE IF NOT EXISTS `generoporlibro` (
  `idLibro` int(11) NOT NULL,
  `idGenero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `generoporlibro`
--

INSERT INTO `generoporlibro` (`idLibro`, `idGenero`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 4),
(3, 5),
(4, 5),
(4, 6),
(6, 5),
(7, 3),
(8, 7),
(5, 1),
(5, 4),
(9, 5),
(9, 7),
(11, 8),
(11, 9),
(10, 6),
(12, 10),
(13, 7),
(14, 10),
(14, 11),
(15, 12),
(11, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generoporusuario`
--

CREATE TABLE IF NOT EXISTS `generoporusuario` (
  `idUsuario` int(11) NOT NULL,
  `idGenero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE IF NOT EXISTS `libro` (
  `idLibro` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `anio` int(4) NOT NULL,
  `sipnosis` varchar(2500) NOT NULL,
  `foto` varchar(255) NOT NULL COMMENT 'ubicacionFoto',
  `calificacion` int(11) NOT NULL,
  PRIMARY KEY (`idLibro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`idLibro`, `titulo`, `anio`, `sipnosis`, `foto`, `calificacion`) VALUES
(1, 'Los Juegos del hambre', 2008, 'Katniss es una joven con 16 años que vive con su madre y su hermana menor en el distrito mas pobre de Panem, lo que queda de los antiguos Estados Unidos. Hace mucho tiempo, los distritos desafiaron a la capital, Capitolio, y perdieron la guerra. Parte de los terminos de la rendicion es que cada distrito debe enviar a un chico y a una chica a un evento televisivo anual llamado Los Juegos del Hambre. El terreno, las reglas y el nivel de participacion de la audiencia pueden variar de una edicion de los Juegos a otra, pero hay una constante: matar o morir. Cuando su hermanita es elegida por sorteo, Katniss toma su lugar.', 'losjuegosdelhambre.jpg', 10),
(2, 'El dador de recuerdos', 1993, 'La comunidad donde vive Jonas es idilica. Es un mundo sin conflicto, sin desigualdad, sin divorcios, sin desempleo, sin injusticias, sin dolor... pero tambien sin eleccion. A los ciudadanos se les asigna una pareja, dos hijos y un trabajo. Nadie hace preguntas. Todo el mundo obedece. Todos son iguales, excepto Jonas. Cuando el cumple los doce años, es seleccionado para desempeñar un trabajo muy especial y comienza a recibir lecciones de un misterioso anciano conocido como el Dador. Poco a poco, Jonas aprendera que el verdadero poder reside en los sentimientos. Sin embargo, cuando su propio poder sea puesto a prueba y deba salvar a quien ama, quiza no este preparado. ¿Es demasiado pronto? ¿O demasiado tarde? Lois Lowry es autora de mas de treinta libros para jovenes lectores. Ha recibido innumerables premios, entre ellos la prestigiosa medalla Newbery por El dador de recuerdos. Vive en Cambridge y en una antigua granja en Maine.', 'eldadorderecuerdos.jpg', 9),
(3, 'Harry Potter y el misterio del principe', 2005, 'Con dieciseis años cumplidos, Harry inicia el sexto curso en Hogwarts en medio de terribles acontecimientos que asolan Inglaterra. Elegido capitan del equipo de Quidditch, los entrenamientos, los examenes y las chicas ocupan todo su tiempo, pero la tranquilidad dura poco. A pesar de los ferreos controles de seguridad que protegen la escuela, dos alumnos son brutalmente atacados. Dumbledore sabe que se acerca el momento, anunciado por la Profecia, en que Harry y Voldemort se enfrentaran a muerte: «El unico con poder para vencer al Señor Tenebroso se acerca... Uno de los dos debe morir a manos del otro, pues ninguno de los dos podra vivir mientras siga el otro con vida.». El anciano director solicitará la ayuda de Harry y juntos emprenderan peligrosos viajes para intentar debilitar al enemigo, para lo cual el joven mago contara con la ayuda de un viejo libro de pociones perteneciente a un misterioso príncipe, alguien que se hace llamar Príncipe Mestizo.', 'hpyelmisteriodelprincipe.jpg', 0),
(4, 'Gregor de las tierras Altas', 2003, 'Gregor tiene 11 años y vive en la ciudad de Nueva York. Un caluroso dia de verano, el y su hermana pequeña caen accidentalmente por una reja de ventilacion en la lavanderia de su edificio. Y aqui empieza su aventura. De repente, llegaran a un mundo absolutamente tenebroso y desconocido para ellos: las Tierras Bajas, un mundo donde humanos de piel palida y translucida, conviven con escarabajos y murcielagos. Una sociedad amenazada por el conflicto y que señala a Gregor como aquel que la profecia apuntaba que vendria de las Tierras Altas para salvarlos del desastre. Nada parece casual, tampoco la extraña desaparición de su padre tiempo atras Una historia llena de fantasia, imaginación con una trama trepidante.', 'gregor.jpg', 0),
(5, 'El corredor del laberinto', 2009, 'Al despertar dentro de un oscuro elevador en movimiento, lo único que Thomas logra recordar es su nombre. No sabe quién es. Tampoco hacia dónde va. Pero no está solo: cuando la caja llega a su destino, las puertas se abren y se ve rodeado por un grupo de jóvenes. ''Bienvenido al Área, Novicio.'' El Área. Un espacio abierto cercado por muros gigantescos. Al igual que Thomas, ninguno de ellos sabe cómo ha llegado allí. Ni porqué. De lo que están seguros es de que cada mañana? las puertas de piedra del laberinto que los rodea se abren y por la noche, se cierran. Y que cada treinta días alguien nuevo es entregado por el elevador. Un hecho altera de forma radical la rutina del lugar: llega una chica, la primera enviada al Área. Y más sorprendente todavía es el mensaje que trae. Thomas será más importante de lo que imagina. Pero para eso deberá descubrir los sombríos secretos guardados en su mente. Por alguna razón, sabe que para lograrlo debe correr. Correr será la clave. O morirá.', 'elcorredordellaberinto.png', 8),
(6, 'Festin de cuervos', 2005, 'Canción de hielo y fuego: Libro cuarto La novela río más espectacular jamás escrita Mientras los vientos del otoño desnudan los árboles, las últimas cosechas se pudren en los pocos campos que no han sido devastados por la guerra, y por los ríos teñidos de rojo bajan cadáveres de todos los blasones y estirpes. Y aunque casi todo Poniente yace extenuado, en diversos rincones florecen nuevas e inquietantes intrigas que ansían nutrirse de los despojos de un reino moribundo. George R.R. Martin continúa sumando hordas de seguidores incondicionales mientras desgrana, con pulso firme y certero, una de las experiencias literarias más ambiciosas y apasionantes que se hayan propuesto nunca en el terreno de la fantasía. Festín de cuervos, como la calma que precede a la tempestad, desarrolla nuevos personajes y tramas de un retablo tenso y sobrecogedor. ', 'festindecuervos.jpg', 0),
(7, 'Y luego ganas tu', 2017, 'Uno de cada cinco niños en España sufrirá bullying a lo largo de su vida escolar.  Cinco influencers de éxito se unen en este libro para contar cinco historias de superación del acoso, algunas de ellas autobiográficas.  Todos conocemos historias de bullying.  Primero te ignoran,  Porque lo hemos visto. Lo hemos sufrido... ... o lo hemos provocado.  a continuación se ríen de ti,  Estas son solo cinco de ellas. Insultos. Rumores. Amenazas. Golpes.  después te atacan  Son reales. Pero se pueden prevenir. Se pueden erradicar. Porque nadie debería sufrir acoso por ser quien es.  #YLuegoGanasTú', 'yluegoganastu.jpg', 0),
(8, 'Cazadores de sombras: Las cronicas de Magnus Bane', 2014, '¡Descubre todos los secretos sobre uno de los personajes más carismáticos de Cazadores de sombras!  Ser Magnus Bane no es fácil. Como es un brujo, siempre tiene que solucionar los problemas de otros. Su vida ha sido larga, y ha tenido muchos amores. Y ha sabido estar en el lugar correcto en el momento adecuado (bueno, a veces no tanto): La Revolución Francesa, el gran apagón de la ciudad de Nueva York, la primera gran batalla entre Valentine y el Instituto de Nueva York... Pero ayudar a huir a María Antonieta no tiene comparación con amar a una vampira como Camille Belcourt o tener la primera cita con Alec Lightwood.  Para Magnus sería imposible contar todas y cada una de sus historias. Nadie le creería.  Aquí hay once relatos que descubren algunos secretos... que seguro él no querría que se hubiesen revelado. ', 'lascronicasdelmagnus.jpg', 0),
(9, 'Lady Midnight', 2016, 'Han pasado cinco años desde el final de Ciudad del Fuego Celestial. Los padres de la cazadora de sombras Emma Carstairs fueron asesinados y desde entonces su hija no ha dejado de buscar al culpable. Ella, junto a su parabatai, Julian, empiezan a investigar una demoníaca trama que se extiende por los lugares más glamurosos: desde Los Ángeles hasta las playas de Santa Mónica. Emma no puede evitar la poderosísima atracción que siente hacia su compañero, una relación que las leyes de los cazadores prohíben. Una auténtica caja de sorpresas que enlaza tramas, personajes y conexiones de los descendientes con sus ancestros.', 'ladymidnight.png', 0),
(10, 'Las aventuras de Tom Sawyer', 1876, 'Tom Sawyer es un chico que vive a orillas del río Misisipi con su tía Polly. Travieso, valiente, espabilado y con gran imaginación, lo que más le gusta es imitar a los personajes legendarios de sus libros, ya sean piratas o bandoleros. Junto a Huckleberry Finn, huérfano como él, y Joe Harper multiplican las aventuras, algunas para tratar de impresionar a su adorada Becky Thatcher, hasta que una noche son testigos de un asesinato…', 'tomsawyer.jpg', 0),
(11, 'Caraval', 2017, 'Recuerda, sólo es un juego… Scarlett Dragna nunca ha abandonado la pequeña isla en la que ella y su hermana Tella viven bajo la vigilancia de su estricto y cruel padre. Desde hace años Scar sueña con asistir a la celebración anual de Caraval, unos legendarios juegos que duran una semana y en los que la audiencia participa para ganar el Gran Premio. Caraval es magia, misterio y aventura. Y para Scarlett y su hermana representa la libertad y poder huir de su padre. Ahora que está a punto de casarse con un hombre al que nunca ha visto, Scar cree que su sueño nunca se cumplirá. Pero justo dos semanas antes de la boda recibe las tan ansiadas invitaciones a los juegos. Sin embargo, una vez allí nada sale como espera: Legend, el Maestro de Caraval, secuestra a Tella y Scarlett se verá obligada a entrar en un peligroso juego de amor, sueños, medias verdades y magia en el que nada es lo que parece. Real o no, sólo dispone de cinco noches para descifrar todas las pistas que conducen hacia su hermana, o ésta desaparecerá para siempre…', 'caraval.jpg', 0),
(12, 'El diario secreto de Adrian Mole', 1982, 'Adrian Mole tiene trece años y medio. También tiene un padre de cuarenta años que no sabe dónde está la parada del autobús, una madre indecisa entre su marido y un vecino, una abuela a la antigua usanza, un compañero que le extorsiona, un perro, una amiga que no parece derretirse por su amor y varias revistas de chicas bajo el colchón. Con un corrosivo sentido del humor, Sue Townsend transcribe las cáusticas impresiones de un adolescente en su diario secreto.', 'eldiariosecreto.jpg', 0),
(13, 'Rebeldes', 1967, 'Una novela tan impactante hoy como cuando se publicó hace cincuenta años. Una historia emocionante e inolvidable sobre chicos de barrio que luchan por salir adelante. Nadie dijo que la vida fuera fácil. Pero Ponyboy está bastante seguro de que tiene las cosas controladas. Sabe que puede contar con sus hermanos y con sus amigos, amigos de verdad, que harían cualquier cosa por él. Y en lo que respecta a los socs (una violenta banda de pijos rival de los greasers, como lo son él y sus amigos), siempre están dispuestos a armar bronca. Pero una noche alguien lleva todo esto demasiado lejos y el mundo de Ponyboy da un vuelco inesperado', 'rebeldes.jpg', 0),
(14, 'Orgullo y prejuicio', 1813, 'La gran casa de Netherfield Park tiene a un nuevo inquilino: el señor Bingley, un joven atractivo, rico y... soltero. La señora Bennet está encantada, pues su deseo más ferviente es encontrar un buen partido para sus cinco hijas. Pero a Elisabeth, la más rebelde de las hermanas, quien de verdad le interesa es el señor Darcy, un joven arrogante y misterioso...', 'orgulloyprejuicio.png', 0),
(15, 'El principito', 1943, 'El principito es un cuento poético que viene acompañado con ilustraciones hechas con acuarelas por el mismo Saint-Exupéry. En él, un piloto se encuentra perdido en el desierto del Sahara luego de que su avión sufriera una avería, pero para su sorpresa, es allí donde conoce a un pequeño príncipe que viene desde otro planeta. La historia tiene una temática filosófica, donde se incluyen críticas sociales dirigidas a la «extrañeza» con la que los adultos ven las cosas. Estas críticas a las cosas «importantes» y al mundo de los adultos van apareciendo en el libro a lo largo de la narración', 'elprincipito.png', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resenia`
--

CREATE TABLE IF NOT EXISTS `resenia` (
  `idResenia` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `idLibro` int(11) NOT NULL,
  `resenia` varchar(2500) DEFAULT NULL,
  `fecha` date NOT NULL,
  `valoracion` int(1) NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`idResenia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `resenia`
--

INSERT INTO `resenia` (`idResenia`, `idUsuario`, `idLibro`, `resenia`, `fecha`, `valoracion`, `estado`) VALUES
(1, 1, 1, 'Reseña Los Juegos del Hambre Usuario 1', '2018-07-15', 5, 1),
(2, 1, 2, 'Reseña el Dador de recuerdos Usuario 1', '2018-07-16', 3, 4),
(3, 4, 1, 'Reseña los Juegos del Hambre Usuario 4', '2018-07-14', 4, 2),
(4, 55, 2, 'Reseña El dador de Recuerdos Usuario 55', '2018-07-13', 5, 1),
(5, 4, 3, 'Reseña Harry Potter y el misterio del principe Usuario 4', '0000-00-00', 3, 1),
(7, 1, 7, 'Reseña Y luego ganas tu Usuario 1', '0000-00-00', 1, 4),
(8, 1, 4, 'Reseña Gregor de las tierras Altas Usuario 1', '0000-00-00', 2, 4),
(9, 1, 5, 'Reseña Maze Runner Usuario 1', '0000-00-00', 5, 1),
(10, 1, 6, 'Reseña Festin de Cuervos Usuario 1', '0000-00-00', 3, 2),
(11, 1, 8, 'Reseña Cazadores de Sombras: Las cronicas de Magnus Bane Usuario 1', '0000-00-00', 4, 1),
(12, 1, 3, 'Reseña Harry Potter y el misterio del principe Usuario 1', '0000-00-00', 5, 1),
(13, 4, 4, 'Reseña Gregor de las tierras altas Usuario 4', '0000-00-00', 1, 4),
(14, 15, 4, 'Reseña Gregor de las tierras altas Usuario 15', '0000-00-00', 2, 4),
(15, 58, 4, 'Reseña Gregor de las tierras altas Usuario 58', '0000-00-00', 3, 4),
(16, 53, 4, 'Reseña Gregor de las tierras altas Usuario 53', '0000-00-00', 4, 1),
(17, 25, 4, 'Reseña Gregor de las tierras altas Usuario 25', '0000-00-00', 3, 2),
(18, 51, 2, 'Reseña el Dador de recuerdos Usuario 51', '0000-00-00', 4, 1),
(19, 57, 2, 'Reseña el Dador de recuerdos Usuario 57', '0000-00-00', 5, 1),
(20, 1, 8, 'Reseña nro 2 Cazadores de Sombras: Las cronicas de Magnus Bane Usuario 1', '0000-00-00', 0, 1),
(21, 1, 11, NULL, '0000-00-00', 0, 3),
(22, 1, 14, NULL, '0000-00-00', 0, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE IF NOT EXISTS `seguimiento` (
  `idUsuario` int(11) NOT NULL,
  `idUsuarioSeguido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seguimiento`
--

INSERT INTO `seguimiento` (`idUsuario`, `idUsuarioSeguido`) VALUES
(1, 4),
(1, 5),
(1, 6),
(4, 1),
(10, 1),
(6, 4),
(9, 1),
(0, 0),
(7, 1),
(5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombreUsuario` varchar(255) NOT NULL,
  `nombreYApellido` varchar(255) NOT NULL,
  `generoUsuario` varchar(20) NOT NULL,
  `pais` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contrasenia` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL COMMENT 'ubicacion de la foto',
  `descripcion` longtext NOT NULL,
  `facebook` varchar(255) NOT NULL COMMENT 'link perfil facebook',
  `twitter` varchar(255) NOT NULL COMMENT 'link perfil twitter',
  `instagram` varchar(255) NOT NULL COMMENT 'link perfil instagram',
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombreUsuario`, `nombreYApellido`, `generoUsuario`, `pais`, `email`, `contrasenia`, `foto`, `descripcion`, `facebook`, `twitter`, `instagram`) VALUES
(1, 'MelMoya', 'Erika Melisa Moya', '1', '9', 'erikamelisamoya@libromania.com', '123', 'bob.jpg', 'Descripcion Usuario 1', 'eerika', 'erikamel', 'erikamoya'),
(4, 'Usuario 4', 'Nombre 4 Apellido 4', '1', '1', 'usuario4@libromania.com', '123', 'usuario.svg', 'Descripcion Usuario 4', 'LibromaniaU4', 'LibromaniaU4', 'LibromaniaU4'),
(5, 'Usuario 5', 'Nombre 5 Apellido 5', '', '', 'usuario5@libromania.com', '123', 'patricio.jpg', 'Descripcion Usuario 5', 'LibromaniaU5', 'LibromaniaU5', 'LibromaniaU5'),
(6, 'Usuario 6', 'Nombre 6 Apellido 6', '', '', 'usuario6@libromania.com', '123', 'gary.jpg', 'Descripcion Usuario 6', '', '', ''),
(7, 'Usuario 7', 'Nombre 7 Apellido 7', '', '', 'usuario7@libromania.com', 'holamel', 'calamardo.png', 'Descripcion Usuario 7', '', '', ''),
(8, 'Usuario 8', 'Nombre 8 Apellido 8', '', '', 'usuario8@libromania.com', '123', 'usuario.svg', 'Descripcion Usuario 8', '', '', ''),
(9, 'Usuario 9', 'Nombre 9 Apellido 9', '', '', 'usuario9@libromania.com', 'holachau', 'usuario.svg', 'Descripcion Usuario 9', '', '', ''),
(10, 'Usuario 10', 'Nombre 10 Apellido 10', '', '', 'usuario10@libromania.com', 'chau', 'usuario.svg', 'Descripcion Usuario 10', '', '', ''),
(11, 'Usuario 11', 'Nombre 11 Apellido 11', '', '', 'usuario11@libromania.com', 'holahola', 'usuario.svg', 'Descripcion Usuario 11', '', '', ''),
(12, 'Usuario 12', 'Nombre 12 Apellido 12', '', '', 'usuario12@libromania.com', 'mel', 'usuario.svg', 'Descripcion Usuario 12', '', '', ''),
(13, 'Usuario 13', 'Nombre 13 Apellido 13', '', '', 'usuario13@libromania.com', 'holachau', 'usuario.svg', 'Descripcion Usuario 13', '', '', ''),
(14, 'Usuario 14', 'Nombre 14 Apellido 14', '', '', 'usuario14@libromania.com', '123', 'usuario.svg', 'Descripcion Usuario 14', '', '', ''),
(15, 'Usuario 15', 'Nombre 15 Apellido 15', '', '', 'usuario15@libromania.com', 'chauhola', 'usuario.svg', 'Descripcion Usuario 15', '', '', ''),
(16, 'Usuario 16', 'Nombre 16 Apellido 16', '', '', 'usuario16@libromania.com', '123', 'usuario.svg', 'Descripcion Usuario 16', '', '', ''),
(17, 'Usuario 17', 'Nombre 17 Apellido 17', '', '', 'usuario17@libromania.com', '123', 'usuario.svg', 'Descripcion Usuario 17', '', '', ''),
(18, 'Usuario 18', 'Nombre 18 Apellido 18', '', '', 'usuario18@libromania.com', '123', 'usuario.svg', 'Descripcion Usuario 18', '', '', ''),
(25, 'Usuario 25', 'Nombre 25 Apellido 25', '', '', 'usuario25@libromania.com', '123', 'usuario.svg', 'Descripcion Usuario 25', '', '', ''),
(50, 'Usuario 50', 'Nombre 50 Apellido 50', '', '', 'usuario50@libromania.com', '123', 'usuario.svg', 'Descripcion Usuario 50', '', '', ''),
(51, 'Usuario 51', 'Nombre 51 Apellido 51', '', '', 'usuario51@libromania.com', '123', 'usuario.svg', 'Descripcion Usuario 51', '', '', ''),
(53, 'Usuario 53', 'Nombre 53 Apellido 53', '', '', 'usuario53@libromania.com', '123', 'usuario.svg', 'Descripcion Usuario 53', '', '', ''),
(54, 'Usuario 54', 'Nombre 54 Apellido 54', '', '', 'usuario54@libromania.com', '123', 'usuario.svg', 'Descripcion Usuario 54', '', '', ''),
(55, 'Usuario 55', 'Nombre 55 Apellido 55', '1', '9', 'usuario55@libromania.com', 'lll', 'descarga.jpg', 'Descripcion Usuario 55', '', '', ''),
(57, 'Usuario 57', 'Nombre 57 Apellido 57', '1', '1', 'usuario57@libromania.com', '123', 'descarga.jpg', 'Descripcion Usuario 57', '', '', ''),
(58, 'Usuario 58', 'Nombre 58 Apellido 58', '1', '1', 'usuario58@libromania.com', '123', 'usuario.svg', 'Descripcion Usuario 58', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
