--
-- PostgreSQL database dump
--

-- Dumped from database version 9.2.4
-- Dumped by pg_dump version 9.2.4
-- Started on 2013-09-18 19:54:02

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 185 (class 3079 OID 11727)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2026 (class 0 OID 0)
-- Dependencies: 185
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 168 (class 1259 OID 33330)
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
-- TOC entry 2027 (class 0 OID 0)
-- Dependencies: 168
-- Name: TABLE intereses; Type: COMMENT; Schema: public; Owner: univeonl_univeonl
--

COMMENT ON TABLE intereses IS 'Tabla donde se reflejan los interes de los usuarios del sistema univeonl_univeonline.';


--
-- TOC entry 169 (class 1259 OID 33333)
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
-- TOC entry 2028 (class 0 OID 0)
-- Dependencies: 169
-- Name: intereses_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE intereses_id_seq OWNED BY intereses.id;


--
-- TOC entry 170 (class 1259 OID 33335)
-- Name: maillist; Type: TABLE; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE TABLE maillist (
    id integer NOT NULL,
    email character varying(255) NOT NULL
);


ALTER TABLE public.maillist OWNER TO univeonl_univeonl;

--
-- TOC entry 171 (class 1259 OID 33338)
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
-- TOC entry 2029 (class 0 OID 0)
-- Dependencies: 171
-- Name: maillist_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE maillist_id_seq OWNED BY maillist.id;


--
-- TOC entry 172 (class 1259 OID 33340)
-- Name: redessociales; Type: TABLE; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE TABLE redessociales (
    id integer NOT NULL,
    redessociales text
);


ALTER TABLE public.redessociales OWNER TO univeonl_univeonl;

--
-- TOC entry 2030 (class 0 OID 0)
-- Dependencies: 172
-- Name: TABLE redessociales; Type: COMMENT; Schema: public; Owner: univeonl_univeonl
--

COMMENT ON TABLE redessociales IS 'Tabla donde estaran las redes sociales de cada usuario';


--
-- TOC entry 173 (class 1259 OID 33346)
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
-- TOC entry 2031 (class 0 OID 0)
-- Dependencies: 173
-- Name: redessociales_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE redessociales_id_seq OWNED BY redessociales.id;


--
-- TOC entry 174 (class 1259 OID 33348)
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
-- TOC entry 2032 (class 0 OID 0)
-- Dependencies: 174
-- Name: TABLE roles; Type: COMMENT; Schema: public; Owner: univeonl_univeonl
--

COMMENT ON TABLE roles IS 'Tabla donde estaran todos los roles del sistema univeonl_univeonline.';


--
-- TOC entry 175 (class 1259 OID 33354)
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
-- TOC entry 2033 (class 0 OID 0)
-- Dependencies: 175
-- Name: roles_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE roles_id_seq OWNED BY roles.id;


--
-- TOC entry 176 (class 1259 OID 33356)
-- Name: rolusuario; Type: TABLE; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE TABLE rolusuario (
    id integer NOT NULL,
    "idUsuario" integer NOT NULL,
    "idRol" integer NOT NULL
);


ALTER TABLE public.rolusuario OWNER TO univeonl_univeonl;

--
-- TOC entry 2034 (class 0 OID 0)
-- Dependencies: 176
-- Name: TABLE rolusuario; Type: COMMENT; Schema: public; Owner: univeonl_univeonl
--

COMMENT ON TABLE rolusuario IS 'Tabla que contiene identificadores de tablas para lograr hacer la relacion entre roles y usuarios.';


--
-- TOC entry 177 (class 1259 OID 33359)
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
-- TOC entry 2035 (class 0 OID 0)
-- Dependencies: 177
-- Name: rolusuario_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE rolusuario_id_seq OWNED BY rolusuario.id;


--
-- TOC entry 178 (class 1259 OID 33361)
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
-- TOC entry 179 (class 1259 OID 33367)
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
-- TOC entry 2036 (class 0 OID 0)
-- Dependencies: 179
-- Name: user_social_login_social_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE user_social_login_social_id_seq OWNED BY user_social_login.social_id;


