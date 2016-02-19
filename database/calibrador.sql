--
-- PostgreSQL database dump
--

-- Dumped from database version 9.4.5
-- Dumped by pg_dump version 9.4.0
-- Started on 2016-02-19 17:25:22

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 7 (class 2615 OID 16384)
-- Name: calibrador; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA calibrador;


ALTER SCHEMA calibrador OWNER TO postgres;

SET search_path = calibrador, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 181 (class 1259 OID 16426)
-- Name: calibrations; Type: TABLE; Schema: calibrador; Owner: postgres; Tablespace: 
--

CREATE TABLE calibrations (
    id integer DEFAULT nextval(('calibrador.calibration_id_seq'::text)::regclass) NOT NULL,
    equipment_id integer,
    dateregister timestamp(6) without time zone DEFAULT now(),
    deleted boolean DEFAULT false,
    user_id integer,
    physicalquantity_id integer,
    "valueInitialphysicalquantity" real,
    valuefinalphysicalquantity real,
    amountcalibration integer,
    degreepolynomial integer,
    typeincrement_id integer,
    valueincrement real
);
ALTER TABLE ONLY calibrations ALTER COLUMN id SET STATISTICS 0;
ALTER TABLE ONLY calibrations ALTER COLUMN equipment_id SET STATISTICS 0;
ALTER TABLE ONLY calibrations ALTER COLUMN dateregister SET STATISTICS 0;
ALTER TABLE ONLY calibrations ALTER COLUMN deleted SET STATISTICS 0;
ALTER TABLE ONLY calibrations ALTER COLUMN user_id SET STATISTICS 0;
ALTER TABLE ONLY calibrations ALTER COLUMN physicalquantity_id SET STATISTICS 0;


ALTER TABLE calibrations OWNER TO postgres;

--
-- TOC entry 2129 (class 0 OID 0)
-- Dependencies: 181
-- Name: COLUMN calibrations.amountcalibration; Type: COMMENT; Schema: calibrador; Owner: postgres
--

COMMENT ON COLUMN calibrations.amountcalibration IS 'quantidade de leituras que serão repetidas';


--
-- TOC entry 180 (class 1259 OID 16424)
-- Name: calibration_id_seq; Type: SEQUENCE; Schema: calibrador; Owner: postgres
--

CREATE SEQUENCE calibration_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE calibration_id_seq OWNER TO postgres;

--
-- TOC entry 2130 (class 0 OID 0)
-- Dependencies: 180
-- Name: calibration_id_seq; Type: SEQUENCE OWNED BY; Schema: calibrador; Owner: postgres
--

ALTER SEQUENCE calibration_id_seq OWNED BY calibrations.id;


--
-- TOC entry 187 (class 1259 OID 16473)
-- Name: coefficients; Type: TABLE; Schema: calibrador; Owner: postgres; Tablespace: 
--

CREATE TABLE coefficients (
    id integer DEFAULT nextval(('calibrador.coefficient_id_seq'::text)::regclass) NOT NULL,
    value real,
    equipment_id integer,
    deleted boolean DEFAULT false,
    dateregister timestamp(6) without time zone DEFAULT now()
);
ALTER TABLE ONLY coefficients ALTER COLUMN id SET STATISTICS 0;
ALTER TABLE ONLY coefficients ALTER COLUMN value SET STATISTICS 0;
ALTER TABLE ONLY coefficients ALTER COLUMN equipment_id SET STATISTICS 0;
ALTER TABLE ONLY coefficients ALTER COLUMN deleted SET STATISTICS 0;
ALTER TABLE ONLY coefficients ALTER COLUMN dateregister SET STATISTICS 0;


ALTER TABLE coefficients OWNER TO postgres;

--
-- TOC entry 186 (class 1259 OID 16471)
-- Name: coefficient_id_seq; Type: SEQUENCE; Schema: calibrador; Owner: postgres
--

CREATE SEQUENCE coefficient_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE coefficient_id_seq OWNER TO postgres;

--
-- TOC entry 2131 (class 0 OID 0)
-- Dependencies: 186
-- Name: coefficient_id_seq; Type: SEQUENCE OWNED BY; Schema: calibrador; Owner: postgres
--

ALTER SEQUENCE coefficient_id_seq OWNED BY coefficients.id;


