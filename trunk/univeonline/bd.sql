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
-- Name: EventLogSistema; Type: TABLE; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE TABLE "EventLogSistema" (
    id integer NOT NULL,
    "Codigo" integer NOT NULL,
    "idUsuario" integer,
    "Servidor" boolean NOT NULL,
    "Descripcion" text NOT NULL,
    "Fecha" timestamp with time zone DEFAULT now() NOT NULL,
    "Ubicacion" text NOT NULL,
    "ScriptAfectado" character varying(255) NOT NULL,
    "OldValue" character varying(255),
    "NewValue" character varying(255)
);


ALTER TABLE public."EventLogSistema" OWNER TO univeonl_univeonl;

--
-- Name: EventLogSistema_id_seq; Type: SEQUENCE; Schema: public; Owner: univeonl_univeonl
--

CREATE SEQUENCE "EventLogSistema_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."EventLogSistema_id_seq" OWNER TO univeonl_univeonl;

--
-- Name: EventLogSistema_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE "EventLogSistema_id_seq" OWNED BY "EventLogSistema".id;


--
-- Name: ha_logins; Type: TABLE; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE TABLE ha_logins (
    id integer NOT NULL,
    "loginProvider" character varying(50) NOT NULL,
    "loginProviderIdentifier" character varying(102) NOT NULL,
    "userId" integer NOT NULL
);


ALTER TABLE public.ha_logins OWNER TO univeonl_univeonl;

--
-- Name: ha_logins_id_seq; Type: SEQUENCE; Schema: public; Owner: univeonl_univeonl
--

CREATE SEQUENCE ha_logins_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ha_logins_id_seq OWNER TO univeonl_univeonl;

--
-- Name: ha_logins_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE ha_logins_id_seq OWNED BY ha_logins.id;


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
-- Name: maillist; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE maillist (
    id integer NOT NULL,
    email character varying(255) NOT NULL
);


ALTER TABLE public.maillist OWNER TO postgres;

--
-- Name: maillist_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE maillist_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.maillist_id_seq OWNER TO postgres;

--
-- Name: maillist_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
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
-- Name: tbl_migration; Type: TABLE; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE TABLE tbl_migration (
    version character varying(255) NOT NULL,
    apply_time integer
);


ALTER TABLE public.tbl_migration OWNER TO univeonl_univeonl;

--
-- Name: user_login_attempts; Type: TABLE; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE TABLE user_login_attempts (
    id integer NOT NULL,
    username character varying(255) NOT NULL,
    user_id integer,
    performed_on timestamp without time zone NOT NULL,
    is_successful boolean DEFAULT false NOT NULL,
    session_id character varying(255),
    ipv4 integer,
    user_agent character varying(255)
);


ALTER TABLE public.user_login_attempts OWNER TO univeonl_univeonl;

--
-- Name: user_login_attempts_id_seq; Type: SEQUENCE; Schema: public; Owner: univeonl_univeonl
--

CREATE SEQUENCE user_login_attempts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_login_attempts_id_seq OWNER TO univeonl_univeonl;

--
-- Name: user_login_attempts_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE user_login_attempts_id_seq OWNED BY user_login_attempts.id;


--
-- Name: user_oauth; Type: TABLE; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE TABLE user_oauth (
    user_id integer NOT NULL,
    provider character varying(45) NOT NULL,
    identifier character varying(64) NOT NULL,
    profile_cache text,
    session_data text
);


ALTER TABLE public.user_oauth OWNER TO univeonl_univeonl;

--
-- Name: user_profile_pictures; Type: TABLE; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE TABLE user_profile_pictures (
    id integer NOT NULL,
    user_id integer NOT NULL,
    original_picture_id integer,
    filename character varying(255) NOT NULL,
    width integer NOT NULL,
    height integer NOT NULL,
    mimetype character varying(255) NOT NULL,
    created_on timestamp without time zone NOT NULL,
    contents text NOT NULL
);


ALTER TABLE public.user_profile_pictures OWNER TO univeonl_univeonl;

--
-- Name: user_profile_pictures_id_seq; Type: SEQUENCE; Schema: public; Owner: univeonl_univeonl
--

CREATE SEQUENCE user_profile_pictures_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_profile_pictures_id_seq OWNER TO univeonl_univeonl;

