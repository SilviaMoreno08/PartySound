-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2016 a las 01:07:33
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `partysound`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista`
--

CREATE TABLE IF NOT EXISTS `artista` (
  `Id_Artista` int(11) NOT NULL,
  `Id_Grupo` int(11) NOT NULL,
  `Nom_Artista` varchar(45) NOT NULL,
  `Ced_Artista` varchar(10) NOT NULL,
  `Rol_Artista` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `artista`
--

INSERT INTO `artista` (`Id_Artista`, `Id_Grupo`, `Nom_Artista`, `Ced_Artista`, `Rol_Artista`) VALUES
(1, 1, 'Gabriel Alfonso Spath', '15646845', 'Batería'),
(2, 1, 'Sommer Alfonso Mestra', '15646942', 'Voz'),
(3, 1, 'Néstor Alfonso Bula', '15646985', 'Guitarra'),
(4, 1, 'Jose Mario Barguil', '1064976324', 'Guitarra'),
(5, 1, 'Brunel Jacob Hernandez', '78030499', 'Bajo'),
(6, 4, 'Elias Alean', '1069484950', 'Vocalista'),
(7, 4, 'Elider Brango', '1000969794', 'Baterista'),
(8, 4, 'Jorge Caldera', '1067935176', 'Bajista'),
(9, 4, 'Darwin Florez', '15646077', 'Guitarrista'),
(10, 4, 'Moises Alean', '1069468323', 'Guitarrista'),
(11, 5, 'Kelly Johana Castellanos Padilla', '1050958980', 'Cantante / Guitarrista'),
(12, 5, 'Jasseth Salgado Cortés', '1064984485', 'Percusionista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `texto` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `id_grupo`, `texto`) VALUES
(1, 1, 'Muy buen grupo'),
(2, 1, 'Me encantan sus canciones originales!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE IF NOT EXISTS `grupo` (
  `Id_Grupo` int(11) NOT NULL,
  `Nom_Grupo` varchar(30) NOT NULL,
  `Genero` varchar(30) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Facebook` varchar(50) NOT NULL,
  `Youtube` varchar(70) NOT NULL,
  `SoundCloud` varchar(50) NOT NULL,
  `Instagram` varchar(30) NOT NULL,
  `Twitter` varchar(30) NOT NULL,
  `Trayectoria` varchar(1500) NOT NULL,
  `Foto` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`Id_Grupo`, `Nom_Grupo`, `Genero`, `Correo`, `Telefono`, `Facebook`, `Youtube`, `SoundCloud`, `Instagram`, `Twitter`, `Trayectoria`, `Foto`) VALUES