--
-- TOC entry 177 (class 1259 OID 16397)
-- Name: equipments; Type: TABLE; Schema: calibrador; Owner: postgres; Tablespace: 
--

CREATE TABLE equipments (
    id integer DEFAULT nextval(('calibrador.equipments_id_seq'::text)::regclass) NOT NULL,
    brand character varying(50),
    model character varying(50),
    measurementuncertainty character varying(20),
    identification character varying(50),
    typeequipment_id integer,
    dateregister timestamp(6) without time zone DEFAULT now(),
    deleted boolean DEFAULT false
);
ALTER TABLE ONLY equipments ALTER COLUMN id SET STATISTICS 0;
ALTER TABLE ONLY equipments ALTER COLUMN brand SET STATISTICS 0;
ALTER TABLE ONLY equipments ALTER COLUMN model SET STATISTICS 0;
ALTER TABLE ONLY equipments ALTER COLUMN measurementuncertainty SET STATISTICS 0;
ALTER TABLE ONLY equipments ALTER COLUMN identification SET STATISTICS 0;
ALTER TABLE ONLY equipments ALTER COLUMN typeequipment_id SET STATISTICS 0;
ALTER TABLE ONLY equipments ALTER COLUMN dateregister SET STATISTICS 0;


ALTER TABLE equipments OWNER TO postgres;

--
-- TOC entry 2132 (class 0 OID 0)
-- Dependencies: 177
-- Name: COLUMN equipments.id; Type: COMMENT; Schema: calibrador; Owner: postgres
--

COMMENT ON COLUMN equipments.id IS 'identificador unico da tabele';


--
-- TOC entry 2133 (class 0 OID 0)
-- Dependencies: 177
-- Name: COLUMN equipments.identification; Type: COMMENT; Schema: calibrador; Owner: postgres
--

COMMENT ON COLUMN equipments.identification IS 'Identificação do medidor de referência (N. série ou ID-TAG)';


--
-- TOC entry 176 (class 1259 OID 16395)
-- Name: equipments_id_seq; Type: SEQUENCE; Schema: calibrador; Owner: postgres
--

CREATE SEQUENCE equipments_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE equipments_id_seq OWNER TO postgres;

--
-- TOC entry 2134 (class 0 OID 0)
-- Dependencies: 176
-- Name: equipments_id_seq; Type: SEQUENCE OWNED BY; Schema: calibrador; Owner: postgres
--

ALTER SEQUENCE equipments_id_seq OWNED BY equipments.id;


--
-- TOC entry 183 (class 1259 OID 16435)
-- Name: physicalquantities; Type: TABLE; Schema: calibrador; Owner: postgres; Tablespace: 
--

CREATE TABLE physicalquantities (
    id integer NOT NULL,
    description character varying(100),
    deleted boolean DEFAULT false,
    dateregister timestamp(6) without time zone DEFAULT now()
);
ALTER TABLE ONLY physicalquantities ALTER COLUMN id SET STATISTICS 0;
ALTER TABLE ONLY physicalquantities ALTER COLUMN description SET STATISTICS 0;
ALTER TABLE ONLY physicalquantities ALTER COLUMN deleted SET STATISTICS 0;
ALTER TABLE ONLY physicalquantities ALTER COLUMN dateregister SET STATISTICS 0;


ALTER TABLE physicalquantities OWNER TO postgres;

--
-- TOC entry 182 (class 1259 OID 16433)
-- Name: grandezafisica_id_seq; Type: SEQUENCE; Schema: calibrador; Owner: postgres
--

CREATE SEQUENCE grandezafisica_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE grandezafisica_id_seq OWNER TO postgres;

--
-- TOC entry 2135 (class 0 OID 0)
-- Dependencies: 182
-- Name: grandezafisica_id_seq; Type: SEQUENCE OWNED BY; Schema: calibrador; Owner: postgres
--

ALTER SEQUENCE grandezafisica_id_seq OWNED BY physicalquantities.id;


--
-- TOC entry 193 (class 1259 OID 16507)
-- Name: groups; Type: TABLE; Schema: calibrador; Owner: postgres; Tablespace: 
--

