/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     12/08/2023 20.34.29                          */
/*==============================================================*/


drop table if exists KATEGORI_MODUL;

drop table if exists MODUL;

drop table if exists USERS;

/*==============================================================*/
/* Table: KATEGORI_MODUL                                        */
/*==============================================================*/
create table KATEGORI_MODUL
(
   ID_KTG_MODUL         int not null,
   NAMA_KTG             varchar(50) not null,
   primary key (ID_KTG_MODUL)
);

/*==============================================================*/
/* Table: MODUL                                                 */
/*==============================================================*/
create table MODUL
(
   ID_MODUL             int not null,
   ID_USERS             int not null,
   ID_KTG_MODUL         int not null,
   JUDUL_MODUL          varchar(50) not null,
   GAMBAR_MODUL         longblob not null,
   ISI_MODUL            text not null,
   primary key (ID_MODUL)
);

/*==============================================================*/
/* Table: USERS                                                 */
/*==============================================================*/
create table USERS
(
   ID_USERS             int not null,
   NAMA_USERS           varchar(50) not null,
   NO_TELP_USERS        varchar(30) not null,
   EMAIL_USERS          varchar(100) not null,
   PASSWORD_USERS       varchar(50) not null,
   primary key (ID_USERS)
);

alter table MODUL add constraint FK_DIKELOMPOKKAN foreign key (ID_KTG_MODUL)
      references KATEGORI_MODUL (ID_KTG_MODUL) on delete restrict on update restrict;

alter table MODUL add constraint FK_MENGAKSES foreign key (ID_USERS)
      references USERS (ID_USERS) on delete restrict on update restrict;

