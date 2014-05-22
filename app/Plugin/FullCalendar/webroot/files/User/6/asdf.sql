-- Table: users

-- DROP TABLE users;

CREATE TABLE users
(
  id serial NOT NULL,
  nombre character varying NOT NULL
  primary key(id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE users OWNER TO postgres;