--
-- TOC entry 180 (class 1259 OID 33369)
-- Name: users; Type: TABLE; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE TABLE users (
    id integer NOT NULL,
    user_id character varying(240) NOT NULL,
    password character varying(240) NOT NULL
);


ALTER TABLE public.users OWNER TO univeonl_univeonl;

--
-- TOC entry 181 (class 1259 OID 33372)
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
-- TOC entry 2037 (class 0 OID 0)
-- Dependencies: 181
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- TOC entry 182 (class 1259 OID 33374)
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
-- TOC entry 2038 (class 0 OID 0)
-- Dependencies: 182
-- Name: TABLE usuarios; Type: COMMENT; Schema: public; Owner: univeonl_univeonl
--

COMMENT ON TABLE usuarios IS 'Tabla que contiene toda la informacion de los usuarios del sistema.';


--
-- TOC entry 183 (class 1259 OID 33381)
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
-- TOC entry 2039 (class 0 OID 0)
-- Dependencies: 183
-- Name: usuarios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE usuarios_id_seq OWNED BY usuarios.id;


--
-- TOC entry 184 (class 1259 OID 33383)
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
-- TOC entry 2040 (class 0 OID 0)
-- Dependencies: 184
-- Name: usuarios_tamañoFoto_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE "usuarios_tamañoFoto_seq" OWNED BY usuarios."tamanoFoto";


--
-- TOC entry 1964 (class 2604 OID 33385)
-- Name: id; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY intereses ALTER COLUMN id SET DEFAULT nextval('intereses_id_seq'::regclass);


--
-- TOC entry 1965 (class 2604 OID 33386)
-- Name: id; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY maillist ALTER COLUMN id SET DEFAULT nextval('maillist_id_seq'::regclass);


--
-- TOC entry 1966 (class 2604 OID 33387)
-- Name: id; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY redessociales ALTER COLUMN id SET DEFAULT nextval('redessociales_id_seq'::regclass);


--
-- TOC entry 1967 (class 2604 OID 33388)
-- Name: id; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY roles ALTER COLUMN id SET DEFAULT nextval('roles_id_seq'::regclass);


--
-- TOC entry 1968 (class 2604 OID 33389)
-- Name: id; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY rolusuario ALTER COLUMN id SET DEFAULT nextval('rolusuario_id_seq'::regclass);


--
-- TOC entry 1969 (class 2604 OID 33390)
-- Name: social_id; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY user_social_login ALTER COLUMN social_id SET DEFAULT nextval('user_social_login_social_id_seq'::regclass);


--
-- TOC entry 1970 (class 2604 OID 33391)
-- Name: id; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- TOC entry 1972 (class 2604 OID 33392)
-- Name: id; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY usuarios ALTER COLUMN id SET DEFAULT nextval('usuarios_id_seq'::regclass);


--
-- TOC entry 1973 (class 2604 OID 33393)
-- Name: tamanoFoto; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY usuarios ALTER COLUMN "tamanoFoto" SET DEFAULT nextval('"usuarios_tamañoFoto_seq"'::regclass);


--
-- TOC entry 2002 (class 0 OID 33330)
-- Dependencies: 168
-- Data for Name: intereses; Type: TABLE DATA; Schema: public; Owner: univeonl_univeonl
--

COPY intereses (id, arquitectura, arte, "cienciasEconomicas", "cienciasJuridicasyPoliticas", educacion, farmacia, filosofia, geografia, historia, ingenieria, letras, medicina, psicologia) FROM stdin;
\.


--
-- TOC entry 2041 (class 0 OID 0)
-- Dependencies: 169
-- Name: intereses_id_seq; Type: SEQUENCE SET; Schema: public; Owner: univeonl_univeonl
--

SELECT pg_catalog.setval('intereses_id_seq', 1, false);


--
-- TOC entry 2004 (class 0 OID 33335)
-- Dependencies: 170
-- Data for Name: maillist; Type: TABLE DATA; Schema: public; Owner: univeonl_univeonl
--

