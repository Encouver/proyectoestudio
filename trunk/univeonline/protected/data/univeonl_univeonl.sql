--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: intereses; Type: TABLE; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE TABLE intereses (
    id integer NOT NULL,
    arquitectura boolean,
    arte boolean,
    "cienciasEconomicas" boolean,
    "cienciasJuridicasyPoliticas" boolean,
    educacion boolean,
    farmacia boolean,
    filosofia boolean,
    geografia boolean,
    historia boolean,
    ingenieria boolean,
    letras boolean,
    medicina boolean,
    psicologia boolean
);


ALTER TABLE public.intereses OWNER TO univeonl_univeonl;

--
-- Name: TABLE intereses; Type: COMMENT; Schema: public; Owner: univeonl_univeonl
--

COMMENT ON TABLE intereses IS 'Tabla donde se reflejan los interes de los usuarios del sistema univeonl_univeonline.';


--
-- Name: intereses_id_seq; Type: SEQUENCE; Schema: public; Owner: univeonl_univeonl
--

CREATE SEQUENCE intereses_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.intereses_id_seq OWNER TO univeonl_univeonl;

--
-- Name: intereses_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE intereses_id_seq OWNED BY intereses.id;


--
-- Name: maillist; Type: TABLE; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE TABLE maillist (
    id integer NOT NULL,
    email character varying(255) NOT NULL
);


ALTER TABLE public.maillist OWNER TO univeonl_univeonl;

--
-- Name: maillist_id_seq; Type: SEQUENCE; Schema: public; Owner: univeonl_univeonl
--

CREATE SEQUENCE maillist_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.maillist_id_seq OWNER TO univeonl_univeonl;

--
-- Name: maillist_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE maillist_id_seq OWNED BY maillist.id;


--
-- Name: redessociales; Type: TABLE; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE TABLE redessociales (
    id integer NOT NULL,
    redessociales text
);


ALTER TABLE public.redessociales OWNER TO univeonl_univeonl;

--
-- Name: TABLE redessociales; Type: COMMENT; Schema: public; Owner: univeonl_univeonl
--

COMMENT ON TABLE redessociales IS 'Tabla donde estaran las redes sociales de cada usuario';


--
-- Name: redessociales_id_seq; Type: SEQUENCE; Schema: public; Owner: univeonl_univeonl
--

CREATE SEQUENCE redessociales_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.redessociales_id_seq OWNER TO univeonl_univeonl;

--
-- Name: redessociales_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE redessociales_id_seq OWNED BY redessociales.id;


--
-- Name: roles; Type: TABLE; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE TABLE roles (
    id integer NOT NULL,
    nombre character varying(255) NOT NULL,
    descripcion character varying(255) NOT NULL,
    "listaAtributos" text NOT NULL,
    "nombreTabla" character varying(255) NOT NULL
);


ALTER TABLE public.roles OWNER TO univeonl_univeonl;

--
-- Name: TABLE roles; Type: COMMENT; Schema: public; Owner: univeonl_univeonl
--

COMMENT ON TABLE roles IS 'Tabla donde estaran todos los roles del sistema univeonl_univeonline.';


--
-- Name: roles_id_seq; Type: SEQUENCE; Schema: public; Owner: univeonl_univeonl
--

CREATE SEQUENCE roles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.roles_id_seq OWNER TO univeonl_univeonl;

--
-- Name: roles_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE roles_id_seq OWNED BY roles.id;


--
-- Name: rolusuario; Type: TABLE; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE TABLE rolusuario (
    id integer NOT NULL,
    "idUsuario" integer NOT NULL,
    "idRol" integer NOT NULL
);


ALTER TABLE public.rolusuario OWNER TO univeonl_univeonl;

--
-- Name: TABLE rolusuario; Type: COMMENT; Schema: public; Owner: univeonl_univeonl
--

COMMENT ON TABLE rolusuario IS 'Tabla que contiene identificadores de tablas para lograr hacer la relacion entre roles y usuarios.';


--
-- Name: rolusuario_id_seq; Type: SEQUENCE; Schema: public; Owner: univeonl_univeonl
--

CREATE SEQUENCE rolusuario_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.rolusuario_id_seq OWNER TO univeonl_univeonl;

--
-- Name: rolusuario_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE rolusuario_id_seq OWNED BY rolusuario.id;


--
-- Name: user_social_login; Type: TABLE; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE TABLE user_social_login (
    social_id integer NOT NULL,
    userid integer NOT NULL,
    signature character varying(240) NOT NULL,
    service character varying(240) NOT NULL,
    "profileUrl" character varying(240) NOT NULL
);


ALTER TABLE public.user_social_login OWNER TO univeonl_univeonl;

--
-- Name: user_social_login_social_id_seq; Type: SEQUENCE; Schema: public; Owner: univeonl_univeonl
--

