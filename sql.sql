create table usuarios(
id tinyint PRIMARY KEY,
usuario varchar(100),
correo varchar(100),
contrasenia varchar(100),
tema varchar(100)
);




INSERT INTO usuarios (id, usuario, correo, contrasenia, tema) VALUES
(1, 'admin', 'admin@test.com', '1234', 'dark'),
(2, 'victor', 'victor@test.com', '1234', 'light'),
(3, 'prueba', 'prueba@test.com', '1234', 'blue'),
(4, 'invitado', 'invitado@test.com', '0000', 'light'),
(5, 'dev', 'dev@test.com', 'admin', 'dark');