--
-- Name: user_profile_pictures_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE user_profile_pictures_id_seq OWNED BY user_profile_pictures.id;


--
-- Name: user_remote_identities; Type: TABLE; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE TABLE user_remote_identities (
    id integer NOT NULL,
    user_id integer NOT NULL,
    provider character varying(100) NOT NULL,
    identifier character varying(100) NOT NULL,
    created_on timestamp without time zone NOT NULL,
    last_used_on timestamp without time zone
);


ALTER TABLE public.user_remote_identities OWNER TO univeonl_univeonl;

--
-- Name: user_remote_identities_id_seq; Type: SEQUENCE; Schema: public; Owner: univeonl_univeonl
--

CREATE SEQUENCE user_remote_identities_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_remote_identities_id_seq OWNER TO univeonl_univeonl;

--
-- Name: user_remote_identities_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE user_remote_identities_id_seq OWNED BY user_remote_identities.id;


--
-- Name: user_used_passwords; Type: TABLE; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE TABLE user_used_passwords (
    id integer NOT NULL,
    user_id integer NOT NULL,
    password character varying(255) NOT NULL,
    set_on timestamp without time zone NOT NULL
);


ALTER TABLE public.user_used_passwords OWNER TO univeonl_univeonl;

--
-- Name: user_used_passwords_id_seq; Type: SEQUENCE; Schema: public; Owner: univeonl_univeonl
--

CREATE SEQUENCE user_used_passwords_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_used_passwords_id_seq OWNER TO univeonl_univeonl;

--
-- Name: user_used_passwords_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: univeonl_univeonl
--