COPY maillist (id, email) FROM stdin;
2	test@test.com
3	manturakabchi@gmail.com
4	thereze@gmail.com
5	test@post.com
6	test4@post.com
9	asdasdasd@gmail.com
11	hola@gmail.com
12	manturak@gmail.com
13	prueba@gmail.com
14	correo@Gmail.com
15	edgar@gmail.com
16	dsfg@sdf.com
17	edgarleal@gmail.com
18	edgar.leal0@gmail.com
19	edgarleal@outlook.com
\.


--
-- TOC entry 2042 (class 0 OID 0)
-- Dependencies: 171
-- Name: maillist_id_seq; Type: SEQUENCE SET; Schema: public; Owner: univeonl_univeonl
--

SELECT pg_catalog.setval('maillist_id_seq', 19, true);


--
-- TOC entry 2006 (class 0 OID 33340)
-- Dependencies: 172
-- Data for Name: redessociales; Type: TABLE DATA; Schema: public; Owner: univeonl_univeonl
--

COPY redessociales (id, redessociales) FROM stdin;
\.


--
-- TOC entry 2043 (class 0 OID 0)
-- Dependencies: 173
-- Name: redessociales_id_seq; Type: SEQUENCE SET; Schema: public; Owner: univeonl_univeonl
--

SELECT pg_catalog.setval('redessociales_id_seq', 1, false);


--
-- TOC entry 2008 (class 0 OID 33348)
-- Dependencies: 174
-- Data for Name: roles; Type: TABLE DATA; Schema: public; Owner: univeonl_univeonl
--

COPY roles (id, nombre, descripcion, "listaAtributos", "nombreTabla") FROM stdin;
\.


--
-- TOC entry 2044 (class 0 OID 0)
-- Dependencies: 175
-- Name: roles_id_seq; Type: SEQUENCE SET; Schema: public; Owner: univeonl_univeonl
--

SELECT pg_catalog.setval('roles_id_seq', 1, false);


--
-- TOC entry 2010 (class 0 OID 33356)
-- Dependencies: 176
-- Data for Name: rolusuario; Type: TABLE DATA; Schema: public; Owner: univeonl_univeonl
--

COPY rolusuario (id, "idUsuario", "idRol") FROM stdin;
\.


--
-- TOC entry 2045 (class 0 OID 0)
-- Dependencies: 177
-- Name: rolusuario_id_seq; Type: SEQUENCE SET; Schema: public; Owner: univeonl_univeonl
--

SELECT pg_catalog.setval('rolusuario_id_seq', 1, false);


--
-- TOC entry 2012 (class 0 OID 33361)
-- Dependencies: 178
-- Data for Name: user_social_login; Type: TABLE DATA; Schema: public; Owner: univeonl_univeonl
--

COPY user_social_login (social_id, userid, signature, service, "profileUrl") FROM stdin;
\.


--
-- TOC entry 2046 (class 0 OID 0)
-- Dependencies: 179
-- Name: user_social_login_social_id_seq; Type: SEQUENCE SET; Schema: public; Owner: univeonl_univeonl
--

SELECT pg_catalog.setval('user_social_login_social_id_seq', 1, false);


--
-- TOC entry 2014 (class 0 OID 33369)
-- Dependencies: 180
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: univeonl_univeonl
--

COPY users (id, user_id, password) FROM stdin;
\.


--
-- TOC entry 2047 (class 0 OID 0)
-- Dependencies: 181
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: univeonl_univeonl
--

SELECT pg_catalog.setval('users_id_seq', 1, false);


--
-- TOC entry 2016 (class 0 OID 33374)
-- Dependencies: 182
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: univeonl_univeonl
--

COPY usuarios (id, "idRedSocial", nombre, apellido, clave, correo, "fechaNac", "recibirInformacion", pais, "fotoBinario", "tipoArchivoFoto", "tamanoFoto", sesion, "inicioSesion", ubicacion, sexo, interes, ocupacion, organizacion) FROM stdin;
1	\N	asd	asd	asd	probando@gmail.com	\N	f	\N	\N	\N	1	\N	\N	\N	\N	\N	\N	\N
2	\N	df	sdf	sdf	sfd@gmail.com	\N	f	\N	\N	\N	2	\N	\N	\N	\N	\N	\N	\N
4	\N	asd	asd	e10adc3949ba59abbe56e057f20f883e	sfd2@gmail.com	\N	f	\N	\N	\N	4	\N	\N	\N	\N	\N	\N	\N
5	\N	asd	asd	e10adc3949ba59abbe56e057f20f883e	probando2@gmail.com	\N	f	\N	\N	\N	5	\N	\N	\N	\N	\N	\N	\N
\.