CREATE TABLE groups (
    id integer DEFAULT nextval(('calibrador.groups_id_seq'::text)::regclass) NOT NULL,
    description character varying(100),
    deleted boolean DEFAULT false,
    dateregister timestamp(6) without time zone DEFAULT now()
);
ALTER TABLE ONLY groups ALTER COLUMN id SET STATISTICS 0;
ALTER TABLE ONLY groups ALTER COLUMN description SET STATISTICS 0;
ALTER TABLE ONLY groups ALTER COLUMN deleted SET STATISTICS 0;
ALTER TABLE ONLY groups ALTER COLUMN dateregister SET STATISTICS 0;


ALTER TABLE groups OWNER TO postgres;

--
-- TOC entry 192 (class 1259 OID 16505)
-- Name: groups_id_seq; Type: SEQUENCE; Schema: calibrador; Owner: postgres
--

CREATE SEQUENCE groups_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE groups_id_seq OWNER TO postgres;

--
-- TOC entry 2136 (class 0 OID 0)
-- Dependencies: 192
-- Name: groups_id_seq; Type: SEQUENCE OWNED BY; Schema: calibrador; Owner: postgres
--

ALTER SEQUENCE groups_id_seq OWNED BY groups.id;


--
-- TOC entry 185 (class 1259 OID 16459)
-- Name: measurements; Type: TABLE; Schema: calibrador; Owner: postgres; Tablespace: 
--

CREATE TABLE measurements (
    id integer NOT NULL,
    referencetemperature real,
    measuredtemperature real,
    deleted boolean DEFAULT false,
    dateregister timestamp(6) without time zone DEFAULT now(),
    calibration_id integer
);
ALTER TABLE ONLY measurements ALTER COLUMN id SET STATISTICS 0;
ALTER TABLE ONLY measurements ALTER COLUMN referencetemperature SET STATISTICS 0;
ALTER TABLE ONLY measurements ALTER COLUMN measuredtemperature SET STATISTICS 0;
ALTER TABLE ONLY measurements ALTER COLUMN deleted SET STATISTICS 0;
ALTER TABLE ONLY measurements ALTER COLUMN dateregister SET STATISTICS 0;
ALTER TABLE ONLY measurements ALTER COLUMN calibration_id SET STATISTICS 0;


ALTER TABLE measurements OWNER TO postgres;

--
-- TOC entry 184 (class 1259 OID 16457)
-- Name: medicao_id_seq; Type: SEQUENCE; Schema: calibrador; Owner: postgres
--

CREATE SEQUENCE medicao_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE medicao_id_seq OWNER TO postgres;

--
-- TOC entry 2137 (class 0 OID 0)
-- Dependencies: 184
-- Name: medicao_id_seq; Type: SEQUENCE OWNED BY; Schema: calibrador; Owner: postgres
--

ALTER SEQUENCE medicao_id_seq OWNED BY measurements.id;


--
-- TOC entry 179 (class 1259 OID 16405)
-- Name: typeequipments; Type: TABLE; Schema: calibrador; Owner: postgres; Tablespace: 
--

CREATE TABLE typeequipments (
    id integer NOT NULL,
    description character varying(100),
    dateregister timestamp(6) without time zone DEFAULT now(),
    deleted boolean DEFAULT false
);
ALTER TABLE ONLY typeequipments ALTER COLUMN id SET STATISTICS 0;
ALTER TABLE ONLY typeequipments ALTER COLUMN description SET STATISTICS 0;
ALTER TABLE ONLY typeequipments ALTER COLUMN dateregister SET STATISTICS 0;
ALTER TABLE ONLY typeequipments ALTER COLUMN deleted SET STATISTICS 0;


ALTER TABLE typeequipments OWNER TO postgres;

--
-- TOC entry 178 (class 1259 OID 16403)
-- Name: tipoequipamento_id_seq; Type: SEQUENCE; Schema: calibrador; Owner: postgres
--

CREATE SEQUENCE tipoequipamento_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tipoequipamento_id_seq OWNER TO postgres;

--
-- TOC entry 2138 (class 0 OID 0)
-- Dependencies: 178
-- Name: tipoequipamento_id_seq; Type: SEQUENCE OWNED BY; Schema: calibrador; Owner: postgres
--

ALTER SEQUENCE tipoequipamento_id_seq OWNED BY typeequipments.id;