(1, 'DopplerBand', 'Pop-Rock', 'silvia.moreno08@gmail.com', '', '@dopplerbandinfo', 'https://www.youtube.com/channel/UCtoCA0Qfirtg8Ez65Coprrw', 'https://soundcloud.com/dooplerband', '', '', 'Doppler band es una banda de electro-pop, creada en el año 2006 en Cereté-Córdoba, Colombia, con el nombre de audiocian, el cual fue un proyecto instrumental, con secuencias, que buscaba generar sensaciones a partir de sonidos y atmosferas naturales.\r\nCon el tiempo el proyecto creció y dio paso a la entrada de músicos amigos, que habían participado juntos en proyectos anteriores, con lo cual, se le dio un nuevo enfoque, logrando así crear la primera formación de la banda.\r\nLa banda desde sus inicios buscó generar atmosferas y sonidos cálidos tomando elementos del rock, el pop y música electrónica. El sonido actual de la banda ha sido influenciado por bandas como, Radiohead, Filter y Soda stereo.\r\nEn el año 2011 fue emitido en el programa de Señal Colombia “el parlante amarillo”, el video de la canción “Paranoia”. ese mismo año algunos temas de la banda fueron rotados en el programa “sin nafta”, de la emisora Rk de la ciudad de Quilmes-Provincia de Buenos Aires, Argentina.\r\nDoppler realizó trabajos de mezcla y masterisacìón para su demo en Audiorec studio, De la ciudad de Buenos Aires, Argentina.', 'doopler_band_3.jpg'),
(3, 'Chay', 'Urbano', 'silvia.moreno08@gmail.com', '', '', '', '', '', '', 'Chay en "La High" es un cantautor de música Urbana Alternativa de la ciudad de Montería con énfasis en el Reggaetón.\r\nEn sus inicios Chay (Elvis Barboza) empezó como solista en el año 2008 trabajando con su productor "LF" con quien ha trabajado siempre, y gracias al cual ha sido participe de diversas canciones a nivel nacional e internacional, ya sea cantando o componiendo los temas.\r\nEn el año 2010 se dio a conocer como dúo en la agrupación de música urbana “Xavier y Chay” donde lograron robar la admiración de los jóvenes monterianos en diferentes escenarios musicales.\r\nPara el 2016, Chay renueva su carrera como solista con una nueva propuesta más fresca, manteniendo el estilo único que le caracteriza. Ahora se encuentra en la realización de su primer álbum como solista, llamado “T.M.H.”  En esta nueva producción hace el debut con su sencillo “Despacio” con el que espera seguir llenando de emoción a todos sus seguidores.  ', 'Chay.jpg'),
(4, 'Evidencia', 'Rapcore (Rock, Rap, Reggae)', 'davidgrafico.7@gmail.com', '3004641075', 'https://www.facebook.com/evidenciaviva', 'https://www.youtube.com/channel/UCj2T-5cYczmq74oMz4JlbhA', '', 'evidencia', '', 'Nace en Sahagún Córdoba después de ir a los colegios apoyando un proyecto que fomentaba lso valores en los estudiantes. En la actualidad la banda esta radicada en Montería Córdoba..\r\nSomos una banda enfocada en hacer musica que llegue al corazón de la juventuud y que encuentren en nuestra música valores que les ayuden a mejorar su estilo de vida de una forma que puedan encontrar sentido y propósito a sus vidas, queremos ser un referente al que ellos puedan imitar.\r\nhacemos Rapcore (Rap, Regae y Rock) es un estilo que llegamos a el aplicando los gustos de cada uno de los integrantes.\r\nEs importante ver la aceptación que la banda ha tenido en la juventud en los eventos que hemos estado, esto nos anima a seguir, sabemos que vale la pena luchar por nuestros sueños y de esta manera afectar positivamente a nuestra juventud. En la actualidad nos encontramos en proceso de producción de nuestro primer sencillo', 'evidencia_lista.jpg'),
(5, 'Gaby Castellanos', 'Pop - Rock', 'kello1207@hotmail.es', '3015083977', 'Gaby Catellanos- Artista', 'Gaby Catellanos', 'Gaby Catellanos', '_gabisota_', '@kello_kello', 'GABY es una artista Colombiana, su música se enmarca en el género Pop pero es muy influenciado por diferentes vertientes musicales.\r\n\r\nSus canciones narran historias, son mensajes de vida y hacen un llamado a la reflexión sobre las cosas sencillas y su gran valor. \r\n\r\nCon su voz GABY nos envuelve en un sonido exquisito, su estilo logra transportarnos a un espacio diferente. \r\n\r\nGABY nace como una revelación de la música latinoamericana, destilando sonidos que envuelven, permeando cada día más audiencia, éste año nos trae además su primer sencillo: Dónde Quedan.', 'gaby.png'),
(6, 'Indian Sommer', 'Folk Rock', 'indiansommerband@gmail.com', '3145637950', 'Indiansommer', 'Indiansommer band', 'IndianSommer', '@indiansommerband', '@indiansommer', 'Sommer Mestra Pernet es un poeta y cantautor de Indice folk psicodélico que asume la personalidad de IndianSommer para dar a conocer su imaginación y la creatividad musical de su propio universo, en donde los poemas hechos canción estallan colorida y trágicamente.\r\nSu discografia se compone de 4 proyectcos musicales a la fecha, ne los cuales expone diversos cantos que evocan un estilo de vida sencillo inspirado en los viajes de aventura, las causas poéticas, ambientales y la admiración por la naturaleza humana.\r\nSu propuesta estética consiste en el desarreglo de los sentidos y la reivindiación de la poeía a través de la música, incluyendo aires de música popular colombiana, el indie Rock británico, el folk norteamericano y las músicas del mundo.\r\nLa cuota psicodélica la aportan las podrosas imágenes y metáforas de sus letras, la mezcla catártica- experimental de ritmos y formas de expresión que van desde lo raizal hasta lo cosmico.\r\nel proyecto IndianSommer cuentacon múltiples presentaciones y participaciones a lo largo del territorio nacional. A la fecha cuenta con una banda establecida INDIANSOMMER BAND, varios proyectos musicales, colaboraciones y videoclips. IndianSommer ha apoyado causas sociales y ambientales de las comunidades indigenas a través de su música. actualmente se encuentra en la grabación y realización de un nuevo proyecto titulado "HUMANA VOLUNTAD".', 'indiansommer.png'),
(7, 'Leiner y Livinson de la Ossa', 'Vallenato', 'leinerdelaossa@gmail.com', '3017271787', 'leinerdelaossa', 'https://www.youtube.com/user/livinsondelaossa', '', '@leinerdelaossa', '@leinerdelaossa', 'Graba su primer Sencillo musical al lado de su hermano Livinson de la Ossa en el acordeon, participando en esta oportunidad con dos canciones de su autoria tituladas con sangre de Rey y me mueve el piso y otra de la autoría de su padre titulada La Colegiala canciones las cuales vendrán incluidas en su primer trabajo discográfico con el cual buscarán llevar a lo más alto el legado de su padre defendiendo así su dinastía.', 'LyL1.png'),
(8, 'Mario y Boris V.', 'Champeta urbana', 'silvia.moreno08@gmail.com', '3003487979', 'MARIO Y BORIS V ', 'MARIO Y BORIS V', '', '@MARIOYBORISV ', ' @MARIOYBORISV ', 'Mario y Boris se conocen en el 2014 pero fue en 2015 cuando deciden formar el proyecto musical de Champeta Urbana, de entonces empiezan a trabajar conjuntamente a componer letras y melodías que trasmitan que llegan al corazón\r\n\r\nLa organización musical MARIO & BORIS son una organización musical los cuales cuentan con la capacidad de interpretar el género musical de la champeta tradicional y la champeta urbana en vivo en todo tipo de eventos musicales con el fin de llevar alegría y goce al público en general de todas las edades.\r\nSu primer trabajo musical fue lanzado en diciembre del año 2015 titulado Embustera, una producción con sonidos únicos y contemporáneos que le dieron un nuevo color a la champeta; el segundo trabajo y mas importante hasta el momento, el cual los catapultó a grandes escenarios fue el El idiota una producción al lado del gran interprete de acordeón José Díaz Oyola, en el cual se mezclaron ritmos del Caribe colombiano y el sonido majestuoso del acordeón con el cual crearon una identidad diferente a los demás interpretes del genero urbano . También participaron en la producción independiente del Volumen #1 de la Fania Records al interpretar la canción "La Unica", una canción con un sonido bastante peculiar propio de su estilo. Cabe resaltar que "MARIO Y BORIS V." han sido participes de producciones en conjunto con grandes interpretes de la champeta como lo son PAPO MAN Y PRIX 06 aportando su talento en la producción y en el canto.', 'mario_y_boris.jpg'),
(9, 'Santo & Vimak', 'Fusion', 'silvia.moreno08@gmail.com', '', 'santo y vimak', 'https://www.youtube.com/channel/UCa1VKPELHCC0Rff0jNnByOg', '', 'santo_vimak', '@santoandvimak', 'Somos el grupo musical urbano Santo & Vimak. Somos un grupo que tiene un año de preparación y desde el mes de Agosto del 2016 tendrá su primer lanzamiento como artistas de música nueva fusión en vivo y el gran lanzamiento de nuestra primera canción.', 'Captura2.PNG'),
(10, 'Violence', 'Thrash metal', 'Carl_shot@hotmail.com', '301 5424711', 'violencemetalband/', 'chuckbert21/', '', '', '', 'Violence es una banda formada a partir de los restos de Hidden Hatred donde se interpretaba un Death Metal crudo y técnico a partir de las composiciones de Dorian Grinder (compositor Monteriano de Metal y sus sub-generos) en el cual Alejandro Restrepo se encargaba de la bateria, Deimer Herrera de la voz, Carlos Nieto del bajo y Dorian Grinder la guitarra; banda la cual tuvo acogida a través de circuitos "Underground" del metal. Se hicieron varias presentaciones a nivel local y se logró mostrar el trabajo en Caucasia tocando al lado de bandas de la costa norte del país.\r\n\r\nA partir de la ruptura de la banda por cuestiones de tiempo y de influencias musicales, Alejandro y Carlos deciden empezar un nuevo proyecto de Metal en donde más gente se pudiera adherir a él con un mensaje contundente a través de letras y la musica misma, pero con la misma y las causales de cosas tales como la violencia, buscando ser un espejo de la sociedad donde el oyente y el asistente a un concierto pueda hacer catarsis a través de la energía que se desborda en cada presentación. Allí nació Violence.', 'ViolenceBS-Exterior.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`Id_Artista`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`Id_Grupo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artista`
--
ALTER TABLE `artista`
  MODIFY `Id_Artista` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `Id_Grupo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