ALTER SEQUENCE user_used_passwords_id_seq OWNED BY user_used_passwords.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE TABLE users (
    id integer NOT NULL,
    username character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    firstname character varying(255),
    lastname character varying(255),
    activation_key character varying(255),
    created_on timestamp without time zone,
    updated_on timestamp without time zone,
    last_visit_on timestamp without time zone,
    password_set_on timestamp without time zone,
    email_verified boolean DEFAULT false NOT NULL,
    is_active boolean DEFAULT false NOT NULL,
    is_disabled boolean DEFAULT false NOT NULL,
    one_time_password_secret character varying(255),
    one_time_password_code character varying(255),
    one_time_password_counter integer DEFAULT 0 NOT NULL
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
    "fechaNac" date NOT NULL,
    "recibirInformacion" boolean DEFAULT false,
    pais character varying(255) NOT NULL,
    "fotoBinario" bytea,
    "tipoArchivoFoto" character varying(100),
    "tamanoFoto" integer NOT NULL,
    sesion character varying(255),
    "inicioSesion" character varying(255),
    ubicacion character varying(255) NOT NULL,
    sexo boolean NOT NULL,
    interes integer,
    ocupacion character varying(255) NOT NULL,
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

ALTER TABLE ONLY "EventLogSistema" ALTER COLUMN id SET DEFAULT nextval('"EventLogSistema_id_seq"'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY ha_logins ALTER COLUMN id SET DEFAULT nextval('ha_logins_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY intereses ALTER COLUMN id SET DEFAULT nextval('intereses_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
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
-- Name: id; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY user_login_attempts ALTER COLUMN id SET DEFAULT nextval('user_login_attempts_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY user_profile_pictures ALTER COLUMN id SET DEFAULT nextval('user_profile_pictures_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY user_remote_identities ALTER COLUMN id SET DEFAULT nextval('user_remote_identities_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY user_used_passwords ALTER COLUMN id SET DEFAULT nextval('user_used_passwords_id_seq'::regclass);


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
-- Name: EventLogSistema_pkey; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY "EventLogSistema"
    ADD CONSTRAINT "EventLogSistema_pkey" PRIMARY KEY (id);


--
-- Name: ha_logins_pkey; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY ha_logins
    ADD CONSTRAINT ha_logins_pkey PRIMARY KEY (id);


--
-- Name: id_primary; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY maillist
    ADD CONSTRAINT id_primary PRIMARY KEY (id);


--
-- Name: intereses_pkey; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY intereses
    ADD CONSTRAINT intereses_pkey PRIMARY KEY (id);


--
-- Name: list_mail_unique; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY maillist
    ADD CONSTRAINT list_mail_unique UNIQUE (email);


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
-- Name: tbl_migration_pkey; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY tbl_migration
    ADD CONSTRAINT tbl_migration_pkey PRIMARY KEY (version);


--
-- Name: unic_user_id_name; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY user_oauth
    ADD CONSTRAINT unic_user_id_name UNIQUE (user_id, provider);


--
-- Name: user_login_attempts_pkey; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY user_login_attempts
    ADD CONSTRAINT user_login_attempts_pkey PRIMARY KEY (id);


--
-- Name: user_oauth_pkey; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY user_oauth
    ADD CONSTRAINT user_oauth_pkey PRIMARY KEY (provider, identifier);


--
-- Name: user_profile_pictures_pkey; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY user_profile_pictures
    ADD CONSTRAINT user_profile_pictures_pkey PRIMARY KEY (id);


--
-- Name: user_remote_identities_pkey; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY user_remote_identities
    ADD CONSTRAINT user_remote_identities_pkey PRIMARY KEY (id);


--
-- Name: user_used_passwords_pkey; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY user_used_passwords
    ADD CONSTRAINT user_used_passwords_pkey PRIMARY KEY (id);


--
-- Name: users_pkey; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id);


--
-- Name: user_login_attempts_user_id_idx; Type: INDEX; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE INDEX user_login_attempts_user_id_idx ON user_login_attempts USING btree (user_id);


--
-- Name: user_profile_pictures_original_picture_id_idx; Type: INDEX; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE INDEX user_profile_pictures_original_picture_id_idx ON user_profile_pictures USING btree (original_picture_id);


--
-- Name: user_profile_pictures_user_id_idx; Type: INDEX; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE INDEX user_profile_pictures_user_id_idx ON user_profile_pictures USING btree (user_id);


--
-- Name: user_profile_pictures_width_height_idx; Type: INDEX; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE INDEX user_profile_pictures_width_height_idx ON user_profile_pictures USING btree (width, height);


--
-- Name: user_remote_identities_provider_identifier_idx; Type: INDEX; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE UNIQUE INDEX user_remote_identities_provider_identifier_idx ON user_remote_identities USING btree (provider, identifier);


--
-- Name: user_remote_identities_user_id_idx; Type: INDEX; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE INDEX user_remote_identities_user_id_idx ON user_remote_identities USING btree (user_id);


--
-- Name: user_used_passwords_user_id_idx; Type: INDEX; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE INDEX user_used_passwords_user_id_idx ON user_used_passwords USING btree (user_id);


--
-- Name: users_email_idx; Type: INDEX; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE UNIQUE INDEX users_email_idx ON users USING btree (email);


--
-- Name: users_email_verified_idx; Type: INDEX; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE INDEX users_email_verified_idx ON users USING btree (email_verified);


--
-- Name: users_is_active_idx; Type: INDEX; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE INDEX users_is_active_idx ON users USING btree (is_active);


--
-- Name: users_is_disabled_idx; Type: INDEX; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE INDEX users_is_disabled_idx ON users USING btree (is_disabled);


--
-- Name: users_username_idx; Type: INDEX; Schema: public; Owner: univeonl_univeonl; Tablespace: 
--

CREATE UNIQUE INDEX users_username_idx ON users USING btree (username);


--
-- Name: ha_logins_userId_fkey; Type: FK CONSTRAINT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY ha_logins
    ADD CONSTRAINT "ha_logins_userId_fkey" FOREIGN KEY ("userId") REFERENCES usuarios(id);


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
-- Name: user_login_attempts_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY user_login_attempts
    ADD CONSTRAINT user_login_attempts_user_id_fkey FOREIGN KEY (user_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: user_profile_pictures_original_picture_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY user_profile_pictures
    ADD CONSTRAINT user_profile_pictures_original_picture_id_fkey FOREIGN KEY (original_picture_id) REFERENCES user_profile_pictures(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: user_profile_pictures_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY user_profile_pictures
    ADD CONSTRAINT user_profile_pictures_user_id_fkey FOREIGN KEY (user_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: user_remote_identities_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY user_remote_identities
    ADD CONSTRAINT user_remote_identities_user_id_fkey FOREIGN KEY (user_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: user_used_passwords_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: univeonl_univeonl
--

ALTER TABLE ONLY user_used_passwords
    ADD CONSTRAINT user_used_passwords_user_id_fkey FOREIGN KEY (user_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE;


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