--
-- TOC entry 195 (class 1259 OID 16523)
-- Name: typeincrements; Type: TABLE; Schema: calibrador; Owner: postgres; Tablespace: 
--

CREATE TABLE typeincrements (
    id integer NOT NULL,
    description character varying(100),
    deleted boolean DEFAULT false,
    dateregister timestamp(6) without time zone DEFAULT now()
);
ALTER TABLE ONLY typeincrements ALTER COLUMN id SET STATISTICS 0;
ALTER TABLE ONLY typeincrements ALTER COLUMN description SET STATISTICS 0;
ALTER TABLE ONLY typeincrements ALTER COLUMN deleted SET STATISTICS 0;
ALTER TABLE ONLY typeincrements ALTER COLUMN dateregister SET STATISTICS 0;


ALTER TABLE typeincrements OWNER TO postgres;

--
-- TOC entry 194 (class 1259 OID 16521)
-- Name: tipoincremento_id_seq; Type: SEQUENCE; Schema: calibrador; Owner: postgres
--

CREATE SEQUENCE tipoincremento_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tipoincremento_id_seq OWNER TO postgres;

--
-- TOC entry 2139 (class 0 OID 0)
-- Dependencies: 194
-- Name: tipoincremento_id_seq; Type: SEQUENCE OWNED BY; Schema: calibrador; Owner: postgres
--

ALTER SEQUENCE tipoincremento_id_seq OWNED BY typeincrements.id;


--
-- TOC entry 175 (class 1259 OID 16387)
-- Name: users; Type: TABLE; Schema: calibrador; Owner: postgres; Tablespace: 
--

CREATE TABLE users (
    id integer NOT NULL,
    login character varying(50) NOT NULL,
    password character varying(20) NOT NULL,
    dateregister timestamp(6) without time zone DEFAULT now(),
    name character varying(50),
    deleted boolean DEFAULT false NOT NULL,
    group_id integer
);
ALTER TABLE ONLY users ALTER COLUMN id SET STATISTICS 0;
ALTER TABLE ONLY users ALTER COLUMN login SET STATISTICS 0;
ALTER TABLE ONLY users ALTER COLUMN password SET STATISTICS 0;
ALTER TABLE ONLY users ALTER COLUMN dateregister SET STATISTICS 0;
ALTER TABLE ONLY users ALTER COLUMN name SET STATISTICS 0;


ALTER TABLE users OWNER TO postgres;

--
-- TOC entry 2140 (class 0 OID 0)
-- Dependencies: 175
-- Name: COLUMN users.id; Type: COMMENT; Schema: calibrador; Owner: postgres
--

COMMENT ON COLUMN users.id IS 'identificador da tabela';


--
-- TOC entry 2141 (class 0 OID 0)
-- Dependencies: 175
-- Name: COLUMN users.login; Type: COMMENT; Schema: calibrador; Owner: postgres
--

COMMENT ON COLUMN users.login IS 'login do usuário';


--
-- TOC entry 2142 (class 0 OID 0)
-- Dependencies: 175
-- Name: COLUMN users.password; Type: COMMENT; Schema: calibrador; Owner: postgres
--

COMMENT ON COLUMN users.password IS 'senha do usuário';


--
-- TOC entry 2143 (class 0 OID 0)
-- Dependencies: 175
-- Name: COLUMN users.dateregister; Type: COMMENT; Schema: calibrador; Owner: postgres
--

COMMENT ON COLUMN users.dateregister IS 'Data de inserção do usuário no banco';


--
-- TOC entry 2144 (class 0 OID 0)
-- Dependencies: 175
-- Name: COLUMN users.name; Type: COMMENT; Schema: calibrador; Owner: postgres
--

COMMENT ON COLUMN users.name IS 'Nome do usuário';


--
-- TOC entry 174 (class 1259 OID 16385)
-- Name: usuario_id_seq; Type: SEQUENCE; Schema: calibrador; Owner: postgres
--

CREATE SEQUENCE usuario_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE usuario_id_seq OWNER TO postgres;

--
-- TOC entry 2145 (class 0 OID 0)
-- Dependencies: 174
-- Name: usuario_id_seq; Type: SEQUENCE OWNED BY; Schema: calibrador; Owner: postgres
--

ALTER SEQUENCE usuario_id_seq OWNED BY users.id;