CREATE SEQUENCE user_social_login_social_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_social_login_social_id_seq OWNER TO univeonl_univeonl;

--
-- Name: user_social_login_social_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE user_social_login_social_id_seq OWNED BY user_social_login.social_id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE TABLE users (
    id integer NOT NULL,
    user_id character varying(240) NOT NULL,
    password character varying(240) NOT NULL
);


ALTER TABLE public.users OWNER TO univeonl_univeonl;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: univeonl_univeonl
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO univeonl_univeonl;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE TABLE usuarios (
    id integer NOT NULL,
    "idRedSocial" integer,
    nombre character varying(255) NOT NULL,
    apellido character varying(255) NOT NULL,
    clave character varying(255) NOT NULL,
    correo character varying(255) NOT NULL,
    "fechaNac" date,
    "recibirInformacion" boolean DEFAULT false,
    pais character varying(255),
    "fotoBinario" bytea,
    "tipoArchivoFoto" character varying(100),
    "tamanoFoto" integer,
    sesion character varying(255),
    "inicioSesion" character varying(255),
    ubicacion character varying(255),
    sexo character varying(200),
    interes integer,
    ocupacion character varying(255),
    organizacion character varying(255)
);


ALTER TABLE public.usuarios OWNER TO univeonl_univeonl;

--
-- Name: TABLE usuarios; Type: COMMENT; Schema: public; Owner: univeonl_univeonl
--

COMMENT ON TABLE usuarios IS 'Tabla que contiene toda la informacion de los usuarios del sistema.';


--
-- Name: usuarios_id_seq; Type: SEQUENCE; Schema: public; Owner: univeonl_univeonl
--

CREATE SEQUENCE usuarios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuarios_id_seq OWNER TO univeonl_univeonl;

--
-- Name: usuarios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE usuarios_id_seq OWNED BY usuarios.id;


--
-- Name: usuarios_tamañoFoto_seq; Type: SEQUENCE; Schema: public; Owner: univeonl_univeonl
--

CREATE SEQUENCE "usuarios_tamañoFoto_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."usuarios_tamañoFoto_seq" OWNER TO univeonl_univeonl;

