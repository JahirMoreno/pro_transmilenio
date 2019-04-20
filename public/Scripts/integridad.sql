ALTER TABLE RUTA_HORARIO ADD(
	CONSTRAINT RUH_FK_IDR FOREIGN KEY (ID_RUTA) REFERENCES RUTA(ID) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT RUH_FK_IDH FOREIGN KEY (ID_HORARIO) REFERENCES HORARIO(ID) ON DELETE CASCADE ON UPDATE CASCADE
);

ALTER TABLE PARADAS_RUTAS ADD(
	CONSTRAINT PAR_FK_IDR FOREIGN KEY (ID_RUTA) REFERENCES RUTA(ID) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT PAR_FK_IDV FOREIGN KEY (ID_VAGON) REFERENCES VAGON(ID) ON DELETE CASCADE ON UPDATE CASCADE
);

ALTER TABLE PLATAFORMA ADD(
	CONSTRAINT PLA_FK_IDP FOREIGN KEY (ID_PORTAL) REFERENCES PORTAL(ID) ON DELETE CASCADE ON UPDATE CASCADE
);

ALTER TABLE ESTACION ADD(
	CONSTRAINT EST_FK_IDP FOREIGN KEY (ID_PORTAL) REFERENCES PORTAL(ID) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT EST_FK_IDT FOREIGN KEY (ID_TRONCAL) REFERENCES TRONCAL(ID) ON DELETE CASCADE ON UPDATE CASCADE
);

ALTER TABLE VAGON ADD(
	CONSTRAINT VAG_FK_IDE FOREIGN KEY (ID_ESTACION) REFERENCES ESTACION(ID) ON DELETE CASCADE ON UPDATE CASCADE
);

ALTER TABLE EMPRESA_OPERADORA ADD(
	CONSTRAINT EMP_FK_IDE FOREIGN KEY (ID_ESTACION) REFERENCES ESTACION(ID) ON DELETE CASCADE ON UPDATE CASCADE
);