--
-- TOC entry 1956 (class 2604 OID 16462)
-- Name: id; Type: DEFAULT; Schema: calibrador; Owner: postgres
--

ALTER TABLE ONLY measurements ALTER COLUMN id SET DEFAULT nextval('medicao_id_seq'::regclass);


--
-- TOC entry 1953 (class 2604 OID 16438)
-- Name: id; Type: DEFAULT; Schema: calibrador; Owner: postgres
--

ALTER TABLE ONLY physicalquantities ALTER COLUMN id SET DEFAULT nextval('grandezafisica_id_seq'::regclass);


--
-- TOC entry 1947 (class 2604 OID 16408)
-- Name: id; Type: DEFAULT; Schema: calibrador; Owner: postgres
--

ALTER TABLE ONLY typeequipments ALTER COLUMN id SET DEFAULT nextval('tipoequipamento_id_seq'::regclass);


--
-- TOC entry 1965 (class 2604 OID 16526)
-- Name: id; Type: DEFAULT; Schema: calibrador; Owner: postgres
--

ALTER TABLE ONLY typeincrements ALTER COLUMN id SET DEFAULT nextval('tipoincremento_id_seq'::regclass);


--
-- TOC entry 1941 (class 2604 OID 16390)
-- Name: id; Type: DEFAULT; Schema: calibrador; Owner: postgres
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('usuario_id_seq'::regclass);


--
-- TOC entry 2146 (class 0 OID 0)
-- Dependencies: 180
-- Name: calibration_id_seq; Type: SEQUENCE SET; Schema: calibrador; Owner: postgres
--

SELECT pg_catalog.setval('calibration_id_seq', 1, false);


--
-- TOC entry 2114 (class 0 OID 16426)
-- Dependencies: 181
-- Data for Name: calibrations; Type: TABLE DATA; Schema: calibrador; Owner: postgres
--

COPY calibrations (id, equipment_id, dateregister, deleted, user_id, physicalquantity_id, "valueInitialphysicalquantity", valuefinalphysicalquantity, amountcalibration, degreepolynomial, typeincrement_id, valueincrement) FROM stdin;
\.


--
-- TOC entry 2147 (class 0 OID 0)
-- Dependencies: 186
-- Name: coefficient_id_seq; Type: SEQUENCE SET; Schema: calibrador; Owner: postgres
--

SELECT pg_catalog.setval('coefficient_id_seq', 1, false);


--
-- TOC entry 2120 (class 0 OID 16473)
-- Dependencies: 187
-- Data for Name: coefficients; Type: TABLE DATA; Schema: calibrador; Owner: postgres
--

COPY coefficients (id, value, equipment_id, deleted, dateregister) FROM stdin;
\.


--
-- TOC entry 2110 (class 0 OID 16397)
-- Dependencies: 177
-- Data for Name: equipments; Type: TABLE DATA; Schema: calibrador; Owner: postgres
--

COPY equipments (id, brand, model, measurementuncertainty, identification, typeequipment_id, dateregister, deleted) FROM stdin;
1	TXUM00	TXUM00		1	4	\N	f
\.


--
-- TOC entry 2148 (class 0 OID 0)
-- Dependencies: 176
-- Name: equipments_id_seq; Type: SEQUENCE SET; Schema: calibrador; Owner: postgres
--

SELECT pg_catalog.setval('equipments_id_seq', 1, true);


--
-- TOC entry 2149 (class 0 OID 0)
-- Dependencies: 182
-- Name: grandezafisica_id_seq; Type: SEQUENCE SET; Schema: calibrador; Owner: postgres
--

SELECT pg_catalog.setval('grandezafisica_id_seq', 1, true);


--
-- TOC entry 2122 (class 0 OID 16507)
-- Dependencies: 193
-- Data for Name: groups; Type: TABLE DATA; Schema: calibrador; Owner: postgres
--

COPY groups (id, description, deleted, dateregister) FROM stdin;
2	Administrador	f	\N
12	Padrão	t	2016-02-19 17:16:49.793
\.


--
-- TOC entry 2150 (class 0 OID 0)
-- Dependencies: 192
-- Name: groups_id_seq; Type: SEQUENCE SET; Schema: calibrador; Owner: postgres
--

SELECT pg_catalog.setval('groups_id_seq', 12, true);