--
-- TOC entry 2048 (class 0 OID 0)
-- Dependencies: 183
-- Name: usuarios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: univeonl_univeonl
--

SELECT pg_catalog.setval('usuarios_id_seq', 5, true);


--
-- TOC entry 2049 (class 0 OID 0)
-- Dependencies: 184
-- Name: usuarios_tamañoFoto_seq; Type: SEQUENCE SET; Schema: public; Owner: univeonl_univeonl
--

SELECT pg_catalog.setval('"usuarios_tamañoFoto_seq"', 5, true);


--
-- TOC entry 1995 (class 2606 OID 33445)
-- Name: correo_unico; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT correo_unico UNIQUE (correo);


--
-- TOC entry 1977 (class 2606 OID 33395)
-- Name: id_primary; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY maillist
    ADD CONSTRAINT id_primary PRIMARY KEY (id);


--
-- TOC entry 1975 (class 2606 OID 33397)
-- Name: intereses_pkey; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY intereses
    ADD CONSTRAINT intereses_pkey PRIMARY KEY (id);


--
-- TOC entry 1979 (class 2606 OID 33399)
-- Name: list_mail_unique; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY maillist
    ADD CONSTRAINT list_mail_unique UNIQUE (email);


--
-- TOC entry 1991 (class 2606 OID 33401)
-- Name: primary_id; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT primary_id PRIMARY KEY (id);


--
-- TOC entry 1981 (class 2606 OID 33403)
-- Name: redessociales_pkey; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY redessociales
    ADD CONSTRAINT redessociales_pkey PRIMARY KEY (id);


--
-- TOC entry 1983 (class 2606 OID 33405)
-- Name: roles_nombre_key; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY roles
    ADD CONSTRAINT roles_nombre_key UNIQUE (nombre);


--
-- TOC entry 1985 (class 2606 OID 33407)
-- Name: roles_pkey; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY roles
    ADD CONSTRAINT roles_pkey PRIMARY KEY (id);


--
-- TOC entry 1987 (class 2606 OID 33409)
-- Name: rolusuario_pkey; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY rolusuario
    ADD CONSTRAINT rolusuario_pkey PRIMARY KEY (id);


--
-- TOC entry 1989 (class 2606 OID 33411)
-- Name: socialid_primary; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY user_social_login
    ADD CONSTRAINT socialid_primary PRIMARY KEY (social_id);


--
-- TOC entry 1993 (class 2606 OID 33413)
-- Name: user_contraint; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT user_contraint UNIQUE (user_id);


--
-- TOC entry 1997 (class 2606 OID 33415)
-- Name: usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id);


--
-- TOC entry 1998 (class 2606 OID 33416)
-- Name: rolusuario_idRol_fkey; Type: FK CONSTRAINT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY rolusuario
    ADD CONSTRAINT "rolusuario_idRol_fkey" FOREIGN KEY ("idRol") REFERENCES roles(id) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- TOC entry 1999 (class 2606 OID 33421)
-- Name: rolusuario_idUsuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY rolusuario
    ADD CONSTRAINT "rolusuario_idUsuario_fkey" FOREIGN KEY ("idUsuario") REFERENCES usuarios(id) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- TOC entry 2000 (class 2606 OID 33426)
-- Name: usuarios_idRedSocial_fkey; Type: FK CONSTRAINT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT "usuarios_idRedSocial_fkey" FOREIGN KEY ("idRedSocial") REFERENCES redessociales(id) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- TOC entry 2001 (class 2606 OID 33431)
-- Name: usuarios_interes_fkey; Type: FK CONSTRAINT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_interes_fkey FOREIGN KEY (interes) REFERENCES intereses(id) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- TOC entry 2025 (class 0 OID 0)
-- Dependencies: 6
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2013-09-18 19:54:02

--
-- PostgreSQL database dump complete
--

