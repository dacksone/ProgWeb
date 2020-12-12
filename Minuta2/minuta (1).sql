-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2020 a las 11:19:52
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `minuta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(11) NOT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `detalle` varchar(100) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `hora_creacion` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `nombre`, `detalle`, `fecha_creacion`, `hora_creacion`) VALUES
(10, 'IT66666', 'Departamento de tecnologia6', '2020-12-12', '07:37:31'),
(11, 'IT6', 'Departamento de tecnologia6', '2020-12-12', '07:37:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `id_documento` bigint(20) NOT NULL,
  `binario` longblob DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`id_documento`, `binario`, `nombre`, `tipo`) VALUES
(1, 0x89504e470d0a1a0a0000000d4948445200000080000000800806000000c33e61cb0000000473424954080808087c086488000000097048597300000ec400000ec401952b0e1b00000d1849444154789ced9d6b8c55d515c7ff6b9ffb983bdccb73181115848e4840de6d6d6de240049cca5051c00f6d53134d5a9bd4a42f4dd494b6267e6962abdf6c5362d336b5758ae1315a302a9aa64d534b0169a93cb4083a28030acc6566ee9d7bf6ea878170ef3e8732f7dcb5ef83d9bf6ff7b5f7beebacb3d73a6bffcf3e80c3e170381c0e87c3e170381c0e87c3e170381c8e2b19aaf5006ac1bc55ab26a8426c1cc7541a00a8a0b33a5638b3efc5173fa9f5d8aacd15ef004b3a3b5b7cd5b48c41cb48f322106e24a20961df65e64fc038c08a761378a7a70777eeeaee3e59ed3157932bd201da3a3a926312e975c4f81a40b711c18bd20e337c805f65c2afcfe5b37f3cbc7d7b4e7aacb5e68a7280259d9dcd43483da088bf47445325db66e61ecdf4641c03cfeceaeeee976cbb965c310e307ff5dabb15a99f1130cd663f0c1cd5acbff3d6b64d2fd8eca75a34bc032cb8f3cef1c4f18d04bafb52df61660d602f403b01fd16b13a08426fce471600921ed2604c66d2b300351fe06500161091ba649be0179886eedfbb65cb69f97f553d1ada01e6ad5ab3c4f3e25d04cc08fd02633f081b7305fc6eff4b5d1f96d3f69c3bd64f49c6f06530ee07614e68f3cc477c5d58b7efc5cdbb220cbf2e68580758d0b9762591da4484b4f91933f631e1877bb7766d06c01576450bbeb47e0d317e4c8479217d6599f5dabddd9b5eaeb09f9ad0900e307ff5da4e05b5890889e2f7993100d61bf6f49d7c0a6fbc5110edb4bd3db630d3f26d907a9c0829a3dfbc865efbd6b64ddda27d568186738005abeffe02917a9940cdc5ef33f3db7e81eed9f7a7ae7d36fb9ff7c5f5f3bc183f4f44b34bfa07f733eb957bb7bdf0179bfd4bd3500e30a773fdb404f13f896852f1fbccfcfad9015af3ee2b5d67aa318e99cbd78f1b9be2cd44b4d418c7a93cd3e2fddd5d47ab310e092e99e5d61dededb138f17321077f477628db51ad830f00efbed275263b94ed60e61dc5ef13d1a424f173686f8f556b2c95d2300eb0706ccbc38ae896e2f734f39b7af0ccda5a54e80e6fdf9ed38367d66ae6374b3e20ba65e1d89687ab3d9ea8580b01f357ac18e3a5c6dfa67d7d55c58d1112a4e827c5719f9935319ed0ccc72a6ebf0214d1754c78acb866c0e07ed6fc3018f94adb27a84f3ea281978e5baa3e5a71806b3fb73ed532197f26c2121bed8f369879f79e9effde8c5dbb86a4dbb612025a5af45277f0e520a2450ba7ce5c6aa36d2b0ec0a42a9ff61d2530708d8d76ad64ab0a9c298e2e31624c4ee8b2dbf19970225feaa3194f231dabb4b867876c81d0e7978eb735a1e151f9e3edcd2b14f8a20d876d2a8f15076070868a1ca0add9c7cf6fea2bbb9d574fc5f1f8e1d24aef93b3b3b831ed573c461b1cc87af8fabfc796bcf7c0b47edc36a9fcd0fd8d7f65f0f6b98b87872d39809d1000940cb6d98b76c6feed74bce4f5f5291fb3eaf4e003c0acb48feb53a5e333ffc348316dc6508d330310a992d3368a033080dd674b8dd733a8b0fcefe391508c59cd3e6e9f9cc7ed2d797835aa67fa0cec3899c08ede040ef67bc86b0a9c51bbcfc6c128ff72cbb459d8a297045509012955be037c9423f41af13f7f3e26167cc29e3e853d7d716c3b91c4133764313151ddbce0e33ce1b14369eccffe7f13f6e6153eca11a624cb1b9f69b3860a01a4cd10507e1bc70646f6a3fdd9181e3a9046aefc1c3332390d3c74e0f207ff024747f85f8a09cc00465895c2520e4015e700c706476eb4c3fd31fce17853d97d44e5f9e34d38dc3ff2c9f3fd32fecb05cc938635358e0398f12a15c1014e17825193355e83f6d769c683cc7caaf8b36d2792e02a44016660eb89a4f11e9fd28c07a1fd75acf19af99bb0ff72394c9b35540e00a30ed01c2107e8338cc68ca3d942df1d17167e16ad5a7f141eb65cf8fc445ea1374f682d33d6964b6f3e589b20a2fbf66cedda0a006d1d1ddde978e620d14571aaf95f4642d0660d940340e03230a74b8d46e08325ab7e5eee1fe66fcc228c0dc2fbb83896c3dbb7e79870a0f8d3013f8203046dd6480e501aafa2848029c9d2ac8e418be7afb8abf5c26bade37799bf9918b79f0986f5513c96f92bee6a252e5d0799da54feb88236b39303542704447080c56387b0b1487a478489aa29f6e682ce75bf05700d11be52fcfd99a90226c4ed270113e28c99a902de1db8683a227a6a41e7bacf00f88088be4a8489c5bf593cb6fc4a60d0660d1202da3a3a92445452c1698ed0cbdcb48fb9e9525d2711a629458f2a45f7125189f3de7375f53421665f4414538aee558a1e2d8efd0030375dc0dc08d54bd36644146febe848867f3b3ae20ea062b180a746090144c02333cf21e35d7efabc75421e1d2d156b2f464c474b1eb74eb87c7f194fe39199e740112a9561360bb36da5883b4013a502838cba16705d4ae3e9397d98d6147e061118ab5b73d8d016cdc851210236b49dc3ead61ce812b71d4c6bf2f1f49c2cae4b45cb4bc26c1666db4a11cf013474c633fc2aaa0300c0a79a359e9d7f16af9f8ae3afa713f830a790548c1b9a7dac6cc9a36d4c6d1687e20af8fe8c7eac69cde1e593091ceaf790d38429498d5bc6e7b174d2106215386598cd3474fd3b8057e00c8c05b0286b01c5c40858de3284e52de28aa88a691be3a36dcc8078bb6121c0b390088a870056a5152b0546b261b4c7f54392866d578c695b09e493407881225035e3f3950251300ca882d7003300b1510492ee61f460daceb4ad04e20e40469c8ab20ee01826b824dc000e0063d5aa922b80d14ee0e4b1b022281f020ced5a9422906398c092b0055da0fd10e01c20324161680384007390ce01a2d39039001195aa815c121819330760c3b6125898014c3da0740fa387c065a0054d80fc0ca05d0890a22143000ce992bb0a884e88ed1ac001cc3a80cb012213b01d37401dc0d4aeb910109da0ed1a200730b56b2e04442768bb3acf01a6b7b73705f480ee2a2032c11b44293ebdbd5df4162851074866328118e57280e88489699399a9a27980a8038469d65c08884e98ed9aa8201a06441d204cb3e692c0e884d9ce13d6058a3a409866cd394074c285a1b289a0a8289435d2c54fe7f1c0485894831de95778e6580a4722dc7f2fc1d4a4c683d3fb31a3d9ce2d69091ab6a15f74971543561626ea00a61e3065590fb8e1501aef45b8f75e8ae3390f3f3a9cc6afe69db5f23f89866d982dbab954098b42444380a959b37909e833d093abbddcf878ced4eeca12dc28423604885ad05cacb07905e01170e755b57f8a5be7e41c94c5592ea80aaae71c002a536c0bdb35806f4d1fc0e7c70f0d9f8555ce358980e94d1a3765641f4c6212d00408cbc26473802a0b4209c0a7c7d93d00b526706f405de7006e1d401cd386d2ba40ab0ee06a0095635b14221a024cd9b2ed1c80193832a06a5607b83aa931dbf2d6b50d9503983b84da5e09dcf87e137ed393bafc172d72ef3503b8efda416bed072e03eb390448ec0f385234035d1f566f73c84bf1fbe34df02d4e74b6f70b94ada404b688b567190230a90abb825d8e89716d75b36adbdbc5c96e1041c6f6701673800bdbb4fcf448337a066b53119c9e1a5e0bb049308f92958509ef1052f9f670e5303bede317111e44d14804c228d7710e00b83b83a509b1617de600617a405708aa9c601228ab0b14738009a9d6a018a4f68b750d4f980dc36c1d15b11cc0f7fc4c0ca517adb64340cfa0c2b31f34e1bd1a1682be396d20b0afb1246136f43d3f03a057a27d31076015bc73d57608f8c1a131653db8419a03e7800f06157e39cf5e221aae0b944b04c526e96aeb017d46cd4ac0c51c19f0aa5a0802c24fb6a8883980a955f3c04858cc013c025656717fe04bb1c2f253cb126ad896c548ea02c5e64fa539536c8994c7f61e4d7e9e8766f4e3b3e386d093abcd4c707dcac7cde3ecee5e4a189e49fb4a74817221402e0720a44bd4405538268a8065938600d4df16b292a43c465fd1a2a3a4345c6c92769b43d9c33c99946031483007a8ae16603411d82d4ccb6902accd00ae0a2887b9a826a90a929b0102f704380790223003082681620e60c6253703c8115006bb1c6074115406d7610e1054044bb5ec083c41ac1e7300f3e9d62e079023b867b09c2c4cae58cb2e07b045c09682c250390730f4802e0790c3e6767182cb35ee32d016369f242eb95ee70a4196080a43eb2c0738af072c59587233801c21fb05c6a47481220e10aa077497816284d9524a1728e200e7356a25b80745c81166cb309b4741c401dcf67076b1a90b1471001db238e11c408ed0fd0249e651f2325701142f294c78c488bb7b02c488ab619b16e3091583440e93a9516b56f6f580a30942d803a4ea2904f8ae08641bd3a652ba40991920f0b45089561dc59836356d1e151107706a20fbd87a8aa8880390795bb8ab018863da94741d2581e60ce0d601e409a882ea29090c6c0fe71c409ce07e81759403b8a560fb046d5a573380a1067245207182f706d4530ee0f480d6096e1829a30910b939944125dbc4effc388ec3fdae1820c931632b3c12928589380019dbc3bdd31fc33b76b7cf1bf5d4551d0040edb7ec1c7590489c954a02b748b4e3183904de2cd18e4808d8dd44df5d94d3ff61c64290cd27e838c0acc1d8b5a7aff757b51e8ac3e170381c0e87c3e16844fe071fc7386b8699c8820000000049454e44ae426082, 'articulo', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_registro` bigint(20) NOT NULL,
  `id_seguimiento` int(11) DEFAULT NULL,
  `id_usuario` bigint(20) DEFAULT NULL,
  `id_documento` bigint(20) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `hora_creacion` time DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_registro`, `id_seguimiento`, `id_usuario`, `id_documento`, `fecha_creacion`, `hora_creacion`, `descripcion`, `comentarios`) VALUES
(1, 1, 1, 1, '2020-12-12', '10:21:15', 'descrpcionimagen1', 'comentarios iamgen1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `detalle` varchar(100) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `hora_creacion` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre`, `detalle`, `fecha_creacion`, `hora_creacion`) VALUES
(2, 'rol2', 'detallerol2', '2020-12-12', '09:00:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE `seguimiento` (
  `id_seguimiento` int(11) NOT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `detalle` varchar(100) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `hora_creacion` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `seguimiento`
--

INSERT INTO `seguimiento` (`id_seguimiento`, `nombre`, `detalle`, `fecha_creacion`, `hora_creacion`) VALUES
(1, 'recorrido', 'Seguimiento recorrido', '2020-12-12', '09:58:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` bigint(20) NOT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `id_departamento` int(11) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `apellido` varchar(150) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `hora_creacion` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_rol`, `id_departamento`, `usuario`, `contrasena`, `nombre`, `apellido`, `estado`, `fecha_creacion`, `hora_creacion`) VALUES
(1, 2, 10, 'Administrador', 'Admin', 'Administrador', 'Administrador', NULL, '2020-12-04', '23:58:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_registro`),
  ADD KEY `id_seguimiento` (`id_seguimiento`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_documento` (`id_documento`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  ADD PRIMARY KEY (`id_seguimiento`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `id_departamento` (`id_departamento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `id_documento` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_registro` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  MODIFY `id_seguimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`id_seguimiento`) REFERENCES `seguimiento` (`id_seguimiento`),
  ADD CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `registro_ibfk_3` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id_documento`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