--
-- TOC entry 2118 (class 0 OID 16459)
-- Dependencies: 185
-- Data for Name: measurements; Type: TABLE DATA; Schema: calibrador; Owner: postgres
--

COPY measurements (id, referencetemperature, measuredtemperature, deleted, dateregister, calibration_id) FROM stdin;
\.


--
-- TOC entry 2151 (class 0 OID 0)
-- Dependencies: 184
-- Name: medicao_id_seq; Type: SEQUENCE SET; Schema: calibrador; Owner: postgres
--

SELECT pg_catalog.setval('medicao_id_seq', 1, false);


--
-- TOC entry 2116 (class 0 OID 16435)
-- Dependencies: 183
-- Data for Name: physicalquantities; Type: TABLE DATA; Schema: calibrador; Owner: postgres
--

COPY physicalquantities (id, description, deleted, dateregister) FROM stdin;
1	Temperatura	f	\N
\.


--
-- TOC entry 2152 (class 0 OID 0)
-- Dependencies: 178
-- Name: tipoequipamento_id_seq; Type: SEQUENCE SET; Schema: calibrador; Owner: postgres
--

SELECT pg_catalog.setval('tipoequipamento_id_seq', 8, true);


--
-- TOC entry 2153 (class 0 OID 0)
-- Dependencies: 194
-- Name: tipoincremento_id_seq; Type: SEQUENCE SET; Schema: calibrador; Owner: postgres
--

SELECT pg_catalog.setval('tipoincremento_id_seq', 2, true);


--
-- TOC entry 2112 (class 0 OID 16405)
-- Dependencies: 179
-- Data for Name: typeequipments; Type: TABLE DATA; Schema: calibrador; Owner: postgres
--

COPY typeequipments (id, description, dateregister, deleted) FROM stdin;
4	Transponder	2016-02-17 13:00:00	f
7	Termômetro	\N	f
8	Estufa B.O.D	\N	f
\.


--
-- TOC entry 2124 (class 0 OID 16523)
-- Dependencies: 195
-- Data for Name: typeincrements; Type: TABLE DATA; Schema: calibrador; Owner: postgres
--

COPY typeincrements (id, description, deleted, dateregister) FROM stdin;
1	automático	f	\N
2	manual	f	\N
\.


--
-- TOC entry 2108 (class 0 OID 16387)
-- Dependencies: 175
-- Data for Name: users; Type: TABLE DATA; Schema: calibrador; Owner: postgres
--

COPY users (id, login, password, dateregister, name, deleted, group_id) FROM stdin;
1	dbs1989	diego1989	2016-02-17 09:01:00	Diego Barros e Silva	f	2
\.


--
-- TOC entry 2154 (class 0 OID 0)
-- Dependencies: 174
-- Name: usuario_id_seq; Type: SEQUENCE SET; Schema: calibrador; Owner: postgres
--

SELECT pg_catalog.setval('usuario_id_seq', 2, true);


--
-- TOC entry 1977 (class 2606 OID 16432)
-- Name: calibracao_pkey; Type: CONSTRAINT; Schema: calibrador; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY calibrations
    ADD CONSTRAINT calibracao_pkey PRIMARY KEY (id);


--
-- TOC entry 1983 (class 2606 OID 16479)
-- Name: coeficiente_pkey; Type: CONSTRAINT; Schema: calibrador; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY coefficients
    ADD CONSTRAINT coeficiente_pkey PRIMARY KEY (id);


--
-- TOC entry 1973 (class 2606 OID 16402)
-- Name: equipamento_pkey; Type: CONSTRAINT; Schema: calibrador; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY equipments
    ADD CONSTRAINT equipamento_pkey PRIMARY KEY (id);


--
-- TOC entry 1979 (class 2606 OID 16441)
-- Name: grandezafisica_pkey; Type: CONSTRAINT; Schema: calibrador; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY physicalquantities
    ADD CONSTRAINT grandezafisica_pkey PRIMARY KEY (id);


--
-- TOC entry 1985 (class 2606 OID 16515)
-- Name: grupo_descricao_key; Type: CONSTRAINT; Schema: calibrador; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY groups
    ADD CONSTRAINT grupo_descricao_key UNIQUE (description);