--
-- Name: usuarios_tamañoFoto_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE "usuarios_tamañoFoto_seq" OWNED BY usuarios."tamanoFoto";


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY intereses ALTER COLUMN id SET DEFAULT nextval('intereses_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY maillist ALTER COLUMN id SET DEFAULT nextval('maillist_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY redessociales ALTER COLUMN id SET DEFAULT nextval('redessociales_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY roles ALTER COLUMN id SET DEFAULT nextval('roles_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY rolusuario ALTER COLUMN id SET DEFAULT nextval('rolusuario_id_seq'::regclass);


--
-- Name: social_id; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY user_social_login ALTER COLUMN social_id SET DEFAULT nextval('user_social_login_social_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY usuarios ALTER COLUMN id SET DEFAULT nextval('usuarios_id_seq'::regclass);


--
-- Name: tamanoFoto; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY usuarios ALTER COLUMN "tamanoFoto" SET DEFAULT nextval('"usuarios_tamañoFoto_seq"'::regclass);


--
-- Data for Name: intereses; Type: TABLE DATA; Schema: public; Owner: univeonl_univeonl
--



--
-- Name: intereses_id_seq; Type: SEQUENCE SET; Schema: public; Owner: univeonl_univeonl
--

SELECT pg_catalog.setval('intereses_id_seq', 1, false);


--
-- Data for Name: maillist; Type: TABLE DATA; Schema: public; Owner: univeonl_univeonl
--

INSERT INTO maillist VALUES (2, 'test@test.com');
INSERT INTO maillist VALUES (3, 'manturakabchi@gmail.com');
INSERT INTO maillist VALUES (4, 'thereze@gmail.com');
INSERT INTO maillist VALUES (5, 'test@post.com');
INSERT INTO maillist VALUES (6, 'test4@post.com');
INSERT INTO maillist VALUES (9, 'asdasdasd@gmail.com');
INSERT INTO maillist VALUES (11, 'hola@gmail.com');
INSERT INTO maillist VALUES (12, 'manturak@gmail.com');
INSERT INTO maillist VALUES (13, 'prueba@gmail.com');
INSERT INTO maillist VALUES (14, 'correo@Gmail.com');
INSERT INTO maillist VALUES (15, 'edgar@gmail.com');
INSERT INTO maillist VALUES (16, 'dsfg@sdf.com');
INSERT INTO maillist VALUES (17, 'edgarleal@gmail.com');
INSERT INTO maillist VALUES (18, 'edgar.leal0@gmail.com');
INSERT INTO maillist VALUES (19, 'edgarleal@outlook.com');


--
-- Name: maillist_id_seq; Type: SEQUENCE SET; Schema: public; Owner: univeonl_univeonl
--

SELECT pg_catalog.setval('maillist_id_seq', 19, true);


--
-- Data for Name: redessociales; Type: TABLE DATA; Schema: public; Owner: univeonl_univeonl
--



--
-- Name: redessociales_id_seq; Type: SEQUENCE SET; Schema: public; Owner: univeonl_univeonl
--

SELECT pg_catalog.setval('redessociales_id_seq', 1, false);


--
-- Data for Name: roles; Type: TABLE DATA; Schema: public; Owner: univeonl_univeonl
--



--
-- Name: roles_id_seq; Type: SEQUENCE SET; Schema: public; Owner: univeonl_univeonl
--

SELECT pg_catalog.setval('roles_id_seq', 1, false);


--
-- Data for Name: rolusuario; Type: TABLE DATA; Schema: public; Owner: univeonl_univeonl
--



--
-- Name: rolusuario_id_seq; Type: SEQUENCE SET; Schema: public; Owner: univeonl_univeonl
--

SELECT pg_catalog.setval('rolusuario_id_seq', 1, false);


--
-- Data for Name: user_social_login; Type: TABLE DATA; Schema: public; Owner: univeonl_univeonl
--



--
-- Name: user_social_login_social_id_seq; Type: SEQUENCE SET; Schema: public; Owner: univeonl_univeonl
--

SELECT pg_catalog.setval('user_social_login_social_id_seq', 1, false);


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: univeonl_univeonl
--



--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: univeonl_univeonl
--

SELECT pg_catalog.setval('users_id_seq', 1, false);


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: univeonl_univeonl
--

INSERT INTO usuarios VALUES (4, NULL, 'asd', 'asd', 'e10adc3949ba59abbe56e057f20f883e', 'sfd2@gmail.com', NULL, false, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO usuarios VALUES (5, NULL, 'asd', 'asd', 'e10adc3949ba59abbe56e057f20f883e', 'probando2@gmail.com', NULL, false, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO usuarios VALUES (6, NULL, 'asd', 'asd', 'e10adc3949ba59abbe56e057f20f883e', 'probando32@gmail.com', NULL, false, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL);


--
-- Name: usuarios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: univeonl_univeonl
--

SELECT pg_catalog.setval('usuarios_id_seq', 6, true);


--
-- Name: usuarios_tamañoFoto_seq; Type: SEQUENCE SET; Schema: public; Owner: univeonl_univeonl
--

SELECT pg_catalog.setval('"usuarios_tamañoFoto_seq"', 6, true);


--
-- Name: correo_unico; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT correo_unico UNIQUE (correo);


--
-- Name: id_primary; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY maillist
    ADD CONSTRAINT id_primary PRIMARY KEY (id);


--
-- Name: intereses_pkey; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY intereses
    ADD CONSTRAINT intereses_pkey PRIMARY KEY (id);


--
-- Name: list_mail_unique; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY maillist
    ADD CONSTRAINT list_mail_unique UNIQUE (email);


--
-- Name: primary_id; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT primary_id PRIMARY KEY (id);


--
-- Name: redessociales_pkey; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY redessociales
    ADD CONSTRAINT redessociales_pkey PRIMARY KEY (id);


--
-- Name: roles_nombre_key; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY roles
    ADD CONSTRAINT roles_nombre_key UNIQUE (nombre);


--
-- Name: roles_pkey; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY roles
    ADD CONSTRAINT roles_pkey PRIMARY KEY (id);


--
-- Name: rolusuario_pkey; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY rolusuario
    ADD CONSTRAINT rolusuario_pkey PRIMARY KEY (id);


--
-- Name: socialid_primary; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY user_social_login
    ADD CONSTRAINT socialid_primary PRIMARY KEY (social_id);


--
-- Name: user_contraint; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT user_contraint UNIQUE (user_id);


--
-- Name: usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id);


--
-- Name: rolusuario_idRol_fkey; Type: FK CONSTRAINT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY rolusuario
    ADD CONSTRAINT "rolusuario_idRol_fkey" FOREIGN KEY ("idRol") REFERENCES roles(id) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- Name: rolusuario_idUsuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY rolusuario
    ADD CONSTRAINT "rolusuario_idUsuario_fkey" FOREIGN KEY ("idUsuario") REFERENCES usuarios(id) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- Name: usuarios_idRedSocial_fkey; Type: FK CONSTRAINT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT "usuarios_idRedSocial_fkey" FOREIGN KEY ("idRedSocial") REFERENCES redessociales(id) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- Name: usuarios_interes_fkey; Type: FK CONSTRAINT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_interes_fkey FOREIGN KEY (interes) REFERENCES intereses(id) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

