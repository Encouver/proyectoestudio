

DROP  TABLE IF EXISTS public.user_oauth;

CREATE TABLE public.user_oauth
(
  user_id integer NOT NULL, 
  provider character varying(45) NOT NULL, 
  identifier character varying(64) NOT NULL, 
  profile_cache text, 
  session_data text, 
  CONSTRAINT unic_user_id_name UNIQUE (user_id, provider), 
  PRIMARY KEY (provider, identifier)
) 
WITH (
  OIDS = FALSE
)
;
ALTER TABLE public.user_oauth
  OWNER TO univeonl_univeonl;