--
-- TOC entry 1987 (class 2606 OID 16513)
-- Name: grupo_pkey; Type: CONSTRAINT; Schema: calibrador; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY groups
    ADD CONSTRAINT grupo_pkey PRIMARY KEY (id);


--
-- TOC entry 1981 (class 2606 OID 16465)
-- Name: medicao_pkey; Type: CONSTRAINT; Schema: calibrador; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY measurements
    ADD CONSTRAINT medicao_pkey PRIMARY KEY (id);


--
-- TOC entry 1975 (class 2606 OID 16411)
-- Name: tipoequipamento_pkey; Type: CONSTRAINT; Schema: calibrador; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY typeequipments
    ADD CONSTRAINT tipoequipamento_pkey PRIMARY KEY (id);


--
-- TOC entry 1989 (class 2606 OID 16529)
-- Name: tipoincremento_pkey; Type: CONSTRAINT; Schema: calibrador; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY typeincrements
    ADD CONSTRAINT tipoincremento_pkey PRIMARY KEY (id);


--
-- TOC entry 1969 (class 2606 OID 16394)
-- Name: usuario_login_key; Type: CONSTRAINT; Schema: calibrador; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT usuario_login_key UNIQUE (login);


--
-- TOC entry 1971 (class 2606 OID 16392)
-- Name: usuario_pkey; Type: CONSTRAINT; Schema: calibrador; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id);


--
-- TOC entry 1992 (class 2606 OID 16442)
-- Name: calibracao_fk; Type: FK CONSTRAINT; Schema: calibrador; Owner: postgres
--

ALTER TABLE ONLY calibrations
    ADD CONSTRAINT calibracao_fk FOREIGN KEY (user_id) REFERENCES users(id);


--
-- TOC entry 1993 (class 2606 OID 16447)
-- Name: calibracao_fk1; Type: FK CONSTRAINT; Schema: calibrador; Owner: postgres
--

ALTER TABLE ONLY calibrations
    ADD CONSTRAINT calibracao_fk1 FOREIGN KEY (physicalquantity_id) REFERENCES physicalquantities(id);


--
-- TOC entry 1994 (class 2606 OID 16452)
-- Name: calibracao_fk2; Type: FK CONSTRAINT; Schema: calibrador; Owner: postgres
--

ALTER TABLE ONLY calibrations
    ADD CONSTRAINT calibracao_fk2 FOREIGN KEY (equipment_id) REFERENCES equipments(id);


--
-- TOC entry 1995 (class 2606 OID 16530)
-- Name: calibracao_fk3; Type: FK CONSTRAINT; Schema: calibrador; Owner: postgres
--

ALTER TABLE ONLY calibrations
    ADD CONSTRAINT calibracao_fk3 FOREIGN KEY (typeincrement_id) REFERENCES typeincrements(id);


--
-- TOC entry 1997 (class 2606 OID 16480)
-- Name: coeficiente_fk; Type: FK CONSTRAINT; Schema: calibrador; Owner: postgres
--

ALTER TABLE ONLY coefficients
    ADD CONSTRAINT coeficiente_fk FOREIGN KEY (equipment_id) REFERENCES equipments(id);


--
-- TOC entry 1991 (class 2606 OID 16419)
-- Name: equipamento_fk; Type: FK CONSTRAINT; Schema: calibrador; Owner: postgres
--

ALTER TABLE ONLY equipments
    ADD CONSTRAINT equipamento_fk FOREIGN KEY (typeequipment_id) REFERENCES typeequipments(id);


--
-- TOC entry 1996 (class 2606 OID 16466)
-- Name: medicao_fk; Type: FK CONSTRAINT; Schema: calibrador; Owner: postgres
--

ALTER TABLE ONLY measurements
    ADD CONSTRAINT medicao_fk FOREIGN KEY (calibration_id) REFERENCES calibrations(id);


--
-- TOC entry 1990 (class 2606 OID 16516)
-- Name: usuario_fk; Type: FK CONSTRAINT; Schema: calibrador; Owner: postgres
--

ALTER TABLE ONLY users
    ADD CONSTRAINT usuario_fk FOREIGN KEY (group_id) REFERENCES groups(id);


-- Completed on 2016-02-19 17:25:24

--
-- PostgreSQL database dump complete
--

